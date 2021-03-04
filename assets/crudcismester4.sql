-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2020 at 08:13 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crudcismester4`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE `absensi` (
  `IdAbsen` varchar(4) NOT NULL,
  `IdPegawai` varchar(4) NOT NULL,
  `Tanggal` date NOT NULL,
  `JmlMasuk` int(2) NOT NULL,
  `JmlSakit` int(2) NOT NULL,
  `JmlIjin` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `absensi`
--

INSERT INTO `absensi` (`IdAbsen`, `IdPegawai`, `Tanggal`, `JmlMasuk`, `JmlSakit`, `JmlIjin`) VALUES
('A001', 'P001', '2020-11-03', 25, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'iqbalzaenalm75', '618bac7183034ac2296176ad01381d98');

-- --------------------------------------------------------

--
-- Table structure for table `gaji`
--

CREATE TABLE `gaji` (
  `IdGaji` varchar(4) NOT NULL,
  `IdPegawai` varchar(4) NOT NULL,
  `NamaPegawai` varchar(50) NOT NULL,
  `IdJabatan` varchar(4) NOT NULL,
  `IdAbsen` varchar(4) NOT NULL,
  `GajiPokok` int(15) NOT NULL,
  `TunjanganTransport` int(15) NOT NULL,
  `TunjanganKesehatan` int(15) NOT NULL,
  `TotalGaji` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gaji`
--

INSERT INTO `gaji` (`IdGaji`, `IdPegawai`, `NamaPegawai`, `IdJabatan`, `IdAbsen`, `GajiPokok`, `TunjanganTransport`, `TunjanganKesehatan`, `TotalGaji`) VALUES
('G001', 'P001', 'IQBAL ZAENAL M', 'J001', 'A001', 15000000, 1000000, 2600000, 18600000);

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `IdJabatan` varchar(4) NOT NULL,
  `IdPegawai` varchar(4) NOT NULL,
  `NamaJabatan` varchar(50) NOT NULL,
  `GajiPokok` int(15) NOT NULL,
  `TunjanganTransport` int(15) NOT NULL,
  `TunjanganKesehatan` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`IdJabatan`, `IdPegawai`, `NamaJabatan`, `GajiPokok`, `TunjanganTransport`, `TunjanganKesehatan`) VALUES
('J001', 'P001', 'Manager Pemasaran', 15500000, 1000000, 2500000);

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `IdPegawai` varchar(4) NOT NULL,
  `NamaPegawai` varchar(50) NOT NULL,
  `Password` varchar(8) NOT NULL,
  `Gender` varchar(15) NOT NULL,
  `NoTelpon` varchar(12) NOT NULL,
  `NoKtp` varchar(16) NOT NULL,
  `Alamat` varchar(200) NOT NULL,
  `Pendidikan` varchar(50) NOT NULL,
  `TglKerja` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`IdPegawai`, `NamaPegawai`, `Password`, `Gender`, `NoTelpon`, `NoKtp`, `Alamat`, `Pendidikan`, `TglKerja`) VALUES
('P001', 'IQBAL ZAENAL M', 'adm', 'Laki-Laki', '082321684064', '', 'Subang', 'S1 Management Informatika', '2020-07-10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`IdAbsen`),
  ADD KEY `IdPegawai` (`IdPegawai`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`,`username`);

--
-- Indexes for table `gaji`
--
ALTER TABLE `gaji`
  ADD PRIMARY KEY (`IdGaji`),
  ADD KEY `IdPegawai` (`IdPegawai`),
  ADD KEY `IdJabatan` (`IdJabatan`),
  ADD KEY `IdAbsen` (`IdAbsen`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`IdJabatan`),
  ADD KEY `IdPegawai` (`IdPegawai`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`IdPegawai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `absensi`
--
ALTER TABLE `absensi`
  ADD CONSTRAINT `absensi_ibfk_1` FOREIGN KEY (`IdPegawai`) REFERENCES `pegawai` (`IdPegawai`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `gaji`
--
ALTER TABLE `gaji`
  ADD CONSTRAINT `gaji_ibfk_1` FOREIGN KEY (`IdPegawai`) REFERENCES `pegawai` (`IdPegawai`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `gaji_ibfk_2` FOREIGN KEY (`IdJabatan`) REFERENCES `jabatan` (`IdJabatan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `gaji_ibfk_3` FOREIGN KEY (`IdAbsen`) REFERENCES `absensi` (`IdAbsen`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD CONSTRAINT `jabatan_ibfk_1` FOREIGN KEY (`IdPegawai`) REFERENCES `pegawai` (`IdPegawai`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
