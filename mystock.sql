-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 26 مايو 2021 الساعة 13:03
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
  `catigorie` varchar(30) NOT NULL,
  `buy` int(30) NOT NULL,
  `stars` int(30) NOT NULL,
  `img` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `catigories`
--

INSERT INTO `catigories` (`ID`, `name`, `quantity`, `catigorie`, `buy`, `stars`, `img`) VALUES
(2, 'iphone', 80, 'phones', 0, 0, './myimgs/phone.jpg'),
(3, 'car', 23, 'cars', 0, 0, './myimgs/jeep.jpg'),
(6, 'ouassima', 3, 'phone', 12, 2, '1'),
(7, 'samsung', 3, 'headphone', 3, 2, 'C:xampp	mpphp9234.tmp');

-- --------------------------------------------------------

--
-- بنية الجدول `login`
--

CREATE TABLE `login` (
  `username` varchar(30) NOT NULL,
  `upassword` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `login`
--

INSERT INTO `login` (`username`, `upassword`) VALUES
('tawfiq@tw.com', 'nnn'),
('hafssa@hafssa.com', 'hello');

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
  MODIFY `ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
