@extends('layouts.default')

@section('title','管理画面')
@section('h1','admin')
@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection
@section('js')
    <script src="{{asset('js/script.js')}}"></script>
@endsection
@section('header_btn')
<form action="/logout" method="POST">
    @csrf
    <button class="c-header_btn">logout</button>
</form>
@endsection
@section('content')
<div class="p-admin">
    <div class="p-admin_search">
        <form action="/admin/search" method="get">
            @csrf
            <div class="p-admin_searchBlock">
                <input type="text" name="keyword" class="p-admin_search_keyword" placeholder="名前やメールアドレスを入力してください ">
                <select name="gender" class="p-admin_search_select">
                    <option value="">性別</option>
                    <option value="">全て</option>
                    <option value="1">男性</option>
                    <option value="2">女性</option>
                    <option value="3">その他</option>
                </select>
                <select name="category_id" id="" class="p-admin_search_select">
                    <option value="">お問い合わせの種類 </option>
                    @foreach ($categories as $category)
                    <option value="{{ $category['id'] }}">
                        {{ $category['content'] }}
                    </option>
                    @endforeach
                </select>
                <input type="date" class="p-admin_search_select" name="date">
                <input type="submit" value="検索" class="c-btn --search">
                <a href="/admin" class="c-btn --reset">リセット</a>
            </div>
        </form>
    </div>
    <div class="p-admin_btns">
        <p class="p-admin_export">エクスポート</p>

        {{ $contacts->appends(request()->query())->links('pagenate') }}
    </div>
    <div class="p-admin_lists">
        <table class="p-admin_lists_table">
            <tr class="p-admin_lists_table_row --title">
                <th class="p-admin_lists_table_title">お名前 </th>
                <th class="p-admin_lists_table_title">性別 </th>
                <th class="p-admin_lists_table_title">メールアドレス</th>
                <th class="p-admin_lists_table_title" colspan="2">お問い合わせの種類</th>
            </tr>
            @foreach ($contacts as $contact)
            <tr class="p-admin_lists_table_row">
                <td class="p-admin_lists_table_item">{{ $contact['last_name'] }}　{{ $contact['first_name'] }}</td>
                <td class="p-admin_lists_table_item">
                    @if ($contact['gender'] == '1')
                        男性
                    @elseif ($contact['gender'] == '2')
                        女性
                    @else
                        その他
                    @endif
                </td>
                <td class="p-admin_lists_table_item">{{ $contact['email'] }}</td>
                <td class="p-admin_lists_table_item">{{ $contact->category->content }}</td>
                <td class="p-admin_lists_table_item js-modal-open"><p class="p-admin_detailBtn">詳細</p></td>
            </tr>
            @endforeach
        </table>
    </div>
    @foreach ($contacts as $contact)
    <div class="p-admin_modal js-modal" style="display: none">
        <div class="p-admin_modal_content">
            <p class="p-admin_modal_close js-modal-close">×</p>
            <table class="p-admin_modal_table">
                <tr>
                    <th class="p-admin_modal_title">お名前</th>
                    <td class="p-admin_modal_item">{{ $contact['last_name'] }}　{{ $contact['first_name'] }}</td>
                </tr>
                <tr>
                    <th class="p-admin_modal_title">性別</th>
                    <td class="p-admin_modal_item">@if ($contact['gender'] == '1')
                        男性
                    @elseif ($contact['gender'] == '2')
                        女性
                    @else
                        その他
                    @endif</td>
                </tr>
                <tr>
                    <th class="p-admin_modal_title">メールアドレス</th>
                    <td class="p-admin_modal_item">{{ $contact['email'] }}</td>
                </tr>
                <tr>
                    <th class="p-admin_modal_title">電話番号</th>
                    <td class="p-admin_modal_item">{{ $contact['tel'] }}</td>
                </tr>
                <tr>
                    <th class="p-admin_modal_title">住所</th>
                    <td class="p-admin_modal_item">{{ $contact['address'] }}</td>
                </tr>
                <tr>
                    <th class="p-admin_modal_title">建物名</th>
                    <td class="p-admin_modal_item">{{ $contact['building'] }}</td>
                </tr>
                <tr>
                    <th class="p-admin_modal_title">お問い合わせの種類</th>
                    <td class="p-admin_modal_item">{{ $contact->category->content }}</td>
                </tr>
                <tr>
                    <th class="p-admin_modal_title">お問い合わせ内容</th>
                    <td class="p-admin_modal_item --naiyou">{{ $contact['detail'] }}</td>
                </tr>
            </table>
            <div class="p-admin_modal_btn">
                <form action="/delete" method="post">
                @csrf
                @method('DELETE')
                <input type="hidden" name='id' value="{{$contact['id']}}">
                <button type="submit" class="p-admin_deleteBtn">削除</button>
                </form>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection
