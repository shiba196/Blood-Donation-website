-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2021 at 08:43 AM
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
-- Database: `recipient_creditials`
--

-- --------------------------------------------------------

--
-- Table structure for table `abnegetiverecipientdetail`
--

CREATE TABLE `abnegetiverecipientdetail` (
  `id` int(11) NOT NULL,
  `abneg_recipient_name` varchar(255) NOT NULL,
  `abneg_recipient_email` varchar(255) NOT NULL,
  `abneg_recipient_mobno` int(20) NOT NULL,
  `abneg_recipient_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `abnegetiverecipientdetail`
--

INSERT INTO `abnegetiverecipientdetail` (`id`, `abneg_recipient_name`, `abneg_recipient_email`, `abneg_recipient_mobno`, `abneg_recipient_address`) VALUES
(1, 'raj', 'raj123@gmail.com', 23453456, 'K.M.N.S, h no.-114, Puri-752002');

-- --------------------------------------------------------

--
-- Table structure for table `abpositiverecipientdetail`
--

CREATE TABLE `abpositiverecipientdetail` (
  `id` int(11) NOT NULL,
  `abpos_recipient_name` varchar(255) NOT NULL,
  `abpos_recipient_email` varchar(255) NOT NULL,
  `abpos_recipient_mobno` int(20) NOT NULL,
  `abpos_recipient_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `abpositiverecipientdetail`
--

INSERT INTO `abpositiverecipientdetail` (`id`, `abpos_recipient_name`, `abpos_recipient_email`, `abpos_recipient_mobno`, `abpos_recipient_address`) VALUES
(1, 'kushum', 'kus123@gmail.com', 12345345, 'K.M.N.S, h no.-114, Puri-752002');

-- --------------------------------------------------------

--
-- Table structure for table `anegetiverecipientdetail`
--

CREATE TABLE `anegetiverecipientdetail` (
  `id` int(11) NOT NULL,
  `aneg_recipient_name` varchar(255) NOT NULL,
  `aneg_recipient_email` varchar(255) NOT NULL,
  `aneg_recipient_mobno` int(20) NOT NULL,
  `aneg_recipient_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anegetiverecipientdetail`
--

INSERT INTO `anegetiverecipientdetail` (`id`, `aneg_recipient_name`, `aneg_recipient_email`, `aneg_recipient_mobno`, `aneg_recipient_address`) VALUES
(1, 'payal', 'payal123@gmail.com', 34563456, 'K.M.N.S, h no.-114, Puri-752002'),
(2, 'anarkali', 'anar123@gmail.com', 23456456, 'K.M.N.S, h no.-114, Puri-752002');

-- --------------------------------------------------------

--
-- Table structure for table `apositiverecipientdetail`
--

CREATE TABLE `apositiverecipientdetail` (
  `id` int(11) NOT NULL,
  `apos_recipient_name` varchar(255) NOT NULL,
  `apos_recipient_email` varchar(255) NOT NULL,
  `apos_recipient_mobno` int(20) NOT NULL,
  `apos_recipient_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `apositiverecipientdetail`
--

INSERT INTO `apositiverecipientdetail` (`id`, `apos_recipient_name`, `apos_recipient_email`, `apos_recipient_mobno`, `apos_recipient_address`) VALUES
(1, 'Shibam Acharya', 'shibamarcharya123@gmail.com', 2147483647, 'roulkela');

-- --------------------------------------------------------

--
-- Table structure for table `bnegetiverecipientdetail`
--

CREATE TABLE `bnegetiverecipientdetail` (
  `id` int(11) NOT NULL,
  `bneg_recipient_name` varchar(255) NOT NULL,
  `bneg_recipient_email` varchar(255) NOT NULL,
  `bneg_recipient_mobno` int(20) NOT NULL,
  `bneg_recipient_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bpositiverecipientdetail`
--

CREATE TABLE `bpositiverecipientdetail` (
  `id` int(11) NOT NULL,
  `bpos_recipient_name` varchar(255) NOT NULL,
  `bpos_recipient_email` varchar(255) NOT NULL,
  `bpos_recipient_mobno` int(20) NOT NULL,
  `bpos_recipient_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bpositiverecipientdetail`
--

INSERT INTO `bpositiverecipientdetail` (`id`, `bpos_recipient_name`, `bpos_recipient_email`, `bpos_recipient_mobno`, `bpos_recipient_address`) VALUES
(1, 'ronni', 'ron123@gmail.com', 23456456, 'K.M.N.S, h no.-114, Puri-752002');

-- --------------------------------------------------------

--
-- Table structure for table `onegetiverecipientdetail`
--

CREATE TABLE `onegetiverecipientdetail` (
  `id` int(11) NOT NULL,
  `oneg_recipient_name` varchar(255) NOT NULL,
  `oneg_recipient_email` varchar(255) NOT NULL,
  `oneg_recipient_mobno` int(20) NOT NULL,
  `oneg_recipient_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `opositiverecipientdetail`
--

CREATE TABLE `opositiverecipientdetail` (
  `id` int(11) NOT NULL,
  `opos_recipient_name` varchar(255) NOT NULL,
  `opos_recipient_email` varchar(255) NOT NULL,
  `opos_recipient_mobno` int(20) NOT NULL,
  `opos_recipient_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `opositiverecipientdetail`
--

INSERT INTO `opositiverecipientdetail` (`id`, `opos_recipient_name`, `opos_recipient_email`, `opos_recipient_mobno`, `opos_recipient_address`) VALUES
(1, 'suresh', 'sur123@gmail.com', 34563456, 'K.M.N.S, h no.-114, Puri-752002');

-- --------------------------------------------------------

--
-- Table structure for table `recipientdetails`
--

CREATE TABLE `recipientdetails` (
  `id` int(11) NOT NULL,
  `recipient_name` varchar(225) NOT NULL,
  `recipient_email` varchar(225) NOT NULL,
  `recipient_mobno` int(10) NOT NULL,
  `recipient_blgrp` varchar(255) NOT NULL,
  `recipient_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recipientdetails`
--

INSERT INTO `recipientdetails` (`id`, `recipient_name`, `recipient_email`, `recipient_mobno`, `recipient_blgrp`, `recipient_address`) VALUES
(5, 'Om Prakash Mohanty', 'omprakashgudz1999@gmail.com', 2147483647, 'B-ve', 'K.M.N.S, h no.-114, Puri-752002'),
(6, 'Shibam Acharya', 'shibamarcharya123@gmail.com', 2147483647, 'A+ve', 'roulkela'),
(7, 'payal', 'payal123@gmail.com', 34563456, 'A-ve', 'K.M.N.S, h no.-114, Puri-752002'),
(8, 'ronni', 'ron123@gmail.com', 23456456, 'B+ve', 'K.M.N.S, h no.-114, Puri-752002'),
(9, 'kamal', 'kam123@gmail.com', 12345345, 'B-ve', 'K.M.N.S, h no.-114, Puri-752002'),
(10, 'kushum', 'kus123@gmail.com', 12345345, 'AB+ve', 'K.M.N.S, h no.-114, Puri-752002'),
(11, 'raj', 'raj123@gmail.com', 23453456, 'AB-ve', 'K.M.N.S, h no.-114, Puri-752002'),
(12, 'suresh', 'sur123@gmail.com', 34563456, 'O+ve', 'K.M.N.S, h no.-114, Puri-752002'),
(13, 'gyan', 'gyan123@gmail.com', 34545676, 'O-ve', 'K.M.N.S, h no.-114, Puri-752002'),
(14, 'anarkali', 'anar123@gmail.com', 23456456, 'A-ve', 'K.M.N.S, h no.-114, Puri-752002');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abnegetiverecipientdetail`
--
ALTER TABLE `abnegetiverecipientdetail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `abpositiverecipientdetail`
--
ALTER TABLE `abpositiverecipientdetail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `anegetiverecipientdetail`
--
ALTER TABLE `anegetiverecipientdetail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apositiverecipientdetail`
--
ALTER TABLE `apositiverecipientdetail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bnegetiverecipientdetail`
--
ALTER TABLE `bnegetiverecipientdetail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bpositiverecipientdetail`
--
ALTER TABLE `bpositiverecipientdetail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `onegetiverecipientdetail`
--
ALTER TABLE `onegetiverecipientdetail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `opositiverecipientdetail`
--
ALTER TABLE `opositiverecipientdetail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recipientdetails`
--
ALTER TABLE `recipientdetails`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abnegetiverecipientdetail`
--
ALTER TABLE `abnegetiverecipientdetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `abpositiverecipientdetail`
--
ALTER TABLE `abpositiverecipientdetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `anegetiverecipientdetail`
--
ALTER TABLE `anegetiverecipientdetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `apositiverecipientdetail`
--
ALTER TABLE `apositiverecipientdetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bnegetiverecipientdetail`
--
ALTER TABLE `bnegetiverecipientdetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bpositiverecipientdetail`
--
ALTER TABLE `bpositiverecipientdetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `onegetiverecipientdetail`
--
ALTER TABLE `onegetiverecipientdetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `opositiverecipientdetail`
--
ALTER TABLE `opositiverecipientdetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `recipientdetails`
--
ALTER TABLE `recipientdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
