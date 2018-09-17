<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.service.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.service.create');
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
            'service_title' => 'required',
            'service_icon' => 'required',
            'service_content' => 'required',
            'service_url' => 'required',
        ]);
        
        $service = new Services([
            'service_title' => $request->get('service_title'),
            'service_icon' => $request->get('service_icon'),
            'service_content' => $request->get('service_content'),
            'show_front' => $request->get('show_front'),
            'service_url' => $request->get('service_url'),
        ]);

        $service->save();
        return redirect('/services')->with('message', 'Service added successful!');
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
        $service = Services::findOrFail($id)->toArray();
        return view('admin.service.edit', compact('service'));
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
        $services = Services::findOrFail($id);
        $this->validate($request, [
            'service_title' => 'required',
            'service_icon' => 'required',
            'service_content' => 'required',
            'service_url' => 'required',
        ]);
        
        $services->service_title = $request->get('service_title');
        $services->service_icon = $request->get('service_icon');
        $services->service_content = $request->get('service_content');
        $services->show_front = $request->get('show_front');
        $services->service_url = $request->get('service_url');
        
        $services->save();
        return redirect('/services')->with('message', 'Service update successful!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $services = Services::findOrFail($id);
        $services->is_delete = 'Y';
        $services->save();
        return redirect('/services')->with('message', 'Service Delete successful!');
    }
}
