<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.slider.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.create');
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
            'slider_title' => 'required',
            'slider_content' => 'required',
            'image' => 'required',
        ]);
        
        $image = $request->file('image');
        $imageName = time().'.'.$request->image->getClientOriginalExtension();           
        $request->image->move(public_path('custom_image/slieder_images'), $imageName);
        
        $Slider = new Slider([
            'slider_title' => $request->get('slider_title'),
            'slider_image' => $imageName,
            'slider_content' => $request->get('slider_content'),
            'show_front' => $request->get('show_front'),
        ]);

        $Slider->save();
        return redirect('/Slider')->with('message', 'Slider added successful!');
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
        $Slider = Slider::findOrFail($id)->toArray();
        return view('admin.slider.edit',compact('Slider'));
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
        $Slider = Slider::findOrFail($id);
        $this->validate($request, [
            'slider_title' => 'required',
            'slider_content' => 'required',
        ]);
        
        if($request->file('image'))
        {
            unlink(public_path('custom_image/slieder_images/'.$Slider->slider_image));
            $image = $request->file('image');
            $imageName = time().'.'.$request->image->getClientOriginalExtension();           
            $request->image->move(public_path('custom_image/slieder_images'), $imageName);
        } else {
            $imageName = $Slider->slider_image;
        }
        
        $Slider->slider_title = $request->get('slider_title');
        $Slider->slider_image = $imageName;
        $Slider->slider_content = $request->get('slider_content');
        $Slider->show_front = $request->get('show_front');
        
        $Slider->save();
        return redirect('/Slider')->with('message', 'Slider update successful!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Slider = Slider::findOrFail($id);
        unlink(public_path('custom_image/slieder_images/'.$Slider->slider_image));
        $Slider->is_delete = 'Y';
        $Slider->save();
        return redirect('/Slider')->with('message', 'Slider Delete successful!');
    }
}
