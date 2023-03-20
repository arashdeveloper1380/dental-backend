<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Setting;
use App\Models\Slider;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        return view('home.index',[
            'info'      => Setting::query()->where(['key' => 'info'])->first()->value,
            'about'     => Setting::query()->where(['key' => 'about'])->first()->value,
            'slider'    => Slider::orderByDesc('created_at')->get(),
            'blog'      => Blog::with('comments')->orderByDesc('created_at')->get(),
        ]);
    }

    public function single($slug){
        return view('home.single',[
            'info'      => Setting::query()->where(['key' => 'info'])->first()->value,
            'about'     => Setting::query()->where(['key' => 'about'])->first()->value,
            'blog'      => Blog::with('comments','category')->where('title_en' ,$slug)->first(),
            'otherBlog' => Blog::query()->where('title_en', '!=', $slug)->get(),
            'category'  => Category::select('name','name_en')->get(),
            'comment'   => Comment::with('blogs')->where('status',1)->get(),
        ]);
    }

    public function storeComment(Request $request){
        Comment::create([
            'name'      => $request->get('name'),
            'mobile'    => $request->get('mobile'),
            'comment'   => $request->get('comment'),
            'blog_id'   => $request->get('blog_id'),
            'status'    => 0
        ]);
        return redirect()->back()->with('success','نظر شما با موفقیت ثبت شد بعد از تایید دکتر نمایش خواهیم داد!');
    }
}