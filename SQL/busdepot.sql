-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2022 at 01:44 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `busdepot`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) CHARACTER SET utf8 NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `age` int(4) NOT NULL,
  `gender` varchar(25) CHARACTER SET utf8 NOT NULL,
  `contact` bigint(20) NOT NULL,
  `username` varchar(100) CHARACTER SET utf8 NOT NULL,
  `password` varchar(100) CHARACTER SET utf8 NOT NULL,
  `photo` varchar(255) CHARACTER SET utf8 NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `fullname`, `email`, `age`, `gender`, `contact`, `username`, `password`, `photo`, `created_on`, `updated_on`) VALUES
(1, 'Rohit Karegaonkar', 'admin.rk@saibus.com', 20, 'Male', 0, 'admin.rk@saibus.com', '1234', 'karan photo kk.jpg', '2022-05-06 01:42:00', '2022-05-06 01:42:00'),
(2, 'Akshay Gaikwad', 'akshaygaikwad@saibus.com', 22, 'Male', 1212121212, 'akshaygaikwad@saibus.com', '1234', 'HD-wallpaper-jai-shree-krishna-bhagwan-lord-radhe-shree-krishna-shri-krishna.jpg', '2022-05-06 01:42:53', '2022-05-06 01:42:53');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 NOT NULL,
  `subject` varchar(255) CHARACTER SET utf8 NOT NULL,
  `message` varchar(1024) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(2, 'Ro', 'Tri@t.com', 'Final Check Audit', 'Verification Done');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 NOT NULL,
  `subject` varchar(255) CHARACTER SET utf8 NOT NULL,
  `message` varchar(1024) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `subject`, `message`) VALUES
(2, 'Ro', 'Tri@t.com', 'Work Check', 'Done'),
(3, 'Akshay', 'akshaygaikwad@saibus.com', 'Hello', 'Hi There');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(11) NOT NULL,
  `buscode` varchar(100) CHARACTER SET utf8 NOT NULL,
  `source` varchar(255) CHARACTER SET utf8 NOT NULL,
  `dest` varchar(255) CHARACTER SET utf8 NOT NULL,
  `distance` int(100) NOT NULL,
  `fare` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `buscode`, `source`, `dest`, `distance`, `fare`) VALUES
(1, 'PM001', 'Pune', 'Mumbai', 150, 500),
(2, 'MP001', 'MUMBAI', 'PUNE', 150, 400);

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `id` int(10) NOT NULL,
  `username` varchar(100) CHARACTER SET utf8 NOT NULL,
  `buscode` varchar(255) CHARACTER SET utf8 NOT NULL,
  `source` varchar(100) CHARACTER SET utf8 NOT NULL,
  `dest` varchar(100) CHARACTER SET utf8 NOT NULL,
  `total_tickets` int(10) NOT NULL,
  `journey_date` date NOT NULL,
  `journey_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`id`, `username`, `buscode`, `source`, `dest`, `total_tickets`, `journey_date`, `journey_time`) VALUES
(6, 'argaikwad96@gmail.com', 'PM001', 'Pune', 'Mumbai', 1, '2022-05-24', '20:40:00'),
(7, 'Tri@t.com', 'MP001', 'MUMBAI', 'PUNE', 1, '2022-06-03', '20:38:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `age` int(4) NOT NULL,
  `gender` varchar(25) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `age`, `gender`, `contact`, `username`, `password`, `photo`, `created_on`, `modified_on`) VALUES
(9, 'Akshay Gaikwad', 'argaikwad96@gmail.com', 20, 'Male', 7845458964, 'argaikwad96@gmail.com', '01234', 'Screenshot (4).png', '2022-04-15 04:47:21', '2022-05-07 11:10:00'),
(13, 'Karan P', 'sq@s.com', 20, 'Male', 0, 'sq@s.com', '1234', 'Screenshot (13).png', '2022-04-15 04:07:59', '2022-05-06 15:45:14'),
(14, 'Ro', 'Ro@rk.com', 20, 'Male', 124511452156, 'ro@rk.com', '1234', 'Screenshot (21).png', '2022-04-15 04:09:06', '2022-04-15 04:09:06'),
(15, 'Trial', 'Tri@t.com', 18, 'Male', 12345, 'Tri@t.com', '123', 'karan photo kk.jpg', '2022-05-06 00:57:40', '2022-05-06 00:57:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `buscode` (`buscode`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
