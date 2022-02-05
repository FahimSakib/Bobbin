<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Wishlist'
        ];
        return view('frontend.pages.wishlist.wishlist', $data);
    }
}
