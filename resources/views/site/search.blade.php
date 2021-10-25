@extends('layout')
@section('content')
    <!-- Slide -->

    <div class="ads-group v2 bd-slick">
        <div class="container container-240">
            <div class="row">
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <div class="e-slide js-slider-3items">
                        <div class="e-slide-img">
                            <img src="img/slider/h5_s1.jpg" alt="" class="img-responsive">
                            <div class="slide-content v1">
                                <p class="cate">SMART TIVI</p>
                                <h3>Say hello to the future</h3>
                                <p class="sale">Sale up to <span class="red">60%</span> off</p>
                                <a href="#" class="slide-btn e-pink-gradient">Shop now<i class="ion-ios-arrow-forward"></i></a>
                            </div>
                        </div>
                        <div class="e-slide-img">
                            <img src="img/slider/h5_s2.jpg" alt="" class="img-responsive">
                            <div class="slide-content v1">
                                <p class="cate">SMART TIVI</p>
                                <h3>Say hello to the future</h3>
                                <p class="sale">Sale up to <span class="red">60%</span> off</p>
                                <a href="#" class="slide-btn e-pink-gradient">Shop now<i class="ion-ios-arrow-forward"></i></a>
                            </div>
                        </div>
                        <div class="e-slide-img">
                            <img src="img/slider/h5_s3.jpg" alt="" class="img-responsive">
                            <div class="slide-content v1">
                                <p class="cate">SMART TIVI</p>
                                <h3>Say hello to the future</h3>
                                <p class="sale">Sale up to <span class="red">60%</span> off</p>
                                <a href="#" class="slide-btn e-red-gradient">Shop now<i class="ion-ios-arrow-forward"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="row">
                        <div class="col-md-12 banner-img-item">
                            <div class="banner-img banner-img2">
                                <a href="#"><img src="img/banner/h5_b2.jpg" alt="" class="img-responsive"></a>
                                <div class="h-banner-content v4">
                                    <p class="content-name">Playstation 4 game pro</p>
                                    <p class="content-price">From <span class="red">29.99</span></p>
                                    <a href="#" class="btn-banner">Shop now<i class="ion-ios-arrow-forward"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 banner-img-item">
                            <div class="banner-img banner-img2 banner-img-item">
                                <a href="#"><img src="img/banner/h5_b1.jpg" alt="" class="img-responsive"></a>
                                <div class="h-banner-content v4">
                                    <p class="content-name">Smart phone mix 2</p>
                                    <p class="content-price">From <span class="red">99.99</span></p>
                                    <a href="#" class="btn-banner">Shop now<i class="ion-ios-arrow-forward"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature v2 -->

    @if(count($products) == 0)
        EMPTY
    @else

    <div class="container container-240 shop-collection catleft">
        <ul class="breadcrumb">
            <li><a href="#">Home</a></li>
        </ul>
        <div class="filter-collection-left hidden-lg hidden-md">
            <a class="btn">Filter</a>
        </div>
        <div class="row shop-colect r-sidebar">
            <div class="col-md-3 col-sm-3 col-xs-12 col-left collection-sidebar" id="filter-sidebar">
                <div class="close-sidebar-collection hidden-lg hidden-md">
                    <span>filter</span><i class="icon_close ion-close"></i>
                </div>
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
                    <!--
                    <div class="pd-middle">
                        <div class="view-mode view-group">
                            <a class="grid-icon col active"><img src="img/grid.png" alt=""></a>
                            <a class="grid-icon col2"><img src="img/grid2.png" alt=""></a>
                            <a class="list-icon list"><img src="img/list.png" alt=""></a>
                        </div>
                        <div class="pd-sort">
                            <div class="filter-sort">
                                <div class="dropdown">
                                    <button class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        <span class="dropdown-label">Default sorting</span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="manual">Featured</a></li>
                                        <li><a href="best-selling">Best Selling</a></li>
                                        <li><a href="title-ascending">Alphabetically, A-Z</a></li>
                                        <li><a href="title-descending">Alphabetically, A-Z</a></li>
                                        <li><a href="price-descending">Price, high to low</a></li>
                                        <li><a href="price-ascending">Price, low to high</a></li>
                                        <li><a href="created-ascending">Date, old to new</a></li>
                                        <li><a href="created-descending">Date, new to old</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="filter-show">
                                <div class="dropdown">
                                    <button class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        Show
                                        <span class="dropdown-label">12</span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">12</a></li>
                                        <li><a href="#">24</a></li>
                                        <li><a href="#">36</a></li>
                                        <li><a href="#">48</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    -->
                    <div class="product-collection-grid product-grid">
                        Найдено {{count($products)}}
                        <div class="row">
                            @foreach($products as $item)
                                @include('site.items.cart_product', ['product' => $item])
                            @endforeach
                        </div>
                    </div>
                {{$products->links()}}
                <!--
                    <div class="pd-middle space-v1">
                        <ul class="pagination">
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#"><i class="ion-ios-arrow-forward"></i></a></li>
                        </ul>
                        <div class="pd-sort">
                            <div class="filter-sort">
                                <div class="dropdown">
                                    <button class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        <span class="dropdown-label">Default sorting</span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="manual">Featured</a></li>
                                        <li><a href="best-selling">Best Selling</a></li>
                                        <li><a href="title-ascending">Alphabetically, A-Z</a></li>
                                        <li><a href="title-descending">Alphabetically, A-Z</a></li>
                                        <li><a href="price-descending">Price, high to low</a></li>
                                        <li><a href="price-ascending">Price, low to high</a></li>
                                        <li><a href="created-ascending">Date, old to new</a></li>
                                        <li><a href="created-descending">Date, new to old</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="filter-show">
                                <div class="dropdown">
                                    <button class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        Show
                                        <span class="dropdown-label">12</span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">12</a></li>
                                        <li><a href="#">24</a></li>
                                        <li><a href="#">36</a></li>
                                        <li><a href="#">48</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                -->
                </div>
            </div>
        </div>
    </div>
    <div class="e-feature">
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
    <div class="e-feature">
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
    @endif
@endsection
