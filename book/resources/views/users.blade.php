@extends('layouts.layout')
@section('title')users @endsection
@section('content')
    @foreach($data as $el)
    <h1>{{$el['name']}}</h1>
    @endforeach
@endsection
