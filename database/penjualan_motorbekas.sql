-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2022 at 05:10 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

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
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Id_Cust` int(11) NOT NULL,
  `Nama_Cust` varchar(255) NOT NULL,
  `Alamat_Cust` varchar(255) NOT NULL,
  `Telp_Cust` varchar(15) NOT NULL,
  `NIK_Cust` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Id_Cust`, `Nama_Cust`, `Alamat_Cust`, `Telp_Cust`, `NIK_Cust`) VALUES
(1, 'Dara', 'Subang', '0989373873', 1212345553),
(2, 'Rico', 'Jakarta Timur', '5567323', 9987065),
(3, 'Jadid', 'Bekasi', '44879876', 678423234),
(4, 'Bayu', 'Bekasi', '665784434', 6666644),
(5, 'Lintar', 'Cikampek', '111113873', 22225553),
(6, 'Danu', 'Karawang', '3333323', 4444465),
(7, 'Tiara', 'Cirebon', '6666876', 77773234),
(8, 'Fricyl', 'Bekasi', '8888434', 66466644);

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
  `MasaBerlakuSTNK` date NOT NULL,
  `Gambar_Motor` varchar(255) NOT NULL,
  `Tgl_Beli` date DEFAULT NULL,
  `Harga_Beli` int(11) NOT NULL,
  `Tgl_Jual` date DEFAULT NULL,
  `Harga_Jual` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `identitas_motor`
--

INSERT INTO `identitas_motor` (`ID`, `NoRegistrasi`, `NamaPemilik`, `Alamat`, `NoRangka`, `NoMesin`, `PlatNo`, `Merk`, `Type`, `Model`, `TahunPembuatan`, `IsiSilinder`, `BahanBakar`, `WarnaTNKB`, `TahunRegistrasi`, `NoBPKB`, `KodeLokasi`, `MasaBerlakuSTNK`, `Gambar_Motor`, `Tgl_Beli`, `Harga_Beli`, `Tgl_Jual`, `Harga_Jual`) VALUES
(10001, 2021000001, 'Jadid Alif Ramadhan', 'Bekasi Mustika Jaya', 'JAR0250001', 'BKS0250001', 'B2525KKP', 'Honda', 'Matic', 'Beat', 2013, 150, 'Bensin', 'Hitam', 2021, 'AA000001', 'B', '2022-10-25', '779-Beat.png', '2014-01-01', 13000000, '2021-12-17', 6000000),
(10002, 2021000002, 'Ramadhan Alifia', 'Karawang Galuh Mas', 'JAR0250002', 'BKS0250002', 'T1234KCP', 'Yamaha', 'Bebek', 'Jupiter', 2009, 125, 'Bensin', 'Hijau', 2021, 'AA000002', 'T', '2021-11-25', '325-Jupiter.png', '2021-12-17', 14000000, '2021-12-25', 15000000),
(10003, 2021000003, 'Alfi Rahman Dan', 'Jakarta Kalibata', 'JAR0250003', 'BKS0250003', 'B1925SCP', 'Yamaha', 'Sport', 'PCX', 2018, 220, 'Bensin', 'Hitam', 2021, 'AA000003', 'B', '2024-11-17', '42-PCX.png', '2021-12-01', 900000, '2022-03-31', 150000),
(10004, 2021000004, 'Kasino', 'Jakarta Cakung', 'JAR0250004', 'BKS0250004', 'B2020TSA', 'Honda', 'Bebek', 'Revo', 2017, 120, 'Bensin', 'Hitam', 2021, 'AA000004', 'B', '2021-07-14', '54-Revo.png', '2021-12-04', 9999999, '2021-12-25', 2000),
(10005, 2021000005, 'Dono', 'Bogor Cibadak', 'JAR0250005', 'BKS0250005', 'F7780PTM', 'Kawasaki', 'Sport', 'Ninja', 2018, 250, 'Bensin', 'Merah', 2021, 'AA000005', 'F', '2021-11-10', '720-Ninja.png', '2021-12-10', 90000, '2021-12-25', 150000),
(10008, 234153122, 'Rico Ganteng', 'Jakarta Timur', 'RAC12345', 'JKT929141', 'B6969TSM', 'Honda', 'Vario', 'Matic', 2012, 120, 'Arang', 'Hitam', 2021, 'AA000010', 'B', '2021-12-18', '888-Vario.png', '2021-12-17', 12000000, '2021-12-18', 15000000),
(10009, 2021000006, 'Indro', 'Karawang Cikampek', 'JAR0250006', 'BKS0250006', 'T1980TTM', 'Honda', 'Matic', 'Vario', 2014, 130, 'Bensin', 'Hitam', 2021, 'AA000006', 'T', '2022-04-16', '779-Vario.png', '2021-12-02', 15000000, '2021-12-29', 13000000),
(10011, 561465416, 'Diandara Tresya', 'Subang Ujung', 'DAR1230172', 'SUB2318192', 'T8812DAR', 'Suzuki', 'Nex II', 'Bebek', 2016, 130, 'Bensin', 'Hitam', 2021, 'AA000011', 'T', '2033-12-31', '395-Nex.jpg', '2017-01-12', 16000000, '2021-12-18', 8000000),
(10012, 555552121, 'Bayu Xhen', 'Bekasi Asem', 'BAY123123', 'BKS123432', 'B1010KCP', 'Honda', 'Supra', 'Bebek', 2012, 135, 'Bensin', 'Hitam', 2021, 'AA000008', 'B', '2022-01-08', '598-Supra lejen.jpg', '2020-02-05', 11000000, '2021-12-28', 7700000);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_penjualan`
--

CREATE TABLE `transaksi_penjualan` (
  `IdTrsk` int(11) NOT NULL,
  `Tgl_Trsk` date DEFAULT NULL,
  `Id_Cust` int(11) NOT NULL,
  `Id_Kendaraan` int(11) NOT NULL,
  `Harga_Jual` int(11) NOT NULL,
  `Harga_Jual_Real` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi_penjualan`
