<!DOCTYPE html>
<html class="no-js" >

<head>
<!-- Basic Page Needs
================================================== -->
<meta charset="utf-8">
<link rel="icon" href="{{ asset('public/fevicon.png') }}">
<title>{{$title}}</title>
<meta name="description" content="<?php echo $description; ?>">
<meta name="keywords" content="<?php echo $keywords; ?>">
<meta name="author" content="">
<!-- Mobile Specific Metas
================================================== -->
<meta name="format-detection" content="telephone=no">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="alternate" href="http://nexusinfotechno.com/" hreflang="en-us" />

<!-- Template CSS Files
================================================== -->
<!-- Twitter Bootstrs CSS -->
<link rel="stylesheet" href="{{ asset('public/website/plugins/bootstrap/bootstrap.min.css') }}" media="screen">
<!-- Ionicons Fonts Css --> 
<link rel="stylesheet" href="{{ asset('public/website/plugins/ionicons/ionicons.min.css') }}">
<!-- animate css -->
<link rel="stylesheet" href="{{ asset('public/website/plugins/animate-css/animate.css') }}">
<!-- Hero area slider css
<link rel="stylesheet" href="{{ asset('public/website/plugins/slider/slider.css') }}">-->
<!-- owl craousel css -->
<link rel="stylesheet" href="{{ asset('public/website/plugins/owl-carousel/owl.carousel.css') }}">
<!-- Fancybox -->
<link rel="stylesheet" href="{{ asset('public/website/plugins/facncybox/jquery.fancybox.css') }}">
<!-- template main css file -->
<link rel="stylesheet" href="{{ asset('public/website/css/style.css') }}">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('public/website/css/portfolio.css') }}">
<link rel="stylesheet" href="{{ asset('public/website/css/main.css') }}">
<link rel="stylesheet" href="{{ asset('public/website/css/testimonial.css') }}">
<!-- slider -->
<!-- CSS STYLE-->

<!-- THE PREVIEW STYLE SHEETS, NO NEED TO LOAD IN YOUR DOM -->
<link rel="stylesheet" type="text/css" href="{{ asset('public/website/css/settings.css') }}" media="screen" />
<link rel="stylesheet" href="{{ asset('public/website/css/responsive.css') }}">
<link rel="stylesheet" href="{{ asset('public/website/css/custome.css') }}">


