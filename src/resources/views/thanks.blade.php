@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/thanks.css')}}">
@endsection

@section('content')
<div class="thanks__content">
    <div class="thanks__inner">
        <div class="thanks__back-text">
        Thank you
        </div>
        <p class="thanks__text">お問い合わせありがとうございました</p>
        <div class="thanks__button">
            <a class="thanks__button-home" href="/">HOME</a>
        </div>
    </div>
</div>
@endsection

