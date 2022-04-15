<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title' => 'Category-Index'
        ];
        $category = Category::all();
        return view('backend.pages.category.index',$data,compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'title' => 'Category-Index'
        ];
        return view('backend.pages.category.create',$data);
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
            'size_guide'       => 'nullable|image|mimes:png,jpeg,jpg',
            'status'      => 'required'
              
        ]);
        $file =  $request->file('size_guide');
        $uploadName = $this->fileUpload($file,'size_guide');
        $category = new Category($request->all());
        $category->size_guide = $uploadName;
        if($category->save())
        {
            return redirect()->route('admin.category.index')->with('success','Item added successfully');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        $data = [
            'title' => 'Category-Create'
        ];
        return view('backend.pages.category.show',$data, compact('category'));
   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $data = [
            'title' => 'Category-Edit'
        ];
        return view('backend.pages.category.edit', $data , compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'title'      => 'required',
            'size_guide'       => 'nullable|image|mimes:png,jpeg,jpg',
            'status'      => 'required'
              
        ]);

        $size_guide = $this->fileUpload($request->file('size_guide'),'size_guide');
        if(empty($size_guide))$size_guide = $category->size_guide;

        $category->update($request->all());

        $category->size_guide = $size_guide;

       
        return redirect()->route('admin.category.index')->with('success','Item Update successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('admin.category.index')->with('danger','Item delete successfully');

    }
    private function fileUpload($file, $name){
        $prefix='Size_Guide_'.time().'_';
        $picture='';
        if(!empty($file)){
            $name=$name.'_img.';
            $fileext = $file->getClientOriginalExtension();
            $picture = $prefix.$name.$fileext;
            $path = $file->storeAs('public/Size_Guide_Image',$picture);
        }
        return $picture;
    }
}
