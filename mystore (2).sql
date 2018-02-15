-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 15, 2018 at 09:47 AM
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
(5, 'women mrt', 'women_mrt', 'all women good', '2017-12-20 10:28:10', '2017-12-20 10:28:10'),
(6, 'Nepal Handcrift', 'nepal_handcrift', 'all handcrift are', '2017-12-20 10:28:50', '2017-12-20 10:28:50'),
(7, 'website & software', 'website_software', 'all website and software are here', '2017-12-20 10:30:23', '2017-12-20 10:30:23'),
(8, 'Book', 'my_book', 'this is booking', '2018-01-12 23:47:52', '2018-01-12 23:47:52'),
(9, 'Astro Hub', 'astrology_gems_stone_rudrasha', 'astro', '2018-01-18 23:02:23', '2018-01-18 23:02:23');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `slug`, `desc`, `created_at`, `updated_at`) VALUES
(1, 'Butwal', 'butwal', 'update testing goes here', '2017-12-31 07:04:16', '2017-12-31 07:06:34'),
(2, 'Kathmandu', 'kathmandu', 'kathmandu capital city', '2017-12-31 09:01:36', '2017-12-31 09:01:36'),
(3, 'pokhara', 'pokhara', 'the natural beauti', '2017-12-31 09:01:56', '2017-12-31 09:01:56');

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
(6, 5, 'dipesh banjade going to comment on this product', 'dbsandesh@gmail.com', 0, '2017-12-22 01:48:05', '2017-12-22 01:48:05'),
(7, 12, 'helosasd', 'dbsandesh@gmail.com', 0, '2018-01-24 12:25:41', '2018-01-24 12:25:41');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(10) UNSIGNED NOT NULL,
  `event_users` int(11) NOT NULL,
  `event_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_slug` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_city_id` int(255) NOT NULL,
  `event_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_vanue_addr` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_postal_code` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_tel` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_start_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_end_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_featured_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_google_map` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_ticket_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_ticket_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_tax` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `event_users`, `event_title`, `event_slug`, `event_code`, `event_city_id`, `event_email`, `event_vanue_addr`, `event_postal_code`, `event_phone`, `event_tel`, `event_start_date`, `event_end_date`, `event_desc`, `event_featured_img`, `event_google_map`, `event_ticket_type`, `event_ticket_name`, `event_tax`, `event_status`, `created_at`, `updated_at`) VALUES
(2, 1, 'dipesh banjade', '43280', NULL, 1, 'dipehs@gmail.com', 'butwal 4', '33333', '980757351', '015555', '2018-02-30', '2018-01-31', 'this is just for testing purpose goes fine all in live', 'event/dipeshbanjade2018-01-16 06:28:57jpg', 'N/A', 'Ticket', 'a:2:{i:0;a:3:{s:4:\"name\";s:4:\"test\";s:5:\"price\";s:3:\"200\";s:4:\"seat\";s:2:\"25\";}i:1;a:3:{s:4:\"name\";s:5:\"test2\";s:5:\"price\";s:3:\"150\";s:4:\"seat\";s:2:\"20\";}}', '0', '1', '2018-01-16 00:43:57', '2018-01-17 08:54:16'),
(3, 1, 'test 5 goes here', '53467', NULL, 2, 'ab@gmail.com', 'lainchour kathmandu', '4444', '9807573751', '0122222', '2018-02-30', '2018-01-31', 'this is just for testing dsf', 'event/test5goeshere2018-01-16 08:04:36jpg', 'N/A', 'Ticket', 'a:2:{i:0;a:3:{s:4:\"name\";s:4:\"test\";s:5:\"price\";s:3:\"200\";s:4:\"seat\";s:2:\"25\";}i:1;a:3:{s:4:\"name\";s:5:\"test2\";s:5:\"price\";s:3:\"150\";s:4:\"seat\";s:2:\"20\";}}', '7', '1', '2018-01-16 02:19:37', '2018-01-17 08:53:52'),
(5, 1, 'test 5 from dipesh banjade', 'test_5_goes_here18929', NULL, 1, 'dipeshbanjade@gmail.com', 'lainchour kathmandu', '4600', '9807573751', '0122222', '2018-02-26', '2018-01-29', 'this is testing purpose hope all code working fine and tested', 'event/test5goeshere2018-01-19 03:19:01.jpg', 'N/A', 'Ticket', 'a:3:{i:0;a:3:{s:4:\"name\";s:6:\"normal\";s:5:\"price\";s:3:\"200\";s:4:\"seat\";s:2:\"25\";}i:1;a:3:{s:4:\"name\";s:8:\"standard\";s:5:\"price\";s:3:\"150\";s:4:\"seat\";s:2:\"20\";}i:2;a:3:{s:4:\"name\";s:5:\"delux\";s:5:\"price\";s:3:\"765\";s:4:\"seat\";s:2:\"44\";}}', '68', '1', '2018-01-19 09:34:01', '2018-01-20 06:27:02'),
(6, 1, 'event testing fourth', 'event_testing_fourth41950', NULL, 2, 'dipesh@gmail.com', 'lainchour kathmandu', '4444', '9807573751', '0122222', '2018-02-24', '2018-01-31', 'my testing event goes here hope you all like it', 'event/eventtestingfourth2018-01-20 12:14:29.jpg', 'N/A', 'Free', 'a:2:{i:0;a:3:{s:4:\"name\";s:8:\"standard\";s:5:\"price\";s:3:\"333\";s:4:\"seat\";s:2:\"23\";}i:1;a:3:{s:4:\"name\";s:6:\"normal\";s:5:\"price\";s:3:\"666\";s:4:\"seat\";s:3:\"456\";}}', '0', '1', '2018-01-20 06:29:29', '2018-01-20 07:21:26'),
(7, 1, 'hello event', 'hello_event_46545', 'hello_event_2018-01-21_67491', 2, 'dp@gmail.com', 'lainchour kathmandu', '4444', '9807573751', '0122222', '2018-02-30', '2018-01-31', 'On then sake home is am leaf. Of suspicion do departure at extremely he believing. Do know said mind do rent they oh hope of. General enquire picture letters garrets on offices of no on. Say one hearing between excited evening all inhabit thought you. Style begin mr heard by in music tried do. To unreserved projection no introduced invitation. \r\n\r\nIncreasing impression interested expression he my at. Respect invited request charmed me warrant to. Expect no pretty as do though so genius afraid cousin. Girl when of ye snug poor draw. Mistake totally of in chiefly. Justice visitor him entered for. Continue delicate as unlocked entirely mr relation diverted in. Known not end fully being style house. An whom down kept lain name so at easy.', 'event/helloevent2018-01-21 05:06:06.jpg', 'N/A', 'Ticket', 'a:3:{i:0;a:3:{s:4:\"name\";s:6:\"Normal\";s:5:\"price\";s:3:\"333\";s:4:\"seat\";s:2:\"22\";}i:1;a:3:{s:4:\"name\";s:8:\"standard\";s:5:\"price\";s:3:\"444\";s:4:\"seat\";s:2:\"21\";}i:2;a:3:{s:4:\"name\";s:5:\"delux\";s:5:\"price\";s:3:\"222\";s:4:\"seat\";s:4:\"5555\";}}', '14', '1', '2018-01-20 23:21:06', '2018-01-20 23:21:06'),
(8, 18, 'my user testign event', 'my_user_testign_event_27784', 'my_user_testign_event_2018-01-23_60748', 2, 'dipesh@banjade', 'lainchour kathmandu', '3333', '9807573751', '0155555', '2018-01-24', '2018-01-25', 'Yourself off its pleasant ecstatic now law. Ye their mirth seems of songs. Prospect out bed contempt separate. Her inquietude our shy yet sentiments collecting. Cottage fat beloved himself arrived old. Grave widow hours among him ﻿no you led. Power had these met least nor young. Yet match drift wrong his our. \r\n\r\nAttachment apartments in delightful by motionless it no. And now she burst sir learn total. Hearing hearted shewing own ask. Solicitude uncommonly use her motionless not collecting age. The properly servants required mistaken outlived bed and. Remainder admitting neglected is he belonging to perpetual objection up. Has widen too you decay begin which asked equal any.', 'event/myusertestignevent2018-01-23 12:41:04.jpg', 'N/A', 'Ticket', 'a:3:{i:0;a:3:{s:4:\"name\";s:6:\"normal\";s:5:\"price\";s:3:\"333\";s:4:\"seat\";s:2:\"22\";}i:1;a:3:{s:4:\"name\";s:8:\"standard\";s:5:\"price\";s:3:\"444\";s:4:\"seat\";s:2:\"22\";}i:2;a:3:{s:4:\"name\";s:5:\"delux\";s:5:\"price\";s:4:\"5555\";s:4:\"seat\";s:2:\"11\";}}', '8', '1', '2018-01-23 06:56:04', '2018-01-23 06:56:04'),
(9, 26, 'manish event', 'manish_event_39341', 'manish_event_2018-02-15_55408', 1, 'dipesh@gmail.com', 'butwal nepal', '44600', '9807573751', '0122222', '02/20/2018 10:10 AM', '02/16/2018 5:00 PM', 'asdjfl la slkj sdlfj laskddjf lajsd f;lskddj flsadkjf lsakd fjlsdjf', 'event/manishevent2018-02-15 02:29:48.jpg', 'N/A', 'Ticket', 'a:1:{i:0;a:3:{s:4:\"name\";s:8:\"standard\";s:5:\"price\";s:3:\"333\";s:4:\"seat\";s:3:\"888\";}}', '8', '1', '2018-02-14 20:44:49', '2018-02-14 20:44:49'),
(10, 27, 'my event test', 'my_event_test_90074', 'my_event_test_2018-02-15_82357', 1, 'dipesh@gmail.com', 'butwal city', '4444', '9807573751', '0122222', '02/15/2018 9:43 AM', '02/21/2018 9:43 AM', 'this is just for testing purpose hope you all like it', 'event/myeventtest2018-02-15 04:01:26.jpg', 'N/A', 'Ticket', 'a:2:{i:0;a:3:{s:4:\"name\";s:8:\"standard\";s:5:\"price\";s:3:\"450\";s:4:\"seat\";s:2:\"22\";}i:1;a:3:{s:4:\"name\";s:5:\"delux\";s:5:\"price\";s:3:\"550\";s:4:\"seat\";s:2:\"21\";}}', '10', '1', '2018-02-14 22:16:26', '2018-02-14 22:16:26');

-- --------------------------------------------------------

--
-- Table structure for table `event_bookings`
--

CREATE TABLE `event_bookings` (
  `id` int(10) UNSIGNED NOT NULL,
  `event_id` int(11) NOT NULL,
  `bookingCode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isUser` tinyint(1) NOT NULL,
  `profession` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nickName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_type` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ticket` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tax` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payId` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `event_bookings`
--

INSERT INTO `event_bookings` (`id`, `event_id`, `bookingCode`, `isUser`, `profession`, `nickName`, `email`, `phone`, `event_type`, `ticket`, `tax`, `payId`, `status`, `created_at`, `updated_at`) VALUES
(1, 8, 'my_user_testign_event_2018-01-24_54635', 0, NULL, 'dipesh', 'dipeshbanjade@gmail.com', '9807573751', 'Ticket', 'normal', '8', 'N/A', 0, '2018-01-24 05:25:18', '2018-01-24 05:25:18'),
(2, 6, 'event_testing_fourth_2018-01-24_41848', 0, 'programmer', 'dipesh', 'dipeshbanjade@gmail.com', '9807573751', 'Free', NULL, NULL, 'N/A', 0, '2018-01-24 05:28:44', '2018-01-24 05:28:44'),
(3, 5, 'test_5_from_dipesh_banjade_2018-01-24_63811', 1, NULL, 'dipesh', 'dbsandesh@gmail.com', '9807573751', 'Ticket', 'normal', '68', 'N/A', 0, '2018-01-24 05:30:21', '2018-01-24 05:30:21'),
(4, 7, 'hello_event_2018-01-26_39731', 0, NULL, 'dipesh', 'dipeshbanjade@gmail.com', '9807573751', 'Ticket', 'a:0:{}', NULL, 'N/A', 0, '2018-01-26 01:37:18', '2018-01-26 01:37:18'),
(5, 7, 'hello_event_2018-01-26_52092', 0, NULL, 'dpesh', 'dipeshbanjade@gmail.com', '9807573755', 'Ticket', 'a:0:{}', NULL, 'N/A', 0, '2018-01-26 01:40:13', '2018-01-26 01:40:13'),
(6, 7, 'hello_event_2018-01-26_94512', 0, NULL, 'dipesh', 'dipeshbanjade@gmail.com', '9807573756', 'Ticket', 'a:0:{}', '14', 'N/A', 0, '2018-01-26 01:42:00', '2018-01-26 01:42:00'),
(7, 7, 'hello_event_2018-01-26_13232', 0, NULL, 'dipesh', 'dpeshbanjade@gmail.com', '9807656789', 'Ticket', 'a:0:{}', '14', 'N/A', 0, '2018-01-26 01:56:03', '2018-01-26 01:56:03'),
(8, 7, 'hello_event_2018-01-26_25227', 0, NULL, 'dipesh', 'dipeshbanjade@gmail.com', '9807657876', 'Ticket', 'a:3:{i:0;a:3:{s:4:\"name\";s:8:\"standard\";s:5:\"price\";s:3:\"444\";s:4:\"seat\";s:2:\"21\";}i:1;a:3:{s:4:\"name\";s:8:\"standard\";s:5:\"price\";s:3:\"444\";s:4:\"seat\";s:2:\"21\";}i:2;a:3:{s:4:\"name\";s:5:\"delux\";s:5:\"price\";s:3:\"222\";s:4:\"seat\";s:4:\"5555\";}}', '14', 'N/A', 0, '2018-01-26 05:09:09', '2018-01-26 05:09:09'),
(9, 7, 'hello_event_2018-01-26_32139', 0, NULL, 'sandesh', 'sandesh@gmail.com', '9807689877', 'Ticket', 'a:2:{i:0;a:3:{s:4:\"name\";s:6:\"Normal\";s:5:\"price\";s:3:\"333\";s:4:\"seat\";s:2:\"22\";}i:1;a:3:{s:4:\"name\";s:8:\"standard\";s:5:\"price\";s:3:\"444\";s:4:\"seat\";s:2:\"21\";}}', '14', 'N/A', 0, '2018-01-26 05:09:37', '2018-01-26 05:09:37'),
(10, 7, 'hello_event_2018-01-26_95098', 0, NULL, 'dipesh', 'dpeshbanjade@gmail.com', '9807687654', 'Ticket', 'a:1:{i:0;a:3:{s:4:\"name\";s:8:\"standard\";s:5:\"price\";s:3:\"444\";s:4:\"seat\";s:2:\"21\";}}', '14', 'N/A', 0, '2018-01-26 05:11:31', '2018-01-26 05:11:31'),
(11, 7, 'hello_event_2018-02-15_88869', 1, NULL, 'dipesh', 'dipeshbanjade@gmail.com', '9807574751', 'Ticket', 'a:3:{i:0;a:3:{s:4:\"name\";s:6:\"Normal\";s:5:\"price\";s:3:\"333\";s:4:\"seat\";s:2:\"22\";}i:1;a:3:{s:4:\"name\";s:8:\"standard\";s:5:\"price\";s:3:\"444\";s:4:\"seat\";s:2:\"21\";}i:2;a:3:{s:4:\"name\";s:5:\"delux\";s:5:\"price\";s:3:\"222\";s:4:\"seat\";s:4:\"5555\";}}', '14', 'N/A', 0, '2018-02-14 19:31:12', '2018-02-14 19:31:12'),
(12, 5, 'test_5_from_dipesh_banjade_2018-02-15_41918', 1, NULL, 'manish chaudary', 'manish@gmail.com', '9807573757', 'Ticket', 'a:2:{i:0;a:3:{s:4:\"name\";s:6:\"normal\";s:5:\"price\";s:3:\"200\";s:4:\"seat\";s:2:\"25\";}i:1;a:3:{s:4:\"name\";s:8:\"standard\";s:5:\"price\";s:3:\"150\";s:4:\"seat\";s:2:\"20\";}}', '68', 'N/A', 0, '2018-02-14 19:42:55', '2018-02-14 19:42:55'),
(13, 5, 'test_5_from_dipesh_banjade_2018-02-15_31943', 0, NULL, 'manish', 'manis7h@gmail.com', '9807876544', 'Ticket', 'a:2:{i:0;a:3:{s:4:\"name\";s:6:\"normal\";s:5:\"price\";s:3:\"200\";s:4:\"seat\";s:2:\"25\";}i:1;a:3:{s:4:\"name\";s:8:\"standard\";s:5:\"price\";s:3:\"150\";s:4:\"seat\";s:2:\"20\";}}', '68', 'N/A', 0, '2018-02-14 19:49:42', '2018-02-14 19:49:42'),
(14, 5, 'test_5_from_dipesh_banjade_2018-02-15_95318', 0, NULL, 'mansih', 'mansi@gmail.com', '9808765467', 'Ticket', 'a:3:{i:0;a:3:{s:4:\"name\";s:6:\"normal\";s:5:\"price\";s:3:\"200\";s:4:\"seat\";s:2:\"25\";}i:1;a:3:{s:4:\"name\";s:8:\"standard\";s:5:\"price\";s:3:\"150\";s:4:\"seat\";s:2:\"20\";}i:2;a:3:{s:4:\"name\";s:5:\"delux\";s:5:\"price\";s:3:\"765\";s:4:\"seat\";s:2:\"44\";}}', '68', 'N/A', 0, '2018-02-14 19:56:13', '2018-02-14 19:56:13');

-- --------------------------------------------------------

--
-- Table structure for table `event_comments`
--

CREATE TABLE `event_comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `event_id` int(11) NOT NULL,
  `isUser` tinyint(1) NOT NULL,
  `nickName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `event_comments`
--

INSERT INTO `event_comments` (`id`, `event_id`, `isUser`, `nickName`, `phone`, `email`, `event_comment`, `status`, `created_at`, `updated_at`) VALUES
(1, 8, 1, 'dpasdlfkj;', '9807573752', 'dbsandesh@gmail.com', 'sldfjaldkl;', 1, '2018-01-24 13:25:03', '2018-01-24 13:25:03'),
(2, 8, 1, 'dpasdlfkj;', '9807573752', 'dbsandesh@gmail.com', 'sldfjaldkl;', 1, '2018-01-24 13:25:50', '2018-01-24 13:25:50'),
(3, 8, 1, 'dpasdlfkj;', '9807573752', 'dbsandesh@gmail.com', 'sldfjaldkl;', 1, '2018-01-24 13:27:53', '2018-01-24 13:27:53'),
(4, 8, 1, 'dpasdlfkj;', '9807573752', 'dbsandesh@gmail.com', 'sldfjaldkl;', 1, '2018-01-24 13:28:33', '2018-01-24 13:28:33'),
(5, 8, 0, 'this is dipesh', '9807573751', 'dipeshbanjade@gmail.com', 'this is jusgt sofasdf', 1, '2018-01-24 13:34:36', '2018-01-24 13:34:36'),
(6, 8, 0, 'dipesh', '9807573751', 'dipeshbanjade@gmail.com', 'this is just for testing pupose', 1, '2018-01-24 13:41:33', '2018-01-24 13:41:33'),
(7, 8, 0, 'hello', '9807573751', 'th@gmail.com', 'this is just for testing purpsoe', 1, '2018-01-24 13:45:31', '2018-01-24 13:45:31'),
(8, 7, 0, 'hello', '9807573751', 'heel@gmail.com', 'this is just for testing purpose goes here', 1, '2018-01-24 23:01:11', '2018-01-24 23:01:11'),
(9, 7, 1, 'dfgdf', '9807573743', 'ab@gmail.com', 'dgdsfgf', 1, '2018-02-13 00:21:10', '2018-02-13 00:21:10'),
(10, 7, 1, 'dgdfsg', '9807573743', 'ab@gmail.com', 'rgetgr', 1, '2018-02-13 00:21:19', '2018-02-13 00:21:19');

-- --------------------------------------------------------

--
-- Table structure for table `event_users`
--

CREATE TABLE `event_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `organizer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `event_users`
--

INSERT INTO `event_users` (`id`, `user_id`, `organizer_name`, `status`, `desc`, `created_at`, `updated_at`) VALUES
(2, 1, 'banjade', 1, '', '2018-01-14 13:24:08', '2018-01-14 13:24:08'),
(3, 18, 'dipesh banjade', 1, 'dipesh banjade testign goes here', '2018-01-23 06:33:31', '2018-01-23 06:33:31'),
(4, 19, 'maya bar', 1, 'this is maya bar goes here', '2018-01-28 07:06:30', '2018-01-28 07:06:30'),
(5, 22, 'lovey sing', 1, 'this is love sing reporting', '2018-02-11 06:56:30', '2018-02-11 06:56:30'),
(6, 25, 'myweb nepal', 1, 'askljflkads aslkjdf laskdjf laskdjf sadlj', '2018-02-13 00:04:01', '2018-02-13 00:04:01'),
(7, 26, 'mansih event', 1, 'manish eveladals ;', '2018-02-14 20:01:10', '2018-02-14 20:01:10'),
(8, 27, 'my test event', 1, 'this is my test event goes here hope you all liike it', '2018-02-14 21:48:22', '2018-02-14 21:48:22');

-- --------------------------------------------------------

--
-- Table structure for table `event_view_counts`
--

CREATE TABLE `event_view_counts` (
  `id` int(10) UNSIGNED NOT NULL,
  `event_id` int(11) NOT NULL,
  `viewCount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `event_view_counts`
