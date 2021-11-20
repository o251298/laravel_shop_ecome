<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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

    public function edit(){
        $user = Auth::user();
        return view('user.edit', [
            'user' => $user,
        ]);
    }
    public function update(UpdateUserRequest $request){
        $user = Auth::user();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->fio = $request->fio;
        $user->number = $request->number;
        if (!Hash::check($request->password, Auth::user()->password)){
            $user->password = Hash::make($request->password);
        }

        if ($user->save()){
            session()->flash('success', 'Вы успешно обновили данные');
        }
        return redirect()->route('home');
    }
    public function search(Request $request){
        dd($request);
    }

    public function autocomplate(Request $request){
        $search = $request->get('term');
        $result = DB::table('products')
            ->select('name')
            ->where('name', 'like', '%' . $search . '%')
            ->pluck('name');
        return response()->json($result);
    }
}
