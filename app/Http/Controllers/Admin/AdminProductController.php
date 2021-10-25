<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\File;
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
}
