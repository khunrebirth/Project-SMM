-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 11, 2019 at 10:16 AM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `about_page`
--

CREATE TABLE `about_page` (
  `id` int(11) NOT NULL,
  `meta_tag_title` text CHARACTER SET utf8 NOT NULL,
  `meta_tag_description` text CHARACTER SET utf8 NOT NULL,
  `meta_tag_keywords` text CHARACTER SET utf8 NOT NULL,
  `img_og_twitter` text CHARACTER SET utf8 NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `about_page`
--

INSERT INTO `about_page` (`id`, `meta_tag_title`, `meta_tag_description`, `meta_tag_keywords`, `img_og_twitter`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:3:\"asd\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:3:\"asd\";}', 'a:2:{s:2:\"en\";s:3:\"asd\";s:2:\"th\";s:3:\"asd\";}', 'a:2:{s:2:\"en\";N;s:2:\"th\";s:36:\"bc9cee3c829bf42297748337b230ef60.jpg\";}', '2019-10-02 09:16:29', '2019-10-10 22:55:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `meta_title` text NOT NULL,
  `meta_description` text NOT NULL,
  `meta_keyword` text NOT NULL,
  `img_og_twitter` text NOT NULL,
  `img` text NOT NULL,
  `img_title_alt` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` text NOT NULL,
  `slug_en` varchar(255) NOT NULL,
  `slug_th` varchar(255) NOT NULL,
  `description_section` text NOT NULL,
  `body` longtext NOT NULL,
  `category_blog_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `meta_title`, `meta_description`, `meta_keyword`, `img_og_twitter`, `img`, `img_title_alt`, `title`, `slug`, `slug_en`, `slug_th`, `description_section`, `body`, `category_blog_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:12:\"content1.jpg\";s:2:\"th\";s:12:\"content1.jpg\";}', '', 'a:2:{s:2:\"en\";s:122:\"สั่งเครื่องดื่มอย่างไร ไม่ให้ขาด เหลือทิ้ง\";s:2:\"th\";s:122:\"สั่งเครื่องดื่มอย่างไร ไม่ให้ขาด เหลือทิ้ง\";}', 'a:2:{s:2:\"en\";s:86:\"สงเครองดมอยางไร-ไมใหขาด-เหลอทง\";s:2:\"th\";s:122:\"สั่งเครื่องดื่มอย่างไร-ไม่ให้ขาด-เหลือทิ้ง\";}', 'สงเครองดมอยางไร-ไมใหขาด-เหลอทง', 'สั่งเครื่องดื่มอย่างไร-ไม่ให้ขาด-เหลือทิ้ง', 'a:2:{s:2:\"en\";s:507:\"ในทุกๆงานเลี้ยงสังสรรค์ เครื่องดื่มเป็นสิ่งที่ทั้งผู้จัดงานควรให้ความสำคัญไม่แพ้อาหาร และการเลือกเครื่องดื่มที่ดี มีส่วนอย่างมากในการสร้างความประทับใจให้กับแขกที่มาร่วมงาน\";s:2:\"th\";s:507:\"ในทุกๆงานเลี้ยงสังสรรค์ เครื่องดื่มเป็นสิ่งที่ทั้งผู้จัดงานควรให้ความสำคัญไม่แพ้อาหาร และการเลือกเครื่องดื่มที่ดี มีส่วนอย่างมากในการสร้างความประทับใจให้กับแขกที่มาร่วมงาน\";}', 'a:2:{s:2:\"en\";s:507:\"ในทุกๆงานเลี้ยงสังสรรค์ เครื่องดื่มเป็นสิ่งที่ทั้งผู้จัดงานควรให้ความสำคัญไม่แพ้อาหาร และการเลือกเครื่องดื่มที่ดี มีส่วนอย่างมากในการสร้างความประทับใจให้กับแขกที่มาร่วมงาน\";s:2:\"th\";s:507:\"ในทุกๆงานเลี้ยงสังสรรค์ เครื่องดื่มเป็นสิ่งที่ทั้งผู้จัดงานควรให้ความสำคัญไม่แพ้อาหาร และการเลือกเครื่องดื่มที่ดี มีส่วนอย่างมากในการสร้างความประทับใจให้กับแขกที่มาร่วมงาน\";}', 2, '2019-08-28 08:21:52', '2019-09-24 02:05:36', NULL),
(2, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:12:\"content2.jpg\";s:2:\"th\";s:12:\"content2.jpg\";}', '', 'a:2:{s:2:\"en\";s:79:\"เสริมมงคล ให้กับงานแต่งงาน...\";s:2:\"th\";s:79:\"เสริมมงคล ให้กับงานแต่งงาน...\";}', 'a:2:{s:2:\"en\";s:67:\"งานปาร์ตี้บริษัท-องค์กร\";s:2:\"th\";s:67:\"งานปาร์ตี้บริษัท-องค์กร\";}a:2:{s:2:\"en\";s:76:\"เสริมมงคล-ให้กับงานแต่งงาน\";s:2:\"th\";s:76:\"เสริมมงคล-ให้กับงานแต่งงาน\";}', 'เสริมมงคล-ให้กับงานแต่งงาน', 'เสริมมงคล-ให้กับงานแต่งงาน', 'a:2:{s:2:\"en\";s:435:\"เพิ่มความเป็นสิริมงคลด้วย “อาหาร” เองก็ถือเป็นเรื่องหลักๆ ที่บ่าวสาวควรวางแผน ตัดสินใจ และเลือกสรรเป็นอย่างดีตามความต้องการและความเหมาะสมของงานนั้นๆ \";s:2:\"th\";s:435:\"เพิ่มความเป็นสิริมงคลด้วย “อาหาร” เองก็ถือเป็นเรื่องหลักๆ ที่บ่าวสาวควรวางแผน ตัดสินใจ และเลือกสรรเป็นอย่างดีตามความต้องการและความเหมาะสมของงานนั้นๆ \";}', 'a:2:{s:2:\"en\";s:435:\"เพิ่มความเป็นสิริมงคลด้วย “อาหาร” เองก็ถือเป็นเรื่องหลักๆ ที่บ่าวสาวควรวางแผน ตัดสินใจ และเลือกสรรเป็นอย่างดีตามความต้องการและความเหมาะสมของงานนั้นๆ \";s:2:\"th\";s:435:\"เพิ่มความเป็นสิริมงคลด้วย “อาหาร” เองก็ถือเป็นเรื่องหลักๆ ที่บ่าวสาวควรวางแผน ตัดสินใจ และเลือกสรรเป็นอย่างดีตามความต้องการและความเหมาะสมของงานนั้นๆ \";}', 2, '2019-08-28 08:28:23', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'a:2:{s:2:\"en\";s:9:\"SEO & SEM\";s:2:\"th\";s:9:\"SEO & SEM\";}', '2019-10-11 08:19:05', '2019-07-04 21:56:35', '0000-00-00 00:00:00'),
(2, 'a:2:{s:2:\"en\";s:12:\"Social media\";s:2:\"th\";s:12:\"Social media\";}', '2019-10-11 08:18:55', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'a:2:{s:2:\"en\";s:39:\"พัฒนาเว็บไซต์\";s:2:\"th\";s:39:\"พัฒนาเว็บไซต์\";}', '2019-10-11 08:18:45', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'a:2:{s:2:\"en\";s:12:\"Landing Page\";s:2:\"th\";s:12:\"Landing Page\";}', '2019-10-11 08:18:36', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:3:\"asd\";}', '2019-10-11 09:10:56', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `title` varchar(40) NOT NULL,
  `image` text NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `title`, `image`, `category_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '', 'a:2:{s:2:\"en\";s:15:\"smm-fashion.jpg\";s:2:\"th\";s:15:\"smm-fashion.jpg\";}', 1, '2019-10-11 08:19:16', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, '', 'a:2:{s:2:\"en\";s:11:\"smm-pmn.jpg\";s:2:\"th\";s:11:\"smm-pmn.jpg\";}', 1, '2019-10-11 08:19:24', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, '', 'a:2:{s:2:\"en\";s:15:\"smm-western.jpg\";s:2:\"th\";s:15:\"smm-western.jpg\";}', 1, '2019-10-11 08:19:39', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, '', 'a:2:{s:2:\"en\";s:12:\"smm-tceb.jpg\";s:2:\"th\";s:12:\"smm-tceb.jpg\";}', 1, '2019-10-11 08:19:59', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, '', 'a:2:{s:2:\"en\";s:12:\"mock1_12.jpg\";s:2:\"th\";s:12:\"mock1_12.jpg\";}', 1, '2019-10-11 08:20:11', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, '', 'a:2:{s:2:\"en\";s:13:\"smm-lalin.jpg\";s:2:\"th\";s:13:\"smm-lalin.jpg\";}', 1, '2019-10-11 08:20:19', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, '', 'a:2:{s:2:\"en\";s:12:\"smm-tara.jpg\";s:2:\"th\";s:12:\"smm-tara.jpg\";}', 1, '2019-10-11 08:20:29', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, '', 'a:2:{s:2:\"en\";s:17:\"smm-sathaporn.jpg\";s:2:\"th\";s:17:\"smm-sathaporn.jpg\";}', 1, '2019-10-11 08:20:38', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, '', 'a:2:{s:2:\"en\";s:10:\"smm-lh.jpg\";s:2:\"th\";s:10:\"smm-lh.jpg\";}', 1, '2019-10-11 08:20:46', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, '', 'a:2:{s:2:\"en\";s:12:\"mock1_03.jpg\";s:2:\"th\";s:12:\"mock1_03.jpg\";}', 1, '2019-10-11 08:20:56', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `client_categories`
--

CREATE TABLE `client_categories` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `client_categories`
--

INSERT INTO `client_categories` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'a:2:{s:2:\"en\";s:9:\"SEO & SEM\";s:2:\"th\";s:9:\"SEO & SEM\";}', '2019-10-11 08:19:05', '2019-07-04 21:56:35', '0000-00-00 00:00:00'),
(2, 'a:2:{s:2:\"en\";s:12:\"Social media\";s:2:\"th\";s:12:\"Social media\";}', '2019-10-11 08:18:55', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'a:2:{s:2:\"en\";s:39:\"พัฒนาเว็บไซต์\";s:2:\"th\";s:39:\"พัฒนาเว็บไซต์\";}', '2019-10-11 08:18:45', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'a:2:{s:2:\"en\";s:12:\"Landing Page\";s:2:\"th\";s:12:\"Landing Page\";}', '2019-10-11 08:18:36', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `client_page`
--

CREATE TABLE `client_page` (
  `id` int(11) NOT NULL,
  `meta_tag_title` text CHARACTER SET utf8 NOT NULL,
  `meta_tag_description` text CHARACTER SET utf8 NOT NULL,
  `meta_tag_keywords` text CHARACTER SET utf8 NOT NULL,
  `img_og_twitter` text CHARACTER SET utf8 NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `client_page`
--

INSERT INTO `client_page` (`id`, `meta_tag_title`, `meta_tag_description`, `meta_tag_keywords`, `img_og_twitter`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:3:\"asd\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:3:\"asd\";}', 'a:2:{s:2:\"en\";s:3:\"asd\";s:2:\"th\";s:3:\"asd\";}', 'a:2:{s:2:\"en\";N;s:2:\"th\";s:36:\"bc9cee3c829bf42297748337b230ef60.jpg\";}', '2019-10-02 09:16:29', '2019-10-10 22:55:07', NULL);

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
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
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
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contact_page`
--

INSERT INTO `contact_page` (`id`, `meta_tag_title`, `meta_tag_description`, `meta_tag_keywords`, `img_og_twitter`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:3:\"asd\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:3:\"asd\";}', 'a:2:{s:2:\"en\";s:3:\"asd\";s:2:\"th\";s:3:\"asd\";}', 'a:2:{s:2:\"en\";N;s:2:\"th\";s:36:\"bc9cee3c829bf42297748337b230ef60.jpg\";}', '2019-10-02 09:16:29', '2019-10-10 22:55:07', NULL);

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
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `home_page`
--

CREATE TABLE `home_page` (
  `id` int(11) NOT NULL,
  `meta_tag_title` text CHARACTER SET utf8 NOT NULL,
  `meta_tag_description` text CHARACTER SET utf8 NOT NULL,
  `meta_tag_keywords` text CHARACTER SET utf8 NOT NULL,
  `img_og_twitter` text CHARACTER SET utf8 NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `home_page`
--

INSERT INTO `home_page` (`id`, `meta_tag_title`, `meta_tag_description`, `meta_tag_keywords`, `img_og_twitter`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:3:\"asd\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:3:\"asd\";}', 'a:2:{s:2:\"en\";s:3:\"asd\";s:2:\"th\";s:3:\"asd\";}', 'a:2:{s:2:\"en\";N;s:2:\"th\";s:36:\"bc9cee3c829bf42297748337b230ef60.jpg\";}', '2019-10-02 09:16:29', '2019-10-10 22:55:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `detail` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `log_events`
--

CREATE TABLE `log_events` (
  `id` int(11) NOT NULL,
  `title` varchar(40) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `log_events`
--

INSERT INTO `log_events` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'login', '2019-10-09 05:02:46', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'logout', '2019-10-09 05:02:46', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'add', '2019-10-09 05:02:58', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'update', '2019-10-09 05:02:58', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'delete', '2019-10-09 05:03:02', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'sort_item', '2019-10-09 05:03:19', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'other', '2019-10-09 05:03:19', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `title` varchar(40) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
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
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
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
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
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
-- Table structure for table `service_page`
--

CREATE TABLE `service_page` (
  `id` int(11) NOT NULL,
  `meta_tag_title` text CHARACTER SET utf8 NOT NULL,
  `meta_tag_description` text CHARACTER SET utf8 NOT NULL,
  `meta_tag_keywords` text CHARACTER SET utf8 NOT NULL,
  `img_og_twitter` text CHARACTER SET utf8 NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `service_page`
--

INSERT INTO `service_page` (`id`, `meta_tag_title`, `meta_tag_description`, `meta_tag_keywords`, `img_og_twitter`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:3:\"asd\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:3:\"asd\";}', 'a:2:{s:2:\"en\";s:3:\"asd\";s:2:\"th\";s:3:\"asd\";}', 'a:2:{s:2:\"en\";N;s:2:\"th\";s:36:\"bc9cee3c829bf42297748337b230ef60.jpg\";}', '2019-10-02 09:16:29', '2019-10-10 22:55:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `body` text NOT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
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
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `team_page`
--

INSERT INTO `team_page` (`id`, `meta_tag_title`, `meta_tag_description`, `meta_tag_keywords`, `img_og_twitter`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:3:\"asd\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:3:\"asd\";}', 'a:2:{s:2:\"en\";s:3:\"asd\";s:2:\"th\";s:3:\"asd\";}', 'a:2:{s:2:\"en\";N;s:2:\"th\";s:36:\"bc9cee3c829bf42297748337b230ef60.jpg\";}', '2019-10-02 09:16:29', '2019-10-10 22:55:07', NULL);

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
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
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
-- Indexes for table `about_page`
--
ALTER TABLE `about_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `client_page`
--
ALTER TABLE `client_page`
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
-- Indexes for table `home_page`
--
ALTER TABLE `home_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_events`
--
ALTER TABLE `log_events`
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
-- Indexes for table `service_page`
--
ALTER TABLE `service_page`
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
-- AUTO_INCREMENT for table `about_page`
--
ALTER TABLE `about_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
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
-- AUTO_INCREMENT for table `client_page`
--
ALTER TABLE `client_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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
-- AUTO_INCREMENT for table `home_page`
--
ALTER TABLE `home_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `log_events`
--
ALTER TABLE `log_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
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
-- AUTO_INCREMENT for table `service_page`
--
ALTER TABLE `service_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
