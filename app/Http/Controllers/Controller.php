<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Hekmatinasser\Verta\Verta;

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

    public static function getDayJalali($value){
        return Verta::instance($value)->format('d');
    }

    public static function getMonthName($value){
        return Verta::instance($value)->format('F');
    }

    public static function getYear($value){
        return Verta::instance($value)->format('Y');
    }

    public static function CommentCount($blog){
        return Comment::query()->where(['blog_id' => $blog,'status' => 1])
            ->whereNotNull('name')->count();
    }

//    public function blogByCategory($value){
//        return
//    }
}
