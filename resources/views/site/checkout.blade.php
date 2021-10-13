<?php
use Illuminate\Support\Facades\Auth;
?>
@section('title', 'Чекаут')
@extends('layout')
@section('content')
    <div class="main-content space1">
        <div class="container container-240">
            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Cart</li>
            </ul>
            @isset($productInOrder)
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
            <form name="checkout" method="post" class="co" action="{{route('order_store')}}">
                @csrf
                <div class="cart-box-container-ver2">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="co-left bd-7">
                                <div class="cmt-title text-center abs">
                                    <h1 class="page-title v1">Billing details</h1>
                                </div>
                                <div class="row form-customer">
                                    <div class="form-group col-md-6">
                                        <label for="inputfname_2" class=" control-label">First Name <span class="f-red">*</span></label>
                                        @error('firstname')
                                        {{$message}}
                                        @enderror
                                        <input type="text" name="firstname" id="inputfname_2" class="form-control form-account">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputlname" class=" control-label">Last Name <span class="f-red">*</span></label>
                                        @error('lastname')
                                        {{$message}}
                                        @enderror
                                        <input type="text" name="lastname" id="inputlname" class="form-control form-account">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputphone" class=" control-label">Phone <span class="f-red">*</span></label>
                                        @error('phone')
                                        {{$message}}
                                        @enderror
                                        <input type="text" id="inputphone" name="phone" class="form-control form-account">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputemail" class=" control-label">Email Address <span class="f-red">*</span></label>
                                        @error('email')
                                        {{$message}}
                                        @enderror
                                        <input type="text" id="inputemail" @auth value="{{\Illuminate\Support\Facades\Auth::user()->email}}" placeholder="{{\Illuminate\Support\Facades\Auth::user()->email}}" @endauth name="email" class="form-control form-account">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End contact-form -->
                        <div class="col-md-4">
                            <div class="cart-total bd-7">
                                <div class="cmt-title text-center abs">
                                    <h1 class="page-title v3">Your order</h1>
                                </div>
                                <div class="table-responsive">
                                    <div class="co-pd">
                                        <p class="co-title">
                                            Product<span>Total</span>
                                        </p>
                                        <ul class="co-pd-list">


                                            @foreach($productInOrder as $product)
                                                <li class="clearfix">
                                                <div class="co-name">
                                                    {{$product->name}} ({{$orderItems[$product->id]}})
                                                </div>
                                                <div class="co-price">
                                                    {{$orderSum->SumProductInOrder($product->price, $orderItems[$product->id])}}
                                                </div>
                                                </li>
                                                @endforeach


                                        </ul>
                                    </div>
                                    <table class="shop_table">
                                        <tbody>
                                        <tr class="cart-subtotal">
                                            <th>Subtotal</th>
                                            <td>$ 1.215.00</td>
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
                                        <tr class="order-total v2">
                                            <th>Total</th>
                                            <td>$ 1.215.00</td>
                                        </tr>
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
                                        <span>I’ve read and accept the <a href="#" class="term">terms & conditions *</a></span>
                                    </label>
                                </div>
                                <div class="cart-total-bottom v2">
                                    <input type="submit" class="btn-gradient btn-checkout btn-co-order" value="Send">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @endisset
@endsection
