-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2021 at 02:42 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `q3`
--

-- --------------------------------------------------------

--
-- Table structure for table `pool`
--

CREATE TABLE `pool` (
  `p_id` int(10) NOT NULL,
  `question` varchar(100) NOT NULL,
  `opt1` varchar(50) NOT NULL,
  `opt2` varchar(50) NOT NULL,
  `opt3` varchar(50) NOT NULL,
  `opt4` varchar(50) NOT NULL,
  `correct` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pool`
--

INSERT INTO `pool` (`p_id`, `question`, `opt1`, `opt2`, `opt3`, `opt4`, `correct`, `status`) VALUES
(1, 'which of the function is built-in function in python ?`', 'seed()', 'print()', 'factorial()', 'sqrt()', 'print()', 1),
(2, 'which of the following is not a core data type in python ?', 'tuples', 'class', 'list', 'dictionary', 'class', 0),
(3, 'which one of the following is not a keyword in python ?', 'pass', 'eval', 'assert', 'non', 'eval', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pool_result`
--

CREATE TABLE `pool_result` (
  `id` int(10) NOT NULL,
  `pool_id` int(10) NOT NULL,
  `selection` varchar(50) NOT NULL,
  `number` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pool_result`
--

INSERT INTO `pool_result` (`id`, `pool_id`, `selection`, `number`) VALUES
(1, 2, 'tuples', 1),
(2, 2, 'tuples', 2),
(3, 2, 'class', 1),
(4, 2, 'list', 1),
(5, 2, 'class', 2),
(6, 2, 'tuples', 3),
(7, 2, 'dictionary', 1),
(8, 2, 'dictionary', 2),
(9, 2, 'dictionary', 3),
(10, 2, 'tuples', 4),
(11, 2, 'tuples', 5),
(12, 2, 'tuples', 6),
(13, 3, 'eval', 1),
(14, 3, 'eval', 2),
(15, 3, 'pass', 1),
(16, 3, 'eval', 3),
(17, 3, 'assert', 1),
(18, 3, 'non', 1),
(19, 3, 'non', 2),
(20, 3, 'pass', 2),
(21, 3, 'pass', 3),
(22, 1, 'factorial()', 1),
(23, 1, 'seed()', 1),
(24, 1, 'print()', 1),
(25, 1, 'print()', 2),
(26, 1, 'print()', 3),
(27, 1, 'print()', 4),
(28, 1, 'sqrt()', 1),
(29, 1, 'sqrt()', 2),
(30, 1, 'seed()', 2),
(31, 1, 'seed()', 3),
(32, 1, 'print()', 5),
(33, 1, '', 1),
(34, 1, '', 2),
(35, 1, '', 3),
(36, 1, 'seed()', 4),
(37, 1, 'seed()', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pool`
--
ALTER TABLE `pool`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `pool_result`
--
ALTER TABLE `pool_result`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pool`
--
ALTER TABLE `pool`
  MODIFY `p_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pool_result`
--
ALTER TABLE `pool_result`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
