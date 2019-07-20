-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2019 at 07:25 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crapi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1' COMMENT '1:active; 2:stop',
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `contact_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` enum('male','female','others') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_photo` text COLLATE utf8mb4_unicode_ci,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `status`, `firstname`, `lastname`, `address`, `contact_number`, `gender`, `username`, `email`, `display_photo`, `password`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Admin', 'Istrator', NULL, NULL, 'male', 'admin', 'admin@gmail.com', NULL, '$2y$10$OMSeK8Pe70nIHjkiTFLm8uX72fErkZKP6B4H6z7nZcakdPlMsayxe', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `login_token` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1' COMMENT '1:active; 2:stop',
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `contact_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` enum('male','female') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latitude` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `login_token`, `password`, `status`, `firstname`, `lastname`, `address`, `contact_number`, `gender`, `email`, `longitude`, `latitude`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'e58f3e6b75c4f4a622ed3ead3ee4fe30b93947333d1b', '$2y$10$6FxP4VobegfLnXCFBQPrcezAU3HhECpKWPSs4ladWM0TmGpWGMujW', 1, 'Customer ', 'One', '887 MJ Cuenco Ave., Cebu City', '09876542310', 'female', 'c1@gmail.com', NULL, NULL, '2019-07-10 15:27:12', '2019-07-20 14:18:49', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(10) UNSIGNED NOT NULL,
  `login_token` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `owner_id` int(10) UNSIGNED NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1' COMMENT '1:active; 2:stop',
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `contact_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` enum('male','female') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `login_token`, `owner_id`, `password`, `status`, `firstname`, `lastname`, `address`, `contact_number`, `gender`, `email`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, NULL, 1, '$2y$10$OMSeK8Pe70nIHjkiTFLm8uX72fErkZKP6B4H6z7nZcakdPlMsayxe', 1, 'Employee', 'One', 'test address emp 1', '09876542310', 'male', 'emp1@g.com', NULL, '2019-06-27 16:12:37', NULL),
(2, NULL, 2, '$2y$10$OMSeK8Pe70nIHjkiTFLm8uX72fErkZKP6B4H6z7nZcakdPlMsayxe', 1, 'Employee', 'Two', '887 MJ Cuenco Ave., Cebu City', '9994092682', 'female', 'emp2@g.com', '2019-06-27 14:25:13', '2019-06-27 14:25:13', NULL),
(4, NULL, 1, '$2y$10$8O1cvyW/rcqKJDdxW5eaFechHALxEupsjP1Qg/7tS4KvaECTFON9i', 1, 'Employee', 'Three', '887 MJ Cuenco Ave., Cebu City', '09876542310', 'male', 'emp3@g.com', '2019-07-03 17:01:47', '2019-07-03 17:01:56', NULL),
(5, NULL, 1, '$2y$10$gY9/6MUdfBBni9PpcVLxMuU.IDIrMn7Y8TJ5i69ILfbSjAzC/uksq', 1, 'Karl', 'Lim', '887 MJ Cuenco Ave., Cebu City', '879678867856', 'male', 'user1', '2019-07-10 14:09:48', '2019-07-10 14:09:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_hash` varchar(100) NOT NULL,
  `customer_id` int(10) UNSIGNED NOT NULL,
  `resto_id` int(11) NOT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `order_status` enum('pending','success','failed') NOT NULL DEFAULT 'pending',
  `is_approved` tinyint(2) NOT NULL DEFAULT '0' COMMENT '0:default; 1:customer request approval; 2:employee approved order',
  `is_paid` tinyint(2) NOT NULL DEFAULT '0',
  `is_preparing` tinyint(2) NOT NULL DEFAULT '0',
  `is_delivered` tinyint(2) NOT NULL DEFAULT '0',
  `is_received` tinyint(2) NOT NULL DEFAULT '0',
  `payment_type` enum('paymaya','coa') DEFAULT NULL,
  `cod_cash` int(11) DEFAULT NULL,
  `delivery_address` text NOT NULL,
  `longitude` varchar(200) DEFAULT NULL,
  `latitude` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `order_number` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_hash`, `customer_id`, `resto_id`, `employee_id`, `order_status`, `is_approved`, `is_paid`, `is_preparing`, `is_delivered`, `is_received`, `payment_type`, `cod_cash`, `delivery_address`, `longitude`, `latitude`, `created_at`, `updated_at`, `order_number`) VALUES
(1, 'CRP_11562857715', 1, 1, NULL, 'success', 1, 1, 1, 1, 1, 'coa', 250, '', '123.88655871429444', '10.319753253345784', '2019-07-11 15:08:35', '2019-07-20 15:26:54', '11562857715'),
(2, 'CRP_11562858786', 1, 1, NULL, 'success', 1, 1, 1, 1, 1, 'coa', 120, '', '123.89080733337403', '10.312997802106642', '2019-07-11 15:26:26', '2019-07-20 15:26:59', '11562858786'),
(3, 'CRP_11562865912', 1, 1, NULL, 'pending', 1, 1, 1, 1, 0, 'paymaya', NULL, '', '123.8861724761963', '10.314940009186753', '2019-07-11 17:25:12', '2019-07-20 15:27:39', '11562865912'),
(4, 'CRP_11562866445', 1, 1, NULL, 'pending', 1, 1, 1, 0, 0, 'coa', 50, '193 Don Mariano Cui St, Cebu City, Cebu, Philippines', '123.89059275665284', '10.313842241439719', '2019-07-11 17:34:05', '2019-07-20 17:22:42', '11562866445'),
(5, 'CRP_11563461501', 1, 1, NULL, 'pending', 2, 1, 1, 0, 0, 'coa', 300, '', '123.89174938201904', '10.309514853436628', '2019-07-18 14:51:41', '2019-07-20 15:27:24', '11563461501'),
(6, 'CRP_11563464578', 1, 2, 1, 'pending', 2, 1, 1, 0, 0, 'coa', 100, '', '123.88788908996582', '10.322962041884372', '2019-07-18 15:42:58', '2019-07-20 15:27:24', '11563464578'),
(7, 'CRP_11563545030', 1, 1, 1, 'success', 2, 0, 1, 1, 1, 'coa', 200, '', '123.89171547358524', '10.321035765081083', '2019-07-19 14:03:50', '2019-07-20 15:27:24', '11563545030'),
(8, 'CRP_11563611169', 1, 1, 1, 'pending', 2, 0, 1, 1, 0, 'coa', 220, '', '123.89503798763303', '10.311409351991191', '2019-07-20 08:26:09', '2019-07-20 15:48:26', '11563611169');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `qty` int(10) UNSIGNED NOT NULL,
  `price` int(10) UNSIGNED NOT NULL,
  `sub_total` int(10) UNSIGNED NOT NULL,
  `description_request` text,
  `status` enum('pending','success','falied') NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `order_status` enum('pending','success','falied') NOT NULL,
  `resto_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `qty`, `price`, `sub_total`, `description_request`, `status`, `created_at`, `updated_at`, `order_status`, `resto_id`) VALUES
