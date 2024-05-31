-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 30, 2024 at 06:33 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `agri`
--

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE IF NOT EXISTS `item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Itemname` varchar(1000) NOT NULL,
  `Price` varchar(100) NOT NULL,
  `Ipath` varchar(200) NOT NULL,
  `location` varchar(100) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Qty` varchar(100) NOT NULL,
  `Uname` varchar(60) NOT NULL,
  `Mob` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `Itemname`, `Price`, `Ipath`, `location`, `Description`, `Qty`, `Uname`, `Mob`) VALUES
(22, 'Apple', '500', 'photos/greenapple.jpg', 'Kashmir', 'Fresh  Green Apple', '2kg', 'rs', '9047872534'),
(21, 'Apple', '600', 'photos/apple.jpg', 'Kashmir', 'Fresh Apple', '10kg', 'rs', '9047872534'),
(20, 'seeds', '500', 'photos/see.jpg', 'Chennai', 'Wheat Seeds', '1kg', 'rs', '9047872534');

-- --------------------------------------------------------

--
-- Table structure for table `statustbl`
--

CREATE TABLE IF NOT EXISTS `statustbl` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `Iid` varchar(100) NOT NULL,
  `Iname` varchar(100) NOT NULL,
  `Uname` varchar(100) NOT NULL,
  `Fname` varchar(100) NOT NULL,
  `Rqty` varchar(100) NOT NULL,
  `Status` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `statustbl`
--

INSERT INTO `statustbl` (`id`, `Iid`, `Iname`, `Uname`, `Fname`, `Rqty`, `Status`) VALUES
(4, '20', 'seeds', 'rs', 'rs', '2kg', 'Conform'),
(5, '20', 'seeds', 'rs', 'rs', '2kg', 'Confirm');

-- --------------------------------------------------------

--
-- Table structure for table `tab_user`
--

CREATE TABLE IF NOT EXISTS `tab_user` (
  `first_name` varchar(100) NOT NULL,
  `U_name` varchar(100) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `address` varchar(500) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `Roll` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`U_name`),
  UNIQUE KEY `U_name` (`U_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tab_user`
--

INSERT INTO `tab_user` (`first_name`, `U_name`, `email_id`, `password`, `address`, `mobile`, `Roll`, `status`) VALUES
('jeeva', 'jeeva', 'jeeva@gmail.com', 'jeeva', 'cbe', '9003502338', 'User', '1'),
('ravikumar', 'ravi', 'ravi@gmail.com', 'ravi', 'cbe', '90234342', 'User', '1'),
('rs', 'rs', 'rs@gmail.com', 'rs', 'mdu', '9047872533', 'User', '1');

-- --------------------------------------------------------

--
-- Table structure for table `uorder`
--

CREATE TABLE IF NOT EXISTS `uorder` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `iid` varchar(100) NOT NULL,
  `Iname` varchar(100) NOT NULL,
  `Price` varchar(100) NOT NULL,
  `Location` varchar(100) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `Odate` varchar(200) NOT NULL,
  `Fname` varchar(100) NOT NULL,
  `Uname` varchar(100) NOT NULL,
  `Rqty` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `uorder`
--

INSERT INTO `uorder` (`id`, `iid`, `Iname`, `Price`, `Location`, `Description`, `Odate`, `Fname`, `Uname`, `Rqty`) VALUES
(21, '20', 'seeds', '500', 'Chennai', 'Wheat Seeds', '29/04/2024', 'rs', 'rs', '2kg');
