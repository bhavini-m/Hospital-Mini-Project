-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2018 at 07:17 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `_hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `DSSN` int(11) NOT NULL,
  `department` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Degree` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `drug`
--

CREATE TABLE `drug` (
  `name` int(11) NOT NULL,
  `mfg.date` date NOT NULL,
  `exp.date` date NOT NULL,
  `contents` text COLLATE utf8_unicode_ci NOT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `labstaff`
--

CREATE TABLE `labstaff` (
  `LSSN` int(11) NOT NULL,
  `report` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nurse/ward staff`
--

CREATE TABLE `nurse/ward staff` (
  `WSSN` int(11) NOT NULL,
  `wardno.` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `PSSN` int(11) NOT NULL,
  `wardno.` int(11) NOT NULL,
  `prescribed drugs` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `SSN` int(11) NOT NULL,
  `First` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `Middle` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `Last` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `sex` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `contact` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pharmacist`
--

CREATE TABLE `pharmacist` (
  `PSSN` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `receptioist`
--

CREATE TABLE `receptioist` (
  `RSSN` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `signin`
--

CREATE TABLE `signin` (
  `name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `contact` int(10) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `usertype` varchar(10) NOT NULL,
  `department` varchar(10) NOT NULL,
  `employee_ssn` int(5) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signin`
--

INSERT INTO `signin` (`name`, `email`, `contact`, `gender`, `usertype`, `department`, `employee_ssn`, `password`) VALUES
('abcd', 'a@gufer.com', 2147483647, 'male', 'doctor', '', 0, 'c69d68a875'),
('abc', 'abc@gmail.com', 2147483647, 'femal', 'student', '', 0, '7ba5165eef'),
('abc', 'abc@gufer.com', 2147483647, '', '', '', 0, ''),
('abcd', 'abcd@gufer.com', 2147483647, 'male', 'patient', '', 0, 'ea96b80fed'),
('xyz', 'xyz@gmail.com', 2147483647, 'male', 'doctor', '', 0, 'c69d68a875');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `drug`
--
ALTER TABLE `drug`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `nurse/ward staff`
--
ALTER TABLE `nurse/ward staff`
  ADD PRIMARY KEY (`WSSN`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`SSN`);

--
-- Indexes for table `pharmacist`
--
ALTER TABLE `pharmacist`
  ADD PRIMARY KEY (`PSSN`);

--
-- Indexes for table `receptioist`
--
ALTER TABLE `receptioist`
  ADD PRIMARY KEY (`RSSN`);

--
-- Indexes for table `signin`
--
ALTER TABLE `signin`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
