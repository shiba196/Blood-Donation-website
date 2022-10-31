-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2021 at 08:42 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doner_creditials`
--

-- --------------------------------------------------------

--
-- Table structure for table `abnegetivedonordetail`
--

CREATE TABLE `abnegetivedonordetail` (
  `id` int(11) NOT NULL,
  `abneg_donor_name` varchar(255) NOT NULL,
  `abneg_donor_email` varchar(255) NOT NULL,
  `abneg_donor_mobno` int(20) NOT NULL,
  `abneg_donor_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `abnegetivedonordetail`
--

INSERT INTO `abnegetivedonordetail` (`id`, `abneg_donor_name`, `abneg_donor_email`, `abneg_donor_mobno`, `abneg_donor_address`) VALUES
(15, 'payal', 'payal123@gmail.com', 12345678, 'bhubaneswar');

-- --------------------------------------------------------

--
-- Table structure for table `abpositivedonordetail`
--

CREATE TABLE `abpositivedonordetail` (
  `id` int(11) NOT NULL,
  `abpos_donor_name` varchar(255) NOT NULL,
  `abpos_donor_email` varchar(255) NOT NULL,
  `abpos_donor_mobno` int(20) NOT NULL,
  `abpos_donor_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `abpositivedonordetail`
--

INSERT INTO `abpositivedonordetail` (`id`, `abpos_donor_name`, `abpos_donor_email`, `abpos_donor_mobno`, `abpos_donor_address`) VALUES
(15, 'anand', 'anand456@gmail.com', 87576775, 'K.M.N.S, hno.114, Puri-2, 752002');

-- --------------------------------------------------------

--
-- Table structure for table `anegetivedonordetail`
--

CREATE TABLE `anegetivedonordetail` (
  `id` int(11) NOT NULL,
  `aneg_donor_name` varchar(255) NOT NULL,
  `aneg_donor_email` varchar(255) NOT NULL,
  `aneg_donor_mobno` int(20) NOT NULL,
  `aneg_donor_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anegetivedonordetail`
--

INSERT INTO `anegetivedonordetail` (`id`, `aneg_donor_name`, `aneg_donor_email`, `aneg_donor_mobno`, `aneg_donor_address`) VALUES
(30, 'Om prakash mohanty', 'omprakashgudz1999@gmail.com', 1234567890, 'K.M.N.S, hno.114, Puri-2, 752002'),
(31, 'anarkali', 'anar123@gmail.com', 23456756, 'jharkhand ');

-- --------------------------------------------------------

--
-- Table structure for table `apositivedonordetail`
--

CREATE TABLE `apositivedonordetail` (
  `id` int(11) NOT NULL,
  `apos_donor_name` varchar(255) NOT NULL,
  `apos_donor_email` varchar(255) NOT NULL,
  `apos_donor_mobno` int(20) NOT NULL,
  `apos_donor_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `apositivedonordetail`
--

INSERT INTO `apositivedonordetail` (`id`, `apos_donor_name`, `apos_donor_email`, `apos_donor_mobno`, `apos_donor_address`) VALUES
(29, 'hola', 'hol123@gmail.com', 1234567890, 'K.M.N.S, hno.114, Puri-2, 752002');

-- --------------------------------------------------------

--
-- Table structure for table `bnegetivedonordetail`
--

CREATE TABLE `bnegetivedonordetail` (
  `id` int(11) NOT NULL,
  `bneg_donor_name` varchar(255) NOT NULL,
  `bneg_donor_email` varchar(255) NOT NULL,
  `bneg_donor_mobno` int(20) NOT NULL,
  `bneg_donor_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bpositivedonordetail`
--

CREATE TABLE `bpositivedonordetail` (
  `id` int(11) NOT NULL,
  `bpos_donor_name` varchar(255) NOT NULL,
  `bpos_donor_email` varchar(255) NOT NULL,
  `bpos_donor_mobno` int(20) NOT NULL,
  `bpos_donor_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bpositivedonordetail`
--

INSERT INTO `bpositivedonordetail` (`id`, `bpos_donor_name`, `bpos_donor_email`, `bpos_donor_mobno`, `bpos_donor_address`) VALUES
(17, 'aniket', 'aniket123@gmail.com', 1234567890, 'K.M.N.S, hno.114, Puri-2, 752002');

-- --------------------------------------------------------

--
-- Table structure for table `donordetails`
--

CREATE TABLE `donordetails` (
  `id` int(11) NOT NULL,
  `donor_name` varchar(255) NOT NULL,
  `donor_email` varchar(255) NOT NULL,
  `donor_mobno` int(10) NOT NULL,
  `donor_blgrp` varchar(255) NOT NULL,
  `donor_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donordetails`
--

INSERT INTO `donordetails` (`id`, `donor_name`, `donor_email`, `donor_mobno`, `donor_blgrp`, `donor_address`) VALUES
(58, 'hola', 'hol123@gmail.com', 1234567890, 'A+ve', 'K.M.N.S, hno.114, Puri-2, 752002'),
(59, 'Om prakash mohanty', 'omprakashgudz1999@gmail.com', 1234567890, 'A-ve', 'K.M.N.S, hno.114, Puri-2, 752002'),
(60, 'aniket', 'aniket123@gmail.com', 1234567890, 'B+ve', 'K.M.N.S, hno.114, Puri-2, 752002'),
(61, 'mum', 'mum456@gmail.com', 972525678, 'B-ve', 'K.M.N.S, hno.114, Puri-2, 752002'),
(62, 'anand', 'anand456@gmail.com', 87576775, 'AB+ve', 'K.M.N.S, hno.114, Puri-2, 752002'),
(63, 'payal', 'payal123@gmail.com', 12345678, 'AB-ve', 'bhubaneswar'),
(64, 'Gyan Prakash', 'gyanprakash123@gmail.com', 12356899, 'O+ve', 'bhubaneswar'),
(65, 'asdk', 'asdk123@gmail.com', 12345678, 'O-ve', 'bhubaneswar'),
(66, 'anarkali', 'anar123@gmail.com', 23456756, 'A-ve', 'jharkhand ');

-- --------------------------------------------------------

--
-- Table structure for table `onegetivedonordetail`
--

CREATE TABLE `onegetivedonordetail` (
  `id` int(11) NOT NULL,
  `oneg_donor_name` varchar(255) NOT NULL,
  `oneg_donor_email` varchar(255) NOT NULL,
  `oneg_donor_mobno` int(20) NOT NULL,
  `oneg_donor_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `opositivedonordetail`
--

CREATE TABLE `opositivedonordetail` (
  `id` int(11) NOT NULL,
  `opos_donor_name` varchar(255) NOT NULL,
  `opos_donor_email` varchar(255) NOT NULL,
  `opos_donor_mobno` int(20) NOT NULL,
  `opos_donor_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `opositivedonordetail`
--

INSERT INTO `opositivedonordetail` (`id`, `opos_donor_name`, `opos_donor_email`, `opos_donor_mobno`, `opos_donor_address`) VALUES
(16, 'Gyan Prakash', 'gyanprakash123@gmail.com', 12356899, 'bhubaneswar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abnegetivedonordetail`
--
ALTER TABLE `abnegetivedonordetail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `abpositivedonordetail`
--
ALTER TABLE `abpositivedonordetail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `anegetivedonordetail`
--
ALTER TABLE `anegetivedonordetail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apositivedonordetail`
--
ALTER TABLE `apositivedonordetail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bnegetivedonordetail`
--
ALTER TABLE `bnegetivedonordetail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bpositivedonordetail`
--
ALTER TABLE `bpositivedonordetail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donordetails`
--
ALTER TABLE `donordetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `onegetivedonordetail`
--
ALTER TABLE `onegetivedonordetail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `opositivedonordetail`
--
ALTER TABLE `opositivedonordetail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abnegetivedonordetail`
--
ALTER TABLE `abnegetivedonordetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `abpositivedonordetail`
--
ALTER TABLE `abpositivedonordetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `anegetivedonordetail`
--
ALTER TABLE `anegetivedonordetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `apositivedonordetail`
--
ALTER TABLE `apositivedonordetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `bnegetivedonordetail`
--
ALTER TABLE `bnegetivedonordetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bpositivedonordetail`
--
ALTER TABLE `bpositivedonordetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `donordetails`
--
ALTER TABLE `donordetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `onegetivedonordetail`
--
ALTER TABLE `onegetivedonordetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `opositivedonordetail`
--
ALTER TABLE `opositivedonordetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
