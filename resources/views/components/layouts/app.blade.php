<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">



        <meta name="author" content="Webtek">
        <meta name="description" content="Webtek - IT Solution and Technology HTML Template">
        <meta name="keywords" content="Webtek - IT Solution and Technology HTML Template">
        <meta name="robots" content="INDEX,FOLLOW">

        <!-- Mobile Specific Metas -->

        <meta name="viewport" content="width=device-width; initial-scale=0.8; maximum-scale=1.0" />



        <!-- Favicons - Place favicon.ico in the root directory -->
        <link rel="apple-touch-icon" sizes="57x57" href="/assets/img/favicons/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/assets/img/favicons/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/assets/img/favicons/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/favicons/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/assets/img/favicons/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/assets/img/favicons/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/assets/img/favicons/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/assets/img/favicons/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/favicons/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192" href="/assets/img/favicons/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/assets/img/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/assets/img/favicons/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/assets/img/favicons/favicon-16x16.png">
        <link rel="manifest" href="/assets/img/favicons/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/assets/img/favicons/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">

        <!--==============================
            	  Google Fonts
            	============================== -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Gantari:wght@100;300;400;500;600;700;800;900&family=Inter:wght@100;400;500;600;700;800;900&family=Urbanist:wght@100;300;400;500;600;700;800;900&display=swap"
            rel="stylesheet">


        <!--==============================
            	    All CSS File
            	============================== -->
        <!-- Bootstrap -->

        <!-- Fontawesome Icon -->


        <link rel="stylesheet" href="/css/awcodes/tiptap-editor/tiptap.css">



        <!-- Magnific Popup -->
        <link rel="stylesheet" href="/assets/css/magnific-popup.min.css">
        <link rel="stylesheet" href="/assets/css/fontawesome.min.css">
        <!-- Swiper css -->
        <link rel="stylesheet" href="/assets/css/swiper-bundle.min.css">
        <!-- datetimepicker -->
        <link rel="stylesheet" href="/assets/css/jquery.datetimepicker.min.css">
        <link
         rel="stylesheet" href="/assets/css/style.css">



         <link rel="stylesheet" href="/assets/css/stylescss.css">

         @vite(['resources/css/app.css','resources/js/app.js'])

         @livewireStyles


        <!-- Theme Custom CSS -->

        <title>{{ $title ?? 'Pro create - IT Solution' }}</title>
    </head>
    <body class="gr-bg1 ">

        <!--[if lte IE 9]>
            	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
          	<![endif]-->


        <!--********************************
           		Code Start From Here
        	******************************** -->





        <x-header-mobile />

        <!--==============================
        	Header Area
        ==============================-->
        <x-header />

        <!--==============================
            Mobile Menu
          ============================== -->
        {{ $slot }}


        {{--<livewire:footer.footer-area />--}}

        <!-- Scroll To Top -->
           <x-scroll-top />
        <!--==============================
            All Js File
        ============================== -->
        <!-- Jquery -->

        @livewireScripts
        <script src="/assets/js/vendor/jquery-3.7.1.min.js"></script>
        <!-- Swiper Js -->
        <script src="/assets/js/swiper-bundle.min.js"></script>
        <!-- Bootstrap -->
        <script src="/assets/js/bootstrap.min.js"></script>
        <!-- Magnific Popup -->
        <script src="/assets/js/jquery.magnific-popup.min.js"></script>
        <!-- Counter Up -->
        <script src="/assets/js/jquery.counterup.min.js"></script>
        <!-- Range Slider -->
        <script src="/assets/js/jquery-ui.min.js"></script>
        <!-- imagesloaded -->
        <script src="/assets/js/imagesloaded.pkgd.min.js"></script>

        <!-- isotope -->
        <script src="/assets/js/isotope.pkgd.min.js"></script>
        <!-- datetimepicker -->
        <script src="/assets/js/jquery.datetimepicker.min.js"></script>

        <!-- gsap -->
        <script src="/assets/js/gsap.min.js"></script>

        <!-- ScrollTrigger -->
        <script src="/assets/js/ScrollTrigger.min.js"></script>

        <!-- nice select -->


        <script src="/assets/js/smooth-scroll.js"></script>
        <script src="/js/awcodes/tiptap-editor/components/tiptap.js"></script>

        <!-- Main Js File -->
        <script src="/assets/js/main.js"></script>


    </body>
</html>
