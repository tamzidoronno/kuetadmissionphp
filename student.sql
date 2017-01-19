-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 05, 2016 at 10:02 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `signup`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `name` varchar(50) DEFAULT NULL,
  `hscroll` varchar(50) DEFAULT NULL,
  `hscbrd` varchar(50) DEFAULT NULL,
  `hscrslt` varchar(50) DEFAULT NULL,
  `sscroll` varchar(50) DEFAULT NULL,
  `sscbrd` varchar(50) DEFAULT NULL,
  `sscrslt` varchar(50) DEFAULT NULL,
  `math` float NOT NULL,
  `phy` float NOT NULL,
  `che` float NOT NULL,
  `eng` float NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phn` varchar(50) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `pswrd` varchar(50) DEFAULT NULL,
  `pswrd2` varchar(50) DEFAULT NULL,
  `image_link` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`name`, `hscroll`, `hscbrd`, `hscrslt`, `sscroll`, `sscbrd`, `sscrslt`, `math`, `phy`, `che`, `eng`, `email`, `phn`, `gender`, `pswrd`, `pswrd2`, `image_link`) VALUES
('Tamzid', '164318', 'Dhaka', '4.96', '164318', '', '4.88', 0, 0, 0, 0, 'tamzid.gregorian@gmail.com', '123', 'on', 'aaa', '123', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
