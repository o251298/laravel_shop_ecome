@extends('layout')
@section('content')
    <div class="container container-240">
        <div class="product-bundle product-aff">
            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">{{$product->category->name}}</li>
                <li class="active">{{$product->name}}</li>
            </ul>
            <div class="row shop-colect r-sidebar">
                <div class="col-md-3 col-sm-3 col-xs-12 col-left collection-sidebar v2" id="filter-sidebar">
                    <div class="banner">
                        <a class="image-bd hover-images" href=""><img src="img/s-banner.jpg" alt="" class="img-reponsive"></a>
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
                </div>
                <div class="col-md-9 col-sm-12 col-xs-12 collection-list single-product-detail v2">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-8">
                            <div class="flex product-img-slide">
                                <div class="product-images">
                                    <div class="main-img js-product-slider">
                                        <a href="#" class="hover-images effect"><img src="{{$product->image}}" alt="photo" class="img-reponsive"></a>
                                    </div>
                                </div>
                                <div class="multiple-img-list-ver2 js-click-product">
                                    <div class="product-col">
                                        <div class="img active">
                                            <img src="{{$product->image}}" alt="photo" class="img-reponsive">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="single-flex">
                                <div class="single-product-info product-info product-grid-v2 s-50">
                                    <p class="product-cate">Audio Speakers</p>
                                    <div class="product-rating">
                                        <span class="star star-5"></span>
                                        <span class="star star-4"></span>
                                        <span class="star star-3"></span>
                                        <span class="star star-2"></span>
                                        <span class="star star-1"></span>
                                        <div class="number-rating">( 896 reviews )</div>
                                    </div>
                                    <h3 class="product-title"><a href="#">{{$product->name}}</a></h3>
                                    <div class="product-price">
                                        <span>{{$product->price}}</span>
                                    </div>
                                    <div class="availability">
                                        <p class="product-inventory">
                                            <label>Availability : </label><span> In stock</span></p>
                                    </div>
                                    <div class="product-sku">
                                        <label>SKU :</label><span> {{$product->code}}</span>
                                    </div>
                                    <div class="short-desc">
                                        <p class="product-desc">
                                            {{$product->description}}
                                        </p>
{{--                                        <ul class="desc-list">--}}
{{--                                            <li>Connects directly to Bluetooth</li>--}}
{{--                                            <li>Battery Indicator light</li>--}}
{{--                                            <li>DPI Selection:2600/2000/1600/1200/800</li>--}}
{{--                                            <li>Computers running Windows</li>--}}
{{--                                        </ul>--}}
                                    </div>
                                    <div class="color-group">
                                        <label>Color :</label>
                                        <a href="#" class="circle black"></a>
                                        <a href="#" class="circle red"></a>
                                        <a href="#" class="circle gray"></a>
                                    </div>
                                    <div class="single-product-button-group">
                                        <div class="e-btn cart-qtt btn-gradient">
                                            <div class="e-quantity">
                                                <input type="number" step="1" min="1" max="999" name="quantity" value="1" title="Qty" class="qty input-text js-number" size="4">
                                                <div class="tc pa">
                                                    <a class="js-plus quantity-right-plus"><i class="fa fa-caret-up"></i></a>
                                                    <a class="js-minus quantity-left-minus"><i class="fa fa-caret-down"></i></a>
                                                </div>
                                            </div>
                                            <a href="#" class="btn-add-cart">Add to cart <span class="icon-bg icon-cart v2"></span></a>
                                        </div>
                                        <a href="#" class="e-btn btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                        <a href="#" class="e-btn btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                    </div>
{{--                                    <div class="product-tags">--}}
{{--                                        <label>Tags :</label>--}}
{{--                                        <a href="#">Fast,</a>--}}
{{--                                        <a href="#">Gaming,</a>--}}
{{--                                        <a href="#">Strong</a>--}}
{{--                                    </div>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bestseller">
            <div class="ecome-heading style5v3 spc5v3">
                <h1>Related products</h1>
                <a href="#" class="btn-show">Shop more<i class="ion-ios-arrow-forward"></i></a>
            </div>
            <div class="owl-carousel owl-theme owl-cate v2 js-owl-cate">
                <div class="product-item">
                    <div class="pd-bd product-inner">
                        <div class="product-img">
                            <a href="#"><img src="img/product/sound.jpg" alt="" class="img-reponsive"></a>
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

                <div class="product-item">
                    <div class="pd-bd product-inner">
                        <div class="product-img">
                            <a href="#"><img src="img/product/samsung3.jpg" alt="" class="img-reponsive"></a>
                        </div>
                        <div class="product-info">
                            <div class="color-group">
                            </div>
                            <div class="element-list element-list-left">
                            </div>
                            <div class="element-list element-list-middle">
                                <p class="product-cate">Cell Phones & Accessories</p>
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

                <div class="product-item">
                    <div class="pd-bd product-inner">
                        <div class="product-img">
                            <a href="#"><img src="img/product/macbook2.jpg" alt="" class="img-reponsive"></a>
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

                <div class="product-item">
                    <div class="pd-bd product-inner">
                        <div class="product-img">
                            <a href="#"><img src="img/product/macbook2.jpg" alt="" class="img-reponsive"></a>
                        </div>
                        <div class="product-info">
                            <div class="color-group">
                            </div>
                            <div class="element-list element-list-left">
                            </div>
                            <div class="element-list element-list-middle">
                                <p class="product-cate">Computers &amp; Accessories</p>
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
                                <p class="product-cate">Computers &amp; Accessories</p>
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

                <div class="product-item">
                    <div class="pd-bd product-inner">
                        <div class="product-img">
                            <a href="#"><img src="img/product/sound.jpg" alt="" class="img-reponsive"></a>
                        </div>
                        <div class="product-info">
                            <div class="color-group">
                            </div>
                            <div class="element-list element-list-left">
                            </div>
                            <div class="element-list element-list-middle">
                                <p class="product-cate">Computers &amp; Accessories</p>
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

                <div class="product-item">
                    <div class="pd-bd product-inner">
                        <div class="product-img">
                            <a href="#"><img src="img/product/macbook2.jpg" alt="" class="img-reponsive"></a>
                        </div>
                        <div class="product-info">
                            <div class="color-group">
                            </div>
                            <div class="element-list element-list-left">
                            </div>
                            <div class="element-list element-list-middle">
                                <p class="product-cate">Computers &amp; Accessories</p>
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
                <div class="product-item">
                    <div class="pd-bd product-inner">
                        <div class="product-img">
                            <a href="#"><img src="img/product/sound.jpg" alt="" class="img-reponsive"></a>
                        </div>
                        <div class="product-info">
                            <div class="color-group">
                            </div>
                            <div class="element-list element-list-left">
                            </div>
                            <div class="element-list element-list-middle">
                                <p class="product-cate">Computers &amp; Accessories</p>
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
                                <p class="product-cate">Computers &amp; Accessories</p>
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
        <div class="e-qa">
            <div class="cmt-title v2 text-center abs">
                <h1 class="oval-bd btn-gradient">Customer questions & answers</h1></div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="qa-element">
                        <div class="qa-quest">
                            <span class="qa-icon">Q</span>
                            <h3>Does the sonos one pair up with a sonos play1 as a stereo pair ?</h3>
                        </div>
                        <div class="qa-answer">
                            <span class="qa-icon">A</span>
                            <p>As long as the players are grouped in a configuration to your liking, you can ask Alexa on the Sonos One or on an echo device to start music and playback will begin across the Sonos grouping. </p>
                        </div>
                    </div>
                    <div class="qa-element">
                        <div class="qa-quest">
                            <span class="qa-icon">Q</span>
                            <h3>It uses a dictionary of over 200 Latin words ?</h3>
                        </div>
                        <div class="qa-answer">
                            <span class="qa-icon">A</span>
                            <p>Latin words, combined with a handful of model sentence structures,to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humou</p>
                        </div>
                    </div>
                    <div class="qa-element">
                        <div class="qa-quest">
                            <span class="qa-icon">Q</span>
                            <h3>Does the sonos one pair up with a sonos play1 as a stereo pair ?</h3>
                        </div>
                        <div class="qa-answer">
                            <span class="qa-icon">A</span>
                            <p>As long as the players are grouped in a configuration to your liking, you can ask Alexa on the Sonos One or on an echo device to start music and playback will begin across the Sonos grouping. </p>
                        </div>
                    </div>
                    <div class="qa-element">
                        <div class="qa-quest">
                            <span class="qa-icon">Q</span>
                            <h3>It uses a dictionary of over 200 Latin words ?</h3>
                        </div>
                        <div class="qa-answer">
                            <span class="qa-icon">A</span>
                            <p>Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose </p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="qa-element">
                        <div class="qa-quest">
                            <span class="qa-icon">Q</span>
                            <h3>Is the quality of the "sonos one" sound the same as ?</h3>
                        </div>
                        <div class="qa-answer">
                            <span class="qa-icon">A</span>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look</p>
                        </div>
                    </div>
                    <div class="qa-element">
                        <div class="qa-quest">
                            <span class="qa-icon">Q</span>
                            <h3>Lorem Ipsum is simply dummy text of the printing and typesetting?</h3>
                        </div>
                        <div class="qa-answer">
                            <span class="qa-icon">A</span>
                            <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                        </div>
                    </div>
                    <div class="qa-element">
                        <div class="qa-quest">
                            <span class="qa-icon">Q</span>
                            <h3>Is the quality of the "sonos one" sound the same as ?</h3>
                        </div>
                        <div class="qa-answer">
                            <span class="qa-icon">A</span>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look</p>
                        </div>
                    </div>
                    <div class="qa-element">
                        <div class="qa-quest">
                            <span class="qa-icon">Q</span>
                            <h3>Lorem Ipsum is simply dummy text of the printing and typesetting?</h3>
                        </div>
                        <div class="qa-answer">
                            <span class="qa-icon">A</span>
                            <p>Search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#" class="btn-qa">See more answered questions<i class="ion-ios-arrow-down"></i></a>
            <form class="form_newsletter" action="#" method="post">
                <input type="text" value="" placeholder="Have a question about product ? " class="newsletter-input form-control">
                <button id="subscribe2" class="button_mini btn btn-gradient" type="submit">
                    Submit<i class="ion-ios-arrow-forward"></i>
                </button>
            </form>
        </div>
        <div class="bestseller single-space">
            <div class="ecome-heading style5v3 spc5v3">
                <h1>Similar Brand</h1>
                <a href="#" class="btn-show">Shop more<i class="ion-ios-arrow-forward"></i></a>
            </div>
            <div class="owl-carousel owl-theme owl-cate v2 js-owl-cate">
                <div class="product-item">
                    <div class="pd-bd product-inner">
                        <div class="product-img">
                            <a href="#"><img src="img/product/sound.jpg" alt="" class="img-reponsive"></a>
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
                <div class="product-item">
                    <div class="pd-bd product-inner">
                        <div class="product-img">
                            <a href="#"><img src="img/product/samsung3.jpg" alt="" class="img-reponsive"></a>
                        </div>
                        <div class="product-info">
                            <div class="color-group">
                            </div>
                            <div class="element-list element-list-left">
                            </div>
                            <div class="element-list element-list-middle">
                                <p class="product-cate">Cell Phones & Accessories</p>
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
                <div class="product-item">
                    <div class="pd-bd product-inner">
                        <div class="product-img">
                            <a href="#"><img src="img/product/macbook2.jpg" alt="" class="img-reponsive"></a>
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
                <div class="product-item">
                    <div class="pd-bd product-inner">
                        <div class="product-img">
                            <a href="#"><img src="img/product/macbook2.jpg" alt="" class="img-reponsive"></a>
                        </div>
                        <div class="product-info">
                            <div class="color-group">
                            </div>
                            <div class="element-list element-list-left">
                            </div>
                            <div class="element-list element-list-middle">
                                <p class="product-cate">Computers &amp; Accessories</p>
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
                                <p class="product-cate">Computers &amp; Accessories</p>
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
                <div class="product-item">
                    <div class="pd-bd product-inner">
                        <div class="product-img">
                            <a href="#"><img src="img/product/sound.jpg" alt="" class="img-reponsive"></a>
                        </div>
                        <div class="product-info">
                            <div class="color-group">
                            </div>
                            <div class="element-list element-list-left">
                            </div>
                            <div class="element-list element-list-middle">
                                <p class="product-cate">Computers &amp; Accessories</p>
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
                <div class="product-item">
                    <div class="pd-bd product-inner">
                        <div class="product-img">
                            <a href="#"><img src="img/product/macbook2.jpg" alt="" class="img-reponsive"></a>
                        </div>
                        <div class="product-info">
                            <div class="color-group">
                            </div>
                            <div class="element-list element-list-left">
                            </div>
                            <div class="element-list element-list-middle">
                                <p class="product-cate">Computers &amp; Accessories</p>
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
                <div class="product-item">
                    <div class="pd-bd product-inner">
                        <div class="product-img">
                            <a href="#"><img src="img/product/sound.jpg" alt="" class="img-reponsive"></a>
                        </div>
                        <div class="product-info">
                            <div class="color-group">
                            </div>
                            <div class="element-list element-list-left">
                            </div>
                            <div class="element-list element-list-middle">
                                <p class="product-cate">Computers &amp; Accessories</p>
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
                                <p class="product-cate">Computers &amp; Accessories</p>
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
    </div>
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
@endsection
