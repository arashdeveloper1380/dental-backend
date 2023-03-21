<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SettingController extends Controller
{
    public function editAbout($key){
        $about = Setting::query()->where(['key' => $key])->first()->value;
        return view('admin.about.index',compact('about'));
    }
    public function UpdateAbout(Request $request, $key){
        $about = Setting::query()->where(['key' => $key])->first();
        if($request->hasFile('image')){
            $image = $this->file_upload($request,'image','images');
            File::delete('uploads/images'. '/' . $about->value[2]);
        }else{
            $image = $about->value[2];
        }
        $value = $about->value = [
            $request->get('name'),
            $request->get('desc'),
            $image,
            $request->get('meta_desc'),
            $request->get('meta_keywords'),
            $request->get('dr_name'),
            $request->get('dr_shogl'),
        ];
        $about->update([$value]);
        return redirect()->back()->with('success','برگه درباره ما با موفقیت ویرایش شد.');
    }

    public function editInfo($key){
        $info = Setting::query()->where(['key' => 'info'])->first()->value;
        return view('admin.info.index',compact('info'));
    }

    public function UpdateInfo(Request $request, $key){
        $info = Setting::query()->where(['key' => $key])->first();
        if($request->hasFile('image')){
            $image = $this->file_upload($request,'image','images');
            File::delete('uploads/images'. '/' . $info->value[2]);
        }else{
            $image = $info->value[2];
        }
        $value = $info->value = [
            $request->get('mobile'),
            $request->get('address'),
            $image,
            $request->get('time')
        ];

        $info->update([$value]);
        return redirect()->back()->with('success','اطلاعات تماس با موفقیت ویرایش شد.');
    }

    public function messages(){
        return view('admin.messages.index',[
            'contact' => Setting::query()->where(['key' => 'contact'])->get(),
        ]);
    }
}
