<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'gender' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'phone_number' => 'required|string|regex:/^0[789]0\d{8}$/',
            'add' =>'required',
            'message' => 'required|string|max:120',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '姓を入力してください',
            'name.required' => '名を入力してください',
            'gender.required' => '性別を選択してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.email' => 'メールアドレスは「ユーザー名@ドメイン」形式で入力してください',
            'phone_number.required'=>'電話番号を入力してください',
            'phone_number.phone_number' => '電話番号は5桁までの数字で入力してください',
            'add。required' =>'住所を入力してください',
            'message.required' => 'お問い合わせ内容を入力してください',
            'message.message' => 'お問合せ内容は120文字以内で入力してください',
        ];
    }
}