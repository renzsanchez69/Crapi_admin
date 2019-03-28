-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2019 at 04:15 PM
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
-- Database: `goestate_ci`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(10) UNSIGNED NOT NULL,
  `requester_id` int(10) UNSIGNED NOT NULL,
  `property_id` int(10) UNSIGNED NOT NULL,
  `appointment_date` date NOT NULL,
  `appointment_time` time NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `appointment_status` enum('approved','rejected','pending') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `barangays`
--

CREATE TABLE `barangays` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `division` enum('north','south') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `sender_id` int(10) UNSIGNED NOT NULL,
  `recipient_id` int(10) UNSIGNED NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `seen_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_01_16_151815_create_properties_table', 1),
(4, '2018_01_16_153658_create_photos_table', 1),
(5, '2018_01_24_182645_add_post_status_to_properties_table', 1),
(6, '2018_01_28_135413_add_coordinates_to_properties_table', 1),
(7, '2018_01_28_165132_create_messages_table', 1),
(8, '2018_01_28_165143_create_appointments_table', 1),
(9, '2018_02_11_083337_create_barangays_table', 1),
(10, '2018_02_12_102835_add_seen_at_column_to_messages_table', 1),
(11, '2018_02_14_071442_add_youtube_link_column_to_properties_table', 1),
(12, '2018_02_14_091116_add_is_sold_column_to_properties_table', 1),
(13, '2018_02_15_080040_add_uids_to_users_table', 1),
(14, '2018_10_19_090511_create_reviews_table', 1);

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
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(10) UNSIGNED NOT NULL,
  `property_id` int(10) UNSIGNED NOT NULL,
  `filepath` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo_type` enum('presentation','street_view') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `post_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `additional_details` text COLLATE utf8mb4_unicode_ci,
  `transaction_type` enum('sale','rent') COLLATE utf8mb4_unicode_ci NOT NULL,
  `property_type` enum('house','townhouse','condo','apartment','lot','others') COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(13,2) NOT NULL,
  `property_size` double(8,2) NOT NULL,
  `bedroom_count` enum('1','2','3','3+','n/a') COLLATE utf8mb4_unicode_ci NOT NULL,
  `bathroom_count` enum('1','2','3','3+','n/a') COLLATE utf8mb4_unicode_ci NOT NULL,
  `storey_count` enum('1','2','3','3+','n/a') COLLATE utf8mb4_unicode_ci NOT NULL,
  `property_condition` enum('fully_furnished','semi_furnished','others','n/a') COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube_link` text COLLATE utf8mb4_unicode_ci,
  `is_sold` tinyint(1) DEFAULT NULL,
  `post_status` enum('pending','approved','rejected') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `post_status_remarks` text COLLATE utf8mb4_unicode_ci,
  `approved_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `latitude` double DEFAULT NULL,
  `longitude` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `user_id`, `post_title`, `additional_details`, `transaction_type`, `property_type`, `address`, `price`, `property_size`, `bedroom_count`, `bathroom_count`, `storey_count`, `property_condition`, `youtube_link`, `is_sold`, `post_status`, `post_status_remarks`, `approved_at`, `created_at`, `updated_at`, `deleted_at`, `latitude`, `longitude`) VALUES
(1, 1, 'Property 1 test', 'additional_details test', 'sale', 'house', 'property_address test', '1200000.00', 3.00, '3+', '3+', '2', 'fully_furnished', 'https://www.youtube.com/watch?v=C0DPdy98e4c', 0, 'approved', 'post_status_remarks test', '2019-03-02 16:00:00', '2019-03-02 16:00:00', NULL, NULL, NULL, NULL),
(2, 1, 'Property 2 test', 'additional_details test', 'sale', 'house', 'property_address test', '1200000.00', 3.00, '3+', '3+', '2', 'fully_furnished', 'https://www.youtube.com/watch?v=C0DPdy98e4c', 0, 'approved', 'post_status_remarks test', '2019-03-02 16:00:00', '2019-03-02 16:00:00', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `property_id` int(10) UNSIGNED NOT NULL,
  `ratings` int(11) NOT NULL,
  `review` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1' COMMENT '1:active; 2:stop',
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `contact_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` enum('male','female','others') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook_uid` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_uid` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `display_photo` text COLLATE utf8mb4_unicode_ci,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('owner','user') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `status`, `firstname`, `lastname`, `address`, `contact_number`, `gender`, `username`, `email`, `facebook_uid`, `google_uid`, `display_photo`, `password`, `role`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 'AA', 'BB', '', '09282811211', 'male', 'adminx44', 'admin@gmail.comxx', NULL, NULL, NULL, '$2y$10$NpNMAmMGiXNBRkTL943FPuA3Nn7IhyNYcv5yVLWo/2IBvJTJYp8V2', 'user', 'g1iDcyCR1tNZIvIiafa1oP4ZNU2Kk6J45JeRhOA9iiWvV9SDIeHNl9XTuEQr', '2018-01-14 05:46:53', '2018-02-22 00:21:38', '2018-02-22 00:21:38'),
(2, 2, 'sasa', 'sasa', NULL, 'sasa', 'male', 'sasa', 'leslyjeang@yahoo.com.ph', NULL, NULL, NULL, '$2y$10$xo4tqqxMUc1YUATLTSlBAOZWeQBobOjq5ekqqWp9qNzHKASg9lEaW', 'user', 'fzAww76ucGWz2tF6oGEfFSjDfUnyR79c7Qofkhp8x3kA2guNbFoe332jGW91', '2018-01-15 05:29:58', '2018-02-22 00:21:43', '2018-02-22 00:21:43'),
(4, 2, 'Lesly Jean', 'Go', NULL, '09392825080', 'male', 'leslyjeang123@gmail.com', 'leslyjeang123@gmail.com', NULL, '114629337497573390318', NULL, '$2y$10$Gu6jEBRUQSvSIj5We2SJSOwwIOUhsRVWPvdXyqcLY5ou8rQNic4KK', 'user', 'umYH0sb2xV1kWMwZvKrOFS8zjZOGnmIYPxCqjTcgR6lMLMrpKILW7IxzYEo2', '2018-01-18 06:09:34', '2018-01-24 07:39:32', NULL),
(5, 2, 'Doggo', 'Go', NULL, '09392825080', 'female', 'doggo', 'doggo@yahoo.com', NULL, NULL, NULL, '$2y$10$UmN/KgSkh7nAvEjuCA.GHueJQLrX3/W.fAfc.vuzXEqTQ1NQUFiSy', 'user', 'kmQgWT708Eet43kgAKELc2ivtVtC6kHRSnSbq4SOeqlExaFsE0mcL7YWsmzK', '2018-01-18 07:28:07', '2018-02-22 00:21:48', '2018-02-22 00:21:48'),
(6, 2, 'd', 'w', 'ee', '09392825080', 'female', 'www', 'dd@gmail.com', NULL, NULL, NULL, '$2y$10$OerFPW5qMFP30IdiZzEKJe0Z0J.YRtR1DmL32eBd3ouy/y9vInhQK', 'user', NULL, '2018-01-24 07:31:43', '2018-02-22 00:21:51', '2018-02-22 00:21:51'),
(8, 2, 'Lesly Jean', 'Go', NULL, NULL, 'female', 'leslyjeang@yahoo.com.ph', 'leslyjeang@yahoo.com.ph', '1745921662126553', NULL, NULL, '$2y$10$fv.V1vefhF467XlPkSgBn.FY6FuUHb6BRC8NLOvIe4W9Q2ZHLlNI2', 'user', 'Ajr5kvdDizeSa6w20i455XnnnOzDodwB9aP5QVsvUMz1ffd6pv6VQpqqYRtB', '2018-01-24 08:06:58', '2018-01-24 08:06:58', NULL),
(9, 2, 'Doggo', 'Go', NULL, '09392825080', 'male', 'dog', 'doggo@yahoo.com', NULL, NULL, NULL, '$2y$10$qbpNjl9S1d2qw/f9TmlyYe6RI5Gx86QZp9yUT49LkcRcWMiPG6hfi', 'user', NULL, '2018-01-24 19:49:17', '2018-02-22 00:21:59', '2018-02-22 00:21:59'),
(10, 2, 'Chuva', 'Choo', NULL, '09123456789', 'male', 'chchoo', 'chchoo@email.com', NULL, NULL, NULL, '$2y$10$26YlqHsW8aiOggO3zgP16easENK0RODDJh.bCEJ97SkZFqTikIEiu', 'user', NULL, '2018-01-24 23:33:24', '2018-02-22 00:22:05', '2018-02-22 00:22:05'),
(11, 2, 'Dam', 'Ilooo', NULL, '09123456789', 'male', 'das', 'dasilooo@email.com', NULL, NULL, NULL, '$2y$10$c4cM6/4aJpHHoxu.gu3x7OU/DVyoXmKSXpjodDJF7KW8Z62qFpWo2', 'user', 'LMiMg3KPPQza3EXOFPFxuaDJ1ZRToQ7MzNtCYQt3clgufGPys4aggBIPB6oA', '2018-01-26 05:22:28', '2018-02-01 01:43:03', '2018-02-01 01:43:03'),
(12, 2, 'Dan', 'Gealon', NULL, '09123456789', 'male', 'djgealon', 'djgealon@email.com', NULL, NULL, NULL, '$2y$10$XUC4RIhqEZCXvPriR5rnMuHhj/YdYYlAed4yHz.nElLA896/LLEoW', 'user', 'slNKg7zVHr9odPxoYCgAPIf27YpHZWZoSNM5qUbfM4XkEnWscCeeHzDYFq60', '2018-02-06 02:06:04', '2018-02-22 00:22:17', '2018-02-22 00:22:17'),
(13, 2, 'Reden James', 'Remorta', NULL, '09499283908', 'male', 'cocoabutterkisses', 'rdnjmsremorta@gmail.com', NULL, NULL, NULL, '$2y$10$cp8FlHI7Rvb6KgeLNeiZRugXcBVg2vmONcJkcyUUSSQk/lNZ895F2', 'user', 'Cwon4sMN1LIPEIzpdApJxqYWlnCr9nUGFChqgeT7Y8ph1mjdmllLfg0qvO0K', '2018-02-06 04:13:11', '2018-02-06 04:13:11', NULL),
(14, 2, 'Diana Mae', 'Velayo', NULL, '09151095622', 'female', 'dianamae_baby@yahoo.com', 'dianamvelayo@gmail.com', '1862427290435271', NULL, NULL, '$2y$10$L6O.TYM9/y9oSWo30S9oBeCqTwmsDN4Jm9Qan8RzXBRSN4..meFiG', 'user', NULL, '2018-02-06 04:56:11', '2018-02-06 05:00:58', NULL),
(15, 2, 'mario', 'espinosa', NULL, '09287130991', 'male', 'mario', 'mario@gmail.com', NULL, NULL, NULL, '$2y$10$d7FiJiLAFrqEqbbmZN5a8ubgTWPOqrr/lpWFgJUMRNznuvXpKvHG.', 'user', 'v77PTjSo0tMttgOTDVV9qaRH34bwd08OuV6BS1wIS8uK3ql4FhafNKmFtA35', '2018-02-07 20:57:16', '2018-02-22 00:22:27', '2018-02-22 00:22:27'),
(16, 2, 'Lesly Jean', 'Go', NULL, '09771596302', 'female', 'leslyjeang', 'leslyjeang123@yahoo.com', NULL, NULL, NULL, '$2y$10$aoHa0X5nThVSLGhp9nL6w.C.geqqjYK7xtlJza8O7jwe0zSM/IdAO', 'user', 'nJxzGBnIfiYcgRlgVuTnuqO0qZG5Ii0jmQ2tcBi6rdaNyWMGM5PrNKwRg0Xc', '2018-02-07 21:08:14', '2018-02-22 00:22:52', '2018-02-22 00:22:52'),
(17, 2, 'cole', 'sprouse', NULL, '09771596302', 'female', 'cole', 'cole@yahoo.com', NULL, NULL, NULL, '$2y$10$gVTXd9EzJqin5582BA9JK.OlJzydLtUYblRPM/P61fygI78NPQR/q', 'user', 'Hg33A758uPZ3tg2Ks3TlD9nTbNubHmfG9GAwSZMRmTKu89tfzvx0PWhx0Pz5', '2018-02-07 21:12:35', '2018-02-22 00:22:32', '2018-02-22 00:22:32'),
(18, 2, 'gole', 'gole', NULL, '09771596302', 'female', 'gole', 'gole2@gmail.com', NULL, NULL, NULL, '$2y$10$Xn56BzVnTfLS1ze9rldUTOLsmBzekPj83TUXiV4R7.i8JQfyHOHei', 'user', 'IpYDUkObr8QORjbl88oW7n4GsVUfz8RhkbdgmaEtV2IKSmAQT7ywOOxoVSLx', '2018-02-13 00:29:47', '2018-02-22 00:22:37', '2018-02-22 00:22:37'),
(19, 2, 'Dan', 'Gealon', NULL, NULL, NULL, '102607896710194314618', 'gealond@gmail.com', NULL, '102607896710194314618', NULL, '$2y$10$dBwVMsz2zx04Q/C4Q/5CLOo..DtG1gQRHENSuTPyqzkzf0y3T2HA6', 'user', 'jv4xwdmkVa1TTyrQRGjTjUN8fqg6mVyQJ1hYCukzIwowRbzkdCFNaYomKiTW', '2018-02-22 00:04:41', '2018-02-22 00:04:41', NULL),
(20, 1, 'Nikki', 'Maloloy-on', 'Lapu-lapu City, Cebu', '09123456789', 'female', 'nikkimaloy', 'nikkimaloy@gmail.com', NULL, NULL, NULL, '$2y$10$rMA8pNR2rMiZcTUVoyxId.NVxvK4tM9R1XL6ZwUpn7NdF91qKi9dS', 'user', NULL, '2018-02-22 00:24:53', '2018-10-12 23:20:03', NULL),
(21, 1, 'Mario', 'Espinosa', 'Basak, Mandaue City, Cebu', '09392825080', 'male', 'marioespinosa', 'marioespinosa@gmail.com', NULL, NULL, NULL, '$2y$10$eyojnZvRRIeWWjPf.xS3gOqRHefkrjEmNQ2UyRFNgd0fd2AZxsTJ6', 'user', NULL, '2018-02-22 00:27:20', '2018-02-22 00:27:20', NULL),
(28, 1, 'Allen Marie', 'Villarin', NULL, '09994092682', 'male', 'admin123', 'karljinlim@gmail.com', NULL, NULL, NULL, '$2y$10$aS5KwDKrWl2u9m0KhzSeuOXSIkK1txDpJJQmEtBJIsga5Ut2uTpdW', 'user', 'ZAxihCnuT0vcxjRfbj0ZWxnr37nOMSYDpUW1U3Uadcl1UZ1CgrmKfgQ3hdK0', '2018-08-22 06:26:27', '2018-08-22 06:26:27', NULL),
(41, 1, 'Kardox', 'Dalisayx', '887 MJ Cuenco Ave., Cebu City', '09994092682', 'male', 'kardo', 'kardo@gmail.com', NULL, NULL, NULL, '$2y$10$15BDpbs8arNZ3q5GhCEbfOLq9c08U79zDjAH59SDN1hdMZnM1S5uS', 'user', NULL, '2018-10-16 12:57:04', '2018-10-27 09:58:50', NULL),
(42, 1, 'Karl', 'Lim', '887 MJ Cuenco Ave., Cebu City', '9994092680', 'male', 'user1', 'karllim96@gmail.com', NULL, NULL, NULL, '$2y$10$OMSeK8Pe70nIHjkiTFLm8uX72fErkZKP6B4H6z7nZcakdPlMsayxe', 'user', NULL, '2018-10-27 10:55:50', '2018-10-27 10:55:50', NULL),
(43, 1, 'Owner', 'One', 'sadfasd asdf asd f', '09994092682', 'male', 'owner1', 'owner1@gmail.com', NULL, NULL, NULL, '$2y$10$uBnGUQehzsCPpuBIMYlOCeeKixlnqhXKzzjIpdXdsSz5eFE4bP/R.', 'owner', NULL, '2018-11-03 23:35:11', '2018-11-03 23:35:11', NULL),
(44, 1, 'Owner', 'Two', 'sadfasd asdf asd f', '09994092682', 'male', 'owner2', 'owner2@gmail.com', NULL, NULL, NULL, '$2y$10$/NWL8/oWimC04TmKWmkvCeNYhTvCa8YsO4N2k5.ThGRxIRp6cPHiC', 'owner', NULL, '2018-11-03 23:37:12', '2018-11-03 23:37:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users_old`
--

