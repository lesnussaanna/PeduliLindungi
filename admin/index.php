<?php 

include 'koneksi.php';

session_start();

if (!isset($_SESSION['admin'])) {
    echo "<script>alert('Silakan login terlebih dahulu!');</script>";
    echo "<script>location='../index.php';</script>";
   exit();
}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">

<?php 
include "script.php";


?>
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-light sticky-top bg-light flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#"><img alt="pedulilindungi" src="../assets/img/logo-with-text.svg" width="150"></a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="index.php?halaman=logout">Log out</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-blue-soft sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">
              <span data-feather="home"></span>
              Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="index.php?halaman=jadwal">
              <span data-feather="file"></span>
              Jadwal Vaksin
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="index.php?halaman=peserta">
              <span data-feather="users"></span>
              Peserta Vaksin
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link active" href="index.php?halaman=hasil">
              <span data-feather="layers"></span>
              Hasil Tes COVID
            </a>
          </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Tambah</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link active" href="index.php?halaman=tambah-peserta">
              <span data-feather="file-text"></span>
              Peserta Vaksin
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="index.php?halaman=tambah-tes_pcr">
              <span data-feather="file-text"></span>
              Tes Covid PCR
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="index.php?halaman=tambah-tes_antigen">
              <span data-feather="file-text"></span>
              Tes Covid Antigen
            </a>
          </li>
        </ul>
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Program Vaksinasi</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link active" href="index.php?halaman=tambahvaksinasi">
              <span data-feather="file-text"></span>
              Vaksinasi
            </a>
          </li>
        </ul>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link active" href="index.php?halaman=sertifikat">
              <span data-feather="file-text"></span>
              Sertifikat
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2 blue-main"><?php echo $_SESSION['admin']['nama_lengkap']; ?> , Selamat Bekerja.</h1>
        
      </div>

       <?php
                if (isset($_GET['halaman']))
                {
                    if ($_GET['halaman']=="peserta")
                    {
                        include 'peserta.php';
                    }
                    elseif ($_GET['halaman']=="jadwal")
                    {
                        include 'jadwal.php';
                    }
                    elseif ($_GET['halaman']=="tambah-jadwal")
                    {
                        include 'tambah-jadwal.php';
                    }
                    elseif ($_GET['halaman']=="tambah-peserta")
                    {
                        include 'tambah-peserta.php';
                    }
                    elseif ($_GET['halaman']=="hasil")
                    {
                        include 'hasil.php';
                    }
                    elseif ($_GET['halaman']=="tambah-tes_pcr")
                    {
                        include 'tambah-tes_pcr.php';
                    }
                    elseif ($_GET['halaman']=="tambah-tes_antigen")
                    {
                        include 'tambah-tes_antigen.php';
                    }
                    elseif ($_GET['halaman']=="vaksinasi")
                    {
                        include 'tambah-jadwal.php';
                    }
                    elseif ($_GET['halaman']=="tambahvaksinasi")
                    {
                        include 'tambah-vaksinasi.php';
                    }
                    elseif ($_GET['halaman']=="editjadwal")
                    {
                        include 'editjadwal.php';
                    }
                    elseif ($_GET['halaman']=="editpeserta")
                    {
                        include 'editpeserta.php';
                    }
                    elseif ($_GET['halaman']=="hapuspeserta")
                    {
                        include 'hapuspeserta.php';
                    }
                    elseif ($_GET['halaman']=="sertifikat")
                    {
                        include 'sertifikat.php';
                    }
                    elseif ($_GET['halaman']=="inputsertifikat")
                    {
                        include 'inputsertifikat.php';
                    }
                    elseif ($_GET['halaman']=="logout")
                    {
                        include 'logout.php';
                    }
                     
                }
                else
                {
                    include 'home.php';
                }
                ?>
    </main>
  </div>
</div>  </body>
</html>
