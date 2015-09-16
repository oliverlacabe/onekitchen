-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2015 at 01:56 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `onekitchen`
--
CREATE DATABASE IF NOT EXISTS `onekitchen` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `onekitchen`;

-- --------------------------------------------------------

--
-- Table structure for table `anouncements`
--

CREATE TABLE IF NOT EXISTS `anouncements` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `bill_batch`
--

CREATE TABLE IF NOT EXISTS `bill_batch` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bill_no` int(11) NOT NULL,
  `date` date NOT NULL,
  `customer` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `bill_batch`
--

INSERT INTO `bill_batch` (`id`, `bill_no`, `date`, `customer`) VALUES
(1, 123123, '0000-00-00', 'asdasd');

-- --------------------------------------------------------

--
-- Table structure for table `bill_detail`
--

CREATE TABLE IF NOT EXISTS `bill_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bill_id` int(11) NOT NULL,
  `menu` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `bill_detail`
--

INSERT INTO `bill_detail` (`id`, `bill_id`, `menu`, `quantity`) VALUES
(1, 1, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `deductions`
--

CREATE TABLE IF NOT EXISTS `deductions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `deduc_name_id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `deduction` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `deduction_names`
--

CREATE TABLE IF NOT EXISTS `deduction_names` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `deduction_name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE IF NOT EXISTS `delivery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `batch_id` int(11) NOT NULL,
  `ingredient` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `unit` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`id`, `batch_id`, `ingredient`, `stock`, `price`, `unit`) VALUES
(1, 1, 1, 10, '200.00', 'Kg'),
(2, 1, 3, 5, '180.00', 'Kg'),
(3, 2, 1, 7, '180.00', 'Kg');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_batch`
--

CREATE TABLE IF NOT EXISTS `delivery_batch` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `in_charge` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `delivery_batch`
--

INSERT INTO `delivery_batch` (`id`, `date`, `in_charge`) VALUES
(1, '0000-00-00', 1),
(2, '0000-00-00', 14);

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE IF NOT EXISTS `designation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `designation_name` varchar(30) NOT NULL,
  `rate` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`id`, `designation_name`, `rate`) VALUES
(1, 'Waiter', '0.00'),
(2, 'Dish Washer', '0.00'),
(3, 'manager', '3.00'),
(4, 'security', '3.00'),
(5, 'boy', '250.00'),
(6, 'hostess', '6.00');

-- --------------------------------------------------------

--
-- Table structure for table `dtr`
--

CREATE TABLE IF NOT EXISTS `dtr` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time_in_am` time NOT NULL,
  `time_out_am` time NOT NULL,
  `time_in_pm` time NOT NULL,
  `time_out_pm` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE IF NOT EXISTS `employees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `address` varchar(60) NOT NULL,
  `designation` int(11) NOT NULL,
  `contact_no` int(11) NOT NULL,
  `tin_no` varchar(15) NOT NULL,
  `restaurant` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `emp_id`, `fname`, `lname`, `mname`, `address`, `designation`, `contact_no`, `tin_no`, `restaurant`) VALUES
(1, '0', 'asd', 'asd', 'asd', 'asdasd', 1, 0, 'asdasd', 1),
(2, '', 'asd', 'asd', 'as', 'asd', 1, 0, 'asd', 1),
(3, '', 'asd', 'asd', 'asd', 'asd', 2, 0, 'asd', 2),
(4, '', 'asd', 'asd', 'asd', 'asd', 1, 0, 'asd', 2),
(5, '', 'qwe', 'qwe', 'qwe', 'qwe', 1, 0, 'qwe', 1),
(6, '', 'sd', 'sdf', 't', 'ttt', 1, 0, 'ttt', 1),
(7, '', 'ty', 'ty', 'ty', 'ty', 2, 0, 'ty', 2),
(8, '', 'iopiop', 'asd', 'oipiop', 'iop', 2, 0, 'iop', 1),
(9, '', 'oliver', 'lacabe', 'pelenio', 'san miguel, leyte', 2, 2147483647, '123123123123123', 2),
(10, '', 'oliver', 'lacabe', 'pelenio', 'san miguel, leyte', 2, 2147483647, '123123123123123', 2),
(11, '', 'asd', 'asd', 'asd', 'asd', 2, 0, 'asd', 1),
(12, '', 'asdasd', 'aS', 'A', 'as', 2, 0, 'AAAAAaaaa', 1),
(13, '', 'asdf', 'fasdf', 'asdf', 'asd', 2, 0, 'asdf', 1),
(14, '', 'asd', 'asd', 'fgh', 'fghfgh', 1, 0, 'fghfgh', 2),
(15, '', 'asd', 'asd', 'fgh', 'fghfgh', 1, 0, 'fghfgh', 2),
(16, '', 'asd', 'asd', 'fgh', 'fghfgh', 1, 0, 'fghfgh', 2),
(17, '', 'asd', 'asd', 'fgh', 'fghfgh', 1, 0, 'fghfgh', 2),
(18, '', 'gg', 'gg', 'gg', 'gg', 2, 0, 'gg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE IF NOT EXISTS `item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ingredient_name` varchar(50) NOT NULL,
  `type` varchar(30) NOT NULL,
  `unit` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `ingredient_name`, `type`, `unit`) VALUES
(1, 'Pork', 'Before Prep', ''),
(2, 'Beef', 'Before Prep', ''),
(3, 'bangus', 'Before Prep', ''),
(5, 'Pasta', 'Before Prep', ''),
(7, 'Spare Ribs', 'After Prep', ''),
(8, 'Pork Steak', 'After Prep', '');

-- --------------------------------------------------------

--
-- Table structure for table `job_requirements`
--

CREATE TABLE IF NOT EXISTS `job_requirements` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `opening_id` int(11) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_name` varchar(30) NOT NULL,
  `menu_owner` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `menu_detail`
