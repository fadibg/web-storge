-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 31, 2019 at 04:13 PM
-- Server version: 5.7.26
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `malak_automotive_company`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

DROP TABLE IF EXISTS `cars`;
CREATE TABLE IF NOT EXISTS `cars` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_post` int(11) NOT NULL,
  `carimg` varchar(200) DEFAULT NULL,
  `car` text NOT NULL,
  `Specifications` text NOT NULL,
  `rentprice` int(10) NOT NULL,
  `phone` int(10) NOT NULL,
  `firstname` varchar(40) DEFAULT '1',
  `lastname` varchar(40) DEFAULT NULL,
  `clintphon` int(10) DEFAULT NULL,
  `receiveddate` datetime DEFAULT NULL,
  `deliverydate` datetime DEFAULT NULL,
  `driver` tinyint(1) DEFAULT NULL,
  `finalprice` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `id_post`, `carimg`, `car`, `Specifications`, `rentprice`, `phone`, `firstname`, `lastname`, `clintphon`, `receiveddate`, `deliverydate`, `driver`, `finalprice`) VALUES
(4, 13, 'Lexus-LX570-4-1067x800.jpg', 'LX570 (leuxs) Ø³ÙŠØ§Ø±Ø©', '5,7 Ø¹Ø¯Ø¯Ø§Ù„Ø±ÙƒØ§Ø¨ 8 Ù…Ø­Ø±Ùƒ Ø¨Ø³Ø¹Ø©', 800, 937248716, '1', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 13, '999.jpg', '(KIA optima 2017)', '4 Ù…Ø­Ø±Ùƒ Ø¨Ø³Ø¹Ø© (2,4) Ø¹Ø¯Ø¯Ø§Ù„Ø±ÙƒØ§Ø¨', 1200, 937248716, '1', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 13, 'jeep-8a.jpg', '(jeep) Ø³ÙŠØ§Ø±Ø© Ø¹Ø§Ø¦Ù„ÙŠØ© Ù†ÙˆØ¹', 'Ø¹Ø¯Ø¯ Ø§Ù„Ø±ÙƒØ§Ø¨ 5', 1000, 937248716, '1', NULL, NULL, NULL, NULL, NULL, NULL),
(7, 13, '666.jpg', '(HUMMER) Ø³ÙŠØ§Ø±Ø©Ø¹Ø§Ø¦Ù„ÙŠØ© Ù†ÙˆØ¹', 'Ø¹Ø¯Ø¯ Ø§Ù„Ø±ÙƒØ§Ø¨  8', 1200, 937248716, '1', NULL, NULL, NULL, NULL, NULL, NULL),
(8, 13, '333.jpg', 'cadilac x80', '5,7 Ø¹Ø¯Ø¯Ø§Ù„Ø±ÙƒØ§Ø¨ 8 Ù…Ø­Ø±Ùƒ Ø¨Ø³Ø¹Ø©', 800, 937248716, '1', NULL, NULL, NULL, NULL, NULL, NULL),
(9, 13, '777.jpg', '(Rang Rover) Ø³ÙŠØ§Ø±Ø©', '4 Ù…Ø­Ø±Ùƒ Ø¨Ø³Ø¹Ø© (2,4) Ø¹Ø¯Ø¯Ø§Ù„Ø±ÙƒØ§Ø¨', 700, 937248716, '1', NULL, NULL, NULL, NULL, NULL, NULL),
(10, 13, 'ca.jpg', 'camaro', '4 Ù…Ø­Ø±Ùƒ Ø¨Ø³Ø¹Ø© (2,4) Ø¹Ø¯Ø¯Ø§Ù„Ø±ÙƒØ§Ø¨', 12000, 937248716, '1', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` text,
  `phone` int(11) NOT NULL,
  `type` int(1) NOT NULL DEFAULT '2',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `phone`, `type`) VALUES
(1, 'malak', '123456', '', 0, 1),
(13, 'nor', '123456', 'nor@yahoo.com', 937248716, 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
