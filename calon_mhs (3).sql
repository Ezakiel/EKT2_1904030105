-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2022 at 03:48 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wpsmt5`
--

-- --------------------------------------------------------

--
-- Table structure for table `calon_mhs`
--

CREATE TABLE `calon_mhs` (
  `No` int(10) NOT NULL,
  `id` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `sekolah_asal` varchar(30) NOT NULL,
  `foto maba` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `calon_mhs`
--

INSERT INTO `calon_mhs` (`No`, `id`, `nama`, `alamat`, `jenis_kelamin`, `agama`, `sekolah_asal`, `foto maba`) VALUES
(2, 1904030102, 'Amir Arif', 'Pasar Kemis', 'Laki-laki', 'Islam', 'SMK', 'profile1.png'),
(3, 1904030103, 'Amim Faisal', 'Cikupa', 'Laki-laki', 'Islam', 'SMK', 'profile1.png'),
(4, 1904030104, 'Arista Edgar', 'Cikupa', 'Perempuan', 'Islam', 'SMA', 'profile.png'),
(5, 1904030105, 'Muhamad Fahrurrozi', 'Jatake', 'Laki-laki', 'Islam', 'SMA', 'profile1.png'),
(1, 1904030101, 'Syauqi Kevin', 'perum 2', 'Laki-laki', 'Laki-laki', 'SMA', 'profile1.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
