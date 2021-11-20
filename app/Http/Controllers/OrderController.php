<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class OrderController extends Controller
{
    public function addProductToCart($id)
    {
        $order = Order::addProductToCart($id);
        return response()->json($order, Response::HTTP_CREATED);
    }

    public function quickViewCart()
    {
        $order = Session::get('order');
        $product_in_order = Product::find(array_keys($order));
        return response()->json($product_in_order, '200');
    }

    public function clearCart()
    {
        if (Session::has('order')) {
            Session::forget('order');
            session()->flash('success_unset_cart', 'Корзина пустая');
        }
        return redirect()->route('shop');
    }

    public function import()
    {
        $user = Auth::user();
        $user->fio = 'test';
        $user->number = 123123;
        $user->save();
        return redirect()->back();
    }

    public function cancelOrder($id){
        if (!Auth::user()->orders->contains($id)) {
            return redirect()->back();
        }
        $order = Order::findOrFail($id);
        $order->status = Order::CANCEL_ORDER;
        $order->save();
        return redirect()->back();
    }

}
