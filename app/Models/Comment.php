<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'mobile', 'comment', 'parent_id', 'blog_id','status'];

    public function blogs(){
        return $this->belongsTo(Blog::class,'id');
    }
}
