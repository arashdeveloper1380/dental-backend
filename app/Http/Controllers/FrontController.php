<?php

namespace App\Http\Controllers;

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
        ]);
    }
}
