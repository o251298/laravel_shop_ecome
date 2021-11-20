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
<div class="pushmenu menu-home5">
    <div class="menu-push">
        <span class="close-left js-close"><i class="icon-close f-20"></i></span>
        <div class="clearfix"></div>
        <form role="search" method="get" id="searchform" class="searchform" action="/search">
            <div>
                <label class="screen-reader-text" for="q"></label>
                <input type="text" placeholder="Search for products" value="" name="q" id="q" autocomplete="off">
                <input type="hidden" name="type" value="product">
                <button type="submit" id="searchsubmit"><i class="ion-ios-search-strong"></i></button>
            </div>
        </form>
        <ul class="nav-home5 js-menubar">
            <li class="level1 active dropdown"><a href="{{route('shop')}}">Home</a>
                <span class="icon-sub-menu"></span>
                <ul class="menu-level1 js-open-menu">
                    <li class="level2"><a href="home1.html" title="">Demo 1</a></li>
                    <li class="level2"><a href="home2.html" title="">Demo 2</a></li>
                    <li class="level2"><a href="home3.html" title="">Demo 3</a></li>
                    <li class="level2"><a href="home4.html" title="">Demo 4</a></li>
                    <li class="level2"><a href="home5.html" title="">Demo 5</a></li>
                    <li class="level2"><a href="#" title="">Demo 6</a></li>
                </ul>
            </li>
            <li class="level1 active dropdown"><a href="#">Shop</a>
                <span class="icon-sub-menu"></span>
                <div class="menu-level1 js-open-menu">
                    <ul class="level1">
                        <li class="level2">
                            <a href="#">Shop Layout</a>
                            <ul class="menu-level-2">
                                <li class="level3"><a href="shop_full.html" title="">shop Full Width</a></li>
                                <li class="level3"><a href="shopgrid_v1.html" title="">Shop Grid v.1</a></li>
                                <li class="level3"><a href="shopgrid_v2.html" title="">Shop Grid v.2</a></li>
                                <li class="level3"><a href="shoplist.html" title="">Shop List</a></li>
                                <li class="level3"><a href="shopleft_sidebar.html" title="">Shop Left Sidebar</a></li>
                                <li class="level3"><a href="shopright_sidebar.html" title="">Shop Right Sidebar</a></li>
                            </ul>
                        </li>
                        <li class="level2">
                            <a href="#">Categories</a>
                            <ul class="menu-level-2">
                                <li class="level3"><a href="cat_fullwidth.html" title="">Categories Full Width</a></li>
                                <li class="level3"><a href="cat_left_sidebar.html" title="">Categories Left Sidebar</a>
                                </li>
                                <li class="level3"><a href="cat_right_sidebar.html" title="">Categories Right
                                        Sidebar</a></li>
                            </ul>
                        </li>
                        <li class="level2">
                            <a href="#">Single Product Type</a>
                            <ul class="menu-level-2">
                                <li class="level3"><a href="bundle.html" title="">Bundle</a></li>
                                <li class="level3"><a href="pin_product.html" title="">Pin Product</a></li>
                                <li class="level3"><a href="360degree.html" title="">360 Degree</a></li>
                                <li class="level3"><a href="feature_video.html" title="">Featued video</a></li>
                                <li class="level3"><a href="simple.html">Simple</a></li>
                                <li class="level3"><a href="variable.html">Variable</a></li>
                                <li class="level3"><a href="affilate.html">External / Affiliate</a></li>
                                <li class="level3"><a href="grouped.html">Grouped</a></li>
                                <li class="level3"><a href="outofstock.html">Out of stock</a></li>
                                <li class="level3"><a href="onsale.html">On sale</a></li>
                            </ul>
                        </li>
                        <li class="level2">
                            <a href="#">Single Product Layout</a>
                            <ul class="menu-level-2">
                                <li class="level3"><a href="product_extended.html" title="">Product Extended</a></li>
                                <li class="level3"><a href="product_sidebar.html" title="">Product Left Sidebar</a></li>
                                <li class="level3"><a href="product_right_sidebar.html" title="">Product Right
                                        Sideba</a></li>
                            </ul>
                        </li>
                        <li class="level2">
                            <a href="#">Other Pages</a>
                            <ul class="menu-level-2">
                                <li class="level3"><a href="shop_full.html" title="">Shop</a></li>
                                <li class="level3"><a href="cart.html" title="">Cart</a></li>
                                <li class="level3"><a href="wishlist.html" title="">My Wishlist</a></li>
                                <li class="level3"><a href="checkout.html" title="">Checkout</a></li>
                                <li class="level3"><a href="myaccount.html" title="">My Account</a></li>
                                <li class="level3"><a href="track.html" title="">Track Your Order</a></li>
                                <li class="level3"><a href="quickview.html" title="">Quick View</a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </li>
            <li class="level1 active dropdown"><a href="#">Mega Menu</a></li>
            <li class="level1">
                <a href="#">Pages</a>
                <span class="icon-sub-menu"></span>
                <ul class="menu-level1 js-open-menu">
                    <li class="level2"><a href="aboutus.html" title="About Us ">About Us </a></li>
                    <li class="level2"><a href="contactus.html" title="Contact">Contact</a></li>
                    <li class="level2"><a href="faq.html" title="FAQs">FAQs</a></li>
                    <li class="level2"><a href="404.html" title="404">404</a></li>
                    <li class="level2"><a href="commingsoon.html" title="Coming Soon">Coming Soon</a></li>
                </ul>
            </li>
            <li class="level1">
                <a href="#">Blog</a>
                <span class="icon-sub-menu"></span>
            </li>
        </ul>
    </div>
