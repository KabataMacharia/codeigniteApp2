-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2017 at 06:39 AM
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
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `code` int(11) NOT NULL,
  `deleted` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `name`, `code`, `deleted`) VALUES
(1, 'Kenya', 254, 'N'),
(2, 'Uganda', 253, 'N'),
(3, 'Tanzania', 252, 'Y'),
(4, 'TestTEST', 0, 'N'),
(5, 'Somali', 249, 'N'),
(6, 'Djibouti', 248, 'N'),
(7, 'Rwanda', 255, 'N'),
(8, 'Test', 247, 'N'),
(9, 'South Africa', 245, 'N'),
(10, 'Congo', 244, 'N'),
(11, 'Niger', 243, 'N');

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
(4, '1', '1', 'Brendah Khalifwa', 'khalifwab@gmail.com', 'f62830ca4c2d3a209619feac2c3fe172ad00e06e', 'brendah431.jpg', 558590052, 'Y', 'N', '2017-06-30 13:37:41'),
(35, '2', 'M-0000001', 'Ann Nelima', 'ann@gmail.com', '744cb9a9fb3d5583744ea3ece9b4d819d90bdee2', 'brendah1.jpg', 0, 'Y', 'N', '2017-07-06 05:29:51'),
(36, 'member', 'M-0000002', 'Blessing wanjala', 'blessing@gmail.com', '242a7dff5cd38d9475d0fd3e27d9f74e54c07581', 'brendah2.jpg', 0, 'N', 'N', '2017-07-06 07:50:34'),
(37, 'member', 'M-0000003', 'Peter Peter', 'peter@gmail.com', '4b8373d016f277527198385ba72fda0feb5da015', 'brendah3.jpg', 0, 'Y', 'N', '2017-07-06 07:57:33'),
(38, 'member', 'M-0000004', 'Grace Grace', 'grace@gmail.com', 'fd1cf5e271fd7c5ffaefb1c95aaf79964e1b2e65', 'brendah4.jpg', 0, 'Y', 'N', '2017-07-06 08:00:55'),
(40, 'member', 'M-0000006', 'Test Test', 'test@gmail.com', '984816fd329622876e14907634264e6f332e9fb3', 'user-profile-311.jpg', 0, 'Y', 'N', '2017-07-07 06:34:54'),
(41, 'member', 'M-0000007', 'Test Test', 'tesyyt@gmail.com', '984816fd329622876e14907634264e6f332e9fb3', 'user-profile-312.jpg', 0, 'Y', 'N', '2017-07-07 06:35:55'),
(42, 'member', 'M-0000008', 'f f', 'f@g.c', '6b0d31c0d563223024da45691584643ac78c96e8', 'user-profile-21.jpg', 0, 'Y', 'N', '2017-07-07 06:38:03'),
(43, 'member', 'M-0000009', 'Antony Antony', 'antony@gmail.com', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8', 'user-profile-22.jpg', 0, 'Y', 'N', '2017-07-07 07:25:27'),
(44, 'member', 'M-0000010', 'joy joy', 'joy@gmail.com', '5c2dd944dde9e08881bef0894fe7b22a5c9c4b06', 'user-profile-23.jpg', 0, 'Y', 'N', '2017-07-07 08:34:56'),
(45, 'member', 'M-0000011', 'h h', 'h@h.c', '042dc4512fa3d391c5170cf3aa61e6a638f84342', 'brendah41.jpg', 0, 'N', 'N', '2017-07-07 10:39:17'),
(46, 'member', 'M-0000012', 'UU UU', 'u12@u.k', 'b2c7c0caa10a0cca5ea7d69e54018ae0c0389dd6', 'brendah42.jpg', 0, 'Y', 'N', '2017-07-07 11:24:32'),
(47, 'member', 'M-0000013', 'r r', 'annkk@gmail.com', '51e69892ab49df85c6230ccc57f8e1d1606caccc', 'brendah421.jpg', 0, 'N', 'N', '2017-07-07 11:30:31'),
(48, 'member', 'M-0000014', 'joy joy', 'joypppp@gmail.com', '07c342be6e560e7f43842e2e21b774e61d85f047', 'brendah422.jpg', 0, 'Y', 'N', '2017-07-07 11:35:19'),
(49, 'member', 'M-0000015', 'O o', 'khalifwabpp@gmail.com', '7a81af3e591ac713f81ea1efe93dcf36157d8376', 'brendah31.jpg', 0, 'N', 'N', '2017-07-07 11:39:05'),
(50, 'member', 'M-0000016', 'Test Test', 'testYY@gmail.com', 'b2c7c0caa10a0cca5ea7d69e54018ae0c0389dd6', 'brendah7.jpg', 0, 'N', 'N', '2017-07-10 07:27:16'),
(51, 'member', 'M-0000017', 'TEST TEST', 'testttt@gmail.com', '51e69892ab49df85c6230ccc57f8e1d1606caccc', 'brendah8.jpg', 0, 'N', 'N', '2017-07-10 07:30:46'),
(52, 'member', 'M-0000018', ' ', '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', '', 0, 'N', 'N', '2017-07-10 07:34:13'),
(53, 'member', 'M-0000019', 'TEST TEST', 'teyyst@gmail.com', '51e69892ab49df85c6230ccc57f8e1d1606caccc', 'brendah65.jpg', 0, 'N', 'N', '2017-07-10 07:36:40'),
(54, 'member', 'M-0000020', 'TEST TEST', 'teyoyst@gmail.com', '516b9783fca517eecbd1d064da2d165310b19759', 'brendah71.jpg', 0, 'N', 'N', '2017-07-10 07:37:58'),
(55, 'member', 'M-0000021', 'TEST TEST', 'terrst@gmail.com', '51e69892ab49df85c6230ccc57f8e1d1606caccc', 'brendah66.jpg', 0, 'N', 'N', '2017-07-10 07:41:30'),
(56, 'member', 'M-0000022', 'TEST TEST', 'tettttst@gmail.com', '042dc4512fa3d391c5170cf3aa61e6a638f84342', 'brendah67.jpg', 0, 'N', 'N', '2017-07-10 07:45:16'),
(57, 'member', 'M-0000023', 'TEST TEST', 'testhh@gmail.com', '516b9783fca517eecbd1d064da2d165310b19759', 'brendah32.jpg', 0, 'N', 'N', '2017-07-10 07:53:04'),
(58, 'member', 'M-0000024', 'Peter Peter', 'p@gmail.com', '516b9783fca517eecbd1d064da2d165310b19759', 'brendah68.jpg', 0, 'N', 'N', '2017-07-10 08:25:31'),
(59, 'member', 'M-0000025', 'TEST TEST', 'testyyy@gmail.com', '042dc4512fa3d391c5170cf3aa61e6a638f84342', 'brendah69.jpg', 0, 'N', 'N', '2017-07-10 08:34:44'),
(60, 'member', 'M-0000026', 'TEST TEST', 'khalppppifwab@gmail.com', '042dc4512fa3d391c5170cf3aa61e6a638f84342', 'brendah52.jpg', 0, 'N', 'N', '2017-07-10 08:43:25'),
(62, '1', 'M-0000028', 'oo oo', 'oo@T.c', '8efd86fb78a56a5145ed7739dcb00c78581c5375', 'brendah610.jpg', 0, 'N', 'N', '2017-07-10 11:56:59'),
(63, '2', 'M-0000029', 'RR RR', 'R@R.C', 'ca73ab65568cd125c2d27a22bbd9e863c10b675d', 'brendah53.jpg', 0, 'N', 'N', '2017-07-10 14:07:33'),
(64, '1', 'M-0000030', 'p Peter', 'iip@gmail.com', '7a81af3e591ac713f81ea1efe93dcf36157d8376', 'brendah54.jpg', 0, 'N', 'N', '2017-07-10 15:24:55'),
(65, '1', 'M-0000031', 'p p', 'ppp@gmail.com', '516b9783fca517eecbd1d064da2d165310b19759', 'brendah611.jpg', 0, 'N', 'N', '2017-07-10 15:28:40');

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
(7, '1', '1', 'Brendah', 'Khalifwa', 'khalifwab@gmail.com', 'P.O BOX 54 SOY', '254707963603', 'brendah431.jpg', 'Y', 'N', '2017-07-10 12:57:06'),
(32, 'M-0000001', '2', 'Ann', 'Nelima', 'ann@gmail.com', 'P.O BOX 54 SOY', '707963603', 'brendah1.jpg', 'Y', 'N', '2017-07-10 13:00:00'),
(33, 'M-0000002', 'member', 'Blessing', 'wanjala', 'blessing@gmail.com', 'P.O BOX 54 SOY', '707963603', 'brendah2.jpg', 'N', 'N', '2017-07-07 12:15:55'),
(34, 'M-0000003', 'member', 'Peter', 'Peter', 'peter@gmail.com', 'P.O BOX 54 SOY', '707963603', 'brendah3.jpg', 'Y', 'N', '2017-07-07 10:36:32'),
(35, 'M-0000004', 'member', 'Grace', 'Grace', 'grace@gmail.com', 'P.O BOX 54 SOY', '707963603', 'brendah4.jpg', 'Y', 'N', '2017-07-07 12:07:38'),
(37, 'M-0000006', 'member', 'Test', 'Test', 'test@gmail.com', 'P.O BOX 54 SOY', '2147483647', 'user-profile-311.jpg', 'Y', 'N', '2017-07-07 12:09:23'),
(38, 'M-0000007', 'member', 'Test', 'Test', 'tesyyt@gmail.com', 'P.O BOX 54 SOY', '2147483647', 'user-profile-312.jpg', 'Y', 'N', '2017-07-07 10:28:34'),
(39, 'M-0000008', 'member', 'f', 'f', 'f@g.c', 'd', '254707963603', 'user-profile-21.jpg', 'Y', 'N', '2017-07-07 12:12:49'),
(40, 'M-0000009', 'member', 'Antony', 'Antony', 'antony@gmail.com', 'P.O BOX 54 SOY', '254707963603', 'user-profile-22.jpg', 'Y', 'N', '2017-07-07 10:00:33'),
(41, 'M-0000010', 'member', 'joy', 'joy', 'joy@gmail.com', 'P.O BOX 54 SOY', '254707963603', 'user-profile-23.jpg', 'Y', 'N', '2017-07-07 10:35:37'),
(42, 'M-0000011', 'member', 'h', 'h', 'h@h.c', 'k', '254707963603', 'brendah41.jpg', 'N', 'N', '2017-07-07 10:39:17'),
(43, 'M-0000012', 'member', 'UU', 'UU', 'u12@u.k', 'U', '254707963603', 'brendah42.jpg', 'Y', 'N', '2017-07-07 12:04:47'),
(44, 'M-0000013', 'member', 'r', 'r', 'annkk@gmail.com', 'r', '254707963603', 'brendah421.jpg', 'N', 'N', '2017-07-07 11:30:31'),
(45, 'M-0000014', 'member', 'joy', 'joy', 'joypppp@gmail.com', 'P.O BOX 54 SOY', '254707963603', 'brendah422.jpg', 'Y', 'N', '2017-07-07 12:08:53'),
(46, 'M-0000015', 'member', 'O', 'o', 'khalifwabpp@gmail.com', 'P.O BOX 54 SOY', '254707963603', 'brendah31.jpg', 'N', 'N', '2017-07-07 11:39:05'),
(47, 'M-0000016', 'member', 'Test', 'Test', 'testYY@gmail.com', 'P.O BOX 54 SOY', '707963603', 'brendah7.jpg', 'N', 'N', '2017-07-10 07:27:16'),
(48, 'M-0000017', 'member', 'TEST', 'TEST', 'testttt@gmail.com', 'P.O BOX 54 SOY', '707963603', 'brendah8.jpg', 'N', 'N', '2017-07-10 07:30:46'),
(50, 'M-0000019', 'member', 'TEST', 'TEST', 'teyyst@gmail.com', 'P.O BOX 54 SOY', '707963603', 'brendah65.jpg', 'N', 'N', '2017-07-10 07:36:40'),
(51, 'M-0000020', 'member', 'TEST', 'TEST', 'teyoyst@gmail.com', 'P.O BOX 54 SOY', '707963603', 'brendah71.jpg', 'N', 'N', '2017-07-10 07:37:58'),
(53, 'M-0000022', 'member', 'TEST', 'TEST', 'tettttst@gmail.com', 'P.O BOX 54 SOY', '707963603', 'brendah67.jpg', 'N', 'N', '2017-07-10 07:45:15'),
(54, 'M-0000023', 'member', 'TEST', 'TEST', 'testhh@gmail.com', 'P.O BOX 54 SOY', '254707963603', 'brendah32.jpg', 'N', 'N', '2017-07-10 07:53:04'),
(55, 'M-0000024', 'member', 'Peter', 'Peter', 'p@gmail.com', 'P.O BOX 54 SOY', '252707963603', 'brendah68.jpg', 'N', 'N', '2017-07-10 08:25:31'),
(56, 'M-0000025', 'member', 'TEST', 'TEST', 'testyyy@gmail.com', 'P.O BOX 54 SOY', '254707963603', 'brendah69.jpg', 'N', 'N', '2017-07-10 08:34:44'),
(57, 'M-0000026', 'member', 'TEST', 'TEST', 'khalppppifwab@gmail.com', 'P.O BOX 54 SOY', '254707963603', 'brendah52.jpg', 'N', 'N', '2017-07-10 08:43:25'),
(58, 'M-0000027', '', 'admin', 'admin', 'admin@gmail.com', 'P.O BOX 54 SOY', '254707963603', 'brendah311.jpg', 'N', 'N', '2017-07-10 11:52:58'),
(59, 'M-0000028', '1', 'oo', 'oo', 'oo@T.c', 'P.O BOX 54 SOY', '253707963603', 'brendah610.jpg', 'N', 'N', '2017-07-10 11:56:59'),
(60, 'M-0000029', '2', 'RR', 'RR', 'R@R.C', 'P.O BOX 54 SOY', '255707963603', 'brendah53.jpg', 'N', 'N', '2017-07-10 14:07:33'),
(61, 'M-0000030', '1', 'p', 'Peter', 'iip@gmail.com', 'i', 'ET707963603', 'brendah54.jpg', 'N', 'N', '2017-07-10 15:24:55'),
(62, 'M-0000031', '1', 'p', 'p', 'ppp@gmail.com', 'P.O BOX 54 SOY', '86707963603', 'brendah611.jpg', 'N', 'N', '2017-07-10 15:28:40');

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
(1, 32);

-- --------------------------------------------------------

--
-- Table structure for table `puserrole`
--

CREATE TABLE `puserrole` (
  `id` int(11) NOT NULL,
  `userrole` varchar(50) NOT NULL,
  `deleted` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `puserrole`
--

INSERT INTO `puserrole` (`id`, `userrole`, `deleted`) VALUES
(1, 'admin', 'N'),
(2, 'member', 'N'),
(3, 'testTEST', 'N'),
(4, 'TestTEST', 'N');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `puserrole`
--
ALTER TABLE `puserrole`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT for table `plastnumbers`
--
ALTER TABLE `plastnumbers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `puserrole`
--
ALTER TABLE `puserrole`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
