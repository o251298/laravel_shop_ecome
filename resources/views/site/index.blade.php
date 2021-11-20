@extends('layout')
@section('content')
    <!-- Slide -->

    <div class="ads-group v2 bd-slick">
        <div class="container container-240">
            <div class="row">
                @if(session('success_unset_cart'))
                    <div class="alert alert-success d-flex align-items-center" role="alert">
                        <div>
                            {{session('success_unset_cart')}}
                        </div>
                    </div>
                @endif
                @if(session('empty_cart'))
                    <div class="alert alert-success d-flex align-items-center" role="alert">
                        <div>
                            {{session('empty_cart')}}
                        </div>
                    </div>
                @endif

                @if(session('success_create_order'))
                    <div class="alert alert-success d-flex align-items-center" role="alert">
                        <div>
                            {{session('success_create_order')}}
                        </div>
                    </div>
                @endif

                @if(session('error_create_order'))
                    <div class="alert alert-warning d-flex align-items-center" role="alert">
                        <div>
                            {{session('error_create_order')}}
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="container container-240 shop-collection catleft">
        <ul class="breadcrumb">
            <li><a href="/">@lang('site.index.nav.home')</a></li>
        </ul>
        <div class="row shop-colect r-sidebar">
            <div class="col-md-3 col-sm-3 col-xs-12 col-left collection-sidebar" id="filter-sidebar">
                <div class="filter filter-cate">
                    @include('site.items.category_widgets')
                </div>

                @include('site.items.filter')

                <div class="banner">
                    <a class="image-bd hover-images" href=""><img src="{{asset('/assets/img/banner/AppleWatch.jpg')}}" alt="" class="img-reponsive"></a>
                </div>
            </div>

            <div class="col-md-9 col-sm-12 col-xs-12 collection-list">
                <div class="e-product">
                    <div class="pd-banner">
                        <a href="#" class="image-bd effect_img2"><img src="{{asset('/assets/img/banner/macbook.jpg')}}" alt="" class="img-reponsive"></a>
                    </div>

                    <!--
                    <div class="bestseller">
                        <div class="ecome-heading style3v2 spc3">
                            <h1>Beseller Products</h1>
                            <a href="#" class="btn-show">Shop more<i class="ion-ios-arrow-forward"></i></a>
                        </div>
                        <div class="owl-carousel owl-theme owl-cate v2 js-owl-cate2">

                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/sound2.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                    <span class="icon-bg icon-view"></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-cart"></span>
                                            </a>
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-wishlist"></span>
                                            </a>
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-compare"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    -->
                    <div class="pd-top">
{{--                        <div class="show-element"><span>Showing {{count($product)}} of 20 results</span></div>--}}
                    </div>
                    <div class="product-collection-grid product-grid">
                        @if(count($products) < 1)
                            <h3>
                                 Вашему запросу ничего не найдено =(
                            </h3>
                        @else
                        <div class="row">
                            @foreach($products as $item)
                                @include('site.items.cart_product', ['product' => $item])
                            @endforeach
                        </div>
                    </div>
                    {{$products->links()}}
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="e-feature">
        <div class="container container-240">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4 feature-item">
                    <div class="feature-block-img">
                        <img src="{{asset('/assets/img/feature/b_truck.png')}}" alt="" class="img-reponsive">
                    </div>
                    <div class="feature-info v2">
                        <h3>@lang('site.index.nav.delivery')</h3>
                        <p>With sites in 5 languages, we ship to over 200 countries &amp; regions.</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 feature-item">
                    <div class="feature-block-img">
                        <img src="{{asset('/assets/img/feature/b_credit.png')}}" alt="" class="img-reponsive">
                    </div>
                    <div class="feature-info v2">
                        <h3>@lang('site.index.nav.payment')</h3>
                        <p>Pay with the world’s most popular and secure payment methods.</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 feature-item">
                    <div class="feature-block-img">
                        <img src="{{asset('/assets/img/feature/b-tele.png')}}" alt="" class="img-reponsive">
                    </div>
                    <div class="feature-info v2">
                        <h3>24/7 Help Center</h3>
                        <p>Round-the-clock assistance for a smooth shopping experience.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
