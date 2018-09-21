<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Blogcategory;
use App\Assingblogcategory;
use Illuminate\Validation\Rule;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.blog.index');
    }

    /**
     * Show the form for creating a new resource.
     *s
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Blogcategory::where('is_delete', 'N')->get()->toArray();
        return view('admin.blog.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $title =  $request->get('blog_title');
        $this->validate($request, [
            'blog_title' => 'required|unique:blog,blog_title,'.$title,
            'blog_content' => 'required',
            'blog_category' => 'required',
        ]);
        
        if($request->file('blog_image'))
        {
            $imageName = time().'.'.$request->blog_image->getClientOriginalExtension();           
            $request->blog_image->move(public_path('custom_image/blog/image/'), $imageName);
        } else {
            $imageName = '';
        }
        
        if($request->file('blog_video'))
        {
            $videoName = time().'.'.$request->blog_image->getClientOriginalExtension();           
            $request->blog_video->move(public_path('custom_image/blog/video'), $videoName);
        } else {
            $videoName = '';
        }
        
        $categoryList = implode(',', $request->get('blog_category'));
        $blog = new Blog([
            'blog_title' => $request->get('blog_title'),
            'blog_image' => $imageName,
            'blog_content' => $request->get('blog_content'),
            'blog_category' => $categoryList,
            'blog_video' => $videoName,
            'show_front' => $request->get('show_front'),
            'blog_slug' => str_slug($request->get('blog_title'))
        ]);
        $blog->save();
        return redirect('/blogs')->with('message', 'Blog added successful!');
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
        $category = Blogcategory::where('is_delete', 'N')->get()->toArray();
        $blog = Blog::findOrFail($id);
        /*$blog = Blog::select(['blog.id', 'blog.id','blog.blog_title', 'blog.blog_image', 'blog.blog_paragraph1', 'blog.blog_paragraph2', 'blog.blog_paragraph3','blog.blog_slug','blog.blog_video','blog.show_front','blog_category.category_title','blog_category.id as cid'])
                ->where('blog.id', $id)
                ->first();*/
        
        return view('admin.blog.edit', compact('category','blog'));
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
        
        $blog = Blog::findOrFail($id);
        $this->validate($request, [
            //'blog_title' => 'required|unique:blog,blog_title,'.$title,Rule::unique('blog', 'blog_title')->whereNot('id', $id),
            'blog_title' => [ 'required', 'string', 'max:255', Rule::unique('blog', 'blog_title')->whereNot('id', $id)],
            'blog_content' => 'required',
            'blog_category' => 'required',
        ]);
        
        if($request->file('blog_image')) {
            unlink(public_path('custom_image/blog/image/'.$blog->blog_image));
            $imageName = time().'.'.$request->blog_image->getClientOriginalExtension();           
            $request->blog_image->move(public_path('custom_image/blog/image/'), $imageName);
        } else {
            $imageName = $blog->blog_image;
        }
        
        if($request->file('blog_video')) {
            unlink(public_path('custom_image/blog/video/'.$blog->blog_video));
            $videoName = time().'.'.$request->blog_video->getClientOriginalExtension();           
            $request->blog_video->move(public_path('custom_image/blog/video/'), $videoName);
        } else {
            $videoName = $blog->blog_video;
        }
        
        $categoryList = implode(',', $request->get('blog_category'));
        $blog->blog_title = $request->get('blog_title');
        $blog->blog_image = $imageName;
        $blog->blog_content = $request->get('blog_content');
        $blog->blog_category = $categoryList;
        $blog->blog_video = $videoName;
        $blog->show_front = $request->get('show_front');
        $blog->blog_slug = str_slug($request->get('blog_title'));
        
        $blog->save();
        return redirect('/blogs')->with('message', 'Blogs update successful!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        if($blog->blog_image != ''){
            unlink(public_path('custom_image/blog/image/'.$blog->blog_image));
        }
        if($blog->blog_video != ''){
            unlink(public_path('custom_image/blog/video/'.$blog->blog_video));
        }
        $blog->delete();
        return redirect('/blogs')->with('message', 'Blog Delete successful!');
    }
}
