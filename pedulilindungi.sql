-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2021 at 10:16 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pedulilindungi`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_akun`
--

CREATE TABLE `data_akun` (
  `id_data` int(12) NOT NULL,
  `no_pengenal` varchar(20) NOT NULL,
  `nama_lengkap` varchar(200) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `status_kewarganegaran` varchar(30) NOT NULL DEFAULT 'Warga Negara Indonesia',
  `email` varchar(250) NOT NULL,
  `level` int(2) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_akun`
--

INSERT INTO `data_akun` (`id_data`, `no_pengenal`, `nama_lengkap`, `no_hp`, `tanggal_lahir`, `status_kewarganegaran`, `email`, `level`, `password`) VALUES
(1, '', 'Katherin Anna', '', '2001-12-13', 'Warga Negara Indonesia', 'adminanna@gmail.com', 1, 'adminanna13'),
(2, '', 'Sri Wahyuni', '', '2001-05-25', 'Warga Negara Indonesia', 'adminyuni@gmail.com', 1, 'adminyuni25'),
(3, '1914020482603002', 'Tritia Mutiara', '081918171615', '2001-08-12', 'Warga Negara Indonesia', 'tritia@gmail.com', 2, 'tritiamutiara12082001'),
(4, '1914020151709003', 'Nanda Amelia', '082324252627', '2001-04-15', 'Warga Negara Indonesia', 'amelia15@gmail.com', 2, 'nanda123amelia'),
(5, '1914020422512009', 'Putri Laura Laterisia BR. L. Tobing', '085352515405', '2001-12-25', 'Warga Negara Indonesia', 'pulau25@gmail.com', 2, 'laura25tobing'),
(6, '', 'Stevi Stince', '089795554433', '1997-03-18', 'Warga Negara Indonesia', 'stevi@gmail.com', 2, 'stevi124'),
(7, '', 'Yousita Abigail Sembiring', '082211887766', '1999-09-03', 'Warga Negara Indonesia', 'sayayousi@gamil.com', 2, 'sayayousi123');

-- --------------------------------------------------------

--
-- Table structure for table `data_pendaftar`
--

CREATE TABLE `data_pendaftar` (
  `id_pendaftar` int(11) NOT NULL,
  `nama_pendaftar` varchar(250) NOT NULL,
  `no_pengenal` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `provinsi_kota` varchar(100) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `status_vaksinasi` varchar(30) NOT NULL DEFAULT 'Belum Vaksin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_pendaftar`
--

INSERT INTO `data_pendaftar` (`id_pendaftar`, `nama_pendaftar`, `no_pengenal`, `tanggal_lahir`, `jenis_kelamin`, `no_hp`, `provinsi_kota`, `alamat`, `status_vaksinasi`) VALUES
(2, 'Elmina Tio Dora', '1111122222333334', '2001-04-02', 'Perempuan', '085773873813', 'Sumatera Utara, Medan', 'Jalan Simalungun No 1', 'Belum Vaksin'),
(3, 'Ristan', '0908070605040302', '2001-12-15', 'Laki-Laki', '085352515405', 'Sumatera Utara, Medan', 'Jalan Simpang Kantor', 'Vaksin Dosis Kedua'),
(4, 'Yousita Abigail Lesnussa', '1999030969650004', '1999-09-03', 'Perempuan', '082211887766', 'Sumatera Utara, Medan', 'Jalan Surabaya', 'Vaksin Dosis Pertama');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_vaksinasi`
--

CREATE TABLE `jadwal_vaksinasi` (
  `id_jadwal` int(12) NOT NULL,
  `tanggal` date NOT NULL,
  `id_vaksin` int(12) NOT NULL,
  `dosis_vaksin` varchar(30) NOT NULL,
  `lokasi` varchar(250) NOT NULL,
  `provinsi_kota` varchar(100) NOT NULL,
  `program` varchar(100) NOT NULL DEFAULT 'Vaksin Program Pemerintah',
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal_vaksinasi`
--

INSERT INTO `jadwal_vaksinasi` (`id_jadwal`, `tanggal`, `id_vaksin`, `dosis_vaksin`, `lokasi`, `provinsi_kota`, `program`, `alamat`) VALUES
(1, '2021-03-13', 1, 'Vaksin Pertama', 'Simpang Canang', 'Sumatera Utara, Medan', 'Vaksin Program Pemerintah', 'Jalan Sumatera, Pelabuhan Belawan.'),
(2, '2021-02-02', 1, 'Vaksin Kedua', 'Simpang Kantor', 'Sumatera Utara, Medan', 'Vaksin Program Pemerintah', 'Jalan Yosudarso. SMP Wahidin Sudirohusodo'),
(3, '2021-07-12', 3, 'Vaksin Pertama', 'KLINIK POLRES PEMATANG SIANTAR', 'Sumatera Utara, Pematang Siantar', 'Vaksin Program Pemerintah', 'Jalan Sudirman No.14, Proklamasi, Kec. Siantar Bar.'),
(4, '2021-04-13', 1, 'Vaksin Pertama', 'PINTU ANGIN', 'Sumatera Utara, Sibolga', 'Vaksin Program Pemerintah', 'Jalan Oswald Siahaan No. 33 Sibolga Ilir');

-- --------------------------------------------------------

--
-- Table structure for table `kewarganegaaan`
--

CREATE TABLE `kewarganegaaan` (
  `id` int(10) NOT NULL,
  `no_pengenal` varchar(20) NOT NULL,
  `nama_lengkap` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kewarganegaaan`
--

INSERT INTO `kewarganegaaan` (`id`, `no_pengenal`, `nama_lengkap`) VALUES
(1, '1914020781312001', 'Katherin Anna Patherisia Lesnussa'),
(2, '1914020452505009', 'Sri Wahyuni'),
(3, '1914020482603002', 'Tritia Mutiara'),
(4, '1914020151709003', 'Nanda Amelia'),
(5, '1914020422512009', 'Putri Laura Laterisia BR. L. Tobing'),
(6, '1913011301512001', 'Violet'),
(7, '1907080401306001', 'Gabriela Talitha Sukoanto'),
(8, '1913010851306001', 'Theresia Launy Putri Sianipar'),
(9, '1234567891011123', 'Agnes Monica'),
(10, '1111122222333334', 'Elmina Tio Dora'),
(11, '1011121314151617', 'Kartika'),
(12, '1122334455667788', 'Andreas Aldo'),
(13, '0908070605040302', 'Ristan'),
(14, '0102030405060708', 'Louis Sirait'),
(15, '2122232425262728', 'Juan Sinaga'),
(16, '3132333435363738', 'David Leonardo'),
(17, '5152535657585950', 'Kenny Young'),
(18, '9998979695949392', 'Azril Maulana Akbar'),
(19, '1999030969650004', 'Yousita Abigail Lesnussa'),
(20, '1997180369650003', 'Stevi Stince Lesnussa');

-- --------------------------------------------------------

--
-- Table structure for table `tes_covid`
--

CREATE TABLE `tes_covid` (
  `id_test` int(10) NOT NULL,
  `no_pengenal` varchar(20) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `status_pcr` varchar(50) NOT NULL DEFAULT 'Tidak Ada',
  `tanggal_pcr` date NOT NULL,
  `status_antigen` varchar(20) NOT NULL DEFAULT 'Tidak Ada',
  `tanggal_antigen` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tes_covid`
--

INSERT INTO `tes_covid` (`id_test`, `no_pengenal`, `nama`, `status_pcr`, `tanggal_pcr`, `status_antigen`, `tanggal_antigen`) VALUES
(1, '1914020452505009', 'Sri Wahyuni', 'Negatif', '2021-10-22', 'Negatif', '2021-01-21'),
(2, '0908070605040302', 'Ristan', 'Negatif', '2021-10-13', 'Tidak Ada', '0000-00-00'),
(3, '9998979695949392', 'Azril Maulana Akbar', 'Positif', '2021-08-10', 'Negatif', '2021-01-21'),
(4, '1011121314151617', 'Kartika', 'Positif', '2020-12-01', 'Negatif', '2021-02-03'),
(5, '2122232425262728', 'Juan Sinaga', 'Tidak Ada', '0000-00-00', 'Negatif', '2020-12-12');

-- --------------------------------------------------------

--
-- Table structure for table `vaksin`
--

CREATE TABLE `vaksin` (
  `id_vaksin` int(12) NOT NULL,
  `nama_vaksin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vaksin`
--

INSERT INTO `vaksin` (`id_vaksin`, `nama_vaksin`) VALUES
(1, 'Sinovac'),
(2, 'AstraZeneca'),
(3, 'Sinopharm'),
(4, 'Moderna'),
(5, 'Pfizer'),
(6, 'Vaksin Luar Negeri');

-- --------------------------------------------------------

--
-- Table structure for table `vaksinasi`
--

CREATE TABLE `vaksinasi` (
  `id_vaksinasi` int(11) NOT NULL,
  `id_pendaftar` int(11) NOT NULL,
  `id_jadwal` int(10) NOT NULL,
  `id_vaksin` int(11) NOT NULL,
  `status_vaksin` varchar(50) NOT NULL,
  `sertifikat` varchar(200) NOT NULL DEFAULT 'belum-tersedia.png',
  `tanggal_vaksinasi` date NOT NULL,
  `lokasi_vaksinasi` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vaksinasi`
--

INSERT INTO `vaksinasi` (`id_vaksinasi`, `id_pendaftar`, `id_jadwal`, `id_vaksin`, `status_vaksin`, `sertifikat`, `tanggal_vaksinasi`, `lokasi_vaksinasi`) VALUES
(1, 3, 1, 1, 'Vaksin Pertama', 'vaksinasi-1.jpg', '2021-03-13', 'Simpang Canang'),
(2, 3, 2, 1, 'Vaksin Kedua', 'vaksin-2.jpg', '2021-04-02', 'Simpang Kantor'),
(3, 4, 1, 1, 'Vaksin Pertama', 'belum-tersedia.png', '2021-03-13', 'Simpang Canang');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_akun`
--
ALTER TABLE `data_akun`
  ADD PRIMARY KEY (`id_data`);

--
-- Indexes for table `data_pendaftar`
--
ALTER TABLE `data_pendaftar`
  ADD PRIMARY KEY (`id_pendaftar`);

--
-- Indexes for table `jadwal_vaksinasi`
--
ALTER TABLE `jadwal_vaksinasi`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `id_vaksin` (`id_vaksin`);

--
-- Indexes for table `kewarganegaaan`
--
ALTER TABLE `kewarganegaaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tes_covid`
--
ALTER TABLE `tes_covid`
  ADD PRIMARY KEY (`id_test`);

--
-- Indexes for table `vaksin`
--
ALTER TABLE `vaksin`
  ADD PRIMARY KEY (`id_vaksin`);

--
-- Indexes for table `vaksinasi`
--
ALTER TABLE `vaksinasi`
  ADD PRIMARY KEY (`id_vaksinasi`),
  ADD KEY `id_pendaftar` (`id_pendaftar`),
  ADD KEY `id_vaksin` (`id_vaksin`),
  ADD KEY `vaksinasi_ibfk_2` (`id_jadwal`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_akun`
--
ALTER TABLE `data_akun`
  MODIFY `id_data` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `data_pendaftar`
--
ALTER TABLE `data_pendaftar`
  MODIFY `id_pendaftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jadwal_vaksinasi`
--
ALTER TABLE `jadwal_vaksinasi`
  MODIFY `id_jadwal` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kewarganegaaan`
--
ALTER TABLE `kewarganegaaan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tes_covid`
--
ALTER TABLE `tes_covid`
  MODIFY `id_test` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `vaksinasi`
--
ALTER TABLE `vaksinasi`
  MODIFY `id_vaksinasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jadwal_vaksinasi`
--
ALTER TABLE `jadwal_vaksinasi`
  ADD CONSTRAINT `jadwal_vaksinasi_ibfk_1` FOREIGN KEY (`id_vaksin`) REFERENCES `vaksin` (`id_vaksin`);

--
-- Constraints for table `vaksinasi`
--
ALTER TABLE `vaksinasi`
  ADD CONSTRAINT `vaksinasi_ibfk_1` FOREIGN KEY (`id_pendaftar`) REFERENCES `data_pendaftar` (`id_pendaftar`),
  ADD CONSTRAINT `vaksinasi_ibfk_2` FOREIGN KEY (`id_jadwal`) REFERENCES `jadwal_vaksinasi` (`id_jadwal`),
  ADD CONSTRAINT `vaksinasi_ibfk_3` FOREIGN KEY (`id_vaksin`) REFERENCES `vaksin` (`id_vaksin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
