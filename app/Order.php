<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;
use App\Product;

class Order extends Model
{
    const NEW_ORDER = 0;
    const IN_WORK_ORDER = 1;
    const CONFIRM_ORDER = 2;
    const ACTIVE_ORDER = 3;
    const SEND_ORDER = 4;
    const DELIV_ORDER = 5;

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
        return self::countProductInCart();
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


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function getStatusOrder($status){
        $statusInString = null;
        if ($status == self::NEW_ORDER){
            return $statusInString = 'Новый заказ';
        } elseif ($status == self::IN_WORK_ORDER){
            return $statusInString = 'Заказ обрабатывается';
        } elseif ($status == self::CONFIRM_ORDER){
            return $statusInString = 'Заказ подтвержден';
        } elseif ($status == self::ACTIVE_ORDER){
            return $statusInString = 'Заказ активный';
        } elseif ($status == self::SEND_ORDER){
            return $statusInString = 'Заказ отправленный';
        } elseif ($status == self::DELIV_ORDER){
            return $statusInString = 'Заказ доставленный';
        }
    }

    public function getStatusOrdersAttribute(){
        $statusInString = null;
        if ($this->status == self::NEW_ORDER){
            return $statusInString = 'Новый заказ';
        } elseif ($this->status == self::IN_WORK_ORDER){
            return $statusInString = 'Заказ обрабатывается';
        } elseif ($this->status == self::CONFIRM_ORDER){
            return $statusInString = 'Заказ подтвержден';
        } elseif ($this->status == self::ACTIVE_ORDER){
            return $statusInString = 'Заказ активный';
        } elseif ($this->status == self::SEND_ORDER){
            return $statusInString = 'Заказ отправленный';
        } elseif ($this->status == self::DELIV_ORDER){
            return $statusInString = 'Заказ доставленный';
        }
    }


    public function getStatusStringAttribute(){
        return self::getStatusOrder($this->status);
    }
    public static function countProductInCart(){
        $count = 0;
        if (Session::has('order')){
            $order = Session::get('order');
            foreach ($order as $product => $count_in_cart){
                $count = $count + $count_in_cart;
            }
        }
        return $count;
    }
    public static function test($email)
    {
        if ($orders = self::where('email', '=', $email)->first()){
            return $orders;
        } else {
            return false;
        }
    }
}
