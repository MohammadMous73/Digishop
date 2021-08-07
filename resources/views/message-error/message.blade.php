<!--Validation-->
@if($errors -> any())

    <div class="alert alert-danger">
        <ul>
            @foreach($errors -> all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>

@endif

<!-- Error :Warning -->

@if(session('warning'))
    <div class="alert alert-danger">
        {{session('warning')}}
    </div>
@endif


<!-- Ok : success -->

@if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif
