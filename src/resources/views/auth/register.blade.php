@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/register.css')}}">
@endsection

@section('content')
<div class="register__content">
    <div class="register__inner">
        <div class="register-form__heading">
            <h2>Register</h2>
        </div>
        <div class="register-form__content">
            <form class="form" action="/register" method="post">
            @csrf
                <div class="form__group">
                    <div class="form__group-titel">
                        <sapn class="form__label--item">お名前</sapn>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="name" value="{{old('name')}}" placeholder="例: 山田 太郎">
                        </div>
                        @error('name')
                        <div class="form__error">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-titel">
                        <sapn class="form__label--item">メールアドレス</sapn>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="email" name="email" value="{{old('email')}}" placeholder="例: test@example">
                        </div>
                        @error('email')
                        <div class="form__error">
                            {{$message}}
                        </div>
                        @enderror
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
                        @error('password')
                        <div class="form__error">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="form__button">
                    <input class="form__button-submit" type="submit" value="登録">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

