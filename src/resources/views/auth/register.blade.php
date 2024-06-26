@extends('layouts.app')

@section('css')

<link rel="stylesheet" href="{{ asset('css/register.css') }}">

@endsection

@section('content')


<div class="register-form__content">
    <div class="register-form__heading">
        <h2>会員登録</h2>
    </div>
    
    <form class="form" action="/register" method="post">
    @csrf
        <div class="form__group">
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="name" placeholder="名前" value="{{ old('name') }}" />
                </div>

                <div class="form_error">
                    @error('name')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
    
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
    
        <div class="form__group">
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="password" name="password_confirmation" placeholder="確認用パスワード" value="{{ old('password_confirmation') }}" />
                </div>

                <div class="form_error">
                    @error('password')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
    
        <div class="form__button">
            <button class="form__button-register" type="submit">会員登録</button>
         </div>
    </form>
    
    <div class="register-form__footing">
        <div class="footing__message">
            <span>アカウントをお持ちの方はこちらから</span>
        </div>
    
        <div class="footing__link-button">
            <a href="login" class="login-button">ログイン</a>
        </div>
    </div>  
</div>


@endsection
