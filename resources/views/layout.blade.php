<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Art-Line @yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet" >

    {{--    <link href="{{ asset('css/layout.css')}}" rel="stylesheet">--}}
    <link rel="stylesheet" href="css/layout.css">
    <link rel="stylesheet" href="css/index.css">
    @yield ('css')
    <!-- Styles -->
    <style>
    </style>
</head>
<body>
    @section('header')
        <div class="header">
            <img class="logo-img" src="/css/logo.png" alt="logo">
            <ul class="main-nav">
                <li>Видеосъемка<i class="fas fa-angle-down"></i></li>
                <li>Аренда<i class="fas fa-angle-down"></i></li>
                <li>Новости</li>
            </ul>
            <ul class="side-nav">
                <li><a href="/contacts">Контакты</a></li>
                <li><a href="#">Отзывы</a></li>
            </ul>
        </div>
    @yield ('content')
    @yield ('js')
</body>
</html>
