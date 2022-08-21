-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 20, 2019 at 12:26 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gas_connection`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `bamount` varchar(200) NOT NULL,
  `bdate` varchar(200) NOT NULL,
  `bdelivery` varchar(200) NOT NULL,
  `desp` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `name`, `bamount`, `bdate`, `bdelivery`, `desp`) VALUES
(1, 'Harish Sharma', '680', '20/11/19', '23/11/19', 'Refill LPG Gas');

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE IF NOT EXISTS `branch` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`id`, `name`, `email`, `phone`, `city`, `state`) VALUES
(1, 'Indane Gas', 'indane789@gmail.com', '9856237410', 'Patiala', 'Punjab');

-- --------------------------------------------------------

--
-- Table structure for table `connection`
--

CREATE TABLE IF NOT EXISTS `connection` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `branch` varchar(200) NOT NULL,
  `cd` varchar(11) NOT NULL,
  `cylinder` int(11) NOT NULL,
  `cost` varchar(11) NOT NULL,
  `address` varchar(200) NOT NULL,
  `desp` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `connection`
--

INSERT INTO `connection` (`id`, `name`, `branch`, `cd`, `cylinder`, `cost`, `address`, `desp`) VALUES
(1, 'Rajveer Kaur', 'er', '2019-10-14', 2, '6000', 'H no 562 St no 19', 'Connection is required'),
(2, 'Rakesh', 'Indane Gas', '2019-10-14', 2, '6000', 'H no 56 St no 20', 'Connection is required');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `message` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `phone`, `email`, `message`) VALUES
(2, 'Rajveer Kaur', '9874561230', 'rajveer45@gmail.com', 'Need a connection asap !!'),
(3, 'Jatinder Kumar', '9874125630', 'jatinder567@gmail.com', 'Need a gas refill..');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `user` varchar(200) NOT NULL,
  `dob` varchar(200) NOT NULL,
  `mail` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `cpass` varchar(200) NOT NULL,
  `country` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `user`, `dob`, `mail`, `pass`, `cpass`, `country`, `city`, `address`) VALUES
(1, 'Harish Sharma', 'harish456', '1987-10-12', 'harish673@gmail.com', '1234', '1234', 'India', 'Patiala', 'H no 90');
