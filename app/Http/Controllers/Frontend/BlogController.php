<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $data = [
            'title' => 'Blog'
        ];
        return view('frontend.pages.blog.blog', $data);
    }
}
