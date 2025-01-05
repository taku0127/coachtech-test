@extends('layouts.default')

@section('title','登録ページ')
@section('h1','Register')
@section('css')
<link rel="stylesheet" href="{{ asset('css/auth.css') }}">
@endsection
@section('header_btn')
<a href="/login" class="c-header_btn">login</a>
@endsection
@section('content')
<div class="p-auth">
    <div class="p-auth_contents">
        <form action="/register" method="POST">
            @csrf
            <div class="p-auth_inputBox">
                <label for="name" class="p-auth_inputTitle">お名前</label>
                <input type="text" id="name" name="name"  placeholder="例: 山田　太郎" class="p-auth_input" value="{{old('name')}}">
                @error('name')
                <p class="p-auth_error">
                    {{ $message }}
                </p>
                @enderror
            </div>
            <div class="p-auth_inputBox">
                <label for="email" class="p-auth_inputTitle">メールアドレス</label>
                <input type="text" id="email" name="email"  placeholder="例: test@example.com" class="p-auth_input" value="{{old('email')}}">
                @error('email')
                <p class="p-auth_error">
                {{ $message }}
                </p>
                @enderror
            </div>
            <div class="p-auth_inputBox">
                <label for="password" class="p-auth_inputTitle">パスワード</label>
                <input type="text" id="password" name="password" placeholder="例: coachtech1106" class="p-auth_input" value="{{old('password')}}">
                @error('password')
                <p class="p-auth_error">
                {{ $message }}
                </p>
                @enderror
            </div>
            <div class="p-auth_btnBox --register">
                <input type="submit" value="登録" class="c-btn">
            </div>
        </form>
    </div>
</div>
@endsection
