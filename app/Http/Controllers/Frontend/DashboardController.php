<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $data = [
            'title' => 'Dashboard'
        ];
        return view('frontend.pages.dashboard.dashboard', $data);
    }

    public function userDetailsUpdate(Request $request){

        $request->validate([
            'name'        => 'required',
            'mobile_no'   => 'required|numeric|min:11|unique:users,mobile_no,'.request()->input('user_id'),
            'city'        => 'required',
            'street'      => 'required',
            'postal_code' => 'required|numeric'
        ]);

        $result = User::find(request()->input('user_id'))->update(['name' => request()->input('name'), 'mobile_no' => request()->input('mobile_no'), 
            'city' => request()->input('city'), 'street' => request()->input('street'), 'postal_code' => request()->input('postal_code')]);
        
        if($result){
            return back()->with('success', 'Deatails has been updated successfully');
        }else{
            return back()->with('error', 'Deatails can not be updated');
        }
    }
}
