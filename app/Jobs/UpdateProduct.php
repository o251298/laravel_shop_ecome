<?php

namespace App\Jobs;

use App\Models\Product;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Log;

class UpdateProduct implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $arrayProduct;
    protected $xml;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($path, $arrayProduct)
    {
        $this->xml = (string) $path;
        $this->arrayProduct = $arrayProduct;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $xml = simplexml_load_file($this->xml) or die('error parse product');
        // Добавить проверку на валидность

        foreach ($xml->shop->offers->offer as $offer) {
            $hash_file = json_encode($offer);
            $name = strip_tags((string)$offer->name);
            $offer_id = (integer)$offer['id'];
            $category_price_id = (integer)$offer->categoryId;
            $description = strip_tags((string)$offer->description);
            $price = (float) $offer->price;
            $image = (string)$offer->picture[0];
            $availability = (integer) $offer->stock_quantity;
            $hash = hash('md5', $hash_file);
            // очередь или тут или при создании этого задания

            if ($this->arrayProduct[$offer_id] !== $hash) {
                $product = Product::query()->where('offer_id', $offer_id)->first();
                // обработчик добавить
                $product->category_id = 0;
                $product->name = $name;
                $product->code = 3212;
                $product->description = $description;
                $product->image = $image;
                $product->price = $price;
                $product->count = $availability;
                $product->offer_id = $offer_id;
                $product->category_id_price = $category_price_id;
                $product->hash = $hash;
                $product->save();
                Log::channel('parser_product')->info($product);
            }
        }
    }
}
