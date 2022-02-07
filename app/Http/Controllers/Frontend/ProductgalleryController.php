<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductgalleryController extends Controller
{
    public function index(){
        $data = [
            'title' => 'Product|gallery'
        ];
        return view('frontend.pages.product-gallery.product-gallery', $data);
    }
}
