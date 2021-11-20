<?php


namespace App\Components;

use App\Jobs\SaveCategory;
use App\Jobs\SaveProduct;
use App\Jobs\UpdateCategory;
use App\Jobs\UpdateProduct;
use App\Models\Category;
use App\Models\Product;
use App\Models\Xml;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class XmlParser
{
    private $xmlUrl;
    protected $path;
    public $result = false;

    public function __construct($xmlUrl)
    // получаем ссылку на xml обьект
    {
        $this->xmlUrl = (string) $xmlUrl;
        $this->path = Storage::disk('public')->path('xml_files/'.$this->xmlUrl);
    }

    public function getFileHash()
     // получаем хеш xml обьекта, если его нету - false | null
    {
        if (Storage::disk('public')->exists('/xml_files/' . $this->xmlUrl)) {
            $xml = Storage::disk('public')->get('/xml_files/' . $this->xmlUrl);
            return hash('md5', $xml);
        } else {
            return false;
        }
    }

    private function checkHash()
    {
        // Проверка на едентичность хешов xml обьекта
        $error = false;
        $sourceData = Xml::getFileHashXML($this->xmlUrl);
        if ($sourceData['hash'] == $this->getFileHash()) {
            $error[] = "Хеши совпадают!";
        }
        return $error;
    }

    private function parseProduct($xml)
    {
        // Создаем задание, для сохранения продукта
        SaveProduct::dispatch($this->path, $xml);
        return true;
    }

    private function parseCategory($xml)
    {
        // Создаем задание, для сохранения категории
        SaveCategory::dispatch($this->path, $xml);
        return true;
    }

    private function checkOfferHash($arrayProduct = null)
    {
        $arrayProduct = Product::getProductForParse();
        $updateProducts = array();
        $xml = simplexml_load_file($this->path) or die('error parser');
        foreach ($xml->shop->offers->offer as $offer) {
            $hash_file = json_encode($offer);
            $offer_id = (string)$offer['id'];
            $hash = hash('md5', $hash_file);
            if ($arrayProduct[$offer_id] !== $hash) {
                $updateProducts[] = $offer_id;
            }
        }
        if (count($updateProducts) > 0){
            UpdateProduct::dispatch($this->path, $arrayProduct);
        }
        return $updateProducts;
    }

    private function checkCategoryHash($arrayCategory = null)
    {
        $arrayCategory = Category::getCategoryForParse();
        $xml = simplexml_load_file($this->path) or die('error parser');
        $newDataCategory = array();
        foreach ($xml->shop->categories->category as $category_price) {
            $offer_id_category = (string)$category_price['id'];
            $hash = json_encode($category_price);
            $hash = hash('md5', $hash);
            if ($arrayCategory[$offer_id_category] !== $hash) {
                $newDataCategory[] = $offer_id_category;
            }
        }
        if (count($newDataCategory) > 0) {
            UpdateCategory::dispatch($this->path, $arrayCategory);
        }
        return $newDataCategory;
    }

    public function firstParse()
    {
        $xml = Xml::create([
            'hash' => $this->getFileHash(),
            'count_product' => 111,
            'link_xml' => $this->xmlUrl,
        ]);

        Log::channel('parser_xml')->info($xml);
        if (($this->parseProduct($xml->id)) && ($this->parseCategory($xml->id))){
            $this->result = "Вы добавили новый источник";
        }
        return $this->result;
    }

    public function updateProductData(){
        $updateProduct = $this->checkOfferHash(Product::getProductForParse());
        return $updateProduct;
    }

    public function updateCategoryData(){
        $updateCategory = $this->checkCategoryHash(Category::getCategoryForParse());
        return $updateCategory;
    }


    public function run()
    {
        if ($this->getFileHash()) {
            // если мы успешно получили хеш файла, работаем
            $sourceData = Xml::getFileHashXML($this->xmlUrl); // получаем хеш файла с базы
            if (($sourceData != null) && ($sourceData['link_xml'] == $this->xmlUrl)) { // если хеш файла есть в базе то выводим смс, что источник добавлен
                if ($this->checkHash() == false) {
                    $xml = Xml::query()->where('link_xml', $this->xmlUrl)->first();
                    $xml->hash = $this->getFileHash();
                    $xml->save();

                    $updateData = $this->updateProductData();
                    $updateCategotyData = $this->updateCategoryData();

                    if (!empty($updateData) && !empty($updateCategotyData)) {
                        $str_product = '';
                        foreach ($updateData as $product) {
                            $str_product .= $product . ' ';
                        }
                        $str_category = '';
                        foreach ($updateCategotyData as $category) {
                            $str_category .= $category . ' ';
                        }
                        $this->result = "Были обновления в такие продукты: " . $str_product . '; Категории :' . $str_category;

                    } elseif (!empty($updateData) && empty($updateCategotyData)){
                        $str_product = '';
                        foreach ($updateData as $product) {
                            $str_product .= $product . ' ';
                        }
                        $this->result = "Были обновления в такие продукты: " . $str_product;

                    } elseif (empty($updateData) && !empty($updateCategotyData)){
                        $str_category = '';
                        foreach ($updateCategotyData as $category) {
                            $str_category .= $category . ' ';
                        }
                        $this->result = "Были обновления в такие категории: " . $str_category;
                    }
                } else {
                    $this->result = "Хеш прайса совпадает с предыдущим!";
                }
            } else {
                $this->firstParse();
            }
        }
        return $this->result;
    }
}


