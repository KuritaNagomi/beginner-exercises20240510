@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css')}}">
@endsection

@section('content')
<div class="login-form">
    <h2 class="login-form__heading">ログイン</h2>
    <div class="login-form__inner">
        <form action="/login" method="post" class="login-form__form">
            @csrf
            <div class="login-form__group">
                <input class="login-form__input" type="mail" name="email" id="email" placeholder="メールアドレス" value="{{ old('email') }}">
                <p class="login-form__error-message">
                    @error('email')
                    {{ $message }}
                    @enderror
                </p>
            </div>
            <div class="login-form__group">
                <input class="login-form__input" type="password" name="password" id="password" placeholder="パスワード">
                <p class="login-form__error-message">
                    @error('password')
                    {{ $message }}
                    @enderror
                </p>
            </div>
            <input type="submit" class="login-form__btn" value="ログイン">
        </form>
        <div class="link">
            <div class="to-register">
            アカウントをお持ちでない方はこちらから
            </div>
            <div class="to-register__link">
                <a href="/register">会員登録</a>
            </div>
        </div>
    </div>
</div>
@endsection('content')