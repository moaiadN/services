-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2023 at 12:34 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uni-services`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `phone_number`, `message`) VALUES
(1, '', '', '', '', ''),
(2, '', 'osama@gmail.com', '', '0797777777', ''),
(3, '', 'o3sz2000@gmail.com', '', '0797777777', ''),
(4, '', 'osama@gmail.com', '', '0797777777', ''),
(5, '', 'sara@sara.com', '', '07777777765', ''),
(6, '', 'osama@gmail.com', '', '0797777777', ''),
(7, 'Uni-Services', 'sara@sara.com', 'ghbjnklm', 'uigijknlm', 'zxcvghjkpoipuo7isdfvbjkl'),
(8, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(50) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `fname`, `lname`, `email`, `phone_number`, `password`, `user_type`) VALUES
(1, 'osama', 'zubaidi', 'osama@gmail.com', '0797777777', '123456', 'admin'),
(4, 'sara', 'batineh', 'sara@sara.com', '0797777777', '123456', 'service_provider'),
(8, 'ali', 'Ali', 'a@a.a', '0798765432', '123', 'user'),
(14, 'salem', 'hamdan', 'user1@gmail.com', '0799954850', 'd41d8cd98f00b204e9800998ecf8427e', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `user_services`
--

CREATE TABLE `user_services` (
  `id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `number_of_beds` tinyint(20) NOT NULL,
  `number_of_bathrooms` tinyint(20) NOT NULL,
  `location` varchar(255) NOT NULL,
  `categories` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_services`
--

INSERT INTO `user_services` (`id`, `image`, `price`, `title`, `details`, `number_of_beds`, `number_of_bathrooms`, `location`, `categories`, `fname`, `lname`, `email`, `phone_number`, `status`) VALUES
(1, '6421737f11eab.jpg', '344', 'osama for sell', 'for free', 2, 2, 'irbid', 'Student Apartments', 'osama', 'zubaidi', 'osama@gmail.com', '0797777777', '1'),
(2, '64353aec87de3.jpg', '100', 'libary', 'big library in yarmouk university ', 23, 2, 'irbid', ' Study Places', 'osama', 'zubaidi', 'osama@gmail.com', '0797777777', '0'),
(3, '64353deb10439.png', '100', 'asdfghjkl', 'sdfghjkl', 2, 4, 'irbid', ' Study Places', 'osama', 'batineh', 'sara@sara.com', '07777777765', 'pending'),
(4, '64497c0c14201.jpg', '100', 'person', 'big library in yarmouk university ', 2, 1, 'irbid', ' Study Places', 'osama', 'zubaidi', 'o3sz2000@gmail.com', '07777777765', 'pending'),
(5, '645bff863867b.png', '100', 'apartment', 'for free', 2, 1, 'irbid', 'Student Apartments', 'osama', 'zubaidi', 'osama@gmail.com', '0797777777', 'pending'),
(6, '64620ad64b5a5.jpg', '', '', '', 0, 0, '', 'Select Categorie', '', '', '', '', 'pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_services`
--
ALTER TABLE `user_services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user_services`
--
ALTER TABLE `user_services`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
