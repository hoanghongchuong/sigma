-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2017 at 10:59 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `luxury`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `photo` text COLLATE utf8_unicode_ci,
  `mota` longtext COLLATE utf8_unicode_ci,
  `link` text COLLATE utf8_unicode_ci,
  `content` longtext COLLATE utf8_unicode_ci,
  `status` int(11) NOT NULL DEFAULT '1',
  `title` text COLLATE utf8_unicode_ci,
  `keyword` longtext COLLATE utf8_unicode_ci,
  `description` longtext COLLATE utf8_unicode_ci,
  `com` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `user_id`, `name`, `alias`, `photo`, `mota`, `link`, `content`, `status`, `title`, `keyword`, `description`, `com`, `created_at`, `updated_at`) VALUES
(1, 5, NULL, '', NULL, NULL, NULL, '<div class=\"bwt_title_main\">\r\n<section class=\"block-about text-center mr-bottom-40\">\r\n<div class=\"container\">\r\n<p>Được th&agrave;nh lập v&agrave;o năm 2006 bởi Nh&agrave; thiết kế B&ugrave;i Minh Trang, ngay từ khi xuất hiện đ&atilde; thu h&uacute;t được rất nhiều sự ch&uacute; &yacute; của c&ocirc;ng ch&uacute;ng. Với phong c&aacute;ch ch&acirc;u &Acirc;u lịch l&atilde;m, tinh tế, quyến rũ v&agrave; sang trọng, Kelly Bui đ&aacute;p ứng được nhu cầu thời trang của đa số phụ nữ th&agrave;nh đạt. Nhắm v&agrave;o đối tượng kh&aacute;ch h&agrave;ng l&agrave; những người phụ nữ c&oacute; thu nhập cao, những người hoạt động trong lĩnh vực nghệ thuật, vẫn giữ được những điều cốt yếu của thời trang, Kelly Bui hướng thời trang v&agrave;o sự tiện &iacute;ch nhưng vẫn đảm bảo về t&iacute;nh thẩm mỹ v&agrave; c&aacute;i đẹp.</p>\r\n</div>\r\n</section>\r\n</div>', 1, 'gioi thieu', 'gioi thieu, thieu gioi', 'gioi thieu về công ty', NULL, '2017-11-20 06:42:55', '2017-11-19 23:42:55');

-- --------------------------------------------------------

--
-- Table structure for table `bank_account`
--

