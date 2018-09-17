<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Portfolio;

class PortfoliosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.portfolio.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::where('is_delete', 'N')->get()->toArray();
        return view('admin.portfolio.create', compact('category'));
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
            'portfolio_title' => 'required',
            'portfolio_content' => 'required',
            'portfolio_category' => 'required',
            'portfolio_image' => 'required',
            'portfolio_technology' => 'required',
        ]);
        
        $image = $request->file('portfolio_image');
        $imageName = time().'.'.$request->portfolio_image->getClientOriginalExtension();           
        $request->portfolio_image->move(public_path('custom_image/portfolio_images'), $imageName);
        
        $portfolio = new Portfolio([
            'portfolio_technology' => $request->get('portfolio_technology'),
            'portfolio_title' => $request->get('portfolio_title'),
            'portfolio_image' => $imageName,
            'portfolio_category' => $request->get('portfolio_category'),
            'portfolio_url' => $request->get('portfolio_url'),
            'portfolio_content' => $request->get('portfolio_content'),
            'show_front' => $request->get('show_front'),
        ]);

        $portfolio->save();
        return redirect('/portfolios')->with('message', 'Portfolio added successful!');
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
        $portfolio = Portfolio::findOrFail($id);
        return view('admin.portfolio.edit', compact('category','portfolio'));
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
        $portfolio = Portfolio::findOrFail($id);
        $this->validate($request, [
            'portfolio_title' => 'required',
            'portfolio_content' => 'required',
            'portfolio_category' => 'required',
            'portfolio_technology' => 'required',
        ]);
        
        if($request->file('portfolio_image'))
        {
            unlink(public_path('custom_image/portfolio_images/'.$portfolio->portfolio_image));
            $image = $request->file('portfolio_image');
            $imageName = time().'.'.$request->portfolio_image->getClientOriginalExtension();           
            $request->portfolio_image->move(public_path('custom_image/portfolio_images'), $imageName);
        } else {
            $imageName = $portfolio->portfolio_image;
        }
        $portfolio->portfolio_technology = $request->get('portfolio_technology');
        $portfolio->portfolio_title = $request->get('portfolio_title');
        $portfolio->portfolio_image = $imageName;
        $portfolio->portfolio_category = $request->get('portfolio_category');
        $portfolio->portfolio_url = $request->get('portfolio_url');
        $portfolio->portfolio_content = $request->get('portfolio_content');
        $portfolio->show_front = $request->get('show_front');
        
        $portfolio->save();
        return redirect('/portfolios')->with('message', 'Portfolio update successful!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        unlink(public_path('custom_image/portfolio_images/'.$portfolio->portfolio_image));
        $portfolio->is_delete = 'Y';
        $portfolio->save();
        return redirect('/portfolios')->with('message', 'Portfolio Delete successful!');
    }
}
