-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2021 at 06:34 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `storesite`
--

-- --------------------------------------------------------

--
-- Table structure for table `bought`
--

CREATE TABLE `bought` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `cart_id` bigint(20) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(11) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_persian_ci NOT NULL,
  `image` text COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `user_id`, `name`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'sumsong', 's:56:\"/images/brandIcon/2021/Oct/02/2021_10_02_17_38_19_40.jpg\";', '2021-10-01 21:19:22', '2021-10-02 19:08:19', NULL),
(2, 1, 'apple', 's:56:\"/images/brandIcon/2021/Oct/02/2021_10_02_17_09_44_49.png\";', '2021-10-02 18:39:45', NULL, NULL),
(3, 1, 'sumsong', NULL, '2021-10-02 18:53:13', NULL, '2021-10-02 18:53:58'),
(4, 1, 'samsung', 's:56:\"/images/brandIcon/2021/Oct/02/2021_10_02_17_32_48_78.jpg\";', '2021-10-02 19:02:48', NULL, '2021-10-02 19:03:52'),
(5, 1, 'asdas', 's:56:\"/images/brandIcon/2021/Oct/02/2021_10_02_17_33_42_11.jpg\";', '2021-10-02 19:03:42', NULL, '2021-10-02 19:03:49'),
(6, 1, 'html', 's:56:\"/images/brandIcon/2021/Oct/02/2021_10_02_17_35_42_65.jpg\";', '2021-10-02 19:05:42', NULL, '2021-10-02 19:05:46'),
(7, 1, 'asus', 's:56:\"/images/brandIcon/2021/Oct/02/2021_10_02_17_43_43_30.jpg\";', '2021-10-02 19:13:43', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `count` int(11) NOT NULL DEFAULT 1,
  `isPaid` enum('0','1') COLLATE utf8mb4_persian_ci NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(11) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `name` varchar(244) COLLATE utf8mb4_persian_ci NOT NULL,
  `parent_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `user_id`, `name`, `parent_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'الکترونیکی', 0, '2021-10-01 21:23:03', '2021-10-01 21:49:00', NULL),
