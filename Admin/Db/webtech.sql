-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2021 at 05:49 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webtech`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(30) CHARACTER SET utf8 NOT NULL,
  `username` varchar(30) CHARACTER SET utf8 NOT NULL,
  `email` varchar(30) CHARACTER SET utf8 NOT NULL,
  `subject` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `username`, `email`, `subject`) VALUES
(7, 'Law', 'admin', 'law@gmail.com', 'Can\'t Login'),
(8, 'arman', 'arman1578', 'arman@gmail.com', 'adasd'),
(9, 'arman', 'arman1578', 'law@gmail.com', 'Need Help');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `id` int(11) NOT NULL,
  `name` varchar(30) CHARACTER SET utf8 NOT NULL,
  `quantity` int(30) NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`id`, `name`, `quantity`, `type`) VALUES
(1, 'Adovas', 100, 'Syrup'),
(2, 'Ace Plus', 200, 'Tablet'),
(3, 'Alatrol', 50, 'Syrup'),
(4, 'Napa Extra', 200, 'Tablet');

-- --------------------------------------------------------

--
-- Table structure for table `issues`
--

CREATE TABLE `issues` (
  `ID` int(11) NOT NULL,
  `Username` varchar(10) NOT NULL,
  `User Type` text NOT NULL,
  `Priority` text NOT NULL,
  `Comments` text NOT NULL,
  `Progress` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `issues`
--

INSERT INTO `issues` (`ID`, `Username`, `User Type`, `Priority`, `Comments`, `Progress`) VALUES
(1, 'alan', 'owner', 'Major', 'website crashed Need update', 'Fixed '),
(2, 'rock', 'stuff', 'Minor', 'page not loading', 'Fixed'),
(3, 'roy', 'stuff', 'Major', 'can\'t login', 'Working'),
(4, 'james', 'stuff', 'Minor', 'Couldn\'t find reg option', 'Fixed'),
(9, 'Robinhood', 'Owner', 'Minor', 'Can\'t get payment option', 'Working');

-- --------------------------------------------------------

--
-- Table structure for table `orderstock`
--

CREATE TABLE `orderstock` (
  `id` int(30) NOT NULL,
  `name` varchar(30) CHARACTER SET utf8 NOT NULL,
  `email` varchar(30) CHARACTER SET utf8 NOT NULL,
  `amount` int(30) NOT NULL,
  `payment` int(30) NOT NULL,
  `displayable` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderstock`
--

INSERT INTO `orderstock` (`id`, `name`, `email`, `amount`, `payment`, `displayable`) VALUES
(6, 'Napa', 'arman@gmail.com', 600, 10000, 'No'),
(7, 'Napa', 'arman@gmail.com', 500, 10000, 'Yes'),
(8, 'Adovas', 'arman@gmail.com', 50, 1000, 'Yes'),
(9, 'Napa', 'arman@gmail.com', 50, 1000, 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `buyingPrice` int(15) NOT NULL,
  `sellingPrice` int(15) NOT NULL,
  `displayable` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `buyingPrice`, `sellingPrice`, `displayable`) VALUES
(10, 'January', 7000, 10000, 'Yes'),
(11, 'February', 10000, 150000, 'Yes'),
(12, 'June', 7000, 20000, 'Yes'),
(13, 'July', 9000, 15000, 'Yes'),
(15, 'September', 40000, 75000, 'No');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `email`, `username`, `password`) VALUES
(23, 'ace', 'a@gmail.com', 'admin', 'a@gmail.com'),
(24, 'arman1578', 'arman@gmail.com', 'admin', 'arman@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issues`
--
ALTER TABLE `issues`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `orderstock`
--
ALTER TABLE `orderstock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `issues`
--
ALTER TABLE `issues`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orderstock`
--
ALTER TABLE `orderstock`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
