@extends('layouts.layout')
@section('css')
    <link rel="stylesheet" href="/css/Form.css"> @endsection
@section('content')

    <form method="POST" class="reg-form" action="{{ route('login') }}">
        @csrf
        <h2>Вход</h2>
        <img src="/img/avatar.svg" alt="">
        <div class="item-form"><label for="login" class="label-input">{{ __('Login') }}</label>
            <input id="login" class="input-form" name="login" value="{{ old('login') }}" required
                   autofocus>


        </div>
        <div class="container">
            @if ($errors->has('login'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('login') }}</strong>
                </span>
            @endif

            <div class="item-form">
                <label for="password" class="label-input">{{ __('Password') }}</label>

                <input id="password" type="password" class="input-form" name="password" required
                       autocomplete="current-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        отправить
                    </button>

                </div>
            </div>
    </form>
    </div>
@endsection
