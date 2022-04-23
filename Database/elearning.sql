-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 14, 2015 at 12:42 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `elearning`
--
CREATE DATABASE IF NOT EXISTS `elearning` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `elearning`;

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE IF NOT EXISTS `quiz` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `unit` varchar(20) NOT NULL,
  `qn` varchar(200) NOT NULL,
  `ans1` varchar(100) NOT NULL,
  `ans2` varchar(100) NOT NULL,
  `ans3` varchar(100) NOT NULL,
  `ans4` varchar(100) NOT NULL,
  `cans` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `qn` (`qn`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`id`, `unit`, `qn`, `ans1`, `ans2`, `ans3`, `ans4`, `cans`) VALUES
(1, 'unit1', 'A Trivial project has ____ number of programmers', 'Four', 'Three', 'Two', 'One', 'Three'),
(2, 'unit1', 'Identify the quality that makes the software to operate correctly even\r\nIf it has valid input ', 'Supreme', 'Low', 'Medium', 'High', 'Supreme'),
(3, 'unit1', 'If the number programmer involved in project team is six then find out the number of communication path among the programmer', '36', '3', '60', '1', '36'),
(4, 'unit1', 'Identify the project size category for telecommunication systems ', 'Extremely large project', 'Trivial project', 'Small project', 'Large project', 'Extremely large project'),
(5, 'unit2', 'Work break down structure is a ', 'Hibernate', 'Hierarchy structure', 'Hierarchical chart', 'None of the above', 'Hibernate'),
(6, 'unit2', 'Expert judgement is a ', 'Top down approach', 'Bottom up approach', 'Both a and b', 'None of the above', 'Top down approach'),
(7, 'unit2', 'developed a Delphi technique', 'Norden', 'Rand corporation', 'Air force corporation', 'Helmer', 'Norden'),
(9, 'unit2', 'Work breakdown structure is also called as', 'WSM Technique', 'WBS Technique', 'Work breakdown function', 'None of the above', 'WSM Technique');

-- --------------------------------------------------------

--
-- Table structure for table `userregn`
--

CREATE TABLE IF NOT EXISTS `userregn` (
  `name` varchar(100) DEFAULT NULL,
  `rollno` varchar(50) DEFAULT NULL,
  `degree` varchar(50) DEFAULT NULL,
  `year` varchar(20) DEFAULT NULL,
  `userid` varchar(100) NOT NULL,
  `pwd` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`userid`),
  UNIQUE KEY `rollno` (`rollno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userregn`
--

INSERT INTO `userregn` (`name`, `rollno`, `degree`, `year`, `userid`, `pwd`) VALUES
('Ganesh', 'B1000901', 'UG', 'I Year', 'ganesh@gmail.com', 'ganesh');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
