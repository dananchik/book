@extends('layouts.layout')
@section('title')users @endsection
@section('css')usersTable.css @endsection
@section('content')
    <table>
        <tr>
            <th colspan="2">name</th>
            <th>group</th>
            <th>avatar</th>
            <th>Действия</th>
        </tr>
        @foreach($data as $el)
            <tr>
                <td>{{ $el->name }}</td>
                <td>{{ $el->groupId }}</td>
                <td><img src="{{ asset("storage/$el->avatar") }}" alt="xd"></td>
                <td><a href="#">редактировать</a></td>
            </tr>
        @endforeach
    </table>
@endsection
