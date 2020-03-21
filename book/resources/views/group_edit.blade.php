@extends('layouts.layout')
@include('includes.menu')
@section('content')
    <form method="post" action="{{ route('editGroupSubmit',$data->id) }}">
        {{ csrf_field() }}
        @foreach($errors->all() as $er)
            {{$er}}
        @endforeach
        <input type="text" name="group" value="{{ $data->group }}">
        <button type="submit" name="send">редактировать</button>
    </form>
@endsection
