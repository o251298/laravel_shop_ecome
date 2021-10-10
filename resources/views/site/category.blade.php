@extends('layout')
@section('content')
    <div class="container container-240 shop-collection catleft">
        <ul class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active">{{$category->name}}</li>
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
                <div class="filter filter-group">
                    <h1 class="widget-blog-title">Product filter</h1>
                    <div class="filter-price filter-inside">
                        <h3>Price</h3>
                        <div class="filter-content">
                            <div class="price-range-holder">
                                <input type="text" class="price-slider" value="">
                            </div>
                            <span class="min-max">
                                    Price: $25 — $258
                                </span>
                            <a href="#" class="btn-filter e-gradient">Filter</a>
                        </div>
                    </div>
                    <div class="filter-brand filter-inside">
                        <h3>Brands</h3>
                        <ul class="e-filter brand-filter">
                            <li><a href="#">Apple <span class="number">(80)</span></a></li>
                            <li class="active-filter"><a href="#">Samsung <span class="number">(80)</span></a></li>
                            <li><a href="#">LG <span class="number">(80)</span></a></li>
                            <li><a href="#">Blackberry <span class="number">(80)</span></a></li>
                            <li><a href="#">Oppo <span class="number">(80)</span></a></li>
                            <li><a href="#">Panasonic <span class="number">(80)</span></a></li>
                        </ul>
                        <a href="#" class="btn-showmore">Show more +</a>
                    </div>
                    <div class="filter-color filter-brand filter-inside">
                        <h3>Color</h3>
                        <ul class="e-filter brand-filter">
                            <li><a href="#">Black <span class="number">(80)</span></a></li>
                            <li><a href="#">Black Leather <span class="number">(80)</span></a></li>
                            <li class="active-filter"><a href="#">Black with Red <span class="number">(80)</span></a></li>
                            <li><a href="#">Gold <span class="number">(80)</span></a></li>
                            <li><a href="#">Spacegrey  <span class="number">(80)</span></a></li>
                        </ul>
                        <a href="#" class="btn-showmore">Show more +</a>
                    </div>
                </div>
                <div class="filter filter-product e-category">
                    <h1 class="widget-blog-title">Top Products</h1>
                    <div class="owl-carousel owl-theme js-owl-post">
                        <div class="item">
                            <div class="cate-item">
                                <div class="product-img">
                                    <a href="#"><img src="img/product/phone4.jpg" alt="" class="img-reponsive"></a>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-title"><a href="#">Epson Home Cinema  </a></h3>
                                    <div class="product-price v2"><span>$780.00</span></div>
                                </div>
                            </div>
                            <div class="cate-item">
                                <div class="product-img">
                                    <a href="#"><img src="img/product/sound.jpg" alt="" class="img-reponsive"></a>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-title"><a href="#">Epson Home Cinema  </a></h3>
                                    <div class="product-price v2"><span>$780.00</span></div>
                                </div>
                            </div>
                            <div class="cate-item">
                                <div class="product-img">
                                    <a href="#"><img src="img/product/ring.jpg" alt="" class="img-reponsive"></a>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-title"><a href="#">Epson Home Cinema </a></h3>
                                    <div class="product-price v2"><span>$780.00</span></div>
                                </div>
                            </div>
                            <div class="cate-item">
                                <div class="product-img">
                                    <a href="#"><img src="img/product/macbookair.jpg" alt="" class="img-reponsive"></a>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-title"><a href="#">Epson Home Cinema </a></h3>
                                    <div class="product-price v2"><span>$780.00</span></div>
                                </div>
                            </div>
                            <div class="cate-item">
                                <div class="product-img">
                                    <a href="#"><img src="img/product/phone3.jpg" alt="" class="img-reponsive"></a>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-title"><a href="#">Epson Home Cinema </a></h3>
                                    <div class="product-price v2"><span>$780.00</span></div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="cate-item">
                                <div class="product-img">
                                    <a href="#"><img src="img/product/phone4.jpg" alt="" class="img-reponsive"></a>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-title"><a href="#">Epson Home Cinema  </a></h3>
                                    <div class="product-price v2"><span>$780.00</span></div>
                                </div>
                            </div>
                            <div class="cate-item">
                                <div class="product-img">
                                    <a href="#"><img src="img/product/sound.jpg" alt="" class="img-reponsive"></a>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-title"><a href="#">Epson Home Cinema  </a></h3>
                                    <div class="product-price v2"><span>$780.00</span></div>
                                </div>
                            </div>
                            <div class="cate-item">
                                <div class="product-img">
                                    <a href="#"><img src="img/product/ring.jpg" alt="" class="img-reponsive"></a>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-title"><a href="#">Epson Home Cinema </a></h3>
                                    <div class="product-price v2"><span>$780.00</span></div>
                                </div>
                            </div>
                            <div class="cate-item">
                                <div class="product-img">
                                    <a href="#"><img src="img/product/macbookair.jpg" alt="" class="img-reponsive"></a>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-title"><a href="#">Epson Home Cinema </a></h3>
                                    <div class="product-price v2"><span>$780.00</span></div>
                                </div>
                            </div>
                            <div class="cate-item">
                                <div class="product-img">
                                    <a href="#"><img src="img/product/phone3.jpg" alt="" class="img-reponsive"></a>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-title"><a href="#">Epson Home Cinema </a></h3>
                                    <div class="product-price v2"><span>$780.00</span></div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="cate-item">
                                <div class="product-img">
                                    <a href="#"><img src="img/product/phone4.jpg" alt="" class="img-reponsive"></a>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-title"><a href="#">Epson Home Cinema  </a></h3>
                                    <div class="product-price v2"><span>$780.00</span></div>
                                </div>
                            </div>
                            <div class="cate-item">
                                <div class="product-img">
                                    <a href="#"><img src="img/product/sound.jpg" alt="" class="img-reponsive"></a>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-title"><a href="#">Epson Home Cinema  </a></h3>
                                    <div class="product-price v2"><span>$780.00</span></div>
                                </div>
                            </div>
                            <div class="cate-item">
                                <div class="product-img">
                                    <a href="#"><img src="img/product/ring.jpg" alt="" class="img-reponsive"></a>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-title"><a href="#">Epson Home Cinema </a></h3>
                                    <div class="product-price v2"><span>$780.00</span></div>
                                </div>
                            </div>
                            <div class="cate-item">
                                <div class="product-img">
                                    <a href="#"><img src="img/product/macbookair.jpg" alt="" class="img-reponsive"></a>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-title"><a href="#">Epson Home Cinema </a></h3>
                                    <div class="product-price v2"><span>$780.00</span></div>
                                </div>
                            </div>
                            <div class="cate-item">
                                <div class="product-img">
                                    <a href="#"><img src="img/product/phone3.jpg" alt="" class="img-reponsive"></a>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-title"><a href="#">Epson Home Cinema </a></h3>
                                    <div class="product-price v2"><span>$780.00</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner">
                    <a class="image-bd hover-images" href=""><img src="img/o-banner3.jpg" alt="" class="img-reponsive"></a>
                </div>
            </div>

            <div class="col-md-9 col-sm-12 col-xs-12 collection-list">
                <div class="e-product">
                    <div class="pd-banner">
                        <a href="#" class="image-bd effect_img2"><img src="img/o-banner2.jpg" alt="" class="img-reponsive"></a>
                    </div>
                    <div class="section-cate">
                        <div class="owl-carousel owl-theme owl-cate js-owl-cate2">
                            <div class="item item-pd">
                                <div class="product-img">
                                    <a href="#"><img src="img/product/pd1.jpg" alt="" class="img-reponsive"></a>
                                </div>
                                <h3>Unlocked Cell Phones</h3>
                            </div>

                            <div class="item item-pd">
                                <div class="product-img">
                                    <a href="#"><img src="img/product/samsung3.jpg" alt="" class="img-reponsive"></a>
                                </div>
                                <h3>Carrier Phones</h3>
                            </div>

                            <div class="item item-pd">
                                <div class="product-img">
                                    <a href="#"><img src="img/product/pd3.jpg" alt="" class="img-reponsive"></a>
                                </div>
                                <h3>Bluetooth Headsets</h3>
                            </div>

                            <div class="item item-pd">
                                <div class="product-img">
                                    <a href="#"><img src="img/product/phonecase.jpg" alt="" class="img-reponsive"></a>
                                </div>
                                <h3>Premium Case</h3>
                            </div>

                            <div class="item item-pd">
                                <div class="product-img">
                                    <a href="#"><img src="img/product/samsung2.jpg" alt="" class="img-reponsive"></a>
                                </div>
                                <h3>Unlocked Cell Phones</h3>
                            </div>

                            <div class="item item-pd">
                                <div class="product-img">
                                    <a href="#"><img src="img/product/samsung.jpg" alt="" class="img-reponsive"></a>
                                </div>
                                <h3>Unlocked Cell Phones</h3>
                            </div>

                            <div class="item item-pd">
                                <div class="product-img">
                                    <a href="#"><img src="img/product/samsung3.jpg" alt="" class="img-reponsive"></a>
                                </div>
                                <h3>Unlocked Cell Phones</h3>
                            </div>

                            <div class="item item-pd">
                                <div class="product-img">
                                    <a href="#"><img src="img/product/samsung2.jpg" alt="" class="img-reponsive"></a>
                                </div>
                                <h3>Unlocked Cell Phones</h3>
                            </div>


                        </div>
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
                        <h1 class="title v2">Cell Phones & Accessories</h1>
                        <div class="show-element"><span>Showing {{count($category->products)}} of 20 results</span></div>
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
                        <div class="row">
                            @php $products = $category->products()->paginate(9);@endphp
                            @foreach($products as $product)
                            @include('site.items.cart_product', ['product' => $product, 'category_name' => $category->name])
                            @endforeach
                            {{$products->links()}}
                        </div>
                    </div>
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
    <!--
    <div class="e-category">
        <div class="container container-240">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h1 class="cate-title">Featured Products</h1>
                    <div class="cate-item">
                        <div class="product-img">
                            <a href="#"><img src="img/product/usb.jpg" alt="" class="img-reponsive"></a>
                        </div>
                        <div class="product-info">
                            <h3 class="product-title"><a href="#">Epson Home Cinema 5040UB </a></h3>
                            <div class="product-price v2"><span>$780.00</span></div>
                        </div>
                    </div>

                    <div class="cate-item">
                        <div class="product-img">
                            <a href="#"><img src="img/product/macbook.jpg" alt="" class="img-reponsive"></a>
                        </div>
                        <div class="product-info">
                            <h3 class="product-title"><a href="#">Epson Home Cinema 5040UB </a></h3>
                            <div class="product-price v2"><span>$780.00</span></div>
                        </div>
                    </div>

                    <div class="cate-item">
                        <div class="product-img">
                            <a href="#"><img src="img/product/flycam.jpg" alt="" class="img-reponsive"></a>
                        </div>
                        <div class="product-info">
                            <h3 class="product-title"><a href="#">Epson Home Cinema 5040UB </a></h3>
                            <div class="product-price v2"><span>$780.00</span></div>
                        </div>
                    </div>

                </div>

                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h1 class="cate-title">Top Rated Products</h1>
                    <div class="cate-item">
                        <div class="product-img">
                            <a href="#"><img src="img/product/samsung.jpg" alt="" class="img-reponsive"></a>
                        </div>
                        <div class="product-info">
                            <h3 class="product-title"><a href="#">Epson Home Cinema 5040UB </a></h3>
                            <div class="product-price v2"><span>$780.00</span></div>
                        </div>
                    </div>

                    <div class="cate-item">
                        <div class="product-img">
                            <a href="#"><img src="img/product/headphone2.jpg" alt="" class="img-reponsive"></a>
                        </div>
                        <div class="product-info">
                            <h3 class="product-title"><a href="#">Epson Home Cinema 5040UB </a></h3>
                            <div class="product-price v2"><span>$780.00</span></div>
                        </div>
                    </div>

                    <div class="cate-item">
                        <div class="product-img">
                            <a href="#"><img src="img/product/anker.jpg" alt="" class="img-reponsive"></a>
                        </div>
                        <div class="product-info">
                            <h3 class="product-title"><a href="#">Epson Home Cinema 5040UB </a></h3>
                            <div class="product-price v2"><span>$780.00</span></div>
                        </div>
                    </div>

                </div>

                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h1 class="cate-title">Top Selling Products</h1>
                    <div class="cate-item">
                        <div class="product-img">
                            <a href="#"><img src="img/product/headphone.jpg" alt="" class="img-reponsive"></a>
                        </div>
                        <div class="product-info">
                            <h3 class="product-title"><a href="#">Epson Home Cinema 5040UB </a></h3>
                            <div class="product-price v2"><span>$780.00</span></div>
                        </div>
                    </div>

                    <div class="cate-item">
                        <div class="product-img">
                            <a href="#"><img src="img/product/samsung2.jpg" alt="" class="img-reponsive"></a>
                        </div>
                        <div class="product-info">
                            <h3 class="product-title"><a href="#">Epson Home Cinema 5040UB </a></h3>
                            <div class="product-price v2"><span>$780.00</span></div>
                        </div>
                    </div>

                    <div class="cate-item">
                        <div class="product-img">
                            <a href="#"><img src="img/product/sound.jpg" alt="" class="img-reponsive"></a>
                        </div>
                        <div class="product-info">
                            <h3 class="product-title"><a href="#">Epson Home Cinema 5040UB </a></h3>
                            <div class="product-price v2"><span>$780.00</span></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="feature">
        <div class="container container-240">
            <div class="feature-inside">
                <div class="feature-block text-center">
                    <div class="feature-block-img"><img src="img/feature/truck.png" alt="" class="img-reponsive"></div>
                    <div class="feature-info">
                        <h3>Worldwide Delivery</h3>
                        <p>With sites in 5 languages, we ship to over 200 countries & regions.</p>
                    </div>
                </div>

                <div class="feature-block text-center">
                    <div class="feature-block-img"><img src="img/feature/credit-card.png" alt="" class="img-reponsive"></div>
                    <div class="feature-info">
                        <h3>Safe Payment</h3>
                        <p>Pay with the world’s most popular and secure payment methods.</p>
                    </div>
                </div>

                <div class="feature-block text-center">
                    <div class="feature-block-img"><img src="img/feature/safety.png" alt="" class="img-reponsive"></div>
                    <div class="feature-info">
                        <h3>Shop with Confidence</h3>
                        <p>Our Buyer Protection covers your purchase from click to delivery.</p>
                    </div>
                </div>

                <div class="feature-block text-center">
                    <div class="feature-block-img"><img src="img/feature/telephone.png" alt="" class="img-reponsive"></div>
                    <div class="feature-info">
                        <h3>24/7 Help Center</h3>
                        <p>Round-the-clock assistance for a smooth shopping experience.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
-->
@endsection
