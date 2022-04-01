<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function sizes(){
        return $this->belongsToMany(Size::class)->withPivot(['qty'])->withTimestamps();
    }

    public function colors(){
        return $this->belongsToMany(Color::class)->withTimestamps();
    }

    public function orders(){
        return $this->hasMany(Order::class);
    }
}
