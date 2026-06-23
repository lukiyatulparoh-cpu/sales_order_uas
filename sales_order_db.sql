-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2026 at 02:29 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sales_order_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_order`
--

CREATE TABLE `detail_order` (
  `id_detail` int(11) NOT NULL,
  `id_order` int(11) DEFAULT NULL,
  `id_produk` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `subtotal` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama_pelanggan` varchar(100) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `telepon` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama_pelanggan`, `alamat`, `telepon`) VALUES
(1, 'Andi Saputra', 'Tangerang', '0812345678976'),
(2, 'Budi Santoso', 'Jakarta', '08234567890'),
(3, 'Citra Lestari', 'Bandung', '08345678901'),
(4, 'Dewi Anggraini', 'Bekasi', '08456789012'),
(5, 'Andi Saputra', 'Tangerang', '08123456789'),
(6, 'Budi Santoso', 'Jakarta', '08234567890'),
(7, 'Citra Lestari', 'Bandung', '08345678901'),
(8, 'Dewi Anggraini', 'Bekasi', '08456789012'),
(9, 'Eko Saputra', 'Surabaya', '085612345001'),
(10, 'Fajar Nugroho', 'Semarang', '085612345002'),
(11, 'Gita Maharani', 'Bogor', '085612345003'),
(12, 'Hendra Wijaya', 'Depok', '085612345004'),
(13, 'Indah Permata', 'Yogyakarta', '085612345005'),
(14, 'Joko Susilo', 'Malang', '085612345006'),
(15, 'Kevin Pratama', 'Solo', '085612345007'),
(16, 'Lina Marlina', 'Cirebon', '085612345008'),
(17, 'Maya Sari', 'Medan', '085612345009'),
(18, 'Nina Karlina', 'Palembang', '085612345010'),
(19, 'Oscar Gunawan', 'Batam', '085612345011'),
(20, 'Putri Amelia', 'Pekanbaru', '085612345012'),
(21, 'Rudi Hartono', 'Makassar', '085612345013'),
(22, 'Siti Aisyah', 'Pontianak', '085612345014'),
(23, 'Teguh Santoso', 'Banjarmasin', '085612345015'),
(24, 'Umar Faruq', 'Samarinda', '085612345016'),
(25, 'Vina Lestari', 'Balikpapan', '085612345017'),
(26, 'Wahyu Setiawan', 'Manado', '085612345018'),
(27, 'Yusuf Maulana', 'Padang', '085612345019'),
(28, 'Zahra Anindya', 'Lampung', '085612345020');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `kode_produk` varchar(20) DEFAULT NULL,
  `nama_produk` varchar(100) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `kode_produk`, `nama_produk`, `harga`, `stok`) VALUES
(1, 'PRD01', 'Laptop Asus', 9500000, 10),
(2, 'PRD02', 'Mouse Logitech', 150000, 25),
(3, 'PRD03', 'Keyboard Gaming', 350000, 15),
(4, 'PRD04', 'Monitor Samsung', 2200000, 8),
(5, 'PRD05', 'Printer Epson', 1750000, 5),
(6, 'PRD06', 'Laptop Asus', 8500000, 10),
(7, 'PRD07', 'Mouse Logitech', 150000, 25),
(8, 'PRD08', 'Keyboard Gaming', 350000, 15),
(9, 'PRD09', 'Monitor Samsung', 2200000, 8),
(10, 'PRD10', 'Printer Epson', 1750000, 3),
(11, 'PRD11', 'Laptop ASUS Vivobook', 7800000, 8),
(12, 'PRD12', 'Laptop Lenovo IdeaPad', 7200000, 7),
(13, 'PRD13', 'Printer Epson L3210', 2450000, 10),
(14, 'PRD14', 'Mouse Wireless Logitech', 185000, 30),
(15, 'PRD15', 'Keyboard Mechanical RGB', 425000, 16),
(16, 'PRD16', 'Speaker Bluetooth JBL', 550000, 2),
(17, 'PRD17', 'Headset Gaming Rexus', 325000, 18),
(18, 'PRD18', 'Power Bank Xiaomi 20000mAh', 320000, 22),
(19, 'PRD19', 'Flashdisk Sandisk 64GB', 95000, 40),
(20, 'PRD20', 'Webcam HD Logitech', 375000, 11),
(21, 'PRD21', 'iPhone 13 128GB', 9500000, 6),
(22, 'PRD22', 'Samsung Galaxy A15', 3200000, 12),
(23, 'PRD23', 'Smartwatch Redmi Watch', 499000, 14),
(24, 'PRD24', 'Tablet Samsung Galaxy Tab', 4100000, 13),
(25, 'PRD25', 'Charger Fast Charging Anker', 175000, 28),
(26, 'PRD26', 'Earbuds Bluetooth Xiaomi', 299000, 20),
(27, 'PRD27', 'Kamera CCTV Hikvision', 850000, 9),
(28, 'PRD28', 'Router WiFi TP-Link', 450000, 17),
(29, 'PRD29', 'Lampu LED Philips', 85000, 35),
(30, 'PRD30', 'Vacuum Cleaner Sharp', 1250000, 8),
(31, 'PRD31', 'Air Fryer Philips', 1450000, 10),
(32, 'PRD32', 'Mesin Kopi Electrolux', 1750000, 5),
(33, 'PRD33', 'Kompor Induksi Modena', 2100000, 6),
(34, 'PRD34', 'Toaster Kris', 325000, 12),
(35, 'PRD35', 'Magic Com Yong Ma', 650000, 11),
(36, 'PRD36', 'Kipas Angin Dinding Miyako', 375000, 14),
(37, 'PRD37', 'TV Android Xiaomi 43 Inch', 4300000, 7),
(38, 'PRD38', 'Soundbar Samsung', 1800000, 6),
(39, 'PRD39', 'Mesin Cukur Philips', 275000, 19),
(40, 'PRD40', 'Mesin Vacuum Food Sealer', 895000, 15),
(42, 'PRD041', 'Power Bank 10000mAh', 250000, 60),
(43, 'PRD042', 'Power Bank 20000mAh', 450000, 40),
(44, 'PRD043', 'Charger Fast Charging', 150000, 70),
(45, 'PRD044', 'Kabel USB Type-C', 50000, 120),
(46, 'PRD045', 'Kabel Lightning iPhone', 95000, 90),
(47, 'PRD046', 'Smartwatch Xiaomi', 650000, 30),
(48, 'PRD047', 'Smartwatch Huawei', 1200000, 20),
(49, 'PRD048', 'Tablet Samsung Galaxy Tab', 4200000, 12),
(50, 'PRD049', 'Tablet Xiaomi Pad', 5100000, 10),
(51, 'PRD050', 'Router WiFi TP-Link', 450000, 25),
(52, 'PRD051', 'Router WiFi Dual Band', 850000, 20),
(53, 'PRD052', 'Access Point Ubiquiti', 1750000, 15),
(54, 'PRD053', 'CCTV Indoor HD', 550000, 30),
(55, 'PRD054', 'CCTV Outdoor HD', 750000, 25),
(56, 'PRD055', 'Proyektor Epson', 5200000, 8),
(57, 'PRD056', 'Proyektor BenQ', 6400000, 7),
(58, 'PRD057', 'TV LED Samsung 43 Inch', 5200000, 10),
(59, 'PRD058', 'TV LED LG 50 Inch', 7200000, 8),
(60, 'PRD059', 'Mesin Absensi Fingerprint', 1850000, 12),
(61, 'PRD060', 'UPS APC 1200VA', 2100000, 10);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id_sales` int(11) NOT NULL,
  `nama_sales` varchar(100) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id_sales`, `nama_sales`, `id_user`) VALUES
(1, 'Andi', 3),
(2, 'tina', 4);

-- --------------------------------------------------------

--
-- Table structure for table `sales_order`
--

CREATE TABLE `sales_order` (
  `id_order` int(11) NOT NULL,
  `kode_order` varchar(20) DEFAULT NULL,
  `tanggal` date DEFAULT curdate(),
  `id_pelanggan` int(11) DEFAULT NULL,
  `id_sales` int(11) DEFAULT NULL,
  `id_produk` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `total_harga` int(11) DEFAULT NULL,
  `status` enum('Draft','Dikirim','Selesai','Dibatalkan') NOT NULL DEFAULT 'Draft'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales_order`
