<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;

class Category extends Model
{
    protected $guarded = [];

    # Кеширование категорий
    public static function cacheCategory(){
        if (!Cache::has('category')){
            $categoryList = self::all();
            Cache::put('category', $categoryList, 60*60);
        }
        return true;
    }

    public function products(){
        return $this->hasMany(Product::class);
    }

    public function getImage(){
        $url_image = '';
        if (Storage::disk('public')->exists($this->image)){
            $url_image = asset('/storage/' . $this->image);
        } else {
            $url_image = $this->image;
        }
        return $url_image;
    }

    // Выгрузка категории
    /*
     * 1 получить данные
     * 2 получить название колонок
     * 3 вызов анонимной функции с передачей 2 х параметров
     * 4 создать файл
     * 5 вставить в файл колонки
     * 6 пройтись по всем елементам массива
     * 7 сохранить цикл в файле
     * 8 закрыть файл
     * 9 вернуть функцию
     *
     */
    public static function exportCategory($table_condition){
        $table = $table_condition;
        $colums = array('name', 'code', 'created_at');
        $callback = function () use ($table, $colums){
            $file = fopen('php://output', 'w');
            fputcsv($file, $colums);
            foreach ($table as $item) {
                fputcsv($file, array($item->name, $item->code, $item->created_at));
            };
            fclose($file);
        };
        return $callback;
    }

    public static function getCategoryForParse(){
        $category = self::query()->get()->pluck('hash', 'offer_id')->toArray();
        return $category;
    }
}
