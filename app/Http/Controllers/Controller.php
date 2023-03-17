<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function file_upload($request, $name, $directory){
        if($request->hasFile($name)){
            $file_name = random_int(1,10000). uniqid() . '.' . $request->file($name)->getClientOriginalExtension();
            if($request->file($name)->move('uploads/'.$directory,$file_name)){
                return $file_name;
            }else{
                return null;
            }
        }else{
            return null;
        }
    }
}
