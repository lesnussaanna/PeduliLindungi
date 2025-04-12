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
<!DOCTYPE html>
<html>
<head>
  <title>Profil</title>
<?php
include "script.php";
?>
</head>
<style data-jss="" data-meta="MuiSvgIcon">
.MuiSvgIcon-root {
  fill: currentColor;
  width: 1em;
  height: 1em;
  display: inline-block;
  font-size: 1.5rem;
  transition: fill 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
  flex-shrink: 0;
  user-select: none;
}
.MuiSvgIcon-colorPrimary {
  color: #3f51b5;
}
.MuiSvgIcon-colorSecondary {
  color: #f50057;
}
.MuiSvgIcon-colorAction {
  color: rgba(0, 0, 0, 0.54);
}
.MuiSvgIcon-colorError {
  color: #f44336;
}
.MuiSvgIcon-colorDisabled {
  color: rgba(0, 0, 0, 0.26);
}
.MuiSvgIcon-fontSizeInherit {
  font-size: inherit;
}
.MuiSvgIcon-fontSizeSmall {
  font-size: 1.25rem;
}
.MuiSvgIcon-fontSizeLarge {
  font-size: 2.1875rem;
}
</style>
<style type="text/css">
  .jss12 {
  min-width: 2.7555rem;
}
.jss12 svg {
  fill: #229BD8;
}
.jss13 svg {
  fill: #ffffff;
}
</style>
<body>
<div class="alert-fixed">
  <?php
