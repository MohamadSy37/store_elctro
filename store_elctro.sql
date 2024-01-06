-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 08 أغسطس 2023 الساعة 07:41
-- إصدار الخادم: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store_elctro`
--

-- --------------------------------------------------------

--
-- بنية الجدول `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL,
  `disc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `category`
--

INSERT INTO `category` (`id`, `name`, `img`, `disc`) VALUES
(11, 'Mobile', 'category-64d105a7cbfab4.08310465.png', 'Mobille Phone\r\n'),
(12, 'laptop', 'category-64d1524c71a1e0.14611954.png', 'asdasd');

-- --------------------------------------------------------

--
-- بنية الجدول `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `incoming_msg_id` int(11) NOT NULL,
  `outgoing_msg_id` int(11) NOT NULL,
  `msg` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `messages`
--

INSERT INTO `messages` (`id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES
(1, 4, 9, 'hello'),
(2, 4, 9, 'hi'),
(3, 9, 4, 'Joy Boy'),
(4, 4, 9, 'One piece Uncal'),
(5, 4, 10, 'hi'),
(6, 4, 10, 'how are you '),
(7, 10, 4, 'fun and you?'),
(8, 4, 10, '4k'),
(9, 10, 4, 'fdg');

-- --------------------------------------------------------

--
-- بنية الجدول `paymant`
--

CREATE TABLE `paymant` (
  `id` int(11) NOT NULL,
  `code` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `mony` int(11) DEFAULT NULL,
  `site` varchar(50) DEFAULT NULL,
  `phone` int(50) DEFAULT NULL,
  `prodact` varchar(50) DEFAULT NULL,
  `statue` varchar(50) NOT NULL DEFAULT 'Padding',
  `noted` varchar(50) NOT NULL,
  `id_store` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- بنية الجدول `prodact`
--

CREATE TABLE `prodact` (
  `id` int(50) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `img` varchar(250) DEFAULT NULL,
  `disc` varchar(50) DEFAULT NULL,
  `cost` varchar(50) DEFAULT NULL,
  `id_catogary` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `prodact`
--

INSERT INTO `prodact` (`id`, `name`, `img`, `disc`, `cost`, `id_catogary`) VALUES
(8, 'samsung 7+', 'prodact-64d152d3607e46.31739542.png', 'samsung 7+ New', '1000000', 11);

-- --------------------------------------------------------

--
-- بنية الجدول `store`
--

CREATE TABLE `store` (
  `id` int(11) NOT NULL,
  `id_user` int(50) DEFAULT NULL,
  `id_pro` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `store`
--

INSERT INTO `store` (`id`, `id_user`, `id_pro`) VALUES
(31, 9, 8);

-- --------------------------------------------------------

--
-- بنية الجدول `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `img` varchar(250) NOT NULL,
  `type` varchar(10) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `img`, `type`) VALUES
(4, 'ADMIN', 'admin@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'profile-64c7d6ecdb7228.21225906.png', 'admin'),
(5, 'Mohamad', 'mohamad@gmail.com', '25d55ad283aa400af464c76d713c07ad', '', 'user'),
(6, 'Ali', 'MohamadGH37@ff.cd', 'efd2e247e1fa40fcd5f0ee5fc61008cf', '', 'user'),
(7, 'Ali', 'ad3min@admin.com', '25d55ad283aa400af464c76d713c07ad', '', 'user'),
(8, 'moyhammad', 'mohammad@gmarl.com', '25d55ad283aa400af464c76d713c07ad', '', 'user'),
(9, 'Moamad Ali', 'mohamad@ssgmail.com', 'dfd6c9feb3c554b2edc3d17aad346ba0', 'profile-64cf6cf4cf6854.41188014.png', 'user'),
(10, 'user1', 'user1@gmail.com', '64ef6363b95a28c2c1b91189a57fec54', 'profile-64cfd0f7444007.70709947.jpg', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paymant`
--
ALTER TABLE `paymant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prodact`
--
ALTER TABLE `prodact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `paymant`
--
ALTER TABLE `paymant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `prodact`
--
ALTER TABLE `prodact`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
