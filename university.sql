-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2025 at 09:39 AM
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
-- Database: `university`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `full_name`, `created_at`) VALUES
(1, 'admin', '$2y$10$GreW0xjdEusiHFlJp.D.zefmuO68H6blip0jJNuG.G2SXaMi3Y.7.', 'John Admin', '2025-11-15 07:28:01');

-- --------------------------------------------------------

--
-- Table structure for table `admissions`
--

CREATE TABLE `admissions` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `county` varchar(100) NOT NULL,
  `town` varchar(100) DEFAULT NULL,
  `program` varchar(100) NOT NULL,
  `level` varchar(50) NOT NULL,
  `intake` varchar(50) NOT NULL,
  `education` varchar(50) NOT NULL,
  `institution` varchar(150) NOT NULL,
  `completion_year` varchar(10) NOT NULL,
  `grade` varchar(10) NOT NULL,
  `kcse` varchar(255) NOT NULL,
  `birth_cert` varchar(255) NOT NULL,
  `id_doc` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `guardian_name` varchar(150) NOT NULL,
  `guardian_phone` varchar(50) NOT NULL,
  `guardian_relation` varchar(50) NOT NULL,
  `message` text DEFAULT NULL,
  `submission_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admissions`
--

INSERT INTO `admissions` (`id`, `first_name`, `last_name`, `dob`, `gender`, `phone`, `email`, `county`, `town`, `program`, `level`, `intake`, `education`, `institution`, `completion_year`, `grade`, `kcse`, `birth_cert`, `id_doc`, `photo`, `guardian_name`, `guardian_phone`, `guardian_relation`, `message`, `submission_date`) VALUES
(7, 'Brian', 'Nguru', '2000-01-12', 'Male', '0790591606', 'brianndungu274@gmail.com', 'Murang\'a', 'Nairobi', 'Computer Science', 'Degree', 'January', 'KCSE', 'Giakanja Boys High School', '2023', 'A', 'uploads/1763195805_KCSE cert.docx', 'uploads/1763195805_Birth Cert.docx', 'uploads/1763195805_ID.docx', 'uploads/1763195805_Passport pic.jpeg', 'Yoichi kim', '0790591606', 'Father', '', '2025-11-15 08:36:45'),
(8, 'John ', 'C', '2002-05-03', 'Male', '0712345678', 'example001@gmail.com', 'Murang\'a', 'Kiharu', 'Business Management', 'Degree', 'January', 'KCSE', 'Giakanja Boys High School', '2023', 'A', 'uploads/1763202162_KCSE cert.docx', 'uploads/1763202162_Birth Cert.docx', 'uploads/1763202162_ID.docx', 'uploads/1763202162_Passport pic.jpeg', 'June', '0798765432', 'Mother', '', '2025-11-15 10:22:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `admissions`
--
ALTER TABLE `admissions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admissions`
--
ALTER TABLE `admissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
