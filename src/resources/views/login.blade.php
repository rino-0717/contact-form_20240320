@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
<main>
    <div class="contact-form__content">
        <div class="contact-form__heading">
            <div class="header-utilities">
                <h2>Login</h2>
                <nav>
                    <ul class="header_nav">
                        <li class="header_nav_item">
                            <a class="header-nav__link" href="/login">register</a>
                            <button onclick="location.href='login.blade.php'">register</button>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <form class="form" action="/login" method="post">
            @csrf
                <div class="box">
                    <div class="form__group">
                        <div class="form__group-title">
                            <span class="form__label--item">メールアドレス</span>
                        </div>
                        <div class="form__group-content">
                            <div class="container">
                                <div class="form__input--text">
                                    <input type="text" name="name" placeholder="例:test@example.com" value="{{ old('name') }}" />
                                </div>
                                <div class="form__error">
                                    @error('email')
                                    {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="form__group">
                            <div class="form__group-title">
                                <span class="form__label--item">パスワード</span>
                            </div>
                            <div class="form__group-content">
                                <div class="container">
                                    <div class="form__input--text">
                                        <input type="text" name="name" placeholder="例:coachtech1106" value="{{ old('name') }}" />
                                    </div>
                                    <div class="form__error">
                                        @error('password')
                                        {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form__button">
                                <button class="form__button-submit" type="submit">ログイン</button>
                            </div>
                        </div>
                    </div>
        </form>
    </div>
</main>
@endsection