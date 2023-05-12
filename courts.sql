-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2023 at 09:42 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sportfieldbooking`
--

-- --------------------------------------------------------

--
-- Table structure for table `courts`
--

CREATE TABLE `courts` (
  `commercialnumber` int(15) NOT NULL,
  `name` varchar(20) NOT NULL,
  `typeOfField` varchar(20) NOT NULL,
  `number` int(8) NOT NULL,
  `email` varchar(30) NOT NULL,
  `sportType` varchar(12) NOT NULL,
  `province` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `openningTime` char(8) NOT NULL,
  `closingTime` char(8) NOT NULL,
  `facilities` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courts`
--

INSERT INTO `courts` (`commercialnumber`, `name`, `typeOfField`, `number`, `email`, `sportType`, `province`, `state`, `openningTime`, `closingTime`, `facilities`) VALUES
(12345678, 'Spinns', 'In-Door and Out-Door', 94523265, 'spinns@gmail.com', 'Padel', 'Muscat', 'Al-Qurum', '16:00', '01:00', 'Free-Wifi  Toilets  Parkings  Shower area  Refreshments'),
(7343833, 'Tekkers', 'In-Door', 71013176, 'Tekkers@gmail.com', 'Padel', 'Muscat', 'Al-Seeb', '12:00', '00:00', 'Free-Wifi  Toilets  Parkings  '),
(335767464, 'F-Club', 'Out-Door', 72310088, 'F-Club@courts.com', 'Football', 'Ad Dhahirah', 'Ibri', '17:00', '00:00', 'Toilets  '),
(53757335, 'Shoots', 'Out-Door', 93650420, 'playwithus@gmail.com', 'Football', 'Al Batinah South', 'Sohar', '15:00', '02:00', 'No facilities'),
(46443456, 'Salalah Club', 'Out-Door', 94968229, 'SalalahClub@clubs.com', 'Padel', 'Dhofar', 'Salalah', '16:30', '23:00', 'Cafeteria  Refreshments'),
(22222222, 'Nizwa Complex', 'In-Door and Out-Door', 80038223, 'sqscnizwa@mocsay.om', 'Football', 'Ad Dakhiliyah', 'Nizwa', '08:00', '20:00', 'Free-Wifi  Toilets  Waiting-area  Parkings  Cafeteria  Shower area  Refreshments'),
(333333333, 'Sohar Complex', 'In-Door', 27463354, 'sqscsohar@mocsay.om', 'Football', 'Al Batinah South', 'Sohar', '08:00', '20:00', 'Toilets  Parkings  Cafeteria  Shower area  Refreshments');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
