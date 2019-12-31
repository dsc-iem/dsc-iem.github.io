-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 30, 2019 at 07:53 PM
-- Server version: 5.7.24
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
-- Database: `dsciem`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `eventName` varchar(255) NOT NULL,
  `eventGuest` varchar(255) NOT NULL,
  `eventDate` varchar(255) NOT NULL,
  `eventDescription` text NOT NULL,
  `fbLink` varchar(255) NOT NULL,
  `twitterLink` varchar(255) NOT NULL,
  `active` int(11) NOT NULL,
  `eventPic` varchar(255) NOT NULL,
  `eventHeading` varchar(255) NOT NULL,
  `eventPara` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `eventspast`
--

DROP TABLE IF EXISTS `eventspast`;
CREATE TABLE IF NOT EXISTS `eventspast` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `eventName` varchar(255) NOT NULL,
  `eventGuest` varchar(255) NOT NULL,
  `eventDate` varchar(255) NOT NULL,
  `eventDescription` text NOT NULL,
  `fbLink` varchar(255) NOT NULL,
  `twitterLink` varchar(255) NOT NULL,
  `active` int(3) NOT NULL,
  `eventPic` varchar(255) NOT NULL,
  `eventHeading` varchar(255) NOT NULL,
  `eventPara` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `eventsup`
--

DROP TABLE IF EXISTS `eventsup`;
CREATE TABLE IF NOT EXISTS `eventsup` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `eventName` varchar(255) NOT NULL,
  `eventGuest` varchar(255) NOT NULL,
  `eventDescription` text NOT NULL,
  `fbLink` varchar(255) NOT NULL,
  `twiterLink` varchar(255) NOT NULL,
  `active` int(1) NOT NULL,
  `eventPic` varchar(255) NOT NULL,
  `eventheading` varchar(255) NOT NULL,
  `eventPara` text NOT NULL,
  `eventDate` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
