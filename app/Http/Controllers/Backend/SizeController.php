<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Size;

use Illuminate\Http\Request;

class SizeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title' => 'Size-Index'
        ];
        $size = Size::all();
        return view('backend.pages.size.index', $data,compact('size'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'title' => 'Size-Create'
        ];

        return view('backend.pages.size.create', $data);
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
               'title' => 'required',
               'chest_width' => 'required',
               'body_length' => 'required',
               'sleeve_length' => 'required',
               'status'      => 'required'

        ]);

        $size = new Size($request->all());
        
        if($size->save())
        {
            return redirect()->route('admin.size.index')->with('success','Item added successfully');

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Size $size)
    {
        $data = [
            'title' => 'Size-Create'
        ];
        return view('backend.pages.size.show',$data, compact('size'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Size $size)
    {
        $data = [
            'title' => 'Size-Edit'
        ];
        return view('backend.pages.size.edit', $data , compact('size'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Size $size)
    {
        $request->validate([
            'title' => 'required',
            'chest_width' => 'required',
            'body_length' => 'required',
            'sleeve_length' => 'required',
            'status'      => 'required'

     ]);
     $size->update($request->all());
     return redirect()->route('admin.size.index')->with('success','Item Update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Size $size)
    {
        $size->delete();
    
        return redirect()->route('admin.size.index')->with('danger','Item deleted successfully');
    }
}
