-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2017 at 05:08 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `userrole` varchar(50) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `photo` text NOT NULL,
  `token` int(11) NOT NULL,
  `active` varchar(1) NOT NULL,
  `deleted` varchar(1) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `userrole`, `userid`, `username`, `email`, `password`, `photo`, `token`, `active`, `deleted`, `date_created`) VALUES
(4, 'admin', '1', 'Brendah Khalifwa', 'khalifwab@gmail.com', 'f62830ca4c2d3a209619feac2c3fe172ad00e06e', 'brendah.jpg', 558590052, 'Y', 'N', '2017-06-30 13:37:41'),
(35, 'member', 'M-0000001', 'Ann Nelima', 'ann@gmail.com', '744cb9a9fb3d5583744ea3ece9b4d819d90bdee2', 'brendah1.jpg', 0, 'Y', 'N', '2017-07-06 05:29:51'),
(36, 'member', 'M-0000002', 'Blessing wanjala', 'blessing@gmail.com', '242a7dff5cd38d9475d0fd3e27d9f74e54c07581', 'brendah2.jpg', 0, 'N', 'N', '2017-07-06 07:50:34'),
(37, 'member', 'M-0000003', 'Peter Peter', 'peter@gmail.com', '4b8373d016f277527198385ba72fda0feb5da015', 'brendah3.jpg', 0, 'N', 'N', '2017-07-06 07:57:33'),
(38, 'member', 'M-0000004', 'Grace Grace', 'grace@gmail.com', 'fd1cf5e271fd7c5ffaefb1c95aaf79964e1b2e65', 'brendah4.jpg', 0, 'N', 'N', '2017-07-06 08:00:55');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `member_no` varchar(50) NOT NULL,
  `userrole` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `photo` text NOT NULL,
  `active` varchar(1) NOT NULL,
  `deleted` varchar(1) NOT NULL,
  `date_registered` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `member_no`, `userrole`, `fname`, `lname`, `email`, `address`, `phone`, `photo`, `active`, `deleted`, `date_registered`) VALUES
(7, '1', 'admin', 'Brendah', 'Khalifwa', 'khalifwab@gmail.com', 'P.O BOX 54 SOY', '0707963603', 'brendah.jpg', 'Y', 'N', '2017-07-06 13:41:52'),
(32, 'M-0000001', 'member', 'Ann', 'Nelima', 'ann@gmail.com', 'P.O BOX 54 SOY', '0707963603', 'brendah1.jpg', 'Y', 'N', '2017-07-06 13:43:10'),
(33, 'M-0000002', 'member', 'Blessing', 'wanjala', 'blessing@gmail.com', 'P.O BOX 54 SOY', '0707963603', 'brendah2.jpg', 'N', 'N', '2017-07-06 13:37:02'),
(34, 'M-0000003', 'member', 'Peter', 'Peter', 'peter@gmail.com', 'P.O BOX 54 SOY', '0707963603', 'brendah3.jpg', 'N', 'N', '2017-07-06 13:36:50'),
(35, 'M-0000004', 'member', 'Grace', 'Grace', 'grace@gmail.com', 'P.O BOX 54 SOY', '0707963603', 'brendah4.jpg', 'N', 'N', '2017-07-06 13:29:32');

-- --------------------------------------------------------

--
-- Table structure for table `plastnumbers`
--

CREATE TABLE `plastnumbers` (
  `id` int(11) NOT NULL,
  `member_no` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plastnumbers`
--

INSERT INTO `plastnumbers` (`id`, `member_no`) VALUES
(1, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plastnumbers`
--
ALTER TABLE `plastnumbers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `plastnumbers`
--
ALTER TABLE `plastnumbers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
