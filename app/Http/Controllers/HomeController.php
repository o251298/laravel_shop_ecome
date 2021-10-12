<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $user = Auth::user();
        $message = false;
        if ($orders = Order::test($user->email)){
            $message = $orders;
        }
        return view('home', [
            'user' => $user,
            'message' => $message
        ]);
    }
}
