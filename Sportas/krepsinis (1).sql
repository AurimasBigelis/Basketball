-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2021 at 12:02 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `krepsinis`
--

-- --------------------------------------------------------

--
-- Table structure for table `nba`
--

CREATE TABLE `nba` (
  `LastName_FirstName` varchar(255) COLLATE latin7_nopad_bin DEFAULT NULL,
  `images` varchar(255) COLLATE latin7_nopad_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin7 COLLATE=latin7_nopad_bin;

--
-- Dumping data for table `nba`
--

INSERT INTO `nba` (`LastName_FirstName`, `images`) VALUES
('Precious_Achiuwa', 'images/2.png'),
('Adebayo_Bam', 'images/3.png'),
('Allen_Grayson', 'images/4.png');

-- --------------------------------------------------------

--
-- Table structure for table `niapoli`
--

CREATE TABLE `niapoli` (
  `LastName` varchar(255) COLLATE latin7_nopad_bin NOT NULL,
  `FirstName` varchar(255) COLLATE latin7_nopad_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin7 COLLATE=latin7_nopad_bin;

--
-- Dumping data for table `niapoli`
--

INSERT INTO `niapoli` (`LastName`, `FirstName`) VALUES
('Valanciūnas', 'Jonas'),
('Motejūnas', 'Donatas'),
('Sabonis', 'Domantas');

-- --------------------------------------------------------

--
-- Table structure for table `niapolis`
--

CREATE TABLE `niapolis` (
  `LastName` varchar(255) COLLATE latin7_nopad_bin DEFAULT NULL,
  `FirstName` varchar(255) COLLATE latin7_nopad_bin DEFAULT NULL,
  `images` varchar(255) COLLATE latin7_nopad_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin7 COLLATE=latin7_nopad_bin;

--
-- Dumping data for table `niapolis`
--

INSERT INTO `niapolis` (`LastName`, `FirstName`, `images`) VALUES
('Valančiūnas', 'Jonas', 'images/jonas.jpg'),
('Sabonis', 'Domantas', 'images/sabonis.jpg'),
('Motiejūnas', 'Domantas', 'images/donatas.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `persons`
--

CREATE TABLE `persons` (
  `FirstName_LastName` varchar(255) COLLATE latin7_nopad_bin DEFAULT NULL,
  `images` varchar(255) COLLATE latin7_nopad_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin7 COLLATE=latin7_nopad_bin;

--
-- Dumping data for table `persons`
--

INSERT INTO `persons` (`FirstName_LastName`, `images`) VALUES
('Carmelo_Anthony', 'images/6.png'),
('OG_Anunoby', 'images/7.png'),
('Deandre_Ayton', 'images/5.png');

-- --------------------------------------------------------

--
-- Table structure for table `rytas`
--

CREATE TABLE `rytas` (
  `FirstName` varchar(255) COLLATE latin7_nopad_bin DEFAULT NULL,
  `LastName` varchar(255) COLLATE latin7_nopad_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin7 COLLATE=latin7_nopad_bin;

--
-- Dumping data for table `rytas`
--

INSERT INTO `rytas` (`FirstName`, `LastName`) VALUES
('Chris ', 'McCullough'),
('Ryan  ', 'Boatright'),
('Amida', 'Brimah');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
