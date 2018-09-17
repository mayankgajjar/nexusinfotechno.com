@extends('layouts.website')

@section('content')

<!-- 
================================================== 
    Global Page Section Start
================================================== -->
<section class="global-page-header sevice">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h2>Service</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="">
                                <i class="ion-ios-home"></i>
                                Home
                            </a>
                        </li>
                        <li class="active">Service</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 
================================================== 
    Service Page Section  Start
================================================== -->
<section id="service-page" class="pages service-page">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h2 class="subtitle wow fadeInUp animated" data-wow-delay=".3s" data-wow-duration="500ms">What We Love To Do</h2>
                    <p class="subtitle-des wow fadeInUp animated" data-wow-delay=".5s" data-wow-duration="500ms">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis porro recusandae non quibusdam iure adipisci.</p>
                    <div class="row service-parts">
                        '<?php foreach ($service as $ser){ ?>
                        <div class="col-md-4">
                            <div class="block wow fadeInUp animated" data-wow-duration="400ms" data-wow-delay="600ms">
                                <i class="<?php echo $ser->service_icon; ?>"></i>
                                <h4><?php echo $ser->service_title; ?></h4>
                                <p><?php echo $ser->service_content; ?></p>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 
================================================== 
    Clients Section Start
================================================== -->
<section id="clients">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="subtitle text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay=".3s">Our Happy Clinets</h2>
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

@endsection