<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductextendedController extends Controller
{
    public function index($id){
        $data = [
            'title' => 'Product'
        ];
        $product = Product::with('category')->find($id);
        return view('frontend.pages.product-extended.product-extended', $data,compact('product'));
    }
}
