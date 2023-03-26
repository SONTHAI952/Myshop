-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 25, 2023 lúc 09:51 AM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `bakya`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `remember_token` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `province` varchar(50) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `role` varchar(50) DEFAULT 'customer',
  `status` tinyint(1) DEFAULT 1 COMMENT '1 là ok, 0 bị khóa',
  `created_at` date DEFAULT current_timestamp(),
  `updated_at` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`id`, `fname`, `lname`, `email`, `phone`, `password`, `remember_token`, `province`, `address`, `role`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Phuc', 'Nguyen', 'phucnguyen@example.com', '0946532665', '$2y$10$C0FFUaFas4puu0Q/RBVI4OV/SgcWCpTizmP9wzXh4tWZwX4ON93bu', NULL, 'Hà Nội', '121 Cầu Giấy', 'customer', 1, '2023-02-02', '2023-02-02'),
(2, 'Phuc', 'Nguyen', 'admin@example.com', '0946532685', '$2y$10$kdpnDlwi2WHr8JZPck/kZOOGS4htIcq8QEyPDz1OM7J0J.kG/b7TK', NULL, 'Hà Nội', '121 Cầu Giấy', 'admin', 1, '2023-02-02', '2023-02-02'),
(3, 'Harry', 'Potter', 'admin2@example.com', '0946532675', '25d55ad283aa400af464c76d713c07ad', '', 'Hà Nội', '121 Cầu Giấy', 'admin', 1, '2023-02-02', '2023-02-02'),
(4, 'Hermione', 'Granger', 'hermione@example.com', '0123455788', 'e10adc3949ba59abbe56e057f20f883e', NULL, 'Hà Nội', 'Hoan Kiem', 'customer', 1, '2023-02-02', '2023-02-02'),
(5, 'Viet Hoang', 'Nguyen', 'nvh@example.com', '0123555888', '$2y$10$HqE/RImqc7NJS3d02gNO/u./5UstOM1HLJABRB9kkgXyx855wRbzW', NULL, 'Hà Nội', '80 Nguyen Khang', 'customer', 1, '2023-02-02', '2023-02-02'),
(6, 'Hong Anh', 'Nguyen', 'anhnth@example.com', '0345556256', '$2y$10$a7svRwDCca3nsGhtLWJuLOLqYgx1UOBYDcTsQ6ixgIq5WnjT6W2m6', NULL, 'Hà Nội', 'Cho Long Bien', 'customer', 1, '2023-02-02', '2023-02-02'),
(7, 'Thai Duong', 'Tran', 'duongtt@example.com', '0123555889', '$2y$10$NVmb0OPjsKd2No06H7dGNOt/1N2XCZHLJQAGfZjMHGmFEfCwYXOLW', NULL, 'Hà Nội', 'Hoan Kiem', 'customer', 1, '2023-02-02', '2023-02-02'),
(8, 'Phuc', 'Nguyen', 'phucnguyen1@example.com', '0946582665', '25f9e794323b453885f5181f1b624d0b', '', 'Hà Nội', '121 Cầu Giấy', 'customer', 1, '2023-02-02', '2023-02-02'),
(9, 'Tri Hung', 'Nguyen', 'hungnguyen@example.com', '0526478951', '25d55ad283aa400af464c76d713c07ad', '', 'Hà Nội', 'Rive Park. vu Trong Phung', 'customer', 1, '2023-02-02', '2023-02-02'),
(10, 'Dzuong', 'Dep Trai', 'dzdeptrai@example.com', '0128456395', '25d55ad283aa400af464c76d713c07ad', '', 'Đắk Lắk', 'buon ma thuot', 'customer', 1, '2023-02-02', '2023-02-02'),
(11, 'Thái ', 'Sơn', 'admin3@example.com', '0859882251', '25f9e794323b453885f5181f1b624d0b', '', 'Hà Nội', 'Cầu giấy', 'admin', 1, '2023-03-10', '2023-03-10'),
(12, 'Lê', 'Toản', 'letoan@example.com', '0912191213', '25f9e794323b453885f5181f1b624d0b', '', 'Hà Nội', 'Đống Đa', 'customer', 1, '2023-03-11', '2023-03-11');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `site` varchar(255) DEFAULT 'home',
  `description` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1 COMMENT '1 là hiển thị, 0 ẩn',
  `priority` tinyint(4) DEFAULT 1,
  `created_at` date DEFAULT current_timestamp(),
  `updated_at` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `banner`
