@extends('layouts.layout')
@include('includes.menu')
@include('includes.msgs')
@section('content')
    <form method="post" action="{{ route('editGroupSubmit',$data->id) }}">
        {{ csrf_field() }}
        <input type="text" name="group" value="{{ $data->group }}">
        <button type="submit" name="send">редактировать</button>
    </form>
@endsection
