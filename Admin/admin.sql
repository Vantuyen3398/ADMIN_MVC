-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2021 at 03:49 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `cate_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cate_name`) VALUES
(7, 'Iphone'),
(8, 'Samsung'),
(9, 'Oppo'),
(12, 'Xiaomi');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `cate_id` int(11) NOT NULL,
  `price` float NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `cate_id`, `price`, `image`) VALUES
(19, 'Iphone 12', 7, 21990000, 'ip12.jpg'),
(20, 'Iphone 12 Pro', 7, 36990000, '60980f1a32204iphone-12-pro.jpg'),
(21, 'Iphone 12 Pro Max', 7, 41490000, 'iphone-12pro-max.jpg'),
(22, 'Oppo A54', 9, 4690000, 'oppo-a54.jpg'),
(23, 'Oppo A74', 9, 7990000, 'oppo-a74.jpg'),
(24, 'Oppo A94', 9, 7690000, 'oppo-a94.jpg'),
(25, 'Samsung Galaxy A52', 8, 10290000, 'samsung-galaxy-a52.jpg'),
(26, 'Samsung Galaxy S20', 8, 15490000, 'samsung-galaxy-s20.jpg'),
(27, 'Samsung Galaxy S21 Plus', 8, 28990000, 'samsung-galaxy-s21-plus.jpg'),
(28, 'Xiaomi Mi 11', 12, 19990000, 'xiaomi-mi-11.jpg'),
(29, 'Xiaomi Mi 11 Lite', 12, 7990000, 'xiaomi-mi-11-lite.jpg'),
(31, 'Xiaomi Redmi Note 10', 12, 4690000, 'xiaomi-redmi-note-10.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `username`, `password`, `role`, `birthday`, `avatar`, `created`, `updated`) VALUES
(3, 'Quoc Tien', 'quoctien@gmail.com', 'QuocTien', '4297f44b13955235245b2497399d7a93', 'user', '1998-05-11', 'avatar2.png', '2021-05-08 03:33:52', '2021-05-09 06:44:31'),
(4, 'Thien Hai', 'thienhai@gmail.com', 'ThienHai', '4297f44b13955235245b2497399d7a93', 'user', '1997-01-28', 'avatar2.png', '2021-05-08 03:34:30', '2021-05-09 06:45:03'),
(5, 'Tuan Di', 'phandi@gmail.com', 'tuandi', '4297f44b13955235245b2497399d7a93', 'user', '1999-05-24', 'avatar2.png', '2021-05-08 03:35:23', '0000-00-00 00:00:00'),
(7, 'Anh Nhat', 'nhat@gmail.com', 'nhat', '4297f44b13955235245b2497399d7a93', 'user', '1997-11-08', 'avatar1.png', '2021-05-08 03:37:01', '0000-00-00 00:00:00'),
(8, 'Cao Tai', 'tai@gmail.com', 'caotai', '4297f44b13955235245b2497399d7a93', 'user', '1998-05-15', 'avatar2.png', '2021-05-08 03:37:41', '0000-00-00 00:00:00'),
(9, 'Phuong Tuyen', 'ptyuyen@gmail.com', 'ptuyen', '4297f44b13955235245b2497399d7a93', 'user', '1998-08-30', 'avatar3.png', '2021-05-08 03:38:20', '2021-05-09 06:42:52'),
(34, 'Van Tuyen', 'vantuyen.nta@gmail.com', 'vantuyen', '4297f44b13955235245b2497399d7a93', 'admin', '1998-03-13', 'avatar1.png', '2021-05-09 06:49:22', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
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
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
