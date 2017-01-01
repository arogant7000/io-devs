<!DOCTYPE html>
<html>
  <head>

    <title>@yield('title') | iT-devs  </title>
    <!-- Meta -->
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<meta name="description" content="">
  	<meta name="author" content="">

   <!-- Favicon -->
   <link rel="shortcut icon" href="{{ asset('assets/img/tik.png')}}">
    <!-- Web Fonts -->
	<link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>
  <!-- CSS Global Compulsory -->
	<link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">

  <!-- CSS Header and Footer -->
	<link rel="stylesheet" href="{{ asset('assets/css/headers/header-default.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/css/footers/footer-v1.css')}}">

  <!-- CSS Implementing Plugins -->
	<link rel="stylesheet" href="{{ asset('assets/plugins/animate.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/plugins/line-icons/line-icons.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/plugins/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/plugins/fancybox/source/jquery.fancybox.css')}}">

  <!-- CSS Theme -->
  	<link rel="stylesheet" href="assets/css/theme-colors/blue.css" id="style_color">
    <!-- CSS Customization -->
    	<link rel="stylesheet" href="{{ asset('assets/css/custom.css')}}">
          @yield('styles')
          <!-- Scripts -->
          <script>
              window.Laravel = <?php echo json_encode([
                  'csrfToken' => csrf_token(),
              ]); ?>
          </script>
  </head>
  <body>
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
    	<script type="text/javascript" src="{{ asset('assets/plugins/fancybox/source/jquery.fancybox.pack.js')}}"></script>

    	<!-- JS Customization -->
    	<script type="text/javascript" src="{{ asset('assets/js/custom.js')}}"></script>

    	<!-- JS Page Level -->
    	<script type="text/javascript" src="{{ asset('assets/js/app.js')}}"></script>
    	<script type="text/javascript" src="{{ asset('assets/js/plugins/fancy-box.js')}}"></script>
    	<script type="text/javascript" src="{{ asset('assets/js/plugins/style-switcher.js')}}"></script>
    	<script type="text/javascript">
    		jQuery(document).ready(function() {
    			App.init();
    			FancyBox.initFancybox();
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
