-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2021 at 12:31 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `explorelms`
--

-- --------------------------------------------------------

--
-- Table structure for table `alogin`
--

CREATE TABLE `alogin` (
  `aid` int(20) NOT NULL,
  `aname` varchar(20) NOT NULL,
  `apswd` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alogin`
--

INSERT INTO `alogin` (`aid`, `aname`, `apswd`) VALUES
(1, 'ravi', '4563'),
(2, 'sdsdsdss', '145'),
(3, 'dsdsds', '159');

-- --------------------------------------------------------

--
-- Table structure for table `aprofile`
--

CREATE TABLE `aprofile` (
  `aid` int(20) NOT NULL,
  `adminname` varchar(20) NOT NULL,
  `aname` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `aregister`
--

CREATE TABLE `aregister` (
  `aname1` varchar(20) NOT NULL,
  `aemail` varchar(20) NOT NULL,
  `apswd1` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aregister`
--

INSERT INTO `aregister` (`aname1`, `aemail`, `apswd1`) VALUES
('adsd', 'dsd@123', '5632'),
('sdsdsdss', 'dsd@123sds', '145'),
('kaml', 'kaml@123', '1456'),
('kamlsd', 'kaml@123d', '1456'),
('ravi', 'ravi@133', '4563'),
('dsdsds', 'sdsd@123', '159');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `cid` int(20) NOT NULL,
  `cname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`cid`, `cname`) VALUES
(1, 'C'),
(2, 'c++'),
(3, 'java'),
(4, 'pyrhon'),
(5, 'HTML'),
(6, 'PHP'),
(7, 'Javascript'),
(8, 'React JS'),
(9, 'Angular JS');

-- --------------------------------------------------------

--
-- Table structure for table `fcourses`
--

CREATE TABLE `fcourses` (
  `cid` int(20) NOT NULL,
  `fid` int(20) NOT NULL,
  `cname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `flogin`
--

CREATE TABLE `flogin` (
  `fid` int(20) NOT NULL,
  `fname` varchar(11) NOT NULL,
  `fpswd` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `flogin`
--

INSERT INTO `flogin` (`fid`, `fname`, `fpswd`) VALUES
(1, 'kamal2314', '145'),
(2, 'sdswew', '487'),
(3, 'ram', '123');

-- --------------------------------------------------------

--
-- Table structure for table `fprofile`
--

CREATE TABLE `fprofile` (
  `fid` int(20) NOT NULL,
  `facname` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `courses` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fprofile`
--

INSERT INTO `fprofile` (`fid`, `facname`, `fname`, `email`, `courses`) VALUES
(0, 'Ram', 'ram', 'ram@123', 0);

-- --------------------------------------------------------

--
-- Table structure for table `fregister`
--

CREATE TABLE `fregister` (
  `fname1` varchar(20) NOT NULL,
  `femail` varchar(20) NOT NULL,
  `fpswd1` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fregister`
--

INSERT INTO `fregister` (`fname1`, `femail`, `fpswd1`) VALUES
('sdswew', 'aasada@123', '487'),
('kamal2314', 'kamalesh213@gmail.co', '145'),
('kamal231', 'kamalesh21@gmail.com', '1346'),
('kamal', 'kamalesh@gmail.com', '1452'),
('sdsd', 'sdsd@123', '4587');

-- --------------------------------------------------------

--
-- Table structure for table `scourses`
--

CREATE TABLE `scourses` (
  `cid` int(10) NOT NULL,
  `sid` int(30) NOT NULL,
  `fid` int(20) NOT NULL,
  `cname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `slogin`
--

CREATE TABLE `slogin` (
  `sid` int(20) NOT NULL,
  `sname` varchar(20) NOT NULL,
  `spswd` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slogin`
--

INSERT INTO `slogin` (`sid`, `sname`, `spswd`) VALUES
(1, 'kamal', ''),
(14, 'kamalesh', '159'),
(15, 'ramesh', '489'),
(16, 'kamaleshsdsd', '123'),
(17, 'kamaleshqwweqeq', '159');

-- --------------------------------------------------------

--
-- Table structure for table `sprofile`
--

CREATE TABLE `sprofile` (
  `sid` int(20) NOT NULL,
  `stuname` varchar(20) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `courses` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sprofile`
--

INSERT INTO `sprofile` (`sid`, `stuname`, `uname`, `email`, `courses`) VALUES
(0, 'ganesh', 'ganesh', 'ganesh@gmail.com', 4),
(0, 'kamalesh', 'kamal', 'kamal@gmail.com', 5),
(0, 'ravi', 'kamalesh', 'ravi@123', 4);

-- --------------------------------------------------------

--
-- Table structure for table `sregister`
--

CREATE TABLE `sregister` (
  `sname1` varchar(20) NOT NULL,
  `studentname` varchar(50) NOT NULL,
  `semail` varchar(50) NOT NULL,
  `spswd1` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sregister`
--

INSERT INTO `sregister` (`sname1`, `studentname`, `semail`, `spswd1`) VALUES
('kamaleshsdsd', '', 'kamal@gmail.comcom', '123'),
('kamalesh', '', 'kamal@yahoo', ''),
('kamaleshqwweqeq', 'wewewewdsxwwd', 'kdmdsdlweewkkwke@sdsd', '159'),
('Ramesh', '', 'ramesh@gmail.com', '1456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alogin`
--
ALTER TABLE `alogin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `aprofile`
--
ALTER TABLE `aprofile`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `aregister`
--
ALTER TABLE `aregister`
  ADD PRIMARY KEY (`aemail`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `flogin`
--
ALTER TABLE `flogin`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `fprofile`
--
ALTER TABLE `fprofile`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `fregister`
--
ALTER TABLE `fregister`
  ADD PRIMARY KEY (`femail`);

--
-- Indexes for table `scourses`
--
ALTER TABLE `scourses`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `slogin`
--
ALTER TABLE `slogin`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `sprofile`
--
ALTER TABLE `sprofile`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sregister`
--
ALTER TABLE `sregister`
  ADD PRIMARY KEY (`semail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alogin`
--
ALTER TABLE `alogin`
  MODIFY `aid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `cid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `flogin`
--
ALTER TABLE `flogin`
  MODIFY `fid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `slogin`
--
ALTER TABLE `slogin`
  MODIFY `sid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
