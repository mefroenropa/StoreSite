-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2021 at 10:09 AM
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
  `cart_id` text COLLATE utf8mb4_persian_ci NOT NULL,
  `price` bigint(20) NOT NULL,
  `Authority` text COLLATE utf8mb4_persian_ci NOT NULL,
  `RefID` text COLLATE utf8mb4_persian_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `bought`
--

INSERT INTO `bought` (`id`, `user_id`, `cart_id`, `price`, `Authority`, `RefID`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 3, '4,5', 39000000, '2121', '42542', '2021-10-05 14:49:06', '2021-10-05 16:22:01', NULL);

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
(1, 2, 'apple', 's:56:\"/images/brandIcon/2021/Oct/05/2021_10_05_09_16_57_32.png\";', '2021-10-05 10:46:58', NULL, NULL),
(2, 2, 'samsung', 's:56:\"/images/brandIcon/2021/Oct/05/2021_10_05_09_18_36_57.png\";', '2021-10-05 10:48:38', NULL, NULL),
(3, 2, 'LG', 's:56:\"/images/brandIcon/2021/Oct/05/2021_10_05_09_19_06_80.png\";', '2021-10-05 10:49:08', NULL, NULL),
(4, 2, 'Lenovo', 's:56:\"/images/brandIcon/2021/Oct/05/2021_10_05_09_19_56_69.png\";', '2021-10-05 10:49:58', NULL, NULL),
(5, 2, 'Asus', 's:56:\"/images/brandIcon/2021/Oct/05/2021_10_05_09_20_32_63.png\";', '2021-10-05 10:50:34', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `count` bigint(20) NOT NULL,
  `price` text COLLATE utf8mb4_persian_ci NOT NULL,
  `status` enum('0','1','2','3') COLLATE utf8mb4_persian_ci NOT NULL DEFAULT '0',
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
  `image` text COLLATE utf8mb4_persian_ci NOT NULL,
  `name` varchar(244) COLLATE utf8mb4_persian_ci NOT NULL,
  `englishName` varchar(255) COLLATE utf8mb4_persian_ci NOT NULL,
  `parent_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `user_id`, `image`, `name`, `englishName`, `parent_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 2, '/images/gallery/2021/Oct/05/2021_10_05_09_09_44_15.jpg', 'دیجیتال', 'digital', 0, '2021-10-05 10:39:44', '2021-10-05 19:21:30', NULL),
(3, 2, '/images/gallery/2021/Oct/05/2021_10_05_09_10_39_10.jpg', 'خانگی', 'Homemade', 0, '2021-10-05 10:40:40', NULL, NULL),
(4, 2, '/images/gallery/2021/Oct/05/2021_10_05_09_11_24_33.jpg', 'لپ تاپ', 'loptop', 2, '2021-10-05 10:41:25', NULL, NULL),
(5, 2, '/images/gallery/2021/Oct/05/2021_10_05_09_12_30_99.jpg', 'تبلت', 'tablet', 2, '2021-10-05 10:42:30', NULL, NULL),
(6, 2, '/images/gallery/2021/Oct/05/2021_10_05_09_13_10_83.png', 'مبایل', 'mobile', 2, '2021-10-05 10:43:11', '2021-10-05 19:45:26', NULL),
(7, 2, '/images/gallery/2021/Oct/05/2021_10_05_09_14_31_62.jpg', 'یخجال', 'Refrigerator', 3, '2021-10-05 10:44:31', NULL, NULL),
(8, 2, '/images/gallery/2021/Oct/05/2021_10_05_09_16_07_84.jpg', 'تلوزیون', 'Television', 2, '2021-10-05 10:46:08', NULL, NULL);

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
  `isConfirm` enum('0','1','2') COLLATE utf8mb4_persian_ci NOT NULL DEFAULT '0',
  `likes` bigint(20) NOT NULL DEFAULT 0,
  `report_count` int(11) NOT NULL DEFAULT 0,
  `star_count` enum('1','2','3','4','5') COLLATE utf8mb4_persian_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `product_id`, `parent_id`, `comment`, `isConfirm`, `likes`, `report_count`, `star_count`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 5, NULL, 'اونایی که میگن کیفیت نداره از دیجیتال توی خود تلویزیون استفاده نکنن یه دستگاه جداگانه بخرن و کابل hdmi رو نصب کنن اونوقت میفهمین چه کیفیت تصویری میده از نظر کیفیت قابل قبوله سنگین نیست راحت قابل حمل هستش سرعتش خوبه روش برنامه و بازی نصب کردم به راحتی جواب میده انتظارات رو براورده میکنه', '1', 0, 0, '5', '2021-10-05 12:02:44', '2021-10-05 12:05:16', NULL),
