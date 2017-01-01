<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/img/tik.png')}}">
    <!-- Web Fonts -->
  	<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700'>

    <title>@yield('title') | iT-Dev.Io  </title>

    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/css/blog.style.css')}}">

  	<!-- CSS Header and Footer -->
  	<link rel="stylesheet" href="{{ asset('assets/css/headers/header-default.css')}}">
  	<link rel="stylesheet" href="{{ asset('assets/css/footers/footer-v1.css')}}">

  	<!-- CSS Implementing Plugins -->
  	<link rel="stylesheet" href="{{ asset('assets/plugins/animate.css')}}">
  	<link rel="stylesheet" href="{{ asset('assets/plugins/line-icons/line-icons.css')}}">
  	<link rel="stylesheet" href="{{ asset('assets/plugins/fancybox/source/jquery.fancybox.css')}}">
  	<link rel="stylesheet" href="{{ asset('assets/plugins/font-awesome/css/font-awesome.min.css')}}">
  	<link rel="stylesheet" href="{{ asset('assets/plugins/sky-forms-pro/skyforms/css/sky-forms.css')}}">
  	<link rel="stylesheet" href="{{ asset('assets/plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css')}}">
  	<link rel="stylesheet" href="{{ asset('assets/plugins/login-signup-modal-window/css/style.css')}}">

  	<!-- CSS Theme -->
  	<link rel="stylesheet" href="{{ asset('assets/css/theme-skins/blue.css')}}" id="style_color">
  	<link rel="stylesheet" href="{{ asset('assets/css/theme-skins/dark.css')}}">

  	<!-- CSS Customization -->
  	<link rel="stylesheet" href="{{ asset('assets/css/custom.css')}}">
    @yield('styles')

  </head>

  <body class="header-fixed header-fixed-space-v2">
  <div class="wrapper">
  @include('partials.header')

  @yield('content')
</div>


  <!-- JS Global Compulsory -->
  <script src="{{ asset('assets/plugins/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset('assets/plugins/jquery/jquery-migrate.min.js')}}"></script>
  <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
  <!-- JS Implementing Plugins -->
  <script src="{{ asset('assets/plugins/back-to-top.js')}}"></script>
  <script src="{{ asset('assets/plugins/smoothScroll.js')}}"></script>
  <script src="{{ asset('assets/plugins/counter/waypoints.min.js')}}"></script>
  <script src="{{ asset('assets/plugins/counter/jquery.counterup.min.js')}}"></script>
  <script src="{{ asset('assets/plugins/fancybox/source/jquery.fancybox.pack.js')}}"></script>
  <script src="{{ asset('assets/plugins/sky-forms-pro/skyforms/js/jquery.form.min.js')}}"></script>
  <script src="{{ asset('assets/plugins/sky-forms-pro/skyforms/js/jquery.validate.min.js')}}"></script>
  <script src="{{ asset('assets/plugins/modernizr.js')}}"></script>
  <script src="{{ asset('assets/plugins/login-signup-modal-window/js/main.js')}}"></script> <!-- Gem jQuery -->
  <!-- JS Customization -->
  <script src="{{ asset('assets/js/custom.js')}}"></script>
  <!-- JS Page Level -->
  <script src="{{ asset('assets/js/app.js')}}"></script>
  <script src="{{ asset('assets/js/forms/login.js')}}"></script>
  <script src="{{ asset('assets/js/forms/contact.js')}}"></script>
  <script src="{{ asset('assets/js/plugins/fancy-box.js')}}"></script>
  <script src="{{ asset('assets/js/plugins/style-switcher.js')}}"></script>
  <script>
  	jQuery(document).ready(function() {
  		App.init();
  		App.initCounter();
  		FancyBox.initFancybox();
  		LoginForm.initLoginForm();
  		ContactForm.initContactForm();
  		StyleSwitcher.initStyleSwitcher();
  	});
  </script>

  <!-- Go to www.addthis.com/dashboard to customize your tools -->
  <script src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4f5b24645b6bf84e" async="async"></script>

  <!--[if lt IE 9]>
  	<script src="assets/plugins/respond.js"></script>
  	<script src="assets/plugins/html5shiv.js"></script>
  	<script src="assets/plugins/placeholder-IE-fixes.js"></script>
  <![endif]-->
  @yield('script')
  @include('partials.footer')
  </body>
</html>
