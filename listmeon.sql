-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2021 at 01:56 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vgi`
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
  `img` varchar(1000) NOT NULL,
  `status` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `name` varchar(50) NOT NULL,
  `location_link` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `listmeon`
--

INSERT INTO `listmeon` (`id`, `firm_name`, `whatsapp`, `address`, `pincode`, `number`, `subhead`, `remark`, `img`, `status`, `timestamp`, `name`, `location_link`, `email`, `slug`) VALUES
(1, 'web2rise', 8586913142, 'dummy address comes here', 121001, 8593156335, 'website designing company', 'website designing company', 'web2rise_1639311477127075057361b5e87516825_logo.png', 0, '2021-12-14 14:44:18', 'Kapil Gupta', 'web2rise', 'jpgupta@gmail.com', 'web2rise'),
(2, 'skelectricals', 8586913142, 'dummy address comes here', 121001, 9625891968, 'best electric panel creator', 'contact us', 'skelectricals_163931162727304705361b5e90bad993_logo.png', 0, '2021-12-14 14:45:17', 'sanjay kumar', 'skelectricals', 'jpgupta@gmail.com', 'skelectricals'),
(3, 'indian servo control', 8586913142, 'dummy address comes here', 121001, 9625891968, 'keep everything in safe', 'control board creator', 'indian-servo-control_163931223454446967161b5eb6a2db14_logo.png', 0, '2021-12-14 14:46:19', 'Manoj Maurya', 'indian servo controls', 'jpgupta@gmail.com', 'indian-servo-control'),
(4, 'Spark Community', 8586913142, 'dummy address comes here', 121001, 8593156335, 'Coding Society for intereted', 'coding for interested', 'spark-community_163931351611214017361b5f06c658c8_logo.png', 0, '2021-12-12 12:51:56', 'Varun', 'google.map', 'jpgupta@gmail.com', 'spark-community'),
(5, 'Muscle Mate', 8586913142, 'dummy address comes here', 121001, 9625891968, 'cyber monday sale Boost your immune system with Mu', 'supplement', 'muscle-mate_1639313735202429964761b5f14759d19_logo.png', 0, '2021-12-12 12:55:35', 'web2rise', 'google.map', 'jpgupta@gmail.com', 'muscle-mate'),
(8, 'scooty', 8586913142, 'dummy address comes here', 121001, 9625891968, 'dummy address comes here', 'asfd', 'scooty_1639317770113903208961b6010a4da45_logo.jpg', 0, '2021-12-12 14:02:50', 'anurag', 'google.map', 'jpgupta@gmail.com', 'scooty'),
(9, 'Perfect India Tools', 8593156335, 'dummy address comes here', 121001, 9625891968, 'Perfect India Tools is here', 'Perfect India Tools Industries is a family-owned company which started its journey by offering Pressure Die-casting Molding for the automotive industry.', 'perfect-india-tools_1639318078149718271361b6023ea06ca_logo.png', 0, '2021-12-14 14:47:41', 'anurag', 'Perfect India Tools - Best Mould Manufacturing Company in Faridabad\n', 'jpgupta@gmail.com', 'perfect-india-tools');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `listmeon`
--
ALTER TABLE `listmeon`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `listmeon`
--
ALTER TABLE `listmeon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
