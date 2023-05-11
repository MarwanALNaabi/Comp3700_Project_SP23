-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 09, 2023 at 07:27 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `SportFieldBooking`
--

-- --------------------------------------------------------

--
-- Table structure for table `addDB`
--

CREATE TABLE `addDB` (
  `name` varchar(100) NOT NULL,
  `type` varchar(10) NOT NULL,
  `regNum` int(16) NOT NULL,
  `phone` int(8) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sportType` varchar(20) NOT NULL,
  `province` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `openTime` varchar(50) NOT NULL,
  `closeTime` varchar(50) NOT NULL,
  `facilities` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bookDB`
--

CREATE TABLE `bookDB` (
  `club` varchar(20) NOT NULL,
  `type` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(20) NOT NULL,
  `duration` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(8) NOT NULL,
  `comment` varchar(700) DEFAULT NULL
  `reservationNumber` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `QuestionnaireDB`
--

CREATE TABLE `QuestionnaireDB` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `rating` varchar(20) NOT NULL,
  `mostLiked` varchar(20) NOT NULL,
  `experience` varchar(700) DEFAULT NULL,
  `feedback` varchar(700) DEFAULT NULL,
  `suggestions` varchar(700) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addDB`
--
ALTER TABLE `addDB`
  ADD PRIMARY KEY (`phone`);

--
-- Indexes for table `bookDB`
--
ALTER TABLE `bookDB`
  ADD PRIMARY KEY (`phone`);

--
-- Indexes for table `QuestionnaireDB`
--
ALTER TABLE `QuestionnaireDB`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
