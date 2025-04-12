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
	<title>Cek Mandiri</title>
	<?php
	include "script.php";
	?>
</head>
<body>
<div class="container col-5 bg-blue-soft rounded-3">
	<img src="assets/img/logo-with-text.svg" class="w-100 p-5">
</div>
<div class=" container col-5 p-5 mb-5 rounded-3">
   <div align="center pt-5">
		<h5 class="pt-3"><b>Cek Hasil Test Covid-19</b></h5>
   </div>
	<hr class="my-2">
	<br>
	<form method="post">
		<table class="table table-borderless">
			<tr>
				<h6>NIK</h6>
      	<input class="form-control form-control-lg mb-3" type="text" name="nik" placeholder="NIK sesuai KTP" aria-label=".form-control-lg example">
			</tr>
		</table>
		<button name="cek" class="btn btn-primary container"><b>Submit</b></button>
	</form>

	<?php  
if (isset($_POST['cek'])) {
      $nik = $_POST['nik'];

    $cekdata=$koneksi->query("SELECT * FROM kewarganegaaan WHERE no_pengenal = '$nik'");
  $hitungcocok = $cekdata->num_rows;

    if($hitungcocok==0) : ?>
      <div class="alert alert-danger text-center" role="alert">
  Nama dan NIK tidak sesuai.</div>
  <?php elseif($hitungcocok==1) : ?>  
  	<?php
    $query=$koneksi->query("SELECT * FROM data_pendaftar JOIN tes_covid ON data_pendaftar.no_pengenal=tes_covid.no_pengenal WHERE data_pendaftar.no_pengenal = '$nik'");
$detail=$query->fetch_assoc();
    ?>
  	<table class="table table-boredered">
  		<thead>
		<tr>
			<th>Data Vaksin</th>
			<th>Hasil PCR</th>
			<th>Hasil Antigen</th>
		</tr>
	</thead>
	<tbody>
		<td><?php 
		$status = $detail['status_vaksinasi'];
		if($status== "Vaksin Dosis Pertama"){
			echo "Vaksin Pertama";
		} 
		elseif($status== "Vaksin Dosis Kedua"){
			echo "Sudah Vaksin";
		}else{
			echo "<p class='text-danger'>Belum Vaksin</p>";
		} ?></td>
		<td><?php echo $detail['status_pcr'] ?><br><?php echo $detail['tanggal_pcr'] ?>
		</td>
		<td><?php echo $detail['status_antigen'] ?><br><?php echo $detail['tanggal_antigen'] ?></td>
	</tbody>
  	</table>

<?php endif ?>
<?php } ?>
</div>
<?php
include "footer.php";
?>
</body>
</html>