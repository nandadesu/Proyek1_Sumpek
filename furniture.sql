-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2020 at 04:44 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `furniture`
--

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `harga` int(10) NOT NULL,
  `pilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `id_transaksi`, `id_barang`, `nama_barang`, `jumlah`, `harga`, `pilihan`) VALUES
(1, 13, 2, 'Sofa', 1, 1300000, ''),
(2, 14, 2, 'Sofa', 1, 1300000, ''),
(3, 15, 3, 'Sofa 2', 1, 1250000, ''),
(4, 16, 3, 'Sofa 2', 1, 1250000, ''),
(5, 17, 2, 'Sofa', 1, 1300000, ''),
(6, 18, 2, 'Sofa', 1, 1300000, ''),
(7, 19, 8, 'Meja Belajar', 1, 1050000, ''),
(8, 20, 2, 'Sofa', 2, 1300000, ''),
(9, 21, 2, 'Sofa', 1, 1300000, ''),
(10, 21, 4, 'Meja', 1, 999000, ''),
(11, 22, 2, 'Sofa', 1, 1300000, '');

--
-- Triggers `invoice`
--
DELIMITER $$
CREATE TRIGGER `pesan` AFTER INSERT ON `invoice` FOR EACH ROW BEGIN
	UPDATE product SET stok = stok-NEW.jumlah
    WHERE id_barang = NEW.id_barang;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `deskripsi` varchar(225) NOT NULL,
  `kategori` varchar(60) NOT NULL,
  `harga` int(100) NOT NULL,
  `stok` int(4) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_barang`, `nama_barang`, `deskripsi`, `kategori`, `harga`, `stok`, `gambar`) VALUES
(1, 'Kursinya', 'Ini adalah kursi', 'kursi', 900000, 10, 'p1.jpg'),
(2, 'Sofa', 'ini adalah sofa', 'sofa', 1300000, 9, 'p2.jpg'),
(3, 'Sofa 2', 'ini adalah sofa', 'sofa', 1250000, 4, 'p3.jpg'),
(4, 'Meja', 'ini adalah meja', 'meja', 999000, 9, 'p4.jpg'),
(5, 'Meja Kerja', 'ini adalah meja kerja', 'meja', 950000, 10, 'p5.jpg'),
(6, 'Kursi Kerja', 'ini adalah kursi kerja', 'kursi', 760000, 10, 'p6.jpg'),
(7, 'Meja Tv', 'ini adlah meja tv', 'meja', 11500000, 5, 'p7.jpg'),
(8, 'Meja Belajar', 'ini adlah meja belajar', 'meja', 1050000, 4, 'p8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tglPesan` datetime NOT NULL,
  `batasBayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `nama`, `alamat`, `tglPesan`, `batasBayar`) VALUES
(1, 'nanda', 'semanggi barat', '2020-02-12 02:46:53', '2020-02-13 02:46:53'),
(2, 'nanda', 'semanggi barat', '2020-02-12 02:52:56', '2020-02-13 02:52:56'),
(3, 'nanda', 'semanggi barat', '2020-02-12 02:55:02', '2020-02-13 02:55:02'),
(4, 'nanda', 'semanggi barat', '2020-02-12 02:56:05', '2020-02-13 02:56:05'),
(5, 'nanda', 'semanggi barat', '2020-02-12 02:56:14', '2020-02-13 02:56:14'),
(6, 'nanda', 'semanggi barat', '2020-02-12 02:57:15', '2020-02-13 02:57:15'),
(7, 'nanda', 'semanggi barat', '2020-02-12 02:57:59', '2020-02-13 02:57:59'),
(8, 'nanda', 'semanggi barat', '2020-02-12 02:59:34', '2020-02-13 02:59:34'),
(9, 'nanda', 'semanggi barat', '2020-02-12 03:00:43', '2020-02-13 03:00:43'),
(10, 'nanda', 'semanggi barat', '2020-02-12 03:06:38', '2020-02-13 03:06:38'),
(11, 'nanda', 'semanggi barat', '2020-02-12 03:08:02', '2020-02-13 03:08:02'),
(12, 'nanda', 'semanggi barat', '2020-02-12 03:11:15', '2020-02-13 03:11:15'),
(13, 'nanda', 'semanggi barat', '2020-02-12 03:11:41', '2020-02-13 03:11:41'),
(14, 'nanda', 'semanggi barat', '2020-02-12 07:03:48', '2020-02-13 07:03:48'),
(15, 'nanda', 'semanggi barat', '2020-02-16 15:00:36', '2020-02-17 15:00:36'),
(16, 'nanda', 'semanggi barat', '2020-02-16 19:01:06', '2020-02-17 19:01:06'),
(17, 'nanda', 'semanggi barat', '2020-02-16 19:02:21', '2020-02-17 19:02:21'),
(18, 'nanda', 'semanggi barat', '2020-02-16 19:36:12', '2020-02-17 19:36:12'),
(19, 'gustiananda', 'semanggi barat', '2020-02-18 09:26:53', '2020-02-19 09:26:53'),
(20, 'as', 'malang', '2020-02-18 09:29:48', '2020-02-19 09:29:48'),
(21, 'nanda', 'semanggi barat', '2020-02-18 10:22:19', '2020-02-19 10:22:19'),
(22, '', '', '2020-02-24 22:35:05', '2020-02-25 22:35:05');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_id` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `role_id`) VALUES
(1, 'admin', 'admin', 'admin', 1),
(2, 'nanda', 'gin', '123', 2),
(3, 'gustiananda', 'gusti', '12345', 2),
(4, 'Riri', 'riri', '12345', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_transaksi` (`id_transaksi`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `invoice_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `invoice_ibfk_2` FOREIGN KEY (`id_barang`) REFERENCES `product` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
