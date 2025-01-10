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
                    <input type="text" name="last_name" placeholder="例: 山田" class="p-contact_table_input --name" value="{{ old('last_name') }}">
                    <input type="text" name="first_name" placeholder="例: 太郎" class="p-contact_table_input --name" value="{{ old('first_name') }}">
                    @error('last_name')
                    <p class="p-contact_error">
                        {{ $message }}
                    </p>
                    @enderror
                    @error('first_name')
                    <p class="p-contact_error">
                        {{ $message }}
                    </p>
                    @enderror
                </td>
            </tr>
            <tr class="p-contact_table_tr">
                <th class="p-contact_table_th"><p class="p-contact_table_th_txt">性別 <span class="p-contact_table_require">※</span></p></th>
                <td class="p-contact_table_td">
                    <label class="p-contact_table_inputRadio">
                        <input type="radio" name="gender" value="1" {{ old('gender') == 1 || old('gender') ==  "" ? 'checked' : ''}}>男性
                    </label>
                    <label class="p-contact_table_inputRadio">
                        <input type="radio" name="gender" value="2" {{ old('gender') == 2 ? 'checked' : ''}}>女性
                    </label>
                    <label class="p-contact_table_inputRadio">
                        <input type="radio" name="gender" value="3" {{ old('gender') == 3 ? 'checked' : ''}}>その他
                    </label>
                    @error('gender')
                    <p class="p-contact_error">
                        {{ $message }}
                    </p>
                    @enderror
                </td>
            </tr>

            <tr class="p-contact_table_tr">
                <th class="p-contact_table_th"><p class="p-contact_table_th_txt">メールアドレス <span class="p-contact_table_require">※</span></p></th>
                <td class="p-contact_table_td">
                    <input type="text" placeholder="例: test@example.com" name="email" class="p-contact_table_input" value="{{ old('email') }}">
                    @error('email')
                    <p class="p-contact_error">
                        {{ $message }}
                    </p>
                    @enderror
                </td>
            </tr>

            <tr class="p-contact_table_tr">
                <th class="p-contact_table_th"><p class="p-contact_table_th_txt">電話番号 <span class="p-contact_table_require">※</span></p></th>
                <td class="p-contact_table_td">
                    <div class="p-contact_table_td_telBox">
                        <input type="text" name="tel1" placeholder="080" class="p-contact_table_input --tel" value="{{ old('tel1') }}"> -
                        <input type="text" name="tel2" placeholder="1234" class="p-contact_table_input --tel" value="{{ old('tel2') }}"> -
                        <input type="text" name="tel3" placeholder="5678" class="p-contact_table_input --tel" value="{{ old('tel3') }}">
                    </div>
                    @error('tel1')
                    <p class="p-contact_error">
                        {{ $message }}
                    </p>
                    @enderror
                    @error('tel2')
                    <p class="p-contact_error">
                        {{ $message }}
                    </p>
                    @enderror
                    @error('tel3')
                    <p class="p-contact_error">
                        {{ $message }}
                    </p>
                    @enderror
                </td>
            </tr>

            <tr class="p-contact_table_tr">
                <th class="p-contact_table_th"><p class="p-contact_table_th_txt">住所 <span class="p-contact_table_require">※</span></p></th>
                <td class="p-contact_table_td">
                    <input type="text" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3" name="address" class="p-contact_table_input" value="{{ old('address') }}">
                    @error('address')
                    <p class="p-contact_error">
                        {{ $message }}
                    </p>
                    @enderror
                </td>
            </tr>

            <tr class="p-contact_table_tr">
                <th class="p-contact_table_th"><p class="p-contact_table_th_txt">建物名</p></th>
                <td class="p-contact_table_td">
                    <input type="text" name="building" placeholder="例: 千駄ヶ谷マンション101" class="p-contact_table_input" value="{{ old('building') }}">
                </td>
            </tr>

            <tr class="p-contact_table_tr">
                <th class="p-contact_table_th"><p class="p-contact_table_th_txt">お問い合わせの種類 <span class="p-contact_table_require">※</span></p></th>
                <td class="p-contact_table_td">
                    <div class="p-contact_table_selectWrap">
                        <select name="category_id" id="" class="p-contact_table_input --select">
                            <option value="">選択してください</option>
                            @foreach ($categories as $category)
                            <option value="{{ $category['id'] }}" @if(old('category_id') == $category['id']) selected @endif>{{ $category['content'] }}</option>

                            @endforeach
                        </select>
                    </div>
                    @error('category_id')
                    <p class="p-contact_error">
                        {{ $message }}
                    </p>
                    @enderror
                </td>
            </tr>

            <tr class="p-contact_table_tr">
                <th class="p-contact_table_th"><p class="p-contact_table_th_txt">お問い合わせ内容 <span class="p-contact_table_require">※</span></p></th>
                <td class="p-contact_table_td">
                    <textarea name="detail" id="" cols="30" rows="10" placeholder="お問い合わせ内容をご記載ください" class="p-contact_table_input">{{ old('detail') }}</textarea>
                    @error('detail')
                    <p class="p-contact_error">
                        {{ $message }}
                    </p>
                    @enderror
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
