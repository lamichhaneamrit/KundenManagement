-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 18, 2022 at 09:24 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kunde`
--

-- --------------------------------------------------------

--
-- Table structure for table `kunde`
--

CREATE TABLE `kunde` (
  `kunde_id` int(11) NOT NULL,
  `name1` varchar(20) NOT NULL,
  `name2` varchar(20) NOT NULL,
  `street` varchar(40) NOT NULL,
  `plz` varchar(10) NOT NULL,
  `ort` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kunde`
--

INSERT INTO `kunde` (`kunde_id`, `name1`, `name2`, `street`, `plz`, `ort`) VALUES
(1, 'Amrit Solta', 'Odenis ', 'Kosakengasse', '26131', 'Oldenburg'),
(2, 'Hari Krishna', 'Murari', 'Hemmelsbäker kanalweg 25', '26131', 'Jülich'),
(3, 'Badr audines', 'Irari2', 'Hemmelsbäker kanalweg 23', '65667', 'Oldenburg'),
(4, 'Shusma', 'Magar', 'Hemmelsbäker kanalweg 23', '52428', 'Siegen'),
(6, 'Aladin', 'Thapa', 'Stecjkendörfer straße 4', '26131', 'Oldenburg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kunde`
--
ALTER TABLE `kunde`
  ADD PRIMARY KEY (`kunde_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kunde`
--
ALTER TABLE `kunde`
  MODIFY `kunde_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