CREATE TABLE `bank_account` (
  `id` int(11) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `info` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bank_account`
--

INSERT INTO `bank_account` (`id`, `img`, `info`, `created_at`, `updated_at`) VALUES
(1, '1507946485_logobidv.png', '<p>Số t&agrave;i khoản:&nbsp;001234646870</p>\r\n<p>Chủ t&agrave;i khoản:&nbsp;<span class=\"text-uppercase\">NGUYỄN HẢI YẾN</span></p>\r\n<p>Ng&acirc;n h&agrave;ng:&nbsp;Ng&acirc;n h&agrave;ng TMCP Ngoại thương Việt Nam Chi nh&aacute;nh Đống Đa</p>', '2017-10-14 02:01:25', '2017-10-13 19:01:25'),
(3, '1507946490_logobidv.png', '<p>Số t&agrave;i khoản:&nbsp;001234646870</p>\r\n<p>Chủ t&agrave;i khoản:&nbsp;<span class=\"text-uppercase\">NGUYỄN Ho&agrave;ng&nbsp;Hải</span></p>\r\n<p>Ng&acirc;n h&agrave;ng:&nbsp;Ng&acirc;n h&agrave;ng TMCP Ngoại thương Việt Nam Chi nh&aacute;nh&nbsp;H&agrave; Nội</p>\r\n<p>&nbsp;</p>', '2017-10-14 02:01:30', '2017-10-13 19:01:30');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `photo` text COLLATE utf8_unicode_ci,
  `status` int(11) NOT NULL DEFAULT '1',
  `image_path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stt` int(11) NOT NULL DEFAULT '0',
  `com` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `banner_content`
--

CREATE TABLE `banner_content` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner_content`
--

INSERT INTO `banner_content` (`id`, `image`, `link`, `position`, `updated_at`, `created_at`) VALUES
(6, '1508903957_block_home_category1.jpg', NULL, 1, '2017-10-24 20:59:17', '2017-10-24 20:59:17'),
(7, '1508903962_block_home_category2.jpg', NULL, 1, '2017-10-24 20:59:22', '2017-10-24 20:59:22');

-- --------------------------------------------------------

--
-- Table structure for table `banner_position`
--

CREATE TABLE `banner_position` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner_position`
--

INSERT INTO `banner_position` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Trang chủ', '2017-09-20 08:29:24', '2017-09-20 01:29:24'),
(2, 'Tin tức', '2017-10-14 03:36:18', '2017-10-13 20:36:18'),
(3, 'Banner chạy dọc website', '2017-10-13 20:36:32', '2017-10-13 20:36:32'),
(4, 'Chi tiết tin tức', '2017-10-13 20:37:12', '2017-10-13 20:37:12'),
(5, 'Trang chi tiết sản phẩm', '2017-10-16 02:47:30', '2017-10-15 19:47:30');

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `id` int(11) NOT NULL,
  `full_name` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `province` varchar(250) DEFAULT NULL,
  `district` varchar(250) DEFAULT NULL,
  `note` text,
  `status` tinyint(2) DEFAULT '0',
  `total` int(11) DEFAULT NULL,
  `detail` text,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `card_code` varchar(250) DEFAULT NULL,
  `payment` int(2) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`id`, `full_name`, `email`, `phone`, `address`, `province`, `district`, `note`, `status`, `total`, `detail`, `created_at`, `updated_at`, `card_code`, `payment`) VALUES
(5, 'Hoàng Hồng Chương', NULL, NULL, NULL, NULL, NULL, 'sfdsdf', 0, 39000000, '[{\"product_name\":\"S\\u1ea3n ph\\u1ea9m demo 4\",\"product_numb\":\"1\",\"product_price\":5000000,\"product_img\":\"1511149119_pr-8.png\",\"product_code\":null},{\"product_name\":\"S\\u1ea3n ph\\u1ea9m demo x\",\"product_numb\":\"2\",\"product_price\":14000000,\"product_img\":\"1511150896_pr-9.png\",\"product_code\":null},{\"product_name\":\"S\\u1ea3n ph\\u1ea9m z\",\"product_numb\":\"3\",\"product_price\":2000000,\"product_img\":\"1511149130_pr-4.png\",\"product_code\":null}]', '2017-11-21 02:50:19', '2017-11-21 02:50:19', NULL, 0),
(6, 'Trần Văn A', NULL, NULL, NULL, NULL, NULL, 'giao hang sau giờ hành chính', 0, 6300000, '[{\"product_name\":\"S\\u1ea3n ph\\u1ea9m 1\",\"product_numb\":\"2\",\"product_price\":150000,\"product_img\":\"1511149104_pr-3.png\",\"product_code\":null},{\"product_name\":\"S\\u1ea3n ph\\u1ea9m th\\u1eddi trang nam s\\u1ed1 1x\",\"product_numb\":\"2\",\"product_price\":3000000,\"product_img\":\"1511165898_pr-1.png\",\"product_code\":null}]', '2017-11-21 02:55:10', '2017-11-21 02:55:10', NULL, 0),
(7, 'Nguyen thi B', 'b@gmail.com', '0023923923', 'thai binh, viet nam', NULL, NULL, 'giao hang tu 19h den 23h', 1, 3450000, '[{\"product_name\":\"S\\u1ea3n ph\\u1ea9m th\\u1eddi trang nam s\\u1ed1 1x\",\"product_numb\":\"1\",\"product_price\":3000000,\"product_img\":\"1511165898_pr-1.png\",\"product_code\":null},{\"product_name\":\"S\\u1ea3n ph\\u1ea9m 1\",\"product_numb\":\"3\",\"product_price\":150000,\"product_img\":\"1511149104_pr-3.png\",\"product_code\":null}]', '2017-11-21 09:57:36', '2017-11-21 02:57:36', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `campaigns`
--

CREATE TABLE `campaigns` (
  `id` int(11) NOT NULL,
  `campaign_name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `campaign_type` int(2) DEFAULT NULL,
  `campaign_value` int(10) DEFAULT NULL,
  `campaign_expired` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `del_flg` int(1) NOT NULL DEFAULT '0',
  `card_numb` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `campaigns`
--

INSERT INTO `campaigns` (`id`, `campaign_name`, `campaign_type`, `campaign_value`, `campaign_expired`, `created_at`, `updated_at`, `del_flg`, `card_numb`) VALUES
(1, 'Chào mừng giáng sinh', 1, 100000, '2017-09-30', '2017-09-21 18:56:44', '2017-09-21 18:56:44', 0, 7),
(2, 'Chào thu', 2, 10, '2017-09-30', '2017-09-22 18:43:02', '2017-09-22 18:43:02', 0, 4);

-- --------------------------------------------------------

--
-- Table structure for table `campaign_cards`
--

CREATE TABLE `campaign_cards` (
  `id` int(10) NOT NULL,
  `campaign_id` int(10) NOT NULL,
  `card_code` varchar(100) NOT NULL,
  `is_active` int(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `del_flg` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `campaign_cards`
--

INSERT INTO `campaign_cards` (`id`, `campaign_id`, `card_code`, `is_active`, `created_at`, `updated_at`, `del_flg`) VALUES
(1, 1, 'hDXoOAI7BpxYJ', 0, '2017-09-21 18:55:29', '2017-09-21 18:55:29', 0),
(2, 1, 'FepHYPARhlTbe', 0, '2017-09-21 18:55:29', '2017-09-21 18:55:29', 0),
(3, 1, 'bpDe0nb31sZiN', 0, '2017-09-21 18:55:29', '2017-09-21 18:55:29', 0),
(4, 1, '0DK0VoB53JeJj', 0, '2017-09-21 18:55:29', '2017-09-21 18:55:29', 0),
(5, 1, 'hF3Ad1g7J411w', 0, '2017-09-21 18:55:29', '2017-09-21 18:55:29', 0),
(6, 1, '8PyZN6OTyAIwZ', 0, '2017-09-21 18:56:44', '2017-09-21 18:56:44', 0),
(7, 1, 'Zqy0atJII1nzS', 0, '2017-09-21 18:56:44', '2017-09-21 18:56:44', 0),
(8, 2, '3Qe06mci6qmMc', 0, '2017-09-22 18:43:02', '2017-09-22 18:43:02', 0),
(9, 2, 'vUrrWre9EN6iR', 0, '2017-09-22 18:43:02', '2017-09-22 18:43:02', 0),
(10, 2, 'IGzmLXBT9pDk5', 0, '2017-09-22 18:43:02', '2017-09-22 18:43:02', 0),
(11, 2, 'OXSiH6ooCzJj7', 0, '2017-09-22 18:43:02', '2017-09-22 18:43:02', 0);

-- --------------------------------------------------------

--
-- Table structure for table `chinhanh`
--

CREATE TABLE `chinhanh` (
  `id` int(11) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `website` varchar(250) DEFAULT NULL,
  `phone` varchar(250) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chinhanh`
--

INSERT INTO `chinhanh` (`id`, `name`, `website`, `phone`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Văn phòng Hà Nội', 'http://gco.vn/', '(04).32.033.033 - 32.026.026 - - 37.340.201', 'Tầng 2, tòa nhà Handico, Phạm Hùng, Nam Từ Liêm, Hà Nội', '2017-10-11 08:03:21', '2017-10-11 01:03:21'),
(2, 'Văn phòng đại diện', 'http://gco.vn/', '(04) - 38.36 00 88 – Fax: (04) – 38.36 00 88', 'Số 148 Nguyễn Thái Học, Điện Biên, Ba Đình, Hà Nội', '2017-10-11 08:03:26', '2017-10-11 01:03:26');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `photo` text COLLATE utf8_unicode_ci,
  `codemap` longtext COLLATE utf8_unicode_ci,
  `desc` longtext COLLATE utf8_unicode_ci,
  `content` longtext COLLATE utf8_unicode_ci,
  `status` int(11) NOT NULL,
  `keyword` longtext COLLATE utf8_unicode_ci,
  `description` longtext COLLATE utf8_unicode_ci,
  `stt` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `phone` varchar(11) CHARACTER SET latin1 DEFAULT NULL,
  `content` text CHARACTER SET latin1,
  `status` tinyint(2) DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE `counter` (
  `id` int(10) UNSIGNED NOT NULL,
  `tm` int(11) NOT NULL,
  `ip` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `id` int(11) NOT NULL,
  `district_name` varchar(250) DEFAULT NULL,
  `province_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`id`, `district_name`, `province_id`, `created_at`, `updated_at`) VALUES
(1, 'Ba Đình', 4, '2017-09-24 18:03:47', '2017-09-24 18:03:47'),
(2, 'Từ Liêm', 4, '2017-09-24 18:04:29', '2017-09-24 18:04:29'),
(3, 'Hoàn Kiếm', 4, '2017-09-24 18:04:40', '2017-09-24 18:04:40'),
(4, 'Cầu giấy', 4, '2017-09-25 00:14:58', '2017-09-25 00:14:58');

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `photo` text COLLATE utf8_unicode_ci,
  `codemap` longtext COLLATE utf8_unicode_ci,
  `desc` longtext COLLATE utf8_unicode_ci,
  `content` longtext COLLATE utf8_unicode_ci,
  `status` int(11) NOT NULL,
  `stt` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `photo` text COLLATE utf8_unicode_ci,
  `status` int(11) NOT NULL DEFAULT '1',
  `image_path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stt` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `product_id`, `name`, `alias`, `photo`, `status`, `image_path`, `alt`, `stt`, `created_at`, `updated_at`) VALUES
(70, 20, NULL, NULL, '1511166765_pr-a.png', 1, NULL, NULL, 0, '2017-11-20 08:32:45', '2017-11-20 08:32:45'),
(71, 20, NULL, NULL, '1511166765_pro-3.png', 1, NULL, NULL, 0, '2017-11-20 08:32:45', '2017-11-20 08:32:45'),
(72, 20, NULL, NULL, '1511166765_pro-4.png', 1, NULL, NULL, 0, '2017-11-20 08:32:45', '2017-11-20 08:32:45'),
(73, 20, NULL, NULL, '1511166765_pro-6.png', 1, NULL, NULL, 0, '2017-11-20 08:32:45', '2017-11-20 08:32:45');

-- --------------------------------------------------------

--
-- Table structure for table `lienket`
--

CREATE TABLE `lienket` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `link` text COLLATE utf8_unicode_ci,
  `photo` text COLLATE utf8_unicode_ci,
  `mota` longtext COLLATE utf8_unicode_ci,
  `content` longtext COLLATE utf8_unicode_ci,
  `status` int(11) NOT NULL DEFAULT '1',
  `noibat` int(11) NOT NULL DEFAULT '0',
  `com` text COLLATE utf8_unicode_ci,
  `stt` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lienket`
--

INSERT INTO `lienket` (`id`, `user_id`, `name`, `link`, `photo`, `mota`, `content`, `status`, `noibat`, `com`, `stt`, `created_at`, `updated_at`) VALUES
(4, 5, 'Slider 1', NULL, '1503972273_banner.png', NULL, NULL, 1, 0, 'slider', 1, '2017-08-29 02:04:33', '2017-08-28 19:04:33'),
(5, 5, 'Slider 2', 'http://gco.vn/', '1503972281_banner.png', NULL, NULL, 1, 0, 'slider', 2, '2017-08-29 02:04:41', '2017-08-28 19:04:41'),
(8, 5, 'Chị Thanh Lam', NULL, '1504774299_relation-3.png', NULL, NULL, 1, 0, 'cam-nhan', 1, '2017-09-07 08:51:40', '2017-09-07 01:51:40'),
(9, 5, 'Chị Lê Thu Thủy', 'http://gco.vn/', '1504774309_relation-4.png', NULL, NULL, 1, 0, 'cam-nhan', 2, '2017-09-07 08:51:49', '2017-09-07 01:51:49'),
(10, 5, 'Chị Khánh Ngọc', NULL, '1504774321_relation-1.png', NULL, NULL, 1, 0, 'cam-nhan', 3, '2017-09-07 08:52:01', '2017-09-07 01:52:01'),
(11, 5, 'Anh Tuấn Lâm Nhã', NULL, '1504774330_relation-2.png', NULL, NULL, 1, 0, 'cam-nhan', 4, '2017-09-07 08:52:10', '2017-09-07 01:52:10'),
(45, 5, 'right sidebar', NULL, '1510128895_advs1.jpg', NULL, NULL, 1, 0, 'chuyen-muc', 1, '2017-11-08 08:14:55', '2017-11-08 01:14:55'),
(16, 5, 'Chi nhánh Hà Nội', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.761607615941!2d105.82071311450424!3d21.00219108601282!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac83e47ecaa9%3A0x110275dc966aadd8!2sToyota+Thanh+Xu%C3%A2n!5e0!3m2!1svi!2s!4v1504085273578', '1502782745_bv3.jpg', 'Số 65 Cửa Bắc, Phường Trúc Bạch, Quận Ba Đình', '<p>X&atilde; Trưng Trắc, Huyện Văn L&acirc;m, Tỉnh Hưng Y&ecirc;n&nbsp;<br />Tel: (0321)3997151&nbsp;<br />Fax: (0321) 3997152&nbsp;<br />Email: chauhungjsc@hn.vnn.vn</p>', 1, 0, 'chi-nhanh', 1, '2017-09-05 09:34:50', '2017-09-05 02:34:50'),
(17, 5, 'Chi nhánh HCM', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.761607615941!2d105.82071311450424!3d21.00219108601282!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac83e47ecaa9%3A0x110275dc966aadd8!2sToyota+Thanh+Xu%C3%A2n!5e0!3m2!1svi!2s!4v1504085273578', '1502782773_bv1.jpg', '85 Nguyễn Thị Thập(Khu dân cư Himlam, Phường Tân Hưng) Quận 7', '<p>144 Khuất Duy Tiến, P. Nh&acirc;n Ch&iacute;nh, Q. Thanh Xu&acirc;n, HN<br />Tel: (0321)3997151&nbsp;<br />Fax: (0321) 3997152&nbsp;</p>', 1, 0, 'chi-nhanh', 2, '2017-09-05 09:35:59', '2017-09-05 02:35:59'),
(25, 5, 'Đối tác 1', 'http://gco.vn/', '1503974583_dt3.png', NULL, NULL, 1, 0, 'doi-tac', 1, '2017-08-28 19:43:03', '2017-08-28 19:43:03'),
(26, 5, 'Đối tác 2', NULL, '1503974601_dt2.png', NULL, NULL, 1, 0, 'doi-tac', 2, '2017-08-28 19:43:21', '2017-08-28 19:43:21'),
(27, 5, 'Đối tác 3', NULL, '1503974611_dt4.png', NULL, NULL, 1, 0, 'doi-tac', 3, '2017-08-28 19:43:31', '2017-08-28 19:43:31'),
(28, 5, 'Đối tác 4', NULL, '1503974620_dt1.png', NULL, NULL, 1, 0, 'doi-tac', 4, '2017-08-28 19:43:40', '2017-08-28 19:43:40'),
(29, 5, 'Đối tác 5', 'http://gco.vn/', '1503974634_dt5.png', NULL, NULL, 1, 0, 'doi-tac', 5, '2017-08-28 19:43:54', '2017-08-28 19:43:54'),
(35, 5, 'Hình 1', 'http://gco.vn/', '1504230555_1.jpg', NULL, NULL, 1, 0, 'gioi-thieu', 1, '2017-08-31 18:49:15', '2017-08-31 18:49:15'),
(36, 5, 'Hình ảnh 2', NULL, '1504230566_2.jpg', NULL, NULL, 1, 0, 'gioi-thieu', 2, '2017-08-31 18:49:26', '2017-08-31 18:49:26'),
(38, 5, 'Tiêu chí 1', NULL, '', 'Áp dụng ngay các phương pháp giảm cân, tăng cơ được biên soạn chuyên nghiệp đã áp dụng thành công cho nhiều ngôi sao và doanh nhân.', NULL, 1, 0, 'tieu-chi', 1, '2017-09-05 03:05:01', '2017-09-05 03:05:01'),
(39, 5, 'Tiêu chí 2', NULL, '', 'Áp dụng ngay các phương pháp giảm cân, tăng cơ được biên soạn chuyên nghiệp đã áp dụng thành công cho nhiều ngôi sao và doanh nhân.', NULL, 1, 0, 'tieu-chi', 2, '2017-09-05 03:05:10', '2017-09-05 03:05:10'),
(40, 5, 'Tiêu chí 3', NULL, '', 'Áp dụng ngay các phương pháp giảm cân, tăng cơ được biên soạn chuyên nghiệp đã áp dụng thành công cho nhiều ngôi sao và doanh nhân.', NULL, 1, 0, 'tieu-chi', 3, '2017-09-05 03:05:22', '2017-09-05 03:05:22'),
(41, 5, 'Tiêu chí 4', NULL, '', 'Áp dụng ngay các phương pháp giảm cân, tăng cơ được biên soạn chuyên nghiệp đã áp dụng thành công cho nhiều ngôi sao và doanh nhân.', NULL, 1, 0, 'tieu-chi', 4, '2017-09-05 03:05:31', '2017-09-05 03:05:31'),
(46, 5, 'quảng cáo', 'http://gco.vn/', '1510128929_advs2.jpg', NULL, NULL, 1, 0, 'chuyen-muc', 2, '2017-11-08 08:15:29', '2017-11-08 01:15:29'),
(47, 5, 'qc', NULL, '1510128940_advs3.jpg', NULL, NULL, 1, 0, 'chuyen-muc', 3, '2017-11-08 01:15:40', '2017-11-08 01:15:40');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` text COLLATE utf8_unicode_ci,
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `lever` int(11) NOT NULL DEFAULT '0',
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `title` text COLLATE utf8_unicode_ci,
  `keyword` longtext COLLATE utf8_unicode_ci,
  `description` longtext COLLATE utf8_unicode_ci,
  `com` text COLLATE utf8_unicode_ci,
  `stt` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `alias`, `photo`, `status`, `lever`, `parent_id`, `title`, `keyword`, `description`, `com`, `stt`, `created_at`, `updated_at`) VALUES
(3, 'Trang chủ', NULL, NULL, 1, 0, 0, NULL, NULL, NULL, 'menu-top', 1, '2017-08-24 04:42:40', '2017-08-23 21:42:40'),
(2, 'Giới thiệu', 'gioi-thieu', NULL, 1, 0, 0, NULL, NULL, NULL, 'menu-top', 2, '2017-09-01 01:33:58', '2017-08-31 18:33:58'),
(12, 'Sản phẩm', 'san-pham', NULL, 1, 0, 0, NULL, NULL, NULL, 'menu-top', 3, '2017-09-01 01:34:21', '2017-08-31 18:34:21'),
(13, 'Tin tức', 'tin-tuc', NULL, 1, 0, 0, NULL, NULL, NULL, 'menu-top', 4, '2017-08-24 04:17:41', '2017-08-23 21:17:41'),
(14, 'Liên hệ', 'lien-he', NULL, 1, 0, 0, NULL, NULL, NULL, 'menu-top', 5, '2017-08-24 04:17:32', '2017-08-23 21:17:32');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2017_06_05_042524_create_products_table', 1),
('2017_06_05_045215_create_images_table', 1),
('2017_06_07_033057_create_news_categories_table', 1),
('2017_06_07_033135_create_news_table', 1),
('2017_06_07_033425_create_setting_table', 1),
('2017_06_07_033619_create_pages_table', 1),
('2017_06_07_033944_create_contact_table', 1),
('2017_06_07_034012_create_footer_table', 1),
('2017_06_07_034035_create_slider_table', 1),
('2017_06_07_034117_create_useronline_table', 1),
('2017_06_07_034335_create_order_table', 1),
('2017_06_07_034407_create_order_detail_table', 1),
('2017_06_07_034448_create_newsletter_table', 1),
('2017_06_07_034655_create_order_status_table', 1),
('2017_06_07_064339_create_counter_table', 1),
('2017_06_07_070934_create_partner_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `cate_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photo` text COLLATE utf8_unicode_ci,
  `background` text COLLATE utf8_unicode_ci,
  `mota` longtext COLLATE utf8_unicode_ci,
  `content` longtext COLLATE utf8_unicode_ci,
  `status` int(11) NOT NULL,
  `noibat` int(11) DEFAULT '0',
  `title` text COLLATE utf8_unicode_ci,
  `keyword` longtext COLLATE utf8_unicode_ci,
  `description` longtext COLLATE utf8_unicode_ci,
  `com` text COLLATE utf8_unicode_ci,
  `stt` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `cate_id`, `user_id`, `name`, `alias`, `photo`, `background`, `mota`, `content`, `status`, `noibat`, `title`, `keyword`, `description`, `com`, `stt`, `created_at`, `updated_at`) VALUES
(1, 0, 5, 'Tin tức 1', 'tin-tuc-1', '1511145854_brand1.jpg', '1510125790_2016-toyota-avalon-banner.jpg', 'Một vẻ ngoài bảnh bao ngoài trang phục ra thì còn cần đến sự góp sức không nhỏ của những món phụ kiện thời trang quý ông hữu dụng và cá tính. Với các đấng mày râu, ngoài những bộ quần áo vốn chiếm vai trò quan trọng tạo nên sức hút riêng của mình, không thể lãng quên vai trò của những món phụ kiện mang phong cách thời trang nam như trang sức nam thời thượng, như mắt kính, ví bóp nam với màu sắc và kiểu dáng sao cho thật “vừa vặn” khi kết hợp cùng với những bộ trang phục đẳng cấp.', NULL, 1, 1, NULL, NULL, NULL, 'tin-tuc', 1, '2017-11-20 02:44:42', '2017-11-19 19:44:42'),
(2, 0, 5, 'Quần áo thiết kế tay', 'quan-ao-thiet-ke-tay', '1511145928_brand2.jpg', '', NULL, NULL, 1, 1, NULL, NULL, NULL, 'tin-tuc', 2, '2017-11-20 02:45:28', '2017-11-19 19:45:28'),
(3, 0, 5, 'KHÁM PHÁ THỂ GIỚI THỜI TRANG', 'kham-pha-the-gioi-thoi-trang', '1511145950_brand3.jpg', '', NULL, NULL, 1, 1, NULL, NULL, NULL, 'tin-tuc', 3, '2017-11-20 02:45:50', '2017-11-19 19:45:50'),
(4, 0, 5, 'Dự án khu phức hợp sang trọng tiện nghi Ascott Waterfront Saigon TP Hồ Chí Minh', 'du-an-khu-phuc-hop-sang-trong-tien-nghi-ascott-waterfront-saigon-tp-ho-chi-minh', '1511145961_brand4.jpg', '', 'Tọa lạc tại số 1 – 1A Tôn Đức Thắng, phường Bến Nghé, quận 1, căn hộ cao cấp Ascott Waterfront Saigon là một phần của tòa nhà phức hợp bao gồm khu vực văn phòng với trụ sở của nhiều công ty tài chính và ngân hàng.', '<p>Tọa lạc tại số 1 &ndash; 1A T&ocirc;n Đức Thắng, phường Bến Ngh&eacute;, quận 1, căn hộ cao cấp Ascott Waterfront Saigon l&agrave; một phần của t&ograve;a nh&agrave; phức hợp bao gồm khu vực văn ph&ograve;ng với trụ sở của nhiều c&ocirc;ng ty t&agrave;i ch&iacute;nh v&agrave; ng&acirc;n h&agrave;ng.</p>\r\n<p><img src=\"https://bizweb.dktcdn.net/100/199/106/files/20151207145552-7ba6.jpg?v=1492971609996\" alt=\"Dự &aacute;n khu phức hợp sang trọng tiện nghi Ascott Waterfront Saigon TP Hồ Ch&iacute; Minh\" width=\"615\" height=\"738\" /></p>\r\n<p><br /><strong>Quy m&ocirc; dự &aacute;n Ascott Waterfront Saigon</strong></p>\r\n<p>Dự &aacute;n Ascott Waterfront Saigon được x&acirc;y dựng tr&ecirc;n khu đất c&oacute; diện t&iacute;ch 2.190 m2, l&agrave; khu cao ốc thương mại v&agrave; căn hộ cao cấp hạng A với t&ograve;a th&aacute;p cao 27 tầng, 4 tầng hầm, 1 tầng s&acirc;n thượng v&agrave; 1 tầng hồ bơi.<br />Trong đ&oacute; từ tầng trệt đến tầng 9 l&agrave; khu vực văn ph&ograve;ng, trung t&acirc;m thương mại. Từ t&acirc;ng 10 đến tầng 25 l&agrave; khu căn hộ, tầng 26 v&agrave; 27 l&agrave; khu penthouse.</p>\r\n<p><img src=\"https://bizweb.dktcdn.net/100/199/106/files/anh-thuc-te-1460537793.jpg?v=1492971641836\" alt=\"Dự &aacute;n khu phức hợp sang trọng tiện nghi Ascott Waterfront Saigon TP Hồ Ch&iacute; Minh\" width=\"600\" height=\"800\" /></p>\r\n<p>&nbsp;</p>\r\n<p>T&ograve;a nh&agrave; cung cấp c&aacute;c dịch vụ hạng sang cao cấp bao gồm dịch vụ: ng&acirc;n h&agrave;ng, văn ph&ograve;ng thương mại, căn hộ cao cấp v&agrave; c&acirc;u lạc bộ. Căn hộ Ascott Waterfront saigon c&oacute; chức năng hỗn hợp thương mại v&agrave; căn hộ cao cấp.</p>\r\n<p><img src=\"https://bizweb.dktcdn.net/100/199/106/files/tien-cich-du-an-1460537819.jpg?v=1492971707093\" alt=\"Dự &aacute;n khu phức hợp sang trọng tiện nghi Ascott Waterfront Saigon TP Hồ Ch&iacute; Minh\" width=\"950\" height=\"634\" /></p>\r\n<p>Th&ocirc;ng tin từ CafeLand</p>\r\n<p>Dự &aacute;n Ascott Waterfront Saigon được quản l&yacute; bởi The Ascott Limited (Ascott) v&agrave; Tập đo&agrave;n M.I.K Corporation. Dự &aacute;n n&agrave;y hiện đang trong qu&aacute; tr&igrave;nh ho&agrave;n thiện. Đ&acirc;y l&agrave; dự &aacute;n căn hộ si&ecirc;u sang tại TP.HCM với gi&aacute; rao b&aacute;n tr&ecirc;n thị trường khoảng 8.000 USD/m2</p>', 1, 0, NULL, NULL, NULL, 'tin-tuc', 4, '2017-11-20 02:46:01', '2017-11-19 19:46:01'),
(8, 0, 5, 'Tin tuyển dụng 1', 'tin-tuyen-dung-1', '1507947364_home-item-1.jpg', '', NULL, NULL, 1, 0, NULL, NULL, NULL, 'tuyen-dung', 1, '2017-10-14 02:20:41', '2017-10-13 19:16:04'),
(9, 0, 5, 'tin tuyen dụng hot', 'tin-tuyen-dung-hot', '1507947598_home-cate-2.jpg', '', NULL, NULL, 1, 0, NULL, NULL, NULL, 'tuyen-dung', 2, '2017-10-14 02:20:47', '2017-10-13 19:19:58'),
(10, 0, 5, 'Tin tức 2', 'tin-tuc-2', '1511145987_brand1.jpg', '', 'Một vẻ ngoài bảnh bao ngoài trang phục ra thì còn cần đến sự góp sức không nhỏ của những món phụ kiện thời trang quý ông hữu dụng và cá tính. Với các đấng mày râu, ngoài những bộ quần áo vốn chiếm vai trò quan trọng tạo nên sức hút riêng của mình, không thể lãng quên vai trò của những món phụ kiện mang phong cách thời trang nam như trang sức nam thời thượng, như mắt kính, ví bóp nam với màu sắc và kiểu dáng sao cho', NULL, 1, 0, NULL, NULL, NULL, 'tin-tuc', 5, '2017-11-20 02:46:27', '2017-11-19 19:46:27'),
(11, 0, 5, 'tin tức 3', 'tin-tuc-3', '1511146009_brand3.jpg', '', 'Một vẻ ngoài bảnh bao ngoài trang phục ra thì còn cần đến sự góp sức không nhỏ của những món phụ kiện thời trang quý ông hữu dụng và cá tính. Với các đấng mày râu, ngoài những bộ quần áo vốn chiếm vai trò quan trọng tạo nên sức hút riêng của mình, không thể lãng quên vai trò của những món phụ kiện mang phong cách thời trang nam như trang sức nam thời thượng, như mắt kính, ví bóp nam với màu sắc và kiểu dáng sao cho', NULL, 1, 0, NULL, NULL, NULL, 'tin-tuc', 6, '2017-11-20 02:46:49', '2017-11-19 19:46:49'),
(12, 0, 5, 'Tin tức 4', 'tin-tuc-4', '1511146019_brand4.jpg', '', 'Một vẻ ngoài bảnh bao ngoài trang phục ra thì còn cần đến sự góp sức không nhỏ của những món phụ kiện thời trang quý ông hữu dụng và cá tính. Với các đấng mày râu, ngoài những bộ quần áo vốn chiếm vai trò quan trọng tạo nên sức hút riêng của mình, không thể lãng quên vai trò của những món phụ kiện mang phong cách thời trang nam như trang sức nam thời thượng, như mắt kính, ví bóp nam với màu sắc và kiểu dáng sao cho', NULL, 1, 0, NULL, NULL, NULL, 'tin-tuc', 7, '2017-11-20 02:46:59', '2017-11-19 19:46:59');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `name` text COLLATE utf8_unicode_ci,
  `link` text COLLATE utf8_unicode_ci,
  `email` text COLLATE utf8_unicode_ci,
  `phone` text COLLATE utf8_unicode_ci,
  `photo` text COLLATE utf8_unicode_ci,
  `mota` longtext COLLATE utf8_unicode_ci,
  `content` longtext COLLATE utf8_unicode_ci,
  `status` int(11) NOT NULL DEFAULT '1',
  `noibat` int(11) NOT NULL DEFAULT '0',
  `com` text COLLATE utf8_unicode_ci,
  `stt` int(11) DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `user_id`, `name`, `link`, `email`, `phone`, `photo`, `mota`, `content`, `status`, `noibat`, `com`, `stt`, `created_at`, `updated_at`) VALUES
