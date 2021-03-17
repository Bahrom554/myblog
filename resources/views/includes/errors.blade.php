@if(count($errors))
    @foreach($errors->all() as $error)
        <p class="alter alter-danger">{{$error}}</p>
    @endforeach
@endif