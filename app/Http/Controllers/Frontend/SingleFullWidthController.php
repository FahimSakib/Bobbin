<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SingleFullWidthController extends Controller
{
    public function index(){
        $data = [
            'title' => 'FullWidth'
        ];
        return view('frontend.pages.single-fullwidth.single-fullwidth', $data);
    }
}
