-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2016 at 10:23 AM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ass_inf205_pd01172`
--
CREATE DATABASE IF NOT EXISTS `ass_inf205_pd01172` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `ass_inf205_pd01172`;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `images` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=42 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `images`) VALUES
(1, 'Đầm Công Sở', 'damcongso5.png'),
(2, 'Áo Sơ Mi', ''),
(3, 'Quần Tây', ''),
(4, 'Măng Tô Nữ', ''),
(5, 'Vest nữ', '');

-- --------------------------------------------------------

--
-- Table structure for table `custommer`
--

CREATE TABLE IF NOT EXISTS `custommer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `oder`
--

CREATE TABLE IF NOT EXISTS `oder` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `total_quantity` int(11) NOT NULL,
  `date_oder` date NOT NULL,
  `date_ship` date NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `custommer_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `oder_custommer` (`custommer_id`),
  KEY `oder_vendor` (`vendor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `oder_description`
--

CREATE TABLE IF NOT EXISTS `oder_description` (
  `oder_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`oder_id`,`product_id`),
  KEY `oder_description_product` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oder_status`
--

CREATE TABLE IF NOT EXISTS `oder_status` (
  `id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `category` int(11) DEFAULT NULL,
  `price` decimal(15,0) NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `image` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price_sale` decimal(15,0) DEFAULT NULL,
  `date_import` date DEFAULT NULL,
  `short_description` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=70 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `category`, `price`, `description`, `image`, `price_sale`, `date_import`, `short_description`) VALUES
(49, 'Đầm công sở KK59-22', NULL, '400000', '', 'dam-cong-so-kk59-22.jpg', '0', '2016-08-18', NULL),
(51, 'Đầm công sở KK58-25', NULL, '410000', '<p>M&agrave;u sắc:&nbsp;Nền x&aacute;m phối họa tiết n&acirc;u đỏ</p>\r\n\r\n<p>Chất liệu:&nbsp;Thun cotton phối lưới</p>\r\n', 'dam-cong-so-kk58-25.jpg', '0', '2016-08-18', NULL),
(52, 'Đầm công sở KK58-21', NULL, '450000', '<p>M&agrave;u sắc:&nbsp;Nền xanh đen phối bi xanh ngọc</p>\r\n\r\n<p>Chất liệu:&nbsp;Ch&acirc;u toan</p>\r\n', 'dam-cong-so-kk58-21.jpg', '0', '2016-08-18', NULL),
(53, 'Đầm công sở KK58-19', NULL, '420000', '<p>M&agrave;u sắc:&nbsp;Nền trắng chấm bi đen</p>\r\n\r\n<p>Chất liệu:&nbsp;Bố</p>\r\n', 'dam-cong-so-kk58-19.jpg', '0', '2016-08-18', NULL),
(54, 'LS635 Áo sơ mi nữ cổ tròn', NULL, '350000', '<p>Chất liệu chiffon H&agrave;n Quốc, co gi&atilde;n hai chiều tho&aacute;ng m&aacute;t</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'LS635-Ao-so-mi-nu-co-tron-co-no-1-690x932.jpg', '0', '2016-08-18', NULL),
(63, 'LS638 Áo sơ mi trắng xếp li', NULL, '500000', '', 'LS638-Ao-so-mi-trang-xep-li-1-690x932.jpg', '450000', '2016-08-18', NULL),
(64, 'Áo sơ mi đen kẻ sọc trắng', NULL, '350000', '', 'LS641-Ao-so-mi-ke-co-tron-1-690x932.jpg', '0', '2016-08-18', NULL),
(65, 'Áo sơ mi cổ nơ (tím than/trắng)', NULL, '500000', '', 'LS634-Ao-so-mi-co-no-tay-hen-1-690x932.jpg', '0', '2016-08-18', NULL),
(66, 'Quần công sở nữ ống côn', NULL, '350000', '', 'Q14-Quan-tay-nu-ong-dung-2-690x806.jpg', '0', '2016-08-18', NULL),
(67, 'Quần công sở nữ dáng ôm', NULL, '350000', '', 'Q11-Quan-tay-cong-so-1-690x932 (1).jpg', '0', '2016-08-18', NULL),
(68, 'Q08 Quần tây nữ ống ôm', NULL, '350000', '', 'Q08-Quan-tay-nu-1.jpg', '0', '2016-08-18', NULL),
(69, 'Q09 Quần tây nữ ống đứng', NULL, '350000', '', 'Q09-Quan-tay-nu-ong-dung (1).jpg', '0', '2016-08-18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE IF NOT EXISTS `product_category` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`product_id`,`category_id`),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`product_id`, `category_id`) VALUES
(49, 1),
(51, 1),
(52, 1),
(53, 1),
(54, 2),
(63, 2),
(64, 2),
(65, 2),
(66, 3),
(67, 3),
(68, 3),
(69, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `vendor_id` int(11) DEFAULT NULL,
  `username` varchar(56) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(56) COLLATE utf8_unicode_ci NOT NULL,
  `level` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `User_vendor` (`vendor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `vendor_id`, `username`, `password`, `level`) VALUES
(1, 1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1);

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE IF NOT EXISTS `vendor` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`id`, `name`, `email`, `address`, `phone`) VALUES
(1, 'Phạm Thanh Tuấn', 'phamthanhtuan1990.qn@gmail.com', '146 Nguyễn Thị Thập Đà Nẵng', '01678916395');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `oder`
--
ALTER TABLE `oder`
  ADD CONSTRAINT `oder_custommer` FOREIGN KEY (`custommer_id`) REFERENCES `custommer` (`id`),
  ADD CONSTRAINT `oder_vendor` FOREIGN KEY (`vendor_id`) REFERENCES `vendor` (`id`);

--
-- Constraints for table `oder_description`
--
ALTER TABLE `oder_description`
  ADD CONSTRAINT `oder_description_oder` FOREIGN KEY (`oder_id`) REFERENCES `oder` (`id`),
  ADD CONSTRAINT `oder_description_product` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Constraints for table `product_category`
--
ALTER TABLE `product_category`
  ADD CONSTRAINT `product_category_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_category_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `User_vendor` FOREIGN KEY (`vendor_id`) REFERENCES `vendor` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
