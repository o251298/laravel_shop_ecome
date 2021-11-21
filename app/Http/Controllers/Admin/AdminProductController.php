<?php

namespace App\Http\Controllers\Admin;

use App\Components\SmsProvider;
use App\Components\XmlParser;
use App\Http\Requests\ProductRequest;
use App\Jobs\UpdateProductStatus;
use App\Models\Category;
use App\Models\Product;
use App\Models\Xml;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use function Composer\Autoload\includeFile;

class AdminProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {



        $product = Product::paginate(50);

        return view('admin.product.index', [
            'product' => $product,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Cache::get('category');
        $array = ['hit' => "HIT", 'new' => "NEW", 'recommend' => "RECOMMEND"];
        return view('admin.product.create', [
            'category' => $category,
            'array' => $array,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {

        $path = $request->file('image')->store('products');
        $params = $request->all();
        $array = ['hit' => "HIT", 'new' => "NEW", 'recommend' => "RECOMMEND"];
        $params['image'] = $path;
        if ($product = Product::create($params)){
            session()->flash('create', 'Вы создали новый товар');
            return redirect()->route('admin.product.show', $product->id);
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Cache::get('category');
        $product = Product::findOrFail($id);
        $array = ['hit' => "HIT", 'new' => "NEW", 'recommend' => "RECOMMEND"];
        return view('admin.product.show', [
            'product' => $product,
            'array' =>$array,
            'category' => $category
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, Product $product)
    {
        $params = $request->all();
        $array = ['hit' => "HIT", 'new' => "NEW", 'recommend' => "RECOMMEND"];
        foreach ($array as $fieldName => $title){
            if (!isset($params[$fieldName])){
                $params[$fieldName] = 0;
            }
        }
        if ($request->image !== null){
            $path = $request->file('image')->store('product');
            $params['image'] = $path;
            $product->update($params);
        } else {
            $product->update($params);
        }
        session()->flash('update', 'Вы обновили товар');
        return redirect()->route('admin.product.show', $product->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        if (Storage::disk('public')->exists($product->image)){
            Storage::delete($product->image);
        }
        $product->delete();
        session()->flash('success_destroy', 'Товар успешно удален');
        return redirect()->back();
    }


    public function export(){
        $csv = Product::exportProduct(Product::all());
        $filename = 'products-' . date('Y-m-d') . '-export.csv';
        $headers = array(
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename=' . $filename,
        );
        return response()->stream($csv,200, $headers);
    }

    public function selectCategory(Request $request){
        $productsQuery = Product::query();
        if ($request->category_id_price !== null){
            $productsQuery->where('category_id_price', 'like', $request->category_id_price);
        }
        $category = Cache::get('category');
        $ec_category = Category::query();

        return view('admin.product.select_category', [
            'category' => $category,
            'ec_category' => $ec_category->mega()->get(),
            'products' => $productsQuery->unactive()->paginate(100)->withPath("?" . $request->getQueryString())
        ]);
    }

    public function changeCategory(Request $request){
        // очередь на изменение товаров
        if ($request->product_id !== null){
            UpdateProductStatus::dispatch($request->product_id, $request->category_id_price);
            session()->flash('success', 'Товары ушли в очередь на обновление, нужно подождать некоторое время.');
        } else {
            session()->flash('error', 'Ошибка добавления в очередь');
        }
        return redirect()->back();
    }

    public function elasticsearch(Request $request){
        $client  = @$_SERVER['HTTP_CLIENT_IP'];
        $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
        $remote  = @$_SERVER['REMOTE_ADDR'];

        if(filter_var($client, FILTER_VALIDATE_IP)) $ip = $client;
        elseif(filter_var($forward, FILTER_VALIDATE_IP)) $ip = $forward;
        else $ip = $remote;

        $my_current_ip = exec("ifconfig | grep -Eo 'inet (addr:)?([0-9]*\.){3}[0-9]*' | grep -Eo '([0-9]*\.){3}[0-9]*' | grep -v '127.0.0.1'");

        dd($_SERVER['HTTP_REFERER']);

        return $value;
        dd($_SERVER['HTTP_X_FORWARDED_FOR']);
        $api_url = 'http://ipwhois.app/json/185.38.209.66';
        $json_data = file_get_contents($api_url);
        dd($json_data);
    }

}
