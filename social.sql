-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2019 at 09:31 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `social`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `title` varchar(40) NOT NULL,
  `image` text NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `title`, `image`, `category_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '', 'smm-fashion.jpg', 1, '2019-07-05 03:08:32', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, '', 'smm-pmn.jpg', 1, '2019-07-05 03:08:32', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, '', 'smm-western.jpg', 1, '2019-07-05 03:09:16', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, '', 'smm-tceb.jpg', 1, '2019-07-05 03:09:16', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, '', 'mock1_12.jpg', 1, '2019-07-05 03:09:56', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, '', 'smm-lalin.jpg', 1, '2019-07-05 03:09:56', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, '', 'smm-tara.jpg', 1, '2019-07-05 03:10:35', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, '', 'smm-sathaporn.jpg', 1, '2019-07-05 03:10:35', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, '', 'smm-lh.jpg', 1, '2019-07-05 03:11:14', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, '', 'mock1_03.jpg', 1, '2019-07-05 03:11:22', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `client_categories`
--

CREATE TABLE `client_categories` (
  `id` int(11) NOT NULL,
  `title` varchar(40) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `client_categories`
--

INSERT INTO `client_categories` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'SEO & SEM', '2019-07-05 04:56:35', '2019-07-04 21:56:35', '0000-00-00 00:00:00'),
(2, 'Social media', '2019-07-05 03:03:07', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'พัฒนาเว็บไซต์', '2019-07-05 03:03:23', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Landing Page', '2019-07-05 03:03:23', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` text NOT NULL,
  `company` text NOT NULL,
  `phone` text NOT NULL,
  `detail` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `contact_page`
--