(2, 2, 7, NULL, 'من ۸ کیلویی خریدم خیلی صدای کمی موقع خشک کردن داره و این عالیه چون لباسشویی قبلی موقع خشک کردن صدایی شبیه بلند شدن هواپیما از باند فرودگاه داشت', '1', 0, 0, '4', '2021-10-05 12:03:32', '2021-10-05 12:05:20', NULL),
(3, 2, 6, NULL, 'برا مغازه گرفتم و خیلی کم صداست و خنکی خوبی داره دوماهه روشنه و جا یخیش هنوز یخ نبسته و نکته جالبی که داره، زیر جا یخی یه سینی گزاشتن برای آب کردن یخ ها که رو زمین نریزه. درجه خنکی هم رو ۳ هست و آب تو جا یخی سریع یخ میزنه و داخل یخچال هم سریع خنک میشه کاملا کارش مث یخچال الجی که خونه دارم هست و خیلی راضیم. پشتش هم خیلی داغ نمیشه', '1', 0, 0, '3', '2021-10-05 12:04:42', '2021-10-05 12:05:25', NULL),
(4, 2, 4, NULL, 'خیلی عالیه', '1', 0, 0, '5', '2021-10-05 12:05:01', '2021-10-05 12:05:29', NULL),
(5, 2, 2, NULL, 'بسیار گوشی خوبی بود کیفیت دوربینش عالی بود', '1', 0, 0, '4', '2021-10-05 13:41:59', '2021-10-05 13:43:41', NULL),
(6, 3, 7, NULL, 'خیلی بد نیست خوشم اومد', '1', 0, 0, '5', '2021-10-05 20:55:27', '2021-10-05 20:56:42', NULL),
(7, 3, 7, NULL, 'صداش خیلی کمه عالی', '1', 0, 0, '5', '2021-10-05 20:56:03', '2021-10-05 20:56:47', NULL),
(8, 2, 5, NULL, 'guygygy', '0', 0, 0, '5', '2021-10-05 21:21:16', NULL, NULL);

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
(1, 1, 2, '0', '/images/gallery/2021/Oct/05/2021_10_05_09_26_31_96.jpg', '2021-10-05 10:56:31', NULL, NULL),
(2, 1, 2, '0', '/images/gallery/2021/Oct/05/2021_10_05_09_26_35_39.jpg', '2021-10-05 10:56:35', NULL, NULL),
(3, 1, 2, '0', '/images/gallery/2021/Oct/05/2021_10_05_09_26_39_69.jpg', '2021-10-05 10:56:39', NULL, NULL),
(4, 1, 2, '1', '/images/gallery/2021/Oct/05/2021_10_05_09_26_43_74.jpg', '2021-10-05 10:56:43', '2021-10-05 10:56:45', NULL),
(5, 2, 2, '0', '/images/gallery/2021/Oct/05/2021_10_05_09_35_11_51.jpg', '2021-10-05 11:05:12', NULL, NULL),
(6, 2, 2, '0', '/images/gallery/2021/Oct/05/2021_10_05_09_35_16_64.jpg', '2021-10-05 11:05:17', NULL, NULL),
(7, 2, 2, '0', '/images/gallery/2021/Oct/05/2021_10_05_09_35_20_65.jpg', '2021-10-05 11:05:21', NULL, NULL),
(8, 2, 2, '0', '/images/gallery/2021/Oct/05/2021_10_05_09_35_24_59.jpg', '2021-10-05 11:05:25', NULL, NULL),
(9, 2, 2, '0', '/images/gallery/2021/Oct/05/2021_10_05_09_35_37_30.jpg', '2021-10-05 11:05:37', NULL, NULL),
(10, 2, 2, '0', '/images/gallery/2021/Oct/05/2021_10_05_09_35_41_19.jpg', '2021-10-05 11:05:42', NULL, NULL),
(11, 2, 2, '0', '/images/gallery/2021/Oct/05/2021_10_05_09_35_46_87.jpg', '2021-10-05 11:05:47', NULL, NULL),
(12, 2, 2, '1', '/images/gallery/2021/Oct/05/2021_10_05_09_35_53_39.jpg', '2021-10-05 11:05:53', '2021-10-05 11:06:19', NULL),
(13, 2, 2, '0', '/images/gallery/2021/Oct/05/2021_10_05_09_35_57_91.jpg', '2021-10-05 11:05:58', NULL, NULL),
(14, 2, 2, '0', '/images/gallery/2021/Oct/05/2021_10_05_09_36_02_61.jpg', '2021-10-05 11:06:02', NULL, NULL),
(15, 2, 2, '0', '/images/gallery/2021/Oct/05/2021_10_05_09_36_07_13.jpg', '2021-10-05 11:06:07', NULL, NULL),
(16, 2, 2, '0', '/images/gallery/2021/Oct/05/2021_10_05_09_36_14_65.jpg', '2021-10-05 11:06:14', NULL, NULL),
(17, 3, 2, '0', '/images/gallery/2021/Oct/05/2021_10_05_09_43_15_91.jpg', '2021-10-05 11:13:15', NULL, NULL),
(18, 3, 2, '0', '/images/gallery/2021/Oct/05/2021_10_05_09_43_20_22.jpg', '2021-10-05 11:13:20', NULL, NULL),
(19, 3, 2, '0', '/images/gallery/2021/Oct/05/2021_10_05_09_43_25_67.jpg', '2021-10-05 11:13:26', NULL, NULL),
(20, 3, 2, '0', '/images/gallery/2021/Oct/05/2021_10_05_09_43_30_89.jpg', '2021-10-05 11:13:30', NULL, NULL),
(21, 3, 2, '0', '/images/gallery/2021/Oct/05/2021_10_05_09_43_34_17.jpg', '2021-10-05 11:13:34', NULL, NULL),
(22, 3, 2, '0', '/images/gallery/2021/Oct/05/2021_10_05_09_43_38_70.jpg', '2021-10-05 11:13:39', '2021-10-05 11:15:55', NULL),
(23, 3, 2, '0', '/images/gallery/2021/Oct/05/2021_10_05_09_43_43_83.jpg', '2021-10-05 11:13:43', NULL, NULL),
(24, 3, 2, '0', '/images/gallery/2021/Oct/05/2021_10_05_09_43_51_48.jpg', '2021-10-05 11:13:51', NULL, NULL),
(25, 3, 2, '0', '/images/gallery/2021/Oct/05/2021_10_05_09_43_57_23.jpg', '2021-10-05 11:13:57', NULL, NULL),
(26, 3, 2, '1', '/images/gallery/2021/Oct/05/2021_10_05_09_45_53_86.jpg', '2021-10-05 11:15:53', '2021-10-05 11:15:55', NULL),
(27, 4, 2, '0', '/images/gallery/2021/Oct/05/2021_10_05_09_49_47_99.jpg', '2021-10-05 11:19:47', NULL, NULL),
(28, 4, 2, '0', '/images/gallery/2021/Oct/05/2021_10_05_09_49_51_42.jpg', '2021-10-05 11:19:51', NULL, NULL),
(29, 4, 2, '1', '/images/gallery/2021/Oct/05/2021_10_05_09_49_55_74.jpg', '2021-10-05 11:19:55', '2021-10-05 11:20:18', NULL),
(30, 4, 2, '0', '/images/gallery/2021/Oct/05/2021_10_05_09_49_59_33.jpg', '2021-10-05 11:20:00', NULL, NULL),
(31, 4, 2, '0', '/images/gallery/2021/Oct/05/2021_10_05_09_50_05_31.jpg', '2021-10-05 11:20:05', NULL, NULL),
(32, 4, 2, '0', '/images/gallery/2021/Oct/05/2021_10_05_09_50_10_82.jpg', '2021-10-05 11:20:10', NULL, NULL),
(33, 4, 2, '0', '/images/gallery/2021/Oct/05/2021_10_05_09_50_14_21.jpg', '2021-10-05 11:20:15', NULL, NULL),
(34, 5, 2, '1', '/images/gallery/2021/Oct/05/2021_10_05_10_06_56_93.jpg', '2021-10-05 11:36:56', '2021-10-05 11:37:19', NULL),
(35, 5, 2, '0', '/images/gallery/2021/Oct/05/2021_10_05_10_06_59_84.jpg', '2021-10-05 11:37:00', NULL, NULL),
(36, 5, 2, '0', '/images/gallery/2021/Oct/05/2021_10_05_10_07_03_34.jpg', '2021-10-05 11:37:04', NULL, NULL),
(37, 5, 2, '0', '/images/gallery/2021/Oct/05/2021_10_05_10_07_08_64.jpg', '2021-10-05 11:37:09', NULL, NULL),
(38, 5, 2, '0', '/images/gallery/2021/Oct/05/2021_10_05_10_07_13_50.jpg', '2021-10-05 11:37:13', NULL, NULL),
(39, 5, 2, '0', '/images/gallery/2021/Oct/05/2021_10_05_10_07_17_18.jpg', '2021-10-05 11:37:17', NULL, NULL),
(40, 6, 2, '0', '/images/gallery/2021/Oct/05/2021_10_05_10_14_25_99.jpg', '2021-10-05 11:44:25', NULL, NULL),
(41, 6, 2, '1', '/images/gallery/2021/Oct/05/2021_10_05_10_14_29_49.jpg', '2021-10-05 11:44:29', '2021-10-05 11:44:32', NULL),
(42, 6, 2, '0', '/images/gallery/2021/Oct/05/2021_10_05_10_14_36_45.jpg', '2021-10-05 11:44:36', NULL, NULL),
(43, 6, 2, '0', '/images/gallery/2021/Oct/05/2021_10_05_10_14_40_58.jpg', '2021-10-05 11:44:40', NULL, NULL),
(44, 6, 2, '0', '/images/gallery/2021/Oct/05/2021_10_05_10_14_44_72.jpg', '2021-10-05 11:44:44', NULL, NULL),
(45, 6, 2, '0', '/images/gallery/2021/Oct/05/2021_10_05_10_14_48_52.jpg', '2021-10-05 11:44:49', NULL, NULL),
(46, 7, 2, '0', '/images/gallery/2021/Oct/05/2021_10_05_10_24_49_79.jpg', '2021-10-05 11:54:50', NULL, NULL),
(47, 7, 2, '0', '/images/gallery/2021/Oct/05/2021_10_05_10_24_53_12.jpg', '2021-10-05 11:54:53', NULL, NULL),
(48, 7, 2, '1', '/images/gallery/2021/Oct/05/2021_10_05_10_24_57_60.jpg', '2021-10-05 11:54:57', '2021-10-05 11:55:12', NULL),
(49, 7, 2, '0', '/images/gallery/2021/Oct/05/2021_10_05_10_25_02_39.jpg', '2021-10-05 11:55:02', NULL, NULL),
(50, 7, 2, '0', '/images/gallery/2021/Oct/05/2021_10_05_10_25_06_19.jpg', '2021-10-05 11:55:06', NULL, NULL),
(51, 7, 2, '0', '/images/gallery/2021/Oct/05/2021_10_05_10_25_10_34.jpg', '2021-10-05 11:55:10', NULL, NULL);

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

