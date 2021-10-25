@section('title', 'Корзина')
@extends('layout')
@section('content')
    <div class="container container-240">
        @isset($productInOrder)
        <div class="checkout">
            <ul class="breadcrumb v3">
                <li><a href="{{route('shop')}}">Home</a></li>
                <li class="active">Cart</li>
            </ul>
            <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <div class="shopping-cart bd-7">
                        <div class="cmt-title text-center abs">
                            <h1 class="page-title v2">Cart</h1>
                        </div>
                        <div class="table-responsive">
                            <table class="table cart-table">
                                <tbody>
                                @foreach($productInOrder as $item)
                                <tr class="item_cart">
                                    <td class="product-name flex align-center">
                                        <a href="" class="btn-del"><i class="ion-ios-close-empty"></i></a>
                                        <div class="product-img">
                                            <img src="{{$item->image}}" alt="Futurelife">
                                        </div>
                                        <div class="product-info">
                                            <a href="{{route('view', $item->id)}}" title="">{{$item->name}}</a>
                                        </div>
                                    </td>
                                    <td class="bcart-quantity single-product-detail">
                                        <div class="single-product-info">
                                            <div class="e-quantity">
                                                <input type="number" step="1" min="1" max="999" name="quantity" value="{{$orderItems[$item->id]}}" title="Qty" class="qty input-text js-number" size="4">
                                                <div class="tc pa">
                                                    <a class="js-plus quantity-right-plus"><i class="fa fa-caret-up"></i></a>
                                                    <a class="js-minus quantity-left-minus"><i class="fa fa-caret-down"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="total-price">
                                        <p class="price">{{$orderSum->SumProductInOrder($item->price, $orderItems[$item->id])}} грн</p>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <a href="{{route('clear_cart')}}">Очистить</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="cart-total bd-7">
                        <div class="cmt-title text-center abs">
                            <h1 class="page-title v3">Подсчет</h1>
                        </div>
                        <div class="table-responsive">
                            <table class="shop_table">
                                <tbody>
                                <tr class="cart-subtotal">
                                    <th>Текущая сумма</th>
                                    <th>{{$subSum}}</th>
                                </tr>
                                <tr class="cart-shipping">
                                    <th>Купон</th>
                                    <td class="td">
                                        <ul class="shipping">
                                            <li>
                                                <input type="radio" name="gender" value="Flat" id="radio1" checked="checked">
                                                <label for="radio1">Flat rate : $ 12</label>
                                            </li>
                                            <li>
                                                <input type="radio" name="gender" value="Free" id="radio2">
                                                <label for="radio2">Free Shipping</label>
                                            </li>
                                        </ul>
                                        <a href="#" class="calcu">Калькулятор?? возможно сделаю</a>
                                    </td>
                                </tr>
                                <tr class="order-total">
                                    <th>Всего:</th>
                                    <td>{{$subSum}}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="cart-total-bottom">
                            <a href="{{route('checkout')}}" class="btn-gradient btn-checkout">Перейти в чекаут</a>
                        </div>
                        <div class="sign-in-divider">
                            <span>or</span>
                        </div>
                        <div class="cart-total-bottom pp-checkout">
                            <a href="#"><img src="img/checkoutpp.jpg" alt="" class="img-responsive"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endisset
        @if($productInOrder == null)
            <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <div class="shopping-cart bd-7">
                        <div class="table-responsive">
                            <h3 style="margin-top: 50px; margin-bottom: 50px; margin-left: 10px">Ваша корзина пуста</h3>
                        </div>
                    </div>
                </div>
            </div>
            @endif
    </div>
@endsection