include "navbar.php";
?>
</div>
<div class="container">
<div class="row mb-3 mt-5">
      <div class="col-md-4 themed-grid-col">
        <div class=" p-3 bg-light container" style="width: 280px;">
    <div class=" nav-link d-flex align-items-center mb-3 mb-md-0 me-md-auto link-secondary">
      <img alt="Profil" src="assets/img/ic-user.svg" width="25">  &nbsp; &nbsp;
      <span class="fs-4">Nama Lengkap</span>
    </div>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="profil.php" class="nav-link link-primary" aria-current="page">
          <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" clip-rule="evenodd" d="M11.9944 11C13.6512 11 14.9944 9.65685 14.9944 8C14.9944 6.34315 13.6512 5 11.9944 5C10.3375 5 8.99438 6.34315 8.99438 8C8.99438 9.65685 10.3375 11 11.9944 11ZM11.9944 13C14.7558 13 16.9944 10.7614 16.9944 8C16.9944 5.23858 14.7558 3 11.9944 3C9.23296 3 6.99438 5.23858 6.99438 8C6.99438 10.7614 9.23296 13 11.9944 13Z"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M4 19C4 16.2386 6.23858 14 9 14H15C17.7614 14 20 16.2386 20 19V21C20 21.5523 19.5523 22 19 22C18.4477 22 18 21.5523 18 21V19C18 17.3431 16.6569 16 15 16H9C7.34315 16 6 17.3431 6 19V21C6 21.5523 5.55228 22 5 22C4.44772 22 4 21.5523 4 21V19Z"></path></svg> &nbsp; &nbsp;
          Akun Saya
        </a>
      </li>
      <li>
        <a href="kotak-masuk.php" class="nav-link active">
          <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" clip-rule="evenodd" d="M5.82034 5.29775C6.11307 4.51714 6.85931 4 7.693 4H16.307C17.1407 4 17.8869 4.51715 18.1797 5.29775L21 12.8187V18C21 19.1046 20.1046 20 19 20H5C3.89543 20 3 19.1046 3 18V12.8187L5.82034 5.29775ZM16.307 6L7.693 6L5.443 12H8.00027C8.59103 12 9.05576 12.2636 9.38244 12.5549C9.70062 12.8387 9.93175 13.1849 10.0939 13.4729C10.1604 13.591 10.4642 14 12 14C13.5358 14 13.8396 13.591 13.9061 13.4729C14.0682 13.1849 14.2994 12.8387 14.6176 12.5549C14.9442 12.2636 15.409 12 15.9997 12H18.557L16.307 6ZM19 14H16.0128C16.0021 14.0055 15.9812 14.0186 15.9487 14.0476C15.8615 14.1253 15.7577 14.2608 15.6489 14.4541C15.0484 15.5207 13.7966 16 12 16C10.2034 16 8.95165 15.5207 8.35114 14.4541C8.24233 14.2608 8.13848 14.1253 8.05134 14.0476C8.0188 14.0186 7.99786 14.0055 7.98721 14H5V18H19V14Z"></path></svg> &nbsp; &nbsp;
          Kotak Masuk
        </a>
      </li>
      <li>
        <a href="riwayat-tiket-vaksin.php" class="nav-link link-primary">
          <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" clip-rule="evenodd" d="M4 5C4 3.89543 4.89543 3 6 3H17C18.1046 3 19 3.89543 19 5V19C19 20.1046 18.1046 21 17 21H6C4.89543 21 4 20.1046 4 19V5ZM17 5H6V19H17V5ZM8 8C8 7.44772 8.44772 7 9 7H14.5C15.0523 7 15.5 7.44772 15.5 8C15.5 8.55228 15.0523 9 14.5 9H9C8.44772 9 8 8.55228 8 8ZM8 12C8 11.4477 8.44772 11 9 11H13.5C14.0523 11 14.5 11.4477 14.5 12C14.5 12.5523 14.0523 13 13.5 13H9C8.44772 13 8 12.5523 8 12ZM8 16C8 15.4477 8.44772 15 9 15H14.5C15.0523 15 15.5 15.4477 15.5 16C15.5 16.5523 15.0523 17 14.5 17H9C8.44772 17 8 16.5523 8 16Z"></path></svg> &nbsp; &nbsp;
          Riwayat & Tiket Vaksin
        </a>
      </li>
      <li  class="mb-5">
        <a href="sertifikat-vaksin.php" class="nav-link link-primary">
          <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" clip-rule="evenodd" d="M5.40508 1.62807C5.55709 1.2487 5.92465 1 6.33334 1H17.6667C18.0754 1 18.4429 1.2487 18.5949 1.62807L20.9283 7.4516C21.0601 7.78051 21.0079 8.1546 20.7913 8.43498L17.7854 12.3249L19.716 12.5337C20.1075 12.576 20.4378 12.8443 20.5595 13.2188C20.6812 13.5934 20.5717 14.0046 20.2798 14.269L16.6875 17.5231L17.6811 22.2672C17.7618 22.6527 17.6087 23.0496 17.2901 23.2812C16.9714 23.5127 16.5466 23.5356 16.2049 23.3397L12 20.9287L7.79513 23.3397C7.45345 23.5356 7.02859 23.5127 6.70994 23.2812C6.3913 23.0496 6.23823 22.6527 6.31896 22.2672L7.31252 17.5231L3.72021 14.269C3.4283 14.0046 3.31879 13.5934 3.4405 13.2188C3.56221 12.8443 3.89247 12.576 4.28405 12.5337L6.21458 12.3249L3.20872 8.43498C2.99207 8.1546 2.93996 7.78051 3.07175 7.4516L5.40508 1.62807ZM9.10298 12.0126L8.54721 12.0727L5.14097 7.6646L6.37539 4.58373L9.47806 11.1769L9.10298 12.0126ZM10.5571 8.77275L11.0877 7.59053C11.249 7.2312 11.6061 7 12 7C12.3939 7 12.7511 7.2312 12.9123 7.59053L13.4429 8.77275L16.1595 3H7.8405L10.5571 8.77275ZM17.6246 4.58373L18.859 7.6646L15.4528 12.0727L14.897 12.0126L14.522 11.1769L17.6246 4.58373ZM12 10.4422L10.6929 13.3546C10.5474 13.6786 10.2411 13.9012 9.88804 13.9394L6.71422 14.2825L9.08017 16.4257C9.34337 16.6641 9.46038 17.0242 9.38759 17.3718L8.73321 20.4964L11.5026 18.9085C11.8107 18.7318 12.1893 18.7318 12.4974 18.9085L15.2668 20.4964L14.6124 17.3718C14.5396 17.0242 14.6566 16.6641 14.9198 16.4257L17.2858 14.2825L14.112 13.9394C13.7589 13.9012 13.4526 13.6786 13.3072 13.3546L12 10.4422Z"></path></svg> &nbsp; &nbsp;
          Sertifikat Vaksin
        </a>
      </li>
    </ul>
    <hr class="mt-5">
   
      <a href="logout.php" class="nav-link link-primary" >
        <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" clip-rule="evenodd" d="M14.7924 4.71554C14.6109 4.56537 14.3904 4.46999 14.1567 4.44057C13.923 4.41114 13.6857 4.44889 13.4727 4.5494C13.2597 4.6499 13.0796 4.809 12.9537 5.00808C12.8278 5.20716 12.7612 5.43798 12.7617 5.67354V5.68526C12.7648 5.86778 12.8066 6.04756 12.8844 6.21271C12.9621 6.37786 13.0741 6.52461 13.2128 6.64326C14.15 7.49361 14.8077 8.60774 15.0996 9.83907C15.3915 11.0704 15.3038 12.3612 14.848 13.5418C14.3922 14.7223 13.5898 15.7372 12.5462 16.453C11.5026 17.1687 10.2668 17.5518 9.00139 17.5518C7.73594 17.5518 6.50013 17.1687 5.45656 16.453C4.41298 15.7372 3.61052 14.7223 3.15476 13.5418C2.699 12.3612 2.61128 11.0704 2.90315 9.83907C3.19502 8.60774 3.85281 7.49361 4.78996 6.64326C4.92862 6.52456 5.04053 6.37779 5.11829 6.21265C5.19605 6.04752 5.2379 5.86776 5.24107 5.68526C5.24087 5.52175 5.20815 5.35992 5.14481 5.20917C5.08148 5.05843 4.9888 4.92179 4.87216 4.8072C4.75553 4.69261 4.61727 4.60236 4.46543 4.5417C4.31358 4.48105 4.1512 4.45119 3.98771 4.45388C3.67322 4.45181 3.36925 4.56704 3.13517 4.77707C2.07096 5.72449 1.25601 6.91903 0.762074 8.2555C0.268137 9.59198 0.110365 11.0294 0.302651 12.4412C0.623252 14.63 1.75798 16.6171 3.48008 18.0056C5.20217 19.3941 7.38479 20.0816 9.59176 19.9307C11.7987 19.7799 13.8675 18.8017 15.3846 17.1919C16.9018 15.582 17.7555 13.4589 17.7753 11.2468C17.7757 10.0079 17.5095 8.78342 16.9948 7.65648C16.4801 6.52954 15.729 5.52653 14.7924 4.71554ZM9.00138 11.2468C9.33232 11.2471 9.64992 11.1165 9.88479 10.8833C10.1197 10.6502 10.2527 10.3335 10.2548 10.0026V1.29362C10.252 0.963034 10.1187 0.64694 9.88395 0.414164C9.6492 0.181388 9.33199 0.0507812 9.00139 0.0507812C8.67079 0.0507812 8.35358 0.181388 8.11882 0.414164C7.88406 0.64694 7.75077 0.963034 7.74797 1.29362V10.0026C7.75011 10.3335 7.88314 10.6502 8.118 10.8833C8.35286 11.1164 8.67046 11.2471 9.00138 11.2468Z"></path></svg>  &nbsp; &nbsp;
        <strong>Keluar Dari Akun</strong>
      </a>
  </div>
      </div>
      <div class="col-md-8 themed-grid-col p-3">
          <span class="fs-4 text-secondary"><strong>Kotak Masuk</strong></span>
        </div>
      

  </div>
    </div>

  </div>


<?php
include "footer.php";
?>
</div>
</body>
</html>