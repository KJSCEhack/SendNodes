-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2018 at 05:41 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kjsce`
--

-- --------------------------------------------------------

--
-- Table structure for table `actuallecture`
--

CREATE TABLE `actuallecture` (
  `lectureid` int(11) NOT NULL,
  `subjectid` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `actuallecture`
--

INSERT INTO `actuallecture` (`lectureid`, `subjectid`, `date`) VALUES
(1, 1, '2018-10-01 17:30:24'),
(2, 1, '2018-10-04 17:30:32'),
(3, 1, '2018-10-03 17:30:34');

-- --------------------------------------------------------

--
-- Table structure for table `attendence`
--

CREATE TABLE `attendence` (
  `id` int(11) NOT NULL,
  `studentid` int(11) NOT NULL,
  `lectureid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendence`
--

INSERT INTO `attendence` (`id`, `studentid`, `lectureid`) VALUES
(1, 201650010, 1);

-- --------------------------------------------------------

--
-- Table structure for table `companiesapplied`
--

CREATE TABLE `companiesapplied` (
  `studentID` int(11) NOT NULL,
  `companyID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `companiesapplied`
--

INSERT INTO `companiesapplied` (`studentID`, `companyID`) VALUES
(0, 0),
(201650010, 1);

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `eligibility` varchar(100) NOT NULL,
  `ctc` varchar(20) NOT NULL,
  `logo` varchar(400) NOT NULL,
  `date` varchar(10) NOT NULL,
  `status` int(10) NOT NULL,
  `image` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `cname`, `description`, `eligibility`, `ctc`, `logo`, `date`, `status`, `image`) VALUES
(1, 'Amazon', 'Amazon.com – a place where builders can build. We hire the world\'s brightest minds and offer them an\nenvironment in which they can invent and innovate to improve the experience for our customers. A\nFortune 100 company based in Seattle, Washington, Amazon is the global leader in e-commerce.\nAmazon offers everything from books and electronics to apparel and diamond jewelry. We operate sites\nin Australia, Brazil, Canada, China, France, Germany, India, Italy, Japan, Mexico, Netherlands, Spain,\nUnited Kingdom and United States, and maintain dozens of fulfillment centers around the world which\nencompass more than 26 million square feet. ', 'IT', '18Lac', 'logo/amazon.docx', '2018-10-12', 1, 'logo/amazon.png'),
(2, 'Incred', 'dsad', 'Comps,IT', '12Lac', 'logo/incred.docx', '2018-10-24', 1, 'logo/incred.png');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `name`) VALUES
(1, 'Information Technology'),
(2, 'Computer Science'),
(3, 'Electronics Engineering'),
(4, 'Mechanical Engineering'),
(5, 'Civil Engineering'),
(6, 'Automobile Engineering'),
(7, 'Textile Engineering');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `startdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `enddate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `name`, `startdate`, `enddate`) VALUES
(1, 'Technical Festival', '2018-10-17 02:35:40', '2018-10-18 17:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `id` int(11) NOT NULL,
  `testname` varchar(80) NOT NULL,
  `startdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `enddate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `allday` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`id`, `testname`, `startdate`, `enddate`, `allday`) VALUES
