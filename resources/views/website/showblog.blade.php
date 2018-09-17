@extends('layouts.website')

@section('content')

<!-- 
================================================== 
    Global Page Section Start
================================================== -->
<section class="global-page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h2>{{$blog->blog_title}}</h2>
                    <div class="portfolio-meta">
                        <span>{{$blog->created_at}}</span>|
                        <span> Category: {{$blog->category_title}}</span>|
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="single-post">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="post-img">
                    <img class="img-responsive" alt="" src="{{ URL::asset('public/custom_image/blog/image/'.$blog->blog_image) }}" style="width: 100%;height: 400px">
                </div>
                <div class="post-content">
                    <p>{{$blog->blog_paragraph1}}</p>
                    <?php if($blog->blog_paragraph2 != '') {?>
                        <p>{{$blog->blog_paragraph2}}</p>
                    <?php } ?>
                    <?php if($blog->blog_paragraph3 != '') {?>
                        <p>{{$blog->blog_paragraph3}}</p>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section> 

@endsection


