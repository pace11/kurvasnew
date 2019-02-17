-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2019 at 11:07 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `monitoring`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_input2`
--

CREATE TABLE `tbl_input2` (
  `id_pekerjaan` int(10) NOT NULL,
  `nomer_pjn_spj` varchar(40) NOT NULL,
  `value_pekerjaan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_input2`
--

INSERT INTO `tbl_input2` (`id_pekerjaan`, `nomer_pjn_spj`, `value_pekerjaan`) VALUES
(1, '0013/DAN 02.03/A.BLG/2019', '[{\"harga\":\"1\",\"bobot\":\"\",\"harikerja\":\"1\"},{\"harga\":\"1\",\"bobot\":\"\",\"harikerja\":\"1\"},{\"harga\":\"11\",\"bobot\":\"\",\"harikerja\":\"1\"},{\"harga\":\"1\",\"bobot\":\"\",\"harikerja\":\"1\"},{\"harga\":\"1\",\"bobot\":\"\",\"harikerja\":\"1\"},{\"harga\":\"1\",\"bobot\":\"\",\"harikerja\":\"1\"},{\"harga\":\"1\",\"bobot\":\"\",\"harikerja\":\"1\"},{\"harga\":\"1\",\"bobot\":\"\",\"harikerja\":\"1\"},{\"harga\":\"2\",\"bobot\":\"\",\"harikerja\":\"2\"},{\"harga\":\"2\",\"bobot\":\"\",\"harikerja\":\"2\"},{\"harga\":\"2\",\"bobot\":\"\",\"harikerja\":\"2\"},{\"harga\":\"2\",\"bobot\":\"\",\"harikerja\":\"2\"},{\"harga\":\"2\",\"bobot\":\"\",\"harikerja\":\"1\"},{\"harga\":\"1\",\"bobot\":\"\",\"harikerja\":\"1\"},{\"harga\":\"1\",\"bobot\":\"\",\"harikerja\":\"1\"},{\"harga\":\"1\",\"bobot\":\"\",\"harikerja\":\"11\"},{\"harga\":\"11\",\"bobot\":\"\",\"harikerja\":\"1\"},{\"harga\":\"1\",\"bobot\":\"\",\"harikerja\":\"1\"},{\"harga\":\"1\",\"bobot\":\"\",\"harikerja\":\"1\"},{\"harga\":\"1\",\"bobot\":\"\",\"harikerja\":\"1\"},{\"harga\":\"1\",\"bobot\":\"\",\"harikerja\":\"1\"},{\"harga\":\"1\",\"bobot\":\"\",\"harikerja\":\"1\"},{\"harga\":\"11\",\"bobot\":\"\",\"harikerja\":\"1\"}]'),
(3, '0015/DAN 02.03/A.BLG/2018', '[{\"harga\":\"1\",\"bobot\":\"\",\"harikerja\":\"2\"},{\"harga\":\"2\",\"bobot\":\"\",\"harikerja\":\"23\"},{\"harga\":\"1\",\"bobot\":\"\",\"harikerja\":\"1\"},{\"harga\":\"2\",\"bobot\":\"\",\"harikerja\":\"1\"},{\"harga\":\"1\",\"bobot\":\"\",\"harikerja\":\"2\"},{\"harga\":\"1\",\"bobot\":\"\",\"harikerja\":\"1\"},{\"harga\":\"1\",\"bobot\":\"\",\"harikerja\":\"2\"},{\"harga\":\"1\",\"bobot\":\"\",\"harikerja\":\"1\"},{\"harga\":null,\"bobot\":null,\"harikerja\":null},{\"harga\":null,\"bobot\":null,\"harikerja\":null},{\"harga\":null,\"bobot\":null,\"harikerja\":null},{\"harga\":null,\"bobot\":null,\"harikerja\":null},{\"harga\":null,\"bobot\":null,\"harikerja\":null},{\"harga\":null,\"bobot\":null,\"harikerja\":null},{\"harga\":null,\"bobot\":null,\"harikerja\":null},{\"harga\":null,\"bobot\":null,\"harikerja\":null},{\"harga\":null,\"bobot\":null,\"harikerja\":null},{\"harga\":null,\"bobot\":null,\"harikerja\":null},{\"harga\":null,\"bobot\":null,\"harikerja\":null},{\"harga\":null,\"bobot\":null,\"harikerja\":null},{\"harga\":null,\"bobot\":null,\"harikerja\":null},{\"harga\":null,\"bobot\":null,\"harikerja\":null},{\"harga\":null,\"bobot\":null,\"harikerja\":null}]');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_input4`
--

