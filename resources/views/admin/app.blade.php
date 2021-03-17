<!Doctype html>
<html lang="en">
<head>
    @include('admin.layout.head')
</head>
<body class="hold-transition skin-blue sidebar-mini">
@include('admin.layout.header')
@include('admin.layout.sidebar')
@section('main_content')
    @show
@include('admin.layout.footer')

</body>
</html>