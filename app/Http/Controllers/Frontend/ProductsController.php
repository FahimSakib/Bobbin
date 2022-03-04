<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
    public function index(){

        $data = [
            'title' => 'Products'
        ];

        $products = Product::with('sizes','colors','category')->get();
        
        return view('frontend.pages.products.products',$data,compact('products'));
    }
}
