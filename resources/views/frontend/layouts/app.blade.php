<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="">
	<meta name="keywords" content="" />
	<title>Sistem Informasi Gang Elang 6 & 8</title>
	<link href="{{asset('frontend/images/jsr.png')}}" rel="shortcut icon" type="image/png">
	<!-- Main Stylesheet -->
	<link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">
</head>

<body>
	<!-- Preloader Start -->
	<!-- <div class="preloader"></div> -->
	<!-- Preloader End -->
	<!-- header Start -->
	<header class="header-style-two">
		<div class="header-wrapper">
			<div class="header-top-area bg-gradient-color d-none d-lg-block">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 header-top-left-part">
							<span class="address"><i class="webexflaticon flaticon-placeholder-1"></i>Jaya Sampurna Residance, Serang Baru</span>
							<span class="phone"><i class="webexflaticon flaticon-send"></i>gangelang68@gmail.com</span>
						</div>
						<div class="col-lg-6 header-top-right-part text-right">
							<ul class="social-links">
								<li><a href="#"><i class=""></i>Login User</a></li>
								
							</ul>
							<div class="language">
								<a class="language-btn" href="#"><i class="webexflaticon flaticon-internet"></i>Indo</a>
								<ul class="language-dropdown">
									<li><a href="#">English</a></li>
									<li><a href="#">Jawa</a></li>
									<li><a href="#">Sunda</a></li>
									<li><a href="#">Padang</a></li>
									<li><a href="#">Batak</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="bt_blank_nav"></div>
			<div class="header-navigation-area two-layers-header header-middlee bt_stick bt_sticky">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<a class="navbar-brand logo f-left mrt-10 mrt-md-0" href="home">
								<img id="logo-image" class="img-center" src="{{asset('frontend/images/jsr.png')}}" height="50" width="250" alt="">
							</a>
							<div class="mobile-menu-right"></div>
							<div class="header-searchbox-style-two d-none d-xl-block">
								<div class="side-panel side-panel-trigger text-right d-none d-lg-block">
									<span class="bar1"></span>
									<span class="bar2"></span>
									<span class="bar3"></span>
								</div>
								<div class="show-searchbox">
									<a href="#"><i class="webex-icon-Search"></i></a>
								</div>
								<div class="toggle-searchbox">
									<form action="#" id="searchform-all" method="get">
										<div>
											<input type="text" id="s" class="form-control" placeholder="Search...">
											<div class="input-box">
												<input type="submit" value="" id="searchsubmit"><i class="fas fa-search"></i>
											</div>
										</div>
									</form>
								</div>
							</div>
							<!-- <div class="side-panel-content">
								<div class="close-icon">
									<button><i class="webex-icon-cross"></i></button>
								</div>
								<div class="side-panel-logo mrb-30">
									<a href="index.html">
										<img src="images/logo-sidebar-dark.png" alt="" />
									</a>
								</div>
								<div class="side-info mrb-30">
									<div class="side-panel-element mrb-25">
										<h4 class="mrb-10">Office Address</h4>
										<ul class="list-items">
											<li><span class="fa fa-map-marker-alt mrr-10 text-primary-color"></span>121 King Street, Australia</li>
											<li><span class="fas fa-envelope mrr-10 text-primary-color"></span>example@gmail.com</li>
											<li><span class="fas fa-phone-alt mrr-10 text-primary-color"></span>(00) 2500-123-4567</li>
										</ul>
									</div>
									<div class="side-panel-element mrb-30">
										<h4 class="mrb-15">Pintarest</h4>
										<ul class="pintarest-list">
											<li><a href="#"><img class="img-full" src="http://placehold.it/90x90" alt=""></a></li>
											<li><a href="#"><img class="img-full" src="http://placehold.it/90x90" alt=""></a></li>
											<li><a href="#"><img class="img-full" src="http://placehold.it/90x90" alt=""></a></li>
											<li><a href="#"><img class="img-full" src="http://placehold.it/90x90" alt=""></a></li>
											<li><a href="#"><img class="img-full" src="http://placehold.it/90x90" alt=""></a></li>
											<li><a href="#"><img class="img-full" src="http://placehold.it/90x90" alt=""></a></li>
										</ul>
									</div>
								</div>
								<h4 class="mrb-15">Social List</h4>
								<ul class="social-list">
									<li><a href="#"><i class="fab fa-facebook"></i></a></li>
									<li><a href="#"><i class="fab fa-twitter"></i></a></li>
									<li><a href="#"><i class="fab fa-instagram"></i></a></li>
									<li><a href="#"><i class="fab fa-google-plus"></i></a></li>
								</ul>
							</div> -->
							<div class="main-menu f-right">
								<nav id="mobile-menu-right">
									<ul>
										<li class="">
											<a href="home">Home</a>
											<!-- <ul class="sub-menu">
												<li><a href="home.blade.php">Home Layout 1</a></li>
												<li><a href="index2.html">Home Layout 2</a></li>
												<li><a href="index3.html">Home Layout 3</a></li>
												<li><a href="index4.html">Home Layout 4</a></li>
												<li><a href="index-onepage.html">Home One Page</a></li>
												<li class="has-sub-child">
													<a href="#">Header Styles</a>
													<ul class="sub-menu">
														<li><a href="page-header-style-one.html">Header Style One</a></li>
														<li><a href="page-header-style-two.html">Header Style Two</a></li>
													</ul>
												</li> 
											</ul> -->
										</li>
										<li><a href="page-about.html">About</a></li>
										<li class="has-sub">
											<a href="#">Agenda Gang</a>
											<ul class="sub-menu">
												<!-- <li class="has-sub-child">
													<a href="#">Event Bulanan</a>
													<ul class="sub-menu right-view">
														<li><a href="page-our-team.html">All Members</a></li>
														<li><a href="page-single-team.html">Team Details</a></li>
													</ul>
												</li> -->
												<li><a href="page-pricing.html">agenda Bulanan</a></li>
												<li><a href="page-testimonials.html">Agenda Tahunan</a></li>
												<!-- <li><a href="page-contact-us.html">Contact Us</a></li>
												<li><a href="page-faqs.html">FAQs</a></li>
												<li><a href="404.html">Eror Page</a></li> -->
											</ul>
										</li>
										<li class="has-sub">
											<a href="#">Services</a>
											<ul class="sub-menu">
												<li><a href="page-all-services.html">Tetangga</a></li>
												<li><a href="service-business-maintanance.html">Tambah Warga Baru</a></li>
												<li><a href="/data-warga">Data Warga</a></li>
												<!-- <li><a href="service-business-consulting.html">Business Consulting</a></li>
												<li><a href="service-business-partnership.html">Business Partnership</a></li>
												<li><a href="service-company-development.html">Company Development</a></li>
												<li><a href="service-investment-planning.html">Investment Planning</a></li> -->
											</ul>
										</li>
										<li class="has-sub right-view">
											<a href="#">Keuangan</a>
											<ul class="sub-menu">
												<li><a href="page-case-study.html">Laporan Bulanan</a></li>
												<li><a href="page-single-case-study.html">Jumlah Kas Warga</a></li>
											</ul>
										</li>
										<li class=" right-view">
											<a href="#">Kabar Tetangga</a>
											<ul class="sub-menu">
												<!-- <li><a href="page-news.html">News Classic</a></li>
												<li><a href="page-news-left-sidebar.html">News Left Sidebar</a></li>
												<li><a href="page-news-right-sidebar.html">News Right Sidebar</a></li>
												<li><a href="page-single-news.html">Single News</a></li> -->
											</ul>
										</li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- header End -->

    @yield('content')
	
	<!-- Footer Area Start -->
	<footer class="footer">
		<div class="footer-bottom-area">
			<div class="container">
				<div class="row">
					<div class="col-xl-12">
						<div class="text-center">
							<span class="text-light-gray">Copyright © 2024 by <a class="text-primary-color" target="_blank" href=""> @TukangKayu Simpur</a> | All rights reserved </span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer Area End -->
	 
	<!-- BACK TO TOP SECTION -->
	<div class="back-to-top bg-gradient-color">
		<i class="fab fa-angle-up"></i>
	</div>
	<!-- Integrated important scripts here -->
	<script src="{{asset('fromtend/js/jquery.v1.12.4.min.js')}}"></script>
	<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('frontend/js/jquery-core-plugins.js')}}"></script>
	<script src="{{asset('frontend/js/main.js')}}"></script>

    

</body>

</html>