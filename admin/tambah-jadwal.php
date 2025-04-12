<?php 
$id = $_GET['id'];
$jadwal=$koneksi->query("SELECT * FROM jadwal_vaksinasi JOIN vaksin ON jadwal_vaksinasi.id_vaksin=vaksin.id_vaksin WHERE id_jadwal = '$id'");
$datajadwal = $jadwal->fetch_assoc();
$id_vaksin = $datajadwal['id_vaksin'];
?>

<div class="p-5">
<div align="center p-3">
		<h5 class="pt-3"><b>Vaksinasi</b></h5>
   </div>
	<hr class="my-2">
	<br>
	<form method="post">
		<table class="table table-borderless">
			<tr>
				<h6>NIK</h6>
      	<input class="form-control form-control-md mb-3" type="text" name="no_pengenal" placeholder="NIK sesuai KTP" aria-label=".form-control-lg example" required>
			</tr>
			<tr>
				<h6>Tanggal Vaksinasi</h6>
      	<input class="form-control form-control-md mb-3" type="date" id="date" name="tanggal_lahir" value="<?php echo $datajadwal['tanggal']; ?>" readonly>
			</tr>
			<tr>
				<h6>Dosis Vaksin</h6>
				<input class="form-select form-select-md mb-3" aria-label=".form-select-lg example" name="dosis_vaksin" value="<?php echo $datajadwal['dosis_vaksin']; ?>" readonly>
			</tr>
			<tr>
				<h6>Nama Vaksin</h6>
      	<input class="form-select form-select-md mb-2" aria-label=".form-select-lg example" name="vaksin" value="<?php echo $datajadwal['nama_vaksin']; ?>" readonly></tr>
			<tr>
				<h6>Kota / Kecamatan / Provinsi / Alamat</h6>
      	<input class="form-select form-select-md mb-3" aria-label=".form-select-md example"  value="<?php echo $datajadwal['provinsi_kota']; ?>" name="provinsi_kota" readonly>
			</tr>
			<tr>
				<h6>Lokasi</h6>
      	<input class="form-control form-control-md mb-3" type="text" name="lokasi" value="<?php echo $datajadwal['lokasi']; ?>" aria-label=".form-control-lg example" readonly>
			</tr>
			<tr>
				<h6>Alamat lokasi</h6>
      	<textarea class="form-control form-control-md mb-3" type="text" name="alamat" placeholder="<?php echo $datajadwal['alamat']; ?>" readonly></textarea>
			</tr>
		</table>
  <div class="container">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
         
        </ul>
          <button class="btn btn-outline-primary mb-3"  name="vaksinasi">Tambah</button>

      </div>
	</form>
	<?php
if (isset($_POST['vaksinasi'])) {
    $no_pengenal = $_POST['no_pengenal'];

	$cekdata=$koneksi->query("SELECT * FROM data_pendaftar WHERE no_pengenal = '$no_pengenal'");
  	$hitungcocok = $cekdata->num_rows;
  	$ambildata = $cekdata->fetch_assoc();
    			if($hitungcocok==0) {?>
      <div class="alert alert-danger text-center" role="alert">Nik belum mendaftar Vaksin</div>

            <?php 
        		}elseif($hitungcocok==1) {
						$stas = $ambildata['status_vaksinasi'];
							if($stas == 'Belum Vaksin'){
								$koneksi->query("INSERT INTO vaksinasi (id_pendaftar, id_jadwal, id_vaksin, status_vaksin, tanggal_vaksinasi, lokasi_vaksinasi) 
								VALUES('$ambildata[id_pendaftar]', '$id', '$id_vaksin', '$datajadwal[dosis_vaksin]', '$datajadwal[tanggal]', '$datajadwal[lokasi]')");
								$koneksi->query("UPDATE data_pendaftar SET status_vaksinasi='Vaksin Dosis Pertama' WHERE no_pengenal='$no_pengenal'");
								echo "<script>alert('Vaksinasi Berhasil!');</script>";
									echo "<script>location='index.php?halaman=jadwal';</script>";
								
							}
							elseif($stas == 'Vaksin Dosis Pertama'){
								$koneksi->query("INSERT INTO vaksinasi (id_pendaftar, id_jadwal, id_vaksin, status_vaksin, tanggal_vaksinasi, lokasi_vaksinasi) 
								VALUES('$ambildata[id_pendaftar]', '$id', '$id_vaksin', '$datajadwal[dosis_vaksin]', '$datajadwal[tanggal]', '$datajadwal[lokasi]')");
								$koneksi->query("UPDATE data_pendaftar SET status_vaksinasi='Vaksin Dosis Kedua' WHERE no_pengenal='$no_pengenal'");
								echo "<script>alert('Vaksinasi Berhasil!');</script>";
									echo "<script>location='index.php?halaman=jadwal';</script>";
							}

							else{
          						echo "<div class='alert alert-danger text-center' role='alert'>Data Sudah Vaksin Kedua.</div>";
        						}

									
										}
							}

?>
</div>