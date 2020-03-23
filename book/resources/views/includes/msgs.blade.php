@section('msgs')
@if($errors->any())
    <div class="error">
        <ul>
            @foreach($errors->all() as $er)
                <li>{{$er}}</li>
            @endforeach
        </ul>
    </div>
@endif
@if(session('success'))
    <div class="success">
        {{ session('success') }}
    </div>
@endif
