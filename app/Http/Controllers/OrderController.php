<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\CheckoutRequest;

class OrderController extends Controller
{
    public function addProductToCart($id)
    {
        $order = Order::addProductToCart($id);
        return response()->json($order, Response::HTTP_CREATED);
    }

    public function index()
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

    public function order_store(CheckoutRequest $request)
    {
        $order = Order::getOrderInSession();
        $productsInJSON = json_encode($order);
        $order = Order::create([
            'name' => $request->firstname . ' ' . $request->lastname,
            'status' => 0,
            'phone' => $request->phone,
            'email' => $request->email,
            'products' => $productsInJSON,
            'user_id' => Auth::user() ? Auth::user()->id : null,
        ]);
        $logs = [
            'id' => $order->id,
            'name' => $request->firstname . ' ' . $request->lastname,
            'status' => 0,
            'phone' => $request->phone,
            'products' => $productsInJSON,
            'ip' => $request->ip(),
        ];
        Log::channel('order')->info($logs);
        if ($order) {
            Session::forget('order');
            session()->flash('success_create_order', 'Заказ создали');
        } else {
            session()->flash('error_create_order', 'Заказ не создался');
        }

        return redirect()->route('shop');
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

}
