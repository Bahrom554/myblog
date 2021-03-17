@extends('admin.app')

@section('main_content')

    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Text Editors
                <small>Advanced form element</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Forms</a></li>
                <li class="active">Editors</li>
            </ol>
        </section>
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Titles</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        @include('includes.errors')
                        <form role="form" action="{{route('tag.update',$tag->id)}}" method="POST">
                            {{csrf_field()}}
                            {{method_field('PUT')}}

                            <div class="box-body">
                                <div class="col-lg-offset-3 col-lg-6">
                                    <div class="form-group">
                                        <label for="name">Tag title</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Title"
                                        value="{{$tag->name}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="slug">Tag Slug</label>
                                        <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug"
                                               value="{{$tag->slug}}">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <a href="{{route('tag.index')}}" class="btn btn-warning">back</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection