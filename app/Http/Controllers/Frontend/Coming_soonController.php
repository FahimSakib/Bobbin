<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Coming_soonController extends Controller
{
    public function index(){
        $data = [
            'title' => 'Coming-soon'
        ];
        return view('frontend.pages.coming-soon.coming-soon', $data);
    }
}
