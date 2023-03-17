<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\blogRequest;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        return view('admin.blog.index',[
            'blog'      => Blog::paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        return view('admin.blog.create',['category'  => Category::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(blogRequest $request) {
        if($request->hasFile('image')){
            $image = $this->file_upload($request,'image','images');
        }
        Blog::create([
            'title'        => $request->get('title'),
            'title_en'     => Str::slug($request->get('title_en')),
            'desc'         => $request->get('desc'),
            'image'        => $image,
            'category_id'  => $request->get('category_id'),
            'meta_desc'    => $request->get('meta_desc'),
            'meta_keywords'=> $request->get('meta_keywords')
        ]);
        return redirect()->route('blog.index')->with('success','مقاله شما با موفقیت ثبت شد!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.blog.edit',['blog' => Blog::findOrFail($id),'category'  => Category::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(blogRequest $request, string $id)
    {
        $blog = Blog::find($id);
        if($request->hasFile('image')){
                $image = $this->file_upload($request,'image','images');
                File::delete('uploads/images'. '/' . $blog->image);
        }else{
            $image = $blog->image;
        }
        $blog->update([
            'title'        => $request->get('title'),
            'title_en'     => Str::slug($request->get('title_en')),
            'desc'         => $request->get('desc'),
            'image'        => $image,
            'category_id'  => $request->get('category_id'),
            'meta_desc'    => $request->get('meta_desc'),
            'meta_keywords'=> $request->get('meta_keywords')
        ]);
        return redirect()->route('blog.index')->with('success','مقاله شما با موفقیت ویرایش شد!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blog = Blog::findOrFail($id);
        if(!empty($blog->image) && file_exists('uploads/images'. '/' . $blog->image)){
            unlink('uploads/images'. '/' . $blog->image);
        }
        $blog->delete();
        return redirect()->route('blog.index')->with('success','مقاله شما با موفقیت ویرایش شد!');
    }
}
