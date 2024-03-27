@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection

@section('content')
<div class="contact-form">
    <h2 class="contact-form_heading content__heading">Contact</h2>
    <!--  -->
        <div class="contact-form_inner">
            <form action="/confirm" method="post">
                @csrf

                <!-- 名前入力 -->
                <div class="contact-form_group contact-form_name-group">
                    <label class="contact-form__label" for="name">お名前<span class="contact-form__required">※</span>
                    </label>
                    <div class="contact-form__name-inputs">
                        <!-- 苗字と名前で分ける記載 -->
                        <input class="contact-form__input contact-form__name-input" type="text" name="first_name" id="name" value="{{ old('first_name') }}" placeholder="例：山田">
                        <input class="contact-form__input contact-form__name-input" type="text" name="last_name" id="name" value="{{ old('last_name') }}" placeholder="例：太郎">
                    </div>
                    <div class="contact-form__error-message">
                        @if ($errors->has('first_name'))
                        <p class="contact-form__error-message-first-name">{{$errors->first('first_name')}}</p>
                        @endif
                        @if ($errors->has('last_name'))
                        <p class="contact-form__error-message-last-name">{{$errors->first('last_name')}}</p>
                        @endif
                    </div>

                    <!-- 性別入力 -->
                    <div class="contact-form__group">
                        <label class="contact-form__label">性別<span class="contact-form__required">※</span></label>
                        <div class="contact-form_gender-input">
                            <div class="contact-form_gender-option"></div>
                            <label class="contact-form__gender-label">
                                <!-- ファイル参照、記載 -->
                                <input class="contact-form__gender-input" name="gender" type="radio" id="male" value="1" {{old('gender')==1 || old('gender')==null ? 'checked' : '' }}>
                                <span class="contact-form__gender-text">男性</span>
                            </label>
                        </div>
                        <div class="contact-form_gender-option">
                            <label class="contact-form__gender-label">
                                <input class="contact-form__gender-input" type="radio" name="gender" id="female" value="2" {{old('gender')==2 ? 'checked' : '' }}>
                                <span class="contact-form__gender-text">女性</span>
                            </label>
                        </div>
                        <div class="contact-form_gender-option">
                            <label class="contact-form__gender-label" for="other">
                                <input class="contact-form__gender-input" type="radio" name="gender" id="other" value="3" {{old('gender')==3 ? 'checked' : '' }}>
                                <span class="contact-form__gender-text">その他</span>
                            </label>
                        </div>
                    </div>
                    <p class="contact-form__error-message">
                    @error('gender')
                    {{ $message }}
                    @enderror
                    </p>
                </div>

                <!-- メールアドレス入力 -->
                <div class="contact-form__group">
                    <label class="contact-form__label" for="email">メールアドレス<span class="contact-form__required">※</span>
                    </label>
                    <input class="contact-form__input" type="email" name="email" id="email" value="{{ old('email') }}" placeholder="例：test@example.com">
                    <p class="contact-form__error-message">
                    @error('email')
                    {{ $message }}
                    @enderror
                    </p>
                </div>

                <!-- 電話番号入力 -->
                <div class="contact-form__group">
                    <label class="contact-form__label" for="tel">電話番号<span class="contact-form__required">※</span></label>
                    <div class="contact-form_tel-inputs">
                        <input class="contact-form__input contact-form__tel-input" type="tel" name="tel_1" id="tel" value="{{ old('tel_1') }}">
                        <span>-</span>
                        <input class="contact-form__input contact-form__tel-input" type="tel" name="tel_2" id="tel" value="{{ old('tel_2') }}">
                        <span>-</span>
                        <input class="contact-form__input contact-form__tel-input" type="tel" name="tel_3" id="tel" value="{{ old('tel_3') }}">
                    </div>
                    <p class="contact-form__error-message">
                        @if ($errors->has('tel_1'))
                        {{$errors->first('tel_1')}}
                        @elseif ($errors->has('tel_2'))
                        {{$errors->first('tel_2')}}
                        @else
                        {{$errors->first('tel_3')}}
                        @endif
                    </p>
                </div>

                <!-- 住所入力 -->
                <div class="contact-form__group">
                    <label class="contact-form__label" for="address">住所<span class="contact-form__required">※</span>
                    </label>
                    <input class="contact-form__input" type="text" name="address" id="address" value="{{ old('address') }}" placeholder="例：東京都渋谷区千駄ヶ谷1-2-3">
                    <p class="contact-form__error-message">
                    @error('address')
                    {{ $message }}
                    @enderror
                    </p>
                </div>

                <!-- 建物入力 -->
                <div class="contact-form__group">
                    <label class="contact-form__label" for="building">建物</label>
                    <input class="contact-form__input" type="text" name="building" id="building" value="{{ old('building') }}" placeholder="例：千駄ヶ谷マンション101">
                </div>

                <!-- お問い合わせ入力 -->
                <div class="contact-form__group">
                    <label class="contact-form__label" for="">お問合せの種類<span class="contact-form__required">※</span>
                    </label>
                    <!-- お問い合わせカテゴリ -->
                    <div class="contact-form_select-inner">
                        <select class="contact-form_select" name="category_id" id="">
                            <option disabled selected>選択してください</option>
                            @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ old('category_id')==$category->id ? 'selected' : '' }}>{{$category->content }}</option>
                            @endforeach
                        </select>
                    </div>
                    <p class="contact-form__error-message">
                    @error('category_id')
                    {{ $message }}
                    @enderror
                    </p>
                </div>

                <!-- お問い合わせ内容入力 -->
                <div class="contact-form__group">
                    <label class="contact-form__label" for="detail">お問合せ内容<span class="contact-form__required">※</span>
                    </label>
                    <!-- textareaタグ は、複数行のテキストを入力できるフォーム -->
                    <textarea class="contact-form__textarea" name="detail" id="" cols="30" rows="10" placeholder="お問い合わせ内容をご記載ください">{{ old('detail') }}</textarea>
                    <p class="contact-form__error-message">
                    @error('detail')
                    {{ $message }}
                    @enderror
                    </p>
                </div>
                <input class="register-form_btn btn" type="submit" value="確認画面">
            </form>
        </div>
</div>
@endsection