<style>
::-webkit-scrollbar{display:none}.error{padding:10px!important;color:#d8000c!important;border-radius:2px!important;font-size:14px!important}
</style>

<script type="application/ld+json">
{
"@context": "http://schema.org",
"@type": "ProfessionalService",
"name": "Nexus Infotechno",
"image": "http://nexusinfotechno.com/public/website/images/logo.png",
"@id": "",
"url": "http://nexusinfotechno.com/",
"telephone": "9925555039",
"priceRange": "5000+",
"address": {
"@type": "PostalAddress",
"streetAddress": "420, 4th Floor, Rajhans Ornate Opp Sargam Shopping Center, Parle Point,",
"addressLocality": "Surat",
"postalCode": "395007",
"addressCountry": "IN"
},
"geo": {
"@type": "GeoCoordinates",
"latitude": 21.1722102,
"longitude": 72.79236900000001
},
"openingHoursSpecification": {
"@type": "OpeningHoursSpecification",
"dayOfWeek": [
"Monday",
"Tuesday",
"Wednesday",
"Thursday",
"Friday",
"Saturday"
],
"opens": "10:00",
"closes": "18:30"
},
"sameAs": [
"https://www.facebook.com/Nexus.Infotechno.Inc/",
"https://twitter.com/nexusinfotechno",
"https://www.instagram.com/nexus.infotechno/",
"https://www.linkedin.com/company/nexus-infotechno/"
]
}
</script>

</head>
<body>
{{csrf_field()}}

<div class="loder">
<div class="se-pre-con"></div>
</div>

<!--
==================================================
Header Section Start
================================================== -->
<header id="top-bar" class="navbar-fixed-top animated-header">
<div class="top-hedar">
<div class="container">
<div class="row">
<div class="col-md-12">
<ul class="contect">
<li>
<a title="Australia" href="#"><img src="{{ asset('public/website/images/australia-flag-round-icon-16.png') }}">+61-478954927</a>
</li>
<li>
<a title="India" href="#"><img src="{{ asset('public/website/images/india-flag-round-icon-16.png') }}">+91-099255 55039 </a>
</li>
</ul>
<!-- Social Media -->
<ul class="social">
<li>
<a href="https://www.facebook.com/Nexus.Infotechno.Inc/" class="Facebook">
<i class="fab fa-facebook-f"></i>
</a>
</li>
<li>
<a href="https://twitter.com/nexusinfotechno" class="Twitter">
<i class="fab fa-twitter"></i>
</a>
</li>
<li>
<a href="https://www.linkedin.com/company/nexus-infotechno/" class="Linkedin">
<i class="fab fa-linkedin-in"></i>
</a>
</li>
<li>
<a href="https://www.instagram.com/nexus.infotechno/" class="Instagram">
<i class="fab fa-instagram"></i>
</a>
</li>
<li>
<a href="https://medium.com/@nexusinfotechno77" class="miduem">
<i class="fab fa-medium-m"></i>
</a>
</li>
</ul>
</div>
</div>
</div>
</div>
<div class="container flex-content">
<div class="navbar-header">
<!-- responsive nav button -->
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<!-- /responsive nav button -->

<!-- logo -->
<div class="navbar-brand" style="height:auto; display: inline-block">
<a href="{{url('/')}}" >
<img src="{{ asset('public/website/images/logo.png') }}" alt="">
</a>
</div>
<!-- /logo -->
</div>
<!-- main menu -->
<nav class="collapse navbar-collapse navbar-right" role="navigation">
<div class="main-menu">
<ul class="nav navbar-nav navbar-right">
<li>
<a href="{{url('/')}}" >Home</a>
</li>
<li><a href="{{url('/aboutus')}}">About</a></li>

<?php if(sizeof($service_menu) == 0){ ?>
<li><a href="{{url('/service')}}">Service</a></li>
<?php } else { ?>
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">Service <span class="caret"></span></a>
<div class="dropdown-menu">
<ul>
<?php foreach($service_menu as $smenu){ ?>
<li class="dropdow">
<a href="{{url('/service/'.$smenu['slug'])}}">{{$smenu['title']}}</a>
<?php if($smenu['is_sub_menu'] == 'Y'){ ?>
<div class="dropdown-men right">
<ul>
<?php foreach($sub_service_menu as $value){ ?>
<?php if($value['sub_menu'] == $smenu['id']){ ?>
<li><a href="{{url('/service/'.$value['slug'])}}">{{$value['title']}}</a></li>
<?php } ?>
<?php } ?>
</ul>
</div>
<?php } ?>

</li>
<?php } ?>
</ul>
</div>
</li>
<?php } ?>
<li><a href="{{url('/portfolio')}}">Portfolio</a></li>
<li><a href="{{url('/blog')}}">Blog</a></li>
<!--<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <span class="caret"></span></a>
<div class="dropdown-menu">
<ul>
<li><a href="404.html">404 Page</a></li>
<li><a href="gallery.html">Gallery</a></li>
</ul>
</div>
</li>
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <span class="caret"></span></a>
<div class="dropdown-menu">
<ul>
<li><a href="blog-fullwidth.html">Blog Full</a></li>
<li><a href="blog-left-sidebar.html">Blog Left sidebar</a></li>
<li><a href="blog-right-sidebar.html">Blog Right sidebar</a></li>
</ul>
</div>
</li>-->
<li><a href="{{url('/career')}}">Career</a></li>
<li><a href="{{url('/contact')}}">Contact</a></li>
</ul>
</div>
</nav>
<!-- /main nav -->
</div>
</header>

@yield('content')

<!--
==================================================
Footer Section Start
================================================== -->
<footer id="footer">
<div class="main-footer">
<div class="container">
<div class="row">

<div class="col-md-4 col-sm-12 col-xs-12">
<div class="f_service">
<h3>Useful Link</h3>
<ul>
<li><a href="{{url('/')}}">Home</a></li>
<li><a href="{{url('/aboutus')}}">About us</a></li>
<li><a href="{{url('/portfolio')}}">Portfolio</a></li>
<li><a href="{{url('/career')}}">Career</a></li>
<li><a href="{{url('/contact')}}">Contact Us</a></li>
</ul>
</div>
</div>
<div class="col-md-4 col-sm-12 col-xs-12">
<div class="f_service">
<h3>Services</h3>
<ul>
<?php foreach($service_menu as $smenu){ ?>
<li><a href="{{url('/service/'.$smenu['slug'])}}">{{$smenu['title']}}</a></li>
<?php } ?>
</ul>
</div>
</div>                       
<div class="col-md-4 col-sm-12 col-xs-12">
<div class="f_service">
<h3>Contact Us</h3>
<p>420, 4th Floor, Rajhans Ornate</p>
<p>Opp Sargam Shopping Center,</p>
<p>Parle Point, Surat, Gujarat 395007.</p>
<p>+91-099255 55039</p>
<p>0261 - 221222</p>
<p>
<a href="https://www.facebook.com/Nexus.Infotechno.Inc/" class="facebook" style="margin-right: 15px;">
<i class="fab fa-facebook-f"></i>
</a>
<a href="https://twitter.com/nexusinfotechno" class="twitter" style="margin-right: 15px;">
<i class="fab fa-twitter"></i>
</a>
<a href="https://www.linkedin.com/company/nexus-infotechno/" class="linkedin" style="margin-right: 15px;">
<i class="fab fa-linkedin-in"></i>
</a>
<a href="https://www.instagram.com/nexus.infotechno/" class="instagram" style="margin-right: 15px;">
<i class="fab fa-instagram"></i>
</a>
<a href="https://medium.com/@nexusinfotechno77" class="miduem" style="margin-right: 15px;">
<i class="fab fa-medium-m"></i>
</a>
</p>
</div>
</div>
</div>
</div>
</div>
<div class="container">
<div class="row">
<div class="col-md-12">
<p class="copyright">Copyright: <span><script>document.write(new Date().getFullYear())</script></span> Design and Developed by <a href="https://nexusinfotechno.com/" target="_blank">Nexus Infotechno</a>. <br> 
</p>
</div>
</div>
</div>
</footer> <!-- /#footer -->

<!-- Template Javascript Files
================================================== -->
<!-- jquery -->
<script src="{{ asset('public/website/plugins/jQurey/jquery.min.js') }}"></script>
<!-- Form Validation -->
<script src="{{ asset('public/website/plugins/form-validation/jquery.form.js') }}"></script> 
<script src="{{ asset('public/website/plugins/form-validation/jquery.validate.min.js') }}"></script>
<!-- owl carouserl js -->
<script src="{{ asset('public/website/plugins/owl-carousel/owl.carousel.min.js') }}"></script>
<!-- bootstrap js -->
<script src="{{ asset('public/website/plugins/bootstrap/bootstrap.min.js') }}"></script>
<!-- wow js -->
<script src="{{ asset('public/website/plugins/wow-js/wow.min.js') }}"></script>
<!-- slider js -->
<script src="{{ asset('public/website/plugins/slider/slider.js') }}"></script>
<!-- Fancybox -->
<script src=" {{ asset('public/website/plugins/facncybox/jquery.fancybox.js') }}"></script>
<!-- template main js -->
<script src="{{ asset('public/website/js/main.js') }}"></script>
<script src="{{ asset('public/website/js/modernizr.js') }}"></script>
<script type="text/javascript">
jQuery(window).load(function() {
// Animate loader off screen
jQuery(".loder").fadeOut("slow");;
});
</script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-120786630-1"></script>
<script src="{{ asset('public/website/js/jquery.themepunch.plugins.min.js') }}"></script>
<script src="{{ asset('public/website/js/jquery.themepunch.revolution.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/website/js/jquery.isotope.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>
<script type="text/javascript">
$(window).load(function () {
var $container = $('.portfolioContainer');
$container.isotope({
filter: '*',
animationOptions: {
duration: 750,
easing: 'linear',
queue: false
}
});

$('.portfolioFilter a').click(function () {
$('.portfolioFilter .current').removeClass('current');
$(this).addClass('current');
var selector = $(this).attr('data-filter');
$container.isotope({
filter: selector,
animationOptions: {
duration: 750,
easing: 'linear',
queue: false
}
});
return false;
});

$(document).on('click', '.latestwork-show', function (e) {
e.originalEvent.preventDefault()
var work_id = $(this).data("custom-value");
$.ajax({
url: 'showlatestwork',
type: 'POST',
data: {'work_id': work_id, '_token': $('input:hidden[name=_token]').val()},
success: function (data) {
$('#work-html').html(data);
$('#LatestWorkModel').modal('show');
},
});
});

$(document).on('click', '.portfolio-show', function (e) {
e.originalEvent.preventDefault()
var work_id = $(this).data("custom-value");
$.ajax({
url: 'showportfoliowork',
type: 'POST',
data: {'work_id': work_id, '_token': $('input:hidden[name=_token]').val()},
success: function (data) {
$('#portfolio-html').html(data);
$('#PortfolioWorkModel').modal('show');
},
});
});

$(document).on('click', '.apply', function (e) {
e.originalEvent.preventDefault()
var job = $(this).data("custom-value");
$('#apply_post').val(job);
$('#apply_now').modal('show');
/*var work_id = $(this).data("custom-value");
$.ajax({
url: 'showportfoliowork',
type: 'POST',
data: {'work_id': work_id, '_token': $('input:hidden[name=_token]').val()},
success: function (data) {
$('#portfolio-html').html(data);
$('#PortfolioWorkModel').modal('show');
},
});*/
});
});
</script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag() {
dataLayer.push(arguments);
}
gtag('js', new Date());

gtag('config', 'UA-120786630-1');
</script>
<script type="text/javascript">
$('.count').each(function () {
$(this).prop('Counter',0).animate({
Counter: $(this).text()
}, {
duration: 4000,
easing: 'swing',
step: function (now) {
$(this).text(Math.ceil(now));
}
});
});
</script>

<script type="text/javascript">

var revapi;

jQuery(document).ready(function() {

revapi = jQuery('.tp-banner').revolution(
{
delay:3000,
startwidth:1170,
startheight:650,
hideThumbs:10,
lazyType: "none",

});

});	//ready
</script>

</body>
</html>