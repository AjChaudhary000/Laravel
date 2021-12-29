-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2021 at 02:41 PM
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
-- Database: `q1`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `data_id` int(10) NOT NULL,
  `user_id` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `f_name` varchar(10) NOT NULL,
  `email` varchar(25) NOT NULL,
  `age` varchar(10) NOT NULL,
  `nation` varchar(20) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` varchar(200) NOT NULL,
  `education` varchar(20) NOT NULL,
  `city` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`data_id`, `user_id`, `name`, `f_name`, `email`, `age`, `nation`, `phone`, `address`, `education`, `city`, `gender`, `dob`, `image`) VALUES
(1, '1', 'Rose', 'Roshdad', 'rs@gmail.com', '23', 'indian', '9033876524', '96 raghuvirdham ', '10th/12th pass', 'Ahemdabad', 'female', '2021-11-10', 'contact.png'),
(2, '1', 'Devsagar', 'devdad', 'dev@gmail.com', '23', 'indian', '9898302378', 'limbayat', 'Graduate', 'Mumbai', 'male', '1997-11-11', 'contact.png'),
(3, '24', 'vishal', 'vishaldad', 'vs@gmail.com', '21', 'indian', '9898234576', 'godadara', '10th/12th pass', 'Surat', 'male', '2021-11-10', 'contact.png'),
(5, '24', 'Deepak Verma', 'Manmohan', 'dipk@gmail.com', '22', 'indian', '9737970261', '12 nilam nagar godadara surat', 'Graduate', 'Ahemdabad', 'male', '1998-06-18', 'ic_account.jpg'),
(6, '3', 'manish gupta', 'deepak', 'manish@gmail.com', '23', 'indian', '9898936578', '23 om nagar dindoli', 'Graduate', 'Valsad', 'male', '1998-06-12', 'contact.png'),
(8, '1', 'nitin verma', 'ramesh', 'nt12@gmail.com', '24', 'pakistani', '8989882132', 'Adajan', 'Graduate', 'Kanpur', 'male', '1998-07-09', 'ic_account.jpg'),
(9, '1', 'Soleman bhai', 'Sohel ', 'sl@gmail.com', '67', 'indian', '9898302399', '34 valentine', '10th/12th', 'Mumbai', 'male', '1987-07-08', 'ic_gfglogo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(10) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Last_name` varchar(20) NOT NULL,
  `Phone` varchar(10) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `City` varchar(10) NOT NULL,
  `Date` date NOT NULL,
  `Address` varchar(30) NOT NULL,
  `Gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `Name`, `Email`, `Last_name`, `Phone`, `Password`, `City`, `Date`, `Address`, `Gender`) VALUES
(1, 'devsagar', 'dev@gmail.com', 'pandagonda', '0', 'imdev', '', '2021-11-17', 'limayat', 'male'),
(2, 'shubham', 'g', 'mishra', '', 'imshubh', 'Surat', '2021-11-17', 'godadara', 'male'),
(3, 'arjun', 'imarjun989@gmail.com', 'chaoudhary', '', 'imarjun', 'Ahemdabad', '2021-11-16', 'pandesara', 'male'),
(4, 'alex', 'imalex98@gmail.com', 'raval', '9898234576', 'imalex', 'Valsad', '2021-11-17', 'katargam', 'male'),
(5, 'darshana', 'darshana67@gmail.com', 'africawala', '9033962609', 'imdarshana', 'Mumbai', '2021-11-24', 'adajan', 'male'),
(24, 'Rose', 'rs@gmail.com', 'Tiwari', '9898346512', 'imrose', 'Ahemdabad', '1998-03-09', 'dindoli', 'female'),
(25, 'Vishal', 'vs@gmail.com', 'tiwari', '9033876524', '', 'Ahemdabad', '2013-07-09', 'godadara', 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`data_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biodata`
--
ALTER TABLE `biodata`
  MODIFY `data_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
