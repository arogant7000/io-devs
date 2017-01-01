<div class="header header-sticky">
	<div class="container">
		<!-- Logo -->
		<a class="logo" href="/">
			<img src="{{ asset('assets/img/tik.png')}}" alt="Logo" >
		</a>
		<!-- End Logo -->

		<!-- Topbar -->
		<div class="topbar">
			<ul class="loginbar pull-right">
				<li class="hoverSelector">
					<i class="fa fa-globe"></i>
					<a>Bahasa</a>
					<ul class="languages hoverSelectorBlock">
						<li class="active">
							<a href="#">Indonesia <i class="fa fa-check"></i></a>
						</li>
						<li><a href="#">English</a></li>
						<li><a href="#">Deutsch</a></li>
					</ul>
				</li>
				<li class="topbar-devider"></li>
				<li><a href="/dashboard">Help</a></li>
				<li class="topbar-devider"></li>


				@if (Auth::guest())
				<li class="cd-log_reg"><a class="cd-signin" href="{{ url('/login') }}">Login</a></li>
				@else
					<li class="hoverSelector">
						<i class="fa fa-globe"></i>
						<a>  {{ Auth::user()->name }} <span class="caret"></span></a>
						<ul class="languages hoverSelectorBlock">

							@if (Auth::user()->role_id == 1)
								<li>
									<a href="{{ url('/logout') }}"
											onclick="event.preventDefault();
															 document.getElementById('logout-form').submit();">
											Logout
									</a>
									<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
											{{ csrf_field() }}
									</form>
								</li>

								<li>
									<a href="{{ url('/dashboard/')}}">Dashboard Admin</a>
								</li>
							@elseif (Auth::user()->role_id == 5)
								<li>
									<a href="{{ url('/logout') }}"
											onclick="event.preventDefault();
															 document.getElementById('logout-form').submit();">
											Logout
									</a>
									<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
											{{ csrf_field() }}
									</form>
								</li>
								<li>
									<a href="{{ url('/dashboard/posts/create')}}">Create Post/News</a>
								</li>
								<li>
									<a href="{{ url('/dashboard/pages/create')}}">Create Page</a>
								</li>
								@else
									<li>
										<a href="{{ url('/logout') }}"
												onclick="event.preventDefault();
																 document.getElementById('logout-form').submit();">
												Logout
										</a>
										<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
												{{ csrf_field() }}
										</form>
									</li>
							@endif
						</ul>
					</li>
				@endif
			</ul>
		</div>

		<!-- End Topbar -->

		<!-- Toggle get grouped for better mobile display -->
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="fa fa-bars"></span>
		</button>
		<!-- End Toggle -->
	</div><!--/end container-->


			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse mega-menu navbar-responsive-collapse">
				<div class="container">
					<ul class="nav navbar-nav">

						<!-- HOME -->
						<li class="active">
							<a href="/"><i class="fa fa-home" aria-hidden="true"></i>
							</a>
						</li>

						<!-- about -->
						<li class="dropdown ">
							<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
								Tentang Kami
							</a>
							<ul class="dropdown-menu">
								<li><a href="/selayang-pandang">Selayang Pandang</a></li>
								<li><a href="/sekilas-tentang-tik">Sekilas tentang TIK</a></li>
								<li><a href="/struktur-organisasi-tik">Struktur Organisasi TIK</a></li>
								<li><a href="/visi-dan-misi-tik">Visi dan Misi TIK</a></li>
							</ul>
						</li>
						<!-- End about -->

						<!-- Prodi -->
						<li class="dropdown ">
							<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
								Program Studi
							</a>
							<ul class="dropdown-menu">
								<li><a href="/teknik-informatika">Teknik Informatika</a></li>
								<li><a href="/teknik-multimedia-dan-jaringan">Teknik Multimedia dan Jaringan</a></li>
							</ul>
						</li>
						<!-- End prodi -->

						<!-- Akademik -->
						<li class="dropdown ">
							<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
								Akademik
							</a>
							<ul class="dropdown-menu">
								<li><a href="/kalender-akademik">Kalender Akademik</a></li>
								<li><a href="/kegiatan-akademik">Kegiatan Akademik</a></li>
							</ul>
						</li>
						<!-- End Akademik -->

						<!-- Kemahasiswaan -->
						<li class="dropdown ">
							<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
								Kemahasiswaan
							</a>
							<ul class="dropdown-menu">

								<li><a href="/komit">KomIT</a></li>
								<li><a href="/itmj">iTMJ</a></li>
							</ul>
						</li>
						<!-- End KEMAHASISWAAN -->

						<!-- Layanan/Arsip -->
						<li class="dropdown ">
							<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
								Layanan/Arsip
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-submenu">
									<a href="javascript:void(0);">Arsip</a>
									<ul class="dropdown-menu">
										@if (Auth::guest())

											@else
												<li><a href="portfolio_2_columns_grid_text.html">Arsip Data SK</a></li>
										@endif
										<li><a href="portfolio_3_columns_grid_text.html">Arsip 2</a></li>
										<li><a href="portfolio_4_columns_grid_text.html">Arsip 3</a></li>
									</ul>
								</li>
								<li class="dropdown-submenu">
									<a href="javascript:void(0);">Layanan</a>
									<ul class="dropdown-menu">
										<li><a href="portfolio_2_columns_grid_text.html">Info Alumni</a></li>
										<li><a href="portfolio_3_columns_grid_text.html">Jurnal</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<!-- End Layanan/Arsip -->

						<!-- Search Block -->
						<li>
							<i class="search fa fa-search search-btn"></i>
							<div class="search-open">
								<div class="input-group animated fadeInDown">
									<input type="text" class="form-control" placeholder="Search">
									<span class="input-group-btn">
										<button class="btn-u" type="button">Go</button>
									</span>
								</div>
							</div>
						</li>
						<!-- End Search Block -->
					</ul>
				</div><!--/end container-->
			</div><!--/navbar-collapse-->
		</div>
