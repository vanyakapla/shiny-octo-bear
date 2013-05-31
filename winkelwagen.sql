-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2013 at 01:52 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `winkelwagen`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE IF NOT EXISTS `tbl_order` (
  `id` int(11) NOT NULL,
  `ordernum` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `total` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `qty` varchar(30) NOT NULL,
  `products_id` varchar(30) NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ordernum_UNIQUE` (`ordernum`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE IF NOT EXISTS `tbl_products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `price` varchar(6) NOT NULL,
  `desc` text NOT NULL,
  `picture` text NOT NULL,
  `stock` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`id`, `name`, `price`, `desc`, `picture`, `stock`) VALUES
(1, 'TPA Shen', '$2.99', 'Shen, Eye of Twilight', '/library/images/tpa_shen.jpg', NULL),
(2, 'TPA Nunu', '$3.99', 'Nunu, the Yeti Rider ', '/library/images/tpa_nunu.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_status`
--

CREATE TABLE IF NOT EXISTS `tbl_status` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `status` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(256) NOT NULL,
  `city` varchar(45) NOT NULL,
  `postalcode` varchar(7) NOT NULL,
  `adress` varchar(45) NOT NULL,
  `billingaddress` varchar(45) NOT NULL,
  `province` varchar(45) NOT NULL,
  `phonenumber` int(11) unsigned NOT NULL,
  `email` varchar(200) NOT NULL,
  `rights` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username_UNIQUE` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `firstname`, `lastname`, `username`, `password`, `city`, `postalcode`, `adress`, `billingaddress`, `province`, `phonenumber`, `email`, `rights`) VALUES
(1, 'Stephen', 'Klaasen', 'stephen', '31c77ee39f357372b91e8e806816b5789da06319bb49553d39d18eb8b36b13bc', 'lelystad', '8283 NG', 'Tjalk 3221', 'Tjalk 3221', 'Flevoland', 320252627, 'stephenklaasen@hotmail.com', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
