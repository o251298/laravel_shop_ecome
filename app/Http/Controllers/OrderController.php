<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\CheckoutRequest;

class OrderController extends Controller
{
    public function addProductToCart($id){
        Order::addProductToCart($id);
    }

    public function index(){
        $order = Order::getOrderInSession();
        $productInOrder = Order::getProductFromOrder($order);
        $orderSum = new Order();
        return view('site.cart', [
            'productInOrder' => $productInOrder,
            'orderItems' => $order,
            'orderSum' => $orderSum,
            'subSum' => Order::SumProduct($productInOrder, $order)
        ]);
    }

    public function checkout()
    {
        $order = Order::getOrderInSession();
        $productInOrder = Order::getProductFromOrder($order);
        $orderSum = new Order();
        return view('site.checkout', [
            'productInOrder' => $productInOrder,
            'orderItems' => $order,
            'orderSum' => $orderSum,
            'subSum' => Order::SumProduct($productInOrder, $order)
        ]);
    }

    public function order_store(CheckoutRequest $request)
    {
        $order = Order::getOrderInSession();
        $productsInJSON = json_encode($order);
        $order = Order::create([
            'name' => $request->firstname . ' '. $request->lastname,
            'status' => 0,
            'phone' => $request->phone,
            'products' => $productsInJSON,
        ]);
        $logs = [
            'id' => $order->id,
            'name' => $request->firstname . ' '. $request->lastname,
            'status' => 0,
            'phone' => $request->phone,
            'products' => $productsInJSON,
        ];
        Log::channel('order')->debug($logs);
        if ($order){
            Session::forget('order');
        }
        return redirect()->route('shop');
    }
}
