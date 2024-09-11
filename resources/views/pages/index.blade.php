@extends('layouts.default')

@section('title', 'LifeSport-Accueil')

@section('content')
        <!--hero section start-->
            <section class="hero-equal-height pt-165 ptb-100 gradient-overly test-1" style="background: url('lifesport/assets/img/img-fond/home-2.jpg')no-repeat center center / cover">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-8">
                        <div class="hero-content-wrap text-white text-center position-relative z-index">
                            <h1 class="text-white">Ensemble disons "LIFESPORT"</h1>
                            <p class="lead">"Parce que la vie est un Sport..."</p>
                            <ul class="list-inline header-feature-list mt-5">
                                <li class="list-inline-item text-center p-3">
                                    <span class="fad fa-futbol icon-md d-block mb-3 icon-img-fond"></span>
                                    <h5 class="text-white title-icon">Football</h5>
                                </li>
                                <li class="list-inline-item text-center p-3">
                                    <span class="fas fa-comments icon-md d-block mb-3 icon-img-fond"></span>
                                    <h5 class="text-white title-icon">Debrief</h5>
                                </li>
                                <li class="list-inline-item text-center p-3">
                                    <span class="fas fa-bullhorn icon-md d-block mb-3 icon-img-fond"></span>
                                    <h5 class="text-white title-icon">Actualités</h5>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            <div class="shape-bottom">
                <img src="{{ asset('lifesport/assets/img/curve-shape-top.svg') }}" alt="shape" class="bottom-shape img-fluid">
            </div>
        </section>
        <!--hero section end-->
        {{-- <br> --}}
        <!--domain name block start-->
        <div class="domain-name-block pt-100 mt--165">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <ul class="list-inline domain-list">
                            <li class="list-inline-item menu-rs white-bg custom-shadow">
                                <a target="_BLANK" href="https://www.tiktok.com/@lifes_sport">
                                    <div class="single-domain">
                                        <img src="{{ asset('lifesport/assets/img/social-networks/tiktok.svg') }}" alt="domain" alt="TikTok" class="img-fluid"/>
                                        <div class="domain-price">
                                            <h6 class="sell-price">+930<span
                                                    class="badge badge-danger text-uppercase">K</span></h6>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="list-inline-item menu-rs white-bg custom-shadow">
                                <a target="_BLANK" href="https://www.facebook.com/eLifeSport">
                                    <div class="single-domain">
                                        <img src="{{ asset('lifesport/assets/img/social-networks/facebook.svg') }}" alt="domain" alt="Facebook" class="img-fluid"/>
                                        <div class="domain-price">
                                            <h6 class="sell-price">+130<span
                                                class="badge badge-danger text-uppercase">K</span></h6>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="list-inline-item menu-rs white-bg custom-shadow">
                                <a target="_BLANK" href="https://www.youtube.com/@LIFE__SPORT">
                                    <div class="single-domain">
                                        <img src="{{ asset('lifesport/assets/img/social-networks/youtube.svg') }}" alt="domain" alt="YouTube" class="img-fluid"/>
                                        <div class="domain-price">
                                            <h6 class="sell-price">+90<span
                                                class="badge badge-danger text-uppercase">K</span></h6>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="list-inline-item menu-rs white-bg custom-shadow">
                                <a target="_BLANK" href="https://www.instagram.com/llife_sport?igsh=MTUwYmZvbms5NDhueQ%3D%3D&utm_source=qr">
                                    <div class="single-domain">
                                        <img src="{{ asset('lifesport/assets/img/social-networks/instagram.svg') }}" alt="domain" alt="Instagram" class="img-fluid"/>
                                        <div class="domain-price">
                                            <h6 class="sell-price">+70<span
                                                    class="badge badge-danger text-uppercase">K</span></h6>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="list-inline-item menu-rs white-bg custom-shadow">
                                <a target="_BLANK" href="https://www.threads.net/@llife_sport?xmt=AQGzpWum1ro2fG9aW7UZTiaPu1E4ukNoDuLF8jodmfxgAkA">
                                    <div class="single-domain">
                                        <img src="{{ asset('lifesport/assets/img/social-networks/threads.svg') }}" alt="domain" alt="Threads" class="img-fluid"/>
                                        <div class="domain-price">
                                            <h6 class="sell-price">+10<span
                                                    class="badge badge-danger text-uppercase">K</span></h6>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--domain name block end-->

        <!--feature section start-->
            @include('_partials._about-us')
        <!--feature section end-->

        <!--promo-section section start-->
            @include('_partials._boost-services')
        <!--promo-section section end-->

        <!--services section start-->
            @include('_partials._services')
        <!--services section end-->

        <!--call to action section start-->
        <section class="call-to-action ptb-100" style="background: url('lifesport/assets/img/img-fond/img-2.jpg')no-repeat center center / cover">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-9">
                        <div class="call-to-action-content text-white text-center">
                            <h2 class="text-white">Profitez d'une Consultation Gratuite !</h2>
                            <p class="lead mb-0">L'occasion <strong>unique</strong> pour vous de reprendre le contrôle grâce à notre Expertise.</p>
                            <p><strong>Horaire : Lun-Ven 8h00-19h00 Pm</strong> | <strong>Support Client : Tous les jours 
                                24h/24 7jours/7</strong></p>
                            <div class="action-btns">
                                <a target="_BLANK" href="https://wa.me/message/JWAKAZV73SWIN1" class="btn primary-solid-btn mr-3">Discuter avec-nous <span class="fas fa-comments mr-2"></span></a>
                                <a href="#" class="btn outline-white-btn">Envoyer un E-Mail <span class="fas fa-envelope"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!--call to action section end-->

        <!--pricing with switch section start-->
            @include('_partials._price-packs')
        <!--pricing with switch section end-->

        <!--feature section start-->
            @include('_partials._why-choose')
        <!--feature section end-->

        <!--call to action new style start-->
        <section class="call-to-action ptb-100" style="background: linear-gradient(80deg, #f15d04, #b76a0c) !important">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="cta-new-wrap text-white text-center">
                            <h2 class="text-white">BOOSTEZ VOTRE CROISSANCE !</h2>
                            <p>Optez pour l'expertise sur mesure et prenez le contrôle de votre succès.
                                <br> <strong>Horaire : Lun-Ven 8h00-19h00 Pm</strong> | <strong>Support Client : Tous les jours 
                                24h/24 7jours/7</strong>
                            </p>
                            <div class="action-btns mt-4">
                                <a href="#" class="btn solid-white-btn animated-btn mr-lg-3">Commencez maintenant !</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--call to action new style end-->

        <!--meet our team carousel style start-->
            @include('_partials._teams')
        <!--meet our team carousel style end-->



        <!-- Pour nos vidéos -->
        <section class="our-team-section ptb-50">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-8">
                        <div class="section-heading text-center mb-5">
                            <h2>Vidéos Populaires</h2>
                            <p>C'est pourquoi ensemble disons "<span class="lifesport-name">LIFESPORT</span>"
                            <br>
                            <span class="lifesport-slogan">"Parce que la vie est un Sport..."</span></p>
                        </div>
                    </div>
                </div>
                
                <div class="card-container video">
                    
                    {{-- 1er vidéo --}}
                    <div class="card-video text-center">
                        <blockquote class="tiktok-embed" cite="https://www.tiktok.com/@lifes_sport/video/7316223273459649824" data-video-id="7316223273459649824" style="max-width: 605px;min-width: 325px;" >
                            <section> <a target="_blank" title="@lifes_sport" href="https://www.tiktok.com/@lifes_sport?refer=embed">@lifes_sport</a>RONALDO,  INCONTESTABLEMENT LE GOAT🔥🐐⚽️⁉️
                                <a title="football" target="_blank" href="https://www.tiktok.com/tag/football?refer=embed">#football</a> 
                                <a title="lifesport" target="_blank" href="https://www.tiktok.com/tag/lifesport?refer=embed">#lifesport</a>
                                <a title="foot" target="_blank" href="https://www.tiktok.com/tag/foot?refer=embed">#foot</a>
                                <a title="legend" target="_blank" href="https://www.tiktok.com/tag/legend?refer=embed">#legend</a>
                                <a title="ronaldo" target="_blank" href="https://www.tiktok.com/tag/ronaldo?refer=embed">#ronaldo</a>
                                <a title="messi" target="_blank" href="https://www.tiktok.com/tag/messi?refer=embed">#messi</a>
                                <a title="gaot" target="_blank" href="https://www.tiktok.com/tag/gaot?refer=embed">#gaot</a>
                                <a title="cr7" target="_blank" href="https://www.tiktok.com/tag/cr7?refer=embed">#cr7</a>
                                <a title="cristianoronaldo" target="_blank" href="https://www.tiktok.com/tag/cristianoronaldo?refer=embed">#cristianoronaldo</a>
                                <a title="ronaldofans" target="_blank" href="https://www.tiktok.com/tag/ronaldofans?refer=embed">#ronaldofans</a>
                                <a title="goals" target="_blank" href="https://www.tiktok.com/tag/goals?refer=embed">#goals</a>
                                <a title="championsleague" target="_blank" href="https://www.tiktok.com/tag/championsleague?refer=embed">#championsleague</a>
                                <a target="_blank" title="♬ Sunrise - Official Sound Studio" href="https://www.tiktok.com/music/Sunrise-6618871733141113604?refer=embed">♬ Sunrise - Official Sound Studio</a>
                            </section>
                        </blockquote>
                        <script async src="https://www.tiktok.com/embed.js"></script>
                    </div>

                    {{-- 2eme video --}}
                    <div class="card-video text-center">
                        <blockquote class="tiktok-embed" cite="https://www.tiktok.com/@lifes_sport/video/7334262473605827872" data-video-id="7334262473605827872" style="max-width: 605px;min-width: 325px;" > 
                            <section>
                                <a target="_blank" title="@lifes_sport" href="https://www.tiktok.com/@lifes_sport?refer=embed">@lifes_sport</a>IL N’YA QUE DEUX GOATS🔥🐐⚽️ : LE SEPT7️⃣🇵🇹 et le Dix🔟🇦🇷
                                    <a title="football" target="_blank" href="https://www.tiktok.com/tag/football?refer=embed">#football</a>
                                    <a title="lifesport" target="_blank" href="https://www.tiktok.com/tag/lifesport?refer=embed">#lifesport</a>
                                    <a title="foot" target="_blank" href="https://www.tiktok.com/tag/foot?refer=embed">#foot</a>
                                    <a title="goats" target="_blank" href="https://www.tiktok.com/tag/goats?refer=embed">#goats</a>
                                    <a title="messi" target="_blank" href="https://www.tiktok.com/tag/messi?refer=embed">#messi</a>
                                    <a title="ronaldo" target="_blank" href="https://www.tiktok.com/tag/ronaldo?refer=embed">#ronaldo</a>
                                    <a target="_blank" title="♬ son original - LiFe_SpOrT" href="https://www.tiktok.com/music/son-original-7334262533336894241?refer=embed">♬ son original - LiFe_SpOrT</a>
                                </section>
                        </blockquote>
                        <script async src="https://www.tiktok.com/embed.js"></script>
                    </div>
                    
                    {{-- 3eme video --}}
                    <div class="card-video text-center">
                        <blockquote class="tiktok-embed" cite="https://www.tiktok.com/@lifes_sport/video/7322812663124331808" data-video-id="7322812663124331808" style="max-width: 605px;min-width: 325px;" >
                            <section> <a target="_blank" title="@lifes_sport" href="https://www.tiktok.com/@lifes_sport?refer=embed">@lifes_sport</a> IL ETAIT UNE FOIS : L’ARTISTE ET LE GÉNIE🔥⚽️❤️ LIONEL MESSI ET RONALDINHO 🔥
                                <a title="lifesport" target="_blank" href="https://www.tiktok.com/tag/lifesport?refer=embed">#lifesport</a> 
                                <a title="sport" target="_blank" href="https://www.tiktok.com/tag/sport?refer=embed">#sport</a>
                                <a title="football" target="_blank" href="https://www.tiktok.com/tag/football?refer=embed">#football</a>
                                <a title="foot" target="_blank" href="https://www.tiktok.com/tag/foot?refer=embed">#foot</a>
                                <a title="messi" target="_blank" href="https://www.tiktok.com/tag/messi?refer=embed">#messi</a>
                                <a title="ronaldinho" target="_blank" href="https://www.tiktok.com/tag/ronaldinho?refer=embed">#ronaldinho</a>
                                <a target="_blank" title="♬ son original - LiFe_SpOrT" href="https://www.tiktok.com/music/son-original-7322812687405140769?refer=embed">♬ son original - LiFe_SpOrT</a>
                            </section>
                        </blockquote>
                        <script async src="https://www.tiktok.com/embed.js"></script>
                    </div>
                </div>

                <div class="action-btns galerie mt-4">
                    <a href="#" class="btn primary-solid-btn galerie">Accéder à la Galerie</a>
                </div>
            </div>
        </section>
        <!-- Fin Pour nos vidéos-->


        <!--faq section start-->
        @include('_partials._faq')
        <!--faq section end-->
@endsection
