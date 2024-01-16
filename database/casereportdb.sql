-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2024 at 06:00 AM
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
-- Database: `casereportdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `casereport`
--

CREATE TABLE `casereport` (
  `reporter_id` varchar(12) NOT NULL,
  `case_id` varchar(12) DEFAULT NULL,
  `student_id` varchar(12) DEFAULT NULL,
  `date_reported` date DEFAULT NULL,
  `case_type` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `action_taken` text DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `evidence` varchar(255) DEFAULT NULL,
  `counselor_comments` text DEFAULT NULL,
  `parent_involvement` varchar(255) DEFAULT NULL,
  `follow_up_actions` text DEFAULT NULL,
  `date_closed` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `education_intake`
--

CREATE TABLE `education_intake` (
  `intake_id` int(11) NOT NULL,
  `victim_name` varchar(255) DEFAULT NULL,
  `victim_date_of_birth` date DEFAULT NULL,
  `victim_age` int(11) DEFAULT NULL,
  `victim_sex` enum('Male','Female') DEFAULT NULL,
  `victim_grade_section` varchar(50) DEFAULT NULL,
  `victim_adviser` varchar(255) DEFAULT NULL,
  `mother_name` varchar(255) DEFAULT NULL,
  `mother_age` int(11) DEFAULT NULL,
  `mother_occupation` varchar(255) DEFAULT NULL,
  `father_name` varchar(255) DEFAULT NULL,
  `father_age` int(11) DEFAULT NULL,
  `father_occupation` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `contact_number` varchar(20) DEFAULT NULL,
  `complainant_name` varchar(255) DEFAULT NULL,
  `complainant_relationship` varchar(255) DEFAULT NULL,
  `complainant_address` text DEFAULT NULL,
  `complainant_contact_number` varchar(20) DEFAULT NULL,
  `respondent_name` varchar(255) DEFAULT NULL,
  `respondent_date_of_birth` date DEFAULT NULL,
  `respondent_age` int(11) DEFAULT NULL,
  `respondent_sex` enum('Male','Female') DEFAULT NULL,
  `respondent_position` varchar(255) DEFAULT NULL,
  `respondent_address` text DEFAULT NULL,
  `respondent_contact_number` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `casereport`
--
ALTER TABLE `casereport`
  ADD PRIMARY KEY (`reporter_id`);

--
-- Indexes for table `education_intake`
--
ALTER TABLE `education_intake`
  ADD PRIMARY KEY (`intake_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `education_intake`
--
ALTER TABLE `education_intake`
  MODIFY `intake_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
