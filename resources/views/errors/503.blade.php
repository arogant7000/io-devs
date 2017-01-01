<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<title>404 Not Found | iT-devs</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico">

	<!-- Web Fonts -->
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,700&amp;subset=cyrillic,latin">

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

	<!-- CSS Page Style -->
	<link rel="stylesheet" href="{{ asset('assets/css/pages/page_404_error4.css')}}">

	<!-- CSS Customization -->
	<link rel="stylesheet" href="{{ asset('assets/css/custom.css')}}">
</head>

<body>
	<!--=== Error V5 ===-->
	<div class="container valign__middle">
		<!--Error Block-->
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="error-v5">
					<a class="logo-a" href="#"><img alt="" src="assets/img/tik.png" class="logo"></a>
					<h1>That's an error!</h1>
					<span class="sorry">The requested URL was not found on this server.<br> That's all we know.</span>
					<img class="error-img" src="assets/img/error/error-404-v5.png" alt="error">
					<form>
						<div class="input-group col-md-12">
							<input type="text" class="form-control" placeholder="Try to find something">
							<span class="input-group-btn">
								<button class="btn-u" type="button">Search</button>
							</span>
						</div><!-- /input-group -->
					</form>
					<br>
					<span><a href="/">Back home</a></span>
				</div>
			</div>
		</div>
	</div><!--/container-->
	<!--End Error Block-->

	<!--=== Sticky Footer ===-->
	<div class="container sticky-footer">
		<p class="copyright-space">
			2016 &copy; All Rights Reserved.Template by <a href="it-dev.io" target="_blank" class="color-green">IT-DEV.IO</a>
		</p>
	</div>
	<!--=== End Sticky Footer ===-->

	<!-- JS Global Compulsory -->
	<script src="{{ asset('assets/plugins/jquery/jquery.min.js')}}"></script>
	<script src="{{ asset('assets/plugins/jquery/jquery-migrate.min.js')}}"></script>
	<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

	<!-- JS Implementing Plugins -->
	<script src="{{ asset('assets/plugins/back-to-top.js')}}"></script>
	<script src="{{ asset('assets/plugins/backstretch/jquery.backstretch.min.js')}}"></script>

	<!-- JS Page Level -->
	<script src="{{ asset('assets/js/app.js')}}"></script>

	<script>
		jQuery(document).ready(function() {
			App.init();
		});
		$.backstretch([
			"assets/img/error/error-v5.jpg"
			])
	</script>
	<!--[if lt IE 9]>
		<script src="assets/plugins/respond.js"></script>
		<script src="assets/plugins/html5shiv.js"></script>
		<script src="assets/plugins/placeholder-IE-fixes.js"></script>
		<![endif]-->
	</body>
	</html>
