@extends('layouts.default')

@section('title','お問い合わせフォーム入力ページ')
@section('h1','Contact')
@section('css')
<link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection
@section('content')
<div class="p-contact">
    <form action="/confirm" method="post">
      @csrf
      <table class="p-contact_table">
        <tbody>
            <tr class="p-contact_table_tr">
                <th class="p-contact_table_th"><p class="p-contact_table_th_txt">お名前 <span class="p-contact_table_require">※</span></p></th>
                <td class="p-contact_table_td">
                    <input type="text" name="last_name" placeholder="例: 山田" class="p-contact_table_input --name">
                    <input type="text" name="first_name" placeholder="例: 太郎" class="p-contact_table_input --name">
                </td>
            </tr>
            <tr class="p-contact_table_tr">
                <th class="p-contact_table_th"><p class="p-contact_table_th_txt">性別 <span class="p-contact_table_require">※</span></p></th>
                <td class="p-contact_table_td">
                    <label class="p-contact_table_inputRadio">
                        <input type="radio" name="gender" value="1" checked>男性
                    </label>
                    <label class="p-contact_table_inputRadio">
                        <input type="radio" name="gender" value="2">女性
                    </label>
                    <label class="p-contact_table_inputRadio">
                        <input type="radio" name="gender" value="3">その他
                    </label>
                </td>
            </tr>

            <tr class="p-contact_table_tr">
                <th class="p-contact_table_th"><p class="p-contact_table_th_txt">メールアドレス <span class="p-contact_table_require">※</span></p></th>
                <td class="p-contact_table_td">
                    <input type="text" placeholder="例: test@example.com" name="email" class="p-contact_table_input">
                </td>
            </tr>

            <tr class="p-contact_table_tr">
                <th class="p-contact_table_th"><p class="p-contact_table_th_txt">電話番号 <span class="p-contact_table_require">※</span></p></th>
                <td class="p-contact_table_td --tel">
                    <input type="text" name="tel1" placeholder="080" class="p-contact_table_input --tel"> -
                    <input type="text" name="tel2" placeholder="1234" class="p-contact_table_input --tel"> -
                    <input type="text" name="tel3" placeholder="5678" class="p-contact_table_input --tel">
                </td>
            </tr>

            <tr class="p-contact_table_tr">
                <th class="p-contact_table_th"><p class="p-contact_table_th_txt">住所 <span class="p-contact_table_require">※</span></p></th>
                <td class="p-contact_table_td">
                    <input type="text" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3" name="address" class="p-contact_table_input">
                </td>
            </tr>

            <tr class="p-contact_table_tr">
                <th class="p-contact_table_th"><p class="p-contact_table_th_txt">建物名</p></th>
                <td class="p-contact_table_td">
                    <input type="text" name="building" placeholder="例: 千駄ヶ谷マンション101" class="p-contact_table_input">
                </td>
            </tr>

            <tr class="p-contact_table_tr">
                <th class="p-contact_table_th"><p class="p-contact_table_th_txt">お問い合わせの種類 <span class="p-contact_table_require">※</span></p></th>
                <td class="p-contact_table_td">
                    <div class="p-contact_table_selectWrap">
                        <select name="category_id" id="" class="p-contact_table_input --select">
                            <option value="">選択してください</option>
                            @foreach ($categories as $category)
                            <option value="{{ $category['id'] }}">{{ $category['content'] }}</option>

                            @endforeach
                        </select>
                    </div>
                </td>
            </tr>

            <tr class="p-contact_table_tr">
                <th class="p-contact_table_th"><p class="p-contact_table_th_txt">お問い合わせ内容 <span class="p-contact_table_require">※</span></p></th>
                <td class="p-contact_table_td">
                    <textarea name="detail" id="" cols="30" rows="10" placeholder="お問い合わせ内容をご記載ください" class="p-contact_table_input"></textarea>
                </td>
            </tr>
        </tbody>
      </table>
      <div class="p-contact_btnWrap">
        <input type="submit" value="確認画面" class="c-btn">
      </div>
    </form>
</div>
@endsection