--
-- Dumping data for table `newsletters`
--

INSERT INTO `newsletters` (`id`, `email`, `isActive`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'mefroen@gmail.com', '0', '2021-10-05 20:16:45', NULL, NULL);

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
  `sold` int(11) NOT NULL DEFAULT 0,
  `body` text COLLATE utf8mb4_persian_ci NOT NULL,
  `attr` text COLLATE utf8mb4_persian_ci NOT NULL,
  `amount` bigint(20) NOT NULL,
  `discount` bigint(20) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `cat_id`, `user_id`, `brand_id`, `title`, `sold`, `body`, `attr`, `amount`, `discount`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 4, 2, 5, 'لپ تاپ 14 اینچی ام اس آی مدل Modern 14 - B4M', 0, '<p>در عصر ما لپ&zwnj;تاپ&zwnj;ها تبدیل به یکی از اعضای خانواده ما شده&zwnj;اند و برای مصارف خانگی تا مصارف سرور و گیمی هم می&zwnj;توان از آن&zwnj;ها بسته به نوع کانفیگی که دارند استفاده کرد. لپ تاپ 14 اینچی ام اس آی مدل Modern 14 - B4M یکی از لپ تاپ&zwnj;هایی است که می&zwnj;توان برای مصارف خانگی، اداری، مالتی&zwnj;مدیا سبک و عمومی از آن استفاده کرد. این لپ&zwnj;تاپ دارای صفحه&zwnj;نمایش 14 اینچی است که انتخاب مناسبی برای تماشای فیلم و سریال و وب&zwnj;گردی است. پردازنده&zwnj;ای که برای این لپ&zwnj;تاپ در نظر گرفته&zwnj;اند AMD Ryzen 5 با نسل 4500U بوده که می&zwnj;تواند برای شما کارایی و سرعت مطلوبی را به ارمغان بیاورد. این CPU دارای قدرت پردازشی و عملیاتی و محاسباتی خوبی است. برای لپ تاپ 14 اینچی ام اس آی مدل Modern 14 - B4M شما دارای 512 گیگابایت حافظه پرسرعت از نوع SSD (درایو حالت جامد) (Solid State Drive) هستید که می&zwnj;توانید آن را به&zwnj;راحتی ارتقا بدهید. کیفیت صفحه&zwnj;نمایش Modern 15 دارای کیفیت و رزولوشن Full HD بوده و می&zwnj;توانید با آن به طراحی&zwnj;های با کیفیت و دیدن جزئیات بالا بپردازید.</p>\r\n', 'a:2:{s:5:\"value\";a:17:{i:0;s:10:\"1.3 گرم\";i:1;s:23:\"کاربری عمومی\";i:2;s:28:\"بدون درایو نوری\";i:3;s:15:\"سه سلولی\";i:4;s:15:\"802.11 ac Wi-Fi\";i:5;s:20:\"52 وات‌ساعت\";i:6;s:3:\"SSD\";i:7;s:17:\"NVMe PCIe Gen 3x4\";i:8;s:48:\"بدون حافظه‌ی گرافیکی مجزا\";i:9;s:32:\"319x220.2x16.9 میلی‌متر\";i:10;s:68:\"USB , LAN , Wi-Fi , شیار کارت حافظه , HDMI , USB Type-C\";i:11;s:51:\"کیبورد با نور پس زمینه , وبکم\";i:12;s:15:\"IPS level panel\";i:13;s:19:\"AMD Radeon Graphics\";i:14;s:1:\"2\";i:15;s:19:\"Full HD| 1920 x1080\";i:16;s:5:\"4500U\";}s:3:\"key\";a:17:{i:0;s:6:\"وزن\";i:1;s:19:\"طبقه‌بندی\";i:2;s:19:\"درایو نوری\";i:3;s:17:\"نوع باتری\";i:4;s:41:\"توضیحات شبکه بی سیم Wi-Fi\";i:5;s:25:\"توضیحات باتری\";i:6;s:28:\"نوع حافظه داخلی\";i:7;s:45:\"سایر توضیحات حافظه داخلی\";i:8;s:42:\"حافظه پردازشگر گرافیکی\";i:9;s:10:\"ابعاد\";i:10;s:34:\"درگاه‌های ارتباطی\";i:11;s:34:\"قابلیت‌های دستگاه\";i:12;s:26:\"نوع صفحه نمایش\";i:13;s:55:\"سایر توضیحات پردازنده گرافیکی\";i:14;s:27:\"تعداد پورت USB 2.0\";i:15;s:26:\"دقت صفحه نمایش\";i:16;s:16:\"پردازنده\";}}', 23000000, 24000000, '2021-10-05 10:53:29', '2021-10-05 10:57:30', NULL),
