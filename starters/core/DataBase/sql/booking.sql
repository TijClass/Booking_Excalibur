-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2021 at 03:10 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `agents table`
--

CREATE TABLE `agents table` (
  `ID` int(11) NOT NULL,
  `Firstname` varchar(99) NOT NULL,
  `Lastname` varchar(99) NOT NULL,
  `Email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contact agents`
--

CREATE TABLE `contact agents` (
  `ID` int(11) NOT NULL,
  `NOM COMPLET` varchar(99) NOT NULL,
  `EMAIL` varchar(99) NOT NULL,
  `GENRE` varchar(66) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `homes`
--

CREATE TABLE `homes` (
  `ID` int(11) NOT NULL,
  `IMG` varchar(255) NOT NULL,
  `TITLE` varchar(77) NOT NULL,
  `PAY` varchar(77) NOT NULL,
  `AREA` varchar(100) NOT NULL,
  `PRICE` varchar(40) NOT NULL,
  `ROOMS` varchar(99) NOT NULL,
  `AGENT-ID` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `subscriber table`
--

CREATE TABLE `subscriber table` (
  `ID` int(11) NOT NULL,
  `Email` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agents table`
--
ALTER TABLE `agents table`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `contact agents`
--
ALTER TABLE `contact agents`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `homes`
--
ALTER TABLE `homes`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `subscriber table`
--
ALTER TABLE `subscriber table`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agents table`
--
ALTER TABLE `agents table`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact agents`
--
ALTER TABLE `contact agents`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `homes`
--
ALTER TABLE `homes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subscriber table`
--
ALTER TABLE `subscriber table`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
