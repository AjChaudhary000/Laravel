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
-- Database: `q2`
--

-- --------------------------------------------------------

--
-- Table structure for table `mcq_que`
--

CREATE TABLE `mcq_que` (
  `id` int(10) NOT NULL,
  `q_no` int(5) NOT NULL,
  `question` varchar(100) NOT NULL,
  `opt_1` varchar(50) NOT NULL,
  `opt_2` varchar(50) NOT NULL,
  `opt_3` varchar(50) NOT NULL,
  `opt_4` varchar(50) NOT NULL,
  `correct_opt` varchar(50) NOT NULL,
  `sub_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mcq_que`
--

INSERT INTO `mcq_que` (`id`, `q_no`, `question`, `opt_1`, `opt_2`, `opt_3`, `opt_4`, `correct_opt`, `sub_name`) VALUES
(1, 1, '        RDBMS stand for ?        ', 'relation data manage sys', 'relax data manage sys', 'relation data monitor sys', 'relational database manag', 'relational database manag', 'Rdbms'),
(2, 2, '                how to fetch data ?', 'using fetch query', 'using display query', 'using select query', 'using return query', 'using select query', 'Rdbms'),
(3, 3, '               Capital Of India ?', 'Mumbai', 'Delhi', 'Surat', 'Kolkata', 'Delhi', 'Rdbms'),
(4, 4, '               FIRST PM OF INDIA ? ', 'JAWAHARLAL', 'MANMOHAN', 'MODI', 'RAJENDRA PRASAD', 'JAWAHARLAL', 'Rdbms'),
(5, 5, '                Winner Team of Ipl 2019 ?', 'Mumbai', 'Chennai', 'Hyderabad', 'Kolkata', 'Mumbai', 'Rdbms'),
(6, 1, '         which of the following not java feature ?', 'Dynamic', 'Neutral', 'Use of pointers', 'Object-Oriented', 'Use of  pointers', 'Java'),
(7, 2, '              __used to find bugs  ', 'jvm', 'jcr', 'jdk', 'jdb', 'jdb', 'Java'),
(8, 3, '            which package contain random class ?', 'java.util.package', 'java.lang.package', 'java.awt.package', 'java.ran.package', 'java.util.package', 'Java'),
(9, 4, '                subclass of panel class ?', 'applet class', 'window class', 'frame class', 'dialouge class', 'applet class', 'Java'),
(10, 5, '                reserved keyword in java ?', 'object', 'strictfp', 'main', 'system', 'strictfp', 'Java'),
(11, 6, '            keyword is used to access the feature of package ?    ', 'package', 'extend', 'import', 'exports', 'import', 'Java'),
(12, 6, '            Minimal Superkeys are called ?    ', 'unique key', 'superset key', 'candidate key', 'primary key', 'candidate key', 'Rdbms'),
(13, 7, '         logical design of database is knows as       ', 'database relation', 'database instance', 'database schema', 'database entiry', 'database schema', 'Rdbms'),
(14, 8, '                Rdbms consist collection of ?', 'field', 'records', 'table', 'key', 'table', 'Rdbms'),
(15, 9, '          The term ____ is used to refer a row ?     ', 'filed', 'attribute', 'tuple', 'instance', 'tuple', 'Rdbms'),
(16, 10, '             ____operator is used for appending two string ?   ', '%', '&', '||', '#', '||', 'Rdbms'),
(18, 1, '              PM of india ?  ', 'modi', 'Jawahar', 'Amit shah', 'RAJENDRA PRASAD', 'modi', 'PHP'),
(19, 2, '            Capital of india ?    ', 'delhi', 'surat', 'up', 'mumbai', 'delhi', 'PHP'),
(20, 3, '       capital of maharastra ?         ', 'pune', 'mumbai', 'ratnagiri', 'nagpur', 'mumbai', 'PHP'),
(21, 4, '         How many days are there in jan ?       ', '28', '29', '31', '30', '31', 'PHP'),
(22, 5, '                How many player are there in a cricket team ?', '10', '11', '12', '15', '15', 'PHP'),
(23, 1, '             first event trigger in ana aspx page ?   ', 'page_Load()', 'page_body()', 'page_init()', 'page()', 'page_init()', '.Net'),
(24, 2, '                file extension for asp.net', '.web', '.asp', '.aspx', 'none', '.asp', '.Net'),
(25, 3, '      which counry did ravi shastri play for ?          ', 'Glamorgan', 'Lancashire', 'Russia', 'netherland', 'Glamorgan', '.Net'),
(26, 4, 'Ricky Pointing is also Known as What ?                ', 'rickstar', 'pots', 'ponts', 'punter', 'punter', '.Net'),
(27, 5, '                Higheset Scorer In single odi matches ?', 'Virat', 'Rohit Sharma', 'Babar Azam', 'Sachin', 'Rohit Sharma', '.Net'),
(28, 6, '           who is rohit sharma     ', 'Dancer', 'Actor', 'Cricketer', 'Painter', 'Cricketer', '.Net');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(10) NOT NULL,
  `s_name` varchar(20) NOT NULL,
  `total_mrks` varchar(10) NOT NULL,
  `obtain_mrks` varchar(10) NOT NULL,
  `exam_date` varchar(30) NOT NULL,
  `exam_time` varchar(30) NOT NULL,
  `stu_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `s_name`, `total_mrks`, `obtain_mrks`, `exam_date`, `exam_time`, `stu_id`) VALUES
(2, 'Java', '50', '15', '17/11/21', '', 1),
(3, 'Rdbms', '50', '25', '17/11/21', '', 1),
(4, 'Rdbms', '50', '5', '17/11/21', '', 1),
(5, 'Java', '50', '15', '17/11/21', '', 1),
(6, 'Rdbms', '50', '50', '17/11/21', '', 1),
(7, 'Rdbms', '50', '35', '17/11/21', '04:16:44', 3),
(8, 'Java', '50', '15', '17/11/21', '05:21:12', 3),
(9, 'Java', '50', '0', '17/11/21', '05:34:04', 3),
(10, 'Java', '50', '10', '17/11/21', '05:36:04', 3),
(11, 'Rdbms', '50', '50', '19/11/21', '10:31:49', 1),
(12, 'Java', '50', '15', '20/11/21', '06:49:14', 24),
(13, 'PHP', '50', '25', '20/11/21', '07:37:47', 24),
(14, 'PHP', '50', '25', '20/11/21', '07:46:41', 24),
(15, 'PHP', '25', '20', '20/11/21', '07:57:40', 24),
(18, 'PHP', '25', '10', '20/11/21', '08:16:34', 24),
(19, 'Java', '50', '25', '20/11/21', '08:36:30', 4),
(20, 'PHP', '25', '20', '20/11/21', '08:37:41', 4),
(21, '.Net', '50', '40', '20/11/21', '08:42:33', 4),
(22, 'Java', '50', '37.5', '20/11/21', '08:53:14', 4),
(23, 'PHP', '25', '15', '23/11/21', '07:10:45', 1);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `s_id` int(10) NOT NULL,
  `s_name` varchar(20) NOT NULL,
  `s_code` varchar(20) NOT NULL,
  `exam_date` date NOT NULL,
  `examtime` time(6) NOT NULL,
  `exam_endtime` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`s_id`, `s_name`, `s_code`, `exam_date`, `examtime`, `exam_endtime`) VALUES
(1, 'C++', 'C++-103', '2021-11-18', '10:50:00.000000', '12:00:00.225000'),
(2, 'Rdbms', 'Rdbms-101', '2021-11-16', '13:00:00.000000', '15:00:00.000000'),
(3, 'PHP', 'PHP-102', '2021-11-17', '10:50:00.833000', '12:02:00.127000'),
(4, 'Java', 'Java-104', '2021-11-15', '14:00:00.000000', '17:00:00.000000'),
(6, '.Net', '.Net-105', '2021-11-18', '12:30:00.000000', '13:50:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `test_create`
--

CREATE TABLE `test_create` (
  `id` int(10) NOT NULL,
  `s_name` varchar(30) NOT NULL,
  `t_name` varchar(30) NOT NULL,
  `no_q` int(10) NOT NULL,
  `t_marks` int(10) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test_create`
--

INSERT INTO `test_create` (`id`, `s_name`, `t_name`, `no_q`, `t_marks`, `status`) VALUES
(3, 'Java', '104er', 4, 50, 1),
(4, 'Rdbms', '201 theory', 10, 50, 0),
(6, 'PHP', '212', 5, 25, 1),
(12, '.Net', '104', 5, 50, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mcq_que`
--
ALTER TABLE `mcq_que`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `test_create`
--
ALTER TABLE `test_create`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mcq_que`
--
ALTER TABLE `mcq_que`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `s_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `test_create`
--
ALTER TABLE `test_create`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
