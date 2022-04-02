<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Size;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gloudemans\Shoppingcart\Facades\Cart;

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
        $pivot_qty = $request->input('pivot-qty');
        $carts = Cart::add($product->id, $product->name, $request->input('quantity'), $product->price,'0',['color' => $color, 'size' => $size, 'image' =>$product->image1, 'pivot_qty' => $pivot_qty]);
   
        return back()->with('success','Item Added successfully');

    }

    public function remove(Request  $request){
         
        $rmv = Cart::remove($request->rowId);
        return back()->with('success','An Item has been removed from cart');

    }

    public function checkout(Request $request){

        $result = $request->data;
        $data = json_decode($result, true);

        $save = Order::insert($data);

        if($save){
            Cart::destroy();
            foreach ($data as $value) {
                $size_id = $value['size_id'];
                $product_id = $value['product_id'];
                $pivot_qty = $value['pivot_qty'];

                $qty = $pivot_qty-$value['qty'];

                $size = Size::with('products')->where('id',$size_id)->first();

                $size->products()->updateExistingPivot($product_id,['qty' => $qty]);

                $product = Product::toBase()->select('total_qty')->where('id',$product_id)->first();

                $product_total_qty = $product->total_qty;
                $product_qty = $product_total_qty-$value['qty'];

                Product::where('id',$product_id)->update(['total_qty'=>$product_qty]);
            }

            return redirect('dashboard')->with('success','Your orders has been placed successfully');
        }
    }
}
