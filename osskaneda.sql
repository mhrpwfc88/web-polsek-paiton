-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 19 Mar 2021 pada 14.10
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `osskaneda`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbagenda`
--

CREATE TABLE `tbagenda` (
  `id_agenda` tinyint(1) NOT NULL,
  `judul_agenda` text NOT NULL,
  `content_agenda` text NOT NULL,
  `tanggal` date NOT NULL,
  `id_user` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbagenda`
--

INSERT INTO `tbagenda` (`id_agenda`, `judul_agenda`, `content_agenda`, `tanggal`, `id_user`) VALUES
(3, 'Hari ini', 'tesss percobaan saja hari ini', '2021-01-14', 1),
(4, 'Rapat Upacara Hari Guru dan Pahlawan', 'rapat hari ini', '2021-01-02', 1),
(6, 'Acara Pensi 2021', 'Pensi smk2', '2021-02-25', 1),
(8, 'makan makan', 'Di smk', '2021-01-19', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbberita`
--

CREATE TABLE `tbberita` (
  `id_berita` tinyint(1) NOT NULL,
  `judul_berita` text NOT NULL,
  `content_berita` text NOT NULL,
  `tanggal` date NOT NULL,
  `gambar` text NOT NULL,
  `id_user` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbberita`
--

INSERT INTO `tbberita` (`id_berita`, `judul_berita`, `content_berita`, `tanggal`, `gambar`, `id_user`) VALUES
(6, 'pembuatan SKCK', 'proses pembuatan skck di polsek paiton', '2021-01-21', 'skck.jpg', 1),
(7, 'kondisi polsek paiton', 'suatu kondisi polsek paiton ', '2021-01-21', 'pe.jpg', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbbiodata`
--

CREATE TABLE `tbbiodata` (
  `id_biodata` tinyint(1) NOT NULL,
  `nama_perusahaan` varchar(40) NOT NULL,
  `telepon` varchar(14) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `nama_pimpinan` varchar(25) NOT NULL,
  `logo_perusahaan` text NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbbiodata`
--

INSERT INTO `tbbiodata` (`id_biodata`, `nama_perusahaan`, `telepon`, `alamat`, `nama_pimpinan`, `logo_perusahaan`, `visi`, `misi`) VALUES
(2, '', '082316501267', '', 'Renita Salsabila Agustin', '', 'MIBER', 'ALHAMDULILLAH');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbgaleri`
--

CREATE TABLE `tbgaleri` (
  `id_galeri` tinyint(1) NOT NULL,
  `judul_galeri` text NOT NULL,
  `gambar` text NOT NULL,
  `tanggal` date NOT NULL,
  `id_user` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbgaleri`
--

INSERT INTO `tbgaleri` (`id_galeri`, `judul_galeri`, `gambar`, `tanggal`, `id_user`) VALUES
(2, 'Pantai Gelora', 'OT-0711.JPG', '2020-12-15', 1),
(3, 'Kuala Lumpur Malaysia', 'OT-0348.JPG', '2021-01-20', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbpesan`
--

CREATE TABLE `tbpesan` (
  `id_pesan` tinyint(1) NOT NULL,
  `email` text NOT NULL,
  `pesan` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbpesan`
--

INSERT INTO `tbpesan` (`id_pesan`, `email`, `pesan`, `tanggal`) VALUES
(4, 'uripzhedenk@gmail.com', 'mantaappp', '2021-01-18'),
(5, 'uripzhedenk@gmail.com', 'tess', '2021-01-18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbuser`
--

CREATE TABLE `tbuser` (
  `id_user` tinyint(1) NOT NULL,
  `nama_user` varchar(40) NOT NULL,
  `telepon` varchar(14) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbuser`
--

INSERT INTO `tbuser` (`id_user`, `nama_user`, `telepon`, `alamat`, `username`, `password`) VALUES
(7, 'muhammad urip', '085932490755', 'nogosaren', 'mhrp_20', '4b86521fb429633d44697456d41ac4e5'),
(10, 'Renita Salsabila Agustin', '082247410432', 'kedung rejoso', 'renitaslsbla_', '4b86521fb429633d44697456d41ac4e5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbagenda`
--
ALTER TABLE `tbagenda`
  ADD PRIMARY KEY (`id_agenda`);

--
-- Indexes for table `tbberita`
--
ALTER TABLE `tbberita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `tbbiodata`
--
ALTER TABLE `tbbiodata`
  ADD PRIMARY KEY (`id_biodata`);

--
-- Indexes for table `tbgaleri`
--
ALTER TABLE `tbgaleri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `tbpesan`
--
ALTER TABLE `tbpesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbagenda`
--
ALTER TABLE `tbagenda`
  MODIFY `id_agenda` tinyint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbberita`
--
ALTER TABLE `tbberita`
  MODIFY `id_berita` tinyint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbbiodata`
--
ALTER TABLE `tbbiodata`
  MODIFY `id_biodata` tinyint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbgaleri`
--
ALTER TABLE `tbgaleri`
  MODIFY `id_galeri` tinyint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbpesan`
--
ALTER TABLE `tbpesan`
  MODIFY `id_pesan` tinyint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbuser`
--
ALTER TABLE `tbuser`
  MODIFY `id_user` tinyint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
