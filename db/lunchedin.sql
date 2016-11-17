-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2016 at 08:13 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lunchedin`
--

-- --------------------------------------------------------

--
-- Table structure for table `lunch_queue`
--

CREATE TABLE `lunch_queue` (
  `id` int(11) NOT NULL,
  `Order_No` int(10) NOT NULL,
  `Restaurant` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lunch_requests`
--

CREATE TABLE `lunch_requests` (
  `id` int(11) NOT NULL,
  `Order_Email` text NOT NULL,
  `Order_Name` text NOT NULL,
  `Order_Number` int(6) NOT NULL,
  `Order_Text` text NOT NULL,
  `Payment_Type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lunch_queue`
--
ALTER TABLE `lunch_queue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lunch_requests`
--
ALTER TABLE `lunch_requests`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lunch_queue`
--
ALTER TABLE `lunch_queue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lunch_requests`
--
ALTER TABLE `lunch_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
