<?php
  
 session_start();
 if (isset($_SESSION['user']) || !empty($_SESSION['user'])){
  header("location:index.php");
 }
 elseif (isset($_SESSION['admin']) || !empty($_SESSION['admin'])) {
  header("location:admin/index.php");
 }
 include "koneksi.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Daftar PeduliLindungi</title>
    <script src="assets/js/jquery.js"></script>
  <script src="assets/js/jquery.validate.js"></script>
  <script>

  $().ready(function() {

    // validate signup form on keyup and submit
    $("#daftar").validate({
      rules: {
        nama: {
          minlength: 3
        },
        password: {
          minlength: 5
        },
        password2: {
          equalTo: "#psw"
        },
        email: {
          required: true,
          minlength: 5,
          email: true
        },
        tanggal_lahir: {
          required: true,
        },
        nope: {
          minlength: 12
        },
        ceklis: "required"
      },
      messages: {
        nama: {
          required: "<font color = 'red'>Isi Data Anda</font>",
          minlength: "<font color = 'red'>Isi nama dengan Lengkap</font>"
        },
        password: {
          required: "<font color = 'red'>Isi password<font>",
          minlength: "<font color = 'red'>Masukan kata Sandi diatas 5 karakter<font>"
        },
        password2: {
          required: "<font color = 'red'>Isi data konfimasi<font>",
          minlength: "<font color = 'red'>Masukan kata Sandi diatas 5 karakter<font>",
          equalTo: "<font color = 'red'>Konfirmasi tidak sama<font>"
        },
        email: "<font color = 'red'>Masukan email yang valid<font>",
        tanggal_lahir: "<font color = 'red'>Masukan tanggal lahir<font>",
        ceklis: "<font color = 'red'>Setujui aturan yang ada.<font>"
      }
    });

  });
  </script>
<?php
  include "script.php";
  ?>
</head>
<body>
	<div class="fixed-alert">
	<?php
	include "navbar.php";
	?>
  
</div>
<div class="batas-atas pb-5">
	<div class="card container col-4 mt-5 p-3 rounded-3">
  <div class="card-body">
    <h5 class="card-title blue-dark"><b>Daftar</b></h5>
    <p class="card-subtitle mb-2 text-muted">Masukan Data Diri Anda</p>
<div class="container p-3 col-10">

    <form method="post" id="daftar">
        <p class="class-text text-muted"><b>Nama Lengkap</b></p>
        <input class="form-control" type="text" name="nama" placeholder="Masukan Nama Lengkap" required>

        <p class="class-text text-muted"><b>Email</b></p>
        <input class="form-control" type="email" name="email" placeholder="Masukan Email" required>

        <p class="class-text text-muted"><b>No Telepon</b></p>
        <input class="form-control" type="text" name="nope" placeholder="Masukan No telepon" required>

        <p class="class-text text-muted"><b>Tanggal Lahir</b></p>
        <input class="form-control" type="date" id="date" name="tanggal_lahir" required>
  
        <p class="class-text text-muted mt-2"><b>Password</b></p>
        <input class="form-control" placeholder="Masukan Kata Sandi" id="psw" type="password" name="password" required>

        <p class="class-text text-muted mt-2"><b>Konfirmasi Password</b></p>
        <input class="form-control" placeholder="Masukan Kata Sandi" type="password" name="password2" required>

  <div class="form-check mb-3 mt-3">
  <input class="form-check-input form-control" type="checkbox" name="ceklis" value="">
  <p class="text-muted">
    Saya menerima segala isi <a href="syaratpenggunaan.php">Syarat Penggunaan</a> dan <a href="kebijkanprivasi.php">Kebijakan Privasi</a>
  </p>
</div>
  <button class="btn btn-primary container mt-3" name="btndftr"><b>Daftar</b></button>
  </form>
</div>
  </div>
</div>
<div class="alert alert-primary text-center col-4 container rounded-3" role="alert">
  Sudah punya akun PeduliLindungi? <a class="link-primary" href="login.php">Masuk</a>

</div>
</div>

<?php
  if (isset($_POST['btndftr'])) {
      $email = $_POST['email'];
      $nope = $_POST['nope'];

    $ambil=$koneksi->query("SELECT email, no_hp FROM data_akun WHERE email='$email' OR no_hp='$nope'");
    $akunyangada = $ambil->num_rows;

        if ($akunyangada==0) {
          $pw = $_POST['password'];
      $level = 2;
      $ttl = $_POST['tanggal_lahir'];
      $tanggal_lahir = date('Y-m-d', strtotime($ttl));
      $koneksi->query("INSERT INTO data_akun (nama_lengkap, no_hp, email, level, password, tanggal_lahir) 
            VALUES('$_POST[nama]','$nope','$email', '$level', '$pw', '$tanggal_lahir')");
      echo "<script>alert('Registrasi Akun Berhasil!');</script>";
      echo "<meta http-equiv='refresh'content='1;url=index.php'>";
      } 
      else {
         //      $akun = $ambil->fetch_assoc();
        echo "<script>alert('Registrasi Akun Gagal!');</script>";
        echo "<div class='alert alert-danger'>Nomor Telepon atau Email sudah terdaftar.</div>";
      
      }
  }
?>

<?php
	include "footer.php";
	?>
</body>
</html>