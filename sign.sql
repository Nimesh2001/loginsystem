-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2021 at 01:31 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `sign`
--

CREATE TABLE `sign` (
  `sno` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `dt` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sign`
--

INSERT INTO `sign` (`sno`, `email`, `password`, `dt`) VALUES
(3, 'bnkeshari214@gmail.com', '$2y$10$34JAeeY7quNQsyCrr.X3ZOZyGeWdA1P3nuVQ2cIFPTzL3o22gRWxu', '2021-06-02 15:08:17'),
(4, 'kaushal214@gmail.com', '$2y$10$4j/ueRqGWucq4DsvSXtjT.afV4376v9Qt0Hk1pXrqExhJWhzZY202', '2021-06-02 15:13:02'),
(5, 'nimeshsingh214@gmail.com', '$2y$10$UAy48qEze48gjEcGMCUrtOWT5EZu/YSkU5l/I5x1A3tf4JKfbZULi', '2021-06-02 15:15:49'),
(6, 'arjs187@gmail.com', '$2y$10$MwlYbhUKC9meUY4QOPa6jeVcIlUf831W3eonzwA/G6HDNFQiQ0kjG', '2021-06-02 15:18:40'),
(7, 'bn@gmail', '$2y$10$Np0FRGX82UJmSitdkxvu4.Z3APSpKcInKgEsl4meKu6sknqwarheW', '2021-06-02 16:50:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sign`
--
ALTER TABLE `sign`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sign`
--
ALTER TABLE `sign`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
