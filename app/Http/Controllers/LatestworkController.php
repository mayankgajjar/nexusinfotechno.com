<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Latestwork;

class LatestworkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.latestwork.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::where('is_delete', 'N')->get()->toArray();
        return view('admin.latestwork.create',compact('category'));
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
            'latestwork_title' => 'required',
            'latestwork_category' => 'required',
            'image' => 'required',
            'latestwork_content' => 'required',
            'latestwork_technology' => 'required',
        ]);
        
        $image = $request->file('image');
        $imageName = time().'.'.$request->image->getClientOriginalExtension();           
        $request->image->move(public_path('custom_image/latestwork_images'), $imageName);
        
        $Latestwork = new Latestwork([
            'latestwork_title' => $request->get('latestwork_title'),
            'latestwork_image' => $imageName,
            'latestwork_category' => $request->get('latestwork_category'),
            'latestwork_content' => $request->get('latestwork_content'),
            'latestwork_technology' => $request->get('latestwork_technology'),
            'latestwork_url' => $request->get('latestwork_url'),
            'show_front' => $request->get('show_front'),
        ]);

        $Latestwork->save();
        return redirect('/latest_work')->with('message', 'Latestwork added successful!');
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
        $category = Category::where('is_delete', 'N')->get()->toArray();
        $latestwork = Latestwork::findOrFail($id)->toArray();
        return view('admin.latestwork.edit',compact('category','latestwork'));
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
        $latestwork = Latestwork::findOrFail($id);
        $this->validate($request, [
            'latestwork_title' => 'required',
            'latestwork_category' => 'required',
        ]);
        
        if($request->file('image'))
        {
            unlink(public_path('custom_image/latestwork_images/'.$latestwork->latestwork_image));
            $image = $request->file('image');
            $imageName = time().'.'.$request->image->getClientOriginalExtension();           
            $request->image->move(public_path('custom_image/latestwork_images'), $imageName);
        } else {
            $imageName = $latestwork->latestwork_image;
        }
        
        $latestwork->latestwork_title = $request->get('latestwork_title');
        $latestwork->latestwork_image = $imageName;
        $latestwork->latestwork_category = $request->get('latestwork_category');
        $latestwork->show_front = $request->get('show_front');
        $latestwork->latestwork_content = $request->get('latestwork_content');
        $latestwork->latestwork_technology = $request->get('latestwork_technology');
        $latestwork->latestwork_url = $request->get('latestwork_url');
        
        $latestwork->save();
        return redirect('/latest_work')->with('message', 'Latestwork update successful!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $latestwork = Latestwork::findOrFail($id);
        unlink(public_path('custom_image/latestwork_images/'.$latestwork->latestwork_image));
        $latestwork->is_delete = 'Y';
        $latestwork->save();
        return redirect('/latest_work')->with('message', 'Latestwork Delete successful!');
    }
}
