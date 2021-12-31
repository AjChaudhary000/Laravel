-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2021 at 12:09 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laraveldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `userpassword` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `userpassword`) VALUES
(1, 'Admin', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `pool`
--

CREATE TABLE `pool` (
  `id` int(10) NOT NULL,
  `Question` varchar(300) NOT NULL,
  `opt1` varchar(200) NOT NULL,
  `opt2` varchar(200) NOT NULL,
  `opt3` varchar(200) NOT NULL,
  `opt4` varchar(200) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pool`
--

INSERT INTO `pool` (`id`, `Question`, `opt1`, `opt2`, `opt3`, `opt4`, `status`) VALUES
(1, 'PM OF INDIA', 'MODI', 'NEHRU', 'KALAM', 'NONE', '0'),
(2, 'capital of india', 'delhi', 'mumbai', 'agara', 'surat', '1');

-- --------------------------------------------------------

--
-- Table structure for table `pool_ans`
--

CREATE TABLE `pool_ans` (
  `id` int(10) NOT NULL,
  `pool_id` int(10) NOT NULL,
  `answer` varchar(50) NOT NULL,
  `cn` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pool_ans`
--

INSERT INTO `pool_ans` (`id`, `pool_id`, `answer`, `cn`) VALUES
(2, 2, '2', 1),
(3, 2, '3', 1),
(4, 2, '2', 2),
(5, 2, '3', 2),
(6, 2, '1', 1),
(7, 2, '4', 1),
(8, 2, '2', 3),
(9, 2, '1', 2),
(10, 2, '1', 3),
(11, 2, '1', 4),
(12, 2, '1', 5),
(13, 2, '4', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pool`
--
ALTER TABLE `pool`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pool_ans`
--
ALTER TABLE `pool_ans`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pool`
--
ALTER TABLE `pool`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pool_ans`
--
ALTER TABLE `pool_ans`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
