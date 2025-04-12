<div class="p-5">
<div align="center p-3">
		<h5 ><b>Formulir Tes PCR</b></h5>
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
				<h6>NIK/No Paspor</h6>
      	<input class="form-control form-control-md mb-3" type="text" name="no_pengenal" placeholder="NIK sesuai KTP" aria-label=".form-control-lg example" required>
			</tr>
			<tr>
				<h6>Status PCR</h6>
				<select class="form-select form-select-md mb-3" aria-label=".form-select-lg example" name="status_pcr" required>
  <option selected disabled>Pilih Status</option>
  <option value="Positif">Positif</option>
  <option value="Negatif">Negatif</option>
</select>
			</tr>
			<tr>
				<h6>Tanggal Antigen</h6>
      	<input class="form-control form-control-md mb-3" type="date" id="date" name="tanggal_pcr" required>
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
    $tgl = $_POST['tanggal_pcr'];
    $tanggal = date('Y-m-d', strtotime($tgl));
    
	$cekdata=$koneksi->query("SELECT * FROM kewarganegaaan WHERE no_pengenal = '$no_pengenal'");
  	$hitungcocok = $cekdata->num_rows;
  	$ambildata = $cekdata->fetch_assoc();
    if($hitungcocok==0) {?>
      <div class="alert alert-danger text-center" role="alert">Nama dan NIK tidak sesuai.</div>

            <?php 
    }elseif($hitungcocok==1) {  
        if(strtoupper($nama_lengkap) == strtoupper($ambildata['nama_lengkap'])){
        	$ambil = $koneksi->query("SELECT no_pengenal FROM tes_covid WHERE no_pengenal='$no_pengenal'");
      		$no_pengenalada = $ambil->num_rows;
			if ($no_pengenalada >= 1){
     		 $koneksi->query("UPDATE tes_covid SET status_pcr='$_POST[status_pcr]',tanggal_pcr='$_POST[tanggal_pcr]' WHERE no_pengenal='$no_pengenal'");
      				echo "<script>alert('Data Disimpan!');</script>";
    		}else{
        $koneksi->query("INSERT INTO tes_covid (no_pengenal, nama ,status_pcr, tanggal_pcr) 
            VALUES('$no_pengenal','$nama_lengkap','$_POST[status_pcr]','$_POST[tanggal_pcr]')");
        echo "<script>alert('Data Disimpan!');</script>";}

}
}
}
?>
</div>