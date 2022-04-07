<?php

namespace App\Http\Controllers\Backend;

use App\Models\Size;
use App\Models\Invoice;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gloudemans\Shoppingcart\Facades\Cart;

class InvoiceGenerator extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title' => 'Product-Index'
        ];

       $orders_offline = Invoice::with(['product','size','color'])->orderBy('id','desc')->get();

       return view('backend.pages.invoice-generators.index',$data,compact('orders_offline'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'title' => 'Product-Index'
        ];

        $products = Product::with('sizes','colors','category')->get();

        return view('backend.pages.invoice-generators.create',$data,compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = Product::findOrFail($request->input('product'));

        $size             = $request->input('size');
        $color            = $request->input('color');
        $pivot_qty        = $request->input('pivot-qty');
        $customer_name    = $request->input('customer_name');
        $customer_email   = $request->input('customer_email');
        $customer_mobile  = $request->input('customer_mobile');
        $customer_address = $request->input('customer_address');
        $payment_method   = $request->input('payment_method');
        $payment_amount   = $request->input('payment_amount');

        $carts = Cart::add($product->id, $product->name, $request->input('quantity'), $product->price,'0',['color' => $color, 'size' => $size, 'image' =>$product->image1, 'pivot_qty' => $pivot_qty, 'customer_name' => $customer_name, 'customer_email' => $customer_email, 'customer_mobile' => $customer_mobile, 'customer_address' => $customer_address, 'payment_method' => $payment_method, 'payment_amount' => $payment_amount]);
   
        return back()->with('success','Item Added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = [
            'title' => 'Offline-invoice-Single-Show'
        ];

        $offline_orders = Invoice::where('order_id',$id)->get();

        return view('backend.pages.invoice-generators.show', $data, compact('offline_orders'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function sizes(Request $request){
        if ($request->ajax()) {
            if($request->size_id){
                $output = '<option value="">Select Please</option>';
                $product = Product::find($request->size_id);
                if($product){
                    foreach ($product->sizes as $size) {
                        if($size->pivot->qty != 0){
                        $output .= '<option value="'.$size->id.'" data-value="'.$size->pivot->qty.'">'.$size->title.'</option>';
                        }
                    }
                }
                return response()->json($output);
            }
        }
    }

    public function colors(Request $request){
        if ($request->ajax()) {
            if($request->color_id){
                $output = '<option value="">Select Please</option>';
                $product = Product::find($request->color_id);
                if($product){
                    foreach ($product->colors as $color) {
                        $output .= '<option value="'.$color->id.'">'.$color->title.'</option>';
                    }
                }
                return response()->json($output);
            }
        }
    }

    public function offlineCheckout(Request $request){

        $result = $request->data;
        $data = json_decode($result, true);

        $save = Invoice::insert($data);

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

            return redirect()->route('admin.invoice-generator.index')->with('success','Orders for offline invoice has been placed successfully');
            
        }else{
            return back()->with('error','Something went wrong!');
        }
    }

    public function invoiceSingleRemove(Request $request){
         
        $rmv = Cart::remove($request->rowId);

        if($rmv){
        return back()->with('success','An Item has been removed from list');
        }

    }

    public function invoiceDestroy(){

        Cart::destroy();

        return back()->with('danger','The invoice has been destroyed');
    }
}
