-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 24, 2017 at 03:23 PM
-- Server version: 5.7.20-0ubuntu0.17.04.1
-- PHP Version: 7.0.22-0ubuntu0.17.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mystore`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `slug`, `brand_logo`, `created_at`, `updated_at`) VALUES
(16, 'nepali brand', 'nepali_brand', 'brandLogo/nepalibrand2017-12-1707:35:42.jpg', '2017-12-17 13:50:42', '2017-12-18 03:09:12'),
(17, 'korean brand', 'korean_brand', 'brandLogo/korean2017-12-1707:36:00.png', '2017-12-17 13:51:00', '2017-12-18 03:07:46'),
(18, 'indian brand dipesh', 'indian_brand', 'brandLogo/indian2017-12-1707:37:02.jpg', '2017-12-17 13:52:02', '2017-12-18 04:07:55');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `created_at`, `updated_at`) VALUES
(1, 'book', 'book', 'this is shirt', '2017-12-17 03:39:35', '2017-12-20 10:25:52'),
(2, 'electronic', 'electronic', 'paint collection goes here', '2017-12-17 03:39:59', '2017-12-20 10:26:19'),
(3, 'gems stone', 'gem_stone', 'astrology goods', '2017-12-20 10:27:02', '2017-12-20 10:27:02'),
(4, 'men mrt', 'men_mrt', 'all men goods', '2017-12-20 10:27:39', '2017-12-20 10:27:39'),
(5, 'women mrt', 'women_mrt', 'all women good', '2017-12-20 10:28:10', '2017-12-20 10:28:10'),
(6, 'Nepal Handcrift', 'nepal_handcrift', 'all handcrift are', '2017-12-20 10:28:50', '2017-12-20 10:28:50'),
(7, 'website & software', 'website_software', 'all website and software are here', '2017-12-20 10:30:23', '2017-12-20 10:30:23');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `products_id` int(11) NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `products_id`, `comment`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 5, 'sdfasdfdsfasdf', 'dads@gmail.com', 1, '2017-12-22 01:17:08', '2017-12-22 01:17:08'),
(2, 5, 'this is just for tesitn g', 'zz@gmail.com', 0, '2017-12-22 01:20:50', '2017-12-22 01:20:50'),
(3, 5, 'this is just for tesitn g', 'zz@gmail.com', 1, '2017-12-22 01:20:57', '2017-12-22 01:20:57'),
(4, 5, 'this is jusft for estin purpos ga goe had', 'bcd@gmail.com', 0, '2017-12-22 01:22:48', '2017-12-22 01:22:48'),
(5, 5, 'this is jusft fo rtesign goes  here', 'hhh@gmail.com', 0, '2017-12-22 01:25:43', '2017-12-22 01:25:43'),
(6, 5, 'dipesh banjade going to comment on this product', 'dbsandesh@gmail.com', 0, '2017-12-22 01:48:05', '2017-12-22 01:48:05');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(16, '2014_10_12_000000_create_users_table', 1),
(17, '2014_10_12_100000_create_password_resets_table', 1),
(18, '2017_12_04_102008_create_sysadmins', 1),
(19, '2017_12_05_055814_create_categories_table', 1),
(20, '2017_12_05_064253_create_products_table', 1),
(21, '2017_12_17_091016_create_brands_table', 1),
(22, '2017_12_20_052449_create_support_forms_table', 2),
(23, '2017_12_20_110626_create_subscribes_table', 3),
(24, '2017_12_20_124909_create_comments_table', 4),
(25, '2017_12_20_164415_create_sub_categories_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_manufactural_name` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `categories_id` int(11) NOT NULL,
  `sub_categories_id` int(200) DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featured` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `brands_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featured_img_sm` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured_img_lg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `featured_product` tinyint(1) NOT NULL,
  `vedio_link` text COLLATE utf8mb4_unicode_ci,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `address`, `phone`, `email`, `product_slug`, `author_manufactural_name`, `categories_id`, `sub_categories_id`, `description`, `size`, `sku`, `quantity`, `price`, `discount`, `featured`, `brands_id`, `featured_img_sm`, `featured_img_lg`, `status`, `featured_product`, `vedio_link`, `product_image`, `created_at`, `updated_at`) VALUES
(1, 'blue jean', 'lainchour kathmandu', '9807573751', 'dipeshbanjade@gmail.com', 'blue_paint', 'dipesh banjade', 1, 5, 'this is just for testing', '32', '123456', 45, '34', '0', 'it will goes later i love testing stub<br>', '17', 'product/featured_image_sm/bluejean2017-12-17 09:34:45.jpeg', 'product/featured_image_lg/bluejean2017-12-17 09:34:45.jpeg', 1, 1, 'test', 'product/product_image/bluejean2017-12-17 09:34:45.jpeg', '2017-12-17 03:49:45', '2017-12-23 02:20:19'),
(3, 'shirt', 'N/A', 'N/A', 'N/A', 'shirt', 'fdsf', 3, 1, 'this is just for testing', '43', 'sdfds', 43, '34', '0', 'it will goes later', NULL, 'product/featured_image_sm/shirt2017-12-17 08:11:32.jpg', 'product/featured_image_lg/shirt2017-12-17 08:11:32.jpg', 1, 1, 'sdfsad', 'product/product_image/shirt2017-12-17 08:11:32.jpg', '2017-12-17 14:26:32', '2017-12-23 01:57:52'),
(4, 'jeams', NULL, NULL, NULL, 'jeans', 'lainchour', 2, 2, 'this product is just for tresinbg', '32', '1234', 45, '23', '5%', '<ol><li>featguaeraas</li><li>sfdalsdkfjl;</li><li>sadfkjas;dl</li><li>lkjadsfl;</li><li>lksjdf;l</li><li>lsadkjf;lsad<br></li></ol>', '17', 'product/featured_image_sm/jeams2017-12-18 05:49:47.jpg', 'product/featured_image_lg/jeams2017-12-18 05:49:47.jpg', 1, 1, 'sfasd', 'product/product_image/jeams2017-12-18 05:49:47.jpeg', '2017-12-18 12:04:47', '2017-12-18 12:04:47'),
(5, 'dipesh product testing', NULL, NULL, NULL, 'dipesh', 'banjade', 1, 4, 'this is just for testing code', '32', 'thsi sadf', 76, '45', '10%', '<ol><li>dipesh </li><li>banjade&nbsp;&nbsp;&nbsp;&nbsp;</li><li>bangain</li><li>sdfsd<br></li></ol>', '17', 'product/featured_image_sm/dipeshproducttesting2017-12-18 05:56:20.jpg', 'product/featured_image_lg/dipeshproducttesting2017-12-18 05:56:20.jpg', 1, 1, 'asdfds', 'product/product_image/dipeshproducttesting2017-12-18 05:56:20.jpg', '2017-12-18 12:11:20', '2017-12-18 12:11:20'),
(6, 'color phone', NULL, NULL, NULL, 'color_phone', 'color', 2, 4, 'I have a custom method that I\'d like to use globally. ... Yes, it will run using my models if I leave it inside builder.php but that doesn\'t seem like the correct way of doing it. ... Because that function is a modified increment() function which resides in Vendor/Laravel/Framework/src/Illuminate/Query/builder.php.', '12', '123456', 10, '25000', '15%', '<ul><li>Mobile phones are just now beginning to be as vital to North Americans \r\nas they have been to Asians. You can always see what is coming to store \r\nshelves in the next six months to a year by looking at the models that \r\nare currently available in Japan</li><li>Mobile phones are just now beginning to be as vital to North Americans \r\nas they have been to Asians. You can always see what is coming to store \r\nshelves in the next six months to a year by looking at the models that \r\nare currently available in Japan</li><li>Mobile phones are just now beginning to be as vital to North Americans \r\nas they have been to Asians. You can always see what is coming to store \r\nshelves in the next six months to a year by looking at the models that \r\nare currently available in Japan<br></li></ul>', '17', 'product/featured_image_sm/colorphone2017-12-21 06:12:02.jpg', 'product/featured_image_lg/colorphone2017-12-21 06:12:02.jpg', 1, 1, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/NooOubDGv0A\" frameborder=\"0\" gesture=\"media\" allow=\"encrypted-media\" allowfullscreen></iframe>', 'product/product_image/colorphone2017-12-21 06:12:02.jpg', '2017-12-21 12:27:03', '2017-12-21 12:27:32'),
(7, 'saya', 'lainchour', '9807573751', 'dipesh@mail.com', 'saya', 'dipesh', 1, 1, 'this is just for testing purpsoe', '12', '1234', 123, '250', '0', '<p>this is just for tesigtn purpose<br></p>', '16', 'product/featured_image_sm/saya2017-12-23 10:44:29.png', 'product/featured_image_lg/saya2017-12-23 10:44:29.png', 1, 0, 'asdfdsf', 'product/product_image/saya2017-12-23 10:44:29.png', '2017-12-23 04:59:29', '2017-12-23 04:59:29'),
(8, 'summer love', 'lainchour kathmandu nepal', '9807573751', 'dipeshbanjade@gmail.com', 'summer-love', 'dipesh', 1, 1, 'this is just for testing purpose goes here hope youlike it', '32', '1234', 123, '456', '0', '<p>this is just fo rtesing pupsosefrsd<br></p>', '16', 'product/featured_image_sm/summerlove2017-12-23 10:48:28.jpg', 'product/featured_image_lg/summerlove2017-12-23 10:48:28.jpg', 1, 0, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/-0NxNr_R-fs\" frameborder=\"0\" gesture=\"media\" allow=\"encrypted-media\" allowfullscreen></iframe>', 'product/product_image/summerlove2017-12-23 10:48:28.jpg', '2017-12-23 05:03:28', '2017-12-23 06:25:25');

-- --------------------------------------------------------

--
-- Table structure for table `subscribes`
--

CREATE TABLE `subscribes` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribes`
--

