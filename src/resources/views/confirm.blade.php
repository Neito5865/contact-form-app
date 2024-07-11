@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/confirm.css')}}">
@endsection

@section('content')
<div class="confirm__content">
    <div class="confirm__heading">
        <h2>Confirm</h2>
    </div>
    <form class="confirm-form" action="/thanks" method="post">
        @csrf
        <div class="confirm-table">
            <table class="confirm-table__inner">
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">お名前</th>
                    <td class="confirm-table__text confirm-table__text-name">
                            <input class="confirm-table__input-name" type="text" name="last_name" value="{{$contact['last_name']}}" readonly>
                            <input class="confirm-table__input-name" type="text" name="first_name" value="{{$contact['first_name']}}" readonly>
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">性別</th>
                    <td class="confirm-table__text">
                            <input type="hidden" name="gender" value="{{$contact['gender']}}">
                            <span>{{$genderDisplay}}</span>
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">メールアドレス</th>
                    <td class="confirm-table__text">
                            <input type="email" name="email" value="{{$contact['email']}}" readonly>
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">電話番号</th>
                    <td class="confirm-table__text">
                            <input type="tel" name="tel" value="{{$tel}}" readonly>
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">住所</th>
                    <td class="confirm-table__text">
                            <input type="text" name="address" value="{{$contact['address']}}" readonly>
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">建物名</th>
                    <td class="confirm-table__text">
                            <input type="text" name="building" value="{{$contact['building']}}" readonly>
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">お問い合わせの種類</th>
                    <td class="confirm-table__text">
                        <input type="hidden" name="category_id" value="{{$category->id}}">
                        <span>{{$category->content}}</span>
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">お問い合わせ内容</th>
                    <td class="confirm-table__text">
                        <input type="text" name="detail" value="{{$contact['detail']}}">
                    </td>
                </tr>
            </table>
        </div>
        <div class="confirm-form__button">
            <input class="confirm-form__button-submit" type="submit" value="送信">
            <a class="confirm-form__button-modification" href="/">修正</a>
        </div>
    </form>
</div>
@endsection