</div>
<!-- end push menu-->
<div class="wrappage">
    <header id="header" class="header-v5">
        <div class="header-center">
            <div class="container container-240">
                <div class="row flex">
                    <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6 v-center header-logo">
                        <a href="{{route('shop')}}"><img src="{{asset('/assets/img/logo.png')}}" alt="" class="img-reponsive"></a>
                    </div>
                    <div class="col-lg-7 col-md-7 v-center header-search hidden-xs hidden-sm">
                        <form method="get" class="searchform ajax-search" action="{{route('search')}}" role="search">
                            <input type="text" placeholder="@lang('site.index.nav.search')" name="search" value="{{request()->search}}" class="form-control">
                            <div class="search-panel">

                            </div>
                            <span class="input-group-btn">
                                <button class="button_search">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                    </svg>
                                </button>
                            </span>
                        </form>
                    </div>
                    <div class="col-lg-3  col-md-3 col-sm-6 col-xs-6 v-center header-sub">
                        <div class="right-panel">
                            <div class="header-sub-element row">
                                <div class="cart">
                                    @auth()
                                        <div class="element hidden-xs hidden-sm">
                                            <a href="{{route('home')}}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                                                    <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="element hidden-xs hidden-sm">
                                            <a href="{{route('get_logout')}}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-door-closed" viewBox="0 0 16 16">
                                                    <path d="M3 2a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v13h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V2zm1 13h8V2H4v13z"/>
                                                    <path d="M9 9a1 1 0 1 0 2 0 1 1 0 0 0-2 0z"/>
                                                </svg>
                                            </a>
                                        </div>
                                        @if((Auth::user()->isAdmin()))
                                            <div class="element hidden-xs hidden-sm">
                                                <a href="{{route('admin')}}">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-fingerprint" viewBox="0 0 16 16">
                                                        <path d="M8.06 6.5a.5.5 0 0 1 .5.5v.776a11.5 11.5 0 0 1-.552 3.519l-1.331 4.14a.5.5 0 0 1-.952-.305l1.33-4.141a10.5 10.5 0 0 0 .504-3.213V7a.5.5 0 0 1 .5-.5Z"/>
                                                        <path d="M6.06 7a2 2 0 1 1 4 0 .5.5 0 1 1-1 0 1 1 0 1 0-2 0v.332c0 .409-.022.816-.066 1.221A.5.5 0 0 1 6 8.447c.04-.37.06-.742.06-1.115V7Zm3.509 1a.5.5 0 0 1 .487.513 11.5 11.5 0 0 1-.587 3.339l-1.266 3.8a.5.5 0 0 1-.949-.317l1.267-3.8a10.5 10.5 0 0 0 .535-3.048A.5.5 0 0 1 9.569 8Zm-3.356 2.115a.5.5 0 0 1 .33.626L5.24 14.939a.5.5 0 1 1-.955-.296l1.303-4.199a.5.5 0 0 1 .625-.329Z"/>
                                                        <path d="M4.759 5.833A3.501 3.501 0 0 1 11.559 7a.5.5 0 0 1-1 0 2.5 2.5 0 0 0-4.857-.833.5.5 0 1 1-.943-.334Zm.3 1.67a.5.5 0 0 1 .449.546 10.72 10.72 0 0 1-.4 2.031l-1.222 4.072a.5.5 0 1 1-.958-.287L4.15 9.793a9.72 9.72 0 0 0 .363-1.842.5.5 0 0 1 .546-.449Zm6 .647a.5.5 0 0 1 .5.5c0 1.28-.213 2.552-.632 3.762l-1.09 3.145a.5.5 0 0 1-.944-.327l1.089-3.145c.382-1.105.578-2.266.578-3.435a.5.5 0 0 1 .5-.5Z"/>
                                                        <path d="M3.902 4.222a4.996 4.996 0 0 1 5.202-2.113.5.5 0 0 1-.208.979 3.996 3.996 0 0 0-4.163 1.69.5.5 0 0 1-.831-.556Zm6.72-.955a.5.5 0 0 1 .705-.052A4.99 4.99 0 0 1 13.059 7v1.5a.5.5 0 1 1-1 0V7a3.99 3.99 0 0 0-1.386-3.028.5.5 0 0 1-.051-.705ZM3.68 5.842a.5.5 0 0 1 .422.568c-.029.192-.044.39-.044.59 0 .71-.1 1.417-.298 2.1l-1.14 3.923a.5.5 0 1 1-.96-.279L2.8 8.821A6.531 6.531 0 0 0 3.058 7c0-.25.019-.496.054-.736a.5.5 0 0 1 .568-.422Zm8.882 3.66a.5.5 0 0 1 .456.54c-.084 1-.298 1.986-.64 2.934l-.744 2.068a.5.5 0 0 1-.941-.338l.745-2.07a10.51 10.51 0 0 0 .584-2.678.5.5 0 0 1 .54-.456Z"/>
                                                        <path d="M4.81 1.37A6.5 6.5 0 0 1 14.56 7a.5.5 0 1 1-1 0 5.5 5.5 0 0 0-8.25-4.765.5.5 0 0 1-.5-.865Zm-.89 1.257a.5.5 0 0 1 .04.706A5.478 5.478 0 0 0 2.56 7a.5.5 0 0 1-1 0c0-1.664.626-3.184 1.655-4.333a.5.5 0 0 1 .706-.04ZM1.915 8.02a.5.5 0 0 1 .346.616l-.779 2.767a.5.5 0 1 1-.962-.27l.778-2.767a.5.5 0 0 1 .617-.346Zm12.15.481a.5.5 0 0 1 .49.51c-.03 1.499-.161 3.025-.727 4.533l-.07.187a.5.5 0 0 1-.936-.351l.07-.187c.506-1.35.634-2.74.663-4.202a.5.5 0 0 1 .51-.49Z"/>
                                                    </svg>
                                                </a>
                                            </div>
                                        @endif
                                    @endauth


                                    @guest()
                                        <div class="element hidden-xs hidden-sm">
                                            <a href="{{route('login')}}" style="width: 100px; height: 100px">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-door-open" viewBox="0 0 16 16">
                                                    <path d="M8.5 10c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"/>
                                                    <path d="M10.828.122A.5.5 0 0 1 11 .5V1h.5A1.5 1.5 0 0 1 13 2.5V15h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117zM11.5 2H11v13h1V2.5a.5.5 0 0 0-.5-.5zM4 1.934V15h6V1.077l-6 .857z"/>
                                                </svg>
                                            </a>
                                        </div>
                                    @endguest


                                    <a href="{{route('order.cart')}}" class="dropdown-toggle" data-toggle="dropdown"
                                       role="button" aria-haspopup="true" aria-expanded="false" id="label5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                        </svg>
                                        <span class="count cart-count"
                                              id="cart_count">{{\App\Models\Order::countProductInCart()}}
                                        </span>

                                    </a>

                                    <div class="dropdown-menu dropdown-cart">
                                        <ul class="mini-products-list" id="mini-products-list">
                                            <!-- DEVEL -->
                                        </ul>
                                        <div class="bottom-cart">
                                            <div class="cart-price">
                                                <span>@lang('site.cart_details')</span>
                                                {{--                                                <span class="price-total">$ 120.00</span>--}}
                                            </div>
                                            <div class="button-cart">
                                                <a href="{{route('order.cart')}}"
                                                   class="cart-btn btn-viewcart">@lang('site.cart')</a>
                                                <a href="{{route('order.checkout')}}"
                                                   class="cart-btn e-checkout btn-gradient">@lang('site.checkout')</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="hidden-md hidden-lg icon-pushmenu js-push-menu">
                                    <i class="fa fa-bars f-15"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom hidden-xs hidden-sm">
            <div class="container container-240">
                <div class="row flex lr2">
                    @include('site.items.listCategory')
                    <div class="col-lg-9 widget-left">
                        <div class="flex lr e-border">
                            <nav class="main-menu flex align-center">
                                <button type="button" class="icon-mobile e-icon-menu icon-pushmenu js-push-menu">
                                    <span class="navbar-toggler-bar"></span>
                                    <span class="navbar-toggler-bar"></span>
                                    <span class="navbar-toggler-bar"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="myNavbar">
                                    <ul class="nav navbar-nav js-menubar">
                                        <li class="level1 active hassub"><a href="#">@lang('site.index.nav.home')</a>
                                        </li>
                                        <li class="level1 dropdown hassub"><a href="#">@lang('site.index.nav.hit')<span
                                                    class="h-ribbon h-pos e-green">sale</span></a>
                                        </li>
                                        <li class="level1 active dropdown">
                                            <a href="#">@lang('site.index.nav.new')</a>
                                        </li>
                                        <li class="level1 active dropdown">
                                            <a href="#">@lang('site.index.nav.blog')</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                            <div class="header-bottom-right hidden-xs hidden-sm">
                                <img src="img/icon-ship.png" alt="" class="img-reponsive">
                                <a href="{{route('local', 'ru')}}" style="font-size: 15px;@if(session('my_local') == 'ru') color: black; @else color:#999999; @endif">Ru</a>
                                <strong style="font-size: 20px; font-weight: normal; margin: 5px">|</strong>
                                <a href="{{route('local', 'en')}}" style="font-size: 15px;@if(session('my_local') == 'en') color: black; @else color:#999999; @endif">En</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- /header -->
