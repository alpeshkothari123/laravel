-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 13, 2018 at 11:20 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `categories` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `name`, `description`, `categories`, `created_at`, `updated_at`) VALUES
(1, 'Vel minima velit amet ut quis dicta.', 'Id dolor excepturi non at et pariatur expedita. Illo ipsam delectus ullam excepturi iusto tenetur. Tenetur itaque nobis quibusdam.', '4', '2018-07-12 05:53:06', '2018-07-13 03:00:12'),
(2, 'Repellat et vel explicabo similique eos harum qui aliquam.', 'Corporis aliquam sit cumque aut deserunt est. Dolor sapiente similique illo qui cupiditate totam. Molestiae debitis ab sit. Repellendus dicta ea est provident delectus eum quo. Labore a asperiores atque sit qui laborum quae.', '5', '2018-07-12 05:53:07', '2018-07-13 03:00:05'),
(3, 'Ullam quis non nihil dolor nihil porro accusamus omnis.', 'Voluptatem porro repudiandae voluptates voluptas non in ipsum possimus. Animi consequatur saepe ea rerum. Et odio eveniet enim aut sunt cupiditate.', '', '2018-07-12 05:53:07', '2018-07-12 05:53:07'),
(4, 'Ratione facere assumenda asperiores quas laboriosam.', 'Aut temporibus sapiente omnis. Ipsam dolorem fugiat reprehenderit illo dolorem quidem saepe. Occaecati molestias culpa voluptates totam.', '5,4,2', '2018-07-12 05:53:07', '2018-07-13 02:59:52'),
(5, 'Fugit nulla ea doloremque dolore. safsadfa sdfsafn 111111', 'Est quis maxime autem illum est ut quae rerum. Deleniti similique quo blanditiis omnis magnam quod. Nobis tempore autem vitae corrupti quod velit nam. Et ipsam omnis aut veritatis. aff  dsafEst quis maxime autem illum est ut quae rerum. Deleniti similique quo blanditiis omnis magnam quod. Nobis tempore autem vitae corrupti quod velit nam. Et ipsam omnis aut veritatis. aff  dsafEst quis maxime autem illum est ut quae rerum. Deleniti similique quo blanditiis omnis magnam quod. Nobis tempore autem vitae corrupti quod velit nam. Et ipsam omnis aut veritatis. aff  dsafEst quis maxime autem illum est ut quae rerum. Deleniti similique quo blanditiis omnis magnam quod. Nobis tempore autem vitae corrupti quod velit nam. Et ipsam omnis aut veritatis. aff  dsafEst quis maxime autem illum est ut quae rerum. Deleniti similique quo blanditiis omnis magnam quod. Nobis tempore autem vitae corrupti quod velit nam. Et ipsam omnis aut veritatis. aff  dsafEst quis maxime autem illum est ut quae rerum. Deleniti similique quo blanditiis omnis magnam quod. Nobis tempore autem vitae corrupti quod velit nam. Et ipsam omnis aut veritatis. aff  dsafEst quis maxime autem illum est ut quae rerum. Deleniti similique quo blanditiis omnis magnam quod. Nobis tempore autem vitae corrupti quod velit nam. Et ipsam omnis aut veritatis. aff  dsafEst quis maxime autem illum est ut quae rerum. Deleniti similique quo blanditiis omnis magnam quod. Nobis tempore autem vitae corrupti quod velit nam. Et ipsam omnis aut veritatis. aff  dsaf', '3,2,1', '2018-07-12 05:53:07', '2018-07-13 02:50:08'),
(20, 'test', 'sdfafafdsfafasfafasfdsa', '2', '2018-07-13 03:17:10', '2018-07-13 03:17:10');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'Category 1', '2018-07-12 04:48:40', '2018-07-12 04:48:40'),
(2, 'Category 2', '2018-07-12 04:48:40', '2018-07-12 04:48:40'),
(3, 'Category 3', '2018-07-12 04:48:40', '2018-07-12 04:48:40'),
(4, 'Category 4', '2018-07-12 04:48:40', '2018-07-12 04:48:40'),
(5, 'Category 5', '2018-07-12 04:48:40', '2018-07-12 04:48:40');

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
(3, '2018_07_12_095004_create_blogs_table', 1),
(4, '2018_07_12_100528_create_categories_table', 2),
(5, '2018_07_12_100746_blog_category', 2);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mitesh', 'mp.miteshpanchal@gmail.com', '$2y$10$ql1C/Foj8NGaCESXzxHJfufnxCmeb03I09G9AhXeDdSrzzbd4wYpi', 'odOzNF3O0GzN9pVQnj2cy3c2RrAoiBjJpgUYXeg3ZFCTVzKHtYwZabplhgGp', '2018-07-12 05:29:26', '2018-07-12 05:29:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
