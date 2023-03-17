<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function editAbout($key){
        $about = Setting::query()->where(['key' => $key])->first()->value;
        return view('admin.about.index',compact('about'));
    }
    public function UpdateAbout(Request $request, $key){
        $about = Setting::query()->where(['key' => $key])->first();
        $image = $this->file_upload($request,'image','images');
        $value = $about->value = [
            $request->get('name'),
            $request->get('desc'),
            $image,
            $request->get('meta_desc'),
            $request->get('meta_keywords'),
        ];
        $about->update([$value]);
        return redirect()->back()->with('success','برگه درباره ما با موفقیت ویرایش شد.');
    }

    public function editInfo($key){
        $info = Setting::query()->where(['key' => 'info'])->first()->value;
        return view('admin.info.index',compact('info'));
    }

    public function UpdateInfo($key){

    }
}
