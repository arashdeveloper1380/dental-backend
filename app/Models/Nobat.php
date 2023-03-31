<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nobat extends Model
{
    use HasFactory;

    public $casts = [
        'time' => 'array'
    ];

    protected $fillable = ['date','time','user_id','description'];
}
