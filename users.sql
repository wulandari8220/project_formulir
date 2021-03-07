-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2021 at 08:36 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `formulir_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `User_name` varchar(50) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Tempat_lahir` varchar(30) NOT NULL,
  `Tanggal_lahir` date NOT NULL,
  `Jenis_kelamin` varchar(20) NOT NULL,
  `Agama` varchar(25) NOT NULL,
  `Alamat` varchar(150) NOT NULL,
  `Provinsi` varchar(50) NOT NULL,
  `No_hp` varchar(20) DEFAULT NULL,
  `Nama_orangtua` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Nama`, `User_name`, `Password`, `Tempat_lahir`, `Tanggal_lahir`, `Jenis_kelamin`, `Agama`, `Alamat`, `Provinsi`, `No_hp`, `Nama_orangtua`) VALUES
(1, 'Rani Sahara', 'rani12', '12345', 'Medan', '1996-09-09', 'Perempuan', 'Islam', 'Jl.Senang', 'Bengkulu', '081211111111', 'Budi Hartono'),
(10, 'Karina Sahara', 'karina25', '123456', 'Bandung', '1997-09-06', 'Perempuan', 'Katolik', 'Jl. Pattimura No.89', 'Jawa Tengah', '081354867594', 'Sahara'),
(11, 'William Nuger', 'william21', '12345', 'Pontianak', '1996-07-04', 'Laki-Laki', 'Katolik', 'Jl. Merdeka No.13', 'Jawa Barat', '081255555555', 'Zellin Nuger'),
(12, 'Surya Ginting', 'surya09', '12345', 'Siantar', '1993-12-04', 'Laki-Laki', 'Protestan', 'Jl. B. Katamso, No.12', 'Sumatera Utara', '081288888888', 'Rega Ginting'),
(13, 'Firdaus Salim', 'firda43', '12345', 'Palembang', '1991-10-15', 'Laki-Laki', 'Islam', 'Jl. Sari Mutia No. 18', 'Sumatera Selatan', '081298989898', 'Daus Salim'),
(14, 'Sari Susanti', 'sari85', '12345', 'Balik Papan', '1995-11-08', 'Perempuan', 'Islam', 'Jl. gatot subroto', 'Kalimantan Selatan', '08134544343', 'Susanti'),
(15, 'Rega Sianturi', 'rega98', '12345', 'Medan', '1992-08-13', 'Laki-Laki', 'Katolik', 'Jl. Jamin Ginting gang Sederhana No.12', 'Sumatera Utara', '081289898989', 'Sianturi'),
(26, 'Putri Nasution', 'putri98', '12345', 'Binjai', '1960-04-12', 'Perempuan', 'Islam', 'Binjai', 'Sumatera Utara', '081287876323', 'Nasution'),
(27, 'Aren Saza', 'aren79', '12345', 'Marelan', '1993-10-07', 'Laki-Laki', 'Katolik', 'Marelan', 'Sumatera Utara', '081287467876', 'Saza');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
