<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductextendedController extends Controller
{
    public function index(){
        $data = [
            'title' => 'Product'
        ];
        return view('frontend.pages.product-extended.product-extended', $data);
    }
}
