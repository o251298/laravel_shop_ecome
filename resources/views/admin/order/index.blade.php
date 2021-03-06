@extends('admin.layout')
@section('content')
    <div class="page-wrapper">
        <div class="container-fluid">

            <!-- Title -->
            <div class="row heading-bg">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h5 class="txt-dark">basic table</h5>
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
                <div class="col-md-12">
                    <div class="panel panel-default card-view">
                        <div class="panel-heading">
                            <div class="pull-left">
                                <h6 class="panel-title txt-dark">Date Range Picker</h6>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body">
                                <div class="form-wrap">
                                    <form>
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-group mb-0">
                                                    <label class="control-label mb-10 text-left">Date Range Pick</label>
                                                    <input class="form-control input-daterange-datepicker" type="text" name="daterange" value="01/01/2016 - 01/31/2016"/>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group mb-0">
                                                    <label class="control-label mb-10 text-left">Date Range With Time</label>
                                                    <input type="text" class="form-control input-daterange-timepicker" name="daterange" value="01/01/2016 1:30 PM - 01/01/2016 2:00 PM"/>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group mb-0">
                                                    <label class="control-label mb-10 text-left">Limit Selectable Dates</label>
                                                    <input class="form-control input-limit-datepicker" type="text" name="daterange" value="06/01/2016 - 06/07/2016"/>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Basic Table -->
                <div class="col-sm-12">
                    <div class="panel panel-default card-view">
                        <div class="panel-heading">
                            <div class="pull-left">
                                <h6 class="panel-title txt-dark">Basic Table</h6>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body">
                                <p class="text-muted">Add class <a href="{{route('admin.category.create')}}">
                                        <code>
                                            ??????????????
                                        </code>
                                    </a> in table tag.</p>
                                <div class="table-wrap mt-40">
                                    <div class="table-responsive">
                                        <table class="table mb-0">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Username</th>
                                                <th>??????????????</th>
                                                <th>????????????????</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($order as $item)
                                                <tr>
                                                    <td>{{$item->id}}</td>
                                                    <td>{{$item->name}}</td>
                                                    <td>{{$item->status_orders}}</td>
                                                    <td>{{$item->created_at}}</td>
                                                    <td><a href=""><span class="label label-danger">??????????????</span></a></td>
                                                    <td><a href="{{route('admin.category.show', $item->id)}}"><span class="label label-primary">????????????????</span> </a></td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                        {{$order->links()}}
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