(2, 1, 'تبلت', 1, '2021-10-01 21:25:16', NULL, NULL),
(3, 1, 'لپ تاپ', 1, '2021-10-01 21:44:57', NULL, '2021-10-02 16:09:06'),
(4, 1, 'لپ تاپ', 1, '2021-10-02 19:14:42', NULL, NULL),
(5, 1, 'خانگی', 0, '2021-10-02 19:14:57', NULL, NULL),
(6, 1, 'تلوزیون', 5, '2021-10-02 19:15:12', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `parent_id` bigint(20) DEFAULT NULL,
  `comment` text COLLATE utf8mb4_persian_ci NOT NULL,
  `likes` bigint(20) NOT NULL DEFAULT 0,
  `report_count` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `discounts`
--

CREATE TABLE `discounts` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `code` text COLLATE utf8mb4_persian_ci NOT NULL,
  `value` text COLLATE utf8mb4_persian_ci NOT NULL,
  `type` enum('0','1') COLLATE utf8mb4_persian_ci NOT NULL,
  `timeToDate` text COLLATE utf8mb4_persian_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `discounts`
--

INSERT INTO `discounts` (`id`, `user_id`, `code`, `value`, `type`, `timeToDate`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, '', '50%', '0', '24', '2021-10-02 19:49:24', '0000-00-00 00:00:00', '2021-10-02 20:00:25'),
(2, 1, '', '30%', '0', '120', '2021-10-02 20:00:36', '0000-00-00 00:00:00', '2021-10-02 20:01:13'),
(3, 1, 'MFD-14453626', '30%', '0', '120', '2021-10-02 20:01:18', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 1, 'MFD-1011262', '50,000', '1', '120', '2021-10-02 20:01:40', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 1, 'MFD-64736240', '50%', '0', '24', '2021-10-02 20:02:17', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `isFirst` enum('0','1') COLLATE utf8mb4_persian_ci NOT NULL,
  `image` text COLLATE utf8mb4_persian_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `product_id`, `user_id`, `isFirst`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(10, 11, 1, '1', '/images/gallery/2021/Oct/02/2021_10_02_14_44_08_26.jpg', '2021-10-02 16:14:09', '2021-10-02 16:56:15', NULL),
(11, 11, 1, '0', '/images/gallery/2021/Oct/02/2021_10_02_14_44_12_68.jpg', '2021-10-02 16:14:13', NULL, NULL),
(12, 11, 1, '0', '/images/gallery/2021/Oct/02/2021_10_02_14_44_19_76.jpg', '2021-10-02 16:14:20', '2021-10-02 16:56:13', NULL),
(13, 12, 1, '0', '/images/gallery/2021/Oct/02/2021_10_02_14_47_07_41.jpg', '2021-10-02 16:17:08', '2021-10-02 16:17:46', '2021-10-02 16:18:12'),
(14, 12, 1, '0', '/images/gallery/2021/Oct/02/2021_10_02_14_47_12_77.jpg', '2021-10-02 16:17:13', '2021-10-02 16:55:38', NULL),
(15, 12, 1, '1', '/images/gallery/2021/Oct/02/2021_10_02_14_47_18_39.jpg', '2021-10-02 16:17:18', '2021-10-02 16:18:00', '2021-10-02 16:18:10'),
(16, 12, 1, '1', '/images/gallery/2021/Oct/02/2021_10_02_14_48_40_38.png', '2021-10-02 16:18:41', '2021-10-02 16:18:46', NULL),
(17, 13, 1, '0', '/images/gallery/2021/Oct/02/2021_10_02_15_26_41_12.png', '2021-10-02 16:56:42', NULL, NULL),
(18, 13, 1, '0', '/images/gallery/2021/Oct/02/2021_10_02_15_26_47_18.png', '2021-10-02 16:56:47', NULL, NULL),
(19, 13, 1, '1', '/images/gallery/2021/Oct/02/2021_10_02_15_26_51_39.png', '2021-10-02 16:56:51', '2021-10-02 16:56:59', NULL),
(20, 13, 1, '0', '/images/gallery/2021/Oct/02/2021_10_02_15_26_56_85.png', '2021-10-02 16:56:56', NULL, NULL),
(21, 13, 1, '0', '/images/gallery/2021/Oct/02/2021_10_02_17_07_54_56.png', '2021-10-02 18:37:54', NULL, '2021-10-02 18:37:59');

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `id` int(11) NOT NULL,
  `email` text COLLATE utf8mb4_persian_ci NOT NULL,
  `isActive` enum('0','1') COLLATE utf8mb4_persian_ci NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(11) NOT NULL,
  `cat_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `brand_id` bigint(20) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_persian_ci NOT NULL,
  `body` text COLLATE utf8mb4_persian_ci NOT NULL,
  `attr` text COLLATE utf8mb4_persian_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `cat_id`, `user_id`, `brand_id`, `title`, `body`, `attr`, `amount`, `discount`, `created_at`, `updated_at`, `deleted_at`) VALUES
(11, 2, 1, 1, 'لب تاپ2', '<p>علیرضا جوادی هستم2</p>\r\n', 'a:2:{s:5:\"value\";a:3:{i:0;s:7:\"4گیگ\";i:1;s:7:\"1ترا\";i:2;s:2:\"i9\";}s:3:\"key\";a:3:{i:0;s:5:\"رم2\";i:1;s:10:\"حافظه\";i:2;s:14:\"سی پی یو\";}}', 1212, 121212, '2021-10-02 16:13:55', '2021-10-02 16:15:08', NULL),
(12, 1, 1, 1, 'گوشی گلکسی', '<p>برند خوبیه</p>\r\n', 'a:2:{s:5:\"value\";a:2:{i:0;s:14:\"سامسونگ\";i:1;s:7:\"1ترا\";}s:3:\"key\";a:2:{i:0;s:14:\"کارخانه\";i:1;s:10:\"حافظه\";}}', 121, 120, '2021-10-02 16:16:43', NULL, NULL),
(13, 1, 1, 1, 'تلوزیون', '<p>تلوزیون خوب</p>\r\n', 'a:2:{s:5:\"value\";a:2:{i:0;s:14:\"سامسونگ\";i:1;s:10:\"خانگی\";}s:3:\"key\";a:2:{i:0;s:14:\"کارخانه\";i:1;s:6:\"نوع\";}}', 212, 120, '2021-10-02 16:49:31', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `email` varchar(191) NOT NULL,
  `first_name` varchar(191) NOT NULL,
  `last_name` varchar(191) NOT NULL,
  `avatar` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `status` tinyint(5) NOT NULL DEFAULT 0,
  `is_active` tinyint(5) NOT NULL DEFAULT 0,
  `verify_token` varchar(191) DEFAULT NULL,
  `user_type` varchar(191) NOT NULL,
  `remember_token` varchar(191) DEFAULT NULL,
  `remember_token_expire` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `first_name`, `last_name`, `avatar`, `password`, `status`, `is_active`, `verify_token`, `user_type`, `remember_token`, `remember_token_expire`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'mefroen@gmail.com', 'alireza', 'javadi', '', '1234987', 0, 1, NULL, 'admin', NULL, NULL, '2021-10-01 19:38:28', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `views`
--

CREATE TABLE `views` (
  `id` int(11) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `ip_address` text COLLATE utf8mb4_persian_ci NOT NULL,
  `view_count` int(11) NOT NULL,
  `page_lists` text COLLATE utf8mb4_persian_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `cat_id` bigint(20) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wishlistcategories`
--

CREATE TABLE `wishlistcategories` (
  `id` bigint(20) NOT NULL,
  `name` int(11) NOT NULL,
  `user_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bought`
--
ALTER TABLE `bought`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `cart_id` (`cart_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `parent_id` (`parent_id`);

--
-- Indexes for table `discounts`
--
ALTER TABLE `discounts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_id` (`cat_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `brand_id` (`brand_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `views`
--
ALTER TABLE `views`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `wishlistcategories`
--
ALTER TABLE `wishlistcategories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bought`
--
ALTER TABLE `bought`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `discounts`
--
ALTER TABLE `discounts`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `views`
--
ALTER TABLE `views`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wishlistcategories`
--
ALTER TABLE `wishlistcategories`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bought`
--
ALTER TABLE `bought`
  ADD CONSTRAINT `bought_ibfk_1` FOREIGN KEY (`cart_id`) REFERENCES `cart` (`id`),
  ADD CONSTRAINT `bought_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `bought_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `brands`
--
ALTER TABLE `brands`
  ADD CONSTRAINT `brands_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `discounts`
--
ALTER TABLE `discounts`
  ADD CONSTRAINT `discounts_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `galleries`
--
ALTER TABLE `galleries`
  ADD CONSTRAINT `galleries_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `product_id` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `cat_id` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`),
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `views`
--
ALTER TABLE `views`
  ADD CONSTRAINT `views_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `views_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `wishlist_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `wishlist_ibfk_3` FOREIGN KEY (`cat_id`) REFERENCES `wishlistcategories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
