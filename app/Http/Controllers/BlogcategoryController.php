<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blogcategory;

class BlogcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.blogcategory.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blogcategory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'category_title' => 'required',
        ]);
        
        $category = new Blogcategory([
            'category_title' => $request->get('category_title'),
            'show_front' => $request->get('show_front'),
        ]);

        $category->save();
        return redirect('/blogcategory')->with('message', 'Category added successful!');
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
        $category = Blogcategory::findOrFail($id)->toArray();
        return view('admin.blogcategory.edit',compact('category'));
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
        $Category = Blogcategory::findOrFail($id);
        $this->validate($request, [
            'category_title' => 'required',
        ]);
        
        $Category->category_title = $request->get('category_title');
        $Category->show_front = $request->get('show_front');
        
        $Category->save();
        return redirect('/blogcategory')->with('message', 'Category update successful!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Category = Blogcategory::findOrFail($id);
        $Category->is_delete = 'Y';
        $Category->save();
        return redirect('/blogcategory')->with('message', 'Category Delete successful!');
    }
}
