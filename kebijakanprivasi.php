<?php 
session_start();

if (isset($_SESSION['admin'])){
  header("location:admin/index.php");
}?>
<!DOCTYPE html>
<html>
<head>
	<?php
	include 'script.php';
	?>
	<title>Kebijakan Privasi</title>
</head>
<body>
<div class="fixed-alert">
	<?php
	include 'navbar.php';
	?>
</div>
<div class="bg-blue-soft">
<div class="container">
	<h3 class="container mt-5 pt-5 blue-main">Kebijakan Kerahasiaan</h3>
	<h4 class="container mt-5 pb-3 text-secondary">PeduliLindungi berkomitmen terhadap privasi Anda.</h4>
</div>
	</div>
<div class="container pb-5">
	<div class="container ps-5">
	<p class="mt-5 pt-5 text-secondary">Kami, <strong>PeduliLindungi</strong> akan menginformasikan tentang hal-hal penting mengenai Kebijakan Kerahasiaan data pengguna pada aplikasi <strong>PeduliLindungi</strong>. Mulai dari bagaimana kami mengolah dan menggunakannya akan disampaikan secara poin-poin pada Kebijakan Kerahasiaan ini. Perlu diperhatikan, dengan mendaftarkan ke/dan menggunakan aplikasi kami, Anda mengakui secara sadar bahwa Anda telah membaca serta menyetujui Kebijakan Kerahasiaan ini serta memberikan persetujuan atas pengumpulan, penggunaan dan pengolahan data sesuai dengan Kebijakan Kerahasiaan ini dan/ atau syarat penggunaan.<br><br>
		<strong>PeduliLindungi</strong> dan <strong>TELKOM</strong> menyadari bahwa informasi Pengguna dan/atau Pelanggan bersifat rahasia dan pribadi. Oleh karena itu kami berkomitmen untuk melindungi dan merahasiakan data Pengguna dan/atau Pelanggan sesuai dengan peraturan perundang-undangan Republik Indonesia.<br><br>
		Kebijakan Kerahasiaan <strong>PeduliLindungi</strong> meliputi:</p> 
	<ol class="container mt-5 ps-5 blue-main"> 
		<li><a href="kebijakanprivasi.php#1">Cara Kerja PeduliLindungi</a></li> 
		<li><a href="kebijakanprivasi.php#2">Perolehan dan Pengumpulan Data</a></li> 
        <li><a href="kebijakanprivasi.php#3">Penggunaan Data</a></li> 
        <li><a href="kebijakanprivasi.php#4">Perlindungan Data Pengguna</a></li> 
        <li><a href="kebijakanprivasi.php#5">Akses dan Perizinan Pengguna pada perangkat</a></li> 
        <li><a href="kebijakanprivasi.php#6">Ketentuan Membagi dan Mentransfer Data</a></li> 
        <li><a href="kebijakanprivasi.php#7">Jika Anda terdiagnosa Positif COVID-19</a></li> 
        <li><a href="kebijakanprivasi.php#8">Jika Anda “contact” dengan pengguna yang Positif COVID-19</a></li> 
        <li><a href="kebijakanprivasi.php#9">Pengendalian dan Persetujuan Perekaman Data</a></li> 
        <li><a href="kebijakanprivasi.php#10">Penghapusan Data Setelah Pandemi Berakhir</a></li> 
        <li><a href="kebijakanprivasi.php#11">Tautan ke Aplikasi atau Website Lain</a></li> 
        <li><a href="kebijakanprivasi.php#12">Persetujuan</a></li> 
        <li><a href="kebijakanprivasi.php#13">Informasi Tambahan</a></li> 
    </ol> 
