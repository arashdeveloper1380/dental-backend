<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.category.index',['category' => Category::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        Category::create([
            'name'          => $request->get('name'),
            'name_en'       => $request->get('name_en'),
            'meta_desc'     => $request->get('meta_desc'),
            'meta_keywords' => $request->get('meta_keywords'),
        ]);
        return redirect()->route('categories.index')->with('success','دسته با موفقیت ثبت شد');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.category.edit',['category'=>Category::query()->where(['id' => $id])->first()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $category = Category::find($id);
        $category->update([
            'name'          => $request->get('name'),
            'name_en'       => $request->get('name_en'),
            'meta_desc'     => $request->get('meta_desc'),
            'meta_keywords' => $request->get('meta_keywords'),
        ]);
        return redirect()->route('categories.index')->with('success','دسته با موفقیت ویرایش شد');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Category::find($id)->delete();
        return redirect()->route('categories.index')->with('success','دسته با موفقیت حذف شد');
    }
}
