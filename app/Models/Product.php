<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    use SoftDeletes;
    protected $guarded = [];

    protected $table = 'products';

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

    public static function exportProduct($table_condition){
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

    public function setNewAttribute($value)
    {
        $this->attributes['new'] = $value === 'on' ? 1 : 0;
    }

    public function setHitAttribute($value)
    {
        $this->attributes['hit'] = $value === 'on' ? 1 : 0;
    }

    public function setRecommendAttribute($value)
    {
        $this->attributes['recommend'] = $value === 'on' ? 1 : 0;
    }

    public function isNew(){
        return $this->new == 1;
    }

    public function isHit(){
        return $this->hit == 1;
    }

    public function isRecommend(){
        return $this->recommend == 1;
    }

    public function isAvailable(){
        return $this->count > 0;
    }
//
//    public function isShow(){
//        if ($this->show == 0)
//    }

    /* Скопы позволяют добавить в запрос $query дополнительные данные */

    public function scopeHit($query){
        return $query->orWhere('hit', 1);
    }

    public function scopeNew($query){
        return $query->orWhere('new', 1);
    }

    public function scopeRecommend($query){
        return $query->orWhere('recommend', 1);
    }




}
