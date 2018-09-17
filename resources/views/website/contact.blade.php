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
                    <h2>Contact</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="">
                                <i class="ion-ios-home"></i>
                                Home
                            </a>
                        </li>
                        <li class="active">Contact</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- 
================================================== 
    Contact Section Start
================================================== -->
<section id="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="block">
                    <h2 class="subtitle wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">Connect With Us</h2>
                    {{csrf_field()}}
                    <div class="contact-form">
                        <form id="contact-form" method="#" action="{{url('/sendinquiry')}}" role="form">
                
                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".6s">
                                <input type="text" placeholder="Your Name" class="form-control" name="name" id="name">
                            </div>
                            
                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".8s">
                                <input type="email" placeholder="Your Email" class="form-control" name="email" id="email" >
                            </div>
                            
                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".8s">
                                <input type="text" placeholder="Your Contact Number" class="form-control" name="contact_number" id="contact_number" >
                            </div>
                            
                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".10s">
                                <input type="text" placeholder="Subject" class="form-control" name="subject" id="subject">
                            </div>
                            
                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".12s">
                                <textarea rows="6" placeholder="Message" class="form-control" name="message" id="message"></textarea>    
                            </div>
                            
                            <div id="success" class="success">
                                Thank you for your request.
                            </div>
                            
                            <div id="error" class="error">
                                Sorry, don't know what happened. Try later :(
                            </div>
                            
                            <div id="submit" class="wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1.4s">
                                <input type="submit" id="contact-submit" class="btn btn-default btn-send" value="Send Message">
                            </div>                      
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                 <div class="map-area">
                    <h2 class="subtitle  wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">Find Us</h2>
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3720.5019452113734!2d72.79018031548829!3d21.17221018592076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04de54703d26f%3A0x7d4430a33bb5897c!2sNexus+Infotechno-Software%2CWeb+Design%2CMobile+App+Development+%26+Digital+Marketing+Company+in+Surat!5e0!3m2!1sen!2sin!4v1534929937169" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="row address-details">
            <div class="col-md-4">
                <div class="address wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".5s">
                    <!--<i class="ion-ios-location-outline"></i>-->
                    <h3>Head Office</h3>
                    <h5>14/33-37 Duerdin Street, <br>NOTTING HILL VIC 3168 <br>  AUSTRALIA <br> +61-478954927</h5>
                </div>
            </div>
            <div class="col-md-4">
                <div class="address wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".3s" >
                    <!--<i class="ion-ios-location-outline"></i>-->
                    <h3>Corporate Office</h3>
                    <h5>420, 4th Floor, Rajhans Ornate <br>Opp Sargam Shopping Center, <br>Parle Point, Surat, Gujarat 395007 <br> +91-099255 55039 <br> 0261 - 2212222</h5>
                </div>
            </div>
            <div class="col-md-4">
                <div class="email wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".7s" >
                    <!--<i class="ion-ios-email-outline"></i>-->
                    <h3>Contact Us</h3>
                    <h5>info@nexusinfotechno.com <br> info@nexusinfotechno.com.au</h5>
                </div>
            </div>
            
        </div>
    </div>
</section>  


@endsection


