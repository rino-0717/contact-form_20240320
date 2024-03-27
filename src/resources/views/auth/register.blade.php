@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('link')
<a class="header_link" href='/login'>login</a>
@endsection

@section('content')
<div class="register-form">
    <h2 class="register-form_heading content__heading">Register</h2>
    <!-- re -->
        <div class="register-form_inner">
            <form class="register-form_form" action="/register" method="post">
                @csrf
                <div class="register-form_group">
                    <!--labelタグ は、フォーム要素とラベルテキストを関連付けるために使用 -->
                    <label class="register-form__label" for="name">お名前</label>
                    <input class="register-form__input" type="text" name="name" id="name" placeholder="例：山田 太郎">
                    <p class="register-form__error-message">
                        <!-- でエラーメッセージ表示 -->
                        @error('name')
                        {{ $message }}
                        @enderror
                </div>
                <div class="register-form__group">
                    <label class="register-form__label" for="email">メールアドレス</label>
                    <input class="register-form__input" type="mail" name="email" id="email" placeholder="例：test@example.com">
                    <p>
                        @error('email')
                        {{ $message }}
                        @enderror
                    </p>
                </div>
                <div class="register-form__group">
                    <label class="register-form__label" for="password">パスワード</label>
                    <input class="register-form__input" type="password" name="password" id="password" placeholder="例：coachtech1106">
                    <p class="register-form__error-message">
                        @error('password')
                        {{ $message }}
                        @enderror
                    </p>
                </div>
                <input class="register-form_btn btn" type="submit" value="登録">
            </form>
        </div>
</div>
@endsection