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
                        <div class="blog-comment-top">
                            <div class="blog-comment-item">
                                <div class="cmt-img">
                                    <img src="img/blog/author1.jpg" alt="">
                                </div>
                                <div class="cmt-content">
                                    <div class="wrp-name"><span class="name">{{$user->name}}</span></div>
                                    <ul>
                                        <li><strong>Заказы:</strong> {{$user->orders->count()}}</li>
                                        <li><strong>Ваша почта:</strong><i> {{$user->email}}</i></li>
                                        <li><strong>Дата регистрации:</strong> <i> {{$user->created_at}}</i></li>
                                    </ul>
                                    <a href="#" class="btn-author">Изменить профиль</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-comment">
                        <div class="blog-comment-top">
                            <div class="blog-comment-item">
                                <div class="cmt-img">
                                    <img src="img/blog/author1.jpg" alt="">
                                </div>
                                <div class="cmt-content">
                                    <div class="wrp-name"><span class="name">Заказы</span></div>
                                    @if($user->orders->count() > 0)
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Статус</th>
                                                <th scope="col">Ваше имя</th>
                                                <th scope="col">Ваш телефон</th>
                                                <th scope="col">Дата создания</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($user->orders as $order)
                                            <tr>
                                                <th scope="row">{{$order->id}}</th>
                                                <td>{{$order->status_string}}</td>
                                                <td>{{$order->name}}</td>
                                                <td>{{$order->phone}}</td>
                                                <td>{{$order->created_at}}</td>
                                            </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    @else

                                        У Вас нету заказов
                                        <br>
                                        @if(($message) && ($user->fio == null) && ($user->number == null))
                                            <div class="alert alert-info" role="alert">
                                                Мы нашли заказы сделанные на Ваш email. Уточните это Ваши данные?
                                                <ul>
                                                    <li>Email: <strong>{{$message->email}}</strong></li>
                                                    <li>Имя: <strong>{{$message->name}}</strong></li>
                                                </ul>
                                                <a href="{{route('user_import')}}" class="btn btn-light">Да</a>
                                            </div>
                                        @endif
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                                <input type="email" value="" placeholder="Enter your emaill adress" name="EMAIL" id="mail2" class="newsletter-input form-control">
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
