<?php
session_start();

if (isset($_SESSION['admin'])){
  header("location:admin/index.php");
}
include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
  <?php
  include 'script.php';

  ?>
	<title>Peduli Lindungi</title>
</head>
<body>
  <div class="fixed-afteralert">
<?php
	include 'navbar.php';?>
</div>
<div class="alert alert-biru text-white text-center fixed-alert" role="alert">
  Sudah melakukan vaksinasi COVID-19? Cek sertifikat Anda <a href="periksa_sertifikat.php" class="link-warning">di sini</a>

</div>
<article class="batas-atas bg-blue-soft">
	<div class="container">
	<div class="row mb-3">
      <div class="col-6 themed-grid-col"><h3 class="container mt-5 blue-main">Lindungi diri dan sekitar dengan berpartisipasi dalam program Vaksinasi COVID-19</h3><br>
      	<a href="pendaftaran-vaksin.php" type="button" class="btn btn-primary container"><b>PENDAFTARAN VAKSINASI</b></a></div>
      <div class="col-6 themed-grid-col"><img src="assets/img/home.jpg" width="550" style=""></div>
    </div>
</div>
<div class="container">
<div class="card">
  <div class="card-header p-4"><h4><b>Status Kesehatan</b></h4>
  	<p class="text-secondary">Pilih untuk cek status vaksin, tes covid-19 dan warna label Anda</p></div>
  <div class="card-body p-4">
    <form method="post">
  	<div class="row mb-3">
      <div class="col-sm-4 themed-grid-col"><h6>Nama Lengkap</h6>
      	<input class="form-control form-control-lg" type="text" placeholder="Tulis nama lengkap Anda disini." aria-label=".form-control-lg example" name="nama" required></div>
      <div class="col-sm-4 themed-grid-col"><h6>NIK</h6>
      	<input class="form-control form-control-lg" type="text" placeholder="Masukan NIK" aria-label=".form-control-lg example" name="nik" required></div>
      <div class="col-sm-4 themed-grid-col"><br>
        <button class="btn btn-primary btn-lg"  name="cek">
  <b>Periksa</b>
</button>
</div>
    </div>
    </form>
            <?php  
