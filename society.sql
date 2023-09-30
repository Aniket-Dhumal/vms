-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2023 at 01:05 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `society`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `iddate` datetime NOT NULL,
  `empid` text NOT NULL,
  `name` text NOT NULL,
  `email` text DEFAULT NULL,
  `cell` text NOT NULL,
  `address` text NOT NULL,
  `edu` text DEFAULT NULL,
  `design` text DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `joining_date` date DEFAULT NULL,
  `salary` float NOT NULL,
  `remark` text DEFAULT NULL,
  `cmpid` int(11) NOT NULL,
  `gender` text NOT NULL,
  `pl` int(11) NOT NULL COMMENT ' Paid Leave',
  `ph` int(11) NOT NULL,
  `isPt` int(11) NOT NULL,
  `isPf` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `iddate`, `empid`, `name`, `email`, `cell`, `address`, `edu`, `design`, `dob`, `joining_date`, `salary`, `remark`, `cmpid`, `gender`, `pl`, `ph`, `isPt`, `isPf`) VALUES
(1, '2023-06-21 18:32:29', '1', 'Demo', '11', '11', '1', '11', '1', '2000-01-01', '2023-01-01', 2000, '0', 1, 'MALE', 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `loantypes`
--

CREATE TABLE `loantypes` (
  `id` int(11) NOT NULL,
  `iddate` datetime NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loantypes`
--

INSERT INTO `loantypes` (`id`, `iddate`, `name`) VALUES
(1, '2023-06-29 18:36:59', 'Housing');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `iddate` datetime NOT NULL,
  `name` text NOT NULL,
  `marathi_name` text NOT NULL,
  `contact` text NOT NULL,
  `birthday` date NOT NULL,
  `anniversary` date NOT NULL,
  `deathann` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `iddate`, `name`, `marathi_name`, `contact`, `birthday`, `anniversary`, `deathann`) VALUES
(1, '2023-06-01 18:16:03', 'Dhiraj', 'Dhiraj', '9890093759', '2023-06-01', '2023-06-01', '2023-06-01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `iddate` datetime NOT NULL,
  `name` text NOT NULL,
  `contact` text NOT NULL,
  `email` text NOT NULL,
  `address` text NOT NULL,
  `pwd` text NOT NULL,
  `parentuser` int(11) NOT NULL,
  `status` int(11) NOT NULL COMMENT '0 OFF 1 ON',
  `lastlogin` datetime NOT NULL,
  `role` int(11) NOT NULL COMMENT '1 Admin  2 Firm  3 Accountant',
  `logintoken` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `iddate`, `name`, `contact`, `email`, `address`, `pwd`, `parentuser`, `status`, `lastlogin`, `role`, `logintoken`) VALUES
(3, '2023-06-01 14:39:36', 'Matrubhumi', '1', '5959', 'Barshi', '1', 1, 1, '2023-06-01 14:39:36', 1, 'jX1pLQs4Sr');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loantypes`
--
ALTER TABLE `loantypes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `loantypes`
--
ALTER TABLE `loantypes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
