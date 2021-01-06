<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>Amatleta - inicio</title>	

		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="Runs - Empresa de desarrollo y diseño web">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{asset('storage/styles_S/vendor/bootstrap/css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{asset('storage/styles_S/vendor/fontawesome-free/css/all.min.css')}}">
		<link rel="stylesheet" href="{{asset('storage/styles_S/vendor/animate/animate.min.css')}}">
		<link rel="stylesheet" href="{{asset('storage/styles_S/vendor/simple-line-icons/css/simple-line-icons.min.css')}}">
		<link rel="stylesheet" href="{{asset('storage/styles_S/vendor/owl.carousel/assets/owl.carousel.min.css')}}">
		<link rel="stylesheet" href="{{asset('storage/styles_S/vendor/owl.carousel/assets/owl.theme.default.min.css')}}">
		<link rel="stylesheet" href="{{asset('storage/styles_S/vendor/magnific-popup/magnific-popup.min.css')}}">

		<!-- CSS -->
		<link rel="stylesheet" href="{{asset('storage/styles_S/css/theme.css')}}">
		<link rel="stylesheet" href="{{asset('storage/styles_S/css/theme-elements.css')}}">
		<link rel="stylesheet" href="{{asset('storage/styles_S/css/theme-blog.css')}}">
		<link rel="stylesheet" href="{{asset('storage/styles_S/css/theme-shop.css')}}">

		<!-- CSS -->
		<link rel="stylesheet" href="{{asset('storage/styles_S/vendor/rs-plugin/css/settings.css')}}">
		<link rel="stylesheet" href="{{asset('storage/styles_S/vendor/rs-plugin/css/layers.css')}}">
		<link rel="stylesheet" href="{{asset('storage/styles_S/vendor/rs-plugin/css/navigation.css')}}">
		<link rel="stylesheet" href="{{asset('storage/styles_S/vendor/circle-flip-slideshow/css/component.css')}}">
		
		<!-- CSS -->


		<!-- CSS -->
		<link rel="stylesheet" href="{{asset('storage/styles_S/css/skins/default.css')}}"> 

		<!-- CSS -->
		<link rel="stylesheet" href="{{asset('storage/styles_S/css/custom.css')}}">

		<!-- Head Libs -->
		<script src="{{asset('storage/styles_S/vendor/modernizr/modernizr.min.js')}}"></script>

		@yield('head')

	</head>
	<body class="loading-overlay-showing" data-plugin-page-transition data-loading-overlay data-plugin-options="{'hideDelay': 500}">
		<div class="loading-overlay">
			<div class="bounce-loader">
				<div class="bounce1"></div>
				<div class="bounce2"></div>
				<div class="bounce3"></div>
			</div>
		</div>

		<div class="body">
			<header id="header" class="header-transparent header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}" style="{{Route::is('home') ? '' : 'background-color:#212529'}}" >
				<div class="header-body border-top-0 bg-dark box-shadow-none">
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column justify-content-end">
								<div class="header-row">
									<div class="header-logo">
										<a href="{{route('home')}}">
											<img src="{{asset('storage/img/amatleta-logo.png')}}" width="100" alt="logo amatleta superior">
										</a>
									</div>
									<div class="header-nav header-nav-links header-nav-dropdowns-dark header-nav-light-text order-2 order-lg-1">
										<div class="header-nav-main header-nav-main-mobile-dark header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
											<nav class="collapse">
												<ul class="nav nav-pills" id="mainNav">
													<li class="dropdown">
														<a class="dropdown-item dropdown-toggle active" href="{{ route('home') }}">
															Inicio
														</a>
													</li>
													<li class="dropdown">
														<a class="dropdown-item dropdown-toggle active" href="{{ route('race.index') }}">
															Carrera
														</a>
													</li>
													<li class="dropdown">
														<a class="dropdown-item dropdown-toggle active" href="{{ route('blog.index') }}">
															Blog
														</a>
													</li>
													<li class="dropdown">
														<a class="dropdown-item dropdown-toggle active" href="{{ route('runner_team.index') }}">
															Runner Team
														</a>
													</li>
													<li class="dropdown">
														<a class="dropdown-item dropdown-toggle active" href="http://tiendaamatleta.runs.com.ar">
															Tienda
														</a>
													</li>
													@if($data_logged_user)
													<li class="dropdown">
														<a class="dropdown-item dropdown-toggle active" href="{{ route('logout') }}">
															Cerrar sesión
														</a>
													</li>
													@else
													<li class="dropdown" id="login_id">
														<input type="hidden" id="token" value="{{ csrf_token() }}">
														<a class="dropdown-item dropdown-toggle active" href="#" data-toggle="modal" data-target="#login-modal">Iniciar sesión</a>

														<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="smallModalLabel" aria-hidden="true">
															<div class="modal-dialog modal-sm">
																<div class="modal-content">
																	<div class="modal-header">
																		<h4 class="modal-title" id="smallModalLabel">Iniciar sesión</h4>
																		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
																	</div>
																	<div class="modal-body">
																	  <div class="col-sm-12">
																	    <label for="user_label" class="form-label">Usuario</label>
																	    <div class="input-group has-validation">
																	      <span class="input-group-text"><i class="fas fa-user"></i></span>
																	      <input type="text" :class="see_user[0]" v-model="user" id="user_label" required>
																        <div class="invalid-feedback">
																          @{{see_user[1]}}
																        </div>
																	    </div>
																	  </div>
																	  <hr class="col-sm-5 offset-sm-3">
																	  <div class="col-sm-12">
																	    <label for="password_label" class="form-label">Contraseña</label>
																	    <div class="input-group has-validation">
																	      <span class="input-group-text"><i class="fas fa-key"></i></span>
																	      <input type="password" :class="see_password[0]" v-model="password" id="password_label" required>
																        <div class="invalid-feedback">
																          @{{see_password[1]}}
																        </div>
																	    </div>
																	  </div>
																	</div>
																	<div class="modal-footer">
																		<!-- buttons -->
																		<button v-if="!sending" @click="login_now('{{route('login')}}')" type="button" class="btn btn-light">Iniciar sesión</button>
																		<button v-if="sending" class="btn btn-light" type="button" disabled>
																		  <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
																		  Espere...
																		</button>
																		<!-- /buttons -->
																	</div>
																</div>
															</div>
														</div>
													</li>
													@endif
												</ul>
											</nav>
										</div>
										<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
											<i class="fas fa-bars"></i>
										</button>
									</div>
									<div class="header-nav-features header-nav-features-light header-nav-features-no-border header-nav-features-lg-show-border order-1 order-lg-2">
										<div class="header-nav-feature header-nav-features-search d-inline-flex">
											<a href="#" class="header-nav-features-toggle" data-focus="headerSearch"><i class="fas fa-search header-nav-top-icon"></i></a>
											<div class="header-nav-features-dropdown header-nav-features-dropdown-mobile-fixed" id="headerTopSearchDropdown">
												<form role="search" action="page-search-results.html" method="get">
													<div class="simple-search input-group">
														<input class="form-control text-1" id="headerSearch" name="q" type="search" value="" placeholder="Search...">
														<span class="input-group-append">
															<button class="btn" type="submit">
																<i class="fa fa-search header-nav-top-icon"></i>
															</button>
														</span>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
			<div id="alert_spawn">
				<!-- error -->
				<div v-if="alert" :class="status" role="alert" style="position:absolute;top:0;left:0;z-index:99999;right:0;margin:auto;">
					<button @click="alert = !alert" type="button" class="close"><span aria-hidden="true">×</span></button>
					<strong><i :class=""></i>@{{title}}!</strong> @{{content}}.
					<ul>
						<li v-for="item of list">@{{item}}.</li>
					</ul>
				</div>
			</div>
			@yield('content')

			<footer id="footer" class="mt-0">
				<div class="container">
					<div class="row py-5 my-4">
						<div class="col-md-6 mb-4 mb-lg-0">
							<a href="#" class="logo pr-0 pr-lg-3">
								<img alt="Amatleta - footer" src="{{asset('storage/img/amatleta-logo.png')}}" class="opacity-7 bottom-4" height="33">
							</a>
							<p class="mt-2 mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu pulvinar magna. Phasellus semper scelerisque purus, et semper nisl lacinia sit amet. Praesent venenatis turpis vitae purus semper...</p>
							<p class="mb-0"><a href="#" class="btn-flat btn-xs text-color-light"><strong class="text-2">Ver más</strong><i class="fas fa-angle-right p-relative top-1 pl-2"></i></a></p>
						</div>
						<div class="col-md-6">
							<h5 class="text-3 mb-3">Contacto</h5>
							<div class="row">
								<div class="col-md-6">
									<ul class="list list-icons list-icons-lg">
										<li class="mb-1"><i  class="far fa-dot-circle text-color-primary"></i><p class="m-0">vacío, vacío</p></li>
										<li class="mb-1"><i  class="fab fa-whatsapp text-color-primary"></i><p class="m-0"><a href="tel:8001234567">+00 000-000-0000</a></p></li>
										<li class="mb-1"><i  class="far fa-envelope text-color-primary"></i><p class="m-0"><a href="mailto:mail@example.com">mail@mail.com</a></p></li>
									</ul>
								</div>
								<div class="col-md-6">
									<ul class="list list-icons list-icons-sm">
										<li><i class="fas fa-angle-right"></i><a href="page-faq.html" class="link-hover-style-1 ml-1"> Nosotros</a></li>
										<li><i class="fas fa-angle-right"></i><a href="sitemap.html" class="link-hover-style-1 ml-1"> Ubicación</a></li>
										<li><i class="fas fa-angle-right"></i><a href="contact-us.html" class="link-hover-style-1 ml-1"> Contacto</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-copyright footer-copyright-style-2">
					<div class="container py-2">
						<div class="row py-4">
							<div class="col d-flex align-items-center justify-content-center">
								<p>© Copyright 2020. Amatleta.</p>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>
		<!-- Vendor -->
		<script src="{{asset('storage/styles_S/vendor/jquery/jquery.min.js')}}"></script>
		<script src="{{asset('storage/styles_S/vendor/jquery.appear/jquery.appear.min.js')}}"></script>
		<script src="{{asset('storage/styles_S/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
		<script src="{{asset('storage/styles_S/vendor/jquery.cookie/jquery.cookie.min.js')}}"></script>
		<script src="{{asset('storage/styles_S/vendor/popper/umd/popper.min.js')}}"></script>
		<script src="{{asset('storage/styles_S/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('storage/styles_S/vendor/common/common.min.js')}}"></script>
		<script src="{{asset('storage/styles_S/vendor/jquery.validation/jquery.validate.min.js')}}"></script>
		<script src="{{asset('storage/styles_S/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
		<script src="{{asset('storage/styles_S/vendor/jquery.gmap/jquery.gmap.min.js')}}"></script>
		<script src="{{asset('storage/styles_S/vendor/jquery.lazyload/jquery.lazyload.min.js')}}"></script>
		<script src="{{asset('storage/styles_S/vendor/isotope/jquery.isotope.min.js')}}"></script>
		<script src="{{asset('storage/styles_S/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
		<script src="{{asset('storage/styles_S/vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
		<script src="{{asset('storage/styles_S/vendor/vide/jquery.vide.min.js')}}"></script>
		<script src="{{asset('storage/styles_S/vendor/vivus/vivus.min.js')}}"></script>
		
		<!-- Settings -->
		<script src="{{asset('storage/styles_S/js/theme.js')}}"></script>
		
		<!-- Views -->
		<script src="{{asset('storage/styles_S/vendor/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
		<script src="{{asset('storage/styles_S/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
		<script src="{{asset('storage/styles_S/vendor/circle-flip-slideshow/js/jquery.flipshow.min.js')}}"></script>
		<script src="{{asset('storage/styles_S/js/views/view.home.js')}}"></script>
		
		<!-- Custom -->
		<script src="{{asset('storage/styles_S/js/custom.js')}}"></script>
		
		<!-- Files -->
		<script src="{{asset('storage/styles_S/js/theme.init.js')}}"></script>
		<script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/1.5.1/vue-resource.min.js"></script>
		
		@if(!$data_logged_user)
		<script src="{{asset('storage/js/authentication/login.js')}}"></script>
		@endif
		<script src="{{asset('storage/js/alert.js')}}"></script>

		<script>
			$('#login-modal').appendTo("body") 
		</script>
		@yield('script')

	</body>
</html>