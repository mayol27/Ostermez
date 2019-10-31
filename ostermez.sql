-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2019 at 06:43 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ostermez`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `phone_num` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `account_type` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `fname`, `lname`, `phone_num`, `username`, `password`, `account_type`, `status`, `date_time`) VALUES
(1, 'Rovehl', 'Tan', '0912344', 'gwapa', '18298e22fd8fabf042fc88421af05410', 'Employee', 'Active', '2019-10-25 08:17:37'),
(2, 'John Lloyd', 'Mayol', '0921314', 'mayol', '41e6ad00550e7ba84370a6556f68b82f', 'Employee', 'Active', '2019-10-25 08:26:18'),
(3, 'qwe', 'qwe', '099', 'qqwe', 'ca0bb2b90986a77fb3cb4d6da4e8d081', 'Admin', 'Active', '2019-10-25 09:12:20'),
(4, 'Rovehl', 'Tan', '0912344', 'gwapa', '18298e22fd8fabf042fc88421af05410', 'Please sel', 'Active', '2019-10-29 11:55:18'),
(5, 'Rovehl', 'Tan', '0912344', 'gwapa', '18298e22fd8fabf042fc88421af05410', 'Please sel', 'Active', '2019-10-29 11:55:47'),
(6, 'q', 'q', '1', 'q', '7694f4a66316e53c8cdd9d9954bd611d', 'Please sel', 'Active', '2019-10-29 11:56:21');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `cli_id` int(11) NOT NULL,
  `cli_fname` varchar(50) NOT NULL,
  `cli_lname` varchar(50) NOT NULL,
  `cli_phone` int(11) NOT NULL,
  `cli_address` text NOT NULL,
  `cli_department` varchar(50) NOT NULL,
  `cli_payment` double NOT NULL,
  `cli_date_register` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`cli_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `cli_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
