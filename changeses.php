<?php
	
session_start();

if (isset($_SESSION['admin'])){
  header("location:admin.php");
}
elseif(!isset($_SESSION['user']) || empty($_SESSION['user'])){
	echo "<script>alert('Silakan Login terlebih dahulu!');</script>";
	echo "<script>location='index.php';</script>";
}

include 'koneksi.php';

$id = $_SESSION['user']['id_data'];

$query = $koneksi->query("SELECT * FROM data_akun WHERE id_data = '$id'");
$data = $query->fetch_assoc();

$_SESSION['user'] = $data; 

header("location:profil.php");
?>