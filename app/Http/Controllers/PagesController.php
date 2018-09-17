<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pages;
use DB;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.page.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $service_menu = Pages::select(['id', 'slug', 'title', 'menu'])
                ->where('menu', 'service')
                ->where('sub_menu', 0)
                ->orderBy('page_order', 'asc')
                ->get();
        
        return view('admin.page.create',compact('service_menu'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ini_set('memory_limit','2048M');
        
        $this->validate($request, [
            'title' => 'required',
            'menu' => 'required',
            'mate_title' => 'required',
            'mate_keywords' => 'required',
            'mate_description' => 'required',
            'body' => 'required',
        ]);
        
        if($request->get('sub_menu') != 0){
            $update_data = array('is_sub_menu' => 'Y');
            DB::table('pages')->where('id', $request->get('sub_menu'))->update($update_data);
        }
        
        $page = new Pages([
            'title' => $request->get('title'),
            'menu' => $request->get('menu'),
            'mate_title' => $request->get('mate_title'),
            'mate_keywords' => $request->get('mate_keywords'),
            'mate_description' => $request->get('mate_description'),
            'body' => $request->get('body'),
            'slug' => str_slug($request->get('title')),
            'page_order' => $request->get('page_order'),
            'sub_menu' => $request->get('sub_menu'),
        ]);

        $page->save();
        return redirect('/page')->with('message', 'Page added successful!');
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
        $pages = Pages::findOrFail($id);
        
        $service_menu = Pages::select(['id', 'slug', 'title', 'menu'])
                ->where('menu', 'service')
                ->where('sub_menu', 0)
                ->orderBy('page_order', 'asc')
                ->get();
        
        return view('admin.page.edit', compact('pages','service_menu'));
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
        ini_set('memory_limit','2048M');
        $pages = Pages::findOrFail($id);
        $this->validate($request, [
            'title' => 'required',
            'menu' => 'required',
            'mate_title' => 'required',
            'mate_keywords' => 'required',
            'mate_description' => 'required',
            'body' => 'required',
        ]);
        
        if($request->get('sub_menu') != 0){
            $update_data = array('is_sub_menu' => 'Y');
            DB::table('pages')->where('id', $request->get('sub_menu'))->update($update_data);
        } else {
            $number = DB::table('pages')->where('sub_menu', $pages->sub_menu)->count();
            if($number == 1){
                $update_data = array('is_sub_menu' => 'N');
                DB::table('pages')->where('id', $pages->sub_menu)->update($update_data);
            }
        }
        
        $pages->title = $request->get('title');
        $pages->menu = $request->get('menu');
        $pages->mate_title = $request->get('mate_title');
        $pages->mate_keywords = $request->get('mate_keywords');
        $pages->mate_description = $request->get('mate_description');
        $pages->body = $request->get('body');
        $pages->slug = str_slug($request->get('title'));
        $pages->page_order = $request->get('page_order');
        $pages->sub_menu = $request->get('sub_menu');
        
        $pages->save();
        return redirect('/page')->with('message', 'Page update successful!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pages = Pages::findOrFail($id);
        
        /*if($pages->sub_menu != 0){
            $number = DB::table('pages')->where('sub_menu', $id)->count();
            if($number == 1){
                $update_data = array('is_sub_menu' => 'N');
                DB::table('pages')->where('id', $pages->sub_menu)->update($update_data);
            }
        }*/
        
        $pages->forceDelete();
        return redirect('/page')->with('message', 'Page Delete successful!');
    }
}