if (isset($_POST['cek'])) {
      $nama = strtoupper($_POST['nama']);
      $nik = $_POST['nik'];

    $cekdata=$koneksi->query("SELECT * FROM kewarganegaaan WHERE no_pengenal = '$nik'");
  $hitungcocok = $cekdata->num_rows;
  $ambildata = $cekdata->fetch_assoc();
    if($hitungcocok==0) :?>
      <div class="alert alert-danger text-center" role="alert">
  Nama dan NIK tidak sesuai.
</div>
  </div>

    <?php elseif($hitungcocok==1) : ?>  
      <?php if($nama == strtoupper($ambildata['nama_lengkap'])): ?>
  <div class="modal modal-sheet position-static d-block  py-5 modal-dialog-scrollable" tabindex="-1" role="dialog" id="modalSheet">
  <div class="modal-dialog" role="document">
    <div class="modal-content rounded-6 shadow">
      <div class="modal-header border-bottom-0">
        <h5 class="modal-title text-secondary" id="exampleModalLabel">Status vaksinasi & tes COVID-19</h5>
      </div>
      <div class="modal-body py-0">
        <div class="container">
      <div class="card" style="width: 28rem;">
  <ul class="list-group list-group-flush">
    <?php
    $query=$koneksi->query("SELECT * FROM data_pendaftar JOIN tes_covid ON data_pendaftar.no_pengenal=tes_covid.no_pengenal WHERE data_pendaftar.no_pengenal = '$nik'");
$detail=$query->fetch_assoc();
    ?>
    <li class="list-group-item p-3"> <img alt="Profil" src="assets/img/tes1.svg" width="25"> &nbsp; <?php echo $nama;?></li>
    <li class="list-group-item p-3"> <img alt="Profil" src="assets/img/tes2.svg" width="25"> &nbsp; <?php echo $nik;?></li>
  </ul>
</div>
<?php
$status= $detail['status_vaksinasi'];
  if($status == "Vaksin Dosis Kedua") :  ?>
    <div class="col-9 bg-success p-2 container rounded-3 text-center m-5"><b>Hijau</b></div>
    <h6 class="mb-4"> <img alt="Profil" src="assets/img/tes3.svg" width="25"> &nbsp; <?php echo $detail['status_vaksinasi'];?></h6>
<?php elseif($status == "Vaksin Dosis Pertama") :  ?>
  <div class="col-9 bg-warning p-2 container rounded-3 text-center m-5"><b>Kuning</b></div>
  <h6 class="mb-4"> <img alt="Profil" src="assets/img/tes3.svg" width="25"> &nbsp; <?php echo $detail['status_vaksinasi'];?></h6>
  <?php elseif($status == "Belum Vaksin"):  ?> 
  <div class="col-9 bg-danger p-2 container rounded-3 text-center m-5"><b>Merah</b></div>
  <div class="alert alert-danger text-center" role="alert">
  Belum Vaksin. Segera Vaksin di Puskesmas Terdekat</div>
  <h6 class="mb-4 text-danger"> <img alt="Profil" src="assets/img/tes3.svg" width="25"> &nbsp; Belum Vaksin </h6>
<?php else :  ?> 
  <div class="col-9 bg-danger p-2 container rounded-3 text-center m-5"><b>Merah</b></div>
  <div class="alert alert-danger text-center" role="alert">
  Belum Daftar Vaksinasi. <a href="pendaftaran-vaksin.php">Daftar Disini</a></div>
  <h6 class="mb-4 text-danger"> <img alt="Profil" src="assets/img/tes3.svg" width="25"> &nbsp; Belum Vaksin </h6>
  <?php endif ?>

  
<h5>Hasil Tes COVID-19</h5>
        <p><img alt="" src="assets/img/tes4.svg" width="25" class="p-1">  &nbsp; <?php echo $detail['status_pcr'];?> (<?php echo $detail['tanggal_pcr'];?>)</p>
        <hr>
        <p class="mb-4"><img alt="" src="assets/img/tes5.svg" width="25" class="p-1"> &nbsp; <?php echo $detail['status_antigen'];?>(<?php echo $detail['tanggal_antigen'];?>) </p>
        <p><img alt="" src="assets/img/tes6.svg" width="25"> &nbsp; Jika hasil tes COVID-19 Anda tidak muncul, pastikan lab yang Anda kunjungi sudah terdaftar <a href="https://www.litbang.kemkes.go.id/laboratorium-pemeriksa-covid-19/" rel="noopener noreferrer" target="_blank">di sini</a> dan hubungi lab tersebut kembali.</p>
</div>
      </div>
      <div class="modal-footer flex-column border-top-0">
      </div>
    </div>
  </div>
</div>
<?php else : ?>
<div class="alert alert-danger text-center" role="alert">
  Nama dan NIK tidak sesuai. </div>
<?php endif ?>
<?php endif ?>

<?php } ?>
  <div class="alert alert-warning text-center" role="alert">
  Periksa Hasil Tes COVID-19<a href="cekmandiri.php" class="link-danger">di sini</a>

</div>
</div>
</div>
</article>








<div class="container" id="tentang">
	<div class="row mb-3 p-5">
      <div class="col-6 themed-grid-col">
      	<h5 class="container mt-5 blue-dark">Tentang</h5>
      	<h3 class="container mt-5 blue-main">Vaksinasi COVID-19</h3><br></div>
      <div class="col-6 themed-grid-col"><p class="text-secondary">Pada tahap awal, vaksinasi Covid-19 sudah berhasil diberikan kepada seluruh tenaga kesahatan, asisten tenaga kesehatan, dan mahasiswa yang menjalankan pendidikan profesi kedokteran yang bekerja pada fasilitas pelayanan kesehatan.<br><br>
      	Vaksin tahap kedua juga sudah diberikan kepada lansia, pekerja sektor esensial, dan guru.<br><br>
      	Pemerataan vaksinasi hingga saat ini dilanjutkan untuk masyarakat umum dan terus berjalan hingga berhasil menjangkau seluruh warga negara Indonesia dan warga negara asing yang bertempat tinggal di Indonesia.<br><br>
      Harapannya dengan upaya pemerataan vaksinasi ini, Indonesia dapat segera bangkit dan terbebas dari penyebaran virus Covid-19.</p></div>
    </div>
</div>
<div style="background-color: #EEEEEE;">
<div class="container" id="tentang">
	<div class="row mb-3 p-5">
      <div class="col-6 themed-grid-col">
      	<h5 class="container mt-5 blue-dark">Tentang</h5>
      	<h3 class="container mt-5 blue-main">Apa itu PeduliLindungi?</h3><br></div>
      <div class="col-6 themed-grid-col"><p class="text-secondary">
      	PeduliLindungi adalah aplikasi yang dikembangkan untuk membantu instansi pemerintah terkait dalam melakukan pelacakan untuk menghentikan penyebaran Coronavirus Disease (COVID-19).<br><br>
      	Aplikasi ini mengandalkan partisipasi masyarakat untuk saling membagikan data lokasinya saat bepergian agar penelusuran riwayat kontak dengan penderita COVID-19 dapat dilakukan.<br><br>
      Pengguna aplikasi ini juga akan mendapatkan notifikasi jika berada di keramaian atau berada di zona merah, yaitu area atau kelurahan yang sudah terdata bahwa ada orang yang terinfeksi COVID-19 positif atau ada Pasien Dalam Pengawasan.</p>
  </div>
    </div>
