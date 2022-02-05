<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $data = [
            'title' => 'Category'
        ];
        return view('frontend.pages.category.category', $data);
    } 

}