-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2018 at 07:43 PM
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
  `username` varchar(50) NOT NULL,
  `namalengkap` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idadmin`, `username`, `namalengkap`, `email`, `password`) VALUES
(1, 'yoga', 'Yoga Ma\'ruf Ramadan', 'yoga@gmail.com', '12345'),
(3, 'Dina', 'Dina Lestari', 'dinalestari@gmail.com', 'lestari');

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `idcheck` int(10) NOT NULL,
  `kodeorder` int(10) NOT NULL,
  `idproduk` int(10) NOT NULL,
  `idcustom` int(10) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `total` int(10) NOT NULL,
  `tglorder` datetime NOT NULL,
  `kdpos` int(10) NOT NULL,
  `negara` varchar(20) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `kabupaten` varchar(50) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `viabayar` varchar(10) NOT NULL,
  `norekening` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`idcheck`, `kodeorder`, `idproduk`, `idcustom`, `jumlah`, `total`, `tglorder`, `kdpos`, `negara`, `provinsi`, `kabupaten`, `alamat`, `viabayar`, `norekening`) VALUES
(15, 7, 10, 2, 3, 306960, '2018-08-09 11:50:01', 55187, 'Indonesia', 'Jakarta', 'Cilacap', 'Jambrong', 'BCA', 2147483647),
(16, 7, 12, 2, 2, 480000, '2018-08-09 11:50:01', 55187, 'Indonesia', 'Jakarta', 'Cilacap', 'Jambrong', 'BCA', 2147483647),
(17, 7, 9, 2, 3, 37500, '2018-08-09 11:50:01', 55187, 'Indonesia', 'Jakarta', 'Cilacap', 'Jambrong', 'BCA', 2147483647),
(18, 8, 9, 2, 2, 25000, '2018-08-09 02:12:51', 55187, 'Indonesia', 'Jakarta', 'Cilacap', 'Karangjati', 'MEGA', 2147483647),
(19, 8, 10, 2, 1, 102320, '2018-08-09 02:12:52', 55187, 'Indonesia', 'Jakarta', 'Cilacap', 'Karangjati', 'MEGA', 2147483647),
(20, 9, 9, 2, 2, 25000, '2018-08-11 09:36:10', 15585, 'Indonesia', 'Yogyakarta', 'Bantul', 'Pajangan', 'MEGA', 2147483647),
(21, 10, 12, 4, 3, 720000, '2018-08-13 09:17:55', 15585, 'Indonesia', 'Yogyakarta', 'Bantul', 'Kasongan', 'MEGA', 2147483647),
(22, 10, 11, 4, 1, 240000, '2018-08-13 09:17:55', 15585, 'Indonesia', 'Yogyakarta', 'Bantul', 'Kasongan', 'MEGA', 2147483647),
(23, 10, 9, 4, 2, 25000, '2018-08-13 09:17:55', 15585, 'Indonesia', 'Yogyakarta', 'Bantul', 'Kasongan', 'MEGA', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `idcustom` int(10) NOT NULL,
  `title` varchar(5) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`idcustom`, `title`, `firstname`, `lastname`, `email`, `date`, `password`) VALUES
(2, 'Mr.', 'Febri', 'Indra', 'valentino1234@gmail.com', '2000-02-14', '123456'),
(4, 'Mr.', 'Yoga', 'Maruf', 'yoga@gmail.com', '2000-02-01', 'yoga');

-- --------------------------------------------------------

--
-- Table structure for table `detailprofil`
--

CREATE TABLE `detailprofil` (
  `idd` int(8) NOT NULL,
  `idcustom` int(8) NOT NULL,
  `notelp` varchar(13) NOT NULL,
  `norekening` varchar(20) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `warganegara` varchar(5) NOT NULL,
  `kodepos` int(6) NOT NULL,
  `kabupaten` varchar(15) NOT NULL,
  `provinsi` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detailprofil`
--

INSERT INTO `detailprofil` (`idd`, `idcustom`, `notelp`, `norekening`, `gender`, `alamat`, `warganegara`, `kodepos`, `kabupaten`, `provinsi`) VALUES
(4, 2, '', '2893785930489', '', '', '', 0, '', ''),
(5, 4, '089389409308', '239840939489', 'L', 'Kasongan', 'WNI', 15585, 'Bantul', 'Yogyakarta');

