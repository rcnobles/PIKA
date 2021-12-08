-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2021 at 03:49 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `allergyweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `allergy`
--

CREATE TABLE `allergy` (
  `id` int(11) NOT NULL,
  `inAllergy` varchar(50) NOT NULL,
  `product` varchar(50) NOT NULL,
  `symptoms` enum('rash','swelling','o') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `allergy`
--

INSERT INTO `allergy` (`id`, `inAllergy`, `product`, `symptoms`) VALUES
(1, 'gluten', 'cereal', 'swelling'),
(2, 'nuts', 'granola bars', 'swelling'),
(3, 'gluten', 'cereal', 'o'),
(4, 'gluten', 'granola bars', 'swelling'),
(5, 'gluten', 'cereal', 'o'),
(6, 'dairy', 'yogurt', 'swelling'),
(7, 'pickles', 'relish', 'rash'),
(8, 'ranch', 'salad', 'rash');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `confirmPass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `userName`, `email`, `password`, `confirmPass`) VALUES
(1, 'test', 'test@gmail.com', '1234', '1234'),
(2, 'test2', 'test2@gmail.com', '4321', '4321'),
(3, 'cpaggitt0', 'abriars0@elpais.com', '7bzafO', '7bzafO'),
(4, 'vvanderhoog1', 'hmacdunleavy1@hubpages.com', '1ViXYGNe', '1ViXYGNe'),
(5, 'ahulkes2', 'agelland2@amazonaws.com', 'HOZEDCjeTJc', 'HOZEDCjeTJc'),
(6, 'acottage3', 'gwitcherley3@jiathis.com', '9xFv8ht', '9xFv8ht'),
(7, 'srobotham4', 'bperillo4@photobucket.com', '1ZlZHrKHWwTm', '1ZlZHrKHWwTm'),
(8, 'bcuel5', 'kdyet5@ucoz.ru', 'XALRapCs', 'XALRapCs'),
(10, 'mtotaro6', 'llevey6@sfgate.com', 'yAs3Zq6FbpUy', 'yAs3Zq6FbpUy'),
(11, 'demo', 'gggr@test.com', 'fe3F2df3', 'fe3F2df3');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'test', '1234'),
(2, 'test2', '4321'),
(3, 'cpaggitt0', '7bzafO'),
(4, 'vvanderhoog1', '1ViXYGNe'),
(5, 'ahulkes2', 'HOZEDCjeTJc'),
(6, 'acottage3', '9xFv8ht'),
(7, 'srobotham4', '1ZlZHrKHWwTm'),
(8, 'test3', '1234567');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allergy`
--
ALTER TABLE `allergy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allergy`
--
ALTER TABLE `allergy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
