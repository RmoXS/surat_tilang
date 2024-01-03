-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 03, 2024 at 04:32 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laporan_tilang2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `nama` varchar(255) NOT NULL,
  `pswd` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `pswd`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `data_pelanggar`
--

CREATE TABLE `data_pelanggar` (
  `id_pelanggar` int NOT NULL,
  `nama_pl` varchar(255) NOT NULL,
  `alamat_pl` varchar(255) NOT NULL,
  `nmr_sim` int NOT NULL,
  `nmr_plat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `data_pelanggar`
--

INSERT INTO `data_pelanggar` (`id_pelanggar`, `nama_pl`, `alamat_pl`, `nmr_sim`, `nmr_plat`) VALUES
(2, 'Subagyo', 'Seyegan Sleman', 123345, 'AB 3456 XY'),
(3, 'andika ', 'minggir sleman', 121121, 'AB 2345 Aih'),
(4, 'Alah hihi', 'Seyegan Sleman', 123123, 'AB 0000 AB');

-- --------------------------------------------------------

--
-- Table structure for table `data_petugas`
--

CREATE TABLE `data_petugas` (
  `id_petugas` int NOT NULL,
  `nama_ptgs` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `jabatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `data_petugas`
--

INSERT INTO `data_petugas` (`id_petugas`, `nama_ptgs`, `jabatan`) VALUES
(2, 'ANDI', 'POLANTAS'),
(3, 'dadiih', 'polantas'),
(4, 'Polisi', 'Polantas');

-- --------------------------------------------------------

--
-- Table structure for table `deskripsi_pelanggaran`
--

CREATE TABLE `deskripsi_pelanggaran` (
  `id_kejadian` int NOT NULL,
  `jenis_pelanggaran` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `tindakan` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `denda` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `deskripsi_pelanggaran`
--

INSERT INTO `deskripsi_pelanggaran` (`id_kejadian`, `jenis_pelanggaran`, `lokasi`, `tindakan`, `tanggal`, `denda`) VALUES
(2, 'Melanggar lampu merah ', 'Jalan SOLO', 'Tilang dan denda', '2024-01-04', '300000'),
(3, 'tanpa kenalpot ', 'jalan palagan ', 'tilang dan denda', '2024-01-02', '100000'),
(4, 'Menerobos Lampu Merah', 'Jalan Solo', 'denda dan tilang', '2024-01-03', '100000');

-- --------------------------------------------------------

--
-- Table structure for table `surat_tilang`
--

CREATE TABLE `surat_tilang` (
  `id_surat` int NOT NULL,
  `nama_ptgs` varchar(255) NOT NULL,
  `nmr_plat` varchar(20) NOT NULL,
  `nmr_sim` int NOT NULL,
  `nama_pl` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `alamat_pl` varchar(255) NOT NULL,
  `jenis_pelanggaran` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `tindakan` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `denda` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `surat_tilang`
--

INSERT INTO `surat_tilang` (`id_surat`, `nama_ptgs`, `nmr_plat`, `nmr_sim`, `nama_pl`, `alamat_pl`, `jenis_pelanggaran`, `lokasi`, `tindakan`, `tanggal`, `denda`) VALUES
(7, 'Polisi', 'AB 0000 AB', 123123, 'Alah hihi', 'Seyegan Sleman', 'Menerobos Lampu Merah', 'Jalan Solo', 'denda dan tilang', '2024-01-03', '100000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_pelanggar`
--
ALTER TABLE `data_pelanggar`
  ADD PRIMARY KEY (`id_pelanggar`),
  ADD KEY `nama_pl` (`nama_pl`),
  ADD KEY `alamat_pl` (`alamat_pl`),
  ADD KEY `nmr_sim` (`nmr_sim`),
  ADD KEY `nmr_plat` (`nmr_plat`);

--
-- Indexes for table `data_petugas`
--
ALTER TABLE `data_petugas`
  ADD PRIMARY KEY (`id_petugas`),
  ADD KEY `nama_ptgs` (`nama_ptgs`);

--
-- Indexes for table `deskripsi_pelanggaran`
--
ALTER TABLE `deskripsi_pelanggaran`
  ADD PRIMARY KEY (`id_kejadian`),
  ADD KEY `jenis_pelanggaran` (`jenis_pelanggaran`),
  ADD KEY `lokasi` (`lokasi`),
  ADD KEY `tindakan` (`tindakan`),
  ADD KEY `tanggal` (`tanggal`),
  ADD KEY `denda` (`denda`);

--
-- Indexes for table `surat_tilang`
--
ALTER TABLE `surat_tilang`
  ADD PRIMARY KEY (`id_surat`),
  ADD KEY `nmr_plat` (`nmr_plat`),
  ADD KEY `nmr_sim` (`nmr_sim`),
  ADD KEY `nama_pl` (`nama_pl`),
  ADD KEY `jenis_pelanggaran` (`jenis_pelanggaran`),
  ADD KEY `lokasi` (`lokasi`),
  ADD KEY `tindakan` (`tindakan`),
  ADD KEY `tanggal` (`tanggal`),
  ADD KEY `nama_ptgs` (`nama_ptgs`),
  ADD KEY `denda` (`denda`),
  ADD KEY `alamat_pl` (`alamat_pl`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data_pelanggar`
--
ALTER TABLE `data_pelanggar`
  MODIFY `id_pelanggar` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `data_petugas`
--
ALTER TABLE `data_petugas`
  MODIFY `id_petugas` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `deskripsi_pelanggaran`
--
ALTER TABLE `deskripsi_pelanggaran`
  MODIFY `id_kejadian` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `surat_tilang`
--
ALTER TABLE `surat_tilang`
  MODIFY `id_surat` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `surat_tilang`
--
ALTER TABLE `surat_tilang`
  ADD CONSTRAINT `surat_tilang_ibfk_1` FOREIGN KEY (`nama_ptgs`) REFERENCES `data_petugas` (`nama_ptgs`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `surat_tilang_ibfk_10` FOREIGN KEY (`denda`) REFERENCES `deskripsi_pelanggaran` (`denda`),
  ADD CONSTRAINT `surat_tilang_ibfk_2` FOREIGN KEY (`nama_pl`) REFERENCES `data_pelanggar` (`nama_pl`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `surat_tilang_ibfk_3` FOREIGN KEY (`alamat_pl`) REFERENCES `data_pelanggar` (`alamat_pl`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `surat_tilang_ibfk_4` FOREIGN KEY (`nmr_sim`) REFERENCES `data_pelanggar` (`nmr_sim`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `surat_tilang_ibfk_5` FOREIGN KEY (`nmr_plat`) REFERENCES `data_pelanggar` (`nmr_plat`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `surat_tilang_ibfk_6` FOREIGN KEY (`jenis_pelanggaran`) REFERENCES `deskripsi_pelanggaran` (`jenis_pelanggaran`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `surat_tilang_ibfk_7` FOREIGN KEY (`lokasi`) REFERENCES `deskripsi_pelanggaran` (`lokasi`),
  ADD CONSTRAINT `surat_tilang_ibfk_8` FOREIGN KEY (`tindakan`) REFERENCES `deskripsi_pelanggaran` (`tindakan`),
  ADD CONSTRAINT `surat_tilang_ibfk_9` FOREIGN KEY (`tanggal`) REFERENCES `deskripsi_pelanggaran` (`tanggal`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
