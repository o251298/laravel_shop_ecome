<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    protected $guarded = [];

    public function category(){
        return $this->belongsTo(Category::class);
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
    public static function exportProduct($table_condition){
        $table = $table_condition;
        $column = array('name', 'code', 'price', 'created_at', 'category_id');
        $callback = function () use ($table, $column){
            $file = fopen('php://output', 'w');
            fputcsv($file, $column);
            foreach ($table as $item){
                fputcsv($file, array($item->name, $item->code, $item->price, $item->created_at, $item->category_id));
            };
            fclose($file);
        };
        return $callback;
    }
}
