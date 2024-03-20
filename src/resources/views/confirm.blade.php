@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('content')
<main>
    <class="contact-form__content">
        <div class="contact-form__heading">
            <h2>Confirm</h2>
        </div>
        <form class="form" action="/" method="get">
            @csrf
        <table class="confirm">
        <tr>
            <td>お名前</td>
            <td></td>
        </tr>
        <tr>
            <td>性別</td>
            <td></td>
        </tr>
        <tr>
            <td>メールアドレス</td>
            <td></td>
        </tr>
        <tr>
            <td>電話番号</td>
            <td></td>
        </tr>
        <tr>
            <td>住所</td>
            <td></td>
        </tr>
        <tr>
            <td>建物名</td>
            <td></td>
        </tr>
        <tr>
            <td>お問い合わせの種類</td>
            <td></td>
        </tr>
        <tr>
            <td>お問合せ内容</td>
            <td></td>
        </tr>
        </table>
            <div class="form__button">
                <button class="form__button-submit" type="submit">送信</button>
                <button class="form__button-submit" type="submit">修正</button>
            </div>
        </form>
</main>
@endsection