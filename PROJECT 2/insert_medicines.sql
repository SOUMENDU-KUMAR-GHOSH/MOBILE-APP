-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2019 at 10:13 PM
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
-- Table structure for table `insert_medicines`
--

CREATE TABLE IF NOT EXISTS `insert_medicines` (
  `mnd` varchar(300) NOT NULL,
  `MANUFACTUREDATE` varchar(100) NOT NULL,
  `EXPIRYDATE` varchar(100) NOT NULL,
  `COMPANYNAME` varchar(300) NOT NULL,
  `QUANTITY` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `insert_medicines`
--

INSERT INTO `insert_medicines` (`mnd`, `MANUFACTUREDATE`, `EXPIRYDATE`, `COMPANYNAME`, `QUANTITY`) VALUES
('.DUPHALAC', '01/12/2017', '01/09/2020', 'GLAXOMITH', '30'),
('.FEBUTAZ 40', '.01/05/2011', '.01/09/2020', '.SUN PHARMA', '1'),
('.PARACETAMOL 500', '.01/12/2017', '.29/12/2019', '.GLAXOMITH', '0'),
('.CHESTON', '.01/12/2017', '.29/12/2019', '.cipla', '0');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
