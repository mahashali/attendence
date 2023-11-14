-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2023 at 02:10 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `suphpeg`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance_records`
--

CREATE TABLE `attendance_records` (
  `id` int(11) NOT NULL,
  `student_name` varchar(100) NOT NULL,
  `roll_number` varchar(100) NOT NULL,
  `attendance_status` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attendance_records`
--

INSERT INTO `attendance_records` (`id`, `student_name`, `roll_number`, `attendance_status`, `date`) VALUES
(12, 'mohamoud ali', '23', 'perecent', '2023-11-12'),
(13, 'Grade8A', '23', 'absent', '2023-11-12'),
(14, 'Grade 8A', '12', 'absent', '2023-11-12'),
(15, 'Grade 8A', '11', 'absent', '2023-11-12'),
(16, 'Grade 8A', '123', 'absent', '2023-11-12'),
(17, 'Grade 8B', '12', 'perecent', '2023-11-12'),
(18, 'Grade 8B', '11', 'perecent', '2023-11-12'),
(19, 'Grade 8B', '123', 'perecent', '2023-11-12'),
(20, 'Grade8A', '23', 'absent', '2023-11-14'),
(21, 'Grade 8A', '12', 'absent', '2023-11-14'),
(22, 'Grade 8A', '11', 'absent', '2023-11-14'),
(23, 'Grade8A', '23', 'perecent', '2023-11-14'),
(24, 'Grade 8C', '777', 'absent', '2023-11-14'),
(25, 'Grade8A', '23', 'absent', '2023-11-14'),
(26, 'Grade 8B', '123', 'perecent', '2023-11-14'),
(27, 'Grade8A', '23', 'absent', '2023-11-14'),
(28, 'Grade 8A', '11', 'perecent', '2023-11-14'),
(29, 'Grade 8A', '123', 'absent', '2023-11-14'),
(30, 'Grade8A', '23', 'perecent', '2023-11-14'),
(31, 'Grade 8A', '12', 'perecent', '2023-11-14'),
(32, 'Grade 8A', '11', 'perecent', '2023-11-14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance_records`
--
ALTER TABLE `attendance_records`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance_records`
--
ALTER TABLE `attendance_records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
