-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Jun 15, 2021 at 07:03 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `room` varchar(255) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `noofadults` int(11) NOT NULL,
  `noofchildren` int(11) NOT NULL,
  `cost` int(11) NOT NULL,
  `booked_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `name`, `email`, `phone`, `room`, `checkin`, `checkout`, `address`, `noofadults`, `noofchildren`, `cost`, `booked_at`) VALUES
(1, 'Sherly', 'sherly60@gmail.com', 2147483647, 'luxury-5000', '2021-06-26', '2021-06-29', 'No.5,Gandhi Road', 5, 3, 0, '2021-06-15 16:13:58'),
(2, 'Zarah', 'zarah12@gmaill.com', 2147483647, 'cottage-8000', '2021-07-06', '2021-07-10', 'No.10,Bharathi Nagar', 10, 5, 0, '2021-06-15 16:22:09'),
(3, 'Deeps', 'deeps34@gmail.com', 2147483647, 'triple-4500', '2021-08-16', '2021-08-20', 'no.6,Great Flats', 3, 2, 0, '2021-06-15 16:44:20');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `eventname` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(255) NOT NULL,
  `cost` int(11) NOT NULL,
  `booked_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `name`, `phone`, `email`, `eventname`, `date`, `time`, `cost`, `booked_at`) VALUES
(1, 'Sherin', 2147483647, 'sherin01@gmail.com', 'meetings-20000', '2021-06-24', 'day', 0, '2021-06-15 16:31:04'),
(2, 'Andrea', 2147483647, 'andrea89@gmail.com', 'parties-25000', '2021-06-25', 'evening', 0, '2021-06-15 16:39:25'),
(3, 'Sarah', 2147483647, 'sarah05@gmail.com', 'weddings-50000', '2021-07-31', 'evening', 0, '2021-06-15 16:41:38');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `pack` varchar(255) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `noofadults` int(11) NOT NULL,
  `noofchildren` int(11) NOT NULL,
  `cost` int(11) NOT NULL,
  `booked_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `name`, `email`, `phone`, `pack`, `checkin`, `checkout`, `address`, `noofadults`, `noofchildren`, `cost`, `booked_at`) VALUES
(1, 'Sharon', 'sharon09@gmail.com', 2147483647, 'package2-20000', '2021-06-19', '2021-06-23', 'No.5,Kalkki street', 15, 6, 0, '2021-06-15 16:53:11'),
(2, 'Venice', 'venice56@gmail.com', 2147483647, 'package3-35000', '2021-06-30', '2021-07-06', 'N0.12,Green homes', 18, 10, 0, '2021-06-15 16:55:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `email`, `password`) VALUES
('Deepthi', 'deeps545@gmail.com', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
