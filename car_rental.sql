-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2023 at 07:15 PM
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
(2, 'BMW Gran', 'bmw-2-series-gran-coupe-271220221147_1685892420.jpg', 'BMW-2-Series-Gran-Coupe-271220221147', 'Blue', 500, 'u', 'The BMW 2 Series Gran Coupe has received positive reviews from critics. Car and Driver praised its \"athletic handling,\" \"luxurious interior,\" and \"long list of standard features.\" Edmunds gave it a \"recommended\" rating, saying that it is \"a stylish and engaging car that\'s also practical and affordable.\"', '2023-06-04 11:31:04', '2023-06-04 15:27:00'),
(3, 'BMW x5', 'bmw_x5-xdrive45e_1685878489.png', 'BMW_x5-xDrive45e', 'White', 300, 'u', 'The BMW X5 xDrive45e is a plug-in hybrid SUV that offers the best of both worlds: the performance and luxury of a BMW SUV with the fuel efficiency of an electric car. It has a 3.0-liter turbocharged six-cylinder engine and an electric motor that combine to produce 394 horsepower and 443 lb-ft of torque. The X5 xDrive45e can go up to 41 miles on electric power alone, and when the battery runs out, the gas engine kicks in to extend the range.', '2023-06-04 11:34:49', NULL),
(4, 'Audi Sedans', 'audi_cars_sedans_suvs_1685879097.png', 'audi sedans Q7 SUV', 'smoke white', 400, 'u', 'The Q7 is a full-size SUV that offers a luxurious interior and third-row seating. It is available with a variety of engine options, including a turbocharged V6 and a V8.', '2023-06-04 11:44:57', NULL),
(5, 'Lamborghini', 'lamborghini_invencible_lambo_v12_1685879267.jpg', 'lambo_v12', 'Black', 1000, 'u', 'The Lamborghini Invencible Lambo V12 is a concept car that was first shown at the 2022 Geneva Motor Show. It is a two-seater sports car with a mid-mounted V12 engine that produces over 1,000 horsepower. The Invencible Lambo V12 has a top speed of over 200 mph and can accelerate from 0 to 60 mph in under 2 seconds.', '2023-06-04 11:47:47', NULL);

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

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`uid`, `cid`, `lob`, `token`, `date`) VALUES
(2, 2, 2, 'hari114612BMW-2-Series-Gran-Coupe-271220221147', '2023-06-04 17:12:09');

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
(2, 'hari', 'pokhara', 'a', '98080808080', 'hari@gmail.com', 'a9bcf1e4d7b95a22e2975c812d938889', '2023-06-04 07:45:39', '2023-06-04 08:25:55');

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
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
