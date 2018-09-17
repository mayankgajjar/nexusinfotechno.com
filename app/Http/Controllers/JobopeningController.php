<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobopening;

class JobopeningController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.job.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.job.create');
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
            'title' => 'required',
            'job_description' => 'required',
            'qualification' => 'required',
            'number_vacancy' => 'required',
            'salary' => 'required',
            'experience' => 'required',
            'location' => 'required',
            'type' => 'required',
        ]);
        
        $jobopening = new Jobopening([
            'title' => $request->get('title'),
            'job_description' => $request->get('job_description'),
            'qualification' => $request->get('qualification'),
            'number_vacancy' => $request->get('number_vacancy'),
            'salary' => $request->get('salary'),
            'experience' => $request->get('experience'),
            'location' => $request->get('location'),
            'type' => $request->get('type'),
            'show_front' => $request->get('show_front'),
        ]);

        $jobopening->save();
        return redirect('/jobopening')->with('message', 'Job opening added successful!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jobopening = Jobopening::findOrFail($id)->toArray();
        return view('admin.job.show',compact('jobopening'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jobopening = Jobopening::findOrFail($id)->toArray();
        return view('admin.job.edit',compact('jobopening'));
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
        $jobopening = Jobopening::findOrFail($id);
        
        $this->validate($request, [
            'title' => 'required',
            'job_description' => 'required',
            'qualification' => 'required',
            'number_vacancy' => 'required',
            'salary' => 'required',
            'experience' => 'required',
            'location' => 'required',
            'type' => 'required',
        ]);
        
        $jobopening->title = $request->get('title');
        $jobopening->job_description = $request->get('job_description');
        $jobopening->qualification = $request->get('qualification');
        $jobopening->number_vacancy = $request->get('number_vacancy');
        $jobopening->salary = $request->get('salary');
        $jobopening->experience = $request->get('experience');
        $jobopening->location = $request->get('location');
        $jobopening->type = $request->get('type');
        $jobopening->show_front = $request->get('show_front');
        
        $jobopening->save();
        return redirect('/jobopening')->with('message', 'Job opening updated successful!');
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
