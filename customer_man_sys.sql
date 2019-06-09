-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2019 at 06:46 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `customer_man_sys`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminId` int(11) NOT NULL,
  `adminEmail` varchar(55) NOT NULL,
  `adminPassword` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminId`, `adminEmail`, `adminPassword`) VALUES
(1, 'admin123@yahoo.com', '123123');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `cusId` int(11) NOT NULL,
  `cusName` varchar(55) NOT NULL,
  `cusEmail` varchar(55) NOT NULL,
  `cusNumber` varchar(55) NOT NULL,
  `cusCompanyName` varchar(55) NOT NULL,
  `cusAddress` varchar(55) NOT NULL,
  `cusDeleted` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`cusId`, `cusName`, `cusEmail`, `cusNumber`, `cusCompanyName`, `cusAddress`, `cusDeleted`) VALUES
(9, 'Test User', 'test@gmail.com', '076666656', 'LMS Company', '22/1,Colombo rd, Kandy', 0),
(10, 'Test two', 'sweqwe@yahoo.com', '076236656', 'MKL Company', '54, Kandy rd, Colombo', 0),
(11, 'test for', 'asdasd@yahoo.com', '0765462357', 'LLL Company', 'Landon rd, Kandy', 0),
(12, 'Test Five', 'asdasd@yahoo.com', '0712122656', 'LKM Ltd', 'Mangala rd, Colobmo', 0),
(13, 'user Test', 'user@haoo.com', '08768734232', 'LKKKKK ', '5124, Kandy rd, Colombo', 0),
(14, 'Kandy rd', 'kandyu@yahoo.com', '0765765324', 'LLLLL ', '324, Kandy rd, Colombo', 0),
(15, 'Test User', 'saajidsds@yahoo.com', '076666656', 'AVSDS', '122, Colobo rd, Kandy', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`cusId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `cusId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
