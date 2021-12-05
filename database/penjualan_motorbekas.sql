-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2021 at 05:51 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penjualan_motorbekas`
--

-- --------------------------------------------------------

--
-- Table structure for table `identitas_motor`
--

CREATE TABLE `identitas_motor` (
  `ID` int(5) NOT NULL,
  `NoRegistrasi` int(10) NOT NULL,
  `NamaPemilik` varchar(25) NOT NULL,
  `Alamat` varchar(25) NOT NULL,
  `NoRangka` varchar(15) NOT NULL,
  `NoMesin` varchar(15) NOT NULL,
  `PlatNo` varchar(9) NOT NULL,
  `Merk` varchar(10) NOT NULL,
  `Type` varchar(15) NOT NULL,
  `Model` varchar(10) NOT NULL,
  `TahunPembuatan` year(4) NOT NULL,
  `IsiSilinder` int(5) NOT NULL,
  `BahanBakar` varchar(10) NOT NULL,
  `WarnaTNKB` varchar(10) NOT NULL,
  `TahunRegistrasi` year(4) NOT NULL,
  `NoBPKB` varchar(8) NOT NULL,
  `KodeLokasi` varchar(10) NOT NULL,
  `MasaBerlakuSTNK` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `identitas_motor`
--

INSERT INTO `identitas_motor` (`ID`, `NoRegistrasi`, `NamaPemilik`, `Alamat`, `NoRangka`, `NoMesin`, `PlatNo`, `Merk`, `Type`, `Model`, `TahunPembuatan`, `IsiSilinder`, `BahanBakar`, `WarnaTNKB`, `TahunRegistrasi`, `NoBPKB`, `KodeLokasi`, `MasaBerlakuSTNK`) VALUES
(10001, 2021000001, 'Jadid Alif Ramadhan', 'Bekasi Mustika Jaya', 'JAR0250001', 'BKS0250001', 'B2525KKP', 'Honda', 'Matic', 'Beat', 2013, 150, 'Bensin', 'Hitam', 2021, 'AA000001', 'B', '2022-10-25'),
(10002, 2021000002, 'Ramadhan Alifia', 'Karawang Galuh Mas', 'JAR0250002', 'BKS0250002', 'T1234KCP', 'Yamaha', 'Bebek', 'Jupiter', 2009, 125, 'Bensin', 'Hijau', 2021, 'AA000002', 'T', '2021-11-25'),
(10003, 2021000003, 'Alfi Rahman Dan', 'Jakarta Kalibata', 'JAR0250003', 'BKS0250003', 'B1925SCP', 'Yamaha', 'Sport', 'PCX', 2018, 220, 'Bensin', 'Hitam', 2021, 'AA000003', 'B', '2024-11-17'),
(10004, 2021000004, 'Kasino', 'Jakarta Cakung', 'JAR0250004', 'BKS0250004', 'B2020TSA', 'Honda', 'Bebek', 'Revo', 2017, 120, 'Bensin', 'Hitam', 2021, 'AA000004', 'B', '2021-07-14'),
(10005, 2021000005, 'Dono', 'Bogor Cibadak', 'JAR0250005', 'BKS0250005', 'F7780PTM', 'Kawasaki', 'Sport', 'Ninja', 2018, 250, 'Bensin', 'Merah', 2021, 'AA000005', 'F', '2021-11-10'),
(10009, 2021000006, 'Indro', 'Karawang Cikampek', 'JAR0250006', 'BKS0250006', 'T1980TTM', 'Honda', 'Matic', 'Vario', 2014, 130, 'Bensin', 'Putih', 2021, 'AA000006', 'T', '2022-04-16');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `IDUser` int(100) NOT NULL,
  `Nama` varchar(20) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Hak_Akses` varchar(100) NOT NULL,
  `Create_Date` date NOT NULL DEFAULT current_timestamp(),
  `Manager` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`IDUser`, `Nama`, `Password`, `Hak_Akses`, `Create_Date`, `Manager`) VALUES
(1, 'Bayu', 'd0c6a909f539307f0f60282674009e31', 'Pemilik', '2021-12-04', 'Motor'),
(3, 'Jadid', 'e90d1b819d8a0e9398aad9ffad3c6ee2', 'Customer', '2021-12-05', '-');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `identitas_motor`
--
ALTER TABLE `identitas_motor`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`IDUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `IDUser` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
