
<!DOCTYPE HTML>
<html>
<head>
<title>Nexus Infotechno Inc.</title>
<link rel="icon" href="{{ asset('public/fevicon.png') }}">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="csrf-token" content="{{ csrf_token() }}">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
 
<link href="{{ asset('public/theme/css/bootstrap.min.css') }}" rel="stylesheet">
<!-- Custom CSS -->
<link href="{{ asset('public/theme/css/style.css') }}" rel="stylesheet">
<!-- Graph CSS -->
<link href="{{ asset('public/theme/css/font-awesome.css') }}" rel="stylesheet">
<!-- jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link href="{{ asset('public/theme/css/icon-font.min.css') }}" rel="stylesheet">
<!-- //lined-icons -->
<script src="{{ asset('public/theme/js/jquery-1.10.2.min.js') }}"></script>
<!--clock init-->
</head> 
<body>
    @yield('content')
    
    <!--js -->
    <script src="{{ asset('public/theme/js/jquery.nicescroll.js') }}"></script>
    <script src="{{ asset('public/theme/js/scripts.js') }}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('public/theme/js/bootstrap.min.js') }}"></script>
</body>
</html>
