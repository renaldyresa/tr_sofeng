<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="colorlib">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>UKSW</title>
	<!--
			CSS
			============================================= -->
	<link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/linearicons.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/magnific-popup.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/nice-select.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/animate.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/owl.carousel.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/jquery-ui.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/main.css">
</head>

<body>
	<?php
	$this->load->view('templates/header');
	?>
	<!-- start banner Area -->
	<section class="banner-area relative" id="home">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row fullscreen d-flex align-items-center justify-content-between">
				<div class="banner-content col-lg-9 col-md-12">
					<h1 class="text-uppercase">
						UNIVERISTAS KRISTEN SATYA WACANA
					</h1>
					<p class="pt-10 pb-10" style="color: white; font-size: 18px;">
						Amsal 1:7 TB "Takut akan TUHAN adalah permulaan pengetahuan, tetapi orang bodoh menghina hikmat dan didikan."
					</p>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- Start feature Area -->
	<section class="feature-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="single-feature">
						<div class="title">
							<h4>Jadwal Pendaftaran</h4>
						</div>
						<div class="desc-wrap">
							<p>
								Jalur Pemamik (Tanpa Tes)<br>
								Jalur Tes Harian (One Day Service)
							</p>
							<a href="<?php echo base_url() ?>event">Detail</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="single-feature">
						<div class="title">
							<h4>Universitas</h4>
						</div>
						<div class="desc-wrap">
							<p>
								Universitas Kristen Satya Wacana (UKSW) adalah sebuah universitas swasta tertua dan salah satu yang terbaik di Indonesia, terletak di Salatiga, Jawa Tengah.
							</p>
							<a href="<?php echo base_url() ?>home/About">Detail</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="single-feature">
						<div class="title">
							<h4>Akreditasi</h4>
						</div>
						<div class="desc-wrap">
							<p>
								Universitas Kristen Satya Wacana berhasil meraih akreditasi A, yang masih berlaku dan tanggal kedaluwarsa akreditasi institusi akan berakhir pada tanggal 23 Mei 2022.
							</p>
							<a href="<?php echo base_url() ?>home/About">Detail</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End feature Area -->

	<!-- Start popular-course Area -->
	<section class="popular-course-area section-gap">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content pb-70 col-lg-8">
					<div class="title text-center">
						<h1 class="mb-10">Event Tarbaru</h1>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="active-popular-carusel">
					<?php foreach ($data as $dt) { ?>
						<div class="single-popular-carusel">
							<div class="details">
								<a href="<?php echo site_url('Event/detail/' . $dt->Id_Event) ?>">
									<div class="card">
										<img src="<?= base_url('upload/gambar/') . $dt->Gambar ?>" height="190px" class="card-img-top" alt="...">
										<div class="card-body">
											<h4>
												<?= $dt->Nama_Event ?>
											</h4>
										</div>
									</div>
								</a>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</section>
	<!-- End popular-course Area -->
	<?php $this->load->view('templates/footer'); ?>
	<script src="<?php echo base_url() ?>/assets/js/vendor/jquery-2.2.4.min.js"></script>
	<script src="<?php echo base_url() ?>/assets/js/easing.min.js"></script>
	<script src="<?php echo base_url() ?>/assets/js/hoverIntent.js"></script>
	<script src="<?php echo base_url() ?>/assets/js/superfish.min.js"></script>
	<script src="<?php echo base_url() ?>/assets/js/jquery.ajaxchimp.min.js"></script>
	<script src="<?php echo base_url() ?>/assets/js/jquery.magnific-popup.min.js"></script>
	<script src="<?php echo base_url() ?>/assets/js/jquery.tabs.min.js"></script>
	<script src="<?php echo base_url() ?>/assets/js/jquery.nice-select.min.js"></script>
	<script src="<?php echo base_url() ?>/assets/js/owl.carousel.min.js"></script>
	<script src="<?php echo base_url() ?>/assets/js/mail-script.js"></script>
	<script src="<?php echo base_url() ?>/assets/js/main.js"></script>
</body>

</html>