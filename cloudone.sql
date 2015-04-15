-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 13, 2015 at 01:34 PM
-- Server version: 5.5.41-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `cloudone`
--

CREATE TABLE IF NOT EXISTS `cloudone` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `air_date` text NOT NULL,
  `network` text NOT NULL,
  `spot_cost` text NOT NULL,
  `duration` text NOT NULL,
  `program` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `cloudone`
--

INSERT INTO `cloudone` (`id`, `air_date`, `network`, `spot_cost`, `duration`, `program`) VALUES
(1, '2014-04-01 5:29:00', 'MTV', '30', '30', 'R&B Divas'),
(2, '2014-04-02 14:15:00', 'MTV2', '1500', '30', 'Living Single'),
(3, '2014-04-03 8:01:00', 'BET', '300', '30', 'Movie');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
