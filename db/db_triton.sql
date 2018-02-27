-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2018 at 02:01 PM
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
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `feedback_id` int(11) NOT NULL,
  `feedback_in` int(11) NOT NULL,
  `feedback_by` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `feedback` text NOT NULL,
  `feedback_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`feedback_id`, `feedback_in`, `feedback_by`, `email`, `feedback`, `feedback_date`) VALUES
(1, 0, 'Olga Stokes', 'pigoli@yahoo.com', 'Veniam aliquid aliquam quia illo facere', '2018-02-27 12:36:50'),
(5, 0, 'Latifah Francis', 'xakobidi@yahoo.com', 'Adipisicing voluptas molestiae quo est quia autem hic reprehenderit qui corrupti qui sit adipisci ea', '2018-02-27 12:38:30'),
(6, 0, 'Theodore Spears', 'dyruk@yahoo.com', 'Quas sapiente reprehenderit obcaecati non dolorem reprehenderit eaque rerum atque impedit', '2018-02-27 12:42:25'),
(9, 0, 'Sabin Thapa', 'lenexebal@gmail.com', 'Vero minus ex magni sunt consequatur Voluptatem accusantium dolor et voluptatem', '2018-02-27 13:06:02');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_level`
--

CREATE TABLE `tbl_level` (
  `level_id` int(11) NOT NULL,
  `level_name` varchar(100) NOT NULL,
  `updated_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_level`
--
ALTER TABLE `tbl_level`
  MODIFY `level_id` int(11) NOT NULL AUTO_INCREMENT;
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
