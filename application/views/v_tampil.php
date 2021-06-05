<!DOCTYPE html>
<html>
<style>
	.scroll-left {
	 height: 25px;	
	 overflow: hidden;
	 position: relative;
	 background: #4A473F;
	 color: white;
	 border: 1px #4A473F;
	}
	.scroll-left p {
	 position: absolute;
	 width: 100%;
	 height: 100%;
	 margin: 0;
	 line-height: 25px;
	 text-align: center;
	 /* Starting position */
	 transform:translateX(100%);
	 /* Apply animation to this element */
	 animation: scroll-left 15s linear infinite;
	}
	/* Move it (define the animation) */
	@keyframes scroll-left {
	 0%   {
	 transform: translateX(100%); 		
	 }
	 100% {
	 transform: translateX(-100%); 
	 }
	}
</style>
<div class="scroll-left">
<marquee behavior="scroll" direction="left" scrollamount="10">Halo! &emsp; &emsp; &emsp; &emsp;&emsp; &emsp; &emsp; &emsp; &emsp; &emsp; Scroll down untuk lihat jadwal Ujian Akhir Semester Genap Tahun Akademik 2021/2022. &emsp; &emsp; &emsp; &emsp;&emsp; &emsp; &emsp; &emsp; &emsp; &emsp; Semoga sehat selalu, jangan lupa belajar yah🤗.&emsp; &emsp; &emsp; &emsp;&emsp; &emsp; &emsp; &emsp; &emsp; &emsp; Untuk referensi belajar silahkan kunjungi bit.ly/materikuliahmu yang sudah disiapkan oleh Divisi Akademik HMMI atau klik menu "AYO BELAJAR". &emsp; &emsp; &emsp; &emsp;&emsp; &emsp; &emsp; &emsp; &emsp; &emsp; Seperti biasa, untuk informasi selengkapnya silahkan kunjungi s.id/Hadiah19 atau klik menu HADIAH 19. &emsp; &emsp; &emsp; &emsp;&emsp; &emsp; &emsp; &emsp; &emsp; &emsp; Tetap semangat💚!</marquee>
</div>

<head>
	<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ASSIGNMENT #2 WORKSHOP RND 2021 - A019011</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

	<!-- Favicons -->
	<link rel="icon" href="<?php echo base_url('/assets/img/favicon.png') ?>">
  <link href="<?php echo base_url('/assets/img/apple-touch-icon.png') ?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url('/assets/vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('/assets/vendor/icofont/icofont.min.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('/assets/vendor/remixicon/remixicon.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('/assets/vendor/owl.carousel/assets/owl.carousel.min.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('/assets/vendor/boxicons/css/boxicons.min.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('/assets/vendor/venobox/venobox.css')?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url('/assets/css/style.css')?>" rel="stylesheet">
</head>

<body>
	<header id="header" class="header-tops">
    <div class="container">

       <h1><a href="<?php echo base_url('crud/index'); ?>">NURROHMAH A | A019011</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
      <h2>LAMAN INI DIBUAT UNTUK MEMENUHI <span>TUGAS KE-2 WORKSHOP RND </span>SABTU, 22 MEI 2021</h2>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="<?php echo base_url('crud/index'); ?>">JADWAL</a></li>
          <li class="active"><a href="https://drive.google.com/drive/folders/1zuv6m3D0kTxuRnOHzHJeEhIpZaLtcyAg">AYO BELAJAR</a></li>
          <li class="active"><a href="https://docs.google.com/spreadsheets/d/1HPURlrrVQG9gqJe8FKvwG2fIDrcb8skZXVbj-KxqEe8/edit">HADIAH 19</a></li>
        </ul>
      </nav><!-- .nav-menu -->

      <div class="social-links">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="google-plus"><i class="icofont-skype"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></a>
      </div>

    </div>
  </header><!-- End Header -->

	<div class="container">
		<div class="coulmn">
			<div class="col align-self-center">
			<center>
				<h1>
					JADWAL UJIAN AKHIR SEMESTER GENAP TAHUN AKADEMIK 2020/2021 ANGKATAN 2019
				</h1>
			</center>
			<center>
				<button type="button" class="btn btn-outline-light">
					<?php echo anchor('crud/tambah','TAMBAH DATA'); ?>
				</button>
			</center>
			<table class="table table-light table-striped" style="margin:30px auto;" border="0.1">
			<thead>
				<tr>
					<th>NO</th>
					<th>HARI, TANGGAL</th>
					<th>PUKUL</th>
					<th>MATA KULIAH</th>
					<th>CATATAN</th>
					<th>OPSI</th>
				</tr>
			</thead>	
			<?php 
			$no = 1;
			foreach($user as $u){?>
			<tr>
				<td><?php echo $u->id_uas ?></td>
				<td><?php echo $u->hari ?></td>
				<td><?php echo $u->jam ?></td>
				<td><?php echo $u->matkul ?></td>
				<td><?php echo $u->catatan ?></td>
				<td>
					<?php echo anchor('crud/edit/'.$u->id_uas,'UBAH'); ?>
					|
					<?php echo anchor('crud/hapus/'.$u->id_uas,'HAPUS'); ?>		
				</td>
			</tr>
			<?php } ?>
		</table>
	</div>
	<div class="credits">
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/personal-free-resume-bootstrap-template/ -->
    Published <a href="https://bootstrapmade.com/">Selasa, 01 Juni 2021.</a>
  </div>

  <!-- Vendor JS Files -->
  <script src="/assets/vendor/jquery/jquery.min.js"></script>
  <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="/assets/vendor/php-email-form/validate.js"></script>
  <script src="/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="/assets/vendor/counterup/counterup.min.js"></script>
  <script src="/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/assets/vendor/venobox/venobox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="/assets/js/main.js"></script>
</body>
</html>
