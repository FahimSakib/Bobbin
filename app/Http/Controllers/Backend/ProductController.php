<?php

namespace App\Http\Controllers\Backend;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Color;
use App\Models\Size;

class ProductController extends Controller
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
        return view('backend.pages.products.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'title' => 'Product-Create'
        ];

        $categories = Category::get();

        $sizes = Size::get();

        $colors = Color::get();

        return view('backend.pages.products.create',$data, compact('categories','sizes','colors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'              => 'required',
            'price'             => 'required|numeric',
            'qty'               => 'required|numeric',
            'short_description' => 'required',
            'description'       => 'required',
            'category_id'       => 'required',
            'size_id'           => 'required',
            'color_id'          => 'required'
        ]);

        $product = new Product($request->except('size_id', 'color_id'));

        if ($product->save()) {
            $sizes = $request->size_id;
            $colors = $request->color_id;
            $product = Product::with('sizes','colors')->latest()->first();
            $product->sizes()->sync($sizes);
            $product->colors()->sync($colors);
            return redirect()->route('admin.product.index');
        }
        



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
}
