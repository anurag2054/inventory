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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `court`
--
ALTER TABLE `court`
  ADD PRIMARY KEY (`Sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `court`
--
ALTER TABLE `court`
  MODIFY `Sno` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
