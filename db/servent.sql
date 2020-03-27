-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 17, 2019 at 05:04 PM
-- Server version: 5.7.19
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `servent`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `uname`, `pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `id_no` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `pet_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `mpesa` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `fname`, `email`, `id_no`, `phone`, `location`, `gender`, `pet_id`, `status`, `mpesa`) VALUES
(2, 'felix kiamba', 'kiambafelix@yahoo.com', 30073147, 705053484, 'nairobi', 'Male', 11, 'Approved', 'hskdjhajksd'),
(3, 'concepter', 'concybogita@gmail.com', 27695131, 707403614, 'kisii', 'Female', 15, 'Approved', 'DJFL870FDK9'),
(4, 'enock bosire', 'enock@gmail.com', 1234567, 717056766, 'narok', 'Male', 15, 'Approved', 'HJHK678X'),
(5, 'sazzad', 'sazzadmahmud0179@gmail.com', 34, 1795355849, 'dfsdf', 'Male', 14, 'Approved', NULL),
(6, 'sazzad', 'sazzadmahmud@gmail.com', 30073147, 1795355849, 'dfsdf', 'Male', 2, 'Pending', 'hskdjhajksd'),
(7, 'sazzad', 'sazzadmahmud@gmail.com', 35566, 1795355849, 'dfsdf', 'Male', 9, 'Pending', 'vbcvb'),
(8, 'Anup', 'anup25bd@gmail.com', 12345, 1711273666, 'dhaka', 'male', 1, 'available', 'sdklja'),
(9, 'Anup', 'anup25bd@gmail.com', 12345, 1711273666, 'dhaka', 'male', 1, 'available', 'sdklja'),
(10, 'Anup Bhowmick', 'anup25bd@gmail.com', 234234, 1711273666, 'Dhaka', 'Male', 1, 'available', NULL),
(11, 'Anup Bhowmick', 'anup25bd@gmail.com', 234234, 1711273666, 'Dhaka', 'Male', 1, 'available', NULL),
(12, 'Anup Bhowmick', 'anup25bd@gmail.com', 35566, 1711273666, 'Dhaka', 'Male', 1, 'available', NULL),
(13, 'sazzad mahmud', 'sazzadmahmud01795355849@gmail.com', 123456, 1795355849, 'Dhaka', 'Male', 1, 'available', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `msg_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY (`msg_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`msg_id`, `customer_id`, `message`, `status`, `time`) VALUES
(2, 0, 'Am happy its working?', 'Unread', '0000-00-00 00:00:00'),
(3, 0, 'Thanks for that..OK?', 'Unread', '0000-00-00 00:00:00'),
(5, 0, 'I love this. It worked the way i want...', 'Unread', '2015-08-04 21:45:33');

-- --------------------------------------------------------

--
-- Table structure for table `pets`
--

DROP TABLE IF EXISTS `pets`;
CREATE TABLE IF NOT EXISTS `pets` (
  `pet_id` int(11) NOT NULL AUTO_INCREMENT,
  `pet_name` varchar(255) NOT NULL,
  `pet_type` varchar(255) NOT NULL,
  `image` text,
  `price` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`pet_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pets`
--

INSERT INTO `pets` (`pet_id`, `pet_name`, `pet_type`, `image`, `price`, `status`) VALUES
(13, 'yesmin', 'part time', '', 34234, 'Available'),
(14, 'tonu', 'qweweq', 'Products Preview.jpg', 34234, 'Available'),
(15, 'tonu', 'kutta', 'Products Preview.jpg', 12121, 'Available'),
(17, 'tonu', 'kutta', '16422364_1273308896096089_431169793703509732_o.jpg', 3000, 'Available'),
(19, 'jesmin', 'full time', '1.jpg', 42, 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `pet_clinic`
--

DROP TABLE IF EXISTS `pet_clinic`;
CREATE TABLE IF NOT EXISTS `pet_clinic` (
  `clinic_id` int(11) NOT NULL AUTO_INCREMENT,
  `pet_id` int(11) NOT NULL,
  `location` text NOT NULL,
  `medicine` text NOT NULL,
  `doctor` varchar(255) NOT NULL,
  PRIMARY KEY (`clinic_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pet_clinic`
--

INSERT INTO `pet_clinic` (`clinic_id`, `pet_id`, `location`, `medicine`, `doctor`) VALUES
(1, 15, 'dfsdf', 'sdfsd dsfadf', 'sdfadf');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
