<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;
    protected $fillable =['title','status'];

    public function products(){
        return $this->belongsToMany(Product::class)->withTimestamps();
    }

    public function orders(){
        return $this->hasMany(Order::class);
    }

    public function invoices(){
        return $this->hasMany(Invoice::class);
    }
}
