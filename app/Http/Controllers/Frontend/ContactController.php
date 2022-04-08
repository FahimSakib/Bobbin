<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Contact;

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
    public function store(Request $request)
    {
        $data = $request->validate([
            'name'          => 'required',
            'email'         => 'required',
            'msg'           => 'required' 
        ]);
        $contact = new Contact($request->all());
        
        if ($contact->save()) {
            return back();
        }
    }
}
