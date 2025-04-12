<?php
$id = $_GET['id'];
	$data = $koneksi->query("SELECT * FROM data_pendaftar WHERE id_pendaftar = '$id'");
	$datapendaftar = $data->fetch_assoc();
?>
<div class="p-5">
<div align="center p-3">
		<h5 class="pt-3"><b>Edit Data Pendaftaran Peserta Vaksinasi</b></h5>
   </div>
	<hr class="my-2">
	<br>
	<form method="post">
		<table class="table table-borderless">
			<tr class="m-3">
				<h6 class="pt-3">Nama</h6>
      	<input class="form-control form-control-md mb-3" type="text" name="nama" value="<?php echo $datapendaftar['nama_pendaftar']; ?>" required>
      </tr>
			<tr>
				<h6>NIK</h6>
      	<input class="form-control form-control-md mb-3" type="text" name="no_pengenal" value="<?php echo $datapendaftar['no_pengenal']; ?>" required>
			</tr>
			<tr>
				<h6>Tanggal Lahir</h6>
      	<input class="form-control form-control-md mb-3" type="date" id="date" name="tanggal_lahir" value="<?php echo $datapendaftar['tanggal_lahir']; ?>" required>
			</tr>
			<tr>
				<h6>Jenis Kelamin</h6>
				<select class="form-select form-select-md mb-3" aria-label=".form-select-lg example" name="jenis_kelamin" required>
  <option selected disabled>Pilih Jenis Kelamin</option>
  <option value="Perempuan">Perempuan</option>
  <option value="Pria">Pria</option>
</select>
			</tr>
			<tr>
				<h6>No Ponsel(Nomor Aktif)</h6>
      	<input class="form-control form-control-md mb-3" type="text" name="nope" value="<?php echo $datapendaftar['no_hp']; ?>" aria-label=".form-control-lg example" required>
			</tr>
			<tr>
				<h6>Kota / Kecamatan / Provinsi / Alamat</h6>
      	<select class="form-select form-select-md mb-3" aria-label=".form-select-md example" name="provinsi_kota" required>
  <option selected disabled>Pilih Jenis Provinsi Kota</option>
  <option value="Sumatera Utara, Medan">Sumatera Utara, Medan</option>
  <option value="Sumatera Utara, Pematang Siantar">Sumatera Utara, Pematang Siantar</option>
  <option value="Aceh, Sabang">Aceh, Sabang</option>
  <option value="Sumatera Utara, Sibolga">Sumatera Utara, Sibolga</option>
  <option value="Sumatera Utara, Binjai">Sumatera Utara, Binjai</option>
  <option value="Sumatera Utara, Tebing Tinggi">Sumatera Utara, Tebing Tinggi</option>
  <option value="Jawa Barat, Jakarta">Jawa Barat, Jakarta</option>
</select>
			</tr>
			<tr>
				<h6>Alamat NIK</h6>
      	<textarea class="form-control form-control-md mb-3" type="text" name="alamat" required></textarea>
			</tr>
			<tr>
				<h6>Status Vaksinasi</h6>
				<select class="form-select form-select-md mb-3" aria-label=".form-select-lg example" name="status" required>
  <option selected disabled>Pilih Status Vaksin</option>
  <option value="Belum Vaksin">Belum Vaksin</option>
  <option value="Vaksinasi Dosis Pertama">Vaksinasi Dosis Pertama</option>
  <option value="Vaksinasi Dosis Kedua">Vaksinasi Dosis Kedua</option>
</select>
			</tr>
		</table>
  <div class="container">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
         
        </ul>
          <button class="btn btn-outline-primary mb-3"  name="ubah">Ubah</button>

      </div>
	</form>
<?php
if (isset($_POST['ubah'])) {
	$nama_lengkap = $_POST['nama'];
    $no_pengenal = $_POST['no_pengenal'];
    $tgl = $_POST['tanggal_lahir'];
    $tanggal = date('Y-m-d', strtotime($tgl));
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $nope = $_POST['nope'];
    $provinsi_kota = $_POST['provinsi_kota'];
    $alamat = $_POST['alamat'];
    $status_vaksinasi = $_POST['status'];
	$cekdata=$koneksi->query("SELECT * FROM kewarganegaaan WHERE no_pengenal = '$no_pengenal'");
  	$hitungcocok = $cekdata->num_rows;
  	$ambildata = $cekdata->fetch_assoc();
    			if($hitungcocok==0) {?>
      <div class="alert alert-danger text-center" role="alert">Nama dan NIK tidak sesuai.</div>

            <?php 
        		}elseif($hitungcocok==1) {  
            		if(strtoupper($nama_lengkap) == strtoupper($ambildata['nama_lengkap'])){
						$koneksi->query("UPDATE data_pendaftar SET 
			nama_pendaftar = '$nama_lengkap',
			no_pengenal = '$no_pengenal',
			tanggal_lahir = '$tanggal',
			jenis_kelamin = '$jenis_kelamin',
			no_hp = '$nope',
			provinsi_kota = '$provinsi_kota',
			alamat = '$alamat',
			status_vaksinasi = '$status_vaksinasi'
			WHERE id_pendaftar = '$id'
			");
									echo "<script>alert('Ubah Data Berhasil!');</script>";
									echo "<script>location='index.php?halaman=peserta';</script>";
										}else{ ?>
											<div class="alert alert-danger text-center" role="alert">Nama dan NIK tidak sesuai.</div>

										<?php }
							}}
					?>
</div>
