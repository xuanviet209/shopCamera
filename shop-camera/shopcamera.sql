-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 31, 2022 lúc 12:30 PM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shopcamera`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 1,
  `fullname` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `avatar` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `gender` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `role`, `fullname`, `phone`, `address`, `birthday`, `avatar`, `status`, `gender`, `created_at`, `updated_at`, `email`) VALUES
(9, 'admin', '123456789', -1, 'Nguyen Xuan Viet', '0971000123', 'Ha Noi', '1999-09-20', 'profile.png', 1, 1, '2021-07-05 10:13:34', '2022-05-29 23:52:57', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brands`
--

CREATE TABLE `brands` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `brands`
--

INSERT INTO `brands` (`id`, `name`, `address`, `description`, `logo`, `status`, `created_at`, `updated_at`) VALUES
(42, 'Hikvision', 'China', '<p>Thương hiệu Camera nổi tiếng thế giới</p>', '1651251713-hikvision-logo.jpg', 1, '2022-04-29 10:01:53', NULL),
(43, 'Dahua', 'China', '<p>Thương hiệu Camera tốt nhất</p>', '1651251779-dahua.jpg', 1, '2022-04-29 10:02:59', NULL),
(44, 'Kbvision', 'USA', '<p>Camera được sử dụng nhiều nhất Việt Nam</p>', '1651251922-kb.jpg', 1, '2022-04-29 10:05:22', NULL),
(45, 'Bosch', 'Germany', '<p>Thương hiệu camera an ninh cao cấp</p>', '1651251990-bosch.jpg', 1, '2022-04-29 10:06:30', NULL),
(46, 'Ebitcam', 'China', '<p>Camera tốt nhất cho gia đình</p>', '1651252047-ebitcam.jpg', 1, '2022-04-29 10:07:27', NULL),
(47, 'Yoosee', 'China', '<p>Camera gia đình giá rẻ</p>', '1651252235-yoosee.jpg', 1, '2022-04-29 10:10:35', NULL),
(48, 'CameraCare', 'China', '<p>Camera phù hợp cho mọi gia đình</p>', '1651252290-camera.jpg', 1, '2022-04-29 10:11:30', NULL),
(49, 'Camera Xiaomi', 'China', '<p>Camera tốt nhất trên thị trường</p>', '1651252452-xiaomi.jpg', 1, '2022-04-29 10:14:12', NULL),
(50, 'Camera Fpt', 'Viet Nam', '<p>Camera thương hiệu Việt</p>', '1651252515-fpt.jpg', 1, '2022-04-29 10:15:15', NULL),
(51, 'Vantech', 'Viet Nam', '<p>Camera mang thương hiệu Việt</p>', '1651336417-gioi-thieu-phan-mem-xem-camera-vantech.jpg', 1, '2022-04-30 09:33:37', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parentId` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `parentId`, `status`, `name`, `description`, `avatar`, `created_at`, `updated_at`) VALUES
(24, 0, 1, 'Camera Analog, Có dây, Ngoài trời', '<p>Là loại camera với cảm biến CCD với hình ảnh được số hóa để xử lí. Camera ghi hình ổn định và chuyên nghiệp cùng sự hỗ trợ của nhiều thiết bị như dây cáp, đầu ghi,...</p>', NULL, '2022-04-29 09:52:29', NULL),
(25, 0, 1, 'Camera Wifi ,Không dây, Trong nhà', '<p>Tích hợp các tính năng thông minh như cảnh báo chuyển động, đàm thoại 2 chiều, xoay 360 độ,... giúp chống trộm và đảm bảo an ninh an toàn, hiệu quả.</p>', NULL, '2022-04-29 09:53:31', NULL),
(26, 0, 1, 'Camera hành trình', '<p>Camera hành trình còn có chức năng quan sát giao thông vào ban đêm, chỉ đường dẫn đường thông qua hệ thống GPS, đọc biển báo giao thông, cảnh báo và đo tốc độ các phương tiện đường bộ.&nbsp;</p>', NULL, '2022-04-29 09:55:46', NULL),
(27, 0, 1, 'Webcam', '<p>WebCam là từ viết tắt của <strong>Website Camera</strong>, đây là loại thiết bị <strong>ghi hình kỹ thuật số</strong> được kết nối với máy tính để truyền trực tiếp hình ảnh mà nó ghi được đến một máy tính khác hoặc truyền lên một website .</p>', NULL, '2022-04-29 09:56:58', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `comment_name` varchar(100) NOT NULL,
  `comment_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `comment_products_id` int(11) NOT NULL,
  `comment_parent_comment` int(11) DEFAULT NULL,
  `comment_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`comment_id`, `comment`, `comment_name`, `comment_date`, `comment_products_id`, `comment_parent_comment`, `comment_status`) VALUES
(33, 'Còn hàng ko shop?', 'Viet', '2022-05-24 15:31:13', 70, 0, 0),
(34, 'Còn b nhé', 'VCamera', '2022-05-24 17:20:13', 70, 33, 1),
(35, '123', 'VCamera', '2022-05-24 17:20:21', 70, 34, 1),
(36, 'còn nhiều nhé', 'VCamera', '2022-05-24 17:24:40', 70, 33, 0),
(37, 'còn', 'VCamera', '2022-05-24 17:45:09', 70, 33, 0),
(38, ':)', 'VCamera', '2022-05-24 17:26:59', 70, 33, 0),
(39, 'haha', 'VCamera', '2022-05-31 10:21:37', 70, 33, 0),
(40, 'hihi', 'VCamera', '2022-05-24 17:32:55', 70, 33, 0),
(41, '123', 'VCamera', '2022-05-24 17:38:13', 70, 33, 0),
(42, 'viet', 'VCamera', '2022-05-24 17:43:53', 70, 33, 0),
(43, '122', 'VCamera', '2022-05-24 17:46:05', 70, 36, 0),
(44, 'mua', 'admin1', '2022-05-24 17:47:35', 66, NULL, 0),
(45, 'bán', 'admin2', '2022-05-24 17:47:38', 66, NULL, 0),
(46, 'có', 'VCamera', '2022-05-24 17:47:58', 66, 45, 0),
(47, 'ko bán', 'VCamera', '2022-05-24 17:48:29', 66, 44, 0),
(48, 'mua hết', 'VCamera', '2022-05-24 17:50:04', 66, 45, 0),
(49, 'còn hàng ko?', '@ha', '2022-05-31 10:27:04', 71, NULL, 0),
(50, 'shop ở đâu?', 'viet', '2022-05-31 10:25:44', 50, NULL, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `coupon`
--

CREATE TABLE `coupon` (
  `coupon_id` int(11) NOT NULL,
  `coupon_name` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coupon_time` int(11) NOT NULL,
  `coupon_condition` int(11) NOT NULL,
  `coupon_number` int(11) NOT NULL,
  `coupon_code` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `coupon`
--

INSERT INTO `coupon` (`coupon_id`, `coupon_name`, `coupon_time`, `coupon_condition`, `coupon_number`, `coupon_code`, `created_at`, `updated_at`) VALUES
(3, '30/4', 10, 1, 15, 'GPMN', '2022-05-07 02:44:15', NULL),
(4, 'Khai trương', 12, 1, 30, 'KT68', '2022-05-08 01:13:49', NULL),
(5, 'Xuan Viet', 14, 2, 500, 'XV209', '2022-05-08 07:47:14', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`id`, `name`, `email`, `phone`, `address`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(12, 'viet', 'xuankien124@gmail.com', '0327769339', 'Xuan dinh', '$2y$10$EO79naE1Cs7x5hUeETxUxOQmFhFRznZBVU199/KnsWu66Q98jZUTi', NULL, '2022-03-10 01:18:45', '2022-03-10 01:18:45'),
(13, 'hacz', 'hongha@gmail.com', '097245625', 'Xuan dinh', '$2y$10$Zc5aQGtz86nW9StZjp8GTec1bPel5v/lHFr5ekJfeo5VAHfp5cHqi', NULL, '2022-03-10 01:21:00', '2022-03-10 01:21:00'),
(16, 'vietxuan', 'humg@gmail.com', '0922204403', 'Xuân Đỉnh', '$2y$10$EkiTwpI0LVwmgOirCH.97OWGoxgMsG78Dyp6XhcSAVsKN9O0h4/I6', NULL, '2022-04-20 19:43:27', '2022-04-20 19:43:27'),
(18, 'Xuân Việt', 'vietd8k11@gmail.com', '0971046025', 'Hà Nội', '$2y$10$KOy8LMx9c8yP.L8ZI.leQuwG7RQbRTZw6dJmRePzRko9w7hAvskBi', NULL, '2022-04-23 03:25:51', '2022-04-23 03:25:51');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_07_04_083110_create_admins_table', 2),
(5, '2021_07_04_090757_update_users_table', 3),
(6, '2021_07_04_091852_create_brands_table', 4),
(7, '2021_07_18_071455_create_category_table', 5),
(8, '2021_07_25_070929_create_categories_table', 6),
(9, '2021_07_25_080721_create_products_table', 7),
(10, '2021_10_12_021857_update_products_table', 8),
(11, '2021_10_14_162032_create_orders_table', 8),
(12, '2021_10_14_163110_create_order_detail_table', 9),
(13, '2021_12_06_140904_create_customer_table', 10),
(14, '2022_05_07_074214_create_coupon_table', 11),
(15, '2022_05_07_083104_create_coupon_table', 12);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `orders_note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `orders_note`, `customer_id`, `status`, `created_at`, `updated_at`) VALUES
(411, 'hàng đẹp', 16, 1, '2022-05-08 08:14:14', '2022-05-08 08:14:14'),
(412, 'hàng đẹp', 16, 0, '2022-05-08 08:14:40', '2022-05-08 08:14:40'),
(413, NULL, 16, 1, '2022-05-11 03:10:01', '2022-05-11 03:10:01'),
(414, NULL, 16, 1, '2022-05-11 03:21:22', '2022-05-11 03:21:22'),
(415, NULL, 16, 0, '2022-05-11 03:27:16', '2022-05-11 03:27:16'),
(416, NULL, 16, 0, '2022-05-11 03:49:08', '2022-05-11 03:49:08'),
(417, 'to đẹp', 16, 1, '2022-05-11 07:45:26', '2022-05-11 07:45:26'),
(418, NULL, 16, 0, '2022-05-13 03:02:25', '2022-05-13 03:02:25'),
(419, NULL, 16, 1, '2022-05-13 03:03:08', '2022-05-13 03:03:08'),
(420, NULL, 16, 0, '2022-05-13 03:03:38', '2022-05-13 03:03:38'),
(421, 'xuất sắc', 13, 1, '2022-05-13 08:06:08', '2022-05-13 08:06:08'),
(422, 'camera', 16, 1, '2022-05-26 03:28:03', '2022-05-26 03:28:03'),
(423, 'hàng dễ vỡ', 16, 1, '2022-05-31 03:19:40', '2022-05-31 03:19:40');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_detail`
--

CREATE TABLE `order_detail` (
  `orders_id` int(11) NOT NULL,
  `products_id` int(11) NOT NULL,
  `price` double(8,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_detail`
--

INSERT INTO `order_detail` (`orders_id`, `products_id`, `price`, `quantity`, `created_at`, `updated_at`) VALUES
(283, 44, 160.00, 2, '2022-04-21 01:38:44', '2022-04-21 01:38:44'),
(314, 43, 178.00, 2, '2022-04-21 02:32:23', '2022-04-21 02:32:23'),
(314, 41, 200.00, 1, '2022-04-21 02:32:23', '2022-04-21 02:32:23'),
(314, 39, 30.00, 1, '2022-04-21 02:32:23', '2022-04-21 02:32:23'),
(322, 44, 80.00, 1, '2022-04-21 03:07:09', '2022-04-21 03:07:09'),
(323, 45, 201.00, 1, '2022-04-21 03:08:11', '2022-04-21 03:08:11'),
(323, 44, 80.00, 1, '2022-04-21 03:08:11', '2022-04-21 03:08:11'),
(323, 42, 70.00, 1, '2022-04-21 03:08:11', '2022-04-21 03:08:11'),
(326, 43, 89.00, 1, '2022-04-21 03:19:51', '2022-04-21 03:19:51'),
(327, 44, 80.00, 1, '2022-04-21 10:10:16', '2022-04-21 10:10:16'),
(328, 44, 80.00, 1, '2022-04-21 10:10:37', '2022-04-21 10:10:37'),
(329, 44, 80.00, 1, '2022-04-21 10:10:42', '2022-04-21 10:10:42'),
(330, 44, 80.00, 1, '2022-04-21 10:11:23', '2022-04-21 10:11:23'),
(331, 44, 80.00, 1, '2022-04-21 10:12:11', '2022-04-21 10:12:11'),
(332, 44, 80.00, 1, '2022-04-21 10:13:33', '2022-04-21 10:13:33'),
(333, 44, 80.00, 1, '2022-04-21 10:14:57', '2022-04-21 10:14:57'),
(334, 44, 80.00, 1, '2022-04-21 10:17:15', '2022-04-21 10:17:15'),
(335, 44, 80.00, 1, '2022-04-23 03:00:22', '2022-04-23 03:00:22'),
(336, 44, 80.00, 1, '2022-04-23 03:12:34', '2022-04-23 03:12:34'),
(337, 44, 80.00, 1, '2022-04-23 03:16:05', '2022-04-23 03:16:05'),
(338, 44, 80.00, 1, '2022-04-23 03:16:34', '2022-04-23 03:16:34'),
(339, 44, 80.00, 1, '2022-04-23 03:16:49', '2022-04-23 03:16:49'),
(340, 44, 80.00, 1, '2022-04-23 03:17:11', '2022-04-23 03:17:11'),
(341, 44, 80.00, 1, '2022-04-23 03:17:24', '2022-04-23 03:17:24'),
(342, 44, 80.00, 1, '2022-04-23 03:17:43', '2022-04-23 03:17:43'),
(343, 44, 80.00, 1, '2022-04-23 03:18:03', '2022-04-23 03:18:03'),
(344, 44, 80.00, 1, '2022-04-23 03:18:16', '2022-04-23 03:18:16'),
(345, 44, 80.00, 1, '2022-04-23 03:18:28', '2022-04-23 03:18:28'),
(346, 44, 80.00, 1, '2022-04-23 03:19:02', '2022-04-23 03:19:02'),
(347, 44, 80.00, 1, '2022-04-23 03:19:23', '2022-04-23 03:19:23'),
(348, 44, 80.00, 1, '2022-04-23 03:19:45', '2022-04-23 03:19:45'),
(349, 44, 80.00, 1, '2022-04-23 03:19:59', '2022-04-23 03:19:59'),
(350, 44, 80.00, 1, '2022-04-23 03:20:05', '2022-04-23 03:20:05'),
(351, 44, 80.00, 1, '2022-04-23 03:20:23', '2022-04-23 03:20:23'),
(352, 44, 80.00, 1, '2022-04-23 03:20:49', '2022-04-23 03:20:49'),
(353, 44, 80.00, 1, '2022-04-23 03:21:52', '2022-04-23 03:21:52'),
(354, 44, 80.00, 1, '2022-04-23 03:22:40', '2022-04-23 03:22:40'),
(355, 44, 80.00, 1, '2022-04-23 03:28:04', '2022-04-23 03:28:04'),
(364, 44, 80.00, 1, '2022-04-25 07:36:44', '2022-04-25 07:36:44'),
(365, 44, 80.00, 1, '2022-04-25 07:37:19', '2022-04-25 07:37:19'),
(366, 44, 80.00, 1, '2022-04-25 07:37:24', '2022-04-25 07:37:24'),
(367, 44, 80.00, 1, '2022-04-25 07:38:53', '2022-04-25 07:38:53'),
(367, 43, 89.00, 1, '2022-04-25 07:38:53', '2022-04-25 07:38:53'),
(368, 44, 80.00, 1, '2022-04-25 07:40:58', '2022-04-25 07:40:58'),
(368, 43, 89.00, 1, '2022-04-25 07:40:58', '2022-04-25 07:40:58'),
(369, 44, 80.00, 1, '2022-04-25 07:41:39', '2022-04-25 07:41:39'),
(369, 43, 89.00, 1, '2022-04-25 07:41:39', '2022-04-25 07:41:39'),
(370, 44, 80.00, 1, '2022-04-25 07:41:44', '2022-04-25 07:41:44'),
(370, 43, 89.00, 1, '2022-04-25 07:41:44', '2022-04-25 07:41:44'),
(371, 44, 80.00, 1, '2022-04-25 07:41:55', '2022-04-25 07:41:55'),
(371, 43, 89.00, 1, '2022-04-25 07:41:55', '2022-04-25 07:41:55'),
(372, 44, 80.00, 1, '2022-04-25 07:42:56', '2022-04-25 07:42:56'),
(372, 43, 89.00, 1, '2022-04-25 07:42:56', '2022-04-25 07:42:56'),
(373, 44, 80.00, 1, '2022-04-25 07:43:16', '2022-04-25 07:43:16'),
(373, 43, 89.00, 1, '2022-04-25 07:43:17', '2022-04-25 07:43:17'),
(373, 42, 70.00, 1, '2022-04-25 07:43:17', '2022-04-25 07:43:17'),
(374, 44, 80.00, 1, '2022-04-25 07:43:59', '2022-04-25 07:43:59'),
(374, 43, 89.00, 1, '2022-04-25 07:43:59', '2022-04-25 07:43:59'),
(374, 42, 70.00, 1, '2022-04-25 07:43:59', '2022-04-25 07:43:59'),
(375, 44, 80.00, 1, '2022-04-25 07:44:23', '2022-04-25 07:44:23'),
(375, 43, 89.00, 1, '2022-04-25 07:44:23', '2022-04-25 07:44:23'),
(375, 42, 70.00, 1, '2022-04-25 07:44:23', '2022-04-25 07:44:23'),
(376, 44, 80.00, 1, '2022-04-25 07:44:48', '2022-04-25 07:44:48'),
(376, 43, 89.00, 1, '2022-04-25 07:44:48', '2022-04-25 07:44:48'),
(376, 42, 70.00, 1, '2022-04-25 07:44:48', '2022-04-25 07:44:48'),
(377, 44, 80.00, 1, '2022-04-25 07:45:55', '2022-04-25 07:45:55'),
(377, 43, 89.00, 1, '2022-04-25 07:45:55', '2022-04-25 07:45:55'),
(377, 42, 70.00, 1, '2022-04-25 07:45:55', '2022-04-25 07:45:55'),
(378, 44, 80.00, 1, '2022-04-25 07:46:00', '2022-04-25 07:46:00'),
(378, 43, 89.00, 1, '2022-04-25 07:46:00', '2022-04-25 07:46:00'),
(378, 42, 70.00, 1, '2022-04-25 07:46:00', '2022-04-25 07:46:00'),
(379, 42, 70.00, 1, '2022-04-25 07:46:47', '2022-04-25 07:46:47'),
(380, 42, 70.00, 1, '2022-04-25 07:47:19', '2022-04-25 07:47:19'),
(381, 42, 70.00, 1, '2022-04-25 07:47:29', '2022-04-25 07:47:29'),
(382, 42, 70.00, 1, '2022-04-25 07:48:11', '2022-04-25 07:48:11'),
(383, 42, 70.00, 1, '2022-04-25 07:48:49', '2022-04-25 07:48:49'),
(384, 42, 70.00, 1, '2022-04-25 07:49:06', '2022-04-25 07:49:06'),
(385, 42, 70.00, 1, '2022-04-25 07:49:31', '2022-04-25 07:49:31'),
(386, 42, 70.00, 1, '2022-04-25 07:50:15', '2022-04-25 07:50:15'),
(386, 43, 89.00, 1, '2022-04-25 07:50:15', '2022-04-25 07:50:15'),
(387, 42, 70.00, 1, '2022-04-25 07:50:49', '2022-04-25 07:50:49'),
(387, 43, 89.00, 1, '2022-04-25 07:50:49', '2022-04-25 07:50:49'),
(388, 42, 70.00, 1, '2022-04-25 07:50:56', '2022-04-25 07:50:56'),
(388, 43, 89.00, 1, '2022-04-25 07:50:56', '2022-04-25 07:50:56'),
(389, 42, 70.00, 1, '2022-04-25 07:51:56', '2022-04-25 07:51:56'),
(389, 43, 89.00, 1, '2022-04-25 07:51:56', '2022-04-25 07:51:56'),
(390, 42, 70.00, 1, '2022-04-25 07:52:00', '2022-04-25 07:52:00'),
(390, 43, 89.00, 1, '2022-04-25 07:52:00', '2022-04-25 07:52:00'),
(391, 42, 70.00, 1, '2022-04-25 07:52:15', '2022-04-25 07:52:15'),
(391, 43, 89.00, 1, '2022-04-25 07:52:15', '2022-04-25 07:52:15'),
(392, 42, 70.00, 1, '2022-04-25 07:52:19', '2022-04-25 07:52:19'),
(392, 43, 89.00, 1, '2022-04-25 07:52:19', '2022-04-25 07:52:19'),
(393, 43, 89.00, 1, '2022-04-25 07:54:25', '2022-04-25 07:54:25'),
(400, 44, 80.00, 1, '2022-04-25 08:05:27', '2022-04-25 08:05:27'),
(400, 41, 400.00, 2, '2022-04-25 08:05:27', '2022-04-25 08:05:27'),
(401, 44, 80.00, 1, '2022-04-25 08:06:07', '2022-04-25 08:06:07'),
(401, 41, 400.00, 2, '2022-04-25 08:06:07', '2022-04-25 08:06:07'),
(402, 44, 80.00, 1, '2022-04-25 08:07:54', '2022-04-25 08:07:54'),
(403, 44, 80.00, 1, '2022-04-25 08:08:22', '2022-04-25 08:08:22'),
(404, 42, 70.00, 1, '2022-04-25 08:09:56', '2022-04-25 08:09:56'),
(404, 40, 100.00, 1, '2022-04-25 08:09:56', '2022-04-25 08:09:56'),
(405, 45, 201.00, 1, '2022-04-25 08:11:14', '2022-04-25 08:11:14'),
(405, 39, 30.00, 1, '2022-04-25 08:11:14', '2022-04-25 08:11:14'),
(406, 43, 89.00, 1, '2022-04-25 08:12:15', '2022-04-25 08:12:15'),
(406, 41, 400.00, 2, '2022-04-25 08:12:15', '2022-04-25 08:12:15'),
(407, 44, 80.00, 1, '2022-04-28 00:52:53', '2022-04-28 00:52:53'),
(408, 70, 220.00, 1, '2022-05-08 08:12:02', '2022-05-08 08:12:02'),
(408, 68, 123.00, 1, '2022-05-08 08:12:02', '2022-05-08 08:12:02'),
(408, 63, 150.00, 1, '2022-05-08 08:12:02', '2022-05-08 08:12:02'),
(408, 69, 200.00, 1, '2022-05-08 08:12:02', '2022-05-08 08:12:02'),
(409, 70, 220.00, 1, '2022-05-08 08:12:59', '2022-05-08 08:12:59'),
(409, 68, 123.00, 1, '2022-05-08 08:12:59', '2022-05-08 08:12:59'),
(409, 63, 150.00, 1, '2022-05-08 08:13:00', '2022-05-08 08:13:00'),
(409, 69, 200.00, 1, '2022-05-08 08:13:00', '2022-05-08 08:13:00'),
(410, 70, 220.00, 1, '2022-05-08 08:13:29', '2022-05-08 08:13:29'),
(410, 68, 123.00, 1, '2022-05-08 08:13:30', '2022-05-08 08:13:30'),
(410, 63, 150.00, 1, '2022-05-08 08:13:30', '2022-05-08 08:13:30'),
(410, 69, 200.00, 1, '2022-05-08 08:13:30', '2022-05-08 08:13:30'),
(411, 70, 220.00, 1, '2022-05-08 08:14:14', '2022-05-08 08:14:14'),
(411, 68, 123.00, 1, '2022-05-08 08:14:14', '2022-05-08 08:14:14'),
(411, 63, 150.00, 1, '2022-05-08 08:14:14', '2022-05-08 08:14:14'),
(411, 69, 200.00, 1, '2022-05-08 08:14:14', '2022-05-08 08:14:14'),
(412, 70, 220.00, 1, '2022-05-08 08:14:40', '2022-05-08 08:14:40'),
(412, 68, 123.00, 1, '2022-05-08 08:14:40', '2022-05-08 08:14:40'),
(412, 63, 150.00, 1, '2022-05-08 08:14:40', '2022-05-08 08:14:40'),
(412, 69, 200.00, 1, '2022-05-08 08:14:40', '2022-05-08 08:14:40'),
(413, 70, 220.00, 1, '2022-05-11 03:10:01', '2022-05-11 03:10:01'),
(414, 71, 40.00, 1, '2022-05-11 03:21:22', '2022-05-11 03:21:22'),
(415, 70, 220.00, 1, '2022-05-11 03:27:16', '2022-05-11 03:27:16'),
(416, 66, 90.00, 1, '2022-05-11 03:49:08', '2022-05-11 03:49:08'),
(417, 69, 200.00, 1, '2022-05-11 07:45:26', '2022-05-11 07:45:26'),
(418, 71, 40.00, 1, '2022-05-13 03:02:25', '2022-05-13 03:02:25'),
(421, 69, 200.00, 1, '2022-05-13 08:06:08', '2022-05-13 08:06:08'),
(422, 70, 220.00, 1, '2022-05-26 03:28:04', '2022-05-26 03:28:04'),
(423, 52, 297.00, 3, '2022-05-31 03:19:40', '2022-05-31 03:19:40');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categories_id` int(11) NOT NULL,
  `brands_id` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `categories_id`, `brands_id`, `description`, `image`, `price`, `quantity`, `status`, `created_at`, `updated_at`) VALUES
(48, 'Camera Hkvision hành trình', 'camera-hkvision-hành-trình', 26, 42, '<p>Camera kết nối điện thoại cảnh bảo</p>', '1651335377-b1.jpg', 80.00, 15, 1, '2022-04-30 09:16:17', NULL),
(49, 'Camera Xiaomi hành trình', 'camera-xiaomi-hành-trình', 26, 49, '<p>Camera có thể nhìn xuyên đêm</p>', '1651335447-c6.jpg', 70.00, 19, 1, '2022-04-30 09:17:27', NULL),
(50, 'Camera Dahue Analog', 'camera-dahue-analog', 24, 43, '<p>Camera quan sát có dây</p>', '1651335716-camearaAnalogdahue1.jpg', 66.00, 24, 1, '2022-04-30 09:21:56', NULL),
(51, 'Camera Hikvision Analog', 'camera-hikvision-analog', 24, 42, '<p>Camera dome</p>', '1651335928-cameraAnalog2Hk.jpg', 113.00, 48, 1, '2022-04-30 09:25:28', NULL),
(52, 'Camera Kbvision Analog', 'camera-kbvision-analog', 24, 44, '<p>Camera chống mưa</p>', '1651336045-cameraanalogkb1jpg.jpg', 99.00, 41, 1, '2022-04-30 09:27:25', NULL),
(54, 'Camera Kbvision Analog 2', 'camera-kbvision-analog-2', 24, 44, '<p>Camera ngoài trời chịu được nhiệt độ cao</p>', '1651336186-cameraanalogKb2.jpg', 200.00, 6, 1, '2022-04-30 09:29:46', NULL),
(55, 'Camera Vantech Analog', 'camera-vantech-analog', 24, 51, '<p>Camera phù hợp trong gia đình</p>', '1651336496-camera-analog-vantech-vp-114tx-digione.jpg', 147.00, 20, 1, '2022-04-30 09:34:56', NULL),
(56, 'Camera Vantech Analog 2', 'camera-vantech-analog-2', 24, 51, '<p>Camera có độ phân giải cao</p>', '1651336576-camera-analog-vantech-vp-150ahdm-digione.jpg', 69.00, 50, 1, '2022-04-30 09:36:16', NULL),
(57, 'Camera Vantech Analog 3', 'camera-vantech-analog-3', 24, 51, '<p>Camera có tần số quét cao, có cảnh báo khi có sự việc đi qua</p>', '1651336701-camera-analog-vantech-vp-2224atc-digione.jpg', 180.00, 23, 1, '2022-04-30 09:38:21', NULL),
(58, 'Camera Dahua Wifi', 'camera-dahua-wifi', 25, 43, '<p>Camera kết nối Wifi</p>', '1651336785-cameraDahuaWifi.jpg', 178.00, 60, 1, '2022-04-30 09:39:45', NULL),
(59, 'Camera Dahue Analog 2', 'camera-dahue-analog-2', 24, 43, '<p>Camera có chức năng lưu video , chụp màn hình</p>', '1651336882-cameraDahueanalog2.jpg', 88.00, 30, 1, '2022-04-30 09:41:22', NULL),
(60, 'Camera Dahua Wifi 2', 'camera-dahua-wifi-2', 25, 43, '<p>Camera có độ phân giải cao</p>', '1651337033-cameradahueWifi2.jpg', 77.00, 40, 1, '2022-04-30 09:43:53', NULL),
(62, 'Camera Xiaomi hành trình 2', 'camera-xiaomi-hanh-trinh-2', 26, 49, '<p>Camera kết nối internet</p>', '1651337144-camera-hanh-trinh-70mai-1s-trang-chu.jpg', 48.00, 10, 1, '2022-04-30 09:45:44', NULL),
(63, 'Camera Yoosee Wifi', 'camera-yoosee-wifi', 24, 47, '<p>Camera có thẻ nhớ cao lưu trữ hơn 1 tháng</p>', '1651337255-camera-op-tran-tuong-wifi-yoosee-360-digione-trang-chu-3.jpg', 150.00, 73, 1, '2022-04-30 09:47:35', NULL),
(64, 'Camera CareCam Wifi', 'camera-carecam-wifi', 25, 48, '<p>Camera có cảnh báo qua giọng nói</p>', '1651337431-camera-wifi-carecam-19hs-digione-trang-chu.jpg', 89.00, 17, 1, '2022-04-30 09:50:31', NULL),
(65, 'Camera CareCam Wifi 2', 'camera-carecam-wifi-2', 25, 48, '<p>Camera ghi hình liên tục 24h</p>', '1651337531-camera-wifi-carecam-19q-digione-trang-chu-2.jpg', 57.00, 14, 1, '2022-04-30 09:52:11', NULL),
(66, 'Camera Kbvision Wifi', 'camera-kbvision-wifi', 25, 44, '<p>Camera xem trực tiếp qua điện thoại</p>', '1651337625-camerawifikb2.jpg', 90.00, 42, 1, '2022-04-30 09:53:45', NULL),
(68, 'Camera Yoosee Wifi 2', 'camera-yoosee-wifi-2', 25, 47, '<p>Camera chia sẻ nhiều máy qua tài khoản</p>', '1651337770-camera-wifi-khong-day-ngoai-troi-yoosee-hd720-1m-digione-trang-chu.jpg', 123.00, 50, 1, '2022-04-30 09:56:10', NULL),
(69, 'Camera Yoosee Ngoài trời', 'camera-yoosee-ngoài-trời', 24, 47, '<p>Camera chịu được nhiệt độ cao</p>', '1651337881-camera-yoosee-ngoai-troi-x3200-digione-trang-chu-2.jpg', 200.00, 7, 1, '2022-04-30 09:58:01', NULL),
(70, 'Camera Ebitcam Wifi', 'camera-ebitcam-wifi', 25, 46, '<p>Camera cảnh báo qua giọng nói</p>', '1651337975-ebitcam-e2-camera-ip-wifi-1mp-hd-720p-digione-trang-chu-2.jpg', 220.00, 28, 1, '2022-04-30 09:59:35', NULL),
(71, 'Camera Xiaomi Wifi', 'camera-xiaomi-wifi', 25, 49, '<p>Camera có đàm thoại 2 chiều</p>', '1651338047-xiaomi-mihome-qdj4065gl-digione-trang-chu-2.jpg', 40.00, 12, 1, '2022-04-30 10:00:47', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `rating`
--

CREATE TABLE `rating` (
  `rating_id` int(11) NOT NULL,
  `products_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `rating`
--

INSERT INTO `rating` (`rating_id`, `products_id`, `rating`, `created_at`, `updated_at`) VALUES
(1, 71, 2, NULL, NULL),
(6, 71, 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `fullname` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `avatar` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `fullname`, `address`, `gender`, `birthday`, `avatar`) VALUES
(1, 'nxv1999', 'vietd8k11@gmail.com', '0971046025', '2021-10-08 21:14:02', 'viet@cz', '123456', '2021-10-08 21:14:02', NULL, 'Nguyễn Xuân Việt', 'Hà Nội', 'Nam', '1999-09-20', ''),
(2, 'nxk2009', 'xuankien2009@gmail.com', '0327769339', '2021-10-08 23:15:39', 'kien@cz', '123456789', '2021-10-08 23:15:39', NULL, 'Nguyễn Xuân Kiên', 'Hà Nội', 'Nam', '2009-04-20', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_username_unique` (`username`);

--
-- Chỉ mục cho bảng `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `brands_name_unique` (`name`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Chỉ mục cho bảng `coupon`
--
ALTER TABLE `coupon`
  ADD PRIMARY KEY (`coupon_id`);

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customer_email_unique` (`email`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`);

--
-- Chỉ mục cho bảng `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`rating_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT cho bảng `coupon`
--
ALTER TABLE `coupon`
  MODIFY `coupon_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=424;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT cho bảng `rating`
--
ALTER TABLE `rating`
  MODIFY `rating_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
