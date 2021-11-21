<?php

namespace App\Http\Controllers\Site\Order;

use App\Components\SmsProvider;
use App\Http\Requests\CheckoutRequest;
use App\Models\Delivery;
use App\Models\Order;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class OrderRepository extends Controller
{
    public function save(CheckoutRequest $request)
    {
        $order = Order::getOrderInSession();
        $productInOrder = Order::getProductFromOrder($order);
        $total = Order::SumProduct($productInOrder, $order);
        $productsInJSON = json_encode($order);
        $order = Order::create([
            'name' => $request->firstname . ' ' . $request->lastname,
            'status' => 0,
            'phone' => $request->phone,
            'email' => $request->email,
            'products' => $productsInJSON,
            'total' => $total,
            'hash' => md5(time() . $request->_token),
            'user_id' => Auth::user() ? Auth::user()->id : null,
        ]);
        $hash = $order->hash;
        $delivery = Delivery::create([
            'order_id' => $order->id,
            'present_city' => $request->present_city,
            'description' => $request->description,
            'delivery_city' => $request->delivery_city,
        ]);
        $logs = [
            'id' => $order->id,
            'name' => $request->firstname . ' ' . $request->lastname,
            'status' => 0,
            'phone' => $request->phone,
            'products' => $productsInJSON,
            'ip' => $request->ip(),
        ];

        $text = "Добрый день! Вы успешно сделали заказ на сумму: $total грн. Адрес доставки: $request->present_city - $request->description. Статус Вашего заказа: $order->status_orders.";
        Log::channel('order')->info($logs);
        $sms = new SmsProvider($text, "$request->phone");
        $res = $sms->sendMessage();
        Log::channel('sms')->info($res);


        if ($order) {
            Session::forget('order');
            session()->flash('success_create_order', 'Заказ создали');
        } else {
            session()->flash('error_create_order', 'Заказ не создался');
        }
        return redirect()->route('order.pay', ['hash' => $hash]);
    }


}
