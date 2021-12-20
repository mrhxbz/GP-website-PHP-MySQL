-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2021 at 02:22 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `20109816`
--
CREATE DATABASE IF NOT EXISTS `20109816` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `20109816`;

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `Id` int(11) NOT NULL,
  `Firstname` varchar(100) NOT NULL,
  `Lastname` varchar(100) NOT NULL,
  `Email` varchar(120) NOT NULL,
  `PhoneNumber` varchar(60) NOT NULL,
  `Password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`Id`, `Firstname`, `Lastname`, `Email`, `PhoneNumber`, `Password`) VALUES
(1, 'James', 'Arthur', 'james@gmail.com', '07356', 'Hello');

-- --------------------------------------------------------

--
-- Table structure for table `admin_access`
--

CREATE TABLE `admin_access` (
  `id` int(11) NOT NULL,
  `doctors_name` varchar(120) NOT NULL,
  `department` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_access`
--

INSERT INTO `admin_access` (`id`, `doctors_name`, `department`) VALUES
(2, 'rob', 'nurse'),
(5, 'Jack', 'jj'),
(8, 'Jack', 'kki'),
(9, 'Jack', 'kki'),
(10, 'Jack', 'kki'),
(11, 'Jack', 'kki'),
(12, 'Jack', 'kki'),
(13, 'kl', 'kl');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(120) NOT NULL,
  `date` date NOT NULL,
  `timeslot` varchar(255) NOT NULL,
  `doctor` varchar(120) NOT NULL,
  `department` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `name`, `email`, `date`, `timeslot`, `doctor`, `department`) VALUES
(33, 'habban', 'habbanislam@gmail.com', '2021-12-11', '12:35PM', '0', '0'),
(35, '12', 'hi@gmail.com', '2021-12-15', '12:30PM - 12:45PM', '0', '0'),
(37, 'woo', 'woohi@gmail.com', '2021-12-16', '11:15AM - 11:30AM', '0', '0'),
(38, 'habban', 'habbanislam@gmail.com', '2021-12-16', '12:45PM - 13:00PM', '0', '0'),
(39, 'habban', '1@gmail.com', '2021-12-16', '11:00AM - 11:15AM', '0', '0'),
(40, 'njnkj', 'kjns@gmail.com', '2021-12-17', '11:00AM - 11:15AM', 'Jack', 'kki');

-- --------------------------------------------------------

--
-- Table structure for table `logins`
--

CREATE TABLE `logins` (
  `Id` int(11) NOT NULL,
  `Firstname` varchar(100) NOT NULL,
  `Lastname` varchar(100) NOT NULL,
  `Email` varchar(120) NOT NULL,
  `PhoneNumber` varchar(60) NOT NULL,
  `Password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logins`
--

INSERT INTO `logins` (`Id`, `Firstname`, `Lastname`, `Email`, `PhoneNumber`, `Password`) VALUES
(1, 'habban', 'islam', 'habbanislam@gmail.com', '1234', '123'),
(3, 'Jon', 'Snow', 'jonsnow@gmail.com', '917', '126'),
(4, 'Haris', 'Sam', 'haris@gmail.com', '3456', '321'),
(5, 'Muthanna', 'Al Huraibi', 'ghghgh@gmail.com', '91400555', 'xxx123'),
(8, 'rob', 'stark', 'rob@gmail.com', '1991', '11'),
(9, 'Unknown', 'K', 'k@gmail.com', '100', '100'),
(10, 'hello', 'hi', 'hi@gmail.com', '918', '900'),
(11, 'test', '1', 'test@gmail.com', '11', '11'),
(12, 'james', 't', 'james@gmail.com', '1167', '67'),
(13, '', '', '', '', ''),
(14, '', '', '', '', ''),
(15, '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `admin_access`
--
ALTER TABLE `admin_access`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logins`
--
ALTER TABLE `logins`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_access`
--
ALTER TABLE `admin_access`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `logins`
--
ALTER TABLE `logins`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
