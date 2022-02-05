<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index(){
        $data = [
            'title' => 'Checkout'
        ];
        return view('frontend.pages.checkout.checkout', $data);
    } 
}
