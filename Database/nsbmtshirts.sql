-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2020 at 07:54 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nsbmtshirts`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`username`, `password`) VALUES
('admin1', 'pw1'),
('test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `OrderID` int(20) NOT NULL,
  `Theme` varchar(255) NOT NULL,
  `StudentID` varchar(20) NOT NULL,
  `Gender` char(10) NOT NULL,
  `ContactNO` int(10) NOT NULL,
  `ProductID` varchar(20) NOT NULL,
  `Material` text NOT NULL,
  `Color` text NOT NULL,
  `Size` varchar(20) NOT NULL,
  `Price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`OrderID`, `Theme`, `StudentID`, `Gender`, `ContactNO`, `ProductID`, `Material`, `Color`, `Size`, `Price`) VALUES
(1, 'Event3', '21006502', 'Male', 702435206, 'SE1003', 'Cotton', '#ff0000', 'M', 'Rs.1000'),
(2, 'Event3', '21006502', 'Male', 702435206, 'SE1003', 'Cotton', '#0000ff', 'S', 'Rs.1000'),
(3, 'Event3', '21006502', 'Male', 702435206, 'SE1003', 'Cotton', '#ff0000', 'M', 'Rs.1000'),
(4, 'Event1', '21006502', 'Male', 702435206, 'SE1001', 'Cotton', '#ffff80', 'M', 'Rs.1000'),
(5, 'Event1', '21006502', 'Male', 702435206, 'SE1001', 'Cotton', '#ffff80', 'M', 'Rs.1000'),
(6, 'Event2', '21006502', 'Male', 701234567, 'SE1002', 'Silk', '#ff8000', 'L', 'Rs.1000');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `stuid` varchar(8) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`stuid`, `password`) VALUES
('21006502', 'password'),
('21011848', 'password'),
('21009439', 'password'),
('21006863', 'password'),
('21009419', 'password'),
('21010128', 'password'),
('test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `tshirts`
--

CREATE TABLE `tshirts` (
  `Theme` varchar(255) NOT NULL,
  `prodID` varchar(10) NOT NULL,
  `Material` varchar(20) NOT NULL,
  `Color1` varchar(20) NOT NULL,
  `Color2` varchar(20) NOT NULL,
  `Color3` varchar(20) NOT NULL,
  `Color4` text NOT NULL,
  `Prices` decimal(10,0) NOT NULL,
  `ContactNO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tshirts`
--

INSERT INTO `tshirts` (`Theme`, `prodID`, `Material`, `Color1`, `Color2`, `Color3`, `Color4`, `Prices`, `ContactNO`) VALUES
('Event1', 'SE1001', 'Cotton', '#ffff80', '#80ff00', '#ff0000', '#000000', '1000', 766807668),
('Event2', 'SE1002', 'Silk', '#000000', '#ff8000', '#800000', '#ff0000', '1000', 766807668),
('Event3', 'SE1003', 'Cotton', '#0000ff', '#008000', '#ff8000', '#ff0000', '1000', 766807668),
('Event4', 'SE1004', 'Cotton', '#0000ff', '#008000', '#ff8000', '#ff0000', '1000', 766807668),
('Event5', 'SE1005', 'Cotton', '#ffff00', '#ff80ff', '#ff8000', '#ff0000', '1000', 766807668),
('nsmb', 'SE1040', 'Cotton', '#000000', '#000000', '#000000', '#000000', '100', 766807668),
('test', 'test', 'Cotton', '#000000', '#000000', '#000000', '#000000', '1000', 701234567);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `OrderID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
