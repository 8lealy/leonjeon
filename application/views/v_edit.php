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
  </header>

	<div class="container">
		<div class="column">
			<div class="col align-self-center">
			<center>
		<h1>SILAHKAN UBAH DATA DAN KONFIRMASI JIKA SUDAH DIPASTIKAN SESUAI</h1>
	</center>
	<?php foreach($user as $u){ ?>
	<form action="<?php echo base_url(). 'crud/update'; ?>" method="post">
		<table style="margin:20px auto;">
		<tr>
			<td>HARI,TANGGAL</td>
			<td>:</td>
			<td>
				<select name='hari'>
                    <option value="Senin, O7 Juni 2021">Senin, 07 Juni 2021</option>
                    <option value="Selasa, O8 Juni 2021">Selasa, 08 Juni 2021</option>
                    <option value="Rabu, 09 Juni 2021">Rabu, 09 Juni 2021</option>
                    <option value="Kamis, 10 Juni 2021">Kamis, 10 Juni 2021</option>
                    <option value="Jumat, 11 Juni 2021">Jumat, 11 Juni 2021</option>
                </select>
			
			</td>
		</tr>
		<tr>
			<td>PUKUL</td>
			<td>:</td>
			<td>
				<input type="radio" name="jam" value="07AM-09AM" required><label for="07AM-09AM"> 07AM-09AM</label>
				<input type="radio" name="jam" value="08AM-10AM"><label for="08AM-10AM"> 08AM-10AM</label>
				<input type="radio" name="jam" value="09AM-11AM"><label for="09AM-11AM"> 09AM-11AM</label>
				<input type="radio" name="jam" value="10AM-12PM"><label for="10AM-12PM"> 10AM-12PM</label>
				<input type="radio" name="jam" value="01PM-03PM"><label for="01PM-03PM"> 01PM-03PM</label>
				<input type="radio" name="jam" value="02PM-04PM"><label for="02PM-04PM"> 02PM-04PM</label>
			</td>
		</tr>
		<tr>
			<td>MATA KULIAH</td>
			<td>:</td>
			<td>
				<input type="text" name="matkul" value="<?php echo $u->matkul ?>">
			</td>
		</tr>
		<tr>
			<td>CATATAN</td>
			<td>:</td>
			<td>
				<input type="text" name="catatan" value="<?php echo $u->catatan ?>">
			</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td>Jika tidak ada catatan tambahan mohon ketikkan tanda strip (-).</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td>
				<input class="btn btn-outline-light" type="submit" value="KONFIRMASI">
			</td>
		</tr>
	</table>
	</form>	
	<?php } ?>
			</div>
		</div>
	</div>
</body>
</html>
