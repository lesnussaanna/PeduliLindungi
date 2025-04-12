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
<?php
include 'koneksi.php';
$id = $_GET['id'];
$query=$koneksi->query("SELECT * FROM vaksinasi WHERE id_vaksinasi = '$id'");
$detail = $query->fetch_assoc();
?>
<?php 
include 'script.php';
?>
<div class="modal modal-alert position-static d-block bg-secondary p-5" tabindex="-1" role="dialog" id="modalChoice">
  <img src="assets/img/sertifikat/<?php echo $detail['sertifikat'];?>" width="900" class="p-5">
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-bottom" aria-label="Eighth navbar example">
    <div class="container">

      <div class="collapse navbar-collapse" id="navbarsExample07">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
         
        </ul>
          <a class="btn btn-danger" href="index.php" >Home</a>

      </div>
    </div>
  </nav>