--

INSERT INTO `banner` (`id`, `name`, `image`, `site`, `description`, `status`, `priority`, `created_at`, `updated_at`) VALUES
(1, 'Home banner 1', 'banner-home.png', 'Home', 'Home Banner', 1, 1, '2023-02-02', '2023-02-02'),
(2, 'Home banner 2', 'home-banner-2.png', 'Home', 'Small home banner ', 1, 2, '2023-02-02', '2023-02-02'),
(3, 'About banner', 'wheatbg1.png', 'About', 'About banner ', 1, 1, '2023-02-02', '2023-02-02'),
(4, 'Product banner', 'product-banner.png', 'Product', 'Product banner ', 1, 1, '2023-02-02', '2023-02-02'),
(5, 'Product detail banner', 'product-banner.png', 'Product Detail', 'Product detail banner', 1, 1, '2023-02-02', '2023-02-02'),
(6, 'Cart banner', 'cart-banner.png', 'Cart', 'Cart banner', 1, 1, '2023-02-02', '2023-02-02'),
(7, 'Contact banner', 'product-banner.png', 'Contact', 'Contact banner', 1, 1, '2023-02-02', '2023-02-02'),
(8, 'Checkout banner', 'check-out-banner.png', 'Checkout', 'Checkout banner', 1, 1, '2023-02-02', '2023-02-02');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `summary` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1 COMMENT '1 là hiển thị, 0 ẩn',
  `account_id` int(11) NOT NULL,
  `created_at` date DEFAULT current_timestamp(),
  `updated_at` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `status` tinyint(1) DEFAULT 1 COMMENT '1 là hiển thị, 0 ẩn',
  `priority` tinyint(4) DEFAULT 1,
  `created_at` date DEFAULT current_timestamp(),
  `updated_at` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`, `status`, `priority`, `created_at`, `updated_at`) VALUES
(1, 'Đầm', 1, 2, '2023-02-02', '2023-03-12'),
(2, 'Quần', 1, 1, '2023-02-02', '2023-03-12'),
(3, 'Phụ kiện', 1, 1, '2023-02-02', '2023-03-10'),
(4, 'Áo', 1, 1, '2023-02-02', '2023-03-11'),
(15, 'Mũ', 1, 1, '2023-02-02', '2023-03-11');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `content` text DEFAULT NULL,
  `blog_id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `message` text DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `created_at` date DEFAULT current_timestamp(),
  `updated_at` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `contact`
--

INSERT INTO `contact` (`id`, `message`, `name`, `email`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'I would like to book in avanced your catering service', 'Phuc Nguyen', 'phucnguyen@example.com', '0123456598', '2023-02-02', '2023-02-02'),
(2, 'I would like to order a birthday cake for my aughter', 'Tri Hung Nguyen', 'hungnguyen@example.com', '0526478951', '2023-02-02', '2023-02-02');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `coupon`
--

