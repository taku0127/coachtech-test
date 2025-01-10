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
                    <input type="hidden" name="last_name" value="{{ $contact['last_name'] }}"> <input type="hidden" name="first_name" value="{{ $contact['first_name'] }}">
                    {{ $contact['last_name'] }}　{{ $contact['first_name'] }}
                </td>
            </tr>
            <tr class="p-confirm_table_tr">
                <th class="p-confirm_table_th"><p class="p-confirm_table_th_txt">性別</th>
                <td class="p-confirm_table_td">
                    <input type="hidden" name="gender" value="{{ $contact['gender'] }}">
                    @if ($contact['gender'] == 1)
                        男性
                    @elseif ($contact['gender'] ==2)
                        女性
                    @else
                        その他
                    @endif
                </td>
            </tr>

            <tr class="p-confirm_table_tr">
                <th class="p-confirm_table_th"><p class="p-confirm_table_th_txt">メールアドレス</th>
                <td class="p-confirm_table_td">
                    <input type="hidden" name="email" value="{{ $contact['email'] }}">
                    {{ $contact['email'] }}
                </td>
            </tr>

            <tr class="p-confirm_table_tr">
                <th class="p-confirm_table_th"><p class="p-confirm_table_th_txt">電話番号</th>
                <td class="p-confirm_table_td --tel">
                    <input type="hidden" name="tel" value="{{ $contact['tel1'].$contact['tel2'].$contact['tel3'] }}">
                    <input type="hidden" name="tel1" value="{{ $contact['tel1'] }}">
                    <input type="hidden" name="tel2" value="{{ $contact['tel2'] }}">
                    <input type="hidden" name="tel3" value="{{ $contact['tel3'] }}">
                    {{ $contact['tel1'].$contact['tel2'].$contact['tel3'] }}
                </td>
            </tr>

            <tr class="p-confirm_table_tr">
                <th class="p-confirm_table_th"><p class="p-confirm_table_th_txt">住所</th>
                <td class="p-confirm_table_td">
                    <input type="hidden" name="address" value="{{ $contact['address'] }}">
                    {{ $contact['address'] }}
                </td>
            </tr>

            <tr class="p-confirm_table_tr">
                <th class="p-confirm_table_th"><p class="p-confirm_table_th_txt">建物名</th>
                <td class="p-confirm_table_td">
                    <input type="hidden" name="building" value="{{ $contact['building'] }}">
                    {{ $contact['building'] }}
                </td>
            </tr>

            <tr class="p-confirm_table_tr">
                <th class="p-confirm_table_th"><p class="p-confirm_table_th_txt">お問い合わせの種類</th>
                <td class="p-confirm_table_td">
                    <input type="hidden" name="category_id" value="{{ $contact['category_id'] }}">
                    {{ $category['content'] }}
                </td>
            </tr>

            <tr class="p-confirm_table_tr">
                <th class="p-confirm_table_th"><p class="p-confirm_table_th_txt">お問い合わせ内容</th>
                <td class="p-confirm_table_td">
                    <input type="hidden" name="detail" value="{{ $contact['detail'] }}">
                    {{ $contact['detail'] }}
                 </td>
            </tr>
        </tbody>
      </table>
      <div class="p-confirm_btnWrap">
        <input type="submit" value="送信" class="c-btn">
        <button type="submit" name="back" href="/" class="p-confirm_link" value="back">修正</button>
      </div>
    </form>
</div>
@endsection
