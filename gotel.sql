-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 29, 2022 at 10:02 AM
-- Server version: 5.7.33
-- PHP Version: 8.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking-hotel`
--

CREATE TABLE `booking-hotel` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `nama-User` varchar(75) NOT NULL,
  `hotelId` int(11) NOT NULL,
  `nama-Hotel` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `booking-travel`
--

CREATE TABLE `booking-travel` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `nama-user` varchar(75) NOT NULL,
  `travelId` int(11) NOT NULL,
  `nama-travel` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `id` int(11) NOT NULL,
  `nama` int(11) NOT NULL,
  `kota` varchar(75) NOT NULL,
  `foto` varchar(75) NOT NULL,
  `rating` varchar(75) NOT NULL,
  `jenis` varchar(75) NOT NULL,
  `fasilitas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE `kamar` (
  `id` int(11) NOT NULL,
  `jenis-kamar` varchar(75) NOT NULL,
  `harga` int(11) NOT NULL,
  `hotelId` int(11) NOT NULL,
  `foto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `travelagen`
--

CREATE TABLE `travelagen` (
  `id` int(11) NOT NULL,
  `nama` varchar(75) NOT NULL,
  `kota` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(75) NOT NULL,
  `email` varchar(75) NOT NULL,
  `password` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking-hotel`
--
ALTER TABLE `booking-hotel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `HotelId` (`hotelId`),
  ADD KEY `UserId` (`userId`);

--
-- Indexes for table `booking-travel`
--
ALTER TABLE `booking-travel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `travelId` (`travelId`),
  ADD KEY `userId-booking` (`userId`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hotel-kamar` (`hotelId`);

--
-- Indexes for table `travelagen`
--
ALTER TABLE `travelagen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking-hotel`
--
ALTER TABLE `booking-hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `booking-travel`
--
ALTER TABLE `booking-travel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kamar`
--
ALTER TABLE `kamar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `travelagen`
--
ALTER TABLE `travelagen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking-hotel`
--
ALTER TABLE `booking-hotel`
  ADD CONSTRAINT `HotelId` FOREIGN KEY (`hotelId`) REFERENCES `hotel` (`id`),
  ADD CONSTRAINT `UserId` FOREIGN KEY (`userId`) REFERENCES `user` (`id`);

--
-- Constraints for table `booking-travel`
--
ALTER TABLE `booking-travel`
  ADD CONSTRAINT `travelId` FOREIGN KEY (`travelId`) REFERENCES `travelagen` (`id`),
  ADD CONSTRAINT `userId-booking` FOREIGN KEY (`userId`) REFERENCES `user` (`id`);

--
-- Constraints for table `kamar`
--
ALTER TABLE `kamar`
  ADD CONSTRAINT `hotel-kamar` FOREIGN KEY (`hotelId`) REFERENCES `hotel` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
