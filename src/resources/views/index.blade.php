@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/index.css')}}">
@endsection

@section('content')
<div class="contact-form__content">
    <div class="contact-form__heading">
        <h2>Contact</h2>
    </div>
    <form class="form" action="/confirm" method="post">
    @csrf
        <div class="form__group">
            <div class="form__group-ttl">
                <p class="form__label--item">お名前 <span class="form__label--required">※</span></p>
            </div>
            <div class="form__group-content">
                <div class="form__group--flex">
                    <div class="form__input--name">
                        <input type="text" name="last_name" value="{{old('last_name')}}" placeholder="例: 山田">
                    </div>
                    <div class="form__input--name">
                        <input type="text" name="first_name" value="{{old('last_name')}}" placeholder="例: 太郎">
                    </div>
                </div>
                <div class="form__error">
                    @error('last_name')
                    {{$message}}
                    @enderror
                </div>
                <div class="form__error">
                    @error('first_name')
                    {{$message}}
                    @enderror
                </div>
            </div>
        </div>

        <div class="form__group">
            <div class="form__group-ttl">
                <p class="form__label--item">性別 <span class="form__label--required">※</span></p>
            </div>
            <div class="form__group-content">
                <div class="form__input--radio">
                    <div class="form__input--radio-item">
                        <input class="input-radio" type="radio" name="gender" value="1" checked>
                        <label class="radio-label">男性</label>
                    </div>
                    <div class="form__input--radio-item">
                        <input class="input-radio" type="radio" name="gender" value="2">
                        <label class="radio-label">女性</label>
                    </div>
                    <div class="form__input--radio-item">
                        <input class="input-radio" type="radio" name="gender" value="3">
                        <label class="radio-label">その他</label>
                    </div>
                </div>
                <div class="form__error">
                    @error('gender')
                    {{$message}}
                    @enderror
                </div>
            </div>
        </div>

        <div class="form__group">
            <div class="form__group-ttl">
                <p class="form__label--item">メールアドレス <span class="form__label--required">※</span></p>
            </div>
            <div class="form__group-content">
                <div class="form__input--email">
                    <input type="email" name="email" value="{{old('email')}}" placeholder="例: test@example.com">
                </div>
                <div class="form__error">
                    @error('email')
                    {{$message}}
                    @enderror
                </div>
            </div>
        </div>

        <div class="form__group">
            <div class="form__group-ttl">
                <p class="form__label--item">電話番号 <span class="form__label--required">※</span></p>
            </div>
            <div class="form__group-content">
                <div class="form__input--tel">
                    <input type="tel" name="tel1" value="{{old('tel1')}}" placeholder="080">
                    <span class="form__tel-hyphen">-</span>
                    <input type="tel" name="tel2" value="{{old('tel2')}}" placeholder="1234">
                    <span class="form__tel-hyphen">-</span>
                    <input type="tel" name="tel3" value="{{old('tel3')}}" placeholder="5678">
                </div>
                <div class="form__error">
                    @if ($errors->has('tel1'))
                    <div class="error">{{ $errors->first('tel1') }}</div>
                    @endif
                    @if ($errors->has('tel2'))
                    <div class="error">{{ $errors->first('tel2') }}</div>
                    @endif
                    @if ($errors->has('tel3'))
                    <div class="error">{{ $errors->first('tel3') }}</div>
                    @endif
                </div>
            </div>
        </div>

        <div class="form__group">
            <div class="form__group-ttl">
                <p class="form__label--item">住所 <span class="form__label--required">※</span></p>
            </div>
            <div class="form__group-content">
                <div class="form__input--address">
                    <input type="text" name="address" value="{{old('address')}}" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3">
                </div>
                <div class="form__error">
                    @error('address')
                    {{$message}}
                    @enderror
                </div>
            </div>
        </div>

        <div class="form__group">
            <div class="form__group-ttl">
                <p class="form__label--item">建物名</p>
            </div>
            <div class="form__group-content">
                <div class="form__input--building">
                    <input type="text" name="building" value="{{old('building')}}" placeholder="例: 千駄ヶ谷マンション101">
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-ttl">
                <p class="form__label--item">お問い合わせの種類 <span class="form__label--required">※</span></p>
            </div>
            <div class="form__group-content">
                <div class="form__select">
                    <select class="form__select--item" name="category_id" id="category_id">
                        <option selected disabled>選択してください</option>
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->content}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form__error">
                    @error('category_id')
                    {{$message}}
                    @enderror
                </div>
            </div>
        </div>

        <div class="form__group">
            <div class="form__group-ttl">
                <p class="form__label--item">お問い合わせ内容 <span class="form__label--required">※</span></p>
            </div>
            <div class="form__group-content">
                <div class="form__textarea">
                    <textarea name="detail" placeholder="お問い合わせ内容をご記載ください"></textarea>
                </div>
                <div class="form__error">
                    @error('detail')
                    {{$message}}
                    @enderror
                </div>
            </div>
        </div>

        <div class="form__button">
            <input class="form__button-submit" type="submit" value="確認画面">
        </div>
    </form>
</div>
@endsection
