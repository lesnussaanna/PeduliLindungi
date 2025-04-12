<div class="p-5">
<div align="center p-3">
    <h5 class="pt-3"><b>Vaksinasi</b></h5>
   </div>
  <hr class="my-2">
  <br>
  <form method="post">
    <table class="table table-borderless">
      <tr>
        <h6>Tanggal Vaksinasi</h6>
        <input class="form-control form-control-md mb-3" type="date" id="date" name="tanggal"  required>
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
        <select class="form-select form-select-md mb-3" aria-label=".form-select-md example"   name="provinsi_kota" required>
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
        <input class="form-control form-control-md mb-3" type="text" name="lokasi"  aria-label=".form-control-lg example" required>
      </tr>
      <tr>
        <h6>Alamat lokasi</h6>
        <textarea class="form-control form-control-md mb-3" type="text" name="alamat" required></textarea>
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
     $koneksi->query("INSERT INTO jadwal_vaksinasi(
      tanggal,
      id_vaksin,
      dosis_vaksin,
      lokasi,
      provinsi_kota,
      alamat)
      VALUES(
      '$_POST[tanggal]',
      '$_POST[id_vaksin]',
      '$_POST[dosis_vaksin]',
      '$_POST[lokasi]',
      '$_POST[provinsi_kota]',
      '$_POST[alamat]'
      )");
      echo "<script>alert('Data Disimpan!');</script>";
    echo "<script>location='index.php?halaman=jadwal';</script>";
  }
?>
</div>