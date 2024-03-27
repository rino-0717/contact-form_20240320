@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('link')
<a class="header_link" href='/register'>register</a>
@endsection

@section('content')
<div class="login-form">
    <h2 class="login-form_heading content__heading">Login</h2>
    <!--  -->
        <div class="login-form_inner">
            <form class="login-form_form" action="/login" method="post">
                @csrf
                <div class="login-form_group">
                    <!--labelタグ は、フォーム要素とラベルテキストを関連付けるために使用 -->
                    <label class="login-form__label" for="email">メールアドレス</label>
                    <input class="login-form__input" type="mail" name="email" id="email">
                    <p class="register-form__error-message">
                        <!-- でエラーメッセージ表示 -->
                        @error('email')
                        {{ $message }}
                        @enderror
                </div>
                <div class="login-form__group">
                    <label class="login-form__label" for="password">パスワード</label>
                    <input class="login-form__input" type="password" name="password" id="password">
                    <p>
                        @error('password')
                        {{ $message }}
                        @enderror
                    </p>
                </div>
                <input class="login-form_btn btn" type="submit" value="ログイン">
            </form>
        </div>
</div>
@endsection