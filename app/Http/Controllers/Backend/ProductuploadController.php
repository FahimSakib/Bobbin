<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductuploadController extends Controller
{
    public function index(){
        $data = [
            'title' => 'Product Upload'
        ];

        return view('backend.pages.product.upload.product-upload',$data);
    }
}
