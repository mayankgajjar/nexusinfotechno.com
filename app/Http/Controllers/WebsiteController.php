<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Services;
use App\Category;
use App\Portfolio;
use App\Happyclient;
use App\About;
use App\Latestwork;
use App\Testimonial;
use App\Slider;
use App\Pages;
use App\Blogcategory;
use App\Inquiry;
use App\Jobopening;
use Mail;
use DB;

class WebsiteController extends Controller
{
    public function index(){
        $title = "Web Design, E-commerce Website Development, Digital Marketing Company in Surat-Nexus Info Techno";
        $keywords = "web design company in surat, website development company surat, seo company in surat, digital marketing company in surat, ecommerce website development, website design in surat, software company in surat, seo company in surat, website developer in surat, it companies in surat, website make in surat, android development company in surat, ios development company in surat, iphone app development company in surat, ios app developer";
        $description = "Nexus Info Techno is one of the fastest growing website development company in Surat, India. We offer products and services like customized software, website design in Surat, ecommerce services in Surat. We are SEO expert Surat and have years of experience in Digital Marketing, Social Media Marketing &amp; Website SEO.";
        
        $service_menu = Pages::select(['id', 'slug', 'title', 'menu','sub_menu','is_sub_menu'])
                ->where('menu', 'service')
                ->where('sub_menu', '0')
                ->orderBy('page_order', 'asc')
                ->get();
        
        $sub_service_menu = Pages::select(['id', 'slug', 'title', 'menu','sub_menu'])
                ->where('menu', 'service')
                ->where('sub_menu', '!=' ,'0')
                ->orderBy('page_order', 'asc')
                ->get();
       
        $slider = Slider::select(['id', 'slider_title', 'slider_content', 'slider_image'])
                ->where('is_delete', 'N')
                ->where('show_front', 'Y')
                ->orderBy('created_at', 'dese')
                ->get();
        
        $latestwork = Latestwork::select(['latestwork.id', 'latestwork.latestwork_title', 'categorys.category_title', 'latestwork.show_front', 'latestwork.latestwork_image'])
                ->join('categorys', 'categorys.id', '=', 'latestwork.latestwork_category')
                ->where('latestwork.is_delete', 'N')
                ->where('latestwork.show_front', 'Y')
                ->orderBy('latestwork.created_at', 'dese')
                ->get();
        
        $about = About::select(['id', 'introduction_content','introduction_image','approach_work_content','approach_work_image','giving_back_content','giving_back_image','profitability_content','profitability_image'])
                ->where('is_delete', 'N')
                ->where('show_front', 'Y')
                ->where('id', 1)
                ->first();
        
        $testimonial = Testimonial::select(['id', 'name', 'comment', 'image','rating','designation'])
                ->where('is_delete', 'N')
                ->where('show_front', 'Y')
                ->orderBy('created_at', 'dese')
                ->get();
        
        foreach ($testimonial as $value) {
            $testimonial_image[] = $value->image;
        }
        
        $service = Services::select(['id', 'service_title','service_content','service_icon','service_url'])
                ->where('is_delete', 'N')
                ->where('show_front', 'Y')
                ->orderBy('created_at', 'dese')
                ->get();
        
        $happyclient = Happyclient::select(['id', 'name','image'])
                ->where('is_delete', 'N')
                ->where('show_front', 'Y')
                ->orderBy('created_at', 'dese')
                ->get();
        
        return view('website.index',compact('title','about','latestwork','testimonial','testimonial_image','slider','keywords','description','service_menu','service','happyclient','sub_service_menu'));
    }
    
    public function about(){
        $title = "About us";
        $keywords = '';
        $description = 'Web Development Company In India – Nexus InfoTechno  is leading Website Design and Development Company Located In Surat. We are offer best IT services Like mobile app development and digital marketing';
        
        $service_menu = Pages::select(['id', 'slug', 'title', 'menu','sub_menu','is_sub_menu'])
                ->where('menu', 'service')
                ->where('sub_menu', '0')
                ->orderBy('page_order', 'asc')
                ->get();
        
        $sub_service_menu = Pages::select(['id', 'slug', 'title', 'menu','sub_menu'])
                ->where('menu', 'service')
                ->where('sub_menu', '!=' ,'0')
                ->orderBy('page_order', 'asc')
                ->get();
        
        $about = About::select(['id', 'introduction_content','introduction_image','approach_work_content','approach_work_image','giving_back_content','giving_back_image','profitability_content','profitability_image'])
                ->where('is_delete', 'N')
                ->where('id', 1)
                ->first();
        
        return view('website.about',compact('title','about','keywords','description','service_menu','sub_service_menu'));
    }
    
