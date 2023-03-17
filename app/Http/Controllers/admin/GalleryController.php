<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

class GalleryController extends Controller
{
    public function index(){
        return view('admin.gallery.index');
    }

    public function create(){
        return view('admin.gallery.create');
    }

    public function store(){

    }

    public function edit(){

    }

    public function update(){

    }

    public function destroy(){

    }
}