INSERT INTO `subscribes` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'dipeshbanjade@gmail.com', '2017-12-20 06:15:00', '2017-12-20 06:15:00'),
(2, 'dbsandesh@gmail.com', '2017-12-20 06:18:20', '2017-12-20 06:18:20'),
(3, 'abc@gmail.com', '2017-12-20 06:18:41', '2017-12-20 06:18:41');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `categories_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `categories_id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 1, 'novel', 'novel', '2017-12-20 13:42:24', '2017-12-20 13:42:24'),
(2, 1, 'academy', 'academy books', '2017-12-20 13:53:55', '2017-12-20 13:53:55'),
(3, 2, 'samsung', 'samsung', '2017-12-20 14:10:41', '2017-12-20 14:10:41'),
(4, 2, 'colors', 'colors', '2017-12-20 14:10:55', '2017-12-20 14:10:55'),
(5, 4, 'shirt', 'shirt', '2017-12-20 14:11:18', '2017-12-20 14:11:18'),
(6, 3, 'hotel booking', 'hotel_booking', '2017-12-23 02:24:24', '2017-12-23 02:24:24'),
(7, 1, 'event vanue', 'event_vanue', '2017-12-23 02:24:46', '2017-12-23 02:24:46');

-- --------------------------------------------------------

--
-- Table structure for table `support_forms`
--

