-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2020 at 12:01 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mypeople`
--

-- --------------------------------------------------------

--
-- Table structure for table `meetup`
--

CREATE TABLE `meetup` (
  `id` int(225) NOT NULL,
  `userid` int(225) NOT NULL,
  `header` varchar(225) NOT NULL,
  `description` varchar(225) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `meetup`
--

INSERT INTO `meetup` (`id`, `userid`, `header`, `description`, `date`) VALUES
(7, 1, 'SmoothRoadCode', 'Smooth road code originele meetup', '2020-06-12'),
(8, 1, 'Bobs Auto shop meet', 'Een meet bij bobs enige echte auto shop.', '2001-09-11'),
(9, 1, 'Harisan Smoke en rem blok festival', 'Samen met harisan smoken en autos laten zien', '2069-02-28'),
(10, 1, 'Marks firrari orgy', 'Mark houd van saaf', '2020-06-28'),
(11, 1, 'Haitam zijn hentai tesla truck', 'Bekijk nu haitam zijn gloed nieuwe hentai tesla truck!!!', '2020-04-20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `meetup`
--
ALTER TABLE `meetup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `meetup`
--
ALTER TABLE `meetup`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
