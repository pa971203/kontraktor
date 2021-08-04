-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2021 at 11:39 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adb_skripsi_proyek`
--

-- --------------------------------------------------------

--
-- Table structure for table `kontraktor`
--

CREATE TABLE `kontraktor` (
  `id_kontraktor` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `pemilik` varchar(100) NOT NULL,
  `no_hp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kontraktor`
--

INSERT INTO `kontraktor` (`id_kontraktor`, `id_user`, `nama`, `pemilik`, `no_hp`) VALUES
(15, 8, 'buyuang', 'sukri', '12121');

-- --------------------------------------------------------

--
-- Table structure for table `pengerjaan`
--

CREATE TABLE `pengerjaan` (
  `id_pengerjaan` int(11) NOT NULL,
  `id_proyek` int(11) NOT NULL,
  `nama_proyek` varchar(100) NOT NULL,
  `id_kontraktor` varchar(100) NOT NULL,
  `nama_komtraktor` varchar(100) NOT NULL,
  `progres_pengerjaan` varchar(100) NOT NULL,
  `bukti_pengerjaan` varchar(100) NOT NULL,
  `keterengan` text NOT NULL,
  `tgl_laporan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengerjaan`
--

INSERT INTO `pengerjaan` (`id_pengerjaan`, `id_proyek`, `nama_proyek`, `id_kontraktor`, `nama_komtraktor`, `progres_pengerjaan`, `bukti_pengerjaan`, `keterengan`, `tgl_laporan`) VALUES
(10, 8, 'bendungan', '12', 'ego', 's', '50167387a538c3ec50b1bd45f1e22fb2.jpg', '--', '2021-07-18'),
(11, 9, 'bendungan air pulau godang', '12', 'ego', 'sdf', '941773185320001cefd8efe1b83d318e.jpg', 're', '2021-07-12'),
(12, 10, 'bendungan air pulau godang', '15', 'buyuang', 'separo sudah', 'ef728515bd279771c4f1d21cbfe7f7c1.jpg', 'mantapp', '2021-07-14'),
(13, 10, 'bendungan air pulau godang', '15', 'buyuang', 'mantap bonae', 'de9f1765dfd9c011d82b09beedb9429f.jpg', 'yoyoyo', '2021-07-31');

-- --------------------------------------------------------

--
-- Table structure for table `proyek`
--

CREATE TABLE `proyek` (
  `id_proyek` int(11) NOT NULL,
  `id_kontraktor` int(11) NOT NULL,
  `nama_proyek` varchar(100) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `target` varchar(100) NOT NULL,
  `pagu` varchar(100) NOT NULL,
  `nilai_proyek` varchar(100) NOT NULL,
  `uang_muka` varchar(100) NOT NULL,
  `no_kontrak` varchar(100) NOT NULL,
  `waktu_pelaksanaan` varchar(100) NOT NULL,
  `tgl_kontrak` date NOT NULL,
  `tgl_berakhir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `proyek`
--

INSERT INTO `proyek` (`id_proyek`, `id_kontraktor`, `nama_proyek`, `lokasi`, `target`, `pagu`, `nilai_proyek`, `uang_muka`, `no_kontrak`, `waktu_pelaksanaan`, `tgl_kontrak`, `tgl_berakhir`) VALUES
(8, 12, 'bendungan', 'benai', '4 hari', 'Rp. 100000', 'Rp. 100000', '1 jt', '2323', '4 bln', '2021-07-18', '2021-11-18'),
(9, 12, 'bendungan air pulau godang', 'kari', '4 hari', 'Rp. 100000', '3 jt', '1 jt', '3232', '4 bln', '2021-07-18', '2021-11-18'),
(10, 15, 'bendungan air pulau godang', 'pulau godang', '4 hari', 'Rp. 100000', 'Rp. 100000', '1 jt', '3434', '5 bulan', '2021-07-21', '2021-11-21');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `role`) VALUES
(6, 'panji', 'panji', '5f4dcc3b5aa765d61d8327deb882cf99', 'admin'),
(7, 'sese', 'sese', '5f4dcc3b5aa765d61d8327deb882cf99', 'pimpinan'),
(8, 'buyuang', 'buyuang', '202cb962ac59075b964b07152d234b70', 'kontraktor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kontraktor`
--
ALTER TABLE `kontraktor`
  ADD PRIMARY KEY (`id_kontraktor`);

--
-- Indexes for table `pengerjaan`
--
ALTER TABLE `pengerjaan`
  ADD PRIMARY KEY (`id_pengerjaan`);

--
-- Indexes for table `proyek`
--
ALTER TABLE `proyek`
  ADD PRIMARY KEY (`id_proyek`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kontraktor`
--
ALTER TABLE `kontraktor`
  MODIFY `id_kontraktor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `pengerjaan`
--
ALTER TABLE `pengerjaan`
  MODIFY `id_pengerjaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `proyek`
--
ALTER TABLE `proyek`
  MODIFY `id_proyek` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
