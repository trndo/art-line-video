@extends ('layout')

@section('title', '| Reviews')

@section ('content')
    <div class="review-line-flex">
        <div class="review-line-vertical"></div>
        <div></div>
    </div>
    <div class="review-text-flex">
        <div class="review-line-vertical"></div>
        <div class="review-text">
            <h1>Отзывы О ARTLINE</h1>
            <div class="review-text-and-pagination">
                <div class="review-text-box-container">
                    <div class="review-text-box">
                        <p>Всем доброго дня! Хочу сказать что была приятно удивлена качеством видео и фото за такую адекватную стоимость .В другом месте вы такую не найдете это точно. Мало того аренда помещения. Вообщем ребята молодцы,удачи вам и процветания!</p>
                        <div class="name-date-flex">
                            <div class="name-date">
                                <p class="name">Яна</p>
                                <p class="date">21 Января 2020</p>
                            </div>
                            <div>
                                <img src="/css/comma.png" alt="comma">
                                <img src="/css/comma.png" alt="comma">
                            </div>
                        </div>
                    </div>
                    <div class="review-text-box">
                        <p>Всем доброго дня! Хочу сказать что была приятно удивлена качеством видео и фото за такую адекватную стоимость .В другом месте вы такую не найдете это точно. Мало того аренда помещения. Вообщем ребята молодцы,удачи вам и процветания!</p>
                        <div class="name-date-flex">
                            <div class="name-date">
                                <p class="name">Яна</p>
                                <p class="date">21 Января 2020</p>
                            </div>
                            <div>
                                <img src="/css/comma.png" alt="comma">
                                <img src="/css/comma.png" alt="comma">
                            </div>
                        </div>
                    </div>
                    <div class="review-text-box">
                        <p>Всем доброго дня! Хочу сказать что была приятно удивлена качеством видео и фото за такую адекватную стоимость .В другом месте вы такую не найдете это точно. Мало того аренда помещения. Вообщем ребята молодцы,удачи вам и процветания!</p>
                        <div class="name-date-flex">
                            <div class="name-date">
                                <p class="name">Яна</p>
                                <p class="date">21 Января 2020</p>
                            </div>
                            <div>
                                <img src="/css/comma.png" alt="comma">
                                <img src="/css/comma.png" alt="comma">
                            </div>
                        </div>
                    </div>
                    <div class="review-text-box">
                        <p>Всем доброго дня! Хочу сказать что была приятно удивлена качеством видео и фото за такую адекватную стоимость .В другом месте вы такую не найдете это точно. Мало того аренда помещения. Вообщем ребята молодцы,удачи вам и процветания!</p>
                        <div class="name-date-flex">
                            <div class="name-date">
                                <p class="name">Яна</p>
                                <p class="date">21 Января 2020</p>
                            </div>
                            <div>
                                <img src="/css/comma.png" alt="comma">
                                <img src="/css/comma.png" alt="comma">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="review-pagination-container">
                    <div class="review-pagination-line"></div>
                    <div class="review-pagination">
                        <span class="current-page">01</span>/03
                    </div>
                    <div class="review-pagination-button">
                        <button><i class="far fa-arrow-alt-circle-left"></i></button>
                        <button><i class="far fa-arrow-alt-circle-right"></i></button>
                    </div>
                </div>
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
