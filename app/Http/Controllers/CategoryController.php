<?php

namespace App\Http\Controllers;

use App\Category;
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
        $categories = Category::all();
        return view('Category', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->validate([
            'cat_name'   => 'required',
            'cat_desc'   => 'required',
            'cat_image'  => 'mimes:jpeg,jpg,png|max:10000'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->create($request);
        if ($request->hasFile('cat_image')) {
            $file = $request->file('cat_image') ;
            $ext = $file->getClientOriginalExtension() ;
            $filename = time() . '.' . $ext ;
            $file->move('uploads/cat_images', $filename);
        } else{
            $filename = 'image.png';
        }

        Category::create([
            'cat_desc'          => $request-> cat_desc,
            'cat_name'          => $request-> cat_name,
            'cat_image'         => $filename
        ]);
        return redirect('/category');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('edit_Category',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
//    public function update(Request $request, $id)
//    {
//        $this->create($request);
//        if ($request->hasFile('cat_image')) {
//            $file = $request->file('cat_image') ;
//            $ext = $file->getClientOriginalExtension() ;
//            $filename = time() . '.' . $ext ;
//            $file->move('uploads/cat_images', $filename);
//        }
//        else {
//            $filename = Category::find($id)->image;
//        }
//
//
//        Category::where('id',$id)->update([
//            'cat_desc' => $request->cat_desc,
//            'cat_name' => $request->cat_name,
//            'cat_image'     => $filename
//        ]);
//        return redirect('/category');
//
//    }
    public function update(Request $request, $id)
    {
        $this->create($request);
        if ($request->hasFile('cat_image')) {
            $file = $request->file('cat_image') ;
            $ext = $file->getClientOriginalExtension() ;
            $filename = time() . '.' . $ext ;
            $file->move('uploads/cat_images', $filename);
        } else{
            $filename = Category::find($id)->cat_image;
        }

        Category::where('id',$id)->update([
            'cat_name'  => $request->cat_name,
            'cat_desc'  => $request->cat_desc,
            'cat_image' => $filename
        ]);
        return redirect('category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::destroy($id);
        return redirect('/category');
    }
}
