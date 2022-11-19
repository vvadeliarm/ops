-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Nov 2022 pada 06.07
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.28

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
-- Struktur dari tabel `kbaak`
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
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` int(9) NOT NULL,
  `tempat tanggal lahir` varchar(100) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kelas` varchar(3) NOT NULL,
  `diploma` varchar(3) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `tahun akademik` int(20) NOT NULL,
  `status` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajuan`
--

CREATE TABLE `pengajuan` (
  `idpengajuan` int(20) NOT NULL,
  `tanggal pengajuan` date NOT NULL,
  `tanggal cek operator` date DEFAULT NULL,
  `tanggal acc kbaak` date DEFAULT NULL,
  `nip operator` int(20) DEFAULT NULL,
  `nama operator` varchar(100) DEFAULT NULL,
  `nip kbaak` varchar(20) DEFAULT NULL,
  `nama kbaak` varchar(100) DEFAULT NULL,
  `nim` int(10) NOT NULL,
  `tempat tanggal lahir` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `diploma` varchar(10) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `tahun akademik` varchar(10) NOT NULL,
  `status` varchar(50) NOT NULL,
  `nama file` varchar(100) DEFAULT NULL,
  `fileupload` varchar(100) DEFAULT NULL,
  `statusskm` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `tujuan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `staffbaak`
--

CREATE TABLE `staffbaak` (
  `nip` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat`
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
-- Indeks untuk tabel `kbaak`
--
ALTER TABLE `kbaak`
  ADD PRIMARY KEY (`nip`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indeks untuk tabel `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD PRIMARY KEY (`idpengajuan`);

--
-- Indeks untuk tabel `staffbaak`
--
ALTER TABLE `staffbaak`
  ADD PRIMARY KEY (`nip`);

--
-- Indeks untuk tabel `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`idsurat`),
  ADD KEY `idpengajuan` (`idpengajuan`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `surat`
--
ALTER TABLE `surat`
  ADD CONSTRAINT `surat_ibfk_1` FOREIGN KEY (`idpengajuan`) REFERENCES `pengajuan` (`idpengajuan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
