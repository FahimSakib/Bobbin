<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function index(){
        $data = [
            'title' => 'Admin Dashboard'
        ];

        return view('backend.pages.Dashboard.index',$data);
    }

    public function adminLogout(){
        
        Session::flush();
        
        Auth::logout();

        return redirect('admin');
    }
}
