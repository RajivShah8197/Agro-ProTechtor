-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2018 at 05:45 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agroprotechtor`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `Qid` int(10) NOT NULL,
  `Question` varchar(200) NOT NULL,
  `NgoId` int(10) NOT NULL,
  `TimeStamp` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Name` varchar(20) NOT NULL,
  `MobileNumber` varchar(20) NOT NULL,
  `State` varchar(40) NOT NULL,
  `City` varchar(40) NOT NULL,
  `District` varchar(40) NOT NULL,
  `NGO` tinyint(1) DEFAULT NULL,
  `Age` tinyint(3) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Name`, `MobileNumber`, `State`, `City`, `District`, `NGO`, `Age`, `Password`) VALUES
('N', '7777777777', 'Andaman and Nicobar Islands', 'dd', 'dd', 1, 14, '0f991fc9ad9ed4b41f83940752678dd1'),
('Pratik', '9004066610', 'Andaman and Nicobar Islands', 'un', 'Unknown', 0, 99, 'e99a18c428cb38d5f260853678922e03'),
('varun', '9004066612', 'Maharashtra', 'mumbai', 'thane', 1, 20, 'd596618d8e4c569c2770'),
('varun', '9004066613', 'Maharashtra', 'mumbai', 'thane', 1, 20, 'b0baee9d279d34fa1dfd'),
('varun', '9004066614', 'Maharashtra', 'mumbai', 'thane', 1, 20, 'd596618d8e4c569c2770'),
('Varun', '9004066615', 'Maharashtra', 'Mumbai', 'Thane', 1, 20, '827ccb0eea8a706c4c34'),
('Rajiv Shah', '9930269817', 'Maharashtra', 'Mumbai', 'Borivali', 0, 18, '28d73f2895b2cc668028');

-- --------------------------------------------------------

--
-- Table structure for table `ngo`
--

CREATE TABLE `ngo` (
  `NgoId` int(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `description` varchar(100) NOT NULL,
  `payportal` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`Qid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`MobileNumber`);

--
-- Indexes for table `ngo`
--
ALTER TABLE `ngo`
  ADD PRIMARY KEY (`NgoId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `Qid` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ngo`
--
ALTER TABLE `ngo`
  MODIFY `NgoId` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
