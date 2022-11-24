-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20221120.420485a41b
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2022 at 04:18 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `otomatisasi_skm`
--

-- --------------------------------------------------------

--
-- Table structure for table `kbaak`
--

CREATE TABLE `kbaak` (
  `nip` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `ttd` varchar(100) NOT NULL,
  `cap` varchar(100) NOT NULL,
  `tahun` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` int(9) NOT NULL,
  `tempattanggallahir` varchar(100) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kelas` varchar(3) NOT NULL,
  `prodi` varchar(20) NOT NULL,
  `diploma` varchar(3) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `tahunakademik` int(20) NOT NULL,
  `status` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `tempattanggallahir`, `nama`, `kelas`, `prodi`, `diploma`, `semester`, `tahunakademik`, `status`, `email`, `password`) VALUES
(12345, 'Tokyo, 12 Maret 1996', 'Doraemon', '3SD', 'Komputasi', 'IV', '5', 2020, 'Ikatan Dinas', 'doraemon@gmail.com', 'doremon');

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan`
--

CREATE TABLE `pengajuan` (
  `idpengajuan` int(20) NOT NULL,
  `tanggalpengajuan` datetime NOT NULL,
  `tanggalperbaikan` datetime DEFAULT NULL,
  `tanggalcekoperator` date DEFAULT NULL,
  `tanggalacckbaak` date DEFAULT NULL,
  `nipoperator` int(20) DEFAULT NULL,
  `namaoperator` varchar(100) DEFAULT NULL,
  `nipkbaak` varchar(20) DEFAULT NULL,
  `namakbaak` varchar(100) DEFAULT NULL,
  `nim` int(10) NOT NULL,
  `tempattanggallahir` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `diploma` varchar(10) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `tahunakademik` varchar(10) NOT NULL,
  `status` varchar(50) NOT NULL,
  `namafile` varchar(100) DEFAULT NULL,
  `fileupload` varchar(100) DEFAULT NULL,
  `statusskm` varchar(100) NOT NULL DEFAULT 'Diajukan',
  `kategori` varchar(100) NOT NULL,
  `tujuan` text DEFAULT NULL,
  `alasan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengajuan`
--

INSERT INTO `pengajuan` (`idpengajuan`, `tanggalpengajuan`, `tanggalperbaikan`, `tanggalcekoperator`, `tanggalacckbaak`, `nipoperator`, `namaoperator`, `nipkbaak`, `namakbaak`, `nim`, `tempattanggallahir`, `nama`, `kelas`, `prodi`, `diploma`, `semester`, `tahunakademik`, `status`, `namafile`, `fileupload`, `statusskm`, `kategori`, `tujuan`, `alasan`) VALUES
(1, '2022-11-24 10:48:13', '2022-11-24 10:48:13', NULL, NULL, NULL, NULL, NULL, NULL, 12345, '', 'Doraemon', '3SD', 'Komputasi', 'IV', '5', '', 'Ikatan Dinas', NULL, NULL, 'Disetujui', 'Administrasi Orang tua', 'sdsdsdsdsddcddsc', NULL),
(2, '2022-11-24 10:48:29', '2022-11-24 10:48:29', NULL, NULL, NULL, NULL, NULL, NULL, 12345, '', 'Doraemon', '3SD', 'Komputasi', 'IV', '5', '', 'Ikatan Dinas', NULL, NULL, 'Ditolak', 'Administrasi Orang tua', 'sddfvfvrfd', NULL),
(3, '2022-11-24 10:48:38', '2022-11-25 04:00:24', NULL, NULL, NULL, NULL, NULL, NULL, 12345, '', 'Doraemon', '3SD', 'Komputasi', 'IV', '5', '', 'Ikatan Dinas', NULL, NULL, 'Diajukan Kembali', 'Administrasi Orang tua', 'update', NULL),
(4, '2022-11-24 10:48:46', '2022-11-24 10:48:46', NULL, NULL, NULL, NULL, NULL, NULL, 12345, '', 'Doraemon', '3SD', 'Komputasi', 'IV', '5', '', 'Ikatan Dinas', NULL, NULL, 'Diajukan', 'Administrasi Orang tua', 'cdcsdvfvsdxasx', NULL),
(5, '2022-11-24 11:04:09', '2022-11-24 11:04:09', NULL, NULL, NULL, NULL, NULL, NULL, 12345, '', 'Doraemon', '3SD', 'Komputasi', 'IV', '5', '', 'Ikatan Dinas', NULL, NULL, 'Diajukan', 'Administrasi Orang tua', 'dwdwdd', NULL),
(6, '2022-11-24 11:17:12', '2022-11-25 03:57:14', NULL, NULL, NULL, NULL, NULL, NULL, 12345, '', 'Doraemon', '3SD', 'Komputasi', 'IV', '5', '', 'Ikatan Dinas', NULL, NULL, 'Ditangguhkan', 'Administrasi Orang tua', 'update lagi', NULL),
(7, '2022-11-25 00:24:05', '2022-11-25 00:24:05', NULL, NULL, NULL, NULL, NULL, NULL, 12345, '', 'Doraemon', '3SD', 'Komputasi', 'IV', '5', '', 'Ikatan Dinas', NULL, NULL, 'Diajukan', 'Administrasi Orang tua', 'sdsdsds', NULL),
(8, '2022-11-25 00:40:24', '2022-11-25 00:40:24', NULL, NULL, NULL, NULL, NULL, NULL, 12345, '', 'Doraemon', '3SD', 'Komputasi', 'IV', '5', '', 'Ikatan Dinas', NULL, NULL, 'Diajukan', 'Administrasi Orang tua', '', NULL),
(9, '2022-11-25 01:21:19', '2022-11-25 01:21:19', NULL, NULL, NULL, NULL, NULL, NULL, 12345, '', 'Doraemon', '3SD', 'Komputasi', 'IV', '5', '', 'Ikatan Dinas', NULL, NULL, 'Ditangguhkan', 'Administrasi Orang tua', 'sddsdsds', NULL),
(10, '2022-11-25 03:16:06', '2022-11-25 03:16:06', NULL, NULL, NULL, NULL, NULL, NULL, 12345, '', 'Doraemon', '3SD', 'Komputasi', 'IV', '5', '', 'Ikatan Dinas', NULL, NULL, 'Diajukan', 'Administrasi Orang tua', 'ffvfdvsf', NULL),
(11, '2022-11-25 03:40:47', '2022-11-25 03:40:47', NULL, NULL, NULL, NULL, NULL, NULL, 12345, '', 'Doraemon', '3SD', 'Komputasi', 'IV', '5', '', 'Ikatan Dinas', NULL, NULL, 'Diajukan', 'Administrasi Orang tua', 'ccccccccccccccccccccc', NULL),
(12, '2022-11-25 04:00:48', '2022-11-25 04:00:48', NULL, NULL, NULL, NULL, NULL, NULL, 12345, '', 'Doraemon', '3SD', 'Komputasi', 'IV', '5', '', 'Ikatan Dinas', NULL, NULL, 'Diajukan', 'Administrasi Orang tua', 'aaaaaaaaaaaaaaa', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `staffbaak`
--

CREATE TABLE `staffbaak` (
  `nip` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `surat`
--

CREATE TABLE `surat` (
  `idsurat` int(50) NOT NULL,
  `idpengajuan` int(20) NOT NULL,
  `noSurat` varchar(50) NOT NULL,
  `tanggal buat` date NOT NULL,
  `nim` int(9) NOT NULL,
  `nama surat` varchar(100) NOT NULL,
  `fileSurat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kbaak`
--
ALTER TABLE `kbaak`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD PRIMARY KEY (`idpengajuan`);

--
-- Indexes for table `staffbaak`
--
ALTER TABLE `staffbaak`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`idsurat`),
  ADD KEY `idpengajuan` (`idpengajuan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pengajuan`
--
ALTER TABLE `pengajuan`
  MODIFY `idpengajuan` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `surat`
--
ALTER TABLE `surat`
  ADD CONSTRAINT `surat_ibfk_1` FOREIGN KEY (`idpengajuan`) REFERENCES `pengajuan` (`idpengajuan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
