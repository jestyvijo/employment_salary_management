-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2023 at 12:25 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `happy_collection`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(5) NOT NULL COMMENT 'Primary key',
  `name` varchar(10) NOT NULL COMMENT 'Name of employee',
  `phone` varchar(13) NOT NULL COMMENT 'Phone of employee',
  `Salary` int(25) NOT NULL COMMENT 'Monthly salary of employee',
  `balance_prev_month` int(25) NOT NULL COMMENT 'Balance amount from previous month added to the current month',
  `dates` date NOT NULL COMMENT 'Date to be inserted'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `phone`, `Salary`, `balance_prev_month`, `dates`) VALUES
(2, 'jesty', '9072475475', 43300, 20000, '2023-06-09'),
(3, 'Catherine', '94545495', 25000, 15000, '2023-06-09'),
(4, 'vijo', '7867878686', 60000, 2000, '2023-06-12');

-- --------------------------------------------------------

--
-- Table structure for table `employee_adv_history`
--

CREATE TABLE `employee_adv_history` (
  `id` int(10) NOT NULL COMMENT 'id of table',
  `em_id` int(10) NOT NULL COMMENT 'id of employee',
  `name` varchar(20) NOT NULL COMMENT 'name of employee',
  `balance_amount` int(25) NOT NULL COMMENT 'Balance amount of current salary',
  `advance_amount` int(25) NOT NULL COMMENT 'advance amount to be paid',
  `dates` varchar(20) NOT NULL COMMENT 'date of advance'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_adv_history`
--

INSERT INTO `employee_adv_history` (`id`, `em_id`, `name`, `balance_amount`, `advance_amount`, `dates`) VALUES
(1, 2, 'jesty', 49000, 1000, '12-06-2023'),
(2, 2, 'jesty', 48800, 200, '14-06-2023'),
(3, 2, 'jesty', 48300, 500, '16-06-2023'),
(4, 3, 'Catherine', 28000, 2000, '12-06-2023'),
(5, 3, 'Catherine', 25000, 3000, '20-06-2023'),
(6, 2, 'jesty', 43300, 5000, '14-06-2023');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_adv_history`
--
ALTER TABLE `employee_adv_history`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT COMMENT 'Primary key', AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employee_adv_history`
--
ALTER TABLE `employee_adv_history`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'id of table', AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
