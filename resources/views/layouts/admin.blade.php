<!DOCTYPE HTML>
<html>
    <head>
        <title>Admin Panel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- Bootstrap Core CSS -->
        <link href="{{ asset('public/theme/css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- Datatable -->
        <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
        <!-- Custom CSS -->
        <link href="{{ asset('public/theme/css/style.css') }}" rel="stylesheet">
        <!-- Graph CSS -->
        <link href="{{ asset('public/theme/css/font-awesome.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" >
        <!-- jQuery -->
        <link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
        <!-- lined-icons -->
        <link href="{{ asset('public/theme/css/icon-font.min.css') }}" rel="stylesheet">
        <!--- datepicker -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.min.css" rel="stylesheet"/>
        
        <!-- //lined-icons -->
        <script src="{{ asset('public/theme/js/jquery-1.10.2.min.js') }}"></script>
        <script src="{{ asset('public/theme/js/amcharts.js') }}"></script>
        <script src="{{ asset('public/theme/js/serial.js') }}"></script>
        <script src="{{ asset('public/theme/js/light.js') }}"></script>
        <script src="{{ asset('public/theme/js/radar.js') }}"></script>
        <link href="{{ asset('public/theme/css/bars.css') }}" rel="stylesheet">
        <link href="{{ asset('public/theme/css/fabochart.css') }}" rel="stylesheet">
        <script src="{{ asset('public/theme/js/css3clock.js') }}"></script>
        <script src="{{ asset('public/theme/js/skycons.js') }}"></script>
        <!-- CKEditor -->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>  
        <!-- Datepicker -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
       
        <!-- DataTables -->
        <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
        <script src = "https://cdnjs.cloudflare.com/ajax/libs/bootstrap-filestyle/2.1.0/bootstrap-filestyle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>
    </head> 
    <body>
        <div class="page-container">
            <!--/content-inner-->
            <div class="left-content">
                <div class="inner-content">
                    <!-- header-starts -->
                    <div class="header-section">
                        <!--menu-right-->
                        <div class="top_menu">
                            <div class="profile_details_left">
                                <ul class="nofitications-dropdown">
                                    <li class="dropdown note dra-down">
                                        <div id="dd" class="wrapper-dropdown-3" tabindex="1">
                                            <span>{{ Auth::user()->name }}</span>
                                            <ul class="dropdown">
                                                 <li>
                                                    <a href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        {{ csrf_field() }}
                                                    </form>
                                                </li>
                                            </ul>
                                        </div>
                                        <script type="text/javascript">

                                            function DropDown(el) {
                                                this.dd = el;
                                                this.placeholder = this.dd.children('span');
                                                this.opts = this.dd.find('ul.dropdown > li');
                                                this.val = '';
                                                this.index = -1;
                                                this.initEvents();
                                            }
                                            DropDown.prototype = {
                                                initEvents: function () {
                                                    var obj = this;

                                                    obj.dd.on('click', function (event) {
                                                        $(this).toggleClass('active');
                                                        return false;
                                                    });

                                                    obj.opts.on('click', function () {
                                                        var opt = $(this);
                                                        obj.val = opt.text();
                                                        obj.index = opt.index();
                                                        obj.placeholder.text(obj.val);
                                                    });
                                                },
                                                getValue: function () {
                                                    return this.val;
                                                },
                                                getIndex: function () {
                                                    return this.index;
                                                }
                                            }

                                            $(function () {

                                                var dd = new DropDown($('#dd'));

                                                $(document).click(function () {
                                                    // all dropdowns
                                                    $('.wrapper-dropdown-3').removeClass('active');
                                                });

                                            });

                                        </script>
                                    </li>				   		
                                    <div class="clearfix"></div>	
                                </ul>
                            </div>
                            <div class="clearfix"></div>	
                            <!--//profile_details-->
                        </div>
                        <!--//menu-right-->
                        <div class="clearfix"></div>
                    </div>
                    <!--/sidebar-menu-->
                    <div class="sidebar-menu">
                        <header class="logo">
                            <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href=""> <span id="logo"> <h1>NEXUS</h1></span> 
                            <!--<img id="logo" src="" alt="Logo"/>--> 
                            </a> 
                        </header>
                        <div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
                        <!--/down-->
                        <div class="down">	
                            <a href=""><img src="{{ asset('public/theme/images/user.png') }}"></a>
                            <a href=""><span class=" name-caret">{{ Auth::user()->name }}</span></a>
                        </div>
                        <!--//down-->
                        <div class="menu">
                            <ul id="menu" >
                                <li><a href="{{route('home')}}"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a></li>
                                <li id="menu-academico" ><a href="#"><i class="fa fa-table"></i> <span> Home Page</span> <span class="fa fa-angle-right" style="float: right"></span></a>
                                    <ul id="menu-academico-sub" >
                                        <!--<li><a href="{{route('Slider.index')}}"><i class="fa fa-camera"></i> <span>Front Slider</span></a></li>-->
                                        <li><a href="{{route('latest_work.index')}}"><i class="fa fa-bullhorn"></i> <span>Latest Work</span></a></li>
                                        <li><a href="{{route('testimonial.index')}}"><i class="fa fa-comments-o"></i> <span>Testimonial</span></a></li>
                                        <li><a href="{{route('happyclient.index')}}"><i class="fa fa-flag-checkered"></i> <span>Happy Clinets</span></a></li>
                                    </ul>
                                </li>
                                <li id="menu-academico" ><a href="#"><i class="fa fa-info"></i> <span> About us Page</span> <span class="fa fa-angle-right" style="float: right"></span></a>
                                    <ul id="menu-academico-sub" >
                                        <li><a href="{{route('about.index')}}"><i class="fa fa-flag-checkered"></i> <span>About</span></a></li>
                                    </ul>
                                </li>
                                <li id="menu-academico" ><a href="#"><i class="fa fa-wrench"></i> <span>Services</span> <span class="fa fa-angle-right" style="float: right"></span></a>
                                    <ul id="menu-academico-sub" >
                                        <li><a href="{{route('services.index')}}"><i class="fa fa-wrench"></i> <span>Home Services</span></a></li>
                                        <!--<li><a href=""><i class="fa fa-wrench"></i> <span>Featured Work</span></a></li>-->
                                    </ul>
                                </li>
                                
                                <li id="menu-academico" ><a href="#"><i class="fa fa-bell"></i> <span>Portfolio</span> <span class="fa fa-angle-right" style="float: right"></span></a>
                                    <ul id="menu-academico-sub" >
                                        <li><a href="{{route('portfolios.index')}}"><i class="fa fa-wrench"></i> <span>Portfolio</span></a></li>
                                        <li><a href="{{route('category.index')}}"><i class="fa fa-wrench"></i> <span>Category</span></a></li>
                                        <!--<li><a href=""><i class="fa fa-wrench"></i> <span>Featured Work</span></a></li>-->
                                    </ul>
                                </li>
                                <li id="menu-academico" ><a href="#"><i class="fa fa-bullhorn"></i> <span>Blog</span> <span class="fa fa-angle-right" style="float: right"></span></a>
                                    <ul id="menu-academico-sub" >
                                        <li><a href="{{route('blogs.index')}}"><i class="fa fa-wrench"></i> <span>Blog</span></a></li>
                                        <li><a href="{{route('blogcategory.index')}}"><i class="fa fa-wrench"></i> <span>Blog Category</span></a></li>
                                    </ul>
                                </li>
                                <!--<li><a href="{{route('portfolios.index')}}"><i class="fa fa-bell"></i> <span>Portfolio</span></a></li>-->
                                <li><a href="{{route('page.index')}}"><i class="fa fa-info"></i> <span>Page</span></a></li>
                                <li><a href="{{route('inquirys.index')}}"><i class="fa fa-info"></i> <span>Inquiry</span></a></li>
                                <li><a href="{{route('jobopening.index')}}"><i class="fa fa-info"></i> <span>Job Opening</span></a></li>
                                <!--<li id="menu-academico" ><a href="#"><i class="fa fa-table"></i> <span> General Settings</span> <span class="fa fa-angle-right" style="float: right"></span></a>
                                    <ul id="menu-academico-sub" >
                                        <li><a href="{{route('category.index')}}"><i class="fa fa-info"></i> <span> Category</span></a></li>
                                    </ul>
                                </li>-->
                                
                                <!--<li id="menu-academico" ><a href="#"><i class="fa fa-envelope"></i> <span>Contact Us</span> <span class="fa fa-angle-right" style="float: right"></span></a>
                                    <ul id="menu-academico-sub" >
                                        <li><a href=""><i class="fa fa-comments-o"></i> <span>Inquiry</span></a></li>
                                        <li><a href=""><i class="fa fa-info"></i> <span>Company Info</span></a></li>
                                    </ul>
                                </li>-->
                                
                                <!--<li><a href=""><i class="fa fa-camera"></i> <span>Gallery</span></a></li>
                                
                                <li><a href=""><i class="fa fa-users"></i> <span>Team</span></a></li>
                                
                                <li><a href=""><i class="fa fa-envelope"></i> <span>Subscribers</span></a></li>
                                <li><a href=""><i class="fa fa-comments-o"></i> <span>Testimonials</span></a></li>-->
                            </ul>
                        </div>
                    </div>
                    <div class="outter-wp">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(":file").filestyle();
            var toggle = true;

            $(".sidebar-icon").click(function () {
                if (toggle)
                {
                    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
                    $("#menu span").css({"position": "absolute"});
                } else
                {
                    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
                    setTimeout(function () {
                        $("#menu span").css({"position": "relative"});
                    }, 400);
                }
                toggle = !toggle;
            });
        </script>
        <!--<link href="{{ asset('theme/css/vroom.css') }}" rel="stylesheet">
        <script src="{{ asset('theme/js/vroom.js') }}"></script>-->
        <script src="{{ asset('public/theme/js/TweenLite.min.js') }}"></script>
        <script src="{{ asset('public/theme/js/CSSPlugin.min.js') }}"></script>
        <script src="{{ asset('public/theme/js/jquery.nicescroll.js') }}"></script>
        <script src="{{ asset('public/theme/js/scripts.js') }}"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="{{ asset('public/theme/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('public/vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
        
        <script src="{{ asset('public/vendor/tinymce/tinymce.min.js') }}"></script>
        
        <script type="text/javascript">
            $(document).ready(function () {
                if($("#elm1").length > 0){
                    tinymce.init({
                        selector: "textarea#elm1",
                        theme: "modern",
                        height:300,
                        plugins: [
                            "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                            "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                            "save table contextmenu directionality emoticons template paste textcolor"
                        ],
                        content_css : "http://nexusinfotechno.com/public/theme/css/tinyMCE.css",
                        //toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons", 
                        /*style_formats: [
                            {title: 'Bold text', inline: 'b'},
                            {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                            {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                            {title: 'Example 1', inline: 'span', classes: 'example1'},
                            {title: 'Example 2', inline: 'span', classes: 'example2'},
                            {title: 'Table styles'},
                            {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
                        ]*/
                    });    
                }  
            });
        </script>
        
    </body>
</html>
