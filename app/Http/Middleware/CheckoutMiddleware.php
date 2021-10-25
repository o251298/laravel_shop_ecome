<?php

namespace App\Http\Middleware;

use App\Models\Order;
use Closure;

class CheckoutMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!empty(Order::getOrderInSession())){
            return $next($request);
        } else {
            session()->flash('empty_cart', 'Ваша корзина пустая, невозможно перейти на страницу заказа');
            return redirect()->route('shop');
        }
    }
}
