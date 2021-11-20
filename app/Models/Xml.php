<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Xml extends Model
{
    use SoftDeletes;
    protected $guarded = [];
    public static function getFileHashXML($xml){
        $xmlData = null;
        $xml = (string) $xml;
        $xmlQuery = self::query();
        $xmlData = $xmlQuery->where('link_xml', $xml)->first();
        if ($xmlData !== null){
            $xmlData->toArray();
        }
        return $xmlData;
    }

    public static function saveFile($file){
        $path = $file->store('xml_files');
        return $path;
    }

    public function products(){
        return $this->hasMany(Product::class, 'source', 'id');
    }

    public function categories(){
        return $this->hasMany(Category::class, 'source', 'id');
    }
    /*
     * 1. Загружаем файл в стор +
     * 2. После успешной загрузки - выводим имя файла и ссылку на парсинг +
     * 3. При первом парсинге происходит запись в бд +
     * 4. Выводить все доступные прайсы +
     */
}
