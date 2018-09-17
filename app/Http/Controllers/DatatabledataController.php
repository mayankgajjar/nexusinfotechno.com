<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use App\Slider;
use App\Category;
use App\Latestwork;
use App\Testimonial;
use App\Happyclient;
use App\About;
use App\Services;
use App\Portfolio;
use App\Blog;
use App\Pages;
use App\Inquiry;
use App\Jobopening;
use App\Blogcategory;
use URL;
use DB;


class DatatabledataController extends Controller
{
    /**
    * Process datatables ajax request.
    *
    * @return \Illuminate\Http\JsonResponse
    */
    public function getSlider()
    {
        DB::statement(DB::raw('set @rownum=0'));
        $slider = Slider::select([DB::raw('@rownum  := @rownum  + 1 AS rownum'),'id', 'slider_title', 'slider_content', 'show_front'])
                ->where('is_delete', 'N')
                ->orderBy('created_at', 'dese')
                ->get();
        //$start = Request::get('start');
        return Datatables::of($slider)
            ->addColumn('action', function ($slider) {
                return '<a href="Slider/edit/'.$slider->id.'"><i class="fa fa-pencil-square-o" title = "Edit Slider"></i></a>&nbsp; '
                        . '<a href="Slider/delete/'.$slider->id.'" class="delete-slider"><i class="fa fa-trash-o" title = "Delete Slider"></i></a>';
            })
            ->editColumn('show_front', function($slider){
                if($slider->show_front == 'Y'){
                    return 'Yes';
                } else{
                    return 'No';  
                }                        
            })
            ->make(true);
    }
    
    public function getcategory()
    {
        DB::statement(DB::raw('set @rownum=0'));
        $category = Category::select([DB::raw('@rownum  := @rownum  + 1 AS rownum'),'id', 'category_title', 'show_front'])
                ->where('is_delete', 'N')
                ->orderBy('created_at', 'dese')
                ->get();
        return Datatables::of($category)
            ->addColumn('action', function ($category) {
                return '<a href="category/edit/'.$category->id.'"><i class="fa fa-pencil-square-o" title = "Edit Category"></i></a>&nbsp; '
                        . '<a href="category/delete/'.$category->id.'" class="delete-category"><i class="fa fa-trash-o" title = "Delete Category"></i></a>';
            })
            ->editColumn('show_front', function($category){
                if($category->show_front == 'Y'){
                    return 'Yes';
                } else{
                    return 'No';  
                }                        
            })
            ->make(true);
    }
    
    public function getlatestwork() {
        DB::statement(DB::raw('set @rownum=0'));
        
        $latestwork = Latestwork::select([DB::raw('@rownum  := @rownum  + 1 AS rownum'),'latestwork.id', 'latestwork.latestwork_title', 'categorys.category_title', 'latestwork.show_front'])
                ->join('categorys', 'categorys.id', '=', 'latestwork.latestwork_category')
                ->where('latestwork.is_delete', 'N')
                ->orderBy('latestwork.created_at', 'dese')
                ->get();
        return Datatables::of($latestwork)
            ->addColumn('action', function ($latestwork) {
                return '<a href="latest_work/edit/'.$latestwork->id.'"><i class="fa fa-pencil-square-o" title = "Edit Latest Work"></i></a>&nbsp; '
                        . '<a href="latest_work/delete/'.$latestwork->id.'" class="delete-latestwork"><i class="fa fa-trash-o" title = "Delete Latest Work"></i></a>';
            })
            ->editColumn('show_front', function($latestwork){
                if($latestwork->show_front == 'Y'){
                    return 'Yes';
                } else{
                    return 'No';  
                }                        
            })
            ->make(true);
    }
    
    public function gettestimonial() {
        DB::statement(DB::raw('set @rownum=0'));
        
        $testimonial = Testimonial::select([DB::raw('@rownum  := @rownum  + 1 AS rownum'),'id', 'name', 'comment', 'is_approved','show_front'])
                ->where('is_delete', 'N')
                ->orderBy('created_at', 'dese')
                ->get();
        return Datatables::of($testimonial)
            ->addColumn('action', function ($testimonial) {
                return '<a href="testimonial/edit/'.$testimonial->id.'"><i class="fa fa-pencil-square-o" title = "Edit Testimonial"></i></a>&nbsp; '
                        . '<a href="testimonial/delete/'.$testimonial->id.'" class="delete-testimonial"><i class="fa fa-trash-o" title = "Delete Testimonial"></i></a>';
            })
            ->editColumn('show_front', function($testimonial){
                if($testimonial->show_front == 'Y'){
                    return 'Yes';
                } else{
                    return 'No';  
                }                        
            })
            ->editColumn('is_approved', function($testimonial){
                if($testimonial->is_approved == 'Y'){
                    return 'Yes';
                } else{
                    return 'No';  
                }                        
            })
            ->make(true);
    }
    
