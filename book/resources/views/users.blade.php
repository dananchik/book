@extends('layouts.layout')
@section('title')users @endsection
@section('css')
    <link rel="stylesheet" href="/css/usersTable.css"> @endsection
@include('includes.menu')
@section('content')
    <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>avatar</th>
            <th>groupId</th>
            <th>действия</th>
        </tr>
        @foreach($data as $el)
            <tr>
                <td>{{ $el->id }}</td>
                <td><a href="{{route('editUserForm', $el->id)}}">{{ $el->name }}</a></td>
                <td><img src="{{ asset("storage/$el->avatar") }}"></td>
                <td>{{ $el->groupId }}</td>
                <td><a href="{{ route('deleteUser',$el->id) }}">удалить</a></td>
            </tr>
        @endforeach
    </table>
@endsection
