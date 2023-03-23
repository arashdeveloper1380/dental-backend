<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nobatGiri extends Model
{
    use HasFactory;

    public $table = "nobatgiri";

    public $casts = [
        'nobat_id' => 'array'
    ];

    protected $fillable = ['username','mobile','nobat_id'];

    public function nobats(){
        return $this->hasMany(Nobat::class,'nobat_id');
    }
}
