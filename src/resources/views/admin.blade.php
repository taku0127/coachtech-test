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
        <form action="" method="get">
            <div class="p-admin_searchBlock">
                <input type="text" name="text" class="p-admin_search_keyword" placeholder="名前やメールアドレスを入力してください ">
                <select name="" id="" class="p-admin_search_select">
                    <option value="">性別</option>
                </select>
                <select name="" id="" class="p-admin_search_select">
                    <option value="">お問い合わせの種類 </option>
                </select>
                <input type="date" class="p-admin_search_select">
                <input type="submit" value="検索" class="c-btn --search">
                <a href="" class="c-btn --reset">リセット</a>
            </div>
        </form>
    </div>
    <div class="p-admin_btns">
        <p class="p-admin_export">エクスポート</p>
        <ul class="p-admin_pagenate">
            <li class="p-admin_pagenate_link"><</li>
            <li class="p-admin_pagenate_link --active">1</li>
            <li class="p-admin_pagenate_link">2</li>
            <li class="p-admin_pagenate_link">3</li>
            <li class="p-admin_pagenate_link">4</li>
            <li class="p-admin_pagenate_link">5</li>
            <li class="p-admin_pagenate_link">></li>
        </ul>
    </div>
    <div class="p-admin_lists">
        <table class="p-admin_lists_table">
            <tr class="p-admin_lists_table_row --title">
                <th class="p-admin_lists_table_title">お名前 </th>
                <th class="p-admin_lists_table_title">性別 </th>
                <th class="p-admin_lists_table_title">メールアドレス</th>
                <th class="p-admin_lists_table_title" colspan="2">お問い合わせの種類</th>
            </tr>
            <tr class="p-admin_lists_table_row">
                <td class="p-admin_lists_table_item">山田　太郎</td>
                <td class="p-admin_lists_table_item">男性</td>
                <td class="p-admin_lists_table_item">test@example.com</td>
                <td class="p-admin_lists_table_item">商品の交換について</td>
                <td class="p-admin_lists_table_item js-modal-open"><p class="p-admin_detailBtn">詳細</p></td>
            </tr>
            <tr class="p-admin_lists_table_row">
                <td class="p-admin_lists_table_item">山田　太郎</td>
                <td class="p-admin_lists_table_item">男性</td>
                <td class="p-admin_lists_table_item">test@example.com</td>
                <td class="p-admin_lists_table_item">商品の交換について</td>
                <td class="p-admin_lists_table_item js-modal-open"><p class="p-admin_detailBtn">詳細</p></td>
            </tr>
        </table>
    </div>
    <div class="p-admin_modal js-modal" style="display: none">
        <div class="p-admin_modal_content">
            <p class="p-admin_modal_close js-modal-close">×</p>
            <table class="p-admin_modal_table">
                <tr>
                    <th class="p-admin_modal_title">お名前</th>
                    <td class="p-admin_modal_item">山田　太郎1</td>
                </tr>
                <tr>
                    <th class="p-admin_modal_title">性別</th>
                    <td class="p-admin_modal_item">男性</td>
                </tr>
                <tr>
                    <th class="p-admin_modal_title">メールアドレス</th>
                    <td class="p-admin_modal_item">test@example.com</td>
                </tr>
                <tr>
                    <th class="p-admin_modal_title">電話番号</th>
                    <td class="p-admin_modal_item">08012345678</td>
                </tr>
                <tr>
                    <th class="p-admin_modal_title">住所</th>
                    <td class="p-admin_modal_item">東京都渋谷区千駄ヶ谷1-2-3</td>
                </tr>
                <tr>
                    <th class="p-admin_modal_title">建物名</th>
                    <td class="p-admin_modal_item">千駄ヶ谷マンション101</td>
                </tr>
                <tr>
                    <th class="p-admin_modal_title">お問い合わせの種類</th>
                    <td class="p-admin_modal_item">商品の交換について</td>
                </tr>
                <tr>
                    <th class="p-admin_modal_title">お問い合わせ内容</th>
                    <td class="p-admin_modal_item --naiyou">届いた商品が注文した商品ではありませんでした。<br>商品の交換をお願いします。</td>
                </tr>
            </table>
            <div class="p-admin_modal_btn">
                <a href="" class="p-admin_deleteBtn">削除</a>
            </div>
        </div>
    </div>
    <div class="p-admin_modal js-modal" style="display: none">
        <div class="p-admin_modal_content">
            <p class="p-admin_modal_close js-modal-close">×</p>
            <table class="p-admin_modal_table">
                <tr>
                    <th class="p-admin_modal_title">お名前</th>
                    <td class="p-admin_modal_item">山田　太郎2</td>
                </tr>
                <tr>
                    <th class="p-admin_modal_title">性別</th>
                    <td class="p-admin_modal_item">男性</td>
                </tr>
                <tr>
                    <th class="p-admin_modal_title">メールアドレス</th>
                    <td class="p-admin_modal_item">test@example.com</td>
                </tr>
                <tr>
                    <th class="p-admin_modal_title">電話番号</th>
                    <td class="p-admin_modal_item">08012345678</td>
                </tr>
                <tr>
                    <th class="p-admin_modal_title">住所</th>
                    <td class="p-admin_modal_item">東京都渋谷区千駄ヶ谷1-2-3</td>
                </tr>
                <tr>
                    <th class="p-admin_modal_title">建物名</th>
                    <td class="p-admin_modal_item">千駄ヶ谷マンション101</td>
                </tr>
                <tr>
                    <th class="p-admin_modal_title">お問い合わせの種類</th>
                    <td class="p-admin_modal_item">商品の交換について</td>
                </tr>
                <tr>
                    <th class="p-admin_modal_title">お問い合わせ内容</th>
                    <td class="p-admin_modal_item --naiyou">届いた商品が注文した商品ではありませんでした。<br>商品の交換をお願いします。</td>
                </tr>
            </table>
            <div class="p-admin_modal_btn">
                <a href="" class="p-admin_deleteBtn">削除</a>
            </div>
        </div>
    </div>
</div>
@endsection
