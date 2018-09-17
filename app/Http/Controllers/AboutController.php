<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.about.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $about = About::findOrFail($id)->toArray();
        return view('admin.about.edit',compact('about'));
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
        $about = About::findOrFail($id);
        /*$this->validate($request, [
            'introduction_content' => 'required',
            'approach_work_content' => 'required',
            'profitability_content' => 'required',
            'giving_back_content' => 'required',
        ]);*/
        
        if($request->file('introduction_image'))
        {
            unlink(public_path('custom_image/about_images/'.$about->introduction_image));
            $image = $request->file('introduction_image');
            $introduction_image = 'introduction_'.time().'.'.$request->introduction_image->getClientOriginalExtension();           
            $request->introduction_image->move(public_path('custom_image/about_images'), $introduction_image);
        } else {
            $introduction_image = $about->introduction_image;
        }
        
        if($request->file('approach_work_image'))
        {
            unlink(public_path('custom_image/about_images/'.$about->approach_work_image));
            $image = $request->file('approach_work_image');
            $approach_image = 'approach_'.time().'.'.$request->approach_work_image->getClientOriginalExtension();           
            $request->approach_work_image->move(public_path('custom_image/about_images'), $approach_image);
        } else {
            $approach_image = $about->approach_work_image;
        }
        
        if($request->file('giving_back_image'))
        {
            unlink(public_path('custom_image/about_images/'.$about->giving_back_image));
            $image = $request->file('giving_back_image');
            $giving_image = 'giving_'.time().'.'.$request->giving_back_image->getClientOriginalExtension();           
            $request->giving_back_image->move(public_path('custom_image/about_images'), $giving_image);
        } else {
            $giving_image = $about->giving_back_image;
        }
        
        if($request->file('profitability_image'))
        {
            unlink(public_path('custom_image/about_images/'.$about->profitability_image));
            $image = $request->file('profitability_image');
            $profitability_image = 'profitability_'.time().'.'.$request->profitability_image->getClientOriginalExtension();           
            $request->profitability_image->move(public_path('custom_image/about_images'), $profitability_image);
        } else {
            $profitability_image = $about->profitability_image;
        }
        
        $about->introduction_image = $introduction_image;
        $about->approach_work_image = $approach_image;
        $about->giving_back_image = $giving_image;
        $about->profitability_image = $profitability_image;
        $about->introduction_content = $request->get('introduction_content');
        $about->approach_work_content = $request->get('approach_work_content');
        $about->profitability_content = $request->get('profitability_content');
        $about->giving_back_content = $request->get('giving_back_content');
        $about->show_front = $request->get('show_front');
        
        $about->save();
        return redirect('/about')->with('message', 'About update successful!');
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
}
