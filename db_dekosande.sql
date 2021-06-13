-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2021 at 01:19 AM
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
(14, 'WCW', 1, 9500000, 'samping IFI', 'Fasilitas Kamar: <br>\r\n- Kasur besar <br>\r\n- Meja <br>\r\n- Lemari  <br>\r\n<br>\r\nFasilitias Kamar Mandi: <br>\r\n- Kamar mandi dalam  <br>\r\n- Kloset duduk<br>\r\n- Shower<br>\r\n<br>\r\nFasilitas Umum:<br>\r\n- Jemuran di lantai 3<br>\r\n- Parkir motor  <br>\r\n- Dekat kampus <br>\r\n- Terdapat kantin <br>\r\n<br>\r\nHarga : Rp. 9.500.000 / tahun (sudah termasuk iuran rt, kebersihan)', 'kosan1.jpg', '8250'),
(16, 'Aladin', 1, 13000000, 'Depan IFI Futsal', 'Fasilitas Kamar: <br>\r\n- Kasur besar <br>\r\n- Meja <br>\r\n- Lemari  <br>\r\n- Jendela <br>\r\n- Hanger <br>\r\n<br>\r\nFasilitias Kamar Mandi: <br>\r\n- Kamar mandi dalam  <br>\r\n- Kloset duduk<br>\r\n- Shower<br>\r\n- Air jernih (toren pakai filter)<br>\r\n<br>\r\nFasilitas Umum:<br>\r\n- Jemuran di lantai 3<br>\r\n- Ada dapur di lantai 1<br>\r\n- Dapet kunci pintu kaca masing-masing<br>\r\n- Wifi bisa join<br>\r\n- Parkir motor  <br>\r\n- Dekat kampus <br>\r\n<br>\r\nHarga : Rp. 13.000.000 / tahun (sudah termasuk iuran rt, kebersihan)', 'kost-1.jpg', '8250'),
(17, 'Pondok Juara', 1, 9500000, 'Depan WCW', 'Fasilitas Kamar: <br>\r\n- Kasur <br>\r\n- Meja <br>\r\n- Lemari  <br>\r\n- Kursi <br>\r\n<br>\r\nFasilitias Kamar Mandi: <br>\r\n- Kamar mandi dalam  <br>\r\n- Kloset duduk<br>\r\n- Shower water heater<br>\r\n<br>\r\nFasilitas Umum:<br>\r\n- Jemuran di lantai 3<br>\r\n- Dapur bersama<br>\r\n- Dapet kunci pintu kaca masing-masing<br>\r\n- Wifi bisa join<br>\r\n- Parkir motor  <br>\r\n- Dekat kampus <br>\r\n<br>\r\nHarga : Rp. 9.500.000 / tahun (sudah termasuk kebersihan)', 'kostPJ.jpg', '8250'),
(18, 'Rajawali Kost', 0, 1000000, 'Jl. Sukabirus (Depan Rajawali Futsal)', 'Fasilitas Kamar: <br>\r\n- Kasur single Meja <br>\r\n- Lemari  <br>\r\n- Meja dan kursi belajar <br>\r\n<br>\r\nFasilitias Kamar Mandi: <br>\r\n- Kamar mandi luar  <br>\r\n- Kloset duduk<br>\r\n- Shower<br>\r\n- Air jernih (toren pakai filter)<br>\r\n<br>\r\nFasilitas Umum:<br>\r\n- Dapet kunci pintu kaca masing-masing<br>\r\n- Wifi bisa join<br>\r\n- Parkir motor  <br>\r\n- Dekat kampus <br>\r\n- Dekat tempat futsal rajawali <br>\r\n<br>\r\nHarga : Rp. 10.000.000 / tahun ', 'kost1.jpg', '001'),
(19, 'Pondok Kenangan ', 0, 8000000, 'Jl. Sukapura no. 12', 'Fasilitas Kamar: <br>\r\n- Kasur <br>\r\n- Meja Lesehan <br>\r\n- Lemari  <br>\r\n<br>\r\nFasilitias Kamar Mandi: <br>\r\n- Kamar mandi dalam  <br>\r\n- Kloset duduk<br>\r\n- Shower<br>\r\n- Water Heater<br>\r\n<br>\r\nFasilitas Umum:<br>\r\n- Jemuran di lantai 3<br>\r\n- Dapur Bersama <br>\r\n- Parkir motor  <br>\r\n- Dekat kampus <br>\r\n<br>\r\nHarga : Rp. 8.000.000 / tahun (sudah termasuk kebersihan)', 'kost2.jpg', '001'),
(20, 'Wisma Singgahsini', 1, 7500000, 'Jl. Radio no. 34', 'Fasilitas Kamar: <br>\r\n- Kasur besar <br>\r\n- Meja <br>\r\n- Lemari  <br>\r\n\r\n<br>\r\nFasilitias Kamar Mandi: <br>\r\n- Kamar mandi dalam  <br>\r\n- Kloset duduk<br>\r\n- Shower<br>\r\n<br>\r\nFasilitas Umum:<br>\r\n- Jemuran di lantai 3<br>\r\n- Ada dapur di lantai 1<br>\r\n- Dapet kunci pintu kaca masing-masing<br>\r\n- Wifi bisa join<br>\r\n- Parkir motor  <br>\r\n- Dekat kampus <br>\r\n<br>\r\nHarga : Rp. 7.500.000 / tahun (sudah termasuk iuran rt, kebersihan)', 'kost3.jpg', '002'),
(21, 'Wisma Udin', 0, 13000000, 'Jl. Sukabirus no.23', 'Fasilitas Kamar: <br>\r\n- Kasur besar <br>\r\n- Meja <br>\r\n- Lemari  <br>\r\n- Jendela <br>\r\n- Hanger <br>\r\n<br>\r\nFasilitias Kamar Mandi: <br>\r\n- Kamar mandi dalam  <br>\r\n- Kloset duduk<br>\r\n- Shower<br>\r\n- Air jernih (toren pakai filter)<br>\r\n<br>\r\nFasilitas Umum:<br>\r\n- Jemuran di lantai 3<br>\r\n- Ada dapur di lantai 1<br>\r\n- Dapet kunci pintu kaca masing-masing<br>\r\n- Wifi bisa join<br>\r\n- Parkir motor  <br>\r\n- Dekat kampus <br>\r\n<br>\r\nHarga : Rp. 13.000.000 / tahun (sudah termasuk iuran rt, kebersihan)', 'kost4.jpg', '002'),
(22, 'Kost Audy Residence', 0, 5500000, 'Jl. Umayyah no.12', 'Fasilitas Kamar: <br>\r\n- Kosongan\r\n<br>\r\nFasilitias Kamar Mandi: <br>\r\n- Kamar mandi dalam  <br>\r\n- Kloset duduk<br>\r\n- Shower<br>\r\n<br>\r\nFasilitas Umum:<br>\r\n- Jemuran di lantai 3<br>\r\n- Ada dapur di lantai 1<br>\r\n- Ruang Tamu <br>\r\n- Wifi bisa join<br>\r\n- Parkir motor dan mobil  <br>\r\n- Dekat kampus <br>\r\n<br>\r\nHarga : Rp. 5.500.000 / tahun (sudah termasuk iuran rt, kebersihan)', 'kost5.jpg', '003'),
(23, 'Dimas House', 1, 7500000, 'Jl. Haji Nawi no.69', 'Fasilitas Kamar: <br>\r\n- Kasur besar <br>\r\n- Meja <br>\r\n- Lemari  <br>\r\n- Kursi <br>\r\n<br>\r\nFasilitias Kamar Mandi: <br>\r\n- Kamar mandi dalam  <br>\r\n- Kloset duduk<br>\r\n- Shower<br>\r\n- Air jernih (toren pakai filter)<br>\r\n<br>\r\nFasilitas Umum:<br>\r\n- Jemuran <br>\r\n- Ada bersama<br>\r\n- Kunci gerbang masing - masing<br>\r\n- Wifi<br>\r\n- Parkir motor <br>\r\n- Dekat kampus <br>\r\n<br>\r\nHarga : Rp. 7.500.000 / tahun', 'kost6.jpg', '003'),
(24, 'Kost Alam Makmur', 0, 1000000, 'Jl.Sayuti no. 35', 'Fasilitas Kamar: <br>\r\n- Kasur besar <br>\r\n- Meja <br>\r\n- Lemari  <br>\r\n- Kursi <br>\r\n<br>\r\nFasilitias Kamar Mandi: <br>\r\n- Kamar mandi dalam  <br>\r\n- Kloset duduk<br>\r\n- Shower Water Heater<br>\r\n<br>\r\nFasilitas Umum:<br>\r\n- Jemuran <br>\r\n- Dapur bersama<br>\r\n- Kunci gerbang masing - masing<br>\r\n- Wifi<br>\r\n- Parkir motor <br>\r\n- Dekat kampus <br>\r\n<br>\r\nHarga : Rp. 10.000.000 / tahun', 'kost7.jpg', '004'),
(25, 'White House', 1, 7500000, 'Jl. Sukabirus depan geprek mesir', 'Fasilitas Kamar: <br>\r\n- Kasur besar <br>\r\n- Meja <br>\r\n- Lemari  <br>\r\n- Kursi <br>\r\n<br>\r\nFasilitias Kamar Mandi: <br>\r\n- Kamar mandi dalam  <br>\r\n- Kloset duduk<br>\r\n- Shower<br>\r\n- Air jernih (toren pakai filter)<br>\r\n<br>\r\nFasilitas Umum:<br>\r\n- Jemuran <br>\r\n- Ada bersama<br>\r\n- Kunci gerbang masing - masing<br>\r\n- Wifi<br>\r\n- Parkir motor <br>\r\n- Dekat kampus <br>\r\n<br>\r\nHarga : Rp. 7.500.000 / tahun', 'kost9.jpg', '004');

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
('001', '001', 'dc5c7986daef50c1e02ab09b442ee34f', '001_penjual', 0, '001@gmail.com', '2021-06-01', 1),
('002', '002', '93dd4de5cddba2c733c65f233097f05a', '002_penjual', 1, '002@gmail.com', '2021-06-01', 1),
('003', '003', 'e88a49bccde359f0cabb40db83ba6080', '003_penjual', 1, '003@gmail.com', '2021-02-09', 1),
('004', '004', '11364907cf269dd2183b64287156072a', '004_penjual', 1, '004@gmail.com', '2021-05-06', 1),
('098', '098', '92daa86ad43a42f28f4bf58e94667c95', 'jek_pencari', 1, 'jek_pencari@gmail.com', '2021-06-08', 0),
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
  MODIFY `idBooking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

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
  MODIFY `idKos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

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
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`idKos`) REFERENCES `kos` (`idKos`) ON DELETE CASCADE;

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
