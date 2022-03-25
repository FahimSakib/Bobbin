<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(){
        $data = [
            'title' => 'Cart'
        ];

        $carts = Cart::content();
        
        // dd($carts);
        return view('frontend.pages.cart.cart', $data,compact('carts'));
    } 
     
    public function store(Request $request){
         
        $product = Product::findOrFail($request->input('product_id'));
        Cart::add($product->id, $product->name, $request->input('quantity'), $product->price);

        return back()->with('success','Item Added successfully');

    }
}
