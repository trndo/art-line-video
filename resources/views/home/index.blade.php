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
        <h1>header</h1>
    </div>

@endsection
