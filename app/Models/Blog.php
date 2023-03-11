<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $table = "blogs";

    protected $fillable = ['title','title_en','desc','image','category_id'];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
