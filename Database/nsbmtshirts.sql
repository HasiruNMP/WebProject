-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2020 at 02:26 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

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
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `OrderID` int(20) NOT NULL,
  `Theme` varchar(255) NOT NULL,
  `StudentID` varchar(20) NOT NULL,
  `Gender` char(10) NOT NULL,
  `ContactNO` int(10) NOT NULL,
  `ProductID` varchar(20) NOT NULL,
  `Material` text NOT NULL,
  `Color` text NOT NULL,
  `Size` varchar(20) NOT NULL,
  `Price` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`OrderID`, `Theme`, `StudentID`, `Gender`, `ContactNO`, `ProductID`, `Material`, `Color`, `Size`, `Price`) VALUES
(1, 'BATTA', '45454454', 'Male', 766807668, '1234', 'Wool', '#ff0000', 'M', '100');

-- --------------------------------------------------------

--
-- Table structure for table `tshirt_details`
--

CREATE TABLE `tshirt_details` (
  `Theme` text NOT NULL,
  `prodID` varchar(10) NOT NULL,
  `Material` varchar(20) NOT NULL,
  `Color1` varchar(20) NOT NULL,
  `Color2` varchar(20) NOT NULL,
  `Color3` varchar(20) NOT NULL,
  `Color4` text NOT NULL,
  `Prices` decimal(10,0) NOT NULL,
  `ContactNO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tshirt_details`
--

INSERT INTO `tshirt_details` (`Theme`, `prodID`, `Material`, `Color1`, `Color2`, `Color3`, `Color4`, `Prices`, `ContactNO`) VALUES
('BATTA', '1234', 'Wool', '#ffff00', '#ff0000', '#00ff40', '#400040', '100', 713033790),
('NSBM', 'SE1040', 'Cotton', '#ffff00', '#ff0000', '#00ff40', '#400040', '100', 766807668);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`OrderID`);

--
-- Indexes for table `tshirt_details`
--
ALTER TABLE `tshirt_details`
  ADD PRIMARY KEY (`prodID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `OrderID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
