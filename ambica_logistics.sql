-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2017 at 11:04 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ambica_logistics`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `fname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `profile_picture` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_login_ip` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_login_at` datetime DEFAULT NULL,
  `current_login_ips` text COLLATE utf8_unicode_ci,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `fname`, `lname`, `email`, `mobile`, `username`, `password`, `profile_picture`, `last_login_ip`, `last_login_at`, `current_login_ips`, `created_at`, `updated_at`) VALUES
(2, 'lakhan', 'sen', 'lakhan.vapi@gmail.com', 9727612000, 'lakhansen', '1f406e5ff9b178e9c506e363bf1716ad', NULL, NULL, NULL, NULL, '2017-10-26 00:39:27', '2017-10-26 00:39:27');

-- --------------------------------------------------------

--
-- Table structure for table `branch_masters`
--

CREATE TABLE `branch_masters` (
  `id` int(6) NOT NULL,
  `branch_name` varchar(255) NOT NULL,
  `branch_code` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pincode` int(25) NOT NULL,
  `state` varchar(255) NOT NULL,
  `std_code` int(25) NOT NULL,
  `phone1` int(25) NOT NULL,
  `phone2` int(25) NOT NULL,
  `phone3` int(25) NOT NULL,
  `fax` int(25) NOT NULL,
  `mobile` int(25) NOT NULL,
  `manager` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch_masters`
--

INSERT INTO `branch_masters` (`id`, `branch_name`, `branch_code`, `address`, `pincode`, `state`, `std_code`, `phone1`, `phone2`, `phone3`, `fax`, `mobile`, `manager`, `email`) VALUES
(2, 'Bulsar', 'BL', 'valsad', 396001, 'gujarat', 2632, 224687, 224687, 224687, 224687, 2147483647, 'lakhani', 'lak@gmail'),
(20, 'Surat', 'su', 'surat', 396001, 'Gujarat', 2632, 224678, 224678, 224678, 224678, 2147483647, 'lakhani', 'lakhani@gmail.com'),
(22, 'Vapi1', 'vap', 'vapi', 396001, 'Gujarat', 2632, 224678, 224678, 224678, 224678, 2147483647, 'lakhani', 'lakhani@gmail.com'),
(25, 'Baroda', 'bd', 'Baroda', 396001, 'Gujarat', 2632, 224678, 224678, 224678, 224678, 2147483647, 'lakhani', 'lakhani@gmail.com'),
(28, 'Bharuch', 'Bh', 'Bharuch', 396001, 'Gujarat', 2632, 224678, 224678, 224678, 224678, 2147483647, 'lakhani', 'lakhani@gmail.com'),
(32, 'Valsad', 'VL', 'Valsad', 396001, 'Gujarat', 2632, 224678, 224678, 224678, 224678, 2147483647, 'lakhani', 'lakhani@gmail.com'),
(33, 'Bilimora', 'BIL', 'Bilimora', 396001, 'Gujarat', 2632, 224678, 224678, 224678, 224678, 2147483647, 'lakhani', 'lakhani@gmail.com'),
(34, 'Ahmedabad', 'AHM', 'Ahmedabad', 396001, 'Gujarat', 2632, 224678, 224678, 224678, 224678, 2147483647, 'lakhani', 'lakhani@gmail.com'),
(36, 'Andheri', 'AND', 'Andheri', 396001, 'Maharashtra', 2632, 224678, 224678, 224678, 224678, 2147483647, 'lakhani', 'lakhani@gmail.com'),
(39, 'Daman', 'Dam', 'Daman', 396001, 'Gujarat', 2632, 224678, 224678, 224678, 224678, 2147483647, 'lakhani', 'lakhani@gmail.com'),
(40, 'Valsad', 'VAL', ' Valsad', 396001, 'Gujarat', 2632, 224618, 224618, 224618, 224618, 2147483647, 'Lakhan', 'lakhan@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `godown`
--

CREATE TABLE `godown` (
  `id` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `godown_name` varchar(255) DEFAULT NULL,
  `code` varchar(255) NOT NULL,
  `under_branch` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_no` int(15) NOT NULL,
  `email_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branch_masters`
--
ALTER TABLE `branch_masters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `godown`
--
ALTER TABLE `godown`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `branch_masters`
--
ALTER TABLE `branch_masters`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `godown`
--
ALTER TABLE `godown`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
