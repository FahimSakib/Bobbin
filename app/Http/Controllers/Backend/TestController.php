<?php

namespace App\Http\Controllers\Backend;

use App\Models\Test;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Color;
use App\Models\Size;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title' => 'Test-Index'
        ];
        $tests = Test::with('sizes','colors','category')->get();

        return view('backend.pages.tests.index',$data, compact('tests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'title' => 'Test-Create'
        ];

        $categories = Category::get();

        $sizes = Size::get();

        $colors = Color::get();

        return view('backend.pages.tests.create',$data, compact('categories','sizes','colors'));
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
            'short_description' => 'required',
            'description'       => 'required',
            'image1'            => 'nullable|image|mimes:png,jpeg,jpg',
            'image2'            => 'nullable|image|mimes:png,jpeg,jpg',
            'image3'            => 'nullable|image|mimes:png,jpeg,jpg',
            'image4'            => 'nullable|image|mimes:png,jpeg,jpg',
            'category_id'       => 'required',
            'status'            => 'required',
            'color_id'          => 'required',
            'sizes'             => 'required'
        ]);

        $file =  $request->file('image1');
        $uploadName1 = $this->fileUpload($file,'image1');
        
        $file =  $request->file('image2');
        $uploadName2 = $this->fileUpload($file,'image2');

        $file =  $request->file('image3');
        $uploadName3 = $this->fileUpload($file,'image3');

        $file =  $request->file('image4');
        $uploadName4 = $this->fileUpload($file,'image4');

        $test = new Test($request->except('color_id','sizes'));

        $test->image1 = $uploadName1;
        $test->image2 = $uploadName2;
        $test->image3 = $uploadName3;
        $test->image4 = $uploadName4;

        $sizes = collect($request->input('sizes',[]))->map(function($size){
            return ['qty' => $size];
        });
        if ($test->save()) {
            $colors = $request->color_id;

            $test = Test::with('colors')->latest()->first();
            
            $test->colors()->sync($colors);

            $test->sizes()->sync($sizes);

            return redirect()->route('admin.test.index')->with('success','Item added successfully');
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
            'title' => 'Test-Single-Show'
        ];

        $test = Test::find($id);

        return view('backend.pages.tests.show', $data, compact('test'));
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
            'title' => 'Test-Edit'
        ];

        $test = Test::find($id);

        $categories = Category::get();

        // $sizes = Size::get();

        $colors = Color::get();

        return view('backend.pages.tests.edit',$data, compact('categories','colors','test'));
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
            'short_description' => 'required',
            'description'       => 'required',
            'image1'            => 'nullable|image|mimes:png,jpeg,jpg',
            'image2'            => 'nullable|image|mimes:png,jpeg,jpg',
            'image3'            => 'nullable|image|mimes:png,jpeg,jpg',
            'image4'            => 'nullable|image|mimes:png,jpeg,jpg',
            'category_id'       => 'required',
            'status'            => 'required',
            // 'size_id'           => 'required',
            'color_id'          => 'required'
        ]);

        $test = Test::find($id);

        $picture1 = $this->fileUpload($request->file('image1'),'image1');
        if(empty($picture1))$picture1 = $test->image1;

        $picture2 = $this->fileUpload($request->file('image2'),'image2');
        if(empty($picture2))$picture2 = $test->image2;

        $picture3 = $this->fileUpload($request->file('image3'),'image3');
        if(empty($picture3))$picture3 = $test->image3;

        $picture4 = $this->fileUpload($request->file('image4'),'image4');
        if(empty($picture4))$picture4 = $test->image4;

        $test->fill($request->except('color_id'));

        $test->image1 = $picture1;
        $test->image2 = $picture2;
        $test->image3 = $picture3;
        $test->image4 = $picture4;

        $test->save();

        if ($test->save()) {
            // $sizes = $request->size_id;
            $colors = $request->color_id;

            // $test->sizes()->sync($sizes);
            $test->colors()->sync($colors);

            return redirect()->route('admin.test.index')->with('success','Item Updated successfully');
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
        Test::find($id)->delete();

        return redirect()->route('admin.test.index')->with('danger','An item has been deleted');
    }

    private function fileUpload($file, $name){
        $prefix='Test_'.time().'_';
        $picture='';
        if(!empty($file)){
            $name=$name.'_img.';
            $fileext = $file->getClientOriginalExtension();
            $picture = $prefix.$name.$fileext;
            $path = $file->storeAs('public/Test_Image',$picture);
        }
        return $picture;
    }
}
