<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimonial;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.testimonial.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.testimonial.create');
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
            'name' => 'required',
            'comment' => 'required',
            'image' => 'required',
        ]);
        
        $image = $request->file('image');
        $imageName = time().'.'.$request->image->getClientOriginalExtension();           
        $request->image->move(public_path('custom_image/testimonial_images'), $imageName);
        
        $testimonial = new Testimonial([
            'name' => $request->get('name'),
            'comment' => $request->get('comment'),
            'rating' => $request->get('rating'),
            'designation' => $request->get('designation'),
            'image' => $imageName,
            'is_approved' => $request->get('is_approved'),
            'show_front' => $request->get('show_front'),
        ]);

        $testimonial->save();
        return redirect('/testimonial')->with('message', 'Testimonial added successful!');
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
        $testimonial = Testimonial::findOrFail($id)->toArray();
        return view('admin.testimonial.edit',compact('testimonial'));
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
        $testimonial = Testimonial::findOrFail($id);
        $this->validate($request, [
            'name' => 'required',
            'comment' => 'required',
        ]);
        
        if($request->file('image'))
        {
            unlink(public_path('custom_image/testimonial_images/'.$testimonial->image));
            $image = $request->file('image');
            $imageName = time().'.'.$request->image->getClientOriginalExtension();           
            $request->image->move(public_path('custom_image/testimonial_images'), $imageName);
        } else {
            $imageName = $testimonial->image;
        }
        
        $testimonial->name = $request->get('name');
        $testimonial->comment = $request->get('comment');
        $testimonial->rating = $request->get('rating');
        $testimonial->designation = $request->get('designation');
        $testimonial->image = $imageName;
        $testimonial->is_approved = $request->get('is_approved');
        $testimonial->show_front = $request->get('show_front');
        
        $testimonial->save();
        return redirect('/testimonial')->with('message', 'Testimonial update successful!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        unlink(public_path('custom_image/testimonial_images/'.$testimonial->image));
        $testimonial->is_delete = 'Y';
        $testimonial->save();
        return redirect('/testimonial')->with('message', 'Testimonial Delete successful!');
    }
}
