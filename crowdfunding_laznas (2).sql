-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2019 at 11:16 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crowdfunding_laznas`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `id_bank` int(11) NOT NULL,
  `nama_bank` varchar(255) NOT NULL,
  `nama_rek` varchar(255) NOT NULL,
  `no_rek` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`id_bank`, `nama_bank`, `nama_rek`, `no_rek`) VALUES
(1, 'BRI', 'LAZNas Chevron Rumbai', '342342'),
(3, 'BRI Syariah', 'LAZNas Chevron Rumbai', '11114665'),
(4, 'Mandiri', 'LAZNas Chevron ', '1223445564');

-- --------------------------------------------------------

--
-- Table structure for table `donatur`
--

CREATE TABLE `donatur` (
  `id_donatur` int(11) NOT NULL,
  `id_kampanye` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `id_bank` int(11) NOT NULL,
  `tgl_donasi` date NOT NULL,
  `jam` time NOT NULL,
  `jum_transfer` bigint(20) NOT NULL,
  `bukti_transfer` text,
  `status_donasi` enum('Menunggu','Diterima','Ditolak') NOT NULL,
  `keterangan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donatur`
--

INSERT INTO `donatur` (`id_donatur`, `id_kampanye`, `id_pengguna`, `id_bank`, `tgl_donasi`, `jam`, `jum_transfer`, `bukti_transfer`, `status_donasi`, `keterangan`) VALUES
(5, 3, 3, 1, '2019-05-17', '01:00:00', 10000, 'assets/images/foto/IMG_20170608_02500114.jpg', 'Menunggu', '');

-- --------------------------------------------------------

--
-- Table structure for table `kampanye`
--

CREATE TABLE `kampanye` (
  `id_kampanye` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nama_kampanye` varchar(255) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `foto_kampanye` text,
  `lokasi` text NOT NULL,
  `dana_terkumpul` bigint(20) NOT NULL,
  `target_donasi` bigint(20) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kampanye`
--

INSERT INTO `kampanye` (`id_kampanye`, `id_kategori`, `nama_kampanye`, `tgl_mulai`, `tgl_selesai`, `foto_kampanye`, `lokasi`, `dana_terkumpul`, `target_donasi`, `deskripsi`) VALUES
(3, 3, 'Kumbang Tanduk itu mantap', '2019-03-31', '2019-04-10', 'assets/images/foto/IMG_20170608_0251404.jpg', 'Pekanbaru', 1500000, 4000000, 'kambing juga mantap ganeeeeeeeeeeeeekj'),
(4, 2, 'Bantu Pembangunan Masjid uin suska', '2019-03-31', '2019-04-10', 'assets/images/foto/IMG_20170608_0250015.jpg', '2', 1000000, 2000000, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
(5, 1, 'Bantu aku', '2019-03-31', '2019-04-10', 'ess', 'Pekanbaru', 1500000, 4000000, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
(6, 3, 'hahaha', '2019-03-31', '2019-04-10', 'esseee', 'Pekanbaru', 1500000, 4000000, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
(7, 3, 'kelasss', '2019-03-31', '2019-04-10', 'assets/images/foto/IMG_20170608_025140.jpg', 'Pekanbaru', 1500000, 9000000, 'kambing juga mantap ganeeeeeeeeeeeee'),
(10, 2, 'A', '2019-05-14', '2019-05-28', 'assets/images/foto/IMG_20170608_0250011.jpg', 'Jakarta', 50000, 5000000, 'kambing'),
(11, 4, 'Bantu  AYA', '2019-05-31', '2019-06-01', 'assets/images/foto/IMG_20170608_0251401.jpg', 'Medan', 1000000, 10000000, 'khkhhkhk'),
(14, 3, 'bb', '2019-05-29', '2019-05-31', 'assets/images/foto/IMG_20170608_0250019.jpg', 'Jakarta', 234444, 155566666, 'kambing');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(6, 'anre'),
(3, 'Kemanusiaan'),
(1, 'Kesehatan'),
(2, 'Pembangunan Umum'),
(4, 'Pendidikan');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(32) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `level` enum('Admin','Donatur') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama`, `email`, `pass`, `no_hp`, `level`) VALUES
(1, 'Zage', 'age@gmail.com', '202cb962ac59075b964b07152d234b70', '1', 'Admin'),
(2, 'Ghass', 'ghass@gmail.com', '202cb962ac59075b964b07152d234b70', '2', 'Donatur'),
(4, 'T', '', '123', '21', 'Donatur');

-- --------------------------------------------------------

--
-- Table structure for table `perkembangan`
--

CREATE TABLE `perkembangan` (
  `id_perkembangan` int(11) NOT NULL,
  `id_kampanye` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `foto_perk` text,
  `isi` text NOT NULL,
  `tgl_posting` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perkembangan`
--

INSERT INTO `perkembangan` (`id_perkembangan`, `id_kampanye`, `judul`, `foto_perk`, `isi`, `tgl_posting`) VALUES
(1, 5, 'Akhirnya Berhasil Dikumpulkan', 'assets/images/foto/IMG_20170608_02500113.jpg', '', '0000-00-00 00:00:00'),
(4, 3, 'asda', 'assets/images/foto/IMG_20170608_02500110.jpg', 'asda', '2019-05-03 00:00:00'),
(5, 4, 'Akhirnya', 'assets/images/foto/IMG_20170608_0251403.jpg', 'asda', '2019-05-30 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`id_bank`),
  ADD UNIQUE KEY `no_rek` (`no_rek`);

--
-- Indexes for table `donatur`
--
ALTER TABLE `donatur`
  ADD PRIMARY KEY (`id_donatur`),
  ADD KEY `id_bank` (`id_pengguna`),
  ADD KEY `id_bank_2` (`id_bank`),
  ADD KEY `id_kampanye` (`id_kampanye`);

--
-- Indexes for table `kampanye`
--
ALTER TABLE `kampanye`
  ADD PRIMARY KEY (`id_kampanye`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`),
  ADD UNIQUE KEY `nama_kategori` (`nama_kategori`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `no_hp` (`no_hp`);

--
-- Indexes for table `perkembangan`
--
ALTER TABLE `perkembangan`
  ADD PRIMARY KEY (`id_perkembangan`),
  ADD KEY `id_kampanye` (`id_kampanye`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `id_bank` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `donatur`
--
ALTER TABLE `donatur`
  MODIFY `id_donatur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kampanye`
--
ALTER TABLE `kampanye`
  MODIFY `id_kampanye` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `perkembangan`
--
ALTER TABLE `perkembangan`
  MODIFY `id_perkembangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
