@extends('layouts.layout')

@section('content')
    <form method="post" action="{{route('editUserSubmit',$data->id)}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="text" name="name" value="{{ $data->name }}">
        <select name="group">
            @foreach($groups as $group)
                <option {{ $data->groupId == $group->id ? "selected": null  }} value="{{ $group->id }}">{{ $group->group }}  </option>
            @endforeach
        </select>
        <label for="avatar"><img src="{{ @asset("/storage/$data->avatar") }}" width="100" height="100" /></label>
        <input type="file" id="avatar" name="avatar" /><br />
        <button type="submit">отправить</button>
        @foreach($errors->all() as $el)
            {{ $el }}
        @endforeach
    </form>
@endsection
