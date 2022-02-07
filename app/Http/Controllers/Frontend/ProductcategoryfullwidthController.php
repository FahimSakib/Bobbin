<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductcategoryfullwidthController extends Controller
{
    public function index(){
        $data = [
            'title' => 'Product'
        ];
        return view('frontend.pages.product-category-fullwidth.product-category-fullwidth', $data);
    }
}
