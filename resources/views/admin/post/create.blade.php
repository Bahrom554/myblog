@extends('admin.app')
 @section('Resection')
<link rel="stylesheet" href="{{asset('admin/bower_components/select2/dist/css/select2.min.css')}}">
 @endsection
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
                       @include('includes.errors')
                    <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" action="{{route('post.store')}}" method="POST">
                            {{csrf_field()}}
                            <div class="box-body">
                                 <div class="col-lg-6">
                                      <div class="form-group">
                                    <label for="title">Post title</label>
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                                </div>
                                      <div class="form-group">
                                    <label for="subtitle">Post Sub title</label>
                                    <input type="text" class="form-control" id="subtitle" name="subtitle" placeholder="Sub Title">
                                </div>
                                      <div class="form-group">
                                    <label for="slug">Post Slug</label>
                                    <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug">
                                </div>
                                 </div>

                                     <div class="col-lg-6">
                                           <div class="form-group">
                                               <div class="pull-right">
                                                 <label for="image">File input</label>
                                                 <input type="file" id="image" name="image">
                                               </div>
                                               <div class="checkbox pull-left">
                                                   <label>
                                                       <input type="checkbox"> Publish
                                                   </label>
                                               </div>

                                           </div>
                                         <br>
                                         <br>


                                         <div class="form-group" style="margin-top: 18px;" >
                                             <label>Select Tags</label>
                                             <select class="form-control select2 select2-hidden-accessible"
                                                     multiple="" data-placeholder="Select a State" style="width: 100%;" tabindex="-1" aria-hidden="true" name="tag[]">
                                                    @foreach($tags as $tag)
                                                     <option value="{{$tag->id}}">{{$tag->name}}</option>
                                                 @endforeach

                                             </select>
                                         </div>
                                         <div class="form-group" style="margin-top: 18px;" >
                                             <label>Select Categories</label>
                                             <select class="form-control select2 select2-hidden-accessible"
                                                     multiple="" data-placeholder="Select a State" style="width: 100%;" tabindex="-1" aria-hidden="true" name="category[]">
                                                 @foreach($categories as $category)
                                                     <option value="{{$category->id}}">{{$category->name}}</option>
                                                 @endforeach
                                             </select>
                                         </div>
                                     </div>
                            </div>

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="{{route('post.index')}}" class="btn btn-warning">Back</a>
                            </div>
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Creat Post here
                                        <small>Simple and fast</small>
                                    </h3>
                                    <!-- tools box -->
                                    <div class="pull-right box-tools">
                                        <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip"
                                                title="Collapse">
                                            <i class="fa fa-minus"></i></button>

                                    </div>
                                    <!-- /. tools -->
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body pad">
                                    <form>
                                         <textarea class="textarea"  name="body" placeholder="Place some text here"
                                            style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">

                                        </textarea>
                                    </form>
                                </div>
                            </div>

                        </form>
                    </div>
              </div>
            </div>
        </section>
    </div>

@endsection
@section('footsteps')
    <script src="{{asset('admin/bower_components/select2/dist/js/select2.full.min.js')}}"></script>

 <script>   $(function () {
    $('.select2').select2()})
 </script>



@endsection