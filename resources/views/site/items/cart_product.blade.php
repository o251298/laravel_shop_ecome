<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 product-item">
    <div class="pd-bd product-inner">
        <div class="product-img">
            @if($product->isRecommend())
                <span class="h-ribbon h-pos e-green">РАСПРОДАЖА</span>
            @endif

            @if($product->isNew())
                <span class="h-ribbon h-pos e-skyblue">НОВИНКИ</span>
            @endif

            @if($product->isHit())
                <span class="h-ribbon h-pos e-red">ХИТЫ</span>
            @endif
                <a href="{{route('view', $product->id)}}"><img src="{{$product->getImage()}}" alt="" class="img-reponsive"></a>

        </div>
        <div class="product-info">
            <div class="color-group">
            </div>
            <div class="element-list element-list-left">
                <ul class="desc-list">
                    <li>Connects directly to Bluetooth</li>
                    <li>Battery Indicator light</li>
                    <li>DPI Selection:2600/2000/1600/1200/800</li>
                    <li>Computers running Windows</li>
                </ul>
            </div>
            <div class="element-list element-list-middle">
                <div class="product-rating bd-rating">
                    <span class="star star-5"></span>
                    <span class="star star-4"></span>
                    <span class="star star-3"></span>
                    <span class="star star-2"></span>
                    <span class="star star-1"></span>
                    <div class="number-rating">( 896 reviews )</div>
                </div>
{{--                <p class="product-cate">{{$category_name}}</p>--}}
                <h3 class="product-title"><a href="{{route('view', $product->id)}}">{{$product->name}}</a></h3>
                @if(!$product->isAvailable())
                <p class="product-title-text" style="color: red">Нет в наличии</p>
                @endif
                <div class="product-bottom">
                    <div class="product-price"><span>{{$product->price}} грн</span></div>
                        <a href="" class="btn-icon btn-view">
                        <span class="icon-bg icon-view"></span>
                    </a>
                </div>
                <div class="product-bottom-group">
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
            <div class="product-button-group">
                {{--                <a href="{{route('addProductToCart', $product->id)}}" class="btn-icon">--}}
                @if($product->isAvailable())
                <button class="btn-icon add_to_cart"  style="background: none;" data-id="{{$product->id}}">
                    <span class="icon-bg icon-cart"></span>
                </button>
                @endif
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
