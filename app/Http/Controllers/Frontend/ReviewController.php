<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Review;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'user_name'          => 'required',
            'product_name'         => 'required',
            'review'           => 'required' 
        ]);
        $review = new Review($request->all());
        
        if ($review->save()) {
            return back();
        }
    }
}
