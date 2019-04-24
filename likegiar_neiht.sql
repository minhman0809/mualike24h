-- phpMyAdmin SQL Dump
-- version 4.7.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th10 16, 2017 lúc 04:48 PM
-- Phiên bản máy phục vụ: 5.5.41-MariaDB
-- Phiên bản PHP: 7.0.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `likegiar_neiht`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `access_token`
--

CREATE TABLE `access_token` (
  `id` int(11) NOT NULL,
  `fbid` varchar(52) NOT NULL,
  `access_token` varchar(522) NOT NULL,
  `has_used` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Cấu trúc bảng cho bảng `gift_code`
--

CREATE TABLE `gift_code` (
  `id` int(11) NOT NULL,
  `gift` varchar(100) NOT NULL,
  `vnd` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



--
-- Cấu trúc bảng cho bảng `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `user` varchar(52) NOT NULL,
  `pass` varchar(52) NOT NULL,
  `email` varchar(52) NOT NULL,
  `vnd` varchar(52) NOT NULL,
  `block` varchar(11) NOT NULL,
  `chucvu` varchar(52) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `member`
--

INSERT INTO `member` (`id`, `fullname`, `user`, `pass`, `email`, `vnd`, `block`, `chucvu`) VALUES
(1, 'Lục Văn Thắng', 'developer', 'thangpda1102', '2405.pro@gmail.com', '1000000000', '', 'admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `package_vip`
--

CREATE TABLE `package_vip` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(10) NOT NULL,
  `limit_like` int(10) NOT NULL,
  `limit_post` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `package_vip`
--

INSERT INTO `package_vip` (`id`, `name`, `price`, `limit_like`, `limit_post`) VALUES
(1, 'T-150', '45000', 150, 10),
(2, 'T-300', '84000', 300, 10),
(3, 'T-500', '130000', 500, 10),
(4, 'T-700', '168000', 700, 10),
(5, 'T-1K', '220000', 1000, 10),
(6, 'T-1K5', '300000', 1500, 10),
(7, 'T-2K', '360000', 2000, 10);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `package_vip_bot`
--

CREATE TABLE `package_vip_bot` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `vnd` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `package_vip_bot`
--

INSERT INTO `package_vip_bot` (`id`, `name`, `vnd`) VALUES
(1, 'BOT REACT', '50000');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vip_bot`
--

CREATE TABLE `vip_bot` (
  `id` int(11) NOT NULL,
  `fbid` varchar(52) NOT NULL,
  `fbname` varchar(52) NOT NULL,
  `name_buy` varchar(52) NOT NULL,
  `type_react` varchar(52) NOT NULL,
  `type_access` varchar(52) NOT NULL,
  `access_token` varchar(525) NOT NULL,
  `access_cookie` varchar(1000) NOT NULL,
  `limit_time` varchar(52) NOT NULL,
  `time_buy` varchar(52) NOT NULL,
  `action` varchar(52) NOT NULL,
  `fb_dtsg` varchar(52) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Cấu trúc bảng cho bảng `vip_cmt`
--

CREATE TABLE `vip_cmt` (
  `id` int(11) NOT NULL,
  `fbid` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `name_buy` varchar(100) NOT NULL,
  `name_package` varchar(52) NOT NULL,
  `limit_time` varchar(52) NOT NULL,
  `time_buy` varchar(52) NOT NULL,
  `speed` varchar(52) NOT NULL,
  `action` varchar(52) NOT NULL,
  `cmt` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vip_like`
--

CREATE TABLE `vip_like` (
  `id` int(11) NOT NULL,
  `fbid` varchar(52) NOT NULL,
  `name` varchar(52) NOT NULL,
  `name_buy` varchar(52) NOT NULL,
  `name_package` varchar(52) NOT NULL,
  `limit_time` varchar(52) NOT NULL,
  `time_buy` varchar(52) NOT NULL,
  `speed` varchar(52) NOT NULL,
  `action` varchar(10) NOT NULL,
  `camxuc` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `access_token`
--
ALTER TABLE `access_token`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `gift_code`
--
ALTER TABLE `gift_code`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `package_vip`
--
ALTER TABLE `package_vip`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `package_vip_bot`
--
ALTER TABLE `package_vip_bot`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `vip_bot`
--
ALTER TABLE `vip_bot`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `vip_cmt`
--
ALTER TABLE `vip_cmt`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `vip_like`
--
ALTER TABLE `vip_like`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `access_token`
--
ALTER TABLE `access_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT cho bảng `gift_code`
--
ALTER TABLE `gift_code`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT cho bảng `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT cho bảng `package_vip`
--
ALTER TABLE `package_vip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `package_vip_bot`
--
ALTER TABLE `package_vip_bot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `vip_bot`
--
ALTER TABLE `vip_bot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT cho bảng `vip_cmt`
--
ALTER TABLE `vip_cmt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT cho bảng `vip_like`
--
ALTER TABLE `vip_like`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
