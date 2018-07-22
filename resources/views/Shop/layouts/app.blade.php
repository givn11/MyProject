<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('shop') }}/img/favicon.ico">

    <!-- Google Fonts
		============================================ -->
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,600' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>

    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('shop') }}/css/bootstrap.min.css">
    <!-- Font awesome CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('shop') }}/css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('shop') }}/css/owl.carousel.css">
    <link rel="stylesheet" href="{{ asset('shop') }}/css/owl.theme.css">
    <link rel="stylesheet" href="{{ asset('shop') }}/css/owl.transitions.css">
    <!-- nivo slider CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('shop') }}/css/nivo-slider.css" type="text/css" />
    <!-- meanmenu CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('shop') }}/css/meanmenu.min.css">
    <!-- jquery-ui CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('shop') }}/css/jquery-ui.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('shop') }}/css/animate.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('shop') }}/css/main.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('shop') }}/css/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('shop') }}/css/responsive.css">
</head>
<body>
@include('shop.includes.header')


<!-- Category slider area start -->
<div class="category-slider-area">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                @include('shop.includes.sidebar')
            </div>
            <div class="col-md-9">
                @include('shop.includes.slider')
            </div>
        </div>
    </div>
</div>
<!-- Category slider area End -->
<!-- START PAGE-CONTENT -->
<section class="page-content">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3">
                @yield('content1')
            </div>
            <div class="col-md-9 col-sm-9">
                @yield('content2')
            </div>
        </div>
    </div>
    @yield('brandlogo')
    @include('shop.includes.subscribe')
</section>
<!-- END HOME-PAGE-CONTENT -->

@include('shop.includes.footer')

<!-- jquery
		============================================ -->
<script src="{{ asset('shop') }}/js/jquery-1.11.3.min.js"></script>
<!-- bootstrap JS
		============================================ -->
<script src="{{ asset('shop') }}/js/bootstrap.min.js"></script>
<!-- wow JS
		============================================ -->
<script src="{{ asset('shop') }}/js/wow.min.js"></script>
<!-- meanmenu JS
		============================================ -->
<script src="{{ asset('shop') }}/js/jquery.meanmenu.js"></script>
<!-- owl.carousel JS
		============================================ -->
<script src="{{ asset('shop') }}/js/owl.carousel.min.js"></script>
<!-- scrollUp JS
		============================================ -->
<script src="{{ asset('shop') }}/js/jquery.scrollUp.min.js"></script>
<!-- countdon.min JS
		============================================ -->
<script src="{{ asset('shop') }}/js/countdon.min.js"></script>
<!-- jquery-price-slider js
		============================================ -->
<script src="{{ asset('shop') }}/js/jquery-price-slider.js"></script>
<!-- Nivo slider js
		============================================ -->
<script src="{{ asset('shop') }}/js/jquery.nivo.slider.js" type="text/javascript"></script>
<!-- plugins JS
		============================================ -->
<script src="{{ asset('shop') }}/js/plugins.js"></script>
<!-- main JS
		============================================ -->
<script src="{{ asset('shop') }}/js/main.js"></script>
</body>
</html>
