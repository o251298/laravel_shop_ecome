@section('title', 'Категория')
@extends('admin.layout')
@section('content')
    <div class="page-wrapper">
        <div class="container-fluid">

            <!-- Title -->
            <div class="row heading-bg">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h5 class="txt-dark">Категории с прайса</h5>
                </div>
                <!-- Breadcrumb -->
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">

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
                            @if(session('success_destroy'))
                                <div class="alert alert-success alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>{{session('success_destroy')}}
                                </div>

                            @endif
                            <div class="pull-left">
                                <h6 class="panel-title txt-dark">Сделать категорию главной</h6>
                            </div>

                            <div class="clearfix">
                                <p class="text-muted">
                                    Расширение прав для категории <br>
                                </p>
                            </div>
                        </div>
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body">
                                <div class="table-wrap mt-40">
                                    <div class="table-responsive">
                                        <form action="{{route('admin.category.change')}}" method="post">
                                        @csrf
                                        <table class="table mb-0">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Username</th>
                                                <th>Удалить</th>
                                                <th>Просмотр</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($category as $item)
                                                <tr>
                                                    <td>{{$item->id}}</td>
                                                    <td>{{$item->name}}</td>
                                                    <td>{{$item->code}}</td>
                                                    <td>{{$item->created_at}}</td>
                                                    <td><a href="{{route('admin.category.delete', $item->id)}}"><span class="label label-danger">Удалить</span></a></td>
                                                    <td><a href="{{route('admin.category.show', $item->id)}}"><span class="label label-primary">Просмотр</span> </a></td>
                                                    <td><input id="checkbox3" name="category[]" value="{{$item->id}}" type="checkbox"></td>


                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                            <input type="submit" name="sbm">
                                        </form>
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