CREATE TABLE `support_forms` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `support_forms`
--

INSERT INTO `support_forms` (`id`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'dopes@gmail.com', '876656', 'dipesh', 'dipesh bahad', '2017-12-20 03:08:56', '2017-12-20 03:08:56'),
(2, 'dipeshbanjade@gmail.com', '9807573751', 'dipesh', 'this is just for testing purpose', '2017-12-20 03:10:07', '2017-12-20 03:10:07'),
(3, 'dbsandesh@gmail.com', '9807573752', 'dpesh', 'dipesh testing goes here', '2017-12-20 03:10:42', '2017-12-20 03:10:42'),
(4, 'test@gmail.com', '9876554', 'dipesh', 'testing', '2017-12-20 03:15:37', '2017-12-20 03:15:37'),
(5, 'email@gmail.com', '9807574732', 'dipesh', 'dipesh', '2017-12-20 03:18:16', '2017-12-20 03:18:16'),
(6, 'abc@gmail.com', '9807573761', 'dipesh', 'dfsa', '2017-12-20 03:19:26', '2017-12-20 03:19:26'),
(7, 'first@gmail.com', '98075743', 'dipesh banjade', 'dipesh banjadde', '2017-12-20 03:21:25', '2017-12-20 03:21:25'),
(8, 'final@gmail.com', '980757432', 'test', 'test meesage', '2017-12-20 03:31:41', '2017-12-20 03:31:41'),
(9, 'final@gmail.com', '980757432', 'test', 'test meesage', '2017-12-20 03:31:45', '2017-12-20 03:31:45'),
(10, 'abcd@gmail.com', '9807573751', 'testing', 'testesdfdsf', '2017-12-20 04:10:40', '2017-12-20 04:10:40'),
(11, 'www@gmail.com', '98076544', 'testing', 'testffgsdg', '2017-12-20 04:18:58', '2017-12-20 04:18:58'),
(12, 'ffff@gmail.com', 'this dsfdsf', 'tshidfs', 'dsafdsfdsf', '2017-12-20 04:20:26', '2017-12-20 04:20:26'),
(13, 'abcd@gmail.com', '980765543', 'this is my testing', 'this is my testing purpose goes here hope you like', '2017-12-20 06:40:56', '2017-12-20 06:40:56');

-- --------------------------------------------------------

--
-- Table structure for table `sysadmins`
--

CREATE TABLE `sysadmins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sysadmins`
--

INSERT INTO `sysadmins` (`id`, `name`, `email`, `job_title`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'dipesh', 'dipeshbanjade@gmail.com', 'admin', '$2y$10$zPL6URzzyDnRPhzPltbmbe2l4B8tSi6YBJqXYYIt/8UCkAhpvk8C6', '3VLsMVdWZHoZ2lScWh6h0zcCpb2OZhJpExsDXIaxcbP8Cc8OBB0wqkMVvmTh', '2017-12-16 18:15:00', '2017-12-23 18:15:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'dipesh', 'dbsandesh@gmail.com', '9807573752', '$2y$10$f6kbfc4g12/ojWSJBm.xMexQVgxcxzrp6F0pzEyFpnxj3t.wuo4R2', 'egJnIipOazeMZSeM8S4vSWRzsr77UbGIojobuHVQvIQ6CAiuRCp8JSOSbg3V', '2017-12-19 02:41:18', '2017-12-19 02:41:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `brands_slug_unique` (`slug`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribes`
--
ALTER TABLE `subscribes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subscribes_email_unique` (`email`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `support_forms`
--
ALTER TABLE `support_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sysadmins`
--
ALTER TABLE `sysadmins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sysadmins_email_unique` (`email`);

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
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `subscribes`
--
ALTER TABLE `subscribes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `support_forms`
--
ALTER TABLE `support_forms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `sysadmins`
--
ALTER TABLE `sysadmins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
