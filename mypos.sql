-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2021 at 09:33 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mypos`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `address` text NOT NULL,
  `description` text,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `name`, `phone`, `address`, `description`, `created`, `updated`) VALUES
(1, 'PT. Ultimatum', '081232388', 'Cibatu', 'kosong isilah', '2021-09-20 10:02:45', '2021-09-20 10:07:54');

-- --------------------------------------------------------

--
-- Table structure for table `p_category`
--

CREATE TABLE `p_category` (
  `category_id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p_category`
--

INSERT INTO `p_category` (`category_id`, `name`, `created`, `updated`) VALUES
(3, 'Makanan', '2021-09-20 11:08:49', NULL),
(4, 'Minuman', '2021-09-20 11:08:59', NULL),
(8, 'Coba', '2021-09-29 16:23:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `p_item`
--

CREATE TABLE `p_item` (
  `item_id` int(11) NOT NULL,
  `barcode` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `stock` int(10) NOT NULL DEFAULT '0',
  `image` varchar(100) DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p_item`
--

INSERT INTO `p_item` (`item_id`, `barcode`, `name`, `category_id`, `unit_id`, `price`, `stock`, `image`, `created`, `updated`) VALUES
(1, 'A001', 'Tahu', 3, 4, 10000, 10, 'item-210922-5a9b937dcb.jpg', '2021-09-21 16:03:02', '2021-09-22 10:08:03'),
(3, 'A002', 'chiki chikian', 3, 4, 15000, 9, NULL, '2021-09-21 16:06:06', '2021-09-21 17:05:00'),
(5, 'A004', 'Isian', 3, 4, 12000, 20, 'item-210922-2fa1baa982.JPG', '2021-09-22 10:29:04', NULL),
(6, 'A007', 'asa', 3, 3, 12121, 5, 'item-211117-e0728cd484.jpg', '2021-09-22 10:30:15', '2021-11-17 09:22:16'),
(7, 'A009', 'qwqw', 3, 3, 11222, 0, NULL, '2021-09-22 10:35:18', NULL),
(8, 'A0010', 'qwqw', 4, 6, 12000, 0, NULL, '2021-09-22 10:35:18', NULL),
(9, 'A0011', 'qwqw', 4, 6, 12000, 0, NULL, '2021-09-24 13:49:07', NULL),
(10, 'A0012', 'qwqw', 4, 6, 12000, 0, NULL, '2021-09-24 13:49:07', NULL),
(11, 'A0013', 'qwqw', 4, 6, 12000, 0, NULL, '2021-09-24 13:49:07', NULL),
(12, 'A0014', 'qwqw', 4, 6, 12000, 0, NULL, '2021-09-24 13:49:07', NULL),
(13, 'A0015', 'qwqw', 4, 6, 12000, 10, NULL, '2021-09-24 13:49:07', NULL),
(14, 'A0016', 'qwqw', 4, 6, 12000, 3, NULL, '2021-09-24 13:49:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `p_unit`
--

CREATE TABLE `p_unit` (
  `unit_id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p_unit`
--

INSERT INTO `p_unit` (`unit_id`, `name`, `created`, `updated`) VALUES
(3, 'Kilogram', '2021-09-20 11:08:49', '2021-09-20 11:43:39'),
(4, 'Pcs', '2021-09-20 11:08:59', '2021-09-20 11:43:50'),
(6, 'Pack', '2021-09-20 13:05:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supplier_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` text NOT NULL,
  `description` text,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supplier_id`, `name`, `phone`, `address`, `description`, `created`, `updated`) VALUES
(2, 'PT. Onic nih', '021567890', 'Cibiru Bandung', '-', '2021-09-16 10:23:15', '2021-09-16 11:57:38'),
(3, 'ABC', '91721233', 'Depok', 'iop', '2021-09-16 11:38:26', '2021-10-06 10:46:34'),
(4, 'Baru', '08234211990', 'Bogor', 'coba', '2021-10-06 10:42:55', NULL),
(5, 'Baru', '08234211990', 'Bogor', 'coba', '2021-10-06 10:46:16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_sale`
--

CREATE TABLE `t_sale` (
  `sale_id` int(11) NOT NULL,
  `invoice` varchar(50) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `total_price` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `final_price` int(11) NOT NULL,
  `cash` int(11) NOT NULL,
  `remaining` int(11) NOT NULL,
  `note` text NOT NULL,
  `date` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_sale`
--

INSERT INTO `t_sale` (`sale_id`, `invoice`, `customer_id`, `total_price`, `discount`, `final_price`, `cash`, `remaining`, `note`, `date`, `user_id`, `created`) VALUES
(1, 'MP2109280001', 1, 10000, 1000, 9000, 10000, 1000, '-', '2021-09-29 00:00:00', 1, '2021-09-29 10:58:58'),
(2, 'MP2109280002', 1, 10000, 1000, 9000, 10000, 1000, '-', '2021-09-29 00:00:00', 1, '2021-09-29 10:58:58'),
(3, 'MP2109290001', 1, 10000, 1000, 9000, 10000, 1000, '-', '2021-09-29 00:00:00', 1, '2021-09-29 10:58:58'),
(4, 'MP2111170001', 1, 10000, 1000, 9000, 10000, 1000, '-', '2021-11-17 00:00:00', 1, '2021-09-29 10:58:58');

-- --------------------------------------------------------

--
-- Table structure for table `t_stock`
--

CREATE TABLE `t_stock` (
  `stock_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `type` enum('in','out') NOT NULL,
  `detail` text NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `supplier_id` int(11) DEFAULT NULL,
  `qty` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_stock`
--

INSERT INTO `t_stock` (`stock_id`, `item_id`, `type`, `detail`, `customer_id`, `supplier_id`, `qty`, `tanggal`, `created`, `user_id`) VALUES
(1, 3, 'in', 'stock 1', NULL, 3, 10, '2021-09-24', '2021-09-24 15:55:14', 1),
(3, 13, 'in', 'bungkusan', NULL, 2, 10, '2021-09-27', '2021-09-27 08:40:30', 1),
(16, 3, 'out', 'coba test', NULL, NULL, 1, '2021-09-30', '2021-09-30 13:28:50', 1),
(17, 1, 'in', 'barang masuk', NULL, 2, 10, '2021-09-30', '2021-09-30 14:31:03', 1),
(18, 5, 'in', 'masuk barang', NULL, 3, 20, '2021-10-01', '2021-10-01 11:17:56', 1),
(19, 6, 'in', 'tes', NULL, 2, 5, '2021-10-01', '2021-10-01 11:21:38', 1),
(20, 14, 'in', 'stock in', NULL, 2, 3, '2021-11-16', '2021-11-16 09:59:58', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(200) DEFAULT NULL,
  `level` int(1) NOT NULL COMMENT '1 : admin, 2 : user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `name`, `address`, `level`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Sense Fx', 'Jakarta', 1),
(2, 'user1', 'b3daa77b4c04a9551b8781d03191fe098f325e67', 'Kohler', 'Depok', 2),
(3, 'grealish', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'asassd', 'Jamaica', 2),
(4, 'tyutyu', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'Abcdef', 'Bogor', 2),
(6, 'mbembe', '8b6ef3ed116ed8a8d8f8bd3cbae0abff8874ae68', 'Kylian Mbappe', 'jepang', 2),
(7, 'coba12', '34f70892f40cd3b2a340769c070c4f1a02335d87', 'COba coba', 'Jakarta', 2),
(8, 'mbembe', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 'Kylian Mbappe Junior', 'jepang', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `p_category`
--
ALTER TABLE `p_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `p_item`
--
ALTER TABLE `p_item`
  ADD PRIMARY KEY (`item_id`),
  ADD UNIQUE KEY `barcode` (`barcode`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `unit_id` (`unit_id`);

--
-- Indexes for table `p_unit`
--
ALTER TABLE `p_unit`
  ADD PRIMARY KEY (`unit_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplier_id`);

--
-- Indexes for table `t_sale`
--
ALTER TABLE `t_sale`
  ADD PRIMARY KEY (`sale_id`);

--
-- Indexes for table `t_stock`
--
ALTER TABLE `t_stock`
  ADD PRIMARY KEY (`stock_id`),
  ADD KEY `item_id` (`item_id`),
  ADD KEY `supplier_id` (`supplier_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `p_category`
--
ALTER TABLE `p_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `p_item`
--
ALTER TABLE `p_item`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `p_unit`
--
ALTER TABLE `p_unit`
  MODIFY `unit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `supplier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `t_sale`
--
ALTER TABLE `t_sale`
  MODIFY `sale_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `t_stock`
--
ALTER TABLE `t_stock`
  MODIFY `stock_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `p_item`
--
ALTER TABLE `p_item`
  ADD CONSTRAINT `p_item_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `p_category` (`category_id`),
  ADD CONSTRAINT `p_item_ibfk_2` FOREIGN KEY (`unit_id`) REFERENCES `p_unit` (`unit_id`);

--
-- Constraints for table `t_stock`
--
ALTER TABLE `t_stock`
  ADD CONSTRAINT `t_stock_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `p_item` (`item_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `t_stock_ibfk_2` FOREIGN KEY (`supplier_id`) REFERENCES `supplier` (`supplier_id`),
  ADD CONSTRAINT `t_stock_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `t_stock_ibfk_4` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
