-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2022 at 12:11 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `santisima`
--

-- --------------------------------------------------------

--
-- Table structure for table `payment_logs`
--

CREATE TABLE `payment_logs` (
  `id` int(11) NOT NULL,
  `user` varchar(25) NOT NULL,
  `token` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `amount` varchar(100) NOT NULL,
  `reference` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admins`
--

CREATE TABLE `tbl_admins` (
  `id` int(11) NOT NULL,
  `avatar` varchar(50) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admins`
--

INSERT INTO `tbl_admins` (`id`, `avatar`, `fname`, `lname`, `username`, `password`) VALUES
(1, '534.jpg', 'Noel', 'Mallari', 'admin', '$2y$10$fleNTbudz8vpNcBY4zPccORTnTFJuDZsSN7.4Tx5rydDglnXumq5K');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_billings`
--

CREATE TABLE `tbl_billings` (
  `id` int(11) NOT NULL,
  `user` varchar(10) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `postal` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_logs`
--

CREATE TABLE `tbl_logs` (
  `id` int(11) NOT NULL,
  `user` varchar(25) NOT NULL,
  `hash` varchar(200) NOT NULL,
  `reference` varchar(25) NOT NULL,
  `token` varchar(25) NOT NULL,
  `package_name` varchar(50) NOT NULL,
  `package_type` varchar(50) NOT NULL,
  `package_class` varchar(25) NOT NULL,
  `map_place` varchar(25) NOT NULL,
  `amount` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_packages`
--

CREATE TABLE `tbl_packages` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `package_code` varchar(15) NOT NULL,
  `package_name` varchar(25) NOT NULL,
  `description` varchar(255) NOT NULL,
  `phase` varchar(25) NOT NULL,
  `package_class` varchar(25) NOT NULL,
  `price` varchar(25) NOT NULL,
  `terms` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_packages`
--

INSERT INTO `tbl_packages` (`id`, `image`, `package_code`, `package_name`, `description`, `phase`, `package_class`, `price`, `terms`) VALUES
(1, '123.png', '104345', 'Lawn Lot', 'Lawn Lot An expanse field of trimmed grass offfering an idyllic resting place for your loved ones with a space suitable for two (2) on a 2.5 sqm lot.', 'Phase 2', 'Premier', '5000', '10000'),
(2, '123.png', '124446', 'Lawn Lot', 'Lawn Lot An expanse field of trimmed grass offfering an idyllic resting place for your loved ones with a space suitable for two (2) on a 2.5 sqm lot.', 'Phase 2', 'Classic', '5000', '10000'),
(3, '123.png', '104768', 'Lawn Lot', 'Lawn Lot An expanse field of trimmed grass offfering an idyllic resting place for your loved ones with a space suitable for two (2) on a 2.5 sqm lot.', 'Phase 1', 'Classic', '5000', '10000'),
(4, '123.png', '104787', 'Lawn Lot', 'Lawn Lot An expanse field of trimmed grass offfering an idyllic resting place for your loved ones with a space suitable for two (2) on a 2.5 sqm lot.', 'Phase 1', 'Premier', '5000', '10000'),
(5, '654.png', '837391', 'Apartment Niche', 'Apartment Niche An Multi-leveled structure (A, B, C & D) offering an idyllic resting place for your loved ones max of 1 body or 2 sets of bone remains on a 2.5 sqm lot.', 'Front View', 'Level 1', '5000', '10000'),
(6, '654.png', '837392', 'Apartment Niche', 'Apartment Niche An Multi-leveled structure (A, B, C & D) offering an idyllic resting place for your loved ones max of 1 body or 2 sets of bone remains on a 2.5 sqm lot.', 'Front View', 'Level 2', '5000', '10000'),
(7, '654.png', '837393', 'Apartment Niche', 'Apartment Niche An Multi-leveled structure (A, B, C & D) offering an idyllic resting place for your loved ones max of 1 body or 2 sets of bone remains on a 2.5 sqm lot.', 'Front View', 'Level 3', '5000', '10000'),
(8, '654.png', '837394', 'Apartment Niche', 'Apartment Niche An Multi-leveled structure (A, B, C & D) offering an idyllic resting place for your loved ones max of 1 body or 2 sets of bone remains on a 2.5 sqm lot.', 'Front View', 'Level 4', '5000', '10000'),
(9, '654.png', '878331', 'Apartment Niche', 'Apartment Niche An Multi-leveled structure (A, B, C & D) offering an idyllic resting place for your loved ones max of 1 body or 2 sets of bone remains on a 2.5 sqm lot.', 'Back View', 'Level 1', '5000', '10000'),
(10, '654.png', '878332', 'Apartment Niche', 'Apartment Niche An Multi-leveled structure (A, B, C & D) offering an idyllic resting place for your loved ones max of 1 body or 2 sets of bone remains on a 2.5 sqm lot.', 'Back View', 'Level 2', '5000', '10000'),
(11, '654.png', '878333', 'Apartment Niche', 'Apartment Niche An Multi-leveled structure (A, B, C & D) offering an idyllic resting place for your loved ones max of 1 body or 2 sets of bone remains on a 2.5 sqm lot.', 'Back View', 'Level 3', '5000', '10000'),
(12, '654.png', '878334', 'Apartment Niche', 'Apartment Niche An Multi-leveled structure (A, B, C & D) offering an idyllic resting place for your loved ones max of 1 body or 2 sets of bone remains on a 2.5 sqm lot.', 'Back View', 'Level 4', '5000', '10000'),
(13, '937.png', '094345', 'Single Distinctive', 'Single Distinctive An above ground granite/marble flat niche an idyllic resting place for your loved ones max of 2 fresh bodies and 6 sets of bones on a 1 meter x 2.5 meter lot.', 'Phase 1', '', '5000', '10000'),
(14, '937.png', '094356', 'Single Distinctive', 'Single Distinctive An above ground granite/marble flat niche an idyllic resting place for your loved ones max of 2 fresh bodies and 6 sets of bones on a 1 meter x 2.5 meter lot.', 'Phase 2', 'Premier', '5000', '10000'),
(15, '937.png', '094357', 'Single Distinctive', 'Single Distinctive An above ground granite/marble flat niche an idyllic resting place for your loved ones max of 2 fresh bodies and 6 sets of bones on a 1 meter x 2.5 meter lot.', 'Phase 2', 'Classic', '5000', '10000'),
(16, '577.png', '759283', 'Double Distinctive', 'Double Distinctive An above ground granite/marble flat niche an idyllic resting place for your loved ones with a max of 4 fresh bodies and 12 sets of bones on a 2 meters x 2.5 meters lot.', 'Phase 1', '', '5000', '10000'),
(17, '577.png', '759286', 'Double Distinctive', 'Double Distinctive An above ground granite/marble flat niche an idyllic resting place for your loved ones with a max of 4 fresh bodies and 12 sets of bones on a 2 meters x 2.5 meters lot.', 'Phase 2', '', '5000', '10000'),
(18, '946.png', '827842', 'Single Niche', 'Single Niche combination of above & underground interments for bone and bodies an idyllic resting place for your loved ones with a size of 10.5 sqm lot.', 'Phase 1', '', '5000', '10000'),
(19, '946.png', '827848', 'Single Niche', 'Single Niche combination of above & underground interments for bone and bodies an idyllic resting place for your loved ones with a size of 10.5 sqm lot.', 'Phase 2', '', '5000', '10000');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payments`
--

CREATE TABLE `tbl_payments` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `user` varchar(25) NOT NULL,
  `token` varchar(10) NOT NULL,
  `package_type` varchar(50) NOT NULL,
  `balance` varchar(255) NOT NULL,
  `paid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_prices`
--

CREATE TABLE `tbl_prices` (
  `id` int(11) NOT NULL,
  `package_code` varchar(15) NOT NULL,
  `description` varchar(25) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_prices`
--

INSERT INTO `tbl_prices` (`id`, `package_code`, `description`, `price`) VALUES
(1, '104345', 'At-need', 12000),
(2, '104345', 'Pre-need', 15000),
(3, '104345', 'Installment', 13000),
(4, '124446', 'At-need', 5000),
(5, '124446', 'Pre-need', 10000),
(6, '124446', 'Installment', 15000),
(7, '104768', 'At-need', 5000),
(8, '104768', 'Pre-need', 10000),
(9, '104768', 'Installment', 15000),
(10, '104787', 'At-need', 5000),
(11, '104787', 'Pre-need', 10000),
(12, '104787', 'Installment', 15000),
(13, '094345', 'At-need', 5000),
(14, '094345', 'Pre - need', 10000),
(15, '094345', 'Installment', 15000),
(16, '094356', 'At-need', 5000),
(17, '094356', 'Pre-need', 10000),
(18, '094356', 'Installment', 15000),
(19, '094357', 'At-need', 5000),
(20, '094357', 'Pre-need', 10000),
(21, '094357', 'Installment', 15000),
(22, '759283', 'At-need', 5000),
(23, '759283', 'Pre-need', 10000),
(24, '759283', 'Installment', 15000),
(25, '759286', 'At-need', 5000),
(26, '759286', 'Pre-need', 10000),
(27, '759286', 'Installment', 15000),
(28, '827842', 'At-need', 5000),
(29, '827842', 'Pre-need', 10000),
(30, '827842', 'Installment', 15000),
(31, '827848', 'At-need', 5000),
(32, '827848', 'Pre-need', 10000),
(33, '827848', 'Installment', 15000),
(34, '837391', 'Front View - Level 1', 5000),
(35, '837392', 'Front View - Level 2', 5000),
(36, '837393', 'Front View - Level 3', 5000),
(37, '837394', 'Front View - Level 4', 5000),
(38, '878331', 'Back View - Level 1', 5000),
(39, '878332', 'Back View - Level 2', 5000),
(40, '878333', 'Back View - Level 3', 5000),
(41, '878334', 'Back View - Level 4', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_records`
--

CREATE TABLE `tbl_records` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` varchar(10) NOT NULL,
  `date_birth` date NOT NULL,
  `date_death` date NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transactions`
--

CREATE TABLE `tbl_transactions` (
  `id` int(11) NOT NULL,
  `token` varchar(10) NOT NULL,
  `package_type` varchar(25) NOT NULL,
  `user` varchar(10) NOT NULL,
  `package_code` varchar(25) NOT NULL,
  `hash` varchar(255) NOT NULL,
  `reference` varchar(150) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `method` varchar(20) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `package_name` varchar(50) NOT NULL,
  `package_class` varchar(25) NOT NULL,
  `map_place` varchar(50) NOT NULL,
  `status` varchar(30) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `avatar` varchar(50) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `code` varchar(20) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payment_logs`
--
ALTER TABLE `payment_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admins`
--
ALTER TABLE `tbl_admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_billings`
--
ALTER TABLE `tbl_billings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_logs`
--
ALTER TABLE `tbl_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_packages`
--
ALTER TABLE `tbl_packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_payments`
--
ALTER TABLE `tbl_payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_prices`
--
ALTER TABLE `tbl_prices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_records`
--
ALTER TABLE `tbl_records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_transactions`
--
ALTER TABLE `tbl_transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payment_logs`
--
ALTER TABLE `payment_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_admins`
--
ALTER TABLE `tbl_admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_billings`
--
ALTER TABLE `tbl_billings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_logs`
--
ALTER TABLE `tbl_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_packages`
--
ALTER TABLE `tbl_packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_payments`
--
ALTER TABLE `tbl_payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_prices`
--
ALTER TABLE `tbl_prices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `tbl_records`
--
ALTER TABLE `tbl_records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_transactions`
--
ALTER TABLE `tbl_transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
