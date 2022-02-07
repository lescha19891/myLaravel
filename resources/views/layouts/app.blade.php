<!DOCTYPE html>
<html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title-block')</title>
    <link rel="stylesheet" href="/css/app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="all">
@include('inc.header')
@if(Request::is('/'))
    @include('inc.news')
@endif
<div class="row">
    <div class="col-4">
        @include('inc.aside')
    </div>
    <div class="col-8">
        @yield('body')
    </div>
</div>

@include('inc.footer')
</body>
</html>
{{--route('test')--}}
