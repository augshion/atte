@extends('layouts.app')

@section('css')

<link rel="stylesheet" href="{{ asset('css/login.css') }}">

@endsection

@section('content')

<div class="login-form__content">
    <div class="login-form__heading">
        <h2>ログイン</h2>
    </div>

    <form class="form" action="/login" method="post">
    @csrf       
        <div class="form__group">
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="email" name="email" placeholder="メールアドレス" value="{{ old('email') }}" />
                </div>

                <div class="form_error">
                    @error('email')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>

        <div class="form__group">
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="password" name="password" placeholder="パスワード" value="{{ old('password') }}" />
                </div>

                <div class="form_error">
                    @error('password')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>

        <div class="form__button">
            <button class="form__button-login" type="submit">ログイン</button>
        </div>
    </form>

    <div class="login-form__footing">
        <div class="footing__message">
            <span>アカウントをお持ちでない方はこちらから</span>
        </div>

        <div class="footing__link-button">
            <a href="register" class="register-button">会員登録</a>
        </div>
    </div>

</div>

@endsection