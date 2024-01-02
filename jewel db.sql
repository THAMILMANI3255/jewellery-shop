-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2023 at 07:13 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jewel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `aid` int(5) NOT NULL AUTO_INCREMENT,
  `aname` varchar(20) NOT NULL,
  `apass` varchar(20) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `aname`, `apass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `customer_register`
--

CREATE TABLE IF NOT EXISTS `customer_register` (
  `customer_id` int(10) NOT NULL AUTO_INCREMENT,
  `customer_name` text NOT NULL,
  `email` text NOT NULL,
  `uname` text NOT NULL,
  `upass` text NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `customer_register`
--

INSERT INTO `customer_register` (`customer_id`, `customer_name`, `email`, `uname`, `upass`) VALUES
(4, 'sandhya', 'sandhya@gmail.com', 'sandhya', 'sandhya'),
(5, 'sathya', 'sathya@gmail.com', 'sathya', 'sathya'),
(6, 'chellamani', 'chellamani@gmail.com', 'chellamani', 'chellamani'),
(7, 'arun', 'arunprasath1880@gmail', 'arun', 'arun@123'),
(8, 'guna', 'karunesguna01@gmail.com', 'guna', 'guna123');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `employee_id` int(10) NOT NULL AUTO_INCREMENT,
  `employee_name` text NOT NULL,
  `employee_desig` text NOT NULL,
  `salary` text NOT NULL,
  `sdate` date NOT NULL,
  `dept` text NOT NULL,
  `phone` text NOT NULL,
  `email` text NOT NULL,
  PRIMARY KEY (`employee_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `employee_name`, `employee_desig`, `salary`, `sdate`, `dept`, `phone`, `email`) VALUES
(1, 'praveen', 'manager', '25000', '2019-02-15', 'sales', '9887345353', 'praveen@gmail.com'),
(2, 'arun', 'salesman', '12000', '2022-06-17', 'sales', '9876543432', 'karunesguna01@gmail.com'),
(3, 'thirupathi.A', 'sales manager', '20000', '2022-06-19', 'sales', '6383110098', 'thirupathi123@gmail.com'),
(4, 'guna.m', 'salesman', '12000', '2022-06-19', 'sales', '7865493098', 'guna143@gmail.com'),
(5, 'gowtham', 'salesman', '12000', '2022-06-19', 'sales', '6389879764', 'gowtham4565@gmail.com'),
(6, 'sathish', 'salesman', '12000', '2022-06-19', 'sales', '6788787564', 'sathish5645@gmail.com'),
(7, 'samy', 'security', '10000', '2022-06-19', 'security', '9876548978', 'samy1423@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `order_table`
--

CREATE TABLE IF NOT EXISTS `order_table` (
  `order_id` int(10) NOT NULL AUTO_INCREMENT,
  `odate` date NOT NULL,
  `product_id` int(10) NOT NULL,
  `product_name` text NOT NULL,
  `product_quantity` text NOT NULL,
  `pprice` text NOT NULL,
  `gst` text NOT NULL,
  `price` int(10) NOT NULL,
  `uid` text NOT NULL,
  `pweight` text NOT NULL,
  PRIMARY KEY (`order_id`),
  UNIQUE KEY `order_id` (`order_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `order_table`
--

INSERT INTO `order_table` (`order_id`, `odate`, `product_id`, `product_name`, `product_quantity`, `pprice`, `gst`, `price`, `uid`, `pweight`) VALUES
(1, '2020-03-04', 1, 'Gold ring', '1', '12000', '5', 12600, 'sandhya', '8'),
(2, '2022-06-01', 0, 'goldring', '', '32000', '5', 0, '', '8'),
(3, '2022-06-01', 1, 'Gold ring', '2', '12000', '5', 25200, '', '4'),
(4, '2022-06-06', 1, 'Gold ring', '6', '12000', '5', 75600, 'sathya', '4'),
(5, '2022-06-06', 1, 'Gold ring', '5', '12000', '5', 63000, 'arun', '4'),
(6, '2022-06-09', 1, 'Gold ring', '2', '12000', '5', 25200, 'arun', '4'),
(7, '2022-06-10', 2, 'goldring', '2', '32000', '5', 67200, 'arun', '8'),
(8, '2022-06-10', 1, 'Gold ring', '2', '12000', '5', 25200, '', '4'),
(9, '2022-06-10', 1, 'Gold ring', '55', '12000', '5', 693000, '', '4');

-- --------------------------------------------------------

--
-- Table structure for table `product_table`
--

CREATE TABLE IF NOT EXISTS `product_table` (
  `product_id` int(10) NOT NULL AUTO_INCREMENT,
  `product_name` text NOT NULL,
  `supplier_id` text NOT NULL,
  `product_price` text NOT NULL,
  `product_quantity` text NOT NULL,
  `productid` text NOT NULL,
  `pimg` text NOT NULL,
  `pgst` text NOT NULL,
  `pweight` text NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `product_table`
--

INSERT INTO `product_table` (`product_id`, `product_name`, `supplier_id`, `product_price`, `product_quantity`, `productid`, `pimg`, `pgst`, `pweight`) VALUES
(1, 'Gold ring', 'keethi jewllers', '12000', '100', 'JGR001', 'ring.jpg', '5', '4'),
(2, 'goldring', 'keethi jewllers', '32000', '8', 'r002', 'r1.jpg', '5', '8'),
(3, 'Necklace', 'keethi jewllers', '12000', '100', 'JGR003', 'abdhija-nimah-gold-necklace.jpg', '5', '4'),
(4, 'EarRing', 'keethi jewllers', '34000', '200', 'JGR004', 'erg565-latest-one-gram-gold-small-size-jhumkas-designs-online-collections-1-850x1000.jpg.webp', '5', '8'),
(5, 'Bracelet', 'sri kumar thanaga maligai', '64000', '150', 'JGR005', '22k-gold-men-bracelet-65vg9290.jpg', '5', '16'),
(6, 'bangle', 'sandhiya', '32000', '100', 'JGR005', '3e10e18f243415cd20bd78d09329ec2e--gold-bangles-flats.jpg', '5', '8');

-- --------------------------------------------------------

--
-- Table structure for table `supplier_register`
--

CREATE TABLE IF NOT EXISTS `supplier_register` (
  `supplier_id` int(10) NOT NULL AUTO_INCREMENT,
  `supplier_name` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `adress` varchar(50) NOT NULL,
  `supply` text NOT NULL,
  PRIMARY KEY (`supplier_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `supplier_register`
--

INSERT INTO `supplier_register` (`supplier_id`, `supplier_name`, `email`, `phone`, `adress`, `supply`) VALUES
(2, 'keethi jewllers', 'keethi@gmail.com', '9994915435', 'chennai', 'gold'),
(3, 'sandhiya', 'viji27@gmail.com', '5461564', 'rama', 'silver'),
(4, 'sri kumar thanaga maligai', 'test@gmail.com', '213123123', 'coimbatore', 'bangle'),
(5, 'mani', 'chellamani@gmail.com', '9597841162', 'uppukkottai', 'gold'),
(6, 'arun', 'arunprasath1880@gmail', '9876654390', 'coimbatore', 'gold');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
