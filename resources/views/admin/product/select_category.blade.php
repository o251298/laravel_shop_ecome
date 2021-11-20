@section('title', 'Товары')
@extends('admin.layout')
@section('content')
    <div class="page-wrapper">
        <div class="container-fluid">

            <!-- Title -->
            <div class="row heading-bg">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h5 class="txt-dark">Привязка категории</h5>
                </div>
                <!-- Breadcrumb -->
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="index.html">Dashboard</a></li>
                        <li><a href="#"><span>table</span></a></li>
                        <li class="active"><span>basic table</span></li>
                    </ol>
                </div>
                <!-- /Breadcrumb -->
            </div>
            <!-- /Title -->

            <div class="row">
                <!-- Basic Table -->
                <div class="col-sm-12">
                    <div class="panel panel-default card-view">
                        <div class="panel-heading">
                            @if(session('success'))
                                <div class="alert alert-success alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>{{session('success')}}
                                </div>
                            @endif
                            @if(session('error'))
                                <div class="alert alert-success alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>{{session('error')}}
                                </div>

                            @endif
                            <div class="pull-left">
                                <p>
                                    Привязка категории происходит в несколько шагов:
                                </p>
                                <ul>
                                    <li>1: Фильтрация по категории с прайса</li>
                                    <li>2: Выбор всех товаров и выбор категории с магазина</li>
                                </ul>
                                <p>
                                    После привязки категории, все товары преобретут категорию магазина, а это значит что на сайте появятся категории в которых появились товары.
                                </p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body">
                                <div class="table-wrap mt-40">
                                    <div class="table-responsive">
                                        <table class="table mb-0">
                                            <thead>
                                            <tr>
                                                <th>Категория</th>
                                                <th>Фильтровать</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <form action="">
                                                <tr>
                                                    <td>
                                                        <div class="form-group mt-30 mb-30">
                                                            <select class="form-control" name="category_id_price">
                                                                @foreach($category as $item)
                                                                    <option value="{{$item->offer_id}}" @if(request()->category_id_price == $item->offer_id) ? selected="selected" : disabled @endif>{{$item->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <button type="submit" class="btn btn-success btn-anim"><i class="icon-rocket"></i><span class="btn-text">Фильтрация</span></button>
                                                    </td>
                                                </tr>
                                            </form>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                                @if(count($products) > 0)
                                <hr>
                                <div class="table-wrap mt-40">
                                    <div class="table-responsive">
                                        <h5>Выбор категории магазина: </h5>
                                        @if((request()->category_id_price !== null) && (\App\Models\Category::NameCategoryByOfferId(request()->category_id_price) !== null))
                                        <p>
                                            подсказка: {{\App\Models\Category::NameCategoryByOfferId(request()->category_id_price)}}
                                        </p>
                                        @endif
                                        <form action="{{route('admin.product.change_category')}}" method="post">
                                            @csrf
                                        <table class="table mb-0">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Товар</th>
                                                <th>Код товара</th>
                                                <th>Кол-во товара на складе</th>
                                                <th>Категория товара</th>
                                                <th>Дата привоза на склад</th>
                                                <th>Удалить</th>
                                                <th>Просмотр</th>
                                                <th>
                                                    <input type="checkbox" id="select-all">
                                                </th>
                                            </tr>
                                            </thead>

                                                <div class="form-group mt-30 mb-30">
                                                    <select class="form-control" name="category_id_price">
                                                        @foreach($ec_category as $item)
                                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <button type="submit" class="btn btn-success btn-anim"><i class="icon-rocket"></i><span class="btn-text">Изменить категорию</span></button>
                                                <tbody>
                                                @foreach($products as $item)
                                                    <tr>
                                                        <td>{{$item->id}}</td>
                                                        <td>{{$item->name}}</td>
                                                        <td>{{$item->code}}</td>
                                                        <td>{{$item->count}}</td>
                                                        <td>@if(isset($item->category->name)){{$item->category->name}} @else Категория не установлена @endif</td>
                                                        <td>{{$item->created_at}}</td>
                                                        <td><a href="{{route('admin.product.delete', $item->id)}}"><span class="label label-danger">Удалить</span></a></td>
                                                        <td><a href="{{route('admin.product.show', $item->id)}}"><span class="label label-primary">Просмотр</span> </a></td>
                                                        <td><input type="checkbox" value="{{$item->id}}" name="product_id[]"></td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </form>
                                        </table>
                                        {{$products->links()}}
                                    </div>
                                </div>
                                @else
                                Товаров по данному фильтру ничего нету
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Basic Table -->
            </div>

        </div>

        <!-- Footer -->
        <footer class="footer container-fluid pl-30 pr-30">
            <div class="row">
                <div class="col-sm-12">
                    <p>2017 &copy; Doodle. Pampered by Hencework</p>
                </div>
            </div>
        </footer>
        <!-- /Footer -->

    </div>
@endsection
