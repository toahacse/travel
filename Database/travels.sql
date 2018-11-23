-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2018 at 07:45 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travels`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_category`
--

CREATE TABLE `add_category` (
  `id` int(11) NOT NULL,
  `category_Name` varchar(111) NOT NULL,
  `publication_Status` int(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_category`
--

INSERT INTO `add_category` (`id`, `category_Name`, `publication_Status`) VALUES
(2, 'Bangladesh', 1),
(6, 'India', 1),
(11, 'Nepal', 1);

-- --------------------------------------------------------

--
-- Table structure for table `add_images`
--

CREATE TABLE `add_images` (
  `id` int(111) NOT NULL,
  `img` text NOT NULL,
  `publication_Status` int(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_images`
--

INSERT INTO `add_images` (`id`, `img`, `publication_Status`) VALUES
(1, 'gallary/1.jpg', 1),
(2, 'gallary/2.jpg', 1),
(3, 'gallary/5.jpg', 1),
(4, 'gallary/6.jpg', 1),
(5, 'gallary/7.jpg', 1),
(6, 'gallary/a1.jpg', 1),
(7, 'gallary/a3.jpg', 1),
(8, 'gallary/h4.jpg', 1),
(9, 'gallary/c3.jpg', 1),
(10, 'gallary/process_4.jpg', 1),
(11, 'gallary/package6.jpg', 1),
(12, 'gallary/package3.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `add_package`
--

CREATE TABLE `add_package` (
  `id` int(111) NOT NULL,
  `category_Name` varchar(111) NOT NULL,
  `tour_name` varchar(111) NOT NULL,
  `tour_coust` int(111) NOT NULL,
  `duration` int(111) NOT NULL,
  `location` varchar(111) NOT NULL,
  `img` text NOT NULL,
  `tour_discription` text NOT NULL,
  `publication_Status` int(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_package`
--

INSERT INTO `add_package` (`id`, `category_Name`, `tour_name`, `tour_coust`, `duration`, `location`, `img`, `tour_discription`, `publication_Status`) VALUES
(1, 'Bangladesh', 'City tour', 5000, 5, 'Chittagong', 'images/s1.jpg', 'Chittagong Is very beautyful place in Bangladesh.......Chittagong Is very beautyful place in Bangladesh.......Chittagong Is very beautyful place in Bangladesh.......Chittagong Is very beautyful place in Bangladesh.......Chittagong Is very beautyful place in Bangladesh.......Chittagong Is very beautyful place in Bangladesh.......Chittagong Is very beautyful place in Bangladesh.......                            ', 1),
(2, 'Bangladesh', 'City tour', 8000, 7, 'Sylhet', 'images/stats.jpg', 'Sylhet very well place in Bangladesh....Sylhet very well place in Bangladesh....Sylhet very well place in Bangladesh....Sylhet very well place in Bangladesh....Sylhet very well place in Bangladesh....Sylhet very well place in Bangladesh....Sylhet very well place in Bangladesh....Sylhet very well place in Bangladesh....Sylhet very well place in Bangladesh....Sylhet very well place in Bangladesh....Sylhet very well place in Bangladesh....                      ', 1),
(3, 'Bangladesh', 'City tour', 4000, 3, 'Cox bazar', 'images/g8.jpg', 'Cox bazar vary well place in bangladesh...Cox bazar vary well place in bangladesh...Cox bazar vary well place in bangladesh...Cox bazar vary well place in bangladesh...Cox bazar vary well place in bangladesh...Cox bazar vary well place in bangladesh...Cox bazar vary well place in bangladesh...Cox bazar vary well place in bangladesh...\r\n                            ', 1),
(4, 'Bangladesh', 'District tour', 2000, 1, 'Rangamati', 'images/1.jpg', 'Rangamati very well place in Chittagong......Rangamati very well place in Chittagong......Rangamati very well place in Chittagong......Rangamati very well place in Chittagong......Rangamati very well place in Chittagong......Rangamati very well place in Chittagong......Rangamati very well place in Chittagong......Rangamati very well place in Chittagong......\r\n                            ', 1),
(5, 'India', 'City tour', 10000, 7, 'Kolkatha', 'images/c3.jpg', 'Kolkatha very well place in India....Kolkatha very well place in India....Kolkatha very well place in India....Kolkatha very well place in India....Kolkatha very well place in India....Kolkatha very well place in India....Kolkatha very well place in India....Kolkatha very well place in India....Kolkatha very well place in India....Kolkatha very well place in India....\r\n                            ', 1),
(6, 'India', 'City tour', 15000, 5, 'Mumbai', 'images/p1.jpg', 'Mumbai very well place in India....Mumbai very well place in India....Mumbai very well place in India....Mumbai very well place in India....Mumbai very well place in India....Mumbai very well place in India....Mumbai very well place in India....Mumbai very well place in India....Mumbai very well place in India....Mumbai very well place in India....\r\n                            ', 1),
(7, 'India', 'City tour', 20000, 5, 'Hyderabad', 'images/p2.jpg', 'Hyderabad very well place....Hyderabad very well place....Hyderabad very well place....Hyderabad very well place....Hyderabad very well place....Hyderabad very well place....Hyderabad very well place....Hyderabad very well place....Hyderabad very well place....Hyderabad very well place....Hyderabad very well place....\r\n                            ', 1),
(8, 'India', 'City tour', 25000, 5, 'Delhi', 'images/p6.jpg', 'Delhi is very well place....Delhi is very well place....Delhi is very well place....Delhi is very well place....Delhi is very well place....Delhi is very well place....Delhi is very well place....Delhi is very well place....Delhi is very well place....Delhi is very well place....\r\n                            ', 1),
(9, 'Nepal', 'City tour', 7000, 6, 'Kathmandu', 'images/g12.jpg', 'Kathmandu very well place...Kathmandu very well place...Kathmandu very well place...Kathmandu very well place...Kathmandu very well place...Kathmandu very well place...Kathmandu very well place...Kathmandu very well place...Kathmandu very well place...Kathmandu very well place...Kathmandu very well place...\r\n                            ', 1),
(11, 'Nepal', 'City tour', 10000, 5, 'Boudhanath Stupa', 'images/h5.jpg', 'Boudhanath Stupa very well place.....Boudhanath Stupa very well place.....Boudhanath Stupa very well place.....Boudhanath Stupa very well place.....Boudhanath Stupa very well place.....Boudhanath Stupa very well place.....Boudhanath Stupa very well place.....Boudhanath Stupa very well place.....Boudhanath Stupa very well place.....\r\n                            ', 1),
(12, 'Nepal', 'City tour', 23000, 7, 'Poon hill', 'images/package6.jpg', 'Poon hill very well place in Nepal....Poon hill very well place in Nepal....Poon hill very well place in Nepal....Poon hill very well place in Nepal....Poon hill very well place in Nepal....Poon hill very well place in Nepal....Poon hill very well place in Nepal....Poon hill very well place in Nepal....Poon hill very well place in Nepal....\r\n                            ', 1),
(13, 'Nepal', 'City tour', 9000, 4, 'Mountaints', 'images/s2.jpg', 'Mountaints very well place in Nepal....Mountaints very well place in Nepal....Mountaints very well place in Nepal....Mountaints very well place in Nepal....Mountaints very well place in Nepal....Mountaints very well place in Nepal....Mountaints very well place in Nepal....Mountaints very well place in Nepal....Mountaints very well place in Nepal....Mountaints very well place in Nepal....\r\n                            ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(111) NOT NULL,
  `name` varchar(111) NOT NULL,
  `phoneNo` varchar(999) NOT NULL,
  `email` varchar(111) NOT NULL,
  `address` text NOT NULL,
  `people` int(111) NOT NULL,
  `start` varchar(111) NOT NULL,
  `end1` varchar(111) NOT NULL,
  `total` int(111) NOT NULL,
  `payment_type` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `name`, `phoneNo`, `email`, `address`, `people`, `start`, `end1`, `total`, `payment_type`) VALUES
(13, 'md.ismat toaha', '1834578954', 'toaha@gmail.com', 'jkgbvf,jbzxuvrelgvibfdvlibudb gfjuevbdcjdfcertg5s                   ', 5, 'grsdfgvrfdgv', 'fddgv', 2500, 'Cash'),
(14, 'md.ismat toaha', '1834578954', 'toaha@gmail.com', 'jkgbvf,jbzxuvrelgvibfdvlibudb gfjuevbdcjdfcertg5s                   ', 5, 'grsdfgvrfdgv', 'fddgv', 2500, 'Cash'),
(15, 'md.ismat toaha', '123456789', 'toaha@gmail.com', ' toaha@gmail.comtoaha@gmail.com..toaha@gmail.com                       ', 5, 'reat', 'egdart', 2000, 'Cash'),
(16, 'md.ismat toaha', '2147483647', 'toaha@gmail.com', ' toaha@gmail.comtoaha@gmail.com..toaha@gmail.com                       ', 5, 'reat', 'egdart', 2000, 'Cash'),
(17, 'md.ismat toaha', '5465765767', 'toaha@gmail.com', '  bhgfxnjvbn bvn b                      ', 5, 'Chittagong', 'Chittagong', 25000, 'Cash');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(111) NOT NULL,
  `name` varchar(111) NOT NULL,
  `email` varchar(111) NOT NULL,
  `password` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'Md.Ismat toaha', 'toaha@gmail.com', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_category`
--
ALTER TABLE `add_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_images`
--
ALTER TABLE `add_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_package`
--
ALTER TABLE `add_package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_category`
--
ALTER TABLE `add_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `add_images`
--
ALTER TABLE `add_images`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `add_package`
--
ALTER TABLE `add_package`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
