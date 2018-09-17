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
                    <h2>Blog</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="">
                                <i class="ion-ios-home"></i>
                                Home
                            </a>
                        </li>
                        <li class="active">Blog</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="blog-full-width">
    <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <?php foreach ($blog as $value) { ?>
                        <div class="col-md-6">
                            <article class="wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms">
                                <div class="blog-post-image">
                                    <a href=""><img class="img-responsive" src="{{ URL::asset('public/custom_image/blog/image/'.$value->blog_image) }}" alt="" style="width: 100%;height: 300px" /></a>
                                </div>
                                <div class="blog-content">
                                    <h2 class="blogpost-title">
                                    <a href="{{url('/blog',[str_slug($value->category_title), $value->blog_slug])}}">{{$value->blog_title}}</a>
                                    </h2>
                                    <div class="blog-meta">
                                        <span>{{$value->created_at}}</span>
                                        <span>{{$value->category_title}}</span>
                                    </div>
                                    <p style="height: 150px;overflow: scroll;}">{{$value->blog_paragraph1}}</p>
                                    <a href="{{url('/blog',[str_slug($value->category_title), $value->blog_slug])}}" class="btn btn-dafault btn-details">Continue Reading</a>
                                </div>

                            </article>
                        </div>
                    <?php } ?>
                </div>
                <div class="col-md-3">
                    <div class="sidebar">
                        <!--<div class="categories widget">
                            <h3 class="widget-head">Categories</h3>
                            <ul>
                                <?php foreach ($category as $key => $value) { ?>
                                    <li>
                                        <a href="{{url('/blog',$value->category_title)}}">{{$value['category_title']}}</a>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>-->
                        <div class="recent-post widget">
                            <h3>Recent Posts</h3>
                            <ul>
                                <?php foreach ($recent_blog as $key => $value) { ?>
                                    <li>
                                        <a href="{{url('/blog',[str_slug($value->category_title),$value->blog_slug])}}">{{$value->blog_title}}</a><br>
                                        <time>{{$value->created_at}}</time>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        {{ $blog->links() }}
    </div>
</section>

@endsection


