@extends('layouts.default')

@section('title','ログインページ')
@section('h1','Login')
@section('css')
<link rel="stylesheet" href="{{ asset('css/auth.css') }}">
@endsection
@section('header_btn')
<a href="/register" class="c-header_btn">register</a>
@endsection
@section('content')
<div class="p-auth">
    <div class="p-auth_contents">
        <form action="/login" method="POST">
            @csrf
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
                <input type="password" id="password" name="password" placeholder="例: coachtech1106" class="p-auth_input">
                @error('password')
                <p class="p-auth_error">
                {{ $message }}
                </p>
                @enderror
            </div>
            <div class="p-auth_btnBox">
                <input type="submit" value="ログイン" class="c-btn">
            </div>
        </form>
    </div>
</div>
@endsection
