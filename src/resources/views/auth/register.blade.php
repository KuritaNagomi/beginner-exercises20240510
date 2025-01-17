@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css')}}">
@endsection

@section('content')
<div class="register-form">
    <h2 class="register-form__heading">会員登録</h2>
    <div class="register-form__inner">
        <form action="/register" method="post" class="register-form__form">
            @csrf
            <div class="register-form__group">
                <input class="register-form__input" type="text" name="name" id="name" placeholder="名前" value="{{ old('name') }}">
                <p class="register-form__error-message">
                    @error('name')
                    {{ $message }}
                    @enderror
                </p>
            </div>
            <div class="register-form__group">
                <input class="register-form__input" type="mail" name="email" id="email" placeholder="メールアドレス" value="{{ old('email') }}">
                <p class="register-form__error-message">
                    @error('email')
                    {{ $message }}
                    @enderror
                </p>
            </div>
            <div class="register-form__group">
                <input class="register-form__input" type="password" name="password" id="password" placeholder="パスワード" value="{{ old('password') }}">
                <p class="register-form__error-message">
                    @error('password')
                    {{ $message }}
                    @enderror
                </p>
            </div>
            <div class="register-form__group">
                <input class="register-form__input" type="password" name="password_confirmation" id="password_confirmation" placeholder="確認用パスワード" value="{{ old('password_confirmation') }}">
            </div>
            <input type="submit" class="register-form__btn" value="会員登録">
        </form>
        <div class="link">
            <div class="to-login">
            アカウントをお持ちの方はこちらから
            </div>
            <div class="to-login__link">
                <a href="/login">ログイン</a>
            </div>
        </div>
    </div>
</div>
@endsection('content')