-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2023 at 11:18 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rsq`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ipal`
--

CREATE TABLE `tbl_ipal` (
  `id_ipal` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `uv` varchar(128) NOT NULL,
  `water_meter` varchar(128) NOT NULL,
  `pompa_air` varchar(128) NOT NULL,
  `aerator` varchar(128) NOT NULL,
  `aerator_aquarium` varchar(128) NOT NULL,
  `ballast` varchar(128) NOT NULL,
  `pelampung` varchar(128) NOT NULL,
  `pipa` varchar(128) NOT NULL,
  `biobal` varchar(128) NOT NULL,
  `tandon_air` varchar(128) NOT NULL,
  `debit_air_m3` varchar(128) NOT NULL,
  `selisih_debit_m3` varchar(128) NOT NULL,
  `petugas_cek` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_ipal`
--

INSERT INTO `tbl_ipal` (`id_ipal`, `tanggal`, `uv`, `water_meter`, `pompa_air`, `aerator`, `aerator_aquarium`, `ballast`, `pelampung`, `pipa`, `biobal`, `tandon_air`, `debit_air_m3`, `selisih_debit_m3`, `petugas_cek`) VALUES
(2, '2023-03-03', 'baik', 'baik', 'baik', 'baik', 'baik', 'baik', 'baik', 'baik', 'baik', 'baik', 'tidak baik', 'tidak ', 'tidak baik'),
(4, '2023-04-13', 'tidak baik', 'tidak baik', 'tidak baik', 'tidak baik', 'tidak baik', 'tidak baik', 'tidak baik', 'tidak baik', 'tidak baik', 'tidak baik', 'tidak baik', 'tidak baik', 'tidak baik');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_look`
--

CREATE TABLE `tbl_look` (
  `id_look` int(11) NOT NULL,
  `tanggal_pengangkutan` date NOT NULL,
  `kuantitas` varchar(128) NOT NULL,
  `satuan` varchar(128) NOT NULL,
  `manifest` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_look`
--

INSERT INTO `tbl_look` (`id_look`, `tanggal_pengangkutan`, `kuantitas`, `satuan`, `manifest`) VALUES
(2, '2023-03-30', 'bagus', 'bagus', 'luar biasa'),
(3, '2023-03-02', 'kkg', 'gty', 'bagus'),
(4, '2023-03-08', 'khg', '1', 'bagus'),
(5, '2023-03-09', 'banyak', '4', 'segera'),
(6, '2023-03-13', 'banyak', '67', '877'),
(9, '2023-03-31', 'khg', '67', 'segera'),
(10, '2023-03-30', 'khg', 'gty', 'segera');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pajaran`
--

CREATE TABLE `tbl_pajaran` (
  `id_pajaran` int(11) NOT NULL,
  `tanggal_kejadian` date NOT NULL,
  `tanggal_terima` date NOT NULL,
  `kejadian` varchar(128) NOT NULL,
  `tindak` varchar(128) NOT NULL,
  `kondisi` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_pajaran`
--

INSERT INTO `tbl_pajaran` (`id_pajaran`, `tanggal_kejadian`, `tanggal_terima`, `kejadian`, `tindak`, `kondisi`) VALUES
(4, '2023-03-23', '2023-03-24', 'tidak baik', 'cukup baik', 'baik'),
(5, '2023-03-16', '2023-03-01', 'kurang baik', 'baik', 'sakit'),
(11, '2023-03-02', '2023-03-21', 'bagus', 'akan di lakukan', 'sudah membaik'),
(14, '2023-04-06', '2023-04-13', 'b', 'tidak bagus', 'demam'),
(15, '2023-04-01', '2023-04-14', 'bagus', 'akan di lakukan', 'sakit');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pencahayaan`
--

CREATE TABLE `tbl_pencahayaan` (
  `id_pencahayaan` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `lokasi` varchar(128) NOT NULL,
  `hasil` varchar(128) NOT NULL,
  `petugas` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_pencahayaan`
--

INSERT INTO `tbl_pencahayaan` (`id_pencahayaan`, `tanggal`, `lokasi`, `hasil`, `petugas`) VALUES
(3, '2023-03-03', 'R. RECOVARY', 'bagus', 'wira'),
(4, '2023-03-17', 'R. PRE OP', '89', 'irfan'),
(5, '2023-03-17', 'R. LORONG IGD', '78', 'lapet'),
(6, '2023-03-17', 'RADIOLOGI (SEMENTARA)', '89', 'om mamat'),
(7, '2023-03-09', 'GIZI', '80', 'pak de'),
(8, '2023-03-10', 'IGD', '78', 'irfan'),
(10, '2023-03-31', 'R. RECOVARY', '89', 'lapet'),
(11, '2023-04-20', 'rungan ', 'bagus', 'bagus');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` varchar(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(9, 'IAN ROERY', 'ianroeri@gmail.com', 'default.jpg', '$2y$10$gWwqMEcORXLGyrYlp9EViuelql7DgSOmwluF0FS8tcnLSM1xel8ze', 1, '1', 1681323847),
(10, 'iam', 'ani@gmail.com', 'default.jpg', '$2y$10$zXMUdL3OTT6qJ948eqiD/OUMo8oYu/B.YqMeQOMR6kJOuwdqFgDk.', 2, '1', 1681404856),
(11, 'edo', 'pace@gmail.com', 'default.jpg', '$2y$10$i2ULlfBkCwbX4HrmVrLQm.iUugp6B.LUc8AmKsz/t0uzxHjmwrw6i', 2, '1', 1681435350),
(12, 'iam', 'io@gmail.com', 'default.jpg', '$2y$10$J2ce99gI63T7t.lmWNLfNOQmb8.27j.K0IY2AP57GTU2OeSPuOI0S', 1, '1', 1681836009),
(13, 'edo', 'dani@gmail.com', 'default.jpg', '$2y$10$XOGjDCFaBQcwAJ1iQMJdeO13h9C7Flqkn3twrurW3iEaPKKVEUHxy', 2, '1', 1682733001);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_ipal`
--
ALTER TABLE `tbl_ipal`
  ADD PRIMARY KEY (`id_ipal`);

--
-- Indexes for table `tbl_look`
--
ALTER TABLE `tbl_look`
  ADD PRIMARY KEY (`id_look`);

--
-- Indexes for table `tbl_pajaran`
--
ALTER TABLE `tbl_pajaran`
  ADD PRIMARY KEY (`id_pajaran`);

--
-- Indexes for table `tbl_pencahayaan`
--
ALTER TABLE `tbl_pencahayaan`
  ADD PRIMARY KEY (`id_pencahayaan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_ipal`
--
ALTER TABLE `tbl_ipal`
  MODIFY `id_ipal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_look`
--
ALTER TABLE `tbl_look`
  MODIFY `id_look` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_pajaran`
--
ALTER TABLE `tbl_pajaran`
  MODIFY `id_pajaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_pencahayaan`
--
ALTER TABLE `tbl_pencahayaan`
  MODIFY `id_pencahayaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
