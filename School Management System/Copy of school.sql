-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 20, 2019 at 12:46 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `studentname` varchar(20) NOT NULL,
  `studentno` varchar(20) NOT NULL,
  `leave` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`studentname`, `studentno`, `leave`) VALUES
('maari', '44', '1'),
('painthu', '48', '2');

-- --------------------------------------------------------

--
-- Table structure for table `feesstatus`
--

CREATE TABLE `feesstatus` (
  `studentno` varchar(20) NOT NULL,
  `studentname` varchar(20) NOT NULL,
  `totalamount` varchar(20) NOT NULL,
  `paid` varchar(20) NOT NULL,
  `balance` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feesstatus`
--

INSERT INTO `feesstatus` (`studentno`, `studentname`, `totalamount`, `paid`, `balance`) VALUES
('44', 'maari', '13000', '7000', '6000'),
('48', 'painthu', '13000', '6000', '7000');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('djokovic', '9994622482'),
('roger', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `studentno` varchar(20) NOT NULL,
  `studentname` varchar(20) NOT NULL,
  `english` varchar(20) NOT NULL,
  `tamil` varchar(20) NOT NULL,
  `maths` varchar(20) NOT NULL,
  `science` varchar(20) NOT NULL,
  `social` varchar(20) NOT NULL,
  `total` varchar(20) NOT NULL,
  `average` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`studentno`, `studentname`, `english`, `tamil`, `maths`, `science`, `social`, `total`, `average`) VALUES
('44', 'maari', '86', '94', '95', '96', '94', '463', '92.2'),
('48', 'painthu', '100', '100', '100', '100', '100', '500', '100');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `regno` varchar(20) NOT NULL,
  `password1` varchar(50) NOT NULL,
  `password2` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`regno`, `password1`, `password2`) VALUES
('42', 'kumar', 'kumar'),
('31', 'nathan', 'nathan');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `studentname` varchar(20) NOT NULL,
  `studentno` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `standard` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phno` varchar(50) NOT NULL,
  `bloodgroup` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`studentname`, `studentno`, `dob`, `standard`, `address`, `phno`, `bloodgroup`) VALUES
('maari', '44', '1999-04-30', '10', '39/a sugarmill colony,balabaghya nagar,tirunelveli', '123456789', 'a+ve'),
('painthu', '44', '1995-04-28', '10', 'srilanka', '9874563114', 'a+ve');

-- --------------------------------------------------------

--
-- Table structure for table `studentlogin`
--

CREATE TABLE `studentlogin` (
  `regno` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentlogin`
--

INSERT INTO `studentlogin` (`regno`, `password`) VALUES
('48', 'painthu'),
('44', 'maari');
