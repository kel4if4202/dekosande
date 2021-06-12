-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2021 at 03:58 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_dekosande`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `idBooking` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `tanggal` date NOT NULL,
  `biaya` int(8) NOT NULL,
  `NIK` varchar(16) NOT NULL,
  `idKos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`idBooking`, `status`, `tanggal`, `biaya`, `NIK`, `idKos`) VALUES
(20, 1, '2021-06-12', 9000000, '8250', 11);

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `idFasilitas` int(11) NOT NULL,
  `nama_fasilitas` varchar(50) NOT NULL,
  `idKos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `idImage` int(11) NOT NULL,
  `idKos` int(11) NOT NULL,
  `nama_file` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kos`
--

CREATE TABLE `kos` (
  `idKos` int(11) NOT NULL,
  `namaKos` varchar(30) NOT NULL,
  `jenisKos` tinyint(1) NOT NULL,
  `hargaKos` int(8) NOT NULL,
  `alamatKos` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `nama_file` varchar(50) NOT NULL,
  `NIK` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kos`
--

INSERT INTO `kos` (`idKos`, `namaKos`, `jenisKos`, `hargaKos`, `alamatKos`, `deskripsi`, `nama_file`, `NIK`) VALUES
(11, 'Kedasih', 1, 9000000, 'Sukabirus', 'Kos gandos', 'Logo_Telkom_University_potrait.png', '1'),
(12, 'Kost Tes', 1, 123132, 'Jakarta', 'kos bagus', '0.jpg', '8250'),
(14, 'WCW', 1, 9500000, 'samping IFI', 'nambah gope', 'kosan1.jpg', '8250'),
(15, 'kedasih', 0, 7500000, 'rajawali futsal', 'pungli', 'kos2.jpg', '8250'),
(16, 'Aladin', 0, 10000000, 'Depan IFI Futsal', 'Kost Laki Laki', 'kost-1.jpg', '8250'),
(17, 'Pondok Juara', 1, 9500000, 'Depan WCW', 'kosan si mas rehan aryo', 'kostPJ.jpg', '8250');

-- --------------------------------------------------------

--
-- Table structure for table `kos_fasilitas`
--

CREATE TABLE `kos_fasilitas` (
  `idKos` int(11) NOT NULL,
  `idFasilitas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `idPembayaran` int(11) NOT NULL,
  `metode` int(30) NOT NULL,
  `total` int(8) NOT NULL,
  `idBooking` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE `survey` (
  `idSurvey` int(11) NOT NULL,
  `tanggal_jam_survey` datetime NOT NULL,
  `NIK` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `NIK` varchar(16) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` tinyint(1) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tlahir` date NOT NULL,
  `peran` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`NIK`, `no_hp`, `password`, `nama`, `jenis_kelamin`, `email`, `tlahir`, `peran`) VALUES
('1', '081208120812', 'e2fc714c4727ee9395f324cd2e7f331f', 'Dimas', 1, '1@gmail.com', '2021-06-09', 1),
('2', '123', 'e2fc714c4727ee9395f324cd2e7f331f', 'Rizqi', 0, '2@gmail.com', '2021-06-09', 0),
('8250', '8520', 'a709909b1ea5c2bee24248203b1728a5', 'jek_penjual', 1, 'a@test.com', '2021-06-15', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`idBooking`),
  ADD KEY `idKos` (`idKos`) USING BTREE,
  ADD KEY `NIK` (`NIK`) USING BTREE;

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`idFasilitas`),
  ADD UNIQUE KEY `idKos` (`idKos`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`idImage`),
  ADD UNIQUE KEY `idKos` (`idKos`);

--
-- Indexes for table `kos`
--
ALTER TABLE `kos`
  ADD PRIMARY KEY (`idKos`),
  ADD KEY `NIK` (`NIK`) USING BTREE;

--
-- Indexes for table `kos_fasilitas`
--
ALTER TABLE `kos_fasilitas`
  ADD UNIQUE KEY `idKos` (`idKos`),
  ADD UNIQUE KEY `idFasilitas` (`idFasilitas`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`idPembayaran`),
  ADD UNIQUE KEY `idBooking` (`idBooking`);

--
-- Indexes for table `survey`
--
ALTER TABLE `survey`
  ADD PRIMARY KEY (`idSurvey`),
  ADD UNIQUE KEY `NIK` (`NIK`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`NIK`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `idBooking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `idFasilitas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `idImage` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kos`
--
ALTER TABLE `kos`
  MODIFY `idKos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `idPembayaran` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `survey`
--
ALTER TABLE `survey`
  MODIFY `idSurvey` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`NIK`) REFERENCES `user` (`NIK`),
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`idKos`) REFERENCES `kos` (`idKos`);

--
-- Constraints for table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `image_ibfk_1` FOREIGN KEY (`idKos`) REFERENCES `kos` (`idKos`);

--
-- Constraints for table `kos`
--
ALTER TABLE `kos`
  ADD CONSTRAINT `kos_ibfk_1` FOREIGN KEY (`NIK`) REFERENCES `user` (`NIK`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kos_fasilitas`
--
ALTER TABLE `kos_fasilitas`
  ADD CONSTRAINT `kos_fasilitas_ibfk_1` FOREIGN KEY (`idKos`) REFERENCES `kos` (`idKos`),
  ADD CONSTRAINT `kos_fasilitas_ibfk_2` FOREIGN KEY (`idFasilitas`) REFERENCES `fasilitas` (`idFasilitas`);

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`idBooking`) REFERENCES `booking` (`idBooking`);

--
-- Constraints for table `survey`
--
ALTER TABLE `survey`
  ADD CONSTRAINT `survey_ibfk_1` FOREIGN KEY (`NIK`) REFERENCES `user` (`NIK`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
