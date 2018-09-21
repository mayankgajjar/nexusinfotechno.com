@extends('layouts.website')

@section('content')

<!--
==================================================
Slider Section Start
================================================== -->
<!--
<div class="slider">
  <div class="tp-banner-container">
        <div class="tp-banner" >
            <ul> 
                <li data-transition="zoomout" data-slotamount="7" data-masterspeed="1000" >
                    
                    <img src="{{ asset('public/website/images/WEB-BG-01.jpg') }}"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
                    <div class="tp-caption customin"
                        data-x="90"
                        data-y="261"
                        data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                        data-speed="500"
                        data-start="1400"
                        data-easing="Power3.easeInOut"
                        data-endspeed="300"
                        style="z-index: 5"><img src="{{ asset('public/website/images/MMobile-01.png') }}" alt="">
                    </div>
                    
                    <div class="tp-caption customin"
                        data-x="245"
                        data-y="112"
                        data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                        data-speed="500"
                        data-start="500"
                        data-easing="Power3.easeInOut"
                        data-endspeed="300"
                        style="z-index: 4"><img src="{{ asset('public/website/images/PC-01.png') }}" alt="">
                    </div>
                    
                    
                    <div class="tp-caption customin"
                        data-x="594"
                        data-y="139"
                        data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                        data-speed="500"
                        data-start="800"
                        data-easing="Power3.easeInOut"
                        data-endspeed="300"
                        style="z-index: 3"><img src="{{ asset('public/website/images/IDEA-01.png') }}" alt="">
                    </div>
                    <div class="tp-caption customin"
                        data-x="793"
                        data-y="139"
                        data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                        data-speed="500"
                        data-start="1300"
                        data-easing="Power3.easeInOut"
                        data-endspeed="300"
                        style="z-index: 2"><img src="{{ asset('public/website/images/WEB-01.png') }}" alt="">
                    </div>

                    <div class="tp-caption medium_ skewfromleft customout"
                        data-x="136"
                        data-y="244"
                        data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                        data-speed="800"
                        data-start="1500"
                        data-easing="Power4.easeOut"
                        data-endspeed="300"
                        data-endeasing="Power1.easeIn"
                        data-captionhidden="on"
                        style="z-index: 6">App Devlopment
                    </div>

                    <div class="tp-caption medium_ skewfromright customout"
                        data-x="660"
                        data-y="194"
                        data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                        data-speed="800"
                        data-start="1700"
                        data-easing="Power4.easeOut"
                        data-endspeed="300"
                        data-endeasing="Power1.easeIn"
                        data-captionhidden="on"
                        style="z-index: 7">Business Ideas
                    </div>

                    
                    <div class="tp-caption medium_ skewfromright customout"
                        data-x="950"
                        data-y="396"
                        data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                        data-speed="800"
                        data-start="1800"
                        data-easing="Power4.easeOut"
                        data-endspeed="300"
                        data-endeasing="Power1.easeIn"
                        data-captionhidden="on"
                        style="z-index: 8">Web Development
                    </div>

                    <div class="tp-caption medium_ skewfromleft customout"
                        data-x="468"
                        data-y="443"
                        data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                        data-speed="800"
                        data-start="1600"
                        data-easing="Power4.easeOut"
                        data-endspeed="300"
                        data-endeasing="Power1.easeIn"
                        data-captionhidden="on"
                        style="z-index: 9">Software Development
                        
                        
                    </div>
                </li>
               
                <li data-transition="zoomout" data-slotamount="7" data-masterspeed="1000" >
                    
                    <img src="{{ asset('public/website/images/WEB-SLIDE-02.png') }}"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
                    

                    
                    <div class="tp-caption customin"
                        data-x="90"
                        data-y="161"
                        data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                        data-speed="500"
                        data-start="1400"
                        data-easing="Power3.easeInOut"
                        data-endspeed="300"
                        style="z-index: 5"><img src="{{ asset('public/website/images/Web-page-image.png') }}" alt="">
                    </div>

                    
                    <div class="tp-caption medium_thin_grey bold-tit medium_ skewfromright customout"
                        data-x="645"
                        data-y="196"
                        data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                        data-speed="800"
                        data-start="1800"
                        data-easing="Power4.easeOut"
                        data-endspeed="300"
                        data-endeasing="Power1.easeIn"
                        data-captionhidden="on"
                        style="z-index: 8">POWERFUL WEB DEVELOPMENT
                    </div>
                    
                    <div class="tp-caption mediumlarge_light_white bold-tit medium_ skewfromright customout"
                        data-x="645"
                        data-y="250"
                        data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                        data-speed="1000"
                        data-start="1800"
                        data-easing="Power4.easeOut"
                        data-endspeed="300"
                        data-endeasing="Power1.easeIn"
                        data-captionhidden="on"
                        style="z-index: 8">OUTSTANDING INTERFACE DESIGN THAT<br/> MEETS CLIENTS EXPECTION AT  <br/>  <b>NEXUS INFOTECHNO</b>
                    </div>
                    <div class="tp-caption medium_thin_grey bold-bag medium_ skewfromright customout"
                        data-x="660"
                        data-y="375"
                        data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                        data-speed="1200"
                        data-start="1800"
                        data-easing="Power4.easeOut"
                        data-endspeed="300"
                        data-endeasing="Power1.easeIn"
                        data-captionhidden="on"
                        style="z-index: 8">A PROFFESIONAL SOLUTION
                    </div>

                    
                </li>
                
            </ul>
            <div class="tp-bannertimer"></div>
        </div>
    </div>