</div>
<div class="container ps-5" id="1">
	<h2 class="mt-5" >1. Cara Kerja PeduliLindungi</h2> 
	<ol class=" ps-5 text-secondary"> <li order="a">Pada saat Pengguna dan/atau Pelanggan mengunduh <strong>PeduliLindungi</strong>, sistem akan meminta persetujuan Pengguna dan/atau Pelanggan atas Kebijakan Privasi dan Syarat Pengunaan</li> <li order="b">Dengan kondisi lokasi aktif, maka secara berkala aplikasi akan melakukan identifikasi lokasi Pengguna dan/atau Pelanggan serta memberikan informasi terkait keramaian lokasi</li> <li order="c">Lokasi pengguna akan aktif dan aplikasi akan mengidentifikasi terkait keramaian hanya saat aplikasi dibuka atau berjalan</li> <li order="d">Hasil tracing ini akan memudahkan pemerintah untuk mengidentifikasi siapa saja yang perlu mendapat penanganan lebih lanjut agar penghentian penyebaran COVID-19 dapat dilakukan. Sehingga, semakin banyak partisipasi masyarakat yang menggunakan aplikasi ini, akan semakin membantu pemerintah dalam melakukan tracing dan tracking</li> </ol> 
	<p class=" text-secondary"><strong>PeduliLindungi</strong> hanya akan memberikan notifikasi jika:</p> 
	<ol class=" ps-5 text-secondary"> <li>Pengguna teridentifikasi berada di keramaian, yaitu berada di tempat yang sama dengan beberapa pengguna lain yang mengaktifkan aplikasi <strong>PeduliLindungi</strong> dalam waktu yang cukup lama.</li> <li>Pengguna masuk ke suatu zona tertentu yang kategorinya telah ditentukan Pemerintah RI melalui Komite Penanganan Covid-19 dan Pemulihan Ekonomi Nasional (KPCPEN) di <a href="https://covid19.go.id/peta-risiko" target="_blank" rel="noopener noreferrer">https://covid19.go.id/peta-risiko </a>, yaitu:
        <ol alpha=""> 
        <li order="a">Risiko Tinggi</li> <li order="b">Risiko Sedang</li> <li order="c">Risiko Rendah</li> <li order="d">Tidak Ada Kasus</li> <li order="e">Tidak Terdampak</li> </ol></li> <li>Pengguna berstatus dalam karantina mandiri, namun Anda keluar dari zona karantina/isolasi.</li> </ol>
	</div>
	<div class="container ps-5" id="2">
	<h2 class="mt-5" >2. Perolehan dan Pengumpulan Data</h2> 
	<p class=" mt-5 text-secondary"><strong>PeduliLindungi</strong> hanya mengumpulkan data perangkat dan informasi Anda untuk menjalankan layanan. <strong>PeduliLindungi</strong> juga akan menggunakan beberapa informasi Anda untuk alasan lain yang akan dijelaskan di dalam Kebijakan ini. Data perangkat dan informasi yang akan <strong>PeduliLindungi</strong> kumpulkan ialah:</p> 
	<ol class=" ps-5 text-secondary"> <li><p><strong>Informasi guna kebutuhan Registrasi</strong>: Untuk dapat menggunakan aplikasi <strong>PeduliLindungi</strong>, kami akan meminta Anda membuat akun <strong>PeduliLindungi</strong> agar Anda bisa menggunakan fitur dan berpartisipasi dalam contact tracing. Data yang dibutuhkan termasuk, dan tidak terbatas pada, Nama, Nomor HP Anda, serta lokasi dan waktu registrasi.</p> </li> <li><p><strong>Informasi dan Data Perangkat</strong>: <strong>PeduliLindungi</strong> akan menyimpan informasi perangkat berdasarkan perjalanan Anda selama aplikasi sudah terunduh, contohnya: lokasi geografis, waktu pada saat kontak dengan pasien Covid-19 terjadi dan durasi selama kontak terjadi. <strong>PeduliLindungi</strong> juga akan menyimpan informasi atau akses saat anda menggunakan aplikasi, seperti User ID saat registrasi dan akses kamera, galeri serta files.</p> <ul> <li><strong>Lokasi geografis</strong>: <strong>PeduliLindungi</strong> akan menggunakan informasi mengenai lokasi Anda, saat menggunakan aplikasi maupun tidak, untuk menyediakan Anda layanan mengenai informasi lokasi zona terdampak sesuai dengan acuan yang ditentukan oleh Pemerintah Republik Indonesia, menampilkan statistik kasus covid-19 di lokasi sekitar Anda, dan menyimpan serta menampilkan histori perjalanan Anda di Diari Perjalanan sebagai upaya program Contact Tracing oleh Pemerintah Republik Indonesia.</li> <li><strong>Akses pada perangkat</strong>: <strong>PeduliLindungi</strong> hanya akan meminta izin akses untuk menggunakan kamera, galeri dan files saat Anda melakukan perubahan foto profil, mengunduh sertifikat dan mengunggah dokumen guna melengkapi pengisian Electronic- Health Alert Card (e-HAC) berdaskan Peraturan Menteri Kesehatan Republik Indonesia. <strong>PeduliLindungi</strong> tidak akan mengambil atau menggunakan data kontak Anda atau pun berkas lain selain yang Anda pilih.</li> <li><strong>Photo Media dan File</strong>: Jika pengguna memilih foto profil dari kamera, <strong>PeduliLindungi</strong> akan membuka kamera untuk mengambil gambar yang diinginkan user melalui kamera perangkat. Setelah foto berhasil diambil, foto akan disimpan terlebih dahulu ke dalam penyimpanan perangkat, baru digunakan di dalam aplikasi. Jika pengguna masuk ke menu scan QR, <strong>PeduliLindungi</strong> akan membaca QR Code melalui kamera yang ada pada perangkat, setelah QR Code terbaca, <strong>PeduliLindungi</strong> akan menutup kamera dan menuju ke halaman selanjutnya. Jika pengguna ingin mengunggah dokumen pendukung pembuatan e-Hac, maka <strong>PeduliLindungi</strong> akan mengakses file untuk mengunggah file yang user pilih.</li> </ul> </li> </ol> 
	<p class="text-secondary">Anda dapat melihat dan membatalkan permission/izin akses yang digunakan oleh <strong>PeduliLindungi</strong> kapan pun melalui menu Setting. Semua akses hanya bisa kami olah dan gunakan jika Anda memberikan izin.
        </p>
	</div>
	<div class="container ps-5" id="3">
	<h2 class="mt-5" >3. Penggunaan Data</h2> 
	<p class=" mt-5 text-secondary">Berdasarkan Peraturan Menteri Kesehatan Republik Indonesia, aplikasi <strong>PeduliLindungi</strong> akan mengolah dan menggunakan data Anda untuk memberikan layanan Contact Tracing. Data yang telah diambil akan diolah di server selanjutnya dianalisis untuk memberikan infomasi kepada Anda, prosedur apa saja yang harus dilakukan bila terjadi kontak erat dengan penderita Covid-19. Kami akan melakukan analisis Contact tracing dengan mekanisme:</p> 
	<ul class=" ps-5 text-secondary"> <li><p>Fitur Contact Tracing melibatkan lokasi pengguna. Lokasi pengguna hanya aktif saat aplikasi dibuka atau dijalankan. Data lokasi pengguna yang dicatat berupa:</p> <ul> <li>Latitude dan Longitude: Data tersebut akan dikirimkan ke server untuk kemudian diproses guna menentukan status kepadatan dari lokasi pengguna saat itu berada. Action yang akan dilakukan adalah mengirimkan notifikasi kepada pengguna dan mencatat history nya kedalam menu diary perjalanan.</li> <li>Semua proses analisis akan dilakukan di server dan menjadi acuan bagi pemerintah dalam menangani masalah penyebaran COVID-19 di Indonesia</li> </ul> </li> </ul> 
	<p class="text-secondary"><strong>Selain itu, data dan akses yang tersimpan akan diolah untuk kebutuhan:</strong></p> 
	<ol class=" ps-5 text-secondary"> <li>Menampilkan lokasi sesuai kategori zona risiko (tinggi, sedang, rendah, tidak ada kasus, tidak terdampak) yang kriterianya ditentukan oleh Pemerintah RI melalui Komite Penanganan Covid-19 dan Pemulihan Ekonomi Nasional (KPCPEN), meskipun saat aplikasi sedang tidak dijalankan.</li> <li>Menampilkan statistik kasus covid-19 di lokasi sekitar Anda.</li> <li>Menyimpan dan menampilkan histori perjalanan Anda di Diari Perjalanan sebagai upaya program Contact Tracing oleh Pemerintah Republik Indonesia. </li> <li>Menggunakan foto yang tersedia di penyimpanan ponsel Anda dan Anda pilih saat melakukan perubahan foto profil melalui fitur Ubah Profil. </li> <li>Menampilkan sertifikat vaksin yang pengguna telah unduh (file foto) melalui <strong>PeduliLindungi</strong>.</li> <li>Mengunggah Pernyataan Kesehatan untuk keperluan melengkapi pengisian Electronic- Health Alert Card (e-HAC) berdaskan Peraturan Menteri Kesehatan Republik Indonesia.</li> <li>Menentukan siapa yang pernah memiliki histori kontak dengan kasus COVID-19 yang Terkonfirmasi, Suspek, atau Kontak Erat.</li> <li>Menentukan lokasi karantina mandiri dan memberikan notifikasi kepada orang yang dinyatakan harus menjalani karantina mandiri</li> <li>Memberikan informasi kepada masyarakat terkait zonasi yang ditentukan oleh pemerintah.</li> <li>Sebagai informasi umum dalam dashboard untuk pemerintah dalam pengambilan keputusan.</li> <li>Untuk melihat statistik dan riwayat “contact” serta riwayat bepergian pengguna <strong>PeduliLindungi</strong>.</li> <li>Untuk kebutuhan dan hal lain yang akan kami beritahu nanti sebelum kami meminta izin aksesnya.</li> </ol> 
	<p class="text-secondary">Semua data dan izin akses dapat Anda batalkan kapan pun dan sewaktu-waktu. Semua fitur hanya bisa digunakan jika Anda memberikan izin atau memberikan persetujuan untuk melakukan aksi tersebut, contohnya: aplikasi hanya akan mengunduh dan mengunggah file yang Anda pilih dan setujui.<br><br>
	Data-data tersebut akan disimpan sementara di penyimpanan lokal ponsel Anda secara terenkripsi dan akan dikirim ke server secara berkala. Setelah data dikirim ke server, data yang tersimpan di penyimpanan lokal ponsel Anda akan dihapus saat itu juga.<br><br>
	Data-data tersebut disimpan secara terenkripsi di server <strong>PeduliLindungi</strong> yang aman dan tidak dibagikan ke publik. Data Anda hanya akan diakses bila Anda dalam risiko tertular COVID-19 dan perlu segera dihubungi oleh petugas kesehatan.<br><br>
	<strong>Data Anda tidak akan diserahkan atau disebarluaskan kepada pihak lain kecuali kepada instansi pemerintah yang saat ini ditunjuk dalam menangani pandemi COVID-19, atau karena ketentuan hukum.</strong></p> 
	</div>
	<div class="container ps-5" id="4">
	<h2 class="mt-5" >4. Perlindungan Data Pengguna</h2> 
	<p class=" mt-5 text-secondary">Data disimpan aman dalam format terenkripsi dan tidak akan dibagikan kepada pihak lain. Aplikasi hanya akan merekam data proximity (kedekatan) satu telepon seluler (ponsel) dengan ponsel lainnya dalam format terenkripsi. Aplikasi juga tidak merekam data geolokasi pengguna. Sedangkan nomor ponsel yang didaftarkan akan direlasikan dengan ID random di dalam server yang aman. Data tidak akan diakses, kecuali jika pengguna dalam risiko tertular Covid-19 dan perlu segera dihubungi oleh petugas kesehatan.<br><br>
		Aplikasi <strong>PeduliLindungi</strong> telah ditetapkan dalam Keputusan Menteri Kominfo No. 171 tahun 2020 sebagai dasar penyelenggaraan tracing, tracking dan fencing melalui infrastruktur, sistem dan aplikasi telekomunikasi untuk mendukung program pengendalian pandemi COVID-19. Keputusan Menteri tersebut bersifat khusus untuk memberikan jaminan perlindungan data pribadi yang sesuai dengan perundang-undangan.</p> 
	</div>
	<div class="container ps-5" id="5">
	<h2 class="mt-5" >5. Akses dan Perizinan Pengguna pada perangkat</h2> 
	<p class=" mt-5 text-secondary">Untuk perangkat Android dan iOS, aplikasi akan membutuhkan permission/ izin akses untuk:</p> 
	<ul class=" ps-5 text-secondary"> <li><p><strong>Akses lokasi pengguna</strong> </p> 
		<ul class=" ps-5 text-secondary"> <li>Pengguna dapat melihat permission yang digunakan oleh <strong>PeduliLindungi</strong> dan menon-aktifkan nya kapanpun melalui menu Setting. </li> <li>Untuk dapat melihat aktivitas dan memberikan informasi terkait paparan COVID-19 di sekitar. <strong>PeduliLindungi</strong> hanya menggunakan akses lokasi Anda saat aplikasi dibuka atau dijalankan untuk memberikan informasi mengenai Statistik kasus Covid-19, penggunaan fitur Scan QR Code dan Pelayanan Kesehatan</li> </ul> </li> <li><p><strong>Akses foto, galeri, dan files</strong><br>Pemberian izin akses foto, media, dan files diperlukan untuk mengakses foto dan files yang ada di dalam penyimpanan ponsel pengguna. Hal ini bertujuan agar:</p> 
		<ol class=" ps-5 text-secondary"> <li>Pengguna bisa memilih foto profil yang diinginkan di fitur Ubah Profil melalui penyimpanan ponsel.</li> <li>Pengguna dapat mengakses file sertifikat vaksin yang sudah diunduh (berbentuk file foto) melalui aplikasi galeri.</li> </ol> <p>Bagaimana izin akses ini digunakan?</p> 
		<ol class=" ps-5 text-secondary"> <li>Jika pengguna memilih untuk memperbarui foto profil di menu Ubah Profil melalui galeri, <strong>PeduliLindungi</strong> akan menampilkan foto yang ada pada penyimpanan perangkat untuk dipilih oleh pengguna.</li> <li>Ketika pengguna telah selesai melakukan pengunduhan atas sertifikat vaksin yang dipilih, <strong>PeduliLindungi</strong> akan melakukan “mediascan” terhadap file sertifikat vaksin tersebut, agar dapat diakses/dibaca melalui aplikasi galeri.</li> </ol> </li> <li><p><strong>Akses Kamera</strong><br>Pemberian akses pada kamera yang ada di dalam penyimpanan ponsel pengguna. Hal ini bertujuan agar:</p> 
			<ol class=" ps-5 text-secondary"> <li>Pengguna dapat mengambil gambar untuk memilih foto profil secara langsung tanpa perlu meninggalkan aplikasi.</li> <li>Pengguna dapat mengambil gambar dari dalam galeri perangkat.</li> <li><strong>PeduliLindungi</strong> dapat membaca QR Code melalui kamera yang ada pada ponsel saat pengguna menggunakan fitur scan QR untuk melakukan check in dan check out di merchant yang sudah terafiliasi dengan <strong>PeduliLindungi</strong>.</li> </ol> <p>Bagaimana izin akses ini digunakan?</p> <ol> <li>Jika pengguna memilih foto profil dari kamera, <strong>PeduliLindungi</strong> akan membuka kamera untuk mengambil gambar yang diinginkan oleh user melalui kamera perangkat. Setelah foto berhasil diambil, foto tersebut akan disimpan terlebih dahulu ke dalam penyimpanan perangkat, baru digunakan di dalam aplikasi.</li> <li>Jika pengguna masuk ke menu scan QR, <strong>PeduliLindungi</strong> akan membaca QR Code melalui kamera yang ada pada perangkat, setelah QR Code terbaca, <strong>PeduliLindungi</strong> akan menutup kamera dan menuju ke halaman selanjutnya.</li> </ol> </li> </ul> 
	</div>
	<div class="container ps-5" id="6">
	<h2 class="mt-5" >6. Ketentuan Membagi dan Mentransfer Data</h2> 
	<p class=" mt-5 text-secondary">Data Pribadi Anda tidak akan dibagikan oleh <strong>PeduliLindungi</strong> kepada perusahaan atau entitas apapun kecuali Instansi Pemerintah yang ditunjuk oleh Pemerintah Republik Indonesia sebagai upaya pengendalian pandemi Covid-19.<br><br>
		<strong>PeduliLindungi</strong> akan mengikuti aturan sesuai dengan Peraturan Menteri Kominfo mengenai Perlindungan Data. Kami menjunjung tinggi kerahasiaan data pribadi pengguna untuk menciptkan iklim privasi yang sehat. Mekanisme dan cara-cara perolehan data hingga penggunaannya mengikuti aturan ketat dari Peraturan Menteri Komunikasi dan Informatika.</p> 
		<h5 class="text-secondary"><b>Jika Anda melakukan Scan QR Code (Check-In &amp; Check-Out)</b></h5> 
		<p class="text-secondary">Saat Anda menggunakan akun <strong>PeduliLindungi</strong> untuk Check-In maupun Check-out, <strong>PeduliLindungi</strong> akan menampilkan data status vaksinasi Anda, kondisi kesehatan Anda saat terinfeksi Covid-19 dan riwayat kontak atau infeksi covid-19. Terdapat 5 warna sebagai identifikasi status keamanan berpergian pengguna:</p> 
		<ul class=" ps-5 text-secondary"> <li><strong>Hijau</strong>: Ketika pengguna sudah melakukan vaksinasi sebanyak 2 kali dan tidak sedang terinfeksi Covid-19.</li> <li><strong>Kuning</strong>: Ketika pengguna sudah melakukan vaksinasi sebanyak 1 kali dan tidak sedang terinfeksi Covid-19.</li> <li><strong>Merah</strong>: Ketika data vaksinasi pengguna tidak dapat ditemukan dan tidak sedang terinfeksi Covid-19.</li> <li><strong>Hitam</strong>: Ketika data vaksinasi pengguna tidak dapat ditemukan dan sedang terinfeksi Covid-19 atau kontak dengan kasus Covid selama kurang dari 14 hari.</li> </ul> 
		<p class="text-secondary">Identifikasi status keamanan bepergian ke fasilitas publik berguna untuk menjaga lokasi agar tetap aman bagi pengunjung lain. Petugas lokasi akan memeriksa status warna untuk meminimalisir dan mengatur jumlah pengunjung lokasi.</p> 
		<div class="ps-5 alert alert-warning text-secondary text-center" role="alert"> <p>Status warna juga dapat ditemukan ketika pengguna melakukan pemeriksaan status pada website atau aplikasi <strong>PeduliLindungi</strong>.</p> </div> 
	</div>
	<div class="container ps-5" id="7">
	<h2 class="mt-5" >7. Jika Anda terdiagnosa Positif COVID-19</h2> 
	<p class=" mt-5 text-secondary"><strong>PeduliLindungi</strong> akan meminta persetujan Anda untuk mengakses data hasil Contact Tracing dalam waktu 14 hari terakhir yang tersimpan di server <strong>PeduliLindungi</strong>. Data pengguna <strong>PeduliLindungi</strong> lain yang melakukan kontak dengan Anda dalam waktu 14 hari terakhir akan digunakan sebagai sumber data awal bagi pemerintah Indonesia untuk melakukan tracing. <strong>PeduliLindungi</strong> juga akan menampilkan kondisi Anda saat terinfeksi Covid-19 dan riwayat kontak atau infeksi covid-19.</p> 
	</div>
	<div class="container ps-5" id="8">
	<h2 class="mt-5" >8. Jika Anda “contact” dengan pengguna yang Positif COVID-19</h2> 
	<p class=" mt-5 text-secondary">Anda akan mendapatkan notifikasi bahwa Anda telah melakukan kontak dengan pengguna lain yang terdiagnosa Positif COVID-19 dalam rentang waktu 14 hari terakhir. Anda akan diminta untuk menerapkan protokol kesehatan sesuai dengan peraturan pemerintah setempat. <strong>PeduliLindungi</strong> juga akan menampilkan kondisi Anda saat terinfeksi Covid-19 dan riwayat kontak atau infeksi covid-19.</p> 
	</div>
	<div class="container ps-5" id="9">
	<h2 class="mt-5" >9. Pengendalian dan Persetujuan Perekaman Data</h2> 
	<p class="mt-5 text-secondary">Aplikasi tidak dapat mengambil dan membagikan data tanpa mendapatkan persetujuan Anda melalui pesan yang ditampilkan ke user secara eksplisit dalam aplikasi <strong>PeduliLindungi</strong>.<br><br>
		<strong>Izin yang diminta hanyalah izin akses data yang dibutuhkan untuk kepentingan contact tracing, melakukan karantina dan penyampain informasi data statistik</strong><br><br>
		Anda dapat meminta untuk mencabut persetujuan perekaman data dengan mengirimkan e-mail ke <a href="mailto:pedulilindungi@kominfo.go.id">pedulilindungi@kominfo.go.id</a>. <strong>PeduliLindungi</strong> akan menghentikan perekaman data dan menghapus data Anda dari server setelah email permintaan kami terima.</p> 
	</div>
	<div class="container ps-5" id="10">
	<h2 class="mt-5" >10. Penghapusan Data Setelah Pandemi Berakhir</h2> 
	<p class="mt-5 text-secondary">Berdasarkan keputusan pemerintah, <strong>PeduliLindungi</strong> akan menghapus seluruh data pengguna setelah pandemi COVID-19 dinyatakan berakhir oleh Pemerintah RI. Dalam hal <strong>PeduliLindungi</strong> ingin terus dimanfaatkan oleh pemerintah atau pihak lain untuk keperluan lainnya, maka Anda akan mendapatkan notifikasi persetujuan. Selain itu:</p> 
	<ul class=" ps-5 text-secondary"> <li>Data lokasi yang tersimpan di penyimpanan lokal ponsel Anda akan dihapus secara berkala setelah data dikirim ke server setiap hari.</li> <li>Jika pengguna menghapus aplikasi, data akan ikut terhapus.</li> <li>Anda dapat meminta penghapusan data di server melalui email ke <a href="mailto:pedulilindungi@kominfo.go.id">pedulilindungi@kominfo.go.id</a>.</li> </ul> 
	</div>
	<div class="container ps-5" id="11">
	<h2 class="mt-5" >11. Tautan ke Aplikasi atau Website Lain</h2> 
	<p class="mt-5 text-secondary"><strong>PeduliLindungi</strong> memuat beberapa tautan ke aplikasi atau website milik pihak ketiga, yang mungkin akan mengambil dan mengolah data Anda. <strong>PeduliLindungi</strong> tidak memiliki akses terhadap data atau informasi yang anda berikan kepada aplikasi atau website tersebut.</p> 
	</div>
	<div class="container ps-5" id="12">
	<h2 class="mt-5" >12. Persetujuan</h2> 
	<p class=" mt-5 text-secondary">Sebagaimana dinyatakan di atas, dengan mendaftarkan untuk atau menggunakan layanan di aplikasi maupun website, atau dengan mengklik tombol "Registrasi" atau setara ketika Anda membuat akun baru pada <strong>PeduliLindungi</strong>, Anda:</p> 
	<ol class=" ps-5 text-secondary"> <li>Menyetujui <strong>PeduliLindungi</strong> dan/atau perusahaan kerjasama Pemerintah Republik Indonesia mengumpulkan, menggunakan, membagikan dan/atau mengolah data pribadi yang disebutkan di atas untuk tujuan seperti yang dijelaskan di atas</li> <li>Menyetujui untuk menerima informasi terkait kebutuhan pengguna dari <strong>PeduliLindungi</strong></li> </ol> 
	<p class="text-secondary">Data-data tersebut akan disimpan sementara di penyimpanan lokal ponsel Anda secara terenkripsi dan akan dikirim ke server secara berkala. Setelah data dikirim ke server, data yang tersimpan di penyimpanan lokal ponsel Anda akan dihapus saat itu juga. Data-data tersebut disimpan secara terenkripsi di server <strong>PeduliLindungi</strong> yang aman dan tidak dibagikan ke publik. Data Anda hanya akan diakses bila Anda dalam risiko tertular COVID-19 dan perlu segera dihubungi oleh petugas kesehatan.<br><br>
		<strong>Data Anda tidak akan diserahkan atau disebarluaskan kepada pihak lain kecuali kepada instansi pemerintah yang saat ini ditunjuk dalam menangani pandemi COVID-19, atau karena ketentuan hukum.</strong></p> 
	</div>
	<div class="container ps-5" id="13">
	<h2 class="mt-5" >13. Informasi Tambahan</h2> 
	<p class=" mt-5 text-secondary">Selain informasi yang sudah dijelaskan di atas, <strong>PeduliLindungi</strong>:</p> 
	<ul class=" ps-5 text-secondary"> <li><strong>PeduliLindungi</strong> adalah aplikasi resmi pemerintah Indonesia untuk menangani pandemi COVID-19 di Indonesia</li> <li><strong>PeduliLindungi</strong> adalah aplikasi yang tidak hanya melakukan contact tracing namun ada beberapa fitur yang mendukung aktivitas di dalam Pandemi COVID-19 ini seperti karantina pengguna, data statistik, fitur Scan QR Code dan Daftar Pelayanan Kesehatan</li> <li>Tim yang bekerja untuk aplikasi <strong>PeduliLindungi</strong> menjamin kerahasiaan data pengguna</li> <li>Sumber informasi dan imbauan yang terdapat di aplikasi Peduli Lindungi berasal dari Kementerian Kesehatan, Kementerian Kominfo, Situs Resmi COVID-19 Indonesia dan Organisasi Kesehatan Dunia (WHO). Untuk mengakses sumber informasi dan imbauan, Pengguna bisa mengklik referensi yang terdapat di bagian paling bawah dari setiap artikel</li> </ul>
	</div>
    </div>
	<div class="container" id="unduh">
  <div class="row mb-3 p-5">
    <div class="col-md-8 themed-grid-col"><h3 class="container mt-5 blue-main">Mari berpartisipasi melindungi sesama.
Unduh PeduliLindungi sekarang!</h3><br></div>
      <div class="col-md-4 themed-grid-col mt-5"><div>
        <a href="http://bit.ly/Android-PL"><img alt="Download Di Play Store" class="w-25" src="assets/img/play-store.svg"></a>
        <a href="https://apple.co/2K7TNj1"><img alt="Download Di App Store" class="w-25" src="assets/img/app-store.svg"></a>
        <a href="https://appgallery.huawei.com/#/app/C102542717"><img class="w-25" alt="Download Di HUAWEI AppGallery" src="assets/img/app-gallery-1.png"></a></div></div>
     </div>
   </div>
	<?php
	include 'footer.php';
	?>
</body>
</html>