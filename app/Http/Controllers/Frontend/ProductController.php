<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $data = [
            'title' => 'Product'
        ];
        return view('frontend.pages.product.product', $data);
    }
}
