-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2021 at 12:12 PM
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
(1, 0, '2021-06-08', 2000, '111', 3),
(5, 0, '2021-06-08', 2000, '111', 3),
(6, 0, '2021-06-08', 2000, '111', 3),
(7, 0, '2021-06-08', 2000, '111', 3),
(8, 0, '2021-06-08', 2000, '111', 3),
(9, 0, '2021-06-08', 2000, '111', 3),
(10, 0, '2021-06-08', 2000, '111', 3),
(11, 0, '2021-06-08', 1000, '111', 1),
(12, 0, '2021-06-08', 2000, '111', 6),
(13, 0, '2021-06-08', 3000, '111', 8),
(14, 0, '2021-06-08', 2000, '111', 6),
(15, 0, '2021-06-08', 3000, '111', 7);

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
  `NIK` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kos`
--

INSERT INTO `kos` (`idKos`, `namaKos`, `jenisKos`, `hargaKos`, `alamatKos`, `deskripsi`, `NIK`) VALUES
(1, 'WCW', 1, 1000, 'IFI putsal', 'indomie iga penyet mantap, Suara suara !', '123'),
(3, 'Kedasih', 0, 2000, 'rajawali putsal', 'kang mintain duit', '1234567812345678'),
(6, 'WhiteHouse', 1, 2000, 'depan ayam mesir', 'nitip barang doang bayar full', '1234'),
(7, 'Aladin', 1, 3000, 'jalan berlubang depan ifi', 'bapack rese', '123123'),
(8, 'pondok juara', 1, 3000, 'depan WCW', 'kosnya si mas', '321321'),
(9, 'Kost Tes', 1, 1000000, 'Jalan kenangan', 'ini adalah kosan ter gege, ini namanya deskripsi, biar banyak aja deskripsinyeeh', '111');

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
('111', '082297230225', '3220a0d9e7ba09a22beafc821a14321d', 'kojek', 1, 'a@test.com', '2021-06-01', 0),
('123', '088888888', '21232f297a57a5a743894a0e4a801fc3', 'admin', 1, 'admin@admin.com', '2021-03-30', 1),
('123123', '123123', '123123', 'rendi', 1, 'rendi@rendi.com', '2021-06-02', 1),
('1234', '1234', '1234', 'Zaky', 1, 'zaky@zaky.com', '2021-06-23', 1),
('1234567812345678', '081208120812', 'e2fc714c4727ee9395f324cd2e7f331f', 'Dimas Guintana', 1, 'dimasguintana@student.telkomuniversity.ac.id', '0000-00-00', 1),
('321321', '321321', '321321', 'dimas', 1, 'dimas@dimas.com', '2021-06-16', 1);

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
  ADD UNIQUE KEY `NIK` (`NIK`);

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
  MODIFY `idBooking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
  MODIFY `idKos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