</div>
</div>
<div class="container" id="carakerja">
	<div class="row mb-3 p-5">
      <div class="col-6 themed-grid-col">
      	<h5 class="container mt-5 blue-dark">Cara Kerja</h5>
      	<h3 class="container mt-5 blue-main">Bagaimana PeduliLindungi Bekerja?</h3><br></div>
      <div class="col-6 themed-grid-col"><p class="text-secondary">
      	Pada saat Anda mengunduh PeduliLindungi, sistem akan meminta persetujuan Anda untuk mengaktifkan data lokasi. Dengan kondisi lokasi aktif, maka secara berkala aplikasi akan melakukan identifikasi lokasi Anda serta memberikan informasi terkait keramaian dan zonasi penyebaran COVID-19.<br><br>
      	Hasil tracing ini akan memudahkan pemerintah untuk mengidentifikasi siapa saja yang perlu mendapat penanganan lebih lanjut agar penghentian penyebaran COVID-19 dapat dilakukan. Sehingga, semakin banyak partisipasi masyarakat yang menggunakan aplikasi ini, akan semakin membantu pemerintah dalam melakukan tracing dan tracking.<br><br>
      	PeduliLindungi sangat memperhatikan kerahasiaan pribadi Anda. Data Anda disimpan aman dalam format terenkripsi dan tidak akan dibagikan kepada orang lain. Data Anda hanya akan diakses bila Anda dalam risiko tertular COVID-19 dan perlu segera dihubungi oleh petugas kesehatan.<br><br>
      Baca selengkapnya tentang<a href="#"> Kebijakan Privasi & Persyaratan</a></p>
</div>
    </div>
</div>
<div style="background-color: #EEEEEE;">
<div class="container text-center p-5">
	<h3 class="blue-main text-center">Kami Peduli Dengan Anda</h3>
    <div class="row mb-3">
      <div class="col-4 themed-grid-col"><img src="assets/img/banner-wecare-1.jpg" width="250">
      	<h5 class="blue-main">Membantu Pelacakan untuk Menghentikan Penyebaran COVID-19</h5>
      	<p class="text-secondary text-center">Dengan mengaktifkan lokasi, Anda akan membantu instansi pemerintah terkait dalam melakukan pelacakan untuk menghentikan penyebaran Coronavirus Disease (COVID-19).</p></div>
      <div class="col-4 themed-grid-col"><img src="assets/img/banner-wecare-2.jpg" width="250">
      <h5 class="blue-main">Membantu Pelacakan untuk Menghentikan Penyebaran COVID-19</h5>
      	<p class="text-secondary text-center">Dengan mengaktifkan lokasi, Anda akan membantu instansi pemerintah terkait dalam melakukan pelacakan untuk menghentikan penyebaran Coronavirus Disease (COVID-19).</p></div>
      <div class="col-4 themed-grid-col"><img src="assets/img/banner-wecare-3.jpg" width="250">
      <h5 class="blue-main">Membantu Pelacakan untuk Menghentikan Penyebaran COVID-19</h5>
      	<p class="text-secondary text-center">Dengan mengaktifkan lokasi, Anda akan membantu instansi pemerintah terkait dalam melakukan pelacakan untuk menghentikan penyebaran Coronavirus Disease (COVID-19).</p></div>
    </div>
</div>
</div>
<div class="container" id="unduh">

  <div class="row mb-3 p-5">
    <div class="col-md-8 themed-grid-col"><h3 class="container mt-5 blue-main">Mari berpartisipasi melindungi sesama.
Unduh PeduliLindungi sekarang!</h3><br></div>
      <div class="col-md-4 themed-grid-col mt-5"><div>
        <a href="http://bit.ly/Android-PL"><img alt="Download Di Play Store" class="w-25" src="assets/img/play-store.svg"></a>
        <a href="https://apple.co/2K7TNj1"><img alt="Download Di App Store" class="w-25" src="assets/img/app-store.svg"></a>
        <a href="https://appgallery.huawei.com/#/app/C102542717"><img class="w-25" alt="Download Di HUAWEI AppGallery" src="assets/img/app-gallery-1.png"></a></div></div>
     </div>
   </div>
<?php
	include 'footer.php';?>
</body>
</html>