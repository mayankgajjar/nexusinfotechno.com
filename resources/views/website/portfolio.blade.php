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
                    <h2>Portfolio</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="">
                                <i class="ion-ios-home"></i>
                                Home
                            </a>
                        </li>
                        <li class="active">Portfolio</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="company-description">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="portfolioFilter clearfix">
                    <a href="#" data-filter="*" class="current">All Categories</a>
                    <?php foreach($category as $cat) { ?>
                        <a href="#" data-filter=".<?php echo $cat->id; ?>"><?php echo $cat->category_title; ?></a>
                    <?php } ?>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="portfolioContainer row">
                    <?php foreach($portfolio as $value){ ?>
                    <div class="col-sm-4 <?php echo $value->portfolio_category ?>">
                        <figure class="wow fadeInLeft animated portfolio-item" data-wow-duration="500ms" data-wow-delay="0ms">
                            <div class="img-wrapper">
                                <img src="{{ URL::asset('public/custom_image/portfolio_images/'.$value->portfolio_image) }}" class="img-responsive" alt="this is a title" >
                                <div class="overlay">
                                    <div class="buttons">
                                        <!--<a rel="gallery" class="fancybox" href="">Demo</a>        -->
                                        <a class="portfolio-show" data-custom-value="<?php echo $value->id; ?>" href="">Details</a>
                                    </div>
                                </div>
                            </div>
                            <figcaption>
                                <h4><a href="#"><?php echo $value->portfolio_title ?></a></h4>
                                <p><?php echo $value->category_title; ?></p>
                            </figcaption>
                        </figure>
                    </div>
                    <?php } ?>
                    <!--<div class="col-sm-3 logos">
                        <figure class="wow fadeInLeft animated portfolio-item" data-wow-duration="500ms" data-wow-delay="0ms">
                            <div class="img-wrapper">
                                <img src="{{ asset('public/website/images/portfolio/item-1.jpg') }}" class="img-responsive" alt="this is a title" >
                                <div class="overlay">
                                    <div class="buttons">
                                        <a rel="gallery" class="fancybox" href="images/portfolio/item-1.jpg">Demo</a>        
                                        <a target="_blank" href="">Details</a>
                                    </div>
                                </div>
                            </div>
                            <figcaption>
                                <h4><a href="#">Dew Drop</a></h4>
                                <p>Redesigne UI Concept</p>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-sm-3 ui">
                        <figure class="wow fadeInLeft animated portfolio-item" data-wow-duration="500ms" data-wow-delay="0ms">
                            <div class="img-wrapper">
                                <img src="{{ asset('public/website/images/portfolio/item-1.jpg') }}" class="img-responsive" alt="this is a title" >
                                <div class="overlay">
                                    <div class="buttons">
                                        <a rel="gallery" class="fancybox" href="images/portfolio/item-1.jpg">Demo</a>        
                                        <a target="_blank" href="">Details</a>
                                    </div>
                                </div>
                            </div>
                            <figcaption>
                                <h4>
                                    <a href="#">
                                        Dew Drop        
                                    </a>
                                </h4>
                                <p>
                                    Redesigne UI Concept
                                </p>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-sm-3 webTemplates">
                        <figure class="wow fadeInLeft animated portfolio-item" data-wow-duration="500ms" data-wow-delay="0ms">
                            <div class="img-wrapper">
                                <img src="{{ asset('public/website/images/portfolio/item-1.jpg') }}" class="img-responsive" alt="this is a title" >
                                <div class="overlay">
                                    <div class="buttons">
                                        <a rel="gallery" class="fancybox" href="images/portfolio/item-1.jpg">Demo</a>        
                                        <a target="_blank" href="">Details</a>
                                    </div>
                                </div>
                            </div>
                            <figcaption>
                                <h4><a href="#">Dew Drop</a></h4>
                                <p>Redesigne UI Concept</p>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-sm-3 webTemplates">
                        <figure class="wow fadeInLeft animated portfolio-item" data-wow-duration="500ms" data-wow-delay="0ms">
                            <div class="img-wrapper">
                                <img src="{{ asset('public/website/images/portfolio/item-1.jpg') }}" class="img-responsive" alt="this is a title" >
                                <div class="overlay">
                                    <div class="buttons">
                                        <a rel="gallery" class="fancybox" href="images/portfolio/item-1.jpg">Demo</a>        
                                        <a target="_blank" href="">Details</a>
                                    </div>
                                </div>
                            </div>
                            <figcaption>
                                <h4><a href="#">Dew Drop</a></h4>
                                <p>Redesigne UI Concept</p>
                            </figcaption>
                        </figure>
                    </div>-->
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="PortfolioWorkModel">
    <div id="portfolio-html"></div>
</div>

@endsection


