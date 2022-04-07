<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Blog;
use App\Models\Slider;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
        $data = [
            'title' => 'Home'
        ];

        $product = Product::where('status','1')->orderBy('id','desc')->limit(10)->get();

        $slider = Slider::all()->where('status','1');

        $categories = Category::all()->where('status','1');

        return view('frontend.pages.home.home', $data,compact('slider','product','categories'));
    }

}