(2, 6, 2, 2, 'گوشی موبایل سامسونگ مدل Galaxy A32 SM-A325F/DS دو سیم‌کارت ظرفیت 128 گیگابایت و رم 6 گیگابایت', 0, '<p>نقد و بررسی اجمالیSamsung Galaxy A32 SM-A325F/DS Dual Sim 128GB And 6GB RAM Mobile Phone</p>\r\n\r\n<p>گوشی موبایل Galaxy A32 با رم 6 گیگابایتی و حافظه داخلی 128گیگابایت روانه بازار شده است. این محصول دارای صفحه&zwnj;نمایش سوپر امولد است و ظاهر زیبایی دارد. سامسونگ تلاش کرده است حاشیه را در این تولید جدید خود تا حد امکان کم کند. این گوشی قاب پشتی از جنس پلاستیک دارد و قاب جلویی آن را شیشه پوشانده که البته جلوه&zwnj;ی زیبایی به گوشی داده است. این محصول سامسونگ با نسخه 11 از سیستم&zwnj;عامل اندروید روانه بازار شده است تا از هر نظر گوشی مدرن به&zwnj;حساب بیاید. صفحه&zwnj;نمایش استفاده&zwnj;شده در این گوشی 6.4 اینچی است که با استفاده از پنل Super AMOLED تصاویر شفاف و زنده&zwnj;ای را به نمایش می&zwnj;گذارد. این صفحه&zwnj;نمایش در هر اینچ 411 پیکسل را نشان می&zwnj;دهد. تراشه&zwnj;ی این محصول، Mediatek Helio G80 از تراشه&zwnj;های 12 نانومتری شرکت مدیاتک است که به همراه 6 گیگابایت رم عرضه می&zwnj;شود. تراشه&zwnj;ی گرافیکی Mali-G52 MC2 هم برای پخش ویدئو و بازی مناسب است. این نسخه از گوشی با حافظه 128گیگابایتی عرضه شده است و با استفاده از یک کارت حافظه&zwnj;ی جانبی قادر خواهید بود حافظه داخلی را باز هم افزایش دهید. دوربین اصلی A32 سنسور 64 مگاپیکسلی دارد و از نوع عریض (Wide) است. یک سنسور 8 مگاپیکسلی و دو سنسور 5 مگاپیکسلی دیگر هم در کنار این دوربین اصلی مجموعه دوربین&zwnj;های قاب پشتی A32 را تشکیل داده&zwnj;اند. دوربین سلفی 20 مگاپیکسلی هم در قاب جلویی این گوشی به کار گرفته شده است. باتری 5000 میلی&zwnj;آمپرساعتی، پشتیبانی از فناوری شارژ سریع 15 واتی، درگاه USB Type-C و حسگر اثرانگشت هم از دیگر ویژگی&zwnj;های این تازه&zwnj;وارد است. سامسونگ در ساخت این گوشی از جدیدترین فناوری&zwnj;های ساخت گوشی استفاده کرده است تا میان&zwnj;رده&zwnj;ای با باند ارتباطی مدرن و عمر طولانی باتری روانه بازار کند</p>\r\n', 'a:2:{s:5:\"value\";a:21:{i:0;s:10:\"184 گرم\";i:1;s:43:\"Dual-Core Cortex-A76 & Hexa-Core Cortex-A55\";i:2;s:27:\"2.0 و 1.8 گیگاهرتز\";i:3;s:12:\"6.4 اینچ\";i:4;s:54:\"پشتیبانی از رابط کاربری One UI 3.1\";i:5;s:3:\"5.0\";i:6;s:7:\"Android\";i:7;s:10:\"Android 11\";i:8;s:16:\"Mali-G52 MC2 GPU\";i:9;s:28:\"411 پیکسل بر اینچ\";i:10;s:26:\"802.11 a/b/g/n/acDual-band\";i:11;s:119:\"حسگری از نوع عریض (Wide) با رزولوشن 20 مگاپیکسل، دریچه‌ی دیافراگم f/2.2\";i:12;s:34:\"Mediatek Helio G80 (12 nm) Chipset\";i:13;s:26:\"پلاستیک و شیشه\";i:14;s:20:\"128 گیگابایت\";i:15;s:28:\"6.0 اینچ و بزرگتر\";i:16;s:12:\"4G , 3G , 2G\";i:17;s:8:\"A2DP, LE\";i:18;s:11:\"64 بیتی\";i:19;s:36:\"64 مگاپیکسل مگاپیکسل\";i:20;s:11:\"دو عدد\";}s:3:\"key\";a:21:{i:0;s:6:\"وزن\";i:1;s:32:\"پردازنده‌ی مرکزی\";i:2;s:45:\"فرکانس پردازنده‌ی مرکزی\";i:3;s:12:\"اندازه\";i:4;s:28:\"سایر قابلیت‌ها\";i:5;s:21:\"نسخه بلوتوث\";i:6;s:19:\"سیستم عامل\";i:7;s:28:\"نسخه سیستم عامل\";i:8;s:36:\"پردازنده‌ی گرافیکی\";i:9;s:23:\"تراکم پیکسلی\";i:10;s:5:\"Wi-Fi\";i:11;s:21:\"دوربین سلفی\";i:12;s:10:\"تراشه\";i:13;s:21:\"ساختار بدنه\";i:14;s:21:\"حافظه داخلی\";i:15;s:46:\"بازه‌ی اندازه صفحه نمایش\";i:16;s:30:\"شبکه های ارتباطی\";i:17;s:12:\"بلوتوث\";i:18;s:23:\"نوع پردازنده\";i:19;s:21:\"رزولوشن عکس\";i:20;s:26:\"تعداد سیم کارت\";}}', 6979000, 7500000, '2021-10-05 11:03:14', NULL, NULL),
(3, 5, 2, 2, 'تبلت سامسونگ مدل Galaxy Tab S7 FE LTE SM-T735 ظرفیت 64 گیگابایت', 0, '<p>تبلت &laquo; Galaxy Tab S7 FE LTE &raquo; یکی از محصولات شرکت &laquo;سامسونگ&raquo; است که با سایز 12.4 اینچ روانه بازار شده است. صفحه&zwnj;نمایش این محصول از نوع TFT است و وضوح تصویر 2560&times;1600 پیکسل با تراکم 243 پیکسل بر اینچ را به تصویر می&zwnj;کشد. ظرفیت داخلی این تبلت 64 گیگابایت است و می&zwnj;تواند فضای مناسبی برای ذخیره&zwnj;سازی حجم زیادی از فایل&zwnj;های صوتی و تصویری، بازی و اپلیکیشن&zwnj;های مختلف را در اختیار کاربران بگذارد، همچنین می توان این میزان را با استفاده از حافظه microSD افزایش داد. با توجه به پشتیبانی این محصول از یک سیم&zwnj;کارت می&zwnj;توانید از آن برای اتصال به شبکه&zwnj;های ارتباطی 3G و 4G استفاده کنید. سنسور دوربین اصلی این محصول 8 مگاپیکسل است. دوربین سلفی که از سنسوری 5 مگاپیکسلی بهره برده، می&zwnj;تواند برای برقراری ارتباطات ویدئویی بسیار کارآمد باشد. سیستم&zwnj;عامل نسخه&zwnj;ی 11 اندروید و رابط کاربری One UI 3.1 به صورت پیش&zwnj;فرض در این محصول ایفای نقش می&zwnj;کند. یک باتری غیر قابل تعویض 10090 میلی&zwnj;آمپرساعتی، با قابلیت شارژ سریع وظیفه&zwnj;ی تأمین انرژی آن را به عهده دارد.</p>\r\n', 'a:2:{s:5:\"value\";a:23:{i:0;s:10:\"608 گرم\";i:1;s:31:\"دارد - یک سیم کارت\";i:2;s:7:\"microSD\";i:3;s:19:\"یک ترابایت\";i:4;s:26:\"بین 10 تا 13 اینچ\";i:5;s:12:\"2G , 3G , 4G\";i:6;s:8:\"A2DP, LE\";i:7;s:35:\"جک 3.5 میلی‌متری صدا\";i:8;s:25:\"چهار گیگابایت\";i:9;s:15:\"185.0x284.8x6.3\";i:10;s:14:\"USB Type-C 3.2\";i:11;s:9:\"1600x2560\";i:12;s:86:\"شتاب‌سنج (Accelerometer) , حسگر نور محیط , ژیروسکوپ (Gyro)\";i:13;s:33:\"دوربین 8 مگاپیکسلی\";i:14;s:4:\"12.4\";i:15;s:25:\"قابلیت مکالمه\";i:16;s:19:\"64 گیگابایت\";i:17;s:49:\"سایز نانو (8.8 × 12.3 میلی‌متر)\";i:18;s:39:\"Dual-Core Kryo 570 & Hexa-Core Kryo 570\";i:19;s:28:\"243 پیکسل بر اینچ\";i:20;s:26:\"2.2 , 1.8 گیگاهرتز\";i:21;s:3:\"5.0\";i:22;s:36:\"10090 میلی‌آمپر‌ساعت\";}s:3:\"key\";a:23:{i:0;s:6:\"وزن\";i:1;s:50:\"قابلیت پشتیبانی از سیم کارت\";i:2;s:41:\"پشتیبانی از کارت حافظه\";i:3;s:43:\"حداکثر ظرفیت کارت حافظه\";i:4;s:46:\"بازه‌ی اندازه صفحه نمایش\";i:5;s:30:\"شبکه های ارتباطی\";i:6;s:12:\"بلوتوث\";i:7;s:15:\"رابط‌ها\";i:8;s:15:\"مقدار رم\";i:9;s:10:\"ابعاد\";i:10;s:34:\"درگاه‌های ارتباطی\";i:11;s:14:\"رزولوشن\";i:12;s:15:\"حس‌گرها\";i:13;s:34:\"قابلیت‌های دوربین\";i:14;s:12:\"اندازه\";i:15;s:30:\"قابلیت‌های تبلت\";i:16;s:21:\"حافظه داخلی\";i:17;s:22:\"قطع سیم کارت\";i:18;s:32:\"پردازنده‌ی مرکزی\";i:19;s:23:\"تراکم پیکسلی\";i:20;s:45:\"فرکانس پردازنده‌ی مرکزی\";i:21;s:21:\"نسخه بلوتوث\";i:22;s:10:\"باتری\";}}', 14750000, 18000000, '2021-10-05 11:11:12', NULL, NULL),
(4, 6, 2, 1, 'گوشی موبایل اپل مدل iPhone 12 Pro Max A2412 دو سیم‌ کارت ظرفیت 256 گیگابایت', 0, '<p>گوشی موبایل &laquo;iPhone 12 Pro MAX&raquo; پرچم&zwnj;دار جدید شرکت اپل است که با چند ویژگی جدید و دوربین چهارگانه روانه بازار شده است. اپل برای ویژگی&zwnj;ها و طراحی کلی این گوشی از همان فرمول چند سال اخیرش استفاده کرده است. نمایشگر آیفون 12 Pro MAX به پنل Super Retina مجهز &zwnj;شده است تا تصاویر بسیار مطلوبی را به کاربر عرضه کند. این نمایشگر رزولوشن بسیار بالایی دارد؛ به&zwnj;طوری&zwnj;که در اندازه&shy; 6.7 اینچی&zwnj;اش، حدود 458 پیکسل را در هر اینچ جا داده است که دقیقاً با تراکم پیکسلی iPhone XS برابر است. قاب پشتی آیفون جدید هم از شیشه ساخته&zwnj; شده تا هم گوشی مشکل آنتن&zwnj;&zwnj;دهی نداشته باشد و هم امکان شارژ بی&zwnj;&zwnj;سیم باتری در این گوشی وجود داشته باشد. البته قابی فلزی این بدنه شیشه&zwnj;ای را در خود جای داده است. این بدنه&shy;&zwnj;ی زیبا در مقابل خط&zwnj;&zwnj;وخش مقاومت زیادی دارد؛ پس خیالتان از این بابت که آب و گردوغبار به&zwnj;&zwnj;راحتی روی آیفون 12 Pro MAX تأثیر نمی&zwnj;&zwnj;گذارد، راحت باشد. علاوه&zwnj;براین لکه و چربی هم روی این صفحه&zwnj;نمایش باکیفیت تأثیر چندانی ندارند اما این هم پایان کار نیست، آیفون جدید می&zwnj;تواند به مدت 30 دقیقه در عمق 4 متری آب دوام بیاورد. تشخیص چهره با استفاده از دوربین جلو دیگر ویژگی است که در آیفون جدید اپل به کار گرفته شده است. اما جالب&zwnj;ترین و واضح&zwnj;ترین تفاوت در این محصول جدید، دوربین&zwnj;هایی است که این بار به شکل چهار&zwnj;گانه در قاب پشتی جا خوش کرده&zwnj;اند. سه دوربین با سنسورهای 12مگاپیکسلی به&zwnj;همراه دوربین چهارم از نوع عمیق TOF 3D LiDAR scanner عکس&zwnj;هایی با کیفیتِ بسیار بالا و کاملاً رضایت&zwnj;بخش را به کاربر هدیه می&zwnj;دهد. قابلیت اتصال به شبکه&shy;&zwnj;های 4G و 5G، بلوتوث نسخه&zwnj; 5، نسخه&shy;&zwnj;ی 14 از iOS دیگر ویژگی&zwnj;های این گوشی هستند. ازنظر سخت&zwnj;&zwnj;افزاری هم این گوشی از تراشه&shy;&zwnj;ی جدید A14 بهره می&zwnj;برد که تا بتواند علاوه بر کارهای معمول، از قابلیت&zwnj;های جدید واقعیت مجازی که اپل این روزها روی آن تمرکز خاصی دارد، پشتیبانی کند. به گفته خود شرکت اپل این گوشی دارای سرعتی 80 برابر نسخه 11 خود است.</p>\r\n\r\n<p>مشاهده کمتر</p>\r\n', 'a:2:{s:5:\"value\";a:10:{i:0;s:10:\"228 گرم\";i:1;s:13:\"Hexa-core CPU\";i:2;s:12:\"6.7 اینچ\";i:3;s:23:\"Scratch-resistant glass\";i:4;s:3:\"5.0\";i:5;s:3:\"iOS\";i:6;s:6:\"iOS 14\";i:7;s:31:\"Apple GPU (4-core graphics) GPU\";i:8;s:28:\"458 پیکسل بر اینچ\";i:9;s:25:\"Wi-Fi 802.11 a/b/g/n/ac/6\";}s:3:\"key\";a:10:{i:0;s:6:\"وزن\";i:1;s:32:\"پردازنده‌ی مرکزی\";i:2;s:12:\"اندازه\";i:3;s:28:\"سایر قابلیت‌ها\";i:4;s:21:\"نسخه بلوتوث\";i:5;s:19:\"سیستم عامل\";i:6;s:28:\"نسخه سیستم عامل\";i:7;s:36:\"پردازنده‌ی گرافیکی\";i:8;s:23:\"تراکم پیکسلی\";i:9;s:5:\"Wi-Fi\";}}', 35400000, NULL, '2021-10-05 11:18:27', NULL, NULL),
(5, 8, 2, 3, 'تلویزیون کیو ال ای دی هوشمند جی پلاس مدل GTV-75LQ921S سایز 75 اینچ', 0, '<p>GTV-75LQ921S یکی از پرچمداران برند G-Plus است. تلویزیون ال ای دی هوشمند جی پلاس مدل GTV-75LQ921S سایز 75 اینچ توسط شرکت جی پلاس به بازار عرضه شده است. این تلویزیون 75 اینچی، دارای سه درگاه HDMI و دو درگاه USB است. تمامی جزییات تصاویر در این قاب 75 اینچی با کیفیت بسیار بالای 4K به&zwnj;خوبی مشخص است. از قابلیت&zwnj;های آن می&zwnj;توان به ARC- Audio Return Channel اشاره کرد. گیرنده دیجیتالی این دستگاه شما را خرید وسیله&zwnj;ی اضافی بی&zwnj;نیاز می&zwnj;کند و از طریق ویژگی ماشین زمان (Time Shift) و Live play back می&zwnj;توانید تصاویر را بر روی حافظه خارجی ضبط کنید و در فرصت مناسب به تماشای آن&zwnj;ها بنشینید. به این طریق شما هیچکدام از برنامه&zwnj;های محبوب خود را از دست نخواهید داد. به وسیله&zwnj;ی قابلیت mirroring و Mobile TV On می&zwnj;توانید تلویزیون را با گوشی موبایل روشن کنید و یا صفحه&zwnj;ی موبایل خود را بر روی تلویزیون نمایش دهید. این محصول از کیفیت 4K بهره می&zwnj;برد و تصویر مناسب و با کیفیتی را در اختیار شما می&zwnj;گذارد. علاوه بر این هوشمند بودن آن امکان وب گردی و اتصال به اینترنت را برای شما فراهم می&zwnj;کند. با این تلویزیون می&zwnj;توانید با گوشی&zwnj;های IOS هم کار کنید. نوع صفحه&zwnj;نمایش این تلویزیون شگفت&zwnj;انگیز QLED بوده که از نظر تولید حرارت، مصرف انرژی از LED بسیار پایین&zwnj;تر و از نظر کیفیت و وضوح تصویر و طول&zwnj;عمر بسیار بالاتر است.</p>\r\n', 'a:2:{s:5:\"value\";a:12:{i:0;s:47:\"دارای اشتراک رایگان نماوا\";i:1;s:13:\"Ultra HD - 4K\";i:2;s:12:\"2160 × 3840\";i:3;s:4:\"16:9\";i:4;s:11:\"75 اینچ\";i:5;s:7:\"Android\";i:6;s:24:\"چهار هسته‌ای\";i:7;s:11:\"سه عدد\";i:8;s:9:\"10 وات\";i:9;s:15:\"برق شهری\";i:10;s:29:\"مقدار حافظه 2GB RAM\";i:11;s:26:\"حافظه داخلی 16GB\";}s:3:\"key\";a:12:{i:0;s:23:\"سایر توضیحات\";i:1;s:21:\"کیفیت تصویر\";i:2;s:14:\"رزولوشن\";i:3;s:19:\"نسبت تصویر\";i:4;s:17:\"سایز صفحه\";i:5;s:28:\"نوع رابط هوشمند\";i:6;s:16:\"پردازنده\";i:7;s:33:\"تعداد درگاه های HDMI\";i:8;s:26:\"توان هر بلندگو\";i:9;s:19:\"منبع انرژی\";i:10;s:37:\"امکانات و قابلیت‌ها\";i:11;s:1:\".\";}}', 39000000, NULL, '2021-10-05 11:35:06', '2021-10-05 11:39:49', NULL),
(6, 7, 2, 3, 'یخچال و فریزر دوقلو دیپوینت مدل دی چهار اینورتر D4i', 0, '<p>دیپوینت برند ایرانی است که کیفیت محصولات تولید شده توسط این شرکت با کالاهای مشابه کره ای رقابت می کند.یخچال و فریزر دوقلو D4 با ظرفیت 330 لیتر برای یخچال و 277 لیتر برای فریزر، در مجموع فضای بسیار جاداری را برای ذخیره و انجماد مواد غذایی در اختیار شما می&zwnj;گذارد. می توان اینگونه بیان کرد که D5 محصولی متناسب با خانواده های پرجمعیت یا افرادی است که حجم زیادی از مواد منجمد را نگهداری می کنند.D4 دارای دو دستگاه کاملا جداست اما این دو کاملا با یکدیگر هماهنگ عمل میکنند و یک محصول را تشکیل می دهند.از مشخصه های بارز این محصول میتوان به موارد زیر اشاره نمود:1- به هیچ وجه برفک نمیزند. (NO FROST)2- مجهز به آبریز بیرونی می باشد:که باعث کاهش نیاز به باز و بسته کردن درب و در نتیجه کاهش مصرف برق می شود.3- دارای حالت انجماد سریع4-دارای محفظه نگهداری مرغ ، گوشت و سبزیجات با حفظ تازگیپ5- سیستم روشنایی LED کم مصرف</p>\r\n', 'a:2:{s:5:\"value\";a:17:{i:0;s:13:\"153000 گرم\";i:1;s:15:\"قفل کودک\";i:2;s:11:\"سه عدد\";i:3;s:13:\"پنج عدد\";i:4;s:12:\"551 تا 700\";i:5;s:14:\"نوفراست\";i:6;s:52:\"یخساز نیمه اتوماتیک (منبع آب)\";i:7;s:17:\"بدون برفک\";i:8;s:2:\"A+\";i:9;s:2:\"28\";i:10;s:13:\"مخزن آب\";i:11;s:22:\"1800 سانتی متر\";i:12;s:8:\"دارد\";i:13;s:3:\"600\";i:14;s:3:\"607\";i:15;s:3:\"277\";i:16;s:3:\"330\";}s:3:\"key\";a:17:{i:0;s:6:\"وزن\";i:1;s:21:\"سیستم ایمنی\";i:2;s:28:\"تعداد طبقات/کشو\";i:3;s:32:\"تعداد طبقات یخچال\";i:4;s:44:\"محدوده گنجایش کل به لیتر\";i:5;s:44:\"نوع مقاومت در برابر برفک\";i:6;s:17:\"مدل طراحی\";i:7;s:25:\"امکانات یخچال\";i:8;s:32:\"نمودار مصرف انرژی\";i:9;s:29:\"گنجایش کل به فوت\";i:10;s:21:\"مخزن دستگاه\";i:11;s:12:\"ارتفاع\";i:12;s:54:\"دارای کشو با تنظیم دما و رطوبت\";i:13;s:8:\"پهنا\";i:14;s:31:\"گنجایش کل به لیتر\";i:15;s:21:\"گنجایش فریز\";i:16;s:23:\"گنجایش یخچال\";}}', 23637000, NULL, '2021-10-05 11:42:51', NULL, NULL),
(7, 3, 2, 3, 'ماشین لباسشویی پاکشوما مدل TFU-94407 ظرفیت 9 کیلوگرم', 0, '<h1>ماشین لباسشویی پاکشوما مدل TFU-94407</h1>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>زمانی شستن لباس&zwnj;ها تنها نمایانگر تمیزی و پاکیزگی بود، اما در دنیای کنونی علاوه بر تمیزی و پاکیزگی، شست&zwnj;وشوی لباس&zwnj;ها بیان&zwnj;گر شخصیت، سبک پوشش و زندگی نیز هست، علاوه&zwnj;براین، امروزه کارایی تنها نکته مهم در خرید یک ماشین لباسشویی نیست؛ چراکه ظاهر ماشین لباسشویی هم مانند دیگر لوازم آشپزخانه نشانی از ذوق و سلیقه صاحب خانه است. همین موضوع در کنار سبک زندگی امروزی و انواع مختلف پارچه&zwnj;ها و بافت&zwnj;ها خرید یک ماشین لباسشویی را به کار مشکل تبدیل کرده است. ماشین لباسشویی پاکشوما مدل TFU-94407&nbsp; دارای ظرفیت ۹ کیلوگرمی است. بنابراین، برای یک خانواده ۵ تا ۶ نفره مناسب است. علاوه&zwnj;براین، این محصول دارای قابلیت شست&zwnj;وشوی لباس کودک است که همین ارزش مطلوبی به آن داده است</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src=\"https://dkstatics-public.digikala.com/digikala-reviews/c10b6000044662d29e6fd8dc6acce7da641093d9_1598938148.jpg?x-oss-process=image/quality,q_70\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>رتبه انرژی</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>مصرف انرژی فاکتور مهم و تعیین&zwnj;کننده&zwnj;ای در دستگاه&zwnj;های پرمصرف است. ماشین لباس&zwnj;شویی هم یکی از سردمداران لیست لوازم پرمصرف در خانه است. برند پاکشوما هم یکی از شرکت&zwnj;هایی است که تلاش کرده است با به&zwnj;کارگیری فناوری&zwnj;های متنوع میزان بازدهی ماشین لباسشویی را تا حد زیادی بالا ببرد. مصرف انرژی &nbsp;TFU-94407 میزان بهبود مطلوبی در مصرف انرژی را در میان دستگاه&zwnj;&zwj;&zwnj;های دارای نشان مصرف انرژی دارد. با توجه به موتور قدرتمند این ماشین لباسشویی که با سرعت حداکثری 1400 دور در دقیقه می&zwnj;چرخد، این رتبه انرژی به معنی مصرف بهینه و مهندسی شده&zwnj;ای است که پاکشوما&nbsp;برای این محصول در نظر گرفته است.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<blockquote>\r\n<p>ماشین لباسشویی پاکشوما مدل TFU-94407 دارای رتبه انرژی A+++است که سقف میزان صرفه&zwnj;جویی است.</p>\r\n</blockquote>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src=\"https://dkstatics-public.digikala.com/digikala-reviews/c10b6000044662d29e6fd8dc6acce7da641093d9_1598938304.jpg?x-oss-process=image/quality,q_70\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>تأخیر در زمان شست&zwnj;وشو</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>با وجود قابلیت Delay&nbsp; یا شست&zwnj;وشوی با تأخیر که با نام امکان تنظیم زمان شروع کار هم مشهور است، می&zwnj;توانید زمان آغاز شست&zwnj;وشو را به تعویق بیندازید. به&zwnj;این&zwnj;ترتیب انعطاف کار دستگاه بسیار بیشتر شده و می&zwnj;توانید با توجه به برنامه&zwnj;ی روزانه&zwnj;ی خود کارکرد دستگاه را هماهنگ کنید. با موکول کردن شروع شست&zwnj;وشو به زمان دلخواه می&zwnj;توانید پایان کار دستگاه را تشخیص داده و به&zwnj;طور مثال آن را با زمان بیدارشدن از خوابتان هماهنگ کنید و با خیال راحت پهن کردن لباس&zwnj;ها را به صبح موکول کنید. درواقع این موضوع باعث می&zwnj;شود تا بتوان در هر زمان از روز و شب زمان شروع کار دستگاه را مشخص کرد. باتوجه به سرعت زندگی امروزی، شاید این ویژگی بیشتر از آنچه فکر می&zwnj;کنید به&zwnj;کارتان خواهد آمد.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src=\"https://dkstatics-public.digikala.com/digikala-reviews/35d897d4fe4c1b537877a51f9b7a50df8c912d93_1598938351.jpg?x-oss-process=image/quality,q_70\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>بیشتر بودن برنامه شست&zwnj;وشو در یک ماشین لباسشویی به معنی باز بودن دست کاربر برای انتخاب یک برنامه برای لباس موردنظرش است. پاکشوما مدل TFU-94407 درواقع 21 حالت انتخابی دارد که از طریق ولوم بزرگ چرخشی آن می&zwnj;توانید برنامه&zwnj;ی دلخواهتان را انتخاب کنید. از میان برنامه&zwnj;های متنوع&nbsp; شست&zwnj;وشو در این محصول به برخی اشاره می&zwnj;کنیم؛ برنامه DUVET امکان شست&zwnj;وشوی ملحفه و روتختی را برای کاربر ایجاد می&zwnj;کند. همان&zwnj;طور که از نام برنامه Cotton برداشت می&zwnj;شود، این برنامه برای شست و شوی لباس&zwnj;های نخی و کتان طراحی شده است. برنامه دیگری که در این ماشین لباسشویی به کار گرفته شده است، امکان شست و شوی سریع است که برای سبک زندگی پرسرعت امروزی ایجاد شده است. برنامه شست&zwnj;وشوی لباس&zwnj;های رنگی و لباس&zwnj;های تیره هم دیگر انتخاب&zwnj;های مهمی هستند که کاربر به&zwnj;راحتی به آن&zwnj;ها دسترسی دارد. همانطور که اشاره شد، برنامه شست&zwnj;وشوی لباس&zwnj;های کودک هم در این محصول دیده می&zwnj;شود که برای خانواده&zwnj;هایی که نورسیده دارند بسیار کاربردی خواهد بود</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src=\"https://dkstatics-public.digikala.com/digikala-reviews/200729d28ff58c3455935d1b18a1f55226afc359_1598938480.jpg?x-oss-process=image/quality,q_70\" /></p>\r\n', 'a:2:{s:5:\"value\";a:18:{i:0;s:31:\"500x600x850 سانتی‌متر\";i:1;s:104:\"صرفه‌جویی (ECO) , لباس بچه (Baby Care) , لباس مشکی , شست‌وشوی سریع\";i:2;s:16:\"به سمت چپ\";i:3;s:8:\"ساده\";i:4;s:16:\"9 کیلوگرم\";i:5;s:42:\"اضافه کردن لباس حین کار\";i:6;s:27:\"1400 دور در دقیقه\";i:7;s:18:\"درب از جلو\";i:8;s:19:\"صفحه نمایش\";i:9;s:2:\"78\";i:10;s:21:\"850 سانتی متر\";i:11;s:3:\"180\";i:12;s:2:\"59\";i:13;s:13:\"2900949006836\";i:14;s:3:\"600\";i:15;s:3:\"LED\";i:16;s:23:\"500 سانتی‌متر\";i:17;s:30:\"-دارای نمایشگر LED\";}s:3:\"key\";a:18:{i:0;s:10:\"ابعاد\";i:1;s:69:\"پشتیبانی از برنامه‌ها و حالت‌های خاص\";i:2;s:24:\"جهت بازشدن در\";i:3;s:26:\"طبقه بندی رنگی\";i:4;s:17:\"ظرفیت دیگ\";i:5;s:42:\"امکانات ماشین لباسشویی\";i:6;s:28:\"سرعت چرخش موتور\";i:7;s:15:\"نوع مخزن\";i:8;s:34:\"دستگاه نمایش وضعیت\";i:9;s:30:\"میزان صدای آبکشی\";i:10;s:12:\"ارتفاع\";i:11;s:29:\"زاویه باز شدن در\";i:12;s:17:\"میزان صدا\";i:13;s:10:\"شناسه\";i:14;s:8:\"پهنا\";i:15;s:34:\"توضیحات صفحه نمایش\";i:16;s:6:\"عمق\";i:17;s:26:\"سایر ویژگی‌ها\";}}', 12000000, 15000000, '2021-10-05 11:53:26', '2021-10-05 11:59:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `count` int(11) NOT NULL,
  `firstCount` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

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
(1, 'Guest@gmail.com', 'مهمان', '220044', '/images/avatar/2021/Oct/05/2021_10_05_08_37_09_76.jpg', '$2y$10$NBiefWTu4Ks2.ayTud.6r.FK/rxRaInnAwtDMHT0xa7Yjv9cG51C.', 0, 1, '5f61b5831c2caed80e6adacd2aaae654800e1bca1764fcc0993b2e0a00a08694', 'guest', NULL, NULL, '2021-10-05 10:07:09', NULL, NULL),
(2, 'mefroen@gmail.com', 'ali', 'reza', '/images/avatar/2021/Oct/05/2021_10_05_09_07_18_62.jpg', '$2y$10$J5f06b7kBUBUub.rgOM04.N5c0.bRz80k.Brlxqv5u5Y7BNNAcU.O', 0, 1, 'f384691fb816cdb3f5b7376ec0dd023859137c1e26df41ce10c0af8b18388154', 'admin', NULL, NULL, '2021-10-05 10:37:19', '2021-10-05 10:37:37', NULL),
(3, 'javadiali631@gmail.com', 'alireza', 'javadi', '/images/avatar/2021/Oct/05/2021_10_05_15_22_27_63.png', '$2y$10$Txnucac.idERZg/4lv0EOOiTTXeZa56FMYbun7Uj58FtM7Q9tJlcG', 0, 1, 'c34385979e68fa8df0022c3b14f03a43823356a9c0de3d1f50c8aebbd8cbe36a', 'user', NULL, NULL, '2021-10-05 13:48:07', '2021-10-05 16:52:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `views`
--

CREATE TABLE `views` (
  `id` bigint(20) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `ip_address` text COLLATE utf8mb4_persian_ci NOT NULL,
  `view_count` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `views`
--

INSERT INTO `views` (`id`, `product_id`, `ip_address`, `view_count`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, '::1', 4, '2021-10-05 10:57:38', '2021-10-05 13:44:33', NULL),
(2, 2, '::1', 4, '2021-10-05 11:06:32', '2021-10-06 11:25:36', NULL),
(3, 3, '::1', 6, '2021-10-05 11:15:04', '2021-10-06 11:37:57', NULL),
(4, 4, '::1', 5, '2021-10-05 11:20:37', '2021-10-06 11:31:43', NULL),
(5, 5, '::1', 5, '2021-10-05 11:37:26', '2021-10-06 11:36:36', NULL),
(6, 6, '::1', 7, '2021-10-05 11:45:04', '2021-10-06 11:27:52', NULL),
(7, 7, '::1', 12, '2021-10-05 11:55:27', '2021-10-06 11:36:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `product_id`, `user_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 2, '2021-10-05 10:57:55', NULL, '2021-10-05 10:58:22'),
(2, 6, 3, '2021-10-05 15:56:21', NULL, '2021-10-05 15:56:29'),
(3, 7, 3, '2021-10-05 16:26:02', NULL, '2021-10-05 20:54:32'),
(4, 6, 3, '2021-10-05 20:42:04', NULL, '2021-10-05 20:54:35'),
(5, 5, 3, '2021-10-05 20:43:15', NULL, '2021-10-05 20:54:37'),
(6, 7, 2, '2021-10-05 21:20:42', NULL, '2021-10-05 21:50:21'),
(7, 7, 3, '2021-10-06 11:12:35', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bought`
--
ALTER TABLE `bought`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

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
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

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
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bought`
--
ALTER TABLE `bought`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `discounts`
--
ALTER TABLE `discounts`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `views`
--
ALTER TABLE `views`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bought`
--
ALTER TABLE `bought`
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
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `comments_ibfk_3` FOREIGN KEY (`parent_id`) REFERENCES `comments` (`id`);

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
-- Constraints for table `store`
--
ALTER TABLE `store`
  ADD CONSTRAINT `store_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `store_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `views`
--
ALTER TABLE `views`
  ADD CONSTRAINT `views_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `wishlist_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
