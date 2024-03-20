@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<main>
    <div class="contact-form__content">
        <div class="contact-form__heading">
            <h2>Contact</h2>
        </div>
        <form class="form" action="/conform" method="post">
            @csrf
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">お名前</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group-content">
                    <div class="container">
                        <div class="form__input--text">
                            <input type="text" name="name" placeholder="例:山田" />
                            <input type="text" name="name" placeholder="例:太郎" />
                        </div>
                        <div class="form__error">
                            <!--バリデーション機能を実装したら記述します。-->
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">性別</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="container">
                            <div class="form__input--text">
                                <input type="radio" name="choices" value="男性" />男性
                                <input type="radio" name="choices" value="女性" />女性
                                <input type="radio" name="choices" value="その他" />その他
                            </div>
                            <div class="form__error">
                                <!--バリデーション機能を実装したら記述します。-->
                            </div>
                        </div>
                    </div>
                    <div class="form__group">
                        <div class="form__group-title">
                            <span class="form__label--item">メールアドレス</span>
                            <span class="form__label--required">※</span>
                        </div>
                        <div class="form__group-content">
                            <div class="container">
                                <div class="form__input--text">
                                    <input type="email" name="email" placeholder="例:test@example.com" />
                                </div>
                                <div class="form__error">
                                    <!--バリデーション機能を実装したら記述します。-->
                                </div>
                            </div>
                        </div>
                        <div class="form__group">
                            <div class="form__group-title">
                                <span class="form__label--item">電話番号</span>
                                <span class="form__label--required">※</span>
                            </div>
                            <div class="form__group-content">
                                <div class="container">
                                    <div class="form__input--text">
                                        <input type="tel" name="tel" placeholder="080-1234-5678" />
                                    </div>
                                    <div class="form__error">
                                        <!--バリデーション機能を実装したら記述します。-->
                                    </div>
                                </div>
                            </div>
                            <div class="form__group">
                                <div class="form__group-title">
                                    <span class="form__label--item">住所</span>
                                    <span class="form__label--required">※</span>
                                </div>
                                <div class="form__group-content">
                                    <div class="container">
                                        <div class="form__input--text">
                                            <input type="tel" name="tel" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" />
                                        </div>
                                        <div class="form__error">
                                            <!--バリデーション機能を実装したら記述します。-->
                                        </div>
                                    </div>
                                </div>
                                <div class="form__group">
                                    <div class="form__group-title">
                                        <span class="form__label--item">建物名</span>
                                    </div>
                                    <div class="form__group-content">
                                        <div class="container">
                                            <div class="form__input--text">
                                                <input type="tel" name="tel" placeholder="例:千駄ヶ谷マンション101" />
                                            </div>
                                            <div class="form__error">
                                                <!--バリデーション機能を実装したら記述します。-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form__group">
                                        <div class="form__group-title">
                                            <span class="form__label--item">お問合せの種類</span>
                                            <span class="form__label--required">※</span>
                                        </div>
                                        <div class="form__group-content">
                                            <div class="container">
                                                <div class="form__input--text">
                                                    <input type="tel" name="tel" placeholder="選択してください" />
                                                </div>
                                                <div class="form__error">
                                                    <!--バリデーション機能を実装したら記述します。-->
                                                </div>
                                            </div>
                                            <div class="form__group">
                                                <div class="form__group-title">
                                                    <span class="form__label--item">お問い合わせ内容</span>
                                                    <span class="form__label--required">※</span>
                                                </div>
                                                <div class="form__group-content">
                                                    <div class="container">
                                                        <div class="form__input--textarea">
                                                            <textarea name="content" placeholder="お問い合わせ内容をご記載ください"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    @foreach ($contacts as $contact)
                                                    <tr>
                                                        <td>{{$contact->id}}</td>
                                                        <td>{{$contact->categry_id}}</td>
                                                        <td>{{$contact->first_name}}</td>
                                                        <td>{{$contact->last_name}}</td>
                                                        <td>{{$contact->gender}}</td>
                                                        <td>{{$contact->email}}</td>
                                                        <td>{{$contact->tell}}</td>
                                                        <td>{{$contact->tell}}</td>
                                                        <td>{{$contact->address}}</td>
                                                        <td>{{$contact->building}}</td>
                                                        <td>{{$contact->detail}}</td>
                                                    </tr>
                                                    @endforeach
                                                </div>
                                                <div class="form__button">
                                                    <button class="form__button-submit" type="submit">確認画面</button>
                                                </div>
        </form>
    </div>
</main>
@endsection