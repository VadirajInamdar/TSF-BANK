-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 14, 2023 at 10:20 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vibank`
--

-- --------------------------------------------------------

--
-- Table structure for table `CUSTOMERS`
--

CREATE TABLE `CUSTOMERS` (
  `customer_name` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `balance` float DEFAULT NULL,
  `acno` int(10) NOT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `CUSTOMERS`
--

INSERT INTO `CUSTOMERS` (`customer_name`, `contact`, `address`, `balance`, `acno`, `email`) VALUES
('VIPIN KUMAR', '9822603215', 'Panaji, Goa', 25055.3, 151106, 'vipin@gmail.com'),
('SHRINIVAS SHARMA', '7083481368', 'Mapusa, Goa', 39500.3, 151107, 'SHRINIVAS@gmail.com'),
('RAVI NAIR', '9123412311', 'Margao, Goa', 13445.9, 151108, 'ravi@gmail.com'),
('SURESH KUMAR', '8888844321', 'Porvorim, Goa', 56500.3, 151109, 'suresh@gmail.com'),
('SAURABH GANGULI', '9988345124', 'PONDA, GOA', 45673.2, 151110, 'SAURABH@gmail.com'),
('SIMRAN KANEKAR', '8876123672', 'BICHOLIM,GOA', 98764, 151111, 'SIMRAN@GMAIL.COM'),
('SAMEER KANEKAR', '9876123672', 'COLVA,GOA', 928764, 151112, 'SAMEER@GMAIL.COM'),
('ROHIN PARKER', '8876323672', 'VASCO,GOA', 9425760, 151113, 'ROHIN@gmail.com'),
('VADIRAJ INAMDAR', '8830926431', 'VALPOI,GOA', 76835.1, 151114, 'vadi@gmail.com'),
('SANJANA NAIK', '7689981235', 'MARGAO, GOA', 10000, 151115, 'SANJANA@GMAIL.COM');

-- --------------------------------------------------------

--
-- Table structure for table `TRANSFER`
--

CREATE TABLE `TRANSFER` (
  `acc_from` int(11) DEFAULT NULL,
  `acc_to` int(11) DEFAULT NULL,
  `amount` float DEFAULT NULL,
  `time_stamp` time DEFAULT NULL,
  `date_of_trans` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `TRANSFER`
--

INSERT INTO `TRANSFER` (`acc_from`, `acc_to`, `amount`, `time_stamp`, `date_of_trans`) VALUES
(151113, 151106, 6000, '10:13:03', '11-04-2023'),
(151113, 151106, 7000, '10:13:12', '11-04-2023'),
(151106, 151108, 1200, '10:13:39', '11-04-2023'),
(151106, 151108, 1245, '10:13:48', '11-04-2023'),
(151106, 151108, 1000, '10:13:56', '11-04-2023'),
(151106, 151107, 2000, '12:34:46', '11-04-2023');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `CUSTOMERS`
--
ALTER TABLE `CUSTOMERS`
  ADD PRIMARY KEY (`acno`);

--
-- Indexes for table `TRANSFER`
--
ALTER TABLE `TRANSFER`
  ADD KEY `acc_from` (`acc_from`),
  ADD KEY `acc_to` (`acc_to`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `TRANSFER`
--
ALTER TABLE `TRANSFER`
  ADD CONSTRAINT `transfer_ibfk_1` FOREIGN KEY (`acc_from`) REFERENCES `CUSTOMERS` (`acno`),
  ADD CONSTRAINT `transfer_ibfk_2` FOREIGN KEY (`acc_to`) REFERENCES `CUSTOMERS` (`acno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
