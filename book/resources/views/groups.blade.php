@extends('layouts.layout')
@section('css')
    <link rel="stylesheet" href="/css/usersTable.css"> @endsection
@include('includes.menu')
@include('includes.msgs')
@section('content')
    <table>
        <tr>
            <th>idGroup</th>
            <th>name</th>
            <th>действия</th>
        </tr>
        @foreach($data as $el)
            <tr>
                <td>{{ $el->id }}</td>
                <td><a href="{{route('editGroupForm', $el->id)}}">{{ $el->group }}</a></td>
                <td><a href="{{ route('deleteGroup',$el->id) }}">удалить</a></td>
            </tr>
        @endforeach
    </table>
@endsection
