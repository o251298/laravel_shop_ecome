<?php

namespace App\Http\Controllers\Site\Order;

use App\Components\LiqPay;
use App\Models\Order;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class OrderViewer extends Controller
{
    public function cart()
    {
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

    public function view($id)
    {
        $order = null;
//         проверка на пользователя заказа
//        $user_id = Auth::user()->id;
//        $condition = ['user_id' => $user_id, 'id' => $id];
//        $order = Order::where($condition)->first();
//        if (empty($order)){
//            $order = null;
//            return redirect()->back();
//        }
        if (!Auth::user()->orders->contains($id)) {
            return redirect()->back();
        }
        $order = Order::findOrFail($id);
        $productsIds = array_keys($order->getProductsToArray());
        $products = Product::withTrashed()->whereIn('id', $productsIds)->get();
        return view('site.order', [
            'order' => $order,
            'products' => $products
        ]);
    }

    public function pay($hash){
        $order = Order::getOrderByHash($hash);
        $payment = new LiqPay($order->id, $order->name . ' ' . $order->products, $order->total);
        $params = $payment->run();
        return view('site.pay', [
            'order' => $order,
            'data' => $params['data'],
            'signature' => $params['signature'],
        ]);
    }

}
