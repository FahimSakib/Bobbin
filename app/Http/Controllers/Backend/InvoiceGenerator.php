<?php

namespace App\Http\Controllers\Backend;

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
        $size = $request->input('size');
        $color = $request->input('color');
        $pivot_qty = $request->input('pivot-qty');
        $customer_name = $request->input('customer_name');
        $carts = Cart::add($product->id, $product->name, $request->input('quantity'), $product->price,'0',['color' => $color, 'size' => $size, 'image' =>$product->image1, 'pivot_qty' => $pivot_qty, 'customer_name' => $customer_name]);
   
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
        //
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
}
