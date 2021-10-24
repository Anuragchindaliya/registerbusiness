-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 23, 2021 at 10:56 AM
-- Server version: 5.7.35-cll-lve
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dashboard_all`
--

-- --------------------------------------------------------

--
-- Table structure for table `listmeon`
--

CREATE TABLE `listmeon` (
  `id` int(11) NOT NULL,
  `firm_name` varchar(50) NOT NULL,
  `whatsapp` bigint(20) NOT NULL,
  `address` varchar(250) NOT NULL,
  `pincode` int(11) NOT NULL,
  `number` bigint(20) NOT NULL,
  `subhead` varchar(50) NOT NULL,
  `remark` varchar(1000) NOT NULL,
  `link` varchar(1000) NOT NULL,
  `status` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `name` varchar(50) NOT NULL,
  `location_link` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `listmeon`
--

INSERT INTO `listmeon` (`id`, `firm_name`, `whatsapp`, `address`, `pincode`, `number`, `subhead`, `remark`, `link`, `status`, `timestamp`, `name`, `location_link`, `email`) VALUES
(1, 'web2rise', 8010334416, 'Nangla chowk, Nanin Market, faridabad', 121005, 8512854666, 'Website Matlab Web2Rise', 'Available All Time', 'web2rise.png', 0, '2021-10-22 13:06:00', 'Kapil Guptas', '&nbsp;', ''),
(6, '1', 1, '1', 1, 1, '1', '1', '1', 1, '2021-10-22 12:56:56', '1', '', ''),
(7, '1', 1, '1', 1, 1, '1', '1', '1', 0, '2021-10-22 13:06:21', '1', '1', ''),
(8, 'Firm Name', 8568691315, 'address', 121005, 8568691315, 'tagline', 'tramra', 'Screenshot (3).png', 0, '2021-10-23 07:53:52', 'Name', 'map.com/newjagah', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `listmeon`
--
ALTER TABLE `listmeon`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `listmeon`
--
ALTER TABLE `listmeon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
