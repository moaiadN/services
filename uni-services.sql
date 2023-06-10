-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2023 at 08:25 PM
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
-- Table structure for table `added_imgs`
--

CREATE TABLE `added_imgs` (
  `id` int(11) NOT NULL,
  `imgName` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `servId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `added_imgs`
--

INSERT INTO `added_imgs` (`id`, `imgName`, `title`, `servId`) VALUES
(179, '1686134812img3.jpg', 'books', 140),
(180, '1686134812img4.jpg', 'books', 140),
(181, '1686134812img5.jpg', 'books', 140),
(188, '1686134812img3.jpg', 'rooms', 141),
(189, '1686134812img4.jpg', 'rooms', 141),
(190, '1686134812img5.jpg', 'rooms', 141),
(194, '1686134812img3.jpg', 'matabikh', 142),
(195, '1686134812img4.jpg', 'matabikh', 142),
(196, '1686134812img5.jpg', 'matabikh', 142);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(100) NOT NULL,
  `cat_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cat_name`, `cat_img`) VALUES
(1, 'Apartments', 'img16.jpg'),
(2, 'Study Places', 'img17.jpg'),
(3, 'Libraries', 'img20.jpg');

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
(47, 'ali', 'ss@ss.cc', 'asdsa', '0789465131', 'السلام عليكم و رحمة الله وبركاته');

-- --------------------------------------------------------

--
-- Table structure for table `providerid`
--

CREATE TABLE `providerid` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `id_number` int(20) NOT NULL,
  `registerId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `providerid`
--

INSERT INTO `providerid` (`id`, `image`, `id_number`, `registerId`) VALUES
(5, 'sc (2).png', 2147483647, 31),
(6, 'sc (7).png', 2147483647, 47),
(7, 'sc (2).png', 2147483647, 48);

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
(1, 'osama', 'zubaidi', 'osama@gmail.com', '0797777777', 'e10adc3949ba59abbe56e057f20f883e', 'admin'),
(4, 'sara', 'batineh', 'sara@sara.com', '0797777777', 'e10adc3949ba59abbe56e057f20f883e', 's_provider'),
(24, 'salem', 'hamdan', 'user1@gmail.com', '0799954850', 'e10adc3949ba59abbe56e057f20f883e', 'admin'),
(26, 'ali', 'Ali', 'a@a.a', '0798765432', 'e10adc3949ba59abbe56e057f20f883e', 'user'),
(30, 'Adnan', 'Mars', 'adnan@adnan.com', '7896541230', '4297f44b13955235245b2497399d7a93', 'user'),
(31, 'Waled', 'Mohammad', 'so@so.so', '0789465131', '4297f44b13955235245b2497399d7a93', 's_provider'),
(47, 'Taha', 'Ramiz', 'so@so2.so', '0789465131', '4297f44b13955235245b2497399d7a93', 'pending'),
(48, 'Samaan', 'salili', 'so@so3.so', '0789465131', '4297f44b13955235245b2497399d7a93', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int(11) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(50) NOT NULL,
  `serviceCat` varchar(100) NOT NULL,
  `serviceTitle` varchar(100) NOT NULL,
  `servicePrice` int(20) NOT NULL,
  `serviceId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_services`
--

CREATE TABLE `user_services` (
  `id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `number_of_beds` tinyint(20) NOT NULL,
  `number_of_bathrooms` tinyint(20) NOT NULL,
  `city` varchar(255) NOT NULL,
  `categories` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_services`
--

INSERT INTO `user_services` (`id`, `image`, `price`, `title`, `details`, `number_of_beds`, `number_of_bathrooms`, `city`, `categories`, `fname`, `lname`, `email`, `phone_number`, `cat_id`, `status`) VALUES
(140, '1686134812-img1.jpg', '122', 'books', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 1, 1, 'irbid', 'Apartments', 'وليد', 'محمد', 'a@a.a', '0789465131', 1, 'in_service'),
(141, '1686325812-img1.jpg', '111', 'rooms', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 1, 1, 'irbid', 'Apartments', 'وليد', 'محمد', 'a@a.a', '0789465131', 1, 'in_service'),
(142, '1686325812img4.jpg', '222', 'matabikh', 'fgh tjrtyj ryuryujryu rtyjru jryu', 1, 1, 'irbid', 'Apartments', 'وليد', 'محمد', 'a@a.a', '0789465131', 1, 'in_service');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `added_imgs`
--
ALTER TABLE `added_imgs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `servId` (`servId`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `providerid`
--
ALTER TABLE `providerid`
  ADD PRIMARY KEY (`id`),
  ADD KEY `registerId` (`registerId`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `serviceId` (`serviceId`);

--
-- Indexes for table `user_services`
--
ALTER TABLE `user_services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `added_imgs`
--
ALTER TABLE `added_imgs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=197;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `providerid`
--
ALTER TABLE `providerid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `user_services`
--
ALTER TABLE `user_services`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `added_imgs`
--
ALTER TABLE `added_imgs`
  ADD CONSTRAINT `added_imgs_ibfk_1` FOREIGN KEY (`servId`) REFERENCES `user_services` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `providerid`
--
ALTER TABLE `providerid`
  ADD CONSTRAINT `providerid_ibfk_1` FOREIGN KEY (`registerId`) REFERENCES `register` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `requests`
--
ALTER TABLE `requests`
  ADD CONSTRAINT `requests_ibfk_1` FOREIGN KEY (`serviceId`) REFERENCES `user_services` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_services`
--
ALTER TABLE `user_services`
  ADD CONSTRAINT `user_services_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