--

INSERT INTO `sales_order` (`id_order`, `kode_order`, `tanggal`, `id_pelanggan`, `id_sales`, `id_produk`, `qty`, `total_harga`, `status`) VALUES
(2, 'ORD01', '2026-05-28', 2, 1, 36, 15, 5625000, 'Selesai'),
(5, 'ORD03', '2026-05-28', 8, 1, 23, 3, 1497000, 'Selesai'),
(6, 'ORD06', '2026-05-28', 8, 1, 7, 4, 600000, 'Selesai'),
(7, 'ORD07', '2026-05-28', 8, 1, 7, 4, 600000, 'Selesai'),
(8, 'ORD08', '2026-05-28', 7, 1, 35, 2, 1300000, 'Selesai'),
(9, 'ORD009', '2026-05-28', 7, 1, 3, 3, 1050000, 'Selesai'),
(10, 'ORD010', '2026-05-31', 4, 2, 29, 20, 1700000, 'Selesai'),
(11, 'ORD011', '2026-06-21', 13, 2, 16, 11, 6050000, 'Selesai'),
(12, 'ORD012', '2026-06-21', 27, 2, 24, 10, 41000000, 'Selesai'),
(13, 'ORD013', '2026-06-21', 18, 2, 10, 3, 5250000, 'Selesai');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` enum('admin','sales','manager') DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `last_login` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `created_at`, `last_login`) VALUES
(3, 'andi', '03339dc0dff443f15c254baccde9bece', 'sales', '2026-05-28 08:39:00', '2026-06-02 09:31:36'),
(4, 'tina', '4e817b7b5292b8e002d7d90290210b0a', 'sales', '2026-05-28 10:37:48', '2026-06-21 08:23:06'),
(5, 'Lulu', 'a73d49f03849fa768255780c7f4d2cec', 'manager', '2026-05-31 10:20:44', '2026-06-21 12:04:50'),
(7, 'ziddan', '64fd550e17812e50780c0b19a9610e8a', 'admin', '2026-06-20 16:20:41', '2026-06-21 11:52:27'),
(8, 'admin', '0192023a7bbd73250516f069df18b500', 'admin', '2026-06-21 10:04:12', '2026-06-22 17:45:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_order`
--
ALTER TABLE `detail_order`
  ADD PRIMARY KEY (`id_detail`),
  ADD KEY `fk_detail_order` (`id_order`),
  ADD KEY `fk_detail_produk` (`id_produk`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id_sales`),
  ADD KEY `fk_sales_user` (`id_user`);

--
-- Indexes for table `sales_order`
--
ALTER TABLE `sales_order`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `fk_pelanggan` (`id_pelanggan`),
  ADD KEY `fk_produk` (`id_produk`),
  ADD KEY `fk_sales_order_sales` (`id_sales`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_order`
--
ALTER TABLE `detail_order`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id_sales` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sales_order`
--
ALTER TABLE `sales_order`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_order`
--
ALTER TABLE `detail_order`
  ADD CONSTRAINT `fk_detail_order` FOREIGN KEY (`id_order`) REFERENCES `sales_order` (`id_order`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_detail_produk` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `fk_sales_user` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `sales_order`
--
ALTER TABLE `sales_order`
  ADD CONSTRAINT `fk_pelanggan` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id_pelanggan`),
  ADD CONSTRAINT `fk_produk` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`),
  ADD CONSTRAINT `fk_sales` FOREIGN KEY (`id_sales`) REFERENCES `sales` (`id_sales`),
  ADD CONSTRAINT `fk_sales_order_sales` FOREIGN KEY (`id_sales`) REFERENCES `sales` (`id_sales`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
