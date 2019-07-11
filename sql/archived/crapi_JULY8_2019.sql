-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2019 at 06:52 PM
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
(1, '681113087d030e01f41abfd0628e6b46e7dc9ad54de8', '$2y$10$/W8.yDgs33C6yoVQFWZxyOSwWsNYbBBxdQPFN8HI/vZ6Seq6k129K', 1, 'Customer', 'One', 'test\r\n', '09876543219', 'male', 'customer1@gmail.com', NULL, NULL, NULL, '2019-07-07 14:59:23', NULL),
(2, 'abc123', '$2y$10$/W8.yDgs33C6yoVQFWZxyOSwWsNYbBBxdQPFN8HI/vZ6Seq6k129K', 1, 'Customer', 'Two', 'test\r\n', '09876543219', 'male', 'customer2@gmail.com', NULL, NULL, NULL, NULL, NULL),
(3, '0d1e1b6f4b7b8a571e763c693744fee75ca9ececce62', '$2y$10$/W8.yDgs33C6yoVQFWZxyOSwWsNYbBBxdQPFN8HI/vZ6Seq6k129K', 1, 'Customer', 'Three', 'test\r\n', '09876543219', 'male', 'customer3@gmail.com', NULL, NULL, NULL, '2019-07-07 08:39:53', NULL),
(4, 'abc123', '$2y$10$/W8.yDgs33C6yoVQFWZxyOSwWsNYbBBxdQPFN8HI/vZ6Seq6k129K', 1, 'Customer', 'Four', 'test\r\n', '09876543219', 'male', 'customer4@gmail.com', NULL, NULL, NULL, NULL, NULL),
(5, NULL, '$2y$10$/W8.yDgs33C6yoVQFWZxyOSwWsNYbBBxdQPFN8HI/vZ6Seq6k129K', 1, 'Customer', 'Five', 'test address', '09876543219', NULL, 'customer5@gmail.com,', NULL, NULL, '2019-04-14 11:27:06', '2019-04-14 11:27:06', NULL),
(7, '996419605c5439c6e3ce2d00e1ba411c5a654f9de328', '$2y$10$/W8.yDgs33C6yoVQFWZxyOSwWsNYbBBxdQPFN8HI/vZ6Seq6k129K', 1, 'Customer', 'Five', 'test address', '09876543219', NULL, 'customer5@gmail.com,', NULL, NULL, '2019-04-14 11:34:18', '2019-04-14 11:34:18', NULL),
(8, '52a3ab02157cc7396a830c77e1f78d1159e2c169cc7c', '$2y$10$/W8.yDgs33C6yoVQFWZxyOSwWsNYbBBxdQPFN8HI/vZ6Seq6k129K', 1, 'Customer', 'Five', 'test address', '09876543219', NULL, 'customer5@gmail.com,', NULL, NULL, '2019-04-14 11:34:48', '2019-04-14 11:34:48', NULL);

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
(3, NULL, 1, '$2y$10$aUjUTFN6oCi34upOH8/XLOfxN6AMi1Ds0auYpeK/bUU.Ior9dpwla', 1, 'Employee', 'Two', '234 VC Dalisay Ave., Kardo City', '09876542310', 'male', 'emp2@g.com', '2019-06-27 16:13:44', '2019-07-03 17:01:13', NULL),
(4, NULL, 1, '$2y$10$8O1cvyW/rcqKJDdxW5eaFechHALxEupsjP1Qg/7tS4KvaECTFON9i', 1, 'Employee', 'Three', '887 MJ Cuenco Ave., Cebu City', '09876542310', 'male', 'emp3@g.com', '2019-07-03 17:01:47', '2019-07-03 17:01:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_hash` varchar(100) NOT NULL,
  `customer_id` int(10) UNSIGNED NOT NULL,
  `resto_id` int(11) NOT NULL,
  `order_status` enum('pending','success','failed') NOT NULL DEFAULT 'pending',
  `is_paid` tinyint(2) NOT NULL DEFAULT '0',
  `is_delivered` tinyint(2) NOT NULL DEFAULT '0',
  `is_received` tinyint(2) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `order_number` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_hash`, `customer_id`, `resto_id`, `order_status`, `is_paid`, `is_delivered`, `is_received`, `created_at`, `updated_at`, `order_number`) VALUES
(2, '0', 1, 2, 'success', 0, 0, 0, '2019-07-02 13:12:47', '2019-07-03 17:04:49', '2147483647'),
(3, '0', 1, 2, 'success', 1, 0, 0, '2019-07-04 14:04:49', '2019-07-07 16:08:19', '2147483647'),
(4, '0', 1, 1, 'success', 1, 0, 0, '2019-07-04 14:08:45', '2019-07-07 16:25:53', '2147483647'),
(5, '0', 3, 2, 'pending', 0, 0, 0, '2019-07-07 08:40:23', '2019-07-07 08:40:23', '2147483647'),
(6, '0', 3, 1, 'success', 0, 0, 0, '2019-07-07 09:00:57', '2019-07-07 09:02:07', '2147483647'),
(7, '0', 3, 1, 'pending', 0, 0, 0, '2019-07-07 09:05:48', '2019-07-07 09:05:48', '2147483647'),
(8, '0', 1, 1, 'pending', 0, 0, 0, '2019-07-07 16:40:19', '2019-07-07 16:40:19', '2147483647'),
(9, 'CRP_11562518080', 1, 2, 'success', 1, 0, 0, '2019-07-07 16:48:00', '2019-07-07 16:48:53', '11562518080');

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
(1, 2, 4, 2, 30, 70, '', 'success', '2019-07-02 13:12:47', '2019-07-03 17:03:37', 'success', 2),
(3, 2, 5, 1, 30, 30, '', 'success', '2019-07-02 13:31:48', '2019-07-03 17:03:44', 'success', 0),
(17, 4, 9, 3, 50, 150, '', 'pending', '2019-07-06 16:14:47', '2019-07-06 16:14:47', 'pending', 0),
(19, 4, 3, 2, 69, 138, '', 'pending', '2019-07-06 16:14:54', '2019-07-06 16:23:04', 'pending', 0),
(20, 5, 9, 1, 50, 50, '', 'pending', '2019-07-07 08:40:23', '2019-07-07 08:40:23', 'pending', 2),
(21, 6, 8, 7, 49, 343, '', 'pending', '2019-07-07 09:00:57', '2019-07-07 09:00:57', 'pending', 1),
(22, 7, 6, 1, 50, 50, '', 'pending', '2019-07-07 09:05:48', '2019-07-07 09:05:48', 'pending', 1),
(23, 7, 7, 5, 49, 245, '', 'pending', '2019-07-07 09:11:31', '2019-07-07 09:11:31', 'pending', 0),
(24, 3, 9, 2, 50, 100, '', 'pending', '2019-07-07 13:52:52', '2019-07-07 13:52:52', 'pending', 0),
(25, 3, 5, 3, 30, 90, '', 'pending', '2019-07-07 13:52:55', '2019-07-07 13:52:55', 'pending', 0),
(26, 3, 4, 5, 40, 200, '', 'pending', '2019-07-07 13:53:05', '2019-07-07 13:53:05', 'pending', 0),
(27, 8, 8, 2, 49, 98, '', 'pending', '2019-07-07 16:40:19', '2019-07-07 16:40:19', 'pending', 1),
(28, 8, 7, 3, 49, 147, '', 'pending', '2019-07-07 16:40:21', '2019-07-07 16:40:21', 'pending', 0),
(29, 8, 6, 4, 50, 200, '', 'pending', '2019-07-07 16:40:24', '2019-07-07 16:40:24', 'pending', 0),
(30, 9, 9, 2, 50, 100, '', 'pending', '2019-07-07 16:48:00', '2019-07-07 16:48:00', 'pending', 2);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `owners`
--

INSERT INTO `owners` (`id`, `login_token`, `password`, `status`, `firstname`, `lastname`, `address`, `contact_number`, `gender`, `email`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'abc123', '$2y$10$OMSeK8Pe70nIHjkiTFLm8uX72fErkZKP6B4H6z7nZcakdPlMsayxe', 1, 'Owner', 'One', 'addresss11 1 1 ', '09876543219', 'male', 'owner1@gmail.com', NULL, NULL, NULL),
(2, 'abc123', '$2y$10$OMSeK8Pe70nIHjkiTFLm8uX72fErkZKP6B4H6z7nZcakdPlMsayxe', 1, 'Owner', 'Two', 'addresss11 1 1 ', '09876543219', 'male', 'owner2@gmail.com', NULL, NULL, NULL);

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
  `longitude` float(255,8) DEFAULT NULL,
  `latitude` float(255,8) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`id`, `owner_id`, `resto_name`, `address`, `longitude`, `latitude`, `created_at`, `updated_at`) VALUES
(1, 1, 'ACT Restaurant', '123 ABC ', 123.64505005, 10.27353477, '2019-06-22 10:49:05', '2019-07-02 13:38:36'),
(2, 2, 'Two Restaurant', '123 ABC ', 123.64505005, 10.27353477, '2019-06-22 10:49:05', '2019-07-02 13:43:27');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `owners`
--
ALTER TABLE `owners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
