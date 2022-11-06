-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2022 at 01:39 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `plpsmekten`
--

-- --------------------------------------------------------

--
-- Table structure for table `plp`
--

CREATE TABLE `plp` (
  `id_mapel` int(5) NOT NULL,
  `mapel` varchar(100) NOT NULL,
  `materi` varchar(100) NOT NULL,
  `file_materi` varchar(100) NOT NULL,
  `tanggal_simpan` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plp`
--

INSERT INTO `plp` (`id_mapel`, `mapel`, `materi`, `file_materi`, `tanggal_simpan`) VALUES
(256, 'whenny', '2D Objek', 'Beasiswa _ BeSMART Siswa.pdf', '2022-10-17 03:40:49'),
(260, 'zada', 'Animasi', 'KK_GHOFAFA NURFASABIL.pdf', '2022-10-17 03:50:59'),
(262, 'wahyu nurhariadi', '3D Objek', 'KK_GHOFAFA NURFASABIL.pdf', '2022-10-17 04:01:56'),
(266, 'mirjuw', 'Stop Motion', 'KK_GHOFAFA NURFASABIL.pdf', '2022-10-17 04:02:48'),
(268, 'lip', '3D Objek', 'RAPORT TERAKHIR_GHOFAFA NURFASABIL-3-4.pdf', '2022-10-17 04:04:32'),
(270, 'ZADA CEINDEA VICA SOEDJONO', 'Animasi', 'PENILAIAN TUGAS DAN UTS 12 MM 1.xlsx', '2022-10-17 04:07:51'),
(273, 'varian ariesta soedjono', '3D Objek', 'IDUL FITRI 3.pptx', '2022-10-17 04:35:54'),
(275, 'farah akmalia rose', '3D Objek', 'Surabaya.docx', '2022-10-19 03:09:37'),
(276, 'mirjuw', '3D Objek', '1 SYAWAL 1441 H_MINAL AIDZIN WAL FAIDZIN.psd', '2022-10-19 03:22:18'),
(278, 'teknik animasi', 'Teknik Animasi', 'KK_GHOFAFA NURFASABIL.pdf', '2022-10-19 03:26:46'),
(279, 'mirjuw', '2D Objek', 'Beasiswa _ BeSMART Siswa.pdf', '2022-10-19 03:55:49'),
(280, 'whenny depuh', '2D Objek', '', '2022-10-19 03:59:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `plp`
--
ALTER TABLE `plp`
  ADD PRIMARY KEY (`id_mapel`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `plp`
--
ALTER TABLE `plp`
  MODIFY `id_mapel` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=281;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
