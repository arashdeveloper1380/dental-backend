<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table="categories";

    protected $fillable = ['name','name_en','meta_desc','meta_keywords'];

    public function blog(){
        return $this->hasMany(Blog::class);
    }
}
