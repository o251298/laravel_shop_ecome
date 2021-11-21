<?php
use Illuminate\Support\Facades\Auth;
?>
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <title>@yield('title', 'Магазин')</title>
    <link rel="stylesheet" href="{{asset('/assets/' . 'css/owl.carousel.min.css')}}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <link rel="stylesheet" href="{{asset('/assets/' . 'css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/' . 'css/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/' . 'css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/' . 'css/style.css')}}">
</head>

<body>
<!-- push menu-->
<!-- end push menu-->
<div class="wrappage">
    <!-- /header -->
@yield('content')
<!-- / end content -->
</div>
<script src="{{asset('/assets/' . 'js/jquery.js')}}"></script>
<script src="{{asset('/assets/' . 'js/bootstrap.js')}}"></script>
<script src="{{asset('/assets/' . 'js/main.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>


</body>

</html>
