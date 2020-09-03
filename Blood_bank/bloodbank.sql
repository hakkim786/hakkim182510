-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 29, 2020 at 01:11 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bloodbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `banks_registeres`
--

CREATE TABLE IF NOT EXISTS `banks_registeres` (
  `bank_id` int(11) NOT NULL AUTO_INCREMENT,
  `bank_name` varchar(40) NOT NULL,
  `bank_address` varchar(60) NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`bank_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `banks_registeres`
--

INSERT INTO `banks_registeres` (`bank_id`, `bank_name`, `bank_address`, `phone`, `email`) VALUES
(1, 'Law college square branch ', 'Law College square,Nagpur', 1234567890, 'lawcollege@gmail.com'),
(2, 'Dr.Dua clinic', 'kadbi chowk Nagpur', 1234556709, 'dua@gmail.con'),
(3, 'Dr Verma clinic', 'Sadar,Nagpur', 1346811111, 'verma@gmail.com'),
(4, 'Life Donor Blood Bank', 'Gittikhadan,Nagpur', 1081091021, 'lifedonor@gmail.com'),
(5, 'Dr Manimaran clinic', 'chinnadharapuram,karur', 2147483647, 'hakkim6129@gmail.com'),
(6, 'Dr Karunagaran clinic', 'chinnadharapuram,karur', 2147483647, 'hakkim786@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `blood_grp`
--

CREATE TABLE IF NOT EXISTS `blood_grp` (
  `blood_id` int(11) NOT NULL AUTO_INCREMENT,
  `blood_grp` varchar(5) NOT NULL,
  `price_per_bottle` int(5) NOT NULL,
  `stock` int(5) NOT NULL,
  PRIMARY KEY (`blood_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `blood_grp`
--

INSERT INTO `blood_grp` (`blood_id`, `blood_grp`, `price_per_bottle`, `stock`) VALUES
(1, 'A+', 1000, 146),
(2, 'A-', 1000, 74),
(3, 'AB+', 1000, 16),
(4, 'AB-', 1000, 52),
(5, 'B+', 500, 10),
(6, 'B-', 500, 28),
(7, 'O+', 500, 100),
(8, 'O-', 1000, 5);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE IF NOT EXISTS `transaction` (
  `blood_id` int(11) NOT NULL,
  `t_date` date NOT NULL,
  `t_qty` int(5) NOT NULL,
  `Branch` varchar(50) NOT NULL,
  `type` varchar(1) NOT NULL,
  `t_id` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`t_id`),
  KEY `blood_id` (`blood_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`blood_id`, `t_date`, `t_qty`, `Branch`, `type`, `t_id`) VALUES
(5, '2017-04-12', 10, 'Dr Verma clinic', 'p', 1),
(8, '2017-04-13', 5, 'Dr Verma clinic', 'p', 2),
(3, '2017-04-05', 10, 'Dr Verma clinic', 's', 3),
(7, '2017-04-30', 20, 'Dr Verma clinic', 'p', 4),
(7, '0000-00-00', 20, 'Dr.Dua clinic', 's', 5),
(2, '2017-04-24', 20, 'Life Donor Blood Bank', 'p', 6),
(4, '2017-04-12', 20, 'Dr Verma clinic', 's', 7),
(4, '2017-04-05', 2, 'Dr Verma clinic', 's', 8),
(4, '2017-04-05', 2, 'Dr Verma clinic', 's', 9),
(4, '2019-12-20', 5, 'mr.manimaran clinic', 'p', 10),
(1, '0000-00-00', 6, 'Dr.Dua clinic', 'p', 11),
(2, '0000-00-00', 6, 'Dr Verma clinic', 's', 12),
(6, '0000-00-00', 6, 'Dr.Dua clinic', 's', 13),
(6, '0000-00-00', 19, 'Dr Manimaran clinic', 'p', 14),
(4, '0000-00-00', 50, 'Dr Manimaran clinic', 'p', 15),
(6, '0000-00-00', 3, 'Dr Manimaran clinic', 's', 16),
(6, '0000-00-00', 4, 'Dr Verma clinic', 'p', 17),
(3, '2019-12-20', 6, 'Dr.Dua clinic', 'p', 18);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_ibfk_1` FOREIGN KEY (`blood_id`) REFERENCES `blood_grp` (`blood_id`);
