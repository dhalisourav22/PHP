-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2022 at 02:01 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiztestfirst`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `Right_Answer_Id` int(10) UNSIGNED NOT NULL,
  `Answer` varchar(250) NOT NULL,
  `Question_Id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`Right_Answer_Id`, `Answer`, `Question_Id`) VALUES
(1, '¬ P1  ∨ P2', 1),
(2, 'P1 ∨ P2', 1),
(3, 'P1  ∧ P2', 1),
(4, 'P1  ∧ ¬P2', 1),
(5, 'Is the entire database.', 2),
(6, 'Describe data in terms of relational tables .', 2),
(7, 'Describes how data is actually stored on disk.', 2),
(8, 'Both (A) and (C).', 2),
(9, 'Data file.', 3),
(10, 'Data record.', 3),
(11, 'Menu.', 3),
(12, 'Bank.', 3),
(13, 'User.', 4),
(14, 'Separate files.', 4),
(15, 'Database.', 4),
(16, 'Database administrator.', 4),
(17, 'Module.', 5),
(18, 'Relational model.', 5),
(19, 'Schema.', 5),
(20, 'Sub schema.', 5);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Id` int(100) NOT NULL,
  `Name` varchar(250) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `Phone` int(15) NOT NULL,
  `Message` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Id`, `Name`, `Email`, `Phone`, `Message`) VALUES
(1, 'a', 'de@g.c', 1242242, 'gfhjg'),
(2, 'Sourav', 'souravdhali50@gmail.com', 880, 'I want some free tutorial link of yours.'),
(3, 'Sourav Dhali', 'dhalisourav22@gmail.com', 1986614843, 'amazing.'),
(4, 'Shuvo', 'ds@va.co', 1, 'without log in'),
(5, 'Sourav Dhali', 'dhalisourav22@gmail.com', 880, 'after log in'),
(6, 'Rashed', 'rashed@gmail.com', 125894815, 'i love your website.'),
(7, 'Admin', 'admin@clever.com', 2147483647, 'this is sourav the admin'),
(8, 'admin', 'v@cc.v', 880, 'check by admin for the last time.'),
(9, 'Sourav Dhali', 'souravdhali50@gmail.com', 1986614843, 'This is simple user. last test'),
(10, 'Shovon', 'shovon@gmail.com', 122515216, 'I love this site.'),
(11, 'Juthi', 'souravdhali50@gmail.com', 125894815, 'i love this site'),
(12, 'kabita', 'dhalisourav22@gmail.com', 1242242, 'test for everything will be okay.'),
(13, 'Sourav Dhali', 'dhalisourav22@gmail.com', 880, 'admin of this page\r\n'),
(14, 'Sourav Dhali', 'souravdhali50@gmail.com', 1986614843, 'Normal user of this page\r\n'),
(15, 'Sourav', 'v@cc.v', 1242242, 'not a user of this page');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `Question_Id` int(10) UNSIGNED NOT NULL,
  `Question` varchar(250) NOT NULL,
  `Right_Answer_Id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`Question_Id`, `Question`, `Right_Answer_Id`) VALUES
(1, 'In tuple relational calculus P1 → P2 is equivalent to', 1),
(2, 'A logical schema', 5),
(3, 'Related fields in a database are grouped to form a', 10),
(4, 'The database environment has all of the following components except', 14),
(5, 'The way a particular application views the data from the database that the application uses is a', 20);

-- --------------------------------------------------------

--
-- Table structure for table `signin`
--

CREATE TABLE `signin` (
  `Id` int(10) UNSIGNED NOT NULL,
  `userName` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signin`
--

INSERT INTO `signin` (`Id`, `userName`, `password`) VALUES
(6, 'shuvo', 'shuvo'),
(8, 'ds22', '12345'),
(10, 'dfadf', '123'),
(11, 'deb', '12345'),
(12, 'chiro', 'chiro'),
(13, 'sumon', 'pinky'),
(19, 'admin', 'admin'),
(22, 'juthi', '12'),
(23, 'Kabita', '12'),
(24, 'dhalisourav22', '764235171'),
(25, 'dhalisourav22', '12');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id` int(100) UNSIGNED NOT NULL,
  `User_Name` varchar(250) NOT NULL,
  `Total_Question` int(10) UNSIGNED NOT NULL,
  `Answer_Correct` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `User_Name`, `Total_Question`, `Answer_Correct`) VALUES
(1, 'dhalisourav22', 5, 4),
(31, 'sumi', 5, 2),
(32, 'shuvo', 5, 1),
(33, 'dhalisourav22', 5, 2),
(34, 'Deb Kumar', 5, 3),
(35, 'dhalisourav22', 5, 2),
(36, 'dhalisourav22', 5, 2),
(37, 'sumi', 5, 0),
(38, 'Rashed', 5, 2),
(39, 'dhalisourav22', 5, 5),
(40, 'dhalisourav22', 5, 4),
(41, 'admin', 5, 1),
(42, 'admin', 5, 2),
(43, 'shuvo', 5, 2),
(44, 'admin', 5, 2),
(45, 'admin', 5, 0),
(46, 'shovon', 5, 2),
(47, 'juthi', 5, 2),
(48, 'Kabita', 5, 2),
(49, 'dhalisourav22', 5, 2),
(50, 'dhalisourav22', 5, 1),
(51, 'dhalisourav22', 5, 1),
(52, 'dhalisourav22', 5, 0),
(53, 'dhalisourav22', 5, 2),
(54, 'dhalisourav22', 5, 1),
(55, 'dhalisourav22', 5, 2),
(56, 'dhalisourav22', 5, 1),
(57, 'shuvo', 5, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`Right_Answer_Id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`Question_Id`),
  ADD KEY `FK1` (`Right_Answer_Id`);

--
-- Indexes for table `signin`
--
ALTER TABLE `signin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
  MODIFY `Right_Answer_Id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `Question_Id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1001;

--
-- AUTO_INCREMENT for table `signin`
--
ALTER TABLE `signin`
  MODIFY `Id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
