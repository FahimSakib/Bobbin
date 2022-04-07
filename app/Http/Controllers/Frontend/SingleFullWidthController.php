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
        $services = Service::where('status','1')->limit(6)->orderBy('id','desc')->get();

        $service = Service::find($id);
       
        return view('frontend.pages.single-fullwidth.single-fullwidth', $data,compact('service','services'));
    }
}
