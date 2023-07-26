-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2023 at 01:51 PM
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
  `em_id` int(13) NOT NULL COMMENT 'em id of employee',
  `Salary` int(25) NOT NULL COMMENT 'Monthly salary of employee',
  `balance_prev_month` int(25) NOT NULL COMMENT 'Balance amount from previous month added to the current month',
  `dates` date NOT NULL COMMENT 'Date to be inserted'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `em_id`, `Salary`, `balance_prev_month`, `dates`) VALUES
(9, 'jesty', 4, -7500, 0, '2023-06-15'),
(11, 'Catherine', 6, 18500, 5000, '2023-06-15'),
(13, 'Vijo', 5, 150000, 50000, '2023-06-27'),
(14, 'jesty', 4, 42500, -7500, '2023-06-30');

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
(6, 2, 'jesty', 43300, 5000, '14-06-2023'),
(7, 2, 'jesty', -1700, 45000, '14-06-2023'),
(8, 7, 'Parvathy', 46000, 4000, '15-06-2023'),
(9, 8, 'Jis', 23000, 2000, '15-06-2023'),
(10, 7, 'Parvathy', 45000, 1000, '22-06-2023'),
(11, 8, 'Jis', 18000, 5000, '26-06-2023'),
(12, 7, 'Parvathy', 40000, 5000, '15-06-2023'),
(13, 9, 'jesty', 45000, 5000, '15-06-2023'),
(14, 9, 'jesty', 42500, 2500, '29-06-2023'),
(15, 9, 'jesty', -2500, 45000, '26-06-2023'),
(16, 9, 'jesty', -7500, 5000, '26-06-2023'),
(17, 10, 'Vijo', 50000, 50000, '27-06-2023'),
(18, 11, '', 19000, 1000, '26-07-2023'),
(19, 6, '', 18000, 1000, '26-07-2023'),
(20, 6, '', 17000, 2000, '26-07-2023'),
(21, 6, '', 18000, 1000, '26-07-2023'),
(22, 6, 'Catherine', 18000, 1000, '26-07-2023'),
(23, 6, 'Catherine', 18000, 1000, '26-07-2023'),
(24, 6, 'Catherine', 18000, 1000, '26-07-2023'),
(25, 6, 'Catherine', 18500, 500, '26-07-2023');

-- --------------------------------------------------------

--
-- Table structure for table `employee_details`
--

CREATE TABLE `employee_details` (
  `id` int(20) NOT NULL COMMENT 'ID of Employee',
  `name` varchar(25) NOT NULL COMMENT 'Name of Employee',
  `Phone` varchar(15) NOT NULL COMMENT 'Phone number of Employee',
  `Salary` int(25) NOT NULL COMMENT 'Salary of employee in one month fixed for them',
  `email` varchar(25) NOT NULL COMMENT 'Email of employee',
  `dates` varchar(25) NOT NULL COMMENT 'dates in which the employee added'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_details`
--

INSERT INTO `employee_details` (`id`, `name`, `Phone`, `Salary`, `email`, `dates`) VALUES
(4, 'jesty', '9072475475', 50000, 'jestydavid@gmail.com', '15/06/2023'),
(5, 'Vijo', '9645926926', 100000, 'jestydavid@gmail.com', '15/06/2023'),
(6, 'Catherine vijo', '48878787', 250000, 'jestymol_2445@spectrum.ne', '15/06/2023'),
(7, 'Sidhi', '56746535', 30000, 'ss@gmail.com', '16/06/2023');

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
-- Indexes for table `employee_details`
--
ALTER TABLE `employee_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT COMMENT 'Primary key', AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `employee_adv_history`
--
ALTER TABLE `employee_adv_history`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'id of table', AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `employee_details`
--
ALTER TABLE `employee_details`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT COMMENT 'ID of Employee', AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
