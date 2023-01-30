-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2023 at 04:54 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vibrato`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `U_ID` int(11) NOT NULL,
  `NAME` varchar(50) NOT NULL,
  `USER_NAME` varchar(30) NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `U_PASSWORD` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`U_ID`, `NAME`, `USER_NAME`, `EMAIL`, `U_PASSWORD`) VALUES
(1, 'SPARSH', 'sa', 'swabhale@gmail.com', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `artists`
--

CREATE TABLE `artists` (
  `A_ID` int(11) NOT NULL,
  `Artist_Name` varchar(30) NOT NULL,
  `Artist_Image` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artists`
--

INSERT INTO `artists` (`A_ID`, `Artist_Name`, `Artist_Image`) VALUES
(1, 'Taylor Swift', 'taylor swift.jpeg'),
(2, 'Imagine Dragons', 'imagine-dragons-online.jpeg'),
(3, 'Coldplay', 'Funktasy_Why_Coldplay_is_Biggest_Pop-Band_of_This_Era.jpeg'),
(4, 'Arijit Singh', 'ariijit (1).jpeg'),
(5, 'Monali Thakur', 'monali_thakur_.jpeg'),
(6, 'Ritviz', 'ritviz.jpeg'),
(7, 'BTS', 'BTS.jpeg'),
(8, 'GOT7', 'GOT7.jpeg'),
(9, 'TWICE', 'Twice.jpeg'),
(10, 'Guru Randhawa', 'guru randhawa.jpeg'),
(11, 'Asees Kaur', 'asees kaur.jpeg'),
(12, 'Harnoor', 'harnoor.jpeg'),
(13, 'Anupam Roy', 'anupam roy.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `G_ID` int(30) NOT NULL,
  `S_GENRE` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`G_ID`, `S_GENRE`) VALUES
(101, 'Pop'),
(102, 'Lofi'),
(103, 'Rock'),
(104, 'Soul'),
(105, 'EDM'),
(106, 'K-pop');

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `L_ID` int(20) NOT NULL,
  `S_LANGUAGE` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`L_ID`, `S_LANGUAGE`) VALUES
(10, 'HINDI'),
(20, 'ENGLISH'),
(30, 'BENGALI'),
(40, 'PUNJABI'),
(50, 'KOREAN');

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE `songs` (
  `S_ID` int(11) NOT NULL,
  `Song_Name` varchar(100) NOT NULL,
  `A_ID` int(50) NOT NULL,
  `Artist_Name` varchar(50) NOT NULL,
  `L_ID` int(10) NOT NULL,
  `Language` varchar(50) NOT NULL,
  `G_ID` int(30) NOT NULL,
  `Genre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`S_ID`, `Song_Name`, `A_ID`, `Artist_Name`, `L_ID`, `Language`, `G_ID`, `Genre`) VALUES
(1, 'Blank Space', 1, 'Taylor Swift', 20, 'English', 101, 'Pop'),
(2, 'Breathe', 1, 'Taylor Swift', 20, 'English', 102, 'Lofi'),
(3, 'Love Story', 1, 'Taylor Swift', 20, 'English', 102, 'Lofi'),
(4, 'Radioactive', 2, 'Imagine Dragons', 20, 'English', 103, 'Rock'),
(5, 'Believer', 2, 'Imagine Dragons', 103, 'English', 103, 'Rock'),
(6, 'Thunder', 2, 'Imagine Dragons', 20, 'English', 101, 'Pop'),
(7, 'Paradise', 3, 'Coldplay', 20, 'English', 101, 'Pop'),
(8, 'Hymn for the weekend', 3, 'Coldplay', 20, 'English', 101, 'Pop'),
(9, 'Magic', 3, 'Coldplay', 20, 'English', 101, 'Pop'),
(10, 'Enna sona', 4, 'Arijit Singh', 10, 'Hindi', 102, 'Lofi'),
(11, 'Aayat', 4, 'Arijit Singh', 10, 'Hindi', 104, 'Soul'),
(12, 'Hardum Humdum', 4, 'Arijit Singh', 10, 'Hindi', 102, 'Lofi'),
(13, 'Moh Moh ke dhaage', 5, 'Monali Thakur', 10, 'Hindi', 102, 'Lofi'),
(14, 'Cham Cham', 5, 'Monali Thakur', 10, 'Hindi', 102, 'Lofi'),
(15, 'Badri ki dulhaniya', 5, 'Monali Thakur', 10, 'Hindi', 101, 'Pop');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`U_ID`);

--
-- Indexes for table `artists`
--
ALTER TABLE `artists`
  ADD PRIMARY KEY (`A_ID`);

--
-- Indexes for table `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`S_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `U_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `artists`
--
ALTER TABLE `artists`
  MODIFY `A_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `songs`
--
ALTER TABLE `songs`
  MODIFY `S_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
