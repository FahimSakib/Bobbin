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

        $services = Service::all();

        return view('backend.pages.service.index', $data,compact('services'));

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
        $request->validate([
            'name'        => 'required',
            'description' => 'required',
            'status'      => 'required',
            'image'       => 'required|image|mimes:png,jpeg,jpg'
        ]);

        $file =  $request->file('image');
        $uploadName = $this->fileUpload($file,'image');

        $service = new Service($request->all());

        $service->image = $uploadName;
        
        if($service->save())
        {
            return redirect()->route('admin.service.index')->with('success','Item added successfully');
        }else{
            return redirect()->route('admin.service.index')->with('error','Item can not be added');
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
            'title' => 'Service-Show'
        ];

        $service = Service::find($id);

        return view('backend.pages.service.show',$data, compact('service'));
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
            'title' => 'Service-Edit'
        ];

        $service = Service::find($id);

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
        $request->validate([
            'name'        => 'required',
            'description' => 'required',
            'status'      => 'required',
            'image'       => 'nullable|image|mimes:png,jpeg,jpg'
        ]);

        $service = Service::find($id);

        $image = $this->fileUpload($request->file('image'),'image');
        if(empty($image))$image = $service->image;

        $service->fill($request->all());

        $service->image = $image;

        if($service->save()){
            return redirect()->route('admin.service.index')->with('success','Item Updated successfully');
        }else{
            return redirect()->route('admin.service.index')->with('error','Item can not be updated');
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
        if(Service::find($id)->delete()){
            return redirect()->route('admin.service.index')->with('danger','Item deleted successfully');
        }else{
            return redirect()->route('admin.service.index')->with('error','Item can not be deleted');
        }

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
