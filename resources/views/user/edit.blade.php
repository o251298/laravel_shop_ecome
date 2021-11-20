<?php
use Illuminate\Support\Facades\Auth;
?>
@section('title', 'Мой кабинет')
@extends('layout')
@section('content')
    <div class="container container-240">
        <div class="blog-banner pd-banner v2">
            <a href="#" class="effect_img2"><img src="img/blog/blog-banner.png" alt="" class="img-reponsive"></a>
        </div>
        <div class="blog spc1">
            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Аккаунт</li>
            </ul>
            @if(session('warning_admin_ckeck'))
                <h1>{{session('warning_admin_ckeck')}}</h1>
            @endif
            <div class="blog-single-post">
                <div class="row">
                    <div class="blog-content  col-md-9  col-xs-12">
                        <div class="blog-comment">
                            <form name="checkout" method="post" class="co" action="{{route('user.update')}}">
                                @csrf
                                <div class="cart-box-container-ver2">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="co-left bd-7">
                                                <div class="row form-customer">
                                                    <div class="form-group col-md-12">
                                                        <label for="inputfname_2" class=" control-label">Name <span class="f-red">*</span></label>
                                                        @error('name')
                                                        {{$message}}
                                                        @enderror
                                                        <input type="text" @auth value="{{Auth::user()->name}}" placeholder="{{Auth::user()->name}}" @endauth name="name" class="form-control form-account">
                                                    </div>

                                                    <div class="form-group col-md-12">
                                                        <label for="inputlname" class=" control-label">Email<span class="f-red">*</span></label>
                                                        @error('email')
                                                        {{$message}}
                                                        @enderror
                                                        <input type="email" name="email" @auth value="{{Auth::user()->email}}" placeholder="{{Auth::user()->email}}" @endauth class="form-control form-account">
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label for="inputphone" class=" control-label">Password <span class="f-red">*</span></label>
                                                        @error('password')
                                                        {{$message}}
                                                        @enderror
                                                        <input type="password" name="password" class="form-control form-account">
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label for="inputemail" class=" control-label">FIO <span class="f-red">*</span></label>
                                                        @error('email')
                                                        {{$message}}
                                                        @enderror
                                                        <input type="text" id="inputemail" @auth value="{{Auth::user()->fio}}" placeholder="{{Auth::user()->fio}}" @endauth name="fio" class="form-control form-account">
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label for="inputemail" class=" control-label">Number <span class="f-red">*</span></label>
                                                        @error('email')
                                                        {{$message}}
                                                        @enderror
                                                        <input type="text" id="inputemail" @auth value="{{Auth::user()->number}}" placeholder="{{Auth::user()->number}}" @endauth name="number" class="form-control form-account">
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label for="inputemail" class=" control-label">Number <span class="f-red">*</span></label>
                                                        <input type="text" id="city" name="city" class="form-control form-account">
                                                        <ul>
                                                            <li id="city_res"></li>
                                                        </ul>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label for="inputemail" class=" control-label">FIO <span class="f-red">*</span></label>
                                                        @error('email')
                                                        {{$message}}
                                                        @enderror
                                                        <input type="submit" class="form-control form-account">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End contact-form -->
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <h3>
                        test
                    </h3>
                    <form action="" method="get" autocomplete="off">
                        <div class="input-group">
                            <input type="text" id="search_test" name="search_test" class="form-control" placeholder="test search">
                            <span class="input-group-btn">
                                <button type="submit" class="btn btn-facebook"></button>
                            </span>
                        </div>
                    </form>


                    <form action="{{route('search.test')}}" method="post" autocomplete="off">
                        <div class="input-group">

                            @csrf
                            <input type="text" id="search_test2" name="search_test2" class="form-control" placeholder="search_test2 search">
                            <input type="hidden" name="test" id="ref_np">
                            <span class="input-group-btn">
                                <button type="submit" class="btn btn-facebook"></button>
                            </span>
                        </div>
                    </form>
                    <div class="blog-sidebar col-md-3 col-xs-12">
                        <div class="blog-widget blog-widget-category">
                            <h1 class="widget-blog-title">Categories</h1>
                            <ul class="wiget-content">
                                <li><a href="#">Arts and Entertainment <span class="number">(80)</span></a></li>
                                <li><a href="#">Business <span class="number">(39)</span></a></li>
                                <li><a href="#">Technology <span class="number">(56)</span></a></li>
                                <li><a href="#">Ideas <span class="number">(10)</span></a></li>
                                <li><a href="#">House & Theater <span class="number">(30)</span></a></li>
                            </ul>
                        </div>
                        <div class="blog-widget blog-widget-social">
                            <h1 class="widget-blog-title">Follow us</h1>
                            <div class="social">
                                <a href="#" class="fa fa-twitter"></a>
                                <a href="#" class="fa fa-dribbble"></a>
                                <a href="#" class="fa fa-behance"></a>
                                <a href="#" class="fa fa-instagram"></a>
                            </div>
                        </div>
                        <div class="blog-widget blog-widget-popular">
                            <h1 class="widget-blog-title">Popular post</h1>
                            <div class="owl-carousel owl-theme js-owl-post">
                                <div class="item">
                                    <div class="post-item">
                                        <div class="post-img">
                                            <img src="img/blog/post1.jpg" alt="">
                                        </div>
                                        <div class="post-info">
                                            <h3><a href="#">Traveling abroad change you forever</a></h3>
                                            <p>April 30, 2016</p>
                                        </div>
                                    </div>
                                    <div class="post-item">
                                        <div class="post-img">
                                            <img src="img/blog/post2.jpg" alt="">
                                        </div>
                                        <div class="post-info">
                                            <h3><a href="#">Traveling abroad change you forever</a></h3>
                                            <p>April 30, 2016</p>
                                        </div>
                                    </div>

                                    <div class="post-item">
                                        <div class="post-img">
                                            <img src="img/blog/post3.jpg" alt="">
                                        </div>
                                        <div class="post-info">
                                            <h3><a href="#">Traveling abroad change you forever</a></h3>
                                            <p>April 30, 2016</p>
                                        </div>
                                    </div>

                                    <div class="post-item">
                                        <div class="post-img">
                                            <img src="img/blog/post4.jpg" alt="">
                                        </div>
                                        <div class="post-info">
                                            <h3><a href="#">Traveling abroad change you forever</a></h3>
                                            <p>April 30, 2016</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="post-item">
                                        <div class="post-img">
                                            <img src="img/blog/post1.jpg" alt="">
                                        </div>
                                        <div class="post-info">
                                            <h3><a href="#">Traveling abroad change you forever</a></h3>
                                            <p>April 30, 2016</p>
                                        </div>
                                    </div>
                                    <div class="post-item">
                                        <div class="post-img">
                                            <img src="img/blog/post2.jpg" alt="">
                                        </div>
                                        <div class="post-info">
                                            <h3><a href="#">Traveling abroad change you forever</a></h3>
                                            <p>April 30, 2016</p>
                                        </div>
                                    </div>

                                    <div class="post-item">
                                        <div class="post-img">
                                            <img src="img/blog/post3.jpg" alt="">
                                        </div>
                                        <div class="post-info">
                                            <h3><a href="#">Traveling abroad change you forever</a></h3>
                                            <p>April 30, 2016</p>
                                        </div>
                                    </div>

                                    <div class="post-item">
                                        <div class="post-img">
                                            <img src="img/blog/post4.jpg" alt="">
                                        </div>
                                        <div class="post-info">
                                            <h3><a href="#">Traveling abroad change you forever</a></h3>
                                            <p>April 30, 2016</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="post-item">
                                        <div class="post-img">
                                            <img src="img/blog/post1.jpg" alt="">
                                        </div>
                                        <div class="post-info">
                                            <h3><a href="#">Traveling abroad change you forever</a></h3>
                                            <p>April 30, 2016</p>
                                        </div>
                                    </div>
                                    <div class="post-item">
                                        <div class="post-img">
                                            <img src="img/blog/post2.jpg" alt="">
                                        </div>
                                        <div class="post-info">
                                            <h3><a href="#">Traveling abroad change you forever</a></h3>
                                            <p>April 30, 2016</p>
                                        </div>
                                    </div>

                                    <div class="post-item">
                                        <div class="post-img">
                                            <img src="img/blog/post3.jpg" alt="">
                                        </div>
                                        <div class="post-info">
                                            <h3><a href="#">Traveling abroad change you forever</a></h3>
                                            <p>April 30, 2016</p>
                                        </div>
                                    </div>

                                    <div class="post-item">
                                        <div class="post-img">
                                            <img src="img/blog/post4.jpg" alt="">
                                        </div>
                                        <div class="post-info">
                                            <h3><a href="#">Traveling abroad change you forever</a></h3>
                                            <p>April 30, 2016</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-widget blog-widget-newsletter">
                            <h1 class="widget-blog-title">Newletter</h1>
                            <div class="newsletter">
                                <form class="form_newsletter" action="#" method="post">
                                    <input type="email" value="" placeholder="Enter your emaill adress" name="EMAIL"
                                           id="mail2" class="newsletter-input form-control">
                                    <button id="subscribe2" class="button_mini btn" type="submit">

                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="blog-widget blog-widget-instagram">
                            <h1 class="widget-blog-title">Instagram</h1>
                            <div class="instagram">
                                <a href="#" class=""><img src="img/blog/insta_1.jpg" alt="" class="img-reponsive"></a>
                                <a href="#" class=""><img src="img/blog/insta_2.jpg" alt=""></a>
                                <a href="#" class=""><img src="img/blog/insta_3.jpg" alt=""></a>
                                <a href="#" class=""><img src="img/blog/insta_4.jpg" alt=""></a>
                                <a href="#" class=""><img src="img/blog/insta_5.jpg" alt=""></a>
                                <a href="#" class=""><img src="img/blog/insta_6.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="blog-widget-banner">
                            <a href="#" class=""><img src="img/blog/ads.png" alt="" class="img-reponsive"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
