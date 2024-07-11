@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection

@section('content')
<div class="admin__content">
    <div class="admin__heading">
        <h2>Admin</h2>
    </div>

    <div class="search-form">
        <form class="form" action="/admin/search" method="get">
        @csrf
            <div class="form__item-keyword">
                <input type="text" name="keyword" value="{{old('keyword')}}" placeholder="名前やメールアドレスを入力してください">
            </div>
            <div class="form__item">
                <div class="form__select-gender">
                    <select class="form__select-gender--item" name="gender">
                        <option selected disabled>性別</option>
                        <option value="1">男性</option>
                        <option value="2">女性</option>
                        <option value="3">その他</option>
                    </select>
                </div>
            </div>
            <div class="form__item">
                <div class="form__select-category">
                    <select class="form__select-category--item" name="category_id">
                        <option selected disabled>お問い合わせの種類</option>
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->content}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form__item">
                <div class="form__item-date">
                    <input type="date" name="created_at" value="{{request('created_at')}}">
                </div>
            </div>
            <div class="form__button">
                <input class="form__button-submit" type="submit" value="検索">
            </div>
        </form>
        <div class="search-form__button-reset">
            <a class="search-form__button-link" href="/admin">リセット</a>
        </div>
    </div>

    <div class="contact-table">
        <table class="contact-table__inner">
            <tr class="contact-table__row">
                <th class="contact-table__header">お名前</th>
                <th class="contact-table__header">性別</th>
                <th class="contact-table__header">メールアドレス</th>
                <th class="contact-table__header">お問い合わせの種類</th>
                <th class="contact-table__header"></th>
            </tr>
            @foreach($contacts as $contact)
            <tr class="contact-table__row">
                <td class="contact-table__item">{{$contact->last_name}} {{$contact->first_name}}</td>
                <td class="contact-table__item">
                    @if($contact->gender == 1)
                    男性
                    @elseif($contact->gender == 2)
                    女性
                    @elseif($contact->gender == 3)
                    その他
                    @endif
                </td>
                <td class="contact-table__item">{{$contact->email}}</td>
                <td class="contact-table__item">{{$contact['category']['content']}}</td>
                <td class="contact-table__item">
                    <div class="contact-table__item-modal">
                            <a class="modal-trigger" href="#modal"
                            data-id="{{$contact->id}}"
                            data-last-name="{{$contact->last_name}}"
                            data-first-name="{{$contact->first_name}}"
                            data-gender="{{$contact->gender}}"
                            data-email="{{$contact->email}}"
                            data-tel="{{$contact->tel}}"
                            data-address="{{$contact->address}}"
                            data-building="{{$contact->building}}"
                            data-category="{{$contact->category->content}}"
                            data-detail="{{$contact->detail}}">
                            詳細
                        </a>
                    </div>
                </td>
            </tr>
            @endforeach
        </table>
    </div>

    {{-- モーダル --}}
    <div class="modal" id="modal">
        <div class="modal__inner">
            <div class="modal__contents">
                <div class="modal-close">
                    <a class="modal-close__link" href="/admin">&times;</a>
                </div>

                <div class="modal__content">
                    <div class="modal-table">
                        <table class="modal-table__inner">
                            <tr class="modal-table__row">
                                <th class="modal-table__header">お名前</th>
                                <td class="modal-table__text" id="modal-name"></td>
                            </tr>
                            <tr class="modal-table__row">
                                <th class="modal-table__header">性別</th>
                                <td class="modal-table__text" id="modal-gender"></td>
                            </tr>
                            <tr class="modal-table__row">
                                <th class="modal-table__header">メールアドレス</th>
                                <td class="modal-table__text" id="modal-email"></td>
                            </tr>
                            <tr class="modal-table__row">
                                <th class="modal-table__header">電話番号</th>
                                <td class="modal-table__text" id="modal-tel"></td>
                            </tr>
                            <tr class="modal-table__row">
                                <th class="modal-table__header">住所</th>
                                <td class="modal-table__text" id="modal-address"></td>
                            </tr>
                            <tr class="modal-table__row">
                                <th class="modal-table__header">建物名</th>
                                <td class="modal-table__text" id="modal-building"></td>
                            </tr>
                            <tr class="modal-table__row">
                                <th class="modal-table__header">お問い合わせの種類</th>
                                <td class="modal-table__text" id="modal-category"></td>
                            </tr>
                            <tr class="modal-table__row">
                                <th class="modal-table__header">お問い合わせ内容</th>
                                <td class="modal-table__text" id="modal-detail"></td>
                            </tr>
                        </table>
                    </div>
                    <form class="delete-form" action="/admin/delete" method="post">
                    @method('DELETE')
                    @csrf
                        <div class="delete-form__button">
                            <input type="hidden" name="id" id="modal-id">
                            <input class="delete-form__button-submit" type="submit" value="削除">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var modalTriggers = document.querySelectorAll('.modal-trigger');
    modalTriggers.forEach(function(trigger) {
        trigger.addEventListener('click', function() {
            document.getElementById('modal-name').innerText = this.getAttribute('data-last-name') + ' ' + this.getAttribute('data-first-name');
            document.getElementById('modal-gender').innerText = this.getAttribute('data-gender') == 1 ? '男性' : this.getAttribute('data-gender') == 2 ? '女性' : 'その他';
            document.getElementById('modal-email').innerText = this.getAttribute('data-email');
            document.getElementById('modal-tel').innerText = this.getAttribute('data-tel');
            document.getElementById('modal-address').innerText = this.getAttribute('data-address');
            document.getElementById('modal-building').innerText = this.getAttribute('data-building');
            document.getElementById('modal-category').innerText = this.getAttribute('data-category');
            document.getElementById('modal-detail').innerText = this.getAttribute('data-detail');
            document.getElementById('modal-id').value = this.getAttribute('data-id');
        });
    });
});
</script>
@endsection
