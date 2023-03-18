<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\sliderRequest;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class sliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.slider.index',['slider' => Slider::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(sliderRequest $request)
    {
        $image = $this->file_upload($request,'image','images');
        Slider::create([
            'title' => $request->get('title'),
            'desc'  => $request->get('desc'),
            'image' => $image,
            'link'  => $request->get('link')
        ]);
        return redirect()->route('slider.index')->with('success','اسلایدر شما با موفقیت ویرایش شد!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.slider.edit',['slider' => Slider::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $slider = Slider::find($id);
        if($request->hasFile('image')){
            $image = $this->file_upload($request,'image','images');
            File::delete('uploads/images'. '/' . $slider->image);
        }else{
            $image = $slider->image;
        }
        $slider->update([
            'title' => $request->get('title'),
            'desc'  => $request->get('desc'),
            'image' => $image,
            'link'  => $request->get('link')
        ]);
        return redirect()->route('slider.index')->with('success','اسلایدر شما با موفقیت ویرایش شد!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $slider = Slider::findOrFail($id);
        if(!empty($slider->image) && file_exists('uploads/images'. '/' . $slider->image)){
            unlink('uploads/images'. '/' . $slider->image);
        }
        $slider->delete();
        return redirect()->route('slider.index')->with('success','اسلایدر شما با موفقیت ویرایش شد!');
    }
}
