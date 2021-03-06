<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Service;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){
        $data = [
            'title' => 'Service'
        ];
        
        $service = Service::where('status','1')->get();

        return view('frontend.pages.service.service', $data,compact('service'));
    }
}