CREATE TABLE `tbl_input4` (
  `nomer_pjn_spj` varchar(40) NOT NULL,
  `tanggal_awal` date NOT NULL,
  `tanggal_akhir` date NOT NULL,
  `pengawas` text NOT NULL,
  `jenis_pekerjaan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_input4`
--

INSERT INTO `tbl_input4` (`nomer_pjn_spj`, `tanggal_awal`, `tanggal_akhir`, `pengawas`, `jenis_pekerjaan`) VALUES
('0012/DAN 02.03/A.BLG/2018', '2019-01-31', '2019-02-06', 'Afif Kuswanto', 'SKTM'),
('0013/DAN 02.03/A.BLG/2019', '2019-02-13', '2019-02-26', 'Ody M Haidi', 'SIPIL'),
('0014/DAN 02.03/A.BLG/2018', '2019-01-30', '2019-01-31', 'Panji Areta', 'SIPIL'),
('0015/DAN 02.03/A.BLG/2018', '2019-01-31', '2019-02-01', 'Ilham Alfuti', 'SKTM');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_input5`
--

CREATE TABLE `tbl_input5` (
  `nodin_ren` int(10) NOT NULL,
  `uraian` text NOT NULL,
  `harga` int(10) NOT NULL,
  `bobot` int(10) NOT NULL,
  `hari_kerja_week` int(10) NOT NULL,
  `masa_spj` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_input5`
--

INSERT INTO `tbl_input5` (`nodin_ren`, `uraian`, `harga`, `bobot`, `hari_kerja_week`, `masa_spj`) VALUES
(1, 'dsdgh', 547, 46, 2, 56);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengawas`
--

CREATE TABLE `tbl_pengawas` (
  `id` int(11) NOT NULL,
  `pengawas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengawas`
--

INSERT INTO `tbl_pengawas` (`id`, `pengawas`) VALUES
(1, 'Afif Kuswanto'),
(2, 'Estyas Pratomo'),
(3, 'Ilham Alfuti'),
(4, 'Ody M Haidi'),
(5, 'Panji Areta');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sipil`
--

CREATE TABLE `tbl_sipil` (
  `id` int(11) NOT NULL,
  `id_sipil` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sipil`
--

INSERT INTO `tbl_sipil` (`id`, `id_sipil`) VALUES
(1, 'Pengurusan Izin'),
(2, 'Pekerjaan Persiapan'),
(3, 'Pekerjaan Galian dan Urugan'),
(4, 'Pekerjaan Pembongkaran'),
(5, 'Pekerjaan Pasangan'),
(6, 'Pekerjaan Plesteran'),
(7, 'Pekerjaan Beton dan Pondasi'),
(8, 'Pekerjaan Besi dan Pemasangan'),
(9, 'Pekerjaan Pemipaan'),
(10, 'Pekerjaan Pengecatan'),
(11, 'Pekerjaan Tanaman dan Jalan'),
(12, 'Pekerjaan Pagar dan Perlengkapannya'),
(13, 'Instalasi Listrik dan Lain-Lain'),
(14, 'Pekerjaan Pemasangan Instalasi Gardu'),
(15, 'Pekerjaan Pembongkaran Instalasi Gardu'),
(16, 'Pekerjaan Pemeliharaan Instalasi Gardu'),
(17, 'Pekerjaan Lain-Lain'),
(18, 'Pekerjaan Persiapan 2'),
(19, 'Pekerjaan Beton dan Pondasi 2'),
(20, 'Pekerjaan Pasangan dan Plesteran'),
(21, 'Pekerjaan Besi dan Pipa'),
(22, 'Jasa Angkutan Material'),
(23, 'Pekerjaan Bongkar (Tambahan)');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sktm`
--

CREATE TABLE `tbl_sktm` (
  `id` int(11) NOT NULL,
  `id_sktm` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sktm`
--

INSERT INTO `tbl_sktm` (`id`, `id_sktm`) VALUES
(1, 'Pengurusan Izin'),
(2, 'Pekerjaan Galian'),
(3, 'Pekerjaan Boring'),
(4, 'Penarikan dan Penyambungan'),
(5, 'Perbaiakan Bekas Galian'),
(6, 'Material Pelengkap'),
(7, 'Pekerjaan Lain-Lain'),
(8, 'Angkutan Kabel');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `username` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL,
  `role` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`username`, `password`, `role`) VALUES
('ADMIN', 'admin12345', 0),
('MANAGER', 'manager10', 1),
('SEKRETARIS', '12345', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_input2`
--
ALTER TABLE `tbl_input2`
  ADD PRIMARY KEY (`id_pekerjaan`),
  ADD KEY `nomer_pjn_spj` (`nomer_pjn_spj`);

--
-- Indexes for table `tbl_input4`
--
ALTER TABLE `tbl_input4`
  ADD PRIMARY KEY (`nomer_pjn_spj`);

--
-- Indexes for table `tbl_input5`
--
ALTER TABLE `tbl_input5`
  ADD PRIMARY KEY (`nodin_ren`);

--
-- Indexes for table `tbl_pengawas`
--
ALTER TABLE `tbl_pengawas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_sipil`
--
ALTER TABLE `tbl_sipil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_sktm`
--
ALTER TABLE `tbl_sktm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_input2`
--
ALTER TABLE `tbl_input2`
  MODIFY `id_pekerjaan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_pengawas`
--
ALTER TABLE `tbl_pengawas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_input2`
--
ALTER TABLE `tbl_input2`
  ADD CONSTRAINT `tbl_input2_ibfk_1` FOREIGN KEY (`nomer_pjn_spj`) REFERENCES `tbl_input4` (`nomer_pjn_spj`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
