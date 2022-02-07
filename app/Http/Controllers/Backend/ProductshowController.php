<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductshowController extends Controller
{
    public function index(){
        $data = [
            'title' => 'Product Show'
        ];

        return view('backend.pages.product.show.product-show',$data);
    }
}
