-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2023 at 05:07 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `password`, `role`, `email`, `mobile`, `status`) VALUES
(15, 'ngochuyk8', '123321', 1, 'ngohuyk80169@gmail.com', '', 1),
(16, 'admin', '123', 1, 'ngohuyk801269@gmail.com', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `note`
--

CREATE TABLE `note` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `id_edit` varchar(255) NOT NULL,
  `id_view` varchar(255) NOT NULL,
  `title` text DEFAULT '',
  `content` longtext DEFAULT '',
  `pass` varchar(255) DEFAULT NULL,
  `create_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `note`
--

INSERT INTO `note` (`id`, `username`, `id_edit`, `id_view`, `title`, `content`, `pass`, `create_at`) VALUES
(99, '1', '64eaeced08e62', '64eaeced08e61', '', '', NULL, '2023-08-27'),
(100, '', '64eaef795d83c', '64eaef795d839', 'ádasd', 'áádádasasdasd', NULL, '2023-08-27'),
(101, '', '64eaf114aa873', '64eaf114aa872', '', '', NULL, '2023-08-27'),
(102, '', '64eaf18de3930', '64eaf18de392e', '', '', NULL, '2023-08-27'),
(103, '', '64eaf18ee8aec', '64eaf18ee8aea', '', '', NULL, '2023-08-27'),
(104, '', '64eaf301f3fe3', '64eaf301f3fe1', '', '', NULL, '2023-08-27'),
(105, '', '64eaf30389394', '64eaf30389393', '', '', NULL, '2023-08-27'),
(106, '', '64eaf46e9b3eb', '64eaf46e9b3ea', '', '', NULL, '2023-08-27'),
(107, '', '64ed5c9dad6d3', '64ed5c9dad6d1', '', '', NULL, '2023-08-29'),
(108, '', '64ed5d0dde61d', '64ed5d0dde61b', '', '', NULL, '2023-08-29'),
(109, '', '64ed5da93db7c', '64ed5da93db7b', 'adad', 'ádasdasd', NULL, '2023-08-29'),
(110, 'admin', '64ed5e9dd76da', '64ed5e9dd76d7', 'huy', 'ádasdasdádas', NULL, '2023-08-29'),
(111, 'admin', '64ed68057e0c4', '64ed68057e0c2', '', '', NULL, '2023-08-29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `note`
--
ALTER TABLE `note`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `note`
--
ALTER TABLE `note`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
