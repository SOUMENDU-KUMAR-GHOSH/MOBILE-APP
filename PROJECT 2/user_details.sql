-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2019 at 10:15 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `soumendu`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE IF NOT EXISTS `user_details` (
  `Name` varchar(30) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Dob` varchar(30) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Confirm-Password` varchar(30) NOT NULL,
  `tou` varchar(30) NOT NULL,
  `location` varchar(30) NOT NULL,
  `Gender` varchar(30) NOT NULL,
  `Phone` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`Name`, `Address`, `Dob`, `Username`, `Password`, `Confirm-Password`, `tou`, `location`, `Gender`, `Phone`) VALUES
('.SOUMENDU', '.SHYAMNAGAR', '0', '.soumendu', '.09081998', '.09081998', '.ADMIN', '.SHYAMNAGAR', '.MALE', '1'),
('SOUMENDU', 'SHYAMNAGAR', '09/08/1998', 'soumendu', '09081998', '09081998', 'ADMIN', 'SHYAMNAGAR', 'MALE', '8240154576'),
('ANKHI ', 'BAIDABATI', '26/10/1998', 'ankhi', '26101998', '26101998', 'ADMIN', 'HOOGHLY', 'FEMALE', '8584871911'),
('SASWATA', 'BAIDABATI', '01/11/1999', 'saswata', '123456', '123456', 'USER', 'HOOGHLY', 'MALE', '8777368262');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
