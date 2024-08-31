<!DOCTYPE html>
<html lang="fr">

@include('_partials._head')

<body>

    <!--loader start-->
    <div id="preloader">
        <div class="loader1">
            <img src="{{ asset('lifesport/assets/img/logo/item-circle.png') }}" alt="logo" class="img-fluid preload"/>
        </div>
    </div>
    <!--loader end-->
    
    <!--header section start-->

        @include('_partials._header')

    <!--header section end-->

    <div class="main">
        
        @yield('content')

    </div>

    <!--footer section start-->

        @include('_partials._footer')

    <!--footer section end-->
    <!--bottom to top button start-->
    <button class="scroll-top scroll-to-target" data-target="html">
        <span class="fad fa-futbol"></span>
    </button>
    
    <!--bottom to top button end-->
    <!--build:js-->
    <script src="{{ asset('lifesport/assets/js/vendors/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('lifesport/assets/js/vendors/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('lifesport/assets/js/vendors/bootstrap-slider.min.js') }}"></script>
    <script src="{{ asset('lifesport/assets/js/vendors/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('lifesport/assets/js/vendors/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('lifesport/assets/js/vendors/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('lifesport/assets/js/vendors/validator.min.js') }}"></script>
    <script src="{{ asset('lifesport/assets/js/vendors/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('lifesport/assets/js/vendors/jquery.rcounterup.js') }}"></script>
    <script src="{{ asset('lifesport/assets/js/vendors/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('lifesport/assets/js/vendors/hs.megamenu.js') }}"></script>
    <script src="{{ asset('lifesport/assets/js/app.js') }}"></script>
    <!--endbuild-->
</body>

</html>