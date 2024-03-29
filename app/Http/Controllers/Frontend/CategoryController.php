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
        
        $products = Product::with('category')->where('category_id',$category)->where('status','1')->paginate(16);

        return view('frontend.pages.category.category', $data, compact('products'));
    } 

}