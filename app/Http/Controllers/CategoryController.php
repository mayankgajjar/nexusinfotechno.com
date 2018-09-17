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
        return view('admin.category.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
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
        
        $category = new Category([
            'category_title' => $request->get('category_title'),
            'show_front' => $request->get('show_front'),
        ]);

        $category->save();
        return redirect('/category')->with('message', 'Category added successful!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cateagory  $cateagory
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cateagory  $cateagory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id)->toArray();
        return view('admin.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cateagory  $cateagory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Category = Category::findOrFail($id);
        $this->validate($request, [
            'category_title' => 'required',
        ]);
        
        $Category->category_title = $request->get('category_title');
        $Category->show_front = $request->get('show_front');
        
        $Category->save();
        return redirect('/category')->with('message', 'Category update successful!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cateagory  $cateagory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Category = Category::findOrFail($id);
        $Category->is_delete = 'Y';
        $Category->save();
        return redirect('/category')->with('message', 'Category Delete successful!');
    }
}
