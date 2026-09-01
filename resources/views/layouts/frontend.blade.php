<!doctype html>
<html lang="en-US">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
		<link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}"/>
		<title>Studio Vision Films | @yield('title')</title>

		<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" type="text/css" media="all"/>
		<link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}" type="text/css" media="all" />
		<link rel="stylesheet" href="{{ asset('assets/css/ionicons.min.css') }}" type="text/css" media="all" />
		<link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css') }}" type="text/css" media="all"/>
		<link rel="stylesheet" href="{{ asset('assets/css/owl.theme.css') }}" type="text/css" media="all"/>
		<link rel="stylesheet" href="{{ asset('assets/css/settings.css') }}" type="text/css" media="all"/>
		<link rel="stylesheet" href="{{ asset('assets/css/component.css') }}" type="text/css" media="all"/>
		<link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}" type="text/css" media="all"/>
		<link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}" type="text/css" media="all"/>
		<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" type="text/css" media="all"/>
		<link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}" type="text/css" media="all"/>
		<link href="//fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i%7CMontserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i%7CLato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet"/>
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		@stack('styles')
	</head>
	<body>
		<div class="noo-spinner">
			<div class="spinner">
				<div class="child double-bounce1"></div>
				<div class="child double-bounce2"></div>
			</div>
		</div>
		@include('components.frontend.mobile_header')
		<div class="site">
			@include('components.frontend.header')

             @yield('content')

             @include('components.frontend.footer')
			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="copyright-container">
							<div class="col-md-6 p-0">
								<div class="copyright-left">
									Copyright © {{date('Y')}} <a href="#">StudioVisionFilms</a> - All Rights Reserved.
								</div>
							</div>
							<div class="col-md-6 p-0">
								<div class="copyright-right">
									<ul>
										<li><a href="#">Privacy Policy</a></li>
										<li><a href="#">Term And Conditions</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- <div class="modals">
			<div class="md-modal md-effect-1" id="modal-1">
				<div class="md-content bg-transparent">
					<iframe src="https://player.vimeo.com/video/177252412" width="500" height="281" allowfullscreen></iframe>
					<button class="md-close">Close me!</button>
				</div>
			</div>
		</div> -->

		<div class="md-overlay"></div><!-- the overlay element -->

		<a class="backtotop" id="backtotop"><i class="ion-android-arrow-up"></i></a>

		<script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('assets/js/jquery-migrate.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('assets/js/modernizr-2.7.1.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('assets/js/jquery.isotope.init.js') }}"></script>
		<script type="text/javascript" src="{{ asset('assets/js/classie.js') }}"></script>
		<script type="text/javascript" src="{{ asset('assets/js/modalEffects.js') }}"></script>
		<script type="text/javascript" src="{{ asset('assets/js/slick.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('assets/js/script.js') }}"></script>

		<script type="text/javascript" src="{{ asset('assets/js/jquery.themepunch.tools.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('assets/js/jquery.themepunch.revolution.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('assets/js/extensions/revolution.extension.video.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('assets/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('assets/js/extensions/revolution.extension.actions.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('assets/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('assets/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('assets/js/extensions/revolution.extension.navigation.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('assets/js/extensions/revolution.extension.migration.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('assets/js/extensions/revolution.extension.parallax.min.js') }}"></script>
	</body>
</html>