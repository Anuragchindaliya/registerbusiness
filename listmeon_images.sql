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
-- Table structure for table `listmeon_images`
--

CREATE TABLE `listmeon_images` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `img_link` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `listmeon_images`
--

INSERT INTO `listmeon_images` (`id`, `uid`, `img_link`, `content`, `status`, `timestamp`, `type`) VALUES
(1, 1, 'web2rise_163931147787657670061b5e87516dd4_gallery.jpg', 'web2rise first image', 0, '2021-12-14 13:51:13', ''),
(2, 1, 'web2rise_1639311477149776779061b5e87516eb9_gallery.jpg', '', 0, '2021-12-12 12:17:57', ''),
(3, 1, 'web2rise_1639311477121867119161b5e87516f4a_gallery.jpg', '', 0, '2021-12-12 12:17:57', ''),
(4, 1, 'web2rise_1639311477134890487461b5e87516fd1_gallery.jpg', '', 0, '2021-12-12 12:17:57', ''),
(5, 1, 'web2rise_163931147749245053961b5e8751704b_gallery.jpg', '', 0, '2021-12-12 12:17:57', ''),
(6, 1, 'web2rise_1639311477214733970661b5e875170d0_gallery.jpg', '', 0, '2021-12-12 12:17:57', ''),
(7, 1, 'web2rise_163931147715177714861b5e8751714a_gallery.jpg', '', 0, '2021-12-12 12:17:57', ''),
(8, 1, 'web2rise_1639311477165664325361b5e875171c6_gallery.jpg', '', 0, '2021-12-12 12:17:57', ''),
(9, 1, 'web2rise_163931147759046466861b5e87517253_gallery.jpg', '', 0, '2021-12-12 12:17:57', ''),
(10, 1, 'web2rise_1639311477130141350261b5e8751731b_gallery.jpg', '', 0, '2021-12-12 12:17:57', ''),
(11, 2, 'skelectricals_1639311627189973430561b5e90badf85_gallery.png', '', 0, '2021-12-12 12:20:27', ''),
(12, 2, 'skelectricals_1639311627146360102361b5e90bae052_gallery.png', '', 0, '2021-12-12 12:20:27', ''),
(13, 2, 'skelectricals_163931162722792331961b5e90bae0ec_gallery.png', '', 0, '2021-12-12 12:20:27', ''),
(14, 2, 'skelectricals_163931162764304148361b5e90bae1a4_gallery.png', '', 0, '2021-12-12 12:20:27', ''),
(15, 2, 'skelectricals_1639311627144974481861b5e90bae244_gallery.png', '', 0, '2021-12-12 12:20:27', ''),
(16, 2, 'skelectricals_1639311627166420795161b5e90bae2d0_gallery.png', '', 0, '2021-12-12 12:20:27', ''),
(17, 2, 'skelectricals_1639311627144148636761b5e90bae394_gallery.png', '', 0, '2021-12-12 12:20:27', ''),
(18, 3, 'indian-servo-control_1639312234147996514161b5eb6a2e06d_gallery.jpg', '', 0, '2021-12-12 12:30:34', ''),
(19, 3, 'indian-servo-control_1639312234210125279561b5eb6a2e0ec_gallery.jpg', '', 0, '2021-12-12 12:30:34', ''),
(20, 3, 'indian-servo-control_1639312234194057921761b5eb6a2e179_gallery.jpg', '', 0, '2021-12-12 12:30:34', ''),
(21, 3, 'indian-servo-control_1639312234103907864761b5eb6a2e1e8_gallery.jpg', '', 0, '2021-12-12 12:30:34', ''),
(22, 3, 'indian-servo-control_163931223488196215061b5eb6a2e24f_gallery.jpg', '', 0, '2021-12-12 12:30:34', ''),
(23, 3, 'indian-servo-control_163931223495934631661b5eb6a2e2b5_gallery.jpg', '', 0, '2021-12-12 12:30:34', ''),
(24, 3, 'indian-servo-control_1639312234113722730361b5eb6a2e31b_gallery.jpg', '', 0, '2021-12-12 12:30:34', ''),
(25, 3, 'indian-servo-control_163931223495187605661b5eb6a2e385_gallery.png', '', 0, '2021-12-12 12:30:34', ''),
(26, 3, 'indian-servo-control_1639312234130660252461b5eb6a2e3ef_gallery.jpg', '', 0, '2021-12-12 12:30:34', ''),
(27, 4, 'spark-community_1639313516118472295561b5f06c65d8e_gallery.png', '', 0, '2021-12-12 12:51:56', ''),
(28, 4, 'spark-community_1639313516211387848261b5f06c65e59_gallery.png', '', 0, '2021-12-12 12:51:56', ''),
(29, 4, 'spark-community_163931351670696275961b5f06c65eec_gallery.png', '', 0, '2021-12-12 12:51:56', ''),
(30, 5, 'muscle-mate_1639313735128859638561b5f1475a2da_gallery.png', '', 0, '2021-12-12 12:55:35', ''),
(31, 5, 'muscle-mate_163931373515260078761b5f1475a3c9_gallery.png', '', 0, '2021-12-12 12:55:35', ''),
(32, 5, 'muscle-mate_163931373598763928361b5f1475a43b_gallery.png', '', 0, '2021-12-12 12:55:35', ''),
(33, 5, 'muscle-mate_1639313735122066365361b5f1475a49c_gallery.png', '', 0, '2021-12-12 12:55:35', ''),
(34, 5, 'muscle-mate_1639313735173243406461b5f1475d26f_gallery.png', '', 0, '2021-12-12 12:55:35', ''),
(35, 5, 'muscle-mate_163931373585895471261b5f1475d2f4_gallery.jpg', '', 0, '2021-12-12 12:55:35', ''),
(36, 5, 'muscle-mate_163931373527486572861b5f1475d357_gallery.png', '', 0, '2021-12-12 12:55:35', ''),
(37, 5, 'muscle-mate_163931373567457529461b5f1475fe20_gallery.png', '', 0, '2021-12-12 12:55:35', ''),
(38, 5, 'muscle-mate_163931373559018254561b5f1475fe97_gallery.png', '', 0, '2021-12-12 12:55:35', ''),
(39, 5, 'muscle-mate_1639313735198059736261b5f1475ffad_gallery.png', '', 0, '2021-12-12 12:55:35', ''),
(54, 8, 'scooty_163931777015849512561b6010a4df2d_gallery.jpg', '', 0, '2021-12-12 14:02:50', ''),
(55, 8, 'scooty_1639317770122108476661b6010a4e01d_gallery.jpg', '', 0, '2021-12-12 14:02:50', ''),
(56, 8, 'scooty_163931777025496945561b6010a4e0e8_gallery.jpg', '', 0, '2021-12-12 14:02:50', ''),
(57, 8, 'scooty_163931777085724961761b6010a4e1a2_gallery.png', '', 0, '2021-12-12 14:02:50', ''),
(58, 8, 'scooty_1639317770157095552461b6010a4e25e_gallery.png', '', 0, '2021-12-12 14:02:50', ''),
(59, 9, 'perfect-india-tools_1639318078114479171061b6023ea0bec_gallery.jpg', '', 0, '2021-12-12 14:07:58', ''),
(60, 9, 'perfect-india-tools_1639318078124561193661b6023ea0cb4_gallery.jpg', '', 0, '2021-12-12 14:07:58', ''),
(61, 9, 'perfect-india-tools_16393180786929609361b6023ea0d7b_gallery.jpeg', '', 0, '2021-12-12 14:07:58', ''),
(62, 9, 'perfect-india-tools_1639318078104690637961b6023ea0e26_gallery.jpeg', '', 0, '2021-12-12 14:07:58', ''),
(63, 9, 'perfect-india-tools_163931807849170565361b6023ea0ed4_gallery.jpeg', '', 0, '2021-12-12 14:07:58', ''),
(64, 9, 'perfect-india-tools_163931807877681192061b6023ea0ff5_gallery.jpeg', '', 0, '2021-12-12 14:07:58', ''),
(65, 9, 'perfect-india-tools_1639318078101574044461b6023ea10b6_gallery.jpg', '', 0, '2021-12-12 14:07:58', ''),
(66, 9, 'perfect-india-tools_1639318078102656357861b6023ea1174_gallery.png', '', 0, '2021-12-12 14:07:58', ''),
(67, 9, 'perfect-india-tools_1639318078195908273961b6023ea1210_gallery.jpeg', '', 0, '2021-12-12 14:07:58', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `listmeon_images`
--
ALTER TABLE `listmeon_images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `listmeon_images`
--
ALTER TABLE `listmeon_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