-- --------------------------------------------------------

--
-- Table structure for table `halaman`
--

CREATE TABLE `halaman` (
  `id` int(2) NOT NULL,
  `idmenu` int(2) NOT NULL,
  `judulhal` varchar(50) NOT NULL,
  `subjudul` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `halaman`
--

INSERT INTO `halaman` (`id`, `idmenu`, `judulhal`, `subjudul`, `deskripsi`) VALUES
(1, 1, 'New Products', '', ''),
(2, 1, 'Featured Products', '', ''),
(3, 2, 'My Account', '', ''),
(4, 2, 'Akun Anda', 'Detail akun', ''),
(5, 3, 'Registration', '', ''),
(6, 3, 'Your Personal Details ', '', ''),
(7, 4, 'Visit Us', 'Contact Details', '2601 Mission St.<br>\r\nSan Francisco, CA 94110<br><br>\r\n\r\ninfo@mysite.com<br>\r\nTel 123-456-6780<br>\r\nFax 123-456-5679<br>\r\nweb:wwwmysitedomain.com'),
(8, 15, 'About Us', '', 'I\'m a paragraph. Click here to add your own text and edit me. I’m a great place for you to tell a story and let your users know a little more about you.<br><br>\r\nIt’s easy. Just click “Edit Text” or double click me and you can start adding your own content and make changes to the font. Feel free to drag and drop me anywhere you like on your page. I’m a great place for you to tell a story and let your users know a little more about you.<br>\r\n				<br>\r\n				This is a great space to write long text about your company and your services. You can use this space to go into a little more detail about your company. Talk about your team and what services you provide. Tell your visitors the story of how you came up with the idea for your business and what makes you different from your competitors. Make your company stand out and show your visitors who you are.\r\n				<br><br>\r\n				Sometimes I\'m right and I can be wrong. My own beliefs are in my song. The butcher, the banker, the drummer and then, makes no difference what group I\'m in. I am everyday people! Yeah. Yeah.<br>'),
(9, 8, 'Produk', '', ''),
(10, 5, 'Keranjang', 'Shipping', ''),
(11, 9, 'Tiga Kolom', '', ''),
(12, 10, 'Empat Kolom', '', ''),
(13, 11, 'Konfirmasi Tertunda', 'Pembayaran', ''),
(14, 16, 'Histori', '', ''),
(15, 17, 'Copyright', 'Toko Online by Yoga', '2018');

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
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `idcart` int(10) NOT NULL,
  `idproduk` int(10) NOT NULL,
  `idcustomer` int(10) NOT NULL,
  `fotoproduk` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(10) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `total` int(10) NOT NULL,
  `tanggalcart` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `konfigurasi`
--

CREATE TABLE `konfigurasi` (
  `id` int(2) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `deskripsi` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `telp` varchar(13) NOT NULL,
  `share1` varchar(30) NOT NULL,
  `share2` varchar(30) NOT NULL,
  `share3` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konfigurasi`
--

INSERT INTO `konfigurasi` (`id`, `nama`, `deskripsi`, `email`, `telp`, `share1`, `share2`, `share3`) VALUES
(1, 'Shopping Aja', 'The standard chunk of Lorem<br> The standard chunk of \r\n									Lorem Ipsum used since the 1500s is reproduced below for \r\n									those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus \r\n									Bonorum et Malorum\" by Cicero are also reproduced in their exact \r\n									original form, accompanied by English versions from the 1914 \r\n									translation by H. Rackham.', 'shoppingaja@gmail.com', '0800 1234 678', 'www.facebook.com', 'twitter.com', 'instagram.com');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `idmenu` int(11) NOT NULL,
  `namamenu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`idmenu`, `namamenu`) VALUES
(1, 'Home'),
(2, 'My Account'),
(3, 'Free Register'),
(4, 'Contact Us'),
(5, 'Items (s)'),
(7, 'List View'),
(8, 'Grid View'),
(9, 'Three Column'),
(10, 'Four Column'),
(11, 'Tertunda'),
(15, 'About US'),
(16, 'Histori'),
(17, 'Footer');

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
  `idcustom` int(10) NOT NULL,
  `jumbel` int(2) NOT NULL,
  `nominal` int(10) NOT NULL,
  `tanggal` datetime NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`kodeorder`, `idcustom`, `jumbel`, `nominal`, `tanggal`, `status`) VALUES
