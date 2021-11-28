-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2021 at 04:37 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zapp_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `m_login`
--

CREATE TABLE `m_login` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `role` varchar(20) NOT NULL,
  `del_flg` int(11) NOT NULL DEFAULT 0,
  `login_time` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_login`
--

INSERT INTO `m_login` (`id`, `name`, `role`, `del_flg`, `login_time`) VALUES
(6, 'lowiq', 'CUSTOMER', 0, '0'),
(5, 'wendigo', 'CUSTOMER', 0, '0'),
(5, 'wendigo', 'CUSTOMER', 0, '0'),
(5, 'wendigo', 'CUSTOMER', 0, '0'),
(5, 'wendigo', 'CUSTOMER', 0, '0'),
(5, 'wendigo', 'CUSTOMER', 0, '0'),
(5, 'wendigo', 'CUSTOMER', 0, '2147483647'),
(5, 'wendigo', 'CUSTOMER', 0, '2147483647'),
(17, 'k', 'CUSTOMER', 0, '2147483647'),
(17, 'k', 'CUSTOMER', 0, '2147483647'),
(17, 'k', 'CUSTOMER', 0, '2147483647'),
(17, 'k', 'CUSTOMER', 0, '2147483647'),
(17, 'k', 'CUSTOMER', 0, '2147483647'),
(17, 'k', 'CUSTOMER', 0, '2021'),
(17, 'k', 'CUSTOMER', 0, '2021'),
(17, 'k', 'CUSTOMER', 0, '2021'),
(17, 'k', 'CUSTOMER', 0, '2021,11,17 11+5:18+22'),
(17, 'k', 'CUSTOMER', 0, '2021-11-17 11:19'),
(17, 'k', 'CUSTOMER', 0, '2021-11-17 11:20 CET'),
(17, 'k', 'CUSTOMER', 0, '2021-11-17 16:47'),
(17, 'k', 'CUSTOMER', 0, '2021-11-17 16:61'),
(17, 'k', 'CUSTOMER', 0, '2021-11-17 16:56'),
(17, 'k', 'CUSTOMER', 0, '2021-11-17 16:58'),
(17, 'k', 'CUSTOMER', 0, '2021-11-17 11:35'),
(17, 'k', 'CUSTOMER', 0, '2021-11-17 11:36'),
(17, 'k', 'CUSTOMER', 0, '2021-11-17 11:36'),
(17, 'k', 'CUSTOMER', 0, '2021-11-17 11:37'),
(17, 'k', 'CUSTOMER', 0, '2021-11-17 11:38'),
(17, 'k', 'CUSTOMER', 0, '2021-11-17 16:73'),
(17, 'k', 'CUSTOMER', 0, '2021-11-17 17:60'),
(17, 'k', 'CUSTOMER', 0, '2021-11-17 12:31'),
(17, 'k', 'CUSTOMER', 0, '2021-11-17 12:32'),
(17, 'k', 'CUSTOMER', 0, '2021-11-17 19:39'),
(17, 'k', 'CUSTOMER', 0, '2021-11-17 19:41'),
(17, 'k', 'CUSTOMER', 0, '2021-11-17 19:45'),
(2, 'zayar', 'CUSTOMER', 0, '2021-11-18 22:58'),
(2, 'zayar', 'CUSTOMER', 0, '2021-11-18 23:03'),
(17, 'k', 'CUSTOMER', 0, '2021-11-19 09:45'),
(17, 'k', 'CUSTOMER', 0, '2021-11-19 10:13'),
(17, 'k', 'CUSTOMER', 0, '2021-11-19 10:19'),
(17, 'k', 'CUSTOMER', 0, '2021-11-19 10:19'),
(17, 'k', 'CUSTOMER', 0, '2021-11-19 10:20'),
(17, 'k', 'CUSTOMER', 0, '2021-11-19 10:25'),
(17, 'k', 'CUSTOMER', 0, '2021-11-19 10:26'),
(17, 'k', 'CUSTOMER', 0, '2021-11-19 10:26'),
(17, 'k', 'CUSTOMER', 0, '2021-11-19 10:27'),
(2, 'zayar', 'CUSTOMER', 0, '2021-11-19 11:11'),
(2, 'zayar', 'CUSTOMER', 0, '2021-11-19 11:12'),
(2, 'zayar', 'CUSTOMER', 0, '2021-11-19 11:12'),
(2, 'zayar', 'CUSTOMER', 0, '2021-11-19 11:14'),
(2, 'zayar', 'CUSTOMER', 0, '2021-11-19 11:14'),
(2, 'zayar', 'CUSTOMER', 0, '2021-11-19 11:14'),
(2, 'zayar', 'CUSTOMER', 0, '2021-11-19 11:14'),
(2, 'zayar', 'CUSTOMER', 0, '2021-11-19 11:14'),
(2, 'zayar', 'CUSTOMER', 0, '2021-11-19 11:14'),
(2, 'zayar', 'CUSTOMER', 0, '2021-11-19 11:14'),
(2, 'zayar', 'CUSTOMER', 0, '2021-11-19 11:15'),
(2, 'zayar', 'CUSTOMER', 0, '2021-11-19 11:15'),
(2, 'zayar', 'CUSTOMER', 0, '2021-11-19 11:16'),
(2, 'zayar', 'CUSTOMER', 0, '2021-11-19 11:16'),
(2, 'zayar', 'CUSTOMER', 0, '2021-11-19 11:16'),
(2, 'zayar', 'CUSTOMER', 0, '2021-11-19 11:16'),
(2, 'zayar', 'CUSTOMER', 0, '2021-11-19 11:19'),
(2, 'zayar', 'CUSTOMER', 0, '2021-11-19 11:19'),
(2, 'zayar', 'CUSTOMER', 0, '2021-11-19 11:19'),
(2, 'zayar', 'CUSTOMER', 0, '2021-11-19 11:19'),
(2, 'zayar', 'CUSTOMER', 0, '2021-11-19 11:19'),
(2, 'zayar', 'CUSTOMER', 0, '2021-11-19 11:21'),
(17, 'k', 'CUSTOMER', 0, '2021-11-19 11:22'),
(17, 'k', 'CUSTOMER', 0, '2021-11-19 11:23'),
(17, 'k', 'CUSTOMER', 0, '2021-11-19 11:23'),
(17, 'k', 'CUSTOMER', 0, '2021-11-19 11:23'),
(17, 'k', 'CUSTOMER', 0, '2021-11-19 11:23'),
(17, 'k', 'CUSTOMER', 0, '2021-11-19 11:23'),
(17, 'k', 'CUSTOMER', 0, '2021-11-19 11:24'),
(17, 'k', 'CUSTOMER', 0, '2021-11-19 11:24'),
(17, 'k', 'CUSTOMER', 0, '2021-11-19 11:24'),
(17, 'k', 'CUSTOMER', 0, '2021-11-19 11:25'),
(17, 'k', 'CUSTOMER', 0, '2021-11-19 11:29'),
(17, 'k', 'CUSTOMER', 0, '2021-11-19 11:29'),
(17, 'k', 'CUSTOMER', 0, '2021-11-19 11:29'),
(17, 'k', 'CUSTOMER', 0, '2021-11-19 11:29'),
(17, 'k', 'CUSTOMER', 0, '2021-11-19 11:29'),
(17, 'k', 'CUSTOMER', 0, '2021-11-19 11:32'),
(17, 'k', 'CUSTOMER', 0, '2021-11-19 11:32'),
(17, 'k', 'CUSTOMER', 0, '2021-11-19 11:32'),
(17, 'k', 'CUSTOMER', 0, '2021-11-19 11:32'),
(17, 'k', 'CUSTOMER', 0, '2021-11-19 11:33'),
(2, 'zayar', 'CUSTOMER', 0, '2021-11-19 12:40'),
(17, 'k', 'CUSTOMER', 0, '2021-11-20 00:53'),
(2, 'zayar', 'CUSTOMER', 0, '2021-11-24 13:59'),
(3, 'gh', 'CUSTOMER', 0, '2021-11-24 18:44'),
(5, 'wendigo', 'CUSTOMER', 0, '2021-11-24 18:53'),
(6, 'lowiq', 'CUSTOMER', 0, '2021-11-24 18:54'),
(17, 'k', 'CUSTOMER', 0, '2021-11-24 18:55'),
(22, 'spidy', 'CUSTOMER', 0, '2021-11-24 18:56'),
(23, 'ironman', 'CUSTOMER', 0, '2021-11-24 18:57'),
(24, 'thor', 'CUSTOMER', 0, '2021-11-24 18:57'),
(5, 'wendigo', 'CUSTOMER', 0, '2021-11-25 10:50'),
(2, 'zayar', 'CUSTOMER', 0, '2021-11-25 11:38'),
(17, 'k', 'CUSTOMER', 0, '2021-11-26 01:02'),
(22, 'spidy', 'CUSTOMER', 0, '2021-11-26 15:51'),
(2, 'zayar', 'CUSTOMER', 0, '2021-11-26 17:29'),
(6, 'lowiq', 'CUSTOMER', 0, '2021-11-27 06:52'),
(6, 'lowiq', 'CUSTOMER', 0, '2021-11-27 11:54'),
(40, 'A Ko Aung', 'CUSTOMER', 0, '2021-11-27 12:07'),
(6, 'lowiq', 'CUSTOMER', 0, '2021-11-27 12:27'),
(40, 'A Ko Aung', 'CUSTOMER', 0, '2021-11-27 13:05'),
(6, 'lowiq', 'CUSTOMER', 0, '2021-11-27 14:44'),
(6, 'lowiq', 'CUSTOMER', 0, '2021-11-27 15:24'),
(3, 'gh', 'CUSTOMER', 0, '2021-11-27 16:39'),
(41, 'zarni', 'CUSTOMER', 0, '2021-11-27 17:12'),
(41, 'zarni', 'CUSTOMER', 0, '2021-11-27 17:13'),
(41, 'zarni', 'CUSTOMER', 0, '2021-11-27 19:58'),
(41, 'zarni', 'CUSTOMER', 0, '2021-11-27 21:16');

-- --------------------------------------------------------

--
-- Table structure for table `m_order`
--

CREATE TABLE `m_order` (
  `userid` int(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `totalbudget` int(20) NOT NULL,
  `orderid` int(20) NOT NULL,
  `buy_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_order`
--

INSERT INTO `m_order` (`userid`, `username`, `totalbudget`, `orderid`, `buy_date`) VALUES
(6, 'lowiq', 5200, 42, '2021/11/26'),
(6, 'lowiq', 1200, 43, '2021/11/27'),
(40, 'A Ko Aung', 6950, 44, '2021/11/27'),
(6, 'lowiq', 1000, 45, '2021/11/27'),
(40, 'A Ko Aung', 250, 46, '2021/11/27'),
(40, 'A Ko Aung', 1250, 47, '2021/11/27'),
(40, 'A Ko Aung', 250, 48, '2021/11/27'),
(40, 'A Ko Aung', 900, 49, '2021/11/27'),
(40, 'A Ko Aung', 600, 50, '2021/11/27'),
(40, 'A Ko Aung', 300, 51, '2021/11/27'),
(40, 'A Ko Aung', 500, 52, '2021/11/27'),
(40, 'A Ko Aung', 600, 53, '2021/11/27'),
(40, 'A Ko Aung', 750, 54, '2021/11/27'),
(40, 'A Ko Aung', 500, 55, '2021/11/27'),
(6, 'lowiq', 1550, 56, '2021/11/27'),
(6, 'lowiq', 1200, 57, '2021/11/27'),
(41, 'zarni', 1250, 58, '2021/11/27'),
(41, 'zarni', 2000, 59, '2021/11/27'),
(41, 'zarni', 3250, 60, '2021/11/27'),
(41, 'zarni', 3250, 61, '2021/11/27'),
(41, 'zarni', 10000, 62, '2021/11/27');

-- --------------------------------------------------------

--
-- Table structure for table `m_orderdetail`
--

CREATE TABLE `m_orderdetail` (
  `id` int(20) NOT NULL,
  `orderid` int(20) NOT NULL,
  `ordercategory` int(10) NOT NULL,
  `quantity` int(20) NOT NULL,
  `ordergender` int(10) NOT NULL,
  `itemid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_orderdetail`
--

INSERT INTO `m_orderdetail` (`id`, `orderid`, `ordercategory`, `quantity`, `ordergender`, `itemid`) VALUES
(76, 42, 1, 3, 3, '  \n              68\n'),
(77, 42, 2, 3, 3, '  \n              69\n'),
(78, 42, 3, 5, 3, '  \n              70\n'),
(79, 42, 1, 2, 2, '  \n              63\n'),
(80, 42, 3, 3, 2, '  \n              65\n'),
(81, 42, 3, 3, 2, '  \n              66\n'),
(82, 43, 2, 1, 1, '  \n              58\n'),
(83, 43, 3, 1, 1, '  \n              62\n'),
(84, 43, 2, 1, 3, '  \n              69\n'),
(85, 43, 1, 1, 3, '  \n              68\n'),
(86, 44, 1, 3, 1, '  \n              53\n'),
(87, 44, 1, 4, 1, '  \n              54\n'),
(88, 44, 1, 3, 1, '  \n              55\n'),
(89, 44, 2, 2, 1, '  \n              56\n'),
(90, 44, 2, 2, 1, '  \n              57\n'),
(91, 44, 2, 1, 1, '  \n              58\n'),
(92, 44, 3, 1, 1, '  \n              60\n'),
(93, 44, 3, 1, 1, '  \n              61\n'),
(94, 44, 3, 1, 1, '  \n              62\n'),
(95, 44, 1, 1, 2, '  \n              63\n'),
(96, 44, 2, 1, 2, '  \n              73\n'),
(97, 44, 2, 1, 2, '  \n              67\n'),
(98, 44, 3, 1, 2, '  \n              65\n'),
(99, 44, 3, 1, 2, '  \n              66\n'),
(100, 44, 3, 1, 2, '  \n              64\n'),
(101, 45, 3, 4, 3, '  \n              70\n'),
(102, 46, 3, 1, 3, '  \n              70\n'),
(103, 47, 2, 5, 3, '  \n              69\n'),
(104, 48, 2, 1, 3, '  \n              69\n'),
(105, 49, 1, 3, 1, '  \n              54\n'),
(106, 50, 1, 2, 1, '  \n              54\n'),
(107, 51, 1, 1, 1, '  \n              54\n'),
(108, 52, 1, 2, 1, '  \n              53\n'),
(109, 53, 1, 2, 1, '  \n              55\n'),
(110, 54, 1, 3, 1, '  \n              53\n'),
(111, 55, 1, 2, 1, '  \n              53\n'),
(112, 56, 1, 1, 1, '  \n              55\n'),
(113, 56, 1, 5, 1, '  \n              71\n'),
(114, 57, 1, 4, 1, '  \n              55\n'),
(115, 58, 1, 5, 1, '  \n              71\n'),
(116, 59, 1, 5, 1, '  \n              74\n'),
(117, 60, 3, 5, 1, '  \n              86\n'),
(118, 61, 3, 5, 1, '  \n              86\n'),
(119, 62, 3, 5, 1, '  \n              91\n'),
(120, 62, 3, 5, 2, '  \n              128'),
(121, 62, 3, 5, 2, '  \n              127');

-- --------------------------------------------------------

--
-- Table structure for table `m_user`
--

CREATE TABLE `m_user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `phonenumber` int(11) NOT NULL,
  `address` varchar(256) DEFAULT 'Address Unavailable',
  `password` varchar(128) NOT NULL,
  `role` varchar(20) NOT NULL DEFAULT 'CUSTOMER',
  `del_flg` int(11) NOT NULL DEFAULT 0,
  `create_date` varchar(10) NOT NULL,
  `update_date` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_user`
--

INSERT INTO `m_user` (`id`, `name`, `email`, `phonenumber`, `address`, `password`, `role`, `del_flg`, `create_date`, `update_date`) VALUES
(1, 'ZAPP', 'asfsadf@gamil.com', 912343214, NULL, 'zayarhtet', 'CUSTOMER', 0, '2021/11/12', NULL),
(2, 'zayar', 'barnyar@gamil.com', 99999999, NULL, 'wer', 'CUSTOMER', 0, '2021/11/12', NULL),
(3, 'gh', 'asdf', 0, NULL, 'zay', 'CUSTOMER', 0, '2021/11/12', NULL),
(5, 'wendigo', 'wendigo@gmail.com', 2147483647, NULL, 'wendigo1', 'CUSTOMER', 0, '2021/11/14', NULL),
(6, 'lowiq', 'lowiq@gmail.com', 2147483647, NULL, 'lowiq1', 'CUSTOMER', 0, '2021/11/14', NULL),
(17, 'k', 'kuiui', 2147483647, NULL, 'kk', 'CUSTOMER', 0, '2021/11/15', NULL),
(18, 'Zay', 'zay@gmail.com', 978787878, 'no15', 'zay1', 'ADMIN', 0, '11/17/2021', NULL),
(19, 'Zar', 'Zar@gmail.com', 987878787, NULL, 'Zar123', 'ADMIN', 0, '11/17/2021', NULL),
(20, 'Zaw', 'Zaw@gmial.com', 91111111, NULL, 'Zaw123', 'ADMIN', 0, '11/17/2021', NULL),
(21, 'Phu', 'Phu@gmail.com', 9888888, NULL, 'Phu123', 'ADMIN', 0, '11/17/2021', NULL),
(22, 'spidy', 'spidy@gmail.com', 9, NULL, 'spidy1', 'CUSTOMER', 0, '2021/11/17', NULL),
(23, 'ironman', 'ironman@gmail.com', 3434, NULL, 'iron', 'CUSTOMER', 0, '2021/11/17', NULL),
(24, 'thor', 'asdf', 2, NULL, 't', 'CUSTOMER', 0, '2021/11/17', NULL),
(25, 'ana', 'ana', 0, NULL, 'ana', 'CUSTOMER', 0, '2021/11/17', NULL),
(26, 'lk', 'lk', 123, NULL, 'lk', 'CUSTOMER', 0, '2021/11/17', NULL),
(27, 'fg', 'fg', 1233, NULL, 'aa', 'CUSTOMER', 0, '2021/11/17', NULL),
(28, 'joker', 'joker@gmail.com', 96969, NULL, 'joker1', 'CUSTOMER', 0, '2021/11/19', NULL),
(29, 'herlayquinn', 'queen@gmail.com', 99696, NULL, 'herlay', 'CUSTOMER', 0, '2021/11/19', NULL),
(30, 'pl', 'pl@gmail.com', 912346, NULL, 'pl', 'CUSTOMER', 0, '2021/11/25', NULL),
(31, 'pa', 'pa@gmail.com', 988888, NULL, 'pa', 'CUSTOMER', 0, '2021/11/25', NULL),
(32, 'venom', 'venom@gmail.com', 9777777, NULL, 'venom', 'CUSTOMER', 0, '2021/11/25', NULL),
(33, 'viper', 'viper@gmail.com', 978787, NULL, 'viper', 'CUSTOMER', 0, '2021/11/25', NULL),
(34, 'ok', 'viper@gmail.com', 95436, NULL, 'ok', 'CUSTOMER', 0, '2021/11/25', NULL),
(35, 'jj', 'jj', 0, NULL, 'jj', 'CUSTOMER', 0, '2021/11/25', NULL),
(36, 'hh', 'hh', 0, NULL, 'hh', 'CUSTOMER', 0, '2021/11/25', NULL),
(37, 'dd', 'dd', 0, NULL, 'dd', 'CUSTOMER', 0, '2021/11/25', NULL),
(38, 'uu', 'uu', 0, NULL, 'uu', 'CUSTOMER', 0, '2021/11/25', NULL),
(39, 'qq', 'qq', 0, NULL, 'qq', 'CUSTOMER', 0, '2021/11/25', NULL),
(40, 'A Ko Aung', 'akoaung@gmail.com', 123456789, 'Sanchaung Yangon', 'akaungo', 'CUSTOMER', 0, '2021/11/27', NULL),
(41, 'zarni', 'znwinlwin@gmail.com', 1239123123, 'asdasdad', 'zarni123', 'CUSTOMER', 0, '2021/11/27', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `m_userfeedback`
--

CREATE TABLE `m_userfeedback` (
  `id` int(11) NOT NULL,
  `customerid` int(20) NOT NULL,
  `feedback` varchar(200) NOT NULL,
  `create_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_userfeedback`
--

INSERT INTO `m_userfeedback` (`id`, `customerid`, `feedback`, `create_date`) VALUES
(6, 2, 'yes', '2021/11/24'),
(7, 2, 'bad', '2021/11/24'),
(9, 5, 'bad quality', '2021/11/24'),
(10, 6, 'not bad', '2021/11/24'),
(11, 17, 'sote pyat nay tr pl', '2021/11/24'),
(12, 22, 'very good', '2021/11/24'),
(13, 23, 'well', '2021/11/24'),
(14, 24, 'bad', '2021/11/24'),
(15, 24, 'good', '2021/11/24'),
(16, 22, 'ok', '2021/11/26'),
(17, 40, 'A yann kg dl kyay zuu', '2021/11/27'),
(18, 41, 'blah blah blah', '2021/11/27');

-- --------------------------------------------------------

--
-- Table structure for table `stock_mgmt`
--

CREATE TABLE `stock_mgmt` (
  `id` int(11) NOT NULL,
  `name` varchar(126) NOT NULL,
  `photoname` varchar(20) NOT NULL,
  `create_date` varchar(10) NOT NULL,
  `update_date` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `category` varchar(20) NOT NULL,
  `madeof` varchar(20) NOT NULL,
  `orgprice` int(11) NOT NULL,
  `saleprice` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `del_flag` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stock_mgmt`
