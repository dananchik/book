@extends('layouts.layout')

@section('content')
    <form method="post" action="{{route('newUser')}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="text" name="name">
        <select name="group">
            <option>admin</option>
            <option>user</option>
        </select>
        <input type="file" name="avatar">
        <button type="submit">отправить</button>
    </form>
    <img src="{{ asset('storage/upload_avatars/1.png') }}" alt="">
@endsection
