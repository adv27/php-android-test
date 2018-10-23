-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2018 at 04:53 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `is1106`
--

-- --------------------------------------------------------

--
-- Table structure for table `carinfo`
--

CREATE TABLE `carinfo` (
  `id` int(11) NOT NULL,
  `departure_place` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `arrive_place` varchar(255) NOT NULL,
  `share_seats` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carinfo`
--

INSERT INTO `carinfo` (`id`, `departure_place`, `date`, `time`, `arrive_place`, `share_seats`) VALUES
(1, 'Metri', '2020-01-01', '08:00:00', 'Hoalac', 2),
(2, 'BigC Thang long', '2020-01-01', '08:00:00', 'Hoalac', 3),
(3, 'Kengnam', '2020-01-01', '08:00:00', 'Hoalac', 5);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `company` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `password`, `phone`, `company`) VALUES
('admin', 'admin', 'admin', '012345678', 'FU'),
('admin1', 'admin1', 'admin1', '012345678', 'FU');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carinfo`
--
ALTER TABLE `carinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carinfo`
--
ALTER TABLE `carinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