(47, 0, NULL, NULL, 'chuonghoanghong@gmail.com', NULL, NULL, NULL, NULL, 1, 0, 'newsletter', 1, '2017-11-20 01:06:37', '2017-11-20 01:06:37'),
(48, 5, NULL, NULL, 'gco@gmail.com', NULL, NULL, NULL, NULL, 1, 0, 'newsletter', 1, '2017-11-20 08:10:29', '2017-11-20 01:10:29');

-- --------------------------------------------------------

--
-- Table structure for table `news_categories`
--

CREATE TABLE `news_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mota` text COLLATE utf8_unicode_ci,
  `status` int(11) NOT NULL DEFAULT '0',
  `lever` int(11) NOT NULL DEFAULT '0',
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `title` text COLLATE utf8_unicode_ci,
  `keyword` longtext COLLATE utf8_unicode_ci,
  `description` longtext COLLATE utf8_unicode_ci,
  `com` text COLLATE utf8_unicode_ci,
  `stt` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `background` text COLLATE utf8_unicode_ci,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news_categories`
--

INSERT INTO `news_categories` (`id`, `name`, `alias`, `photo`, `mota`, `status`, `lever`, `parent_id`, `title`, `keyword`, `description`, `com`, `stt`, `created_at`, `background`, `updated_at`) VALUES
(3, 'Tin nội bộ', 'tin-noi-bo', NULL, NULL, 1, 0, 0, NULL, NULL, NULL, 'tin-tuc', 2, '2017-08-07 21:52:19', NULL, '2017-08-08 00:13:28'),
(2, 'Tin thế giới', 'tin-the-gioi', NULL, NULL, 1, 0, 0, NULL, NULL, NULL, 'tin-tuc', 1, '2017-08-07 21:36:29', NULL, '2017-08-08 00:13:31'),
(13, 'Cách thức thanh toán', 'cach-thuc-thanh-toan', NULL, NULL, 1, 0, 0, NULL, NULL, NULL, 'bai-viet', 1, '2017-08-29 04:05:32', NULL, '2017-08-28 21:05:32'),
(14, 'Quy định mua hàng', 'quy-dinh-mua-hang', NULL, NULL, 1, 0, 0, NULL, NULL, NULL, 'bai-viet', 2, '2017-08-29 04:05:44', NULL, '2017-08-28 21:05:44'),
(20, 'Không gian phòng ngủ', 'khong-gian-phong-ngu', '1504077747_1_19.jpg', 'Phòng khách là không gian chính của ngôi nhà, là nơi sum họp của các thành viên trong gia đình, thể hiện gu thẩm mỹ và tính cách của gia chủ.', 1, 0, 0, NULL, NULL, NULL, 'khong-gian', 1, '2017-08-30 07:48:00', NULL, '2017-08-30 00:48:00'),
(21, 'Không gian phòng khách', 'khong-gian-phong-khach', '1504078021_1_20.jpg', 'Phòng khách là không gian chính của ngôi nhà, là nơi sum họp của các thành viên trong gia đình, thể hiện gu thẩm mỹ và tính cách của gia chủ.', 1, 0, 0, NULL, NULL, NULL, 'khong-gian', 2, '2017-08-30 07:48:07', NULL, '2017-08-30 00:48:07'),
(22, 'Phòng bếp hiện đại', 'phong-bep-hien-dai', '1504078039_1_21.jpg', 'Phòng khách là không gian chính của ngôi nhà, là nơi sum họp của các thành viên trong gia đình, thể hiện gu thẩm mỹ và tính cách của gia chủ.', 1, 0, 0, NULL, NULL, NULL, 'khong-gian', 3, '2017-08-30 07:48:12', NULL, '2017-08-30 00:48:12'),
(23, 'Phòng ngủ châu âu', 'phong-ngu-chau-au', '1504078067_1_20.jpg', 'Phòng khách là không gian chính của ngôi nhà, là nơi sum họp của các thành viên trong gia đình, thể hiện gu thẩm mỹ và tính cách của gia chủ.', 1, 0, 0, NULL, NULL, NULL, 'khong-gian', 4, '2017-08-30 07:48:18', NULL, '2017-08-30 00:48:18'),
(31, 'Sản phẩm khác', 'san-pham-khac', '1505465773_sv3.jpg', 'Every man sooner or later, confronts with the problem of damage of teeth and dentition.', 1, 0, 0, NULL, NULL, NULL, 'dich-vu', 3, '2017-09-15 09:49:21', '1505468961_dv4.png', '2017-09-15 02:49:21'),
(30, 'Canxi nano', 'canxi-nano', '1505465758_sv2.jpg', 'Every man sooner or later, confronts with the problem of damage of teeth and dentition.', 1, 0, 0, NULL, NULL, NULL, 'dich-vu', 2, '2017-09-15 09:48:41', '1505468921_dv3.png', '2017-09-15 02:48:41'),
(29, 'Sản phẩm bảo vệ sức khỏe', 'san-pham-bao-ve-suc-khoe', '1505465729_sv1.jpg', 'Every man sooner or later, confronts with the problem of damage of teeth and dentition.', 1, 0, 0, NULL, NULL, NULL, 'dich-vu', 1, '2017-09-16 04:14:59', '1505468944_dv4.png', '2017-09-15 21:14:59'),
(33, 'Sản phẩm mới nhập', 'san-pham-moi-nhap', '', NULL, 0, 0, 0, NULL, NULL, NULL, 'dich-vu', 4, '2017-09-18 01:49:43', '', '2017-09-17 18:49:43');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `photo` text COLLATE utf8_unicode_ci,
  `desc` longtext COLLATE utf8_unicode_ci,
  `content` longtext COLLATE utf8_unicode_ci,
  `com` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `stt` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `photo` text COLLATE utf8_unicode_ci NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `hoten` text COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `qty` text COLLATE utf8_unicode_ci NOT NULL,
  `totalprice` int(11) NOT NULL,
  `tonggia` int(11) NOT NULL,
  `donhang` longtext COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `stt` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_status`
