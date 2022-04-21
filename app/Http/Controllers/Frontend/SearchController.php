<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request){

        $data = [
            'title' => 'Search'
        ];

        $products = Product::where([['name','!=',NULL],
        [function ($query)use ($request){
            if(($q = $request->q)){
                $query->orWhere('name','LIKE','%'.$q.'%')->get();
                // $query->orWhere('title','LIKE','%'.$q.'%')->get();
            }
        }]
        ])->with('sizes','colors','category')->paginate(16);
        // dd($products);
        return view('frontend.pages.search.search',$data,compact('products'));
    }
}
