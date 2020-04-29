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
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/contacts.css">
    <link rel="stylesheet" href="css/review.css">
    @yield ('css')
    <!-- Styles -->
    <style>
    </style>
</head>
<body>
    @section('header')
        <div class="header">
            <a href="/"><img class="logo-img" src="/css/logo.png" alt="logo"></a>
            <ul id="main-nav">
                <li>Видеосъемка<i class="fas fa-angle-down"></i></li>
                <li>Аренда<i class="fas fa-angle-down"></i></li>
                <li>Новости</li>
            </ul>
            <ul class="side-nav">
                <li><a href="/contacts">Контакты</a></li>
                <li><a href="/review">Отзывы</a></li>
            </ul>
        </div>

    @yield ('content')

    @section('footer')
        <div class="footer">
            <div class="left-footer">
                <img src="/css/logo.png" alt="logo">
                <ul>
                    <li>Видеосьемка</li>
                    <li>Аренда</li>
                    <li>Новости</li>
                </ul>
            </div>
            <div class="right-footer">
                <p><strong>Event service &Video Production.<br>Artline Video</strong></p>
               <div class="ul-flex">
                    <ul class="media-icons">
                        <li class="facebook"><a href="#"><img src="/css/facebook.png"></a></li>
                        <li class="instagram"><a href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                    <ul class="information">
                        <li><a href="#">info@artline-video.com.ua</a></li>
                        <li>+38 (067)112-15-14</li>
                        <li>+38 (093)011-52-73</li>
                    </ul>
               </div>
            </div>
        </div>

    @yield ('js')
</body>
</html>
