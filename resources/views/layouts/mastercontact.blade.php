<!DOCTYPE html>
<html>
  <head>

    <title>@yield('title') | iT-devs</title>

    <!-- Meta -->
   <meta charset="utf-8">
   <meta content="width=device-width, initial-scale=1.0" name="viewport">
   <meta content="Portal TIK" name="description">
   <meta content="Ichsan Mulya" name="author">

   <!-- Favicon -->
   <link rel="shortcut icon" href="assets/img/tik.png">

   <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">

    <!-- CSS Header and Footer -->
    <link rel="stylesheet" href="{{ asset('assets/css/headers/header-default.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/footers/footer-v1.css')}}">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/animate.css')}}">
    <!-- converted from the same beautiful simple line icon -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/line-icons/line-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/font-awesome/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/owl-carousel/owl-carousel/owl.carousel.css')}}">

    <!-- CSS Page Style -->
  	<link rel="stylesheet" href="assets/css/pages/page_contact.css">

    <!-- CSS Theme -->
    <link rel="stylesheet" href="{{ asset('assets/css/theme-skins/blue.css')}}" id="style_color">
    <link rel="stylesheet" href="{{ asset('assets/css/theme-skins/dark.css')}}">
    <!-- CSS Customization -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css')}}">
    <!-- Web Fonts -->
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700'>


          @yield('styles')

          <!-- Scripts -->
          <script>
              window.Laravel = <?php echo json_encode([
                  'csrfToken' => csrf_token(),
              ]); ?>
          </script>
  </head>
  <body class="header-fixed header-fixed-space">
    <div class="wrapper">
    @include('partials.header')


    @yield('content')

    </div>

    <!-- JS Global Compulsory -->
    <script type="text/javascript" src="{{ asset('assets/plugins/jquery/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/jquery/jquery-migrate.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- JS Implementing Plugins -->
    <script type="text/javascript" src="{{ asset('assets/plugins/back-to-top.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/smoothScroll.js')}}"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB9T6rwBtPrA5LbBAEGXJtLqpre9VePOL8&callback=initMap"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/gmap/gmap.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/owl-carousel/owl-carousel/owl.carousel.js')}}"></script>
    <!-- JS Customization -->
    <script type="text/javascript" src="{{ asset('assets/js/custom.js')}}"></script>
    <!-- JS Page Level -->
    <script type="text/javascript" src="{{ asset('assets/js/app.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/pages/page_contacts.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/plugins/owl-carousel.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/plugins/style-switcher.js')}}"></script>
    <script type="text/javascript">
      jQuery(document).ready(function() {
        App.init();
        ContactPage.initMap();
        OwlCarousel.initOwlCarousel();
        StyleSwitcher.initStyleSwitcher();
      });
    </script>
    <!--[if lt IE 9]>
    <script src="assets/plugins/respond.js"></script>
    <script src="assets/plugins/html5shiv.js"></script>
    <script src="assets/plugins/placeholder-IE-fixes.js"></script>
    <![endif]-->

    @yield('script')
    @include('partials.footer')
  </body>
</html>
