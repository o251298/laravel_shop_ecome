<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('site.index', [
            'title' => "MAIN"
        ]);
    }
    public function view($id)
    {
        $product = Product::findOrFail($id);
        return view('site.product', [
            'title' => "MAIN",
            'product' => $product
        ]);
    }
    public function category($id)
    {
        $category = Category::findOrFail($id);
        return view('site.category', [
            'title' => "MAIN",
            'category' => $category
        ]);
    }
}
