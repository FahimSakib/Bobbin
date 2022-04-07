<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Service;

use Illuminate\Http\Request;

class SingleFullWidthController extends Controller
{
    public function index($id){
        $data = [
            'title' => 'FullWidth'
        ];
        $service = Service::find($id);
       
        return view('frontend.pages.single-fullwidth.single-fullwidth', $data,compact('service'));
    }
}
