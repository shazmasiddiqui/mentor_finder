-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2022 at 03:32 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mentorfinder`
--

-- --------------------------------------------------------

--
-- Table structure for table `assigned_mentor`
--

CREATE TABLE `assigned_mentor` (
  `id` int(11) NOT NULL,
  `mentee_id` int(11) NOT NULL,
  `mentor_id` int(11) NOT NULL,
  `status` enum('Requested','Confirmed') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mentee`
--

CREATE TABLE `mentee` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `department` varchar(60) NOT NULL,
  `sem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mentors`
--

CREATE TABLE `mentors` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(60) NOT NULL,
  `description` text NOT NULL,
  `department` varchar(60) NOT NULL,
  `sem` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `skills` enum('Data Structures','Web Development','React JS') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mentors`
--

INSERT INTO `mentors` (`id`, `name`, `image`, `description`, `department`, `sem`, `rating`, `skills`) VALUES
(1, 'Akshay Sharma', 'imgmentor1.png', 'Description 1', 'MCA', 3, 4, 'React JS'),
(2, 'Shazma Siddiqui', 'imgmentor2.png', 'Description 2', 'MCA', 3, 4, 'Web Development'),
(3, 'Khushi Gupta', 'imgmentor3.png', 'Description 3', 'MCA', 3, 4, 'Data Structures'),
(4, 'Harshit Gupta', 'imgmentor4.png', 'Description4', 'B.Tech', 5, 4, 'Data Structures'),
(5, 'Aayushi Singh', 'imgmentor5.png', 'Description5', 'B.Tech', 4, 5, 'Data Structures'),
(6, 'Yash Shah', 'imgmentor6.png', 'Description6', 'MCA', 3, 5, 'Web Development'),
(7, 'Shivani Singh', 'imgmentor7.png', 'Description7', 'B.Tech', 5, 4, 'Web Development'),
(8, 'Raj Malhotra', 'imgmentor8.png', 'Description8', 'MCA', 5, 4, 'React JS')
,(9, 'Tarun Sharma', 'imgmentor9.png', 'Description9', 'MCA', 6, 5, 'React JS');
--
-- Indexes for dumped tables
--

--
-- Indexes for table `assigned_mentor`
--
ALTER TABLE `assigned_mentor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mentee`
--
ALTER TABLE `mentee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mentors`
--
ALTER TABLE `mentors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assigned_mentor`
--
ALTER TABLE `assigned_mentor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `mentee`
--
ALTER TABLE `mentee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mentors`
--
ALTER TABLE `mentors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
