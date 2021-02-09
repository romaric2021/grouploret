<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>GROUPE LORET</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('asset/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('asset/css/flaticon.css') }}" />
    <link rel="stylesheet" href="{{ asset('asset/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('asset/css/owl.theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('asset/css/magnific-popup.css') }}" />

    <link rel="stylesheet" href="{{ asset('asset/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('asset/css/royal-preload.css') }}" />
    <!-- REVOLUTION SLIDER CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/plugins/revolution/revolution/css/settings.css') }}">   
    <!-- REVOLUTION NAVIGATION STYLE -->
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/plugins/revolution/revolution/css/navigation.css') }}">
</head>

<body class="royal_preloader">

    <div id="page" class="site">
        <!-- Main Header start -->
        @include('site/layouts/partials/header')
        <!-- Main Header start -->

        <!-- Main section start -->
        @yield('content')
        <!-- Main section start -->

    <!-- #site-footer -->
        @include('site/layouts/partials/footer')
    <!-- #site-footer -->


</div>
<!-- #page -->

<a id="back-to-top" href="#" class="show"><i class="flaticon-up-arrow"></i></a>
        <!-- jQuery -->
    <script src="{{ asset('asset/js/jquery.min.js') }}"></script>
    <script src="{{ asset('asset/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('asset/js/jquery.isotope.min.js') }}"></script>
    <script src="{{ asset('asset/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('asset/js/easypiechart.min.js') }}"></script>
    <script src="{{ asset('asset/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('asset/js/scripts.js') }}"></script>
    <script src="{{ asset('asset/js/header-mobile.js') }}"></script>
    <!-- REVOLUTION JS FILES -->

    <script  src="{{ asset('asset/plugins/revolution/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script  src="{{ asset('asset/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->    
    <script  src="{{ asset('asset/plugins/revolution/revolution/js/extensions/revolution-plugin.js') }}"></script>

    <!-- REVOLUTION SLIDER SCRIPT FILES -->
    <script  src="{{ asset('asset/js/rev-script-2.js') }}"></script>
    <script src="{{ asset('asset/js/royal_preloader.min.js') }}"></script>
    <script>
        window.jQuery = window.$ = jQuery;  
        (function($) { "use strict";
            //Preloader
            Royal_Preloader.config({
                mode           : 'logo',
                logo           : 'images/logo.svg',
                logo_size      : [160, 75],
                showProgress   : true,
                showPercentage : true,
                text_colour: '#000000',
                background:  '#ffffff'
            });
        })(jQuery);
    </script> 
</body>
</html>