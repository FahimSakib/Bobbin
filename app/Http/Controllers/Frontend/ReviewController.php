<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Review;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'rating' => 'required'
        ]);

        $review = new Review($request->all());
        
        if ($review->save()) {
            return back()->with('success','Your review has been submitted successfuly');
        }
    }
}
