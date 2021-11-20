<?php
use Illuminate\Support\Facades\Auth;
?>
@section('title', 'Чекаут')
@extends('layout')
@section('content')
    <div class="main-content space1">
        <div class="container container-240">
            @isset($productInOrder)
            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Cart</li>
            </ul>

{{--            <div class="co-coupon">--}}
{{--                <div class="row">--}}
{{--                    <div class="checkout-login col-xs-12 col-sm-6">--}}
{{--                        <div class="box-toggle box-login">--}}
{{--                            <img src="img/co-login.png" alt="">Returning customer?--}}
{{--                            <a class="show-login js-showlogin"> Click here to login</a>--}}
{{--                        </div>--}}
{{--                        <form method="post" class="myaccount form-customer form-login js-openlogin">--}}
{{--                            <p>If you have shopped with us before, please enter your details in the boxes below. If you are a new customer, please proceed to the Billing & Shipping section.</p>--}}
{{--                            <div class="form-group ">--}}
{{--                                <label for="exampleInputEmail1">Username or email address *</label>--}}
{{--                                <input type="email" class="form-control form-account form-account" id="exampleInputEmail1">--}}
{{--                            </div>--}}
{{--                            <div class="form-group ">--}}
{{--                                <label for="exampleInputPassword1">Password *</label>--}}
{{--                                <input type="password" class="form-control form-account form-account" id="exampleInputPassword1">--}}
{{--                            </div>--}}
{{--                            <div class="form-check ">--}}
{{--                                <button type="submit" class="btn btn-submit btn-gradient">Login</button>--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                    <div class=" col-xs-12 col-sm-6 checkout-cp ">--}}
{{--                        <div class="box-toggle box-coupon ">--}}
{{--                            <img src="img/co-coupon.png" alt="">Have a coupon?--}}
{{--                            <a class="show-login js-showcp"> Click here to enter your code</a>--}}
{{--                        </div>--}}
{{--                        <form class="form_coupon form-cp js-opencp" action="#" method="post">--}}
{{--                            <input type="email" value="" placeholder="Coupon code" name="EMAIL" id="mail" class="newsletter-input form-control">--}}
{{--                            <div class="input-icon">--}}
{{--                                <img src="img/coupon-icon.png" alt="">--}}
{{--                            </div>--}}
{{--                            <button id="subscribe" class="button_mini btn" type="submit">--}}
{{--                                Apply coupon--}}
{{--                            </button>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
            <form name="checkout" method="post" id="form" class="co" action="{{route('order.orderStore')}}">
                @csrf
                <div class="cart-box-container-ver2">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="co-left bd-7">
                                <div class="cmt-title text-center abs">
                                    <h1 class="page-title v1">@lang('checkout.data_delivery.contact_data')</h1>
                                </div>
                                <div class="row form-customer">
                                    <div class="form-group col-md-6">
                                        <label for="inputfname_2" class=" control-label">@lang('checkout.data_delivery.fn')<span class="f-red">*</span></label>
                                        @error('firstname')
                                        {{$message}}
                                        @enderror
                                        <input type="text" name="firstname" id="inputfname_2" class="form-control form-account">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputlname" class=" control-label">@lang('checkout.data_delivery.ln')<span class="f-red">*</span></label>
                                        @error('lastname')
                                        {{$message}}
                                        @enderror
                                        <input type="text" name="lastname" id="inputlname" class="form-control form-account">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputphone" class=" control-label">@lang('checkout.data_delivery.phone')<span class="f-red">*</span></label>
                                        @error('phone')
                                        {{$message}}
                                        @enderror
                                        <input type="text" id="inputphone" name="phone" class="form-control form-account">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputemail" class=" control-label">@lang('checkout.data_delivery.email')<span class="f-red">*</span></label>
                                        @error('email')
                                        {{$message}}
                                        @enderror
                                        <input type="text" id="inputemail" @auth value="{{\Illuminate\Support\Facades\Auth::user()->email}}" placeholder="{{\Illuminate\Support\Facades\Auth::user()->email}}" @endauth name="email" class="form-control form-account">
                                    </div>
                                    <h4>Доставка:</h4>
                                    <div>
                                        <img style="height: 60px" src="https://manufactura.ua/upload/iblock/23c/23c22cc44835b59de045064cf37a1431.jpg" alt="">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="inputphone" class=" control-label">@lang('checkout.data_delivery.city_delivery')<span class="f-red">*</span></label>
                                        <input name="present_city" type="text" autocomplete="off" id="country" class="form-control form-account">
                                    </div>

                                    <div class="form-group col-md-6" id="hidden_delivery_state">
                                        <label for="inputphone" class=" control-label">@lang('checkout.data_delivery.number_delivery_order')<span class="f-red">*</span></label>
                                        <select disabled name="description" id="select" class="form-control form-account" style="height: 53px; border-radius: 40px">

                                        </select>
                                    </div>


                                    <input name="delivery_city" type="hidden" id="delivery_city">


                                </div>
                            </div>
                        </div>
                        <!-- End contact-form -->
                        <div class="col-md-4">
                            <div class="cart-total bd-7">
                                <div class="cmt-title text-center abs">
                                    <h1 class="page-title v3">@lang('checkout.date_order.your_order')</h1>
                                </div>
                                <div class="table-responsive">
                                    <div class="co-pd">
                                        <p class="co-title">
                                            @lang('checkout.date_order.product')<span>@lang('checkout.date_order.total')</span>
                                        </p>
                                        <ul class="co-pd-list">
                                            @foreach($productInOrder as $product)
                                                <li class="clearfix">
                                                <div class="co-name">
                                                    {{$product->name}} ({{$orderItems[$product->id]}})
                                                </div>
                                                <div class="co-price">
                                                    {{$orderSum->SumProductInOrder($product->price, $orderItems[$product->id])}} грн
                                                </div>
                                                </li>
                                                @endforeach
                                        </ul>
                                    </div>
                                    <table class="shop_table">
                                        <tbody>
                                        <tr class="cart-subtotal">
                                            <th>@lang('checkout.date_order.total')</th>
                                            <td>{{$subSum}} грн</td>
                                        </tr>
{{--                                        <tr class="cart-shipping v2">--}}
{{--                                            <th>Shipping</th>--}}
{{--                                            <td class="td">--}}
{{--                                                <ul class="shipping">--}}
{{--                                                    <li>--}}
{{--                                                        <input type="radio" name="gender" value="Flat" id="radio1" checked="checked">--}}
{{--                                                        <label for="radio1">Flat rate : $ 12</label>--}}
{{--                                                    </li>--}}
{{--                                                    <li>--}}
{{--                                                        <input type="radio" name="gender" value="Free" id="radio2">--}}
{{--                                                        <label for="radio2">Free Shipping</label>--}}
{{--                                                    </li>--}}
{{--                                                </ul>--}}
{{--                                            </td>--}}
{{--                                        </tr>--}}
                                        </tbody>
                                    </table>
                                </div>
{{--                                <ul class="payment">--}}
{{--                                    <li>--}}
{{--                                        <input type="radio" name="gender" value="Direct" id="radio3" >--}}
{{--                                        <label for="radio3">Direct bank transfer</label>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <input type="radio" name="gender" value="Check" id="radio4">--}}
{{--                                        <label for="radio4">Check payments</label>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <input type="radio" name="gender" value="Cash" id="radio5">--}}
{{--                                        <label for="radio5">Cash on delivery</label>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <input type="radio" name="gender" value="Paypal" id="radio6">--}}
{{--                                        <label for="radio6">PayPal Express Checkout <a class="co-pp" href=""><img src="img/payment/pp.jpg" alt=""></a></label>--}}

{{--                                    </li>--}}
{{--                                </ul>--}}
                                <div class="form-check">
                                    <label class="form-check-label ver2">
                                        <input type="checkbox" class="form-check-input" name="confirm">
                                        @error('confirm')
                                        {{$message}}
                                        @enderror
                                        <span>@lang('checkout.date_order.conditions')</span>
                                    </label>
                                    <h4>Оплата:</h4>
                                    <a href="https://www.liqpay.ua/uk">
                                        <img src="https://robot.net.ua/upload/medialibrary/ba5/liqpay.png" style="height: 70px" alt="">
                                    </a>
                                </div>
                                <div class="cart-total-bottom v2">
                                    <input type="submit" class="btn-gradient btn-checkout btn-co-order" value="@lang('checkout.date_order.save_order')">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <script src="{{asset("js/delivery.js")}}"></script>
        @endisset

    @if($productInOrder == null)
        <div class="row">
            <div class="col-md-8 col-sm-12 col-xs-12">
                <div class="shopping-cart bd-7">
                    <div class="table-responsive">
                        <h3 style="margin-top: 50px; margin-bottom: 50px; margin-left: 10px">Корзина пустая</h3>
                    </div>
                </div>
            </div>
        </div>
    @endif
    </div>
@endsection
