-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2017 at 06:02 PM
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
(6, 'member', 'M-0000001', 'Ann Nelima', 'ann@gmail.com', '744cb9a9fb3d5583744ea3ece9b4d819d90bdee2', 'brendah15.jpg', 0, '', 'N', '2017-07-05 06:55:29'),
(11, 'member', 'M-0000006', 'TEST t', 'test@gmail.com', '984816fd329622876e14907634264e6f332e9fb3', 'job11.jpg', 0, '', 'N', '2017-07-05 09:22:41'),
(12, 'member', 'M-0000007', 't t', 't@g.c', '8efd86fb78a56a5145ed7739dcb00c78581c5375', 'images21.jpeg', 0, '', 'N', '2017-07-05 09:30:13'),
(13, 'member', 'M-0000008', 'u12 u12', 'u1@u.k', '13fbd79c3d390e5d6585a21e11ff5ec1970cff0c', 'job6.jpg', 0, '', 'N', '2017-07-05 09:32:15'),
(14, 'member', 'M-0000009', 'tt tt', 'tt@g.c', '8efd86fb78a56a5145ed7739dcb00c78581c5375', 'images11.jpeg', 0, '', 'N', '2017-07-05 09:37:46'),
(15, 'member', 'M-0000010', 'Grace Grace', 'grace@gmail.com', '042dc4512fa3d391c5170cf3aa61e6a638f84342', 'job111.jpg', 0, '', 'N', '2017-07-05 09:39:04'),
(16, 'member', 'M-0000011', 'brendah blessing', 'blessing@gmail.com', '5c2dd944dde9e08881bef0894fe7b22a5c9c4b06', 'job112.jpg', 0, '', 'N', '2017-07-05 09:49:19'),
(17, 'member', 'M-0000012', 'n n', 'blessing0@gmail.com', 'e9d71f5ee7c92d6dc9e92ffdad17b8bd49418f98', 'images3.jpeg', 0, '', 'N', '2017-07-05 09:50:56'),
(18, 'member', 'M-0000013', 'brendah blessing', 'blessingn@gmail.com', '6b0d31c0d563223024da45691584643ac78c96e8', 'brendah81.jpg', 0, '', 'N', '2017-07-05 09:55:04'),
(19, 'member', 'M-0000014', 'hh g', 'bless@gmail.com', '13fbd79c3d390e5d6585a21e11ff5ec1970cff0c', '', 0, '', 'N', '2017-07-05 10:13:06'),
(20, 'member', 'M-0000015', 'kkkkk kkkkkk', 'kkk@gmail.com', '13fbd79c3d390e5d6585a21e11ff5ec1970cff0c', '', 0, '', 'N', '2017-07-05 10:52:04'),
(21, 'member', 'M-0000016', 'j j', 'j@gmail.com', '07c342be6e560e7f43842e2e21b774e61d85f047', '', 0, '', 'N', '2017-07-05 10:58:34'),
(22, 'member', 'M-0000017', 'j j', 'o@gmail.com', '07c342be6e560e7f43842e2e21b774e61d85f047', '', 0, '', 'N', '2017-07-05 11:00:07'),
(23, 'member', 'M-0000018', 'l l', 'khalifwlab@gmail.com', '13fbd79c3d390e5d6585a21e11ff5ec1970cff0c', '', 0, 'N', 'N', '2017-07-05 12:48:21'),
(24, 'member', 'M-0000019', 'l l', 'khalifwlabk@gmail.com', '13fbd79c3d390e5d6585a21e11ff5ec1970cff0c', '', 0, 'N', 'N', '2017-07-05 12:53:51'),
(25, 'member', 'M-0000020', 'j joy', 'jjjoy@gmail.com', '27d5482eebd075de44389774fce28c69f45c8a75', '', 0, 'N', 'N', '2017-07-05 12:56:17'),
(26, 'member', 'M-0000021', ' ', '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', '', 0, 'N', 'N', '2017-07-05 13:02:18'),
(27, 'member', 'M-0000022', 'p p', 'p1@gmail.com', '516b9783fca517eecbd1d064da2d165310b19759', '', 0, 'N', 'N', '2017-07-05 13:03:04');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `member_no` varchar(50) NOT NULL,
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

