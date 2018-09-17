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
                    <h2>Service</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="">
                                <i class="ion-ios-home"></i>
                                Home
                            </a>
                        </li>
                        <li class="active">{{$service['title']}}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="blog-full-width" class="service">
    <div class="container">
        <div class="row" style="font-family: Roboto,sans-serif; font-size: 16px;">
            <?php echo $service['body']; ?>
        </div>
    </div>
</section>

@endsection


