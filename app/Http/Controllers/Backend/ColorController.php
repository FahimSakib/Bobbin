<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Color;
use Illuminate\Http\Request;


class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title' => 'Color-Index'
        ];
        $color = Color::all();
        return view('backend.pages.color.index', $data,compact('color'));


        // $products = Product::all()->where('trash','0');
        // return view('backend.pages.products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'title' => 'Color-Create'
        ];

        return view('backend.pages.color.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title'      => 'required',
            'status'      => 'required'
              
        ]);
      
            

        $color = new Color($request->all());
        
        if($color->save())
        {
            return redirect()->route('admin.color.index')->with('success','Item added successfully');

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Color $color)
    {
        $data = [
            'title' => 'Color-Create'
        ];
        return view('backend.pages.color.show',$data, compact('color'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( Color $color )
    
    {


        $data = [
            'title' => 'Color-Edit'
        ];
        return view('backend.pages.color.edit', $data , compact('color'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Color $color)
    {
       $request->validate([
            'title'      => 'required',
            'status'      => 'required'
              
        ]);
      
        $color->update($request->all());
        return redirect()->route('admin.color.index')->with('success','Item Update successfully');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Color $color)
    {
        $color->delete();
    
        return redirect()->route('admin.color.index')->with('danger','Item deleted successfully');  
    }
}
