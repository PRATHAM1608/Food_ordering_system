-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 29, 2020 at 09:40 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mcd`
--

-- --------------------------------------------------------

--
-- Table structure for table `cust`
--

DROP TABLE IF EXISTS `cust`;
CREATE TABLE IF NOT EXISTS `cust` (
  `name` varchar(255) DEFAULT NULL,
  `number` int(12) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cust`
--

INSERT INTO `cust` (`name`, `number`) VALUES
('Pratham', 94514518);

-- --------------------------------------------------------

--
-- Table structure for table `custdetails`
--

DROP TABLE IF EXISTS `custdetails`;
CREATE TABLE IF NOT EXISTS `custdetails` (
  `orderno` bigint(250) NOT NULL AUTO_INCREMENT,
  `datetime` datetime NOT NULL,
  `TableNo` int(30) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `mobile_number` varchar(12) DEFAULT NULL,
  `order_contents` varchar(255) DEFAULT NULL,
  `payable_amount` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`orderno`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `custdetails`
--

INSERT INTO `custdetails` (`orderno`, `datetime`, `TableNo`, `name`, `mobile_number`, `order_contents`, `payable_amount`) VALUES
(3, '2019-11-29 10:44:02', 1, 'Megha', '9434885649', 'McAloo Tikki1', '40.95'),
(4, '2019-11-29 10:47:33', 2, 'Himanshi', '9971490987', 'McEggIce Tea', '0'),
(2, '2019-11-27 13:00:49', 1, 'Raj Verma', '9651234582', 'McAloo Tikki2McSpicy Paneer2Extra Ketchup2', '375.9'),
(5, '2019-11-29 10:48:46', 3, 'Nitin', '9716817005', 'McAloo Tikki-Meal2Grilled Chicken Wrap2Cold Coffee2Chocolate2', '720.3'),
(6, '2019-11-29 10:48:48', 2, 'Anshu', '9971490987', 'McEgg1Ice Tea1', '103.95'),
(7, '2019-11-29 10:49:24', 5, 'Pratham', '9540194629', 'McAloo Tikki1Fillet-O-Fish-Meal1Chicken Maharaja Mac2Chicken Nuggets(10pcs)1CocaCola-Large1Chocolate1', '934.5');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
