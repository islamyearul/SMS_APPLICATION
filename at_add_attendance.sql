-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2021 at 04:23 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school_management_system_2021`
--

-- --------------------------------------------------------

--
-- Table structure for table `at_add_attendance`
--

CREATE TABLE `at_add_attendance` (
  `ID` int(11) NOT NULL,
  `Class` varchar(50) NOT NULL,
  `Student_Name` varchar(50) NOT NULL,
  `Attendance` varchar(10) NOT NULL,
  `Teachers_Comnt` varchar(50) NOT NULL,
  `Student_Id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `at_add_attendance`
--

INSERT INTO `at_add_attendance` (`ID`, `Class`, `Student_Name`, `Attendance`, `Teachers_Comnt`, `Student_Id`) VALUES
(2, 'Class 1', 'Hasan', 'Present', 'Good', 147852),
(3, 'Class 5', 'Shanto', 'Present', 'NA', 1459632),
(5, 'Class 5', 'Adnan Habib Rommel', 'Present', 'NA', 695847);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `at_add_attendance`
--
ALTER TABLE `at_add_attendance`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `at_add_attendance`
--
ALTER TABLE `at_add_attendance`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