(1, 1, 8, 2, 49, 98, '', 'pending', '2019-07-11 15:08:35', '2019-07-11 15:08:35', 'pending', 1),
(2, 1, 7, 2, 49, 98, '', 'pending', '2019-07-11 15:08:38', '2019-07-11 15:08:38', 'pending', 0),
(3, 2, 8, 1, 49, 49, '', 'pending', '2019-07-11 15:26:26', '2019-07-11 15:26:26', 'pending', 1),
(4, 2, 7, 1, 49, 49, '', 'pending', '2019-07-11 15:26:28', '2019-07-11 15:26:28', 'pending', 0),
(5, 3, 8, 2, 49, 98, '', 'pending', '2019-07-11 17:25:12', '2019-07-11 17:25:12', 'pending', 1),
(6, 3, 6, 2, 50, 100, '', 'pending', '2019-07-11 17:25:15', '2019-07-11 17:25:15', 'pending', 0),
(7, 4, 8, 1, 49, 49, '', 'pending', '2019-07-11 17:34:05', '2019-07-11 17:34:05', 'pending', 1),
(8, 5, 3, 2, 69, 138, '', 'pending', '2019-07-18 14:51:41', '2019-07-18 14:51:41', 'pending', 1),
(9, 5, 8, 2, 49, 98, '', 'pending', '2019-07-18 14:51:44', '2019-07-18 14:51:44', 'pending', 0),
(10, 6, 9, 2, 50, 100, '', 'pending', '2019-07-18 15:42:58', '2019-07-18 15:42:58', 'pending', 2),
(11, 7, 8, 3, 49, 147, '', 'pending', '2019-07-19 14:03:50', '2019-07-19 16:09:09', 'pending', 1),
(12, 7, 7, 1, 49, 49, '', 'pending', '2019-07-19 16:09:12', '2019-07-19 16:09:12', 'pending', 0),
(13, 8, 3, 1, 69, 69, '', 'pending', '2019-07-20 08:26:09', '2019-07-20 08:26:09', 'pending', 1),
(14, 8, 6, 1, 50, 50, '', 'pending', '2019-07-20 08:26:11', '2019-07-20 08:26:11', 'pending', 0),
(15, 8, 7, 2, 49, 98, '', 'pending', '2019-07-20 08:26:13', '2019-07-20 08:26:17', 'pending', 0);

