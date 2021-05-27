-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 27 مايو 2021 الساعة 11:25
-- إصدار الخادم: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mystock`
--

-- --------------------------------------------------------

--
-- بنية الجدول `catigories`
--

CREATE TABLE `catigories` (
  `ID` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `quantity` int(30) NOT NULL,
  `quantity_min` int(30) NOT NULL,
  `catigorie` varchar(30) NOT NULL,
  `buy` int(30) NOT NULL,
  `img` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `catigories`
--

INSERT INTO `catigories` (`ID`, `name`, `quantity`, `quantity_min`, `catigorie`, `buy`, `img`) VALUES
(10, 'appel', 100, 20, 'fruits', 10, 'myimgs/appel.jpg'),
(11, 'banana', 200, 50, 'fruits', 15, 'myimgs/banana.jpg'),
(12, 'mandarine', 1000, 100, 'fruits', 7, 'myimgs/mandarine.jpg'),
(13, 'mango', 200, 70, 'fruits', 25, 'myimgs/mango.jpg'),
(14, 'peache', 200, 100, 'fruits', 15, 'myimgs/peache.jpg'),
(15, 'milk', 100, 20, 'milks', 7, 'myimgs/milk.jpg'),
(16, 'yagurt bio', 50, 20, 'milks', 10, 'myimgs/yagurt bio.jpg'),
(17, 'yogurt', 50, 20, 'milks', 15, 'myimgs/yogurt.jpg'),
(18, 'botato', 1000, 100, 'Vegetables', 7, 'myimgs/botato.jpg'),
(19, 'tomato', 1000, 100, 'Vegetables', 10, 'myimgs/tomato.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catigories`
--
ALTER TABLE `catigories`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catigories`
--
ALTER TABLE `catigories`
  MODIFY `ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
