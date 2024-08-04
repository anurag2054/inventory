-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2024 at 03:59 AM
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
-- Database: `nazarat`
--

-- --------------------------------------------------------

--
-- Table structure for table `dispatch`
--

CREATE TABLE `dispatch` (
  `id` bigint(20) NOT NULL,
  `court_name` varchar(200) NOT NULL,
  `office` varchar(200) NOT NULL,
  `item` varchar(200) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `remarks` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dispatch`
--

INSERT INTO `dispatch` (`id`, `court_name`, `office`, `item`, `user_name`, `remarks`) VALUES
(1, 'Clock', 'Court', '', 'Anurag Kumar Srivastava', 'Nil'),
(2, 'Clock', 'Office', '', 'Anurag Kumar Srivastava', 'Nil'),
(3, 'Clock', 'Office', '', 'Anurag Kumar Srivastava', 'Nil'),
(4, 'Spl. Judge ( D.A.A.)	', 'Court', 'Fan', 'Anurag Kumar Srivastava', 'Nil'),
(5, 'Spl. Judge ( D.A.A.)	', 'Court', 'Clock', 'Sri Ramdev Gupta', 'Nil'),
(6, 'Hon', 'Office', 'Table Cloth', 'Himanshu Shukla', 'Nil'),
(7, 'Hon', 'Office', 'Table Cloth', '', ''),
(8, 'Hon', 'Office', 'Table Cloth', '', ''),
(9, 'Hon', 'Office', 'Clock', 'Vikas Babu', 'Nil'),
(10, 'District Judge', 'Court', 'Electric Kettle', 'Vikas Babu', 'Nil');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dispatch`
--
ALTER TABLE `dispatch`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dispatch`
--
ALTER TABLE `dispatch`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