-- --------------------------------------------------------

--
-- Table structure for table `owners`
--

CREATE TABLE `owners` (
  `id` int(10) UNSIGNED NOT NULL,
  `login_token` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1' COMMENT '1:active; 2:stop',
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `contact_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` enum('male','female') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subscription_end` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `owners`
--

INSERT INTO `owners` (`id`, `login_token`, `password`, `status`, `firstname`, `lastname`, `address`, `contact_number`, `gender`, `email`, `subscription_end`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'abc123', '$2y$10$OMSeK8Pe70nIHjkiTFLm8uX72fErkZKP6B4H6z7nZcakdPlMsayxe', 1, 'Owner', 'One', 'addresss11 1 1 ', '09876543219', 'male', 'owner1@gmail.com', '2019-07-31 00:00:00', NULL, '2019-07-11 22:55:49', NULL),
(2, 'abc123', '$2y$10$OMSeK8Pe70nIHjkiTFLm8uX72fErkZKP6B4H6z7nZcakdPlMsayxe', 1, 'Owner', 'Two', 'addresss11 1 1 ', '09876543219', 'male', 'owner2@gmail.com', '2019-07-31 00:00:00', NULL, NULL, NULL),
(3, NULL, '$2y$10$yF1alWea24fgXecI8z.aBOAkvP84ZRVybga6FLghEOmU6yHl8ANZW', 1, 'Own', 'One', 'rwerwe', '9994092682', 'male', 'owner9@gmail.com', '2019-08-12 07:52:17', '2019-07-11 23:40:59', '2019-07-11 23:52:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `resto_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `details` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `type` enum('appetizer','main','dessert','beverage') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(10) UNSIGNED NOT NULL,
  `image_url` varchar(500) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `resto_id`, `name`, `details`, `type`, `price`, `image_url`, `created_at`, `updated_at`) VALUES
(3, 1, 'Longsilog', 'longganisa itlog rice', 'main', 69, 'photos/photo_62_15374521345ba3a866e6fcf.jpg', NULL, '2019-07-01 16:41:19'),
(4, 2, 'Beer na Beer', 'beer', 'main', 40, NULL, NULL, '2019-06-26 15:14:34'),
(5, 2, 'RH Beer', 'beer', 'main', 30, NULL, NULL, '2019-06-27 14:26:48'),
(6, 1, 'Tosilog', 'longganisa itlog rice', 'main', 50, NULL, NULL, '2019-07-01 15:58:40'),
(7, 1, 'Kingsilog', 'longganisa itlog rice', 'main', 49, NULL, NULL, '2019-06-27 14:26:57'),
(8, 1, 'Logsilog', 'longganisa itlog rice', 'main', 49, NULL, NULL, '2019-06-27 14:26:57'),
(9, 2, 'Longsilog', 'longganisa itlog rice', 'main', 50, 'product_image/product_image_15620722405d1b54b055600.png', '2019-07-02 12:57:20', '2019-07-06 16:23:34');

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `id` int(10) UNSIGNED NOT NULL,
  `owner_id` int(10) UNSIGNED NOT NULL,
  `resto_name` varchar(50) NOT NULL,
  `address` text,
  `longitude` varchar(100) DEFAULT NULL,
  `latitude` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`id`, `owner_id`, `resto_name`, `address`, `longitude`, `latitude`, `created_at`, `updated_at`) VALUES
(1, 1, 'ACT Restaurant', '123 ABC ', '123.64505005', '10.27353477', '2019-06-22 10:49:05', '2019-07-02 13:38:36'),
(2, 2, 'Two Restaurant', '123 ABC ', '123.88694495239258', '10.3163755458492', '2019-06-22 10:49:05', '2019-07-09 13:15:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employees_owner_id_foreign` (`owner_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_customer_id_foreign` (`customer_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_details_order_id_foreign` (`order_id`),
  ADD KEY `order_details_product_id_foreign` (`product_id`);

--
-- Indexes for table `owners`
--
ALTER TABLE `owners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_resto_id_foreign` (`resto_id`) USING BTREE;

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `restaurants_owner_id_foreign` (`owner_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `owners`
--
ALTER TABLE `owners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_owner_id_foreign` FOREIGN KEY (`owner_id`) REFERENCES `owners` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_resto_id_foreign` FOREIGN KEY (`resto_id`) REFERENCES `restaurants` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD CONSTRAINT `restaurants_owner_id_foreign` FOREIGN KEY (`owner_id`) REFERENCES `owners` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
