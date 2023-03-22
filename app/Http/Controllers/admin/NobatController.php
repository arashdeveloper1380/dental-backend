<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Nobat;
use Carbon\Carbon;
use Hekmatinasser\Verta\Verta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NobatController extends Controller
{
    public function index(){
        $expireDate = Nobat::query()->where('date', '<' ,Verta::now()->format('Y/m/d'))->delete();
        if($expireDate){
            return redirect()->route('nobat.index')->with('success','وقت نمی تواند قبل از امروز باشد!');
        }
        return view('admin.nobat.index',['nobat' => Nobat::all()]);
    }

    public function create(){
        return view('admin.nobat.create');
    }

    public function store(Request $request){
        Nobat::create([
            'date'      => $request->get('date'),
            'time'      => $request->get('time'),
            'user_id'   => Auth::user()->id,
        ]);

        return redirect()->route('nobat.index')->with('success','وقت نوبت با موفقیت ثبت شد...');
    }

    public function destroy($id){
        Nobat::find($id)->delete();
        return redirect()->route('nobat.index')->with('success','وقت نوبت با موفقیت حذف شد...');
    }
}
