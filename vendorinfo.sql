-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 25, 2012 at 12:53 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vendor`
--

-- --------------------------------------------------------

--
-- Table structure for table `vendorinfo`
--

CREATE TABLE IF NOT EXISTS `vendorinfo` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `pwd` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` int(10) NOT NULL,
  `stn` int(14) NOT NULL,
  `tper` float NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Dumping data for table `vendorinfo`
--

INSERT INTO `vendorinfo` (`sno`, `name`, `pwd`, `email`, `mobile`, `stn`, `tper`) VALUES
(44, 'demo1', '23456', 'abc@gmail.com', 2147483647, 2147483647, 23.04);
