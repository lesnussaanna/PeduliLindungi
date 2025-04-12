<nav class="navbar navbar-expand-lg navbar-light bg-light" aria-label="Eighth navbar example">
    <div class="container">
      <a class="navbar-brand" href="index.php"><img alt="pedulilindungi" src="assets/img/logo-with-text.svg" width="150"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample07">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#tentang">Tentang</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#carakerja">Cara Kerja</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="syaratpenggunaan.php">Syarat Penggunaan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="kebijakanprivasi.php">Kebijakan Privasi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#unduh">Unduh</a>
          </li>
        </ul>
        <span class="mr-3"></span>
        <?php if (isset($_SESSION['user'])): ?>

        <!-- tombol riwayat -->
        <a href="profil.php" class="btn mr-3"><img width="27" src="assets/img/ic-user.svg"></a>

      <?php else: ?>
          <a type="button" class="btn btn-outline-primary" href="login.php">Masuk</a>
        <?php endif ?>
      </div>
    </div>
  </nav>