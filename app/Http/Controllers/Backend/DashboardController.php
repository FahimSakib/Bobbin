<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $data = [
            'title' => 'Admin Dashboard'
        ];

        return view('backend.pages.Dashboard.index',$data);
    }
}
