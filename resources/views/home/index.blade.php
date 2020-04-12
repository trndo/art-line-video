@extends ('layout')

@section('title', '| About')

@section ('content')
    <div class="main-frame">
        <div class="main-flex-container">
            <div class="left-part">
    {{--            <img class="blur" src="https://images.unsplash.com/photo-1497015289639-54688650d173?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=889&q=80" alt="">--}}
                    <div class="left-bar">
                         <div class="up-line"></div>
                        <div class="left-num">
                            <ul class="pagin">
                                <li>01</li>
                                <li>02</li>
                                <li class="vert">______</li>
                                <li>03</li>
                                <li class="rev-text">Смотри дальше</li>
                                <li><i class="fas fa-long-arrow-alt-down"></i></li>
                            </ul>
                        </div>
                    </div>
                         <div class="full-main-section">
                            <div class="main-section">
                                <div class="main-text">
                                    <div class="text-line"></div>
                                    <div class="text-content">
                                        <p><strong>ПРОДАКШН <br>СТУДИЯ</strong></p>
                                        <p class="text1">Полного цикла</p>
                                        <p class="text2"> Корпоративные фильмы,<br> реклама и клипы</p>
                                    </div>
                                </div>
                                <div class="yellow-line"></div>
                            </div>
                             <div class="free-space">
                                 <div></div>
                                 <div><i class="far fa-arrow-alt-circle-left"></i></div>
                             </div>
                             <div>
                                  <button class="main-btn">Заказать</button>
                             </div>
                        </div>
                     </div>
            <div class="right-part">
                <div class="right-part-flex">
                <div><i class="far fa-arrow-alt-circle-right"></i></div>
                <div></div>
                </div>
            </div>
            <div class="side-bar">
                <div class="line-space" ></div>
                <ul class="media">
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Instagram</a></li>
                </ul>
                <ul class="contacts">
                    <li>+38 (067)112-15-14</li>
                    <li>+38 (093)011-52-73</li>
                    <li><a href="#">info@artline-video.com.ua</a></li>
                </ul>
            </div>
        </div>
        <div>
            <h2 class="about-us-header">О нас</h2>
            <div class="about-us">
                <div class="about-us-text-section">
                    <pre>
Работаем в сфере видео продакшена и пост-продакшена.
Делаем рекламное видео, музыкальные клипы,
корпоративные фильмы.

Обладаем профессиональным видеооборудованием.
Имеется своя фото и видео студия. - Видео для
продвижения вашего бизнеса! - Разработаем идею -
Напишем сценарий - Видеостудия Artline-Video, это
продакшн с многолетним опытом, сильной творческой
командой.
                    </pre>
                    <h2>Услуги</h2>
                </div>
                <div class="about-us-photo-section">
                    <div class="about-us-photo1"></div>
                    <div class="about-us-photo2"></div>
                </div>
            </div>
        </div>
        <div class="services">
            <ul class="services-list">
                <li>Видеосъемка</li>
                <li>Аренда</li>
            </ul>
            <div class="services-cards">
                <div class="services-card1">
                    <div class="yellow-background">
                        <div class="vl1">
                            <div class="vl2">
                                <div class="vl3"></div>
                            </div>
                        </div>
                        <p>В компании, где работает большо
                            <br>
                            коллектив, часто не хватает объединения и
                            <br> дружбы. Ведь очень сложно найти что-то
                            <br> общее между столь разными людьми.
                        </p>
                        <h2>Корпоративное видео</h2>
                    </div>
                    <div class="services-card1-img-background"></div>
                </div>
                <div class="services-card2 overlay">
                    <div class="vl1">
                        <div class="vl2">
                            <div class="vl3"></div>
                        </div>
                    </div>
                    <h2>Рекламная съемка</h2>
                </div>
                <div class="services-card3 overlay">
                    <div class="vl1">
                        <div class="vl2">
                            <div class="vl3"></div>
                        </div>
                    </div>
                    <h2>Съмка за кадром</h2>
                </div>
            </div>
        </div>
    </div>

@endsection
