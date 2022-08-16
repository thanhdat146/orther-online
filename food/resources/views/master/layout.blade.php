<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from demo.hasthemes.com/origine-preview/origine/index-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Jun 2019 09:03:36 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Origine - Organic Food Bootstrap 4 Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{URL::asset('assets/images/favicon.ico')}}">

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{URL::asset('assets/css/vendor/bootstrap.min.css')}}">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{URL::asset('assets/css/vendor/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/vendor/plaza-font.css')}}">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{URL::asset('assets/css/plugins/slick.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/plugins/swiper.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/plugins/animation.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/plugins/nice-select.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/plugins/fancy-box.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/plugins/jqueryui.min.css')}}">

    <!-- Vendor & Plugins CSS (Please remove the comment from below vendor.min.css & plugins.min.css for better website load performance and remove css files from avobe) -->
    <!--
    <script src="assets/js/vendor/vendor.min.js"></script>
    <script src="assets/js/plugins/plugins.min.js"></script>
    -->

    <!-- Main Style CSS (Please use minify version for better website load performance) -->
    <link rel="stylesheet" href="{{URL::asset('assets/css/style.css')}}">
    <!--<link rel="stylesheet" href="assets/css/style.min.css">-->


</head>

<body>

    <div class="main-wrapper">
        @include('master.header')
            <!-- Main view  -->
            @yield('content')    <!-- chỗ thay đổi --> 

        @include('master.footer')
    </div>
        <!-- JS
============================================ -->

    <!-- Modernizer JS -->
    <script src="{{URL::asset('assets/js/vendor/modernizr-3.6.0.min.js')}}"></script>
    <!-- jQuery JS -->
    <script src="{{URL::asset('assets/js/vendor/jquery-3.3.1.min.js')}}"></script>
    <!-- Bootstrap JS -->
    <script src="{{URL::asset('assets/js/vendor/popper.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/vendor/bootstrap.min.js')}}"></script>

    <!-- Plugins JS -->
    <script src="{{URL::asset('assets/js/plugins/slick.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/plugins/swiper.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/plugins/jquery.nice-select.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/plugins/countdown.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/plugins/image-zoom.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/plugins/fancybox.js')}}"></script>
    <script src="{{URL::asset('assets/js/plugins/scrollup.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/plugins/jqueryui.min.js')}}"></script>
     <script src="{{URL::asset('assets/js/plugins/ajax-contact.js')}}"></script>

    <!-- Vendor & Plugins JS (Please remove the comment from below vendor.min.js & plugins.min.js for better website load performance and remove js files from avobe) -->
    <!--
<script src="assets/js/vendor/vendor.min.js"></script>
<script src="assets/js/plugins/plugins.min.js"></script>
-->

    <!-- Main JS -->
    <script src="{{URL::asset('assets/js/main.js')}}"></script>
    <script src="{{URL::asset('assets/js/myjs.js')}}"></script>

    <script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
  </script>

</body>