--

CREATE TABLE IF NOT EXISTS `menu_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu` int(11) NOT NULL,
  `ing` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `openings`
--

CREATE TABLE IF NOT EXISTS `openings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `position` varchar(20) NOT NULL,
  `vacancy` int(11) NOT NULL,
  `description` text NOT NULL,
  `owner` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(50) NOT NULL,
  `address` varchar(60) NOT NULL,
  `cash` decimal(10,2) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE IF NOT EXISTS `order_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `menu` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `prepared_items`
--

CREATE TABLE IF NOT EXISTS `prepared_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prep_date` date NOT NULL,
  `ingredient` int(11) NOT NULL,
  `pull_qty` int(11) NOT NULL,
  `prep_ingredient` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `prepared_items`
--

INSERT INTO `prepared_items` (`id`, `prep_date`, `ingredient`, `pull_qty`, `prep_ingredient`, `stock`, `price`) VALUES
(1, '2015-09-16', 1, 2, 7, 2, '191.76'),
(2, '2015-09-16', 1, 6, 7, 10, '115.06'),
(3, '2015-09-16', 1, 4, 7, 5, '153.41');

-- --------------------------------------------------------

--
-- Table structure for table `pull_out`
--

CREATE TABLE IF NOT EXISTS `pull_out` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `batch_id` int(11) NOT NULL,
  `ingredient` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `unit` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pull_out_batch`
--

CREATE TABLE IF NOT EXISTS `pull_out_batch` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `restaurant_owner` int(11) NOT NULL,
  `in_charge` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE IF NOT EXISTS `restaurant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `restaurant_name` varchar(30) NOT NULL,
  `contact_no` int(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`id`, `restaurant_name`, `contact_no`, `address`) VALUES
(1, 'Ayo Cafe', 0, ''),
(2, 'Canto Fresco', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_accounts`
--

CREATE TABLE IF NOT EXISTS `tbl_accounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userID` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_accounts`
--

INSERT INTO `tbl_accounts` (`id`, `userID`, `username`, `password`) VALUES
(1, 1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