CREATE TABLE `contact_page` (
  `id` int(11) NOT NULL,
  `meta_tag_title` text CHARACTER SET utf8 NOT NULL,
  `meta_tag_description` text CHARACTER SET utf8 NOT NULL,
  `meta_tag_keywords` text CHARACTER SET utf8 NOT NULL,
  `img_og_twitter` text CHARACTER SET utf8 NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contact_page`
--

INSERT INTO `contact_page` (`id`, `meta_tag_title`, `meta_tag_description`, `meta_tag_keywords`, `img_og_twitter`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'a:2:{s:2:\"en\";s:7:\"matatag\";s:2:\"th\";s:24:\"เมต้าแทก\";}', 'a:2:{s:2:\"en\";s:11:\"description\";s:2:\"th\";s:24:\"คำอธิบาย\";}', 'a:2:{s:2:\"en\";s:7:\"keyword\";s:2:\"th\";s:30:\"คีย์เวิร์ด\";}', 'a:2:{s:2:\"en\";N;s:2:\"th\";s:36:\"bc9cee3c829bf42297748337b230ef60.jpg\";}', '2019-10-02 09:16:29', '2019-10-11 02:06:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` int(11) NOT NULL,
  `image_head` text NOT NULL,
  `title` varchar(40) NOT NULL,
  `body` text NOT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `title` varchar(40) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `title` varchar(40) NOT NULL,
  `body` text NOT NULL,
  `icon` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `body`, `icon`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Digital Marketing Strategy Cons ancy', 'This service is offered to those businesses that require a more known service where we can provide individual consultancy.', 'icon-1.png', '2019-07-04 10:53:30', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Creative & Web Design', 'Our development team is able to work with you to plan and scope on your requirement for a properly work.', 'icon-2.png', '2019-07-04 10:53:38', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Social Media Marketing', 'Due to social media marketing is an essential part of the marketing. It has the power to reach an enormous audience', 'icon-3.png', '2019-07-04 10:53:42', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Production & Management Servic', 'Business image is very important.We should plan to work as a system for effective business', 'icon-4.png', '2019-07-04 10:53:46', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `services2`
--

CREATE TABLE `services2` (
  `id` int(11) NOT NULL,
  `title` varchar(40) NOT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `services2`
--

INSERT INTO `services2` (`id`, `title`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Pay Per Click', 'pic-1.jpg', '2019-07-05 02:51:08', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Online Ads.', 'pic-2.jpg', '2019-07-05 02:51:14', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Web Design', 'pic-3.jpg', '2019-07-05 02:51:16', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'SEO', 'pic-4.jpg', '2019-07-05 02:51:23', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `body` text NOT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `title`, `body`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'a:2:{s:2:\"en\";s:22:\"Kriangkrai Nilkamhaeng\";s:2:\"th\";s:22:\"Kriangkrai Nilkamhaeng\";}', 'a:2:{s:2:\"en\";s:13:\"CEO / Founder\";s:2:\"th\";s:13:\"CEO / Founder\";}', 'a:2:{s:2:\"en\";s:18:\"img-kriangkrai.jpg\";s:2:\"th\";s:18:\"img-kriangkrai.jpg\";}', '2019-10-10 05:56:19', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'a:2:{s:2:\"en\";s:19:\"Krissana Wimoonchad\";s:2:\"th\";s:19:\"Krissana Wimoonchad\";}', 'a:2:{s:2:\"en\";s:27:\"Assistant Managing Director\";s:2:\"th\";s:27:\"Assistant Managing Director\";}', 'a:2:{s:2:\"en\";s:16:\"img-krissana.jpg\";s:2:\"th\";s:16:\"img-krissana.jpg\";}', '2019-10-10 05:56:44', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'a:2:{s:2:\"en\";s:22:\"Tanchanok Sirisopitkul\";s:2:\"th\";s:22:\"Tanchanok Sirisopitkul\";}', 'a:2:{s:2:\"en\";s:27:\"Assistant Managing Director\";s:2:\"th\";s:27:\"Assistant Managing Director\";}', 'a:2:{s:2:\"en\";s:17:\"img-tanchanok.jpg\";s:2:\"th\";s:17:\"img-tanchanok.jpg\";}', '2019-10-10 05:57:03', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'a:2:{s:2:\"en\";s:19:\"Juthamas Sattayapun\";s:2:\"th\";s:19:\"Juthamas Sattayapun\";}', 'a:2:{s:2:\"en\";s:15:\"Project Manager\";s:2:\"th\";s:15:\"Project Manager\";}', 'a:2:{s:2:\"en\";s:16:\"img-juthamas.jpg\";s:2:\"th\";s:16:\"img-juthamas.jpg\";}', '2019-10-10 05:57:23', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `team_page`
--

CREATE TABLE `team_page` (
  `id` int(11) NOT NULL,
  `meta_tag_title` text CHARACTER SET utf8 NOT NULL,
  `meta_tag_description` text CHARACTER SET utf8 NOT NULL,
  `meta_tag_keywords` text CHARACTER SET utf8 NOT NULL,
  `img_og_twitter` text CHARACTER SET utf8 NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `team_page`
--

INSERT INTO `team_page` (`id`, `meta_tag_title`, `meta_tag_description`, `meta_tag_keywords`, `img_og_twitter`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:3:\"asd\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:3:\"asd\";}', 'a:2:{s:2:\"en\";s:1:\"a\";s:2:\"th\";s:3:\"asd\";}', 'a:2:{s:2:\"en\";N;s:2:\"th\";s:36:\"bc9cee3c829bf42297748337b230ef60.jpg\";}', '2019-10-02 09:16:29', '2019-10-11 02:08:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `role_id` int(11) NOT NULL,
  `status` varchar(40) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role_id`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'admin', '1234', 0, '', '2019-06-03 09:47:47', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_categories`
--
ALTER TABLE `client_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_page`
--
ALTER TABLE `contact_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services2`
--
ALTER TABLE `services2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_page`
--
ALTER TABLE `team_page`
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
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `client_categories`
--
ALTER TABLE `client_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contact_page`
--
ALTER TABLE `contact_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `services2`
--
ALTER TABLE `services2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `team_page`
--
ALTER TABLE `team_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
