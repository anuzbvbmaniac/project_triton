-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2018 at 05:35 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_triton`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '83c0d0c74531a878fa9942068eef3c29');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_banner`
--

CREATE TABLE `tbl_banner` (
  `banner_id` int(11) NOT NULL,
  `banner_file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_banner`
--

INSERT INTO `tbl_banner` (`banner_id`, `banner_file`) VALUES
(1, '6926c979ee2c8315eb7140dfac8437d1_Trinton.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `feedback_id` int(11) NOT NULL,
  `feedback_in` int(11) NOT NULL,
  `feedback_by` varchar(100) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `feedback` text NOT NULL,
  `feedback_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`feedback_id`, `feedback_in`, `feedback_by`, `phone`, `email`, `feedback`, `feedback_date`) VALUES
(15, 1, 'Conan Cabrera', '2147483647', 'Email Not Available', 'Omnis quia voluptatem et minima aut pariatur Laborum Culpa adipisicing elit eu animi proident fugiat dolor enim reprehenderit', '2018-02-28 15:15:00'),
(17, 1, 'Declan Salas', '9876543454', 'senoxyjamo@yahoo.com', 'Ut nostrum elit optio dolor nemo velit consectetur iusto vel ea sed irure laboris', '2018-02-28 15:18:08'),
(18, 3, 'Michelle George', '9876543454', 'sysamy@gmail.com', 'Modi aut cupidatat consectetur sint omnis saepe quia proident minus non laborum', '2018-02-28 15:35:47'),
(19, 2, 'Anastasia Silva', '9751234565', 'Email Not Available', 'Quo consequatur et aut explicabo Nihil quo tempor eum aut saepe', '2018-02-28 15:43:07'),
(20, 4, 'Tara Shields', '9865764332', 'bytisaqyh@hotmail.com', 'Debitis ipsa sunt cillum deserunt rerum tempor illo eligendi ad quia debitis consectetur magni dolor consequatur do facilis est', '2018-02-28 15:45:59');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_level`
--

CREATE TABLE `tbl_level` (
  `level_id` int(11) NOT NULL,
  `level_name` varchar(100) NOT NULL,
  `updated_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_level`
--

INSERT INTO `tbl_level` (`level_id`, `level_name`, `updated_date`) VALUES
(1, 'School', '0000-00-00'),
(2, 'Plus Two', '0000-00-00'),
(3, 'Bachelor', '0000-00-00'),
(4, 'Master', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notice`
--

CREATE TABLE `tbl_notice` (
  `notice_id` int(11) NOT NULL,
  `notice` text NOT NULL,
  `publish_date` date NOT NULL,
  `notice_file` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_notice`
--

INSERT INTO `tbl_notice` (`notice_id`, `notice`, `publish_date`, `notice_file`) VALUES
(7, 'Qui voluptatibus architecto dolor non voluptas', '2018-02-27', 'c958fa07d7df0517e66c3c52abd07082_Trinton.jpg'),
(11, 'Yo kali linux ko photo ho ', '2018-02-27', '03119c66032644068d97295a7e8543aa_Trinton.jpg'),
(12, 'Provident sunt illo quis minim voluptatem', '2018-02-27', '1573e688b2629f139f5e1865320d62ac_Trinton.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stream`
--

CREATE TABLE `tbl_stream` (
  `stream_id` int(11) NOT NULL,
  `stream` varchar(80) NOT NULL,
  `level` int(11) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_banner`
--
ALTER TABLE `tbl_banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `tbl_level`
--
ALTER TABLE `tbl_level`
  ADD PRIMARY KEY (`level_id`);

--
-- Indexes for table `tbl_notice`
--
ALTER TABLE `tbl_notice`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `tbl_stream`
--
ALTER TABLE `tbl_stream`
  ADD PRIMARY KEY (`stream_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_banner`
--
ALTER TABLE `tbl_banner`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `tbl_level`
--
ALTER TABLE `tbl_level`
  MODIFY `level_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_notice`
--
ALTER TABLE `tbl_notice`
  MODIFY `notice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tbl_stream`
--
ALTER TABLE `tbl_stream`
  MODIFY `stream_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
