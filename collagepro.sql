-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2021 at 01:04 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `collagepro`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `mobile` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `mobile`) VALUES
(1, 'admin ', 'admin12345@gmail.com', '12345admin', '1234563259');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `coursename` varchar(2000) NOT NULL,
  `discretion` text NOT NULL,
  `publisdate` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `councatg` int(11) NOT NULL,
  `authorid` int(11) NOT NULL,
  `authorname` varchar(300) NOT NULL,
  `totalvideo` int(11) NOT NULL,
  `project` varchar(200) NOT NULL,
  `imgpath` varchar(200) NOT NULL,
  `sellprice` int(11) NOT NULL,
  `shotdescription` mediumtext NOT NULL,
  `coupencode` varchar(50) NOT NULL,
  `image` varchar(60) NOT NULL,
  `file` varchar(200) NOT NULL,
  `status` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `coursename`, `discretion`, `publisdate`, `price`, `councatg`, `authorid`, `authorname`, `totalvideo`, `project`, `imgpath`, `sellprice`, `shotdescription`, `coupencode`, `image`, `file`, `status`) VALUES
(44, 'Full Web development ', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typefaceIn publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typefaceIn publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface									', '29-Apr-2021', 800, 17, 11, 'Rakesh Kumar', 4, 'creating multi page static website', 'app development.jpg', 450, 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface.									', 'MK450', '', 'Tender Notice from 23Apr2021-converted.pdf', '1'),
(45, 'sql leaning ', '                                    coursecat																		', '29-Apr-2021', 800, 18, 11, 'Rakesh Kumar', 0, '', 'sqlimg.jpg', 450, 'coursecat																		', 'SQL450', '', 'Tender Notice from 23Apr2021-converted.pdf', '1');

-- --------------------------------------------------------

--
-- Table structure for table `coursecat`
--

CREATE TABLE `coursecat` (
  `id` int(11) NOT NULL,
  `catname` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coursecat`
--

INSERT INTO `coursecat` (`id`, `catname`) VALUES
(10, 'trahu'),
(17, 'Grapic'),
(23, 'Development');

-- --------------------------------------------------------

--
-- Table structure for table `facility`
--

CREATE TABLE `facility` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `profile` varchar(50) NOT NULL,
  `name` varchar(60) NOT NULL,
  `biodata` varchar(200) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `facility`
--

INSERT INTO `facility` (`id`, `email`, `password`, `profile`, `name`, `biodata`, `mobile`, `status`) VALUES
(11, 'newemail@gmail.com', '9dc9d5ed5031367d42543763423c24ee', 'Screenshot (2).png', 'Rakesh Kumar', 'Bid document.pdf', '7896321478', 1),
(14, 'demo12@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '91232875cae851bb25c5a361cff69d0f.jpg', 'Demo tesxt', 'collagepro (2).sql', '1234563214', 1);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `menu_name` varchar(20) NOT NULL,
  `menuurl` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `menu_name`, `menuurl`) VALUES
(43, 'About ', 'http://localhost/collagepro/about.php');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` mediumtext NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `country` varchar(100) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `email`, `mobile`, `city`, `country`, `password`) VALUES
(27, 'mukesh', 'mukesh123@gmail.com', '2589631472', 'west delhi', 'United States', '12345admin'),
(28, 'sachin kumar', 'sachinkumar@123gmail.com', '4563214563', 'agra', 'India', '4563258'),
(29, 'ravi kumar', 'ravikumar123@gmail.com', '4563258753', 'west delhi', 'india ', '456325'),
(30, 'rahul', 'rahulkumar828515@gmail.com', '4563214565', 'new delhi', 'India', '12345admin'),
(31, 'aakash', 'aakash123@gmail.com', '7896541235', 'new delhi', 'india ', '789654'),
(32, 'Rakesh Kumar', 'rakesh123@gmail.com', '9311734258', 'new delhi', 'india', '155'),
(33, 'TESTING ', 'TSTIG123@GMAIL.COM', '9631478965', 'NWD DELHI', 'INDIA ', '06f7a885bf87410');

-- --------------------------------------------------------

--
-- Table structure for table `themetext`
--

CREATE TABLE `themetext` (
  `id` int(11) NOT NULL,
  `tagline` varchar(25) NOT NULL,
  `textbox` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `themetext`
--

INSERT INTO `themetext` (`id`, `tagline`, `textbox`) VALUES
(1, 'CHECK THE DAATA', 'We are always availed to consult on taking your hi');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `videonum` int(11) NOT NULL,
  `video` mediumtext NOT NULL,
  `coursename` int(11) NOT NULL,
  `videopath` mediumtext NOT NULL,
  `status` tinyint(4) NOT NULL,
  `facilityid` int(11) NOT NULL,
  `facilityemail` varchar(200) NOT NULL,
  `auth` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `videonum`, `video`, `coursename`, `videopath`, `status`, `facilityid`, `facilityemail`, `auth`) VALUES
(29, 1, 'how to install android studio', 44, 'download.jpg', 1, 11, 'newemail@gmail.com', 1),
(30, 2, 'how to install android studio', 44, 'sqlimg.jpg', 1, 11, 'newemail@gmail.com', 1),
(31, 3, 'what is complete work about computer', 44, 'sqlimg.jpg', 1, 11, 'newemail@gmail.com', 0),
(32, 4, 'Letcher 1 install android studio', 44, 'sqlimg.jpg', 1, 11, 'newemail@gmail.com', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coursecat`
--
ALTER TABLE `coursecat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facility`
--
ALTER TABLE `facility`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `themetext`
--
ALTER TABLE `themetext`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`),
  ADD KEY `video_ibfk_1` (`coursename`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `coursecat`
--
ALTER TABLE `coursecat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `facility`
--
ALTER TABLE `facility`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `themetext`
--
ALTER TABLE `themetext`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `video`
--
ALTER TABLE `video`
  ADD CONSTRAINT `video_ibfk_1` FOREIGN KEY (`coursename`) REFERENCES `course` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
