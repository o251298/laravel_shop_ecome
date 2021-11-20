@section('title', 'Просмотр | ' . $product->name)
@extends('admin.layout')
@section('content')
    <div class="page-wrapper">
        <div class="container-fluid">

            <!-- Title -->
            <div class="row heading-bg">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h5 class="txt-dark">Просмотр товар</h5>
                </div>
                <!-- Breadcrumb -->
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="{{route('admin')}}">Главная</a></li>
                        <li><a href="{{route('admin.product')}}"><span>Товары</span></a></li>
                        <li class="active"><span>{{$product->name}}</span></li>
                    </ol>
                </div>
                <!-- /Breadcrumb -->
            </div>
            <!-- /Title -->

            <!-- Row -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default card-view">
                        <div class="panel-heading">
                            <div class="pull-left">
                                <p>Вы можете просмотреть или изменить товар</p>
                                @if(session('create'))
                                    <div class="alert alert-success alert-dismissable">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>{{session('create')}}
                                    </div>
                                    {{session('create')}}
                                @endif
                                @if(session('update'))
                                    <div class="alert alert-success alert-dismissable">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>{{session('update')}}
                                    </div>
                                @endif
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body">
                                <div class="form-wrap">
                                    <form method="post" action="{{route('admin.product.update', $product)}}" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            @error('name')
                                            {{$message}}
                                            @enderror
                                            <label class="control-label mb-10 text-left">Название товара</label>
                                            <input type="text" class="form-control" name="name" value="{{$product->name}}">
                                        </div>
                                        <div class="form-group">
                                            @error('code')
                                            {{$message}}
                                            @enderror
                                            <label class="control-label mb-10 text-left" for="example-email">Код товара</label>
                                            <input type="text" id="example-email" name="code" value="{{$product->code}}" class="form-control" placeholder="Email">
                                        </div>

                                        <div class="form-group mt-30 mb-30">
                                            @error('category_id')
                                            {{$message}}
                                            @enderror
                                            <label class="control-label mb-10 text-left">Выберите категорию товара</label>
                                            @if(!isset($product->category->id))
                                            <p>Категория не уставлена, Вы можете установить ее в ручную!</p>
                                            @endif
                                            <select class="form-control" name="category_id">

                                                @foreach($category as $categ)
                                                    <option value="{{$categ->id}}" @if(isset($product->category->id) &&($product->category->id == $categ->id)) ? selected="selected" : disabled @endif>{{$categ->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            @error('description')
                                            {{$message}}
                                            @enderror
                                            <label class="control-label mb-10 text-left" for="example-email">Описание товара</label>
                                            <input type="text" id="example-email" value="{{$product->description}}" name="description" class="form-control" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            @error('image')
                                            {{$message}}
                                            @enderror
                                            <label class="control-label mb-10 text-left" for="example-email">Изображение</label>
                                            <input type="file" id="example-email" name="image" class="form-control" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            @error('price')
                                            {{$message}}
                                            @enderror
                                            <label class="control-label mb-10 text-left" for="example-email">Цена товара</label>
                                            <input type="text" id="example-email" value="{{$product->price}}" name="price" class="form-control" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            @error('count')
                                            {{$message}}
                                            @enderror
                                            <label class="control-label mb-10 text-left" for="example-email">Количество</label>
                                            <input type="text" id="example-email" name="count" value="{{$product->count}}" class="form-control" placeholder="count">
                                        </div>
                                        <div class="form-group mb-30">
                                            @error('name')
                                            {{$message}}
                                            @enderror
                                            <label class="control-label mb-10 text-left">Особенности</label>
                                            @foreach($array as $filed => $title)
                                                <div class="checkbox checkbox-success">
                                                    <input id="checkbox3" name="{{$filed}}" type="checkbox" @if ($product->$filed === 1) checked="checked" @endif >
                                                    <label for="checkbox3">
                                                        {{$title}}
                                                    </label>
                                                </div>
                                            @endforeach
                                        </div>
                                        <button  class="btn btn-success btn-anim"><i class="icon-rocket"></i><span class="btn-text">submit</span></button>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img style="height: 300px" src="{{$product->getImage()}}" alt="">
            <!-- /Row -->

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
