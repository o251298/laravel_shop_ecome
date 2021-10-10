<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;
use App\Product;

class Order extends Model
{

    protected $guarded = [];
    public static function addProductToCart($id)
    {
        $productsInCart = array();
        if (Session::has('order')) {
            $productsInCart = Session::get('order');
        }
        if (array_key_exists($id, $productsInCart)) {
            $productsInCart[$id]++;
        } else {
            $productsInCart[$id] = 1;
        }
        Session::put('order', $productsInCart);
        return true;
    }


    public function SumProductInOrder($price, $count, $coupon = null)
    {
        if ($coupon !== null) {
            $sum = ($price * $count) - $coupon;
        } else {
            $sum = $price * $count;
        }
        return $sum;
    }


    public static function SumProduct($products, $order, $coupon = null)
    {
        if (isset($products) && isset($order)){
            $sum = false;
            foreach ($products as $product){
                $sum += $product->price * $order[$product->id];
            }
            if ($coupon !== null){
                $sum -= $coupon;
            }
            return $sum;
        }

    }

    public static function getProductFromOrder($order){
        $productInOrder = null;
        if (!empty($order)){
            $product = array_keys($order);
            $productInOrder = Product::find($product);
        }
        return $productInOrder;
    }

    public static function getOrderInSession(){
        $order = null;
        if (Session::has('order')){
            $order = Session::get('order');
        }
        return $order;
    }

}
