-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 26, 2020 at 04:22 PM
-- Server version: 10.5.8-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerence`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(9, 'web dev', 'web-dev', '2020-11-18 09:55:29', '2020-11-18 09:55:29'),
(10, 'web ddjde', 'web-ddjd', '2020-11-18 09:55:38', '2020-11-20 12:18:04'),
(11, 'sidksis', 'sidk', '2020-11-18 09:55:45', '2020-11-20 12:23:22'),
(12, 'hdjdj', 'hdjdj', '2020-11-18 09:55:47', '2020-11-18 09:55:47'),
(13, 'Aung MM', 'aung-mm', '2020-11-19 06:02:42', '2020-11-19 06:02:42'),
(14, 'Web Dev Env ppp', 'web-desvelopement', '2020-11-19 06:02:45', '2020-11-19 11:56:56');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `sub_category_id`, `name`, `price`, `content`, `created_at`, `updated_at`, `image`) VALUES
(1, 9, 1, 'Aung Myat Moe update', 2000, 'hello', '2020-11-22 08:27:34', '2020-11-22 08:27:34', 'phpwere7n_135b82b347046c7c502c3a74be9ab728.jpg'),
(3, 13, 1, 'Aung Myat Moe updatehuu', 788, 'iiiio', '2020-11-22 08:35:57', '2020-11-22 08:35:57', 'php5uubg3_fdc3df1710b1ef5eceefab74d3a2e7bb.jpg'),
(4, 13, 1, 'Aung Myat Moe update', 7383, 'jdidid', '2020-11-22 08:36:29', '2020-11-22 08:36:29', 'php4ebwcp_3af68571e258ff23d22caff98ff3f733.jpg'),
(5, 9, 1, 'Aung Myat Moe update', 83939, 'heloo', '2020-11-22 08:43:03', '2020-11-22 08:43:03', 'php9deehb_81db83816147dd409b514186583a0dd6.jpg'),
(6, 9, 1, 'Aung Myat Moe update', 3883, 'jdidi', '2020-11-22 09:44:28', '2020-11-22 09:44:28', 'phplygz6j_b58e5670312a04bac8c31858a17b7c7f.jpg'),
(7, 9, 1, 'Aung Myat Moe update', 2000, 'hello', '2020-11-22 08:27:34', '2020-11-22 08:27:34', 'phpwere7n_135b82b347046c7c502c3a74be9ab728.jpg'),
(8, 13, 1, 'Aung Myat Moe updatehuu', 788, 'iiiio', '2020-11-22 08:35:57', '2020-11-22 08:35:57', 'php5uubg3_fdc3df1710b1ef5eceefab74d3a2e7bb.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `cat_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 14, 'Web Application', '2020-11-20 10:58:57', '2020-11-20 10:58:57'),
(2, 14, 'Hello World', '2020-11-20 11:06:06', '2020-11-20 11:06:06'),
(3, 14, 'bbb', '2020-11-20 18:53:32', '2020-11-20 12:23:32'),
(4, 14, 'udud', '2020-11-20 11:20:52', '2020-11-20 11:20:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Aung Myat Moe', 'amm@gmail.com', '123123', NULL, '2020-11-14 17:27:28', '2020-11-14 17:27:28'),
(2, 'user', 'user@gmail.com', '$2y$10$1cy6d3bRxpAsmzO6zPybYu9eaa1XsPwwLNsjMgrQ8PUTgVYjW0QkW', NULL, '2020-11-25 10:54:20', '2020-11-25 10:54:20'),
(3, 'user two', 'user2@gmail.com', '$2y$10$0HrjboX1rA0LTFtuFd718eIz.5PU1cyAzSEGTZeyPuUoO6f//R41S', NULL, '2020-11-25 10:55:46', '2020-11-25 10:55:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
