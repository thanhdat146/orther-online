-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 19, 2019 at 04:14 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food`
--

-- --------------------------------------------------------

--
-- Table structure for table `anhsanpham`
--

DROP TABLE IF EXISTS `anhsanpham`;
CREATE TABLE IF NOT EXISTS `anhsanpham` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_sanpham` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_AnhSanPham` (`id_sanpham`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `chitietdonhang`
--

DROP TABLE IF EXISTS `chitietdonhang`;
CREATE TABLE IF NOT EXISTS `chitietdonhang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_donhang` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `tensp` varchar(255) NOT NULL,
  `soluong` int(11) NOT NULL,
  `dongia` int(11) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_DH_CTDH` (`id_donhang`),
  KEY `FK_CTDH_SP` (`id_sp`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`id`, `id_donhang`, `id_sp`, `tensp`, `soluong`, `dongia`, `created_at`, `updated_at`) VALUES
(4, 2, 12, 'Phở Lòng Gà', 1, 32000, '2019-07-02 06:21:44', '2019-07-02 06:21:44'),
(5, 2, 1, 'Phở Bò', 1, 35000, '2019-07-02 06:21:44', '2019-07-02 06:21:44'),
(6, 2, 2, 'Phở Bò Tái', 1, 36000, '2019-07-02 06:21:44', '2019-07-02 06:21:44'),
(7, 3, 12, 'Phở Lòng Gà', 1, 32000, '2019-07-02 10:48:51', '2019-07-02 10:48:51'),
(8, 4, 1, 'Phở Bò', 1, 35000, '2019-07-03 04:01:18', '2019-07-03 04:01:18'),
(9, 4, 15, 'Bánh Mì Thập Cẩm', 1, 22000, '2019-07-03 04:01:18', '2019-07-03 04:01:18'),
(10, 5, 15, 'Bánh Mì Thập Cẩm', 2, 22000, '2019-07-04 02:37:08', '2019-07-04 02:37:08'),
(11, 5, 1, 'Phở Bò', 1, 35000, '2019-07-04 02:37:08', '2019-07-04 02:37:08'),
(12, 6, 26, 'Trà Sữa Bánh Pudding', 1, 45000, '2019-07-08 00:18:35', '2019-07-08 00:18:35'),
(13, 7, 1, 'Phở Bò', 1, 35000, '2019-07-08 03:58:32', '2019-07-08 03:58:32'),
(14, 8, 14, 'Bánh Mì Thịt', 1, 22000, '2019-07-08 06:07:48', '2019-07-08 06:07:48'),
(15, 9, 26, 'Trà Sữa Bánh Pudding', 4, 45000, '2019-07-08 07:03:15', '2019-07-08 07:03:15'),
(16, 9, 12, 'Phở Lòng Gà', 1, 32000, '2019-07-08 07:03:15', '2019-07-08 07:03:15'),
(17, 10, 26, 'Trà Sữa Bánh Pudding', 4, 45000, '2019-07-08 07:03:40', '2019-07-08 07:03:40'),
(18, 10, 12, 'Phở Lòng Gà', 1, 32000, '2019-07-08 07:03:40', '2019-07-08 07:03:40'),
(19, 11, 26, 'Trà Sữa Bánh Pudding', 4, 45000, '2019-07-08 07:04:41', '2019-07-08 07:04:41'),
(20, 11, 12, 'Phở Lòng Gà', 1, 32000, '2019-07-08 07:04:41', '2019-07-08 07:04:41'),
(21, 12, 26, 'Trà Sữa Bánh Pudding', 4, 45000, '2019-07-08 07:05:33', '2019-07-08 07:05:33'),
(22, 12, 12, 'Phở Lòng Gà', 1, 32000, '2019-07-08 07:05:33', '2019-07-08 07:05:33'),
(23, 13, 26, 'Trà Sữa Bánh Pudding', 4, 45000, '2019-07-08 07:10:57', '2019-07-08 07:10:57'),
(24, 13, 12, 'Phở Lòng Gà', 1, 32000, '2019-07-08 07:10:57', '2019-07-08 07:10:57'),
(25, 14, 26, 'Trà Sữa Bánh Pudding', 4, 45000, '2019-07-08 07:12:34', '2019-07-08 07:12:34'),
(26, 14, 12, 'Phở Lòng Gà', 1, 32000, '2019-07-08 07:12:34', '2019-07-08 07:12:34'),
(27, 15, 12, 'Phở Lòng Gà', 1, 32000, '2019-07-08 07:12:59', '2019-07-08 07:12:59'),
(28, 16, 15, 'Bánh Mì Thập Cẩm', 1, 22000, '2019-07-08 20:37:24', '2019-07-08 20:37:24'),
(29, 17, 15, 'Bánh Mì Thập Cẩm', 1, 22000, '2019-07-08 20:39:41', '2019-07-08 20:39:41'),
(30, 18, 15, 'Bánh Mì Thập Cẩm', 1, 22000, '2019-07-08 20:43:11', '2019-07-08 20:43:11'),
(31, 19, 15, 'Bánh Mì Thập Cẩm', 1, 22000, '2019-07-08 20:52:05', '2019-07-08 20:52:05'),
(32, 20, 15, 'Bánh Mì Thập Cẩm', 1, 22000, '2019-07-08 20:56:16', '2019-07-08 20:56:16'),
(33, 21, 15, 'Bánh Mì Thập Cẩm', 1, 22000, '2019-07-08 20:57:49', '2019-07-08 20:57:49'),
(34, 22, 15, 'Bánh Mì Thập Cẩm', 1, 22000, '2019-07-08 21:02:11', '2019-07-08 21:02:11'),
(35, 23, 15, 'Bánh Mì Thập Cẩm', 1, 22000, '2019-07-08 21:06:17', '2019-07-08 21:06:17'),
(36, 24, 15, 'Bánh Mì Thập Cẩm', 1, 22000, '2019-07-08 21:12:57', '2019-07-08 21:12:57'),
(37, 25, 15, 'Bánh Mì Thập Cẩm', 1, 22000, '2019-07-08 21:20:03', '2019-07-08 21:20:03'),
(38, 26, 15, 'Bánh Mì Thập Cẩm', 1, 22000, '2019-07-08 21:27:38', '2019-07-08 21:27:38'),
(39, 27, 15, 'Bánh Mì Thập Cẩm', 1, 22000, '2019-07-08 21:34:45', '2019-07-08 21:34:45'),
(40, 28, 15, 'Bánh Mì Thập Cẩm', 1, 22000, '2019-07-08 21:35:52', '2019-07-08 21:35:52'),
(41, 29, 15, 'Bánh Mì Thập Cẩm', 1, 22000, '2019-07-08 21:41:27', '2019-07-08 21:41:27'),
(42, 30, 15, 'Bánh Mì Thập Cẩm', 2, 22000, '2019-07-08 22:18:51', '2019-07-08 22:18:51'),
(43, 31, 15, 'Bánh Mì Thập Cẩm', 2, 22000, '2019-07-08 22:19:51', '2019-07-08 22:19:51'),
(44, 32, 15, 'Bánh Mì Thập Cẩm', 2, 22000, '2019-07-08 22:21:18', '2019-07-08 22:21:18'),
(45, 33, 15, 'Bánh Mì Thập Cẩm', 2, 22000, '2019-07-08 22:29:28', '2019-07-08 22:29:28'),
(46, 34, 4, 'Phở Bò Tái Gân', 1, 36000, '2019-07-08 22:31:13', '2019-07-08 22:31:13'),
(47, 35, 14, 'Bánh Mì Thịt', 1, 22000, '2019-07-08 22:32:51', '2019-07-08 22:32:51'),
(48, 36, 12, 'Phở Lòng Gà', 1, 32000, '2019-07-09 00:26:18', '2019-07-09 00:26:18'),
(49, 37, 25, 'Trà Sữa Truyền Thống', 2, 30000, '2019-07-09 01:32:28', '2019-07-09 01:32:28');

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

