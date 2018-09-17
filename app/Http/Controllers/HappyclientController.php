<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Happyclient;

class HappyclientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.happyclient.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.happyclient.create');
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
            'image' => 'required',
        ]);
        
        $image = $request->file('image');
        $imageName = time().'.'.$request->image->getClientOriginalExtension();           
        $request->image->move(public_path('custom_image/happyclient_images'), $imageName);
        
        $happyclient = new Happyclient([
            'name' => $request->get('name'),
            'image' => $imageName,
            'show_front' => $request->get('show_front'),
        ]);

        $happyclient->save();
        return redirect('/happyclient')->with('message', 'Happy Client added successful!');
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
        $happyclient = Happyclient::findOrFail($id)->toArray();
        return view('admin.happyclient.edit',compact('happyclient'));
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
        $happyclient = Happyclient::findOrFail($id);
        $this->validate($request, [
            'name' => 'required',
        ]);
        
        if($request->file('image'))
        {
            unlink(public_path('custom_image/happyclient_images/'.$happyclient->image));
            $image = $request->file('image');
            $imageName = time().'.'.$request->image->getClientOriginalExtension();           
            $request->image->move(public_path('custom_image/happyclient_images'), $imageName);
        } else {
            $imageName = $happyclient->image;
        }
        
        $happyclient->name = $request->get('name');
        $happyclient->image = $imageName;
        $happyclient->show_front = $request->get('show_front');
        
        $happyclient->save();
        return redirect('/happyclient')->with('message', 'Happy Client update successful!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $happyclient = Happyclient::findOrFail($id);
        unlink(public_path('custom_image/happyclient_images/'.$happyclient->image));
        $happyclient->is_delete = 'Y';
        $happyclient->save();
        return redirect('/happyclient')->with('message', 'Happy client Delete successful!');
    }
}