    public function gethappyclient() {
        DB::statement(DB::raw('set @rownum=0'));
        
        $happyclient = Happyclient::select([DB::raw('@rownum  := @rownum  + 1 AS rownum'),'id', 'name','show_front'])
                ->where('is_delete', 'N')
                ->orderBy('created_at', 'dese')
                ->get();
        return Datatables::of($happyclient)
            ->addColumn('action', function ($happyclient) {
                return '<a href="happyclient/edit/'.$happyclient->id.'"><i class="fa fa-pencil-square-o" title = "Edit Happy Client"></i></a>&nbsp; '
                        . '<a href="happyclient/delete/'.$happyclient->id.'" class="delete-client"><i class="fa fa-trash-o" title = "Delete Happy Client"></i></a>';
            })
            ->editColumn('show_front', function($happyclient){
                if($happyclient->show_front == 'Y'){
                    return 'Yes';
                } else{
                    return 'No';  
                }                        
            })
            ->make(true);
    }
    
    public function getabout() {
        DB::statement(DB::raw('set @rownum=0'));
        
        $about = About::select([DB::raw('@rownum  := @rownum  + 1 AS rownum'),'id', 'introduction_content','show_front'])
                ->where('is_delete', 'N')
                ->orderBy('created_at', 'dese')
                ->get();
        return Datatables::of($about)
            ->addColumn('action', function ($about) {
                return '<a href="about/edit/'.$about->id.'"><i class="fa fa-pencil-square-o" title = "Edit Happy Client"></i></a>';
            })
            ->editColumn('show_front', function($about){
                if($about->show_front == 'Y'){
                    return 'Yes';
                } else{
                    return 'No';  
                }                        
            })
            ->make(true);
    }
    
    public function getservices() {
        DB::statement(DB::raw('set @rownum=0'));
        
        $service = Services::select([DB::raw('@rownum  := @rownum  + 1 AS rownum'),'id', 'service_title','service_content','show_front'])
                ->where('is_delete', 'N')
                ->orderBy('created_at', 'dese')
                ->get();
        return Datatables::of($service)
            ->addColumn('action', function ($service) {
                return '<a href="services/edit/'.$service->id.'"><i class="fa fa-pencil-square-o" title = "Edit Service"></i></a>&nbsp; '
                        . '<a href="services/delete/'.$service->id.'" class="delete-Service"><i class="fa fa-trash-o" title = "Delete Service"></i></a>';
            })
            ->editColumn('show_front', function($service){
                if($service->show_front == 'Y'){
                    return 'Yes';
                } else{
                    return 'No';  
                }                        
            })
            ->make(true);
    }
    
    public function getportfolios() {
        DB::statement(DB::raw('set @rownum=0'));
        
        $portfolio = Portfolio::select([DB::raw('@rownum  := @rownum  + 1 AS rownum'),'portfolio.id', 'portfolio.portfolio_title','categorys.category_title','portfolio.portfolio_url','portfolio.show_front'])
                ->join('categorys', 'categorys.id', '=', 'portfolio.portfolio_category')
                ->where('portfolio.is_delete', 'N')
                ->orderBy('portfolio.created_at', 'dese')
                ->get();
        
        return Datatables::of($portfolio)
            ->addColumn('action', function ($portfolio) {
                return '<a href="portfolios/edit/'.$portfolio->id.'"><i class="fa fa-pencil-square-o" title = "Edit Portfolio"></i></a>&nbsp; '
                        . '<a href="portfolios/delete/'.$portfolio->id.'" class="delete-portfolio"><i class="fa fa-trash-o" title = "Delete Portfolio"></i></a>';
            })
            ->editColumn('show_front', function($portfolio){
                if($portfolio->show_front == 'Y'){
                    return 'Yes';
                } else{
                    return 'No';  
                }                        
            })
            ->make(true);
    }
    