DROP TABLE IF EXISTS `danhmuc`;
CREATE TABLE IF NOT EXISTS `danhmuc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ten` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `ten`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Món nước', 'mon_nuoc', 1, '2019-06-18 17:00:00', '2019-06-18 17:00:00'),
(2, 'Món Khô', 'mon_kho', 1, '2019-06-18 17:00:00', '2019-06-18 17:00:00'),
(3, 'Thức Uống', 'thuc_uong', 1, '2019-06-18 17:00:00', '2019-06-18 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `dondathang`
--

DROP TABLE IF EXISTS `dondathang`;
CREATE TABLE IF NOT EXISTS `dondathang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_khachhang` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `tongtien` double NOT NULL,
  `note` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_KH_DH` (`id_khachhang`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dondathang`
--

INSERT INTO `dondathang` (`id`, `id_khachhang`, `date`, `tongtien`, `note`, `created_at`, `updated_at`) VALUES
(2, 3, '2019-07-02 13:21:44', 124630, '222knkn', '2019-07-02 06:21:44', '2019-07-02 06:21:44'),
(3, 4, '2019-07-02 17:48:51', 38720, '12233', '2019-07-02 10:48:51', '2019-07-02 10:48:51'),
(4, 5, '2019-07-03 11:01:18', 68970, '1h Giao Hàng', '2019-07-03 04:01:18', '2019-07-03 04:01:18'),
(5, 6, '2019-07-04 09:37:08', 95590, 'wdsadsda', '2019-07-04 02:37:08', '2019-07-04 02:37:08'),
(6, 7, '2019-07-08 07:18:34', 54450, 'cfsfd', '2019-07-08 00:18:35', '2019-07-08 00:18:35'),
(7, 8, '2019-07-08 10:58:32', 42350, 'dcs', '2019-07-08 03:58:32', '2019-07-08 03:58:32'),
(8, 9, '2019-07-08 13:07:48', 26620, 'aaaaa', '2019-07-08 06:07:48', '2019-07-08 06:07:48'),
(9, 10, '2019-07-08 14:03:14', 256520, 'sdad', '2019-07-08 07:03:14', '2019-07-08 07:03:14'),
(10, 11, '2019-07-08 14:03:40', 256520, 'sdad', '2019-07-08 07:03:40', '2019-07-08 07:03:40'),
(11, 12, '2019-07-08 14:04:41', 256520, 'sdad', '2019-07-08 07:04:41', '2019-07-08 07:04:41'),
(12, 13, '2019-07-08 14:05:33', 256520, 'sdad', '2019-07-08 07:05:33', '2019-07-08 07:05:33'),
(13, 14, '2019-07-08 14:10:57', 256520, 'sdad', '2019-07-08 07:10:57', '2019-07-08 07:10:57'),
(14, 15, '2019-07-08 14:12:34', 256520, 'sdad', '2019-07-08 07:12:34', '2019-07-08 07:12:34'),
(15, 16, '2019-07-08 14:12:59', 38720, 'xz', '2019-07-08 07:12:59', '2019-07-08 07:12:59'),
(16, 17, '2019-07-09 03:37:24', 26620, 'aaa', '2019-07-08 20:37:24', '2019-07-08 20:37:24'),
(17, 18, '2019-07-09 03:39:41', 26620, 'aa', '2019-07-08 20:39:41', '2019-07-08 20:39:41'),
(18, 19, '2019-07-09 03:43:11', 26620, 'aa', '2019-07-08 20:43:11', '2019-07-08 20:43:11'),
(19, 20, '2019-07-09 03:52:05', 26620, 'dsa', '2019-07-08 20:52:05', '2019-07-08 20:52:05'),
(20, 21, '2019-07-09 03:56:16', 26620, 'sdsada', '2019-07-08 20:56:16', '2019-07-08 20:56:16'),
(21, 22, '2019-07-09 03:57:49', 26620, 'dsadsad', '2019-07-08 20:57:49', '2019-07-08 20:57:49'),
(22, 23, '2019-07-09 04:02:11', 26620, 'dsad', '2019-07-08 21:02:11', '2019-07-08 21:02:11'),
(23, 24, '2019-07-09 04:06:17', 26620, 'sdasad', '2019-07-08 21:06:17', '2019-07-08 21:06:17'),
(24, 25, '2019-07-09 04:12:57', 26620, 'dsad', '2019-07-08 21:12:57', '2019-07-08 21:12:57'),
(25, 26, '2019-07-09 04:20:03', 26620, 'dsadsa', '2019-07-08 21:20:03', '2019-07-08 21:20:03'),
(26, 27, '2019-07-09 04:27:38', 26620, 'sdasa', '2019-07-08 21:27:38', '2019-07-08 21:27:38'),
(27, 28, '2019-07-09 04:34:45', 26620, 'đá', '2019-07-08 21:34:45', '2019-07-08 21:34:45'),
(28, 29, '2019-07-09 04:35:52', 26620, 'dsad', '2019-07-08 21:35:52', '2019-07-08 21:35:52'),
(29, 30, '2019-07-09 04:41:27', 26620, 'sdasd', '2019-07-08 21:41:27', '2019-07-08 21:41:27'),
(30, 31, '2019-07-09 05:18:51', 53240, 'dsad', '2019-07-08 22:18:51', '2019-07-08 22:18:51'),
(31, 32, '2019-07-09 05:19:51', 53240, 'dsad', '2019-07-08 22:19:51', '2019-07-08 22:19:51'),
(32, 33, '2019-07-09 05:21:18', 53240, 'â', '2019-07-08 22:21:18', '2019-07-08 22:21:18'),
(33, 34, '2019-07-09 05:29:28', 53240, 'dsada', '2019-07-08 22:29:28', '2019-07-08 22:29:28'),
(34, 35, '2019-07-09 05:31:13', 43560, 'aaa', '2019-07-08 22:31:13', '2019-07-08 22:31:13'),
(35, 36, '2019-07-09 05:32:51', 26620, 'đá', '2019-07-08 22:32:51', '2019-07-08 22:32:51'),
(36, 37, '2019-07-09 07:26:18', 38720, 'afsfs', '2019-07-09 00:26:18', '2019-07-09 00:26:18'),
(37, 38, '2019-07-09 08:32:28', 72600, 'jjjj', '2019-07-09 01:32:28', '2019-07-09 01:32:28');

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

DROP TABLE IF EXISTS `donhang`;
CREATE TABLE IF NOT EXISTS `donhang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `khachhang` varchar(255) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `note` varchar(255) NOT NULL,
  `thongtinhang` varchar(255) NOT NULL,
  `tongtien` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `donhang`
--

INSERT INTO `donhang` (`id`, `khachhang`, `diachi`, `phone`, `email`, `note`, `thongtinhang`, `tongtien`, `created_at`, `updated_at`) VALUES
(7, 'Nguyễn Thành Đạt', 'Quận 5 HCM', '0337720909', 'dat_nt146@yahoo.com', '1h Giao Hàng', 'Phở Bò x 1 Bánh Mì Thập Cẩm x 1 ', '57,000.00', '2019-07-03 04:01:18', '2019-07-03 04:01:18'),
(8, 'Nguyễn Thành Đạt', 'hcm', '03333', 'admin@gmail.com', 'wdsadsda', 'Bánh Mì Thập Cẩm x 2 Phở Bò x 1 ', '79,000.00', '2019-07-04 02:37:08', '2019-07-04 02:37:08'),
(10, 'sxdascca', 'thanhdat', '0337720909', 'admin@gmail.com', 'dcs', 'Phở Bò x 1 ', '35,000.00', '2019-07-08 03:58:32', '2019-07-08 03:58:32'),
(11, 'Anh Quốc', '56', '0386201254', 'anhquoc@gmail.com', 'aaaaa', 'Bánh Mì Thịt x 1 ', '22,000.00', '2019-07-08 06:07:48', '2019-07-08 06:07:48'),
(12, 'dat', 'đasa', 'sad', 'scsg.dat146@gmail.com', 'sdad', 'Trà Sữa Bánh Pudding x 4 Phở Lòng Gà x 1 ', '212,000.00', '2019-07-08 07:02:46', '2019-07-08 07:02:46'),
(13, 'dat', 'đasa', '11112121', 'scsg.dat146@gmail.com', 'sdad', 'Trà Sữa Bánh Pudding x 4 Phở Lòng Gà x 1 ', '212,000.00', '2019-07-08 07:03:14', '2019-07-08 07:03:14'),
(14, 'dat', 'đasa', '11112121', 'scsg.dat146@gmail.com', 'sdad', 'Trà Sữa Bánh Pudding x 4 Phở Lòng Gà x 1 ', '212,000.00', '2019-07-08 07:03:39', '2019-07-08 07:03:39'),
(15, 'dat', 'đasa', '11112121', 'scsg.dat146@gmail.com', 'sdad', 'Trà Sữa Bánh Pudding x 4 Phở Lòng Gà x 1 ', '212,000.00', '2019-07-08 07:04:41', '2019-07-08 07:04:41'),
(16, 'dat', 'đasa', '11112121', 'scsg.dat146@gmail.com', 'sdad', 'Trà Sữa Bánh Pudding x 4 Phở Lòng Gà x 1 ', '212,000.00', '2019-07-08 07:05:33', '2019-07-08 07:05:33'),
(17, 'dat', 'đasa', '11112121', 'scsg.dat146@gmail.com', 'sdad', 'Trà Sữa Bánh Pudding x 4 Phở Lòng Gà x 1 ', '212,000.00', '2019-07-08 07:10:57', '2019-07-08 07:10:57'),
(18, 'dat', 'đasa', '11112121', 'scsg.dat146@gmail.com', 'sdad', 'Trà Sữa Bánh Pudding x 4 Phở Lòng Gà x 1 ', '212,000.00', '2019-07-08 07:12:34', '2019-07-08 07:12:34'),
(19, 'Món Tráng Miệng', 'thanhdat, thanhdat', '0337720909', 'admin@gamil.com', 'xz', 'Phở Lòng Gà x 1 ', '32,000.00', '2019-07-08 07:12:59', '2019-07-08 07:12:59'),
(20, 'Món Tráng Miệng1', 'thanhdat, thanhdat', '0337720909', 'scsg.dat146@gmail.com', 'aaa', 'Bánh Mì Thập Cẩm x 1 ', '22,000.00', '2019-07-08 20:37:24', '2019-07-08 20:37:24'),
(21, 'Món Tráng Miệng1', 'thanhdat, thanhdat', '090', 'scsg.dat146@gmail.com', 'aa', 'Bánh Mì Thập Cẩm x 1 ', '22,000.00', '2019-07-08 20:39:41', '2019-07-08 20:39:41'),
(22, 'Món Tráng Miệng1', 'thanhdat, thanhdat', '090', 'scsg.dat146@gmail.com', 'aa', 'Bánh Mì Thập Cẩm x 1 ', '22,000.00', '2019-07-08 20:43:11', '2019-07-08 20:43:11'),
(23, 'Món Tráng Miệng', 'thanhdat, thanhdat', '03333', 'scsg.dat146@gmail.com', 'dsa', 'Bánh Mì Thập Cẩm x 1 ', '22,000.00', '2019-07-08 20:52:05', '2019-07-08 20:52:05'),
(24, 'Món Tráng Miệng', 'thanhdat, thanhdat', '03333', 'scsg.dat146@gmail.com', 'sdsada', 'Bánh Mì Thập Cẩm x 1 ', '22,000.00', '2019-07-08 20:56:16', '2019-07-08 20:56:16'),
(25, 'Bánh Canh', 'thanhdat, thanhdat', '0337720909', 'scsg.dat146@gmail.com', 'dsadsad', 'Bánh Mì Thập Cẩm x 1 ', '22,000.00', '2019-07-08 20:57:49', '2019-07-08 20:57:49'),
(26, 'Món Tráng Miệng', 'thanhdat, thanhdat', '33333', 'scsg.dat146@gmail.com', 'dsad', 'Bánh Mì Thập Cẩm x 1 ', '22,000.00', '2019-07-08 21:02:11', '2019-07-08 21:02:11'),
(27, 'Món Tráng Miệng1', 'thanhdat, thanhdat', '33333', 'scsg.dat146@gmail.com', 'sdasad', 'Bánh Mì Thập Cẩm x 1 ', '22,000.00', '2019-07-08 21:06:17', '2019-07-08 21:06:17'),
(28, 'Món Tráng Miệng', 'thanhdat, thanhdat', '33333', 'scsg.dat146@gmail.com', 'dsad', 'Bánh Mì Thập Cẩm x 1 ', '22,000.00', '2019-07-08 21:12:57', '2019-07-08 21:12:57'),
(29, 'Món Tráng Miệng1', 'thanhdat, thanhdat', '0337720909', 'scsg.dat146@gmail.com', 'dsadsa', 'Bánh Mì Thập Cẩm x 1 ', '22,000.00', '2019-07-08 21:20:03', '2019-07-08 21:20:03'),
(30, 'Món Tráng Miệng', 'thanhdat, thanhdat', '03333', 'scsg.dat146@gmail.com', 'sdasa', 'Bánh Mì Thập Cẩm x 1 ', '22,000.00', '2019-07-08 21:27:38', '2019-07-08 21:27:38'),
(31, 'Món Tráng Miệng1', 'thanhdat, thanhdat', '03333', 'scsg.dat146@gmail.com', 'đá', 'Bánh Mì Thập Cẩm x 1 ', '22,000.00', '2019-07-08 21:34:45', '2019-07-08 21:34:45'),
(32, 'Món Tráng Miệng', 'thanhdat, thanhdat', '0337720909', 'scsg.dat146@gmail.com', 'dsad', 'Bánh Mì Thập Cẩm x 1 ', '22,000.00', '2019-07-08 21:35:52', '2019-07-08 21:35:52'),
(33, 'Món Tráng Miệng1', 'thanhdat, thanhdat', '33333', 'scsg.dat146@gmail.com', 'sdasd', 'Bánh Mì Thập Cẩm x 1 ', '22,000.00', '2019-07-08 21:41:27', '2019-07-08 21:41:27'),
(34, 'Món Tráng Miệng', 'thanhdat, thanhdat', '0337720909', 'scsg.dat146@gmail.com', 'dsad', 'Bánh Mì Thập Cẩm x 2 ', '44,000.00', '2019-07-08 22:18:51', '2019-07-08 22:18:51'),
(35, 'Tha', 'thanhdat, thanhdat', '03333', 'scsg.dat146@gmail.com', 'dsad', 'Bánh Mì Thập Cẩm x 2 ', '44,000.00', '2019-07-08 22:19:51', '2019-07-08 22:19:51'),
(36, 'Đâ', 'thanhdat, thanhdat', '03333', 'scsg.dat146@gmail.com', 'â', 'Bánh Mì Thập Cẩm x 2 ', '44,000.00', '2019-07-08 22:21:18', '2019-07-08 22:21:18'),
(37, 'Món Tráng Miệng', 'thanhdat, thanhdat', '03333', 'scsg.dat146@gmail.com', 'dsada', 'Bánh Mì Thập Cẩm x 2 ', '44,000.00', '2019-07-08 22:29:28', '2019-07-08 22:29:28'),
(38, 'Bánh Canh', 'thanhdat, thanhdat', '0337720909', 'thanhdat@gmail.com', 'aaa', 'Phở Bò Tái Gân x 1 ', '36,000.00', '2019-07-08 22:31:13', '2019-07-08 22:31:13'),
(39, 'Bánh Canh', 'thanhdat, thanhdat', '03333', 'scsg.dat146@gmail.com', 'đá', 'Bánh Mì Thịt x 1 ', '22,000.00', '2019-07-08 22:32:51', '2019-07-08 22:32:51'),
(40, 'Món Tráng Miệng', 'hgvh', 'jhj', 'scsg.dat146@gmail.com', 'gh', 'Phở Bò Tái Gân x 1 ', '36,000.00', '2019-07-09 00:21:48', '2019-07-09 00:21:48'),
(41, 'Món Ăn Trưa', 'thanhdat, thanhdat', '0337720909', 'scsg.dat146@gmail.com', 'afsfs', 'Phở Lòng Gà x 1 ', '32,000.00', '2019-07-09 00:26:17', '2019-07-09 00:26:17'),
(42, 'Thay Toan', 'Cao Thang', '123456789', 'vuductoan123@gmail.com', 'jjjj', 'Trà Sữa Truyền Thống x 2 ', '60,000.00', '2019-07-09 01:32:28', '2019-07-09 01:32:28');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

DROP TABLE IF EXISTS `khachhang`;
CREATE TABLE IF NOT EXISTS `khachhang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `sdt` int(10) NOT NULL,
  `note` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`id`, `name`, `email`, `diachi`, `sdt`, `note`, `created_at`, `updated_at`) VALUES