--

CREATE TABLE `order_status` (
  `id` int(10) UNSIGNED NOT NULL,
  `tinhtrang` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `photo` text COLLATE utf8_unicode_ci,
  `desc` longtext COLLATE utf8_unicode_ci,
  `content` longtext COLLATE utf8_unicode_ci,
  `status` int(11) NOT NULL,
  `keyword` longtext COLLATE utf8_unicode_ci,
  `description` longtext COLLATE utf8_unicode_ci,
  `stt` int(11) NOT NULL,
  `com` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `partner`
--

CREATE TABLE `partner` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `url` text COLLATE utf8_unicode_ci,
  `photo` text COLLATE utf8_unicode_ci,
  `desc` longtext COLLATE utf8_unicode_ci,
  `content` longtext COLLATE utf8_unicode_ci,
  `com` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `stt` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `partner`
--

INSERT INTO `partner` (`id`, `name`, `url`, `photo`, `desc`, `content`, `com`, `status`, `stt`, `created_at`, `updated_at`) VALUES
(1, '1', NULL, '1511162522_br-1.png', NULL, NULL, 'doi-tac', 1, NULL, '2017-11-20 00:22:02', '2017-11-20 00:22:02'),
(2, '2', NULL, '1511162533_br-2.png', NULL, NULL, 'doi-tac', 1, NULL, '2017-11-20 00:22:13', '2017-11-20 00:22:13'),
(3, '32', NULL, '1511163197_br-3.png', NULL, NULL, 'doi-tac', 1, NULL, '2017-11-20 00:22:21', '2017-11-20 00:35:30'),
(4, '4', NULL, '1511163348_br-4.png', NULL, NULL, 'doi-tac', 1, NULL, '2017-11-20 00:35:48', '2017-11-20 00:35:48'),
(5, '5', NULL, '1511163358_br-5.png', NULL, NULL, 'doi-tac', 1, NULL, '2017-11-20 00:35:58', '2017-11-20 00:35:58'),
(6, '6', NULL, '1511163367_br-6.png', NULL, NULL, 'doi-tac', 1, NULL, '2017-11-20 00:36:07', '2017-11-20 00:36:07'),
(7, '7', NULL, '1511163401_br-7.png', NULL, NULL, 'doi-tac', 1, NULL, '2017-11-20 00:36:41', '2017-11-20 00:36:41'),
(8, '8', NULL, '1511163415_br-8.png', NULL, NULL, 'doi-tac', 1, NULL, '2017-11-20 00:36:55', '2017-11-20 00:36:55');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `cate_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `code` text COLLATE utf8_unicode_ci,
  `stt` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photo` text COLLATE utf8_unicode_ci,
  `price` int(11) NOT NULL DEFAULT '0',
  `sale` int(11) DEFAULT '0',
  `price_old` int(11) DEFAULT '0',
  `mota` longtext COLLATE utf8_unicode_ci,
  `content` longtext COLLATE utf8_unicode_ci,
  `thuonghieu` text COLLATE utf8_unicode_ci,
  `tinhtrang` int(11) NOT NULL DEFAULT '1',
  `video` text COLLATE utf8_unicode_ci,
  `baohanh` text COLLATE utf8_unicode_ci,
  `properties` text CHARACTER SET utf8,
  `model` text COLLATE utf8_unicode_ci,
  `namsanxuat` text COLLATE utf8_unicode_ci,
  `quatang` text COLLATE utf8_unicode_ci,
  `huongdan` text COLLATE utf8_unicode_ci,
  `vanchuyen` text COLLATE utf8_unicode_ci,
  `noibat` int(11) NOT NULL DEFAULT '0',
  `phoido` int(11) DEFAULT '0',
  `xuthe` int(11) DEFAULT '0',
  `spbc` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1',
  `title` text COLLATE utf8_unicode_ci,
  `keyword` longtext COLLATE utf8_unicode_ci,
  `description` longtext COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `user_id`, `cate_id`, `code`, `stt`, `name`, `alias`, `photo`, `price`, `sale`, `price_old`, `mota`, `content`, `thuonghieu`, `tinhtrang`, `video`, `baohanh`, `properties`, `model`, `namsanxuat`, `quatang`, `huongdan`, `vanchuyen`, `noibat`, `phoido`, `xuthe`, `spbc`, `status`, `title`, `keyword`, `description`, `created_at`, `updated_at`) VALUES
