-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2017 at 09:54 AM
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
-- Table structure for table `account_groups`
--

CREATE TABLE `account_groups` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account_groups`
--

INSERT INTO `account_groups` (`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 0, 'shubham', '2017-11-01 14:43:37', '2017-11-01 14:43:37'),
(2, 0, 'test', '2017-11-01 15:11:13', '2017-11-01 15:11:13'),
(3, 0, 'test2', '2017-11-01 15:21:35', '2017-11-01 15:21:35'),
(8, 1, 'sample', '2017-11-01 17:19:12', '2017-11-01 17:19:12'),
(9, 8, 'test7', '2017-11-01 18:07:13', '2017-11-01 18:07:13'),
(10, 9, '123', '2017-11-03 14:58:40', '2017-11-03 14:58:40'),
(11, 8, 'sample1', '2017-11-04 00:42:40', '2017-11-04 00:42:40');

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
  `address` varchar(255) DEFAULT NULL,
  `pincode` int(25) NOT NULL,
  `state` varchar(255) NOT NULL,
  `phone1` int(25) NOT NULL,
  `fax` int(25) NOT NULL,
  `mobile` int(25) NOT NULL,
  `mobile2` int(15) NOT NULL,
  `manager_id` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch_masters`
--

INSERT INTO `branch_masters` (`id`, `branch_name`, `branch_code`, `address`, `pincode`, `state`, `phone1`, `fax`, `mobile`, `mobile2`, `manager_id`, `email`, `created_at`, `updated_at`) VALUES
(65, 'Andheri', 'ANDH', 'Andheri', 396001, 'Maharashtra', 222632, 222632, 2147483647, 0, '3', 'test@gmail.com', '2017-11-06 19:33:00', '2017-11-06 19:33:00'),
(66, 'Valsad23', 'VAL1', 'Valsad', 396001, 'Gujarat', 222632, 222632, 2147483647, 0, '3', 'test@gmail.com', '2017-11-06 19:33:00', '2017-11-06 19:33:00'),
(67, 'test jag', 'testj', '', 0, '', 222632, 0, 0, 0, '4', '', '2017-11-06 19:33:00', '2017-11-06 19:33:00'),
(68, 'Borivali', 'Bor', 'Borivali', 396001, 'Maharashtra', 222632, 222632, 2147483647, 789644, '1', 'test@gmail.com', '2017-11-06 21:05:56', '2017-11-06 21:16:01'),
(69, 'Pardi', 'Prd0260', 'Pardi', 396195, 'Gujarat', 0, 0, 94, 94, '3', 'lakhan@email.com', '2017-11-06 21:51:58', '2017-11-06 21:52:35');

-- --------------------------------------------------------

--
-- Table structure for table `courier_master`
--

CREATE TABLE `courier_master` (
  `id` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courier_master`
--

INSERT INTO `courier_master` (`id`, `company_name`, `created_at`, `updated_at`) VALUES
(2, 'Blue Dart', '2017-11-06 19:14:01', '2017-11-06 19:14:01');

-- --------------------------------------------------------

--
-- Table structure for table `destinations`
--

