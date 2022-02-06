<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $data = [
            'title' => 'Contact'
        ];
        return view('frontend.pages.contact.contact', $data);
    }
}