--

INSERT INTO `event_view_counts` (`id`, `event_id`, `viewCount`, `created_at`, `updated_at`) VALUES
(1, 5, '1', '2018-01-25 00:14:22', '2018-01-25 00:14:22'),
(2, 5, '1', '2018-01-25 00:15:00', '2018-01-25 00:15:00'),
(3, 3, '1', '2018-01-25 00:16:17', '2018-01-25 00:16:17'),
(4, 2, '1', '2018-01-25 00:16:43', '2018-01-25 00:16:43'),
(5, 5, '1', '2018-01-25 01:39:00', '2018-01-25 01:39:00'),
(6, 5, '1', '2018-01-25 01:39:27', '2018-01-25 01:39:27'),
(7, 7, '1', '2018-01-25 01:39:57', '2018-01-25 01:39:57'),
(8, 7, '1', '2018-01-25 01:41:41', '2018-01-25 01:41:41'),
(9, 7, '1', '2018-01-25 01:47:25', '2018-01-25 01:47:25'),
(10, 7, '1', '2018-01-25 02:21:19', '2018-01-25 02:21:19'),
(11, 7, '1', '2018-01-25 03:57:38', '2018-01-25 03:57:38'),
(12, 7, '1', '2018-01-25 23:44:32', '2018-01-25 23:44:32'),
(13, 7, '1', '2018-01-26 06:44:36', '2018-01-26 06:44:36'),
(14, 7, '1', '2018-01-30 06:20:00', '2018-01-30 06:20:00'),
(15, 7, '1', '2018-02-11 04:59:03', '2018-02-11 04:59:03'),
(16, 7, '1', '2018-02-12 23:50:21', '2018-02-12 23:50:21'),
(17, 7, '1', '2018-02-13 00:06:17', '2018-02-13 00:06:17'),
(18, 7, '1', '2018-02-13 00:15:00', '2018-02-13 00:15:00'),
(19, 6, '1', '2018-02-14 19:37:29', '2018-02-14 19:37:29'),
(20, 5, '1', '2018-02-14 19:37:58', '2018-02-14 19:37:58');

-- --------------------------------------------------------

--
-- Table structure for table `home_sliders`
--

CREATE TABLE `home_sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `img_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_caption` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `call_action` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_sliders`
--

