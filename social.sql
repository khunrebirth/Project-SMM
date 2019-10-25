-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 25, 2019 at 02:20 AM
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
(1, 'a:2:{s:2:\"en\";s:18:\"About | social.com\";s:2:\"th\";s:49:\"เกี่ยวกับเรา | social.com\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:539:\"เราคือเอเจนซี่ออนไลน์ที่มีประสบการณ์ในสายงานดิจิทัลพร้อมด้วยบริการการตลาดที่หลากหลายอย่างครบวงจรกว่า 4 ล้านแฟนเพจที่เราดูแล กว่า 300 ล้าน impression ที่เราสร้าง ผู้เทนด์ โซเซียลมีเดีย ในประเทศไทย..\";s:2:\"th\";s:539:\"เราคือเอเจนซี่ออนไลน์ที่มีประสบการณ์ในสายงานดิจิทัลพร้อมด้วยบริการการตลาดที่หลากหลายอย่างครบวงจรกว่า 4 ล้านแฟนเพจที่เราดูแล กว่า 300 ล้าน impression ที่เราสร้าง ผู้เทนด์ โซเซียลมีเดีย ในประเทศไทย..\";}', 'a:2:{s:2:\"en\";s:1218:\"<p class=\"lead about__split--title--body mt-4 mb-4\">                     <strong style=\"line-height: 2.5;\">เป้าหมายของเรา</strong> <br>                     เรามีความมุ่งมั่นที่จะวางแผนการตลาดออนไลน์ที่ดีที่สุดเพื่อให้ลูกค้าของเราบรรลุวัตถุประสงค์ที่ตั้งไว้  ด้วยการวางกลยุทธ์ที่ผ่านการคิดวิเคราะห์หากลุ่มลูกค้าที่ตรงจุดกับธุรกิจของคุณ                     <br><br>                     นอกจากจากวางแผนการตลาดออนไลน์แล้วเรายังทำงานร่วมกันกับลูกค้าเพื่อให้คำแนะนำและปรึกษาใน การวางแนวทางสื่ออนไลน์ให้ได้ผลลัพธ์ที่คุ้มค่าที่สุดอีกด้วย                 </p>\";s:2:\"th\";s:1218:\"<p class=\"lead about__split--title--body mt-4 mb-4\">                     <strong style=\"line-height: 2.5;\">เป้าหมายของเรา</strong> <br>                     เรามีความมุ่งมั่นที่จะวางแผนการตลาดออนไลน์ที่ดีที่สุดเพื่อให้ลูกค้าของเราบรรลุวัตถุประสงค์ที่ตั้งไว้  ด้วยการวางกลยุทธ์ที่ผ่านการคิดวิเคราะห์หากลุ่มลูกค้าที่ตรงจุดกับธุรกิจของคุณ                     <br><br>                     นอกจากจากวางแผนการตลาดออนไลน์แล้วเรายังทำงานร่วมกันกับลูกค้าเพื่อให้คำแนะนำและปรึกษาใน การวางแนวทางสื่ออนไลน์ให้ได้ผลลัพธ์ที่คุ้มค่าที่สุดอีกด้วย                 </p>\";}', 'a:2:{s:2:\"en\";s:9:\"about.jpg\";s:2:\"th\";s:9:\"about.jpg\";}', '2019-10-02 09:16:29', '2019-10-17 19:50:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `banner_pages`
--

CREATE TABLE `banner_pages` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `page` text NOT NULL,
  `img` text NOT NULL,
  `img_title_alt` text NOT NULL,
  `bottom` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `banner_pages`
--

INSERT INTO `banner_pages` (`id`, `title`, `page`, `img`, `img_title_alt`, `bottom`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'a:2:{s:2:\"en\";s:8:\"Services\";s:2:\"th\";s:18:\"บริการ\";}', 'a:2:{s:2:\"en\";s:8:\"services\";s:2:\"th\";s:18:\"บริการ\";}', 'a:2:{s:2:\"en\";s:14:\"banner-seo.jpg\";s:2:\"th\";s:14:\"banner-seo.jpg\";}', 'a:2:{s:2:\"en\";s:14:\"banner-seo.jpg\";s:2:\"th\";s:14:\"banner-seo.jpg\";}', '', '2019-10-25 02:17:22', '2019-10-24 19:17:22', '0000-00-00 00:00:00'),
(2, 'a:2:{s:2:\"en\";s:7:\"Clients\";s:2:\"th\";s:36:\"ลูกค้าของเรา\";}', 'a:2:{s:2:\"en\";s:7:\"clients\";s:2:\"th\";s:36:\"ลูกค้าของเรา\";}', 'a:2:{s:2:\"en\";s:12:\"slider-1.jpg\";s:2:\"th\";s:12:\"slider-1.jpg\";}', 'a:2:{s:2:\"en\";s:12:\"slider-1.jpg\";s:2:\"th\";s:12:\"slider-1.jpg\";}', '', '2019-10-25 02:10:36', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'a:2:{s:2:\"en\";s:5:\"Blogs\";s:2:\"th\";s:18:\"บทความ\";}', 'a:2:{s:2:\"en\";s:5:\"blogs\";s:2:\"th\";s:18:\"บทความ\";}', 'a:2:{s:2:\"en\";s:12:\"slider-1.jpg\";s:2:\"th\";s:12:\"slider-1.jpg\";}', 'a:2:{s:2:\"en\";s:12:\"slider-1.jpg\";s:2:\"th\";s:12:\"slider-1.jpg\";}', '', '2019-10-25 02:10:54', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'a:2:{s:2:\"en\";s:5:\"Teams\";s:2:\"th\";s:18:\"ทีมงาน\";}', 'a:2:{s:2:\"en\";s:5:\"teams\";s:2:\"th\";s:9:\"ทีม\";}', 'a:2:{s:2:\"en\";s:15:\"banner-team.jpg\";s:2:\"th\";s:15:\"banner-team.jpg\";}', 'a:2:{s:2:\"en\";s:15:\"banner-team.jpg\";s:2:\"th\";s:15:\"banner-team.jpg\";}', '', '2019-10-25 02:11:07', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'a:2:{s:2:\"en\";s:10:\"Contact us\";s:2:\"th\";s:27:\"ติดต่อเรา\";}', 'a:2:{s:2:\"en\";s:7:\"contact\";s:2:\"th\";s:18:\"ติดต่อ\";}', 'a:2:{s:2:\"en\";s:12:\"slider-1.jpg\";s:2:\"th\";s:12:\"slider-1.jpg\";}', 'a:2:{s:2:\"en\";s:12:\"slider-1.jpg\";s:2:\"th\";s:12:\"slider-1.jpg\";}', '', '2019-10-25 02:11:22', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'a:2:{s:2:\"en\";s:14:\"Thank you page\";s:2:\"th\";s:18:\"ขอบคุณ\";}', 'a:2:{s:2:\"en\";s:6:\"thanks\";s:2:\"th\";s:18:\"ขอบคุณ\";}', 'a:2:{s:2:\"en\";s:12:\"slider-1.jpg\";s:2:\"th\";s:12:\"slider-1.jpg\";}', 'a:2:{s:2:\"en\";s:12:\"slider-1.jpg\";s:2:\"th\";s:12:\"slider-1.jpg\";}', '', '2019-10-25 02:11:42', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
(1, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:18:\"example-blog-1.jpg\";s:2:\"th\";s:36:\"57e0bafbe755c9058b326c2a458f482f.jpg\";}', '', 'a:2:{s:2:\"en\";s:74:\"สื่อสารกับผู้คนผ่าน Facebook Stories\";s:2:\"th\";s:74:\"สื่อสารกับผู้คนผ่าน Facebook Stories\";}', 'a:2:{s:2:\"en\";s:56:\"สอสารกบผคนผาน-facebook-stories\";s:2:\"th\";s:74:\"สื่อสารกับผู้คนผ่าน-facebook-stories\";}', 'a:2:{s:2:\"en\";s:478:\"ฟีเจอร์ Stories ของทาง Facebook เพิ่งจะมีการเพิ่มเข้ามาเมื่อไม่นานแต่กลับไม่เป็นที่นิยมเหมือนกับ Stories ของฝั่ง Instagram ที่มีมาก่อน แต่ในช่วงระยะหลังมานี้มีผู้ใช้งาน Facebook Stories เพิ่มขึ้นมาก\";s:2:\"th\";s:478:\"ฟีเจอร์ Stories ของทาง Facebook เพิ่งจะมีการเพิ่มเข้ามาเมื่อไม่นานแต่กลับไม่เป็นที่นิยมเหมือนกับ Stories ของฝั่ง Instagram ที่มีมาก่อน แต่ในช่วงระยะหลังมานี้มีผู้ใช้งาน Facebook Stories เพิ่มขึ้นมาก\";}', 'a:2:{s:2:\"en\";s:2602:\"<div>ฟีเจอร์ Stories ของทาง Facebook เพิ่งจะมีการเพิ่มเข้ามาเมื่อไม่นานแต่กลับไม่เป็นที่นิยมเหมือนกับ Stories ของฝั่ง Instagram ที่มีมาก่อน แต่ในช่วงระยะหลังมานี้มีผู้ใช้งาน Facebook Stories เพิ่มขึ้นมาก<br><br></div><div>Facebook Stories เป็นช่องทางช่วยให้ธุรกิจของเราเข้าถึงผู้คนได้มากขึ้น โดยรูปแบบการโฆษณาจะเป็นแบบเต็มหน้าจอที่ช่วยให้ผู้คนดูและแชร์ช่วงเวลาผ่านรูปภาพและวิดีโอซึ่งจะหายไป หลังครบ 24 ชั่วโมง รูปภาพจะแสดงเป็นเวลา 6 วินาทีและวิดีโอจะแสดงสูงสุดเป็นเวลา 15 วินาที แล้วเรายังสามารถใช้ตัวจัดการโฆษณาหรือ API เพื่อสร้างโฆษณาได้ และได้มีการสำรวจจาก Ipsos ว่าผู้คนจำนวน 62% กล่าวว่าพวกเขาสนใจแบรนด์หรือผลิตภัณฑ์มากขึ้นหลังจากได้เห็นโฆษณาใน Facebook Stories&nbsp;<br><br></div><div>จากแค่เคยโพสต์ content หน้าฟีดเพียงอย่างเดียว ลองเพิ่มโฆษณาใน Facebook Stories เข้าไปอาจจะทำให้เข้าถึงกลุ่มลูกค้าเพิ่มมากขึ้นและยังสามารถสร้างการรับรู้แบรนด์ได้อีกช่องทางหนึง&nbsp;</div><div>หากมีข้อสงสัยหรือต้องการข้อมูลเพิ่มเติมสามารถติดต่อ Social Media Master ได้เลยนะคะ เพราะเราพร้อมที่จะให้คำปรึกษาด้าน Online Marketing ทุกรูปแบบอยู่แล้ว</div><div><br></div>\";s:2:\"th\";s:2594:\"<div>ฟีเจอร์ Stories ของทาง Facebook เพิ่งจะมีการเพิ่มเข้ามาเมื่อไม่นานแต่กลับไม่เป็นที่นิยมเหมือนกับ Stories ของฝั่ง Instagram ที่มีมาก่อน แต่ในช่วงระยะหลังมานี้มีผู้ใช้งาน Facebook Stories เพิ่มขึ้นมาก<br><br></div><div>Facebook Stories เป็นช่องทางช่วยให้ธุรกิจของเราเข้าถึงผู้คนได้มากขึ้น โดยรูปแบบการโฆษณาจะเป็นแบบเต็มหน้าจอที่ช่วยให้ผู้คนดูและแชร์ช่วงเวลาผ่านรูปภาพและวิดีโอซึ่งจะหายไป หลังครบ 24 ชั่วโมง รูปภาพจะแสดงเป็นเวลา 6 วินาทีและวิดีโอจะแสดงสูงสุดเป็นเวลา 15 วินาที แล้วเรายังสามารถใช้ตัวจัดการโฆษณาหรือ API เพื่อสร้างโฆษณาได้ และได้มีการสำรวจจาก Ipsos ว่าผู้คนจำนวน 62% กล่าวว่าพวกเขาสนใจแบรนด์หรือผลิตภัณฑ์มากขึ้นหลังจากได้เห็นโฆษณาใน Facebook Stories <br><br></div><div>จากแค่เคยโพสต์ content หน้าฟีดเพียงอย่างเดียว ลองเพิ่มโฆษณาใน Facebook Stories เข้าไปอาจจะทำให้เข้าถึงกลุ่มลูกค้าเพิ่มมากขึ้นและยังสามารถสร้างการรับรู้แบรนด์ได้อีกช่องทางหนึง </div><div>หากมีข้อสงสัยหรือต้องการข้อมูลเพิ่มเติมสามารถติดต่อ Social Media Master ได้เลยนะคะ เพราะเราพร้อมที่จะให้คำปรึกษาด้าน Online Marketing ทุกรูปแบบอยู่แล้ว</div><div><br></div>\";}', 1, '2019-08-28 08:21:52', '2019-10-22 09:47:11', NULL),
(2, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:36:\"170a0efeee23d6406a8ba824c0518de2.jpg\";s:2:\"th\";s:36:\"e581225d9cbe079c3094ca921771d3f2.jpg\";}', '', 'a:2:{s:2:\"en\";s:62:\"IG Ads ตัวช่วยของการโฆษณา \";s:2:\"th\";s:62:\"IG Ads ตัวช่วยของการโฆษณา \";}', 'a:2:{s:2:\"en\";s:55:\"ig-ads-ตวบวยของการโฆษณา\";s:2:\"th\";s:62:\"ig-ads-ตัวบ่วยของการโฆษณา-\";}', 'a:2:{s:2:\"en\";s:295:\"IG Ads หรือ Instagram Ads เป็นบริการโฆษณาของทาง Instagram โดยจะมีค่าใช้จ่ายในการทำโฆษณาและมีรูปแบบการโฆษณาอยู่ประมาณ 4 แบบ \";s:2:\"th\";s:295:\"IG Ads หรือ Instagram Ads เป็นบริการโฆษณาของทาง Instagram โดยจะมีค่าใช้จ่ายในการทำโฆษณาและมีรูปแบบการโฆษณาอยู่ประมาณ 4 แบบ \";}', 'a:2:{s:2:\"en\";s:5341:\"<div>หลายคนคงใช้ IG ในการลงรูปสวย ๆ แชร์เรื่องราวต่าง ๆ ผ่านรูปภาพหรือ วิดีโอ หรือแม้กระทั่งเอาไว้ส่อง ผู้ชายหล่อ ๆ สาว ๆ สวย ๆ หรือเหล่าดาราที่เราชื่นชอบ แต่สำหรับพ่อค้าแม่ค้าหรือธุรกิจ เราเอาไว้โฆษณาขายสิน อัปเดตสินค้าใหม่ ๆ ไปจนถึงสร้างการรับรู้ของแบรนด์ผ่านคอนเท้นท์ต่าง ๆ&nbsp;</div><div>IG Ads หรือ Instagram Ads เป็นบริการโฆษณาของทาง Instagram โดยจะมีค่าใช้จ่ายในการทำโฆษณาและมีรูปแบบการโฆษณาอยู่ประมาณ 4 แบบ ได้แก่</div><div><b>1. โฆษณาแบบ Image Ads&nbsp;</b>รูปแบบของภาพ เป็นสีเหลี่ยมจตุรัส หรือ สีเหลี่ยมผืนผ้าสามารถเพิ่มปุ่มดำเนินการที่เชื่อมโยงไปยังเว็บไซต์ เพื่อให้เข้าถึงกลุ่มเป้าหมายหรือต้องการเพิ่มแค่ผู้ติดตามอย่างเดียวก็สามารถทำได้</div><div><b>2. โฆษณาแบบ Video ads&nbsp;</b>วิดีโอมีความยาวสูงสุดไม่เกิน 60 วินาทีได้ทั้งในรูปแบบแนวนอนและแนวตั้ง เป็นการโฆษณาที่น่าจดจำ เข้าถึงกลุ่มเป้าหมายได้ง่าย</div><div><b>3. โฆษณาใน Stories ads&nbsp;</b>โฆษณาที่เกิดจากฟีเจอร์ยอดฮิตของ Instagram โดยเราสามารถถ่ายรูปหรือวิดีโอพร้อมเพิ่มลูกเล่นต่าง ๆ ลงในนั้นได้ เช่น ใส่ข้อความ สติกเกอร์ วาดภาพ Hashtag หรือ Location ซึ่งเมื่อโพสต์ใน Instagram Stories แล้ว คอนเทนต์นั้นจะอยู่ได้ 24 ชั่วโมงก่อนหายไป&nbsp;</div><div><b>4. โฆษณาแบบ Carousel ads&nbsp;</b>เป็นโฆษณาแบบภาพสไลด์ที่เราสามารถโฆษณาทั้งรูปภาพและวีดีโอได้ในโฆษณาเดียว โดยเรียงต่อกันได้ 5 รูป เป็นรูปแบบการนำเสนอที่น่าสนใจไม่น้อยเลยทีเดียว</div><div><b>5. โฆษณาแบบ Slideshow Ads&nbsp;</b>โฆษณาแบบ Slideshow Ads บางคนออาจจะมองว่ามันเหมือนกับโฆษณาแบบ Carousel ads เพราะมันเป็นโฆษณาแบบภาพสไลด์เหมือนกันแต่มีความแตกต่างกันตรงที่แบบ Slideshow สามารถเพิ่มภาพและเพลงได้ถึง 10 ภาพเพื่อสร้างโฆษณาวิดีโอแบบวนซ้ำ</div><div><b>6. โฆษณาแบบ Lead Ads&nbsp;&nbsp;</b>เป็นโฆษณาแบบการรวบรวมข้อมูล เช่น ชื่อ, ที่อยู่, E-Mail หรือเบอร์โทรศัพท์ โดยเมื่อมีคนคลิกที่โฆษณาจะเด้งไปยังหน้าใหม่พร้อมแบบฟอร์มกรอกข้อมูล ซึ่งโฆษณานี่มีค่าใช้จ่ายที่สูง เหมาะกับธุรกิจแนวธนาคาร หรือ อสังหาริมทรัพย์ ที่ต้องการข้อมูลคนที่สนใจหรือที่จะเข้าร่วมด้วย<br><br></div><div>สำหรับใครที่คิดที่จะทำโฆษณาบน IG อยู่ก็ดูไปเป็นแนวทางในการเลือกช่องทางในการทำโฆษณาได้เลย แต่ถ้าหากมีข้อสงสัยในการทำโฆษณาสามารถติดต่อ Social Media Master ได้เลยนะคะ เพราะเราพร้อมที่จะให้คำปรึกษาด้าน Online Marketing ทุกรูปแบบอยู่แล้ว</div><div><br></div>\";s:2:\"th\";s:5591:\"<div>หลายคนคงใช้ IG ในการลงรูปสวย ๆ แชร์เรื่องราวต่าง ๆ ผ่านรูปภาพหรือ วิดีโอ หรือแม้กระทั่งเอาไว้ส่อง ผู้ชายหล่อ ๆ สาว ๆ สวย ๆ หรือเหล่าดาราที่เราชื่นชอบ แต่สำหรับพ่อค้าแม่ค้าหรือธุรกิจ เราเอาไว้โฆษณาขายสิน อัปเดตสินค้าใหม่ ๆ ไปจนถึงสร้างการรับรู้ของแบรนด์ผ่านคอนเท้นท์ต่าง ๆ&nbsp;</div><div>IG Ads หรือ Instagram Ads เป็นบริการโฆษณาของทาง Instagram โดยจะมีค่าใช้จ่ายในการทำโฆษณาและมีรูปแบบการโฆษณาอยู่ประมาณ 4 แบบ ได้แก่</div><div><span style=\"font-weight: bolder;\">1. โฆษณาแบบ Image Ads&nbsp;</span>รูปแบบของภาพ เป็นสีเหลี่ยมจตุรัส หรือ สีเหลี่ยมผืนผ้าสามารถเพิ่มปุ่มดำเนินการที่เชื่อมโยงไปยังเว็บไซต์ เพื่อให้เข้าถึงกลุ่มเป้าหมายหรือต้องการเพิ่มแค่ผู้ติดตามอย่างเดียวก็สามารถทำได้</div><div><span style=\"font-weight: bolder;\">2. โฆษณาแบบ Video ads&nbsp;</span>วิดีโอมีความยาวสูงสุดไม่เกิน 60 วินาทีได้ทั้งในรูปแบบแนวนอนและแนวตั้ง เป็นการโฆษณาที่น่าจดจำ เข้าถึงกลุ่มเป้าหมายได้ง่าย</div><div><span style=\"font-weight: bolder;\">3. โฆษณาใน Stories ads&nbsp;</span>โฆษณาที่เกิดจากฟีเจอร์ยอดฮิตของ Instagram โดยเราสามารถถ่ายรูปหรือวิดีโอพร้อมเพิ่มลูกเล่นต่าง ๆ ลงในนั้นได้ เช่น ใส่ข้อความ สติกเกอร์ วาดภาพ Hashtag หรือ Location ซึ่งเมื่อโพสต์ใน Instagram Stories แล้ว คอนเทนต์นั้นจะอยู่ได้ 24 ชั่วโมงก่อนหายไป&nbsp;</div><div><span style=\"font-weight: bolder;\">4. โฆษณาแบบ Carousel ads&nbsp;</span>เป็นโฆษณาแบบภาพสไลด์ที่เราสามารถโฆษณาทั้งรูปภาพและวีดีโอได้ในโฆษณาเดียว โดยเรียงต่อกันได้ 5 รูป เป็นรูปแบบการนำเสนอที่น่าสนใจไม่น้อยเลยทีเดียว</div><div><span style=\"font-weight: bolder;\">5. โฆษณาแบบ Slideshow Ads&nbsp;</span>โฆษณาแบบ Slideshow Ads บางคนออาจจะมองว่ามันเหมือนกับโฆษณาแบบ Carousel ads เพราะมันเป็นโฆษณาแบบภาพสไลด์เหมือนกันแต่มีความแตกต่างกันตรงที่แบบ Slideshow สามารถเพิ่มภาพและเพลงได้ถึง 10 ภาพเพื่อสร้างโฆษณาวิดีโอแบบวนซ้ำ</div><div><span style=\"font-weight: bolder;\">6. โฆษณาแบบ Lead Ads&nbsp;&nbsp;</span>เป็นโฆษณาแบบการรวบรวมข้อมูล เช่น ชื่อ, ที่อยู่, E-Mail หรือเบอร์โทรศัพท์ โดยเมื่อมีคนคลิกที่โฆษณาจะเด้งไปยังหน้าใหม่พร้อมแบบฟอร์มกรอกข้อมูล ซึ่งโฆษณานี่มีค่าใช้จ่ายที่สูง เหมาะกับธุรกิจแนวธนาคาร หรือ อสังหาริมทรัพย์ ที่ต้องการข้อมูลคนที่สนใจหรือที่จะเข้าร่วมด้วย<br><br></div><div><span style=\"white-space: pre;\">	</span>สำหรับใครที่คิดที่จะทำโฆษณาบน IG อยู่ก็ดูไปเป็นแนวทางในการเลือกช่องทางในการทำโฆษณาได้เลย แต่ถ้าหากมีข้อสงสัยในการทำโฆษณาสามารถติดต่อ Social Media Master ได้เลยนะคะ เพราะเราพร้อมที่จะให้คำปรึกษาด้าน Online Marketing ทุกรูปแบบอยู่แล้ว</div><div><br></div>\";}', 1, '2019-08-28 08:28:23', '2019-10-22 09:55:43', NULL),
(5, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:36:\"6b1fa1817a412a647bd088bcd9cfc66e.jpg\";s:2:\"th\";s:36:\"4066742164c01fe0fe3b02b6e4611e4a.jpg\";}', '', 'a:2:{s:2:\"en\";s:44:\"Twitter ทำ Marketing ได้ไหม?\";s:2:\"th\";s:44:\"Twitter ทำ Marketing ได้ไหม?\";}', 'a:2:{s:2:\"en\";s:40:\"twitter-ทำ-marketing-ไดไหม\";s:2:\"th\";s:44:\"twitter-ทำ-marketing-ได้ไหม?\";}', 'a:2:{s:2:\"en\";s:181:\" Twitter เปิดให้บริการมานานกว่า 12 ปีแล้ว มีผู้ใช้งานในไทยกว่า 12 ล้านคน \";s:2:\"th\";s:181:\" Twitter เปิดให้บริการมานานกว่า 12 ปีแล้ว มีผู้ใช้งานในไทยกว่า 12 ล้านคน \";}', 'a:2:{s:2:\"en\";s:2716:\"<div>หลายคนคงคุ้นเคยกับแอปพริเคชั่นที่มีชื่อว่า Twitter กันมาซักพักแล้วส่วนใหญ่คนที่เล่นก็จะเอาไว้บ่น/ระบายความรู้สึกต่าง ๆ หรือติดตามข่าวสาร แล้วมันจะใช้ทำ Marketing สำหรับธุรกิจได้ไหม?</div><div>ต้องบอกก่อนว่าปัจจุบัน Twitter เปิดให้บริการมานานกว่า 12 ปีแล้ว มีผู้ใช้งานในไทยกว่า 12 ล้านคน เป็นผู้หญิง 45% และ ผู้ชาย 55% หลายคนคงมองข้ามที่จะทำ&nbsp; Marketing ผ่านช่องทางนี้แต่รู้ไหมว่าข้อมูลจาก Twitter บอกว่า 79% ของผู้ใช้งานจะ Retweet (แชร์) มากกว่าแค่กด like เท่ากับว่าโพสของเราจะถูกแชร์และถูกเห็นมากขึ้น ซึ่งแน่นอนว่าเราสามารถทำการตลาดผ่านช่องทางนี้ได้อย่างแน่นอน</div><div><br>ยังมีสิ่งยอดฮิตในการใช้งาน Twitter นั่นก็คือการติดแฮชแท็ก ถ้าเราใส่แฮชแท็กที่เกี่ยวข้องกับธุรกิจของเรามันจะช่วยให้ผู้คนหาเราเจอง่ายขึ้น ธุรกิจหรือแบรนด์ใหญ่ ๆได้เริ่มหันมาทำการตลาดผ่านช่องทางนี้กันมากขึ้น ยกตัวอย่างเช่น&nbsp; CocaCola, Starbucks หรือ NokAir เป็นต้น&nbsp;</div><div><br></div><div>รู้แบบนี้แล้วเริ่มอยากที่จะทำ Marketing บน Twitter กันบ้างแล้วหรือยัง หากใครสงสัยหรือไม่เข้าใจสามารถติดต่อ Social Media Master ได้เลยนะคะ เพราะเราพร้อมที่จะให้คำปรึกษาด้าน Online Marketing ทุกรูปแบบอยู่แล้ว</div>\";s:2:\"th\";s:2716:\"<div>หลายคนคงคุ้นเคยกับแอปพริเคชั่นที่มีชื่อว่า Twitter กันมาซักพักแล้วส่วนใหญ่คนที่เล่นก็จะเอาไว้บ่น/ระบายความรู้สึกต่าง ๆ หรือติดตามข่าวสาร แล้วมันจะใช้ทำ Marketing สำหรับธุรกิจได้ไหม?</div><div>ต้องบอกก่อนว่าปัจจุบัน Twitter เปิดให้บริการมานานกว่า 12 ปีแล้ว มีผู้ใช้งานในไทยกว่า 12 ล้านคน เป็นผู้หญิง 45% และ ผู้ชาย 55% หลายคนคงมองข้ามที่จะทำ&nbsp; Marketing ผ่านช่องทางนี้แต่รู้ไหมว่าข้อมูลจาก Twitter บอกว่า 79% ของผู้ใช้งานจะ Retweet (แชร์) มากกว่าแค่กด like เท่ากับว่าโพสของเราจะถูกแชร์และถูกเห็นมากขึ้น ซึ่งแน่นอนว่าเราสามารถทำการตลาดผ่านช่องทางนี้ได้อย่างแน่นอน</div><div><br>ยังมีสิ่งยอดฮิตในการใช้งาน Twitter นั่นก็คือการติดแฮชแท็ก ถ้าเราใส่แฮชแท็กที่เกี่ยวข้องกับธุรกิจของเรามันจะช่วยให้ผู้คนหาเราเจอง่ายขึ้น ธุรกิจหรือแบรนด์ใหญ่ ๆได้เริ่มหันมาทำการตลาดผ่านช่องทางนี้กันมากขึ้น ยกตัวอย่างเช่น&nbsp; CocaCola, Starbucks หรือ NokAir เป็นต้น&nbsp;</div><div><br></div><div>รู้แบบนี้แล้วเริ่มอยากที่จะทำ Marketing บน Twitter กันบ้างแล้วหรือยัง หากใครสงสัยหรือไม่เข้าใจสามารถติดต่อ Social Media Master ได้เลยนะคะ เพราะเราพร้อมที่จะให้คำปรึกษาด้าน Online Marketing ทุกรูปแบบอยู่แล้ว</div>\";}', 1, '2019-08-28 08:21:52', '2019-10-22 10:00:34', NULL),
(6, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"th\";s:18:\"example-blog-1.jpg\";s:2:\"en\";s:18:\"example-blog-1.jpg\";}', '', 'a:2:{s:2:\"en\";s:122:\"สั่งเครื่องดื่มอย่างไร ไม่ให้ขาด เหลือทิ้ง\";s:2:\"th\";s:122:\"สั่งเครื่องดื่มอย่างไร ไม่ให้ขาด เหลือทิ้ง\";}', 'a:2:{s:2:\"en\";s:86:\"สงเครองดมอยางไร-ไมใหขาด-เหลอทง\";s:2:\"th\";s:122:\"สั่งเครื่องดื่มอย่างไร-ไม่ให้ขาด-เหลือทิ้ง\";}', 'a:2:{s:2:\"en\";s:507:\"ในทุกๆงานเลี้ยงสังสรรค์ เครื่องดื่มเป็นสิ่งที่ทั้งผู้จัดงานควรให้ความสำคัญไม่แพ้อาหาร และการเลือกเครื่องดื่มที่ดี มีส่วนอย่างมากในการสร้างความประทับใจให้กับแขกที่มาร่วมงาน\";s:2:\"th\";s:507:\"ในทุกๆงานเลี้ยงสังสรรค์ เครื่องดื่มเป็นสิ่งที่ทั้งผู้จัดงานควรให้ความสำคัญไม่แพ้อาหาร และการเลือกเครื่องดื่มที่ดี มีส่วนอย่างมากในการสร้างความประทับใจให้กับแขกที่มาร่วมงาน\";}', 'a:2:{s:2:\"en\";s:507:\"ในทุกๆงานเลี้ยงสังสรรค์ เครื่องดื่มเป็นสิ่งที่ทั้งผู้จัดงานควรให้ความสำคัญไม่แพ้อาหาร และการเลือกเครื่องดื่มที่ดี มีส่วนอย่างมากในการสร้างความประทับใจให้กับแขกที่มาร่วมงาน\";s:2:\"th\";s:507:\"ในทุกๆงานเลี้ยงสังสรรค์ เครื่องดื่มเป็นสิ่งที่ทั้งผู้จัดงานควรให้ความสำคัญไม่แพ้อาหาร และการเลือกเครื่องดื่มที่ดี มีส่วนอย่างมากในการสร้างความประทับใจให้กับแขกที่มาร่วมงาน\";}', 2, '2019-08-28 08:21:52', '2019-10-15 02:09:58', NULL),
(7, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:36:\"b860c882f995e5f2caa70914bcf9dce4.jpg\";s:2:\"th\";s:36:\"70c38fb2676901e0238f3abc3966f7ec.jpg\";}', '', 'a:2:{s:2:\"en\";s:48:\"การลงทุนโฆษณา Youtube \";s:2:\"th\";s:48:\"การลงทุนโฆษณา Youtube \";}', 'a:2:{s:2:\"en\";s:44:\"การลงทนโฆษณา-youtube\";s:2:\"th\";s:48:\"การลงทุนโฆษณา-youtube-\";}', 'a:2:{s:2:\"en\";s:351:\"บางคนอาจจะเคยลงทุนโฆษณากับทาง Google หรือ Facebook กันมาบ้างแต่ยังมีอีกหนึ่งช่องทางที่น่าสนใจไม่แพ้กันคือการโฆษณากับทาง Youtube นั่นเอง\";s:2:\"th\";s:351:\"บางคนอาจจะเคยลงทุนโฆษณากับทาง Google หรือ Facebook กันมาบ้างแต่ยังมีอีกหนึ่งช่องทางที่น่าสนใจไม่แพ้กันคือการโฆษณากับทาง Youtube นั่นเอง\";}', 'a:2:{s:2:\"en\";s:2922:\"<p>บางคนอาจจะเคยลงทุนโฆษณากับทาง Google หรือ Facebook กันมาบ้างแต่ยังมีอีกหนึ่งช่องทางที่น่าสนใจไม่แพ้กันคือการโฆษณากับทาง Youtube นั่นเอง</p><p>โดยการลงทุนโฆษณากับทาง Youtube เป็นอะในที่น่าสนใจเป็นอย่างมากเพราะทุกวันนี้คนไทยเสพสื่อที่เป็นวิดีโอกับทางยูทูปกันเยอะมาก!! ไม่ว่าจะเข้ามาดูละครย้อนหลัง ฟังเพลง ดูแคสท์เกม หรือดูคลิปต่าง ๆ จากเหล่ายูทูเบอร์ที่ชื่นชอบ ด้วยจำนวนผู้ใช้ยูทูปที่มีมากขึ้นเรื่อย ๆ จึงเป็นหนึ่งช่องทางของการทำการตลาดที่น่าลงทุนเป็นอย่างมาก การโฆษณาบนยูทูปไม่ได้จำกัดการโฆษณาแค่ในรูปแบบของวิดีโอเท่านั้นยังมีการโฆษณาในรูปแบบของแบนเนอร์ ที่จะแสดงตามตำแหน่งต่าง ๆ บนหน้าเว็บไซต์ของทางยูทูป ถือเป็นอีกทางเลือกหนึ่งของการโฆษณาหากยังไม่พร้อมในการเสนอโฆษณาในรูปแบบวีดีโอ</p><p>ข้อดีของการทำโฆษณากับทาง Youtube คือมีค่าใช้จ่ายที่ถูกกว่าเมื่อเทียบกับโฆษณาทีวีที่ราคาสูง แล้ว Youtube นั้นยังเป็นพันธมิตรกับ Google โฆษณายูทูปจึงสามารถเลือกกำหนดกลุ่มเป้าหมายได้ชัดเจน แบบเดียวกับโฆษณาของ Google อีกด้วย</p><p>หากใครไม่เข้าใจหรือสนใจทำการตลาดออนไลน์สามารถติดต่อ Social Media Master ได้เลยนะคะ เพราะเราพร้อมที่จะให้คำปรึกษาด้าน Online Marketing ทุกรูปแบบอยู่แล้ว</p><div><br></div>\";s:2:\"th\";s:2922:\"<p>บางคนอาจจะเคยลงทุนโฆษณากับทาง Google หรือ Facebook กันมาบ้างแต่ยังมีอีกหนึ่งช่องทางที่น่าสนใจไม่แพ้กันคือการโฆษณากับทาง Youtube นั่นเอง</p><p>โดยการลงทุนโฆษณากับทาง Youtube เป็นอะในที่น่าสนใจเป็นอย่างมากเพราะทุกวันนี้คนไทยเสพสื่อที่เป็นวิดีโอกับทางยูทูปกันเยอะมาก!! ไม่ว่าจะเข้ามาดูละครย้อนหลัง ฟังเพลง ดูแคสท์เกม หรือดูคลิปต่าง ๆ จากเหล่ายูทูเบอร์ที่ชื่นชอบ ด้วยจำนวนผู้ใช้ยูทูปที่มีมากขึ้นเรื่อย ๆ จึงเป็นหนึ่งช่องทางของการทำการตลาดที่น่าลงทุนเป็นอย่างมาก การโฆษณาบนยูทูปไม่ได้จำกัดการโฆษณาแค่ในรูปแบบของวิดีโอเท่านั้นยังมีการโฆษณาในรูปแบบของแบนเนอร์ ที่จะแสดงตามตำแหน่งต่าง ๆ บนหน้าเว็บไซต์ของทางยูทูป ถือเป็นอีกทางเลือกหนึ่งของการโฆษณาหากยังไม่พร้อมในการเสนอโฆษณาในรูปแบบวีดีโอ</p><p>ข้อดีของการทำโฆษณากับทาง Youtube คือมีค่าใช้จ่ายที่ถูกกว่าเมื่อเทียบกับโฆษณาทีวีที่ราคาสูง แล้ว Youtube นั้นยังเป็นพันธมิตรกับ Google โฆษณายูทูปจึงสามารถเลือกกำหนดกลุ่มเป้าหมายได้ชัดเจน แบบเดียวกับโฆษณาของ Google อีกด้วย</p><p>หากใครไม่เข้าใจหรือสนใจทำการตลาดออนไลน์สามารถติดต่อ Social Media Master ได้เลยนะคะ เพราะเราพร้อมที่จะให้คำปรึกษาด้าน Online Marketing ทุกรูปแบบอยู่แล้ว</p><div><br></div>\";}', 1, '2019-10-22 10:04:57', NULL, NULL);

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
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
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
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `sort` int(11) NOT NULL,
  `title` text NOT NULL,
  `image` text NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `sort`, `title`, `image`, `category_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, '', 'a:2:{s:2:\"en\";s:15:\"smm-fashion.jpg\";s:2:\"th\";s:15:\"smm-fashion.jpg\";}', 1, '2019-10-15 10:20:55', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 2, '', 'a:2:{s:2:\"en\";s:11:\"smm-pmn.jpg\";s:2:\"th\";s:11:\"smm-pmn.jpg\";}', 1, '2019-10-15 10:20:55', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 3, '', 'a:2:{s:2:\"en\";s:15:\"smm-western.jpg\";s:2:\"th\";s:15:\"smm-western.jpg\";}', 1, '2019-10-15 10:06:26', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 4, '', 'a:2:{s:2:\"en\";s:12:\"smm-tceb.jpg\";s:2:\"th\";s:12:\"smm-tceb.jpg\";}', 1, '2019-10-15 10:06:28', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 5, '', 'a:2:{s:2:\"en\";s:12:\"mock1_12.jpg\";s:2:\"th\";s:12:\"mock1_12.jpg\";}', 1, '2019-10-15 10:06:30', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 6, '', 'a:2:{s:2:\"en\";s:13:\"smm-lalin.jpg\";s:2:\"th\";s:13:\"smm-lalin.jpg\";}', 1, '2019-10-15 10:06:32', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 7, '', 'a:2:{s:2:\"en\";s:12:\"smm-tara.jpg\";s:2:\"th\";s:12:\"smm-tara.jpg\";}', 1, '2019-10-15 10:06:34', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 8, '', 'a:2:{s:2:\"en\";s:17:\"smm-sathaporn.jpg\";s:2:\"th\";s:17:\"smm-sathaporn.jpg\";}', 1, '2019-10-15 10:06:36', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 9, '', 'a:2:{s:2:\"en\";s:10:\"smm-lh.jpg\";s:2:\"th\";s:10:\"smm-lh.jpg\";}', 1, '2019-10-15 10:06:39', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 10, '', 'a:2:{s:2:\"en\";s:12:\"mock1_03.jpg\";s:2:\"th\";s:12:\"mock1_03.jpg\";}', 1, '2019-10-15 10:06:41', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
(1, 'a:2:{s:2:\"en\";s:17:\"Home | social.com\";s:2:\"th\";s:34:\"หน้าแรก | social.com\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";N;s:2:\"th\";s:36:\"bc9cee3c829bf42297748337b230ef60.jpg\";}', '2019-10-02 09:16:29', '2019-10-15 00:51:56', NULL);

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
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `sort`, `meta_tag_title`, `meta_tag_description`, `meta_tag_keywords`, `img_og_twitter`, `icon`, `img_on_navbar`, `title`, `slug`, `content_top_img`, `content_top_title`, `content_top_body`, `content_bottom_img`, `content_bottom_title`, `content_bottom_body`, `text_button`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:19:\"ico_facebook_01.png\";s:2:\"th\";s:36:\"feb6b9972cdd906a2e1a70f57c9da403.png\";}', 'a:2:{s:2:\"en\";s:26:\"img_on_nav_facebook_01.jpg\";s:2:\"th\";s:26:\"img_on_nav_facebook_01.jpg\";}', 'a:2:{s:2:\"en\";s:22:\"Social Media Marketing\";s:2:\"th\";s:96:\"บริการทำการตลาดผ่านโซเชียลมีเดีย\";}', 'a:2:{s:2:\"en\";s:22:\"social-media-marketing\";s:2:\"th\";s:96:\"บริการทำการตลาดผ่านโซเชียลมีเดีย\";}', 'a:2:{s:2:\"en\";s:9:\"dummy.jpg\";s:2:\"th\";s:9:\"dummy.jpg\";}', 'a:2:{s:2:\"en\";s:22:\"Social Media Marketing\";s:2:\"th\";s:97:\"บริการทำการตลาดผ่านโซเชียลมีเดีย \";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:2151:\"<p>การตลาดโซเชียล มีเดีย หรือ Social Media Marketing (SMM) ซึ่งเป็นสื่อสังคมออนไลน์ที่เป็นนิยมแพร่หลายทางด้านการตลาด</p><p>และกลายเป็นองค์ประกอบสำคัญสำหรับการวางแผนการตลาดเราจึงได้นำโซเชียล มีเดีย อาทิเช่น เฟซบุ๊ค (Facebook), ยูทูป (Youtube), ทวิตเตอร์ (Twitter) และ อินสตราแกรม (Instagram) เป็นต้น มาผสมผสานกันเพื่อประโยชน์</p><p>ทางด้านการตลาดและธุรกิจของลูกค้า ผ่านการโฆษณาออนไลน์ การไวรัลแคมเปญ โดยคำนึงถงความเหมาะสม และประโยชน์ที่ลูกค้าจะได้รับหลังจากการตกลงทำการตลาดออนไลน์กับทางเรา ทั้งนี้ลูกค้าต้องให้ความร่วมมือและมั่นใจในทีมงานของเรา ว่าเราจะนำท่านไปสู่เป้าหมายที่ท่านตั้งไว้ในอนาคตแน่นอน</p><p>เราได้มีการวางระบบการทำงาน การวิเคราะห์ การวางแผน รวมถึงการตั้งเป้าหมายให้ธุรกิจของท่าน โดยการนำปัจจัยองค์ประกอบจากต่างๆ มาช่วยในการวางแผนดำเนินงาน เพื่อให้งานบรรลุไปสู่เป้าหมายตามที่ได้วางไว้</p>\";}', 'a:2:{s:2:\"en\";s:9:\"dummy.jpg\";s:2:\"th\";s:9:\"dummy.jpg\";}', 'a:2:{s:2:\"en\";s:42:\"SEO สำคัญอย่างไร ?\";s:2:\"th\";s:48:\"สื่อสังคมออนไลน์\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:3473:\"<p><b>Brand Awareness การรับรู้แบรนด์ </b>– เพิ่มการรับรู้แบรนด์ เข้าถึงผู้คนที่มีแนวโน้มที่จะจดจำกับโฆษณาของคุณและเพิ่มการรับรู้ถึงแบรนด์ เหมาะกับแบรนด์ใหม่ที่คนยังไม่รู้จักมาก</p><p><b>Reach การเข้าถึง </b>– เน้นส่งโฆษณาให้มีจำนวนคนเห็นมากที่สุด เน้นแสดงโฆษณาให้มีคนเห็นมากที่สุด เหมาะกับแบรนด์ดังที่เป็นที่รู้จักอยู่หรือต้องการทำ Flash Sale ซึ่งใช้ในระยะเวลาสั้นๆ 3.Traffic จำนวนผู้เข้าชม – เพิ่มจำนวนในการนำส่งคนเข้าเว็บไซต์โดยส่งไปให้คนที่ชอบคลิกลิงก์ </p><p><b>Engagement การมีส่วนร่วม</b> – เน้นการมีส่วนร่วมกับโพสต์  การมีส่วนร่วมกับโพสต์ กดไลก์  คอมเมนต์ แชร์  จำนวนการกดถูกใจเพจ การตอบรับงานกิจกรรม </p><p><b>App Install จำนวนการติดตั้งแอป</b> – ดาวน์โหลดแอปพลิเคชัน </p><p><b>Video View จำนวนการรับชมวิดีโอ </b>– เพิ่มการรับรู้สินค้า บริการ แบรนด์ของคุณผ่านวิดีโอ </p><p><b>Lead Generation การสร้างลูกค้าเป้าหมาย</b> – เก็บรวบรวมข้อมูลจากคนที่สนใจธุรกิจของเรา เก็บข้อมูลผ่านการลงทะเบียน กรอกฟอร์ม </p><p><b>Message ข้อความ </b>– กระตุ้นให้ผู้คนสนทนากับธุรกิจของคุณมากขึ้นใน Messenger </p><p><b>Conversion กลุ่มคอนเวอร์ชัน</b> – กระตุ้นให้เกิดการดำเนินการบนเว็บไซต์ เช่น กดเพิ่มสินค้าลงตระกร้า กดกรอกข้อมูลชำระเงิน </p><p><b>Product Catalog การขายทางแคตตาล็อก </b>– เน้นการแสดงสินค้าเหมาะสำหรับ E-commerce </p><p><b>Store Visit </b>การเยี่ยมชมหน้าร้าน – โปรโมทตำแหน่งที่ตั้งของร้านหรือธุรกิจของคุณต่อคนที่อยู่ใกล้เคียงกับตำแหน่งที่ตั้งร้านของคุณ เหมาะสำหรับธุรกิจที่มีหน้าร้าน</p>\";}', 'a:2:{s:2:\"en\";s:41:\"สนใจทำ SEO กับเรา\";s:2:\"th\";s:60:\"สนใจทำการตลาดออนไลน์\";}', '2019-10-24 08:39:16', '2019-10-24 08:39:16', '0000-00-00 00:00:00'),
(2, 2, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:14:\"ico_seo_01.png\";s:2:\"th\";s:14:\"ico_seo_01.png\";}', 'a:2:{s:2:\"en\";s:21:\"img_on_nav_seo_01.jpg\";s:2:\"th\";s:21:\"img_on_nav_seo_01.jpg\";}', 'a:2:{s:2:\"en\";s:23:\"Search Engine Marketing\";s:2:\"th\";s:91:\"บริการทำการตลาดผ่านเครือข่าย Google\";}', 'a:2:{s:2:\"en\";s:23:\"search-engine-marketing\";s:2:\"th\";s:91:\"บริการทำการตลาดผ่านเครือข่าย-google\";}', 'a:2:{s:2:\"en\";s:9:\"dummy.jpg\";s:2:\"th\";s:36:\"3612a0b28cf9a19c31f09d0d821d69db.jpg\";}', 'a:2:{s:2:\"en\";s:23:\"Search Engine Marketing\";s:2:\"th\";s:91:\"บริการทำการตลาดผ่านเครือข่าย Google\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:1688:\"<p>เพื่อทำให้เว็บไซต์ติดในหน้าแรกและอันดับต้นๆ ของผลการค้นหาบนเสิร์ชเอนจิ้น</p><p><b>SEO (Search Engine Optimization หรือเอสอีโอ)</b> คือหนึ่งในกระบวนการบริหารจัดการเว็บไซต์ทั้งในส่วนของ on-page และ off-page พร้อมการวางโครงสร้าง คีย์เวิร์ด(Keywords) เพื่อให้คีย์เวิร์ดที่สำคัญทางธุรกิจปรากฎขึ้นในอันดับที่ดี ติดลำดับในหน้าแรก จากผลการค้นหาจากเสิร์ชเอนจิ้น อาทิเช่น Google, Yahoo,  Bing เป็นต้น และมีอันดับปรากฎเหนือคู่แข่งทางธุรกิจ การจัดทำ SEO นั้น เป็นการทำการตลาดที่สามารถเจาะ หรือเข้าถึงกลุ่มเป้าหมายได้ตรง มีความแม่นยำ อีกทั้งยังมีประสิทธิภาพในการเข้าถึงลูกค้า ซึ่งมันจะสามารถช่วยให้ธุรกิจของคุณประสบความสำเร็จเป็นที่รู้จักง่ายมากขึ้น <br></p>\";}', 'a:2:{s:2:\"en\";s:9:\"dummy.jpg\";s:2:\"th\";s:9:\"dummy.jpg\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:1480:\"<p style=\"font-size: 25px;\"><b>ข้อดีของการทำ SEO(เอสอีโอ) | Search Engine Optimization</b></p><p><b>การทำ SEO</b> ช่วยเพิ่มจำนวนผู้เข้าเว็บไซต์ของคุณ เพิ่มโอกาสทางธุรกิจ จากการพบเห็นโดยจากผู้ใช้อินเตอร์เน็ตทั่วโลก ที่ค้นหาจากคีร์เวิร์ดที่เกียวข้องกับธุรกิจ</p><p><b>การทำ SEO</b> ช่วยให้เว็บไซต์ของเราเหนือกว่าคู่แข่งในประเภทธุรกิจเดียวกัน ทำให้ได้เปรียบคู่แข่งมีโอกาสเหนือกว่าคู่แข่ง</p><p><b>การทำ SEO</b> ช่วยเพิ่มช่องทางการตลาด โดยไม่ถูกจำกัดด้วยพื้นที</p><p><b>การทำ SEO</b> ช่วยให้ได้ลูกค้าที่มีประสิทธิภาพและตรงตามกลุ่มเป้าหมายที่ต้องการ</p><p><b>การทำ SEO</b> คุ้มค่า-ถูกกว่าการทำโฆษณาในประเภทอื่นๆ</p>\";}', 'a:2:{s:2:\"en\";s:41:\"สนใจทำ SEO กับเรา\";s:2:\"th\";s:41:\"สนใจทำ SEO กับเรา\";}', '2019-10-24 04:42:28', '2019-10-24 04:42:28', '0000-00-00 00:00:00'),
(3, 3, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:15:\"ico_line_01.png\";s:2:\"th\";s:15:\"ico_line_01.png\";}', 'a:2:{s:2:\"en\";s:22:\"img_on_nav_line_01.jpg\";s:2:\"th\";s:22:\"img_on_nav_line_01.jpg\";}', 'a:2:{s:2:\"en\";s:14:\"Line Marketing\";s:2:\"th\";s:62:\"บริการทำการตลาดผ่าน LINE\";}', 'a:2:{s:2:\"en\";s:14:\"line-marketing\";s:2:\"th\";s:62:\"บริการทำการตลาดผ่าน-line\";}', 'a:2:{s:2:\"en\";s:9:\"dummy.jpg\";s:2:\"th\";s:9:\"dummy.jpg\";}', 'a:2:{s:2:\"en\";s:14:\"Line Marketing\";s:2:\"th\";s:99:\"บริการทำการตลาดผ่าน LINE แอปพลิเคชั่น\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:9:\"dummy.jpg\";s:2:\"th\";s:9:\"dummy.jpg\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:41:\"สนใจทำ SEO กับเรา\";s:2:\"th\";s:41:\"สนใจทำ SEO กับเรา\";}', '2019-10-22 03:25:17', '2019-10-21 20:15:33', '0000-00-00 00:00:00'),
(4, 4, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:14:\"ico_sem_01.png\";s:2:\"th\";s:14:\"ico_sem_01.png\";}', 'a:2:{s:2:\"en\";s:21:\"img_on_nav_sem_01.jpg\";s:2:\"th\";s:21:\"img_on_nav_sem_01.jpg\";}', 'a:2:{s:2:\"en\";s:26:\"Search Engine Optimization\";s:2:\"th\";s:93:\"บริการทำการตลาดผ่านโปรแกรมค้นหา\";}', 'a:2:{s:2:\"en\";s:26:\"search-engine-optimization\";s:2:\"th\";s:93:\"บริการทำการตลาดผ่านโปรแกรมค้นหา\";}', 'a:2:{s:2:\"en\";s:9:\"dummy.jpg\";s:2:\"th\";s:36:\"dc7693150702d43f9157ba48e377d1b5.jpg\";}', 'a:2:{s:2:\"en\";s:26:\"Search Engine Optimization\";s:2:\"th\";s:232:\"บริการทำการตลาดผ่านโปรแกรมค้นหา ด้วยคีย์เวิร์ดที่มีคุณภาพและสร้างยอดขายได้จริง\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:1669:\"<p><font color=\"#212529\" face=\"Prompt, sans-serif\"><span style=\"font-size: 16px;\">รับทำโฆษณา Google Adwords หรือ Google PPC (Pay-per-click) บริการด้าน SEM | Search Engine Marketing<br></span></font></p><p>Google AdWords หรือ Google PPC  จึงกลายเป็นโปรแกรมโฆษณาออนไลน์ของ Google ช่วยให้คุณธุรกิจของคุณสามารถเจาะเข้าถึงลูกค้าใหม่ๆ และทำให้ธุรกิจของคุณเติบโตขึ้นเลือกที่ที่ต้องการให้โฆษณาปรากฏ กำหนดงบประมาณที่คุณยินดีจ่าย และวัดผลกระทบที่เกิดจากโฆษณาของคุณ ไม่มีข้อกำหนดการใช้จ่ายขั้นต่ำ คุณสามารถหยุดชั่วคราวหรือเลิกใช้ได้ทุกเมื่อ</p><p>ดังนั้นหาก เว็บไซต์ของคุณไม่ปรากฎบนเครื่องมือการค้นหา อาทิเช่น Google การโฆษณาผ่าน Google Adwords, หรือ Google PPC นี้คือ คำตอบที่รวดเร็วที่จะช่วยทำให้เว็บไซต์ธุรกิจของคุณสามารถถูกค้นพบได้บนโลกออนไล</p>\";}', 'a:2:{s:2:\"en\";s:9:\"dummy.jpg\";s:2:\"th\";s:9:\"dummy.jpg\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:69:\"ข้อดีของการทำ SEM | Search Engine Marketing\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:1403:\"<ul><li><b>โฆษณาผ่าน Google Adwords</b> ทำให้เว็บไซต์ปรากฎในหน้าแรกของผลการค้นหาบน Google Search Engine ได้ภายเวลาที่รวดเร็ว เมื่อเปิดใช้บริการ ออนไลน์แคมเปญก็สามารถออนได้ทันที<br></li><li><b>โฆษณาผ่าน Google Adwords</b> ทำให้การโปรโมทเว็บไซ์ต์สามารถติดในทุกๆหน้าของการ Search บน Google ทั้งนี้ขึ้นอยู่กับงบประมาณในการ Bid คำหรือคีย์เวิร์ดนั้นๆ</li><li><b>การทำโฆษณา Google Adwords</b> สามารถช่วยลดขั้นตอนการทำงานที่ยุ่งยากซ้ำซ้อนในการ Search</li><li><b>หากไม่มีคลิกโฆษณาใน Google Adwords</b> ผู้โฆษณาจะไม่เสียค่าใช้จ่ายใดๆ เจ้าของธุรกิจสามารถตั้งงบประมาณการโฆษณาให้เหมาะกับแผนการตลาดได้</li></ul>\";}', 'a:2:{s:2:\"en\";s:41:\"สนใจทำ SEO กับเรา\";s:2:\"th\";s:41:\"สนใจทำ SEO กับเรา\";}', '2019-10-24 10:21:17', '2019-10-24 10:21:17', '0000-00-00 00:00:00'),
(5, 5, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:21:\"ico_production_01.png\";s:2:\"th\";s:21:\"ico_production_01.png\";}', 'a:2:{s:2:\"en\";s:28:\"img_on_nav_production_01.jpg\";s:2:\"th\";s:28:\"img_on_nav_production_01.jpg\";}', 'a:2:{s:2:\"en\";s:21:\"Creative & Production\";s:2:\"th\";s:48:\"บริการทำคอนเทนต์\";}', 'a:2:{s:2:\"en\";s:19:\"creative-production\";s:2:\"th\";s:48:\"บริการทำคอนเทนต์\";}', 'a:2:{s:2:\"en\";s:9:\"dummy.jpg\";s:2:\"th\";s:9:\"dummy.jpg\";}', 'a:2:{s:2:\"en\";s:21:\"Creative & Production\";s:2:\"th\";s:195:\"บริการทำคอนเทนต์ในรูปแบบต่าง ๆ ผ่านสื่อทั้ง อาร์ตเวิร์ค | Motion Graphic | VDO คลิป\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:9:\"dummy.jpg\";s:2:\"th\";s:9:\"dummy.jpg\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:41:\"สนใจทำ SEO กับเรา\";s:2:\"th\";s:41:\"สนใจทำ SEO กับเรา\";}', '2019-10-22 03:26:21', '2019-10-21 20:15:59', '0000-00-00 00:00:00'),
(6, 6, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:14:\"ico_web_01.png\";s:2:\"th\";s:14:\"ico_web_01.png\";}', 'a:2:{s:2:\"en\";s:21:\"img_on_nav_web_01.jpg\";s:2:\"th\";s:21:\"img_on_nav_web_01.jpg\";}', 'a:2:{s:2:\"en\";s:14:\"Website design\";s:2:\"th\";s:60:\"บริการออกแบบเว็บไซต์\";}', 'a:2:{s:2:\"en\";s:14:\"website-design\";s:2:\"th\";s:60:\"บริการออกแบบเว็บไซต์\";}', 'a:2:{s:2:\"en\";s:9:\"dummy.jpg\";s:2:\"th\";s:9:\"dummy.jpg\";}', 'a:2:{s:2:\"en\";s:14:\"Website design\";s:2:\"th\";s:152:\"บริการออกแบบเว็บไซต์และหน้า Landing Page ให้เหมาะสมกับธุรกิจ\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:9:\"dummy.jpg\";s:2:\"th\";s:9:\"dummy.jpg\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:41:\"สนใจทำ SEO กับเรา\";s:2:\"th\";s:41:\"สนใจทำ SEO กับเรา\";}', '2019-10-22 03:27:33', '2019-10-21 20:14:35', '0000-00-00 00:00:00'),
(7, 7, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:18:\"ico_consult_01.png\";s:2:\"th\";s:18:\"ico_consult_01.png\";}', 'a:2:{s:2:\"en\";s:22:\"img_on_nav_plan_01.jpg\";s:2:\"th\";s:22:\"img_on_nav_plan_01.jpg\";}', 'a:2:{s:2:\"en\";s:136:\"บริการให้คำแนะนำปรึกษา และวางแผนการตลาดออนไลน์\";s:2:\"th\";s:136:\"บริการให้คำแนะนำปรึกษา และวางแผนการตลาดออนไลน์\";}', 'a:2:{s:2:\"en\";s:136:\"บริการให้คำแนะนำปรึกษา-และวางแผนการตลาดออนไลน์\";s:2:\"th\";s:136:\"บริการให้คำแนะนำปรึกษา-และวางแผนการตลาดออนไลน์\";}', 'a:2:{s:2:\"en\";s:9:\"dummy.jpg\";s:2:\"th\";s:9:\"dummy.jpg\";}', 'a:2:{s:2:\"en\";s:136:\"บริการให้คำแนะนำปรึกษา และวางแผนการตลาดออนไลน์\";s:2:\"th\";s:136:\"บริการให้คำแนะนำปรึกษา และวางแผนการตลาดออนไลน์\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:9:\"dummy.jpg\";s:2:\"th\";s:9:\"dummy.jpg\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:41:\"สนใจทำ SEO กับเรา\";s:2:\"th\";s:41:\"สนใจทำ SEO กับเรา\";}', '2019-10-22 03:25:57', '2019-10-17 22:00:19', '0000-00-00 00:00:00'),
(8, 8, 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:16:\"ico_speak_01.png\";s:2:\"th\";s:16:\"ico_speak_01.png\";}', 'a:2:{s:2:\"en\";s:25:\"img_on_nav_speaker_01.jpg\";s:2:\"th\";s:25:\"img_on_nav_speaker_01.jpg\";}', 'a:2:{s:2:\"en\";s:7:\"Speaker\";s:2:\"th\";s:7:\"Speaker\";}', 'a:2:{s:2:\"en\";s:7:\"speaker\";s:2:\"th\";s:7:\"speaker\";}', 'a:2:{s:2:\"en\";s:9:\"dummy.jpg\";s:2:\"th\";s:9:\"dummy.jpg\";}', 'a:2:{s:2:\"en\";s:7:\"Speaker\";s:2:\"th\";s:7:\"Speaker\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:9:\"dummy.jpg\";s:2:\"th\";s:9:\"dummy.jpg\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:0:\"\";s:2:\"th\";s:0:\"\";}', 'a:2:{s:2:\"en\";s:41:\"สนใจทำ SEO กับเรา\";s:2:\"th\";s:41:\"สนใจทำ SEO กับเรา\";}', '2019-10-22 03:27:31', '2019-10-17 22:00:19', '0000-00-00 00:00:00');

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
(1, 1, 4, 'a:2:{s:2:\"en\";s:13:\"portfolio.png\";s:2:\"th\";s:13:\"portfolio.png\";}', '', '2019-10-02 09:16:29', '2019-10-15 00:47:42', NULL),
(5, 2, 4, 'a:2:{s:2:\"en\";s:13:\"portfolio.png\";s:2:\"th\";s:13:\"portfolio.png\";}', '', '2019-10-02 09:16:29', '2019-10-15 00:47:42', NULL),
(6, 3, 4, 'a:2:{s:2:\"en\";s:13:\"portfolio.png\";s:2:\"th\";s:13:\"portfolio.png\";}', '', '2019-10-02 09:16:29', '2019-10-15 00:47:42', NULL),
(7, 4, 4, 'a:2:{s:2:\"en\";s:13:\"portfolio.png\";s:2:\"th\";s:13:\"portfolio.png\";}', '', '2019-10-02 09:16:29', '2019-10-15 00:47:42', NULL),
(8, 5, 4, 'a:2:{s:2:\"en\";s:13:\"portfolio.png\";s:2:\"th\";s:13:\"portfolio.png\";}', '', '2019-10-02 09:16:29', '2019-10-15 00:47:42', NULL),
(9, 6, 4, 'a:2:{s:2:\"en\";s:13:\"portfolio.png\";s:2:\"th\";s:13:\"portfolio.png\";}', '', '2019-10-02 09:16:29', '2019-10-15 00:47:42', NULL),
(10, 1, 1, 'a:2:{s:2:\"en\";s:13:\"portfolio.png\";s:2:\"th\";s:13:\"portfolio.png\";}', '', '2019-10-02 09:16:29', '2019-10-15 00:47:42', NULL),
(11, 2, 1, 'a:2:{s:2:\"en\";s:13:\"portfolio.png\";s:2:\"th\";s:13:\"portfolio.png\";}', '', '2019-10-02 09:16:29', '2019-10-15 00:47:42', NULL),
(12, 3, 1, 'a:2:{s:2:\"en\";s:13:\"portfolio.png\";s:2:\"th\";s:13:\"portfolio.png\";}', '', '2019-10-02 09:16:29', '2019-10-15 00:47:42', NULL),
(13, 4, 1, 'a:2:{s:2:\"en\";s:13:\"portfolio.png\";s:2:\"th\";s:13:\"portfolio.png\";}', '', '2019-10-02 09:16:29', '2019-10-15 00:47:42', NULL),
(14, 5, 1, 'a:2:{s:2:\"en\";s:13:\"portfolio.png\";s:2:\"th\";s:13:\"portfolio.png\";}', '', '2019-10-02 09:16:29', '2019-10-15 00:47:42', NULL),
(15, 6, 1, 'a:2:{s:2:\"en\";s:13:\"portfolio.png\";s:2:\"th\";s:13:\"portfolio.png\";}', '', '2019-10-02 09:16:29', '2019-10-15 00:47:42', NULL),
(16, 1, 2, 'a:2:{s:2:\"en\";s:13:\"portfolio.png\";s:2:\"th\";s:13:\"portfolio.png\";}', '', '2019-10-02 09:16:29', '2019-10-15 00:47:42', NULL),
(17, 2, 2, 'a:2:{s:2:\"en\";s:13:\"portfolio.png\";s:2:\"th\";s:13:\"portfolio.png\";}', '', '2019-10-02 09:16:29', '2019-10-15 00:47:42', NULL),
(18, 3, 2, 'a:2:{s:2:\"en\";s:13:\"portfolio.png\";s:2:\"th\";s:13:\"portfolio.png\";}', '', '2019-10-02 09:16:29', '2019-10-15 00:47:42', NULL),
(19, 4, 2, 'a:2:{s:2:\"en\";s:13:\"portfolio.png\";s:2:\"th\";s:13:\"portfolio.png\";}', '', '2019-10-02 09:16:29', '2019-10-15 00:47:42', NULL),
(20, 5, 2, 'a:2:{s:2:\"en\";s:13:\"portfolio.png\";s:2:\"th\";s:13:\"portfolio.png\";}', '', '2019-10-02 09:16:29', '2019-10-15 00:47:42', NULL),
(21, 6, 2, 'a:2:{s:2:\"en\";s:13:\"portfolio.png\";s:2:\"th\";s:13:\"portfolio.png\";}', '', '2019-10-02 09:16:29', '2019-10-15 00:47:42', NULL),
(22, 1, 3, 'a:2:{s:2:\"en\";s:13:\"portfolio.png\";s:2:\"th\";s:13:\"portfolio.png\";}', '', '2019-10-02 09:16:29', '2019-10-15 00:47:42', NULL),
(23, 2, 3, 'a:2:{s:2:\"en\";s:13:\"portfolio.png\";s:2:\"th\";s:13:\"portfolio.png\";}', '', '2019-10-02 09:16:29', '2019-10-15 00:47:42', NULL),
(24, 3, 3, 'a:2:{s:2:\"en\";s:13:\"portfolio.png\";s:2:\"th\";s:13:\"portfolio.png\";}', '', '2019-10-02 09:16:29', '2019-10-15 00:47:42', NULL),
(25, 4, 3, 'a:2:{s:2:\"en\";s:13:\"portfolio.png\";s:2:\"th\";s:13:\"portfolio.png\";}', '', '2019-10-02 09:16:29', '2019-10-15 00:47:42', NULL),
(26, 5, 3, 'a:2:{s:2:\"en\";s:13:\"portfolio.png\";s:2:\"th\";s:13:\"portfolio.png\";}', '', '2019-10-02 09:16:29', '2019-10-15 00:47:42', NULL),
(27, 6, 3, 'a:2:{s:2:\"en\";s:13:\"portfolio.png\";s:2:\"th\";s:13:\"portfolio.png\";}', '', '2019-10-02 09:16:29', '2019-10-15 00:47:42', NULL),
(28, 1, 5, 'a:2:{s:2:\"en\";s:13:\"portfolio.png\";s:2:\"th\";s:13:\"portfolio.png\";}', '', '2019-10-02 09:16:29', '2019-10-15 00:47:42', NULL),
(29, 2, 5, 'a:2:{s:2:\"en\";s:13:\"portfolio.png\";s:2:\"th\";s:13:\"portfolio.png\";}', '', '2019-10-02 09:16:29', '2019-10-15 00:47:42', NULL),
(30, 3, 5, 'a:2:{s:2:\"en\";s:13:\"portfolio.png\";s:2:\"th\";s:13:\"portfolio.png\";}', '', '2019-10-02 09:16:29', '2019-10-15 00:47:42', NULL),
(31, 4, 5, 'a:2:{s:2:\"en\";s:13:\"portfolio.png\";s:2:\"th\";s:13:\"portfolio.png\";}', '', '2019-10-02 09:16:29', '2019-10-15 00:47:42', NULL),
(32, 5, 5, 'a:2:{s:2:\"en\";s:13:\"portfolio.png\";s:2:\"th\";s:13:\"portfolio.png\";}', '', '2019-10-02 09:16:29', '2019-10-15 00:47:42', NULL),
(33, 6, 5, 'a:2:{s:2:\"en\";s:13:\"portfolio.png\";s:2:\"th\";s:13:\"portfolio.png\";}', '', '2019-10-02 09:16:29', '2019-10-15 00:47:42', NULL),
(34, 1, 6, 'a:2:{s:2:\"en\";s:13:\"portfolio.png\";s:2:\"th\";s:13:\"portfolio.png\";}', '', '2019-10-02 09:16:29', '2019-10-15 00:47:42', NULL),
(35, 2, 6, 'a:2:{s:2:\"en\";s:13:\"portfolio.png\";s:2:\"th\";s:13:\"portfolio.png\";}', '', '2019-10-02 09:16:29', '2019-10-15 00:47:42', NULL),
(36, 3, 6, 'a:2:{s:2:\"en\";s:13:\"portfolio.png\";s:2:\"th\";s:13:\"portfolio.png\";}', '', '2019-10-02 09:16:29', '2019-10-15 00:47:42', NULL),
(37, 4, 6, 'a:2:{s:2:\"en\";s:13:\"portfolio.png\";s:2:\"th\";s:13:\"portfolio.png\";}', '', '2019-10-02 09:16:29', '2019-10-15 00:47:42', NULL),
(38, 5, 6, 'a:2:{s:2:\"en\";s:13:\"portfolio.png\";s:2:\"th\";s:13:\"portfolio.png\";}', '', '2019-10-02 09:16:29', '2019-10-15 00:47:42', NULL),
(39, 6, 6, 'a:2:{s:2:\"en\";s:13:\"portfolio.png\";s:2:\"th\";s:13:\"portfolio.png\";}', '', '2019-10-02 09:16:29', '2019-10-15 00:47:42', NULL),
(40, 1, 7, 'a:2:{s:2:\"en\";s:13:\"portfolio.png\";s:2:\"th\";s:13:\"portfolio.png\";}', '', '2019-10-02 09:16:29', '2019-10-15 00:47:42', NULL),
(41, 2, 7, 'a:2:{s:2:\"en\";s:13:\"portfolio.png\";s:2:\"th\";s:13:\"portfolio.png\";}', '', '2019-10-02 09:16:29', '2019-10-15 00:47:42', NULL),
(42, 3, 7, 'a:2:{s:2:\"en\";s:13:\"portfolio.png\";s:2:\"th\";s:13:\"portfolio.png\";}', '', '2019-10-02 09:16:29', '2019-10-15 00:47:42', NULL),
(43, 4, 7, 'a:2:{s:2:\"en\";s:13:\"portfolio.png\";s:2:\"th\";s:13:\"portfolio.png\";}', '', '2019-10-02 09:16:29', '2019-10-15 00:47:42', NULL),
(44, 5, 7, 'a:2:{s:2:\"en\";s:13:\"portfolio.png\";s:2:\"th\";s:13:\"portfolio.png\";}', '', '2019-10-02 09:16:29', '2019-10-15 00:47:42', NULL),
(45, 6, 7, 'a:2:{s:2:\"en\";s:13:\"portfolio.png\";s:2:\"th\";s:13:\"portfolio.png\";}', '', '2019-10-02 09:16:29', '2019-10-15 00:47:42', NULL),
(46, 1, 8, 'a:2:{s:2:\"en\";s:13:\"portfolio.png\";s:2:\"th\";s:13:\"portfolio.png\";}', '', '2019-10-02 09:16:29', '2019-10-15 00:47:42', NULL),
(47, 2, 8, 'a:2:{s:2:\"en\";s:13:\"portfolio.png\";s:2:\"th\";s:13:\"portfolio.png\";}', '', '2019-10-02 09:16:29', '2019-10-15 00:47:42', NULL),
(48, 3, 8, 'a:2:{s:2:\"en\";s:13:\"portfolio.png\";s:2:\"th\";s:13:\"portfolio.png\";}', '', '2019-10-02 09:16:29', '2019-10-15 00:47:42', NULL),
(49, 4, 8, 'a:2:{s:2:\"en\";s:13:\"portfolio.png\";s:2:\"th\";s:13:\"portfolio.png\";}', '', '2019-10-02 09:16:29', '2019-10-15 00:47:42', NULL),
(50, 5, 8, 'a:2:{s:2:\"en\";s:13:\"portfolio.png\";s:2:\"th\";s:13:\"portfolio.png\";}', '', '2019-10-02 09:16:29', '2019-10-15 00:47:42', NULL),
(51, 6, 8, 'a:2:{s:2:\"en\";s:13:\"portfolio.png\";s:2:\"th\";s:13:\"portfolio.png\";}', '', '2019-10-02 09:16:29', '2019-10-15 00:47:42', NULL);

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
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `sort`, `title`, `body`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'a:2:{s:2:\"en\";s:22:\"Kriangkrai Nilkamhaeng\";s:2:\"th\";s:22:\"Kriangkrai Nilkamhaeng\";}', 'a:2:{s:2:\"en\";s:13:\"CEO / Founder\";s:2:\"th\";s:13:\"CEO / Founder\";}', 'a:2:{s:2:\"en\";s:18:\"img-kriangkrai.jpg\";s:2:\"th\";s:18:\"img-kriangkrai.jpg\";}', '2019-10-18 04:01:07', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 2, 'a:2:{s:2:\"en\";s:19:\"Krissana Wimoonchad\";s:2:\"th\";s:19:\"Krissana Wimoonchad\";}', 'a:2:{s:2:\"en\";s:27:\"Assistant Managing Director\";s:2:\"th\";s:27:\"Assistant Managing Director\";}', 'a:2:{s:2:\"en\";s:16:\"img-krissana.jpg\";s:2:\"th\";s:16:\"img-krissana.jpg\";}', '2019-10-18 04:01:07', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 3, 'a:2:{s:2:\"en\";s:19:\"Juthamas Sattayapun\";s:2:\"th\";s:19:\"Juthamas Sattayapun\";}', 'a:2:{s:2:\"en\";s:15:\"Project Manager\";s:2:\"th\";s:15:\"Project Manager\";}', 'a:2:{s:2:\"en\";s:16:\"img-juthamas.jpg\";s:2:\"th\";s:16:\"img-juthamas.jpg\";}', '2019-10-18 04:14:25', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 4, 'a:2:{s:2:\"en\";s:4:\"test\";s:2:\"th\";s:4:\"test\";}', 'a:2:{s:2:\"en\";s:4:\"test\";s:2:\"th\";s:4:\"test\";}', 'a:2:{s:2:\"en\";s:12:\"img-palm.jpg\";s:2:\"th\";s:12:\"img-palm.jpg\";}', '2019-10-18 04:14:25', '2019-10-17 21:07:08', '0000-00-00 00:00:00'),
(6, 5, 'a:2:{s:2:\"en\";s:4:\"test\";s:2:\"th\";s:4:\"test\";}', 'a:2:{s:2:\"en\";s:4:\"test\";s:2:\"th\";s:4:\"test\";}', 'a:2:{s:2:\"en\";s:10:\"img-vi.jpg\";s:2:\"th\";s:10:\"img-vi.jpg\";}', '2019-10-18 04:14:25', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 6, 'a:2:{s:2:\"en\";s:4:\"test\";s:2:\"th\";s:4:\"test\";}', 'a:2:{s:2:\"en\";s:4:\"test\";s:2:\"th\";s:4:\"test\";}', 'a:2:{s:2:\"en\";s:11:\"img-pae.jpg\";s:2:\"th\";s:11:\"img-pae.jpg\";}', '2019-10-18 04:14:25', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 7, 'a:2:{s:2:\"en\";s:4:\"test\";s:2:\"th\";s:4:\"test\";}', 'a:2:{s:2:\"en\";s:4:\"test\";s:2:\"th\";s:4:\"test\";}', 'a:2:{s:2:\"en\";s:11:\"img-wan.jpg\";s:2:\"th\";s:11:\"img-wan.jpg\";}', '2019-10-18 04:14:25', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 8, 'a:2:{s:2:\"en\";s:4:\"test\";s:2:\"th\";s:4:\"test\";}', 'a:2:{s:2:\"en\";s:4:\"test\";s:2:\"th\";s:4:\"test\";}', 'a:2:{s:2:\"en\";s:13:\"img-grece.jpg\";s:2:\"th\";s:13:\"img-grece.jpg\";}', '2019-10-18 04:14:25', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 9, 'a:2:{s:2:\"en\";s:4:\"test\";s:2:\"th\";s:4:\"test\";}', 'a:2:{s:2:\"en\";s:4:\"test\";s:2:\"th\";s:4:\"test\";}', 'a:2:{s:2:\"en\";s:12:\"img-bumm.jpg\";s:2:\"th\";s:12:\"img-bumm.jpg\";}', '2019-10-18 04:14:25', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 10, 'a:2:{s:2:\"en\";s:4:\"test\";s:2:\"th\";s:4:\"test\";}', 'a:2:{s:2:\"en\";s:4:\"test\";s:2:\"th\";s:4:\"test\";}', 'a:2:{s:2:\"en\";s:13:\"img-nicky.jpg\";s:2:\"th\";s:13:\"img-nicky.jpg\";}', '2019-10-18 04:14:25', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 11, 'a:2:{s:2:\"en\";s:4:\"test\";s:2:\"th\";s:4:\"test\";}', 'a:2:{s:2:\"en\";s:4:\"test\";s:2:\"th\";s:4:\"test\";}', 'a:2:{s:2:\"en\";s:11:\"img-nat.jpg\";s:2:\"th\";s:11:\"img-nat.jpg\";}', '2019-10-18 04:14:25', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
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
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
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
