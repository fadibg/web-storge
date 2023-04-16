-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 23, 2021 at 05:09 PM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `aat`
--

DROP TABLE IF EXISTS `aat`;
CREATE TABLE IF NOT EXISTS `aat` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `type` int NOT NULL DEFAULT '1',
  `from_c` varchar(200) NOT NULL,
  `to_c` varchar(200) NOT NULL,
  `price` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `abt`
--

DROP TABLE IF EXISTS `abt`;
CREATE TABLE IF NOT EXISTS `abt` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(400) NOT NULL,
  `from_p` varchar(400) NOT NULL,
  `to_p` varchar(400) NOT NULL,
  `from_t` time NOT NULL,
  `to_t` time NOT NULL,
  `price` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `acar`
--

DROP TABLE IF EXISTS `acar`;
CREATE TABLE IF NOT EXISTS `acar` (
  `id` int NOT NULL AUTO_INCREMENT,
  `type` varchar(200) NOT NULL,
  `prise` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ahotel_name`
--

DROP TABLE IF EXISTS `ahotel_name`;
CREATE TABLE IF NOT EXISTS `ahotel_name` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(400) NOT NULL,
  `stars` int NOT NULL,
  `type` int NOT NULL,
  `location` varchar(400) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ahotel_rp`
--

DROP TABLE IF EXISTS `ahotel_rp`;
CREATE TABLE IF NOT EXISTS `ahotel_rp` (
  `id` int NOT NULL AUTO_INCREMENT,
  `type` varchar(200) NOT NULL,
  `price` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `aprogram`
--

DROP TABLE IF EXISTS `aprogram`;
CREATE TABLE IF NOT EXISTS `aprogram` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` int NOT NULL,
  `dis` varchar(4000) NOT NULL,
  `prise` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `at`
--

DROP TABLE IF EXISTS `at`;
CREATE TABLE IF NOT EXISTS `at` (
  `id_user` int NOT NULL,
  `id_aat` int NOT NULL,
  `price` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `av`
--

DROP TABLE IF EXISTS `av`;
CREATE TABLE IF NOT EXISTS `av` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `location` varchar(100) NOT NULL,
  `price` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `av`
--

INSERT INTO `av` (`id`, `name`, `location`, `price`) VALUES
(1, '?????? ????????', '????????', 20000),
(2, '?????? ????????', '????????', 20000),
(3, 'uae', 'uae', 200000),
(4, '5555', 'fgsdg', 400),
(5, '?????', '?????', 500),
(6, '??????', '???????', 500),
(7, '?????? ????????', '???? ??', 50),
(8, '?????? ????????', '????????', 68),
(9, '?????', '????????', 5000),
(10, '??????', '??????', 6007),
(11, 'ىىىىى', 'رتن', 6804),
(12, 'تأشيرة الامارات', 'الامارات', 6524),
(13, 'حسام', 'فادي', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `bt`
--

DROP TABLE IF EXISTS `bt`;
CREATE TABLE IF NOT EXISTS `bt` (
  `id_user` int NOT NULL,
  `id_b` int NOT NULL,
  `time` time NOT NULL,
  `price` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

DROP TABLE IF EXISTS `car`;
CREATE TABLE IF NOT EXISTS `car` (
  `id_user` int NOT NULL,
  `id_car` int NOT NULL,
  `driver` tinyint(1) NOT NULL DEFAULT '0',
  `from_t` date NOT NULL,
  `to_t` date NOT NULL,
  `price` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

DROP TABLE IF EXISTS `hotel`;
CREATE TABLE IF NOT EXISTS `hotel` (
  `id_user` int NOT NULL,
  `id_h` int NOT NULL,
  `from_d` date NOT NULL,
  `to_d` date NOT NULL,
  `price` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

DROP TABLE IF EXISTS `program`;
CREATE TABLE IF NOT EXISTS `program` (
  `id_user` int NOT NULL,
  `id_p` int NOT NULL,
  `price` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `email` varchar(300) NOT NULL,
  `phone` int NOT NULL,
  `type` int NOT NULL DEFAULT '2',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `pass`, `email`, `phone`, `type`) VALUES
(1, 'hussamadmin', '123456', 'hus@gmail.com', 999999, 1);

-- --------------------------------------------------------

--
-- Table structure for table `v`
--

DROP TABLE IF EXISTS `v`;
CREATE TABLE IF NOT EXISTS `v` (
  `id_user` int NOT NULL,
  `id_av` int NOT NULL,
  `price` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
