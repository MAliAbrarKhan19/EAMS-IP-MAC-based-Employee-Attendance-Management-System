-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 27, 2021 at 01:14 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eams`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `pass`) VALUES
(1, 'abrar', 'maliabrar786@gmail.com', '1234'),
(2, 'admin', 'admin@a.c', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `sl` int(100) NOT NULL,
  `emp_name` varchar(200) DEFAULT NULL,
  `emp_ip` varchar(200) DEFAULT NULL,
  `emp_mac` varchar(200) DEFAULT NULL,
  `emp_status` varchar(200) DEFAULT NULL,
  `logintime` varchar(200) DEFAULT NULL,
  `loginmin` varchar(200) DEFAULT NULL,
  `logouttime` varchar(200) DEFAULT NULL,
  `logoutmin` varchar(200) DEFAULT NULL,
  `remark` varchar(255) DEFAULT NULL,
  `day` varchar(200) DEFAULT NULL,
  `month` varchar(200) DEFAULT NULL,
  `emp_date` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`sl`, `emp_name`, `emp_ip`, `emp_mac`, `emp_status`, `logintime`, `loginmin`, `logouttime`, `logoutmin`, `remark`, `day`, `month`, `emp_date`) VALUES
(1, '', '::1', '', '', '01', '21', '', '', '', '27', '9', '27-09-2021'),
(2, 'm ali ', '::1', '', 'Logged OUT !', '03', '17', '04', '11', 'Log in & out  MAC OK & IP OK ', '27', '9', '27-09-2021'),
(3, 'Abrar Khan', '192.168.0.100', '44:d3:ad:a3:53:ea', 'Logged OUT !', '04', '13', '04', '14', ' MAC OK But Log out IP NOT OK ', '27', '9', '27-09-2021');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(100) NOT NULL,
  `emp_name` varchar(200) DEFAULT NULL,
  `emp_mobile` varchar(200) DEFAULT NULL,
  `emp_email` varchar(200) DEFAULT NULL,
  `emp_designation` varchar(200) DEFAULT NULL,
  `emp_ip` varchar(200) DEFAULT NULL,
  `emp_mac` varchar(200) DEFAULT NULL,
  `emp_pass` varchar(200) DEFAULT NULL,
  `emp_logintime` varchar(200) DEFAULT NULL,
  `emp_logouttime` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `emp_name`, `emp_mobile`, `emp_email`, `emp_designation`, `emp_ip`, `emp_mac`, `emp_pass`, `emp_logintime`, `emp_logouttime`) VALUES
(2, 'm ali ', '0191213123', 'maliabrar786@gmail.com', 'ceo', '192.168.0.103', '', '12345', '11', ''),
(3, 'Abrar Khan', '01939123946', 'abrar@gmail.com', 'Web designer', '192.168.0.101', '44:d3:ad:a3:53:ea', '12345', '10', '20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `sl` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
