-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2024 at 12:40 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bafraco`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `u_name` varchar(80) NOT NULL,
  `u_email` varchar(80) NOT NULL,
  `u_phonenumber` int(15) NOT NULL,
  `u_address` varchar(80) NOT NULL,
  `u_password` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `u_name`, `u_email`, `u_phonenumber`, `u_address`, `u_password`) VALUES
(9, 'Manzi David', 'm.david@alustudent.com', 791291003, 'Kigalui', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `u_toolname` varchar(80) DEFAULT NULL,
  `u_itemsnumber` int(11) DEFAULT NULL,
  `u_type` varchar(80) DEFAULT NULL,
  `u_tooldescription` varchar(255) DEFAULT NULL,
  `u_date` date DEFAULT NULL,
  `u_price` int(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `user_id`, `u_toolname`, `u_itemsnumber`, `u_type`, `u_tooldescription`, `u_date`, `u_price`) VALUES
(5, 2, 'Mangos', 11000, 'Very Good', 'I love these items', '2024-04-08', 10000),
(8, 2, 'APPLES', 11000, 'Very Good', 'I love these items', '2024-04-09', 10000),
(9, 2, 'APPLES', 11, 'Very Good', 'I love these items', '2024-04-10', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `tool`
--

CREATE TABLE `tool` (
  `id` int(11) NOT NULL,
  `u_toolname` varchar(80) NOT NULL,
  `u_itemsnumber` int(11) NOT NULL,
  `u_type` varchar(80) NOT NULL,
  `u_tooldescription` varchar(80) NOT NULL,
  `u_date` date NOT NULL,
  `u_price` int(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tool`
--

INSERT INTO `tool` (`id`, `u_toolname`, `u_itemsnumber`, `u_type`, `u_tooldescription`, `u_date`, `u_price`) VALUES
(5, 'APPLES', 11000, 'Very Good', 'I love these items', '2024-04-07', 10000),
(6, 'Silicone 500mg', 2, 'Not Good', 'From China', '2024-04-09', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(10) NOT NULL,
  `u_toolname` varchar(80) DEFAULT NULL,
  `u_item` varchar(80) DEFAULT NULL,
  `u_type` varchar(80) DEFAULT NULL,
  `u_amount` varchar(80) DEFAULT NULL,
  `u_status` varchar(80) DEFAULT NULL,
  `u_date` date DEFAULT NULL,
  `u_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `u_name` varchar(80) NOT NULL,
  `u_email` varchar(80) NOT NULL,
  `u_phonenumber` varchar(80) NOT NULL,
  `u_address` varchar(80) NOT NULL,
  `u_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `u_name`, `u_email`, `u_phonenumber`, `u_address`, `u_password`) VALUES
(1, 'Manzi', 'm.david@alustudent.com', '0791291003', 'Musanze', '12345'),
(2, 'Ganza', 'manzidavid111@gmail.com', '188171212', 'Kigalui', 'Chrispaul_120');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_phonenumber` (`u_phonenumber`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_ibfk_1` (`user_id`);

--
-- Indexes for table `tool`
--
ALTER TABLE `tool`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_name` (`u_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tool`
--
ALTER TABLE `tool`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
