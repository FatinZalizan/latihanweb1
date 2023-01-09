-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2022 at 05:27 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `latihanweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `pelajar`
--

CREATE TABLE `pelajar` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `emel` varchar(255) NOT NULL,
  `notel` varchar(255) NOT NULL,
  `sesi` varchar(150) NOT NULL,
  `program` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelajar`
--

INSERT INTO `pelajar` (`id`, `nama`, `emel`, `notel`, `sesi`, `program`) VALUES
(2, 'Ezzah Afiqah Binti Amir', 'ezzahafiqah@gmail.com', '011-3456789', '2/2022', 'A12 - TEKNOLOGI REKABENTUK PRODUK INDUSTRI'),
(3, 'Noor Syazana Binti Sa\'ad', 'syazana@gmail.com', '011-4567892', '', 'Kelab Mangsa Kesian & Cerita Gerbang'),
(4, 'Nur Fatin Binti Mohd Zalizan', 'fatin@gmail.com', '011-20807126', '', 'Kelab Pencinta Kerjaya'),
(5, 'Fatin Shahira Muhammad', 'shyra@gmail.com', '011-1234567', '', 'Kelab Mangsa Kesian'),
(6, 'Nik Nurin Solehah', 'nurin@gmail.com', '011-123954', '', 'Kelab Mulut Murai'),
(7, 'Nor Sa\'adah Binti Abdul Rahim', 'sa\'adah@gmail.com', '011-1278543', '', 'Kelab Pencinta Kerjaya'),
(8, 'NurAin Syazwani Binti Zamzury', 'wani@gmail.com', '011-5632414', '', 'Kelab Mangsa Kesian'),
(9, 'Muhammad Fahmi', 'fahmi@gmail.com', '0119876243', '', 'Kelab Mulut Murai'),
(10, 'Nurin Aiman ', 'aiman@gmail.com', '0134528132', '', 'Kelab Mulut Murai'),
(12, 'Nur Auni Binti Mohd Zalizan', 'auni@gmail.com', '011-56821440', '', 'Kelab Mangsa Banjir'),
(18, 'sri sarvin', 'sarvin@gmail.com', '011-56821440', '2/2022', 'Kelab Mangsa Banjir'),
(21, 'NUR FATIN BINTI MOHD ZALIZAN', 'masya@gmail.com', '011-20807126', '', 'FO4 - SIJIL TEKNOLOGI PERISIAN (PEMBANGUNAN APLIKASI WEB)'),
(22, 'NURIN', 'sarvin@gmail.com', '011-56821440', '', 'A17 - SIJIL TEKNOLOGI MINYAK DAN GAS (LUKISAN PERPAIPAN)'),
(23, 'sarvin', 'sarvin@gmail.com', '011-20807126', '2/2022', 'A12 - TEKNOLOGI REKABENTUK PRODUK INDUSTRI'),
(24, 'Nor Zuhaina', 'juai@gmail.com', '011-56821440', '2/2023', 'A17 - SIJIL TEKNOLOGI MINYAK DAN GAS (LUKISAN PERPAIPAN)'),
(25, 'FAT', 'sarvin@gmail.com', '011-20807126', '2/2022', 'A12 - TEKNOLOGI REKABENTUK PRODUK INDUSTRI');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pelajar`
--
ALTER TABLE `pelajar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pelajar`
--
ALTER TABLE `pelajar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
