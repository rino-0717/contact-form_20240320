@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('content')
<main>
    <class="contact-form__content">
        <div class="contact-form__heading">
            <h2>Admin</h2>
        </div>
        <form action="find" method="POST">
        @csrf
            <input type="text" name="input" value="{{$input}}">
            <input type="submit" value="検索">
        </form>
            <table>
                <tr>
                    <td>お名前</td>
                </tr>
                <tr>
                    <td>性別</td>
                </tr>
                <tr>
                    <td>メールアドレス</td>
                </tr>
                <tr>
                    <td>電話番号</td>
                </tr>
                <tr>
                    <td>住所</td>
                </tr>
                <tr>
                    <td>建物名</td>
                </tr>
                <tr>
                    <td>お問い合わせの種類</td>
                </tr>
                <tr>
                    <td>お問い合わせ内容</td>
                </tr>
            </table>
            <div class="form__button">
                <button class="form__button-submit" type="submit">送信</button>
                <button class="form__button-submit" type="submit">修正</button>
            </div>
        </form>
</main>
@endsection