(1, 5, 1, NULL, 1, 'Sản phẩm 1', 'san-pham-1', '1511149104_pr-3.png', 150000, 0, 0, '<p>gd dg&nbsp;</p>', '<p>f sg d</p>', NULL, 0, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, 1, 0, 0, 1, 1, NULL, NULL, NULL, '2017-11-21 01:16:25', '2017-11-20 18:16:25'),
(2, 5, 2, NULL, 2, 'Sản phẩm 2', 'san-pham-2', '1511144298_pr-1.png', 3000000, 0, 0, NULL, NULL, NULL, 0, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, 1, 0, 0, 1, 1, NULL, NULL, NULL, '2017-11-21 01:16:33', '2017-11-20 18:16:33'),
(3, 5, 2, NULL, 3, 'Sản phẩm 4', 'san-pham-4', '1511144308_pr-2.png', 5000000, 0, 0, NULL, '<p>f sf s&nbsp;</p>', NULL, 0, NULL, NULL, '', NULL, NULL, NULL, '<p>fs sfd&nbsp;</p>', NULL, 0, 0, 0, 1, 1, NULL, NULL, NULL, '2017-11-20 02:18:28', '2017-11-19 19:18:28'),
(4, 5, 2, NULL, 4, 'Sản phẩm x', 'san-pham-x', '1511144317_pr-3.png', 3000000, 0, 0, NULL, NULL, NULL, 0, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 1, NULL, NULL, NULL, '2017-11-20 02:18:37', '2017-11-19 19:18:37'),
(6, 5, 2, NULL, 6, 'Sản phẩm demo 1', 'san-pham-demo-1', '1511144329_pr-4.png', 1000000, 0, 0, '<p>Innova l&agrave; chữ viết tắt của từ &ldquo;Innovative&rdquo;, c&oacute; nghĩa l&agrave; đổi mới, hiện đại v&agrave; s&aacute;ng tạo. Hơn thế nữa, Innova l&agrave; thế hệ mới của d&ograve;ng xe đa dụng (MPV) trong chiến lược to&agrave;n cầu của Toyota. L&agrave; một sản phẩm c&oacute; chất lượng to&agrave;n cầu, Innova mang đến cho kh&aacute;ch h&agrave;ng kh&ocirc;ng chỉ với chất lượng h&agrave;ng đầu m&agrave; c&ograve;n kiểu d&aacute;ng tuyệt đẹp với phong c&aacute;ch trang nh&atilde;, thiết kế ho&agrave;n hảo, t&iacute;nh năng hoạt động tốt v&agrave; độ an to&agrave;n cao. V&igrave; vậy, kể từ khi được giới thiệu lần đầu ti&ecirc;n v&agrave;o th&aacute;ng 8 năm 2004, Innova đ&atilde; rất được ưa chuộng tr&ecirc;n thế giới v&agrave; được kh&aacute;ch h&agrave;ng Việt Nam đ&oacute;n nhận nồng nhiệt.</p>', '<p>Đ&egrave;n ch&ugrave;m trang tr&iacute; tạo kh&ocirc;ng gian ph&ograve;ng kh&aacute;ch ấm c&uacute;ng v&agrave; sang trọng</p>\r\n<p>nh s&aacute;ng của đ&egrave;n ch&ugrave;m ph&ograve;ng kh&aacute;ch cực kỳ quan trọng trong việc trang tr&iacute; nội thất căn ph&ograve;ng. Ngo&agrave;i những c&ocirc;ng năng trang tr&iacute; chiếu s&aacute;ng th&ocirc;ng thường ch&uacute;ng c&ograve;n g&oacute;p phần t&ocirc;n l&ecirc;n vẻ đẹp sang trọng, ấm c&uacute;ng cho căn ph&ograve;ng kh&aacute;ch của bạn.</p>\r\n<p>Để tạo ra một ko gian ấm &aacute;p với &aacute;nh nguồn &aacute;nh s&aacute;ng dịu nhẹ, lan tỏa bạn cần treo một chiếc đ&egrave;n ch&ugrave;m trang tr&iacute; đảm bảo cường độ &aacute;nh s&aacute;ng vừa phải, nguồn &aacute;nh s&aacute;ng t&ocirc;ng v&agrave;ng sẽ mang lại một cảm gi&aacute;c ấm &aacute;p cho căn ph&ograve;ng v&agrave; đỡ tr&oacute;i mắt . Ngo&agrave;i ra treo một đ&egrave;n ch&ugrave;m pha l&ecirc; lớn tr&ecirc;n trần của ph&ograve;ng ăn cũng rất tốt v&igrave; n&oacute; tượng trưng cho năng lượng dương, rất tốt cho c&aacute;c bữa ăn.</p>\r\n<p>Lựa chọn đ&egrave;n trang tr&iacute; ph&ugrave; hợp cho ph&ograve;ng kh&aacute;ch Đ&egrave;n ch&ugrave;m ph&ograve;ng kh&aacute;ch phải tạo được cho căn ph&ograve;ng kh&ocirc;ng gian ấm c&uacute;ng v&agrave; sang trọng. C&oacute; thể bố tr&iacute; cho ph&ograve;ng kh&aacute;ch những ngọn đ&egrave;n ch&ugrave;m đẹp lấp l&aacute;nh sẽ l&agrave;m cho ph&ograve;ng kh&aacute;ch th&ecirc;m lung linh</p>\r\n<p>C&oacute; rất nhiều loại đ&egrave;n trang tr&iacute; nội thất như đ&egrave;n ch&ugrave;m, đ&egrave;n trần, đ&egrave;n b&agrave;n, ... mỗi loại c&oacute; một ưu điểm v&agrave; c&aacute;ch b&agrave;i tr&iacute; xắp đặt ri&ecirc;ng, v&igrave; k&iacute;ch cỡ mỗi loại kh&aacute;c nhau n&ecirc;n cần phải lụa chọn cho ph&ugrave; hợp với từng kh&ocirc;ng gian</p>\r\n<p>Ch&iacute;nh v&igrave; vậy m&agrave; treo đ&egrave;n ch&ugrave;m trang tr&iacute; ph&ograve;ng kh&aacute;ch cần phải hiểu r&otilde; chức năng, biết lựa chọn đ&egrave;n c&oacute; k&iacute;ch thước ph&ugrave; hợp, ngo&agrave;i việc bạn cần hiểu về đặc điểm từng loại ra th&igrave; đ&egrave;n c&ograve;n phải gắn với kh&ocirc;ng gian kiến tr&uacute;c v&agrave; nội thất.</p>', NULL, 0, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, 1, 0, 1, NULL, NULL, NULL, '2017-11-21 06:55:34', '2017-11-20 23:55:34'),
(7, 5, 1, NULL, 7, 'Sản phẩm y', 'san-pham-y', '1511144351_pr-5.png', 1000000, 0, 0, NULL, NULL, NULL, 0, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 1, NULL, NULL, NULL, '2017-11-20 02:19:11', '2017-11-19 19:19:11'),
(8, 5, 1, NULL, 8, 'Sản phẩm z', 'san-pham-z', '1511149130_pr-4.png', 2000000, 0, 0, NULL, NULL, NULL, 0, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 1, NULL, NULL, NULL, '2017-11-20 03:38:50', '2017-11-19 20:38:50'),
(9, 5, 1, NULL, 9, 'Sản phẩm demo 2', 'san-pham-demo-2', '1511149690_pro-8.png', 3000000, 0, 0, NULL, NULL, NULL, 0, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, 1, 1, 0, 0, 1, NULL, NULL, NULL, '2017-11-21 03:50:49', '2017-11-20 20:50:49'),
(10, 5, 2, NULL, 10, 'Sản phẩm demo x', 'san-pham-demo-x', '1511150896_pr-9.png', 14000000, 0, 0, NULL, NULL, NULL, 0, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 1, 1, 0, 1, NULL, NULL, NULL, '2017-11-21 06:55:48', '2017-11-20 23:55:48'),
(11, 5, 1, NULL, 11, 'Sản phẩm demo 4', 'san-pham-demo-4', '1511149119_pr-8.png', 5000000, 0, 0, NULL, NULL, NULL, 0, NULL, NULL, 'Hãng sản xuất: Apple###sdf sf###sdf s sdf###Xuất xứ: Chính hãng', NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 1, 1, NULL, NULL, NULL, '2017-11-20 08:17:19', '2017-11-20 01:17:19'),
(13, 5, 1, NULL, 13, 'Sản phẩm xyz', 'san-pham-xyz', '1511149142_pr-7.png', 2000000, 0, 0, '<p>Nội dung m&ocirc; tả sản phẩm</p>', '<table border=\"1\" cellspacing=\"0\" cellpadding=\"0\">\r\n<tbody>\r\n<tr>\r\n<td colspan=\"3\" height=\"19\">\r\n<p><strong>Th&ocirc;ng số kỹ thuật</strong></p>\r\n</td>\r\n<td valign=\"top\">\r\n<p align=\"center\">LC 200</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td colspan=\"3\" height=\"19\">\r\n<p>Động cơ</p>\r\n</td>\r\n<td valign=\"top\">\r\n<p align=\"center\">4.7 l&iacute;t ( 2UZ-FE)</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td colspan=\"3\" height=\"19\">\r\n<p>Hộp số</p>\r\n</td>\r\n<td valign=\"top\">\r\n<p align=\"center\">5 số tự động</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td colspan=\"4\" valign=\"top\" height=\"19\">\r\n<p><strong>K&Iacute;CH THƯỚC V&Agrave; TRỌNG LƯỢNG</strong></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td colspan=\"2\">\r\n<p>K&iacute;ch thước tổng thể (D&agrave;i x Rộng x Cao)</p>\r\n</td>\r\n<td width=\"68\">\r\n<p align=\"center\">mm</p>\r\n</td>\r\n<td width=\"243\">\r\n<p align=\"center\">4950 x 1970 x 1905</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td colspan=\"2\">\r\n<p>Chiều d&agrave;i cơ sở&nbsp;</p>\r\n</td>\r\n<td>\r\n<p align=\"center\">mm</p>\r\n</td>\r\n<td>\r\n<p align=\"center\">2850</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width=\"349\">\r\n<p>Chiều rộng cơ sở</p>\r\n</td>\r\n<td width=\"88\">\r\n<p>Trước x sau</p>\r\n</td>\r\n<td>\r\n<p align=\"center\">mm</p>\r\n</td>\r\n<td>\r\n<p align=\"center\">1640/1635</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td colspan=\"2\">\r\n<p>K&iacute;ch thước nội thất ( D&agrave;i x Rộng x Cao)</p>\r\n</td>\r\n<td>\r\n<p align=\"center\">mm</p>\r\n</td>\r\n<td>\r\n<p align=\"center\">2715 x 1640 x 1200</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td colspan=\"2\">\r\n<p>Khoảng s&aacute;ng gầm xe&nbsp;</p>\r\n</td>\r\n<td>\r\n<p align=\"center\">mm</p>\r\n</td>\r\n<td>\r\n<p align=\"center\">225</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td colspan=\"2\">\r\n<p>B&aacute;n k&iacute;nh quay v&ograve;ng tối thiểu</p>\r\n</td>\r\n<td>\r\n<p align=\"center\">m</p>\r\n</td>\r\n<td>\r\n<p align=\"center\">5,9</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td rowspan=\"2\">\r\n<p>Trọng lượng</p>\r\n</td>\r\n<td>\r\n<p>&nbsp;Kh&ocirc;ng tải</p>\r\n</td>\r\n<td>\r\n<p align=\"center\">kg</p>\r\n</td>\r\n<td>\r\n<p align=\"center\">2675</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>&nbsp;To&agrave;n tải</p>\r\n</td>\r\n<td>\r\n<p align=\"center\">kg</p>\r\n</td>\r\n<td>\r\n<p align=\"center\">3300</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td colspan=\"4\">\r\n<p><strong>KHUNG XE</strong></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td rowspan=\"2\">\r\n<p>Hệ thống treo</p>\r\n</td>\r\n<td>\r\n<p align=\"center\">Trước</p>\r\n</td>\r\n<td>\r\n<p align=\"center\">&nbsp;</p>\r\n</td>\r\n<td>\r\n<p align=\"center\">&ETH;ộc lập với đ&ograve;n k&eacute;p, l&ograve; xo cuộn v&agrave; thanh c&acirc;n bằng</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p align=\"center\">Sau</p>\r\n</td>\r\n<td>\r\n<p align=\"center\">&nbsp;</p>\r\n</td>\r\n<td valign=\"top\">\r\n<p align=\"center\">Phụ thuộc, loại 4 điểm, l&ograve; xo cuộn v&agrave; tay đ&ograve;n b&ecirc;n</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Hệ thống phanh</p>\r\n</td>\r\n<td>\r\n<p align=\"center\">Trước/Sau</p>\r\n</td>\r\n<td>\r\n<p align=\"center\">&nbsp;</p>\r\n</td>\r\n<td>\r\n<p align=\"center\">&ETH;ĩa th&ocirc;ng gi&oacute; 17\"</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Dung t&iacute;ch b&igrave;nh nhi&ecirc;n liệu</p>\r\n</td>\r\n<td>\r\n<p>&nbsp;</p>\r\n</td>\r\n<td>\r\n<p align=\"center\">l&iacute;t</p>\r\n</td>\r\n<td>\r\n<p align=\"center\">93 + 45</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Vỏ xe</p>\r\n</td>\r\n<td>\r\n<p>&nbsp;</p>\r\n</td>\r\n<td>\r\n<p align=\"center\">&nbsp;</p>\r\n</td>\r\n<td>\r\n<p align=\"center\">285/65 R17</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>M&acirc;m xe</p>\r\n</td>\r\n<td>\r\n<p>&nbsp;</p>\r\n</td>\r\n<td>\r\n<p align=\"center\">&nbsp;</p>\r\n</td>\r\n<td>\r\n<p align=\"center\">M&acirc;m đ&uacute;c 17\"</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td colspan=\"4\">\r\n<p><strong>ĐỘNG CƠ</strong></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>VVT-i</p>\r\n</td>\r\n<td>\r\n<p align=\"center\">&nbsp;</p>\r\n</td>\r\n<td>\r\n<p>&nbsp;</p>\r\n</td>\r\n<td>\r\n<p align=\"center\">C&oacute;</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Kiểu</p>\r\n</td>\r\n<td>\r\n<p>&nbsp;</p>\r\n</td>\r\n<td>\r\n<p align=\"center\">&nbsp;</p>\r\n</td>\r\n<td>\r\n<p align=\"center\">V8, 32 van, DOHC</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Dung t&iacute;ch c&ocirc;ng t&aacute;c</p>\r\n</td>\r\n<td>\r\n<p>&nbsp;</p>\r\n</td>\r\n<td>\r\n<p align=\"center\">cc</p>\r\n</td>\r\n<td>\r\n<p align=\"center\">4664</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>C&ocirc;ng suất tối đa (EEC NET)</p>\r\n</td>\r\n<td>\r\n<p>&nbsp;</p>\r\n</td>\r\n<td>\r\n<p align=\"center\">HP/rpm</p>\r\n</td>\r\n<td>\r\n<p align=\"center\">271 / 5400</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>M&ocirc; men xoắn tối đa (EEC NET)</p>\r\n</td>\r\n<td>\r\n<p>&nbsp;</p>\r\n</td>\r\n<td>\r\n<p align=\"center\">Kg.m/rpm</p>\r\n</td>\r\n<td>\r\n<p align=\"center\">41.8 / 3400</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Ti&ecirc;u chuẩn kh&iacute; thải</p>\r\n</td>\r\n<td>\r\n<p>&nbsp;</p>\r\n</td>\r\n<td>\r\n<p align=\"center\">&nbsp;</p>\r\n</td>\r\n<td>\r\n<p align=\"center\">Euro Step 3</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Tốc độ tối đa</p>\r\n</td>\r\n<td>\r\n<p>&nbsp;</p>\r\n</td>\r\n<td>\r\n<p align=\"center\">Km/h</p>\r\n</td>\r\n<td>\r\n<p align=\"center\">200</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Chế độ 4 b&aacute;nh chủ động</p>\r\n</td>\r\n<td>\r\n<p>&nbsp;</p>\r\n</td>\r\n<td>\r\n<p align=\"center\">&nbsp;</p>\r\n</td>\r\n<td>\r\n<p align=\"center\">To&agrave;n phần</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td colspan=\"4\">\r\n<p>TRANG THIẾT BỊ CH&Iacute;NH</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>K&iacute;nh chiếu hậu ngo&agrave;i chỉnh điện</p>\r\n</td>\r\n<td>\r\n<p align=\"center\">&nbsp;</p>\r\n</td>\r\n<td>\r\n<p>&nbsp;</p>\r\n</td>\r\n<td>\r\n<p align=\"center\">C&oacute;</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Hệ thống kiểm so&aacute;t h&agrave;nh tr&igrave;nh</p>\r\n</td>\r\n<td>\r\n<p align=\"center\">&nbsp;</p>\r\n</td>\r\n<td>\r\n<p align=\"center\">&nbsp;</p>\r\n</td>\r\n<td>\r\n<p align=\"center\">C&oacute;</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>*Hệ thống &acirc;m thanh</p>\r\n</td>\r\n<td>\r\n<p>&nbsp;</p>\r\n</td>\r\n<td>\r\n<p>&nbsp;</p>\r\n</td>\r\n<td>\r\n<p align=\"center\">AM/FM, Cassette, CD 6 đĩa, 6 loa</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td rowspan=\"2\">\r\n<p>*Hệ thống &ETH;iều ho&agrave;</p>\r\n</td>\r\n<td>\r\n<p>Loại</p>\r\n</td>\r\n<td>\r\n<p align=\"center\">&nbsp;</p>\r\n</td>\r\n<td>\r\n<p align=\"center\">Tự động, điều chỉnh 2 v&ugrave;ng độc lập</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Bộ lọc kh&iacute;</p>\r\n</td>\r\n<td>\r\n<p align=\"center\">&nbsp;</p>\r\n</td>\r\n<td>\r\n<p align=\"center\">C&oacute;</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td rowspan=\"4\">\r\n<p>Ghế</p>\r\n</td>\r\n<td>\r\n<p>Trượt</p>\r\n</td>\r\n<td>\r\n<p align=\"center\">&nbsp;</p>\r\n</td>\r\n<td>\r\n<p align=\"center\">H&agrave;ng 1 v&agrave; 2</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Ngả</p>\r\n</td>\r\n<td>\r\n<p align=\"center\">&nbsp;</p>\r\n</td>\r\n<td>\r\n<p align=\"center\">H&agrave;ng 1 v&agrave; 2</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Điều chỉnh độ cao</p>\r\n</td>\r\n<td>\r\n<p>&nbsp;</p>\r\n</td>\r\n<td>\r\n<p align=\"center\">Ghế người l&aacute;i + h&agrave;nh kh&aacute;ch trước</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Đệm lưng</p>\r\n</td>\r\n<td>\r\n<p>&nbsp;</p>\r\n</td>\r\n<td>\r\n<p align=\"center\">Chỉnh điện (ghế người l&aacute;i)</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Hệ thống mở kh&oacute;a th&ocirc;ng minh</p>\r\n</td>\r\n<td>\r\n<p>&nbsp;</p>\r\n</td>\r\n<td>\r\n<p>&nbsp;</p>\r\n</td>\r\n<td>\r\n<p align=\"center\">C&oacute;</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Kh&oacute;a cửa từ xa</p>\r\n</td>\r\n<td>\r\n<p>&nbsp;</p>\r\n</td>\r\n<td>\r\n<p>&nbsp;</p>\r\n</td>\r\n<td>\r\n<p align=\"center\">C&oacute;</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Hệ thống khởi động bằng n&uacute;t bấm</p>\r\n</td>\r\n<td>\r\n<p>&nbsp;</p>\r\n</td>\r\n<td>\r\n<p>&nbsp;</p>\r\n</td>\r\n<td>\r\n<p align=\"center\">C&oacute;</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Hệ thống chống trộm</p>\r\n</td>\r\n<td>\r\n<p>&nbsp;</p>\r\n</td>\r\n<td>\r\n<p>&nbsp;</p>\r\n</td>\r\n<td>\r\n<p align=\"center\">Hệ thống m&atilde; ho&aacute; kh&oacute;a động cơ + Chu&ocirc;ng b&aacute;o động</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Ăng ten</p>\r\n</td>\r\n<td>\r\n<p>&nbsp;</p>\r\n</td>\r\n<td>\r\n<p>&nbsp;</p>\r\n</td>\r\n<td>\r\n<p align=\"center\">In tr&ecirc;n k&iacute;nh</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td colspan=\"4\">\r\n<p><strong>AN TO&Agrave;N</strong></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p><strong>An to&agrave;n chủ động</strong></p>\r\n</td>\r\n<td>\r\n<p align=\"center\">&nbsp;</p>\r\n</td>\r\n<td>\r\n<p>&nbsp;</p>\r\n</td>\r\n<td>\r\n<p align=\"center\">&nbsp;</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Hệ thống chống b&oacute; cứng phanh (ABS)</p>\r\n</td>\r\n<td>\r\n<p align=\"center\">&nbsp;</p>\r\n</td>\r\n<td>\r\n<p align=\"center\">&nbsp;</p>\r\n</td>\r\n<td>\r\n<p align=\"center\">C&oacute;</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Hệ thống ph&acirc;n phối lực phanh điện tử (EBD)</p>\r\n</td>\r\n<td>\r\n<p>&nbsp;</p>\r\n</td>\r\n<td>\r\n<p>&nbsp;</p>\r\n</td>\r\n<td>\r\n<p align=\"center\">C&oacute;</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Hỗ trợ lực phanh khẩn cấp (BA)</p>\r\n</td>\r\n<td>\r\n<p>&nbsp;</p>\r\n</td>\r\n<td>\r\n<p>&nbsp;</p>\r\n</td>\r\n<td>\r\n<p align=\"center\">C&oacute;</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p><strong>An to&agrave;n bị động</strong></p>\r\n</td>\r\n<td>\r\n<p>&nbsp;</p>\r\n</td>\r\n<td>\r\n<p>&nbsp;</p>\r\n</td>\r\n<td>\r\n<p align=\"center\">&nbsp;</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>T&uacute;i kh&iacute; trước</p>\r\n</td>\r\n<td>\r\n<p>&nbsp;</p>\r\n</td>\r\n<td>\r\n<p>&nbsp;</p>\r\n</td>\r\n<td>\r\n<p align=\"center\">C&oacute; (người l&aacute;i v&agrave; h&agrave;nh kh&aacute;ch ph&iacute;a trước)</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>T&uacute;i kh&iacute; b&ecirc;n h&ocirc;ng</p>\r\n</td>\r\n<td>\r\n<p>&nbsp;</p>\r\n</td>\r\n<td>\r\n<p>&nbsp;</p>\r\n</td>\r\n<td>\r\n<p align=\"center\">C&oacute; (người l&aacute;i v&agrave; h&agrave;nh kh&aacute;ch ph&iacute;a trước)</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>T&uacute;i kh&iacute; r&egrave;m hai b&ecirc;n cửa sổ</p>\r\n</td>\r\n<td>\r\n<p>&nbsp;</p>\r\n</td>\r\n<td>\r\n<p>&nbsp;</p>\r\n</td>\r\n<td>\r\n<p align=\"center\">C&oacute;</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Hệ thống tự động ngắt nhi&ecirc;n liệu</p>\r\n</td>\r\n<td>\r\n<p>&nbsp;</p>\r\n</td>\r\n<td>\r\n<p>&nbsp;</p>\r\n</td>\r\n<td>\r\n<p align=\"center\">C&oacute;</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td colspan=\"4\">\r\n<p>*Chiều d&agrave;i tổng thể l&agrave; 5250mm nếu t&iacute;nh b&aacute;nh phụ</p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>', NULL, 0, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/qIiasDR6m78\" frameborder=\"0\" allowfullscreen></iframe>', NULL, '', NULL, NULL, NULL, '<p><strong><a class=\"title_pro\">Land Cruiser (Bản cao cấp)</a></strong></p>\r\n<p>&nbsp;</p>\r\n<p><strong>Thống lĩnh mọi địa h&igrave;nh</strong></p>\r\n<p>&nbsp;</p>\r\n<p><strong>Đơn gi&aacute;:</strong>&nbsp; 3.720.000.000 VNĐ</p>\r\n<p><img src=\"http://toyotahoankiem5s.com/sites/default/files/2009-WALD-200-Toyota-Land-Cruiser-SPORTS-LINE-Black-Bison-Edition-front-angle_1.jpg\" alt=\"\" width=\"700\" /></p>\r\n<p>Toyota Land Cruiser l&agrave; d&ograve;ng xe thể thao đa dụng (SUV) truyền thống được sản xuất bởi Tập đo&agrave;n &ocirc; t&ocirc; Toyota Nhật Bản kể từ năm 1951. Trải qua 6 thập kỷ, d&ograve;ng xe Land Cruiser đ&atilde; x&acirc;y dựng được danh tiếng lừng lẫy tr&ecirc;n khắp to&agrave;n cầu nhờ t&iacute;nh ổn định cao, t&iacute;nh năng vận h&agrave;nh cực kỳ bền bỉ v&agrave; khả năng vượt qua những loại địa h&igrave;nh hiểm trở nhất</p>\r\n<p>&nbsp;</p>\r\n<p>L&agrave; một th&agrave;nh vi&ecirc;n trong gia đ&igrave;nh Land Cruiser, mẫu xe Prado kế thừa đầy đủ những gi&aacute; trị cốt l&otilde;i của d&ograve;ng xe việt d&atilde; n&agrave;y, đồng thời được thiết kế nhằm đem lại sự &ecirc;m &aacute;i tối đa khi vận h&agrave;nh tr&ecirc;n đường bằng cũng như đảm bảo t&iacute;nh tiện dụng v&agrave; sự thuận tiện cao nhất cho người l&aacute;i v&agrave; h&agrave;nh kh&aacute;ch trong điều kiện sử dụng h&agrave;ng ng&agrave;y..&nbsp;</p>\r\n<p><img src=\"http://toyotahoankiem5s.com/sites/default/files/Toyota-Land-Cruiser-1.jpg\" alt=\"\" width=\"700\" /></p>\r\n<p>&nbsp;Toyota Land Cruiser Prado xuất hiện tại Việt Nam từ kh&aacute; sớm th&ocirc;ng qua k&ecirc;nh ph&acirc;n phối kh&ocirc;ng ch&iacute;nh thức v&agrave; đ&atilde; gi&agrave;nh được chỗ đứng vững chắc trong ph&acirc;n kh&uacute;c SUV cỡ trung cao cấp nhờ những ưu điểm vượt trội của m&igrave;nh. Nhằm đ&aacute;p ứng nhu cầu sở hữu &ocirc; t&ocirc; ng&agrave;y c&agrave;ng đa dạng, đồng thời mang đến những quyền lợi v&agrave; dịch vụ tốt nhất cho kh&aacute;ch h&agrave;ng y&ecirc;u th&iacute;ch chiếc SUV n&agrave;y, TMV quyết định ch&iacute;nh thức ph&acirc;n phối xe Land Cruiser Prado phi&ecirc;n bản 2011 tại thị trường Việt Nam.</p>\r\n<p>&nbsp;</p>', NULL, 0, 0, 0, 0, 1, NULL, NULL, NULL, '2017-11-20 03:39:02', '2017-11-19 20:39:02'),
(14, 5, 2, NULL, 14, 'Sản phẩm demo b', 'san-pham-demo-b', '1511153826_pr-8.png', 2000000, 0, 0, NULL, NULL, NULL, 0, NULL, NULL, 'man hinh full hd###bo nho 32gb', NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 1, NULL, NULL, NULL, '2017-11-20 04:57:06', '2017-11-19 21:57:06'),
(17, 5, 2, NULL, 16, 'Sản phẩm demo f', 'san-pham-demo-f', '1511153842_pr-5.png', 6000000, 0, 0, NULL, NULL, NULL, 0, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 1, NULL, NULL, NULL, '2017-11-20 04:57:22', '2017-11-19 21:57:22'),
(18, 5, 1, NULL, 17, 'sản phẩm zx', 'san-pham-zx', '1511153856_pr-9.png', 5000000, 0, 0, NULL, NULL, NULL, 0, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 1, 1, NULL, NULL, NULL, '2017-11-20 04:57:36', '2017-11-19 21:57:36'),
(19, 5, 1, NULL, 18, 'Sản phẩm g', 'san-pham-g', '1511153872_pr-1.png', 6500000, 0, 0, NULL, NULL, NULL, 0, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 1, 1, NULL, NULL, NULL, '2017-11-20 04:57:52', '2017-11-19 21:57:52'),
(20, 5, 1, NULL, 16, 'Sản phẩm thời trang nam số 1x', 'san-pham-thoi-trang-nam-so-1x', '1511165898_pr-1.png', 3000000, 0, 0, NULL, NULL, NULL, 0, NULL, NULL, 'Elasticated cuffs###Casual fit###100% Cotton###Vận chuyển miễn phí với giao hàng 4 ngày', NULL, NULL, NULL, NULL, NULL, 1, 0, 0, 0, 1, NULL, NULL, NULL, '2017-11-20 08:38:20', '2017-11-20 01:38:20'),
(21, 5, 2, NULL, 17, 'Sản phẩm demo thời trang nữ hot nhất mùa hè', 'san-pham-demo-thoi-trang-nu-hot-nhat-mua-he', '1511236322_pr-3.png', 1000000, 0, 0, NULL, NULL, NULL, 0, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, 1, 0, 1, NULL, NULL, NULL, '2017-11-21 03:52:11', '2017-11-20 20:52:11'),
(22, 5, 2, NULL, 18, 'Sản phẩm xyzo', 'san-pham-xyzo', '1511236437_pro-1.png', 500000, 0, 0, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 0, 0, 1, NULL, NULL, NULL, '2017-11-20 20:53:57', '2017-11-20 20:53:57');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `stt` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photo` text COLLATE utf8_unicode_ci,
  `noibat` int(2) DEFAULT '0',
  `status` int(11) NOT NULL,
  `lever` int(11) NOT NULL DEFAULT '0',
  `title` text COLLATE utf8_unicode_ci,
  `keyword` longtext COLLATE utf8_unicode_ci,
  `description` longtext COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `parent_id`, `stt`, `name`, `alias`, `photo`, `noibat`, `status`, `lever`, `title`, `keyword`, `description`, `created_at`, `updated_at`) VALUES
(1, 0, 1, 'Thời trang nam', 'thoi-trang-nam', '', 0, 1, 0, NULL, NULL, NULL, '2017-11-19 19:16:07', '2017-11-19 19:16:07'),
(2, 0, 2, 'Thời trang nữ', 'thoi-trang-nu', '', 0, 1, 0, NULL, NULL, NULL, '2017-11-19 19:16:23', '2017-11-19 19:16:23');

-- --------------------------------------------------------

--
-- Table structure for table `province`
--

CREATE TABLE `province` (
  `id` int(11) NOT NULL,
  `province_name` varchar(250) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `province`
--

INSERT INTO `province` (`id`, `province_name`, `created_at`, `updated_at`) VALUES
(2, 'hai phong', '2017-09-21 07:19:34', '2017-09-21 07:19:34'),
(4, 'Hà Nội', '2017-09-21 21:47:54', '2017-09-21 21:47:54'),
(5, 'Thái Bình', '2017-09-21 21:48:05', '2017-09-21 21:48:17'),
(6, 'Hồ Chí Minh', '2017-09-25 00:14:42', '2017-09-25 00:14:42'),
(7, 'Nam Định', '2017-10-13 20:09:01', '2017-10-13 20:09:01');

-- --------------------------------------------------------

--
-- Table structure for table `recruitment`
--

CREATE TABLE `recruitment` (
  `id` int(11) NOT NULL,
  `name` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `address` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(2) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recruitment`
--

INSERT INTO `recruitment` (`id`, `name`, `address`, `phone`, `email`, `created_at`, `updated_at`, `status`) VALUES
(6, 'Công ty Gco', 'trường chinh, thanh xuân, hà nội', '0943249', 'gco@gmail.com', '2017-09-15 04:21:08', '2017-09-14 21:21:08', 1),
(7, 'Hoàng Hồng Chương', 'Hà Nội', '0987654321', 'chuonghoanghong@gmail.com', '2017-09-17 20:31:17', '2017-09-17 20:31:17', 0);

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8_unicode_ci,
  `title` text COLLATE utf8_unicode_ci,
  `company` text COLLATE utf8_unicode_ci,
  `website` text COLLATE utf8_unicode_ci,
  `address` text COLLATE utf8_unicode_ci,
  `phone` text COLLATE utf8_unicode_ci,
  `hotline` text COLLATE utf8_unicode_ci,
  `fax` text COLLATE utf8_unicode_ci,
  `email` text COLLATE utf8_unicode_ci,
  `photo` text COLLATE utf8_unicode_ci,
  `favico` text COLLATE utf8_unicode_ci,
  `title_index` text COLLATE utf8_unicode_ci,
  `mota` longtext COLLATE utf8_unicode_ci,
  `content` longtext COLLATE utf8_unicode_ci,
  `facebook` text COLLATE utf8_unicode_ci NOT NULL,
  `twitter` text COLLATE utf8_unicode_ci NOT NULL,
  `google` text COLLATE utf8_unicode_ci NOT NULL,
  `youtube` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `toado` text COLLATE utf8_unicode_ci,
  `copyright` text COLLATE utf8_unicode_ci,
  `iframemap` text COLLATE utf8_unicode_ci,
  `codechat` longtext COLLATE utf8_unicode_ci,
  `analytics` longtext COLLATE utf8_unicode_ci,
  `keyword` longtext COLLATE utf8_unicode_ci,
  `description` longtext COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `name`, `title`, `company`, `website`, `address`, `phone`, `hotline`, `fax`, `email`, `photo`, `favico`, `title_index`, `mota`, `content`, `facebook`, `twitter`, `google`, `youtube`, `status`, `toado`, `copyright`, `iframemap`, `codechat`, `analytics`, `keyword`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Luxury Boutique', 'Luxury Boutique', 'Luxury Boutique', 'http://gco.vn/', 'Tầng 8, TOYOTA Thanh Xuân 315 Trường Chinh, Thanh Xuân, Hà Nội', '(04)6 290 8885', '090 216 6747', '(04)3 550 1492', 'support@gco.vn', '1511144499_logo.png', '1511144499_logo.png', NULL, NULL, NULL, 'https://www.facebook.com/FacebookforDevelopers/', 'https://twitter.com/?lang=vi', 'https://plus.google.com/?hl=vi', 'https://www.youtube.com/', 1, NULL, '© GCO 2017. All rights reserved. Design by chuonghoanghong@gmail.com.', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.761617598985!2d105.82076241501875!3d21.00219068601275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac869cd63f89%3A0xa2e71c273579f51b!2zMzE1IFRyxrDhu51uZyBDaGluaA!5e0!3m2!1sen!2s!4v1505443560797\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', NULL, NULL, NULL, NULL, '2017-11-20 02:22:33', '2017-11-19 19:22:33');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `link` text COLLATE utf8_unicode_ci,
  `photo` text COLLATE utf8_unicode_ci,
  `icon` text COLLATE utf8_unicode_ci,
  `mota` longtext COLLATE utf8_unicode_ci,
  `content` longtext COLLATE utf8_unicode_ci,
  `status` int(11) NOT NULL DEFAULT '1',
  `noibat` int(11) NOT NULL DEFAULT '0',
  `com` text COLLATE utf8_unicode_ci,
  `stt` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `user_id`, `name`, `link`, `photo`, `icon`, `mota`, `content`, `status`, `noibat`, `com`, `stt`, `created_at`, `updated_at`) VALUES
