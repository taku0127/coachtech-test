@extends('layouts.default')

@section('title','お問い合わせフォーム入力ページ')
@section('h1','Contact')
@section('css')
<link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection
@section('content')
<div class="p-contact">
    <form action="">
      @csrf
      <table class="p-contact_table">
        <tbody>
            <tr class="p-contact_table_tr">
                <th class="p-contact_table_th"><p class="p-contact_table_th_txt">お名前 <span class="p-contact_table_require">※</span></p></th>
                <td class="p-contact_table_td">
                    <input type="text" placeholder="例: 山田" class="p-contact_table_input --name">
                    <input type="text" placeholder="例: 太郎" class="p-contact_table_input --name">
                </td>
            </tr>
            <tr class="p-contact_table_tr">
                <th class="p-contact_table_th"><p class="p-contact_table_th_txt">性別 <span class="p-contact_table_require">※</span></p></th>
                <td class="p-contact_table_td">
                    <label class="p-contact_table_inputRadio">
                        <input type="radio" name="gender" value="男性">男性
                    </label>
                    <label class="p-contact_table_inputRadio">
                        <input type="radio" name="gender" value="女性">女性
                    </label>
                    <label class="p-contact_table_inputRadio">
                        <input type="radio" name="gender" value="その他">その他
                    </label>
                </td>
            </tr>

            <tr class="p-contact_table_tr">
                <th class="p-contact_table_th"><p class="p-contact_table_th_txt">メールアドレス <span class="p-contact_table_require">※</span></p></th>
                <td class="p-contact_table_td">
                    <input type="text" placeholder="例: test@example.com" class="p-contact_table_input">
                </td>
            </tr>

            <tr class="p-contact_table_tr">
                <th class="p-contact_table_th"><p class="p-contact_table_th_txt">電話番号 <span class="p-contact_table_require">※</span></p></th>
                <td class="p-contact_table_td --tel">
                    <input type="text" placeholder="080" class="p-contact_table_input --tel"> -
                    <input type="text" placeholder="1234" class="p-contact_table_input --tel"> -
                    <input type="text" placeholder="5678" class="p-contact_table_input --tel">
                </td>
            </tr>

            <tr class="p-contact_table_tr">
                <th class="p-contact_table_th"><p class="p-contact_table_th_txt">住所 <span class="p-contact_table_require">※</span></p></th>
                <td class="p-contact_table_td">
                    <input type="text" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3" class="p-contact_table_input">
                </td>
            </tr>

            <tr class="p-contact_table_tr">
                <th class="p-contact_table_th"><p class="p-contact_table_th_txt">建物名 <span class="p-contact_table_require">※</span></p></th>
                <td class="p-contact_table_td">
                    <input type="text" placeholder="例: 千駄ヶ谷マンション101" class="p-contact_table_input">
                </td>
            </tr>

            <tr class="p-contact_table_tr">
                <th class="p-contact_table_th"><p class="p-contact_table_th_txt">お問い合わせの種類 <span class="p-contact_table_require">※</span></p></th>
                <td class="p-contact_table_td">
                    <div class="p-contact_table_selectWrap">
                        <select name="" id="" class="p-contact_table_input --select">
                            <option value="">選択してください</option>
                        </select>
                    </div>
                </td>
            </tr>

            <tr class="p-contact_table_tr">
                <th class="p-contact_table_th"><p class="p-contact_table_th_txt">お問い合わせ内容 <span class="p-contact_table_require">※</span></p></th>
                <td class="p-contact_table_td">
                    <textarea name="" id="" cols="30" rows="10" placeholder="お問い合わせ内容をご記載ください" class="p-contact_table_input"></textarea>
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