--

INSERT INTO `transaksi_penjualan` (`IdTrsk`, `Tgl_Trsk`, `Id_Cust`, `Id_Kendaraan`, `Harga_Jual`, `Harga_Jual_Real`) VALUES
(1, '2021-12-16', 1, 1001, 6000000, 6500000),
(2, '2021-12-01', 2, 1002, 15000000, 15000000),
(3, '2021-12-19', 3, 1003, 150000, 150000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `IDUser` int(100) NOT NULL,
  `Nama` varchar(20) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Hak_Akses` varchar(100) NOT NULL,
  `Create_Date` date NOT NULL,
  `Manager` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`IDUser`, `Nama`, `Password`, `Hak_Akses`, `Create_Date`, `Manager`) VALUES
(1, 'Bayu', 'd0c6a909f539307f0f60282674009e31', 'Pemilik', '2021-12-06', '-'),
(2, 'Rico', 'ec8761509e47638ec23f59c3073bce08', 'Teller', '2021-12-06', '-'),
(3, 'Jadid', 'e90d1b819d8a0e9398aad9ffad3c6ee2', 'Customer', '2021-12-05', '-'),
(4, 'Dara', '3c20ade1447676f0d3667e668d92a695', 'Pemilik', '2021-12-15', '-'),
(5, 'Dian', 'd096dd8f02bdac9358a28bac34b42d3c', 'Teknisi', '2021-12-06', '-');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Id_Cust`);

--
-- Indexes for table `identitas_motor`
--
ALTER TABLE `identitas_motor`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `transaksi_penjualan`
--
ALTER TABLE `transaksi_penjualan`
  ADD PRIMARY KEY (`IdTrsk`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`IDUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `Id_Cust` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `transaksi_penjualan`
--
ALTER TABLE `transaksi_penjualan`
  MODIFY `IdTrsk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
