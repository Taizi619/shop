<!doctype html>
<html lang="zh">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','DM')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
    <div class="w-screen h-auto">
        <!--导航栏-->
        @include('layouts.header')

        @yield('content')

    </div>
</body>
</html>
