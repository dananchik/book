@extends('layouts.layout')

@section('content')
    <form method="post" action="{{ route('newGroupSubmit') }}">
        {{ csrf_field() }}
        @foreach($errors->all() as $er)
            {{$er}}
        @endforeach
        <input type="text" name="group">
        <button type="submit" name="send">отправить!</button>
    </form>
@endsection