(3, 'k2', '0978167798', 'thanhdat, thanhdat', 33333, '222knkn', '2019-07-02 06:21:44', '2019-07-02 06:21:44'),
(4, 'Bánh Canh', 'admin@gmail.com', 'thanhdat, thanhdat', 33333, '12233', '2019-07-02 10:48:51', '2019-07-02 10:48:51'),
(5, 'Nguyễn Thành Đạt', 'dat_nt146@yahoo.com', 'Quận 5 HCM', 337720909, '1h Giao Hàng', '2019-07-03 04:01:18', '2019-07-03 04:01:18'),
(6, 'Nguyễn Thành Đạt', 'admin@gmail.com', 'hcm', 3333, 'wdsadsda', '2019-07-04 02:37:08', '2019-07-04 02:37:08'),
(7, 'aa', 'scsg.dat146@gmail.com', 'thanhdat', 337720909, 'cfsfd', '2019-07-08 00:18:34', '2019-07-08 00:18:34'),
(8, 'sxdascca', 'admin@gmail.com', 'thanhdat', 337720909, 'dcs', '2019-07-08 03:58:32', '2019-07-08 03:58:32'),
(9, 'Anh Quốc', 'anhquoc@gmail.com', '56', 386201254, 'aaaaa', '2019-07-08 06:07:48', '2019-07-08 06:07:48'),
(10, 'dat', 'scsg.dat146@gmail.com', 'đasa', 11112121, 'sdad', '2019-07-08 07:03:14', '2019-07-08 07:03:14'),
(11, 'dat', 'scsg.dat146@gmail.com', 'đasa', 11112121, 'sdad', '2019-07-08 07:03:39', '2019-07-08 07:03:39'),
(12, 'dat', 'scsg.dat146@gmail.com', 'đasa', 11112121, 'sdad', '2019-07-08 07:04:41', '2019-07-08 07:04:41'),
(13, 'dat', 'scsg.dat146@gmail.com', 'đasa', 11112121, 'sdad', '2019-07-08 07:05:33', '2019-07-08 07:05:33'),
(14, 'dat', 'scsg.dat146@gmail.com', 'đasa', 11112121, 'sdad', '2019-07-08 07:10:57', '2019-07-08 07:10:57'),
(15, 'dat', 'scsg.dat146@gmail.com', 'đasa', 11112121, 'sdad', '2019-07-08 07:12:34', '2019-07-08 07:12:34'),
(16, 'Món Tráng Miệng', 'admin@gamil.com', 'thanhdat, thanhdat', 337720909, 'xz', '2019-07-08 07:12:59', '2019-07-08 07:12:59'),
(17, 'Món Tráng Miệng1', 'scsg.dat146@gmail.com', 'thanhdat, thanhdat', 337720909, 'aaa', '2019-07-08 20:37:24', '2019-07-08 20:37:24'),
(18, 'Món Tráng Miệng1', 'scsg.dat146@gmail.com', 'thanhdat, thanhdat', 90, 'aa', '2019-07-08 20:39:41', '2019-07-08 20:39:41'),
(19, 'Món Tráng Miệng1', 'scsg.dat146@gmail.com', 'thanhdat, thanhdat', 90, 'aa', '2019-07-08 20:43:11', '2019-07-08 20:43:11'),
(20, 'Món Tráng Miệng', 'scsg.dat146@gmail.com', 'thanhdat, thanhdat', 3333, 'dsa', '2019-07-08 20:52:05', '2019-07-08 20:52:05'),
(21, 'Món Tráng Miệng', 'scsg.dat146@gmail.com', 'thanhdat, thanhdat', 3333, 'sdsada', '2019-07-08 20:56:16', '2019-07-08 20:56:16'),
(22, 'Bánh Canh', 'scsg.dat146@gmail.com', 'thanhdat, thanhdat', 337720909, 'dsadsad', '2019-07-08 20:57:49', '2019-07-08 20:57:49'),
(23, 'Món Tráng Miệng', 'scsg.dat146@gmail.com', 'thanhdat, thanhdat', 33333, 'dsad', '2019-07-08 21:02:11', '2019-07-08 21:02:11'),
(24, 'Món Tráng Miệng1', 'scsg.dat146@gmail.com', 'thanhdat, thanhdat', 33333, 'sdasad', '2019-07-08 21:06:17', '2019-07-08 21:06:17'),
(25, 'Món Tráng Miệng', 'scsg.dat146@gmail.com', 'thanhdat, thanhdat', 33333, 'dsad', '2019-07-08 21:12:57', '2019-07-08 21:12:57'),
(26, 'Món Tráng Miệng1', 'scsg.dat146@gmail.com', 'thanhdat, thanhdat', 337720909, 'dsadsa', '2019-07-08 21:20:03', '2019-07-08 21:20:03'),
(27, 'Món Tráng Miệng', 'scsg.dat146@gmail.com', 'thanhdat, thanhdat', 3333, 'sdasa', '2019-07-08 21:27:38', '2019-07-08 21:27:38'),
(28, 'Món Tráng Miệng1', 'scsg.dat146@gmail.com', 'thanhdat, thanhdat', 3333, 'đá', '2019-07-08 21:34:45', '2019-07-08 21:34:45'),
(29, 'Món Tráng Miệng', 'scsg.dat146@gmail.com', 'thanhdat, thanhdat', 337720909, 'dsad', '2019-07-08 21:35:52', '2019-07-08 21:35:52'),
(30, 'Món Tráng Miệng1', 'scsg.dat146@gmail.com', 'thanhdat, thanhdat', 33333, 'sdasd', '2019-07-08 21:41:27', '2019-07-08 21:41:27'),
(31, 'Món Tráng Miệng', 'scsg.dat146@gmail.com', 'thanhdat, thanhdat', 337720909, 'dsad', '2019-07-08 22:18:51', '2019-07-08 22:18:51'),
(32, 'Tha', 'scsg.dat146@gmail.com', 'thanhdat, thanhdat', 3333, 'dsad', '2019-07-08 22:19:51', '2019-07-08 22:19:51'),
(33, 'Đâ', 'scsg.dat146@gmail.com', 'thanhdat, thanhdat', 3333, 'â', '2019-07-08 22:21:18', '2019-07-08 22:21:18'),
(34, 'Món Tráng Miệng', 'scsg.dat146@gmail.com', 'thanhdat, thanhdat', 3333, 'dsada', '2019-07-08 22:29:28', '2019-07-08 22:29:28'),
(35, 'Bánh Canh', 'thanhdat@gmail.com', 'thanhdat, thanhdat', 337720909, 'aaa', '2019-07-08 22:31:13', '2019-07-08 22:31:13'),
(36, 'Bánh Canh', 'scsg.dat146@gmail.com', 'thanhdat, thanhdat', 3333, 'đá', '2019-07-08 22:32:51', '2019-07-08 22:32:51'),
(37, 'Món Ăn Trưa', 'scsg.dat146@gmail.com', 'thanhdat, thanhdat', 337720909, 'afsfs', '2019-07-09 00:26:18', '2019-07-09 00:26:18'),
(38, 'Thay Toan', 'vuductoan123@gmail.com', 'Cao Thang', 123456789, 'jjjj', '2019-07-09 01:32:28', '2019-07-09 01:32:28');

