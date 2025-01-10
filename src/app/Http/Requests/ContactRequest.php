<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            //
            'last_name' => 'required|max:255',
            'first_name' => 'required|max:255',
            'gender' => 'required',
            'email' => 'required|email|max:255',
            'tel1' => 'required|regex:/^[0-9]+$/|max:5',
            'tel2' => 'required|regex:/^[0-9]+$/|max:5',
            'tel3' => 'required|regex:/^[0-9]+$/|max:5',
            'address' => 'required|max:255',
            'category_id' => 'required',
            'detail' => 'required|max:120',
        ];
    }

    public function messages(){
        return [
            'last_name.required' => '姓を入力してください',
            'last_name.max' => 'お名前(姓)は255文字以下で入力してください',
            'first_name.required' => '名を入力してください',
            'first_name.max' => 'お名前(名)は255文字以下で入力してください',
            'gender.required' => '性別を選択してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.email' => 'メールアドレスはメール形式で入力してください',
            'email.max' => 'メールアドレスは255文字以下で入力してください',
            'tel1.required' => '電話番号を入力してください',
            'tel1.regex' => '電話番号は5桁までの数字で入力してください',
            'tel1.max' => '電話番号は5桁までの数字で入力してください',
            'tel2.required' => '電話番号を入力してください',
            'tel2.regex' => '電話番号は5桁までの数字で入力してください',
            'tel2.max' => '電話番号は5桁までの数字で入力してください',
            'tel3.required' => '電話番号を入力してください',
            'tel3.regex' => '電話番号は5桁までの数字で入力してください',
            'tel3.max' => '電話番号は5桁までの数字で入力してください',
            'address.required' => '住所を入力してください',
            'address.max' => '住所は255文字以下で入力してください',
            'category_id.required' => 'お問い合わせの種類を選択してください',
            'detail.required' => 'お問い合わせ内容を入力してください',
            'detail.max' => 'お問合せ内容は120文字以内で入力してください',
        ];

    }
}
