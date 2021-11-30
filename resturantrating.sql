-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3309
-- Generation Time: Oct 31, 2021 at 05:36 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resturantrating`
--

-- --------------------------------------------------------

--
-- Table structure for table `ratinginfo`
--

DROP TABLE IF EXISTS `ratinginfo`;
CREATE TABLE IF NOT EXISTS `ratinginfo` (
  `rate_ID` int(11) NOT NULL AUTO_INCREMENT,
  `user-ID` int(11) NOT NULL,
  `food_rate` int(11) NOT NULL,
  `menu_rate` int(11) NOT NULL,
  `service_rate` int(11) NOT NULL,
  `atmosphere_rate` int(11) NOT NULL,
  `transcation_date` date NOT NULL,
  `remarks` varchar(500) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`rate_ID`),
  KEY `user-ID` (`user-ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usersinfo`
--

DROP TABLE IF EXISTS `usersinfo`;
CREATE TABLE IF NOT EXISTS `usersinfo` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ratinginfo`
--
ALTER TABLE `ratinginfo`
  ADD CONSTRAINT `ratinginfo_ibfk_1` FOREIGN KEY (`user-ID`) REFERENCES `usersinfo` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
