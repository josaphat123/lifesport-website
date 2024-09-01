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
                                    <span class="fad fa-futbol icon-md d-block mb-3"></span>
                                    <h5 class="text-white">Football</h5>
                                </li>
                                <li class="list-inline-item text-center p-3">
                                    <span class="fas fa-comments icon-md d-block mb-3"></span>
                                    <h5 class="text-white">Debrief</h5>
                                </li>
                                <li class="list-inline-item text-center p-3">
                                    <span class="fas fa-bullhorn icon-md d-block mb-3"></span>
                                    <h5 class="text-white">Actualités</h5>
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
                            {{-- <li class="list-inline-item white-bg custom-shadow">
                                <a href="#">
                                    <div class="single-domain">
                                    <img src="{{ asset('lifesport/assets/img/online.png') }}" alt="domain" class="img-fluid" />
                                        <div class="domain-price">
                                            <h6 class="sell-price">$2.56 <span
                                                    class="badge badge-danger text-uppercase">Sell</span></h6>
                                            <span class="old-price">$29.95</span>
                                        </div>
                                    </div>
                                </a>
                            </li> --}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--domain name block end-->

        <!--feature section start-->
        <section class="feature-section ptb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 col-lg-6">
                        <div class="cta-new-wrap">
                            <h2>Qui Sommes-nous ?</h2>
                            <p class="lead">Crée et lancée en Avril 2023, <strong>LIFESPORT</strong> est avant tout une <strong>Web TV Sportive</strong> ayant pour mission première et à long terme, la mise 
                                en lumière du <strong>Sport Africain</strong> dans sa globalité.
                                {{-- <br><br>
                                Notre particularité se trouve dans la régularité à produire un contenu éducatif de qualité.</p> --}}
                            <ul class="list-unstyled tech-feature-list">
                                <li class="py-1"><span class="fas fa-globe mr-2 color-primary"></span><strong>Une Audience</strong> partout dans le Monde.</li>
                                <li class="py-1"><span class="fas fa-user-friends mr-2 color-primary"></span><strong>+ 2.5 Millions</strong> de personnes touchées par jours.</li>
                                <li class="py-1"><span class="fas fa-share-alt mr-2 color-primary"></span><strong>LIFESPORT</strong> est présent sur 5 Grands réseaux réseaux.</li>
                                <li class="py-1"><span class="fas fa-clock mr-2 color-primary"></span><strong>Disponible</strong> 24h24 et 7jours/7.</li>
                                {{-- <li class="py-1"><span class="ti-control-forward mr-2 color-primary"></span><strong>Mise en avant</strong> des talents africains émergents</li>
                                <li class="py-1"><span class="ti-control-forward mr-2 color-primary"></span><strong>Reportages exclusifs</strong> sur des événements sportifs africains</li>
                                <li class="py-1"><span class="ti-control-forward mr-2 color-primary"></span><strong>Contenu éducatif</strong> et analytique pour les fans et les athlètes</li>
                                <li class="py-1"><span class="ti-control-forward mr-2 color-primary"></span><strong>Interviews</strong> avec des figures sportives emblématiques</li>
                                <li class="py-1"><span class="ti-control-forward mr-2 color-primary"></span><strong>Couverture 24/7</strong> des actualités sportives africaines</li> --}}
                            </ul>
                            <div class="action-btns mt-4">
                                <a href="#download" class="btn primary-solid-btn animated-btn mr-lg-3">Boostez votre visibilité !</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 div-im-1" >
                        <div class="cta-new-wrap">
                            <img src="{{ asset('lifesport/assets/img/img-fond/img-1.jpg') }}" alt="hosting" class="img-fluid img-1" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--feature section end-->

        <!--promo-section section start-->
        <section class="promo-section ptb-50">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="section-heading text-center mb-md-0 mb-lg-5">
                            <h2>Propulsez votre marque !</h2>
                            <p class="lead">Touchez au moins <strong>300K personnes/Jours</strong> grâce à <strong>LIFESPORT SERVICES</strong>.
                            <br>
                            Nous maximisons l'engagement autour de votre marque et bénéficiez de notre expertise pour propulser vos activités <strong>24h/24, 7j/7 !</strong>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-lg-4">
                        <a href="#">
                            <div class="single-promo-2 single-promo-hover rounded-custom text-center white-bg p-5 h-100">
                                <div class="circle-icon">
                                    <span class="fas fa-chart-line text-white"></span>
                                </div>
                                <h5>Publicité Internationale</h5>
                                <p>Touchez au moins <strong>100K Personnes/Jours</strong> dans le Pays ou la Ville de votre choix.
                                <br>
                                Sans vous déplacer !</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <a href="#">
                            <div class="single-promo-2 single-promo-hover rounded-custom text-center white-bg p-5 h-100">
                                <div class="circle-icon">
                                    <span class="fas fa-globe text-white"></span>
                                </div>
                                <h5>Community Management Avancé</h5>
                                <p>Nous façonnons votre image en ligne, tout en développant une audience
                                fidèle et une communauté engagée.</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <a href="#">
                            <div class="single-promo-2 single-promo-hover rounded-custom text-center white-bg p-5 h-100">
                                <div class="circle-icon">
                                    <span class="fas fa-code text-white"></span>
                                </div>
                                <h5>Développement d'Applications</h5>
                                <p>Nous gérons l'intégralité de la Conception, Développement, Déploiement, de votre
                                <strong>Site Web ou Application Web/Mobile</strong></p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!--promo-section section end-->

        <!--services section start-->
        <section class="our-services ptb-100 gray-light-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="section-heading text-center mb-5 mb-sm-5 mb-md-3 mb-lg-3">
                            <h2>L'intégralité de nos Services</h2>
                            <p class="lead">Nos services sont variés, passant par la Publicité,
                            le Développement d'Applications jusqu'à</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="single-service-plane text-center rounded white-bg shadow-sm p-5 mt-md-4 mt-lg-4">
                            <img src="{{ asset('lifesport/assets/img/icon-shared-hosting.svg') }}" alt="shared hosting" class="img-fluid mb-4" width="45" />
                            <div class="service-plane-content">
                                <h3 class="h5">Shared Hosting</h3>
                                <p>Our most popular product! Shared Web Hosting gives you a fast SSD
                                    storage hosting.</p>
                            </div>
                            <div class="action-wrap mt-3">
                                <p>Starting at: <strong>$2.59/mo</strong></p>
                                <a href="#" class="btn-link">View Details <span class="fas fa-long-arrow-alt-right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="single-service-plane text-center rounded white-bg shadow-sm p-5 mt-md-4 mt-lg-4">
                            <img src="assets/img/icon-wordpress-hosting.svg" alt="shared hosting" class="img-fluid mb-4" width="45" />
                            <div class="service-plane-content">
                                <h3 class="h5">WordPress Hosting</h3>
                                <p>Get up and running fast with Optimized performance easy
                                    maintenance hosting.</p>
                            </div>
                            <div class="action-wrap mt-3">
                                <p>Starting at: <strong>$2.59/mo</strong></p>
                                <a href="#" class="btn-link">View Details <span class="fas fa-long-arrow-alt-right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="single-service-plane text-center rounded white-bg shadow-sm p-5 mt-md-4 mt-lg-4">
                            <img src="assets/img/icon-vps-hosting.svg" alt="shared hosting" class="img-fluid mb-4" width="45" />
                            <div class="service-plane-content">
                                <h3 class="h5">VPS Hosting</h3>
                                <p>Virtual Private Servers with ultra-fast SSDs and flexibility, Ubuntu, IPv6,
                                    Nginx and more.</p>
                            </div>
                            <div class="action-wrap mt-3">
                                <p>Starting at: <strong>$12.00/mo</strong></p>
                                <a href="#" class="btn-link">View Details <span class="fas fa-long-arrow-alt-right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="single-service-plane text-center rounded white-bg shadow-sm p-5 mt-md-4 mt-lg-4">
                            <img src="assets/img/icon-website-builder.svg" alt="shared hosting" class="img-fluid mb-4" width="45" />
                            <div class="service-plane-content">
                                <h3 class="h5">WP Website Builder</h3>
                                <p>No code required! Build your site confidently with design tools that WordPress
                                    website build.</p>
                            </div>
                            <div class="action-wrap mt-3">
                                <p>Starting at: <strong>$2.59/mo</strong></p>
                                <a href="#" class="btn-link">View Details <span class="fas fa-long-arrow-alt-right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="single-service-plane text-center rounded white-bg shadow-sm p-5 mt-md-4 mt-lg-4">
                            <img src="assets/img/icon-dadicate-hosting.svg" alt="shared hosting" class="img-fluid mb-4" width="45" />
                            <div class="service-plane-content">
                                <h3 class="h5">Dedicated Hosting</h3>
                                <p>Fast web servers to run your applications with root and a 100% Guarantee
                                    our hosting.</p>
                            </div>
                            <div class="action-wrap mt-3">
                                <p>Starting at: <strong>$145.59/mo</strong></p>
                                <a href="#" class="btn-link">View Details <span class="fas fa-long-arrow-alt-right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="single-service-plane text-center rounded white-bg shadow-sm p-5 mt-md-4 mt-lg-4">
                            <img src="assets/img/icon-cloud-hosting.svg" alt="shared hosting" class="img-fluid mb-4" width="45" />
                            <div class="service-plane-content">
                                <h3 class="h5">Cloud Hosting</h3>
                                <p>Lightning-fast servers with root access, SSD storage and blazing-fast networking hosting.</p>
                            </div>
                            <div class="action-wrap mt-3">
                                <p>Starting at: <strong>$0.0059/mo</strong></p>
                                <a href="#" class="btn-link">View Details <span class="fas fa-long-arrow-alt-right"></span></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>



        <!--services section end-->

        <!--call to action section start-->
        <section class="call-to-action ptb-100 gradient-overlay" style="background: url('assets/img/hero-bg-4.jpg')no-repeat center center / cover">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-9">
                        <div class="call-to-action-content text-white text-center">
                            <h2 class="text-white">Need Some Help?</h2>
                            <p class="lead mb-0">Whether you’re stuck or just want some tips on where to start, hit up our
                                experts anytime.</p>
                            <p>Sales Chat: <strong> MON-FRI 8AM-4PM PT</strong> | Customer Support Chat: Every Day <strong>
                                5:30AM–9:30PM PT</strong></p>
                            <div class="action-btns">
                                <a href="#" class="btn solid-white-btn mr-3">Chat With Us</a>
                                <a href="#" class="btn outline-white-btn">Send us an Email</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!--call to action section end-->

        <!--pricing with switch section start-->
        <section class="pricing-section ptb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="section-heading text-center mb-5">
                            <h2>Managed Our Hosting Price</h2>
                            <p class="lead">
                                Professional hosting at an affordable price. Distinctively recaptiualize principle-centered
                                core competencies through
                                core competencies.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-10 col-sm-8 col-md-7">
                        <div class="text-center mb-5 radio-box-wrap billingCycle">
                            <div class="single-radio-box">
                                <input name="billingPlan" id="monthly-plan" value="monthly" class="radio" type="radio" checked>
                                <label for="monthly-plan"><span class="custom-check"></span> Monthly</label>
                            </div>
                            <div class="single-radio-box">
                                <input name="billingPlan" id="yearly-plan" value="yearly" class="radio" type="radio">
                                <label for="yearly-plan"><span class="custom-check"></span> Yearly</label>
                            </div>
                            <div class="single-radio-box">
                                <input name="billingPlan" id="biannual-plan" value="biannual" class="radio" type="radio">
                                <label for="biannual-plan"><span class="custom-check"></span> Biannual</label>
                            </div>
                            <div class="single-radio-box">
                                <input name="billingPlan" id="triennial-plan" value="triennial" class="radio" type="radio">
                                <label for="triennial-plan"><span class="custom-check"></span> Triennial</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="card text-center single-pricing-pack">
                            <div class="pt-5">
                                <h5 class="mb-0">Cloud Starter</h5>
                                <p class="mb-0">Medium traffic personal sites</p>
                            </div>
                            <div class="card-header pb-4 border-0 pricing-header">
                                <div class="price text-center mb-0 monthly-price">$19<span>/month</span></div>
                                <div class="price text-center mb-0 yearly-price">$69<span>/yearly</span></div>
                                <div class="price text-center mb-0 biannual-price">$130<span>/biannual</span></div>
                                <div class="price text-center mb-0 triennial-price">$199<span>/triennial</span></div>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled mb-4 pricing-feature-list">
                                    <li><span>10</span> Hosted Domains</li>
                                    <li><span>25 GB</span> RAID 10 Storage</li>
                                    <li><span>200 GB</span> Bandwidth</li>
                                    <li><span>1 Free</span> Domain included</li>
                                    <li><span>Super Fast</span> SSD Storage</li>
                                    <li><span>Free</span> SSL Certificate</li>
                                    <li>99.95% Uptime</li>
                                    <li>24/7 Phone Support</li>
                                </ul>
                                <a href="#" class="btn outline-btn mb-3" target="_blank">Purchase now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="card popular-price text-center single-pricing-pack">
                            <div class="pt-5">
                                <h5 class="mb-0">Cloud Business <span class="badge color-1 color-1-bg">Popular</span></h5>
                                <p class="mb-0">High traffic corporate sites</p>
                            </div>
                            <div class="card-header pb-4 border-0 pricing-header">
                                <div class="price text-center mb-0 monthly-price">$49<span>/month</span></div>
                                <div class="price text-center mb-0 yearly-price">$159<span>/yearly</span></div>
                                <div class="price text-center mb-0 biannual-price">$299<span>/biannual</span></div>
                                <div class="price text-center mb-0 triennial-price">$429<span>/triennial</span></div>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled mb-4 pricing-feature-list">
                                    <li><span>30</span> Hosted Domains</li>
                                    <li><span>75 GB</span> RAID 10 Storage</li>
                                    <li><span>700 GB</span> Bandwidth</li>
                                    <li><span>3 Free</span> Domain included</li>
                                    <li><span>Super Fast</span> SSD Storage</li>
                                    <li><span>Free</span> SSL Certificate</li>
                                    <li>99.95% Uptime</li>
                                    <li>24/7 Phone Support</li>
                                </ul>
                                <a href="#" class="btn primary-solid-btn mb-3" target="_blank">Purchase now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="card text-center single-pricing-pack">
                            <div class="pt-5">
                                <h5 class="mb-0">Cloud Enterprise</h5>
                                <p class="mb-0">Enterprise content management</p>
                            </div>
                            <div class="card-header pb-4 border-0 pricing-header">
                                <div class="price text-center mb-0 monthly-price">$69<span>/month</span></div>
                                <div class="price text-center mb-0 yearly-price">$259<span>/yearly</span></div>
                                <div class="price text-center mb-0 biannual-price">$499<span>/biannual</span></div>
                                <div class="price text-center mb-0 triennial-price">$739<span>/triennial</span></div>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled mb-4 pricing-feature-list">
                                    <li><span>60</span> Hosted Domains</li>
                                    <li><span>175 GB</span> RAID 10 Storage</li>
                                    <li><span>1500 GB</span> Bandwidth</li>
                                    <li><span>6 Free</span> Domain included</li>
                                    <li><span>Super Fast</span> SSD Storage</li>
                                    <li><span>Free</span> SSL Certificate</li>
                                    <li>99.95% Uptime</li>
                                    <li>24/7 Phone Support</li>
                                </ul>
                                <a href="#" class="btn outline-btn mb-3" target="_blank">Purchase now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="support-cta mt-5">
                            <h5 class="mb-1 d-flex align-items-center justify-content-center"><span class="ti-loop color-primary mr-3 icon-sm"></span>Choose Your <a href="pricing-comparison.html" class="ml-2">Compare Hosting Plans</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--pricing with switch section end-->

        <!--feature section start-->
        <section class="feature-section ptb-100 gray-light-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="section-heading text-center mb-5">
                            <h2>Hosting Features For Your Big Ideas</h2>
                            <p class="lead">These features come standard in all of our hosting plans. Dynamically extend
                                imperatives through open-source quickly niche markets.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <div class="features-box p-4">
                            <div class="features-box-icon">
                                <span class="ti-panel icon-md color-primary"></span>
                            </div>
                            <div class="features-box-content">
                                <h5>Custom Control Panel</h5>
                                <p>Our intuitive control panel gives you admin access to all of your DreamHost products.
                                    Easily update domain information, add users, adjust email settings gain access.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="features-box p-4">
                            <div class="features-box-icon">
                                <span class="ti-thumb-up icon-md color-primary"></span>
                            </div>
                            <div class="features-box-content">
                                <h5>Real-Life Human Beings</h5>
                                <p>Tech veterans, geeks, and nerds are all standing by to optimize your experience. Whether
                                    you get in touch with our support, read our knowledge base, or start a thread.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="features-box p-4">
                            <div class="features-box-icon">
                                <span class="ti-mouse-alt icon-md color-primary"></span>
                            </div>
                            <div class="features-box-content">
                                <h5>1-Click Installer</h5>
                                <p>No need to dig into a bunch of documentation. Simply install web apps like WordPress,
                                    Joomla! and more. Monotonectally administrate economically sound opportunities.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="features-box p-4">
                            <div class="features-box-icon">
                                <span class="ti-timer icon-md color-primary"></span>
                            </div>
                            <div class="features-box-content">
                                <h5>100% Uptime Guarantee</h5>
                                <p>With multiple datacenter locations, redundant cooling, emergency generators, and constant
                                    monitoring, we are able to offer our 100% Uptime Guarantee.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="features-box p-4">
                            <div class="features-box-icon">
                                <span class="ti-harddrives icon-md color-primary"></span>
                            </div>
                            <div class="features-box-content">
                                <h5>Solid State Drives (SSD)</h5>
                                <p>With SSDs, your website, caching, and database queries are faster by our calculations.
                                    Quickly orchestrate worldwide niche markets vis-a-vis end-to-end infomediaries. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="features-box p-4">
                            <div class="features-box-icon">
                                <span class="ti-cup icon-md color-primary"></span>
                            </div>
                            <div class="features-box-content">
                                <h5>Award-Winning Support</h5>
                                <p>No question is too simple, or too complex for our team of experts. Synergistically
                                    synergize Our in-house support staff and service team are here for you 24/7, 365.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!--feature section end-->

        <!--call to action section start-->
        <section class="call-to-action ptb-100 gradient-overlay" style="background: url('assets/img/hero-bg-4.jpg')no-repeat center center / cover">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-12 col-lg-8">
                        <div class="call-to-action-content text-white">
                            <h2 class="text-white">Need Some Help?</h2>
                            <p>Whether you’re stuck or just want some tips on where to start, hit up our experts anytime.
                                <br> Sales Chat: <strong> MON-FRI 8AM-4PM PT</strong> | Customer Support Chat: Every Day
                                <strong> 5:30AM–9:30PM PT</strong>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <div class="action-btns mt-md-4 text-md-right text-lg-right text-sm-left">
                            <a href="#" class="btn solid-white-btn mr-3">Chat With Us</a>
                            <a href="#" class="btn outline-white-btn">Send us an Email</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--call to action section end-->

        <!--faq section start-->
        <div id="faq" class="ptb-100 ">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-lg-8">
                        <div class="section-heading mb-5">
                            <h2>Frequently Asked Queries</h2>
                            <p>Efficiently productivate reliable paradigms before ubiquitous models. Continually utilize
                                frictionless expertise whereas tactical relationships. Still have questions? <a href="#contact" class="page-scroll">Contact us</a></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div id="accordion-one" class="accordion accordion-faq">
                            <div class="card mb-0">
                                <a class="card-header collapsed" data-toggle="collapse" href="#collapseOne">
                                    <h6 class="mb-0 d-inline-block">What is Web Hosting?
                                    </h6>
                                </a>
                                <div id="collapseOne" class="collapse" data-parent="#accordion-one">
                                    <div class="card-body">
                                        <p>Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                                            sapiente ea proident.
                                            Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                            farm-to-table, raw denim aesthetic
                                            synth nesciunt you probably haven't heard of them accusamus labore sustainable
                                            VHS.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-0">
                                <a class="card-header collapsed" data-toggle="collapse" href="#collapseTwo">
                                    <h6 class="mb-0 d-inline-block">What Are the
                                        Different Types of Web Hosting Products DreamHost Offers?</h6>
                                </a>
                                <div id="collapseTwo" class="collapse" data-parent="#accordion-one">
                                    <div class="card-body">
                                        <p>Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
                                            raw denim aesthetic
                                            synth nesciunt you probably haven't heard of them accusamus labore sustainable
                                            VHS.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-0">
                                <a class="card-header collapsed" data-toggle="collapse" href="#collapseThree">
                                    <h6 class="mb-0 d-inline-block">How Do I Buy a Domain
                                        Name?
                                    </h6>
                                </a>
                                <div id="collapseThree" class="collapse" data-parent="#accordion-one">
                                    <div class="card-body">
                                        <p>Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                                            sapiente ea proident.
                                            Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                            farm-to-table, raw denim aesthetic
                                            synth nesciunt you probably haven't heard of them accusamus labore sustainable
                                            VHS.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-0">
                                <a class="card-header collapsed" data-toggle="collapse" href="#collapseFour">
                                    <h6 class="mb-0 d-inline-block">Can You Help Me
                                        Understand More About WordPress?
                                    </h6>
                                </a>
                                <div id="collapseFour" class="collapse" data-parent="#accordion-one">
                                    <div class="card-body">
                                        <p>Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                                            sapiente ea proident.
                                            Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                            farm-to-table.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <!--faq section end-->

        <!--testimonial and review section start-->
        <section class="client-review-section ptb-100 gray-light-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="section-heading text-center mb-5">
                            <h2>What Our Customers Say About Us?</h2>
                            <p class="lead">Authoritatively reinvent client-centric e-markets via fully tested process. Objectively restore strategic initiatives through fully researched.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="single-testimonial white-bg shadow-sm rounded p-5">
                            <ul class="list-inline ratting-list mb-2">
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                            </ul>
                            <div class="ratting-content">
                                <h5>Awesome support from technical</h5>
                                <p>Objectively envisioneer magnetic manufactured products and dynamic models. Progressively maximize 2.0 relationships whereas process-centric.</p>
                            </div>
                            <div class="ratting-author mt-3">
                                <h6>Alex Khamer</h6>
                                <small class="text-right">6 days ago</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="single-testimonial white-bg shadow-sm rounded p-5">
                            <ul class="list-inline ratting-list mb-2">
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                            </ul>
                            <div class="ratting-content">
                                <h5>Awesome Design Quality with Support</h5>
                                <p>Objectively envisioneer magnetic manufactured products and dynamic models maximize 2.0 relationships whereas methodologies.</p>
                            </div>
                            <div class="ratting-author mt-3">
                                <h6>Peter Anderson</h6>
                                <small class="text-right">3 days ago</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="single-testimonial white-bg shadow-sm rounded p-5">
                            <ul class="list-inline ratting-list mb-2">
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                            </ul>
                            <div class="ratting-content">
                                <h5>Contacted support after Midnight</h5>
                                <p>Objectively envisioneer magnetic manufactured products and dynamic models. Progressively maximize 2.0 relationships whereas process-centric.</p>
                            </div>
                            <div class="ratting-author mt-3">
                                <h6>Jolio Darix</h6>
                                <small class="text-right">8 days ago</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--testimonial and review section end-->
@endsection
