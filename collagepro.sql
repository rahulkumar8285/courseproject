-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2021 at 03:14 AM
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
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `coursename` varchar(50) NOT NULL,
  `discretion` text NOT NULL,
  `publisdate` date NOT NULL,
  `price` float NOT NULL,
  `councatg` int(11) NOT NULL,
  `authorid` int(11) NOT NULL,
  `authorname` varchar(30) NOT NULL,
  `totalvideo` int(50) NOT NULL,
  `project` int(11) NOT NULL,
  `imgpath` int(11) NOT NULL,
  `sellprice` int(11) NOT NULL,
  `shotdescription` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `coursename`, `discretion`, `publisdate`, `price`, `councatg`, `authorid`, `authorname`, `totalvideo`, `project`, `imgpath`, `sellprice`, `shotdescription`) VALUES
(1, 'Web Development ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2021-04-09', 499, 1, 10, 'Rahul kumar', 10, 3, 0, 0, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,'),
(2, 'anguler js testing ', 'jkbwejfbejb', '2021-04-20', 0, 561651, 5, 'ege', 0, 0, 0, 0, ''),
(3, '', '', '0000-00-00', 0, 0, 0, '', 0, 0, 0, 0, ''),
(4, 'anguler js testing ', 'jkbwejfbejb', '2021-04-20', 0, 561651, 5, 'ege', 0, 0, 0, 0, ''),
(5, '', '', '0000-00-00', 0, 0, 0, '', 0, 0, 0, 0, '');

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
(7, 'react js'),
(10, 'trahu'),
(11, 'news'),
(14, 'mins'),
(16, 'news'),
(17, 'Grapic');

-- --------------------------------------------------------

--
-- Table structure for table `facility`
--

CREATE TABLE `facility` (
  `id` int(11) NOT NULL,
  `facilityusername` varchar(50) NOT NULL,
  `facilitypassword` varchar(50) NOT NULL,
  `applicationID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `facility`
--

INSERT INTO `facility` (`id`, `facilityusername`, `facilitypassword`, `applicationID`) VALUES
(1, 'facility@123gmail.com', '12345admin', 5964),
(2, 'facility2@123gmail.com', '12345admin', 5568);

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
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `email`, `password`) VALUES
(1, 'test', 'admin@123', 'admin');

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

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `coursecat`
--
ALTER TABLE `coursecat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `facility`
--
ALTER TABLE `facility`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `themetext`
--
ALTER TABLE `themetext`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
