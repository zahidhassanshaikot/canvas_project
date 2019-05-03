-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2019 at 09:47 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `canvas`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(10) UNSIGNED NOT NULL,
  `demo_id` int(100) UNSIGNED DEFAULT NULL,
  `name` varchar(191) DEFAULT NULL,
  `email` varchar(191) DEFAULT NULL,
  `comment` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `demo_id`, `name`, `email`, `comment`, `created_at`, `updated_at`) VALUES
(1, 2, 'John Snow', 'ex@gmail.com', 'nice', '2019-04-30 06:55:53', '2019-04-30 06:55:53'),
(2, 2, 'Robartson', 'z@gmail.com', 'wow nice', '2019-04-30 07:04:14', '2019-04-30 07:04:14');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(10) UNSIGNED NOT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone_no` varchar(191) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `fname`, `lname`, `email`, `phone_no`, `password`, `created_at`, `updated_at`) VALUES
(3, 'Devid', 'Alaba', 'z@gmail.com', '01985986986', '$2y$10$5Cqqpp.fvCydGwEhOOXKp.zakkllrZVJ6rmQ1EoIpI496mb8tP4u6', '2019-04-30 01:12:28', '2019-04-30 01:12:28'),
(4, 'Mark', 'Ramos', 'ex@gmail.com', '01985986986', '$2y$10$jNOK84N3KOyJgG/OyK3Hd.YW3nL9umqvfVlntMH7ul45GJNAu8lja', '2019-05-01 06:27:02', '2019-05-01 06:27:02');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(10) NOT NULL,
  `customer_id` int(10) UNSIGNED DEFAULT NULL,
  `admin` tinyint(4) DEFAULT NULL,
  `message` text,
  `status` varchar(100) DEFAULT 'Unseen',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `customer_id`, `admin`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1, 3, NULL, 'Unseen', 'Seen', '2019-05-02 23:12:00', '2019-05-03 00:45:21'),
(2, 3, NULL, 'hi', 'Seen', '2019-05-02 23:12:21', '2019-05-03 00:45:21'),
(3, 4, NULL, 'hi', 'Seen', NULL, '2019-05-03 00:45:26'),
(4, 3, 1, 'how can i help you?', 'Seen', '2019-05-03 00:37:29', '2019-05-03 00:45:21'),
(5, 4, 1, 'hlw', 'Seen', '2019-05-03 00:46:14', '2019-05-03 00:46:15');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_demo`
--

CREATE TABLE `order_demo` (
  `id` int(10) NOT NULL,
  `name` varchar(191) DEFAULT NULL,
  `demo_id` int(191) DEFAULT NULL,
  `customer_id` int(10) UNSIGNED NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone_no` varchar(200) DEFAULT NULL,
  `quentity` int(200) DEFAULT NULL,
  `status` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_demo`
--

INSERT INTO `order_demo` (`id`, `name`, `demo_id`, `customer_id`, `address`, `email`, `phone_no`, `quentity`, `status`, `created_at`, `updated_at`) VALUES
(1, 'ex', 3, 4, 'shukrabadh, Dhaka Bangladesh', 'ex@gmail.com', '01985986986', 35, 'Rejected', '2019-05-01 04:06:43', '2019-05-01 05:43:16'),
(2, 'Super Admin', 3, 3, 'shukrabadh, Dhaka Bangladesh', 'ex@gmail.com', '01985986986', 35, 'Pending', '2019-05-01 04:07:26', '2019-05-01 04:07:26');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) UNSIGNED NOT NULL,
  `demo_name` varchar(191) NOT NULL,
  `demo_type` varchar(100) DEFAULT NULL,
  `price` double UNSIGNED DEFAULT NULL,
  `owner` varchar(100) DEFAULT NULL,
  `image` text,
  `availabe_size` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `demo_name`, `demo_type`, `price`, `owner`, `image`, `availabe_size`, `created_at`, `updated_at`) VALUES
(2, 'Spacial Birthday Card', 'Card', 20, 'Sergio Ramos', NULL, '3*8', '2019-04-29 01:06:51', '2019-04-29 01:06:51'),
(4, 'Picnic Banner', 'Banner', 850, 'Samwell Tarly', NULL, '15*25\"', '2019-05-02 00:49:48', '2019-05-02 00:49:48'),
(5, 'Spacial Poster', 'Poster', 1520, 'Margaery Tyrell', NULL, '35*25\"', '2019-05-02 00:51:51', '2019-05-02 00:51:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Sansa ', 'Stark', 'z@gmail.com', NULL, '$2y$10$O.IQue4MESByy/v/lnys7.eVD0Ff/2gQ5t0k4GqKzBEhOWGlMNB7m', NULL, '2019-04-28 12:56:11', '2019-04-28 12:56:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_demo`
--
ALTER TABLE `order_demo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order_demo`
--
ALTER TABLE `order_demo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
