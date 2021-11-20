@section('title', 'SPLITTER | XMLS')
@extends('admin.layout')
@section('content')
    <div class="page-wrapper">
        <div class="container-fluid">

            <!-- Title -->
            <div class="row heading-bg">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h5 class="txt-dark">Добро пожаловать в SPLITTER</h5>
                </div>
                <!-- Breadcrumb -->
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="{{route('admin')}}">Главная</a></li>
                        <li class="active"><span>SPLITTER</span></li>
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
                            @if(session('parser_message'))
                                <div class="alert alert-success alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>{{session('parser_message')}}
                                </div>
                            @endif
                            @if(session('success_destroy'))
                                <div class="alert alert-success alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>{{session('success_destroy')}}
                                </div>
                            @endif
                            <div class="pull-left">
                                <h6 class="panel-title txt-dark">Xml-list</h6>
                                <p class="text-muted">

                                    Тут Вы можете загрузить xml файл, после чего выполнить парсинг данного файла <br>
                                    Приокончании парсинга файла Вас будет перенаправлено на страницу с списком товаров, которые нужно отфильтровать по категории и принять их<br>

                                </p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body">
                                <p class="text-muted">Add class <a href="#">
                                        <code>
                                            создать
                                        </code>
                                    </a> in table tag.</p>
                                <a href="{{route('admin.product.csv')}}" class="btn btn-success btn-outline fancy-button btn-0">Выгрузка</a>

                                <div class="table-wrap mt-40">
                                    <div class="table-responsive">
                                        <table class="table mb-0">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Хеш прайса</th>
                                                <th>Название</th>
                                                <th>Дата создания</th>
                                                <th>Просмотр</th>
                                                <th>Удалить</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($xmls as $item)
                                                <tr>
                                                    <td>{{$item->id}}</td>
                                                    <td>{{$item->hash}}</td>
                                                    <td><a href="{{route('parse', $item->link_xml)}}">{{$item->link_xml}}</a></td>
                                                    <td>{{$item->created_at}}</td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
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