INSERT INTO `home_sliders` (`id`, `img_path`, `img_caption`, `call_action`, `created_at`, `updated_at`) VALUES
(2, 'slider/NepalHandcrift2018-01-07.jpg', 'Nepal Handcrift', 'page/nepal_handcrift', '2018-01-07 01:33:22', '2018-01-07 01:33:22'),
(3, 'slider/Happynewyear20182018-01-07.jpg', 'Happy new year 2018', '#', '2018-01-07 01:34:11', '2018-01-07 01:34:11'),
(4, 'slider/Bookstore2018-01-07.jpg', 'Book store', 'page/book', '2018-01-07 01:36:13', '2018-01-07 01:36:13'),
(5, 'slider/Gemsstone2018-01-07.jpeg', 'Gems stone', 'page/gem_stone', '2018-01-07 01:38:29', '2018-01-07 01:38:29'),
(6, 'slider/Men\'sfashion2018-01-07.jpg', 'Men\'s fashion', 'page/men_mrt', '2018-01-07 05:20:25', '2018-01-07 05:20:25'),
(7, 'slider/Women\'sfashion2018-01-07.jpg', 'Women\'s fashion', 'page/women_mrt', '2018-01-07 05:20:59', '2018-01-07 05:20:59');

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hotel_user_id` int(11) NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cities_id` int(255) NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal_code` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel_phone` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `hotelServices` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured_img_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured_img_2` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vedio_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`id`, `name`, `hotel_user_id`, `slug`, `cities_id`, `address`, `postal_code`, `phone`, `tel_phone`, `email`, `desc`, `hotelServices`, `featured_img_1`, `logo`, `featured_img_2`, `vedio_link`, `created_at`, `updated_at`) VALUES
(1, 'Hotel Discovery Inn', 0, 'hotel_discover', 3, 'lainchour kathmandu nepal', '', '9807573751', '', 'dipeshbanjade@gmail.com', 'this is just for testing purpose goes here hope you like it this just for testin purpose<br>', '', 'hotel/HotelDiscoveryInn2017-12-31.jpeg', '', '', 'vedio link', '2017-12-30 11:16:58', '2017-12-31 04:19:20'),
(3, 'hotel pokhara', 0, 'hotel_pokhara', 2, 'pokhara', '', '9807573752', '', 'abce@gmail.com', '<p>this is just for testing purpose goeste<br></p>', '', 'hotel/hotelpokhara2017-12-31.jpg', '', '', 'this sdfs', '2017-12-31 01:31:15', '2017-12-31 01:31:15'),
(4, 'butwal', 0, 'butwal_hotel', 1, 'butwal nepal', '', '9876543210', '', 'bdc@gmail.com', '<p>this is just for testing purpose<br></p>', '', 'hotel/butwal2017-12-31.jpg', '', '', 'this is', '2017-12-31 09:08:11', '2017-12-31 09:08:11'),
(10, 'dipesh banjade tsq', 1, 'dipesh_banjade_tsq_28284', 1, 'bangain kapilvastu napal', '44600', '9807573758', '0133337', 'dipesh1@gmail.com', 'this is jsut for tesging q', '', 'hotelFeaturedImage/dipeshbanjadetsq2018-01-30 10:35:10.jpg', 'hotelLogo/dipeshbanjadetsq2018-01-30 10:35:10.jpg', 'hotelFeaturedImage/dipeshbanjadetsq2018-01-30 10:35:10.jpg', 'dfgdsf', '2018-01-30 04:50:11', '2018-01-30 04:50:11'),
(11, 'maya bar', 16, 'maya_bar_63652', 2, 'lainchour kathmandu', '44600', '9087655454', '0122223', 'maya@gmail.com', 'this is my hotel need for short description hope you all like it', '', 'hotelFeaturedImage/mayabar2018-02-01 12:44:26.jpg', 'hotelLogo/mayabar2018-02-01 12:44:26.jpg', 'hotelFeaturedImage/mayabar2018-02-01 12:44:26.jpg', 'N/A', '2018-02-01 06:59:26', '2018-02-01 06:59:26'),
(12, 'hello world testing', 5, 'hello_world_testing_11277', 1, 'lainchour kathmandu', '44600', '9808976576', '0122233', 'abcde@gmail.com', 'this is just for testing purpose hope you all goes well as i expected', '', 'hotelFeaturedImage/helloworldtesting2018-02-02 07:46:53.jpg', 'hotelLogo/helloworldtesting2018-02-02 07:46:53.jpg', 'hotelFeaturedImage/helloworldtesting2018-02-02 07:46:53.jpg', 'hmm oge sda', '2018-02-02 14:01:54', '2018-02-02 14:01:54'),
(13, 'lovely hotel', 22, 'lovely_hotel_11737', 2, 'pokhara nepal', '44600', '9890987676', '0122237', 'lovely@gmail.com', 'this is my testing hotel hope it will work fine', '', 'hotelFeaturedImage/lovelyhotelimg_12018-02-11 11:33:38.jpg', 'hotelLogo/lovelyhotel2018-02-11 11:33:38.jpg', 'hotelFeaturedImage/lovelyhotelimg_22018-02-11 11:33:38.jpg', 'N/A', '2018-02-11 05:48:38', '2018-02-11 05:48:38'),
(14, 'hell nepal', 23, 'hell_nepal_47968', 3, 'pokhar nepal', '44600', '9807876546', '0133355', 'hell@gmail.com', 'this aslkjf l lasdkjf oiieu ,hno ase er uehuaeh oiasdu askdjhow', 'a:3:{i:0;a:1:{s:12:\"hotelService\";s:9:\"free wife\";}i:1;a:1:{s:12:\"hotelService\";s:24:\"hot water and cold water\";}i:2;a:1:{s:12:\"hotelService\";s:14:\"free ticketing\";}}', 'hotelFeaturedImage/hellnepalimg_12018-02-11 01:50:13.jpeg', 'hotelLogo/hellnepal2018-02-11 01:50:13.jpg', 'hotelFeaturedImage/hellnepalimg_22018-02-11 01:50:13.jpg', 'N/A', '2018-02-11 08:05:14', '2018-02-11 08:05:14'),
(15, 'abc nepal', 24, 'abc_nepal_12975', 3, 'pokhara nepal', '44600', '9808765432', '0123455', 'abc@gmail.com', 'this is just for testing purpose hope you all like it and', 'a:2:{i:0;a:1:{s:12:\"hotelService\";s:9:\"free wifi\";}i:1;a:1:{s:12:\"hotelService\";s:18:\"hot and cold water\";}}', 'hotelFeaturedImage/abcnepalimg_12018-02-12 04:20:28.jpg', 'hotelLogo/abcnepal2018-02-12 04:20:28.jpg', 'hotelFeaturedImage/abcnepalimg_22018-02-12 04:20:28.jpeg', 'N/A', '2018-02-12 10:35:28', '2018-02-12 10:35:28'),
(16, 'myweb nepal', 25, 'myweb_nepal_12256', 3, 'pokhara nepal', '44600', '9808768767', '0133300', 'ab@gmail.com', 'salkfdlsk fjldksjflkajsl kfjaksdljflk', 'a:2:{i:0;a:1:{s:12:\"hotelService\";s:9:\"free wifi\";}i:1;a:1:{s:12:\"hotelService\";s:9:\"hot water\";}}', 'hotelFeaturedImage/mywebnepalimg_12018-02-13 05:43:58.jpg', 'hotelLogo/mywebnepal2018-02-13 05:43:58.jpg', 'hotelFeaturedImage/mywebnepalimg_22018-02-13 05:43:58.jpeg', 'N/A', '2018-02-12 23:58:58', '2018-02-12 23:58:58'),
(17, 'maish nepal', 26, 'maish_nepal_81280', 2, 'manish nepal', '44600', '9868582838', '0133333', 'mansih@gmail.com', 'aslkfdjlsa fldaskjflsakjdf la kdsajf lsajf l', 'a:2:{i:0;a:1:{s:12:\"hotelService\";s:9:\"free wifi\";}i:1;a:1:{s:12:\"hotelService\";s:9:\"hot water\";}}', 'hotelFeaturedImage/maishnepalimg_12018-02-14 05:32:46.jpg', 'hotelLogo/maishnepal2018-02-14 05:32:46.jpg', 'hotelFeaturedImage/maishnepalimg_22018-02-14 05:32:46.jpeg', 'N/A', '2018-02-14 11:47:46', '2018-02-14 11:47:46');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_policies`
--