-- --------------------------------------------------------

--
-- Table structure for table `loaisanpham`
--

DROP TABLE IF EXISTS `loaisanpham`;
CREATE TABLE IF NOT EXISTS `loaisanpham` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_danhmuc` int(11) NOT NULL,
  `tenloai` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_danhmuc` (`id_danhmuc`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loaisanpham`
--

INSERT INTO `loaisanpham` (`id`, `id_danhmuc`, `tenloai`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Phở', 'pho', 1, '2019-06-18 17:00:00', '2019-06-18 17:00:00'),
(2, 1, 'Hủ Tiếu', 'hu_tieu', 1, '2019-06-18 17:00:00', '2019-06-18 17:00:00'),
(4, 2, 'Bánh Mì', 'banh_mi', 1, '2019-06-18 17:00:00', '2019-06-18 17:00:00'),
(5, 2, 'Xôi', 'xoi', 1, '2019-06-18 17:00:00', '2019-06-18 17:00:00'),
(6, 2, 'Cơm', 'com', 1, '2019-06-18 17:00:00', '2019-06-18 17:00:00'),
(8, 3, 'Trà Sữa', 'tra_sua', 1, '2019-06-18 17:00:00', '2019-06-18 17:00:00'),
(10, 3, 'Cà phê', 'ca-phe', 1, '2019-07-08 00:13:33', '2019-07-08 04:06:32');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

DROP TABLE IF EXISTS `sanpham`;
CREATE TABLE IF NOT EXISTS `sanpham` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_loai` int(11) NOT NULL,
  `tensp` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `mota` varchar(2550) NOT NULL,
  `motachitiet` varchar(2550) NOT NULL,
  `gia` int(11) NOT NULL,
  `hinhanh` varchar(255) NOT NULL,
  `sale` int(11) NOT NULL,
  `new` int(11) NOT NULL,
  `view` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_SanPham` (`id_loai`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `id_loai`, `tensp`, `slug`, `mota`, `motachitiet`, `gia`, `hinhanh`, `sale`, `new`, `view`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Phở Bò', 'pho_bo', 'Bánh phở, nước dùng, thịt bò hoặc thịt gà kèm với một số loại gia vị khác', '', 35000, 'pho_bo_1.jpg', 10, 1, 8, 1, '2019-06-10 17:00:00', '2019-07-06 09:48:35'),
(2, 1, 'Phở Bò Tái', 'pho_bo', 'Bánh phở, nước dùng, thịt bò hoặc thịt gà kèm với một số loại gia vị khác', '', 36000, 'pho_bo_2.jpg', 10, 1, 7, 1, '2019-06-10 17:00:00', '2019-07-08 03:54:07'),
(3, 1, 'Phở Bò Tái Nạm', 'pho_bo', 'Bánh phở, nước dùng, thịt bò hoặc thịt gà kèm với một số loại gia vị khác', '', 36000, 'pho_bo_3.jpg', 10, 1, 2, 1, '2019-06-10 17:00:00', '2019-07-01 15:13:22'),
(4, 1, 'Phở Bò Tái Gân', 'pho_bo', 'Bánh phở, nước dùng, thịt bò hoặc thịt gà kèm với một số loại gia vị khác', '', 36000, 'pho_bo_4.jpg', 10, 1, 22, 1, '2019-06-10 17:00:00', '2019-07-08 04:12:25'),
(5, 2, 'Hủ Tiếu', 'hu_tieu', 'Món hủ tiếu là bánh hủ tiếu, nước dùng chính là với thịt bằm nhỏ, lòng heo nấu cùng', '', 32000, 'hu_tieu_1.jpg', 10, 1, 2, 1, '2019-06-10 17:00:00', '2019-07-02 23:58:37'),
(6, 2, 'Hủ Tiếu Tái', 'hu_tieu', 'Món hủ tiếu là bánh hủ tiếu, nước dùng chính là với thịt bằm nhỏ, lòng heo nấu cùng', '', 32000, 'hu_tieu_2.jpg', 10, 1, 1, 1, '2019-06-10 17:00:00', '2019-06-10 17:00:00'),
(7, 2, 'Hủ Tiếu Tái Nạm', 'hu_tieu', 'Món hủ tiếu là bánh hủ tiếu, nước dùng chính là với thịt bằm nhỏ, lòng heo nấu cùng', '', 32000, 'hu_tieu_3.jpg', 10, 1, 1, 1, '2019-06-10 17:00:00', '2019-06-10 17:00:00'),
(8, 2, 'Hủ Tiếu Nam Vang', 'hu_tieu', 'Món hủ tiếu là bánh hủ tiếu, nước dùng chính là với thịt bằm nhỏ, lòng heo nấu cùng', '', 32000, 'hu_tieu_4.jpg', 10, 1, 1, 1, '2019-06-10 17:00:00', '2019-06-10 17:00:00'),
(9, 1, 'Phở Gà', 'pho_ga', 'Bánh phở, nước dùng, thịt bò hoặc thịt gà kèm với một số loại gia vị khác', '', 32000, 'pho_ga_1.jpg', 10, 1, 1, 1, '2019-06-10 17:00:00', '2019-06-10 17:00:00'),
(10, 1, 'Phở Gà 1 Trứng', 'pho_ga', 'Bánh phở, nước dùng, thịt bò hoặc thịt gà kèm với một số loại gia vị khác', '', 32000, 'pho_ga_2.jpg', 10, 1, 2, 1, '2019-06-10 17:00:00', '2019-07-07 09:47:53'),
(11, 1, 'Phở Gà Kèm Miến', 'pho_ga', 'Bánh phở, nước dùng, thịt bò hoặc thịt gà kèm với một số loại gia vị khác', '', 32000, 'pho_ga_3.jpg', 10, 1, 1, 1, '2019-06-10 17:00:00', '2019-06-10 17:00:00'),
(12, 1, 'Phở Lòng Gà', 'pho_ga', 'Bánh phở, nước dùng, thịt bò hoặc thịt gà kèm với một số loại gia vị khác', '', 32000, 'pho_ga_4.jpg', 10, 1, 23, 1, '2019-06-10 17:00:00', '2019-07-08 07:15:14'),
(13, 4, 'Bánh Mì', 'banh_mi', 'Bánh mì xẻ dọc ổ bánh mì và nhét thịt (thường là thịt heo quay), trét patê, một ít hành ngò, rau', '', 22000, 'banh_mi_1.jpg', 10, 1, 2, 1, '2019-06-11 17:00:00', '2019-07-08 00:08:27'),
(14, 4, 'Bánh Mì Thịt', 'banh_mi', 'Bánh mì xẻ dọc ổ bánh mì và nhét thịt (thường là thịt heo quay), trét patê, một ít hành ngò, rau', '', 22000, 'banh_mi_2.jpg', 10, 1, 5, 1, '2019-06-11 17:00:00', '2019-07-08 22:32:34'),
(15, 4, 'Bánh Mì Thập Cẩm', 'banh_mi', 'Bánh mì xẻ dọc ổ bánh mì và nhét thịt (thường là thịt heo quay), trét patê, một ít hành ngò, rau', '', 22000, 'banh_mi_3.jpg', 10, 1, 45, 1, '2019-06-11 17:00:00', '2019-07-08 22:18:29'),
(16, 4, 'Bánh Mì Cá', 'banh_mi', 'Bánh mì xẻ dọc ổ bánh mì và nhét thịt (thường là thịt heo quay), trét patê, một ít hành ngò, rau', '', 22000, 'banh_mi_4.jpg', 10, 1, 1, 1, '2019-06-11 17:00:00', '2019-06-04 17:00:00'),
(17, 5, 'Xôi Gà', 'xoi_ga', 'Xôi được làm với nước cốt dừa và lá dứa, sau đó xé phay thịt gà luộc hoặc thịt gà quay, thái mỏng lạp xường', '', 18000, 'xoi_1.jpg', 10, 1, 1, 1, '2019-06-11 17:00:00', '2019-06-11 17:00:00'),
(18, 5, 'Xôi Thit Quay', 'xoi_ga', 'Xôi được làm với nước cốt dừa và lá dứa, sau đó xé phay thịt luộc hoặc thịt quay, thái mỏng lạp xường', '', 18000, 'xoi_2.jpg', 15, 1, 2, 1, '2019-06-11 17:00:00', '2019-07-08 04:12:45'),
(19, 5, 'Xôi Thập Cẩm', 'xoi_ga', 'Xôi được làm với nước cốt dừa và lá dứa, sau đó xé phay thịt luộc hoặc thịt quay, thái mỏng lạp xường', '', 18000, 'xoi_3.jpg', 30, 1, 1, 1, '2019-06-11 17:00:00', '2019-06-11 17:00:00'),
(20, 5, 'Xôi Gà Xá Xíu', 'xoi_ga', 'Xôi được làm với nước cốt dừa và lá dứa, sau đó xé phay thịt gà luộc hoặc thịt gà quay, thái mỏng lạp xường', '', 18000, 'xoi_4.jpg', 20, 1, 1, 1, '2019-06-11 17:00:00', '2019-06-11 17:00:00'),
(21, 6, 'Cơm Tấm Sườn Trứng', 'com_tam', 'Sườn ăn với cơm tấm là loại sườn heo được tẩm ướp gia vị chua ngọt, sau đó đem nướng,chả hoặc chả trứng, được làm từ trứng, cua, thịt băm, nấm mèo và bún tàu,trứng ốp la,', '', 35000, 'com_tam_1.jpg', 10, 1, 1, 1, '2019-06-11 17:00:00', '2019-06-11 17:00:00'),
(22, 6, 'Cơm Tấm Gà', 'com_tam', 'Sườn ăn với cơm tấm là loại sườn heo được tẩm ướp gia vị chua ngọt, sau đó đem nướng,chả hoặc chả trứng, được làm từ trứng, cua, thịt băm, nấm mèo và bún tàu,trứng ốp la,', '', 35000, 'com_tam_2.jpg', 10, 1, 1, 1, '2019-06-11 17:00:00', '2019-06-11 17:00:00'),
(23, 6, 'Cơm Tấm Sườn Cốt Lếch', 'com_tam', 'Sườn ăn với cơm tấm là loại sườn heo được tẩm ướp gia vị chua ngọt, sau đó đem nướng,chả hoặc chả trứng, được làm từ trứng, cua, thịt băm, nấm mèo và bún tàu,trứng ốp la,', '', 35000, 'com_tam_3.jpg', 10, 1, 1, 1, '2019-06-11 17:00:00', '2019-06-11 17:00:00'),
(24, 6, 'Cơm Tấm Chả Trứng', 'com_tam', 'Sườn ăn với cơm tấm là loại sườn heo được tẩm ướp gia vị chua ngọt, sau đó đem nướng,chả hoặc chả trứng, được làm từ trứng, cua, thịt băm, nấm mèo và bún tàu,trứng ốp la,', '', 35000, 'com_tam_4.jpg', 10, 1, 2, 1, '2019-06-11 17:00:00', '2019-07-05 06:50:40'),
(25, 8, 'Trà Sữa Truyền Thống', 'tra-sua-truyen-thong', 'Kết hợp giữa tr&agrave; v&agrave; sữa', 'Tr&agrave; sữa l&agrave; loại thức uống đa dạng được t&igrave;m thấy ở nhiều nền văn h&oacute;a, bao gồm một v&agrave;i c&aacute;ch kết hợp giữa tr&agrave; v&agrave; sữa.', 30000, 'tra_sua_truyen_thong.jpg', 10, 1, 4, 1, '2019-07-07 06:57:00', '2019-07-07 09:44:21'),
(26, 8, 'Trà Sữa Bánh Pudding', 'tra-sua-banh-pudding', 'Sự kết hợp giữa tr&agrave; sữa v&agrave; b&aacute;nh Pudding.', 'Tr&agrave; sữa l&agrave; loại thức uống đa dạng được t&igrave;m thấy ở nhiều nền văn h&oacute;a, bao gồm một v&agrave;i c&aacute;ch kết hợp giữa tr&agrave; v&agrave; sữa. C&aacute;c loại thức uống kh&aacute;c nhau t&ugrave;y thuộc v&agrave;o lượng th&agrave;nh phần ch&iacute;nh của mỗi loại, phương ph&aacute;p pha chế, v&agrave; c&aacute;c th&agrave;nh phần kh&aacute;c được th&ecirc;m v&agrave;o', 45000, 'tra_sua_banh_pudding.jpg', 5, 1, 4, 1, '2019-07-07 07:04:17', '2019-07-08 06:08:07'),
(27, 8, 'Trà Sữa kim cương đen Okinawa', 'tra-sua-kim-cuong-den-okinawa', 'Tr&agrave; sữa kết hợp với thạch c&agrave; ph&ecirc;', 'Tr&agrave; sữa l&agrave; loại thức uống đa dạng được t&igrave;m thấy ở nhiều nền văn h&oacute;a, bao gồm một v&agrave;i c&aacute;ch kết hợp giữa tr&agrave; v&agrave; sữa. C&aacute;c loại thức uống kh&aacute;c nhau t&ugrave;y thuộc v&agrave;o lượng th&agrave;nh phần ch&iacute;nh của mỗi loại, phương ph&aacute;p pha chế, v&agrave; c&aacute;c th&agrave;nh phần kh&aacute;c được th&ecirc;m v&agrave;o', 45000, 'tra_sua_kim_cuong_den.jpg', 5, 1, 1, 1, '2019-07-07 09:31:45', '2019-07-07 09:31:45'),
(31, 10, 'Cà Phê Đen', 'ca-phe-den', 'C&agrave; ph&ecirc; đen pha phin', 'Thức uống hằng ng&agrave;y. Gi&uacute;p tỉnh t&aacute;o l&agrave;m việc', 15000, 'ca_phe_den.jpg', 5, 1, 1, 1, '2019-07-08 04:09:06', '2019-07-08 04:09:06'),
(32, 10, 'Cà Phê Sữa', 'ca-phe-sua', 'C&agrave; ph&ecirc; pha k&egrave;m sữa đặc', 'Thức uống hằng ng&agrave;y của giới văn ph&ograve;ng. Gi&uacute;p tỉnh t&aacute;o l&agrave;m việc', 20000, 'ca_phe_sua.jpg', 5, 1, 1, 1, '2019-07-08 04:11:59', '2019-07-08 08:53:52');

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

DROP TABLE IF EXISTS `slide`;
CREATE TABLE IF NOT EXISTS `slide` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imgslide` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id`, `imgslide`, `created_at`, `updated_at`) VALUES
(1, 'slide4.jpg', '2019-07-01 17:00:00', '2019-07-01 17:00:00'),
(2, 'silde2.jpg', '2019-07-01 17:00:00', '2019-07-01 17:00:00'),
(3, 'slide3.jpg', '2019-07-01 17:00:00', '2019-07-01 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ThanhDat', 'admin@gamil.com', '$2y$10$U/IVvk0GYXkN2m5Y8BTcauLD3MF8KVwW4sMTm6S1X59ZPr6n0kIDK', 'j4RoSeiyAxCp3rlZ81pjTGdByLo43scQoU0z4Xlp20aM0B47ZJxssHWZ57GS', '2019-06-18 06:46:34', '2019-06-18 06:46:34'),
(7, 'dat', 'thanhdat@gmail.com', '$2y$10$H7SxiFGpGkaFreHD06KQkewijtQyDMFIel4g.w7XL5agFvVnZAwf6', '8mOhT8B3qta1hNOKokQEpuOb9oRe81KaVziuy832zrNgu5ueBKwNzc1g3lvF', '2019-07-08 00:27:46', '2019-07-08 00:27:46');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `anhsanpham`
--
ALTER TABLE `anhsanpham`
  ADD CONSTRAINT `FK_AnhSanPham` FOREIGN KEY (`id_sanpham`) REFERENCES `sanpham` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `FK_CTDH_SP` FOREIGN KEY (`id_sp`) REFERENCES `sanpham` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_DH_CTDH` FOREIGN KEY (`id_donhang`) REFERENCES `dondathang` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `dondathang`
--
ALTER TABLE `dondathang`
  ADD CONSTRAINT `FK_KH_DH` FOREIGN KEY (`id_khachhang`) REFERENCES `khachhang` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD CONSTRAINT `loaisanpham_ibfk_1` FOREIGN KEY (`id_danhmuc`) REFERENCES `danhmuc` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `FK_SanPham` FOREIGN KEY (`id_loai`) REFERENCES `loaisanpham` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