(1, 'SE Quiz', '2018-10-10 04:30:00', '2018-10-03 06:30:00', 0),
(2, 'MSE', '2018-10-21 18:30:00', '2018-10-26 11:30:00', 1),
(3, 'ESE', '2018-11-04 18:30:00', '2018-11-23 11:30:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `extracir`
--

CREATE TABLE `extracir` (
  `id` int(11) NOT NULL,
  `title` varchar(80) NOT NULL,
  `floatedby` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `description` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `extracir`
--

INSERT INTO `extracir` (`id`, `title`, `floatedby`, `status`, `description`) VALUES
(1, 'TA for ADBMS', 1, 1, 'Teaching Assistant for AdvancedDatabase Subject');

-- --------------------------------------------------------

--
-- Table structure for table `extracirapplied`
--

CREATE TABLE `extracirapplied` (
  `id` int(11) NOT NULL,
  `extracirid` int(11) NOT NULL,
  `studentID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `extracirapplied`
--

INSERT INTO `extracirapplied` (`id`, `extracirid`, `studentID`) VALUES
(0, 1, 201650010);

-- --------------------------------------------------------

--
-- Table structure for table `faculty_info`
--

CREATE TABLE `faculty_info` (
  `id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `departmentNo` varchar(80) NOT NULL,
  `domain` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `publication` varchar(500) NOT NULL,
  `url` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_info`
--

INSERT INTO `faculty_info` (`id`, `fname`, `lname`, `photo`, `departmentNo`, `domain`, `position`, `publication`, `url`) VALUES
(1, 'John', 'Doe', '', 'Information Technology', 'Cloud Computing', 'Associate Professor', 'Offloading Load Balancing in Cloud', 'profile/jd1.png');

-- --------------------------------------------------------

--
-- Table structure for table `holidays`
--

CREATE TABLE `holidays` (
  `id` int(11) NOT NULL,
  `HolidayName` varchar(80) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `holidays`
--

INSERT INTO `holidays` (`id`, `HolidayName`, `Date`) VALUES
(1, 'Gandhi Jayanti', '2018-10-02');

-- --------------------------------------------------------

--
-- Table structure for table `plannedlecture`
--

CREATE TABLE `plannedlecture` (
  `lectureid` int(11) NOT NULL,
  `subjectid` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plannedlecture`
--

INSERT INTO `plannedlecture` (`lectureid`, `subjectid`, `date`) VALUES
(1, 1, '2018-10-05 17:29:53'),
(2, 1, '2018-10-16 17:30:14'),
(3, 2, '2018-10-05 17:40:37'),
(4, 1, '2018-10-09 17:30:14');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `uid` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `resumeLink` varchar(250) NOT NULL,
  `department` varchar(80) NOT NULL,
  `year` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`uid`, `firstname`, `lastname`, `resumeLink`, `department`, `year`) VALUES
(201650010, 'Hardik', 'Thakkar', 'google.com', 'Information Technology', 'Fourth');

-- --------------------------------------------------------

--
-- Table structure for table `studentsubject`
--

CREATE TABLE `studentsubject` (
  `id` int(11) NOT NULL,
  `studentid` int(11) NOT NULL,
  `subjectid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentsubject`
--

INSERT INTO `studentsubject` (`id`, `studentid`, `subjectid`) VALUES
(1, 201650010, 1),
(2, 201650010, 2);

-- --------------------------------------------------------

--
-- Table structure for table `studymaterial`
--

CREATE TABLE `studymaterial` (
  `id` int(11) NOT NULL,
  `subjectid` int(11) NOT NULL,
  `notestitle` varchar(80) NOT NULL,
  `url` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studymaterial`
--

INSERT INTO `studymaterial` (`id`, `subjectid`, `notestitle`, `url`) VALUES
(1, 1, 'MSE Question Paper', 'studymaterial/mse-se.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `taughtBy` int(11) NOT NULL,
  `department` varchar(80) NOT NULL,
  `year` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `name`, `taughtBy`, `department`, `year`) VALUES
(1, 'SE Theory', 1, 'Information Technology', 'Fourth'),
(2, 'SE Practical', 1, 'Information Technology', 'Fourth');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actuallecture`
--
ALTER TABLE `actuallecture`
  ADD PRIMARY KEY (`lectureid`);

--
-- Indexes for table `attendence`
--
ALTER TABLE `attendence`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companiesapplied`
--
ALTER TABLE `companiesapplied`
  ADD PRIMARY KEY (`studentID`,`companyID`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `extracir`
--
ALTER TABLE `extracir`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty_info`
--
ALTER TABLE `faculty_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `holidays`
--
ALTER TABLE `holidays`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plannedlecture`
--
ALTER TABLE `plannedlecture`
  ADD PRIMARY KEY (`lectureid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `studentsubject`
--
ALTER TABLE `studentsubject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studymaterial`
--
ALTER TABLE `studymaterial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actuallecture`
--
ALTER TABLE `actuallecture`
  MODIFY `lectureid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `attendence`
--
ALTER TABLE `attendence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `extracir`
--
ALTER TABLE `extracir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `faculty_info`
--
ALTER TABLE `faculty_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `holidays`
--
ALTER TABLE `holidays`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `plannedlecture`
--
ALTER TABLE `plannedlecture`
  MODIFY `lectureid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `studentsubject`
--
ALTER TABLE `studentsubject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `studymaterial`
--
ALTER TABLE `studymaterial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
