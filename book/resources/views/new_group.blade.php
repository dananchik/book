@extends('layouts.layout')
@include('includes.menu')
@include('includes.msgs')
@section('content')
    <form method="post" action="{{ route('newGroupSubmit') }}">
        {{ csrf_field() }}
        <input type="text" name="group">
        <button type="submit" name="send">отправить!</button>
    </form>
@endsection