--

INSERT INTO `stock_mgmt` (`id`, `name`, `photoname`, `create_date`, `update_date`, `gender`, `category`, `madeof`, `orgprice`, `saleprice`, `stock`, `del_flag`) VALUES
(53, 'Men Shirt 1', 'VV4WSvyveBkj.jpg', '2021/11/26', '', '1', '1', 'Myanmar', 150, 250, 0, 1),
(54, 'Men Shirt 2', 'U74mf9PWOpko.jpg', '2021/11/26', '', '1', '1', 'Myanmar', 200, 300, 0, 1),
(55, 'Men Shirt 3', 'Z44H3chuzrox.jpg', '2021/11/26', '', '1', '1', 'Myanmar', 200, 300, 0, 1),
(56, 'Men Pant 1', 'szOEbDjk0bgs.jpg', '2021/11/26', '', '1', '2', 'Myanmar', 150, 250, 0, 1),
(57, 'Men Pant 2', 'fu9XmeRYYBfM.jpg', '2021/11/26', '', '1', '2', 'Myanmar', 200, 300, 0, 1),
(58, 'Men Pant 3', 'A8gUePBkF4rA.jpg', '2021/11/26', '', '1', '2', 'Myanmar', 250, 350, 0, 1),
(60, 'Men Shoe 1', 'GJnh2YCCpQHf.jpg', '2021/11/26', '', '1', '3', 'Myanmar', 150, 250, 0, 1),
(61, 'Men Shoe 2', '2RBBaZdlcyC3.jpg', '2021/11/26', '', '1', '3', 'Myanmar', 200, 300, 0, 1),
(62, 'Men Shoe 3', '1zBxmFZ10dho.jpg', '2021/11/26', '', '1', '3', 'Myanmar', 250, 350, 0, 1),
(63, 'Girl Shirt 1', 'ZBMWYjtcx8wi.jpg', '2021/11/26', '', '2', '1', 'Myanmar', 150, 250, 0, 1),
(64, 'Girl Shoe 1', '1nW6M24r5pnN.jpg', '2021/11/26', '', '2', '3', 'Myanmar', 150, 250, 0, 1),
(65, 'Girl Shoe 2', 'Wb57tLuGZpvU.jpg', '2021/11/26', '', '2', '3', 'Myanmar', 200, 300, 0, 1),
(66, 'Girl Shoe 3', '3HLoiKFS5Z8L.jpg', '2021/11/26', '', '2', '3', 'Myanmar', 250, 350, 0, 1),
(67, 'Girl Pant 1', 'yHnIyi4kRgaZ.jpg', '2021/11/26', '', '2', '2', 'Myanmar', 150, 250, 0, 1),
(68, 'Kid Shirt 1', 'mFH6U1j0KkCt.jpg', '2021/11/26', '', '3', '1', 'Myanmar', 150, 250, 0, 1),
(69, 'Kid Pant', 'CNOo71dhyjtK.jpg', '2021/11/26', '', '3', '2', 'Myanmar', 150, 250, 0, 1),
(70, 'Kid Shoe 1', 'BOhpfk3oet0k.jpg', '2021/11/26', '', '3', '3', 'Myanmar', 150, 250, 0, 1),
(71, 'New Design', 'r3g6dxLWqRgS.jpg', '2021/11/26', '', '1', '1', 'Myanmar', 200, 250, 0, 1),
(72, 'Zay Yr Pant', 'y430853CLR6q.jpg', '2021/11/27', '', '1', '2', 'Myanmar', 250, 350, 0, 1),
(73, 'PP Pant', 'd6K56fUncmo2.jpg', '2021/11/27', '', '2', '2', 'Myanmar', 250, 350, 0, 1),
(74, 'Zapdidas Men black hoddie', '4tBRkCtg1R5l.jpg', '2021/11/27', '', '1', '1', 'myanmar', 300, 400, 5, 0),
(75, 'Zapdidas Blue Logo Hoddie', 'UKWyITm3vpTF.jpg', '2021/11/27', '', '1', '1', 'myanmar', 300, 400, 10, 0),
(76, 'Zapdidas SunFlower Hoddie', 'GhybU0yEar4K.jpg', '2021/11/27', '', '1', '1', 'myanmar', 300, 450, 10, 0),
(77, 'Zapdidas  Grey Long Sleeve ', 'THNliVVEbrqw.jpg', '2021/11/27', '', '1', '1', 'myanmar', 200, 300, 10, 0),
(78, 'Zapdidas  Palewhite Long Sleeve ', 'ppLmgQNFei7C.jpg', '2021/11/27', '', '1', '1', 'myanmar', 200, 350, 10, 0),
(79, 'Zapdidas  Black Long Sleeve ', 'pjf0Kgil6j16.jpg', '2021/11/27', '', '1', '1', 'myanmar', 300, 350, 10, 0),
(80, 'Zapdidas White Tshirt', 'gR6sUWNe4ZhP.jpg', '2021/11/27', '', '1', '1', 'myanmar', 200, 250, 10, 0),
(81, 'Zapdidas Black Tshirt', 'JKauzixz9Iav.jpg', '2021/11/27', '', '1', '1', 'myanmar', 150, 250, 10, 0),
(82, 'Zapdidas Black Jersey', 'rIUSe7dHTg5p.jpg', '2021/11/27', '', '1', '1', 'myanmar', 450, 550, 10, 0),
(83, 'Zapdidas 365 Shoe', 'l8XVvQ6Ymdgq.jpg', '2021/11/27', '', '1', '1', 'myanmar', 350, 450, 0, 1),
(84, 'Zapdidas Yeezy Shoe', '5f2IEaiwQQ3J.jpg', '2021/11/27', '', '1', '1', 'myanmar', 350, 550, 0, 1),
(85, 'Zapdidas Yeezy sneker', 'f1634nMGDQRj.jpg', '2021/11/27', '', '1', '1', 'myanmar', 350, 650, 0, 1),
(86, 'Zapdidas Yeezy Walker', '8H6ePVF76EvS.jpg', '2021/11/27', '', '1', '3', 'myanmar', 450, 650, 0, 0),
(87, 'Zapdidas 356 shoe', 'wKiKUmKuBkwY.jpg', '2021/11/27', '', '1', '3', 'myanmar', 400, 500, 10, 0),
(88, 'Zapdidas Air shoe', 'ksWz3qVO0UyQ.jpg', '2021/11/27', '', '1', '2', 'myanmar', 300, 400, 0, 1),
(89, 'Zapdidas Jordan Shoe', 'CtbShZ6ij2zt.jpg', '2021/11/27', '', '1', '3', 'myanmar', 300, 500, 10, 0),
(90, 'Zapdidas Air Max Shoe', 'C9bCyhWgwt9Z.jpg', '2021/11/27', '', '1', '2', 'myanmar', 150, 300, 0, 1),
(91, 'Zapdidas Air Jordan Shoe', 'ibheHI2dcYUU.jpg', '2021/11/27', '', '1', '3', 'myanmar', 200, 300, 5, 0),
(92, 'Zapdidas  Reboox Shoe', 'ielQEBmpLZqp.jpg', '2021/11/27', '', '1', '3', 'myanmar', 200, 500, 10, 0),
(93, 'Zapdidas  Sneeker', 'arQKCIoPYS4H.jpg', '2021/11/27', '', '1', '3', 'myanmar', 500, 600, 10, 0),
(94, 'Zapdidas  GhostZ Shoe', 'qu1jBsaIlL1i.jpg', '2021/11/27', '', '1', '3', 'myanmar', 400, 550, 10, 0),
(95, 'Zapdidas  Allstar Shoe', 'bsEBf8jNztYp.jpg', '2021/11/27', '', '1', '3', 'myanmar', 100, 150, 10, 0),
(96, 'Zapdidas  Skywalker Shoe', 'ODrVKx5FtPqY.jpg', '2021/11/27', '', '1', '3', 'myanmar', 300, 450, 10, 0),
(97, 'Zapdidas  Moonwalker Shoe', '6m6Sn2WreeOu.jpg', '2021/11/27', '', '1', '3', 'myanmar', 300, 550, 10, 0),
(98, 'Zapdidas Grey Sport Short', 'Popsm3ddwypn.jpg', '2021/11/27', '', '1', '2', 'myanmar', 100, 150, 10, 0),
(99, 'Zapdidas Style Black Short', 'Ysu7bXj4GDbU.jpg', '2021/11/27', '', '1', '2', 'myanmar', 100, 170, 10, 0),
(100, 'Zapdidas Sport Black Short', 'f6rfRVArT6Li.jpg', '2021/11/27', '', '1', '2', 'myanmar', 50, 100, 10, 0),
(101, 'Zapdidas Sport Sweat Pant', '5pRGJhyNlsiB.jpg', '2021/11/27', '', '1', '2', 'myanmar', 80, 150, 10, 0),
(102, 'Zapdidas Black sport Pant', 'jQz5zhI8sE4Q.jpg', '2021/11/27', '', '1', '2', 'myanmar', 40, 90, 10, 0),
(103, 'Zapdidas Desert Pant', 'pxhGecYZvKX2.jpg', '2021/11/27', '', '1', '2', 'myanmar', 90, 180, 10, 0),
(104, 'Zapdidas Blacksmoky Pant', 'XFBQAbTGkdla.jpg', '2021/11/27', '', '1', '2', 'myanmar', 90, 180, 10, 0),
(105, 'Zapdidas StripBlack Pant', 'OoKLQDR6jKRo.jpg', '2021/11/27', '', '1', '2', 'myanmar', 120, 200, 10, 0),
(106, 'Zapdidas Brown Walker Pant', 'uhrI10iPcIwO.jpg', '2021/11/27', '', '1', '2', 'myanmar', 120, 200, 10, 0),
(107, 'Zapdidas WhiteStrip Hoddie', '5nbI1K5vCPDs.jpg', '2021/11/27', '', '2', '1', 'myanmar', 300, 400, 10, 0),
(108, 'Zapdidas BlackStrip Hoddie', 'M5TfgFbwVsw8.jpg', '2021/11/27', '', '2', '1', 'myanmar', 300, 400, 10, 0),
(109, 'Zapdidas Long Hoddie', 'zy54ECkIuiNG.jpg', '2021/11/27', '', '2', '1', 'myanmar', 700, 800, 10, 0),
(110, 'Zapdidas Sport Long Sleeve ', 'WLjMxMjCwMPe.jpg', '2021/11/27', '', '2', '1', 'myanmar', 700, 750, 10, 0),
(111, 'Zapdidas Sport Gym Shirt', 'sx3QqetQnpVb.jpg', '2021/11/27', '', '2', '1', 'myanmar', 300, 350, 10, 0),
(112, 'Zapdidas Red Long Sleeve', 'BwwHiZo4vaDz.jpg', '2021/11/27', '', '2', '1', 'myanmar', 100, 250, 10, 0),
(113, 'Zapdidas Oceanblue Shirt', '74RbNhqdDNFs.jpg', '2021/11/27', '', '2', '1', 'myanmar', 100, 150, 10, 0),
(114, 'Zapdidas Peral Long Sleeve', 'IwDcNbMV5qLW.jpg', '2021/11/27', '', '2', '1', 'myanmar', 400, 550, 10, 0),
(115, 'Zapdidas Dark Tshirt', 'nKSWA3N447Hk.jpg', '2021/11/27', '', '2', '1', 'myanmar', 100, 250, 10, 0),
(116, 'Zapdidas Stylish Peral Pant', 'c6hVxIHqlaGR.jpg', '2021/11/27', '', '2', '2', 'myanmar', 100, 250, 10, 0),
(117, 'Zapdidas Sport Peral Pant', 'dS5PReMUIPR5.jpg', '2021/11/27', '', '2', '2', 'myanmar', 200, 350, 10, 0),
(118, 'Zapdidas Stylish Drake Pant', 'UgXPjfCuZ6ya.jpg', '2021/11/27', '', '2', '2', 'myanmar', 200, 350, 10, 0),
(119, ' Zapdidas Black Sport Short', '00gOqGnbrHhx.jpg', '2021/11/27', '2021/11/27', '2', '2', 'myanmar', 40, 70, 10, 0),
(120, 'Zapdidas Red Sport Short', '<br />\n<b>Warning</b', '2021/11/27', '', '2', '2', 'myanmar', 40, 80, 0, 1),
(121, 'Zapdidas Spacey Sport Short', 'MB00bpeuQ7us.jpg', '2021/11/27', '', '2', '2', 'myanmar', 100, 150, 10, 0),
(122, 'Zapdidas Blue Skirt', 'cLimNGtKjqBf.jpg', '2021/11/27', '', '2', '2', 'myanmar', 300, 450, 10, 0),
(123, 'Zapdidas Stylish Black Skirt', 'pG9SOaBLHHAb.jpg', '2021/11/27', '', '2', '2', 'myanmar', 300, 450, 10, 0),
(124, 'Zapdidas Fancy Flower Skirt', '5pFZH0GcNdRG.jpg', '2021/11/27', '', '2', '2', 'myanmar', 100, 250, 10, 0),
(125, 'Zapdidas Pearlish Air Shoe', 'yFYbtred9xO0.jpg', '2021/11/27', '', '2', '3', 'myanmar', 200, 450, 10, 0),
(126, 'Zapdidas Dot Jordan Shoe', 'UKBSZxX3zBBl.jpg', '2021/11/27', '', '2', '3', 'myanmar', 200, 650, 10, 0),
(127, 'Zapdidas Flower Deza Jordan Shoe', 'MibqGsixiQvl.jpg', '2021/11/27', '', '2', '3', 'myanmar', 400, 750, 5, 0),
(128, 'Zapdidas Snakeskin Jordan Shoe', 'loLtKLZxTsiK.jpg', '2021/11/27', '', '2', '3', 'myanmar', 800, 950, 5, 0),
(129, 'Zapdidas Alan Shoe', 'nB2AnxakYH5z.jpg', '2021/11/27', '', '2', '3', 'myanmar', 200, 350, 10, 0),
(130, 'Zapdidas AirWalker Shoe', 'LmB6KUo2HIF0.jpg', '2021/11/27', '', '2', '3', 'myanmar', 200, 550, 10, 0),
(131, 'Zapdidas Slipper', 'ITEtWuPyOvHn.jpg', '2021/11/27', '', '2', '3', 'myanmar', 30, 50, 10, 0),
(132, 'Zapdidas Stylish Slipper ', 'UDdHNB1qT4yz.png', '2021/11/27', '', '2', '3', 'myanmar', 40, 60, 10, 0),
(133, 'Zapdidas Stylish Sandals', 'RebAK67zcFcc.jpg', '2021/11/27', '', '2', '3', 'myanmar', 40, 60, 10, 0),
(134, 'Zapdidas Lego Yellow Hoddie', 'zfzw2R0P42Dp.jpg', '2021/11/27', '', '3', '1', 'myanmar', 100, 200, 10, 0),
(135, 'Zapdidas DarkGreyhound Hoddie', '3eGe2CN4D5YC.jpg', '2021/11/27', '', '3', '1', 'myanmar', 150, 300, 10, 0),
(136, 'Zapdidas Brownlish Hoddie', 'UTKEWrWSIiIR.jpg', '2021/11/27', '', '3', '1', 'myanmar', 150, 300, 10, 0),
(137, 'Zapdidas BunnyPinky Hoddie', 'k86MZD70LHo8.jpg', '2021/11/27', '', '3', '1', 'myanmar', 100, 130, 10, 0),
(138, 'Zapdidas Stylish Spacy Hoddie', 'XUoaA7c3F6Mz.jpg', '2021/11/27', '', '3', '1', 'myanmar', 300, 500, 10, 0),
(139, 'Zapdidas NBA Lego Tshirt', 'DFE2jTJOvA0Y.jpg', '2021/11/27', '', '3', '1', 'myanmar', 300, 500, 10, 0),
(140, 'Zapdidas MU Tshirt', 'qdX7iml5XZz3.jpg', '2021/11/27', '', '3', '1', 'myanmar', 100, 200, 10, 0),
(141, 'Zapdidas MU Mikey Tshirt', 'qsElLKdG1M2n.jpg', '2021/11/27', '', '3', '1', 'myanmar', 100, 200, 10, 0),
(142, 'Zapdidas Stylish Long Sleeve', '2wsnvWGZjir6.jpg', '2021/11/27', '', '3', '1', 'myanmar', 200, 400, 10, 0),
(143, 'Zapdidas Stylish Pant', 'hq9ZcqxpKqbg.jpg', '2021/11/27', '', '3', '2', 'myanmar', 200, 400, 10, 0),
(144, 'Zapdidas Sport Pant', 'RICVEcld8KBj.jpg', '2021/11/27', '', '3', '2', 'myanmar', 100, 200, 10, 0),
(145, 'Zapdidas Sport Warfty Pant', 'QWVlKJeQzw4Q.jpg', '2021/11/27', '', '3', '2', 'myanmar', 100, 300, 10, 0),
(146, 'Zapdidas Greyhound Pant', 'oqlpx2p9Uf7B.jpg', '2021/11/27', '', '3', '2', 'myanmar', 50, 100, 10, 0),
(147, 'Zapdidas Normal bouncy Pant', 'gw9MVOHLJm9U.jpg', '2021/11/27', '', '3', '2', 'myanmar', 50, 100, 10, 0),
(148, 'Zapdidas Darkybluey Pant', 'Loz4vsPwhtXn.jpg', '2021/11/27', '', '3', '2', 'myanmar', 50, 70, 10, 0),
(149, 'Zapdidas Colorful idiot Short', '13ZoyqDRgEOE.jpg', '2021/11/27', '', '3', '2', 'myanmar', 50, 70, 10, 0),
(150, '  Zapdidas Matu Ti Pant', '<br />\n<b>Warning</b', '2021/11/27', '2021/11/27', '3', '3', 'myanmar', 800, 950, 0, 1),
(151, 'Zapdidas White Sport Short', 'dh1PnMLI2icP.jpg', '2021/11/27', '', '3', '2', 'myanmar', 30, 60, 10, 0),
(152, 'Zapdidas Kidy Shoe', 'kFUQNyj8bTE7.jpg', '2021/11/27', '', '3', '3', 'myanmar', 100, 200, 10, 0),
(153, 'Zapdidas Air Martin Shoe', 'yK8ms8IBBs7F.jpg', '2021/11/27', '', '3', '3', 'myanmar', 100, 300, 10, 0),
(154, 'Zapdidas Stylish Flower Shoe', 'gw8vR9FjN2F2.jpg', '2021/11/27', '', '3', '3', 'myanmar', 300, 500, 10, 0),
(155, 'Zapdidas Jookingku Flower Shoe', 'YWMvYFSeCMFD.jpg', '2021/11/27', '', '3', '3', 'myanmar', 200, 300, 10, 0),
(156, 'Zapdidas Buzzlight Shoe', 'tvsU0b0o3oEE.jpg', '2021/11/27', '', '3', '3', 'myanmar', 300, 400, 10, 0),
(157, 'Zapdidas Trainer Shoe', 'Gcmj1PJJE1yN.jpg', '2021/11/27', '', '3', '3', 'myanmar', 300, 400, 10, 0),
(158, 'Zapdidas Slipper', 'th9IdEWwGtXs.jpg', '2021/11/27', '', '3', '3', 'myanmar', 30, 70, 10, 0),
(159, 'Zapdidas Stylish Flower Slipper', 'bOydJikKNY6D.png', '2021/11/27', '', '3', '3', 'myanmar', 100, 120, 10, 0),
(160, 'Zapdidas Stylish Pinky Sandals', 'BHZ4h4WAiaGs.jpg', '2021/11/27', '', '3', '3', 'myanmar', 100, 160, 10, 0),
(161, ' Zapdidas Matu Ti Pant', 'X7TECKpWSlBp.jpg', '2021/11/27', '', '3', '2', 'myanmar', 900, 950, 10, 0),
(162, 'Zapdidas Red Sport Short', 'Gs38hxI5XYpP.jpg', '2021/11/27', '', '1', '1', 'myanmar', 100, 120, 10, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `m_order`
--
ALTER TABLE `m_order`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `m_orderdetail`
--
ALTER TABLE `m_orderdetail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_user`
--
ALTER TABLE `m_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_userfeedback`
--
ALTER TABLE `m_userfeedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock_mgmt`
--
ALTER TABLE `stock_mgmt`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `m_order`
--
ALTER TABLE `m_order`
  MODIFY `orderid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `m_orderdetail`
--
ALTER TABLE `m_orderdetail`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT for table `m_user`
--
ALTER TABLE `m_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `m_userfeedback`
--
ALTER TABLE `m_userfeedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `stock_mgmt`
--
ALTER TABLE `stock_mgmt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=163;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
