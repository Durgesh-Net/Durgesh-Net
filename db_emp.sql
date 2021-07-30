-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2021 at 09:57 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_emp`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_dept`
--

CREATE TABLE `table_dept` (
  `dept_id` int(10) NOT NULL,
  `dept_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_dept`
--

INSERT INTO `table_dept` (`dept_id`, `dept_name`) VALUES
(1, 'IT Department'),
(2, 'Research & Development'),
(3, 'Testing');

-- --------------------------------------------------------

--
-- Table structure for table `table_emp`
--

CREATE TABLE `table_emp` (
  `emp_id` int(10) NOT NULL,
  `emp_name` varchar(255) NOT NULL,
  `emp_dept` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_emp`
--

INSERT INTO `table_emp` (`emp_id`, `emp_name`, `emp_dept`) VALUES
(15, 'Durgesh Jadhav', 'Research & Development'),
(17, 'Keshav Tale', 'Testing'),
(18, 'Shubham Rathod', 'IT Department'),
(19, 'Ashutosh Dhoke', 'Research & Development'),
(20, 'Rajnish Wakode', 'Testing'),
(21, 'Diksha Rathod', 'Research & Development');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_dept`
--
ALTER TABLE `table_dept`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `table_emp`
--
ALTER TABLE `table_emp`
  ADD PRIMARY KEY (`emp_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_dept`
--
ALTER TABLE `table_dept`
  MODIFY `dept_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `table_emp`
--
ALTER TABLE `table_emp`
  MODIFY `emp_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
