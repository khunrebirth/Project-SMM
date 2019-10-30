-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 30, 2019 at 05:29 PM
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
  `content_left` text COLLATE utf8_unicode_ci NOT NULL,
  `content_right` text COLLATE utf8_unicode_ci NOT NULL,
  `img_section` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `about_page`
--

INSERT INTO `about_page` (`id`, `meta_tag_title`, `meta_tag_description`, `meta_tag_keywords`, `img_og_twitter`, `content_left`, `content_right`, `img_section`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'a:2:{s:2:\"en\";s:18:\"About | social.com\";s:2:\"th\";s:49:\"เกี่ยวกับเรา | social.com\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:539:\"เราคือเอเจนซี่ออนไลน์ที่มีประสบการณ์ในสายงานดิจิทัลพร้อมด้วยบริการการตลาดที่หลากหลายอย่างครบวงจรกว่า 4 ล้านแฟนเพจที่เราดูแล กว่า 300 ล้าน impression ที่เราสร้าง ผู้เทนด์ โซเซียลมีเดีย ในประเทศไทย..\";s:2:\"th\";s:548:\"เราคือเอเจนซี่ออนไลน์ ที่มีประสบการณ์ในสายงานดิจิทัล พร้อมด้วยบริการการตลาดที่หลากหลายอย่างครบวงจร กว่า 4 ล้านแฟนเพจที่เราดูแล กว่า 300 ล้าน impression ที่เราสร้าง ผู้นำเทนด์ โซเซียลมีเดีย ในประเทศไทย..\";}', 'a:2:{s:2:\"en\";s:1218:\"<p class=\"lead about__split--title--body mt-4 mb-4\">                     <strong style=\"line-height: 2.5;\">เป้าหมายของเรา</strong> <br>                     เรามีความมุ่งมั่นที่จะวางแผนการตลาดออนไลน์ที่ดีที่สุดเพื่อให้ลูกค้าของเราบรรลุวัตถุประสงค์ที่ตั้งไว้  ด้วยการวางกลยุทธ์ที่ผ่านการคิดวิเคราะห์หากลุ่มลูกค้าที่ตรงจุดกับธุรกิจของคุณ                     <br><br>                     นอกจากจากวางแผนการตลาดออนไลน์แล้วเรายังทำงานร่วมกันกับลูกค้าเพื่อให้คำแนะนำและปรึกษาใน การวางแนวทางสื่ออนไลน์ให้ได้ผลลัพธ์ที่คุ้มค่าที่สุดอีกด้วย                 </p>\";s:2:\"th\";s:1218:\"<p class=\"lead about__split--title--body mt-4 mb-4\">                     <strong style=\"line-height: 2.5;\">เป้าหมายของเรา</strong> <br>                     เรามีความมุ่งมั่นที่จะวางแผนการตลาดออนไลน์ที่ดีที่สุดเพื่อให้ลูกค้าของเราบรรลุวัตถุประสงค์ที่ตั้งไว้  ด้วยการวางกลยุทธ์ที่ผ่านการคิดวิเคราะห์หากลุ่มลูกค้าที่ตรงจุดกับธุรกิจของคุณ                     <br><br>                     นอกจากจากวางแผนการตลาดออนไลน์แล้วเรายังทำงานร่วมกันกับลูกค้าเพื่อให้คำแนะนำและปรึกษาใน การวางแนวทางสื่ออนไลน์ให้ได้ผลลัพธ์ที่คุ้มค่าที่สุดอีกด้วย                 </p>\";}', 'a:2:{s:2:\"en\";s:9:\"about.jpg\";s:2:\"th\";s:9:\"about.jpg\";}', '2019-10-02 09:16:29', '2019-10-30 02:46:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `banner_pages`
--

CREATE TABLE `banner_pages` (
  `id` int(11) NOT NULL,
  `status` enum('Y','N') NOT NULL,
  `title` text NOT NULL,
  `page` text NOT NULL,
  `img` text NOT NULL,
  `img_title_alt` text NOT NULL,
  `bottom` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `banner_pages`
--

INSERT INTO `banner_pages` (`id`, `status`, `title`, `page`, `img`, `img_title_alt`, `bottom`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'N', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:7:\"clients\";s:2:\"th\";s:36:\"ลูกค้าของเรา\";}', 'a:2:{s:2:\"en\";s:28:\"banner-client_1572246396.jpg\";s:2:\"th\";s:29:\"banner-client_15722463961.jpg\";}', 'a:2:{s:2:\"en\";s:12:\"slider-1.jpg\";s:2:\"th\";s:12:\"slider-1.jpg\";}', '', '2019-10-28 07:06:36', '2019-10-29 09:12:12', '0000-00-00 00:00:00'),
(3, 'Y', 'a:2:{s:2:\"en\";s:5:\"Blogs\";s:2:\"th\";s:18:\"บทความ\";}', 'a:2:{s:2:\"en\";s:5:\"blogs\";s:2:\"th\";s:18:\"บทความ\";}', 'a:2:{s:2:\"en\";s:36:\"2ee9c1275f58f1acf520f0ea7d865d84.jpg\";s:2:\"th\";s:36:\"3255777830299b806ac0eee6f221bfe6.jpg\";}', 'a:2:{s:2:\"en\";s:12:\"slider-1.jpg\";s:2:\"th\";s:12:\"slider-1.jpg\";}', '', '2019-10-25 04:07:38', '2019-10-25 04:07:38', '0000-00-00 00:00:00'),
(4, 'Y', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:5:\"teams\";s:2:\"th\";s:9:\"ทีม\";}', 'a:2:{s:2:\"en\";s:26:\"banner-team_1572247737.jpg\";s:2:\"th\";s:27:\"banner-team_15722477371.jpg\";}', 'a:2:{s:2:\"en\";s:15:\"banner-team.jpg\";s:2:\"th\";s:15:\"banner-team.jpg\";}', '', '2019-10-28 07:28:57', '2019-10-28 07:28:57', '0000-00-00 00:00:00'),
(5, 'Y', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:7:\"contact\";s:2:\"th\";s:18:\"ติดต่อ\";}', 'a:2:{s:2:\"en\";s:28:\"banne-contact_1572248871.jpg\";s:2:\"th\";s:29:\"banne-contact_15722488711.jpg\";}', 'a:2:{s:2:\"en\";s:12:\"slider-1.jpg\";s:2:\"th\";s:12:\"slider-1.jpg\";}', '', '2019-10-28 07:47:51', '2019-10-28 07:47:51', '0000-00-00 00:00:00'),
(6, 'Y', 'a:2:{s:2:\"en\";s:14:\"Thank you page\";s:2:\"th\";s:18:\"ขอบคุณ\";}', 'a:2:{s:2:\"en\";s:6:\"thanks\";s:2:\"th\";s:18:\"ขอบคุณ\";}', 'a:2:{s:2:\"en\";s:36:\"fde9a47418ec527b2c48b0988b6aa603.jpg\";s:2:\"th\";s:36:\"7fd22ff06e7576b292f48b4f48cd86bc.jpg\";}', 'a:2:{s:2:\"en\";s:12:\"slider-1.jpg\";s:2:\"th\";s:12:\"slider-1.jpg\";}', '', '2019-10-25 04:07:11', '2019-10-25 04:07:11', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `meta_tag_title` text NOT NULL,
  `meta_tag_description` text NOT NULL,
  `meta_tag_keywords` text NOT NULL,
  `img_og_twitter` text NOT NULL,
  `img` text NOT NULL,
  `img_title_alt` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` text NOT NULL,
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

INSERT INTO `blogs` (`id`, `meta_tag_title`, `meta_tag_description`, `meta_tag_keywords`, `img_og_twitter`, `img`, `img_title_alt`, `title`, `slug`, `description_section`, `body`, `category_blog_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:18:\"example-blog-1.jpg\";s:2:\"th\";s:43:\"smm_facebook-stories-contact_1572237952.jpg\";}', '', 'a:2:{s:2:\"en\";s:74:\"สื่อสารกับผู้คนผ่าน Facebook Stories\";s:2:\"th\";s:74:\"สื่อสารกับผู้คนผ่าน Facebook Stories\";}', 'a:2:{s:2:\"en\";s:56:\"สอสารกบผคนผาน-facebook-stories\";s:2:\"th\";s:74:\"สื่อสารกับผู้คนผ่าน-facebook-stories\";}', 'a:2:{s:2:\"en\";s:478:\"ฟีเจอร์ Stories ของทาง Facebook เพิ่งจะมีการเพิ่มเข้ามาเมื่อไม่นานแต่กลับไม่เป็นที่นิยมเหมือนกับ Stories ของฝั่ง Instagram ที่มีมาก่อน แต่ในช่วงระยะหลังมานี้มีผู้ใช้งาน Facebook Stories เพิ่มขึ้นมาก\";s:2:\"th\";s:478:\"ฟีเจอร์ Stories ของทาง Facebook เพิ่งจะมีการเพิ่มเข้ามาเมื่อไม่นานแต่กลับไม่เป็นที่นิยมเหมือนกับ Stories ของฝั่ง Instagram ที่มีมาก่อน แต่ในช่วงระยะหลังมานี้มีผู้ใช้งาน Facebook Stories เพิ่มขึ้นมาก\";}', 'a:2:{s:2:\"en\";s:2594:\"<div>ฟีเจอร์ Stories ของทาง Facebook เพิ่งจะมีการเพิ่มเข้ามาเมื่อไม่นานแต่กลับไม่เป็นที่นิยมเหมือนกับ Stories ของฝั่ง Instagram ที่มีมาก่อน แต่ในช่วงระยะหลังมานี้มีผู้ใช้งาน Facebook Stories เพิ่มขึ้นมาก<br><br></div><div>Facebook Stories เป็นช่องทางช่วยให้ธุรกิจของเราเข้าถึงผู้คนได้มากขึ้น โดยรูปแบบการโฆษณาจะเป็นแบบเต็มหน้าจอที่ช่วยให้ผู้คนดูและแชร์ช่วงเวลาผ่านรูปภาพและวิดีโอซึ่งจะหายไป หลังครบ 24 ชั่วโมง รูปภาพจะแสดงเป็นเวลา 6 วินาทีและวิดีโอจะแสดงสูงสุดเป็นเวลา 15 วินาที แล้วเรายังสามารถใช้ตัวจัดการโฆษณาหรือ API เพื่อสร้างโฆษณาได้ และได้มีการสำรวจจาก Ipsos ว่าผู้คนจำนวน 62% กล่าวว่าพวกเขาสนใจแบรนด์หรือผลิตภัณฑ์มากขึ้นหลังจากได้เห็นโฆษณาใน Facebook Stories <br><br></div><div>จากแค่เคยโพสต์ content หน้าฟีดเพียงอย่างเดียว ลองเพิ่มโฆษณาใน Facebook Stories เข้าไปอาจจะทำให้เข้าถึงกลุ่มลูกค้าเพิ่มมากขึ้นและยังสามารถสร้างการรับรู้แบรนด์ได้อีกช่องทางหนึง </div><div>หากมีข้อสงสัยหรือต้องการข้อมูลเพิ่มเติมสามารถติดต่อ Social Media Master ได้เลยนะคะ เพราะเราพร้อมที่จะให้คำปรึกษาด้าน Online Marketing ทุกรูปแบบอยู่แล้ว</div><div><br></div>\";s:2:\"th\";s:2594:\"<div>ฟีเจอร์ Stories ของทาง Facebook เพิ่งจะมีการเพิ่มเข้ามาเมื่อไม่นานแต่กลับไม่เป็นที่นิยมเหมือนกับ Stories ของฝั่ง Instagram ที่มีมาก่อน แต่ในช่วงระยะหลังมานี้มีผู้ใช้งาน Facebook Stories เพิ่มขึ้นมาก<br><br></div><div>Facebook Stories เป็นช่องทางช่วยให้ธุรกิจของเราเข้าถึงผู้คนได้มากขึ้น โดยรูปแบบการโฆษณาจะเป็นแบบเต็มหน้าจอที่ช่วยให้ผู้คนดูและแชร์ช่วงเวลาผ่านรูปภาพและวิดีโอซึ่งจะหายไป หลังครบ 24 ชั่วโมง รูปภาพจะแสดงเป็นเวลา 6 วินาทีและวิดีโอจะแสดงสูงสุดเป็นเวลา 15 วินาที แล้วเรายังสามารถใช้ตัวจัดการโฆษณาหรือ API เพื่อสร้างโฆษณาได้ และได้มีการสำรวจจาก Ipsos ว่าผู้คนจำนวน 62% กล่าวว่าพวกเขาสนใจแบรนด์หรือผลิตภัณฑ์มากขึ้นหลังจากได้เห็นโฆษณาใน Facebook Stories <br><br></div><div>จากแค่เคยโพสต์ content หน้าฟีดเพียงอย่างเดียว ลองเพิ่มโฆษณาใน Facebook Stories เข้าไปอาจจะทำให้เข้าถึงกลุ่มลูกค้าเพิ่มมากขึ้นและยังสามารถสร้างการรับรู้แบรนด์ได้อีกช่องทางหนึง </div><div>หากมีข้อสงสัยหรือต้องการข้อมูลเพิ่มเติมสามารถติดต่อ Social Media Master ได้เลยนะคะ เพราะเราพร้อมที่จะให้คำปรึกษาด้าน Online Marketing ทุกรูปแบบอยู่แล้ว</div><div><br></div>\";}', 1, '2019-08-28 08:21:52', '2019-10-28 04:45:52', NULL),
(2, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:36:\"170a0efeee23d6406a8ba824c0518de2.jpg\";s:2:\"th\";s:32:\"smm_instagram-ads_1572237975.jpg\";}', '', 'a:2:{s:2:\"en\";s:62:\"IG Ads ตัวช่วยของการโฆษณา \";s:2:\"th\";s:62:\"IG Ads ตัวช่วยของการโฆษณา \";}', 'a:2:{s:2:\"en\";s:55:\"ig-ads-ตวบวยของการโฆษณา\";s:2:\"th\";s:62:\"ig-ads-ตัวบ่วยของการโฆษณา-\";}', 'a:2:{s:2:\"en\";s:295:\"IG Ads หรือ Instagram Ads เป็นบริการโฆษณาของทาง Instagram โดยจะมีค่าใช้จ่ายในการทำโฆษณาและมีรูปแบบการโฆษณาอยู่ประมาณ 4 แบบ \";s:2:\"th\";s:295:\"IG Ads หรือ Instagram Ads เป็นบริการโฆษณาของทาง Instagram โดยจะมีค่าใช้จ่ายในการทำโฆษณาและมีรูปแบบการโฆษณาอยู่ประมาณ 4 แบบ \";}', 'a:2:{s:2:\"en\";s:5305:\"<div>หลายคนคงใช้ IG ในการลงรูปสวย ๆ แชร์เรื่องราวต่าง ๆ ผ่านรูปภาพหรือ วิดีโอ หรือแม้กระทั่งเอาไว้ส่อง ผู้ชายหล่อ ๆ สาว ๆ สวย ๆ หรือเหล่าดาราที่เราชื่นชอบ แต่สำหรับพ่อค้าแม่ค้าหรือธุรกิจ เราเอาไว้โฆษณาขายสิน อัปเดตสินค้าใหม่ ๆ ไปจนถึงสร้างการรับรู้ของแบรนด์ผ่านคอนเท้นท์ต่าง ๆ </div><div>IG Ads หรือ Instagram Ads เป็นบริการโฆษณาของทาง Instagram โดยจะมีค่าใช้จ่ายในการทำโฆษณาและมีรูปแบบการโฆษณาอยู่ประมาณ 4 แบบ ได้แก่</div><div><b>1. โฆษณาแบบ Image Ads </b>รูปแบบของภาพ เป็นสีเหลี่ยมจตุรัส หรือ สีเหลี่ยมผืนผ้าสามารถเพิ่มปุ่มดำเนินการที่เชื่อมโยงไปยังเว็บไซต์ เพื่อให้เข้าถึงกลุ่มเป้าหมายหรือต้องการเพิ่มแค่ผู้ติดตามอย่างเดียวก็สามารถทำได้</div><div><b>2. โฆษณาแบบ Video ads </b>วิดีโอมีความยาวสูงสุดไม่เกิน 60 วินาทีได้ทั้งในรูปแบบแนวนอนและแนวตั้ง เป็นการโฆษณาที่น่าจดจำ เข้าถึงกลุ่มเป้าหมายได้ง่าย</div><div><b>3. โฆษณาใน Stories ads </b>โฆษณาที่เกิดจากฟีเจอร์ยอดฮิตของ Instagram โดยเราสามารถถ่ายรูปหรือวิดีโอพร้อมเพิ่มลูกเล่นต่าง ๆ ลงในนั้นได้ เช่น ใส่ข้อความ สติกเกอร์ วาดภาพ Hashtag หรือ Location ซึ่งเมื่อโพสต์ใน Instagram Stories แล้ว คอนเทนต์นั้นจะอยู่ได้ 24 ชั่วโมงก่อนหายไป </div><div><b>4. โฆษณาแบบ Carousel ads </b>เป็นโฆษณาแบบภาพสไลด์ที่เราสามารถโฆษณาทั้งรูปภาพและวีดีโอได้ในโฆษณาเดียว โดยเรียงต่อกันได้ 5 รูป เป็นรูปแบบการนำเสนอที่น่าสนใจไม่น้อยเลยทีเดียว</div><div><b>5. โฆษณาแบบ Slideshow Ads </b>โฆษณาแบบ Slideshow Ads บางคนออาจจะมองว่ามันเหมือนกับโฆษณาแบบ Carousel ads เพราะมันเป็นโฆษณาแบบภาพสไลด์เหมือนกันแต่มีความแตกต่างกันตรงที่แบบ Slideshow สามารถเพิ่มภาพและเพลงได้ถึง 10 ภาพเพื่อสร้างโฆษณาวิดีโอแบบวนซ้ำ</div><div><b>6. โฆษณาแบบ Lead Ads  </b>เป็นโฆษณาแบบการรวบรวมข้อมูล เช่น ชื่อ, ที่อยู่, E-Mail หรือเบอร์โทรศัพท์ โดยเมื่อมีคนคลิกที่โฆษณาจะเด้งไปยังหน้าใหม่พร้อมแบบฟอร์มกรอกข้อมูล ซึ่งโฆษณานี่มีค่าใช้จ่ายที่สูง เหมาะกับธุรกิจแนวธนาคาร หรือ อสังหาริมทรัพย์ ที่ต้องการข้อมูลคนที่สนใจหรือที่จะเข้าร่วมด้วย<br><br></div><div>สำหรับใครที่คิดที่จะทำโฆษณาบน IG อยู่ก็ดูไปเป็นแนวทางในการเลือกช่องทางในการทำโฆษณาได้เลย แต่ถ้าหากมีข้อสงสัยในการทำโฆษณาสามารถติดต่อ Social Media Master ได้เลยนะคะ เพราะเราพร้อมที่จะให้คำปรึกษาด้าน Online Marketing ทุกรูปแบบอยู่แล้ว</div><div><br></div>\";s:2:\"th\";s:5555:\"<div>หลายคนคงใช้ IG ในการลงรูปสวย ๆ แชร์เรื่องราวต่าง ๆ ผ่านรูปภาพหรือ วิดีโอ หรือแม้กระทั่งเอาไว้ส่อง ผู้ชายหล่อ ๆ สาว ๆ สวย ๆ หรือเหล่าดาราที่เราชื่นชอบ แต่สำหรับพ่อค้าแม่ค้าหรือธุรกิจ เราเอาไว้โฆษณาขายสิน อัปเดตสินค้าใหม่ ๆ ไปจนถึงสร้างการรับรู้ของแบรนด์ผ่านคอนเท้นท์ต่าง ๆ </div><div>IG Ads หรือ Instagram Ads เป็นบริการโฆษณาของทาง Instagram โดยจะมีค่าใช้จ่ายในการทำโฆษณาและมีรูปแบบการโฆษณาอยู่ประมาณ 4 แบบ ได้แก่</div><div><span style=\"font-weight: bolder;\">1. โฆษณาแบบ Image Ads </span>รูปแบบของภาพ เป็นสีเหลี่ยมจตุรัส หรือ สีเหลี่ยมผืนผ้าสามารถเพิ่มปุ่มดำเนินการที่เชื่อมโยงไปยังเว็บไซต์ เพื่อให้เข้าถึงกลุ่มเป้าหมายหรือต้องการเพิ่มแค่ผู้ติดตามอย่างเดียวก็สามารถทำได้</div><div><span style=\"font-weight: bolder;\">2. โฆษณาแบบ Video ads </span>วิดีโอมีความยาวสูงสุดไม่เกิน 60 วินาทีได้ทั้งในรูปแบบแนวนอนและแนวตั้ง เป็นการโฆษณาที่น่าจดจำ เข้าถึงกลุ่มเป้าหมายได้ง่าย</div><div><span style=\"font-weight: bolder;\">3. โฆษณาใน Stories ads </span>โฆษณาที่เกิดจากฟีเจอร์ยอดฮิตของ Instagram โดยเราสามารถถ่ายรูปหรือวิดีโอพร้อมเพิ่มลูกเล่นต่าง ๆ ลงในนั้นได้ เช่น ใส่ข้อความ สติกเกอร์ วาดภาพ Hashtag หรือ Location ซึ่งเมื่อโพสต์ใน Instagram Stories แล้ว คอนเทนต์นั้นจะอยู่ได้ 24 ชั่วโมงก่อนหายไป </div><div><span style=\"font-weight: bolder;\">4. โฆษณาแบบ Carousel ads </span>เป็นโฆษณาแบบภาพสไลด์ที่เราสามารถโฆษณาทั้งรูปภาพและวีดีโอได้ในโฆษณาเดียว โดยเรียงต่อกันได้ 5 รูป เป็นรูปแบบการนำเสนอที่น่าสนใจไม่น้อยเลยทีเดียว</div><div><span style=\"font-weight: bolder;\">5. โฆษณาแบบ Slideshow Ads </span>โฆษณาแบบ Slideshow Ads บางคนออาจจะมองว่ามันเหมือนกับโฆษณาแบบ Carousel ads เพราะมันเป็นโฆษณาแบบภาพสไลด์เหมือนกันแต่มีความแตกต่างกันตรงที่แบบ Slideshow สามารถเพิ่มภาพและเพลงได้ถึง 10 ภาพเพื่อสร้างโฆษณาวิดีโอแบบวนซ้ำ</div><div><span style=\"font-weight: bolder;\">6. โฆษณาแบบ Lead Ads  </span>เป็นโฆษณาแบบการรวบรวมข้อมูล เช่น ชื่อ, ที่อยู่, E-Mail หรือเบอร์โทรศัพท์ โดยเมื่อมีคนคลิกที่โฆษณาจะเด้งไปยังหน้าใหม่พร้อมแบบฟอร์มกรอกข้อมูล ซึ่งโฆษณานี่มีค่าใช้จ่ายที่สูง เหมาะกับธุรกิจแนวธนาคาร หรือ อสังหาริมทรัพย์ ที่ต้องการข้อมูลคนที่สนใจหรือที่จะเข้าร่วมด้วย<br><br></div><div><span style=\"white-space: pre;\">	</span>สำหรับใครที่คิดที่จะทำโฆษณาบน IG อยู่ก็ดูไปเป็นแนวทางในการเลือกช่องทางในการทำโฆษณาได้เลย แต่ถ้าหากมีข้อสงสัยในการทำโฆษณาสามารถติดต่อ Social Media Master ได้เลยนะคะ เพราะเราพร้อมที่จะให้คำปรึกษาด้าน Online Marketing ทุกรูปแบบอยู่แล้ว</div><div><br></div>\";}', 1, '2019-08-28 08:28:23', '2019-10-28 04:46:15', NULL),
(5, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:36:\"6b1fa1817a412a647bd088bcd9cfc66e.jpg\";s:2:\"th\";s:39:\"smm_meketing-for-twitter_1572237990.jpg\";}', '', 'a:2:{s:2:\"en\";s:44:\"Twitter ทำ Marketing ได้ไหม?\";s:2:\"th\";s:44:\"Twitter ทำ Marketing ได้ไหม?\";}', 'a:2:{s:2:\"en\";s:40:\"twitter-ทำ-marketing-ไดไหม\";s:2:\"th\";s:43:\"twitter-ทำ-marketing-ได้ไหม\";}', 'a:2:{s:2:\"en\";s:181:\" Twitter เปิดให้บริการมานานกว่า 12 ปีแล้ว มีผู้ใช้งานในไทยกว่า 12 ล้านคน \";s:2:\"th\";s:181:\" Twitter เปิดให้บริการมานานกว่า 12 ปีแล้ว มีผู้ใช้งานในไทยกว่า 12 ล้านคน \";}', 'a:2:{s:2:\"en\";s:2704:\"<div>หลายคนคงคุ้นเคยกับแอปพริเคชั่นที่มีชื่อว่า Twitter กันมาซักพักแล้วส่วนใหญ่คนที่เล่นก็จะเอาไว้บ่น/ระบายความรู้สึกต่าง ๆ หรือติดตามข่าวสาร แล้วมันจะใช้ทำ Marketing สำหรับธุรกิจได้ไหม?</div><div>ต้องบอกก่อนว่าปัจจุบัน Twitter เปิดให้บริการมานานกว่า 12 ปีแล้ว มีผู้ใช้งานในไทยกว่า 12 ล้านคน เป็นผู้หญิง 45% และ ผู้ชาย 55% หลายคนคงมองข้ามที่จะทำ  Marketing ผ่านช่องทางนี้แต่รู้ไหมว่าข้อมูลจาก Twitter บอกว่า 79% ของผู้ใช้งานจะ Retweet (แชร์) มากกว่าแค่กด like เท่ากับว่าโพสของเราจะถูกแชร์และถูกเห็นมากขึ้น ซึ่งแน่นอนว่าเราสามารถทำการตลาดผ่านช่องทางนี้ได้อย่างแน่นอน</div><div><br>ยังมีสิ่งยอดฮิตในการใช้งาน Twitter นั่นก็คือการติดแฮชแท็ก ถ้าเราใส่แฮชแท็กที่เกี่ยวข้องกับธุรกิจของเรามันจะช่วยให้ผู้คนหาเราเจอง่ายขึ้น ธุรกิจหรือแบรนด์ใหญ่ ๆได้เริ่มหันมาทำการตลาดผ่านช่องทางนี้กันมากขึ้น ยกตัวอย่างเช่น  CocaCola, Starbucks หรือ NokAir เป็นต้น </div><div><br></div><div>รู้แบบนี้แล้วเริ่มอยากที่จะทำ Marketing บน Twitter กันบ้างแล้วหรือยัง หากใครสงสัยหรือไม่เข้าใจสามารถติดต่อ Social Media Master ได้เลยนะคะ เพราะเราพร้อมที่จะให้คำปรึกษาด้าน Online Marketing ทุกรูปแบบอยู่แล้ว</div>\";s:2:\"th\";s:2704:\"<div>หลายคนคงคุ้นเคยกับแอปพริเคชั่นที่มีชื่อว่า Twitter กันมาซักพักแล้วส่วนใหญ่คนที่เล่นก็จะเอาไว้บ่น/ระบายความรู้สึกต่าง ๆ หรือติดตามข่าวสาร แล้วมันจะใช้ทำ Marketing สำหรับธุรกิจได้ไหม?</div><div>ต้องบอกก่อนว่าปัจจุบัน Twitter เปิดให้บริการมานานกว่า 12 ปีแล้ว มีผู้ใช้งานในไทยกว่า 12 ล้านคน เป็นผู้หญิง 45% และ ผู้ชาย 55% หลายคนคงมองข้ามที่จะทำ  Marketing ผ่านช่องทางนี้แต่รู้ไหมว่าข้อมูลจาก Twitter บอกว่า 79% ของผู้ใช้งานจะ Retweet (แชร์) มากกว่าแค่กด like เท่ากับว่าโพสของเราจะถูกแชร์และถูกเห็นมากขึ้น ซึ่งแน่นอนว่าเราสามารถทำการตลาดผ่านช่องทางนี้ได้อย่างแน่นอน</div><div><br>ยังมีสิ่งยอดฮิตในการใช้งาน Twitter นั่นก็คือการติดแฮชแท็ก ถ้าเราใส่แฮชแท็กที่เกี่ยวข้องกับธุรกิจของเรามันจะช่วยให้ผู้คนหาเราเจอง่ายขึ้น ธุรกิจหรือแบรนด์ใหญ่ ๆได้เริ่มหันมาทำการตลาดผ่านช่องทางนี้กันมากขึ้น ยกตัวอย่างเช่น  CocaCola, Starbucks หรือ NokAir เป็นต้น </div><div><br></div><div>รู้แบบนี้แล้วเริ่มอยากที่จะทำ Marketing บน Twitter กันบ้างแล้วหรือยัง หากใครสงสัยหรือไม่เข้าใจสามารถติดต่อ Social Media Master ได้เลยนะคะ เพราะเราพร้อมที่จะให้คำปรึกษาด้าน Online Marketing ทุกรูปแบบอยู่แล้ว</div>\";}', 1, '2019-08-28 08:21:52', '2019-10-28 04:46:30', NULL),
(7, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:36:\"b860c882f995e5f2caa70914bcf9dce4.jpg\";s:2:\"th\";s:37:\"smm_ads-youtube-invest_1572238003.jpg\";}', '', 'a:2:{s:2:\"en\";s:48:\"การลงทุนโฆษณา Youtube \";s:2:\"th\";s:48:\"การลงทุนโฆษณา Youtube \";}', 'a:2:{s:2:\"en\";s:44:\"การลงทนโฆษณา-youtube\";s:2:\"th\";s:48:\"การลงทุนโฆษณา-youtube-\";}', 'a:2:{s:2:\"en\";s:351:\"บางคนอาจจะเคยลงทุนโฆษณากับทาง Google หรือ Facebook กันมาบ้างแต่ยังมีอีกหนึ่งช่องทางที่น่าสนใจไม่แพ้กันคือการโฆษณากับทาง Youtube นั่นเอง\";s:2:\"th\";s:351:\"บางคนอาจจะเคยลงทุนโฆษณากับทาง Google หรือ Facebook กันมาบ้างแต่ยังมีอีกหนึ่งช่องทางที่น่าสนใจไม่แพ้กันคือการโฆษณากับทาง Youtube นั่นเอง\";}', 'a:2:{s:2:\"en\";s:2922:\"<p>บางคนอาจจะเคยลงทุนโฆษณากับทาง Google หรือ Facebook กันมาบ้างแต่ยังมีอีกหนึ่งช่องทางที่น่าสนใจไม่แพ้กันคือการโฆษณากับทาง Youtube นั่นเอง</p><p>โดยการลงทุนโฆษณากับทาง Youtube เป็นอะในที่น่าสนใจเป็นอย่างมากเพราะทุกวันนี้คนไทยเสพสื่อที่เป็นวิดีโอกับทางยูทูปกันเยอะมาก!! ไม่ว่าจะเข้ามาดูละครย้อนหลัง ฟังเพลง ดูแคสท์เกม หรือดูคลิปต่าง ๆ จากเหล่ายูทูเบอร์ที่ชื่นชอบ ด้วยจำนวนผู้ใช้ยูทูปที่มีมากขึ้นเรื่อย ๆ จึงเป็นหนึ่งช่องทางของการทำการตลาดที่น่าลงทุนเป็นอย่างมาก การโฆษณาบนยูทูปไม่ได้จำกัดการโฆษณาแค่ในรูปแบบของวิดีโอเท่านั้นยังมีการโฆษณาในรูปแบบของแบนเนอร์ ที่จะแสดงตามตำแหน่งต่าง ๆ บนหน้าเว็บไซต์ของทางยูทูป ถือเป็นอีกทางเลือกหนึ่งของการโฆษณาหากยังไม่พร้อมในการเสนอโฆษณาในรูปแบบวีดีโอ</p><p>ข้อดีของการทำโฆษณากับทาง Youtube คือมีค่าใช้จ่ายที่ถูกกว่าเมื่อเทียบกับโฆษณาทีวีที่ราคาสูง แล้ว Youtube นั้นยังเป็นพันธมิตรกับ Google โฆษณายูทูปจึงสามารถเลือกกำหนดกลุ่มเป้าหมายได้ชัดเจน แบบเดียวกับโฆษณาของ Google อีกด้วย</p><p>หากใครไม่เข้าใจหรือสนใจทำการตลาดออนไลน์สามารถติดต่อ Social Media Master ได้เลยนะคะ เพราะเราพร้อมที่จะให้คำปรึกษาด้าน Online Marketing ทุกรูปแบบอยู่แล้ว</p><div><br></div>\";s:2:\"th\";s:2922:\"<p>บางคนอาจจะเคยลงทุนโฆษณากับทาง Google หรือ Facebook กันมาบ้างแต่ยังมีอีกหนึ่งช่องทางที่น่าสนใจไม่แพ้กันคือการโฆษณากับทาง Youtube นั่นเอง</p><p>โดยการลงทุนโฆษณากับทาง Youtube เป็นอะในที่น่าสนใจเป็นอย่างมากเพราะทุกวันนี้คนไทยเสพสื่อที่เป็นวิดีโอกับทางยูทูปกันเยอะมาก!! ไม่ว่าจะเข้ามาดูละครย้อนหลัง ฟังเพลง ดูแคสท์เกม หรือดูคลิปต่าง ๆ จากเหล่ายูทูเบอร์ที่ชื่นชอบ ด้วยจำนวนผู้ใช้ยูทูปที่มีมากขึ้นเรื่อย ๆ จึงเป็นหนึ่งช่องทางของการทำการตลาดที่น่าลงทุนเป็นอย่างมาก การโฆษณาบนยูทูปไม่ได้จำกัดการโฆษณาแค่ในรูปแบบของวิดีโอเท่านั้นยังมีการโฆษณาในรูปแบบของแบนเนอร์ ที่จะแสดงตามตำแหน่งต่าง ๆ บนหน้าเว็บไซต์ของทางยูทูป ถือเป็นอีกทางเลือกหนึ่งของการโฆษณาหากยังไม่พร้อมในการเสนอโฆษณาในรูปแบบวีดีโอ</p><p>ข้อดีของการทำโฆษณากับทาง Youtube คือมีค่าใช้จ่ายที่ถูกกว่าเมื่อเทียบกับโฆษณาทีวีที่ราคาสูง แล้ว Youtube นั้นยังเป็นพันธมิตรกับ Google โฆษณายูทูปจึงสามารถเลือกกำหนดกลุ่มเป้าหมายได้ชัดเจน แบบเดียวกับโฆษณาของ Google อีกด้วย</p><p>หากใครไม่เข้าใจหรือสนใจทำการตลาดออนไลน์สามารถติดต่อ Social Media Master ได้เลยนะคะ เพราะเราพร้อมที่จะให้คำปรึกษาด้าน Online Marketing ทุกรูปแบบอยู่แล้ว</p><div><br></div>\";}', 1, '2019-10-22 10:04:57', '2019-10-28 04:46:43', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` int(11) NOT NULL,
  `meta_tag_title` text NOT NULL,
  `meta_tag_description` text NOT NULL,
  `meta_tag_keywords` text NOT NULL,
  `img_og_twitter` text NOT NULL,
  `title` text NOT NULL,
  `slug` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `meta_tag_title`, `meta_tag_description`, `meta_tag_keywords`, `img_og_twitter`, `title`, `slug`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:9:\"SEO & SEM\";s:2:\"th\";s:9:\"SEO & SEM\";}', 'a:2:{s:2:\"en\";s:7:\"seo-sem\";s:2:\"th\";s:9:\"seo---sem\";}', '2019-10-18 04:59:47', '2019-10-17 21:59:47', '0000-00-00 00:00:00'),
(2, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:12:\"Social media\";s:2:\"th\";s:12:\"Social media\";}', 'a:2:{s:2:\"th\";s:12:\"social-media\";s:2:\"en\";s:12:\"social-media\";}', '2019-10-17 07:47:15', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:39:\"พัฒนาเว็บไซต์\";s:2:\"th\";s:39:\"พัฒนาเว็บไซต์\";}', 'a:2:{s:2:\"th\";s:39:\"พัฒนาเว็บไซต์\";s:2:\"en\";s:39:\"พัฒนาเว็บไซต์\";}', '2019-10-17 07:47:16', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:12:\"Landing Page\";s:2:\"th\";s:12:\"Landing Page\";}', 'a:2:{s:2:\"en\";s:12:\"landing-page\";s:2:\"th\";s:12:\"landing-page\";}', '2019-10-18 05:00:19', '2019-10-17 22:00:19', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `blog_page`
--

CREATE TABLE `blog_page` (
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
-- Dumping data for table `blog_page`
--

INSERT INTO `blog_page` (`id`, `meta_tag_title`, `meta_tag_description`, `meta_tag_keywords`, `img_og_twitter`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'a:2:{s:2:\"en\";s:20:\"Contact | social.com\";s:2:\"th\";s:31:\"ติดต่อ | social.com\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', '2019-10-02 09:16:29', '2019-10-15 00:47:42', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `id` int(11) NOT NULL,
  `sort` int(11) NOT NULL,
  `meta_tag_title` text NOT NULL,
  `meta_tag_description` text NOT NULL,
  `meta_tag_keywords` text NOT NULL,
  `img_og_twitter` text NOT NULL,
  `img_cover` text NOT NULL,
  `title` text NOT NULL,
  `slug` text NOT NULL,
  `comment` text NOT NULL,
  `type` text NOT NULL,
  `num` text NOT NULL,
  `content` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`id`, `sort`, `meta_tag_title`, `meta_tag_description`, `meta_tag_keywords`, `img_og_twitter`, `img_cover`, `title`, `slug`, `comment`, `type`, `num`, `content`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:16:\"Content Creator \";s:2:\"th\";s:15:\"Content Creator\";}', 'a:2:{s:2:\"en\";s:15:\"content-creator\";s:2:\"th\";s:15:\"content-creator\";}', 'a:2:{s:2:\"en\";s:24:\"ด่วนมาก !!\";s:2:\"th\";s:24:\"ด่วนมาก !!\";}', 'a:2:{s:2:\"en\";s:9:\"Full Time\";s:2:\"th\";s:9:\"Full Time\";}', 'a:2:{s:2:\"en\";s:1:\"1\";s:2:\"th\";s:1:\"1\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', '2019-10-30 02:41:25', '2019-10-30 02:53:28', NULL),
(2, 4, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:30:\"Accounting & Financial Manager\";s:2:\"th\";s:76:\"ผู้จัดการฝ่ายบัญชี การเงิน\";}', 'a:2:{s:2:\"en\";s:28:\"accounting-financial-manager\";s:2:\"th\";s:76:\"ผู้จัดการฝ่ายบัญบี-การเงิน\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:9:\"Full Time\";s:2:\"th\";s:9:\"Full Time\";}', 'a:2:{s:2:\"en\";s:1:\"1\";s:2:\"th\";s:1:\"1\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', '2019-10-30 02:41:25', '2019-10-30 02:54:58', NULL),
(3, 5, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:15:\"Project Manager\";s:2:\"th\";s:15:\"Project Manager\";}', 'a:2:{s:2:\"en\";s:15:\"project-manager\";s:2:\"th\";s:15:\"project-manager\";}', 'a:2:{s:2:\"en\";s:24:\"ด่วนมาก !!\";s:2:\"th\";s:24:\"ด่วนมาก !!\";}', 'a:2:{s:2:\"en\";s:9:\"Full Time\";s:2:\"th\";s:9:\"Full Time\";}', 'a:2:{s:2:\"en\";s:1:\"1\";s:2:\"th\";s:1:\"1\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', '2019-10-30 02:41:25', '2019-10-30 02:55:10', NULL),
(4, 9, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:20:\"Internship Marketing\";s:2:\"th\";s:98:\"นักศึกษาฝึกงาน(ด้านการตลาดออนไลน์)\";}', 'a:2:{s:2:\"en\";s:20:\"internship-marketing\";s:2:\"th\";s:98:\"นักศึกษาฝึกงาน-ด้านการตลาดออนไลน๜-\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:9:\"Full Time\";s:2:\"th\";s:9:\"Full Time\";}', 'a:2:{s:2:\"en\";s:1:\"2\";s:2:\"th\";s:1:\"2\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', '2019-10-30 02:41:25', '2019-10-30 02:56:05', NULL),
(7, 1, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:10:\"Programmer\";s:2:\"th\";s:10:\"Programmer\";}', 'a:2:{s:2:\"en\";s:10:\"programmer\";s:2:\"th\";s:10:\"programmer\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:9:\"Full Time\";s:2:\"th\";s:9:\"Full Time\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:1:\"2\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:7367:\"<h3 style=\"margin: 10px 0px; font-size: 16px; font-family: supermarketregular; letter-spacing: 0.32px;\"><strong style=\"font-weight: bold;\">บริษัท โซเซียล มีเดีย มาสเตอร์ จำกัด</strong></h3><h3 style=\"margin: 10px 0px;\"><p style=\"margin: 10px 0px;\"><font face=\"supermarketregular\"><span style=\"font-size: 16px; letter-spacing: 0.32px;\">เทคโนแครต ยิวเฟรชผิดพลาด คัตเอาต์เก๊ะโมหจริตเช็ก เจ็ตคอปเตอร์ความหมายไฟต์ซีน พิซซ่ามอนสเตอร์รากหญ้าทัวร์นาเมนท์พาร์ตเนอร์ จ๊าบภควัมปติ แอ๊บแบ๊วศึกษาศาสตร์แอปเปิ้ลโนติสวอลนัท โมเดลไมเกรน ล้มเหลวมอยส์เจอไรเซอร์ เอาต์ คาแร็คเตอร์แฟลชเบิร์ดพลาซ่าโมเดล โอยัวะดีมานด์อุรังคธาตุอาข่า ยาวีลอจิสติกส์ไอติมซิมโฟนี่ สหัสวรรษวอฟเฟิลโฟนแชมป์ เวิร์คปาสเตอร์โต๊ะจีนเบิร์ดแฟนตาซี พาร์เวเฟอร์นอร์ทว้อดก้ากราวนด์</span></font><br></p></h3><h3 style=\"margin: 10px 0px; font-size: 16px; font-family: supermarketregular; letter-spacing: 0.32px;\"><strong style=\"font-weight: bold;\"><br></strong></h3><h3 style=\"margin: 10px 0px; font-size: 16px; font-family: supermarketregular; letter-spacing: 0.32px;\"><strong style=\"font-weight: bold;\">ทำไมเราถึงต้องการคุณ</strong></h3><p style=\"margin: 10px 0px;\"><font face=\"supermarketregular\"><span style=\"font-size: 16px; letter-spacing: 0.32px;\">โปรแกรมเมอร์เป็นคีย์หลักสำคัญในการผลักดันเว็บไซต์ให้เกิดขึ้นจริง และด้วยทักษะและความเชี่ยวชาญในด้านการเขียนโปรแกรม</span></font></p><p style=\"margin: 10px 0px;\"><font face=\"supermarketregular\"><span style=\"font-size: 16px; letter-spacing: 0.32px;\">ถ้าคุณเป็นคนหนึ่งที่มีทักษะเหล่านี้และรักในการพัฒนา เราอยากจะเชิญชวนให้คุณมาเป็นส่วนหนึ่งของทีม เพื่อก้าวหน้าและเติบโตไปกับเรา</span></font></p><p style=\"margin: 10px 0px;\"><font face=\"supermarketregular\"><span style=\"font-size: 16px; letter-spacing: 0.32px;\"><br></span></font></p><h3 style=\"margin: 10px 0px; font-family: supermarketregular; font-size: 16px; letter-spacing: 0.32px;\"><strong style=\"font-weight: bold;\">หน้าที่และความรับผิดชอบ</strong></h3><ul style=\"margin-bottom: 12px; font-family: supermarketregular; font-size: 16px; letter-spacing: 0.32px;\"><li>เขียนโปรแกรม พัฒนาเว็บไซต์ (Web Programming) และเชื่อมต่อกับฐานข้อมูลได้ (Database)</li><li>ออกแบบโครงสร้างและเขียนโปรแกรมเพื่อรองรับงานระบบโฆษณาออนไลน์ได้</li><li>ออกแบบโครงสร้างและเขียนระบบ Support ตามความต้องการของฝ่ายขายภายในบริษัทฯ ได้</li><li>ศึกษาเทคโนโลยีใหม่ๆ และนำมาใช้ในการพัฒนาเว็บและงานโฆษณาอื่นๆ ได้อย่างมีประสิทธิภาพ</li><li>ทดลองระบบและจัดทำเอกสารคู่มือการใช้งานให้กับลูกค้า</li><li>สามารถติดต่อ สื่อสาร พูดคุยกับลูกค้าหรือทีมงานที่เกี่ยวข้องได้อย่างมีประสิทธิภาพ</li></ul><h3 style=\"margin: 10px 0px; font-family: supermarketregular; font-size: 16px; letter-spacing: 0.32px;\"><strong style=\"font-weight: bold;\"><br></strong></h3><h3 style=\"margin: 10px 0px; font-family: supermarketregular; font-size: 16px; letter-spacing: 0.32px;\"><strong style=\"font-weight: bold;\">คุณสมบัติของคุณ</strong></h3><ul style=\"margin-bottom: 12px; font-family: supermarketregular; font-size: 16px; letter-spacing: 0.32px;\"><li>จบปริญญาตรี สาขาวิศวกรรมศาสตร์ วิทยาศาสตร์สาขาคอมพิวเตอร์ วิทยาการคอมพิวเตอร์ หรือสาขาอื่นๆ ที่เกี่ยวข้อง</li><li>อายุไม่เกิน 30 ปี</li><li>มีความชำนาญด้านการเขียนภาษา PHP, HTML, jQurey, CSS, Javascript (jQuery, Bootstrap, AJAX) และการใช้เฟรมเวิร์ค Wordpress</li><li>มีความรู้ ความชำนาญในการออกแบบฐานข้อมูล (Database) เช่น MS SQL, MS SQL, Mongo DB, MS Access, Oracle</li><li>มีความสามารถการใช้งาน CMS (Wordpress) หรือเว็บสำเร็จรูปอื่นๆ จะได้รับการพิจารณาเป็นพิเศษ</li><li>มีความสามารถในการอ่าน Code และสามารถแก้ไข หรือพัฒนาได้อย่างรวดเร็ว มีลอจิกในการเขียนโปรแกรมที่ดี</li><li>มีความรู้ ความเข้าใจพื้นฐานเกี่ยวกับโปรแกรม Photoshop และมีความรู้ในการจัดการ UX/UI เป็นอย่างดี</li><li>รักการเรียนรู้ในเทคโนโลยีใหม่ๆ</li><li>มีความรับผิดชอบสูง และทำงานภายใต้ความกดดันได้เป็นอย่างดี</li><li>มีทัศนคติในการทำงานเชิงบวก และทำงานร่วมกับผู้อื่นได้อย่างมีประสิทธิภาพ</li><li>พูด อ่าน เขียนภาษาอังกฤษได้ในระดับหนึ่ง(จะพิจารณาเป็นกรณีพิเศษ)</li></ul>\";}', '2019-10-30 08:19:46', '2019-10-30 02:42:10', NULL),
(8, 3, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:14:\"Graphic Design\";s:2:\"th\";s:14:\"Graphic Design\";}', 'a:2:{s:2:\"en\";s:14:\"graphic-design\";s:2:\"th\";s:14:\"graphic-design\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:9:\"Full Time\";s:2:\"th\";s:9:\"Full Time\";}', 'a:2:{s:2:\"en\";s:1:\"1\";s:2:\"th\";s:1:\"1\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', '2019-10-30 09:29:06', '2019-10-30 02:54:45', NULL),
(9, 6, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:19:\"Project Coordinator\";s:2:\"th\";s:36:\"ผู้ประสานงาน\";}', 'a:2:{s:2:\"en\";s:19:\"project-coordinator\";s:2:\"th\";s:36:\"ผู้ประสานงาน\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:9:\"Full Time\";s:2:\"th\";s:9:\"Full Time\";}', 'a:2:{s:2:\"en\";s:1:\"1\";s:2:\"th\";s:1:\"1\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', '2019-10-30 09:30:21', '2019-10-30 02:55:40', NULL),
(10, 7, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:20:\"SEO & SEM Specialist\";s:2:\"th\";s:20:\"SEO & SEM Specialist\";}', 'a:2:{s:2:\"en\";s:18:\"seo-sem-specialist\";s:2:\"th\";s:22:\"seo-and-sem-specialist\";}', 'a:2:{s:2:\"en\";s:23:\"(ด่วนมาก)\";s:2:\"th\";s:23:\"(ด่วนมาก)\";}', 'a:2:{s:2:\"en\";s:9:\"Full Time\";s:2:\"th\";s:9:\"Full Time\";}', 'a:2:{s:2:\"en\";s:1:\"1\";s:2:\"th\";s:1:\"1\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', '2019-10-30 09:31:14', '2019-10-30 02:55:27', NULL),
(11, 8, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:23:\"Social media specialist\";s:2:\"th\";s:23:\"Social media specialist\";}', 'a:2:{s:2:\"en\";s:23:\"social-media-specialist\";s:2:\"th\";s:23:\"social-media-specialist\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:9:\"Full Time\";s:2:\"th\";s:9:\"Full Time\";}', 'a:2:{s:2:\"en\";s:1:\"1\";s:2:\"th\";s:1:\"1\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', '2019-10-30 09:32:03', '2019-10-30 02:55:53', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `career_contacts`
--

CREATE TABLE `career_contacts` (
  `id` int(11) NOT NULL,
  `fullname` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `detail` text NOT NULL,
  `file` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `career_galleries`
--

CREATE TABLE `career_galleries` (
  `id` int(11) NOT NULL,
  `sort` int(11) NOT NULL,
  `img` text NOT NULL,
  `img_title_alt` text NOT NULL,
  `career_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `career_galleries`
--

INSERT INTO `career_galleries` (`id`, `sort`, `img`, `img_title_alt`, `career_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 'a:2:{s:2:\"en\";s:5:\"1.jpg\";s:2:\"th\";s:5:\"1.jpg\";}', '', 7, '2019-10-30 05:02:44', '2019-10-29 23:43:32', NULL),
(2, 1, 'a:2:{s:2:\"en\";s:5:\"2.jpg\";s:2:\"th\";s:5:\"2.jpg\";}', '', 7, '2019-10-30 05:02:44', '2019-10-29 23:43:32', NULL),
(3, 3, 'a:2:{s:2:\"en\";s:5:\"3.jpg\";s:2:\"th\";s:5:\"3.jpg\";}', '', 7, '2019-10-30 05:02:44', '2019-10-29 23:43:32', NULL),
(4, 4, 'a:2:{s:2:\"en\";s:5:\"4.jpg\";s:2:\"th\";s:5:\"4.jpg\";}', '', 7, '2019-10-30 05:02:44', '2019-10-29 23:43:32', NULL),
(5, 5, 'a:2:{s:2:\"en\";s:5:\"5.jpg\";s:2:\"th\";s:5:\"5.jpg\";}', '', 7, '2019-10-30 05:02:44', '2019-10-29 23:43:32', NULL),
(6, 6, 'a:2:{s:2:\"en\";s:5:\"6.jpg\";s:2:\"th\";s:5:\"6.jpg\";}', '', 7, '2019-10-30 05:02:44', '2019-10-29 23:43:32', NULL),
(7, 7, 'a:2:{s:2:\"en\";s:5:\"7.jpg\";s:2:\"th\";s:5:\"7.jpg\";}', '', 7, '2019-10-30 05:02:44', '2019-10-29 23:43:33', NULL),
(8, 0, 'a:2:{s:2:\"en\";s:7:\"1-1.jpg\";s:2:\"th\";s:7:\"1-1.jpg\";}', '', 1, '2019-10-30 05:02:44', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `sort` int(11) NOT NULL,
  `title` text NOT NULL,
  `image` text NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `sort`, `title`, `image`, `category_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:45:\"smm-absoluteliveingthailand_th_1572235636.jpg\";s:2:\"th\";s:46:\"smm-absoluteliveingthailand_th_15722356361.jpg\";}', 1, '2019-10-28 04:07:16', '2019-10-28 04:07:16', '0000-00-00 00:00:00'),
(2, 2, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:33:\"smm_wedding-impact_1572235618.jpg\";s:2:\"th\";s:34:\"smm_wedding-impact_15722356181.jpg\";}', 1, '2019-10-28 04:06:58', '2019-10-28 04:06:58', '0000-00-00 00:00:00'),
(3, 3, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:37:\"smm_warawannursinghome_1572235604.jpg\";s:2:\"th\";s:38:\"smm_warawannursinghome_15722356041.jpg\";}', 1, '2019-10-28 04:06:44', '2019-10-28 04:06:44', '0000-00-00 00:00:00'),
(4, 4, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:25:\"smm_unicef_1572235591.jpg\";s:2:\"th\";s:26:\"smm_unicef_15722355911.jpg\";}', 1, '2019-10-28 04:06:31', '2019-10-28 04:06:31', '0000-00-00 00:00:00'),
(5, 5, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:28:\"smm_traxconia_1572235575.jpg\";s:2:\"th\";s:29:\"smm_traxconia_15722355751.jpg\";}', 1, '2019-10-28 04:06:15', '2019-10-28 04:06:15', '0000-00-00 00:00:00'),
(6, 6, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:31:\"smm_thepromenade_1572235563.jpg\";s:2:\"th\";s:32:\"smm_thepromenade_15722355631.jpg\";}', 1, '2019-10-28 04:06:03', '2019-10-28 04:06:03', '0000-00-00 00:00:00'),
(7, 7, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:28:\"smm_sukniwate_1572235551.jpg\";s:2:\"th\";s:29:\"smm_sukniwate_15722355511.jpg\";}', 1, '2019-10-28 04:05:51', '2019-10-28 04:05:51', '0000-00-00 00:00:00'),
(8, 8, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:35:\"smm_suaviss-labwhite_1572235540.jpg\";s:2:\"th\";s:36:\"smm_suaviss-labwhite_15722355401.jpg\";}', 1, '2019-10-28 04:05:40', '2019-10-28 04:05:40', '0000-00-00 00:00:00'),
(9, 9, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:30:\"smm-life-center_1572235703.jpg\";s:2:\"th\";s:31:\"smm-life-center_15722357031.jpg\";}', 1, '2019-10-28 04:08:23', '2019-10-28 04:08:23', '0000-00-00 00:00:00'),
(10, 10, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:32:\"xyz_th_1570137124_1572235721.jpg\";s:2:\"th\";s:33:\"xyz_th_1570137124_15722357211.jpg\";}', 1, '2019-10-28 04:08:41', '2019-10-28 04:08:41', '0000-00-00 00:00:00'),
(15, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:22:\"smm_ava_1572237075.jpg\";s:2:\"th\";s:23:\"smm_ava_15722370751.jpg\";}', 3, '2019-10-28 04:31:15', '2019-10-28 04:31:15', '0000-00-00 00:00:00'),
(16, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:41:\"smm_balanze-by-hydrohealth_1572237084.jpg\";s:2:\"th\";s:42:\"smm_balanze-by-hydrohealth_15722370841.jpg\";}', 3, '2019-10-28 04:31:24', '2019-10-28 04:31:24', '0000-00-00 00:00:00'),
(17, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:37:\"smm_blue-fish-solution_1572237092.jpg\";s:2:\"th\";s:38:\"smm_blue-fish-solution_15722370921.jpg\";}', 3, '2019-10-28 04:31:32', '2019-10-28 04:31:32', '0000-00-00 00:00:00'),
(18, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:23:\"smm_dfsk_1572237101.jpg\";s:2:\"th\";s:24:\"smm_dfsk_15722371011.jpg\";}', 3, '2019-10-28 04:31:41', '2019-10-28 04:31:41', '0000-00-00 00:00:00'),
(19, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:32:\"smm_fashionisland_1572237117.jpg\";s:2:\"th\";s:33:\"smm_fashionisland_15722371171.jpg\";}', 3, '2019-10-28 04:31:57', '2019-10-28 04:31:57', '0000-00-00 00:00:00'),
(20, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:34:\"smm_hatari-wireless_1572237127.jpg\";s:2:\"th\";s:35:\"smm_hatari-wireless_15722371271.jpg\";}', 3, '2019-10-28 04:32:07', '2019-10-28 04:32:07', '0000-00-00 00:00:00'),
(21, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:36:\"smm_infinityone-condo_1572237136.jpg\";s:2:\"th\";s:37:\"smm_infinityone-condo_15722371361.jpg\";}', 3, '2019-10-28 04:32:16', '2019-10-28 04:32:16', '0000-00-00 00:00:00'),
(22, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:32:\"smm_jvavathailand_1572237149.jpg\";s:2:\"th\";s:33:\"smm_jvavathailand_15722371491.jpg\";}', 3, '2019-10-28 04:32:29', '2019-10-28 04:32:29', '0000-00-00 00:00:00'),
(23, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:33:\"smm_massproductsco_1572237158.jpg\";s:2:\"th\";s:34:\"smm_massproductsco_15722371581.jpg\";}', 3, '2019-10-28 04:32:38', '2019-10-28 04:32:38', '0000-00-00 00:00:00'),
(24, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:38:\"smm_mercurycardetailing_1572237166.jpg\";s:2:\"th\";s:39:\"smm_mercurycardetailing_15722371661.jpg\";}', 3, '2019-10-28 04:32:46', '2019-10-28 04:32:46', '0000-00-00 00:00:00'),
(25, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:33:\"smm_pattieungworld_1572237214.jpg\";s:2:\"th\";s:34:\"smm_pattieungworld_15722372141.jpg\";}', 3, '2019-10-28 04:33:34', '2019-10-28 04:33:34', '0000-00-00 00:00:00'),
(26, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:28:\"smm_sukniwate_1572237223.jpg\";s:2:\"th\";s:29:\"smm_sukniwate_15722372231.jpg\";}', 3, '2019-10-28 04:33:43', '2019-10-28 04:33:43', '0000-00-00 00:00:00'),
(27, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:28:\"smm_talutrips_1572237237.jpg\";s:2:\"th\";s:29:\"smm_talutrips_15722372371.jpg\";}', 3, '2019-10-28 04:33:57', '2019-10-28 04:33:57', '0000-00-00 00:00:00'),
(28, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:30:\"smm_tcmthailand_1572237247.jpg\";s:2:\"th\";s:31:\"smm_tcmthailand_15722372471.jpg\";}', 3, '2019-10-28 04:34:07', '2019-10-28 04:34:07', '0000-00-00 00:00:00'),
(29, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:33:\"smm_thebeautylover_1572237258.jpg\";s:2:\"th\";s:34:\"smm_thebeautylover_15722372581.jpg\";}', 3, '2019-10-28 04:34:18', '2019-10-28 04:34:18', '0000-00-00 00:00:00'),
(30, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:31:\"smm_thepromenade_1572237269.jpg\";s:2:\"th\";s:32:\"smm_thepromenade_15722372691.jpg\";}', 3, '2019-10-28 04:34:29', '2019-10-28 04:34:29', '0000-00-00 00:00:00'),
(31, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:28:\"smm_theptarin_1572237278.jpg\";s:2:\"th\";s:29:\"smm_theptarin_15722372781.jpg\";}', 3, '2019-10-28 04:34:38', '2019-10-28 04:34:38', '0000-00-00 00:00:00'),
(32, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:29:\"smm-lairdupran_1572237289.jpg\";s:2:\"th\";s:30:\"smm-lairdupran_15722372891.jpg\";}', 3, '2019-10-28 04:34:49', '2019-10-28 04:34:49', '0000-00-00 00:00:00'),
(33, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:30:\"smm_bbl-fashion_1572235816.jpg\";s:2:\"th\";s:31:\"smm_bbl-fashion_15722358161.jpg\";}', 4, '2019-10-28 04:10:16', '2019-10-28 04:10:16', '0000-00-00 00:00:00'),
(34, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:36:\"smm_bbl-the_promenade_1572235827.jpg\";s:2:\"th\";s:37:\"smm_bbl-the_promenade_15722358271.jpg\";}', 4, '2019-10-28 04:10:27', '2019-10-28 04:10:27', '0000-00-00 00:00:00'),
(35, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:40:\"smm_big-bike-thepromenade_1572235842.jpg\";s:2:\"th\";s:41:\"smm_big-bike-thepromenade_15722358421.jpg\";}', 4, '2019-10-28 04:10:42', '2019-10-28 04:10:42', '0000-00-00 00:00:00'),
(36, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:37:\"smm_big-deal-sukniwate_1572235864.jpg\";s:2:\"th\";s:38:\"smm_big-deal-sukniwate_15722358641.jpg\";}', 4, '2019-10-28 04:11:04', '2019-10-28 04:11:04', '0000-00-00 00:00:00'),
(37, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:37:\"smm_big-sale-sukniwate_1572235879.jpg\";s:2:\"th\";s:38:\"smm_big-sale-sukniwate_15722358791.jpg\";}', 4, '2019-10-28 04:11:19', '2019-10-28 04:11:19', '0000-00-00 00:00:00'),
(38, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:46:\"smm_bike-fest-2016-thepromenade_1572235897.jpg\";s:2:\"th\";s:47:\"smm_bike-fest-2016-thepromenade_15722358971.jpg\";}', 4, '2019-10-28 04:11:37', '2019-10-28 04:11:37', '0000-00-00 00:00:00'),
(39, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:37:\"smm_built-in-sukniwate_1572235921.jpg\";s:2:\"th\";s:38:\"smm_built-in-sukniwate_15722359211.jpg\";}', 4, '2019-10-28 04:12:01', '2019-10-28 04:12:01', '0000-00-00 00:00:00'),
(40, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:49:\"smm_chinese-new-year-fashionisland_1572235942.jpg\";s:2:\"th\";s:50:\"smm_chinese-new-year-fashionisland_15722359421.jpg\";}', 4, '2019-10-28 04:12:22', '2019-10-28 04:12:22', '0000-00-00 00:00:00'),
(41, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:45:\"smm_chinese-new-year-sukniwate_1572235958.jpg\";s:2:\"th\";s:46:\"smm_chinese-new-year-sukniwate_15722359581.jpg\";}', 4, '2019-10-28 04:12:38', '2019-10-28 04:12:38', '0000-00-00 00:00:00'),
(42, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:47:\"smm_chinese-new-year-thepromande_1572235976.jpg\";s:2:\"th\";s:48:\"smm_chinese-new-year-thepromande_15722359761.jpg\";}', 4, '2019-10-28 04:12:56', '2019-10-28 04:12:56', '0000-00-00 00:00:00'),
(43, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:35:\"smm_choice-sukniwate_1572236036.jpg\";s:2:\"th\";s:36:\"smm_choice-sukniwate_15722360361.jpg\";}', 4, '2019-10-28 04:13:56', '2019-10-28 04:13:56', '0000-00-00 00:00:00'),
(44, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:37:\"smm_discount-sukniwate_1572236049.jpg\";s:2:\"th\";s:38:\"smm_discount-sukniwate_15722360491.jpg\";}', 4, '2019-10-28 04:14:09', '2019-10-28 04:14:09', '0000-00-00 00:00:00'),
(45, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:35:\"smm_double-sukniwate_1572236063.jpg\";s:2:\"th\";s:36:\"smm_double-sukniwate_15722360631.jpg\";}', 4, '2019-10-28 04:14:23', '2019-10-28 04:14:23', '0000-00-00 00:00:00'),
(46, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:43:\"smm_ecard-2017-fashionisland_1572236091.jpg\";s:2:\"th\";s:44:\"smm_ecard-2017-fashionisland_15722360911.jpg\";}', 4, '2019-10-28 04:14:51', '2019-10-28 04:14:51', '0000-00-00 00:00:00'),
(47, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:42:\"smm_ecard-2017-thepromenade_1572236101.jpg\";s:2:\"th\";s:43:\"smm_ecard-2017-thepromenade_15722361011.jpg\";}', 4, '2019-10-28 04:15:01', '2019-10-28 04:15:01', '0000-00-00 00:00:00'),
(48, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:33:\"smm_impact-wedding_1572236126.jpg\";s:2:\"th\";s:34:\"smm_impact-wedding_15722361261.jpg\";}', 4, '2019-10-28 04:15:26', '2019-10-28 04:15:26', '0000-00-00 00:00:00'),
(49, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:40:\"smm_installment-sukniwate_1572236142.jpg\";s:2:\"th\";s:41:\"smm_installment-sukniwate_15722361421.jpg\";}', 4, '2019-10-28 04:15:42', '2019-10-28 04:15:42', '0000-00-00 00:00:00'),
(50, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:37:\"smm_iphone-7-sukniwate_1572236159.jpg\";s:2:\"th\";s:38:\"smm_iphone-7-sukniwate_15722361591.jpg\";}', 4, '2019-10-28 04:15:59', '2019-10-28 04:15:59', '0000-00-00 00:00:00'),
(51, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:35:\"smm_february-aluinch_1572236297.jpg\";s:2:\"th\";s:36:\"smm_february-aluinch_15722362971.jpg\";}', 4, '2019-10-28 04:18:18', '2019-10-28 04:18:18', '0000-00-00 00:00:00'),
(52, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:42:\"smm_free-one-year-sukniwate_1572236319.jpg\";s:2:\"th\";s:43:\"smm_free-one-year-sukniwate_15722363191.jpg\";}', 4, '2019-10-28 04:18:39', '2019-10-28 04:18:39', '0000-00-00 00:00:00'),
(53, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:41:\"smm_kids-2016-thepromenade_1572236404.jpg\";s:2:\"th\";s:42:\"smm_kids-2016-thepromenade_15722364041.jpg\";}', 4, '2019-10-28 04:20:04', '2019-10-28 04:20:04', '0000-00-00 00:00:00'),
(54, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:35:\"smm_last-9-sukniwate_1572236418.jpg\";s:2:\"th\";s:36:\"smm_last-9-sukniwate_15722364181.jpg\";}', 4, '2019-10-28 04:20:18', '2019-10-28 04:20:18', '0000-00-00 00:00:00'),
(55, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:38:\"smm_lifestyle-sukniwate_1572236432.jpg\";s:2:\"th\";s:39:\"smm_lifestyle-sukniwate_15722364321.jpg\";}', 4, '2019-10-28 04:20:32', '2019-10-28 04:20:32', '0000-00-00 00:00:00'),
(56, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:42:\"smm_little-pony-thepromande_1572236441.jpg\";s:2:\"th\";s:43:\"smm_little-pony-thepromande_15722364411.jpg\";}', 4, '2019-10-28 04:20:41', '2019-10-28 04:20:41', '0000-00-00 00:00:00'),
(57, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:38:\"smm_mango-fashionisland_1572236453.jpg\";s:2:\"th\";s:39:\"smm_mango-fashionisland_15722364531.jpg\";}', 4, '2019-10-28 04:20:53', '2019-10-28 04:20:53', '0000-00-00 00:00:00'),
(58, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:33:\"smm_mind-sukniwate_1572236464.jpg\";s:2:\"th\";s:34:\"smm_mind-sukniwate_15722364641.jpg\";}', 4, '2019-10-28 04:21:04', '2019-10-28 04:21:04', '0000-00-00 00:00:00'),
(59, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:49:\"smm_mothers-day-2016-fashionisland_1572236481.jpg\";s:2:\"th\";s:50:\"smm_mothers-day-2016-fashionisland_15722364811.jpg\";}', 4, '2019-10-28 04:21:21', '2019-10-28 04:21:21', '0000-00-00 00:00:00'),
(60, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:48:\"smm_mothers-day-2016-thepromenade_1572236490.jpg\";s:2:\"th\";s:49:\"smm_mothers-day-2016-thepromenade_15722364901.jpg\";}', 4, '2019-10-28 04:21:30', '2019-10-28 04:21:30', '0000-00-00 00:00:00'),
(61, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:35:\"smm_newbid-sukniwate_1572236503.jpg\";s:2:\"th\";s:36:\"smm_newbid-sukniwate_15722365031.jpg\";}', 4, '2019-10-28 04:21:43', '2019-10-28 04:21:43', '0000-00-00 00:00:00'),
(62, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:38:\"smm_overprice-sukniwate_1572236519.jpg\";s:2:\"th\";s:39:\"smm_overprice-sukniwate_15722365191.jpg\";}', 4, '2019-10-28 04:21:59', '2019-10-28 04:21:59', '0000-00-00 00:00:00'),
(63, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:41:\"smm_pattaya-posh-sukniwate_1572236630.jpg\";s:2:\"th\";s:42:\"smm_pattaya-posh-sukniwate_15722366301.jpg\";}', 4, '2019-10-28 04:23:50', '2019-10-28 04:23:50', '0000-00-00 00:00:00'),
(64, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:36:\"smm_payless-sukniwate_1572236643.jpg\";s:2:\"th\";s:37:\"smm_payless-sukniwate_15722366431.jpg\";}', 4, '2019-10-28 04:24:03', '2019-10-28 04:24:03', '0000-00-00 00:00:00'),
(65, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:40:\"smm_play-doh-thepromenade_1572236654.jpg\";s:2:\"th\";s:41:\"smm_play-doh-thepromenade_15722366541.jpg\";}', 4, '2019-10-28 04:24:14', '2019-10-28 04:24:14', '0000-00-00 00:00:00'),
(66, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:48:\"smm_promotion-mercurycardetailing_1572236674.jpg\";s:2:\"th\";s:49:\"smm_promotion-mercurycardetailing_15722366741.jpg\";}', 4, '2019-10-28 04:24:34', '2019-10-28 04:24:34', '0000-00-00 00:00:00'),
(67, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:39:\"smm_prothunder-sukniwate_1572236685.jpg\";s:2:\"th\";s:40:\"smm_prothunder-sukniwate_15722366851.jpg\";}', 4, '2019-10-28 04:24:45', '2019-10-28 04:24:45', '0000-00-00 00:00:00'),
(68, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:28:\"smm_skonithai_1572236699.jpg\";s:2:\"th\";s:29:\"smm_skonithai_15722366991.jpg\";}', 4, '2019-10-28 04:24:59', '2019-10-28 04:24:59', '0000-00-00 00:00:00'),
(69, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:34:\"smm_start-sukniwate_1572236712.jpg\";s:2:\"th\";s:35:\"smm_start-sukniwate_15722367121.jpg\";}', 4, '2019-10-28 04:25:12', '2019-10-28 04:25:12', '0000-00-00 00:00:00'),
(70, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:39:\"smm_stay-first-sukniwate_1572236721.jpg\";s:2:\"th\";s:40:\"smm_stay-first-sukniwate_15722367211.jpg\";}', 4, '2019-10-28 04:25:21', '2019-10-28 04:25:21', '0000-00-00 00:00:00'),
(71, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:38:\"smm_stay-rich-sukniwate_1572236731.jpg\";s:2:\"th\";s:39:\"smm_stay-rich-sukniwate_15722367311.jpg\";}', 4, '2019-10-28 04:25:31', '2019-10-28 04:25:31', '0000-00-00 00:00:00'),
(72, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:39:\"smm_super-deal-sukniwate_1572236750.jpg\";s:2:\"th\";s:40:\"smm_super-deal-sukniwate_15722367501.jpg\";}', 4, '2019-10-28 04:25:50', '2019-10-28 04:25:50', '0000-00-00 00:00:00'),
(73, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:48:\"smm_sweet-valentine-Fashionisland_1572236831.jpg\";s:2:\"th\";s:49:\"smm_sweet-valentine-Fashionisland_15722368311.jpg\";}', 4, '2019-10-28 04:27:11', '2019-10-28 04:27:11', '0000-00-00 00:00:00'),
(74, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:47:\"smm_sweet-valentine-Thepromenade_1572236840.jpg\";s:2:\"th\";s:48:\"smm_sweet-valentine-Thepromenade_15722368401.jpg\";}', 4, '2019-10-28 04:27:20', '2019-10-28 04:27:20', '0000-00-00 00:00:00'),
(75, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:48:\"smm_the-garden-2016-fashionisland_1572236927.jpg\";s:2:\"th\";s:49:\"smm_the-garden-2016-fashionisland_15722369271.jpg\";}', 4, '2019-10-28 04:28:47', '2019-10-28 04:28:47', '0000-00-00 00:00:00'),
(76, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:37:\"smm_thepoint-sukniwate_1572236937.jpg\";s:2:\"th\";s:38:\"smm_thepoint-sukniwate_15722369371.jpg\";}', 4, '2019-10-28 04:28:57', '2019-10-28 04:28:57', '0000-00-00 00:00:00'),
(77, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:37:\"smm_valentinesukniwate_1572236947.jpg\";s:2:\"th\";s:38:\"smm_valentinesukniwate_15722369471.jpg\";}', 4, '2019-10-28 04:29:07', '2019-10-28 04:29:07', '0000-00-00 00:00:00'),
(78, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:59:\"smm_workshop-by-unclegroup-2016-thepromenade_1572236957.jpg\";s:2:\"th\";s:60:\"smm_workshop-by-unclegroup-2016-thepromenade_15722369571.jpg\";}', 4, '2019-10-28 04:29:17', '2019-10-28 04:29:17', '0000-00-00 00:00:00'),
(79, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:32:\"smm_wow-sukniwate_1572236969.jpg\";s:2:\"th\";s:33:\"smm_wow-sukniwate_15722369691.jpg\";}', 4, '2019-10-28 04:29:29', '2019-10-28 04:29:29', '0000-00-00 00:00:00'),
(80, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:48:\"smm-mother-day-2017-fashionisland_1572236983.jpg\";s:2:\"th\";s:49:\"smm-mother-day-2017-fashionisland_15722369831.jpg\";}', 4, '2019-10-28 04:29:43', '2019-10-28 04:29:43', '0000-00-00 00:00:00'),
(81, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:43:\"smm-real-last-love_sukniwate_1572236994.jpg\";s:2:\"th\";s:44:\"smm-real-last-love_sukniwate_15722369941.jpg\";}', 4, '2019-10-28 04:29:54', '2019-10-28 04:29:54', '0000-00-00 00:00:00'),
(82, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:26:\"smm_aluinch_1572234654.jpg\";s:2:\"th\";s:27:\"smm_aluinch_15722346541.jpg\";}', 1, '2019-10-28 03:50:54', '2019-10-28 03:50:54', '0000-00-00 00:00:00'),
(83, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:41:\"smm_balanze-by-hydrohealty_1572234669.jpg\";s:2:\"th\";s:42:\"smm_balanze-by-hydrohealty_15722346691.jpg\";}', 1, '2019-10-28 03:51:09', '2019-10-28 03:51:09', '0000-00-00 00:00:00'),
(84, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:43:\"smm_banana-leaf-thai-cuisine_1572234685.jpg\";s:2:\"th\";s:44:\"smm_banana-leaf-thai-cuisine_15722346851.jpg\";}', 1, '2019-10-28 03:51:25', '2019-10-28 03:51:25', '0000-00-00 00:00:00'),
(85, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:36:\"smm_bangkok-citisnart_1572234698.jpg\";s:2:\"th\";s:37:\"smm_bangkok-citisnart_15722346981.jpg\";}', 1, '2019-10-28 03:51:38', '2019-10-28 03:51:38', '0000-00-00 00:00:00'),
(86, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:43:\"smm_bansaithong-beach-resort_1572234722.jpg\";s:2:\"th\";s:44:\"smm_bansaithong-beach-resort_15722347221.jpg\";}', 1, '2019-10-28 03:52:02', '2019-10-28 03:52:02', '0000-00-00 00:00:00'),
(87, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:41:\"smm_berov-the-beauty-lover_1572234738.jpg\";s:2:\"th\";s:42:\"smm_berov-the-beauty-lover_15722347381.jpg\";}', 1, '2019-10-28 03:52:18', '2019-10-28 03:52:18', '0000-00-00 00:00:00'),
(88, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:37:\"smm_blue-fish-solution_1572234751.jpg\";s:2:\"th\";s:38:\"smm_blue-fish-solution_15722347511.jpg\";}', 1, '2019-10-28 03:52:31', '2019-10-28 03:52:31', '0000-00-00 00:00:00'),
(89, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:43:\"smm_business-events-thailand_1572234771.jpg\";s:2:\"th\";s:44:\"smm_business-events-thailand_15722347711.jpg\";}', 1, '2019-10-28 03:52:51', '2019-10-28 03:52:51', '0000-00-00 00:00:00'),
(90, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:26:\"smm_conwood_1572234787.jpg\";s:2:\"th\";s:27:\"smm_conwood_15722347871.jpg\";}', 1, '2019-10-28 03:53:07', '2019-10-28 03:53:07', '0000-00-00 00:00:00'),
(91, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:33:\"smm_curtain-xpress_1572234803.jpg\";s:2:\"th\";s:34:\"smm_curtain-xpress_15722348031.jpg\";}', 1, '2019-10-28 03:53:23', '2019-10-28 03:53:23', '0000-00-00 00:00:00'),
(92, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:26:\"smm_databar_1572234825.jpg\";s:2:\"th\";s:27:\"smm_databar_15722348251.jpg\";}', 1, '2019-10-28 03:53:45', '2019-10-28 03:53:45', '0000-00-00 00:00:00'),
(93, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:23:\"smm_dfsk_1572234844.jpg\";s:2:\"th\";s:24:\"smm_dfsk_15722348441.jpg\";}', 1, '2019-10-28 03:54:04', '2019-10-28 03:54:04', '0000-00-00 00:00:00'),
(94, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:36:\"smm_dream-destination_1572234865.jpg\";s:2:\"th\";s:37:\"smm_dream-destination_15722348651.jpg\";}', 1, '2019-10-28 03:54:25', '2019-10-28 03:54:25', '0000-00-00 00:00:00'),
(95, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:36:\"smm_drk-beauty-clinic_1572234887.jpg\";s:2:\"th\";s:37:\"smm_drk-beauty-clinic_15722348871.jpg\";}', 1, '2019-10-28 03:54:47', '2019-10-28 03:54:47', '0000-00-00 00:00:00'),
(96, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:32:\"smm_fashionisland_1572234906.jpg\";s:2:\"th\";s:33:\"smm_fashionisland_15722349061.jpg\";}', 1, '2019-10-28 03:55:06', '2019-10-28 03:55:06', '0000-00-00 00:00:00'),
(97, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:30:\"smm_gesthailand_1572234924.jpg\";s:2:\"th\";s:31:\"smm_gesthailand_15722349241.jpg\";}', 1, '2019-10-28 03:55:24', '2019-10-28 03:55:24', '0000-00-00 00:00:00'),
(98, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:34:\"smm_hatari-wireless_1572234943.jpg\";s:2:\"th\";s:35:\"smm_hatari-wireless_15722349431.jpg\";}', 1, '2019-10-28 03:55:43', '2019-10-28 03:55:43', '0000-00-00 00:00:00'),
(99, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:26:\"smm_hungsen_1572234961.jpg\";s:2:\"th\";s:27:\"smm_hungsen_15722349611.jpg\";}', 1, '2019-10-28 03:56:01', '2019-10-28 03:56:01', '0000-00-00 00:00:00'),
(100, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:29:\"smm_ichecktest_1572234983.jpg\";s:2:\"th\";s:30:\"smm_ichecktest_15722349831.jpg\";}', 1, '2019-10-28 03:56:23', '2019-10-28 03:56:23', '0000-00-00 00:00:00'),
(101, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:25:\"smm_impact_1572235013.jpg\";s:2:\"th\";s:26:\"smm_impact_15722350131.jpg\";}', 1, '2019-10-28 03:56:53', '2019-10-28 03:56:53', '0000-00-00 00:00:00'),
(102, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:34:\"smm_impact-catering_1572235029.jpg\";s:2:\"th\";s:35:\"smm_impact-catering_15722350291.jpg\";}', 1, '2019-10-28 03:57:09', '2019-10-28 03:57:09', '0000-00-00 00:00:00'),
(103, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:36:\"smm_infinityone-condo_1572235048.jpg\";s:2:\"th\";s:37:\"smm_infinityone-condo_15722350481.jpg\";}', 1, '2019-10-28 03:57:28', '2019-10-28 03:57:28', '0000-00-00 00:00:00'),
(104, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:35:\"smm_inta-heathy-care_1572235064.jpg\";s:2:\"th\";s:36:\"smm_inta-heathy-care_15722350641.jpg\";}', 1, '2019-10-28 03:57:44', '2019-10-28 03:57:44', '0000-00-00 00:00:00'),
(105, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:31:\"smm_ipick-traval_1572235079.jpg\";s:2:\"th\";s:32:\"smm_ipick-traval_15722350791.jpg\";}', 1, '2019-10-28 03:57:59', '2019-10-28 03:57:59', '0000-00-00 00:00:00'),
(106, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:33:\"smm_jvava-thailand_1572235096.jpg\";s:2:\"th\";s:34:\"smm_jvava-thailand_15722350961.jpg\";}', 1, '2019-10-28 03:58:16', '2019-10-28 03:58:16', '0000-00-00 00:00:00'),
(107, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:30:\"smm_kenze-panne_1572235131.jpg\";s:2:\"th\";s:31:\"smm_kenze-panne_15722351311.jpg\";}', 1, '2019-10-28 03:58:51', '2019-10-28 03:58:51', '0000-00-00 00:00:00'),
(108, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:32:\"smm_kunsad-center_1572235163.jpg\";s:2:\"th\";s:33:\"smm_kunsad-center_15722351631.jpg\";}', 1, '2019-10-28 03:59:23', '2019-10-28 03:59:23', '0000-00-00 00:00:00'),
(109, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:29:\"smm_lairdupran_1572235183.jpg\";s:2:\"th\";s:30:\"smm_lairdupran_15722351831.jpg\";}', 1, '2019-10-28 03:59:43', '2019-10-28 03:59:43', '0000-00-00 00:00:00'),
(110, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:33:\"smm_lalin-property_1572235201.jpg\";s:2:\"th\";s:34:\"smm_lalin-property_15722352011.jpg\";}', 1, '2019-10-28 04:00:01', '2019-10-28 04:00:01', '0000-00-00 00:00:00'),
(111, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:26:\"smm_lh-bank_1572235227.jpg\";s:2:\"th\";s:27:\"smm_lh-bank_15722352271.jpg\";}', 1, '2019-10-28 04:00:27', '2019-10-28 04:00:27', '0000-00-00 00:00:00'),
(112, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:23:\"smm_lhfg_1572235319.jpg\";s:2:\"th\";s:24:\"smm_lhfg_15722353191.jpg\";}', 1, '2019-10-28 04:01:59', '2019-10-28 04:01:59', '0000-00-00 00:00:00'),
(113, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:33:\"smm_massproductsco_1572235329.jpg\";s:2:\"th\";s:34:\"smm_massproductsco_15722353291.jpg\";}', 1, '2019-10-28 04:02:09', '2019-10-28 04:02:09', '0000-00-00 00:00:00'),
(114, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:40:\"smm_mercury-car-detailing_1572235343.jpg\";s:2:\"th\";s:41:\"smm_mercury-car-detailing_15722353431.jpg\";}', 1, '2019-10-28 04:02:23', '2019-10-28 04:02:23', '0000-00-00 00:00:00'),
(115, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:34:\"smm_panacea-jewelry_1572235358.jpg\";s:2:\"th\";s:35:\"smm_panacea-jewelry_15722353581.jpg\";}', 1, '2019-10-28 04:02:38', '2019-10-28 04:02:38', '0000-00-00 00:00:00'),
(116, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:34:\"smm_perfect-builder_1572235376.jpg\";s:2:\"th\";s:35:\"smm_perfect-builder_15722353761.jpg\";}', 1, '2019-10-28 04:02:56', '2019-10-28 04:02:56', '0000-00-00 00:00:00'),
(117, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:26:\"smm_rungkit_1572235389.jpg\";s:2:\"th\";s:27:\"smm_rungkit_15722353891.jpg\";}', 1, '2019-10-28 04:03:09', '2019-10-28 04:03:09', '0000-00-00 00:00:00'),
(118, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:28:\"smm_sathaporn_1572235404.jpg\";s:2:\"th\";s:29:\"smm_sathaporn_15722354041.jpg\";}', 1, '2019-10-28 04:03:24', '2019-10-28 04:03:24', '0000-00-00 00:00:00'),
(119, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:34:\"smm_scr_-realestate_1572235417.jpg\";s:2:\"th\";s:35:\"smm_scr_-realestate_15722354171.jpg\";}', 1, '2019-10-28 04:03:37', '2019-10-28 04:03:37', '0000-00-00 00:00:00'),
(120, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:24:\"smm_skoni_1572235431.jpg\";s:2:\"th\";s:25:\"smm_skoni_15722354311.jpg\";}', 1, '2019-10-28 04:03:51', '2019-10-28 04:03:51', '0000-00-00 00:00:00'),
(121, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:38:\"smm_social-media-master_1572235446.jpg\";s:2:\"th\";s:39:\"smm_social-media-master_15722354461.jpg\";}', 1, '2019-10-28 04:04:06', '2019-10-28 04:04:06', '0000-00-00 00:00:00'),
(122, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:24:\"smm-dlite_1572235671.jpg\";s:2:\"th\";s:25:\"smm-dlite_15722356711.jpg\";}', 1, '2019-10-28 04:07:51', '2019-10-28 04:07:51', '0000-00-00 00:00:00'),
(123, 0, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:22:\"smm-ava_1572235656.jpg\";s:2:\"th\";s:23:\"smm-ava_15722356561.jpg\";}', 1, '2019-10-28 04:07:36', '2019-10-28 04:07:36', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `client_categories`
--

CREATE TABLE `client_categories` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `client_categories`
--

INSERT INTO `client_categories` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'a:2:{s:2:\"en\";s:9:\"SEO & SEM\";s:2:\"th\";s:9:\"SEO & SEM\";}', '2019-10-11 08:19:05', '2019-07-04 21:56:35', '0000-00-00 00:00:00'),
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
(1, 'a:2:{s:2:\"en\";s:20:\"Cleints | social.com\";s:2:\"th\";s:49:\"ลูกค้าของเรา | social.com\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', '2019-10-02 09:16:29', '2019-10-15 00:50:57', NULL);

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
(1, 'a:2:{s:2:\"en\";s:20:\"Contact | social.com\";s:2:\"th\";s:31:\"ติดต่อ | social.com\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', '2019-10-02 09:16:29', '2019-10-15 00:47:42', NULL);

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
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
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
(1, 'a:2:{s:2:\"en\";s:17:\"Home | social.com\";s:2:\"th\";s:34:\"หน้าแรก | social.com\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";N;s:2:\"th\";s:36:\"bc9cee3c829bf42297748337b230ef60.jpg\";}', '2019-10-02 09:16:29', '2019-10-15 00:51:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `join_us_page`
--

CREATE TABLE `join_us_page` (
  `id` int(11) NOT NULL,
  `meta_tag_title` text CHARACTER SET utf8 NOT NULL,
  `meta_tag_description` text CHARACTER SET utf8 NOT NULL,
  `meta_tag_keywords` text CHARACTER SET utf8 NOT NULL,
  `img_og_twitter` text CHARACTER SET utf8 NOT NULL,
  `content_left` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `join_us_page`
--

INSERT INTO `join_us_page` (`id`, `meta_tag_title`, `meta_tag_description`, `meta_tag_keywords`, `img_og_twitter`, `content_left`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'a:2:{s:2:\"en\";s:20:\"Join us | social.com\";s:2:\"th\";s:52:\"ร่วมงานกับเรา | social.com\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:1493:\"<p style=\"color: rgb(33, 37, 41); font-family: Prompt, sans-serif; font-size: 16px;\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p><p style=\"color: rgb(33, 37, 41); font-family: Prompt, sans-serif; font-size: 16px;\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><p style=\"color: rgb(33, 37, 41); font-family: Prompt, sans-serif; font-size: 16px;\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>\";s:2:\"th\";s:1493:\"<p style=\"color: rgb(33, 37, 41); font-family: Prompt, sans-serif; font-size: 16px;\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p><p style=\"color: rgb(33, 37, 41); font-family: Prompt, sans-serif; font-size: 16px;\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><p style=\"color: rgb(33, 37, 41); font-family: Prompt, sans-serif; font-size: 16px;\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>\";}', '2019-10-02 09:16:29', '2019-10-30 03:18:36', NULL);

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `event_id`, `detail`, `user_id`, `ip`, `created_at`, `updated_at`, `deleted_at`) VALUES
(552, 2, 'ออกจากระบบ SMM Backoffice', 2, '192.168.1.115', '2019-10-29 09:11:32', NULL, NULL),
(553, 1, 'เข้าสู่ระบบ SMM Backoffice', 2, '192.168.1.115', '2019-10-29 09:11:36', NULL, NULL),
(554, 4, 'แก้ไข Banner', 2, '192.168.1.115', '2019-10-29 09:11:56', NULL, NULL),
(555, 4, 'แก้ไข Banner', 2, '192.168.1.115', '2019-10-29 09:12:01', NULL, NULL),
(556, 4, 'แก้ไข Banner', 2, '192.168.1.115', '2019-10-29 09:12:08', NULL, NULL),
(557, 4, 'แก้ไข Banner', 2, '192.168.1.115', '2019-10-29 09:12:12', NULL, NULL),
(558, 4, 'แก้ไข Portfolio (Services Page)', 2, '192.168.1.7', '2019-10-29 09:36:09', NULL, NULL),
(559, 1, 'เข้าสู่ระบบ SMM Backoffice', 2, '192.168.1.115', '2019-10-30 02:42:33', NULL, NULL),
(560, 1, 'เข้าสู่ระบบ SMM Backoffice', 2, '192.168.1.7', '2019-10-30 02:42:44', NULL, NULL),
(561, 2, 'ออกจากระบบ SMM Backoffice', 2, '192.168.1.115', '2019-10-30 02:42:45', NULL, NULL),
(562, 4, 'แก้ไข Content (Abouts Page)', 2, '192.168.1.7', '2019-10-30 02:46:29', NULL, NULL),
(563, 4, 'แก้ไข Content (Abouts Page)', 2, '192.168.1.7', '2019-10-30 02:46:58', NULL, NULL),
(564, 4, 'แก้ไข Service (Services Page)', 2, '192.168.1.7', '2019-10-30 02:51:18', NULL, NULL),
(565, 4, 'แก้ไข Service (Services Page)', 2, '192.168.1.7', '2019-10-30 03:03:59', NULL, NULL),
(566, 4, 'แก้ไข Service (Services Page)', 2, '192.168.1.7', '2019-10-30 04:31:57', NULL, NULL),
(567, 4, 'แก้ไข Service (Services Page)', 2, '192.168.1.7', '2019-10-30 05:07:36', NULL, NULL),
(568, 4, 'แก้ไข Service (Services Page)', 2, '192.168.1.7', '2019-10-30 05:17:01', NULL, NULL),
(569, 1, 'เข้าสู่ระบบ SMM Backoffice', 2, '192.168.1.7', '2019-10-30 08:11:13', NULL, NULL),
(570, 4, 'แก้ไข Service (Services Page)', 2, '192.168.1.7', '2019-10-30 08:11:44', NULL, NULL),
(571, 1, 'เข้าสู่ระบบ SMM Backoffice', 2, '192.168.1.7', '2019-10-30 10:20:43', NULL, NULL),
(572, 4, 'แก้ไข Service (Services Page)', 2, '192.168.1.7', '2019-10-30 10:21:47', NULL, NULL);

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
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'super admin', '2019-10-08 09:38:23', NULL, NULL),
(2, 'admin', '2019-10-08 09:38:23', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `sort` int(11) NOT NULL,
  `meta_tag_title` text NOT NULL,
  `meta_tag_description` text NOT NULL,
  `meta_tag_keywords` text NOT NULL,
  `img_og_twitter` text NOT NULL,
  `banner_img` text NOT NULL,
  `banner_img_title_alt` text NOT NULL,
  `banner_title` text NOT NULL,
  `icon` text NOT NULL,
  `img_on_navbar` text NOT NULL,
  `title` text NOT NULL,
  `slug` text NOT NULL,
  `content_top_img` text NOT NULL,
  `content_top_title` text NOT NULL,
  `content_top_body` longtext NOT NULL,
  `content_bottom_img` text NOT NULL,
  `content_bottom_title` text NOT NULL,
  `content_bottom_body` longtext NOT NULL,
  `text_button` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `sort`, `meta_tag_title`, `meta_tag_description`, `meta_tag_keywords`, `img_og_twitter`, `banner_img`, `banner_img_title_alt`, `banner_title`, `icon`, `img_on_navbar`, `title`, `slug`, `content_top_img`, `content_top_title`, `content_top_body`, `content_bottom_img`, `content_bottom_title`, `content_bottom_body`, `text_button`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:39:\"banner_service_marketing_1572238361.jpg\";s:2:\"th\";s:39:\"banner_service_marketing_1572238361.jpg\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:19:\"ico_facebook_01.png\";s:2:\"th\";s:36:\"feb6b9972cdd906a2e1a70f57c9da403.png\";}', 'a:2:{s:2:\"en\";s:26:\"img_on_nav_facebook_01.jpg\";s:2:\"th\";s:26:\"img_on_nav_facebook_01.jpg\";}', 'a:2:{s:2:\"en\";s:22:\"Social Media Marketing\";s:2:\"th\";s:96:\"บริการทำการตลาดผ่านโซเชียลมีเดีย\";}', 'a:2:{s:2:\"en\";s:22:\"social-media-marketing\";s:2:\"th\";s:96:\"บริการทำการตลาดผ่านโซเชียลมีเดีย\";}', 'a:2:{s:2:\"en\";s:23:\"social-1_1572236441.jpg\";s:2:\"th\";s:24:\"social-1_15722364411.jpg\";}', 'a:2:{s:2:\"en\";s:22:\"Social Media Marketing\";s:2:\"th\";s:97:\"บริการทำการตลาดผ่านโซเชียลมีเดีย \";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:994:\"<p>ปัจจุบันคนไทยเข้าถึง Social Media เยอะมากและได้รับความนิยมอย่างล้นหลาม เรียกได้ว่าตื่นเช้ามาก็ต้องจับมือถือเพื่อเช็คข่าว เช็คความเคลื่อนไหวของคนรู้จักก่อนแล้ว</p><p>ซึ่งนี่เองถือเป็นหนึ่งในช่องทางที่บรรดาแบรนด์ หรือธุรกิจต่าง ๆ ไม่ควรมองข้าม เพราะเป็นช่องทางที่จะช่วยให้สินค้าเข้าถึงคนไทยสาย Social ได้เยอะที่สุดและช่วยเปิดโอกาสทางการค้าได้มากยิ่งขึ้น<br></p>\";}', 'a:2:{s:2:\"en\";s:23:\"social-2_1572236794.jpg\";s:2:\"th\";s:24:\"social-2_15722367941.jpg\";}', 'a:2:{s:2:\"en\";s:42:\"SEO สำคัญอย่างไร ?\";s:2:\"th\";s:48:\"สื่อสังคมออนไลน์\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:697:\"<b>ทำการตลาดผ่าน Social Media แบบไหนได้บ้าง<br></b><br>✔ สร้างการรับรู้แบรนด์<br><br>✔ เพิ่มการเข้าถึงกลุ่มเป้าหมาย<br><br>✔ สร้างลูกค้าเป้าหมาย<br><br>✔ สร้างคอนเวอร์ชันเพื่อเพิ่มยอดขาย<br><br>✔ กระตุ้นยอดขายทางแคตตาล็อก<br><br>และแบบอื่น ๆ อีกมากมายตามวัตถุประสงค์ที่คุณต้องการ<br><br><br>\";}', 'a:2:{s:2:\"en\";s:41:\"สนใจทำ SEO กับเรา\";s:2:\"th\";s:60:\"สนใจทำการตลาดออนไลน์\";}', '2019-10-28 07:05:56', '2019-10-29 03:33:57', '0000-00-00 00:00:00'),
(2, 2, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:25:\"banner_seo_1572246371.jpg\";s:2:\"th\";s:25:\"banner_seo_1572245847.jpg\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:14:\"ico_seo_01.png\";s:2:\"th\";s:14:\"ico_seo_01.png\";}', 'a:2:{s:2:\"en\";s:21:\"img_on_nav_seo_01.jpg\";s:2:\"th\";s:21:\"img_on_nav_seo_01.jpg\";}', 'a:2:{s:2:\"en\";s:23:\"Search Engine Marketing\";s:2:\"th\";s:91:\"บริการทำการตลาดผ่านเครือข่าย Google\";}', 'a:2:{s:2:\"en\";s:23:\"search-engine-marketing\";s:2:\"th\";s:91:\"บริการทำการตลาดผ่านเครือข่าย-google\";}', 'a:2:{s:2:\"en\";s:9:\"dummy.jpg\";s:2:\"th\";s:36:\"3612a0b28cf9a19c31f09d0d821d69db.jpg\";}', 'a:2:{s:2:\"en\";s:23:\"Search Engine Marketing\";s:2:\"th\";s:91:\"บริการทำการตลาดผ่านเครือข่าย Google\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:1688:\"<p>เพื่อทำให้เว็บไซต์ติดในหน้าแรกและอันดับต้นๆ ของผลการค้นหาบนเสิร์ชเอนจิ้น</p><p><b>SEO (Search Engine Optimization หรือเอสอีโอ)</b> คือหนึ่งในกระบวนการบริหารจัดการเว็บไซต์ทั้งในส่วนของ on-page และ off-page พร้อมการวางโครงสร้าง คีย์เวิร์ด(Keywords) เพื่อให้คีย์เวิร์ดที่สำคัญทางธุรกิจปรากฎขึ้นในอันดับที่ดี ติดลำดับในหน้าแรก จากผลการค้นหาจากเสิร์ชเอนจิ้น อาทิเช่น Google, Yahoo,  Bing เป็นต้น และมีอันดับปรากฎเหนือคู่แข่งทางธุรกิจ การจัดทำ SEO นั้น เป็นการทำการตลาดที่สามารถเจาะ หรือเข้าถึงกลุ่มเป้าหมายได้ตรง มีความแม่นยำ อีกทั้งยังมีประสิทธิภาพในการเข้าถึงลูกค้า ซึ่งมันจะสามารถช่วยให้ธุรกิจของคุณประสบความสำเร็จเป็นที่รู้จักง่ายมากขึ้น <br></p>\";}', 'a:2:{s:2:\"en\";s:9:\"dummy.jpg\";s:2:\"th\";s:36:\"34d9b4cecdd9fc654efe3d2c6f130e25.jpg\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:1480:\"<p style=\"font-size: 25px;\"><b>ข้อดีของการทำ SEO(เอสอีโอ) | Search Engine Optimization</b></p><p><b>การทำ SEO</b> ช่วยเพิ่มจำนวนผู้เข้าเว็บไซต์ของคุณ เพิ่มโอกาสทางธุรกิจ จากการพบเห็นโดยจากผู้ใช้อินเตอร์เน็ตทั่วโลก ที่ค้นหาจากคีร์เวิร์ดที่เกียวข้องกับธุรกิจ</p><p><b>การทำ SEO</b> ช่วยให้เว็บไซต์ของเราเหนือกว่าคู่แข่งในประเภทธุรกิจเดียวกัน ทำให้ได้เปรียบคู่แข่งมีโอกาสเหนือกว่าคู่แข่ง</p><p><b>การทำ SEO</b> ช่วยเพิ่มช่องทางการตลาด โดยไม่ถูกจำกัดด้วยพื้นที</p><p><b>การทำ SEO</b> ช่วยให้ได้ลูกค้าที่มีประสิทธิภาพและตรงตามกลุ่มเป้าหมายที่ต้องการ</p><p><b>การทำ SEO</b> คุ้มค่า-ถูกกว่าการทำโฆษณาในประเภทอื่นๆ</p>\";}', 'a:2:{s:2:\"en\";s:41:\"สนใจทำ SEO กับเรา\";s:2:\"th\";s:41:\"สนใจทำ SEO กับเรา\";}', '2019-10-28 07:06:11', '2019-10-28 07:06:11', '0000-00-00 00:00:00'),
(3, 3, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:36:\"banner_line_marketing_1572245868.jpg\";s:2:\"th\";s:36:\"banner_line_marketing_1572245868.jpg\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:15:\"ico_line_01.png\";s:2:\"th\";s:15:\"ico_line_01.png\";}', 'a:2:{s:2:\"en\";s:22:\"img_on_nav_line_01.jpg\";s:2:\"th\";s:22:\"img_on_nav_line_01.jpg\";}', 'a:2:{s:2:\"en\";s:14:\"Line Marketing\";s:2:\"th\";s:62:\"บริการทำการตลาดผ่าน LINE\";}', 'a:2:{s:2:\"en\";s:14:\"line-marketing\";s:2:\"th\";s:62:\"บริการทำการตลาดผ่าน-line\";}', 'a:2:{s:2:\"en\";s:9:\"dummy.jpg\";s:2:\"th\";s:20:\"line1_1572322308.jpg\";}', 'a:2:{s:2:\"en\";s:14:\"Line Marketing\";s:2:\"th\";s:99:\"บริการทำการตลาดผ่าน LINE แอปพลิเคชั่น\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:725:\"<div>เข้าถึงกลุ่มลูกค้าได้มากยิ่งขึ้น เปิดโอกาสในการทำธุรกิจให้มากยิ่งกว่า ด้วย LINE OA เสิร์ฟคอนเทนต์ที่ตรงโจทย์ เข้าถึงลูกค้าให้โดนใจ รักษาฐานลูกค้าอย่างตรงจุด ด้วยบริการครบทุกช่องทางไม่ว่าจะเป็น</div><div>LINE Timeline และ LINE TV และการบริหารจัดการบัญชีอย่างมืออาชีพ</div><div><br></div>\";}', 'a:2:{s:2:\"en\";s:9:\"dummy.jpg\";s:2:\"th\";s:20:\"line2_1572324335.jpg\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:905:\"<p><b>ทำการตลาดผ่าน LINE Official Account ดียังไง<br></b><br>✔ เข้าถึงกลุ่มผู้ใช้ได้กว่า 30 ล้านคนทั่วไทย<br><br>✔ อัตราการมองเห็น ข่าวสารโปรโมตสินค้าและบริการมากถึง 100%<br><br>✔ บริหารจัดการทั้งสินค้า | บริการ และสามารถดูแลลูกค้าได้ในคราวเดียวกัน<br><br>✔ มีฟีทเจอร์ช่วยขายมากมายปรับเปลี่ยนได้ตามวัตถุประสงค์<br><br>✔ ช่วยเพิ่มฐานลูกค้าและกระตุ้นยอดขายได้ดี<br><br></p>\";}', 'a:2:{s:2:\"en\";s:41:\"สนใจทำ SEO กับเรา\";s:2:\"th\";s:43:\"สนใจทำ Line@ กับเรา\";}', '2019-10-28 07:06:32', '2019-10-29 04:54:46', '0000-00-00 00:00:00'),
(4, 4, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:25:\"banner_sem_1572245882.jpg\";s:2:\"th\";s:25:\"banner_sem_1572245882.jpg\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:14:\"ico_sem_01.png\";s:2:\"th\";s:14:\"ico_sem_01.png\";}', 'a:2:{s:2:\"en\";s:21:\"img_on_nav_sem_01.jpg\";s:2:\"th\";s:21:\"img_on_nav_sem_01.jpg\";}', 'a:2:{s:2:\"en\";s:26:\"Search Engine Optimization\";s:2:\"th\";s:93:\"บริการทำการตลาดผ่านโปรแกรมค้นหา\";}', 'a:2:{s:2:\"en\";s:26:\"search-engine-optimization\";s:2:\"th\";s:93:\"บริการทำการตลาดผ่านโปรแกรมค้นหา\";}', 'a:2:{s:2:\"en\";s:9:\"dummy.jpg\";s:2:\"th\";s:36:\"dc7693150702d43f9157ba48e377d1b5.jpg\";}', 'a:2:{s:2:\"en\";s:26:\"Search Engine Optimization\";s:2:\"th\";s:232:\"บริการทำการตลาดผ่านโปรแกรมค้นหา ด้วยคีย์เวิร์ดที่มีคุณภาพและสร้างยอดขายได้จริง\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:1669:\"<p><font color=\"#212529\" face=\"Prompt, sans-serif\"><span style=\"font-size: 16px;\">รับทำโฆษณา Google Adwords หรือ Google PPC (Pay-per-click) บริการด้าน SEM | Search Engine Marketing<br></span></font></p><p>Google AdWords หรือ Google PPC  จึงกลายเป็นโปรแกรมโฆษณาออนไลน์ของ Google ช่วยให้คุณธุรกิจของคุณสามารถเจาะเข้าถึงลูกค้าใหม่ๆ และทำให้ธุรกิจของคุณเติบโตขึ้นเลือกที่ที่ต้องการให้โฆษณาปรากฏ กำหนดงบประมาณที่คุณยินดีจ่าย และวัดผลกระทบที่เกิดจากโฆษณาของคุณ ไม่มีข้อกำหนดการใช้จ่ายขั้นต่ำ คุณสามารถหยุดชั่วคราวหรือเลิกใช้ได้ทุกเมื่อ</p><p>ดังนั้นหาก เว็บไซต์ของคุณไม่ปรากฎบนเครื่องมือการค้นหา อาทิเช่น Google การโฆษณาผ่าน Google Adwords, หรือ Google PPC นี้คือ คำตอบที่รวดเร็วที่จะช่วยทำให้เว็บไซต์ธุรกิจของคุณสามารถถูกค้นพบได้บนโลกออนไล</p>\";}', 'a:2:{s:2:\"en\";s:9:\"dummy.jpg\";s:2:\"th\";s:20:\"sem-2_1572324769.jpg\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:69:\"ข้อดีของการทำ SEM | Search Engine Marketing\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:1423:\"<ul><li><b>โฆษณาผ่าน Google Adwords</b> ทำให้เว็บไซต์ปรากฎในหน้าแรกของผลการค้นหาบน Google Search Engine ได้ภายเวลาที่รวดเร็ว เมื่อเปิดใช้บริการ ออนไลน์แคมเปญก็สามารถออนได้ทันที<br><br></li><li><b>โฆษณาผ่าน Google Adwords</b> ทำให้การโปรโมทเว็บไซ์ต์สามารถติดในทุกๆหน้าของการ Search บน Google ทั้งนี้ขึ้นอยู่กับงบประมาณในการ Bid คำหรือคีย์เวิร์ดนั้นๆ<br><br></li><li><b>การทำโฆษณา Google Adwords</b> สามารถช่วยลดขั้นตอนการทำงานที่ยุ่งยากซ้ำซ้อนในการ Search<br><br></li><li><b>หากไม่มีคลิกโฆษณาใน Google Adwords</b> ผู้โฆษณาจะไม่เสียค่าใช้จ่ายใดๆ เจ้าของธุรกิจสามารถตั้งงบประมาณการโฆษณาให้เหมาะกับแผนการตลาดได้</li></ul>\";}', 'a:2:{s:2:\"en\";s:41:\"สนใจทำ SEO กับเรา\";s:2:\"th\";s:41:\"สนใจทำ SEM กับเรา\";}', '2019-10-28 07:06:47', '2019-10-29 04:53:20', '0000-00-00 00:00:00'),
(5, 5, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:40:\"banner_production_content_1572245895.jpg\";s:2:\"th\";s:40:\"banner_production_content_1572245895.jpg\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:21:\"ico_production_01.png\";s:2:\"th\";s:21:\"ico_production_01.png\";}', 'a:2:{s:2:\"en\";s:28:\"img_on_nav_production_01.jpg\";s:2:\"th\";s:28:\"img_on_nav_production_01.jpg\";}', 'a:2:{s:2:\"en\";s:21:\"Creative & Production\";s:2:\"th\";s:48:\"บริการทำคอนเทนต์\";}', 'a:2:{s:2:\"en\";s:19:\"creative-production\";s:2:\"th\";s:48:\"บริการทำคอนเทนต์\";}', 'a:2:{s:2:\"en\";s:9:\"dummy.jpg\";s:2:\"th\";s:23:\"content2_1572336219.jpg\";}', 'a:2:{s:2:\"en\";s:21:\"Creative & Production\";s:2:\"th\";s:195:\"บริการทำคอนเทนต์ในรูปแบบต่าง ๆ ผ่านสื่อทั้ง อาร์ตเวิร์ค | Motion Graphic | VDO คลิป\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:824:\"<p>อยาก Touch ลูกค้าให้โดนใจ ต้องเลือกใช้ Content ที่ตรงจุด เพราะสินค้าแต่ละอย่างเหมาะสมกับการเล่าเรื่อง (Story Telling) ที่ต่างกัน<br>หรือแม้แต่สินค้าแบบเดียวกันก็ใช่ว่าการเลือกคอนเทนต์แบบเดิม ๆ จะเข้าถึงกลุ่มลูกค้าได้ตลอดไป ยุคนี้ต้องเลือกคอนเทนต์ให้ตรงกับสินค้าและเหมาะสมกับเป้าหมายที่เราต้องการด้วย<br></p>\";}', 'a:2:{s:2:\"en\";s:9:\"dummy.jpg\";s:2:\"th\";s:24:\"content2_15723362191.jpg\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:831:\"<p>โซเชียล มีเดีย มาสเตอร์ เรามีทีมงานที่เชียวชาญในการสร้างคอนเทนต์ที่ตรงกับทาร์เก็ต<br>ช่วยแนะแนวทางที่กำลังอินเทรนด์ ช่วยให้สินค้าของคุณเข้าถึงกลุ่มเป้าหมายได้อย่างมีประสิทธิภาพ<br><br>✔ เข้าถึงผู้ชมได้อย่างรวดเร็วแม่นยำ<br>✔ นำไปใช้ได้ในหลายแพลตฟอร์ม<br>✔ คุณภาพระดับ Full HD<br>✔ ระดับราคาที่คุณพอใจ<br></p>\";}', 'a:2:{s:2:\"en\";s:41:\"สนใจทำ SEO กับเรา\";s:2:\"th\";s:60:\"สนใจบริการทำคอนเทนต์\";}', '2019-10-28 07:16:14', '2019-10-29 08:03:39', '0000-00-00 00:00:00'),
(6, 6, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:31:\"banner_webdesign_1572245910.jpg\";s:2:\"th\";s:31:\"banner_webdesign_1572245910.jpg\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:14:\"ico_web_01.png\";s:2:\"th\";s:14:\"ico_web_01.png\";}', 'a:2:{s:2:\"en\";s:21:\"img_on_nav_web_01.jpg\";s:2:\"th\";s:21:\"img_on_nav_web_01.jpg\";}', 'a:2:{s:2:\"en\";s:14:\"Website design\";s:2:\"th\";s:60:\"บริการออกแบบเว็บไซต์\";}', 'a:2:{s:2:\"en\";s:14:\"website-design\";s:2:\"th\";s:60:\"บริการออกแบบเว็บไซต์\";}', 'a:2:{s:2:\"en\";s:9:\"dummy.jpg\";s:2:\"th\";s:25:\"webdesign1_1572404639.jpg\";}', 'a:2:{s:2:\"en\";s:14:\"Website design\";s:2:\"th\";s:152:\"บริการออกแบบเว็บไซต์และหน้า Landing Page ให้เหมาะสมกับธุรกิจ\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:1412:\"<p>เดี๋ยวนี้ใคร ๆ ก็ออนไลน์กันทั้งนั้น แล้วธุรกิจคุณล่ะ Online แล้วหรือยัง อย่าปล่อยให้ลูกค้าลอยนวล เช็คด่วนคุณมีเว็บไซต์แล้วหรือยัง<br>ในยุคที่ผู้บริโภคนิยมการเสริชหาสินค้าและบริการผ่านอินเตอร์เน็ต หากคุณไม่มีเว็บไซต์ไว้รองรับเท่ากับพลาด!<br>✔ มั่นคง ยั่งยืนเสมือนหนึ่งเราซื้อพื้นที่ออนไลน์ที่เป็นของเราโดยเฉพาะ<br>✔ สามารถดีไซน์ออกแบบให้เข้ากับสินค้าและธุรกิจของคุณ<br>✔ เพิ่มความน่าเชื่อถือให้ธุรกิจของคุณ<br>✔ รองรับการค้นหาจากผู้คนทั่วโลก<br>✔ ช่วยเปิดโอกาสในการขยายตลาดให้ก้าวไปสู่ระดับนานาชาติ<br></p>\";}', 'a:2:{s:2:\"en\";s:9:\"dummy.jpg\";s:2:\"th\";s:25:\"webdesign2_1572409917.jpg\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:865:\"<p>เปิดตัวบนโลกออนไลน์แบบกระชับ ไม่เยิ่นเย้อต้องใช้ Landing Page<br>หากคุณต้องการทำแคมเปญ หรือต้องการมีช่องทางติดต่อบนโลกออนไลน์อย่างง่าย ๆ ไม่ยุ่งยาก Landing Page คือคำตอบ<br>✔ มั่นคง ยั่งยืนกว่าแอปฯ โซเชียลมีเดียในกระแส<br>✔ เพิ่มความน่าเชื่อถือให้สินค้าและบริการ<br>✔ ใช้งานง่าย ไม่ยุ่งยาก<br>✔ ราคาย่อมเยา ไม่แพงอย่างที่คิด<br></p>\";}', 'a:2:{s:2:\"en\";s:41:\"สนใจทำ SEO กับเรา\";s:2:\"th\";s:60:\"สนใจทำเว็บไซต์กับเรา\";}', '2019-10-28 07:25:12', '2019-10-30 04:31:57', '0000-00-00 00:00:00'),
(7, 7, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:29:\"banner-consult_1572412621.jpg\";s:2:\"th\";s:29:\"banner-consult_1572412621.jpg\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:18:\"ico_consult_01.png\";s:2:\"th\";s:18:\"ico_consult_01.png\";}', 'a:2:{s:2:\"en\";s:22:\"img_on_nav_plan_01.jpg\";s:2:\"th\";s:22:\"img_on_nav_plan_01.jpg\";}', 'a:2:{s:2:\"en\";s:136:\"บริการให้คำแนะนำปรึกษา และวางแผนการตลาดออนไลน์\";s:2:\"th\";s:136:\"บริการให้คำแนะนำปรึกษา และวางแผนการตลาดออนไลน์\";}', 'a:2:{s:2:\"en\";s:124:\"บรการใหคำแนะนำปรกษา-และวางแผนการตลาดออนไลน\";s:2:\"th\";s:136:\"บริการให้คำแนะนำปรึกษา-และวางแผนการตลาดออนไลน์\";}', 'a:2:{s:2:\"en\";s:9:\"dummy.jpg\";s:2:\"th\";s:23:\"consult1_1572423104.jpg\";}', 'a:2:{s:2:\"en\";s:136:\"บริการให้คำแนะนำปรึกษา และวางแผนการตลาดออนไลน์\";s:2:\"th\";s:136:\"บริการให้คำแนะนำปรึกษา และวางแผนการตลาดออนไลน์\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:1182:\"<p>ด้วยประสบการณ์ในแวดวงดิจิทัลที่ Social Media Master ได้สั่งสมมา เราพร้อมช่วยวางระบบงานสื่อสารออนไลน์ให้ธุรกิจของคุณมีโครงการสร้างระเบียบแบบแผนการประชาสัมพันธ์อย่างตรงจุด เต็มประสิทธิภาพและได้ผลตอบรับที่ดีที่สุด เพื่อให้เป้าหมายของลูกค้าเป็นจริงได้อย่างมีประสิทธิภาพทีม Planing ของเราจะวิเคราะห์ธุรกิจของลูกค้าและคู่แข่ง เพื่อวางแผนสื่อการประชาสัมพันธ์ให้ครอบคลุมให้ประสิทธิภาพเต็มที่ภายใต้เป้าหมายที่ลูกค้าต้องการ<br></p>\";}', 'a:2:{s:2:\"en\";s:9:\"dummy.jpg\";s:2:\"th\";s:23:\"consult2_1572430907.jpg\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:728:\"<p>อัปเดตความคืบหน้าพร้อมปรับเปลี่ยนกลยุทธ์แบบเรียลไทม์<br>เราเชื่อมั่นในการทำงานที่สามารถวัดผลได้อย่างมีประสิทธิภาพ ฉะนั้นทุก ๆ การทำงานของเราจะมีการรายงานผลการดำเนินงานส่งตรงถึงมือลูกค้าเสมอ ๆ เพื่อให้ลูกค้าได้รับทราบถึงผลการทำงานแบบใกล้ชิดที่สุด<br></p>\";}', 'a:2:{s:2:\"en\";s:41:\"สนใจทำ SEO กับเรา\";s:2:\"th\";s:57:\"อยากขอคำแนะนำจากเรา\";}', '2019-10-28 07:29:51', '2019-10-30 10:21:47', '0000-00-00 00:00:00'),
(8, 8, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:16:\"ico_speak_01.png\";s:2:\"th\";s:16:\"ico_speak_01.png\";}', 'a:2:{s:2:\"en\";s:25:\"img_on_nav_speaker_01.jpg\";s:2:\"th\";s:25:\"img_on_nav_speaker_01.jpg\";}', 'a:2:{s:2:\"en\";s:7:\"Speaker\";s:2:\"th\";s:63:\"วิทยากรการตลาดออนไลน์\";}', 'a:2:{s:2:\"en\";s:7:\"speaker\";s:2:\"th\";s:63:\"วิทยากรการตลาดออนไลน์\";}', 'a:2:{s:2:\"en\";s:9:\"dummy.jpg\";s:2:\"th\";s:21:\"speech_1572260392.jpg\";}', 'a:2:{s:2:\"en\";s:7:\"Speaker\";s:2:\"th\";s:63:\"วิทยากรการตลาดออนไลน์\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:1066:\"<p>เพราะทุกลมหายใจของเราคือโลกออนไลน์! กว่า 10 ปีที่เรายืนหยัดอยู่บนโลกดิจิทัล เราได้สั่งสมประสบการณ์มาอย่างยาวนาน วันนี้ โซเชียล มีเดีย มาสเตอร์ และทีมงานผู้เชี่ยวชาญพร้อมแล้วที่จะตกผลึกประสบการณ์และความรู้เรื่องการตลาดออนไลน์ ให้ผู้สนใจได้เก็บเกี่ยวความรู้พื้oฐานและเทคนิคจากการทำงานจริงไปประยุกต์ใช้กับธุรกิจและองค์กรของคุณเพื่อให้มีประสิทธิภาพมากยิ่งกว่าที่เคย<br></p>\";}', 'a:2:{s:2:\"en\";s:9:\"dummy.jpg\";s:2:\"th\";s:9:\"dummy.jpg\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:775:\"<p>ทีมงาน Social Media Master พร้อมแล้วที่จะปอกหมดเปลือกทุกเรื่องในโลกออนไลน์ไม่ว่าจะเป็น<br>✔ การวางแผนการตลาดออนไลน์<br>✔ การทำการตลาดผ่านเฟซบุ๊ก<br>✔ การทำการตลาดผ่าน Google<br>✔ การวางแผนการตลาดสำหรับสตาร์ทอัพ<br>✔ การทำการตลาดผ่านระบบการค้นหา<br>✔ การออกแบบ ดีไซน์ ให้โดนใจลูกค้า แถมยังถูกใจ Google<br></p>\";}', 'a:2:{s:2:\"en\";s:41:\"สนใจทำ SEO กับเรา\";s:2:\"th\";s:57:\"ติดต่อวิทยากรของเรา\";}', '2019-10-28 08:11:46', '2019-10-28 10:59:52', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `service_ports`
--

CREATE TABLE `service_ports` (
  `id` int(11) NOT NULL,
  `sort` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `img` text CHARACTER SET utf8 NOT NULL,
  `img_title_alt` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `service_ports`
--

INSERT INTO `service_ports` (`id`, `sort`, `service_id`, `img`, `img_title_alt`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 4, 'a:2:{s:2:\"en\";s:21:\"amoney_1572330086.png\";s:2:\"th\";s:22:\"amoney_15723300861.png\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', '2019-10-02 09:16:29', '2019-10-29 06:21:26', NULL),
(5, 2, 4, 'a:2:{s:2:\"en\";s:17:\"fi_1572330130.png\";s:2:\"th\";s:18:\"fi_15723301301.png\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', '2019-10-02 09:16:29', '2019-10-29 06:22:10', NULL),
(6, 3, 4, 'a:2:{s:2:\"en\";s:18:\"pmn_1572330349.png\";s:2:\"th\";s:19:\"pmn_15723303491.png\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', '2019-10-02 09:16:29', '2019-10-29 06:25:49', NULL),
(7, 4, 4, 'a:2:{s:2:\"en\";s:21:\"kansad_1572330178.png\";s:2:\"th\";s:22:\"kansad_15723301781.png\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', '2019-10-02 09:16:29', '2019-10-29 06:22:58', NULL),
(8, 5, 4, 'a:2:{s:2:\"en\";s:21:\"unicef_1572330325.png\";s:2:\"th\";s:22:\"unicef_15723303251.png\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', '2019-10-02 09:16:29', '2019-10-29 06:25:25', NULL),
(9, 6, 4, 'a:2:{s:2:\"en\";s:21:\"pantip_1572330373.png\";s:2:\"th\";s:22:\"pantip_15723303731.png\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', '2019-10-02 09:16:29', '2019-10-29 06:26:13', NULL),
(10, 1, 1, 'a:2:{s:2:\"en\";s:23:\"chabuton_1572232250.png\";s:2:\"th\";s:24:\"chabuton_15722322501.png\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', '2019-10-02 09:16:29', '2019-10-28 03:10:51', NULL),
(11, 2, 1, 'a:2:{s:2:\"en\";s:17:\"fi_1572232886.png\";s:2:\"th\";s:18:\"fi_15722328861.png\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', '2019-10-02 09:16:29', '2019-10-28 03:21:26', NULL),
(12, 3, 1, 'a:2:{s:2:\"en\";s:18:\"pmn_1572233199.png\";s:2:\"th\";s:19:\"pmn_15722331991.png\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', '2019-10-02 09:16:29', '2019-10-28 03:26:39', NULL),
(13, 4, 1, 'a:2:{s:2:\"en\";s:21:\"amoney_1572233491.png\";s:2:\"th\";s:22:\"amoney_15722334911.png\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', '2019-10-02 09:16:29', '2019-10-28 03:31:31', NULL),
(14, 5, 1, 'a:2:{s:2:\"en\";s:20:\"tokyu_1572233647.png\";s:2:\"th\";s:21:\"tokyu_15722336471.png\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', '2019-10-02 09:16:29', '2019-10-28 03:34:07', NULL),
(16, 1, 2, 'a:2:{s:2:\"en\";N;s:2:\"th\";s:36:\"6c1f8b1b304ced90ffa076fbd3b3b503.jpg\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', '2019-10-02 09:16:29', '2019-10-25 04:24:36', NULL),
(18, 3, 2, 'a:2:{s:2:\"en\";s:36:\"7a042343b246c125cc3770c22809a0f4.jpg\";s:2:\"th\";s:36:\"84be606a917a3cc431ef45d7100a2208.jpg\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', '2019-10-02 09:16:29', '2019-10-25 04:25:21', NULL),
(19, 4, 2, 'a:2:{s:2:\"en\";s:36:\"bd61e1f91baaea7be7b7cb0bc7425726.jpg\";s:2:\"th\";s:36:\"47dedc694a317cc3c4fda5ce0eb1a569.jpg\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', '2019-10-02 09:16:29', '2019-10-25 04:26:03', NULL),
(20, 5, 2, 'a:2:{s:2:\"en\";s:36:\"496278ad03866943e49b2eadd7acc312.jpg\";s:2:\"th\";s:36:\"0ae03ea1c54a1f1f239eb2410582edc6.jpg\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', '2019-10-02 09:16:29', '2019-10-25 04:26:36', NULL),
(25, 2, 3, 'a:2:{s:2:\"en\";s:23:\"chabuton_1572322416.png\";s:2:\"th\";s:24:\"chabuton_15723224161.png\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', '2019-10-02 09:16:29', '2019-10-29 04:13:36', NULL),
(26, 1, 3, 'a:2:{s:2:\"en\";s:18:\"pmn_1572322443.png\";s:2:\"th\";s:19:\"pmn_15723224431.png\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', '2019-10-02 09:16:29', '2019-10-29 04:14:03', NULL),
(28, 1, 5, 'a:2:{s:2:\"en\";s:21:\"pantip_1572333810.png\";s:2:\"th\";s:22:\"pantip_15723338101.png\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', '2019-10-02 09:16:29', '2019-10-29 07:23:30', NULL),
(29, 2, 5, 'a:2:{s:2:\"en\";s:17:\"fi_1572334075.png\";s:2:\"th\";s:18:\"fi_15723340751.png\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', '2019-10-02 09:16:29', '2019-10-29 07:27:55', NULL),
(30, 3, 5, 'a:2:{s:2:\"en\";s:23:\"chabuton_1572333859.png\";s:2:\"th\";s:24:\"chabuton_15723338591.png\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', '2019-10-02 09:16:29', '2019-10-29 07:24:19', NULL),
(31, 4, 5, 'a:2:{s:2:\"en\";s:18:\"pmn_1572333879.png\";s:2:\"th\";s:19:\"pmn_15723338791.png\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', '2019-10-02 09:16:29', '2019-10-29 07:24:39', NULL),
(34, 1, 6, 'a:2:{s:2:\"en\";s:18:\"pmn_1572336377.png\";s:2:\"th\";s:19:\"pmn_15723363771.png\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', '2019-10-02 09:16:29', '2019-10-29 08:06:17', NULL),
(35, 4, 6, 'a:2:{s:2:\"en\";s:22:\"aluinch_1572336395.png\";s:2:\"th\";s:23:\"aluinch_15723363951.png\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', '2019-10-02 09:16:29', '2019-10-29 08:06:35', NULL),
(36, 2, 6, 'a:2:{s:2:\"en\";s:17:\"fi_1572336460.png\";s:2:\"th\";s:18:\"fi_15723364601.png\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', '2019-10-02 09:16:29', '2019-10-29 08:07:40', NULL),
(37, 3, 6, 'a:2:{s:2:\"en\";s:22:\"pochana_1572336596.png\";s:2:\"th\";s:23:\"pochana_15723365961.png\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', '2019-10-02 09:16:29', '2019-10-29 08:09:56', NULL),
(38, 5, 6, 'a:2:{s:2:\"en\";s:18:\"mcu_1572337086.png\";s:2:\"th\";s:19:\"mcu_15723370861.png\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', '2019-10-02 09:16:29', '2019-10-29 08:18:06', NULL),
(39, 6, 6, 'a:2:{s:2:\"en\";s:21:\"impact_1572337148.png\";s:2:\"th\";s:22:\"impact_15723371481.png\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', '2019-10-02 09:16:29', '2019-10-29 08:19:08', NULL),
(40, 1, 7, 'a:2:{s:2:\"en\";s:13:\"portfolio.png\";s:2:\"th\";s:13:\"portfolio.png\";}', '', '2019-10-02 09:16:29', '2019-10-15 00:47:42', NULL),
(41, 2, 7, 'a:2:{s:2:\"en\";s:13:\"portfolio.png\";s:2:\"th\";s:13:\"portfolio.png\";}', '', '2019-10-02 09:16:29', '2019-10-15 00:47:42', NULL),
(42, 3, 7, 'a:2:{s:2:\"en\";s:13:\"portfolio.png\";s:2:\"th\";s:13:\"portfolio.png\";}', '', '2019-10-02 09:16:29', '2019-10-15 00:47:42', NULL),
(43, 4, 7, 'a:2:{s:2:\"en\";s:13:\"portfolio.png\";s:2:\"th\";s:13:\"portfolio.png\";}', '', '2019-10-02 09:16:29', '2019-10-15 00:47:42', NULL),
(44, 5, 7, 'a:2:{s:2:\"en\";s:13:\"portfolio.png\";s:2:\"th\";s:13:\"portfolio.png\";}', '', '2019-10-02 09:16:29', '2019-10-15 00:47:42', NULL),
(45, 6, 7, 'a:2:{s:2:\"en\";s:13:\"portfolio.png\";s:2:\"th\";s:13:\"portfolio.png\";}', '', '2019-10-02 09:16:29', '2019-10-15 00:47:42', NULL),
(52, 0, 2, 'a:2:{s:2:\"en\";s:36:\"e453f4b9a049272659aabc1d56e74db1.jpg\";s:2:\"th\";s:36:\"205125b701b648fc14a6a03fdc62da30.jpg\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', '2019-10-25 07:45:43', NULL, NULL),
(53, 0, 2, 'a:2:{s:2:\"en\";s:17:\"fi_1572233825.png\";s:2:\"th\";s:18:\"fi_15722338251.png\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', '2019-10-28 03:37:05', NULL, NULL),
(54, 0, 2, 'a:2:{s:2:\"en\";s:18:\"pmn_1572233895.png\";s:2:\"th\";s:19:\"pmn_15722338951.png\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', '2019-10-28 03:38:15', NULL, NULL),
(55, 0, 1, 'a:2:{s:2:\"en\";s:21:\"unicef_1572234389.png\";s:2:\"th\";s:22:\"unicef_15722343891.png\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', '2019-10-28 03:46:29', NULL, NULL),
(56, 0, 1, 'a:2:{s:2:\"en\";s:23:\"profreez_1572235154.png\";s:2:\"th\";s:24:\"profreez_15722351541.png\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', '2019-10-28 03:59:14', NULL, NULL),
(57, 3, 3, 'a:2:{s:2:\"en\";s:21:\"pantip_1572322991.png\";s:2:\"th\";s:22:\"pantip_15723229911.png\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', '2019-10-29 04:23:11', NULL, NULL),
(58, 4, 3, 'a:2:{s:2:\"en\";s:21:\"kansad_1572323194.png\";s:2:\"th\";s:22:\"kansad_15723231941.png\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', '2019-10-29 04:26:34', NULL, NULL),
(59, 5, 3, 'a:2:{s:2:\"en\";s:22:\"pochana_1572323324.png\";s:2:\"th\";s:23:\"pochana_15723233241.png\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', '2019-10-29 04:28:44', NULL, NULL),
(60, 0, 4, 'a:2:{s:2:\"en\";s:22:\"aluinch_1572332024.png\";s:2:\"th\";s:23:\"aluinch_15723320241.png\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', '2019-10-29 06:53:44', NULL, NULL),
(61, 0, 4, 'a:2:{s:2:\"en\";s:20:\"lalin_1572332345.png\";s:2:\"th\";s:21:\"lalin_15723323451.png\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', '2019-10-29 06:59:05', NULL, NULL),
(62, 0, 4, 'a:2:{s:2:\"en\";s:17:\"wu_1572333136.png\";s:2:\"th\";s:18:\"wu_15723331361.png\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', '2019-10-29 07:12:16', NULL, NULL),
(63, 0, 1, 'a:2:{s:2:\"en\";s:18:\"dhl_1572334027.png\";s:2:\"th\";s:19:\"dhl_15723340271.png\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', '2019-10-29 07:27:07', NULL, NULL),
(64, 0, 6, 'a:2:{s:2:\"en\";s:24:\"theptarin_1572341769.png\";s:2:\"th\";s:25:\"theptarin_15723417691.png\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', '2019-10-29 08:22:51', '2019-10-29 09:36:09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(11) NOT NULL,
  `sort` int(11) NOT NULL,
  `title` text NOT NULL,
  `body` text NOT NULL,
  `image` text NOT NULL,
  `image_hover` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `sort`, `title`, `body`, `image`, `image_hover`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'a:2:{s:2:\"en\";s:22:\"Kriangkrai Nilkamhaeng\";s:2:\"th\";s:22:\"Kriangkrai Nilkamhaeng\";}', 'a:2:{s:2:\"en\";s:13:\"CEO / Founder\";s:2:\"th\";s:13:\"CEO / Founder\";}', 'a:2:{s:2:\"en\";s:18:\"img-kriangkrai.jpg\";s:2:\"th\";s:18:\"img-kriangkrai.jpg\";}', 'a:2:{s:2:\"en\";s:18:\"img-kriangkrai.jpg\";s:2:\"th\";s:18:\"img-kriangkrai.jpg\";}', '2019-10-18 04:01:07', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 2, 'a:2:{s:2:\"en\";s:19:\"Krissana Wimoonchad\";s:2:\"th\";s:19:\"Krissana Wimoonchad\";}', 'a:2:{s:2:\"en\";s:27:\"Assistant Managing Director\";s:2:\"th\";s:27:\"Assistant Managing Director\";}', 'a:2:{s:2:\"en\";s:16:\"img-krissana.jpg\";s:2:\"th\";s:16:\"img-krissana.jpg\";}', 'a:2:{s:2:\"en\";s:16:\"img-krissana.jpg\";s:2:\"th\";s:16:\"img-krissana.jpg\";}', '2019-10-18 04:01:07', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 3, 'a:2:{s:2:\"en\";s:19:\"Juthamas Sattayapun\";s:2:\"th\";s:19:\"Juthamas Sattayapun\";}', 'a:2:{s:2:\"en\";s:15:\"Project Manager\";s:2:\"th\";s:15:\"Project Manager\";}', 'a:2:{s:2:\"en\";s:16:\"img-juthamas.jpg\";s:2:\"th\";s:16:\"img-juthamas.jpg\";}', 'a:2:{s:2:\"en\";s:16:\"img-juthamas.jpg\";s:2:\"th\";s:16:\"img-juthamas.jpg\";}', '2019-10-18 04:14:25', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 4, 'a:2:{s:2:\"en\";s:18:\"Kittichai Rungjang\";s:2:\"th\";s:18:\"Kittichai Rungjang\";}', 'a:2:{s:2:\"en\";s:15:\"Project Manager\";s:2:\"th\";s:15:\"Project Manager\";}', 'a:2:{s:2:\"en\";s:12:\"img-palm.jpg\";s:2:\"th\";s:12:\"img-palm.jpg\";}', 'a:2:{s:2:\"en\";s:12:\"img-palm.jpg\";s:2:\"th\";s:12:\"img-palm.jpg\";}', '2019-10-28 02:48:50', '2019-10-28 02:48:50', '0000-00-00 00:00:00'),
(6, 5, 'a:2:{s:2:\"en\";s:18:\"Visara Srivarasand\";s:2:\"th\";s:18:\"Visara Srivarasand\";}', 'a:2:{s:2:\"en\";s:23:\"HR & Accounting Officer\";s:2:\"th\";s:23:\"HR & Accounting Officer\";}', 'a:2:{s:2:\"en\";s:10:\"img-vi.jpg\";s:2:\"th\";s:10:\"img-vi.jpg\";}', 'a:2:{s:2:\"en\";s:10:\"img-vi.jpg\";s:2:\"th\";s:10:\"img-vi.jpg\";}', '2019-10-28 02:52:18', '2019-10-28 02:52:18', '0000-00-00 00:00:00'),
(7, 6, 'a:2:{s:2:\"en\";s:19:\"Lertnapa Na-rangsri\";s:2:\"th\";s:19:\"Lertnapa Na-rangsri\";}', 'a:2:{s:2:\"en\";s:22:\"Senior Content Officer\";s:2:\"th\";s:22:\"Senior Content Officer\";}', 'a:2:{s:2:\"en\";s:11:\"img-pae.jpg\";s:2:\"th\";s:11:\"img-pae.jpg\";}', 'a:2:{s:2:\"en\";s:11:\"img-pae.jpg\";s:2:\"th\";s:11:\"img-pae.jpg\";}', '2019-10-28 02:54:53', '2019-10-28 02:54:53', '0000-00-00 00:00:00'),
(8, 7, 'a:2:{s:2:\"en\";s:21:\"Ratthachai Premprakin\";s:2:\"th\";s:21:\"Ratthachai Premprakin\";}', 'a:2:{s:2:\"en\";s:15:\"Content Creator\";s:2:\"th\";s:15:\"Content Creator\";}', 'a:2:{s:2:\"en\";s:11:\"img-wan.jpg\";s:2:\"th\";s:11:\"img-wan.jpg\";}', 'a:2:{s:2:\"en\";s:11:\"img-wan.jpg\";s:2:\"th\";s:11:\"img-wan.jpg\";}', '2019-10-28 02:56:01', '2019-10-28 02:56:01', '0000-00-00 00:00:00'),
(9, 8, 'a:2:{s:2:\"en\";s:19:\"Wittawat Rakkhantho\";s:2:\"th\";s:19:\"Wittawat Rakkhantho\";}', 'a:2:{s:2:\"en\";s:16:\"Graphic-Designer\";s:2:\"th\";s:16:\"Graphic-Designer\";}', 'a:2:{s:2:\"en\";s:13:\"img-grece.jpg\";s:2:\"th\";s:13:\"img-grece.jpg\";}', 'a:2:{s:2:\"en\";s:13:\"img-grece.jpg\";s:2:\"th\";s:13:\"img-grece.jpg\";}', '2019-10-28 02:53:25', '2019-10-28 02:53:25', '0000-00-00 00:00:00'),
(10, 9, 'a:2:{s:2:\"en\";s:16:\"Bang-on Khothuy \";s:2:\"th\";s:16:\"Bang-on Khothuy \";}', 'a:2:{s:2:\"en\";s:16:\"Graphic Designer\";s:2:\"th\";s:16:\"Graphic Designer\";}', 'a:2:{s:2:\"en\";s:12:\"img-bumm.jpg\";s:2:\"th\";s:12:\"img-bumm.jpg\";}', 'a:2:{s:2:\"en\";s:12:\"img-bumm.jpg\";s:2:\"th\";s:12:\"img-bumm.jpg\";}', '2019-10-28 02:51:45', '2019-10-28 02:51:45', '0000-00-00 00:00:00'),
(11, 10, 'a:2:{s:2:\"en\";s:22:\"Kirati Aussawatummarat\";s:2:\"th\";s:22:\"Kirati Aussawatummarat\";}', 'a:2:{s:2:\"en\";s:14:\"Seo Specialist\";s:2:\"th\";s:14:\"Seo Specialist\";}', 'a:2:{s:2:\"en\";s:13:\"img-nicky.jpg\";s:2:\"th\";s:13:\"img-nicky.jpg\";}', 'a:2:{s:2:\"en\";s:13:\"img-nicky.jpg\";s:2:\"th\";s:13:\"img-nicky.jpg\";}', '2019-10-28 02:55:26', '2019-10-28 02:55:26', '0000-00-00 00:00:00'),
(13, 11, 'a:2:{s:2:\"en\";s:17:\"Natthida Ngamkhum\";s:2:\"th\";s:17:\"Natthida Ngamkhum\";}', 'a:2:{s:2:\"en\";s:15:\"Content Creator\";s:2:\"th\";s:15:\"Content Creator\";}', 'a:2:{s:2:\"en\";s:11:\"img-nat.jpg\";s:2:\"th\";s:11:\"img-nat.jpg\";}', 'a:2:{s:2:\"en\";s:11:\"img-nat.jpg\";s:2:\"th\";s:11:\"img-nat.jpg\";}', '2019-10-28 02:54:15', '2019-10-28 02:54:15', '0000-00-00 00:00:00');

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
(1, 'a:2:{s:2:\"en\";s:18:\"Teams | social.com\";s:2:\"th\";s:22:\"ทีม | social.com\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', '2019-10-02 09:16:29', '2019-10-15 00:50:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` text NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'spadmin', '$2y$10$ZFYrWY4cThYRqh7oilxwae9OQzpX48O3U41wm.xwsHdN78NRHrUU2', 1, '2019-08-14 08:23:55', NULL, NULL),
(2, 'admin', '$2y$10$gup248FaYX4Obb.t23qbT.Wo8xIifMO7kZQmDRcX0uJdvCpzOjvjq', 2, '2019-10-08 09:39:07', '2019-10-15 02:45:19', NULL),
(3, 'khun', '$2y$10$barSRj6dErpHvkgNNe.V9OzmNmr8gZGszHnTPP58Dbyb07aKfjiMC', 2, '2019-10-08 09:39:14', '2019-10-09 05:05:47', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_page`
--
ALTER TABLE `about_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner_pages`
--
ALTER TABLE `banner_pages`
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
-- Indexes for table `blog_page`
--
ALTER TABLE `blog_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `career_contacts`
--
ALTER TABLE `career_contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `career_galleries`
--
ALTER TABLE `career_galleries`
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
-- Indexes for table `join_us_page`
--
ALTER TABLE `join_us_page`
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
-- Indexes for table `service_ports`
--
ALTER TABLE `service_ports`
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
-- AUTO_INCREMENT for table `banner_pages`
--
ALTER TABLE `banner_pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `blog_page`
--
ALTER TABLE `blog_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `career_contacts`
--
ALTER TABLE `career_contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `career_galleries`
--
ALTER TABLE `career_galleries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;
--
-- AUTO_INCREMENT for table `client_categories`
--
ALTER TABLE `client_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `client_page`
--
ALTER TABLE `client_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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
-- AUTO_INCREMENT for table `join_us_page`
--
ALTER TABLE `join_us_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=573;
--
-- AUTO_INCREMENT for table `log_events`
--
ALTER TABLE `log_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `service_ports`
--
ALTER TABLE `service_ports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `team_page`
--
ALTER TABLE `team_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
