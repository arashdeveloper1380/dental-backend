<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Gallery;
use App\Models\Nobat;
use App\Models\nobatGiri;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontController extends Controller
{

    public function login(){
        return view('home.login',[
            'info'      => Setting::query()->where(['key' => 'info'])->first()->value,
            'about'     => Setting::query()->where(['key' => 'about'])->first()->value,
        ]);
    }

    public function register(){
        return view('home.register',[
            'info'      => Setting::query()->where(['key' => 'info'])->first()->value,
            'about'     => Setting::query()->where(['key' => 'about'])->first()->value,
        ]);
    }

    public function logout(){
        Auth::login();
    }

    public function loginStore(Request $request){
        $user = User::query()->where([ 'email' => $request->get('mobile'), 'password' => $request->get('password')])->first();
        if($user){
            Auth::login($user);
            return redirect()->route('panel');
        }
    }

    public function registerStore(Request $request){
        $user = User::create([
            'name'      => $request->get('name'),
            'email'     => $request->get('mobile'),
            'password'  => $request->get('password'),
        ]);
        if($user){
            Auth::login($user);
            return redirect()->route('panel');
        }
    }

    public function panel(){
        if(Auth::check()){
            return view('home.panel',[
                'info'      => Setting::query()->where(['key' => 'info'])->first()->value,
                'about'     => Setting::query()->where(['key' => 'about'])->first()->value,
                'nobat'     => Nobat::all(),
                'userExsist'=> nobatGiri::where(['mobile' => Auth::user()->email])->first(),
            ]);
        }
    }

    public function nobatgiri(Request $request){
        nobatGiri::create([
            'username'  => $request->get('username'),
            'mobile'    => $request->get('mobile'),
            'nobat_id'  => [
                $request->get('date'),
                $request->get('time'),
            ],
        ]);
        Nobat::query()->where(['id' => $request->get('id')])->delete();
        return redirect()->back()->with('success','نوبت شما با موفقیت ثبت شد...');
    }

    public function index(){
        return view('home.index',[
            'info'      => Setting::query()->where(['key' => 'info'])->first()->value,
            'about'     => Setting::query()->where(['key' => 'about'])->first()->value,
            'slider'    => Slider::orderByDesc('created_at')->get(),
            'blog'      => Blog::with('comments')->orderByDesc('created_at')->take('3')->get(),
            'service'   => Setting::query()->where(['key' => 'service'])->get(),
            'services'  => Setting::query()->where(['key' => 'service'])->take('3')->get(),
            'personal'   => Setting::query()->where(['key' => 'personal'])->get(),
        ]);
    }

    public function single($slug){
        return view('home.single',[
            'info'          => Setting::query()->where(['key' => 'info'])->first()->value,
            'about'         => Setting::query()->where(['key' => 'about'])->first()->value,
            'blog'          => Blog::with('comments','category')->where('title_en' ,$slug)->first(),
            'otherBlog'     => Blog::query()->where('title_en', '!=', $slug)->get(),
            'category'      => Category::select('name','name_en')->get(),
            'comment'       => Comment::with('blogs')->where('status',1)->get(),
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

    public function about(){
        return view('home.about',[
            'info'          => Setting::query()->where(['key' => 'info'])->first()->value,
            'about'         => Setting::query()->where(['key' => 'about'])->first()->value,
        ]);
    }

    public function gallery(){
        return view('home.gallery',[
            'info'      => Setting::query()->where(['key' => 'info'])->first()->value,
            'about'     => Setting::query()->where(['key' => 'about'])->first()->value,
            'gallery'   => Gallery::orderByDesc('created_at')->paginate(10),
        ]);
    }

    public function blogs(){
        return view('home.blogs',[
            'info'   => Setting::query()->where(['key' => 'info'])->first()->value,
            'blogs'  => Blog::with('comments')->paginate(10),
            'about'     => Setting::query()->where(['key' => 'about'])->first()->value,
        ]);
    }

    public function contact(){
        return view('home.contact',[
            'info'      => Setting::query()->where(['key' => 'info'])->first()->value,
            'about'     => Setting::query()->where(['key' => 'about'])->first()->value,
        ]);
    }

    public function contactStore(Request $request){
        Setting::create([
            'key'   => 'contact',
            'value' => [
                $request->get('name'),
                $request->get('mobile'),
                $request->get('subject'),
                $request->get('message'),
            ],
        ]);
        return redirect()->back()->with('success','پیام شما با موفقیت به دکتر ارسال شد...!');
    }

    public function categoryBlog($slug){
        return view('home.category',[
            'info'      => Setting::query()->where(['key' => 'info'])->first()->value,
            'about'     => Setting::query()->where(['key' => 'about'])->first()->value,
            'categoryBlog' => Category::with('blog')->where(['name_en' => $slug])->first(),
        ]);
    }
}
