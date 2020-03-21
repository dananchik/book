@extends('layouts.layout')

@section('content')
    <form method="post" action="{{route('newUser')}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="text" name="name">
        <select name="group">
            @foreach($data as $group)
                <option value="{{ $group->id }}">{{ $group->group }}</option>
            @endforeach
        </select>
        <input type="file" name="avatar">
        <button type="submit">отправить</button>
        @foreach($errors->all() as $el)
            {{ $el }}
        @endforeach
    </form>

@endsection