    public function getblog() {
        DB::statement(DB::raw('set @rownum=0'));
        
        $blog = Blog::select([DB::raw('@rownum  := @rownum  + 1 AS rownum'),'blog.id', 'blog.blog_title','categorys.category_title','blog.show_front'])
                ->join('categorys', 'categorys.id', '=', 'blog.blog_category')
                ->where('blog.is_delete', 'N')
                ->orderBy('blog.created_at', 'dese')
                ->get();
        
        return Datatables::of($blog)
            ->addColumn('action', function ($blog) {
                return '<a href="blogs/edit/'.$blog->id.'"><i class="fa fa-pencil-square-o" title = "Edit Blog"></i></a>&nbsp; '
                        . '<a href="blogs/delete/'.$blog->id.'" class="delete-blog"><i class="fa fa-trash-o" title = "Delete Blog"></i></a>';
            })
            ->editColumn('show_front', function($blog){
                if($blog->show_front == 'Y'){
                    return 'Yes';
                } else{
                    return 'No';  
                }                        
            })
            ->make(true);
    }
    
    public function getpage() {
        DB::statement(DB::raw('set @rownum=0'));
        
        $page = Pages::select([DB::raw('@rownum  := @rownum  + 1 AS rownum'),'id', 'title','menu','slug','mate_title'])
                ->orderBy('created_at', 'dese')
                ->get();
        
        return Datatables::of($page)
            ->addColumn('action', function ($page) {
                return '<a href="page/edit/'.$page->id.'"><i class="fa fa-pencil-square-o" title = "Edit Page"></i></a>&nbsp; '
                        . '<a href="page/delete/'.$page->id.'" class="delete-page"><i class="fa fa-trash-o" title = "Delete Page"></i></a>';
            })
            ->make(true);
    }
    
    public function getinquirys() {
        DB::statement(DB::raw('set @rownum=0'));
        
        $inquiry = Inquiry::select([DB::raw('@rownum  := @rownum  + 1 AS rownum'),'id', 'inquiry_name','inquiry_email','inquiry_contact_number','inquiry_subject','inquiry_massage','created_at'])
                ->orderBy('created_at', 'dese')
                ->get();
        
        return Datatables::of($inquiry)
            ->addColumn('action', function ($inquiry) {
                return '<a href="inquirys/delete/'.$inquiry->id.'" class="delete-Inquiry"><i class="fa fa-trash-o" title = "Delete inquiry"></i></a>';
            })
            ->make(true);
    }
    
    public function getjobopening() {
        DB::statement(DB::raw('set @rownum=0'));
        
        $jobopening = Jobopening::select([DB::raw('@rownum  := @rownum  + 1 AS rownum'),'id', 'title','number_vacancy','salary','show_front'])
                ->where('is_delete', 'N')
                ->orderBy('created_at', 'dese')
                ->get();
        
        return Datatables::of($jobopening)
            ->addColumn('action', function ($jobopening) {
                return '<a href="jobopening/edit/'.$jobopening->id.'"><i class="fa fa-pencil-square-o" title = "Edit Job Opening"></i></a>&nbsp; '
                        . '<a href="jobopening/delete/'.$jobopening->id.'" class="delete-blog"><i class="fa fa-trash-o" title = "Delete Job Opening"></i></a>';
            })
            ->editColumn('show_front', function($jobopening){
                if($jobopening->show_front == 'Y'){
                    return 'Yes';
                } else{
                    return 'No';  
                }                        
            })
            ->make(true);
    }
    
    public function getblogcategory()
    {
        DB::statement(DB::raw('set @rownum=0'));
        $category = Blogcategory::select([DB::raw('@rownum  := @rownum  + 1 AS rownum'),'id', 'category_title', 'show_front'])
                ->where('is_delete', 'N')
                ->orderBy('created_at', 'dese')
                ->get();
        return Datatables::of($category)
            ->addColumn('action', function ($category) {
                return '<a href="blogcategory/edit/'.$category->id.'"><i class="fa fa-pencil-square-o" title = "Edit Category"></i></a>&nbsp; '
                        . '<a href="blogcategory/delete/'.$category->id.'" class="delete-category"><i class="fa fa-trash-o" title = "Delete Category"></i></a>';
            })
            ->editColumn('show_front', function($category){
                if($category->show_front == 'Y'){
                    return 'Yes';
                } else{
                    return 'No';  
                }                        
            })
            ->make(true);
    }
}
