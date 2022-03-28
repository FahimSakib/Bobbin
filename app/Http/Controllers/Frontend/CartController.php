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
        $size = $request->input('size');
        $color = $request->input('color');
        $carts = Cart::add($product->id, $product->name, $request->input('quantity'), $product->price,'0',['color' => $color,'size' => $size ,'image' =>$product->image1]);
   
        return back()->with('success','Item Added successfully');

    }
    public function remove(Request  $request){
         
        $rmv = Cart::remove($request->rowId);
        return back()->with('success','Item Added successfully');

    }
}
