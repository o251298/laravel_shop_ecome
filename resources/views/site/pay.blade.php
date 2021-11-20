<?php
use Illuminate\Support\Facades\Auth;
?>
@section('title', 'Чекаут')
@extends('layout')
@section('content')
    <div class="main-content space1">
        <div class="container container-240">
            @isset($order)
            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Cart</li>
            </ul>

                <div class="col-md-8">
                    <div class="cart-total bd-7">
                        <div class="cmt-title text-center abs">
                            <h1 class="page-title v3">@lang('checkout.pay.pay')</h1>
                        </div>
                        <div class="table-responsive">
                            <div class="co-pd">
                                <p class="co-title">
                                    Ваше имя: <strong>{{$order->name}}</strong> <br>
                                    Ваш телефон: <strong>{{$order->phone}} </strong><br>
                                    Всего к оплате: <strong style="font-size: 30px">{{$order->total}} грн</strong> <br>
                                    Город: <strong>{{$order->delivery_department->present_city}}</strong> <br>
                                    Адрес отделения: <strong>{{$order->delivery_department->description}}</strong> <br>
                                </p>
                            </div>
                            <form method="POST" action="https://www.liqpay.ua/api/3/checkout" accept-charset="utf-8">
                                <input type="hidden" name="data" value="{{$data}}"/>
                                <input type="hidden" name="signature" value="{{$signature}}"/>
                                <input style="margin-left: 40px" type="image" src="//static.liqpay.ua/buttons/p1ru.radius.png"/>
                            </form>
                        </div>
                    </div>
                </div>

        </div>

        <script src="{{asset("js/delivery.js")}}"></script>
        @endisset
    </div>
@endsection
