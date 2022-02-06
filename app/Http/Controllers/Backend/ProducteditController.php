<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProducteditController extends Controller
{
    public function index(){
        $data = [
            'title' => 'Product Edit'
        ];

        return view('backend.pages.product.edit.product-edit',$data);
    }
}