CREATE TABLE `users_old` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` enum('male','female','others') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_number` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `role` enum('admin','buyer','seller') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'buyer',
  `active` tinyint(1) DEFAULT NULL,
  `facebook_uid` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_uid` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users_old`
--

INSERT INTO `users_old` (`id`, `username`, `email`, `password`, `firstname`, `lastname`, `gender`, `contact_number`, `address`, `role`, `active`, `facebook_uid`, `google_uid`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'seller1', 'seller1@gmail.com', '$2y$10$LZF7.K2nTGQLrCftJNHSXOblEVStys/sdkFYb95Bz1DAyCVWp//l2', 'seller1', 'Lim', 'male', '09876543212', NULL, 'seller', NULL, NULL, NULL, 'ir721KIBFPEOh7DdDOkG9Bi6Oux5daU6AXuo3XloqP9tXxD05lf1DQ8NvJBJ', '2019-02-25 04:28:35', '2019-02-25 04:28:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `appointments_requester_id_foreign` (`requester_id`),
  ADD KEY `appointments_property_id_foreign` (`property_id`);

--
-- Indexes for table `barangays`
--
ALTER TABLE `barangays`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `messages_sender_id_foreign` (`sender_id`),
  ADD KEY `messages_recipient_id_foreign` (`recipient_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `photos_property_id_foreign` (`property_id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`),
  ADD KEY `properties_user_id_foreign` (`user_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_facebook_uid_unique` (`facebook_uid`),
  ADD UNIQUE KEY `users_google_uid_unique` (`google_uid`);

--
-- Indexes for table `users_old`
--
ALTER TABLE `users_old`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `barangays`
--
ALTER TABLE `barangays`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `users_old`
--
ALTER TABLE `users_old`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_property_id_foreign` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `appointments_requester_id_foreign` FOREIGN KEY (`requester_id`) REFERENCES `users_old` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_recipient_id_foreign` FOREIGN KEY (`recipient_id`) REFERENCES `users_old` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `messages_sender_id_foreign` FOREIGN KEY (`sender_id`) REFERENCES `users_old` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `photos`
--
ALTER TABLE `photos`
  ADD CONSTRAINT `photos_property_id_foreign` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `properties`
--
ALTER TABLE `properties`
  ADD CONSTRAINT `properties_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users_old` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users_old` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
