-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2021 at 07:43 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banking`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `sno` int(3) NOT NULL,
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `balance` int(8) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`sno`, `sender`, `receiver`, `balance`, `datetime`) VALUES
(11, 'Rithvika', 'Preet Rathi', 3466, '2021-06-14 22:49:42'),
(12, 'Padam Rai', 'Muskan Kumari', 46678, '2021-06-14 22:50:00'),
(13, 'Preet Rathi', 'Rithvika', 19990, '2021-06-14 22:51:25'),
(14, 'Rithvika', 'Pardeep Kumar', 1000, '2021-06-14 22:51:53'),
(15, 'Rithvika', 'Junaid Ali', 1000, '2021-06-14 22:52:12'),
(16, 'Rithvika', 'Pardeep Kumar', 2000, '2021-06-14 22:52:24'),
(17, 'Rithvika', 'Rabia Ali', 3000, '2021-06-14 22:52:38'),
(18, 'Rithvika', 'Akash Rai', 1000, '2021-06-15 10:26:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `balance` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `balance`) VALUES
(1, 'Rithvika', 'rithvika@gmail.com', 13477),
(2, 'Akash Rai', 'akashrai@gmail.com', 46002),
(3, 'Padam Rai', 'raipadam@gmail.com', 28013),
(4, 'Preet Rathi', 'preetrathi@gmail.com', 32066),
(5, 'Muskan Kumari', 'kumarimuskan@gmail.com', 86728),
(6, 'Rabia Ali', 'rabiaali@gmail.com', 33555),
(7, 'Pardeep Kumar', 'pardeep@gmail.com', 52877),
(8, 'Junaid Ali', 'junaid@gmail.com', 37825),
(9, 'Avinash Kumar', 'avinash@gmail.com', 30000),
(10, 'Kelash Kumar', 'kelash@gmail.com', 50096);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