(7, 2, 3, 824460, '2018-08-09 11:50:00', 'Lunas'),
(8, 2, 2, 127320, '2018-08-09 02:12:51', 'Lunas'),
(9, 2, 1, 25000, '2018-08-11 09:36:10', 'Lunas'),
(10, 4, 3, 985000, '2018-08-13 09:17:55', 'Lunas');

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
(10, 154678, 9, 'Lounch Sport AA-02', 'Hitam Puti', 'Mesh Upper', 'Lounch Sport AA-02 Sepatu Wanita - Black White, sneaker shoes berbahan mesh upper yang didesain sporty dengan 5 eyelets, neat stitching, dan EVA outsole sehingga nyaman saat dipakai', 102320, 'lounch_sport.jpg'),
(11, 154683, 8, 'Jam tangan rolex pria kw super keren', 'Putih', 'Stainless', 'Automatic tanpa baterai\r\nDiameter 4,5 cm\r\nHarga sudah termasuk box mika (ATC Upgrade box kancing jika ingin ganti box)', 240000, 'Jam-tangan-Rolex.jpg'),
(12, 154678, 10, 'Jam tangan rado Judile Rose Gold', 'Rosegold p', 'Stainless', 'Spesifikasi :\r\nBody jam berbahan stainless,\r\nMesin tenaga baterai,\r\nRantai pasir,\r\nAda tanggal,\r\nDiameter 3,6 cm\r\n', 240000, 'Rado-sand-rope.jpg'),
(13, 154679, 11, 'Seiko 5 Sport SKZ255 Men Diver', 'Black inde', 'Stainless', 'Jam Tangan Seiko 5 Sports SKZ255 Men Diver 200m Automatic Original Macho dan Kokoh Untuk Pria yang Gagah serta Stayles\r\n\r\nProduct Description:\r\nBrand : Seiko\r\nModel number : SKZ255\r\nGender : Men Watch\r\nCase Material : stainless steel anti karat dan kelupas\r\nCase Color : Black Indek White\r\nCase Diameter :  Bezel diameter:40.5mm , 50mm (including crown)\r\nBand Material : Stainless Steel Kwalitas Tinggi\r\nBand Color : Full Black\r\nMovement : Automatic  Buatan Japan\r\nMesin dibawah lisensi : Seiko Watch Corporation\r\nDisplay Type : Automatic\r\nFeatur : Menyalah dalam kegelapan ( Lumibrite glow-in-the-dark hands and markers )\r\nWater resistant\r\nOriginal Garansi Resmi Seiko 1 Tahun\r\nTermasuk Box Original Seiko + Buku Panduan + Kartu Garansi Seiko\r\nSangat cocok dipakai dalam segala suasana, resmi maupun santai\r\nDengan Modelnya yang keren ,mewah dan sempurna semakin menonjolkan sisi elegannya\r\nJam Tangan Seiko 5 Sports SKZ255 Men Diver 200m Automatic Original Anda Adalah Produk Berkualitas Tinggi yang memadukan kehalusan teknologi terbaru dari Jepang', 4150000, 'Seiko-5-Sports.jpg');

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
-- Indexes for table `halaman`
--
ALTER TABLE `halaman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`idkategori`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`idcart`);

--
-- Indexes for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`idmenu`);

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
  MODIFY `idadmin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `idcheck` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `idcustom` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `detailprofil`
--
ALTER TABLE `detailprofil`
  MODIFY `idd` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `halaman`
--
ALTER TABLE `halaman`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `idkategori` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154687;

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `idcart` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `idmenu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `merk`
--
ALTER TABLE `merk`
  MODIFY `idmerk` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `kodeorder` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `idproduk` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
