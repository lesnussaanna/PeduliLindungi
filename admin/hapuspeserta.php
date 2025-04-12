<?php 
$koneksi->query("DELETE FROM data_pendaftar WHERE id_pendaftar ='$_GET[id]'");


echo "<script>alert('Data Pendaftar Dihapus!');</script>";
echo "<script>location='index.php?halaman=peserta';</script>";
?>