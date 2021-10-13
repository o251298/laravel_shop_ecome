<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use App\Http\Requests\CategoryRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Category::cacheCategory();
        $category = Cache::get('category');
        return view('admin.category.index', [
            'category' => $category
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        $path = $request->file('image')->store('category');
        $params = $request->all();
        $params['image'] = $path;
        $category = Category::create($params);
        if ($category){
            session()->flash('create', 'Вы создали новую категорию');
            return redirect()->route('admin.category.show', $category->id);
        }
        return redirect()->route('admin.category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.category.view', [
            'category' => $category
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, Category $category)
    {
        if ($request->image !== null){
            $path = $request->file('image')->store('category');
            $params = $request->all();
            $params['image'] = $path;
            $category->update($params);
        } else {
            $params = $request->all();
            $category->update($params);
        }
        session()->flash('update', 'Вы обновили категорию');
        return redirect()->route('admin.category.show', $category->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        session()->flash('success_destroy', 'Категория успешно удалена');
        return redirect()->back();
    }
    public function export(){
        $csv = Category::exportCategory(Category::all());
        $filename = 'category-' . date('Y-m-d') . '-export.csv';
        $headers = array(
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename=' . $filename,
        );
        return response()->stream($csv,200, $headers);
    }
}
