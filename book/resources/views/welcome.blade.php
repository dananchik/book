@extends('layouts.layout')
@section('css')<link rel="stylesheet" href="/css/Form.css"> @endsection
@section('content')
    <section>
        <form method="post" action="{{route('push-form')}}" class="reg-form">
            {{ csrf_field() }}
            <h2>Вход</h2>
            <img src="/img/avatar.svg" alt="">

            <div class="item-form">
                <label class="label-input">login:</label>
                <input type="text" class="input-form" name="login"/>
            </div>
            <div class="item-form">
                <label class="label-input">password:</label>
                <input type="text" class="input-form" name="password"/>
            </div>
            @if($errors->any())
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            @endif
            <button type="submit" name="send">Отправить</button>
        </form>
    </section>
@endsection