    public function service() {
        $title = "Service";
        $keywords = 'Mobile App Development Company In India, Mobile App Developers, Web App Development Company In India';
        $description = 'Mobile App Development Company In India -  Nexus InfoTechno  Mobile App Developers have been providing best Mobile App Development services llike Android & IOS from india.';
        
        $service_menu = Pages::select(['id', 'slug', 'title', 'menu','sub_menu','is_sub_menu'])
                ->where('menu', 'service')
                ->where('sub_menu', '0')
                ->orderBy('page_order', 'asc')
                ->get();
        
        $sub_service_menu = Pages::select(['id', 'slug', 'title', 'menu','sub_menu'])
                ->where('menu', 'service')
                ->where('sub_menu', '!=' ,'0')
                ->orderBy('page_order', 'asc')
                ->get();
        
        $service = Services::select(['id', 'service_title','service_content','service_icon'])
                ->where('is_delete', 'N')
                ->where('show_front', 'Y')
                ->orderBy('created_at', 'dese')
                ->get();
        
        $happyclient = Happyclient::select(['id', 'name','image'])
                ->where('is_delete', 'N')
                ->where('show_front', 'Y')
                ->orderBy('created_at', 'dese')
                ->get();
        
        return view('website.service',compact('title','service','happyclient','keywords','description','service_menu','sub_service_menu'));
    }
    
    public function contact() {
        $title = "Contact us";
        $keywords = 'Mobile App Development Company In India, Mobile App Developers, Web App Development Company In India';
        $description = 'Web Development Company In India – Nexus InfoTechno  is leading Website Design and Development Company Located In Surat. We are offer best IT services Like mobile app development and digital marketing';
        
        $service_menu = Pages::select(['id', 'slug', 'title', 'menu','sub_menu','is_sub_menu'])
                ->where('menu', 'service')
                ->where('sub_menu', '0')
                ->orderBy('page_order', 'asc')
                ->get();
        
        $sub_service_menu = Pages::select(['id', 'slug', 'title', 'menu','sub_menu'])
                ->where('menu', 'service')
                ->where('sub_menu', '!=' ,'0')
                ->orderBy('page_order', 'asc')
                ->get();
        
        return view('website.contact', compact('title','keywords','description','service_menu','sub_service_menu'));
    }
    
    public function portfolio() {
        $title = "Nexus Infotechno Portfolio, Our Latest Work";
        $keywords = 'Mobile App Development Company In India, Mobile App Developers, Web App Development Company In India';
        $description = 'IT company in Surat, Web Design, Website Development, Application Development, Domain Registration, Web Hosting, SEO, Outsourcing Services, IT Consultancy';
        
        $service_menu = Pages::select(['id', 'slug', 'title', 'menu','sub_menu','is_sub_menu'])
                ->where('menu', 'service')
                ->where('sub_menu', '0')
                ->orderBy('page_order', 'asc')
                ->get();
        
        $sub_service_menu = Pages::select(['id', 'slug', 'title', 'menu','sub_menu'])
                ->where('menu', 'service')
                ->where('sub_menu', '!=' ,'0')
                ->orderBy('page_order', 'asc')
                ->get();
        
        $category = Category::select(['id', 'category_title', 'show_front'])
                ->where('is_delete', 'N')
                ->where('show_front', 'Y')
                ->orderBy('id', 'ASC')
                ->get();
        
        $portfolio = Portfolio::select(['portfolio.id', 'portfolio.portfolio_title','categorys.category_title','portfolio.portfolio_url','portfolio.show_front','portfolio.portfolio_image','portfolio.portfolio_category'])
                ->join('categorys', 'categorys.id', '=', 'portfolio.portfolio_category')
                ->where('portfolio.is_delete', 'N')
                ->where('portfolio.show_front', 'Y')
                ->orderBy('portfolio.created_at', 'dese')
                ->get();
        
        return view('website.portfolio',compact('title','category','portfolio','keywords','description','service_menu','sub_service_menu'));
    }
    
