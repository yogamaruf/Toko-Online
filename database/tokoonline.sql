-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2018 at 05:26 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tokoonline`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idadmin` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `namalengkap` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idadmin`, `nama`, `namalengkap`, `email`, `password`) VALUES
(1, 'Yoga', 'Yoga Ma\'ruf', 'yoga@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `idcheck` int(10) NOT NULL,
  `idcustom` int(10) NOT NULL,
  `kdpos` int(10) NOT NULL,
  `negara` varchar(20) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `kabupaten` varchar(50) NOT NULL,
  `alamat` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `idcustom` int(10) NOT NULL,
  `title` varchar(5) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`idcustom`, `title`, `firstname`, `lastname`, `email`, `date`, `password`) VALUES
(2, 'Mr.', 'Febri', 'Indra', 'valentino1234@gmail.', '2018-07-11', '123456'),
(3, 'Mr.', 'Dadang', 'Agusti', 'Agusti234@gmail.com', '2018-07-08', 'Mikarta');

-- --------------------------------------------------------

--
-- Table structure for table `detailprofil`
--

CREATE TABLE `detailprofil` (
  `idd` int(10) NOT NULL,
  `idcustom` int(10) NOT NULL,
  `notelp` varchar(13) NOT NULL,
  `alamat` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `idkategori` int(10) NOT NULL,
  `namakategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`idkategori`, `namakategori`) VALUES
(154678, 'Fashion'),
(154679, 'Watches'),
(154680, 'Fine Jewelry'),
(154681, 'Fashion Jewelry'),
(154682, 'Engagement & Wedding'),
(154683, 'Men\'s Jewelry'),
(154684, 'Vintage & Antique'),
(154685, 'Loose Diamonds'),
(154686, 'Loose Beads');

-- --------------------------------------------------------

--
-- Table structure for table `merk`
--

CREATE TABLE `merk` (
  `idmerk` int(10) NOT NULL,
  `namamerk` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `merk`
--

INSERT INTO `merk` (`idmerk`, `namamerk`, `gambar`) VALUES
(6, 'Casio', '1.png'),
(7, 'Vida', '2.png'),
(8, 'Rolex', '4.png'),
(9, 'Sport', '3.png'),
(10, 'Rado', '5.png'),
(11, 'Seiko', '6.png');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `kodeorder` int(10) NOT NULL,
  `idproduk` int(10) NOT NULL,
  `idcustom` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah` int(5) NOT NULL,
  `harga` int(10) NOT NULL,
  `total` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `idbayar` int(10) NOT NULL,
  `idproduk` int(10) NOT NULL,
  `idcustom` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  `harga` int(50) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `total` int(50) NOT NULL,
  `viabayar` varchar(20) NOT NULL,
  `ket` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `idproduk` int(10) NOT NULL,
  `idkategori` int(10) NOT NULL,
  `idmerk` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `warna` varchar(10) NOT NULL,
  `bahan` varchar(20) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(50) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`idproduk`, `idkategori`, `idmerk`, `nama`, `warna`, `bahan`, `deskripsi`, `harga`, `foto`) VALUES
(8, 154683, 6, 'G-Shock GWN 1000B 1 ADR', 'Hitam', 'Resin/ Stainless ste', 'Produk ini cocok untuk man/ pria dengan model analog yang lebih elegan, G-SHOCK ini mampu membuat siapa saja yang memakainya akan merasa percaya diri. Disamping itu untuk menambah kenyaman saat pemakaian G-SHOCK menggunakan resin/ Stainless Steel dan Resin Band. Tak hanya  nyaman saat dipakai G-SHOCK ini mampu bertahan di dalam air dengan kedalaman 200m. Masih banyak fitur didalam G-SHOCK ini seperti Digital compass, Altimeter, Barometer, dan Thermometer.', 6000000, 'G-shock.jpg'),
(9, 154682, 7, 'Sosis Sapi', 'Merah', 'Daging Sapi', 'Vida sosis sapi isi 6 pcs terbuat dari daging pilihan ', 12500, 'sosis_sapi.jpg'),
(10, 154678, 9, 'Lounch Sport AA-02', 'Hitam Puti', 'Mesh Upper', 'Lounch Sport AA-02 Sepatu Wanita - Black White, sneaker shoes berbahan mesh upper yang didesain sporty dengan 5 eyelets, neat stitching, dan EVA outsole sehingga nyaman saat dipakai', 102320, 'lounch_sport.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idadmin`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`idcheck`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`idcustom`);

--
-- Indexes for table `detailprofil`
--
ALTER TABLE `detailprofil`
  ADD PRIMARY KEY (`idd`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`idkategori`);

--
-- Indexes for table `merk`
--
ALTER TABLE `merk`
  ADD PRIMARY KEY (`idmerk`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`kodeorder`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`idbayar`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`idproduk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idadmin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `idcheck` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `idcustom` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `detailprofil`
--
ALTER TABLE `detailprofil`
  MODIFY `idd` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `idkategori` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154687;

--
-- AUTO_INCREMENT for table `merk`
--
ALTER TABLE `merk`
  MODIFY `idmerk` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `kodeorder` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `idbayar` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `idproduk` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
