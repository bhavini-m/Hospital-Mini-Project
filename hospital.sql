-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2018 at 02:48 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `status` varchar(8) NOT NULL DEFAULT 'inactive'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`, `status`) VALUES
('admin@gmail.com', 'Admin@123', 'inactive');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `date1` date NOT NULL,
  `Symptoms` varchar(128) NOT NULL,
  `department` varchar(40) NOT NULL,
  `docemail` varchar(50) NOT NULL,
  `time1` varchar(40) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`fname`, `lname`, `Email`, `date1`, `Symptoms`, `department`, `docemail`, `time1`, `status`) VALUES
('Anjali', 'Sharma', 'Anjalis@gmail.com', '2018-11-17', 'fewer', 'Maternity ward', 'anjali@gmail.com', 'Afternoon', 'done'),
('ganesh', 'Gaitonde', 'Ganesh@gmail.com', '2018-11-15', 'sar dard', 'Cardiology', 'anjali@gmail.com', 'morning', 'done'),
('Rahul', 'Punjabi', 'rahul@gmail.com', '2018-11-15', 'qqqq', 'Cardiology', 'anjali@gmail.com', 'morning', 'noo');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `name` varchar(60) NOT NULL,
  `short` varchar(10) NOT NULL,
  `hod` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`name`, `short`, `hod`) VALUES
('Analysis of Algorithms', 'AOA', 'COMP'),
('Analysis of Algorithms', 'AOA', 'IT'),
('Computer Organisation Architecture', 'COA', 'IT'),
('Data Networks', 'DN', 'COMP'),
('Digital Communication Systems', 'DCN', 'COMP'),
('Digital Communication Systems', 'DCN', 'IT'),
('Operating Systems', 'OS', 'COMP'),
('Relational Database Management Systems', 'RDBMS', 'COMP');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `ssn` int(25) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(30) NOT NULL,
  `department` varchar(20) NOT NULL,
  `mobile_number` text NOT NULL,
  `gender` text NOT NULL,
  `status` varchar(8) NOT NULL DEFAULT 'inactive'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`fname`, `lname`, `ssn`, `email`, `password`, `department`, `mobile_number`, `gender`, `status`) VALUES
('Anjali', 'Sharma', 12345, 'anjali@gmail.com', 'Anjali@123', 'Cardiology', '9090909090', 'Female', 'inactive');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `filename` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`filename`) VALUES
('Topic.docx');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `mobile_number` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `gender` text NOT NULL,
  `status` varchar(8) NOT NULL DEFAULT 'inactive'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`fname`, `lname`, `mobile_number`, `email`, `password`, `gender`, `status`) VALUES
('Anjali', 'Sharma', '9619139239', 'anjalis@gmail.com', 'Anjalis@123', 'female', 'inactive'),
('ganesh', 'Gaitonde', '9010108765', 'ganesh@gmail.com', 'Ganesh@123', 'male', 'inactive'),
('Rahul', 'Punjabi', '9619139239', 'rahul@gmail.com', 'Rahulp@123', 'male', 'inactive');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `email` varchar(120) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `pset` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`email`, `photo`, `pset`) VALUES
('anjali@gmail.com', 'd1.jpg', 'set'),
('Anjalis@gmail.com', 'deepika.jfif', 'set'),
('ganesh@gmail.com', 'newimg.jfif', 'set');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`name`,`hod`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`ssn`,`email`,`department`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`filename`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD UNIQUE KEY `email` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
