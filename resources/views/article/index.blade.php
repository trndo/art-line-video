@extends ('layout')

@section('title', '| Articles')

@section ('content')
    <div class="article-line-flex">
        <div class="article-line-vertical"></div>
        <div></div>
    </div>
    <div class="article">
        <div class="article-line-vertical"></div>
        <div class="article-container">
            <h1>Новости</h1>
            <div class="article-img-and-text">
                <div class="article-img-conatiner">
                    <div class="article-img">
                        <div class="article-img-text">
                            <p class="article-date">21 Января 2020</p>
                            <p class="article-header">Видеосъемка интервью</p>
                        </div>
                    </div>
                    <div class="article-side-text-container">
                        <div class="article-side-text">
                            <p class="article-date">21 Января 2020</p>
                            <p class="article-header"><strong>Видеосъемка интервью</strong><span class="article-arrow"><img src="/css/article-arrow-right.png" alt="article-arrow"></span></p>
                            <p class="article-text">Нами была осуществлена очередная видеосъемка для одной коммерческой организации с использованием звукозаписывающей техники для реализации хорошего интервью.</p>
                        </div>
                        <div class="article-side-text">
                            <p class="article-date">21 Января 2020</p>
                            <p class="article-header"><strong>Новогоднее видео компании юпитер</strong> <span class="article-arrow"><img src="/css/article-arrow-right.png" alt="article-arrow"></span></p>
                            <p class="article-text">Нами была осуществлена очередная видеосъемка для одной коммерческой организации с использованием звукозаписывающей техники для реализации хорошего интервью.</p>
                        </div>
                    </div>
                </div>
                <div class="article-center-text">
                    <p class="article-date">21 Января 2020</p>
                    <p class="article-header"><strong>Новогоднее видео компании юпитер</strong> <span class="article-arrow"><img src="/css/article-arrow-right.png" alt="article-arrow"></span></p>
                    <p class="article-text">Нами была осуществлена очередная видеосъемка для одной коммерческой организации с использованием звукозаписывающей техники для реализации хорошего интервью.</p>
                </div>
                <div class="article-center-text">
                    <p class="article-date">21 Января 2020</p>
                    <p class="article-header"><strong>Новогоднее видео компании юпитер</strong> <span class="article-arrow"><img src="/css/article-arrow-right.png" alt="article-arrow"></span></p>
                    <p class="article-text">Нами была осуществлена очередная видеосъемка для одной коммерческой организации с использованием звукозаписывающей техники для реализации хорошего интервью.</p>
                </div>
            </div>
            <div class="article-pagination">
                <div class="article-page-indicator">
                    <div class="active-indicator"></div>
                    <div class="indicator"></div>
                </div>
                <p>Следующая страница</p>
                <button><img src="/css/article-arrow-left.png" alt="article-arrow"></button>
                <button><img src="/css/article-arrow-right.png" alt="article-arrow"></button>
            </div>
        </div>
    </div>



    <script type="text/javascript">
       const x = document.getElementsByClassName("change-color");
        for (let i = 0; i<x.length; i++) {
            x[i].style.color="#3c3c3c";
        }
    </script>
@endsection
