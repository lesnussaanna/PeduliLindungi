<div class="p-5">
<div align="center p-3">
		<h5 class="pt-3"><b>Formulir Pendaftaran Peserta Vaksinasi</b></h5>
		<p class="text-warning"><b>Mohon isi data sesuai dengan KTP</b></p>
   </div>
	<hr class="my-2">
	<br>
	<form method="post">
		<table class="table table-borderless">
			<tr class="m-3">
				<h6 class="pt-3">Nama</h6>
      	<input class="form-control form-control-md mb-3" type="text" name="nama" placeholder="Masukan Nama Lengkap" aria-label=".form-control-lg example" required>
      </tr>
			<tr>
				<h6>NIK</h6>
      	<input class="form-control form-control-md mb-3" type="text" name="no_pengenal" placeholder="NIK sesuai KTP" aria-label=".form-control-lg example" required>
			</tr>
			<tr>
				<h6>Tanggal Lahir</h6>
      	<input class="form-control form-control-md mb-3" type="date" id="date" name="tanggal_lahir" required>
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
      	<input class="form-control form-control-md mb-3" type="text" name="nope" placeholder="Masukan No HP yang aktif" aria-label=".form-control-lg example" required>
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
      	<textarea class="form-control form-control-md mb-3" type="text" name="alamat" aria-label=".form-control-lg example"></textarea>
			</tr>
		</table>
  <div class="container">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
         
        </ul>
          <button class="btn btn-outline-primary mb-3"  name="tambah">Tambah</button>

      </div>
	</form>
<?php
if (isset($_POST['tambah'])) {
	$nama_lengkap = $_POST['nama'];
    $no_pengenal = $_POST['no_pengenal'];
    $tgl = $_POST['tanggal_lahir'];
    $tanggal = date('Y-m-d', strtotime($tgl));
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $nope = $_POST['nope'];
    $provinsi_kota = $_POST['provinsi_kota'];
    $alamat = $_POST['alamat'];
    
	$cekdata=$koneksi->query("SELECT * FROM kewarganegaaan WHERE no_pengenal = '$no_pengenal'");
  	$hitungcocok = $cekdata->num_rows;
  	$ambildata = $cekdata->fetch_assoc();
    			if($hitungcocok==0) {?>
      <div class="alert alert-danger text-center" role="alert">Nama dan NIK tidak sesuai.</div>

            <?php 
        		}elseif($hitungcocok==1) {  
            		if(strtoupper($nama_lengkap) == strtoupper($ambildata['nama_lengkap'])){
						$cekvaksinasi=$koneksi->query("SELECT * FROM data_pendaftar WHERE no_pengenal = '$no_pengenal'");
						$cekdatavaksin = $cekvaksinasi->fetch_assoc();
						$stas = $cekdatavaksin['status_vaksinasi'];
							if($stas == 'Vaksin Dosis Pertama' || $stas == 'Vaksin Dosis Kedua' || $stas == 'Belum Vaksin'){
								echo "<div class='alert alert-danger text-center' role='alert'>Data telah  terdaftar.</div>";

							}else{
								$lahir =new DateTime($tanggal);
        						$sekarang = new DateTime();
        						$umur = $sekarang->diff($lahir)->y;
        						if($umur < 13){
          						echo "<div class='alert alert-danger text-center' role='alert'>data belum cukup umur.</div>";
        						}else{
								$koneksi->query("INSERT INTO data_pendaftar (nama_pendaftar, no_pengenal, tanggal_lahir, jenis_kelamin, no_hp, provinsi_kota, alamat) 
								VALUES('$nama_lengkap', '$no_pengenal', '$tanggal', '$jenis_kelamin', '$nope', '$provinsi_kota', '$alamat')");

									echo "<script>alert('Registrasi Vaksinasi Berhasil!');</script>";
									echo "<script>location='vaksinasi.php';</script>";
										}
							}}
					else { ?>
<div class="alert alert-danger text-center" role="alert">
  Nama dan NIK tidak sesuai. </div>
<?php
}
}
}
?>
</div>
