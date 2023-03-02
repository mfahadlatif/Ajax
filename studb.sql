-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2021 at 05:58 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `studb`
--

-- --------------------------------------------------------

--
-- Table structure for table `class_tbl`
--

CREATE TABLE IF NOT EXISTS `class_tbl` (
  `cls_id` int(11) NOT NULL,
  `cls_nme` varchar(35) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class_tbl`
--

INSERT INTO `class_tbl` (`cls_id`, `cls_nme`) VALUES
(1, 'play group'),
(2, 'Nuresry'),
(3, 'prep'),
(4, 'pre school'),
(5, 'one');

-- --------------------------------------------------------

--
-- Table structure for table `exam_type`
--

CREATE TABLE IF NOT EXISTS `exam_type` (
  `type_id` int(11) NOT NULL,
  `type_nme` varchar(85) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `exm_tbl`
--

CREATE TABLE IF NOT EXISTS `exm_tbl` (
  `exm_id` int(11) NOT NULL,
  `exm_nme` varchar(100) NOT NULL,
  `exm_dte` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exm_tbl`
--

INSERT INTO `exm_tbl` (`exm_id`, `exm_nme`, `exm_dte`) VALUES
(1, 'first class', '2021-01-29'),
(2, '2nd term', '2021-01-30');

-- --------------------------------------------------------

--
-- Table structure for table `stu_tbl`
--

CREATE TABLE IF NOT EXISTS `stu_tbl` (
  `stu_id` int(11) NOT NULL,
  `stu_nme` varchar(75) NOT NULL,
  `father_nme` varchar(75) DEFAULT NULL,
  `fee` int(11) NOT NULL,
  `stu_sta` varchar(25) DEFAULT NULL,
  `cls` int(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stu_tbl`
--

INSERT INTO `stu_tbl` (`stu_id`, `stu_nme`, `father_nme`, `fee`, `stu_sta`, `cls`) VALUES
(1, 'asad', 'fasad', 1000, 'admitted', 1),
(2, 'haron', 'fname', 1200, 'admitted', 5),
(3, 'husanian asad raza alichdcabh', 'fhusanain asad raza ali avjhdyuascgv', 11000, 'admitted', 3),
(4, 'Ali', 'haider', 1300, 'admitted', 5),
(5, 'Muhmmad Ali', 'eco', 1310, 'admitted', 2),
(6, 'asad', 'prof', 1500, 'admitted', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class_tbl`
--
ALTER TABLE `class_tbl`
  ADD PRIMARY KEY (`cls_id`);

--
-- Indexes for table `exam_type`
--
ALTER TABLE `exam_type`
  ADD PRIMARY KEY (`type_id`), ADD UNIQUE KEY `type_nme` (`type_nme`), ADD UNIQUE KEY `type_nme_2` (`type_nme`);

--
-- Indexes for table `exm_tbl`
--
ALTER TABLE `exm_tbl`
  ADD PRIMARY KEY (`exm_id`), ADD UNIQUE KEY `exm_nme` (`exm_nme`);

--
-- Indexes for table `stu_tbl`
--
ALTER TABLE `stu_tbl`
  ADD PRIMARY KEY (`stu_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class_tbl`
--
ALTER TABLE `class_tbl`
  MODIFY `cls_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `exam_type`
--
ALTER TABLE `exam_type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `exm_tbl`
--
ALTER TABLE `exm_tbl`
  MODIFY `exm_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `stu_tbl`
--
ALTER TABLE `stu_tbl`
  MODIFY `stu_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
