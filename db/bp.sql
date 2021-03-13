-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 13, 2021 at 01:11 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bp`
--

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

DROP TABLE IF EXISTS `property`;
CREATE TABLE IF NOT EXISTS `property` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `street_address` varchar(100) NOT NULL,
  `city` varchar(11) NOT NULL,
  `state` varchar(11) NOT NULL,
  `zip` int(11) NOT NULL,
  `purchase_price` int(11) NOT NULL,
  `down_payment` float NOT NULL,
  `purchase_closing_cost` int(11) NOT NULL,
  `estimated_repair_cost` int(11) NOT NULL DEFAULT '0',
  `interest_rate` float NOT NULL,
  `points_charged` float NOT NULL DEFAULT '0',
  `loan_term` int(11) NOT NULL,
  `gross_monthly_income` int(11) NOT NULL,
  `property_taxes` int(11) NOT NULL,
  `insurance` int(11) NOT NULL,
  `repairs_maintenance` int(11) NOT NULL,
  `vacancy` int(11) NOT NULL,
  `capital_expenditures` int(11) NOT NULL,
  `management_fees` int(11) NOT NULL DEFAULT '0',
  `electricity` int(11) NOT NULL,
  `gas` int(11) NOT NULL DEFAULT '0',
  `water_sewer` int(11) NOT NULL DEFAULT '0',
  `hoa_fees` int(11) NOT NULL DEFAULT '0',
  `garbage` int(11) NOT NULL DEFAULT '0',
  `other` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`id`, `street_address`, `city`, `state`, `zip`, `purchase_price`, `down_payment`, `purchase_closing_cost`, `estimated_repair_cost`, `interest_rate`, `points_charged`, `loan_term`, `gross_monthly_income`, `property_taxes`, `insurance`, `repairs_maintenance`, `vacancy`, `capital_expenditures`, `management_fees`, `electricity`, `gas`, `water_sewer`, `hoa_fees`, `garbage`, `other`) VALUES
(1, '5810 Shadow Gln', 'San Antonio', 'TX', 78240, 429000, 20, 3500, 0, 3.5, 0, 30, 4000, 753, 351, 5, 8, 10, 10, 0, 0, 0, 0, 0, 50);
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