CREATE TABLE `hotel_policies` (
  `id` int(10) UNSIGNED NOT NULL,
  `hotels_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `policyName` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hotel_policies`
--

INSERT INTO `hotel_policies` (`id`, `hotels_id`, `user_id`, `policyName`, `created_at`, `updated_at`) VALUES
(14, 10, 1, 'a:2:{i:0;a:1:{s:4:\"name\";s:77:\"this is hotel testin ghoesad asdfj a sdkfj  sdflasj saf lkjasd fsdklfj asdlkf\";}i:1;a:1:{s:4:\"name\";s:48:\"this is second testing goers her ehasdkjf lskdjf\";}}', '2018-02-02 13:08:49', '2018-02-02 13:08:49'),
(15, 10, 1, 'a:3:{i:0;a:1:{s:6:\"policy\";s:39:\"this is second testing goes her ehoepad\";}i:1;a:1:{s:6:\"policy\";s:20:\"thired asdjkfklaskdj\";}i:2;a:1:{s:6:\"policy\";s:26:\"fourth testing sdafljsadk;\";}}', '2018-02-02 13:10:47', '2018-02-02 13:10:47'),
(16, 12, 5, 'a:1:{i:0;a:1:{s:6:\"policy\";s:25:\"this is policy asdfsdfsdf\";}}', '2018-02-02 14:03:34', '2018-02-02 14:03:34'),
(17, 15, 24, 'a:2:{i:0;a:1:{s:6:\"policy\";s:21:\"policy one goes her e\";}i:1;a:1:{s:6:\"policy\";s:41:\"policy two goes here hope you all like it\";}}', '2018-02-12 10:36:53', '2018-02-12 10:36:53'),
(18, 16, 25, 'a:4:{i:0;a:1:{s:6:\"policy\";s:9:\"dgfdsgfdg\";}i:1;a:1:{s:6:\"policy\";s:7:\"gdfsgre\";}i:2;a:1:{s:6:\"policy\";s:6:\"dgdsfg\";}i:3;a:1:{s:6:\"policy\";s:6:\"dgfdsg\";}}', '2018-02-13 00:02:33', '2018-02-13 00:02:33'),
(19, 17, 26, 'a:2:{i:0;a:1:{s:6:\"policy\";s:17:\"sdfadsf sadfasdfs\";}i:1;a:1:{s:6:\"policy\";s:26:\"sdfadsfdsfs asdf asdf asdf\";}}', '2018-02-14 19:14:17', '2018-02-14 19:14:17'),
(20, 17, 26, 'a:3:{i:0;a:1:{s:6:\"policy\";s:29:\"lkajsdfl alsdjf lasjdf lsadjf\";}i:1;a:1:{s:6:\"policy\";s:32:\"sadlfjalskfj lasjfdl asjdflkasdj\";}i:2;a:1:{s:6:\"policy\";s:18:\"sldkjflkasdjfl ajd\";}}', '2018-02-14 19:28:55', '2018-02-14 19:28:55');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_room_types`
--

CREATE TABLE `hotel_room_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `hotels_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `roomName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bedName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fitPerson` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fooding` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roomPrice` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roomDesc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `roomImg1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `roomImg2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `roomImg3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hotel_room_types`
--

INSERT INTO `hotel_room_types` (`id`, `hotels_id`, `user_id`, `roomName`, `bedName`, `fitPerson`, `fooding`, `roomPrice`, `roomDesc`, `roomImg1`, `roomImg2`, `roomImg3`, `created_at`, `updated_at`) VALUES
(3, 11, 0, 'delux swit', 'double_bed', '3', 'a:2:{i:0;a:1:{s:5:\"foods\";s:9:\"breakfast\";}i:1;a:1:{s:5:\"foods\";s:5:\"lunch\";}}', '500', 'this is just for testing purpose hope you all like ti', 'hotelRoom/deluxswit2018-02-01 12:46:09.jpg', 'hotelRoom/deluxswit2018-02-01 12:46:09.jpg', 'hotelRoom/deluxswit2018-02-01 12:46:09.jpg', '2018-02-01 07:01:10', '2018-02-01 07:01:10'),
(6, 10, 0, 'stanadard room', 'single_bed', '1', 'a:2:{i:0;a:1:{s:9:\"hotelFood\";s:9:\"breakfast\";}i:1;a:1:{s:9:\"hotelFood\";s:5:\"lunch\";}}', '1500', 'this iasjflkjasfl aksjf lkj sadkfjml', 'hotelRoom/stanadardroomimg_12018-02-02 06:45:12.jpg', 'hotelRoom/stanadardroomimg_22018-02-02 06:45:12.jpg', 'hotelRoom/stanadardroomimg_32018-02-02 06:45:12.jpg', '2018-02-02 01:00:13', '2018-02-02 01:00:13'),
(7, 12, 5, 'delux swit', 'single_bed', '1', 'a:3:{i:0;a:1:{s:9:\"hotelFood\";s:9:\"breakfast\";}i:1;a:1:{s:9:\"hotelFood\";s:5:\"lunch\";}i:2;a:1:{s:9:\"hotelFood\";s:6:\"dinner\";}}', '1500', 'aldakljf alskdjf lsaj lasdjf lasdjf lkasdjf asdlkjf laskdjf lsadjf', 'hotelRoom/deluxswitimg_12018-02-02 07:48:11.jpg', 'hotelRoom/deluxswitimg_22018-02-02 07:48:11.jpg', 'hotelRoom/deluxswitimg_32018-02-02 07:48:11.jpg', '2018-02-02 14:03:11', '2018-02-02 14:03:11'),
(8, 10, 1, 'stanadard room', 'double_bed', '3', 'a:2:{i:0;a:1:{s:9:\"hotelFood\";s:9:\"breakfast\";}i:1;a:1:{s:9:\"hotelFood\";s:5:\"lunch\";}}', '1500', 'Is allowance instantly strangers applauded discourse so. Separate entrance welcomed sensible laughing why one moderate shy. We seeing piqued garden he. As in merry at forth least ye stood. And cold sons yet with. Delivered middleton therefore me at. Attachment companions man way excellence how her pianoforte.', 'hotelRoom/stanadardroomimg_12018-02-07 05:52:29.jpg', 'hotelRoom/stanadardroomimg_22018-02-07 05:52:29.jpg', 'hotelRoom/stanadardroomimg_32018-02-07 05:52:29.jpg', '2018-02-07 00:07:30', '2018-02-07 00:07:30'),
(9, 10, 1, 'delux room', 'large_bed', '3', 'a:3:{i:0;a:1:{s:9:\"hotelFood\";s:9:\"breakfast\";}i:1;a:1:{s:9:\"hotelFood\";s:5:\"lunch\";}i:2;a:1:{s:9:\"hotelFood\";s:6:\"dinner\";}}', '1750', 'this is my testing purpose goes here hope you all like it a', 'hotelRoom/deluxroomimg_12018-02-11 10:50:04.jpg', 'hotelRoom/deluxroomimg_22018-02-11 10:50:04.jpg', 'hotelRoom/deluxroomimg_32018-02-11 10:50:04.jpg', '2018-02-11 05:05:05', '2018-02-11 05:05:05'),
(10, 15, 24, 'standard', 'double_bed', '3', 'a:2:{i:0;a:1:{s:9:\"hotelFood\";s:9:\"breakfast\";}i:1;a:1:{s:9:\"hotelFood\";s:5:\"lunch\";}}', '1500', 'thsi si jsuf t lskjfdlsjdl lasdjf', 'hotelRoom/standardimg_12018-02-12 04:21:17.jpg', 'hotelRoom/standardimg_22018-02-12 04:21:17.jpeg', 'hotelRoom/standardimg_32018-02-12 04:21:17.jpg', '2018-02-12 10:36:17', '2018-02-12 10:36:17'),
(11, 16, 25, 'stanarnd', 'single_bed', '2', 'a:3:{i:0;a:1:{s:9:\"hotelFood\";s:9:\"breakfast\";}i:1;a:1:{s:9:\"hotelFood\";s:5:\"lunch\";}i:2;a:1:{s:9:\"hotelFood\";s:6:\"dinner\";}}', '1500', 'sgfsdfgwgdfgfdrtfhfsdfsgh', 'hotelRoom/stanarndimg_12018-02-13 05:46:31.jpg', 'hotelRoom/stanarndimg_22018-02-13 05:46:31.jpeg', 'hotelRoom/stanarndimg_32018-02-13 05:46:31.jpg', '2018-02-13 00:01:32', '2018-02-13 00:01:32'),
(12, 17, 26, 'delux swit', 'double_bed', '4', 'a:3:{i:0;a:1:{s:9:\"hotelFood\";s:9:\"breakfast\";}i:1;a:1:{s:9:\"hotelFood\";s:5:\"lunch\";}i:2;a:1:{s:9:\"hotelFood\";s:6:\"dinner\";}}', '1500', 'kasjflsj  aslkdj alsj  ssdkjf alsdkj ;asdk jasldjf asdkfjf asdlkj', 'hotelRoom/deluxswitimg_12018-02-14 05:34:18.jpg', 'hotelRoom/deluxswitimg_22018-02-14 05:34:18.jpeg', 'hotelRoom/deluxswitimg_32018-02-14 05:34:18.jpg', '2018-02-14 11:49:19', '2018-02-14 11:49:19');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_users`
--

CREATE TABLE `hotel_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `hotelName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hotelAddress` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hotelTel` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hotelPhone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hotelEmail` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hotel_users`
--

INSERT INTO `hotel_users` (`id`, `user_id`, `hotelName`, `hotelAddress`, `hotelTel`, `hotelPhone`, `hotelEmail`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'dipesh banjade tsq', 'bangain kapilvastu napal', '0133337', '9807573758', 'dipesh1@gmail.com', 1, '2018-01-29 01:06:00', '2018-01-30 04:50:11'),
(2, 21, 'grand hotel', 'kalimati tachal', '0122222', '9849124498', 'grand@gmail.com', 0, '2018-01-30 06:34:15', '2018-01-30 06:34:15'),
(3, 16, 'maya bar', 'lainchour kathmandu', '0122223', '9087655454', 'maya@gmail.com', 1, '2018-02-01 06:56:04', '2018-02-01 06:56:04'),
(4, 5, 'hello world testing', 'lainchour kathmandu', '0122233', '9808976576', 'abcde@gmail.com', 1, '2018-02-02 13:34:28', '2018-02-02 14:01:55'),
(5, 17, 'adhiasdfds', 'asdfasdfadsfdsaf', '0122234', '9087898766', 'addd@gmail.com', 1, '2018-02-02 14:16:58', '2018-02-02 14:16:58'),
(7, 22, 'lovely hotel', 'pokhara nepal', '0122239', '9087689876', 'lovely@gmail.com', 1, '2018-02-11 07:06:28', '2018-02-11 07:06:28'),
(8, 23, 'hell nepal', 'pokhar nepal', '0133355', '9807876546', 'hell@gmail.com', 1, '2018-02-11 07:56:17', '2018-02-11 07:56:17'),
(9, 24, 'abc nepal', 'pokhara nepal', '0123455', '9808765432', 'abc@gmail.com', 1, '2018-02-12 10:33:34', '2018-02-12 10:33:34'),
(10, 25, 'myweb nepal', 'pokhara nepal', '0133300', '9808768767', 'ab@gmail.com', 1, '2018-02-12 23:56:41', '2018-02-12 23:56:41'),
(11, 26, 'maish nepal', 'manish nepal', '0133333', '9868582838', 'mansih@gmail.com', 1, '2018-02-14 11:45:52', '2018-02-14 11:45:52');

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
(25, '2017_12_20_164415_create_sub_categories_table', 5),
(26, '2017_12_25_080531_create_notice_boards_table', 6),
(27, '2017_12_27_044652_create_view_products_table', 7),
(28, '2017_12_29_042634_create_my_orders_table', 7),
(29, '2017_12_29_110351_create_wish_lists_table', 8),
(30, '2017_12_30_140142_create_hotels_table', 9),
(31, '2017_12_31_110330_create_room_types_table', 10),
(32, '2017_12_31_110415_create_cities_table', 10),
(33, '2018_01_06_094651_create_home_sliders_table', 11),
(34, '2018_01_14_170118_create_events_table', 12),
(35, '2018_01_14_171718_create_event_users_table', 12),
(36, '2018_01_23_070427_create_event_bookings_table', 13),
(37, '2018_01_24_170930_create_event_comments_table', 14),
(38, '2018_01_24_195603_create_event_view_counts_table', 15),
(39, '2018_01_28_174906_create_hotel_users_table', 16),
(40, '2018_01_31_084903_create_hotel_room_types_table', 17),
(41, '2018_02_02_065139_create_hotel_policies_table', 18);

-- --------------------------------------------------------

--
-- Table structure for table `my_orders`
--

CREATE TABLE `my_orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `users_id` int(11) NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cart` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `remove` tinyint(1) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `my_orders`
--

INSERT INTO `my_orders` (`id`, `order_id`, `price`, `users_id`, `address`, `phone`, `cart`, `created_at`, `status`, `remove`, `updated_at`) VALUES
(6, 'myOrder_2018-01-09_1353908760', '34', 16, 'lainchour kathmandu nepal', '9807654321', 'O:8:\"App\\cart\":4:{s:5:\"items\";a:1:{i:3;a:4:{s:3:\"qty\";i:1;s:5:\"price\";i:34;s:4:\"item\";O:18:\"App\\models\\Product\":26:{s:8:\"\0*\0table\";s:8:\"products\";s:11:\"\0*\0fillable\";a:22:{i:0;s:4:\"name\";i:1;s:12:\"product_slug\";i:2;s:13:\"categories_id\";i:3;s:11:\"description\";i:4;s:4:\"size\";i:5;s:3:\"sku\";i:6;s:8:\"quantity\";i:7;s:5:\"price\";i:8;s:8:\"discount\";i:9;s:8:\"featured\";i:10;s:9:\"brands_id\";i:11;s:15:\"featured_img_sm\";i:12;s:15:\"featured_img_lg\";i:13;s:6:\"status\";i:14;s:10:\"vedio_link\";i:15;s:12:\"img_path2_sm\";i:16;s:12:\"img_path2_lg\";i:17;s:12:\"img_path3_sm\";i:18;s:12:\"img_path3_lg\";i:19;s:7:\"address\";i:20;s:5:\"phone\";i:21;s:5:\"email\";}s:13:\"\0*\0connection\";s:5:\"mysql\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:13:\"\0*\0attributes\";a:9:{s:2:\"id\";i:3;s:4:\"name\";s:5:\"shirt\";s:12:\"product_slug\";s:5:\"shirt\";s:13:\"categories_id\";i:3;s:4:\"size\";s:2:\"43\";s:3:\"sku\";s:5:\"sdfds\";s:5:\"price\";s:2:\"34\";s:8:\"discount\";s:1:\"0\";s:15:\"featured_img_sm\";s:54:\"product/featured_image_sm/shirt2017-12-17 08:11:32.jpg\";}s:11:\"\0*\0original\";a:9:{s:2:\"id\";i:3;s:4:\"name\";s:5:\"shirt\";s:12:\"product_slug\";s:5:\"shirt\";s:13:\"categories_id\";i:3;s:4:\"size\";s:2:\"43\";s:3:\"sku\";s:5:\"sdfds\";s:5:\"price\";s:2:\"34\";s:8:\"discount\";s:1:\"0\";s:15:\"featured_img_sm\";s:54:\"product/featured_image_sm/shirt2017-12-17 08:11:32.jpg\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}s:5:\"sizes\";a:1:{i:0;i:28;}}}s:8:\"totalQty\";i:1;s:10:\"totalPrice\";i:0;s:5:\"sizes\";a:0:{}}', '2018-01-09 04:23:05', 1, 0, '2018-01-09 04:23:05'),
(7, 'myOrder_2018-01-09_2128926871', '250', 16, 'dipesh', '9807654322', 'O:8:\"App\\cart\":4:{s:5:\"items\";a:1:{i:7;a:4:{s:3:\"qty\";i:1;s:5:\"price\";i:250;s:4:\"item\";O:18:\"App\\models\\Product\":26:{s:8:\"\0*\0table\";s:8:\"products\";s:11:\"\0*\0fillable\";a:22:{i:0;s:4:\"name\";i:1;s:12:\"product_slug\";i:2;s:13:\"categories_id\";i:3;s:11:\"description\";i:4;s:4:\"size\";i:5;s:3:\"sku\";i:6;s:8:\"quantity\";i:7;s:5:\"price\";i:8;s:8:\"discount\";i:9;s:8:\"featured\";i:10;s:9:\"brands_id\";i:11;s:15:\"featured_img_sm\";i:12;s:15:\"featured_img_lg\";i:13;s:6:\"status\";i:14;s:10:\"vedio_link\";i:15;s:12:\"img_path2_sm\";i:16;s:12:\"img_path2_lg\";i:17;s:12:\"img_path3_sm\";i:18;s:12:\"img_path3_lg\";i:19;s:7:\"address\";i:20;s:5:\"phone\";i:21;s:5:\"email\";}s:13:\"\0*\0connection\";s:5:\"mysql\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:13:\"\0*\0attributes\";a:9:{s:2:\"id\";i:7;s:4:\"name\";s:4:\"saya\";s:12:\"product_slug\";s:4:\"saya\";s:13:\"categories_id\";i:1;s:4:\"size\";s:2:\"12\";s:3:\"sku\";s:4:\"1234\";s:5:\"price\";s:3:\"250\";s:8:\"discount\";s:1:\"0\";s:15:\"featured_img_sm\";s:53:\"product/featured_image_sm/saya2017-12-23 10:44:29.png\";}s:11:\"\0*\0original\";a:9:{s:2:\"id\";i:7;s:4:\"name\";s:4:\"saya\";s:12:\"product_slug\";s:4:\"saya\";s:13:\"categories_id\";i:1;s:4:\"size\";s:2:\"12\";s:3:\"sku\";s:4:\"1234\";s:5:\"price\";s:3:\"250\";s:8:\"discount\";s:1:\"0\";s:15:\"featured_img_sm\";s:53:\"product/featured_image_sm/saya2017-12-23 10:44:29.png\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}s:5:\"sizes\";a:1:{i:0;i:28;}}}s:8:\"totalQty\";i:1;s:10:\"totalPrice\";i:0;s:5:\"sizes\";a:0:{}}', '2018-01-09 04:25:47', 0, 0, '2018-01-09 04:25:47'),
(8, 'myOrder_2018-01-09_1835441221', '40.5', 16, 'dipesh', '9807573751', 'O:8:\"App\\cart\":4:{s:5:\"items\";a:1:{i:5;a:4:{s:3:\"qty\";i:1;s:5:\"price\";i:45;s:4:\"item\";O:18:\"App\\models\\Product\":26:{s:8:\"\0*\0table\";s:8:\"products\";s:11:\"\0*\0fillable\";a:22:{i:0;s:4:\"name\";i:1;s:12:\"product_slug\";i:2;s:13:\"categories_id\";i:3;s:11:\"description\";i:4;s:4:\"size\";i:5;s:3:\"sku\";i:6;s:8:\"quantity\";i:7;s:5:\"price\";i:8;s:8:\"discount\";i:9;s:8:\"featured\";i:10;s:9:\"brands_id\";i:11;s:15:\"featured_img_sm\";i:12;s:15:\"featured_img_lg\";i:13;s:6:\"status\";i:14;s:10:\"vedio_link\";i:15;s:12:\"img_path2_sm\";i:16;s:12:\"img_path2_lg\";i:17;s:12:\"img_path3_sm\";i:18;s:12:\"img_path3_lg\";i:19;s:7:\"address\";i:20;s:5:\"phone\";i:21;s:5:\"email\";}s:13:\"\0*\0connection\";s:5:\"mysql\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:13:\"\0*\0attributes\";a:9:{s:2:\"id\";i:5;s:4:\"name\";s:22:\"dipesh product testing\";s:12:\"product_slug\";s:6:\"dipesh\";s:13:\"categories_id\";i:1;s:4:\"size\";s:2:\"32\";s:3:\"sku\";s:9:\"thsi sadf\";s:5:\"price\";s:2:\"45\";s:8:\"discount\";s:2:\"10\";s:15:\"featured_img_sm\";s:69:\"product/featured_image_sm/dipeshproducttesting2017-12-18 05:56:20.jpg\";}s:11:\"\0*\0original\";a:9:{s:2:\"id\";i:5;s:4:\"name\";s:22:\"dipesh product testing\";s:12:\"product_slug\";s:6:\"dipesh\";s:13:\"categories_id\";i:1;s:4:\"size\";s:2:\"32\";s:3:\"sku\";s:9:\"thsi sadf\";s:5:\"price\";s:2:\"45\";s:8:\"discount\";s:2:\"10\";s:15:\"featured_img_sm\";s:69:\"product/featured_image_sm/dipeshproducttesting2017-12-18 05:56:20.jpg\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}s:5:\"sizes\";a:1:{i:0;i:28;}}}s:8:\"totalQty\";i:1;s:10:\"totalPrice\";i:0;s:5:\"sizes\";a:0:{}}', '2018-01-09 05:27:16', 0, 0, '2018-01-09 05:27:16'),
(9, 'myOrder_2018-01-09_78496284', '21290.5', 16, 'dipesh', '98075747362', 'O:8:\"App\\cart\":4:{s:5:\"items\";a:2:{i:6;a:4:{s:3:\"qty\";i:1;s:5:\"price\";i:25000;s:4:\"item\";O:18:\"App\\models\\Product\":26:{s:8:\"\0*\0table\";s:8:\"products\";s:11:\"\0*\0fillable\";a:22:{i:0;s:4:\"name\";i:1;s:12:\"product_slug\";i:2;s:13:\"categories_id\";i:3;s:11:\"description\";i:4;s:4:\"size\";i:5;s:3:\"sku\";i:6;s:8:\"quantity\";i:7;s:5:\"price\";i:8;s:8:\"discount\";i:9;s:8:\"featured\";i:10;s:9:\"brands_id\";i:11;s:15:\"featured_img_sm\";i:12;s:15:\"featured_img_lg\";i:13;s:6:\"status\";i:14;s:10:\"vedio_link\";i:15;s:12:\"img_path2_sm\";i:16;s:12:\"img_path2_lg\";i:17;s:12:\"img_path3_sm\";i:18;s:12:\"img_path3_lg\";i:19;s:7:\"address\";i:20;s:5:\"phone\";i:21;s:5:\"email\";}s:13:\"\0*\0connection\";s:5:\"mysql\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:13:\"\0*\0attributes\";a:9:{s:2:\"id\";i:6;s:4:\"name\";s:11:\"color phone\";s:12:\"product_slug\";s:11:\"color_phone\";s:13:\"categories_id\";i:2;s:4:\"size\";s:2:\"12\";s:3:\"sku\";s:6:\"123456\";s:5:\"price\";s:5:\"25000\";s:8:\"discount\";s:2:\"15\";s:15:\"featured_img_sm\";s:59:\"product/featured_image_sm/colorphone2017-12-21 06:12:02.jpg\";}s:11:\"\0*\0original\";a:9:{s:2:\"id\";i:6;s:4:\"name\";s:11:\"color phone\";s:12:\"product_slug\";s:11:\"color_phone\";s:13:\"categories_id\";i:2;s:4:\"size\";s:2:\"12\";s:3:\"sku\";s:6:\"123456\";s:5:\"price\";s:5:\"25000\";s:8:\"discount\";s:2:\"15\";s:15:\"featured_img_sm\";s:59:\"product/featured_image_sm/colorphone2017-12-21 06:12:02.jpg\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}s:5:\"sizes\";a:1:{i:0;i:28;}}i:5;a:4:{s:3:\"qty\";i:1;s:5:\"price\";i:45;s:4:\"item\";O:18:\"App\\models\\Product\":26:{s:8:\"\0*\0table\";s:8:\"products\";s:11:\"\0*\0fillable\";a:22:{i:0;s:4:\"name\";i:1;s:12:\"product_slug\";i:2;s:13:\"categories_id\";i:3;s:11:\"description\";i:4;s:4:\"size\";i:5;s:3:\"sku\";i:6;s:8:\"quantity\";i:7;s:5:\"price\";i:8;s:8:\"discount\";i:9;s:8:\"featured\";i:10;s:9:\"brands_id\";i:11;s:15:\"featured_img_sm\";i:12;s:15:\"featured_img_lg\";i:13;s:6:\"status\";i:14;s:10:\"vedio_link\";i:15;s:12:\"img_path2_sm\";i:16;s:12:\"img_path2_lg\";i:17;s:12:\"img_path3_sm\";i:18;s:12:\"img_path3_lg\";i:19;s:7:\"address\";i:20;s:5:\"phone\";i:21;s:5:\"email\";}s:13:\"\0*\0connection\";s:5:\"mysql\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:13:\"\0*\0attributes\";a:9:{s:2:\"id\";i:5;s:4:\"name\";s:22:\"dipesh product testing\";s:12:\"product_slug\";s:6:\"dipesh\";s:13:\"categories_id\";i:1;s:4:\"size\";s:2:\"32\";s:3:\"sku\";s:9:\"thsi sadf\";s:5:\"price\";s:2:\"45\";s:8:\"discount\";s:2:\"10\";s:15:\"featured_img_sm\";s:69:\"product/featured_image_sm/dipeshproducttesting2017-12-18 05:56:20.jpg\";}s:11:\"\0*\0original\";a:9:{s:2:\"id\";i:5;s:4:\"name\";s:22:\"dipesh product testing\";s:12:\"product_slug\";s:6:\"dipesh\";s:13:\"categories_id\";i:1;s:4:\"size\";s:2:\"32\";s:3:\"sku\";s:9:\"thsi sadf\";s:5:\"price\";s:2:\"45\";s:8:\"discount\";s:2:\"10\";s:15:\"featured_img_sm\";s:69:\"product/featured_image_sm/dipeshproducttesting2017-12-18 05:56:20.jpg\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}s:5:\"sizes\";a:1:{i:0;i:28;}}}s:8:\"totalQty\";i:2;s:10:\"totalPrice\";i:0;s:5:\"sizes\";a:0:{}}', '2018-01-09 05:29:23', 0, 0, '2018-01-09 05:29:23'),
(10, 'myOrder_2018-01-09_1452464421', '250', 17, 'dipesh', '9807573751', 'O:8:\"App\\cart\":4:{s:5:\"items\";a:1:{i:7;a:4:{s:3:\"qty\";i:1;s:5:\"price\";i:250;s:4:\"item\";O:18:\"App\\models\\Product\":26:{s:8:\"\0*\0table\";s:8:\"products\";s:11:\"\0*\0fillable\";a:22:{i:0;s:4:\"name\";i:1;s:12:\"product_slug\";i:2;s:13:\"categories_id\";i:3;s:11:\"description\";i:4;s:4:\"size\";i:5;s:3:\"sku\";i:6;s:8:\"quantity\";i:7;s:5:\"price\";i:8;s:8:\"discount\";i:9;s:8:\"featured\";i:10;s:9:\"brands_id\";i:11;s:15:\"featured_img_sm\";i:12;s:15:\"featured_img_lg\";i:13;s:6:\"status\";i:14;s:10:\"vedio_link\";i:15;s:12:\"img_path2_sm\";i:16;s:12:\"img_path2_lg\";i:17;s:12:\"img_path3_sm\";i:18;s:12:\"img_path3_lg\";i:19;s:7:\"address\";i:20;s:5:\"phone\";i:21;s:5:\"email\";}s:13:\"\0*\0connection\";s:5:\"mysql\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:13:\"\0*\0attributes\";a:9:{s:2:\"id\";i:7;s:4:\"name\";s:4:\"saya\";s:12:\"product_slug\";s:4:\"saya\";s:13:\"categories_id\";i:1;s:4:\"size\";s:2:\"12\";s:3:\"sku\";s:4:\"1234\";s:5:\"price\";s:3:\"250\";s:8:\"discount\";s:1:\"0\";s:15:\"featured_img_sm\";s:53:\"product/featured_image_sm/saya2017-12-23 10:44:29.png\";}s:11:\"\0*\0original\";a:9:{s:2:\"id\";i:7;s:4:\"name\";s:4:\"saya\";s:12:\"product_slug\";s:4:\"saya\";s:13:\"categories_id\";i:1;s:4:\"size\";s:2:\"12\";s:3:\"sku\";s:4:\"1234\";s:5:\"price\";s:3:\"250\";s:8:\"discount\";s:1:\"0\";s:15:\"featured_img_sm\";s:53:\"product/featured_image_sm/saya2017-12-23 10:44:29.png\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}s:5:\"sizes\";a:1:{i:0;i:28;}}}s:8:\"totalQty\";i:1;s:10:\"totalPrice\";i:0;s:5:\"sizes\";a:0:{}}', '2018-01-09 11:30:57', 0, 0, '2018-01-09 11:30:57'),
(11, 'myOrder_2018-01-12_1449786137', '500', 1, 'lainchour kathmandu nepal', '9807573751', 'O:8:\"App\\cart\":4:{s:5:\"items\";a:1:{i:9;a:4:{s:3:\"qty\";i:1;s:5:\"price\";i:500;s:4:\"item\";O:18:\"App\\models\\Product\":26:{s:8:\"\0*\0table\";s:8:\"products\";s:11:\"\0*\0fillable\";a:22:{i:0;s:4:\"name\";i:1;s:12:\"product_slug\";i:2;s:13:\"categories_id\";i:3;s:11:\"description\";i:4;s:4:\"size\";i:5;s:3:\"sku\";i:6;s:8:\"quantity\";i:7;s:5:\"price\";i:8;s:8:\"discount\";i:9;s:8:\"featured\";i:10;s:9:\"brands_id\";i:11;s:15:\"featured_img_sm\";i:12;s:15:\"featured_img_lg\";i:13;s:6:\"status\";i:14;s:10:\"vedio_link\";i:15;s:12:\"img_path2_sm\";i:16;s:12:\"img_path2_lg\";i:17;s:12:\"img_path3_sm\";i:18;s:12:\"img_path3_lg\";i:19;s:7:\"address\";i:20;s:5:\"phone\";i:21;s:5:\"email\";}s:13:\"\0*\0connection\";s:5:\"mysql\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:13:\"\0*\0attributes\";a:9:{s:2:\"id\";i:9;s:4:\"name\";s:17:\"plain black shirt\";s:12:\"product_slug\";s:17:\"plain_black_shirt\";s:13:\"categories_id\";i:6;s:4:\"size\";s:2:\"23\";s:3:\"sku\";s:28:\"plain black shirt_2114380114\";s:5:\"price\";s:3:\"500\";s:8:\"discount\";s:1:\"0\";s:15:\"featured_img_sm\";s:64:\"product/featured_image_sm/plainblackshirt2018-01-04 06:36:08.jpg\";}s:11:\"\0*\0original\";a:9:{s:2:\"id\";i:9;s:4:\"name\";s:17:\"plain black shirt\";s:12:\"product_slug\";s:17:\"plain_black_shirt\";s:13:\"categories_id\";i:6;s:4:\"size\";s:2:\"23\";s:3:\"sku\";s:28:\"plain black shirt_2114380114\";s:5:\"price\";s:3:\"500\";s:8:\"discount\";s:1:\"0\";s:15:\"featured_img_sm\";s:64:\"product/featured_image_sm/plainblackshirt2018-01-04 06:36:08.jpg\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}s:5:\"sizes\";a:1:{i:0;i:28;}}}s:8:\"totalQty\";i:1;s:10:\"totalPrice\";i:0;s:5:\"sizes\";a:0:{}}', '2018-01-12 10:53:54', 0, 0, '2018-01-12 10:53:54'),
(12, 'myOrder_2018-01-13_390173042', '456', 1, 'lainchour kathmandu nepal', '9807747724', 'O:8:\"App\\cart\":4:{s:5:\"items\";a:1:{i:8;a:4:{s:3:\"qty\";i:1;s:5:\"price\";i:456;s:4:\"item\";O:18:\"App\\models\\Product\":26:{s:8:\"\0*\0table\";s:8:\"products\";s:11:\"\0*\0fillable\";a:22:{i:0;s:4:\"name\";i:1;s:12:\"product_slug\";i:2;s:13:\"categories_id\";i:3;s:11:\"description\";i:4;s:4:\"size\";i:5;s:3:\"sku\";i:6;s:8:\"quantity\";i:7;s:5:\"price\";i:8;s:8:\"discount\";i:9;s:8:\"featured\";i:10;s:9:\"brands_id\";i:11;s:15:\"featured_img_sm\";i:12;s:15:\"featured_img_lg\";i:13;s:6:\"status\";i:14;s:10:\"vedio_link\";i:15;s:12:\"img_path2_sm\";i:16;s:12:\"img_path2_lg\";i:17;s:12:\"img_path3_sm\";i:18;s:12:\"img_path3_lg\";i:19;s:7:\"address\";i:20;s:5:\"phone\";i:21;s:5:\"email\";}s:13:\"\0*\0connection\";s:5:\"mysql\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:13:\"\0*\0attributes\";a:9:{s:2:\"id\";i:8;s:4:\"name\";s:11:\"summer love\";s:12:\"product_slug\";s:11:\"summer-love\";s:13:\"categories_id\";i:6;s:4:\"size\";s:2:\"32\";s:3:\"sku\";s:4:\"1234\";s:5:\"price\";s:3:\"456\";s:8:\"discount\";s:1:\"0\";s:15:\"featured_img_sm\";s:59:\"product/featured_image_sm/summerlove2017-12-23 10:48:28.jpg\";}s:11:\"\0*\0original\";a:9:{s:2:\"id\";i:8;s:4:\"name\";s:11:\"summer love\";s:12:\"product_slug\";s:11:\"summer-love\";s:13:\"categories_id\";i:6;s:4:\"size\";s:2:\"32\";s:3:\"sku\";s:4:\"1234\";s:5:\"price\";s:3:\"456\";s:8:\"discount\";s:1:\"0\";s:15:\"featured_img_sm\";s:59:\"product/featured_image_sm/summerlove2017-12-23 10:48:28.jpg\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}s:5:\"sizes\";a:1:{i:0;i:28;}}}s:8:\"totalQty\";i:1;s:10:\"totalPrice\";i:0;s:5:\"sizes\";a:0:{}}', '2018-01-13 11:08:35', 0, 0, '2018-01-13 11:08:35'),
(13, 'myOrder_2018-01-13_191333287', '21284', 1, 'lainchour kathmandu nepal', '9807573751', 'O:8:\"App\\cart\":4:{s:5:\"items\";a:2:{i:1;a:4:{s:3:\"qty\";i:1;s:5:\"price\";i:34;s:4:\"item\";O:18:\"App\\models\\Product\":26:{s:8:\"\0*\0table\";s:8:\"products\";s:11:\"\0*\0fillable\";a:22:{i:0;s:4:\"name\";i:1;s:12:\"product_slug\";i:2;s:13:\"categories_id\";i:3;s:11:\"description\";i:4;s:4:\"size\";i:5;s:3:\"sku\";i:6;s:8:\"quantity\";i:7;s:5:\"price\";i:8;s:8:\"discount\";i:9;s:8:\"featured\";i:10;s:9:\"brands_id\";i:11;s:15:\"featured_img_sm\";i:12;s:15:\"featured_img_lg\";i:13;s:6:\"status\";i:14;s:10:\"vedio_link\";i:15;s:12:\"img_path2_sm\";i:16;s:12:\"img_path2_lg\";i:17;s:12:\"img_path3_sm\";i:18;s:12:\"img_path3_lg\";i:19;s:7:\"address\";i:20;s:5:\"phone\";i:21;s:5:\"email\";}s:13:\"\0*\0connection\";s:5:\"mysql\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:13:\"\0*\0attributes\";a:9:{s:2:\"id\";i:1;s:4:\"name\";s:9:\"blue jean\";s:12:\"product_slug\";s:10:\"blue_paint\";s:13:\"categories_id\";i:6;s:4:\"size\";s:2:\"32\";s:3:\"sku\";s:6:\"123456\";s:5:\"price\";s:2:\"34\";s:8:\"discount\";s:1:\"0\";s:15:\"featured_img_sm\";s:58:\"product/featured_image_sm/bluejean2017-12-17 09:34:45.jpeg\";}s:11:\"\0*\0original\";a:9:{s:2:\"id\";i:1;s:4:\"name\";s:9:\"blue jean\";s:12:\"product_slug\";s:10:\"blue_paint\";s:13:\"categories_id\";i:6;s:4:\"size\";s:2:\"32\";s:3:\"sku\";s:6:\"123456\";s:5:\"price\";s:2:\"34\";s:8:\"discount\";s:1:\"0\";s:15:\"featured_img_sm\";s:58:\"product/featured_image_sm/bluejean2017-12-17 09:34:45.jpeg\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}s:5:\"sizes\";a:1:{i:0;i:28;}}i:6;a:4:{s:3:\"qty\";i:1;s:5:\"price\";i:25000;s:4:\"item\";O:18:\"App\\models\\Product\":26:{s:8:\"\0*\0table\";s:8:\"products\";s:11:\"\0*\0fillable\";a:22:{i:0;s:4:\"name\";i:1;s:12:\"product_slug\";i:2;s:13:\"categories_id\";i:3;s:11:\"description\";i:4;s:4:\"size\";i:5;s:3:\"sku\";i:6;s:8:\"quantity\";i:7;s:5:\"price\";i:8;s:8:\"discount\";i:9;s:8:\"featured\";i:10;s:9:\"brands_id\";i:11;s:15:\"featured_img_sm\";i:12;s:15:\"featured_img_lg\";i:13;s:6:\"status\";i:14;s:10:\"vedio_link\";i:15;s:12:\"img_path2_sm\";i:16;s:12:\"img_path2_lg\";i:17;s:12:\"img_path3_sm\";i:18;s:12:\"img_path3_lg\";i:19;s:7:\"address\";i:20;s:5:\"phone\";i:21;s:5:\"email\";}s:13:\"\0*\0connection\";s:5:\"mysql\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:13:\"\0*\0attributes\";a:9:{s:2:\"id\";i:6;s:4:\"name\";s:11:\"color phone\";s:12:\"product_slug\";s:11:\"color_phone\";s:13:\"categories_id\";i:6;s:4:\"size\";s:2:\"12\";s:3:\"sku\";s:6:\"123456\";s:5:\"price\";s:5:\"25000\";s:8:\"discount\";s:2:\"15\";s:15:\"featured_img_sm\";s:59:\"product/featured_image_sm/colorphone2017-12-21 06:12:02.jpg\";}s:11:\"\0*\0original\";a:9:{s:2:\"id\";i:6;s:4:\"name\";s:11:\"color phone\";s:12:\"product_slug\";s:11:\"color_phone\";s:13:\"categories_id\";i:6;s:4:\"size\";s:2:\"12\";s:3:\"sku\";s:6:\"123456\";s:5:\"price\";s:5:\"25000\";s:8:\"discount\";s:2:\"15\";s:15:\"featured_img_sm\";s:59:\"product/featured_image_sm/colorphone2017-12-21 06:12:02.jpg\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}s:5:\"sizes\";a:1:{i:0;i:28;}}}s:8:\"totalQty\";i:2;s:10:\"totalPrice\";i:0;s:5:\"sizes\";a:0:{}}', '2018-01-13 12:01:41', 0, 0, '2018-01-13 12:01:41'),
(14, 'myOrder_2018-01-13_167622158', '475', 1, 'lainchour kathmandu nepal', '9807573751', 'O:8:\"App\\cart\":4:{s:5:\"items\";a:1:{i:10;a:4:{s:3:\"qty\";i:1;s:5:\"price\";i:500;s:4:\"item\";O:18:\"App\\models\\Product\":26:{s:8:\"\0*\0table\";s:8:\"products\";s:11:\"\0*\0fillable\";a:22:{i:0;s:4:\"name\";i:1;s:12:\"product_slug\";i:2;s:13:\"categories_id\";i:3;s:11:\"description\";i:4;s:4:\"size\";i:5;s:3:\"sku\";i:6;s:8:\"quantity\";i:7;s:5:\"price\";i:8;s:8:\"discount\";i:9;s:8:\"featured\";i:10;s:9:\"brands_id\";i:11;s:15:\"featured_img_sm\";i:12;s:15:\"featured_img_lg\";i:13;s:6:\"status\";i:14;s:10:\"vedio_link\";i:15;s:12:\"img_path2_sm\";i:16;s:12:\"img_path2_lg\";i:17;s:12:\"img_path3_sm\";i:18;s:12:\"img_path3_lg\";i:19;s:7:\"address\";i:20;s:5:\"phone\";i:21;s:5:\"email\";}s:13:\"\0*\0connection\";s:5:\"mysql\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:13:\"\0*\0attributes\";a:9:{s:2:\"id\";i:10;s:4:\"name\";s:4:\"Bags\";s:12:\"product_slug\";s:9:\"43382Bags\";s:13:\"categories_id\";i:6;s:4:\"size\";s:2:\"28\";s:3:\"sku\";s:9:\"668704147\";s:5:\"price\";s:3:\"500\";s:8:\"discount\";s:1:\"5\";s:15:\"featured_img_sm\";s:53:\"product/featured_image_sm/Bags2018-01-04 06:50:22.jpg\";}s:11:\"\0*\0original\";a:9:{s:2:\"id\";i:10;s:4:\"name\";s:4:\"Bags\";s:12:\"product_slug\";s:9:\"43382Bags\";s:13:\"categories_id\";i:6;s:4:\"size\";s:2:\"28\";s:3:\"sku\";s:9:\"668704147\";s:5:\"price\";s:3:\"500\";s:8:\"discount\";s:1:\"5\";s:15:\"featured_img_sm\";s:53:\"product/featured_image_sm/Bags2018-01-04 06:50:22.jpg\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}s:5:\"sizes\";a:1:{i:0;i:28;}}}s:8:\"totalQty\";i:1;s:10:\"totalPrice\";i:0;s:5:\"sizes\";a:0:{}}', '2018-01-13 12:19:29', 1, 0, '2018-01-13 12:19:29'),
(15, 'myOrder_2018-01-13_1996780960', '50', 1, 'lainchour kathmandu nepal', '9807573751', 'O:8:\"App\\cart\":4:{s:5:\"items\";a:1:{i:11;a:4:{s:3:\"qty\";i:1;s:5:\"price\";i:50;s:4:\"item\";O:18:\"App\\models\\Product\":26:{s:8:\"\0*\0table\";s:8:\"products\";s:11:\"\0*\0fillable\";a:22:{i:0;s:4:\"name\";i:1;s:12:\"product_slug\";i:2;s:13:\"categories_id\";i:3;s:11:\"description\";i:4;s:4:\"size\";i:5;s:3:\"sku\";i:6;s:8:\"quantity\";i:7;s:5:\"price\";i:8;s:8:\"discount\";i:9;s:8:\"featured\";i:10;s:9:\"brands_id\";i:11;s:15:\"featured_img_sm\";i:12;s:15:\"featured_img_lg\";i:13;s:6:\"status\";i:14;s:10:\"vedio_link\";i:15;s:12:\"img_path2_sm\";i:16;s:12:\"img_path2_lg\";i:17;s:12:\"img_path3_sm\";i:18;s:12:\"img_path3_lg\";i:19;s:7:\"address\";i:20;s:5:\"phone\";i:21;s:5:\"email\";}s:13:\"\0*\0connection\";s:5:\"mysql\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:13:\"\0*\0attributes\";a:9:{s:2:\"id\";i:11;s:4:\"name\";s:30:\"nepali product testing purpose\";s:12:\"product_slug\";s:19:\"nepali_product23711\";s:13:\"categories_id\";i:6;s:4:\"size\";s:8:\"38,40,42\";s:3:\"sku\";s:5:\"90121\";s:5:\"price\";s:2:\"50\";s:8:\"discount\";s:1:\"0\";s:15:\"featured_img_sm\";s:76:\"product/featured_image_lg/nepaliproducttestingpurpose2018-01-10 07:39:14.jpg\";}s:11:\"\0*\0original\";a:9:{s:2:\"id\";i:11;s:4:\"name\";s:30:\"nepali product testing purpose\";s:12:\"product_slug\";s:19:\"nepali_product23711\";s:13:\"categories_id\";i:6;s:4:\"size\";s:8:\"38,40,42\";s:3:\"sku\";s:5:\"90121\";s:5:\"price\";s:2:\"50\";s:8:\"discount\";s:1:\"0\";s:15:\"featured_img_sm\";s:76:\"product/featured_image_lg/nepaliproducttestingpurpose2018-01-10 07:39:14.jpg\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}s:5:\"sizes\";a:1:{i:0;i:28;}}}s:8:\"totalQty\";i:1;s:10:\"totalPrice\";i:0;s:5:\"sizes\";a:0:{}}', '2018-01-13 12:49:04', 0, 0, '2018-01-13 12:49:04'),
(16, 'myOrder_2018-01-13_2110402706', '40.5', 1, 'lainchour kathmandu nepal', '9807573751', 'O:8:\"App\\cart\":4:{s:5:\"items\";a:1:{i:5;a:4:{s:3:\"qty\";i:1;s:5:\"price\";i:45;s:4:\"item\";O:18:\"App\\models\\Product\":26:{s:8:\"\0*\0table\";s:8:\"products\";s:11:\"\0*\0fillable\";a:22:{i:0;s:4:\"name\";i:1;s:12:\"product_slug\";i:2;s:13:\"categories_id\";i:3;s:11:\"description\";i:4;s:4:\"size\";i:5;s:3:\"sku\";i:6;s:8:\"quantity\";i:7;s:5:\"price\";i:8;s:8:\"discount\";i:9;s:8:\"featured\";i:10;s:9:\"brands_id\";i:11;s:15:\"featured_img_sm\";i:12;s:15:\"featured_img_lg\";i:13;s:6:\"status\";i:14;s:10:\"vedio_link\";i:15;s:12:\"img_path2_sm\";i:16;s:12:\"img_path2_lg\";i:17;s:12:\"img_path3_sm\";i:18;s:12:\"img_path3_lg\";i:19;s:7:\"address\";i:20;s:5:\"phone\";i:21;s:5:\"email\";}s:13:\"\0*\0connection\";s:5:\"mysql\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:13:\"\0*\0attributes\";a:9:{s:2:\"id\";i:5;s:4:\"name\";s:22:\"dipesh product testing\";s:12:\"product_slug\";s:6:\"dipesh\";s:13:\"categories_id\";i:6;s:4:\"size\";s:2:\"32\";s:3:\"sku\";s:9:\"thsi sadf\";s:5:\"price\";s:2:\"45\";s:8:\"discount\";s:2:\"10\";s:15:\"featured_img_sm\";s:69:\"product/featured_image_sm/dipeshproducttesting2017-12-18 05:56:20.jpg\";}s:11:\"\0*\0original\";a:9:{s:2:\"id\";i:5;s:4:\"name\";s:22:\"dipesh product testing\";s:12:\"product_slug\";s:6:\"dipesh\";s:13:\"categories_id\";i:6;s:4:\"size\";s:2:\"32\";s:3:\"sku\";s:9:\"thsi sadf\";s:5:\"price\";s:2:\"45\";s:8:\"discount\";s:2:\"10\";s:15:\"featured_img_sm\";s:69:\"product/featured_image_sm/dipeshproducttesting2017-12-18 05:56:20.jpg\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}s:5:\"sizes\";a:1:{i:0;i:28;}}}s:8:\"totalQty\";i:1;s:10:\"totalPrice\";i:0;s:5:\"sizes\";a:0:{}}', '2018-01-13 12:53:52', 0, 0, '2018-01-13 12:53:52'),
(17, 'myOrder_2018-01-13_978970124', '500', 1, 'lainchour kathmandu nepal', '9807573751', 'O:8:\"App\\cart\":4:{s:5:\"items\";a:1:{i:9;a:4:{s:3:\"qty\";i:1;s:5:\"price\";i:500;s:4:\"item\";O:18:\"App\\models\\Product\":26:{s:8:\"\0*\0table\";s:8:\"products\";s:11:\"\0*\0fillable\";a:22:{i:0;s:4:\"name\";i:1;s:12:\"product_slug\";i:2;s:13:\"categories_id\";i:3;s:11:\"description\";i:4;s:4:\"size\";i:5;s:3:\"sku\";i:6;s:8:\"quantity\";i:7;s:5:\"price\";i:8;s:8:\"discount\";i:9;s:8:\"featured\";i:10;s:9:\"brands_id\";i:11;s:15:\"featured_img_sm\";i:12;s:15:\"featured_img_lg\";i:13;s:6:\"status\";i:14;s:10:\"vedio_link\";i:15;s:12:\"img_path2_sm\";i:16;s:12:\"img_path2_lg\";i:17;s:12:\"img_path3_sm\";i:18;s:12:\"img_path3_lg\";i:19;s:7:\"address\";i:20;s:5:\"phone\";i:21;s:5:\"email\";}s:13:\"\0*\0connection\";s:5:\"mysql\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:13:\"\0*\0attributes\";a:9:{s:2:\"id\";i:9;s:4:\"name\";s:17:\"plain black shirt\";s:12:\"product_slug\";s:17:\"plain_black_shirt\";s:13:\"categories_id\";i:6;s:4:\"size\";s:2:\"23\";s:3:\"sku\";s:28:\"plain black shirt_2114380114\";s:5:\"price\";s:3:\"500\";s:8:\"discount\";s:1:\"0\";s:15:\"featured_img_sm\";s:64:\"product/featured_image_sm/plainblackshirt2018-01-04 06:36:08.jpg\";}s:11:\"\0*\0original\";a:9:{s:2:\"id\";i:9;s:4:\"name\";s:17:\"plain black shirt\";s:12:\"product_slug\";s:17:\"plain_black_shirt\";s:13:\"categories_id\";i:6;s:4:\"size\";s:2:\"23\";s:3:\"sku\";s:28:\"plain black shirt_2114380114\";s:5:\"price\";s:3:\"500\";s:8:\"discount\";s:1:\"0\";s:15:\"featured_img_sm\";s:64:\"product/featured_image_sm/plainblackshirt2018-01-04 06:36:08.jpg\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}s:5:\"sizes\";a:1:{i:0;i:28;}}}s:8:\"totalQty\";i:1;s:10:\"totalPrice\";i:0;s:5:\"sizes\";a:0:{}}', '2018-01-13 12:56:52', 0, 0, '2018-01-13 12:56:52'),
(18, 'myOrder_2018-01-13_345629826', '456', 1, 'lainchour kathmandu nepal', '9807573761', 'O:8:\"App\\cart\":4:{s:5:\"items\";a:1:{i:8;a:4:{s:3:\"qty\";i:1;s:5:\"price\";i:456;s:4:\"item\";O:18:\"App\\models\\Product\":26:{s:8:\"\0*\0table\";s:8:\"products\";s:11:\"\0*\0fillable\";a:22:{i:0;s:4:\"name\";i:1;s:12:\"product_slug\";i:2;s:13:\"categories_id\";i:3;s:11:\"description\";i:4;s:4:\"size\";i:5;s:3:\"sku\";i:6;s:8:\"quantity\";i:7;s:5:\"price\";i:8;s:8:\"discount\";i:9;s:8:\"featured\";i:10;s:9:\"brands_id\";i:11;s:15:\"featured_img_sm\";i:12;s:15:\"featured_img_lg\";i:13;s:6:\"status\";i:14;s:10:\"vedio_link\";i:15;s:12:\"img_path2_sm\";i:16;s:12:\"img_path2_lg\";i:17;s:12:\"img_path3_sm\";i:18;s:12:\"img_path3_lg\";i:19;s:7:\"address\";i:20;s:5:\"phone\";i:21;s:5:\"email\";}s:13:\"\0*\0connection\";s:5:\"mysql\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:13:\"\0*\0attributes\";a:9:{s:2:\"id\";i:8;s:4:\"name\";s:11:\"summer love\";s:12:\"product_slug\";s:11:\"summer-love\";s:13:\"categories_id\";i:6;s:4:\"size\";s:2:\"32\";s:3:\"sku\";s:4:\"1234\";s:5:\"price\";s:3:\"456\";s:8:\"discount\";s:1:\"0\";s:15:\"featured_img_sm\";s:59:\"product/featured_image_sm/summerlove2017-12-23 10:48:28.jpg\";}s:11:\"\0*\0original\";a:9:{s:2:\"id\";i:8;s:4:\"name\";s:11:\"summer love\";s:12:\"product_slug\";s:11:\"summer-love\";s:13:\"categories_id\";i:6;s:4:\"size\";s:2:\"32\";s:3:\"sku\";s:4:\"1234\";s:5:\"price\";s:3:\"456\";s:8:\"discount\";s:1:\"0\";s:15:\"featured_img_sm\";s:59:\"product/featured_image_sm/summerlove2017-12-23 10:48:28.jpg\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}s:5:\"sizes\";a:1:{i:0;i:28;}}}s:8:\"totalQty\";i:1;s:10:\"totalPrice\";i:0;s:5:\"sizes\";a:0:{}}', '2018-01-13 12:59:25', 0, 0, '2018-01-13 12:59:25');

-- --------------------------------------------------------

--
-- Table structure for table `notice_boards`
--

CREATE TABLE `notice_boards` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notice_boards`
--

INSERT INTO `notice_boards` (`id`, `name`, `slug`, `desc`, `img_path`, `end_date`, `created_at`, `updated_at`) VALUES
(2, 'Chrismas eve goes today', 'chrismas_eve', 'i am working', 'noticeImage/Chrismaseve2017-12-2506:05:37.jpg', '2017-12-29', '2017-12-25 12:20:38', '2017-12-25 12:59:43');

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
  `appreance` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `address`, `phone`, `email`, `product_slug`, `author_manufactural_name`, `categories_id`, `sub_categories_id`, `description`, `size`, `sku`, `quantity`, `price`, `discount`, `featured`, `brands_id`, `featured_img_sm`, `featured_img_lg`, `status`, `featured_product`, `vedio_link`, `product_image`, `appreance`, `created_at`, `updated_at`) VALUES
(1, 'blue jean', 'lainchour kathmandu', '9807573751', 'dipeshbanjade@gmail.com', 'blue_paint', 'dipesh banjade', 6, 5, 'this is just for testing', '32', '123456', 45, '34', '0', 'it will goes later i love testing stub<br>', '17', 'product/featured_image_sm/bluejean2017-12-17 09:34:45.jpeg', 'product/featured_image_lg/bluejean2017-12-17 09:34:45.jpeg', 1, 1, 'test', 'product/product_image/bluejean2017-12-17 09:34:45.jpeg', 0, '2017-12-17 03:49:45', '2018-01-10 12:54:53'),
(5, 'dipesh product testing', NULL, NULL, NULL, 'dipesh', 'banjade', 6, 4, 'this is just for testing code', '32', 'thsi sadf', 76, '45', '10', '<ol><li>dipesh </li><li>banjade&nbsp;&nbsp;&nbsp;&nbsp;</li><li>bangain</li><li>sdfsd<br></li></ol>', '17', 'product/featured_image_sm/dipeshproducttesting2017-12-18 05:56:20.jpg', 'product/featured_image_lg/dipeshproducttesting2017-12-18 05:56:20.jpg', 1, 1, 'asdfds', 'product/product_image/dipeshproducttesting2017-12-18 05:56:20.jpg', 0, '2017-12-18 12:11:20', '2017-12-18 12:11:20'),
(6, 'color phone', NULL, NULL, NULL, 'color_phone', 'color', 6, 4, 'I have a custom method that I\'d like to use globally. ... Yes, it will run using my models if I leave it inside builder.php but that doesn\'t seem like the correct way of doing it. ... Because that function is a modified increment() function which resides in Vendor/Laravel/Framework/src/Illuminate/Query/builder.php.', '12', '123456', 10, '25000', '15', '<ul><li>Mobile phones are just now beginning to be as vital to North Americans \r\nas they have been to Asians. You can always see what is coming to store \r\nshelves in the next six months to a year by looking at the models that \r\nare currently available in Japan</li><li>Mobile phones are just now beginning to be as vital to North Americans \r\nas they have been to Asians. You can always see what is coming to store \r\nshelves in the next six months to a year by looking at the models that \r\nare currently available in Japan</li><li>Mobile phones are just now beginning to be as vital to North Americans \r\nas they have been to Asians. You can always see what is coming to store \r\nshelves in the next six months to a year by looking at the models that \r\nare currently available in Japan<br></li></ul>', '17', 'product/featured_image_sm/colorphone2017-12-21 06:12:02.jpg', 'product/featured_image_lg/colorphone2017-12-21 06:12:02.jpg', 1, 1, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/NooOubDGv0A\" frameborder=\"0\" gesture=\"media\" allow=\"encrypted-media\" allowfullscreen></iframe>', 'product/product_image/colorphone2017-12-21 06:12:02.jpg', 1, '2017-12-21 12:27:03', '2017-12-21 12:27:32'),
(7, 'saya', 'lainchour', '9807573751', 'dipesh@mail.com', 'saya', 'dipesh', 6, 1, 'this is just for testing purpsoe', '12', '1234', 123, '250', '0', '<p>this is just for tesigtn purpose<br></p>', '16', 'product/featured_image_sm/saya2017-12-23 10:44:29.png', 'product/featured_image_lg/saya2017-12-23 10:44:29.png', 1, 0, 'asdfdsf', 'product/product_image/saya2017-12-23 10:44:29.png', 1, '2017-12-23 04:59:29', '2017-12-23 04:59:29'),
(8, 'summer love', 'lainchour kathmandu nepal', '9807573751', 'dipeshbanjade@gmail.com', 'summer-love', 'dipesh', 6, 1, 'this is just for testing purpose goes here hope youlike it', '32', '1234', 123, '456', '0', '<p>this is just fo rtesing pupsosefrsd<br></p>', '16', 'product/featured_image_sm/summerlove2017-12-23 10:48:28.jpg', 'product/featured_image_lg/summerlove2017-12-23 10:48:28.jpg', 1, 0, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/-0NxNr_R-fs\" frameborder=\"0\" gesture=\"media\" allow=\"encrypted-media\" allowfullscreen></iframe>', 'product/product_image/summerlove2017-12-23 10:48:28.jpg', 1, '2017-12-23 05:03:28', '2017-12-23 06:25:25'),
(9, 'plain black shirt', 'lainchour kathmandu nepal', '9807573751', 'dipeshbanjade@gmail.com', 'plain_black_shirt', 'dipesh', 6, 8, 'plain black tshirt', '23', 'plain black shirt_2114380114', 23, '500', '0', '<p>this is just for testing pures<br></p>', '16', 'product/featured_image_sm/plainblackshirt2018-01-04 06:36:08.jpg', 'product/featured_image_lg/plainblackshirt2018-01-04 06:36:08.jpg', 1, 0, 'N/A', 'product/product_image/plainblackshirt2018-01-04 06:36:08.jpg', 1, '2018-01-04 00:51:08', '2018-01-04 05:14:37'),
(10, 'Bags', 'lainchour kathmandu nepal', '9807573751', 'dipeshbanjade@gmail.com', '43382Bags', 'dipesh', 6, 8, 'nepali brand bagas', '28', '668704147', 28, '500', '5', '<p>sdgfdgsfdgsfd<br></p>', '16', 'product/featured_image_sm/Bags2018-01-04 06:50:22.jpg', 'product/featured_image_lg/Bags2018-01-04 06:50:22.jpg', 1, 0, 'N/A', 'product/product_image/Bags2018-01-04 06:50:22.jpg', 0, '2018-01-04 01:05:23', '2018-01-04 01:05:23'),
(11, 'nepali product testing purpose', 'lainchour kathmandu nepal', '9807573751', 'dipesh', 'nepali_product23711', 'dipesh', 6, 8, 'this is just for testing purpose', '38,40,42', '90121', 8, '50', '0', '<p>this is just for testin purpose hope you like it</p>', '16', 'product/featured_image_lg/nepaliproducttestingpurpose2018-01-10 07:39:14.jpg', 'product/featured_image_lg/nepaliproducttestingpurpose2018-01-10 07:43:47.jpeg', 1, 0, 'N/A', 'product/product_image/nepaliproducttestingpurpose2018-01-10 07:31:46.jpg', 0, '2018-01-10 13:12:05', '2018-01-10 13:58:47'),
(12, 'Bhairav Laxmi Angoothi & locket', 'lainchour kathmandu nepal', '9807573751', 'dipeshbanjade@gmail.com', 'Bhairav_Laxmi_Angoothi_&_locket42095', 'dipesh', 9, 10, 'Bhairav Laxmi Stone is considered as Holy Stone\r\nwhich will help you to make correct decisions \r\n\r\nRahu is a planet of share market and thus those people who are willing to earn from stocks should definitely wear this ring.\r\nThere cannot be severe losses to native wearing cats eye and when conjoined with hessonite and energized, this ring is a must for people into stock markets.\r\n\r\nGet original stone with certificate.', '231', '51119', 32, '8500', '0', '<h2 style=\"font-family: Poppins, sans-serif; line-height: 1.1; color: rgb(0, 0, 0); margin-top: 0px; margin-bottom: 10px; font-size: 2rem; letter-spacing: normal;\">Specification:</h2><ul><li>help you to make correct decision</li><li>help you to earn more money</li><li>help you to raise you stock market.</li></ul><p>Note:- Get this ring 10-15 days after your order.</p>', '16', 'product/featured_image_sm/BhairavLaxmiAngoothi&locket2018-01-19 05:17:14.jpg', 'product/featured_image_lg/BhairavLaxmiAngoothi&locket2018-01-19 05:17:14.jpg', 1, 0, 'N/A', 'product/product_image/BhairavLaxmiAngoothi&locket2018-01-19 05:17:14.jpg', 0, '2018-01-18 23:32:14', '2018-01-18 23:32:14');

-- --------------------------------------------------------

--
-- Table structure for table `room_types`
--

CREATE TABLE `room_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `room_types`
--

INSERT INTO `room_types` (`id`, `name`, `slug`, `desc`, `created_at`, `updated_at`) VALUES
(2, 'Delux', 'delux', 'one of most expensive room', '2017-12-31 07:26:34', '2017-12-31 07:26:34'),
(3, 'Normal', 'normal_room', 'normal room', '2017-12-31 09:05:24', '2017-12-31 09:05:24'),
(4, 'standard', 'standard_room', 'this is strandard room', '2017-12-31 09:05:51', '2017-12-31 09:05:51');

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
(1, 5, 'samsung', 'samsung', '2017-12-20 14:10:41', '2017-12-20 14:10:41'),
(4, 6, 'colors', 'colors', '2017-12-20 14:10:55', '2017-12-20 14:10:55'),
(5, 6, 'shirt', 'shirt', '2017-12-20 14:11:18', '2017-12-20 14:11:18'),
(6, 7, 'hotel booking', 'hotel_booking', '2017-12-23 02:24:24', '2017-12-23 02:24:24'),
(7, 5, 'event vanue', 'event_vanue', '2017-12-23 02:24:46', '2017-12-23 02:24:46'),
(8, 6, 'Tshirt', 'nepalihandcript_cotten_tshirt', '2018-01-03 22:45:17', '2018-01-03 22:45:17'),
(9, 8, 'novel', 'my_novel', '2018-01-12 23:53:08', '2018-01-12 23:53:08'),
(10, 9, 'gems & stone', 'gems_stone', '2018-01-18 23:03:22', '2018-01-18 23:03:22');

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
(1, 'dipesh', 'dipeshbanjade@gmail.com', 'admin', '$2y$10$zPL6URzzyDnRPhzPltbmbe2l4B8tSi6YBJqXYYIt/8UCkAhpvk8C6', 'WHtmlYH6eOMHx5YxQy3ENCD20CW7E3SvoQFJL8b9z3uDAX2boWLKGfLStriz', '2017-12-16 18:15:00', '2017-12-23 18:15:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'dipesh', 'dbsandesh@gmail.com', '9807573752', '$2y$10$f6kbfc4g12/ojWSJBm.xMexQVgxcxzrp6F0pzEyFpnxj3t.wuo4R2', 'yo5hFfGWlpyXUfqxDKat6pq49MTe3STgtqbyAascQKeVjxt2JA7SZs2uvs50', '2017-12-19 02:41:18', '2017-12-19 02:41:18'),
(4, 'dipesh', 'mywebnepal@gmail.com', '9807689877', '$2y$10$Du72Kz6ekgjujormH9cpN.NGNt9KBE3va1.RLFm8Ldy7enPuQjXYa', 'nX3eyPA7ZB0vAo3unggaXbI2JuEFYx5WONIDcX0kRdnze1wtxIq2vAqmGHzL', '2018-01-05 02:23:24', '2018-01-05 02:23:24'),
(5, 'kjhklhjkl', 'abc@gmail.com', '98076578765', '$2y$10$8fiAECQti331ZWzV2D3pPOSzUx1pPIdyyCIOswi.lw/ikbhSKw0be', '76DjJ16Mv6u88Fhb7f9qtZXibF642teL3ICrjp8GRwMTkIA5mwGVB0WhyHkw', '2018-01-05 02:37:57', '2018-01-05 02:37:57'),
(6, 'kjhkjh', 'sda@gmail.com', '8790987654', '$2y$10$Vh9M6d1651ubEYMNH5VFyefYLBGSNVB6kKDWgWzlltHdaXLKzuFwW', 'aYpVm3mI7qv7v365YOBm452yC1ri1CemJPg6DyFLbVOVWlSHBeA5994LHWS4', '2018-01-05 02:45:13', '2018-01-05 02:45:13'),
(7, 'diepsh', 'bhg@gmail.com', '8979098765', '$2y$10$1fcabbEb8pg/WC4PV1kvB.OSzv5cho/jkMG.6pL9x/4ciEPOTzDyy', NULL, '2018-01-05 02:52:56', '2018-01-05 02:52:56'),
(8, 'abcde', 'jhi@gmail.com', '9809090987', '$2y$10$aEBtvOnyyVXCpX3hp1VMN.e8uQPV7sZWeioZpz09ON3ISKNtDe50i', 'M1JPuPRFgdUAPx5hkyAACnKkmpccaeVkhrtKN3lQDSqCLpm4uy8qriljEluH', '2018-01-09 00:40:16', '2018-01-09 00:40:16'),
(9, 'dbjosh', 'dbjosh@gmail.com', '909877665544', '$2y$10$SwOcC.PfO9.UA6Uzo1CGOeUTwBmCzZ.l7kxNCNiytq67UADWKy/0a', 'lytdOl6yGgryGmpeWybRMaP2WXPf20WAmTjEbCc7e2EOhChDU6WApPdaFGyj', '2018-01-09 00:51:10', '2018-01-09 00:51:10'),
(10, 'fffff', 'ddd@gmail.com', '9808766554', '$2y$10$nQ.1wqEErisldnqsxAT.QOH.KL7mDNgA2fAH2jOrn8DadP38XPEtK', 'HuEdmpaHw1hLySENmviSTbxAKa3yCaTO9cXEL67izKwIZOvdRJFlMwq9WWT0', '2018-01-09 00:58:50', '2018-01-09 00:58:50'),
(11, 'ssss', 'fff@gmail.com', '9808765435', '$2y$10$ACpNq89jVDxVjwQHkwbik.0fBn5VY2eAAC.C5ztApygVcp6K4pd5e', NULL, '2018-01-09 01:01:21', '2018-01-09 01:01:21'),
(12, 'abc', 'kkk@gmail.com', '90987877655', '$2y$10$YSJZ4avzyIz6hYA3duSdpO80/O.cl1GydxuHqno9Fe3VYWBiKMltm', '0LxWp3gqzugbpzYcOXaas78N2qyFFKzKiT08qhR8aRw1uDcecr6QwWShSg5v', '2018-01-09 01:03:17', '2018-01-09 01:03:17'),
(13, 'dipesh', 'uuuu@gmail.com', '78766554468', '$2y$10$VK7AIpAoIxGpzb6t/H/Z6OAOW5B2fXy33D9UnhFMmI09ZhG7QuV4y', 'f3Lg00AjwiJoLykxlIWuOJskTFfltpmVwWTibfhHtJ09J9bicZSZjPJIodGO', '2018-01-09 01:09:36', '2018-01-09 01:09:36'),
(14, 'dipesh', 'ddds@gmail.com', '89887676555', '$2y$10$S4VndwQqubHW50G/PhiWfeQnyvylVNXWWWC8cbuy6I.a2DvQAnSma', 'p8lrDJksiGWnxjShzKlkDHJ4NkoQ6EBqZZ37Ijc5xIQjJACZ5Xu7ihhK4b0Q', '2018-01-09 01:20:57', '2018-01-09 01:20:57'),
(15, 'mya', 'jjj@gmail.com', '980887668887', '$2y$10$NcCBtOYFAxh1B9mm7MuVw.rTYUaVZsFWObLWGSCSE4juhuY0aEoEq', '5KFowtZUX6ygPtFCVetKBRQJoX2XhdN66MlWvQS9p4npstsC5UyIRstOFuWS', '2018-01-09 01:22:51', '2018-01-09 01:22:51'),
(16, 'maya', 'maya@gmail.com', '9809898987', '$2y$10$u0FLE.sOUytAZcmA/G8OO.jzp/M8dEL3RiPdVyGDMdBt3MoBy2EMu', '6isiHvtFgfUO9PZnKbOyCjqVwocztl4YGtyxduvCSobeEE8BozrWTbe7n5yu', '2018-01-09 02:17:35', '2018-01-09 02:17:35'),
(17, 'adhi', 'dddd@gmail.com', '908765432321', '$2y$10$KTZhNT3EicAetZTDPFvOaedxU1dB1NtdZOLErsP5CmqA.x4.2WxgW', 'ysg1EryQfZoalrvV8HzUHuW6UMRhM2sS9sVdiwkTU8iiz33NvOFNYuCI8utL', '2018-01-09 11:29:46', '2018-01-09 11:29:46'),
(18, 'admin', 'admin@gmail.com', '9808897040', '$2y$10$vW44KJfVY57m8ZWe9BZYdOq0cOrDnF9UiTwdAkvOunJ1uABgz8PZK', 'HPq5uyGbELBGKf0TRgYhD4QERjZe7bHcE33C3oijz1z7m8g9bqb93iWmkAbM', '2018-01-23 06:12:25', '2018-01-23 06:12:25'),
(19, 'maya', 'mayabanjade@gmail.com', '9807573751', '$2y$10$.KF7gZPAr7oY14m.QyzDOul20gBZt.6ifbZ03Thbe2kl19r9WSKmW', 'rrETJXDQfTN55FhddLsQygCYaz2AWEfBqdVcwUfgxfKAuFgdz2ZUDV89hXY9', '2018-01-28 06:57:05', '2018-01-28 06:57:05'),
(20, 'mohan', 'dipeshbanjade@gmail.com', '9807573757', '$2y$10$NlYmbn0Y/UwXaiobGycrzu21s.2VHq9W33F7GdqxLnXqum5lJpOgO', '9Swe32qwsYl8bK7ORnUEQ1TjqN8Zy4gQnNw1BJZELoYyuESj6UBO81iBoDkg', '2018-01-29 05:09:13', '2018-01-29 05:09:13'),
(21, 'niraj', 'n.rbhusal199072@gmail.com', '9849124498', '$2y$10$4e5P6PXyzgPvHNp/71MyteQ7HrLQ.ZACpUomvyd0G0LyV5GMWKO3i', 'naYHDIyEnvQFu2mNIIhUsvp3NvL3LsOaRvKQHK4T2WeAgmJXYcQETBATqLMg', '2018-01-30 06:32:20', '2018-01-30 06:32:20'),
(22, 'lovely sing', 'lovelysing@gmail.com', '9807573759', '$2y$10$mUTCWP2VPhTXuBaI5Z6Qxesu81zjDgE2hJJu6CtWh74XUf577UEM6', 'ZOpq03LDHd9xTKSHKT0Q2uoQNTVedx8OzQdxgYUWNl8PTEdhfyqFNI3Ug4lS', '2018-02-11 05:28:43', '2018-02-11 05:28:43'),
(23, 'hello nepal', 'hell@gmail.com', '9809876897', '$2y$10$tDYG1uYn3BW..YVpQ3UVQ.u0IfhaqP6D7M3FOgzyM4TSCF9G15cze', NULL, '2018-02-11 07:53:32', '2018-02-11 07:53:32'),
(24, 'abc nepal', 'abde@gmail.com', '9807898797', '$2y$10$GfnP7nuuWiOyjtiGJoDg5ugigygojL0bUHzDRBDWT0PY4fzPWNVaq', NULL, '2018-02-12 10:32:52', '2018-02-12 10:32:52'),
(25, 'ab nepal', 'ab@gmail.com', '9807573743', '$2y$10$pHGdK43gcl6OlYMY3..tNOLozhB5dRBJ2uVciIkFWXE.xZBjEkJxO', NULL, '2018-02-12 23:52:47', '2018-02-12 23:52:47'),
(26, 'manish', 'manish@gmail.com', '9868582838', '$2y$10$.DXlEczVtBl2Qv1jQT6LOOdoUjIcYlF4ditdXrnQyybWt6dnsjvaK', '9dRooUeBx0aD1c4ECQNmEteFMohrj8nvXLM1QFw0LiKo16JcDD09eRcP0aoZ', '2018-02-14 11:44:41', '2018-02-14 11:44:41'),
(27, 'mohan', 'mohan_dash@gmail.com', '9809898765', '$2y$10$DP8rpBG5g5nNGhUfaDtW/.D8KvvJohHGM4w2OZSvrXbRPtxtZeyPu', NULL, '2018-02-14 21:40:30', '2018-02-14 21:40:30');

-- --------------------------------------------------------

--
-- Table structure for table `view_products`
--

CREATE TABLE `view_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wish_lists`
--

CREATE TABLE `wish_lists` (
  `id` int(10) UNSIGNED NOT NULL,
  `users_id` int(11) NOT NULL,
  `products_id` int(11) NOT NULL,
  `img_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wish_lists`
--

INSERT INTO `wish_lists` (`id`, `users_id`, `products_id`, `img_path`, `slug`, `created_at`, `updated_at`) VALUES
(5, 1, 6, 'product/featured_image_sm/colorphone2017-12-21 06:12:02.jpg', 'color_phone', '2017-12-29 12:33:58', '2017-12-29 12:33:58'),
(6, 1, 8, 'product/featured_image_sm/summerlove2017-12-23 10:48:28.jpg', 'summer-love', '2017-12-29 12:36:17', '2017-12-29 12:36:17'),
(7, 1, 7, 'product/featured_image_sm/saya2017-12-23 10:44:29.png', 'saya', '2017-12-29 12:41:21', '2017-12-29 12:41:21'),
(8, 1, 9, 'product/featured_image_sm/plainblackshirt2018-01-04 06:36:08.jpg', 'plain_black_shirt', '2018-01-04 12:36:40', '2018-01-04 12:36:40');

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
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_bookings`
--
ALTER TABLE `event_bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_comments`
--
ALTER TABLE `event_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_users`
--
ALTER TABLE `event_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_view_counts`
--
ALTER TABLE `event_view_counts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_sliders`
--
ALTER TABLE `home_sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `hotels_phone_unique` (`phone`);

--
-- Indexes for table `hotel_policies`
--
ALTER TABLE `hotel_policies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel_room_types`
--
ALTER TABLE `hotel_room_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel_users`
--
ALTER TABLE `hotel_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `my_orders`
--
ALTER TABLE `my_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice_boards`
--
ALTER TABLE `notice_boards`
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
-- Indexes for table `room_types`
--
ALTER TABLE `room_types`
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
-- Indexes for table `view_products`
--
ALTER TABLE `view_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wish_lists`
--
ALTER TABLE `wish_lists`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `event_bookings`
--
ALTER TABLE `event_bookings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `event_comments`
--
ALTER TABLE `event_comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `event_users`
--
ALTER TABLE `event_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `event_view_counts`
--
ALTER TABLE `event_view_counts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `home_sliders`
--
ALTER TABLE `home_sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `hotel_policies`
--
ALTER TABLE `hotel_policies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `hotel_room_types`
--
ALTER TABLE `hotel_room_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `hotel_users`
--
ALTER TABLE `hotel_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `my_orders`
--
ALTER TABLE `my_orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `notice_boards`
--
ALTER TABLE `notice_boards`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `room_types`
--
ALTER TABLE `room_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `subscribes`
--
ALTER TABLE `subscribes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `view_products`
--
ALTER TABLE `view_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `wish_lists`
--
ALTER TABLE `wish_lists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
