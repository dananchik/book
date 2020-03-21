@extends('layouts.layout')
@section('css')
    <link rel="stylesheet" href="/css/userForm.css">
@endsection
@include('includes.menu')
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
        <ul class="errors">
            @foreach($errors->all() as $el)
                <li>{{ $el }}</li>
            @endforeach
        </ul>
    </form>

@endsection
