<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(){
        $data = [
            'title' => 'Cart'
        ];
        return view('frontend.pages.cart.cart', $data);
    } 
}