@yield('content')
<!-- / end content -->
    <footer>
        <div class="f-top">
            <div class="container container-240">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                        <div class="footer-block footer-about">
                            <div class="f-logo">
                                <a href="#"><img src="img/logo.png" alt="" class="img-reponsive"></a>
                            </div>
                            <ul class="footer-block-content">
                                <li class="address">
                                    <span>45 Grand Central Terminal New York,NY 1017 United State USA</span>
                                </li>
                                <li class="phone">
                                    <span>(+123) 456 789 - (+123) 666 888</span>
                                </li>
                                <li class="email">
                                    <span>Contact@yourcompany.com</span>
                                </li>
                                <li class="time">
                                    <span>Mon-Sat 9:00pm - 5:00pm  &nbsp;&nbsp;&nbsp;  Sun : Closed</span>
                                </li>
                            </ul>
                            <div class="footer-social social">
                                <h3 class="footer-block-title">Follow us</h3>
                                <a href="#" class="fa fa-twitter"></a>
                                <a href="#" class="fa fa-dribbble"></a>
                                <a href="#" class="fa fa-behance"></a>
                                <a href="#" class="fa fa-instagram"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                        <div class="footer-block">
                            <h3 class="footer-block-title">Quick menu</h3>
                            <ul class="footer-block-content">
                                <li><a href="#">TV & Video</a></li>
                                <li><a href="#">Home Audio & Theater</a></li>
                                <li><a href="#">Camera, Photo & Video</a></li>
                                <li><a href="#">Cell Phones & Accessories</a></li>
                                <li><a href="#">Headphones</a></li>
                                <li><a href="#">Video Games</a></li>
                                <li><a href="#">Bluetooth & Wireless Speakers</a></li>
                                <li><a href="#">Car Electronics</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2">
                        <div class="footer-block">
                            <h3 class="footer-block-title">Customer Service</h3>
                            <ul class="footer-block-content">
                                <li><a href="{{route('login')}}">My Account</a></li>
                                <li><a href="#">Track your Order</a></li>
                                <li><a href="#">Returns/Exchange</a></li>
                                <li><a href="#">FAQs</a></li>
                                <li><a href="#">Customer Service</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                        <div class="footer-block">
                            <div class="footer-block-phone">
                                <h3 class="footer-block-title">Hot Line</h3>
                                <p class="phone-desc">Call Us toll Free</p>
                                <p class="phone-light">(+123) 456 789 or (+123) 666 888</p>
                            </div>
                            <div class="footer-block-newsletter">
                                <h3 class="footer-block-title">Subscription</h3>
                                <p>Register now to get updates on promotions and coupons.</p>
                                <form class="form_newsletter" action="#" method="post">
                                    <input type="email" value="" placeholder="Enter your emaill adress" name="EMAIL"
                                           id="mail" class="newsletter-input form-control">
                                    <button id="subscribe" class="button_mini btn btn-gradient" type="submit">
                                        Subscribe
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="f-bottom">
            <div class="container container-240">
                <div class="row flex lr">
                    <div class="col-xs-6 f-copyright"><span>© 2010-2018 EngoTheme. All rights reserved.</span></div>
                    <div class="col-xs-6 f-payment hidden-xs">
                        <a href="#"><img src="img/payment/mastercard.png" alt="" class="img-reponsive"></a>
                        <a href="#"><img src="img/payment/paypal.png" alt="" class="img-reponsive"></a>
                        <a href="#"><img src="img/payment/visa.png" alt="" class="img-reponsive"></a>
                        <a href="#"><img src="img/payment/american-express.png" alt="" class="img-reponsive"></a>
                        <a href="#"><img src="img/payment/western-union.png" alt="" class="img-reponsive"></a>
                        <a href="#"><img src="img/payment/jcb.png" alt="" class="img-reponsive"></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- /footer -->
    <!-- /footer -->
</div>
<a href="#" class="btn-gradient scroll_top"><i class="ion-ios-arrow-up"></i></a>
<script src="{{asset('/assets/' . 'js/jquery.js')}}"></script>

<script src="{{asset('/js/orders.js')}}"></script>
<script src="{{asset('/js/delivery.js')}}"></script>
<script src="{{asset('/assets/' . 'js/bootstrap.js')}}"></script>

<script src="{{asset('/assets/' . 'js/owl.carousel.min.js')}}"></script>
<script src="{{asset('/assets/' . 'js/slick.js')}}"></script>
<script src="{{asset('/assets/' . 'js/countdown.js')}}"></script>
<script src="{{asset('/assets/' . 'js/main.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>


</body>

</html>
