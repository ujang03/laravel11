@extends('frontend.layouts.app')

@section('content')
  <!-- Service Section Start -->
	<section class="serivce-section bg-silver-light pdt-105 pdb-80" data-background="images/bg/abs-bg7.png">
		<div class="section-title">
			<div class="container">
				<div class="row">
					<div class="col-lg-5">
						<div class="section-title-left-part mrb-sm-30">
							<div class="section-left-sub-title mb-20">
								<h5 class="sub-title text-primary-color">GANG ELANG 6 DAN 7</h5>
							</div>
							<h2 class="title">Kegiatan Kami di Gang Elang</h2>
						</div>
					</div>
					<div class="offset-lg-1 col-lg-6">
						<div class="section-title-right-part">
							<p>Gang Perumahan sebagai Tempat Aktivitas
                                Kehidupan warga dapat dilihat dari aktivitas yang terjadi di gang. Kehidupan tersebut terjadi selama hampir dua puluh empat jam sehari. Selama kurun waktu tersebut, beragam
                                aktivitas terjadi di gang.
                            </p>
                        </div>
					</div>
				</div>
			</div>
		</div>
		<div class="section-content">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-xl-3">
						<div class="service-box">
							<div class="service-icon">
								<span class="webexflaticon flaticon-plan"></span>
							</div>
							<div class="service-content">
								<div class="title">
									<a href="#"><h3>User Management</h3></a>
								</div>
								<div class="para">
									<p>User yang bisa akses Ke Web Gang Elang 6 dan 8</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-3">
						<div class="service-box">
							<div class="service-icon">
								<span class="webexflaticon flaticon-meeting"></span>
							</div>
							<div class="service-content">
								<div class="title">
									<a href="#"><h3>Tetangga Kamu</h3></a>
								</div>
								<div class="para">
									<p>Saudara terdekat adalah Tetangga mu.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-3">
						<div class="service-box">
							<div class="service-icon">
								<span class="webexflaticon flaticon-growth"></span>
							</div>
							<div class="service-content">
								<div class="{{ request()->is('data-warga') ? 'active' : '' }}">
									<a href="/data-warga"><h3>Data Warga</h3></a>
								</div>
								<div class="para">
									<p>Survei jumlah warga sekitar Gang Elang</p>
								</div>
							</div>
						</div>
					</div>
					<!-- <div class="col-md-6 col-xl-3">
						<div class="service-box">
							<div class="service-icon">
								<span class="webexflaticon flaticon-benchmark"></span>
							</div>
							<div class="service-content">
								<div class="title">
									<a href="#"><h3>Business Strategy</h3></a>
								</div>
								<div class="para">
									<p>We always provide people a complete solution focused of any business.</p>
								</div>
							</div>
						</div>
					</div> -->
					<div class="col-md-6 col-xl-3">
						<div class="service-box">
							<div class="service-icon">
								<span class="webexflaticon flaticon-search-1"></span>
							</div>
							<div class="service-content">
								<div class="title">
									<a href="#"><h3>Agenda Gang Elang</h3></a>
								</div>
								<div class="para">
									<p>Beragam kegiatan di gang kita.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-3">
						<div class="service-box">
							<div class="service-icon">
								<span class="webexflaticon flaticon-wallet"></span>
							</div>
							<div class="service-content">
								<div class="title">
									<a href="#"><h3>Keuangan Gang</h3></a>
								</div>
								<div class="para">
									<p>Laporan keuangan Gang Elang 6 dan 8.</p>
								</div>
							</div>
						</div>
					<!-- </div>
					<div class="col-md-6 col-xl-3">
						<div class="service-box">
							<div class="service-icon">
								<span class="webexflaticon flaticon-profits"></span>
							</div>
							<div class="service-content">
								<div class="title">
									<a href="#"><h3>Online Marketing</h3></a>
								</div>
								<div class="para">
									<p>We always provide people a complete solution focused of any business.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-3">
						<div class="service-box">
							<div class="service-icon">
								<span class="webexflaticon flaticon-medal-1"></span>
							</div>
							<div class="service-content">
								<div class="title">
									<a href="#"><h3>Business Insurance</h3></a>
								</div>
								<div class="para">
									<p>We always provide people a complete solution focused of any business.</p>
								</div>
							</div>
						</div>
					</div> -->
				</div>
			</div>
		</div>
	</section>
	<!-- Service Section End -->
  
  @endsection