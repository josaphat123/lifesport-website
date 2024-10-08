<header id="header" class="header-main">

        <!--topbar start-->
        {{-- <div id="header-top-bar" class="gray-light-bg">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-7 col-lg-7">
                        <div class="topbar-text d-none d-md-block d-lg-block">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a href="tell:888-1234567"><span class="fas fa-phone mr-2"></span>Disponible 24h/24 +225 05 65 28 29 62</a>
                                </li>
                                <li class="list-inline-item">
                                    <a target="_BLANK" href="https://wa.me/message/JWAKAZV73SWIN1">
                                        <span class="fas fa-comments mr-2"></span>Chat en direct
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div class="topbar-text">
                            <ul class="list-inline text-right">
                                <li class="list-inline-item"><a href="#"><span class="fas fa-user mr-2"></span> Connexion</a></li>
                                <li class="list-inline-item"><a href="#"><span class="fas fa-lock mr-2"></span> Inscription</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!--topbar end-->
        <!--main header menu start-->
        <div id="header" class="header-main headroom">            
            <div id="logoAndNav" class="main-header-menu-wrap bg-transparent">
            <div class="container">

                <nav class="js-mega-menu navbar navbar-expand-md header-nav">

                    <!--logo start-->
                    <a class="navbar-brand" href="{{ route('index') }}"><img src="{{ asset('lifesport/assets/img/logo/logo-circle.png') }}" width="65" alt="logo" class="img-fluid logo"/></a>
                    <!--logo end-->

                    <!--responsive toggle button start-->
                    <button type="button" class="navbar-toggler btn" aria-expanded="false" aria-controls="navBar" data-toggle="collapse" data-target="#navBar">
                        <span id="hamburgerTrigger">
                          <span class="fas fa-bars"></span>
                        </span>
                    </button>
                    <!--responsive toggle button end-->

                    <!--main menu start-->
                    <div id="navBar" class="collapse navbar-collapse">
                        <ul class="navbar-nav ml-auto main-navbar-nav">
                            <!--home start-->
                            <li class="nav-item hs-has-mega-menu custom-nav-item" data-position="left">
                                <a id="homeMegaMenu" class="nav-link custom-nav-link" href="{{ route('index') }}" aria-haspopup="true" aria-expanded="false">Accueil</a>

                                <!--home mega menu start-->
                                {{-- <div class="hs-mega-menu w-100 main-sub-menu" aria-labelledby="homeMegaMenu">
                                    <div class="row no-gutters">
                                        <div class="col-lg-5">
                                            <!-- Banner Image -->
                                            <div class="menu-banner-wrap d-none d-md-none d-lg-block gray-light-bg">
                                                <div class="menu-banner-content">
                                                    <div class="mb-4">
                                                        <h5 class="mb-3 h6">Unbeatable WordPress Hosting</h5>
                                                        <ul class="list-unstyled tech-feature-list">
                                                            <li class="py-1"><span class="ti-control-forward mr-2"></span>Flexible, Easy to Use Control Panel</li>
                                                            <li class="py-1"><span class="ti-control-forward mr-2"></span><strong>Unmetered</strong> Bandwidth</li>
                                                            <li class="py-1"><span class="ti-control-forward mr-2"></span><strong>Unmetered</strong> Sub Domains, FTP Accounts</li>
                                                            <li class="py-1"><span class="ti-control-forward mr-2"></span><strong>99%</strong> Uptime Guarantee</li>
                                                            <li class="py-1"><span class="ti-control-forward mr-2"></span><strong>45-Day</strong> Money-Back Guarantee</li>
                                                        </ul>
                                                    </div>
                                                    <a class="btn primary-solid-btn" href="#">Learn More
                                                        <span class="fas fa-angle-right ml-2"></span>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- End Banner Image -->
                                        </div>

                                        <div class="col-lg-7">
                                            <div class="row mega-menu-wrap">
                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <span class="sub-menu-title">Home Demos</span>
                                                    <ul class="sub-menu-nav-group">
                                                        <li><a class="nav-link sub-menu-nav-link" href="index.html">Home Default</a></li>
                                                        <li><a class="nav-link sub-menu-nav-link" href="index-image.html">Home Image</a></li>
                                                        <li><a class="nav-link sub-menu-nav-link" href="index-domain-search.html">Home Domain Search <span class="badge badge-danger ml-2">Hot</span></a></li>
                                                        <li><a class="nav-link sub-menu-nav-link" href="index-domain-search-2.html">Home Domain Search Two</a>
                                                        </li>
                                                        <li><a class="nav-link sub-menu-nav-link" href="index-bg-image.html">Home Background Image</a>
                                                        </li>
                                                        <li><a class="nav-link sub-menu-nav-link" href="index-bg-video.html">Home Background Video</a></li>

                                                    </ul>
                                                </div>

                                                <div class="col-md-6">
                                                        <ul class="sub-menu-nav-group mb-3">
                                                            <li><a class="nav-link sub-menu-nav-link" href="index-offer.html">Home Offer</a></li>
                                                            <li><a class="nav-link sub-menu-nav-link" href="index-slider.html">Home Slider</a>
                                                            </li>
                                                            <li><a class="nav-link sub-menu-nav-link" href="index-content-slider.html">Home Content Slider</a></li>
                                                            <li><a class="nav-link sub-menu-nav-link" href="index-reseller-hosting.html">Reseller Demo <span class="badge badge-success ml-2">New</span></a></li>
                                                        </ul>

                                                    <span class="sub-menu-title">RTL Demo</span>
                                                    <ul class="sub-menu-nav-group mb-3">
                                                        <li><a class="nav-link sub-menu-nav-link" href="template-rtl/index.html">Home Default Arabic <span class="badge badge-danger ml-2">RTL</span></a></li>
                                                    </ul>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                <!--home mega menu end-->
                            </li>
                            <!--home end-->

                            <!--pages start-->
                            <li class="nav-item hs-has-sub-menu custom-nav-item">
                                <a id="pagesMegaMenu" class="nav-link custom-nav-link" href="javascript:void(0);" aria-haspopup="true" aria-expanded="false" aria-labelledby="pagesSubMenu">Actu-Foot</a>

                                <!-- Pages - Submenu -->
                                {{-- <ul id="pagesSubMenu" class="hs-sub-menu main-sub-menu" aria-labelledby="pagesMegaMenu" style="min-width: 260px;">
                                    <li class="nav-item submenu-item">
                                        <a class="nav-link sub-menu-nav-link" href="about-us.html">About Us</a>
                                    </li>
                                    <li class="nav-item submenu-item">
                                        <a class="nav-link sub-menu-nav-link" href="services.html">Our Services</a>
                                    </li>
                                    <li class="nav-item submenu-item">
                                        <a class="nav-link sub-menu-nav-link" href="reviews.html">Client Reviews</a>
                                    </li>
                                    <li class="nav-item submenu-item">
                                        <a class="nav-link sub-menu-nav-link" href="domain-search-result.html">Search Result</a>
                                    </li>
                                    <li class="nav-item submenu-item">
                                        <a class="nav-link sub-menu-nav-link" href="image-gallery.html">Image Gallery</a>
                                    </li>
                                    <li class="nav-item submenu-item">
                                        <a class="nav-link sub-menu-nav-link" href="black-friday-sale-page.html">Black Friday Sale <span class="badge badge-warning ml-auto">New</span></a>
                                    </li>
                                    <li class="nav-item submenu-item">
                                        <a class="nav-link sub-menu-nav-link" href="offer-single-page.html">Black Friday Single <span class="badge badge-warning ml-auto">New</span></a>
                                    </li>
                                    <li class="hs-has-sub-menu">
                                        <a id="navLinkPagesPricing" class="nav-link sub-menu-nav-link sub-link-toggle" href="javascript:void(0);" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuPagesPricing">Pricing</a>

                                        <ul id="navSubmenuPagesPricing" class="hs-sub-menu main-sub-menu" aria-labelledby="navLinkPagesPricing" style="min-width: 230px;">
                                            <li><a class="nav-link sub-menu-nav-link" href="pricing-default.html">Pricing Default</a></li>
                                            <li><a class="nav-link sub-menu-nav-link" href="pricing-package.html">Pricing Packages</a></li>
                                            <li><a class="nav-link sub-menu-nav-link" href="pricing-comparision.html">Pricing Comparison</a></li>
                                            <li><a class="nav-link sub-menu-nav-link" href="vps-pricing.html">VPS Pricing</a></li>
                                            <li><a class="nav-link sub-menu-nav-link" href="pricing-new.html">New Pricing <span class="badge badge-success ml-2">New</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="hs-has-sub-menu">
                                        <a id="navLinkPagesBlog" class="nav-link sub-menu-nav-link sub-link-toggle" href="javascript:void(0);" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuPagesBlog">Blog</a>

                                        <ul id="navSubmenuPagesBlog" class="hs-sub-menu main-sub-menu" aria-labelledby="navLinkPagesBlog" style="min-width: 230px;">
                                            <li><a class="nav-link sub-menu-nav-link" href="blog-grid.html">Blog Grid</a></li>
                                            <li><a class="nav-link sub-menu-nav-link" href="blog-sidebar.html">Blog With Sidebar</a></li>
                                            <li><a class="nav-link sub-menu-nav-link" href="blog-details.html">Blog Details</a></li>
                                        </ul>
                                    </li>

                                    <li class="hs-has-sub-menu">
                                        <a id="navLinkPagesLogin" class="nav-link sub-menu-nav-link sub-link-toggle" href="javascript:void(0);" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuPagesLogin">Login &amp; Signup</a>

                                        <ul id="navSubmenuPagesLogin" class="hs-sub-menu main-sub-menu" aria-labelledby="navLinkPagesLogin" style="min-width: 230px;">
                                            <li><a class="nav-link sub-menu-nav-link" href="login.html">Login</a>
                                            </li>
                                            <li><a class="nav-link sub-menu-nav-link" href="signup.html">Signup</a>
                                            </li>
                                            <li><a class="nav-link sub-menu-nav-link" href="recover-account.html">Recover Account</a></li>
                                            <li class="dropdown-divider"></li>
                                            <li><a class="nav-link sub-menu-nav-link" href="login-simple.html">Login Simple</a></li>
                                            <li><a class="nav-link sub-menu-nav-link" href="signup-simple.html">Signup Simple</a></li>
                                            <li><a class="nav-link sub-menu-nav-link" href="recover-account-simple.html">Recover Account Simple</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="hs-has-sub-menu">
                                        <a id="navLinkPagesUtilities" class="nav-link sub-menu-nav-link sub-link-toggle" href="javascript:void(0);" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuPagesUtilities">Utilities</a>

                                        <ul id="navSubmenuPagesUtilities" class="hs-sub-menu main-sub-menu" aria-labelledby="navLinkPagesUtilities" style="min-width: 230px;">
                                            <li><a class="nav-link sub-menu-nav-link" href="help.html">Help</a></li>
                                            <li><a class="nav-link sub-menu-nav-link" href="faq.html">FAQ</a></li>
                                            <li><a class="nav-link sub-menu-nav-link" href="status.html">Status</a></li>
                                            <li><a class="nav-link sub-menu-nav-link" href="knowledge-base.html">Knowledge Base</a></li>
                                            <li><a class="nav-link sub-menu-nav-link" href="terms-condition.html">Terms
                                                    &amp; Conditions</a></li>
                                            <li><a class="nav-link sub-menu-nav-link" href="privacy-policy.html">Privacy &amp; Policy</a></li>
                                        </ul>
                                    </li>
                                    <li class="hs-has-sub-menu">
                                        <a id="navLinkPagesSpecialty" class="nav-link sub-menu-nav-link sub-link-toggle" href="javascript:void(0);" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuPagesSpecialty">Specialty</a>

                                        <ul id="navSubmenuPagesSpecialty" class="hs-sub-menu main-sub-menu" aria-labelledby="navLinkPagesSpecialty" style="min-width: 230px;">
                                            <li><a class="nav-link sub-menu-nav-link" href="cover-page.html">Cover Page</a></li>
                                            <li><a class="nav-link sub-menu-nav-link" href="coming-soon.html">Coming Soon</a></li>
                                            <li><a class="nav-link sub-menu-nav-link" href="maintenance-mode.html">Maintenance Mode</a></li>
                                            <li><a class="nav-link sub-menu-nav-link" href="404.html">Error 404</a></li>
                                        </ul>
                                    </li>
                                    <!-- Specialty -->
                                </ul> --}}
                                <!-- End Pages - Submenu -->
                            </li>
                            <!--pages end-->


                            <!--hosting start-->
                            <li class="nav-item hs-has-mega-menu custom-nav-item" data-max-width="720px" data-position="right">
                                <a id="hostingMegaMenu" class="nav-link custom-nav-link main-link-toggle" href="JavaScript:Void(0);" aria-haspopup="true" aria-expanded="false">Nos Services</a>

                                <!-- Demos - Mega Menu -->
                                <div class="hs-mega-menu w-100 main-sub-menu" aria-labelledby="hostingMegaMenu">
                                    <div class="row no-gutters">
                                        <div class="col-md-6">
                                            <!--menu title with subtitle and icon item start-->
                                            <div class="title-with-icon-item">
                                                <a class="title-with-icon-link" href="shared-hosting.html">
                                                    <div class="media">
                                                        <div class="menu-item-icon"><i class="fas fa-server"></i></div>
                                                        <div class="media-body">
                                                            <span class="u-header__promo-title">Shared Hosting</span>
                                                            <small class="u-header__promo-text">Innovate reliable quality
                                                                Starting at <strong>$2.99</strong></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <!--menu title with subtitle and icon item end-->
                                            <!--menu title with subtitle and icon item start-->
                                            <div class="title-with-icon-item">
                                                <a class="title-with-icon-link" href="vps-hosting.html">
                                                    <div class="media">
                                                        <div class="menu-item-icon"><i class="fas fa-box"></i></div>
                                                        <div class="media-body">
                                                            <span class="u-header__promo-title">VPS Hosting <span
                                                                    class="badge badge-success ml-1">Popular</span></span>
                                                            <small class="u-header__promo-text">Pefficiently maintain
                                                                Starting at <strong>$11.99</strong></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <!--menu title with subtitle and icon item end-->
                                            <!--menu title with subtitle and icon item start-->
                                            <div class="title-with-icon-item">
                                                <a class="title-with-icon-link" href="dedicated-server-hosting.html">
                                                    <div class="media">
                                                        <div class="menu-item-icon"><i class="fas fa-tachometer-alt"></i></div>
                                                        <div class="media-body">
                                                            <span class="u-header__promo-title">Dedicated Hosting</span>
                                                            <small class="u-header__promo-text">Quickly build Starting at
                                                                <strong>$150.99/mo</strong></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <!--menu title with subtitle and icon item end-->
                                            <!--menu title with subtitle and icon item start-->
                                            <div class="title-with-icon-item">
                                                <a class="title-with-icon-link" href="cloud-hosting.html">
                                                    <div class="media">
                                                        <div class="menu-item-icon"><i class="fas fa-cloud"></i></div>
                                                        <div class="media-body">
                                                            <span class="u-header__promo-title">Cloud Hosting <span
                                                                    class="badge badge-danger ml-1">Hot</span></span>
                                                            <small class="u-header__promo-text">Conveniently cloud Starting
                                                                at <strong>$5.99/mo</strong></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <!--menu title with subtitle and icon item end-->
                                        </div>

                                        <div class="col-md-6">
                                            <!--menu title with subtitle and icon item start-->
                                            <div class="title-with-icon-item">
                                                <a class="title-with-icon-link" href="email-hosting.html">
                                                    <div class="media">
                                                        <div class="menu-item-icon"><i class="fas fa-envelope"></i></div>
                                                        <div class="media-body">
                                                            <span class="u-header__promo-title">Email Hosting</span>
                                                            <small class="u-header__promo-text">First Starting at <strong>$0.99/mo
                                                                per mailbox</strong></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <!--menu title with subtitle and icon item end-->
                                            <!--menu title with subtitle and icon item start-->
                                            <div class="title-with-icon-item">
                                                <a class="title-with-icon-link" href="shared-wp-hosting.html">
                                                    <div class="media">
                                                        <div class="menu-item-icon"><i class="fas fa-database"></i></div>
                                                        <div class="media-body">
                                                            <span class="u-header__promo-title">Shared Wordpress Hosting</span>
                                                            <small class="u-header__promo-text">Conveniently Starting at
                                                                <strong>$9.99/mo</strong></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <!--menu title with subtitle and icon item end-->
                                            <!--menu title with subtitle and icon item start-->
                                            <div class="title-with-icon-item">
                                                <a class="title-with-icon-link" href="wp-hosting.html">
                                                    <div class="media">
                                                        <div class="menu-item-icon"><i class="fab fa-wordpress"></i></div>
                                                        <div class="media-body">
                                                            <span class="u-header__promo-title">Wordpress Hosting</span>
                                                            <small class="u-header__promo-text">Conveniently Starting at
                                                                <strong>$9.99/mo</strong></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <!--menu title with subtitle and icon item end-->
                                            <!--menu title with subtitle and icon item start-->
                                            <div class="title-with-icon-item">
                                                <a class="title-with-icon-link" href="woocommerce-hosting.html">
                                                    <div class="media">
                                                        <div class="menu-item-icon"><i class="fas fa-server"></i></div>
                                                        <div class="media-body">
                                                            <span class="u-header__promo-title">WooCommerce Hosting <span
                                                                    class="badge badge-primary ml-1">New</span></span>
                                                            <small class="u-header__promo-text">Globally Starting at
                                                                <strong>$9.99/mo</strong></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <!--menu title with subtitle and icon item end-->
                                        </div>

                                    </div>
                                </div>
                                <!-- End Demos - Mega Menu -->
                            </li>
                            <!--hosting end-->

                            <!--elements start-->
                            <li class="nav-item hs-has-mega-menu custom-nav-item" data-max-width="600px" data-position="right">
                                <a id="elementsMegaMenu" class="nav-link custom-nav-link main-link-toggle" href="JavaScript:Void(0);" aria-haspopup="true" aria-expanded="false">Social Média</a>
                                <!--services mega menu start-->
                                <div class="hs-mega-menu main-sub-menu u-header__mega-menu-position-right-fix--md" aria-labelledby="elementsMegaMenu">
                                    <div class="mega-menu-wrap">
                                        <span class="sub-menu-title">Individual Elements and Blocks</span>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <ul class="sub-menu-nav-group">
                                                    <li><a class="nav-link sub-menu-nav-link" href="accordions.html">Accordions</a></li>
                                                    <li><a class="nav-link sub-menu-nav-link" href="breadcrumbs.html">Breadcrumbs</a></li>
                                                    <li><a class="nav-link sub-menu-nav-link" href="buttons.html">Buttons</a></li>
                                                    <li><a class="nav-link sub-menu-nav-link" href="clients.html">Clients</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-4">
                                                <ul class="sub-menu-nav-group">
                                                    <li><a class="nav-link sub-menu-nav-link" href="carousel.html">Carousel</a></li>
                                                    <li><a class="nav-link sub-menu-nav-link" href="call-to-action.html">Call to Action</a></li>
                                                    <li><a class="nav-link sub-menu-nav-link" href="testimonials.html">Testimonials</a></li>
                                                    <li><a class="nav-link sub-menu-nav-link" href="typography.html">Typography</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-4">
                                                <ul class="sub-menu-nav-group">
                                                    <li><a class="nav-link sub-menu-nav-link" href="team.html">Team</a>
                                                    </li>
                                                    <li><a class="nav-link sub-menu-nav-link" href="tabs.html">Tab</a></li>
                                                    <li><a class="nav-link sub-menu-nav-link" href="videos.html">Videos</a></li>
                                                    <li><a class="nav-link sub-menu-nav-link" href="forms.html">Form</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Mega Menu Banner -->
                                    <div class="secondary-bg">
                                        <div class="u-header__product-banner-content position-relative z-index text-center text-white">
                                            <div class="mb-4">
                                                <h5 class="text-white">Get 25% Discount Start Now</h5>
                                                <div class="clock menu-countdown my-4 text-white"></div>
                                            </div>
                                            <a class="btn solid-white-btn" href="#">Get Started<span class="ti-arrow-right pl-2"></span></a>
                                        </div>
                                    </div>
                                    <!-- End Mega Menu Banner -->
                                </div>
                                <!--services mega menu end-->
                            </li>
                            <!--elements end-->

                            <!--support start-->
                            <li class="nav-item hs-has-mega-menu custom-nav-item" data-max-width="360px" data-position="right">
                                <a id="supportMegaMenu" class="nav-link custom-nav-link" href="JavaScript:Void(0);" aria-haspopup="true" aria-expanded="false">Qui Sommes-Nous ?</a>
                                <!--support submenu start-->
                                {{-- <div class="hs-mega-menu main-sub-menu" aria-labelledby="supportMegaMenu" style="min-width: 330px;">

                                    <!--menu title with subtitle and icon item start-->
                                    <div class="title-with-icon-item">
                                        <a class="title-with-icon-link" href="submit-request.html">
                                            <div class="media align-items-center">
                                                <img class="menu-titile-icon" src="assets/img/chat.svg" alt="SVG">
                                                <div class="media-body">
                                                    <span class="u-header__promo-title">Submit a Request </span>
                                                    <small class="u-header__promo-text">Support team quickly response
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!--menu title with subtitle and icon item end-->

                                    <!--menu title with subtitle and icon item start-->
                                    <div class="title-with-icon-item">
                                        <a class="title-with-icon-link" href="support.html">
                                            <div class="media align-items-center">
                                                <img class="menu-titile-icon" src="assets/img/support.svg" alt="SVG">
                                                <div class="media-body">
                                                    <span class="u-header__promo-title">24/7/365 Support</span>
                                                    <small class="u-header__promo-text">Support and statement</small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!--menu title with subtitle and icon item end-->
                                    <!--menu title with subtitle and icon item start-->
                                    <div class="title-with-icon-item">
                                        <a class="title-with-icon-link" href="network.html">
                                            <div class="media align-items-center">
                                                <img class="menu-titile-icon" src="assets/img/data-services.svg" alt="SVG">
                                                <div class="media-body">
                                                    <span class="u-header__promo-title">Our Datacenter</span>
                                                    <small class="u-header__promo-text">24 Data center globally</small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!--menu title with subtitle and icon item end-->
                                    <!--menu title with subtitle and icon item start-->
                                    <div class="title-with-icon-item">
                                        <a class="title-with-icon-link" href="status.html">
                                            <div class="media align-items-center">
                                                <img class="menu-titile-icon" src="assets/img/time.svg" alt="SVG">
                                                <div class="media-body">
                                                    <span class="u-header__promo-title">Uptime Commitment</span>
                                                    <small class="u-header__promo-text">Monitoring and secure</small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!--menu title with subtitle and icon item end-->

                                    <!--submenu footer start-->
                                    <div class="u-header__promo-footer">
                                        <!-- List -->
                                        <div class="row no-gutters">
                                            <div class="col-6">
                                                <div class="u-header__promo-footer-item">
                                                    <small class="text-muted d-block">Check what's new</small>
                                                    <a class="small" href="#">
                                                        Changelog
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-6 u-header__promo-footer-ver-divider">
                                                <div class="u-header__promo-footer-item">
                                                    <small class="text-muted d-block">Have a question?</small>
                                                    <a class="small" href="contact-us.html">
                                                        Contact us
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End List -->
                                    </div>
                                    <!--submenu footer end-->
                                </div> --}}
                                <!--support submenu end-->
                            </li>
                            <!--support end-->

                            <!--about start-->
                            <li class="nav-item hs-has-mega-menu custom-nav-item" data-max-width="250px" data-position="right">
                                <a id="aboutMegaMenu" class="nav-link custom-nav-link" href="JavaScript:Void(0);" aria-haspopup="true" aria-expanded="false">Contactez-Nous</a>

                                <!--about submenu start-->
                                {{-- <div class="hs-mega-menu main-sub-menu" aria-labelledby="aboutMegaMenu" style="min-width: 330px;">

                                    <!--menu title with subtitle and icon item start-->
                                    <div class="title-with-icon-item">
                                        <a class="title-with-icon-link" href="contact-us.html">
                                            <div class="media align-items-center">
                                                <img class="menu-titile-icon" src="assets/img/chat-mobile.svg" alt="SVG">
                                                <div class="media-body">
                                                    <span class="u-header__promo-title">Contact Us</span>
                                                    <small class="u-header__promo-text">Face any problem contact with us
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!--menu title with subtitle and icon item end-->

                                    <!--menu title with subtitle and icon item start-->
                                    <div class="title-with-icon-item">
                                        <a class="title-with-icon-link" href="about-us.html">
                                            <div class="media align-items-center">
                                                <img class="menu-titile-icon" src="assets/img/community.svg" alt="SVG">
                                                <div class="media-body">
                                                    <span class="u-header__promo-title">About Us</span>
                                                    <small class="u-header__promo-text">We are leading hosting company
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!--menu title with subtitle and icon item end-->

                                    <!--menu title with subtitle and icon item start-->
                                    <div class="title-with-icon-item">
                                        <a class="title-with-icon-link" href="reviews.html">
                                            <div class="media align-items-center">
                                                <img class="menu-titile-icon" src="assets/img/user-behaver.svg" alt="SVG">
                                                <div class="media-body">
                                                    <span class="u-header__promo-title">Client Testimonial</span>
                                                    <small class="u-header__promo-text">More than 100k lovly customer
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!--menu title with subtitle and icon item end-->

                                    <!--menu title with subtitle and icon item start-->
                                    <div class="title-with-icon-item">
                                        <a class="title-with-icon-link" href="partners.html">
                                            <div class="media align-items-center">
                                                <img class="menu-titile-icon" src="assets/img/partner.svg" alt="SVG">
                                                <div class="media-body">
                                                    <span class="u-header__promo-title">Our Partner</span>
                                                    <small class="u-header__promo-text">We have trusted partners globally
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!--menu title with subtitle and icon item end-->

                                    <!--menu title with subtitle and icon item start-->
                                    <div class="title-with-icon-item">
                                        <a class="title-with-icon-link" href="network.html">
                                            <div class="media align-items-center">
                                                <img class="menu-titile-icon" src="assets/img/network.svg" alt="SVG">
                                                <div class="media-body">
                                                    <span class="u-header__promo-title">Network</span>
                                                    <small class="u-header__promo-text">Keep your data save and secure
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!--menu title with subtitle and icon item end-->

                                    <!--menu title with subtitle and icon item start-->
                                    <div class="title-with-icon-item">
                                        <a class="title-with-icon-link" href="blog-grid.html">
                                            <div class="media align-items-center">
                                                <img class="menu-titile-icon" src="assets/img/blog.svg" alt="SVG">
                                                <div class="media-body">
                                                    <span class="u-header__promo-title">Company Blog</span>
                                                    <small class="u-header__promo-text">Industry latest technology news
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!--menu title with subtitle and icon item end-->

                                    <!--submenu footer start-->
                                    <div class="u-header__promo-footer pb-0">
                                        <!-- List -->
                                        <div class="row no-gutters align-bottom">
                                            <div class="col-9">
                                                <div class="u-header__promo-footer-item">
                                                    <span class="u-header__promo-title">CEO Video Message</span>
                                                    <p class="small d-inline-flex">Credibly synergize unique... <a href="https://www.youtube.com/watch?v=9No-FiEInLA" class="popup-youtube video-play-icon"><span
                                                            class="ti-control-play"></span> </a></p>

                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="d-flex align-bottom">
                                                    <img src="assets/img/ceo.png" width="300" alt="ceo" class="img-fluid" />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End List -->
                                    </div>
                                    <!--submenu footer end-->
                                </div> --}}
                                <!--about submenu end-->
                            </li>

                            <li class="nav-item hs-has-sub-menu custom-nav-item">
                                <a id="pagesMegaMenu" class="nav-link custom-nav-link" href="javascript:void(0);" aria-haspopup="true" aria-expanded="false" aria-labelledby="pagesSubMenu">Galerie</a>
                            </li>
                            <!--about end-->

                            <!--button start-->
                            {{-- <li class="nav-item header-nav-last-item d-flex align-items-center">
                                <a class="btn primary-solid-btn animated-btn" href="#" target="_blank">
                                    Devenir Partenaire
                                </a>
                            </li> --}}
                            <!--button end-->
                        </ul>
                    </div>
                    <!--main menu end-->
                </nav>
            </div>
        </div>
        </div>
        <!--main header menu end-->
    </header>
