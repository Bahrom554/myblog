@extends('admin.app')
@section('Resection')
    <link rel="stylesheet" href="{{asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endsection
@section('main_content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Blank page
                <small>it all starts here</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Examples</a></li>
                <li class="active">Blank page</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Tags</h3>
                    <a class='col-lg-offset-5 btn btn-success' href="{{route('tag.create')}}">Add New</a>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                                title="Collapse">
                            <i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Data Table With Full Features</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Tag Name</th>
                            <th>Slug</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($tags as $tag)
                        <tr>
                            <td>{{$loop->index+1}}</td>
                            <td>{{$tag->name}}</td>
                            <td>{{$tag->slug}}</td>
                            <td><a href="{{route('tag.edit',$tag->id)}}"><span class="glyphicon glyphicon-edit"></span></a>
                            </td>
                            <td>
                                <form id="delete-form-{{$tag->id}}" action="{{route('tag.destroy',$tag->id)}}" method="post"  style="diplay: none">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                </form>
                                <a href="" onclick="
                                        if(confirm('Are sure,You want delete this?')){
                                    event.preventDefault();
                                     document.getElementById('delete-form-{{$tag->id}}').submit();}
                                        else{
                                        event.preventDefault();}" >
                                    <span class="glyphicon glyphicon-trash"></span>
                                </a>

                            </td>
                        </tr>
                        @endforeach

                        </tbody>
                        <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Tag Name</th>
                            <th>Slug</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.box-body -->


            </div>
            </div></section>
        <!-- /.content -->
    </div>
@endsection
@section('footsteps')
   <script src="{{asset('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('admin/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
   <script>
       $(function () {
           $('#example1').DataTable()
           $('#example2').DataTable({
               'paging'      : true,
               'lengthChange': false,
               'searching'   : false,
               'ordering'    : true,
               'info'        : true,
               'autoWidth'   : false
           })
       })
   </script>

    @endsection