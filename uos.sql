-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2020 at 02:04 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uos`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(10) NOT NULL,
  `a_username` varchar(50) NOT NULL,
  `a_password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_username`, `a_password`) VALUES
(1, 'hania15@gmail.com', '1122');

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `a_id` int(11) NOT NULL,
  `t_id` int(11) NOT NULL,
  `a_code` varchar(20) NOT NULL,
  `s_id` int(11) NOT NULL,
  `a_file` varchar(100) NOT NULL,
  `a_remarks` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`a_id`, `t_id`, `a_code`, `s_id`, `a_file`, `a_remarks`) VALUES
(1, 4, 'Sep001', 7, 'BSCS-18-18.pdf', 'submit befor 15'),
(2, 4, 'Oct001', 7, 'BSCS-18-18.pdf', 'after sunday'),
(3, 2, 'Feb005', 3, 'BSCS-18-18.pdf', 'after saturday');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `m_id` int(11) NOT NULL,
  `m_test` varchar(20) NOT NULL,
  `s_id` int(11) NOT NULL,
  `t_id` int(11) NOT NULL,
  `m_english` int(11) NOT NULL,
  `m_calculas` int(11) NOT NULL,
  `m_cplus` int(11) NOT NULL,
  `m_database` int(11) NOT NULL,
  `m_physics` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`m_id`, `m_test`, `s_id`, `t_id`, `m_english`, `m_calculas`, `m_cplus`, `m_database`, `m_physics`) VALUES
(1, '', 11, 6, 12, 21, 32, 44, 33),
(2, '', 18, 6, 44, 33, 22, 12, 54),
(3, '', 18, 6, 79, 87, 77, 88, 90),
(4, '', 3, 2, 45, 67, 55, 88, 60),
(5, '', 4, 2, 92, 95, 98, 99, 100),
(6, '', 1, 2, 29, 20, 11, 33, 22),
(7, '', 2, 2, 70, 70, 72, 74, 68),
(8, 'Aug001', 11, 6, 56, 67, 66, 90, 98),
(9, 'Aug002', 1, 2, 76, 67, 88, 55, 34),
(10, '', 11, 6, 0, 0, 0, 0, 0),
(11, 'Aug001', 7, 4, 88, 99, 89, 90, 100),
(12, 'Aug001', 5, 4, 100, 89, 78, 66, 100),
(13, 'Aug002', 5, 4, 45, 67, 100, 100, 100);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `s_id` int(10) NOT NULL,
  `t_id` int(10) NOT NULL,
  `s_name` varchar(30) NOT NULL,
  `s_fname` varchar(30) NOT NULL,
  `s_course` varchar(15) NOT NULL,
  `s_fcnic` varchar(20) NOT NULL,
  `s_phone` varchar(15) NOT NULL,
  `s_username` varchar(100) NOT NULL,
  `s_password` varchar(20) NOT NULL,
  `s_address` varchar(100) NOT NULL,
  `s_pic` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`s_id`, `t_id`, `s_name`, `s_fname`, `s_course`, `s_fcnic`, `s_phone`, `s_username`, `s_password`, `s_address`, `s_pic`) VALUES
(1, 2, 'Abdul Rahman', 'Abdul Majeed', 'BSCS', '35301-8185044-9', '03091308469', 'rahman@gmail.com', 'rahman', 'sahiwal uni', '48958a84c026ef124bfd593b4b6c5b33.gif'),
(2, 2, 'Abdul Salam', 'Salam', 'BSCS', '353014456347257', '03021223455', 'salam@gmail.com', 'salam', 'haveli lakkha', 'b1670c3b663f3cc6cbff21ad467e1141.jpg'),
(3, 2, 'Amir', 'Nazir', 'BSCS', '33302-3141044-7', '03212132445', 'amir@gmail.com', 'amir', 'mandi', 'images.jpg'),
(4, 2, 'Ahmad', 'Aziz', 'BSCS', '3214123412', '03014545677', 'ahmad@gmail.com', 'ahmad', 'high school', 'd7c2d298955569f9eb15ac54784c1e39.jpg'),
(5, 4, 'Bilal', 'Hassan', 'BSMath', '3530181850887', '03056703456', 'bilal@gmail.com', 'bilal', 'mandi', 'download.jpg'),
(7, 4, 'Irfan', 'Ramzan', 'BSPhysics', '33302-3141044-7', '04243345234', 'irfan@gmail.com', 'irfan', 'faridia', 'download (1).jpg'),
(8, 5, 'Haniya', 'Azam', 'BSIT', '948210948032', '324080321840932', 'haniya@gmail.com', 'haniya', 'faridia', '55819017_266307677587400_315907454644781056_n.jpg'),
(9, 5, 'Atfah', 'Riaz', 'BSIT', '3214123412', '032403254234', 'atfah@gmail.com', 'atfah', 'Sahiwal', '74522279_388231788728321_4213085367999397888_n.jpg'),
(11, 6, 'Sana', 'Aziz', 'BSCS', '353014456347257', '03091308469', 'sana@gmail.com', 'sana', 'Lahore', '61589231_113906696525420_8431452996017061888_n'),
(13, 5, 'Anita', 'Danish', 'BSIT', '35301-8185044-9', '03091308469', 'anita@gmail.com', 'anita', 'Lahora', '1595763071983.jpg'),
(17, 5, 'abdul rahman', 'Abdul majeed', 'BSSE', '33302-3141044-7', '03091308469', 'admin@gmail.com', '1122', 'haveli', ''),
(18, 6, 'abdul rahman', 'Abdul majeed', 'BSCS', '353014456347257', '03091308469', 'sahil@gmail.com', '1122', 'faridia', '64367962_307560086795492_6040064211181109248_o.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `submit`
--

CREATE TABLE `submit` (
  `s_id` int(11) NOT NULL,
  `st_id` int(11) NOT NULL,
  `t_id` int(11) NOT NULL,
  `a_id` varchar(20) NOT NULL,
  `s_file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `submit`
