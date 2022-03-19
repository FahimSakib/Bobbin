<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $data = [
            'title' => 'Home'
        ];
        $product = Product::all()->where('status','1');
        $slider = Slider::all()->where('status','1');
        $categories = Category::all()->where('status','1');
        return view('frontend.pages.home.home', $data,compact('slider','product','categories'));
    }
}
