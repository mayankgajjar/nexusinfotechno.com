@extends('layouts.website')

@section('content')

<style>
    p {
        font-weight: 400;
        color: #062033;
        padding-bottom: 10px;
        font-size: 15px;
        line-height: 24px;
    }
</style>
        <!-- 
        ================================================== 
            Global Page Section Start
        ================================================== -->
        <section class="global-page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <h2>About Company</h2>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="{{url('/')}}">
                                        <i class="ion-ios-home"></i>
                                        Home
                                    </a>
                                </li>
                                <li class="active">About</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>


<!-- 
================================================== 
    Company Description Section Start
================================================== -->
<section class="company-description about">
    <div class="container">
        <div class="row">
            <!--<div class="col-md-6 wow fadeInLeft" data-wow-delay=".3s" >
                <img src="{{ asset('public/website/images/about/about-company.jpg') }}"  alt="" class="img-responsive">
            </div>-->
            <div class="col-md-12">
                <div class="block">
                    <h3 class="subtitle wow fadeInUp" data-wow-delay=".3s" data-wow-duration="500ms">Introduction</h3>
                    <p  class="wow fadeInUp" data-wow-delay=".5s" data-wow-duration="500ms">
                        <?php echo $about->introduction_content; ?>
                    </p>
                    <!--<p  class="wow fadeInUp" data-wow-delay=".7s" data-wow-duration="500ms">
                        Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.
                    </p>-->
                    
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 30px; margin-bottom: 30px;">
            <div class="col-md-6 wow fadeInLeft" data-wow-delay=".3s" >
                <img src="{{ URL::asset('public/custom_image/about_images/'.$about->approach_work_image) }}"  alt="" class="img-responsive" style="width: 100%; height: 380px">
            </div>
            <div class="col-md-6">
                <div class="block">
                    <h3 class="subtitle wow fadeInUp" data-wow-delay=".3s" data-wow-duration="500ms">Approach To Work</h3>
                    <p  class="wow fadeInUp" data-wow-delay=".5s" data-wow-duration="500ms">
                        <?php echo $about->giving_back_content; ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 30px; margin-bottom: 30px;">
            <div class="col-md-6">
                <div class="block">
                    <h3 class="subtitle wow fadeInUp" data-wow-delay=".3s" data-wow-duration="500ms">Giving Back</h3>
                    <p  class="wow fadeInUp" data-wow-delay=".5s" data-wow-duration="500ms">
                        <?php echo $about->giving_back_content; ?>
                    </p>
                </div>
            </div>
            <div class="col-md-6 wow fadeInLeft" data-wow-delay=".3s" >
                <img src="{{ URL::asset('public/custom_image/about_images/'.$about->giving_back_image) }}"  alt="" class="img-responsive" style="width: 100%; height: 380px">
            </div>
        </div>
        <div class="row" style="margin-top: 30px; margin-bottom: 30px;">
            <div class="col-md-6 wow fadeInLeft" data-wow-delay=".3s" >
                <img src="{{ URL::asset('public/custom_image/about_images/'.$about->profitability_image) }}"  alt="" class="img-responsive" style="width: 100%; height: 380px">
            </div>
            <div class="col-md-6">
                <div class="block">
                    <h3 class="subtitle wow fadeInUp" data-wow-delay=".3s" data-wow-duration="500ms">Profitability</h3>
                    <p  class="wow fadeInUp" data-wow-delay=".5s" data-wow-duration="500ms">
                        <?php echo $about->profitability_content; ?>
                    </p>
                </div>
            </div>
            
        </div>
    </div>
</section>

                    

@endsection