    public function blogs() {
        $title = "Blogs";
        $keywords = 'Mobile App Development Company In India, Mobile App Developers, Web App Development Company In India';
        $description = 'Web Development Company In India – Nexus InfoTechno  is leading Website Design and Development Company Located In Surat. We are offer best IT services Like mobile app development and digital marketing';
        
        $service_menu = Pages::select(['id', 'slug', 'title', 'menu','sub_menu','is_sub_menu'])
                ->where('menu', 'service')
                ->where('sub_menu', '0')
                ->orderBy('page_order', 'asc')
                ->get();
        
        $sub_service_menu = Pages::select(['id', 'slug', 'title', 'menu','sub_menu'])
                ->where('menu', 'service')
                ->where('sub_menu', '!=' ,'0')
                ->orderBy('page_order', 'asc')
                ->get();
        
        $blog = Blog::select(['blog.id', 'blog.blog_title', 'blog.blog_category','blog_category.category_title','blog.blog_image','blog.blog_content','blog.blog_slug','blog.blog_video','blog.created_at','blog.blog_paragraph1'])
                ->join('blog_category', 'blog_category.id', '=', 'blog.blog_category')
                ->where('blog.is_delete', 'N')
                ->where('blog.show_front', 'Y')
                ->orderBy('blog.created_at', 'dese')
                ->paginate(10);
        
        $category = Blogcategory::select(['id', 'category_title', 'show_front'])
                ->where('is_delete', 'N')
                ->where('show_front', 'Y')
                ->orderBy('id', 'ASC')
                ->get();
        
        $recent_blog = Blog::select(['blog.id', 'blog.blog_title', 'blog.blog_category','blog_category.category_title','blog.blog_image','blog.blog_content','blog.blog_slug','blog.blog_video','blog.created_at','blog.blog_paragraph1'])
                ->join('blog_category', 'blog_category.id', '=', 'blog.blog_category')
                ->where('blog.is_delete', 'N')
                ->where('blog.show_front', 'Y')
                ->orderBy('blog.created_at', 'dese')
                ->limit(5)
                ->get();
        
        return view('website.blog',compact('title','blog','keywords','description','service_menu','category','recent_blog','sub_service_menu'));
    }
    
    public function blogshow($cat,$id) {
        $title = "Show Blog";
        $keywords = 'Mobile App Development Company In India, Mobile App Developers, Web App Development Company In India';
        $description = 'Web Development Company In India – Nexus InfoTechno  is leading Website Design and Development Company Located In Surat. We are offer best IT services Like mobile app development and digital marketing';
        
        $service_menu = Pages::select(['id', 'slug', 'title', 'menu','sub_menu','is_sub_menu'])
                ->where('menu', 'service')
                ->where('sub_menu', '0')
                ->orderBy('page_order', 'asc')
                ->get();
        
        $sub_service_menu = Pages::select(['id', 'slug', 'title', 'menu','sub_menu'])
                ->where('menu', 'service')
                ->where('sub_menu', '!=' ,'0')
                ->orderBy('page_order', 'asc')
                ->get();
        
        $blog = Blog::select(['blog_category.category_title', 'blog.*'])
                ->join('blog_category', 'blog_category.id', '=', 'blog.blog_category')
                ->where('blog.is_delete', 'N')
                ->where('blog.show_front', 'Y')
                ->where('blog.blog_slug', $id)
                ->first();
        
        return view('website.showblog',compact('title','blog','keywords','description','service_menu','sub_service_menu'));
        
    }
    
    public function showpage($page) {
        
        $service = Pages::select(['*'])
                ->where('slug', $page)
                ->first();
        
        $title = $service['mate_title'];
        $keywords = $service['mate_keywords'];
        $description = $service['mate_description'];
        
        $service_menu = Pages::select(['id', 'slug', 'title', 'menu','sub_menu','is_sub_menu'])
                ->where('menu', 'service')
                ->where('sub_menu', '0')
                ->orderBy('page_order', 'asc')
                ->get();
        
        $sub_service_menu = Pages::select(['id', 'slug', 'title', 'menu','sub_menu'])
                ->where('menu', 'service')
                ->where('sub_menu', '!=' ,'0')
                ->orderBy('page_order', 'asc')
                ->get();
        
        return view('website.showpage',compact('title','keywords','description', 'service_menu','service','sub_service_menu'));
    }
    