INSERT INTO `member` (`id`, `member_no`, `fname`, `lname`, `email`, `address`, `phone`, `photo`, `active`, `deleted`, `date_registered`) VALUES
(2, 'M-0000001', 'Ann', 'Nelima', 'ann@gmail.com', 'P.O BOX 54 SOY', '2147483647', 'brendah15.jpg', 'Y', 'N', '2017-07-05 08:35:37'),
(7, '1', 'Brendah', 'Khalifwa', 'khalifwab@gmail.com', 'P.O BOX 54 SOY', '707963603', 'brendah425.jpg', 'Y', 'N', '2017-07-05 15:39:54'),
(8, 'M-0000006', 'TEST', 't', 'test@gmail.com', 'P.O BOX 54 SOY', '0707963603', 'job11.jpg', 'N', 'N', '2017-07-05 09:22:41'),
(9, 'M-0000007', 't', 't', 't@g.c', 'P.O BOX 54 SOY', '0707963603', 'images21.jpeg', 'N', 'N', '2017-07-05 09:30:13'),
(10, 'M-0000008', 'u12', 'u12', 'u1@u.k', 'P.O BOX 54 SOY', '0707963603', 'job6.jpg', 'N', 'N', '2017-07-05 09:32:15'),
(11, 'M-0000009', 'tt', 'tt', 'tt@g.c', 't', '0707963603', 'images11.jpeg', 'N', 'N', '2017-07-05 09:37:46'),
(12, 'M-0000010', 'Grace', 'Grace', 'grace@gmail.com', 'P.O BOX 54 SOY', '0707963603', 'job111.jpg', 'N', 'N', '2017-07-05 09:39:04'),
(13, 'M-0000011', 'brendah', 'blessing', 'blessing@gmail.com', 'P.O BOX 54 SOY', '0707963603', 'job112.jpg', 'N', 'N', '2017-07-05 09:49:19'),
(14, 'M-0000012', 'n', 'n', 'blessing0@gmail.com', 'P.O BOX 54 SOY', '0707963603', 'images3.jpeg', 'N', 'N', '2017-07-05 09:50:56'),
(15, 'M-0000013', 'brendah', 'blessing', 'blessingn@gmail.com', 'P.O BOX 54 SOY', '0707963603', 'brendah81.jpg', 'N', 'N', '2017-07-05 09:55:04'),
(16, 'M-0000014', 'hh', 'g', 'bless@gmail.com', 'P.O BOX 54 SOY', '0707963603', '', 'N', 'N', '2017-07-05 10:13:06'),
(17, 'M-0000015', 'kkkkk', 'kkkkkk', 'kkk@gmail.com', 'P.O BOX 54 SOY', '0707963603', '', 'N', 'N', '2017-07-05 10:52:04'),
(18, 'M-0000016', 'j', 'j', 'j@gmail.com', 'j', '0707963603', '', 'N', 'N', '2017-07-05 10:58:34'),
(19, 'M-0000017', 'j', 'j', 'o@gmail.com', 'j', '0707963603', '', 'N', 'N', '2017-07-05 11:00:07'),
(20, 'M-0000018', 'l', 'l', 'khalifwlab@gmail.com', 'j', '0', '', 'N', 'N', '2017-07-05 12:48:21'),
(21, 'M-0000019', 'l', 'l', 'khalifwlabk@gmail.com', 'j', '0', '', 'N', 'N', '2017-07-05 12:53:51'),
(22, 'M-0000020', 'j', 'joy', 'jjjoy@gmail.com', 'h', 'h', '', 'N', 'N', '2017-07-05 12:56:17'),
(23, 'M-0000021', '', '', '', '', '', '', 'N', 'N', '2017-07-05 13:02:18'),
(24, 'M-0000022', 'p', 'p', 'p1@gmail.com', 'p', '0', '', 'N', 'N', '2017-07-05 13:03:04');

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
(1, 23);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `plastnumbers`
--
ALTER TABLE `plastnumbers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
