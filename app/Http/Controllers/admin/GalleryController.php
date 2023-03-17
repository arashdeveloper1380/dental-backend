<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\galleryRequest;
use App\Models\Blog;
use App\Models\Gallery;
use http\Env\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class GalleryController extends Controller
{
    public function index(){
        return view('admin.gallery.index',['gallery' => Gallery::all()]);
    }

    public function create(){
        return view('admin.gallery.create');
    }

    public function store(galleryRequest $request){
        if($request->hasFile('image')){
            $image = $this->file_upload($request,'image','images');
        }
        Gallery::create([
            'title'     => $request->get('title'),
            'desc'      => $request->get('desc'),
            'link_insta'=> $request->get('link_insta'),
            'image'     => $image,
        ]);
        return redirect()->route('gallery.index')->with('success','گالری شما با موفقیت ثبت شد!');
    }

    public function edit($id){
        return view('admin.gallery.edit',['gallery' => Gallery::find($id)]);
    }

    public function update(galleryRequest $request, $id){
        $gallery = Gallery::find($id);
        if($request->hasFile('image')){
            $image = $this->file_upload($request,'image','images');
            File::delete('uploads/images'. '/' . $gallery->image);
        }else{
            $image = $gallery->image;
        }
        $gallery->update([
            'title'     => $request->get('title'),
            'desc'      => $request->get('desc'),
            'link_insta'=> $request->get('link_insta'),
            'image'     => $image,
        ]);
        return redirect()->route('gallery.index')->with('success','گالری شما با موفقیت ویرایش شد!');
    }

    public function destroy($id){
        $gallery = Gallery::find($id);
        if(!empty($gallery->image) && file_exists('uploads/images'. '/' . $gallery->image)){
            unlink('uploads/images'. '/' . $gallery->image);
        }
        $gallery->delete();
        return redirect()->route('gallery.index')->with('success','گالری شما با موفقیت ویرایش شد!');
    }
}
