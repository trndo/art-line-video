@extends ('layout')

@section('title', '| Contacts')

@section ('content')
    <div class="main-frame-full overlay">
        <div class="flex-line">
            <div class="vertical-line"></div>
            <div></div>
        </div>
        <div class="flex-text">
            <div class="vertical-line"></div>
            <h1>КОНТАКТЫ</h1>
        </div>
    </div>
    <div class="contacts-flex">
        <div></div>
        <div class="contact-box">
            <ul>
                <li class="phone-number">+38 (067) 112-15-14</li>
                <li class="phone-number">+38 (093) 011-52-73</li>
                <li>email: info@artline-video.com.ua</li>
            </ul>
            <ul>
                <li><a href="">facebook</a></li>
                <li><a href="https://www.instagram.com/artline_video_rent">https://www.instagram.com/artline_video_rent</a></li>
                <li>Адрес офиса: г. Киев, ул. Николая Кибальчича 2А </li>
            </ul>
        </div>
        <div></div>
    </div>
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d20355.27748307058!2d30.470827149999998!3d50.377560949999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sua!4v1588067007988!5m2!1sru!2sua" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

    </div>
    <div class="pos">
    <div class="place-card">
        <div></div>
        <div class="place-img">
            <div class="vl1 pa">
                <div class="vl2">
                    <div class="vl3"></div>
                </div>
            </div>
        </div>
    </div>
        <div class="place-text">

            <p>г.Киев,<br>ул.Николая Кибальчича 2А</p>
        </div>
    </div>


@endsection