CREATE TABLE `coupon` (
  `id` varchar(100) NOT NULL,
  `coupon_value` float(9,3) NOT NULL DEFAULT 0.000,
  `used_times` mediumint(8) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 is active, 0 is expired',
  `created_at` date DEFAULT current_timestamp(),
  `updated_at` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `coupon`
--

INSERT INTO `coupon` (`id`, `coupon_value`, `used_times`, `status`, `created_at`, `updated_at`) VALUES
('BEAUTIFUL', 0.100, 100, 1, '2023-02-02', '2023-02-02'),
('HAPPYTIME', 0.250, 100, 1, '2023-02-02', '2023-02-02'),
('PHUC', 0.200, 199, 1, '2023-02-02', '2023-02-02'),
('WELCOME', 0.300, 96, 1, '2023-02-02', '2023-02-02');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `province` varchar(100) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `note` text DEFAULT NULL,
  `delivery` varchar(100) NOT NULL,
  `payment` varchar(100) NOT NULL,
  `status` tinyint(1) DEFAULT 1 COMMENT '1 là pending, 0 delivered,2 la delivering, 3 la canceled',
  `account_id` int(11) NOT NULL,
  `created_at` date DEFAULT current_timestamp(),
  `updated_at` date DEFAULT current_timestamp(),
  `coupon` float(9,3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order`
--

INSERT INTO `order` (`id`, `fname`, `lname`, `email`, `phone`, `province`, `address`, `note`, `delivery`, `payment`, `status`, `account_id`, `created_at`, `updated_at`, `coupon`) VALUES
(1, 'Phuc', 'Nguyen', 'phucnguyen@example.com', '0946532665', 'Hà Nội', '121 Cầu Giấy', NULL, 'Giaohangtietkiem', 'Cash on delivery', 0, 1, '2023-02-02', '2023-02-02', NULL),
(2, 'Phuc', 'Nguyen', 'phucnguyen@example.com', '0946532665', 'Hà Nội', '121 Cầu Giấy', NULL, 'Giaohangtietkiem', 'Cash on delivery', 0, 1, '2023-02-02', '2023-02-02', NULL),
(3, 'Phuc', 'Nguyen', 'phucnguyen@example.com', '0946532665', 'Hà Nội', '121 Cầu Giấy', NULL, 'Giaohangtietkiem', 'Cash on delivery', 0, 1, '2023-02-02', '2023-02-02', NULL),
(4, 'Phuc', 'Nguyen', 'phucnguyen@example.com', '0946532665', 'Hà Nội', '121 Cầu Giấy', NULL, 'Giaohangtietkiem', 'Cash on delivery', 3, 1, '2023-02-02', '2023-02-02', NULL),
(5, 'Phuc', 'Nguyen', 'phucnguyen@example.com', '0946532665', 'Hà Nội', '121 Cầu Giấy', NULL, 'Giaohangtietkiem', 'Cash on delivery', 1, 1, '2023-02-02', '2023-02-02', NULL),
(6, 'Phuc', 'Nguyen', 'phucnguyen@example.com', '0946532665', 'Hà Nội', '121 Cầu Giấy', NULL, 'Giaohangtietkiem', 'Cash on delivery', 1, 1, '2023-02-02', '2023-02-02', NULL),
(7, 'Phuc', 'Nguyen', 'phucnguyen@example.com', '0946532665', 'Hà Nội', '121 Cầu Giấy', NULL, 'Giaohangtietkiem', 'Cash on delivery', 1, 1, '2023-02-02', '2023-02-02', NULL),
(8, 'Thai Duong', 'Tran', 'duongtt@example.com', '0123555889', 'Hà Nội', 'Hoan Kiem', NULL, 'Giaohangtietkiem', 'Cash on delivery', 1, 7, '2023-02-02', '2023-02-02', NULL),
(9, 'Thai Duong', 'Tran', 'duongtt@example.com', '0123555889', 'Hà Nội', 'Hoan Kiem', NULL, 'Giaohangtietkiem', 'Cash on delivery', 1, 7, '2023-02-02', '2023-02-02', NULL),
(10, 'Tri Hung', 'Nguyen', 'hungnguyen@example.com', '0946532668', 'Hà Nội', 'Rivera Park, Vu Trong Phung', NULL, 'Giaohangnhanh', 'Internet Banking', 0, 1, '2023-02-02', '2023-02-02', NULL),
(11, 'Hong Anh', 'Nguyen', 'anhnth@example.com', '0345556256', 'Hà Nội', 'Cho Long Bien', NULL, 'Giaohangtietkiem', 'Cash on delivery', 1, 6, '2023-02-02', '2023-02-02', NULL),
(12, 'Viet Hoang', 'Nguyen', 'nvh@example.com', '0123555888', 'Hà Nội', '80 Nguyen Khang', NULL, 'Giaohangtietkiem', 'Cash on delivery', 1, 5, '2023-02-02', '2023-02-02', NULL),
(13, 'Phuc', 'Nguyen', 'phucnguyen@example.com', '0946532665', 'Hà Nội', '121 Cầu Giấy', NULL, 'Giaohangtietkiem', 'Cash on delivery', 0, 1, '2023-02-02', '2023-02-02', NULL),
(14, 'Phuc', 'Nguyen', 'phucnguyen@example.com', '0946532665', 'Hà Nội', '121 Cầu Giấy', NULL, 'Giaohangtietkiem', 'Cash on delivery', 0, 1, '2023-02-02', '2023-02-02', NULL),
(15, 'Phuc', 'Nguyen', 'phucnguyen@example.com', 'fgfdgdh', 'Hà Nội', '121 Cầu Giấy', NULL, 'Giaohangtietkiem', 'Cash on delivery', 1, 1, '2023-02-02', '2023-02-02', NULL),
(19, 'Nguyễn', 'Phúc', 'phuc9clvt@gmail.com', '0123555888', 'Quảng Ninh', 'Cao Xanh', 'test', 'Giaohangtietkiem', 'Cash on delivery', 1, 1, '2023-02-02', '2023-02-02', NULL),
(20, 'Nguyễn', 'Phúc', 'phuc9clvt@gmail.com', '0123555888', 'Quảng Ninh', 'Cao Xanh', 'test', 'Giaohangtietkiem', 'Cash on delivery', 1, 1, '2023-02-02', '2023-02-02', NULL),
(21, 'Nguyễn', 'Phúc', 'phuc9clvt@gmail.com', '0904618994', 'Quảng Ninh', 'Cao Xanh', 'test2', 'Giaohangtietkiem', 'Cash on delivery', 1, 1, '2023-02-02', '2023-02-02', NULL),
(22, 'Harry', 'Potter', 'admin2@example.com', '0946532675', 'Hà Nội', '121 Cầu Giấy', '', 'Giaohangtietkiem', 'Cash on delivery', 1, 3, '2023-02-02', '2023-02-02', NULL),
(23, 'Harry', 'Potter', 'admin2@example.com', '0946532675', 'Hà Nội', '121 Cầu Giấy', 'test', 'Giaohangtietkiem', 'Cash on delivery', 1, 3, '2023-02-02', '2023-02-02', NULL),
(24, 'Phuc', 'Nguyen', 'phucnguyen1@example.com', '0946582665', 'Hà Nội', '121 Cầu Giấy', 'test ordder', 'Giaohangtietkiem', 'Cash on delivery', 1, 8, '2023-02-02', '2023-02-02', NULL),
(25, 'Phuc', 'Nguyen', 'phucnguyen1@example.com', '0946582665', 'Hà Nội', '121 Cầu Giấy', 'rterter', 'Giaohangtietkiem', 'Cash on delivery', 1, 8, '2023-02-02', '2023-02-02', NULL),
(26, 'Phuc', 'Nguyen', 'phucnguyen1@example.com', '0946582665', 'Hà Nội', '121 Cầu Giấy', 'sfgfgfd', 'Giaohangtietkiem', 'Cash on delivery', 2, 8, '2023-02-02', '2023-02-02', NULL),
(27, 'Phuc', 'Nguyen', 'phucnguyen1@example.com', '0946582665', 'Hà Nội', '121 Cầu Giấy', 'dsgfgrdfg', 'Giaohangtietkiem', 'Cash on delivery', 1, 8, '2023-02-02', '2023-02-02', NULL),
(28, 'Harry', 'Potter', 'admin2@example.com', '0946532675', 'Hà Nội', '121 Cầu Giấy', 'wsfeasgsrbsfhb', 'Giaohangtietkiem', 'Cash on delivery', 1, 3, '2023-02-02', '2023-02-02', NULL),
(29, 'Harry', 'Potter', 'admin2@example.com', '0946532675', 'Hà Nội', '121 Cầu Giấy', '', 'Giaohangtietkiem', 'Cash on delivery', 1, 3, '2023-02-02', '2023-02-02', NULL),
(30, 'Harry', 'Potter', 'admin2@example.com', '0946532675', 'Hà Nội', '121 Cầu Giấy', 'fhfnndgxm', 'Giaohangtietkiem', 'Cash on delivery', 1, 3, '2023-02-02', '2023-02-02', NULL),
(31, 'Harry', 'Potter', 'admin2@example.com', '0946532675', 'Hà Nội', '121 Cầu Giấy', 'tyuyfugvkigblhl', 'Giaohangtietkiem', 'Cash on delivery', 2, 3, '2023-02-02', '2023-02-02', NULL),
(32, 'Tri Hung', 'Nguyen', 'hungnguyen@example.com', '0526478951', 'Hà Nội', 'Rivera Park, Vu Trong Phung', '', 'Giaohangtietkiem', 'Cash on delivery', 1, 9, '2023-02-02', '2023-02-02', 0.300),
(33, 'Tri Hung', 'Nguyen', 'hungnguyen@example.com', '0526478951', 'Hà Nội', 'Rivera Park, Vu Trong Phung', '', 'Giaohangtietkiem', 'Cash on delivery', 2, 9, '2023-02-02', '2023-02-02', 0.000),
(34, 'Tri Hung', 'Nguyen', 'hungnguyen@example.com', '0526478951', 'Hà Nội', 'Rive Park. vu Trong Phung', '', 'Giaohangtietkiem', 'Cash on delivery', 1, 9, '2023-02-02', '2023-02-02', 0.300),
(35, 'Harry', 'Potter', 'admin2@example.com', '0946532675', 'Hà Nội', '121 Cầu Giấy', '', 'Giaohangtietkiem', 'Cash on delivery', 1, 3, '2023-02-02', '2023-02-02', 0.300),
(36, 'Harry', 'Potter', 'admin2@example.com', '0946532675', 'Hà Nội', '121 Cầu Giấy', '', 'Giaohangtietkiem', 'Cash on delivery', 1, 3, '2023-02-02', '2023-02-02', 0.300),
(37, 'Harry', 'Potter', 'admin2@example.com', '0946532675', 'Hà Nội', '121 Cầu Giấy', 'deliver soon please', 'Giaohangnhanh', 'Cash on delivery', 1, 3, '2023-02-02', '2023-02-02', 0.300),
(38, 'Dzuong', 'Dep Trai', 'dzdeptrai@example.com', '0128456395', 'Hà Nội', 'buon ma thuot', '', 'Giaohangtietkiem', 'Cash on delivery', 1, 10, '2023-02-02', '2023-02-02', 0.000),
(39, 'Harry', 'Potter', 'admin2@example.com', '0946532675', 'Hà Nội', '121 Cầu Giấy', '', 'Giaohangtietkiem', 'Visa', 0, 3, '2023-03-10', '2023-03-10', 0.000),
(40, 'Thái ', 'Sơn', 'admin3@example.com', '0859882251', 'Hà Nội', 'Cầu giấy', '', 'Giaohangtietkiem', 'Cash on delivery', 0, 11, '2023-03-18', '2023-03-17', 0.000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_detail`
--

CREATE TABLE `order_detail` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_detail`
--

INSERT INTO `order_detail` (`order_id`, `product_id`, `quantity`, `price`) VALUES
(1, 8, 1, 6),
(2, 3, 1, 5),
(3, 3, 1, 5),
(4, 8, 1, 6),
(5, 5, 1, 15),
(6, 8, 2, 12),
(6, 7, 2, 14),
(7, 5, 2, 30),
(7, 8, 1, 6),
(8, 7, 1, 7),
(8, 5, 1, 15),
(9, 8, 1, 6),
(10, 3, 1, 5),
(10, 4, 15, 525),
(11, 8, 1, 6),
(11, 4, 1, 35),
(12, 4, 1, 35),
(12, 6, 1, 6),
(12, 7, 1, 7),
(12, 8, 1, 6),
(12, 5, 1, 15),
(12, 1, 1, 20),
(12, 2, 1, 15),
(12, 3, 1, 5),
(13, 1, 10, 200),
(14, 8, 22, 132),
(14, 5, 3, 45),
(14, 6, 1, 6),
(15, 8, 1, 6),
(15, 5, 1, 15),
(20, 4, 3, 105),
(21, 2, 10, 150),
(22, 5, 3, 45),
(22, 4, 2, 64),
(23, 5, 9, 90),
(24, 10, 1, 6),
(12, 8, 1, 2),
(26, 6, 3, 18),
(12, 9, 1, 20),
(30, 10, 1, 6),
(30, 7, 1, 6),
(31, 7, 10, 60),
(32, 10, 3, 18),
(33, 9, 1, 20),
(34, 11, 8, 23.2),
(34, 8, 3, 6),
(34, 10, 5, 30),
(34, 9, 2, 40),
(34, 5, 5, 70),
(35, 11, 1, 2.9),
(35, 3, 1, 4),
(35, 9, 2, 40),
(35, 5, 2, 28),
(36, 9, 7, 140),
(37, 9, 5, 100),
(37, 5, 4, 56),
(38, 10, 6, 36),
(39, 10, 4, 24),
(40, 10, 1, 100000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `price` float(9,3) NOT NULL,
  `sale_price` float(9,3) DEFAULT 0.000,
  `description` text DEFAULT NULL,
  `origin` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `status` tinyint(1) DEFAULT 1 COMMENT '1 là hiển thị, 0 ẩn',
  `category_id` int(11) NOT NULL,
  `created_at` date DEFAULT current_timestamp(),
  `updated_at` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `image`, `price`, `sale_price`, `description`, `origin`, `quantity`, `status`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Đầm tay dài có túi', 'dress3.jpg', 250000.000, 100000.000, 'Sản phẩm thường có thiết kế đơn giản nhưng thanh lịch, thích hợp để mặc trong nhiều dịp khác nhau như đi làm, đi chơi, dự tiệc, hay đến công sở', 'vn', 2, 1, 1, '2023-02-02', '2023-03-15'),
(2, 'Túi đan tay', 'bag1.png', 150000.000, 50000.000, 'Sản phẩm thường có thiết kế đơn giản nhưng thanh lịch, thích hợp để mặc trong nhiều dịp khác nhau như đi làm, đi chơi, dự tiệc, hay đến công sở', 'vn', 1, 1, 3, '2023-02-02', '2023-03-17'),
(3, 'Đầm cổ tròn tay ngắn', 'dress2.jpg', 250000.000, 60000.000, 'Sản phẩm thường có thiết kế đơn giản nhưng thanh lịch, thích hợp để mặc trong nhiều dịp khác nhau như đi làm, đi chơi, dự tiệc, hay đến công sở', 'vn', 1, 1, 1, '2023-02-02', '2023-03-17'),
(4, 'Quần ống suông', 'pants4.jpg', 250000.000, 50000.000, 'Sản phẩm thường có thiết kế đơn giản nhưng thanh lịch, thích hợp để mặc trong nhiều dịp khác nhau như đi làm, đi chơi, dự tiệc, hay đến công sở', 'vn', 5, 1, 2, '2023-02-02', '2023-03-15'),
(5, 'Quần ống rộng xếp li', 'pants3.jpg', 250000.000, 140000.000, 'Sản phẩm thường có thiết kế đơn giản nhưng thanh lịch, thích hợp để mặc trong nhiều dịp khác nhau như đi làm, đi chơi, dự tiệc, hay đến công sở', 'vn', 2, 1, 2, '2023-02-02', '2023-03-17'),
(6, 'Wheat flour', 'shirt2.jpg', 250000.000, 0.000, 'Sản phẩm thường có thiết kế đơn giản nhưng thanh lịch, thích hợp để mặc trong nhiều dịp khác nhau như đi làm, đi chơi, dự tiệc, hay đến công sở', 'vn', 20, 1, 4, '2023-02-02', '2023-03-12'),
(7, 'Áo dài tay', 'shirt1.jpg', 250000.000, 100000.000, 'Sản phẩm thường có thiết kế đơn giản nhưng thanh lịch, thích hợp để mặc trong nhiều dịp khác nhau như đi làm, đi chơi, dự tiệc, hay đến công sở', 'vn', 14, 1, 4, '2023-02-02', '2023-03-15'),
(8, 'Đầm cổ tròn không tay', 'dress1.jpg', 250000.000, 0.000, 'Sản phẩm thường có thiết kế đơn giản nhưng thanh lịch, thích hợp để mặc trong nhiều dịp khác nhau như đi làm, đi chơi, dự tiệc, hay đến công sở', 'vn', 87, 1, 1, '2023-02-02', '2023-03-15'),
(9, 'Quần đùi kaki', 'pants2.jpg', 250000.000, 0.000, 'Sản phẩm thường có thiết kế đơn giản nhưng thanh lịch, thích hợp để mặc trong nhiều dịp khác nhau như đi làm, đi chơi, dự tiệc, hay đến công sở', 'vn', 15, 1, 2, '2023-02-02', '2023-03-15'),
(10, 'Nón lá', 'pngwing.com.png', 100000.000, 0.000, 'Sản phẩm thường có thiết kế đơn giản nhưng thanh lịch, thích hợp để mặc trong nhiều dịp khác nhau như đi làm, đi chơi, dự tiệc, hay đến công sở', 'vn', 0, 1, 15, '2023-02-02', '2023-03-17'),
(11, 'Đầm sơ mi kaki', 'no-sleeves-dress.jpg', 500000.000, 100000.000, 'Sản phẩm thường có thiết kế đơn giản nhưng thanh lịch, thích hợp để mặc trong nhiều dịp khác nhau như đi làm, đi chơi, dự tiệc, hay đến công sở', 'vn', 100, 1, 1, '2023-02-02', '2023-03-12');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `rating` tinyint(4) DEFAULT 5,
  `content` text DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `created_at` date DEFAULT current_timestamp(),
  `updated_at` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `review`
--

INSERT INTO `review` (`id`, `rating`, `content`, `product_id`, `account_id`, `created_at`, `updated_at`) VALUES
(32, 5, 'Tuyệt vời', 11, 11, '2023-03-12', '2023-03-12');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `account_id` (`account_id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_id` (`blog_id`),
  ADD KEY `account_id` (`account_id`);

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `coupon`
--
ALTER TABLE `coupon`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `account_id` (`account_id`);

--
-- Chỉ mục cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Chỉ mục cho bảng `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `review_ibfk_2` (`account_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `blog_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `account` (`id`);

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`blog_id`) REFERENCES `blog` (`id`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`account_id`) REFERENCES `account` (`id`);

--
-- Các ràng buộc cho bảng `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `account` (`id`);

--
-- Các ràng buộc cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`),
  ADD CONSTRAINT `order_detail_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

--
-- Các ràng buộc cho bảng `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`account_id`) REFERENCES `account` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
