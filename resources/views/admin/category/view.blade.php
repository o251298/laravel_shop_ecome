@section('title', 'Просмотр | ' . $category->name)
@extends('admin.layout')
@section('content')
    <div class="page-wrapper">
        <div class="container-fluid">

            <!-- Title -->
            <div class="row heading-bg">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h5 class="txt-dark">Список категорий</h5>
                </div>
                <!-- Breadcrumb -->
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="{{route('admin')}}">Главная</a></li>
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
                                @if(session('create'))
                                    <div class="alert alert-success alert-dismissable">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>{{session('create_category')}}
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
                                    <form method="post" action="{{route('admin.category.update', $category->id)}}" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            @error('name')
                                            {{$message}}
                                            @enderror
                                            <label class="control-label mb-10 text-left">name</label>
                                            <input type="text" class="form-control" name="name" value="{{$category->name}}">
                                        </div>
                                        <div class="form-group">
                                            @error('code')
                                            {{$message}}
                                            @enderror
                                            <label class="control-label mb-10 text-left" for="example-email">code</label>
                                            <input type="text" id="example-email" name="code" value="{{$category->code}}" class="form-control" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            @error('description')
                                            {{$message}}
                                            @enderror
                                            <label class="control-label mb-10 text-left" for="example-email">description</label>
                                            <input type="text" id="example-email" name="description" value="{{$category->description}}" class="form-control" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            @error('image')
                                            {{$message}}
                                            @enderror
                                            <label class="control-label mb-10 text-left" for="example-email">image</label>
                                            <input type="file" id="example-email" name="image" class="form-control" placeholder="Email">
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


            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default card-view">
                        <div class="panel-heading">
                            <div class="pull-left">
                                <h6 class="panel-title txt-dark">Without Filter</h6>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body">
                                <div class="gallery-wrap">
                                    <div class="portfolio-wrap project-gallery">
                                        <ul id="portfolio_1" class="portf auto-construct  project-gallery" data-col="4">
                                            <li  class="item tall"   data-src="dist/img/gallery/mock1.jpg" data-sub-html="<h6>Bagwati</h6><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>" >
                                                <a href="">
                                                    <img class="img-responsive" src="{{$category->getImage()}}"  alt="Image description" />
                                                    <span class="hover-cap">Bagwati</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
