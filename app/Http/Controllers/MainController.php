<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\ProductFilterRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Session;

class MainController extends Controller
{
    public function index(ProductFilterRequest $request)
    {
        Category::cacheCategory();
        $productsQuery = Product::has('category');
        if ($request->filled('max') && $request->filled('max') !== false){
            $productsQuery->where('price', '<=', $request->max);
        }
        if ($request->filled('min') && $request->filled('min') !== false){
            $productsQuery->where('price', '>=', $request->min);
        }

        $conditions = ['hit', 'new', 'recommend'];
        foreach ($conditions as $field){
            if ($request->has($field)){
                $productsQuery->$field();
            }
        }
        return view('site.index', [
            'products' => $productsQuery->paginate(9)->withPath("?" . $request->getQueryString()),
            'title' => "MAIN"
        ]);
    }

    public function view($id)
    {

        $product = Product::findOrFail($id);
        if(!$product->category_id){
            return redirect()->back();
        }
        return view('site.product', [
            'title' => "MAIN",
            'product' => $product
        ]);
    }

    public function category(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        return view('site.category', [
            'title' => "MAIN",
            'category' => $category
        ]);
    }

//    public function local(Request $request){
//        session(['my_local' => $request->input('local')]);
//        return redirect()->back();
//    }

    public function local($lang){
        $lang = strtolower($lang);

        if(($lang === 'ru') || ($lang === 'en')){
            $lang = $lang;
        } else {
            $lang = 'en';
        }
        session(['my_local' => $lang]);
        return redirect()->back();
    }

    public function search(Request $request){
        $productsQuery = Product::query();
        $productsQuery->where('name', 'like', $request->search);
        if ($request->filled('max')){
            $productsQuery->where('price', '<=', $request->max);
        }
        if ($request->filled('min')){
            $productsQuery->where('price', '>=', $request->min);
        }
        $conditions = ['hit', 'new', 'recommend'];
        foreach ($conditions as $field){
            if ($request->has($field)){
                $productsQuery->$field();
            }
        }
        if ($request->search_hidden == null){
            $request = $request->except('search_hidden');
        }


        return view('site.search', [
            'products' => $productsQuery->paginate(9)->withPath("?" . $request->getQueryString())
        ]);
    }
}
