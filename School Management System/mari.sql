-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 27, 2019 at 11:45 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY  (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('djokovic', '9994622482'),
('roger', '123456');

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
('MAARI', '44', '1'),
('PAINTHU', '48', '2');

-- --------------------------------------------------------

--
-- Table structure for table `feesstatus`
--

CREATE TABLE `feesstatus` (
  `studentname` varchar(30) NOT NULL,
  `studentno` varchar(20) NOT NULL,
  `totalamount` varchar(50) NOT NULL,
  `paid` varchar(50) NOT NULL,
  `balance` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feesstatus`
--

INSERT INTO `feesstatus` (`studentname`, `studentno`, `totalamount`, `paid`, `balance`) VALUES
('painthu', '48', '13000', '13000', '0'),
('maari', '44', '13000', '7000', '6000'),
('kumar', '42', '14', '14000', '0'),
('prem', '16', '14000', '7000', ''),
('ALLEN', '1', '14000', '6500', ''),
('DAVID', '2', '14000', '2500', ''),
('VISHNU', '3', '14000', '11000', ''),
('RITHIK', '4', '14000', '14000', ''),
('GAUTAM', '5', '14000', '14000', ''),
('VISHAL', '6', '14000', '14000', ''),
('VICKY', '7', '14000', '7500', ''),
('LEVIN', '8', '14000', '7500', ''),
('RICHWIN', '9', '14000', '6000', ''),
('KUMARAN', '10', '14000', '14000', '');

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
('44', 'mari', '86', '91', '95', '96', '94', '463', '92.2'),
('48', 'painthu', '86', '91', '100', '100', '100', '477', '93.5'),
('42', 'kumar', '100', '100', '100', '100', '100', '', ''),
('1', 'ALLEN', '45', '65', '78', '98', '96', '', ''),
('2', 'DAVID', '75', '67', '87', '89', '90', '', ''),
('3', 'VISHNU', '75', '89', '87', '100', '100', '', ''),
('4', 'RITHIK', '86', '56', '98', '100', '100', '', ''),
('5', 'GAUTAM', '100', '96', '98', '100', '100', '', ''),
('6', 'VISHAL', '86', '85', '98', '100', '94', '', ''),
('56', 'VICKY', '86', '85', '98', '100', '94', '', ''),
('21', 'sarath', '40', '45', '90', '100', '98', '', ''),
('7', 'vicky', '96', '65', '98', '45', '75', '', ''),
('8', 'LEVIN', '96', '65', '98', '85', '95', '', ''),
('9', 'RICHWIN', '89', '65', '98', '75', '95', '', ''),
('10', 'KUMARAN', '89', '100', '97', '75', '95', '', ''),
('16CSE16', 'PREM', '89', '100', '97', '75', '95', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `regno` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`regno`, `password`) VALUES
('42', 'kumar'),
('31', 'nathan');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `studentname` varchar(30) NOT NULL,
  `studentno` varchar(20) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `standard` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phno` varchar(20) NOT NULL,
  `bloodgroup` varchar(10) NOT NULL,
  PRIMARY KEY  (`studentname`,`address`,`phno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`studentname`, `studentno`, `dob`, `standard`, `address`, `phno`, `bloodgroup`) VALUES
('bharathi', '37', '1999-05-11', '10', 'ktc nagar', '', 'o+ve'),
('DAVID', '2', '2008-04-9', '8', '39/A YADAVAR SOUTH STREET,CHENNAI 627001', '', 'O-VE'),
('kumar', '42', '1999-05-11', '8', 'sedhunganallur', '', 'a+ve'),
('maari', '44', '1999-04-30', '8', 'vadapalani', '123654789', 'a+ve'),
('painthu', '48', '1995-04-27', '8', 'cfjgfuyjfiu', '', 'b+ve'),
('prem', '16', '1998-12-31', '10', 'kalakadu', '', 'o-ve');

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
('fty', 'fy'),
('44', 'muthu'),
('44', 'maari'),
('16', 'sudarraja'),
('37', 'bharathi');
