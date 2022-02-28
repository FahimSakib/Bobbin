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
        $products = Product::with('sizes','colors','category')->get();

        return view('backend.pages.products.index',$data, compact('products'));
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
            'image1'            => 'required|image|mimes:png,jpeg,jpg',
            'image2'            => 'required|image|mimes:png,jpeg,jpg',
            'image3'            => 'required|image|mimes:png,jpeg,jpg',
            'image4'            => 'required|image|mimes:png,jpeg,jpg',
            'category_id'       => 'required',
            'status'            => 'required',
            'size_id'           => 'required',
            'color_id'          => 'required'
        ]);

        $file =  $request->file('image1');
        $uploadName1 = $this->fileUpload($file,'image1');
        
        $file =  $request->file('image2');
        $uploadName2 = $this->fileUpload($file,'image2');

        $file =  $request->file('image3');
        $uploadName3 = $this->fileUpload($file,'image3');

        $file =  $request->file('image4');
        $uploadName4 = $this->fileUpload($file,'image4');


        $product = new Product($request->except('size_id', 'color_id'));

        $product->image1 = $uploadName1;
        $product->image2 = $uploadName2;
        $product->image3 = $uploadName3;
        $product->image4 = $uploadName4;

        if ($product->save()) {
            $sizes = $request->size_id;
            $colors = $request->color_id;

            $product = Product::with('sizes','colors')->latest()->first();

            $product->sizes()->sync($sizes);
            $product->colors()->sync($colors);

            return redirect()->route('admin.product.index')->with('success','Item added successfully');
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
        $data = [
            'title' => 'Product-Single-Show'
        ];

        $product = Product::find($id);

        return view('backend.pages.products.show', $data, compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'title' => 'Product-Edit'
        ];

        $product = Product::find($id);

        // return view('backend.pages.products.edit', $data, compact('product'));

        // $data = [
        //     'title' => 'Product-Create'
        // ];

        $categories = Category::get();

        $sizes = Size::get();

        $colors = Color::get();

        return view('backend.pages.products.edit',$data, compact('categories','sizes','colors','product'));
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
        $request->validate([
            'name'              => 'required',
            'price'             => 'required|numeric',
            'qty'               => 'required|numeric',
            'short_description' => 'required',
            'description'       => 'required',
            'image1'            => 'nullable|image|mimes:png,jpeg,jpg',
            'image2'            => 'nullable|image|mimes:png,jpeg,jpg',
            'image3'            => 'nullable|image|mimes:png,jpeg,jpg',
            'image4'            => 'nullable|image|mimes:png,jpeg,jpg',
            'category_id'       => 'required',
            'status'            => 'required',
            'size_id'           => 'required',
            'color_id'          => 'required'
        ]);

        // $file =  $request->file('image1');
        // $uploadName1 = $this->fileUpload($file,'image1u');
        
        // $file =  $request->file('image2');
        // $uploadName2 = $this->fileUpload($file,'image2u');

        // $file =  $request->file('image3');
        // $uploadName3 = $this->fileUpload($file,'image3u');

        // $file =  $request->file('image4');
        // $uploadName4 = $this->fileUpload($file,'image4u');

        $product = Product::find($id);

        $picture1 = $this->fileUpload($request->file('image1'),'image1');
        if(empty($picture1))$picture1 = $product->image1;

        $picture2 = $this->fileUpload($request->file('image2'),'image2');
        if(empty($picture2))$picture2 = $product->image2;

        $picture3 = $this->fileUpload($request->file('image3'),'image3');
        if(empty($picture3))$picture3 = $product->image3;

        $picture4 = $this->fileUpload($request->file('image4'),'image4');
        if(empty($picture4))$picture4 = $product->image4;

        $product->fill($request->except('size_id', 'color_id'));
        $product->image1 = $picture1;
        $product->image2 = $picture2;
        $product->image3 = $picture3;
        $product->image4 = $picture4;
        $product->save();

        // $product->update($request->except('size_id', 'color_id'));

        // $product->image1 = $uploadName1;
        // $product->image2 = $uploadName2;
        // $product->image3 = $uploadName3;
        // $product->image4 = $uploadName4;

        if ($product->save()) {
            $sizes = $request->size_id;
            $colors = $request->color_id;

            $product->sizes()->sync($sizes);
            $product->colors()->sync($colors);

            return redirect()->route('admin.product.index')->with('success','Item Updated successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::find($id)->delete();

        return redirect()->route('admin.product.index')->with('danger','An item has been deleted');
    }

    private function fileUpload($file, $name){
        $prefix='Product_'.time().'_';
        $picture='';
        if(!empty($file)){
            $name=$name.'_img.';
            $fileext = $file->getClientOriginalExtension();
            $picture = $prefix.$name.$fileext;
            $path = $file->storeAs('public/Product_Image',$picture);
        }
        return $picture;
    }
}
