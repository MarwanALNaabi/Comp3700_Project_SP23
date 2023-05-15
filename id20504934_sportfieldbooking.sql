-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 15, 2023 at 08:58 AM
-- Server version: 10.5.16-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id20504934_sportfieldbooking`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookDB`
--

CREATE TABLE `bookDB` (
  `club` varchar(50) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `date` varchar(50) DEFAULT NULL,
  `time` varchar(20) DEFAULT NULL,
  `duration` varchar(10) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` int(8) DEFAULT NULL,
  `comment` varchar(700) DEFAULT NULL,
  `ReservationNumber` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookDB`
--

INSERT INTO `bookDB` (`club`, `type`, `date`, `time`, `duration`, `name`, `email`, `phone`, `comment`, `ReservationNumber`) VALUES
('Ns padel club', 'football', '2023-05-24', '12:12', '1 Hour', 'Marwan', 'Marwan.yn71@gmail.com', 93650420, 'WE will come early', '744edccb8d7c2055f56f7e8d0f56'),
('Spinns', 'Padel', '2023-05-25', '20:00', '1.5 Hours', 'Yaqoob', 'yaqoob880@gmail.com', 94523265, '', '0cd6cd96b2c88ac7fad03d1c8061'),
('Shoots', 'football', '2023-05-17', '18:30', '2 Hours', 'Ahmed', 'fahad123@gmail.com', 98723465, '', '0eb2b64071cc0594df43c9343b88'),
('Ns padel club', 'Padel', '2023-05-20', '22:00', '1 Hour', 'Mohamed', 'mohamed90@gmail.com', 71234560, '', '9d7f93fed82dd8c19f6a026f1d60'),
('Tekkers', 'Padel', '2023-05-15', '16:00', '1.5 Hours', 'Nooh', 'nooh011@gmail.com', 91123456, '', 'bdac2cf5e2e62258cf05ec75c622'),
('Shoots', 'football', '2023-05-16', '22:00', '1 Hour', 'Majid', 'majidalmanthari@gmail.com', 72310088, 'Please I want not fully pumped ball.', 'f8f640ec22e2e55f0b770f823988'),
('Ns padel club', 'football', '2023-06-29', '10:10', '2 Hours', 'Ahmed', 'Ahemd@gmail.com', 99998212, 'The best website ever!', '4bc920887d295d0183e7b0077ac4');

-- --------------------------------------------------------

--
-- Table structure for table `courts`
--

CREATE TABLE `courts` (
  `commercialnumber` varchar(50) NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courts`
--

INSERT INTO `courts` (`commercialnumber`, `name`, `typeOfField`, `number`, `email`, `sportType`, `province`, `state`, `openningTime`, `closingTime`, `facilities`) VALUES
('12345678', 'Spinns', 'In-Door and Out-Door', 94523265, 'spinns@gmail.com', 'Padel', 'Muscat', 'Al-Qurum', '16:00', '01:00', 'Free-Wifi  Toilets  Parkings  Shower area  Refreshments'),
('7343833', 'Tekkers', 'In-Door', 71013176, 'Tekkers@gmail.com', 'Padel', 'Muscat', 'Al-Seeb', '12:00', '00:00', 'Free-Wifi  Toilets  Parkings  '),
('335767464', 'F-Club', 'Out-Door', 72310088, 'F-Club@courts.com', 'Football', 'Ad Dhahirah', 'Ibri', '17:00', '00:00', 'Toilets  '),
('53757335', 'Shoots', 'Out-Door', 93650420, 'playwithus@gmail.com', 'Football', 'Al Batinah South', 'Sohar', '15:00', '02:00', 'No facilities'),
('46443456', 'Salalah Club', 'Out-Door', 94968229, 'SalalahClub@clubs.com', 'Padel', 'Dhofar', 'Salalah', '16:30', '23:00', 'Cafeteria  Refreshments'),
('22222222', 'Nizwa Complex', 'In-Door and Out-Door', 80038223, 'sqscnizwa@mocsay.om', 'Football', 'Ad Dakhiliyah', 'Nizwa', '08:00', '20:00', 'Free-Wifi  Toilets  Waiting-area  Parkings  Cafeteria  Shower area  Refreshments'),
('333333333', 'Sohar Complex', 'In-Door', 27463354, 'sqscsohar@mocsay.om', 'Football', 'Al Batinah South', 'Sohar', '08:00', '20:00', 'Toilets  Parkings  Cafeteria  Shower area  Refreshments'),
('125532345234', 'Ns padel club', 'In-Door', 99993294, 'layout_fullest0q@icloud.com', 'Padel', 'Ad Dakhiliyah', 'Samil', '18:00', '00:00', 'Free-Wifi  Non-smoking area  Toilets  Cafeteria  Shower area  ');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `QuestionnaireDB`
--

INSERT INTO `QuestionnaireDB` (`name`, `email`, `rating`, `mostLiked`, `experience`, `feedback`, `suggestions`) VALUES
('John', 'JohnYasser@gmail.com', 'Excellent', 'Home Page', 'Fantastic', 'A good website. I am sure that you will get the full mark:)', 'Nothing to be said'),
('Khalid', 'Khalid11@gmail.com', 'Excellent', 'Fun Page', 'Creative', 'A creative and helpful website', 'Add more clubs\r\n'),
('marwan', 'Marwan.yn71@gmail.com', 'Very Good', 'Home Page', 'aase2', 'adfa af ', 'af asdf '),
('Mohamed', 'Mohamed@gmail.com', 'Very Good', 'Home Page', 'Wonderful', 'Nice website', 'No suggestions '),
('Noah', 'noah@gmail.com', 'Excellent', 'Home Page', 'fabulous', 'good job', 'great work'),
('ns padel', 'nspadel@gmail.com', 'Excellent', 'Home Page', 'Wow', 'Wonderful website', 'great job'),
('Marwan Yousuf', 's137663@student.squ.edu.om', 'Excellent', 'Book Page', 'Wow', 'Your website is amaizing!', 'No suggestion to be add'),
('Yaqoob', 's138590@student.squ.edu.om', 'Excellent', 'Book Page', 'Helpful', 'Helpful website ', 'Improve the website ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `QuestionnaireDB`
--
ALTER TABLE `QuestionnaireDB`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
