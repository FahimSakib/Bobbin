<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title' => 'Service-Index'
        ];
        $service = Service::all();
        return view('backend.pages.service.index', $data,compact('service'));


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
            'title' => 'Service-Create'
        ];

        return view('backend.pages.service.create', $data);
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
            'name'      => 'required',
            'description' =>'required',
            'status'      => 'required',
            'image'       => 'required|image|mimes:png,jpeg,jpg',

              
        ]);
        $file =  $request->file('image');
        $uploadName1 = $this->fileUpload($file,'image');
            

        $service = new Service($request->all());
        
        if($service->save())
        {
            return redirect()->route('admin.service.index')->with('success','Item added successfully');

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        $data = [
            'title' => 'Service-Show'
        ];
        return view('backend.pages.service.show',$data, compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        $data = [
            'title' => 'Service-Edit'
        ];
        return view('backend.pages.service.edit', $data , compact('service'));
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
    private function fileUpload($file, $name){
        $prefix='Service_'.time().'_';
        $picture='';
        if(!empty($file)){
            $name=$name.'_img.';
            $fileext = $file->getClientOriginalExtension();
            $picture = $prefix.$name.$fileext;
            $path = $file->storeAs('public/Service_Image',$picture);
        }
        return $picture;
    }
}