    public function career() {
        $title = "Nexus Infotechno, Job Opportunity, Work With Us, IT Jobs in Surat";
        $keywords = 'Mobile App Development Company In India, Mobile App Developers, Web App Development Company In India';
        $description = 'Are you looking for an opportunity to work with a leading IT company based in Surat? Step in to Nexus Infotechno and drop your resume. We always encourage new talents and enthusiastic candidate with correct skills of combinations. Our interview process is designed to identify the correct candidate and knowledge base for relevant openings.';
        
        $service_menu = Pages::select(['id', 'slug', 'title', 'menu','sub_menu','is_sub_menu'])
                ->where('menu', 'service')
                ->where('sub_menu', '0')
                ->orderBy('page_order', 'asc')
                ->get();
        
        $sub_service_menu = Pages::select(['id', 'slug', 'title', 'menu','sub_menu'])
                ->where('menu', 'service')
                ->where('sub_menu', '!=' ,'0')
                ->orderBy('page_order', 'asc')
                ->get();
        
        $jobopening = Jobopening::select(['id', 'title', 'job_description','qualification','number_vacancy','salary','salary_negotiable','experience','location','type'])
                ->where('is_delete', 'N')
                ->where('show_front', 'Y')
                ->orderBy('id', 'ASC')
                ->get();
        
        return view('website.jobopening',compact('title','jobopening','keywords','description','service_menu','sub_service_menu'));
    }
    
    public function showlatestwork(Request $request) {
        $latestwork = Latestwork::findOrFail($request->get('work_id'))->toArray();
        return view('website.showlatestwork', compact('latestwork'));
    }
    
    public function showportfoliowork(Request $request) {
        $portfolio = Portfolio::findOrFail($request->get('work_id'))->toArray();
        return view('website.showportfoliowork', compact('portfolio'));
    }
    
    public function sendinquiry(Request $request) {
        ini_set('memory_limit','2048M');
        
        $this->validate($request, [
            'email' => 'required',
            'name' => 'required',
            'subject' => 'required',
            'message' => 'required',
            'contact_number' => 'required',
        ]);
        
        $email = $request->get('email');
        $data['name'] =  $request->get('name');
        $data['email'] =  $request->get('email');
        $data['subject'] = $request->get('subject');
        $data['message_data'] = $request->get('message');
        $data['contact_number'] = $request->get('contact_number');
        
        Mail::send('emails.inqcompany', $data, function($message) {
            $message->from('nexusinfotechnoau@gmail.com', 'Inquiry');
            $message->to('info@nexusinfotechno.com.au', 'Nexus Tecnoinfo Inc');
            $message->bcc('sales@nexusinfotechno.com.au', 'Nexus Tecnoinfo Inc');
            //$message->to('mayankgajjar888@gmail.com', 'Nexus Tecnoinfo Inc')
            $message->subject('Getting New Inquiry');
        });
        
        Mail::send('emails.inqclient', $data, function($message) use ($request) {
            $message->from('nexusinfotechnoau@gmail.com', 'Inquiry');
            //$message->to($email, 'Nexus Tecnoinfo Inc')
            $message->to($request->get('email'), 'Nexus Tecnoinfo Inc')
                    ->subject('Thank You for your Inquiry');
        });
        
        $inquiry = new Inquiry([
            'inquiry_email' => $request->get('email'),
            'inquiry_name' => $request->get('name'),
            'inquiry_subject' => $request->get('subject'),
            'inquiry_massage' => $request->get('message'),
            'inquiry_contact_number' => $request->get('contact_number'),
        ]);
        
        $inquiry->save();
        
    }
    
    public function jobapply(Request $request) {
        ini_set('memory_limit','2048M');
        
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'contact_number' => 'required',
            'location' => 'required',
            'resume' => 'required',
        ]);
        
        //$image = $request->file('resume');
        $resume_doc = time().'.'.$request->resume->getClientOriginalExtension();           
        $request->resume->move(public_path('resume'), $resume_doc);
        
        $data['rurl'] =  'http://nexusinfotechno.com/public/resume/'.$resume_doc;
        $data['name'] =  $request->get('name');
        $data['contact_number'] =  $request->get('contact_number');
        $data['location'] =  $request->get('location');
        $data['email'] =  $request->get('email');
        $data['position'] = $request->get('position');
        
        Mail::send('emails.applyjob', $data, function($message) {
            $message->from('nexusinfotechnoau@gmail.com', 'Resume');
            $message->to('hr@nexusinfotechno.com', 'Nexus Tecnoinfo Inc')
            //$message->to('mayankgajjar888@gmail.com', 'Nexus Tecnoinfo Inc')
                    ->subject('Getting New Resume');
        });
        
        return redirect('/career')->with('message', 'You have successfully applied for this job.');
    }
}