CREATE TABLE `destinations` (
  `id` int(11) NOT NULL,
  `station_name` varchar(255) NOT NULL,
  `pin` int(15) NOT NULL,
  `state` varchar(255) NOT NULL,
  `std` int(15) NOT NULL,
  `branch_id` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `destinations`
--

INSERT INTO `destinations` (`id`, `station_name`, `pin`, `state`, `std`, `branch_id`, `code`, `created_at`, `updated_at`) VALUES
(8, 'Vapi', 396001, 'Gujarat', 2632, '66', 'Vap', '2017-11-06 19:35:00', '2017-11-06 19:35:00'),
(9, 'Valsad', 396001, 'Gujarat', 2632, '66', 'Val', '2017-11-06 20:11:42', '2017-11-06 20:12:36');

-- --------------------------------------------------------

--
-- Table structure for table `godowns`
--

CREATE TABLE `godowns` (
  `id` int(11) NOT NULL,
  `godown_name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `branch_id` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_no` int(20) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `godowns`
--

INSERT INTO `godowns` (`id`, `godown_name`, `code`, `branch_id`, `address`, `phone_no`, `email_id`, `created_at`, `updated_at`) VALUES
(2, 'Test1', 'test1god', 'under branch', 'Vapi', 2147483647, 'lakhan@gmail.com', '2017-11-06 19:35:40', '2017-11-06 19:35:40'),
(4, 'Test2', 'test2god', 'under branch', '', 0, '', '2017-11-06 19:35:40', '2017-11-06 19:35:40'),
(7, 'Test1', '', 'Daman', '', 0, '', '2017-11-06 19:35:40', '2017-11-06 19:35:40'),
(8, 'Test3', 'test3god', 'Hyderabad', 'Valsad', 2147483647, 'lakhan@gmail.com', '2017-11-06 19:35:40', '2017-11-06 19:35:40'),
(9, 'Test45', 'test1god', '60', '', 0, '', '2017-11-06 19:35:40', '2017-11-06 19:35:40'),
(10, 'Test5', 'test5god', '20', 'Surat', 2147483647, 'lakhan@gmail.com', '2017-11-06 19:35:40', '2017-11-06 19:35:40'),
(11, 'Godown1', 'God1', '66', 'Andheri', 2147483647, 'god@gmail.com', '2017-11-06 19:59:45', '2017-11-06 20:01:19');

-- --------------------------------------------------------

--
-- Table structure for table `goods`
--

CREATE TABLE `goods` (
  `id` int(11) NOT NULL,
  `goods_content` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `goods`
--

INSERT INTO `goods` (`id`, `goods_content`, `code`, `created_at`, `updated_at`) VALUES
(1, 'test1', 'test', '2017-11-06 19:36:57', '2017-11-06 19:36:57'),
(3, 'test2', 'test2', '2017-11-06 19:36:57', '2017-11-06 19:36:57'),
(4, 'test3', 'test3', '2017-11-06 19:36:57', '2017-11-06 19:36:57');

-- --------------------------------------------------------

--
-- Table structure for table `insurance`
--

CREATE TABLE `insurance` (
  `id` int(11) NOT NULL,
  `company_id` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `insurance`
--

INSERT INTO `insurance` (`id`, `company_id`, `created_at`, `updated_at`) VALUES
(3, '1', '2017-11-06 19:38:31', '2017-11-06 19:38:31'),
(5, '5', '2017-11-06 19:38:31', '2017-11-06 19:38:31'),
(6, '10', '2017-11-06 19:38:31', '2017-11-06 19:38:31'),
(9, '1', '2017-11-06 19:38:31', '2017-11-06 19:38:31'),
(11, '8', '2017-11-06 19:38:31', '2017-11-06 19:38:31');

-- --------------------------------------------------------

--
-- Table structure for table `insurance_company`
--

CREATE TABLE `insurance_company` (
  `id` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `insurance_company`
--

INSERT INTO `insurance_company` (`id`, `company_name`, `created_at`, `updated_at`) VALUES
(1, 'test', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'test2', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'test32', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'sample', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Axis bank', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'xyz abc', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'ICICI Bank', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `ledger_master`
--

CREATE TABLE `ledger_master` (
  `id` int(11) NOT NULL,
  `account_name` varchar(255) NOT NULL,
  `group_id` int(11) NOT NULL,
  `contact_person` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile1` int(20) NOT NULL,
  `mobile2` int(20) NOT NULL,
  `office_no` int(15) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ledger_master`
--

INSERT INTO `ledger_master` (`id`, `account_name`, `group_id`, `contact_person`, `address`, `email`, `mobile1`, `mobile2`, `office_no`, `created_at`, `updated_at`) VALUES
(2, 'test', 2, 'test', 'test', 'test@gmail.com', 78965454, 789644, 789654, '2017-11-06 19:39:18', '2017-11-06 19:39:18'),
(3, 'test213', 8, 'test2', 'test2', 'test@gmail.com', 78965454, 789644, 789654, '2017-11-06 19:39:18', '2017-11-06 19:39:18');

-- --------------------------------------------------------

--
-- Table structure for table `managers`
--

CREATE TABLE `managers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile1` int(20) NOT NULL,
  `mobile2` int(20) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `managers`
--

INSERT INTO `managers` (`id`, `name`, `email`, `mobile1`, `mobile2`, `created_at`, `updated_at`) VALUES
(1, 'Shubham', 'shubham@email.com', 789456123, 123456789, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Lakhan', 'lakhan@email.com', 789654123, 789654123, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'sample', 'sample@ymail.com', 789654123, 123654789, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `packings`
--

CREATE TABLE `packings` (
  `id` int(11) NOT NULL,
  `packing_type` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packings`
--

INSERT INTO `packings` (`id`, `packing_type`, `created_at`, `updated_at`) VALUES
(2, 'Drum1', '2017-11-06 19:39:57', '2017-11-06 19:39:57'),
(3, 'Cylinder12', '2017-11-06 19:39:57', '2017-11-06 19:39:57'),
(4, 'Barell', '2017-11-06 20:20:02', '2017-11-06 20:20:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_groups`
--
ALTER TABLE `account_groups`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `courier_master`
--
ALTER TABLE `courier_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destinations`
--
ALTER TABLE `destinations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `godowns`
--
ALTER TABLE `godowns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `insurance`
--
ALTER TABLE `insurance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `insurance_company`
--
ALTER TABLE `insurance_company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ledger_master`
--
ALTER TABLE `ledger_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `managers`
--
ALTER TABLE `managers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packings`
--
ALTER TABLE `packings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_groups`
--
ALTER TABLE `account_groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `branch_masters`
--
ALTER TABLE `branch_masters`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
--
-- AUTO_INCREMENT for table `courier_master`
--
ALTER TABLE `courier_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `destinations`
--
ALTER TABLE `destinations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `godowns`
--
ALTER TABLE `godowns`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `insurance`
--
ALTER TABLE `insurance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `insurance_company`
--
ALTER TABLE `insurance_company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `ledger_master`
--
ALTER TABLE `ledger_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `managers`
--
ALTER TABLE `managers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `packings`
--
ALTER TABLE `packings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