</div> -->

<div class="slider-html">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <?php foreach ($slider as $key => $value) { ?>
                <li data-target="#myCarousel" data-slide-to="{{$key}}" class="<?php if($key == 0 ){echo 'active';} ?>"></li>
            <?php } ?>
        </ol>
        <div class="carousel-inner">
            <?php foreach ($slider as $key => $value) { ?>
                <div class="item <?php if($key == 0 ){echo 'active';} ?>" >
                    <a href="{{$value->slider_url}}"><img src="{{ URL::asset('public/custom_image/slieder_images/'.$value->slider_image) }}"  style="width:100%;"></a>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

<!--
<div class="slider-html">
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1300px;height:500px;overflow:hidden;visibility:hidden;">
       
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1300px;height:500px;overflow:hidden;">
            <div>
                <img src="{{ URL::asset('public/custom_image/banners/slide-01.jpg') }}" style="width: 100%;"  alt="">
            </div>
            <div>
                <img src="{{ URL::asset('public/custom_image/banners/slide-02.jpg') }}" style="width: 100%;"  alt="">
            </div>
            <div>
                <img src="{{ URL::asset('public/custom_image/banners/slide-03.jpg') }}" style="width: 100%;"  alt="">
            </div>
            <div>
                <img src="{{ URL::asset('public/custom_image/banners/slide-04.jpg') }}" style="width: 100%;"  alt="">
            </div>
        </div>
       
        <div data-u="arrowleft" class="jssora051" style="width:65px;height:65px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora051" style="width:65px;height:65px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
            </svg>
        </div>
    </div>
</div>-->

<!--/#main-slider-->

<!--
==================================================
About Section Start
================================================== -->
<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="block wow fadeInLeft" data-wow-delay=".3s" data-wow-duration="500ms">
                    <h2>
                        ABOUT US
                    </h2>
                    <p style="font-size: 26px;">
                        <?php echo $about->introduction_content; ?>
                    </p>
                    <a class="btn abut-btn" href="{{url('/aboutus')}}">Read More</a>
                </div>

            </div>
            <div class="col-md-6 col-sm-6">
                <div class="block wow fadeInRight" data-wow-delay=".3s" data-wow-duration="500ms">
                    <img src="{{ URL::asset('public/custom_image/about_images/'.$about->introduction_image) }}" style="width: 100%;"  alt="">
                </div>
            </div>
        </div>
    </div>
</section> <!-- /#about -->
<!--
==================================================
Portfolio Section Start
================================================== -->
<section id="feature">
    <div class="container">
        <div class="section-heading">
            <h1 class="title wow fadeInDown" data-wow-delay=".3s">Our Services</h1>
            <p class="wow fadeInDown" data-wow-delay=".5s">
                
            </p>
        </div>
        <div class="row">
            <?php foreach ($service as $key => $value) { ?>
                <div class="col-md-4 col-lg-4 col-xs-12">
                    <div class="media service wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
                        <div class="mediya-left">
                            <div class="icon">
                                <i class="{{$value['service_icon']}}"></i>
                            </div>
                        </div>
                        <div class="mediya-body">
                            <h4 class="media-heading">{{$value['service_title']}}</h4>
                            <p>{{substr($value['service_content'], 0, 100)}}</p>
                        </div>
                        <a href="{{$value['service_url']}}" class="btn rd-more">Read More</a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<!-- /#feature -->
<!--
==================================================
Portfolio Section Start
================================================== -->
<section id="works" class="works">
    <div class="container">
        <div class="section-heading">
            <h1 class="title wow fadeInDown" data-wow-delay=".3s">Latest Works</h1>
        </div>
        <div class="row">
            <?php foreach ($latestwork as $value) { ?>
            <div class="col-sm-4 col-xs-12">
                <figure class="wow fadeInLeft animated portfolio-item" data-wow-duration="500ms" data-wow-delay="0ms">
                    <div class="img-wrapper">
                        <img src="{{ URL::asset('public/custom_image/latestwork_images/'.$value->latestwork_image) }}" class="img-responsive" alt="this is a title" style="width: 100%; height: 250px;">
                        <div class="overlay">
                            <div class="buttons">
                                <a class="latestwork-show" data-custom-value="<?php echo $value->id; ?>" href="">Details</a>
                            </div>
                        </div>
                    </div>
                    <figcaption>
                        <h4><a><?php echo $value->latestwork_title; ?></a></h4>
                        <p><?php echo $value->category_title; ?></p>
                    </figcaption>
                </figure>
            </div>
            <?php } ?>
        </div>
    </div>
</section> <!-- #works -->


<!--====================== -->

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="LatestWorkModel">
    <div id="work-html"></div>
</div>


<section  class=" technologys">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="title text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay=".3s">Our TECHNOLOGIES</h2>
                <!--<p class="subtitle-des text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay=".5s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, error.</p>-->
                <ul class="technology owl-carousel" id="technologyList">
                    <li><img src="{{ URL::asset('public/website/images/Logo/T-asp.net.png') }}" alt="#" /></li>
                    <li><img src="{{ URL::asset('public/website/images/Logo/T-blockchain_logo.png') }}" alt="#" /></li>
                    <li><img src="{{ URL::asset('public/website/images/Logo/T-Angular.png') }}" alt="#" /></li>
                    <li><img src="{{ URL::asset('public/website/images/Logo/T-Apple.png') }}" alt="#" /></li>
                    <li><img src="{{ URL::asset('public/website/images/Logo/T-android.png') }}" alt="#" /></li>
                    <li><img src="{{ URL::asset('public/website/images/Logo/T-WordPres.png') }}" alt="#" /></li>
                    <li><img src="{{ URL::asset('public/website/images/Logo/T-Shopify.png') }}" alt="#" /></li>
                    <li><img src="{{ URL::asset('public/website/images/Logo/T-drupal.png') }}" alt="#" /></li>
                    <li><img src="{{ URL::asset('public/website/images/Logo/T-node.png') }}" alt="#" /></li>
                    <li><img src="{{ URL::asset('public/website/images/Logo/T-laravel.png') }}" alt="#" /></li>
                    <li><img src="{{ URL::asset('public/website/images/Logo/T-codeigniter.png') }}" alt="#" /></li>
                    <li><img src="{{ URL::asset('public/website/images/Logo/T-react.png') }}" alt="#" /></li>
                    <li><img src="{{ URL::asset('public/website/images/Logo/T-java.png') }}" alt="#" /></li>
                    <li><img src="{{ URL::asset('public/website/images/Logo/T-Python_logo.png') }}" alt="#" /></li>
                    <li><img src="{{ URL::asset('public/website/images/Logo/T-php.png') }}" alt="#" /></li>
                    <li><img src="{{ URL::asset('public/website/images/Logo/T-Magento.png') }}" alt="#" /></li>
                    <li><img src="{{ URL::asset('public/website/images/Logo/T-HTML5.png') }}" alt="#" /></li>
                </ul>
            </div>
        </div>
    </div>
</section>


<!-- 
================================================== 
    Clients Section Start
================================================== -->
<section id="works" class="works counter">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="title text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay=".3s">Our Happy Clinets</h2>
                <!--<p class="subtitle-des text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay=".5s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, error.</p>-->
                <div id="clients-logo" class="owl-carousel">
                    <?php foreach($happyclient as $client) {?>
                    <div class="subtitle-des text-center wow fadeInUp animated" data-wow-duration="500ms" >
                        <img src="{{ URL::asset('public/custom_image/happyclient_images/'.$client->image) }}" alt="">
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>



<!--<section id="works" class="works counter">
    <div class="container">
        <ul>
            <li class="wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="400ms">
                <div class="icon-count">
                    <i class="ion-android-alarm-clock"></i>
                </div>
                <div class="work-count">
                    <span class="count">200</span>
                    <h3>Working Hours</h3>
                </div>
            </li>
            <li class="wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="800ms">
                <div class="icon-count">
                    <i class="ion-ios-briefcase-outline"></i>
                </div>
                <div class="work-count">
                    <span class="count">200</span>
                    <h3>Completed Projects</h3>
                </div>
            </li>
            <li class="wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="1200ms">
                <div class="icon-count">
                    <i class="ion-ios-person-outline"></i>
                </div>
                <div class="work-count">
                    <span class="count">200</span>
                    <h3>No. of Clients</h3>
                </div>
            </li>
            <li class="wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="1600ms">
                <div class="icon-count">
                    <i class="ion-ios-heart-outline"></i>
                </div>
                <div class="work-count">
                    <span class="count">200</span>
                    <h3>Peoples Love</h3>
                </div>
            </li>
        </ul>
    </div>
</section>-->



<!--
==================================================
Call To Action Section Start
================================================== -->
<section id="call-to-action">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h2 class="title wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms">Testimonial</h2>
                        <div class="col-md-12" data-wow-delay="0.2s">
                        <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                            <!-- Bottom Carousel Indicators -->
                            <ol class="carousel-indicators">
                                <?php foreach ($testimonial_image as $key => $value) { ?>
                                    <li data-target="#quote-carousel" data-slide-to="<?php echo $key; ?>" class="<?php if($key == 0){ echo 'active'; } ?>"><img class="img-responsive " src="{{ URL::asset('public/custom_image/testimonial_images/'.$value) }}" alt=""></li>
                                <?php } ?>
                                
                                <!--<li data-target="#quote-carousel" data-slide-to="1"><img class="img-responsive" src="https://s3.amazonaws.com/uifaces/faces/twitter/rssems/128.jpg" alt=""></li>
                                <li data-target="#quote-carousel" data-slide-to="2"><img class="img-responsive" src="https://s3.amazonaws.com/uifaces/faces/twitter/adellecharles/128.jpg" alt=""></li>-->
                            </ol>

                            <!-- Carousel Slides / Quotes -->
                            <div class="carousel-inner text-center">

                                <!-- Quote 1 -->
                                <?php foreach ($testimonial as $key => $value) { ?>
                                <div class="item <?php if($key == 0){ echo 'active'; } ?>">
                                    <blockquote>
                                        <div class="row">
                                            <div class="col-sm-8 col-sm-offset-2">
                                                <p><?php echo $value->comment; ?></p>
                                                <small><?php echo $value->name; ?> [<?php echo $value->designation; ?>]</small>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <?php } ?>
                            </div>

                            <!-- Carousel Buttons Next/Prev -->
                            <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="ion-ios-arrow-back"></i></a>
                            <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="ion-ios-arrow-forward"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
        
