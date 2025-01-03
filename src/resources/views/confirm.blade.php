@extends('layouts.default')

@section('title','お問い合わせフォームの確認画面')
@section('h1','Confirm')
@section('css')
<link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection
@section('content')
<div class="p-confirm">
    <form action="/thanks" method="POST">
      @csrf
      <table class="p-confirm_table">
        <tbody>
            <tr class="p-confirm_table_tr">
                <th class="p-confirm_table_th"><p class="p-confirm_table_th_txt">お名前</th>
                <td class="p-confirm_table_td">
                    山田　太郎
                </td>
            </tr>
            <tr class="p-confirm_table_tr">
                <th class="p-confirm_table_th"><p class="p-confirm_table_th_txt">性別</th>
                <td class="p-confirm_table_td">
                    山田　太郎
                </td>
            </tr>

            <tr class="p-confirm_table_tr">
                <th class="p-confirm_table_th"><p class="p-confirm_table_th_txt">メールアドレス</th>
                <td class="p-confirm_table_td">
                    山田　太郎
                </td>
            </tr>

            <tr class="p-confirm_table_tr">
                <th class="p-confirm_table_th"><p class="p-confirm_table_th_txt">電話番号</th>
                <td class="p-confirm_table_td --tel">
                    山田　太郎
                </td>
            </tr>

            <tr class="p-confirm_table_tr">
                <th class="p-confirm_table_th"><p class="p-confirm_table_th_txt">住所</th>
                <td class="p-confirm_table_td">
                    山田　太郎
                </td>
            </tr>

            <tr class="p-confirm_table_tr">
                <th class="p-confirm_table_th"><p class="p-confirm_table_th_txt">建物名</th>
                <td class="p-confirm_table_td">
                    山田　太郎
                </td>
            </tr>

            <tr class="p-confirm_table_tr">
                <th class="p-confirm_table_th"><p class="p-confirm_table_th_txt">お問い合わせの種類</th>
                <td class="p-confirm_table_td">
                    山田　太郎
                </td>
            </tr>

            <tr class="p-confirm_table_tr">
                <th class="p-confirm_table_th"><p class="p-confirm_table_th_txt">お問い合わせ内容</th>
                <td class="p-confirm_table_td">
                    山田　太郎
                 </td>
            </tr>
        </tbody>
      </table>
      <div class="p-confirm_btnWrap">
        <input type="submit" value="送信" class="c-btn">
        <a href="" class="p-confirm_link">修正</a>
      </div>
    </form>
</div>
@endsection