(41, 5, 'banner', NULL, '1511145466_bn-1.png', '', NULL, NULL, 1, 0, 'gioi-thieu', 2, '2017-11-20 02:37:46', '2017-11-19 19:37:46'),
(29, 5, 'MIỄN PHÍ VẬN CHUYỂN', NULL, '1504143783_oto.png', '', 'CHO ĐƠN HÀNG CÓ TỔNG TRỊ GIÁ 30 TRIỆU', NULL, 1, 0, 'chinh-sach', 1, '2017-08-31 01:44:03', '2017-08-30 18:44:03'),
(30, 5, 'ĐỔI TRẢ TRONG VÒNG 07 NGÀY', NULL, '1504143807_phone.png', '', 'CHO ĐƠN HÀNG CÓ TỔNG TRỊ GIÁ 30 TRIỆU', NULL, 1, 0, 'chinh-sach', 2, '2017-08-30 18:43:27', '2017-08-30 18:43:27'),
(31, 5, 'HỖ TRỢ ONLINE 24/7', NULL, '1504143833_watch.png', '', 'CHO ĐƠN HÀNG CÓ TỔNG TRỊ GIÁ 30 TRIỆU', NULL, 1, 0, 'chinh-sach', 3, '2017-08-30 18:43:53', '2017-08-30 18:43:53'),
(42, 5, 'Toyota Cruiser', 'https://gco.vn/', '1511145577_bn-1.png', '', NULL, NULL, 1, 0, 'gioi-thieu', 1, '2017-11-20 02:39:37', '2017-11-19 19:39:37'),
(57, 5, '3', NULL, '1511152653_bn-4.png', '', NULL, NULL, 1, 0, 'gioi-thieu', 3, '2017-11-19 21:37:33', '2017-11-19 21:37:33');

