<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
    <link href="{{ asset('css/common.css') }}" rel="stylesheet">
    @yield('css')
    @yield('js')
</head>
<body>
<header class="c-header">
    <div class="c-header_title">FashionablyLate</div>
    @yield('header_btn')
</header>
@if (session('success'))
    <div class="c-notice">
        {{session('success')}}
    </div>
@endif
<main class="c-container">
    <div class="c-title">
        <h1 class="c-title_txt">
            @yield('h1')
        </h1>
    </div>
    @yield('content')
</main>
</body>
</html>
