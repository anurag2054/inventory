-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2024 at 06:45 AM
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
-- Table structure for table `court`
--

CREATE TABLE `court` (
  `Sno` bigint(20) NOT NULL,
  `court_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `court`
--

INSERT INTO `court` (`Sno`, `court_name`) VALUES
(1, 'District Judge'),
(2, 'Addl. District and Sessions judge Court No. 1'),
(3, 'Spl. Judge SC/ST Court'),
(4, 'Spl. Judge ( D.A.A.)	'),
(5, 'Spl. Judge (E.C  Act)'),
(6, 'Special Judge POCSO '),
(7, 'A.D.J Court No. 5'),
(8, 'A.D.J Court No. 6'),
(9, 'A.D.J Court No. 7'),
(10, 'A.D.J Court No. 8'),
(11, 'A.D.J Court No. 9'),
(12, 'Addl. Family Court'),
(13, 'A.D.J / F.T.C. No. 1'),
(14, 'A.D.J / F.T.C. No.2'),
(15, 'Chief Judicial Magistrate'),
(16, 'Civil Judge Senior Divison '),
(17, 'Addl. Chief Judicial Magistrate'),
(18, 'Addl. Chief Judicial Magistrate Court No 9'),
(19, 'Addl. Chief Judicial Magistrate/ Fast Tarck Court'),
(20, 'Addl.Civil Judge Senior Divison '),
(21, 'Addl. Chief Judicial Magistrate (Railway Court)'),
(22, 'Judicial Magistrate Sadar'),
(23, 'Civil Judge Junior Divison City'),
(24, 'Civil Judge Junior Divison Kaimganj'),
(25, 'Civil Judge Junior Divison Hawali'),
(26, 'Justice Juvnile Board'),
(27, 'Account Section'),
(28, 'Administrative Office'),
(29, 'Nazarat'),
(30, 'Library'),
(31, 'Police Copy'),
(32, 'Civil Copying Section'),
(33, 'Record Room'),
(34, 'DLSA'),
(35, 'Computer Setion'),
(36, 'Family Court');

-- --------------------------------------------------------

--
-- Table structure for table `dead_stock`
--

CREATE TABLE `dead_stock` (
  `S.no` int(11) NOT NULL,
  `rec_date` date NOT NULL,
  `number_of_goods` int(11) NOT NULL,
  `price_of_goods` int(11) NOT NULL,
  `inspection_date` date NOT NULL,
  `cancel_order` varchar(200) NOT NULL,
  `items_details` varchar(200) NOT NULL,
  `ending_date` date NOT NULL,
  `amt_rec` int(11) NOT NULL,
  `treassuary_chalan_no` int(11) NOT NULL,
  `officer_sig` varchar(200) NOT NULL,
  `remarks` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dead_stock`
--

INSERT INTO `dead_stock` (`S.no`, `rec_date`, `number_of_goods`, `price_of_goods`, `inspection_date`, `cancel_order`, `items_details`, `ending_date`, `amt_rec`, `treassuary_chalan_no`, `officer_sig`, `remarks`) VALUES
(1, '2024-07-11', 3, 234324, '2024-07-11', 'NO', 'Chair', '2024-07-19', 98987, 9878979, 'Yes', 'Nil');

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
(10, 'District Judge', 'Court', 'Electric Kettle', 'Vikas Babu', 'Nil'),
(11, 'Addl. District and Sessions judge Court No. 1', 'Court', 'Electric Kettle', 'Anurag Kumar Srivastava', 'Nil'),
(12, 'District Judge', 'Office', 'Table Cloth', 'Anurag Kumar Srivastava', ''),
(13, 'Addl. District and Sessions judge Court No. 1', 'Court', 'Electric Kettle', 'zzvzxcvzxcv', '');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `category` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `voucher_no` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `date`, `category`, `quantity`, `voucher_no`) VALUES
(1, 'Bajaj Kettle Model no. 65', '2024-05-30', 1, 10, 'S856'),
(2, 'Small Table Cloth ', '2024-05-01', 2, 5, 'D876'),
(3, 'Clock', '2024-06-04', 3, 10, 'W243434'),
(9, 'Fan', '2024-06-06', 4, 90, 'T6875'),
(41, 'Water Glass', '2024-06-06', 5, 50, 'hgf67'),
(42, 'sdfdsf', '2024-06-11', 1, 78, 'gf'),
(43, 'Fan', '2024-06-11', 6, 213, 'R2345'),
(44, 'ANU', '2024-06-11', 3, 123, 'R2345'),
(45, 'Table Fan', '2024-06-12', 4, 213, 'W243434'),
(46, 'Table Cloth', '2024-06-06', 1, 100, 'W243434');

-- --------------------------------------------------------

--
-- Table structure for table `item_categories`
--

CREATE TABLE `item_categories` (
  `id` int(11) NOT NULL,
  `detail` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `item_categories`
--

INSERT INTO `item_categories` (`id`, `detail`) VALUES
(1, 'Table Cloth'),
(2, 'Electric Kettle'),
(3, 'Clock'),
(4, 'Fan'),
(5, 'Galss'),
(6, 'File');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `SNO` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `Agree` varchar(200) NOT NULL,
  `role` varchar(20) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`SNO`, `Name`, `Email`, `Password`, `Agree`, `role`) VALUES
(1, 'Anurag Kumar Srivastava', 'anurag@gmail.com', 'password', 'agree', 'admin'),
(11, 'Anurag Kumar Srivastava', 'anurag1@gmail.com', 'anurag', 'agree', 'user'),
(12, 'Anurag Kumar Srivastava', 'anurag2@gmail.com', 'anurag', 'agree', 'user'),
(13, 'Anurag Kumar Srivastava', 'anurag3@gmail.com', 'anurag', 'agree', 'user'),
(15, 'Anurag Kumar Srivastava', 'anurag4@gmail.com', 'password', 'agree', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `court`
--
ALTER TABLE `court`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `dead_stock`
--
ALTER TABLE `dead_stock`
  ADD PRIMARY KEY (`S.no`);

--
-- Indexes for table `dispatch`
--
ALTER TABLE `dispatch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category` (`category`);

--
-- Indexes for table `item_categories`
--
ALTER TABLE `item_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`SNO`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `court`
--
ALTER TABLE `court`
  MODIFY `Sno` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `dead_stock`
--
ALTER TABLE `dead_stock`
  MODIFY `S.no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dispatch`
--
ALTER TABLE `dispatch`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `item_categories`
--
ALTER TABLE `item_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=440;

--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `SNO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_ibfk_1` FOREIGN KEY (`category`) REFERENCES `item_categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
