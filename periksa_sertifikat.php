<?php
session_start();
//koneksi ke database
include 'koneksi.php';

if (isset($_SESSION['admin'])) {
  header("location:admin/index.php");
}
elseif (!isset($_SESSION['user']) OR empty($_SESSION['user'])) {
  echo "<script>alert('Silakan Login Terlebih Dahulu!')</script>";
  echo "<script>location ='index.php'</script>";
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Periksa Sertifikat</title>
	<?php
 include 'script.php';
 include 'koneksi.php';
?>
</head>
<body>
	<div class="fixed-alert">
<?php
 include 'navbar.php';
?>
</div>
<article class="batas-atas1 bg-blue-soft">
	<div class="container">
	<div class="row mb-3">
      <div class="col-6 themed-grid-col">
      	<br><br>
      	<h3 class="container mt-5 text-secondary">Periksa Sertifikat Vaksinisasi</h3><br></div>
      <div class="col-6 themed-grid-col"><img src="assets/img/home.jpg" width="550" style=""></div>
    </div>
</div>
<div class="container">

  <form method="post">
<div class="card">
  <div class="card-body p-3">
  	<div class="row">
      <div class="col-sm-4 themed-grid-col"><h6>Nama Lengkap</h6>
      	<input class="form-control form-control-md" type="text" placeholder="Tulis nama lengkap Anda disini." aria-label=".form-control-lg example" name="nama" required></div>

      <div class="col-sm-4 themed-grid-col"><h6>NIK/Kode Negara + No Paspor</h6>
      	<input class="form-control form-control-md" type="text" placeholder="Masukan NIK" aria-label=".form-control-lg example" name="no_pengenal" required></div>
      <div class="col-sm-4 themed-grid-col"><h6>Tanggal Lahir</h6>
      	<input class="form-control form-control-md" type="date" id="date" name="tanggal_lahir" required></div></div>
    </div>
      	<div class="row p-3">
      <div class="col-sm-4 themed-grid-col"><h6>Tanggal Vaksin</h6>
      	<input class="form-control form-control-md" type="date" id="date" name="tanggal_vaksin" required></div>
      <div class="col-sm-4 themed-grid-col"><h6>Jenis Vaksin</h6>
      	<select class="form-select form-select-md mb-2" aria-label=".form-select-lg example" name="vaksin" required>
  <option selected disabled>  Pilih Jenis Vaksin</option>
  <option value="1">Sinovac</option>
  <option value="2">AstraZeneca</option>
  <option value="3">Sinopharm</option>
  <option value="4">Moderna</option>
  <option value="5">Pfizer</option>
  <option value="6">Vaksin Luar Negeri</option>
</select></div>
      <div class="col-sm-4 themed-grid-col"><br>
      	<button class="btn btn-primary btn-md" name="cek">PERIKSA</button></div>
    </div>
  </div>
</form>
<?php  
if (isset($_POST['cek'])) {
      $nama = strtoupper($_POST['nama']);
      $no_pengenal = $_POST['no_pengenal'];
      $ttl = $_POST['tanggal_lahir'];
      $tanggal_lahir = date('Y-m-d', strtotime($ttl));
      $vaksin = $_POST['vaksin'];

    $query=$koneksi->query("SELECT * FROM data_pendaftar JOIN vaksinasi ON data_pendaftar.id_pendaftar=vaksinasi.id_pendaftar WHERE data_pendaftar.no_pengenal = '$no_pengenal'");
    $hitungcocok = $query->num_rows;
    if($hitungcocok==0) : ?>
      <div class="alert alert-danger text-center" role="alert">Data tidak sesuai.</div>
    <?php elseif($hitungcocok > 0) : ?> 
      
 <div class="album py-5 bg-light">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <?php 
      while($detail=$query->fetch_assoc()) { ?>
        <a href="test.php?id=<?php echo($detail['id_vaksinasi']) ?>">
        <div class="col">
          <div class="card shadow-sm">

            <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="assets/img/sertifikat/<?php echo $detail['sertifikat'];?>">
            <div class="card-body">
              <p class="card-text"><b>Sertifikat <?php echo $detail['status_vaksin'];?></b><br>
                <?php 
                ?>
                <?php echo $detail['tanggal_vaksinasi'];?><br>
                <?php echo $detail['lokasi_vaksinasi'];?></p>
            </div>
          </div>
        </div>
      </a>
        <?php } ?>
      </div>
    </div>
    </div>


<?php endif ?>

<?php } ?>
</div>
<div class="container p-3">
	<div class="alert alert-primary" role="alert">
  Jika sertifikat Anda tidak tersedia, segera menghubungi <b>CALL CENTER 119</b> dengan extension 9
</div>
</div>
</article>



<?php
	include 'footer.php';?>
</body>
</html>