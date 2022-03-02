<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title' => 'Slider-Index'
        ];

        $slider = Slider::all();

        return view('backend.pages.slider.index',$data,compact('slider'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'title' => 'Slider-Create'
        ];

        return view('backend.pages.slider.create',$data);
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
            'title'     => 'required',
            'sub_title' => 'required',
            'offer'     => 'required',
            'image'     => 'required|image|mimes:png,jpeg,jpg'
        ]);

        $file       = $request->file('image');
        $uploadName = $this->fileUpload($file,'image');

        $slider     = new Slider($request->all());

        $slider->image = $uploadName;

        if($slider->save())
        {
            return redirect()->route('admin.slider.index')->with('success','Item added successfully');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        $data = [
            'title' => 'Slider-Create'
        ];

        return view('backend.pages.slider.show',$data, compact('slider'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        $data = [
            'title' => 'Slider-Edit'
        ];

        return view('backend.pages.slider.edit', $data , compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'title'     => 'required',
            'sub_title' => 'required',
            'offer'     => 'required',
            'image'     => 'nullable|image|mimes:png,jpeg,jpg',
        ]);

        $slider  = Slider::find($id);
        $picture = $this->fileUpload($request->file('image'),'image');

        if(empty($picture))$picture = $slider->image;

        $slider->fill($request->all());
        $slider->image = $picture;

        $slider->save();

        if($slider->save()){
            return redirect()->route('admin.slider.index')->with('success','Item Updated successfully');
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
        Slider::find($id)->delete();
        
        return back()->with('danger','An item has been deleted');

    }

    private function fileUpload($file, $name){
        $prefix='Banner_'.time().'_';
        $picture='';
        if(!empty($file)){
            $name=$name.'_img.';
            $fileext = $file->getClientOriginalExtension();
            $picture = $prefix.$name.$fileext;
            $path = $file->storeAs('public/Banner_Image',$picture);
        }
        return $picture;
    }
}
