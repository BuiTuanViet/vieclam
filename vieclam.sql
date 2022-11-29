-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 18, 2022 lúc 06:09 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `vieclam`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `book`
--

CREATE TABLE `book` (
  `book_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `number` int(11) DEFAULT NULL,
  `message` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `prepay` int(11) DEFAULT NULL,
  `restaurant` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `book`
--

INSERT INTO `book` (`book_id`, `name`, `address`, `phone`, `time`, `email`, `number`, `message`, `prepay`, `restaurant`, `created_at`, `updated_at`) VALUES
(6, 'Minh Đức', 'Hà Nội', '0968868201', '2018-03-27 08:15:07', 'minhducit@micoem.vn', 10, 'Đặt bàn tiệc', 10000000, 'Số 301 Tô Hiệu, Q. Cầu Giấy, Hà Nội', '2018-03-27 01:15:33', '2018-03-27 01:15:33'),
(7, 'Tran Hai Nam', 'co dong', '974561732', '2018-04-18 15:15:00', 'vn3ctran@gmail.com', 4, 'khong lam gi dau', NULL, 'Số 4 Bạch Đằng, Q. Hải Châu, Tp. Đà Nẵng', '2018-04-12 08:06:05', '2018-04-12 08:06:05'),
(8, 'Ahn', 'Korea(Perfect Private Poll Villas in Danang)', '821091665795', '2018-04-28 19:00:00', 'yoonyzzang@nate.com', 15, '10 Adults, 5children.\r\nRiver view seats Please.', NULL, 'Số 4 Bạch Đằng, Q. Hải Châu, Tp. Đà Nẵng', '2018-04-22 07:30:35', '2018-04-22 07:30:35'),
(9, 'Eva', 'Vanda hotel,Danabg', '8201056281451', '2018-04-23 19:30:00', 'evachoi8855@naver.com', 2, 'Today 4/23 7:30pm', NULL, 'Số 4 Bạch Đằng, Q. Hải Châu, Tp. Đà Nẵng', '2018-04-23 11:13:57', '2018-04-23 11:13:57'),
(10, 'Phạm hữu Thuấn', '82 Thanh Long tp Đ N', '0914242292', '2018-04-28 18:40:00', 'anhsooc@gmail.com', 10, 'Chúng tôi đặt bàn ăn tối cho gia đình. Xin cám ơn .', NULL, 'Số 4 Bạch Đằng, Q. Hải Châu, Tp. Đà Nẵng', '2018-04-24 12:36:00', '2018-04-24 12:36:00'),
(11, 'park hyun sik', 'in danang. vin pearl 1 resort.', '0909585700', '2018-04-26 18:00:00', 'celisupero@gmail.com', 9, 'april. 26th. please.', NULL, 'Số 4 Bạch Đằng, Q. Hải Châu, Tp. Đà Nẵng', '2018-04-25 14:01:09', '2018-04-25 14:01:09'),
(12, 'Kiana', 'Carle', '85366966842', '2018-04-27 18:00:00', 'kianacarle@yahoo.com', 11, 'There will 6 adults and 5kids, if it’s not raining can we please sit outside. If it’s raining please seat us inside.\r\nThank you', NULL, 'Số 4 Bạch Đằng, Q. Hải Châu, Tp. Đà Nẵng', '2018-04-26 10:52:13', '2018-04-26 10:52:13'),
(13, 'Hà hoàng anh', '120 nguyễn văn thoại', '0916786355', '2018-04-27 11:30:00', 'hoanganh723@gmail.com', 4, NULL, NULL, 'Số 4 Bạch Đằng, Q. Hải Châu, Tp. Đà Nẵng', '2018-04-26 16:54:26', '2018-04-26 16:54:26');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `title` varchar(254) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(254) COLLATE utf8_unicode_ci NOT NULL,
  `parent` int(11) DEFAULT NULL,
  `template` varchar(254) COLLATE utf8_unicode_ci DEFAULT NULL,
  `icon` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(254) COLLATE utf8_unicode_ci DEFAULT NULL,
  `post_type` varchar(254) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_hide` tinyint(4) DEFAULT NULL,
  `language` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category_post`
--

CREATE TABLE `category_post` (
  `category_post_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `post_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `post_id` int(11) DEFAULT NULL,
  `parent` int(11) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `message` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `group_mail`
--

CREATE TABLE `group_mail` (
  `group_mail_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `group_mail`
--

INSERT INTO `group_mail` (`group_mail_id`, `name`, `description`) VALUES
(1, 'Mail Order', 'Mail Order');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `information`
--

CREATE TABLE `information` (
  `infor_id` int(11) NOT NULL,
  `slug_type_input` varchar(254) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `language` varchar(65) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `input`
--

CREATE TABLE `input` (
  `input_id` int(11) NOT NULL,
  `type_input_slug` varchar(254) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_id` int(11) NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `language`
--

CREATE TABLE `language` (
  `language_id` int(11) NOT NULL,
  `language` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `acronym` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `language`
--

INSERT INTO `language` (`language_id`, `language`, `acronym`, `created_at`, `updated_at`) VALUES
(1, 'Vietnamese', 'vn', NULL, '2018-03-21 06:46:01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `language_save`
--

CREATE TABLE `language_save` (
  `language_save_id` int(11) NOT NULL,
  `element_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `main_id` int(11) DEFAULT NULL,
  `element_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='		';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menus`
--

CREATE TABLE `menus` (
  `menu_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menu_element`
--

CREATE TABLE `menu_element` (
  `menu_element_id` int(11) NOT NULL,
  `menu_slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title_show` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `menu_level` int(11) DEFAULT NULL,
  `menu_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `language` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `code_sale_id` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `total_price` int(11) DEFAULT NULL,
  `cost_ship` int(11) DEFAULT NULL,
  `cost_point` int(11) DEFAULT NULL,
  `cost_sale` int(11) DEFAULT NULL,
  `shipping_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ship_country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `shipping_city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shipping_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shipping_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shipping_phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `zip_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) DEFAULT 0 COMMENT '0. khởi tao đơn hàng\n1. đặt hàng thành công\n2. đã nhận đơn hàng\n3. đang vận chuyển\n4. đã giao hàng ',
  `ip_customer` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `method_payment` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `currency` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_bank`
--

CREATE TABLE `order_bank` (
  `order_bank_id` int(11) NOT NULL,
  `name_bank` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `number_bank` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `manager_account` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `branch` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_code_sale`
--

CREATE TABLE `order_code_sale` (
  `order_code_sale_id` int(11) NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `method_sale` tinyint(4) DEFAULT NULL COMMENT '0: theo tiền, 1 theo %',
  `sale` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `many_use` int(11) DEFAULT NULL,
  `start` datetime DEFAULT NULL,
  `end` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_items`
--

CREATE TABLE `order_items` (
  `item_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `currency` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `size` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_ship`
--

CREATE TABLE `order_ship` (
  `order_ship_id` int(11) NOT NULL,
  `method_ship` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cost` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `title` varchar(254) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `template` varchar(254) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tags` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(254) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_hide` tinyint(4) DEFAULT NULL,
  `image` varchar(254) COLLATE utf8_unicode_ci DEFAULT NULL,
  `post_type` varchar(254) COLLATE utf8_unicode_ci DEFAULT NULL,
  `visiable` tinyint(4) DEFAULT 0 COMMENT '0: Hiện,\n1: Ẩn',
  `language` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  `index_hot` tinyint(4) DEFAULT NULL COMMENT '0: không nổi bật:\n1: nổi bật',
  `meta_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_description` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_keyword` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_list` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `code` varchar(254) COLLATE utf8_unicode_ci DEFAULT NULL,
  `post_id` int(11) DEFAULT NULL,
  `price` varchar(254) COLLATE utf8_unicode_ci DEFAULT NULL,
  `discount` varchar(254) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `discount_start` datetime DEFAULT NULL,
  `discount_end` datetime DEFAULT NULL,
  `image_list` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `properties` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `buy_together` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `buy_after` longtext COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ratings`
--

CREATE TABLE `ratings` (
  `id` int(10) UNSIGNED NOT NULL,
  `rating` int(11) DEFAULT NULL,
  `ratingable_id` int(10) UNSIGNED DEFAULT NULL,
  `ratingable_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author_id` int(10) UNSIGNED DEFAULT NULL,
  `author_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `setting_order`
--

CREATE TABLE `setting_order` (
  `setting_order_id` int(11) NOT NULL,
  `point_to_currency` int(11) DEFAULT NULL,
  `currency_give_point` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `subcribe_email`
--

CREATE TABLE `subcribe_email` (
  `subcribe_email_id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `subcribe_email`
--

INSERT INTO `subcribe_email` (`subcribe_email_id`, `email`, `name`, `group_id`, `created_at`, `updated_at`) VALUES
(1, 'vietbt@vatgia.com', NULL, NULL, '2022-05-14 03:49:47', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sub_post`
--

CREATE TABLE `sub_post` (
  `sub_post_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `type_sub_post_slug` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `template`
--

CREATE TABLE `template` (
  `template_id` int(11) NOT NULL,
  `title` varchar(254) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(254) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `is_hide` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `type_information`
--

CREATE TABLE `type_information` (
  `type_infor_id` int(11) NOT NULL,
  `title` varchar(254) COLLATE utf8_unicode_ci NOT NULL,
  `type_input` varchar(254) COLLATE utf8_unicode_ci NOT NULL,
  `placeholder` varchar(254) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `type_input`
--

CREATE TABLE `type_input` (
  `type_input_id` int(11) NOT NULL,
  `title` varchar(254) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(254) COLLATE utf8_unicode_ci NOT NULL,
  `type_input` varchar(254) COLLATE utf8_unicode_ci DEFAULT NULL,
  `placeholder` varchar(254) COLLATE utf8_unicode_ci DEFAULT NULL,
  `post_used` varchar(254) COLLATE utf8_unicode_ci DEFAULT NULL,
  `general` tinyint(4) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `type_sub_post`
--

CREATE TABLE `type_sub_post` (
  `type_sub_post_id` int(11) NOT NULL,
  `title` varchar(254) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(254) COLLATE utf8_unicode_ci NOT NULL,
  `location` int(11) DEFAULT NULL,
  `template` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `input_default_used` varchar(254) COLLATE utf8_unicode_ci DEFAULT NULL,
  `have_sort` tinyint(4) DEFAULT NULL,
  `show_menu` tinyint(4) DEFAULT NULL,
  `is_index_hot` tinyint(4) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(254) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(254) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(254) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Null',
  `phone` varchar(254) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role` int(45) DEFAULT NULL,
  `name` varchar(254) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `age` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `point` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `remember_token`, `phone`, `image`, `role`, `name`, `updated_at`, `created_at`, `age`, `address`, `point`) VALUES
(1, 'vn3ctran@gmail.com', '$2y$10$LQEfgiaOF.1riQZHlmd91eZ7tzvxIRAlwYL8zwoOuj4BL1/td8I4m', '86k3eU3tuQFHM8azPV701tTosMVahk89WXhRTM7ykOeoOA1mhTUV0wRJKTxc', '12345678', 'upload/175246_mat-ngo-nghing3.jpg', 3, 'Quản trị viên', '2017-11-14 09:26:29', NULL, 'nam', '', 0),
(16, 'admin@gmail.com', '$2y$10$yzFtVj3IOLdoiWXezrp.N.tdjphWwQIW2tSGhij2JCWVyZLNZNgZS', 'KXSRpBeET55DiT4dFfGjlwziI7a1I41fdcjSPNWYKDykd92ZdN2upQhPoFwn', '000000', NULL, 1, 'Admin', '2022-05-14 05:54:02', '2022-05-14 05:54:02', NULL, NULL, 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `category_post`
--
ALTER TABLE `category_post`
  ADD PRIMARY KEY (`category_post_id`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Chỉ mục cho bảng `group_mail`
--
ALTER TABLE `group_mail`
  ADD PRIMARY KEY (`group_mail_id`);

--
-- Chỉ mục cho bảng `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`infor_id`);

--
-- Chỉ mục cho bảng `input`
--
ALTER TABLE `input`
  ADD PRIMARY KEY (`input_id`);

--
-- Chỉ mục cho bảng `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`language_id`);

--
-- Chỉ mục cho bảng `language_save`
--
ALTER TABLE `language_save`
  ADD PRIMARY KEY (`language_save_id`);

--
-- Chỉ mục cho bảng `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`menu_id`);

--
-- Chỉ mục cho bảng `menu_element`
--
ALTER TABLE `menu_element`
  ADD PRIMARY KEY (`menu_element_id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Chỉ mục cho bảng `order_bank`
--
ALTER TABLE `order_bank`
  ADD PRIMARY KEY (`order_bank_id`);

--
-- Chỉ mục cho bảng `order_code_sale`
--
ALTER TABLE `order_code_sale`
  ADD PRIMARY KEY (`order_code_sale_id`);

--
-- Chỉ mục cho bảng `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`item_id`);

--
-- Chỉ mục cho bảng `order_ship`
--
ALTER TABLE `order_ship`
  ADD PRIMARY KEY (`order_ship_id`);

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Chỉ mục cho bảng `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `setting_order`
--
ALTER TABLE `setting_order`
  ADD PRIMARY KEY (`setting_order_id`);

--
-- Chỉ mục cho bảng `subcribe_email`
--
ALTER TABLE `subcribe_email`
  ADD PRIMARY KEY (`subcribe_email_id`);

--
-- Chỉ mục cho bảng `sub_post`
--
ALTER TABLE `sub_post`
  ADD PRIMARY KEY (`sub_post_id`);

--
-- Chỉ mục cho bảng `template`
--
ALTER TABLE `template`
  ADD PRIMARY KEY (`template_id`);

--
-- Chỉ mục cho bảng `type_information`
--
ALTER TABLE `type_information`
  ADD PRIMARY KEY (`type_infor_id`);

--
-- Chỉ mục cho bảng `type_input`
--
ALTER TABLE `type_input`
  ADD PRIMARY KEY (`type_input_id`);

--
-- Chỉ mục cho bảng `type_sub_post`
--
ALTER TABLE `type_sub_post`
  ADD PRIMARY KEY (`type_sub_post_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `book`
--
ALTER TABLE `book`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `category_post`
--
ALTER TABLE `category_post`
  MODIFY `category_post_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `group_mail`
--
ALTER TABLE `group_mail`
  MODIFY `group_mail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `information`
--
ALTER TABLE `information`
  MODIFY `infor_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `input`
--
ALTER TABLE `input`
  MODIFY `input_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `language`
--
ALTER TABLE `language`
  MODIFY `language_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `language_save`
--
ALTER TABLE `language_save`
  MODIFY `language_save_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `menus`
--
ALTER TABLE `menus`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `menu_element`
--
ALTER TABLE `menu_element`
  MODIFY `menu_element_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `order_bank`
--
ALTER TABLE `order_bank`
  MODIFY `order_bank_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `order_code_sale`
--
ALTER TABLE `order_code_sale`
  MODIFY `order_code_sale_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `order_items`
--
ALTER TABLE `order_items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `order_ship`
--
ALTER TABLE `order_ship`
  MODIFY `order_ship_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `setting_order`
--
ALTER TABLE `setting_order`
  MODIFY `setting_order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `subcribe_email`
--
ALTER TABLE `subcribe_email`
  MODIFY `subcribe_email_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `sub_post`
--
ALTER TABLE `sub_post`
  MODIFY `sub_post_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `template`
--
ALTER TABLE `template`
  MODIFY `template_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `type_information`
--
ALTER TABLE `type_information`
  MODIFY `type_infor_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `type_input`
--
ALTER TABLE `type_input`
  MODIFY `type_input_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `type_sub_post`
--
ALTER TABLE `type_sub_post`
  MODIFY `type_sub_post_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