-- --------------------------------------------------------

--
-- Table structure for table `useronline`
--

CREATE TABLE `useronline` (
  `id` int(10) UNSIGNED NOT NULL,
  `session` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `time` int(11) NOT NULL,
  `ip` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8_unicode_ci,
  `level` int(11) NOT NULL DEFAULT '2',
  `photo` text COLLATE utf8_unicode_ci,
  `status` int(11) NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `email`, `phone`, `address`, `level`, `photo`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'tuanduy2012', '$2y$10$DceYJxR4ALmUW.Vt6k9En.1ubJhJGvWX1HISRloBERLNJ8Qq85itO', 'Tuan Duy', 'duydoan.nina@gmail.com', '', '', 1, NULL, 1, 'X37mpbjW1WDCjwH3s4Vq1Jkv3WRNJceXZlbLwHaa', '2017-06-14 23:42:39', '2017-06-14 23:42:39'),
(4, 'evernigh', '$2y$10$pprRO9LhYKADS60bvetRnOYoS3L74giVWf3D/wNZXlDLDRRx0bH6e', 'Duy Đoàn', 'tuanduy_mc2006@yahoo.com', '', '', 0, NULL, 1, '6CirvIekDhWLx3xFrnv7v39bFmalTsH21F4WABTq', '2017-06-16 02:51:34', '2017-06-16 02:51:34'),
(5, 'gco_admin', '$2y$10$Lm3vxVo0UYuWFSzJkpvmwOKecqZm5coQSy1D3QW/Tc8c569RgBNFK', 'Admin', 'gco@gmail.com', '0985431797', '315 Trường chinh, Thanh Xuân, Hà Nội', 1, '5.jpg', 1, 'zCkRF2boomcoF8VVxJkzGLhx18jheiMcFjjETNmCK4Bz5X1aDMD32M4w6Y9e', '2017-10-16 06:40:43', '2017-09-24 19:31:27'),
(6, 'hoangchuong', '$2y$10$hgK6I2IZypbAH4cQhCLGnuworUM5T2MO9R/wEOpYDzh1Igmw0tMES', 'Hoàng Hồng Chương', 'chuonghoanghong@gmail.com', NULL, NULL, 2, NULL, 1, 'JVbavXrhMLNRXMdcGx9MiZGhTwAGqFQmulGcRYwnQWkfYn0ZQu0OtN5o0j7J', '2017-10-13 01:18:31', '2017-10-12 18:02:08');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `link` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `link`, `created_at`, `updated_at`) VALUES
(1, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/nvy3XBg-tmU\" frameborder=\"0\" allowfullscreen></iframe>', '2017-10-15 20:31:58', '2017-10-15 20:34:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bank_account`
--
ALTER TABLE `bank_account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner_content`
--
ALTER TABLE `banner_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner_position`
--
ALTER TABLE `banner_position`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `campaigns`
--
ALTER TABLE `campaigns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `campaign_cards`
--
ALTER TABLE `campaign_cards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chinhanh`
--
ALTER TABLE `chinhanh`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counter`
--
ALTER TABLE `counter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_product_id_foreign` (`product_id`);

--
-- Indexes for table `lienket`
--
ALTER TABLE `lienket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `news_categories_name_unique` (`name`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_categories`
--
ALTER TABLE `news_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `news_categories_name_unique` (`name`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_status`
--
ALTER TABLE `order_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `province`
--
ALTER TABLE `province`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recruitment`
--
ALTER TABLE `recruitment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `useronline`
--
ALTER TABLE `useronline`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bank_account`
--
ALTER TABLE `bank_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `banner_content`
--
ALTER TABLE `banner_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `banner_position`
--
ALTER TABLE `banner_position`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `campaigns`
--
ALTER TABLE `campaigns`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `campaign_cards`
--
ALTER TABLE `campaign_cards`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `chinhanh`
--
ALTER TABLE `chinhanh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `counter`
--
ALTER TABLE `counter`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `lienket`
--
ALTER TABLE `lienket`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `news_categories`
--
ALTER TABLE `news_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_status`
--
ALTER TABLE `order_status`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `partner`
--
ALTER TABLE `partner`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `province`
--
ALTER TABLE `province`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `recruitment`
--
ALTER TABLE `recruitment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `useronline`
--
ALTER TABLE `useronline`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
