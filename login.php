<!DOCTYPE html>
<html>
<head>
	<title>Login PeduliLindungi</title>
	<?php
    
 session_start();
 if (isset($_SESSION['user']) || !empty($_SESSION['user'])){
  header("location:index.php");
 }
 elseif (isset($_SESSION['admin']) || !empty($_SESSION['admin'])) {
  header("location:admin/index.php");
 }
	include "script.php";
  include "koneksi.php";
	?>

</head>
<body>
	<div class="fixed-alert">
	<?php
	include "navbar.php";
	?>
</div>
<div class="batas-atas pb-5">
  <div class="card-body">
	<div class="card container col-4 mt-5 p-3 rounded-3">
 
    <h5 class="card-title blue-dark"><b>Masuk</b></h5>
    <p class="card-subtitle mb-2 text-muted">Masuk menggunakan alamat email atau nomor telepon yang terdaftar</p>
    <form class="container p-3 col-9" method="POST">
        <p class="class-text text-muted"><b>Email/ No Telepon</b></p>
  <input type="text" class="form-control" placeholder="Email / No telepon" name="namenope" required>
  <p class="class-text text-muted mt-2"><b>Password</b></p>
  <input type="password" class="form-control" placeholder="Masukan Kata Sandi" name="passwordlgn" required>
  <button class="btn btn-primary container mt-3" name="tmblmasuk" type="submit"><b>Masuk</b></button>
  </form>
     

  </div>
</div>
<div class="alert alert-primary text-center col-4 container rounded-3" role="alert">
  Belum punya akun PeduliLindungi? <a class="link-primary" href="daftar.php">Daftar</a>

</div>
</div>
  <?php

if (isset($_POST['tmblmasuk']))
{
  $user_login=$_POST['namenope'];
  $pass_login=$_POST['passwordlgn'];

  $jalankanquerycekuser=$koneksi->query("SELECT * FROM data_akun WHERE no_hp = '$user_login' OR email = '$user_login'");
  $hitungcocok = $jalankanquerycekuser->num_rows;
  $ambildata = $jalankanquerycekuser->fetch_assoc();

if(!empty($user_login) && (!empty($pass_login))){
    if($hitungcocok==0){
      echo "<script>alert('Username tidak ditemukan');</script>";
    } elseif($hitungcocok==1){

      if ($ambildata['level']==1) {
        if($pass_login == $ambildata['password']){
          $_SESSION['admin'] = $ambildata;
          echo "<script>alert('Login Berhasil!');</script>";
          header("location:admin/index.php");
        }

        else{
          echo "<script>alert('Login GAGAL, email/nomor hp atau Password salah!');</script>";
        }
      }
      elseif($ambildata['level']==2){
        if ($pass_login== $ambildata['password']) {
            $_SESSION['user'] = $ambildata;

            echo "<script>alert('Login Berhasil!');</script>";
            echo "<script>location='index.php'</script>";
            } else{
            echo "<script>alert('Login Gagal, email/notelepon atau Password salah!');</script>"; 
        }
      }
  }
}
elseif (empty($user_login) || empty($pass_login)){
    echo "<script>alert('Username atau Password tidak boleh kosong!')</script>";
    }
}

?>
<?php
	include "footer.php";
	?>
</body>
</html>