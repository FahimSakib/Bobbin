<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){

        $data = [
            'title' => 'Products'
        ];

        return view('frontend.pages.products.products',$data);
    }
}
