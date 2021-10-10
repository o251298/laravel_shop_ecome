<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

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
}
