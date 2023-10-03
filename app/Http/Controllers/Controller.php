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

    public static function send_sms($receptor, $message = null,$template = null, $token = null, $token1 = null, $token2 = null){
        try {
            $api = new KavenegarApi('486D4A4C684C30436B79522F4A564E6647773445706446666775314A6747512F654749324E4639336854453D');
            $result = $api->VerifyLookup($receptor, $token, $token1, $token2, $template);
            $sender = "10001000700100";
            $result = $api->Send($sender, $receptor, $message);
            if($result){
                return 'ok';
            }
        } catch (\Kavenegar\Exceptions\ApiException $e){
            return $e->errorMessage();
        } catch (\Kavenegar\Exceptions\HttpException $e) {
            // در زمانی که مشکلی در برقرای ارتباط با وب سرویس وجود داشته باشد این خطا رخ می دهد
            return $e->errorMessage();
        }
    }
}
