@section('title', 'Создать XML')
@extends('admin.layout')
@section('content')
    <div class="page-wrapper">
        <div class="container-fluid">

            <!-- Title -->
            <div class="row heading-bg">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h5 class="txt-dark">form element</h5>
                </div>
                <!-- Breadcrumb -->
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="index.html">Dashboard</a></li>
                        <li><a href="#"><span>form</span></a></li>
                        <li class="active"><span>form-element</span></li>
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
                                <h6 class="panel-title txt-dark">Basic Form</h6>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body">
                                <div class="form-wrap">
                                    <form method="post" action="{{route('admin.xml.store')}}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            @error('name')
                                            {{$message}}
                                            @enderror
                                            <label class="control-label mb-10 text-left">name</label>
                                            <input type="text" class="form-control" name="name">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label mb-10 text-left" for="example-email">code</label>
                                            <input type="text" id="example-email" name="code" class="form-control" placeholder="Email">
                                        </div>
                                        <div class="form-group">

                                            <label class="control-label mb-10 text-left" for="example-email">description</label>
                                            <input type="text" id="example-email" name="description" class="form-control" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label mb-10 text-left" for="example-email">image</label>
                                            <input type="file" id="example-email" name="image" class="form-control" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label mb-10 text-left" for="example-email">price</label>
                                            <input type="text" id="example-email" name="price" class="form-control" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label mb-10 text-left" for="example-email">count</label>
                                            <input type="text" id="example-email" name="count" class="form-control" placeholder="count">
                                        </div>
                                        <div class="form-group mb-30">
                                            <label class="control-label mb-10 text-left">Checkbox</label>
                                        </div>
                                        <button  class="btn btn-success btn-anim"><i class="icon-rocket"></i><span class="btn-text">submit</span></button>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
