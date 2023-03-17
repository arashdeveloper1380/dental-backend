<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Hekmatinasser\Verta\Verta;

class Blog extends Model
{
    use HasFactory;

    protected $table = "blogs";

    protected $fillable = ['title','title_en','desc','image','category_id','meta_desc','meta_keywords'];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public static function createdatToJalali($value) {
        return Verta::instance($value)->format('Y/m/d');
    }
}
