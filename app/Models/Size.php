<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    use HasFactory;
    protected $fillable =['title','status','chest_width','body_length','sleeve_length'];

    public function products(){
        return $this->belongsToMany(Product::class)->withTimestamps();
    }
    public function tests(){
        return $this->belongsToMany(Test::class)->withPivot(['qty'])->withTimestamps();
    }
}