--

INSERT INTO `submit` (`s_id`, `st_id`, `t_id`, `a_id`, `s_file`) VALUES
(1, 2, 2, '1', 'BSCS-18-18.pdf'),
(2, 7, 3, '1', 'asssignment no1-18-18.pdf'),
(4, 3, 3, '3', 'BSCS-18-18.pdf'),
(5, 3, 3, '3', 'BSCS-18-18.pdf'),
(6, 3, 3, '3', 'BSCS-18-18.pdf'),
(7, 2, 2, '3', 'asssignment no1-18-18.pdf'),
(8, 2, 2, '2', 'asssignment no1-18-18.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `t_id` int(10) NOT NULL,
  `t_name` varchar(40) NOT NULL,
  `t_qualification` varchar(50) NOT NULL,
  `t_phone` varchar(15) NOT NULL,
  `t_subject` varchar(10) NOT NULL,
  `t_username` varchar(50) NOT NULL,
  `t_password` varchar(20) NOT NULL,
  `t_address` varchar(100) NOT NULL,
  `t_pic` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`t_id`, `t_name`, `t_qualification`, `t_phone`, `t_subject`, `t_username`, `t_password`, `t_address`, `t_pic`) VALUES
(2, 'Sir Umair', 'Phd', '4459397862', 'C++', 'umair@gmail.com', 'umair', 'Haveli', '9653170af2b14bc3283e932e0cdb5036.jpg'),
(3, 'Sir Saleem', 'Phd', '4459397862', 'C++', 'saleem@gmail.com', 'saleem', 'Lahore', 'images (1).jpg'),
(4, 'Sir Nazir Ahmad', 'Phd', '4459397862', 'C++', 'nazir@gmail.com', 'ahmad', 'Sahiwal', 'download (1).jpg'),
(5, 'Mam Zanib', 'Phd', '4459397862', 'C++', 'zanib@gmail.com', 'zanib12', 'Pakpattan', '1595763069779.jpg'),
(6, 'Sir Shafiq', 'Phd', '4459397862', 'C++', 'shafiq@gmail.com', 'shafiq', 'Depalpur', 'images (2).jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `submit`
--
ALTER TABLE `submit`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`t_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `s_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `submit`
--
ALTER TABLE `submit`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `t_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
