<?php
	$data = $koneksi->query("SELECT * FROM vaksinasi WHERE id_vaksinasi = '$_GET[id]'")->fetch_assoc();
?>
<form enctype="multipart/form-data"method="post">


			<span>Foto</span>
			<div width="125px"><img width="125px" src="../assets/img/sertifikat/<?php echo($data['sertifikat']); ?>"><br></div>
			<div class="pt-3"><input class="form-control" type="file" name="fotosertifikat" required></div>
	
		<button class="btn btn-success mt-3" name="kirim">Kirim Serifikat</button>
</form>
		<?php

if (isset($_POST['kirim'])) {

	$nama = $_FILES['fotosertifikat']['name'];
	$lokasi= $_FILES['fotosertifikat']['tmp_name'];
		
if (!empty($lokasi)) 
	{
		move_uploaded_file($lokasi, "../assets/img/sertifikat/".$nama);
		$koneksi->query("UPDATE vaksinasi SET
			sertifikat = '$nama'
			WHERE id_vaksinasi = '$_GET[id]'
			");

		echo "<script>alert('sertifikat Dikirim!');</script>";
		echo "<script>location='index.php?halaman=sertifikat';</script>";
	}
}

?>