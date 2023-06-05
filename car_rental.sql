-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2023 at 10:02 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_rental`
--

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `cid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `model` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `price` float NOT NULL,
  `status` enum('b','u') NOT NULL DEFAULT 'u',
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`cid`, `name`, `photo`, `model`, `color`, `price`, `status`, `description`, `created_at`, `updated_at`) VALUES
(6, 'BMW x5', 'bmw_x5-xdrive45e_1685952083.png', 'BMW_x5-xDrive45e', 'white', 500, 'u', 'The BMW X5 xDrive45e is a plug-in hybrid SUV that offers the best of both worlds: the performance and luxury of a BMW SUV with the fuel efficiency of an electric car. It has a 3.0-liter turbocharged six-cylinder engine and an electric motor that combine to produce 394 horsepower and 443 lb-ft of torque. The X5 xDrive45e can go up to 41 miles on electric power alone, and when the battery runs out, the gas engine kicks in to extend the range.', '2023-06-05 07:56:03', '2023-06-05 08:01:23');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(72) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `uid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `lob` int(11) NOT NULL,
  `token` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `name` varchar(70) NOT NULL,
  `address` varchar(72) NOT NULL,
  `status` enum('a','l') NOT NULL DEFAULT 'l',
  `contact` varchar(15) NOT NULL,
  `email` varchar(72) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `name`, `address`, `status`, `contact`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'ram', 'pokhara', 'a', '92834023840', 'sds@gmail.com', '', '2023-06-03 05:46:22', NULL),
(2, 'hari', 'pokhara', 'a', '98080808080', 'hari@gmail.com', 'a9bcf1e4d7b95a22e2975c812d938889', '2023-06-04 07:45:39', '2023-06-04 08:25:55'),
(3, 'Shishir', 'Kathmandu', 'l', '98080808080', 'shishir@gmail.com', '7b1fd2d96f079dc3401a3062134ab9cc', '2023-06-04 17:29:03', NULL),
(4, 'Sagar Timilsina', 'Pokhara - 19', 'l', '972342432343', 'sagar@gmail.com', '41ed44e3038dbeee7d2ffaa7f51d8a4b', '2023-06-05 00:29:42', NULL),
(5, 'Aashish Poudel', 'Syangja', 'l', '9834323231', 'aashish@gmail.com', '15c041aad623e58ed0572a9c1f555a4d', '2023-06-05 00:30:27', NULL),
(6, 'Tilak', 'Rupendhai', 'a', '982308423', 'tilak@gmail.com', '077c637579be2735284e4059856e6c20', '2023-06-05 04:04:32', NULL),
(7, 'krishna', 'Kalikot', 'l', '982308423', 'krishna@gmail.com', '243bd1ce0387f18005abfc43b001646a', '2023-06-05 07:09:49', NULL),
(8, 'Roshan', 'Baglung', 'a', '97823473023', 'roshan@gmail.com', 'd6dfb33a2052663df81c35e5496b3b1b', '2023-06-05 07:13:08', NULL),
(9, 'Jack', 'sydney', 'l', '9803482423', 'jack@gmail.com', '4ff9fc6e4e5d5f590c4f2134a8cc96d1', '2023-06-05 07:16:39', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`uid`,`cid`),
  ADD KEY `cid` (`cid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`uid`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`cid`) REFERENCES `car` (`cid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
