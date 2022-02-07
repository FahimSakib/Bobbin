<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductcategoryController extends Controller
{
    public function index(){
        $data = [
            'title' => 'Product'
        ];
        return view('frontend.pages.product-category-boxed.product-category-boxed', $data);
    }
}
