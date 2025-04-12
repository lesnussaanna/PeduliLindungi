<!DOCTYPE html>
<html>
<head>
	<?php
	include 'script.php';
	?>
	<title>Pendaftaran Vaksinasi</title>
</head>
<body class="bg-blue-soft">
<div class="fixed-alert">
	<?php
	include 'navbar.php';
	?>
</div>
<div class="bg-light container col-5 p-5 mt-5 rounded-3">
	<nav>
		<ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link disabled" >Formulir Pengajuan</a>
  </li>
  <li class="nav-item">
    <a class="nav-link acitve">Registrasi Berhasil</a>
  </li>
</ul>

	</nav>
   <div align="center pt-5">
		<h5 class="pt-3"><b>Formulir Pengajuan Vaksinasi COVID-19</b></h5>
		<p class="text-warning"><b>Mohon isi data anda sesuai dengan KTP</b></p>
   </div>
	<hr class="my-2">
	<br>
		<div class="alert alert-primary text-center" role="alert">
  <h3>Selamat Anda telah terdaftar</h3>
  Kami akan segera mengirimkan informasi 
</div>
	</div>
	<?php
	include 'footer.php';
	?>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-bottom" aria-label="Eighth navbar example">
    <div class="container">

      <div class="collapse navbar-collapse" id="navbarsExample07">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
         
        </ul>
          <a type="button" class="btn btn-outline-primary" href="berhasil_daftar.php">Konfirmasi</a>

      </div>
    </div>
  </nav>
</body>
</html>