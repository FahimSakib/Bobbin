<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index($category){
        $data = [
            'title' => 'Category'
        ];
        
        $products = Product::with('category')->where('category_id',$category)->paginate(1); //pagination = 1 is for test only normal value will be 16

        return view('frontend.pages.category.category', $data, compact('products'));
    } 

}