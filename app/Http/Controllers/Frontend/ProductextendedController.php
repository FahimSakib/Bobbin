<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;

class ProductextendedController extends Controller
{
    public function index($id){
        $data = [
            'title' => 'Product'
        ];

        $product = Product::with('category')->find($id);

        $prducts_random = Product::with('category')->where('status','1')->inRandomOrder()->limit(6)->get();

        return view('frontend.pages.product-extended.product-extended', $data,compact('product','prducts_random'));
    }
}
