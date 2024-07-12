@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/login.css')}}">
@endsection

@section('content')
<div class="login__content">
    <div class="login__inner">
        <div class="login-form__heading">
            <h2>Login</h2>
        </div>
        <div class="login-form__content">
            <form class="form" action="/login" method="post">
            @csrf
                <div class="form__group">
                    <div class="form__group-titel">
                        <sapn class="form__label--item">メールアドレス</sapn>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="email" name="email" value="{{old('email')}}" placeholder="例: test@example">
                        </div>
                        <div class="form__error">
                            @error('email')
                            {{$message}}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-titel">
                        <sapn class="form__label--item">パスワード</sapn>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="password" name="password" placeholder="例: coavhtech1106">
                        </div>
                        <div class="form__error">
                            @error('password')
                            {{$message}}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__button">
                    <input class="form__button-submit" type="submit" value="ログイン">
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

