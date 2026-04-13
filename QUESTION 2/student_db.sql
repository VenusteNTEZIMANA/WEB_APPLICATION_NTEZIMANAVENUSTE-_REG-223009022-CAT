-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2026 at 02:05 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `qualifications`
--

CREATE TABLE `qualifications` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `sl_no` int(11) NOT NULL,
  `examination` varchar(50) NOT NULL,
  `board` varchar(10) DEFAULT NULL,
  `percentage` decimal(5,2) DEFAULT NULL,
  `year_of_passing` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `qualifications`
--

INSERT INTO `qualifications` (`id`, `student_id`, `sl_no`, `examination`, `board`, `percentage`, `year_of_passing`) VALUES
(1, 1, 1, 'Class X', 'CBE', 70.00, '2027'),
(2, 1, 2, 'Class XII', 'CBE', 70.00, '2029'),
(3, 1, 3, 'Graduation', 'UR', 70.00, '2027'),
(4, 1, 4, 'Masters', 'UR', 70.00, '2027'),
(5, 4, 1, 'Class X', '2027', 70.00, '2027'),
(6, 4, 2, 'Class XII', '2029', 70.00, '2029'),
(7, 4, 3, 'Graduation', '2027', 70.00, '2027'),
(8, 4, 4, 'Masters', '2027', 70.00, '2027'),
(9, 5, 1, 'Class X', '2027', 70.00, '2027'),
(10, 5, 2, 'Class XII', '2029', 70.00, '2029'),
(11, 5, 3, 'Graduation', '2027', 70.00, '2027'),
(12, 5, 4, 'Masters', '2027', 70.00, '2027'),
(13, 6, 1, 'Class X', '2027', 70.00, '2027'),
(14, 6, 2, 'Class XII', '2029', 70.00, '2029'),
(15, 6, 3, 'Graduation', '2027', 70.00, '2027'),
(16, 6, 4, 'Masters', '2027', 70.00, '2027');

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE `registrations` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` text DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `pincode` varchar(10) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT 'India',
  `hobbies` varchar(255) DEFAULT NULL,
  `courses` varchar(50) NOT NULL,
  `registration_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`id`, `first_name`, `last_name`, `dob`, `email`, `mobile`, `gender`, `address`, `city`, `pincode`, `state`, `country`, `hobbies`, `courses`, `registration_date`) VALUES
(1, 'KANYAMUHANDA', 'EMMANUEL', '2010-03-08', 'emmanuelkanyamuhanda1@gmail.com', '0793066628', 'Male', 'gicumbi', 'RURINDO', '000000', 'RURINDO', 'Canada', 'Drawing', 'BCA', '2026-04-09 15:42:09'),
(4, 'NTEZIMANA', 'VENUSTE', '2003-05-16', 'niyonsabajoseline73@gmail.com', '0793066628', 'Male', 'gicumbi', 'BYUMBA', '000000', 'RWANDA', 'Canada', 'Drawing', 'B.Sc', '2026-04-09 16:18:12'),
(5, 'MUGISHA', 'JEAN', '2003-05-16', 'ntezimanavenuste38@gmail.com', '0793066628', 'Male', 'gicumbi', 'BYUMBA', '000000', 'RWANDA', 'Canada', 'Drawing', 'B.Sc', '2026-04-09 16:22:07'),
(6, 'UMWIZA ', 'KEVINE', '2007-05-10', 'umwizakevine38@gmail.com', '0793066628', 'Female', 'rubavu', 'BYUMBA', '000000', 'RWANDA', 'Canada', 'Drawing, Singing, Dancing, Sketching', 'B.Sc', '2026-04-09 16:24:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `qualifications`
--
ALTER TABLE `qualifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_student_id` (`student_id`),
  ADD KEY `idx_year` (`year_of_passing`);

--
-- Indexes for table `registrations`
--
ALTER TABLE `registrations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `idx_email` (`email`),
  ADD KEY `idx_course` (`courses`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `qualifications`
--
ALTER TABLE `qualifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `registrations`
--
ALTER TABLE `registrations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `qualifications`
--
ALTER TABLE `qualifications`
  ADD CONSTRAINT `qualifications_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `registrations` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
