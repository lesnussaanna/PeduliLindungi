<?php 
$id = $_GET['id'];
$jadwal=$koneksi->query("SELECT * FROM jadwal_vaksinasi  WHERE id_jadwal = '$id'");
$datajadwal = $jadwal->fetch_assoc();
?>

<div class="p-5">
<div align="center p-3">
    <h5 class="pt-3"><b> Edit  Data Vaksinasi</b></h5>
   </div>
  <hr class="my-2">
  <br>
  <form method="post">
    <table class="table table-borderless">
      <tr>
        <h6>Tanggal Vaksinasi</h6>
        <input class="form-control form-control-md mb-3" type="date" id="date" name="tanggal" value="<?php echo $datajadwal['tanggal']; ?>" required>
      </tr>
      <tr>
        <h6>Dosis Vaksin</h6>
        <select class="form-select form-select-md mb-3" aria-label=".form-select-lg example" name="dosis_vaksin"  required>
  <option selected disabled>Pilih Dosis</option>
  <option value="Vaksin Pertama">Vaksin Pertama</option>
  <option value="Vaksin Kedua">Vaksin Kedua</option>
</select>
      </tr>
      <tr>
        <h6>Nama Vaksin</h6>
        <select class="form-select form-select-md mb-2" aria-label=".form-select-lg example" name="id_vaksin"  required>
  <option selected disabled>  Pilih Jenis Vaksin</option>
  <option value="1">Sinovac</option>
  <option value="2">AstraZeneca</option>
  <option value="3">Sinopharm</option>
  <option value="4">Moderna</option>
  <option value="5">Pfizer</option>
  <option value="6">Vaksin Luar Negeri</option>
</select>
      </tr>
      <tr>
        <h6>Kota / Kecamatan / Provinsi / Alamat</h6>
        <select class="form-select form-select-md mb-3" aria-label=".form-select-md example"  name="provinsi_kota" required>
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
        <h6>Lokasi</h6>
        <input class="form-control form-control-md mb-3" type="text" name="lokasi" value="<?php echo $datajadwal['lokasi']; ?>" aria-label=".form-control-lg example" required>
      </tr>
      <tr>
        <h6>Alamat lokasi</h6>
        <textarea class="form-control form-control-md mb-3" type="text" name="alamat" placeholder="<?php echo $datajadwal['alamat']; ?>" required></textarea>
      </tr>
    </table>
  <div class="container">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
         
        </ul>
          <button class="btn btn-outline-primary mb-3" name="ubah" >Ubah</button>

      </div>
  </form>
  <?php

if (isset($_POST['ubah'])) {

    $koneksi->query("UPDATE jadwal_vaksinasi SET 
      tanggal = '$_POST[tanggal]',
      id_vaksin= '$_POST[id_vaksin]',
      dosis_vaksin = '$_POST[dosis_vaksin]',
      lokasi = '$_POST[lokasi]',
      provinsi_kota = '$_POST[provinsi_kota]',
      alamat = '$_POST[alamat]'
      WHERE id_jadwal = '$id'
      ");

    echo "<script>alert('Data Disimpan!');</script>";
    echo "<script>location='index.php?halaman=jadwal';</script>";
  }

?>
</div>