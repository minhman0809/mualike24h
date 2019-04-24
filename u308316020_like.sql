-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th4 24, 2019 lúc 07:58 AM
-- Phiên bản máy phục vụ: 10.2.17-MariaDB
-- Phiên bản PHP: 7.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `u308316020_like`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `buy_follow`
--

CREATE TABLE `buy_follow` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `name_buy` text COLLATE utf8_unicode_ci NOT NULL,
  `name_package` text COLLATE utf8_unicode_ci NOT NULL,
  `sub_type` text COLLATE utf8_unicode_ci NOT NULL,
  `fbid` text COLLATE utf8_unicode_ci NOT NULL,
  `time` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `buy_follow`
--

INSERT INTO `buy_follow` (`id`, `name`, `name_buy`, `name_package`, `sub_type`, `fbid`, `time`, `status`) VALUES
(9, 'trương thị thu hân', 'duongcongthuan', '3000', '2', '100002304768629', '15-10-2018\r\n (15:48)', 'Đã tăng  3,090'),
(10, 'trương thị thu hân', 'duongcongthuan', '3000', '2', '100002304768629', '17-10-2018\r\n (11:51)', 'Đã tăng 3,123'),
(11, 'truong thi thu han', 'duongcongthuan', '3000', '2', '100002304768629', '20-10-2018\r\n (16:55)', 'Đã tăng  3,001'),
(13, 'Ngọc Đức', 'ducgermany', '1000', '2', '100002938823611', '07-11-2018\r\n (22:55)', 'Đã tăng  980'),
(14, '100009309903728', 'ledungmualike', '1000', '2', '100009309903728', '12-11-2018\r\n (22:55)', 'Đã tăng  1100'),
(15, 'Lê Huỳnh Ngọc Thảo ', 'Kimle1402', '2500', '2', '100010707452725', NULL, NULL),
(16, 'Lê Huỳnh Ngọc Thảo ', 'Kimle1402', '1000', '2', '100010707452725', NULL, NULL),
(17, '100010707452725', 'hongdam307', '1000', '2', '100010707452725', NULL, NULL),
(18, '100010707452725', 'hongdam307', '1000', '1', '100010707452725', NULL, NULL),
(19, 'Test Long ', 'lady45', '1000', '1', '100002476123779', '09-12-2018\r\n (22:16)', 'đã tăng 1,084');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dbCvBuffCmt`
--

CREATE TABLE `dbCvBuffCmt` (
  `id` int(11) NOT NULL,
  `fbid` text COLLATE utf8_unicode_ci NOT NULL,
  `cmt` text COLLATE utf8_unicode_ci NOT NULL,
  `time` text COLLATE utf8_unicode_ci NOT NULL,
  `qty` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dbCvBuffCmtXong`
--

CREATE TABLE `dbCvBuffCmtXong` (
  `id` int(11) NOT NULL,
  `fbid` text COLLATE utf8_unicode_ci NOT NULL,
  `cmt` text COLLATE utf8_unicode_ci NOT NULL,
  `time` text COLLATE utf8_unicode_ci NOT NULL,
  `qty` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `fullname` text COLLATE utf8_unicode_ci NOT NULL,
  `user` text COLLATE utf8_unicode_ci NOT NULL,
  `pass` text COLLATE utf8_unicode_ci NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL,
  `vnd` text COLLATE utf8_unicode_ci NOT NULL,
  `block` text COLLATE utf8_unicode_ci NOT NULL,
  `chucvu` text COLLATE utf8_unicode_ci NOT NULL,
  `apikey` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `member`
--

INSERT INTO `member` (`id`, `fullname`, `user`, `pass`, `email`, `vnd`, `block`, `chucvu`, `apikey`) VALUES
(1, 'default', 'hongdam307', 'dkmdkm', 'email', '10000', '', '', 'nYxJG'),
(2, 'default', 'luonganhvietairdrop', 'Luonganhviet13392@', 'email', '0', '', '', '2078567429'),
(3, 'default', 'thang123', 'thang123', 'email', '24000', '', '', '3301492062'),
(4, 'default', 'katephung', 'kate', 'email', '281342', '', '', NULL),
(5, 'default', 'Hungpham', 'Hungpham', 'email', '0', '', '', NULL),
(6, 'default', 'hanglala99', '19119991', 'email', '0', '', '', NULL),
(7, 'default', 'newsky09', 'newsky09', 'email', '0', '', '', NULL),
(8, 'default', 'nghiadeptrai', 'nghiadeptrai', 'email', '0', '', '', NULL),
(9, 'default', 'ntvphulk', 'Phuong07051994', 'email', '0', '', '', NULL),
(10, 'default', 'thanhtam', '@#123456', 'email', '0', '', '', NULL),
(11, 'default', 'auto123', 'auto123', 'email', '0', '', '', NULL),
(12, 'default', 'jambos', 'czartor', 'email', '0', '', '', NULL),
(13, 'default', 'hoangtong', 'hoangtong1', 'email', '0', '', '', NULL),
(14, 'default', 'lvip1234', '12345612', 'email', '0', '', '', NULL),
(15, 'default', '09newsky', '09newsky', 'email', '0', '', '', NULL),
(16, 'default', 'nghiahsgs', 'convit97', 'email', '0', '', '', NULL),
(17, 'default', 'huongtra89', '12345678', 'email', '0', '', '', NULL),
(18, 'default', 'trungdz106', '01202498227a', 'email', '0', '', '', NULL),
(19, 'default', 'B0yv03anh9x', 'B0yv03anh9x', 'email', '0', '', '', NULL),
(20, 'default', '0934923794', 'linhka@', 'email', '0', '', '', NULL),
(21, 'default', 'duchuy', 'duchuy', 'email', '0', '', '', NULL),
(22, 'default', 'duongcongthuan', '2450987654', 'email', '117500', '', '', NULL),
(23, 'default', 'ledungmualike', 'Ledung362', 'email', '10000', '', '', NULL),
(24, 'default', 'kutebns123', 'dan123456789', 'email', '0', '', '', NULL),
(25, 'default', 'hoainam', '123456', 'email', '0', '', '', NULL),
(26, 'default', 'Nguoibian55106', '123456', 'email', '0', '', '', NULL),
(27, 'default', 'ngocvinh2001', '12332123', 'email', '0', '', '', NULL),
(28, 'default', 'kaispace', '1709Dang', 'email', '0', '', '', NULL),
(29, 'default', 'nguyenductai199', 'nguyenductai99', 'email', '0', '', '', NULL),
(30, 'default', 'anhtit123', 'anhtit', 'email', '0', '', '', NULL),
(31, 'default', 'Hoductai995', 'Xuannhattai1995', 'email', '0', '', '', NULL),
(32, 'default', 'duongkupi', 'anhduong12', 'email', '0', '', '', NULL),
(33, 'default', 'autolike', 'auto1996', 'email', '20640', '', '', NULL),
(34, 'default', 'phanvantuong', 'phanvantuongcusue', 'email', '655000', '', '', '7439722524'),
(35, 'default', 'ducgermany', '123123', 'email', '520000', '', '', NULL),
(36, 'default', 'hoakhe9x', 'anhhuyvkl12', 'email', '0', '', '', NULL),
(37, 'default', 'thaibaotpm6', 'thaibao96', 'email', '0', '', '', NULL),
(38, 'default', 'nguyencuong', 'cuongpk1994', 'email', '0', '', '', NULL),
(39, 'default', 'tonghuyhoang', 'yeutrang', 'email', '0', '', '', NULL),
(40, 'default', 'cubi01122001', '01122001bi', 'email', '0', '', '', NULL),
(41, 'default', 'Monglung', '123456', 'email', '0', '', '', NULL),
(42, 'default', 'Dungnv', 'Ls836363@h', 'email', '53333.33332', '', '', NULL),
(43, 'default', 'caotienloi', '1941989', 'email', '0', '', '', NULL),
(44, 'default', 'huyha123', '12345678', 'email', '0', '', '', NULL),
(45, 'default', 'maivanthe1992', 'tatca15061963', 'email', '0', '', '', NULL),
(46, 'default', 'nguyentan', 'philong2017', 'email', '0', '', '', NULL),
(47, 'default', 'siroshival', 'a1234567890', 'email', '0', '', '', NULL),
(48, 'default', '0971971701', '0909112596', 'email', '0', '', '', NULL),
(49, 'default', 'n3txpr1ng', 'samanasxp', 'email', '0', '', '', NULL),
(50, 'default', 'nguyenthihongmo2000', '17012000', 'email', '0', '', '', NULL),
(51, 'default', 'nguyenthihongmo.2000', 'mo17012000', 'email', '0', '', '', NULL),
(52, 'default', 'anhdiepmmk', 'Taokhongbiet@123', 'email', '0', '', '', NULL),
(53, 'default', 'hitcount', '0915924291', 'email', '0', '', '', NULL),
(54, 'default', 'hainam123', '@Hainam0110', 'email', '174000', '', '', 'XGpHM'),
(55, 'default', 'lehieuit', 'ahihi123', 'email', '0', '', '', NULL),
(56, 'default', 'tranminhkhuong', 'Khu0ng1992', 'email', '0', '', '', NULL),
(57, 'default', 'lady45', '123456', 'email', '93000', '', '', NULL),
(58, 'default', 'mrkim1991', 'ngoc291191', 'email', '0', '', '', NULL),
(59, 'default', 'Cauchatls', 'mtynkdav1', 'email', '0', '', '', NULL),
(60, 'default', 'bao365', 'li0405', 'email', '0', '', '', NULL),
(61, 'default', '0989817893', 'thanhok01', 'email', '0', '', '', NULL),
(62, 'default', 'duyhiep06121997', 'Dhiep1997', 'email', '0', '', '', NULL),
(63, 'default', '0911303157', 'anh ngọ ', 'email', '0', '', '', NULL),
(64, 'default', 'Dqdinh112', '1905Dinh', 'email', '0', '', '', NULL),
(65, 'default', 'tranminhkhuong2991', 'mimon', 'email', '0', '', '', NULL),
(66, 'default', 'ken123', 'KEN123', 'email', '0', '', '', NULL),
(67, 'default', 'Thienmax123', '12345thien', 'email', '0', '', '', NULL),
(68, 'default', 'dathihi', '0944524698', 'email', '0', '', '', NULL),
(69, 'default', 'huynhtuongduy', '932001', 'email', '0', '', '', NULL),
(70, 'default', 'phi161995', '13215444', 'email', '0', '', '', NULL),
(71, 'default', '0champ2', 'ckeckpoint1', 'email', '0', '', '', NULL),
(72, 'default', 'mylove96xx', 'anhyeuem', 'email', '0', '', '', NULL),
(73, 'default', 'Kimle1402', 'poiuytrew1402', 'email', '38000', '', '', NULL),
(74, 'default', 'lehoanglam', 'lehoanglam123', 'email', '30000', '', '', NULL),
(75, 'default', 'NguyenTrungNguyen', 'abc123abc', 'email', '0', '', '', NULL),
(76, 'default', 'Thanhbinh240', 'thanhbinh240', 'email', '0', '', '', NULL),
(77, 'default', 'vtv6hd', 'quaicang123', 'email', '0', '', '', NULL),
(78, 'default', 'pangchiu0101', 'zzzz', 'email', '0', '', '', NULL),
(79, 'default', 'fokosasxp', 'samanasxp', 'email', '0', '', '', NULL),
(80, 'default', 'tranquockhai', 'lovelinh', 'email', '0', '', '', NULL),
(81, 'default', 'nphuc303030', '01269368687', 'email', '0', '', '', NULL),
(82, 'default', 'huynhvantri12051995', 'lamgiau3979', 'email', '0', '', '', NULL),
(83, 'default', 'Hovanhoi', 'hovanhoi9559', 'email', '0', '', '', NULL),
(84, 'default', 'tuyethuonggg', 'Tuyethuong1.', 'email', '0', '', '', NULL),
(85, 'default', 'Nguyenyennhi1511', '15112002', 'email', '0', '', '', NULL),
(86, 'default', 'phatem1123', '01206836248', 'email', '0', '', '', NULL),
(87, 'default', 'Sondepzai1989', '123456', 'email', '0', '', '', NULL),
(88, 'default', 'kinesis', 'quangtruc123', 'email', '0', '', '', NULL),
(89, 'default', 'Dongsuka', 'dong123', 'email', '0', '', '', NULL),
(90, 'default', 'khanglq', '1212', 'email', '0', '', '', NULL),
(91, 'default', 'tonv11', 'Mila2016', 'email', '0', '', '', NULL),
(92, 'default', '0765431248', 'UiR-HU9-DqE-kcx', 'email', '0', '', '', NULL),
(93, 'default', 'zenlykoi', 'toaicankhon', 'email', '0', '', '', NULL),
(94, 'default', 'trungbita0001', '0001trungbita', 'email', '0', '', '', NULL),
(95, 'default', 'Nhibabe', 'hoangnhi11', 'email', '0', '', '', NULL),
(96, 'default', 'Tuyen123', '0987654321', 'email', '0', '', '', NULL),
(97, 'default', 'tukkytukky', 'tukkytukky', 'email', '0', '', '', NULL),
(98, 'default', 'nttu03', '13032005', 'email', '0', '', '', NULL),
(99, 'default', '013728000833472', '00000', 'email', '0', '', '', NULL),
(100, 'default', 'qquocan5', 'qquocan5', 'email', '0', '', '', NULL),
(101, 'default', '0968488268', 'matkhaucuahau', 'email', '35000', '', '', NULL),
(102, 'default', 'Long19', 'long1905', 'email', '0', '', '', NULL),
(103, 'default', '0934924544', 'chambao22122015', 'email', '0', '', '', NULL),
(104, 'default', 'minhvuong', '11111111p', 'email', '0', '', '', NULL),
(105, 'default', '0379237895', '343030', 'email', '0', '', '', NULL),
(106, 'default', 'Davidphuong744', '0368144221', 'email', '0', '', '', NULL),
(107, 'default', 'nhokchjen', 'nhokchjen', 'email', '0', '', '', NULL),
(108, 'default', 'Thuankalo', '55555555', 'email', '0', '', '', NULL),
(109, 'default', 'Milo1290', '123123123@', 'email', '0', '', '', NULL),
(110, 'default', 'bomanh075', 'Anhmanhso1', 'email', '0', '', '', NULL),
(111, 'default', 'hao123thien', 'haohotboy2002', 'email', '0', '', '', NULL),
(112, 'default', 'NganThai', '12345678910', 'email', '0', '', '', NULL),
(113, 'default', 'hoanglcit', 'maiyeu3005', 'email', '0', '', '', NULL),
(114, 'default', 'Steven', 'Hc12345678', 'email', '0', '', '', NULL),
(115, 'default', 'chuthangmark', '0165976088883', 'email', '0', '', '', NULL),
(116, 'default', 'h.ha2001', '09112001', 'email', '0', '', '', NULL),
(117, 'default', 'anhbao1136', 'baohp123', 'email', '0', '', '', NULL),
(118, 'default', 'Hiulele', 'vanloi11', 'email', '0', '', '', NULL),
(119, 'default', 'bynbyn147', '525509', 'email', '0', '', '', NULL),
(120, 'default', 'dieuthanh1911', 'thanhdieu', 'email', '0', '', '', NULL),
(121, 'default', 'hoangviet020501', 'hoangviet020501', 'email', '0', '', '', NULL),
(122, 'default', 'phat1111', 'phat1111', 'email', '0', '', '', NULL),
(123, 'default', 'Jaysimlai', 'bunrieu0108', 'email', '0', '', '', NULL),
(124, 'default', '0345495616', 'lethithanhxuan', 'email', '0', '', '', NULL),
(125, 'default', 'Mai123', 'eiaduy', 'email', '0', '', '', NULL),
(126, 'default', 'Andaica', 'lananh1', 'email', '0', '', '', NULL),
(127, 'default', 'kingprince', 'kingprincea4@gmail.com', 'email', '0', '', '', NULL),
(128, 'default', 'prothat123', 'prothat123', 'email', '0', '', '', 'KlPbu'),
(129, 'default', '01654232955', '01654232955', 'email', '0', '', '', NULL),
(130, 'default', 'htrang22', 'htrang', 'email', '0', '', '', NULL),
(131, 'default', 'hoangtuan932004', '0923095077', 'email', '0', '', '', NULL),
(132, 'default', 'utsmile', 'thuan1130', 'email', '0', '', '', NULL),
(133, 'default', '0348115570', 'lequynhtram12', 'email', '0', '', '', NULL),
(134, 'default', 'dangdoanhaui', 'doan1993', 'email', '0', '', '', NULL),
(135, 'default', 'hoangtuan2004', 'tuanngu', 'email', '0', '', '', NULL),
(136, 'default', 'sunbeautyskin', 'anhchu123', 'email', '0', '', '', NULL),
(137, 'default', 'tuyetnhi912', 'tuyetnhi912', 'email', '0', '', '', NULL),
(138, 'default', 'chienmax1111', '123123', 'email', '0', '', '', NULL),
(139, 'default', 'chienmax1', '123123', 'email', '0', '', '', NULL),
(140, 'default', 'tiengdz1', 'vipvip', 'email', '0', '', '', NULL),
(141, 'default', 'pomnguyen', '12345123', 'email', '0', '', '', NULL),
(142, 'default', 'adminwebvn', 'adminwebvn', 'email', '0', '', '', NULL),
(143, 'default', 'khai12345', 'Nguyenthithuthao', 'email', '0', '', '', NULL),
(144, 'default', 'manhnd', 'Anhmanh7295.', 'email', '0', '', '', NULL),
(145, 'default', 'Marietraxinh', 'zxcvbnm123', 'email', '0', '', '', NULL),
(146, 'default', 'caoduchuy', 'caoduchuydz123', 'email', '0', '', '', NULL),
(147, 'default', 'Hau123', '11111', 'email', '0', '', '', NULL),
(148, 'default', 'Neosun', 'ngoctrinh2014', 'email', '0', '', '', NULL),
(149, 'default', 'nhuthuc', 'nhuthuc185', 'email', '0', '', '', NULL),
(150, 'default', 'Xlinh1010', 'riphes-meCrep-3kibdo', 'email', '0', '', '', NULL),
(151, 'default', 'Xlinh1111', '123456789', 'email', '0', '', '', NULL),
(152, 'default', 'nguyenviet123az', '0966056918az', 'email', '0', '', '', NULL),
(153, 'default', 'ttomvt', 'toantom29', 'email', '0', '', '', NULL),
(154, 'default', 'kimtieuuy', '24100950', 'email', '0', '', '', NULL),
(155, 'default', 'anhduc', 'Anhduc01', 'email', '0', '', '', NULL),
(156, 'default', 'voanhvankh', 'Anhvan.vo290982', 'email', '0', '', '', NULL),
(157, 'default', 'ngochoang123', 'hoangminh1', 'email', '0', '', '', NULL),
(158, 'default', 'hoanx0601', '123456789', 'email', '0', '', '', NULL),
(159, 'default', 'vipkyd', 'cuchuoi', 'email', '0', '', '', NULL),
(160, 'default', 'nthithao2002', '20020406', 'email', '0', '', '', NULL),
(161, 'default', 'cuongbonly', 'cuong1994', 'email', '0', '', '', NULL),
(162, 'default', 'emlamwap', '123456', 'email', '0', '', '', NULL),
(163, 'default', 'Meilee', '051200', 'email', '0', '', '', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `package_vip`
--

CREATE TABLE `package_vip` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `price` text COLLATE utf8_unicode_ci NOT NULL,
  `limit_like` text COLLATE utf8_unicode_ci NOT NULL,
  `limit_post` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `package_vip`
--

INSERT INTO `package_vip` (`id`, `name`, `price`, `limit_like`, `limit_post`) VALUES
(1, '50', '20000', '50', '150'),
(2, '100', '40000', '100', '150'),
(3, '150', '45000', '150', '150'),
(4, '200', '65000', '200', '150'),
(5, '300', '90000', '300', '150'),
(6, '400', '120000', '400', '150'),
(7, '500', '140000', '500', '150');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbsinhvienk60`
--

CREATE TABLE `tbsinhvienk60` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `sdt` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbsinhvienk60`
--

INSERT INTO `tbsinhvienk60` (`id`, `name`, `sdt`) VALUES
(1, 'nguyen ba nghia', '012345678');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vip_buff`
--

CREATE TABLE `vip_buff` (
  `id` int(11) NOT NULL,
  `fbid` text COLLATE utf8_unicode_ci NOT NULL,
  `numberLike` text COLLATE utf8_unicode_ci NOT NULL,
  `name_buy` text COLLATE utf8_unicode_ci NOT NULL,
  `time_buy` text COLLATE utf8_unicode_ci NOT NULL,
  `likeDone` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `camxuc` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `serverBuffLike` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `vip_buff`
--

INSERT INTO `vip_buff` (`id`, `fbid`, `numberLike`, `name_buy`, `time_buy`, `likeDone`, `status`, `camxuc`, `serverBuffLike`) VALUES
(2, '2396331993927658', '20', 'nghiahsgs', '1537519021', NULL, 'order_success', 'like', NULL),
(3, '321522668654773', '20', 'katephung', '1537521655', NULL, 'fail', 'like', NULL),
(4, '321522668654773', '50', 'katephung', '1537521808', NULL, 'fail', 'like', NULL),
(5, '322176108589429', '70', 'katephung', '1537522231', NULL, 'order_success', 'like', NULL),
(6, '311625259644514', '70', 'katephung', '1537522272', NULL, 'order_success', 'like', NULL),
(7, '311617482978625', '70', 'katephung', '1537522315', NULL, 'order_success', 'like', NULL),
(8, '311617052978668', '70', 'katephung', '1537522345', NULL, 'order_success', 'like', NULL),
(9, '311620292978344', '70', 'katephung', '1537522385', NULL, 'order_success', 'like', NULL),
(10, '322175005256206', '70', 'katephung', '1537522418', NULL, 'order_success', 'like', NULL),
(11, '2139334476317592', '60', 'katephung', '1537936662', NULL, 'order_fail_sai_id_refund', 'like', NULL),
(12, '2140379406213099', '53', 'katephung', '1537936780', NULL, 'order_fail_sai_id_refund', 'like', NULL),
(13, '2141440442773662', '60', 'katephung', '1537936843', NULL, 'order_fail_sai_id_refund', 'like', NULL),
(14, '2141440746106965', '65', 'katephung', '1538971850', NULL, 'order_success', 'like', NULL),
(15, '1936926283054601', '50', 'katephung', '1539258431', NULL, 'order_success', 'like', NULL),
(16, '2148425895422208', '2000', 'Hungpham', '1539399300', NULL, 'order_fail_sai_id_refund', 'like', NULL),
(17, '2148425865422211', '2000', 'Hungpham', '1539400065', NULL, 'order_success', 'like', NULL),
(18, '2147173555547442', '1800', 'Hungpham', '1539400717', NULL, 'order_success', 'like', NULL),
(19, '2147549562176508', '1800', 'Hungpham', '1539453556', NULL, 'order_success', 'like', NULL),
(20, '309117969888289', '1200', 'Hungpham', '1539687129', NULL, 'order_success', 'like', NULL),
(21, '276715192975541', '50', 'katephung', '1540010447', NULL, 'order_success', 'like', NULL),
(22, '276993072947753', '21', 'katephung', '1540010806', NULL, 'order_success', 'like', NULL),
(23, '2306697182691181', '20', 'katephung', '1540263668', NULL, 'order_success', 'like', NULL),
(24, '354289485310723', '20', 'katephung', '1540263701', NULL, 'order_fail_sai_id_refund', 'like', NULL),
(25, '2306872029340363', '20', 'katephung', '1540286097', NULL, 'order_success', 'like', NULL),
(26, '277748796205514', '43', 'katephung', '1540286116', NULL, 'order_success', 'love', NULL),
(27, '2141475586103481', '53', 'katephung', '1540354934', NULL, 'order_success', 'like', NULL),
(28, '2141460882771618', '55', 'katephung', '1540354992', NULL, 'order_success', 'like', NULL),
(29, '2142584895992550', '53', 'katephung', '1540355081', NULL, 'order_success', 'like', NULL),
(30, '2135867323330974', '53', 'katephung', '1540355364', NULL, 'order_fail_sai_id_refund', 'like', NULL),
(31, '2135867323330974', '55', 'katephung', '1540355462', NULL, 'order_fail_sai_id_refund', 'like', NULL),
(32, '2135867323330974', '55', 'katephung', '1540355503', NULL, 'order_fail_sai_id_refund', 'like', NULL),
(33, '2135867323330974', '40', 'katephung', '1540355548', NULL, 'order_fail_sai_id_refund', 'like', NULL),
(34, '2135867323330974', '50', 'katephung', '1540355577', NULL, 'order_fail_sai_id_refund', 'like', NULL),
(35, '2135867323330974', '45', 'katephung', '1540355604', NULL, 'order_fail_sai_id_refund', 'like', NULL),
(36, '2135867323330974', '60', 'katephung', '1540355633', NULL, 'order_fail_sai_id_refund', 'like', NULL),
(37, '2135867323330974', '50', 'katephung', '1540437775', NULL, 'order_fail', 'like', NULL),
(38, '2135867323330974', '50', 'katephung', '1540437909', NULL, 'order_fail', 'like', NULL),
(39, '2135867323330974', '43', 'katephung', '1540438015', NULL, 'order_fail', 'like', NULL),
(40, '2135867323330974', '22', 'katephung', '1540438092', NULL, 'order_fail', 'like', NULL),
(41, '2135867323330974', '45', 'katephung', '1540438155', NULL, 'order_fail', 'like', NULL),
(42, '2135867323330974', '50', 'katephung', '1540438231', NULL, 'order_fail', 'like', NULL),
(43, '2142545722663134', '50', 'katephung', '1540438519', NULL, 'order_success', 'like', NULL),
(44, '2144006705850369', '50', 'katephung', '1540438556', NULL, 'order_success', 'like', NULL),
(45, '2201056619928553', '22', 'katephung', '1540438592', NULL, 'order_success', 'like', NULL),
(46, '2149905205260519', '50', 'katephung', '1540438626', NULL, 'order_success', 'like', NULL),
(47, '2150949788489394', '45', 'katephung', '1540438667', NULL, 'order_success', 'like', NULL),
(48, '335472890547275', '22', 'katephung', '1540438695', NULL, 'order_success', 'like', NULL),
(49, '2150947955156244', '54', 'katephung', '1540438729', NULL, 'order_success', 'like', NULL),
(50, '501826303666419', '25', 'katephung', '1540438757', NULL, 'order_success', 'like', NULL),
(51, '2151465801771126', '60', 'katephung', '1540438804', NULL, 'order_success', 'like', NULL),
(52, '164283937836971', '20', 'katephung', '1540438832', NULL, 'order_success', 'like', NULL),
(53, '2158052221112484', '45', 'katephung', '1540438880', NULL, 'order_success', 'like', NULL),
(54, '2159069777677395', '50', 'katephung', '1540438901', NULL, 'order_success', 'like', NULL),
(55, 'https://www.facebook.com/Xuonggiaycrocs/videos/322433098341821/', '50', 'autolike', '1540470786', NULL, 'order_fail', 'like', NULL),
(56, 'https://www.facebook.com/Xuonggiaycrocs/posts/283686518917429', '30', 'autolike', '1540515016', NULL, 'order_fail', 'like', NULL),
(57, 'https://www.facebook.com/photo.php?fbid=841122832755948&set=a.106216232913282&type=3', '50', 'autolike', '1540520966', NULL, 'order_fail', 'like', NULL),
(58, '10210086980650151', '100', 'autolike', '1540521289', NULL, 'order_success', 'like', NULL),
(59, '1938662525363', '100', 'autolike', '1540521807', NULL, 'order_success', 'like', NULL),
(60, '322433098341821', '50', 'autolike', '1540523064', NULL, 'order_success', 'like', NULL),
(61, '110176599601756', '50', 'autolike', '1540523440', NULL, 'order_fail', 'like', NULL),
(62, '487120431693605', '30', 'autolike', '1540523522', NULL, 'order_success', 'like', NULL),
(63, '487120271693621', '20', 'autolike', '1540523908', NULL, 'order_success', 'like', NULL),
(64, '276585206080463', '20', 'autolike', '1540524158', NULL, 'order_success', 'like', NULL),
(65, '271826833222967_487120431693605', '30', 'autolike', '1540524433', NULL, 'order_fail', 'like', NULL),
(66, '283686518917429', '30', 'autolike', '1540532513', NULL, 'order_success', 'like', NULL),
(67, '2279089895694263', '20', 'katephung', '1541043661', NULL, 'order_success', 'like', NULL),
(68, '305799670251926', '20', 'katephung', '1541043860', NULL, 'order_success', 'like', NULL),
(69, '272085433438517', '50', 'katephung', '1541149784', NULL, 'order_success', 'like', NULL),
(70, '306444370187456', '50', 'katephung', '1541150608', NULL, 'fail', 'like', NULL),
(71, '306462120185681', '20', 'katephung', '1541151436', NULL, 'order_success', 'like', NULL),
(72, '270349880278739', '50', 'katephung', '1541218578', NULL, 'order_success', 'like', NULL),
(75, '281348385845555', '20', 'katephung', '1541385146', NULL, 'order_success', 'like', '1'),
(76, '956849734483961', '700', 'katephung', '1541597169', NULL, 'order_success', 'like', '2'),
(77, '965953803573554', '800', 'katephung', '1542163842', NULL, 'order_success', 'like', '2'),
(78, '2259804064298516', '200', 'katephung', '1542276165', NULL, 'order_success', 'like', '1'),
(79, '2012725938807968', '20', 'katephung', '1542628588', NULL, 'order_success', 'like', '1'),
(80, '956849734483961', '800', 'katephung', '1542628615', NULL, 'order_success', 'like', '2'),
(81, '958906567611611', '700', 'katephung', '1542628667', NULL, 'order_success', 'like', '2'),
(82, '972576729577928', '300', 'katephung', '1542887939', NULL, 'order_fail', 'like', '2'),
(83, '974451759390425', '399', 'katephung', '1543077442', NULL, 'order_success', 'like', '1'),
(84, '2014303945326065', '1500', 'Hungpham', '1543328000', NULL, 'order_fail', 'like', '1'),
(85, '2232979820362599', '1000', 'autolike', '1544108804', NULL, 'order_success', 'like', '1'),
(86, '2232979820362599', '1000', 'autolike', '1544148104', NULL, 'order_success', 'like', '1'),
(87, '800774380253845', '1000', 'autolike', '1544937675', NULL, NULL, 'like', '1'),
(88, '301290270719517', '1000', 'autolike', '1544937718', NULL, NULL, 'like', '1'),
(89, '432082437327338', '20', 'katephung', '1545017994', NULL, NULL, 'like', '1'),
(90, '432082763993972', '20', 'katephung', '1545018046', NULL, NULL, 'like', '1'),
(91, '431261614076087', '20', 'katephung', '1545018060', NULL, NULL, 'like', '1'),
(92, '431257110743204', '20', 'katephung', '1545018073', NULL, NULL, 'like', '1'),
(93, '432254263976822', '20', 'katephung', '1545018118', NULL, NULL, 'like', '1'),
(94, '432200753982173', '20', 'katephung', '1545018206', NULL, NULL, 'like', '1'),
(95, '432206797314902', '20', 'katephung', '1545018233', NULL, NULL, 'like', '1'),
(96, '433253350543580', '20', 'katephung', '1545018248', NULL, NULL, 'like', '1'),
(97, '432191233983125', '20', 'katephung', '1545018263', NULL, NULL, 'like', '1'),
(98, '438463996689182', '20', 'katephung', '1545018280', NULL, NULL, 'like', '1'),
(99, '438463996689182', '20', 'katephung', '1545018999', NULL, NULL, 'like', '1'),
(100, '432191233983125', '20', 'katephung', '1545019051', NULL, NULL, 'like', '1'),
(101, '992223697613231', '200', 'katephung', '1545473631', NULL, NULL, 'like', '2'),
(102, '992223697613231', '200', 'katephung', '1545568564', NULL, NULL, 'like', '2'),
(103, '1157447454421141', '20', 'katephung', '1547105799', NULL, NULL, 'like', '2'),
(104, '1039440612891539', '300', 'katephung', '1551958458', NULL, NULL, 'like', '1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vip_buff_cmt`
--

CREATE TABLE `vip_buff_cmt` (
  `id` int(11) NOT NULL,
  `fbid` text COLLATE utf8_unicode_ci NOT NULL,
  `note` text COLLATE utf8_unicode_ci NOT NULL,
  `name_buy` text COLLATE utf8_unicode_ci NOT NULL,
  `package` text COLLATE utf8_unicode_ci NOT NULL,
  `cmt` text COLLATE utf8_unicode_ci NOT NULL,
  `status` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `timebuy` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `speed` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `cgt` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `vip_buff_cmt`
--

INSERT INTO `vip_buff_cmt` (`id`, `fbid`, `note`, `name_buy`, `package`, `cmt`, `status`, `timebuy`, `speed`, `cgt`) VALUES
(124, '2436786216548902', 'note', 'hongdam307', '30', 'Cho em hỏi cái này bao nhiêu ạ ?=Cái này làm từ gì thế shop ơi ?=Mình có đồ của bts không ạ ?=Còn màu khác không nhỉ ?=Đây là size to nhất rồi hả shop ơi ?=Cái này có size bé hơn không ạ?=Còn cái nào tương tự với cái này không ạ?=Cửa hàng mình mới mở phải không ạ?=Đồ của mình rẻ thật ! Ước gì biết đến shop sớm hơn !=Cái này xuất xứ ở đâu thế ?=Chất liệu như nhau hay khác nhau thế shop ?=2 loại này khác nhau như nào bạn nhỉ ?=Cái này thì có bền hơn không shop ?=Nếu sản phẩm không như bên mình quảng cáo thì sẽ xử lí như thế nào ?=Có chống được nước không shop ?=Đây có phải đồ thái lan không shop ?=Có cái nào mới hơn không cái này trông như cũ ý !=Mình có bán hộp đựng cơm 3 ngăn không thế ^^=Ở xa thì có được hỗ trợ ship ko nhỉ ?=Bên mình có shopee không ạ ?=Ship về Nam định thì thế nào ạ ?=Cửa hàng có nhận ship code ko ? =Thấy đẹp không hôm này ra đây xem thử đi ?=Màu trên ảnh với ngoài đời chênh nhau nhiều không shop ơi ?=Mua nhiều có được khuyến mãi thêm gì không nhỉ ?=Bạn dặn ship qua đúng giờ hành chính nhé muộn quá mình không ở cty nữa đâu !=Mai lại ship ra nhà mình thêm 1 con nữa nhé tks shop  !=Check inbox dùm em nha, thanks shop !!=Em đặt bây giờ thì bao giờ em nhận được hàng vậy shop?=Shop gửi hàng cho em chưa ạ?=Đồ lần này về còn đáng iu hơn lần trước ạ ^^=Món này còn hàng không ạ?=Đơn hàng em mua nhiều tiền như thế có được free ship không ạ ?=Mình có nhận sỉ không shop ?=Địa chỉ mình ở đâu thế shop ?=Hàng có sẵn không mình=Mấy giờ mình mở cửa hàng thế ạ ?=Mấy giờ shop đóng cửa thế shop ơi ?=Cái này mở ra xem thử được không shop ?=Bên mình có nhận gói quà luôn không ?=Hàng của e shop gửi đi chưa ?=Ad cho hỏi bên mình có tuyển CTV không ạ?=Bao giờ thì bên mình có chương trình khuyễn mãi tiếp thế nhỉ ?=Thế bao lâu nữa thì hàng mới về hả shop?=Có thể thanh toán bằng Momo được không ạ?=Cho e hỏi cửa hàng đang có chương trình khuyến mãi 20% mà trong thời gian khuyến mãi lại đúng dịp sinh nhật em thì em được khuyến mãi tối đa bao nhiêu % ạ ?=Bên mình có nhận ship ruột không ạ ?=Cửa hàng mình chuyên mỗi đồ Thái lan hay còn nhập thêm cả đồ Trung Quốc nữa ạ ?=Bên mình còn tuyển nhân viên nữa không ạ ?=Ib tư vấn giúp mình với shop !=Shop phục vụ rất nhiệt tình quá ! Sẽ ủng hộ lâu dài=Gấu bông chất đẹp quá ! Ôm thích lắm ^^=Update thêm nhiều mẫu nữa nha <3 Cưng quá trời lun ạ ', '34', '1542888894', '1', '1'),
(125, '2192251167767848', 'note', 'lady45', '50', 'Em ơi chị đặt 1 cái cho người 52kg em nhé, sđt 0962726292 tư vấn chị nha=Cho chị đặt them 1 cái này size 3XL cho bạn chị nhé 0869121143. Hôm trước chị mua 1 cái rồi mà mặc ưng quá em ạ. =Tư vấn cho mình nhé : 0985400762 mình muốn đặt 2 cái cho 2 người nha shop=Cho chị 1 cái về địa chỉ cũ em nhé : số nhà 37 ngõ 62, đường Hà Huy Tập, TP Vinh, Nghệ an sđt 0981632221 nha em yêu . =Chị cao 1m6 – 53kg thì mặc size nào hả em 0966680607 tư vấn chị nhé=Chị 1 cái mãu này nữa gộp đơn chiều nay cho chị nhé, khách hang quen đó em nha  0965904868=Tủ quần áo toàn đổ ladyshop thôi, yêu quá đi thôi, chốt cho chị them 1 mẫu này nữa em nha 0375587309 nha em=Da chị hơi ngăm mặc màu gì thì hợp hả em tư vấn chị nha : 0989132325 =Chị lấy em 1 mẫu này nhé, em lấy cho mẹ em ạ cao 1m55 – 57kg nha chị sđt 0328876345 ạ=Chị muốn mua mẫu này em ơi tư vấn cho chị nhé 0378866327 nha em =Cho chị 1 cái L và 2 cái 2XL nhé em về địa chỉ cũ em nhé, khách hang quen miễn ship nha em yêu sđt chị 0962726292 =Được xem hang trước không em, chị lấy 1 mẫu này em nhé, tư vấn chị sdt 0965103060=Mẹ em cao 1m52 – 52kg có mặc vừa mẫu này không shop, tư vấn giúp em ạ 0985400762=Sdt 0375587309 chốt cho chị đầm này em nhé 54kg nha chị :  thôn  thanh công, đại tập , khoái châu, hưng yên nha shop=Em ơi eo 82 thì mặc size gì em tư vấn chị ; 0966680607 =Minh cao 1 mà nặng 64kg eo 84 ngực 96 mặc vừa không shop 0976389282=Em oi ban chi 52kg thi mac size gi ha em , 0965904868 tư van giup chi nhe=Mau này chi 53 tuoi măc hơp k em tu van cho chi nha 0981632221=Đặt chị đầm đỏ đt 0983536271 tổ 35 khóm 5 phường 11 cao 1,55 nặng 48kg .không như líp thì kg nhận hàng nhé em.=Giá bao nhiêu 1chiếc vậy tôi cao 1m58 nặng 53kg ,mua cỡ nào mặc vừa vậy sdt tôi 0985400762=Cao 1/53m nặng 62kg( tuổi 60) có xai ý khong? 2XL 0378866327=toi muon mua 2 cu the la chieu cao 1 58 nang 65 kg bung hoi to so dt 0328876345= Có sezj cho người năng70kg cao 1m65 ko shop 00989132325=Ladyshop o dau vay gia ao dam do bao nhieu xin cho biet cao 1m56 nang 65kg.ao co co gian ko. Cho chi 1 mẫu nay nhé 0965103060=Nghiện ladyshop qua rồi biet phai lam sao ha shop, mien ship chi nhe chi lay them mau này 0981632221=có cỡ của tôi không?=cao m55 nặng 68 cân thì mặc side gì?=mẫu này bao nhiêu?=địa chỉ shop ở đâu?=cho 1 cai nay ve dia chi cu nhe=chieu dai vay la bao nhieu? Goi dien tu van cho toi nhe=mẫu này có ở lê văn sỹ không shop=nặng 48kg có vừa không shop=tôi muốn mua 1 mẫu như hình thì lam như nao ?=cho tôi sz XL=dia.chi.shop.o.dau.cho.toi.biet.de.toi.dat.mua.hang=tôi cần biết thêm thông tin sản phẩm , xin tư vân?=cao m6 nặng 53k mặc size gì shop?=shop ơi cho em 1 cái  sz 4xl đến số 33- Hàn thuyên- Hòa Cường Bắc - Ngũ Hành Sơn - Đà Nẵng với ạ=dat hang nhu the nao ??=mình cần shop tư vấn để mua cho mẹ ? =Mẫu này có sz cho người 66kg không sốp?=dep qua sop oi. Cho minh mot chiec nhe. Sdt =ó màu khác nữa không shop? Mình cao m58 - 59kg=tôi lấy cái này , gửi về địa chỉ cũ ở Gia Lai cho tôi nhé=01678866327 shop tư vấn cho tôi mẫu này ạ cao 1m50-48kg=shop tư vấn nhiệt tình, hang đẹp , giá cả phải chăng, nhiều ưu đãi cho khách hang, sẽ ủng hộ shop lâu dài=cho tôi 1 đầm 60kg đên xóm 4-phú đô-mễ trì-ha nôi.=cho tôi váy này đên đia chi số nhà 44 thôn nam , đức hoà,long an=0962726292 váy của shop đẹp quá ,shop tư vấn thêm cho mình mua nhé=Vua dep lai vua quy phai', '52', '1542891411', '1', '2'),
(126, '2192251167767848', 'note', 'lady45', '50', 'Đẹp mà chị  Em cũng thích mẫu này shop tư vân cho mình nhé=cho mình 1 váy đên địa chi thôn 4 xã đức hoà huyện cần guộc long an=đầm của shop đẹp quá =0983536271 mình cao 1m60-72kg mình muốn đăt váy shop tư ván cho minh nhé=đã mua trực tiếp tại shop hang rất đẹp mọi ngươi ạ=cô 70kg có size cô ko cháu,ship cho cô 1 váy=cho cô 1 váy size 57kg đên đia chi 483 tạ quang bưu , p2, quận tân bình,hcm=có size người 48kg ko shop,tư vấn mình nhé=váy của shop đẹp quá,mình đã mua 20 chiếc bên shop rồi,cứ ưng hoài shop ơi=cho mình 2 váy  2 mầu size 67kg , đia chi thôn 3 xã đồng phong, nho quan, ninh bình=cho mình 2 váy  2 mầu size 67kg , đia chi thôn 4 xã đồng bông, nho quan, ninh bình=váy đep quá shop ơi=0869121143 shop tu van cho minh nhe,minh 70kg=0328876345 cho minh váy này size 49kg thôn 5 xã tây giang tiền hai thái bình=chật tủ rồi shop ơi, ưng bụng hang shop quá,chúc shop ngày càng phát triển=mâu này mình mặc được ko shop mình 72kg=cho mình 2c váy size 70kg va 56kg đên đia chi 456 lê hữu trác , kp2 phường 3 quận tân bình,hcm=cho mình váy size 70kg đên địa chi 456 quan hoa, cầu giấy, ha nôi=cho minh váy nay shop nhé,ll mình đăt hang shop nha=đia chi shop ở đâu ạ để mình qua mua trực tiếp nhé=0965103060 váy của shop đẹp quá,tư vân cho mình nha mình 1m67-58kg=cho minh mầu này size 67kg nhé=01675587309 shop ơi ngươi 75kg co size ko shop=1m70-67kg mặc có được ko shop ơi=01675587309 size 56kg đia chỉ cũ shop nhé,gưi sớm mình đi tiệc shop nha=cô 1 váy đên địa chi 473 xã đàn,ha nội nhé=01675587309 quá trời váy đẹp shop ơi=mình ize 67kg địa chi shop có rồi gửi mình nhé=0981632221 70kg eo 90cm măc được ko shop,tư vấn cho mình nhé=0985400762 shop ơi mình mua cho mẹ 56kg mặc size nao ạ=0965904868 cho mình mẫu này nhé địa chi 234 lê thánh tong,tp thái bình=chị mua của shop 1c rồi mặc đẹp lắm =mẫu nhà e duyên quá ,nhìn là muốn mua hàng ngay=tư vấn cho chị mẫu này nhé 1m6 60kg 0962726292=e gọi tư vấn thêm cho chị nhé ,chị muốn mua mẫu này 0983536271=chốt cho chị 2 cái mỗi cái 1 màu size cho 70kg e nhé 0965904868 địa chỉ 488/3/27 cách mạng tháng 8 =cho chị màu này nhé size cho 50kg còn không e 0989132325=Dep quá em ơi bao nhiêu môt bô đấy em nhòn thich quá rồi =Co zise 50kg cho nguoi 50 tuoi ko chi= Ngườicao 160 cm nặng 65 kg măc sô mấy ( 0962726292)=Chi cao 1m6 66ki co vua ko shop..giá bao nhiêu 1bo vay 0328876345= Chất vải co giãn ko em ? Dáng váy này tuyệt quá Cho chị 2XL ngay e ơi ko hết size, địa chỉ ib nhé 0869121143=817 Hàn thuyên . Hải châu. Đà nẵng 01 váy màu ánh vàng. 4xl.0375587309= cho cô mau tim năng 62.cao 1.67.gia bn vay sop 0976389282=cho chi màu vàng size 3xl nhé ,0965904868=Hello! 0962726292=Co zise 50kg cho nguoi 50 tuoi ko chi=Co hai mau nay thoi a ma chat lieu gi=Nền đen hoa trăng66kg cô mặc vừa ko= Cô nặng 66kg có vừa cái áo nhưng nền đen ko= 1m54 56kg size nao 0986400762 cô xuân =Bao mhiu bộ váy vậy em', '53', '1542891551', '1', '2'),
(127, '2192251167767848', 'note', 'lady45', '50', 'Chị cao 154 nặng 58k vậy chị mặc xai gì chị thích mau tím=cho chị một cái theo số cân chị gửi số điện thoai lai đấy mầu tím nhé=vToi cao mot met sau can nang 49 can co Mac duoc Ko a=Đẹp quá.màu đen.số l.0869121143=có mẫu đầm xxl mầu tím huế cho mình 1cái= Cô lớn tuổi rồi có màu tím Huế. Mà ít Hoa Co không con=Cao 155 nặng 65kg cách tân von 563=Màu xanh thang 52 tuổi mặc được không=giá bao nhiêu vậy e = Đầm này béo bụng có mặc được ko em=mua hàng của shop nhiều rồi ,tối nào cũng phải theo dõi để ngắm váy ,hết tiền với shop rồi shop ơi=mẫu này co giãn không e =mặc váy của shop đến cơ quan ai cũng khen ,nhân viên tư vấn nhiệt tình ,cảm ơn shop rất nhiều =e gọi tư vấn cho chị nhé 0378866327=mua 3c có mất ship không  shop =e ơi tư vấn cho chị 1m55 65kg và 1m6 50kg mặc size gì e=bán.cho.chị.1 cái.như.mẫu .mặc.màu.ít .hoa.e.nhé=ship cà mau mấy ngày có hàng shop ơi =hcm ship mấy ngày đến shop ơi =chi đã đến chi nhánh hcm ,mẫu mã nhiều ,đa dạng ,đẹp lắm shop ạ=cửa hàng ở đâu vậy shop =hôm qua chị đặt e gửi chưa ,nếu chưa gửi thì gửi luôn cái này cho chị=Cô cao 1m61 nặng 51kg nhưng người ốm mặc size nào shop gọi điện tư vấn cô nhé.0378866327=Xin chào shop. Đợt này shop về nhiều mẫu mới quá tốn tiền với shop quá.chị lấy mẫu này nhé 0962726292=Chi mâu đỏ cao1m65 năng60 kg măc số  nào vừa 0983536271=Chi thich cai đầm ở giữa cho chi nha dt 0869121143=Mẫu tóc xoăn đang mặc cân nặng bốn chín cân cao một mét năm tám mặc size nào vậy shop 01628876345=81 Hàn thuyên . Hải châu. Đà nẵng 01 váy màu ánh vàng. 4xl. 0965103060= Ngắm  mê quá shop ơi Cho chị xl, 0869121143=Chị vừa nhận hàng rồi mặc ai cũng khen, cảm ơn shop. Chị đặt cái này nữa nhé 0981632221=Bác lấy mẫu này cháu nhé. Gọi điện tư vấn cho bác 0985400762=Mẫu bạn tóc xoăn mặc bao tiền vậy shop 0976389282=chị lấy màu xanh than 1.59 nặng 60kg SĐT 01675587309=Chiếc đầm cách tân màu tím cỡ xxxl vấn dùm chị nhé sđd 0985400762=chiều cao 1m55 nặng 53kg.Đc thôn 7  TT an Lão, huyện An Lão, tỉnh Bình Định gui cho tôi theo đc này nhe=gửi về địa chỉ cũ cho chị đầm bạn mẫu tóc xoăn mặc nha.0989132325=2 bạn mẫu này mặc xinh quá . mẫu bạn tóc thẳng bao tiền vậy e.=đầm chất gì đấy e? tư vấn cho chị nha 0989132325=75kg mặc vừa không e. tư vấn chị 0983536271=mẫu này có size 2XL không em.0965103060=e lấy mẫu này shop gọi chốt đơn gửi gấp ngày mai cho e nhé. 0869121143=mẫu này có mấy màu e= Dep quá em ơi bao nhiêu môt bô đấy em nhìn thich quá = Dương thị xuan. 0983536271 gọi điện tư vấn cho chị nha=Vải có co giãn kg em có sai nào cân nặng 62cao1m58kg. Bụng cô hơi to mặc có được k=Cô lớn tuổi rồi mặc mẫu được không con tư vấn cho cô 01678866327=bạn mẫu cao 1m bao nhieu đấy em chị 1m5 mặc dài quá không= Đã chia sẻ, shop có ưu đãi cho chị đấy nha. Cho chị mẫu này địa chỉ cũ nhé=lấy chị 2 mẫu đấy shop nha. 0985400762=chị mập mặc chất voan được không shop =mẫu này chị mua trực tiếp ở Nguyễn Khang rồi. gửi them chị 1c như thế cho bạn chị nha.=shop thấy chị không?chị chia sẻ nhiều cho shop rồi đấy nha=Em ơi, 70 cân mặc size nào thế? Gọi cho cô.01678866327.=Chị lấy màu này. Gửi về thôn tân luận xã phi mô huyện lạng giang. Sđt.0962726292.=có sai 4xl không em ? Chị 76 cân. 0983536271.=cao 1m55 nang 60 dt 0869121143.=01628876345. băp tay chi to ko biêt có vừa ko?=Chị 63k cao 160 vậy mặc zai gì vậy shop ? Có ship ko ?0965103060.=Chi vương nảng63 ky cao55 diễn thoai 01675587309maus hoa dỏ.=duong thi xuan 1m54 56kg size nao 0981632221.=Pham yen 0985400762.= nềnđen hoa hồng trắng xanh minh có chiều cai 1m55 năng 52 đến 53 kg mạc có vưa ko bạn? 0965904868.=Gọi ngay cho tôi mua. 0976389282.=Chi lay cai nay.cao 1m55.60 kg. Dien thoai. 0989132325.=Mai ship cho chi den o cho dua.sđt 0966680607=Co hang san khong. Cho chị mot bo.0966680607=Đẹp quá mấy cô con gái của tôi ơi. 0981632221.=Gia bao nhiu em ơi? 0985400762.= Giá bao nhiêu 1chiếc vậy tôi cao 1m58 nặng 53kg ,mua cỡ nào mặc vừa vậy ,tôi thích màu đỏ như xem trong mẫu vậy. 0965 103 060.= Cao1m56, ngưc 98,bụng 88,mông97 . Đ t:0976 389 282 .xin từ vấn=Cao 1/53m nặng 62kg( tuổi 60) có xai ý khong? 2XL. Goi cho chi. 0966680607.=toi muon mua 2 chiec cu the la chieu cao 1 58 nang 65 kg bung hoi to so dt 0985400762 dia chi na hang tuyen puang co dien thoai tu van trao doi them nhe.=Có sezj cho người năng70kg cao 1m65 ko. Sđt 0965103060.=Đẹp và de thuong lam. Ship da nang bn em?. 0966680607.=Bộ thứ hai bao nhiêu tiền một bộ vậy. 0981632221.=Có mau khac khong? Chi muon mua 3 mau. 01678866327.=Chi hay mua hang cua lady shop.rat ung y. Cho chi mau o giua. 0985400762.=3 ngay co hang khpng em. Cho chị mot dam . 01675587309.=0983536271. Gop don cho chi. =Bao nhieu tien mau xanh  . gui dc cu. 0976389282.=Lady rat uy tin. Lan nay chi mua cho ban. 0869121143.=Mẫu này.Địa chỉ cũ. Không can goi.0981.632.325.', '51', '1542892258', '1', '2'),
(128, '2192251167767848', 'note', 'lady45', '50', '0962726292 váy của shop đẹp quá ,shop tư vấn thêm cho mình mua nhé=Vua dep lai vua quy phai=Đẹp mà chị  Em cũng thích mẫu này shop tư vân cho mình nhé=cho mình 1 váy đên địa chi thôn 4 xã đức hoà huyện cần guộc long an=đầm của shop đẹp quá =0983536271 mình cao 1m60-72kg mình muốn đăt váy shop tư ván cho minh nhé=đã mua trực tiếp tại shop hang rất đẹp mọi ngươi ạ=cô 70kg có size cô ko cháu,ship cho cô 1 váy=cho cô 1 váy size 57kg đên đia chi 483 tạ quang bưu , p2, quận tân bình,hcm=có size người 48kg ko shop,tư vấn mình nhé=váy của shop đẹp quá,mình đã mua 20 chiếc bên shop rồi,cứ ưng hoài shop ơi=cho mình 2 váy  2 mầu size 67kg , đia chi thôn 3 xã đồng phong, nho quan, ninh bình=cho mình 2 váy  2 mầu size 67kg , đia chi thôn 4 xã đồng bông, nho quan, ninh bình=váy đep quá shop ơi=0869121143 shop tu van cho minh nhe,minh 70kg=0328876345 cho minh váy này size 49kg thôn 5 xã tây giang tiền hai thái bình=chật tủ rồi shop ơi, ưng bụng hang shop quá,chúc shop ngày càng phát triển=mâu này mình mặc được ko shop mình 72kg=cho mình 2c váy size 70kg va 56kg đên đia chi 456 lê hữu trác , kp2 phường 3 quận tân bình,hcm=cho mình váy size 70kg đên địa chi 456 quan hoa, cầu giấy, ha nôi=cho minh váy nay shop nhé,ll mình đăt hang shop nha=đia chi shop ở đâu ạ để mình qua mua trực tiếp nhé=0965103060 váy của shop đẹp quá,tư vân cho mình nha mình 1m67-58kg=cho minh mầu này size 67kg nhé=01675587309 shop ơi ngươi 75kg co size ko shop=1m70-67kg mặc có được ko shop ơi=01675587309 size 56kg đia chỉ cũ shop nhé,gưi sớm mình đi tiệc shop nha=cô 1 váy đên địa chi 473 xã đàn,ha nội nhé=01675587309 quá trời váy đẹp shop ơi=mình ize 67kg địa chi shop có rồi gửi mình nhé=0981632221 70kg eo 90cm măc được ko shop,tư vấn cho mình nhé=0985400762 shop ơi mình mua cho mẹ 56kg mặc size nao ạ=0965904868 cho mình mẫu này nhé địa chi 234 lê thánh tong,tp thái bình=chị mua của shop 1c rồi mặc đẹp lắm =mẫu nhà e duyên quá ,nhìn là muốn mua hàng ngay=tư vấn cho chị mẫu này nhé 1m6 60kg 0962726292=e gọi tư vấn thêm cho chị nhé ,chị muốn mua mẫu này 0983536271=chốt cho chị 2 cái mỗi cái 1 màu size cho 70kg e nhé 0965904868 địa chỉ 488/3/27 cách mạng tháng 8 =cho chị màu này nhé size cho 50kg còn không e 0989132325=Dep quá em ơi bao nhiêu môt bô đấy em nhòn thich quá rồi =Co zise 50kg cho nguoi 50 tuoi ko chi= Ngườicao 160 cm nặng 65 kg măc sô mấy ( 0962726292)=Chi cao 1m6 66ki co vua ko shop..giá bao nhiêu 1bo vay 0328876345= Chất vải co giãn ko em ? Dáng váy này tuyệt quá Cho chị 2XL ngay e ơi ko hết size, địa chỉ ib nhé 0869121143=817 Hàn thuyên . Hải châu. Đà nẵng 01 váy màu ánh vàng. 4xl.0375587309= cho cô mau tim năng 62.cao 1.67.gia bn vay sop 0976389282=cho chi màu vàng size 3xl nhé ,0965904868=Hello! 0962726292=Co zise 50kg cho nguoi 50 tuoi ko chi=Co hai mau nay thoi a ma chat lieu gi=Nền đen hoa trăng66kg cô mặc vừa ko= Cô nặng 66kg có vừa cái áo nhưng nền đen ko= 1m54 56kg size nao 0986400762 cô xuân =Bao mhiu bộ váy vậy em=shop này bán hàng đẹp ,chị mua mấy đầm ai cũng khen = Vải có co giãn kg em có sai nào cân nặng 62cao1m58kg. Bụng cô hơi to mặc có được kg=Chị cao 154 nặng 58k vậy chị mặc xai gì chị thích mau tím', '51', '1542893091', '2', '2'),
(129, '291196078189015', 'note', 'lady45', '50', '0962726292 váy của shop đẹp quá ,shop tư vấn thêm cho mình mua nhé=Vua dep lai vua quy phai=Đẹp mà chị  Em cũng thích mẫu này shop tư vân cho mình nhé=cho mình 1 váy đên địa chi thôn 4 xã đức hoà huyện cần guộc long an=đầm của shop đẹp quá =0983536271 mình cao 1m60-72kg mình muốn đăt váy shop tư ván cho minh nhé=đã mua trực tiếp tại shop hang rất đẹp mọi ngươi ạ=cô 70kg có size cô ko cháu,ship cho cô 1 váy=cho cô 1 váy size 57kg đên đia chi 483 tạ quang bưu , p2, quận tân bình,hcm=có size người 48kg ko shop,tư vấn mình nhé=váy của shop đẹp quá,mình đã mua 20 chiếc bên shop rồi,cứ ưng hoài shop ơi=cho mình 2 váy  2 mầu size 67kg , đia chi thôn 3 xã đồng phong, nho quan, ninh bình=cho mình 2 váy  2 mầu size 67kg , đia chi thôn 4 xã đồng bông, nho quan, ninh bình=váy đep quá shop ơi=0869121143 shop tu van cho minh nhe,minh 70kg=0328876345 cho minh váy này size 49kg thôn 5 xã tây giang tiền hai thái bình=chật tủ rồi shop ơi, ưng bụng hang shop quá,chúc shop ngày càng phát triển=mâu này mình mặc được ko shop mình 72kg=cho mình 2c váy size 70kg va 56kg đên đia chi 456 lê hữu trác , kp2 phường 3 quận tân bình,hcm=cho mình váy size 70kg đên địa chi 456 quan hoa, cầu giấy, ha nôi=cho minh váy nay shop nhé,ll mình đăt hang shop nha=đia chi shop ở đâu ạ để mình qua mua trực tiếp nhé=0965103060 váy của shop đẹp quá,tư vân cho mình nha mình 1m67-58kg=cho minh mầu này size 67kg nhé=01675587309 shop ơi ngươi 75kg co size ko shop=1m70-67kg mặc có được ko shop ơi=01675587309 size 56kg đia chỉ cũ shop nhé,gưi sớm mình đi tiệc shop nha=cô 1 váy đên địa chi 473 xã đàn,ha nội nhé=01675587309 quá trời váy đẹp shop ơi=mình ize 67kg địa chi shop có rồi gửi mình nhé=0981632221 70kg eo 90cm măc được ko shop,tư vấn cho mình nhé=0985400762 shop ơi mình mua cho mẹ 56kg mặc size nao ạ=0965904868 cho mình mẫu này nhé địa chi 234 lê thánh tong,tp thái bình=chị mua của shop 1c rồi mặc đẹp lắm =mẫu nhà e duyên quá ,nhìn là muốn mua hàng ngay=tư vấn cho chị mẫu này nhé 1m6 60kg 0962726292=e gọi tư vấn thêm cho chị nhé ,chị muốn mua mẫu này 0983536271=chốt cho chị 2 cái mỗi cái 1 màu size cho 70kg e nhé 0965904868 địa chỉ 488/3/27 cách mạng tháng 8 =cho chị màu này nhé size cho 50kg còn không e 0989132325=Dep quá em ơi bao nhiêu môt bô đấy em nhòn thich quá rồi =Co zise 50kg cho nguoi 50 tuoi ko chi= Ngườicao 160 cm nặng 65 kg măc sô mấy ( 0962726292)=Chi cao 1m6 66ki co vua ko shop..giá bao nhiêu 1bo vay 0328876345= Chất vải co giãn ko em ? Dáng váy này tuyệt quá Cho chị 2XL ngay e ơi ko hết size, địa chỉ ib nhé 0869121143=817 Hàn thuyên . Hải châu. Đà nẵng 01 váy màu ánh vàng. 4xl.0375587309= cho cô mau tim năng 62.cao 1.67.gia bn vay sop 0976389282=cho chi màu vàng size 3xl nhé ,0965904868=Hello! 0962726292=Co zise 50kg cho nguoi 50 tuoi ko chi=Co hai mau nay thoi a ma chat lieu gi=Nền đen hoa trăng66kg cô mặc vừa ko= Cô nặng 66kg có vừa cái áo nhưng nền đen ko= 1m54 56kg size nao 0986400762 cô xuân =Bao mhiu bộ váy vậy em=shop này bán hàng đẹp ,chị mua mấy đầm ai cũng khen = Vải có co giãn kg em có sai nào cân nặng 62cao1m58kg. Bụng cô hơi to mặc có được kg=Chị cao 154 nặng 58k vậy chị mặc xai gì chị thích mau tím', '53', '1542894447', '2', '2'),
(130, '354489802024208', 'note', 'lady45', '50', 'Thuôc cho Nam bán sao chi oi, có khó uong không=Chúc mọi nguoi cuối tuan vui ve hạnh phúc=Chào chị, uong bao lau thi co kết qua, và giá co mac ko=Em muon đăạt hàng chi nhé, inbox giúp em=Em không dều kinh và muốn mau có thai thì làm thế nào ah?=Em bị đa nang buồng trứng , kinh nguyệt không đều đây=Chào chị, cuoi tuan vui vè, mai chi gui cho em thuôc ca 2 vo chong chi nha=Thuôc dieu kinh cho nữ ban sao vậy chị=Kinh nguyệt khong đều và đau bung kinh, e cung cham co thai nua, chi tư vấn cho em =Uống bao lau thì có kết quả, em có thể sữ dụng kèm với các loại thuôc khác không?=Thuôc cho nam có kiêng gì không chị=Thuôc chua đau bụng kinh rất tôt, em thay hieu qua lam=Thuôc bán sao vây chi oi, truong hop nao thi nen dùng thuốc=Chị cho em hoi, thuôc cho nữ có kieng  gì khong? Ngày có kinh có uong khong chi=Chao moi nguoi, chuc moi nguioi cuoi tuan vui ve hanh phuc=Đa nang buong trung a, va kinh khong deu, em phai lam the nao vay nha thuôc=Có phải nhà thuốc gia truyên Lê Gia không? Nhà thuốc o đâu vậy? =Chào nhà thuôc, thuôc co khó uong khong ah> và lieu luong nhu the nao?=Chào chi, mai gui thuôc cho em nhé, van đia chi cụ nha=E muon mua thuôc thì làm thế nào?=Xin cho biết, em bi kinh nguyệt khong deu, chong em tinh trùng bình thuong thi nen uong thuôc cả 2 vo chong hay chi minh em?=Chào nha thuôc, em  muốn làm công tác viên duoc khong, tai em thay thuốc mình hiều qua nen muon gioi thiệu cho nhieu nguoi,.=Em muon đật thuoc, nhà thuốc inbox cho em nhé=Sau khi sinh  bao lau thi co kinh lau vậy chị? Kinh nguyệt em khong đều ah=Có nhiều nguoi uống thuốc có thai không chị?=Xin chào chị, em muôn hoi mua thuôc cho cả 2 vợ chồng, giá thế nào va cách su dung the nao?=Chao chi, nhà thuôc minh tư vấn đến mấy gio thì nghĩ=Em bị kinh nguyệt không đều, trứng kém, và chậm có thai nhà thuốc ơi=Chào chị, e muon mua dùm nguoi nhà o nuoc ngoai thi cach thức mua ra sao?=O sai gon bao lau thi co vay chi, em chuyen khoan trc co duoc mien ship khong?=Chào chi, e muon mua thuôc cho chồng em  c ah=e đã từng xảy thay 1 lần đến giờ vẫn chưa có thai nhà thuốc tư vấn giúp e với=em  sinh cách day 12 nam roi.Bay gio muon sinh thêm em be,nho chi  tu van(Sđt 0973487268). =Chào moi nguoi, em xin hỏi thuôc uong như the nao đề hieu qua nhất, uong trong bao lau=Mình muốn nhanh co thai thì lam the nao ah? Kinh nguyệt minh van deu=Chồng em tinh trung yêu và em kinh nguyêt khong đều,=Thuôc cho Nam bán sao chi oi, có khó uong không=Chúc mọi nguoi cuối tuan vui ve hạnh phúc=Chào chị, uong bao lau thi co kết qua, và giá co mac ko=Em muon đăạt hàng chi nhé, inbox giúp em=Em không dều kinh và muốn mau có thai thì làm thế nào ah?=Em bị đa nang buồng trứng , kinh nguyệt không đều đây=Chào chị, cuoi tuan vui vè, mai chi gui cho em thuôc ca 2 vo chong chi nha=Thuôc dieu kinh cho nữ ban sao vậy chị=Kinh nguyệt khong đều và đau bung kinh, e cung cham co thai nua, chi tư vấn cho em =Uống bao lau thì có kết quả, em có thể sữ dụng kèm với các loại thuôc khác không?=Thuôc cho nam có kiêng gì không chị=Thuôc chua đau bụng kinh rất tôt, em thay hieu qua lam=Thuôc bán sao vây chi oi, truong hop nao thi nen dùng thuốc=Chị cho em hoi, thuôc cho nữ có kieng  gì khong? Ngày có kinh có uong khong chi=Chao moi nguoi, chuc moi nguioi cuoi tuan vui ve hanh phuc=Đa nang buong trung a, va kinh khong deu, em phai lam the nao vay nha thuôc=Có phải nhà thuốc gia truyên Lê Gia không? Nhà thuốc o đâu vậy? =Chào nhà thuôc, thuôc co khó uong khong ah> và lieu luong nhu the nao?=Chào chi, mai gui thuôc cho em nhé, van đia chi cụ nha=E muon mua thuôc thì làm thế nào?=Xin cho biết, em bi kinh nguyệt khong deu, chong em tinh trùng bình thuong thi nen uong thuôc cả 2 vo chong hay chi minh em?=Chào nha thuôc, em  muốn làm công tác viên duoc khong, tai em thay thuốc mình hiều qua nen muon gioi thiệu cho nhieu nguoi,.=Em muon đật thuoc, nhà thuốc inbox cho em nhé=Sau khi sinh  bao lau thi co kinh lau vậy chị? Kinh nguyệt em khong đều ah=Có nhiều nguoi uống thuốc có thai không chị?=Xin chào chị, em muôn hoi mua thuôc cho cả 2 vợ chồng, giá thế nào va cách su dung the nao?=Chao chi, nhà thuôc minh tư vấn đến mấy gio thì nghĩ=Em bị kinh nguyệt không đều, trứng kém, và chậm có thai nhà thuốc ơi=Chào chị, e muon mua dùm nguoi nhà o nuoc ngoai thi cach thức mua ra sao?=O sai gon bao lau thi co vay chi, em chuyen khoan trc co duoc mien ship khong?=Chào chi, e muon mua thuôc cho chồng em  c ah=e đã từng xảy thay 1 lần đến giờ vẫn chưa có thai nhà thuốc tư vấn giúp e với=em  sinh cách day 12 nam roi.Bay gio muon sinh thêm em be,nho chi  tu van(Sđt 0973487268). =Chào moi nguoi, em xin hỏi thuôc uong như the nao đề hieu qua nhất, uong trong bao lau=Mình muốn nhanh co thai thì lam the nao ah? Kinh nguyệt minh van deu=Chồng em tinh trung yêu và em kinh nguyêt khong đều,=Thuôc cho Nam bán sao chi oi, có khó uong không=Chúc mọi nguoi cuối tuan vui ve hạnh phúc=Chào chị, uong bao lau thi co kết qua, và giá co mac ko=Em muon đăạt hàng chi nhé, inbox giúp em=Em không dều kinh và muốn mau có thai thì làm thế nào ah?=Em bị đa nang buồng trứng , kinh nguyệt không đều đây=Chào chị, cuoi tuan vui vè, mai chi gui cho em thuôc ca 2 vo chong chi nha=Thuôc dieu kinh cho nữ ban sao vậy chị=Kinh nguyệt khong đều và đau bung kinh, e cung cham co thai nua, chi tư vấn cho em =Uống bao lau thì có kết quả, em có thể sữ dụng kèm với các loại thuôc khác không?=Thuôc cho nam có kiêng gì không chị=Thuôc chua đau bụng kinh rất tôt, em thay hieu qua lam=Thuôc bán sao vây chi oi, truong hop nao thi nen dùng thuốc=Chị cho em hoi, thuôc cho nữ có kieng  gì khong? Ngày có kinh có uong khong chi=Chao moi nguoi, chuc moi nguioi cuoi tuan vui ve hanh phuc=Đa nang buong trung a, va kinh khong deu, em phai lam the nao vay nha thuôc=Có phải nhà thuốc gia truyên Lê Gia không? Nhà thuốc o đâu vậy? =Chào nhà thuôc, thuôc co khó uong khong ah> và lieu luong nhu the nao?=Chào chi, mai gui thuôc cho em nhé, van đia chi cụ nha=E muon mua thuôc thì làm thế nào?=Xin cho biết, em bi kinh nguyệt khong deu, chong em tinh trùng bình thuong thi nen uong thuôc cả 2 vo chong hay chi minh em?=Chào nha thuôc, em  muốn làm công tác viên duoc khong, tai em thay thuốc mình hiều qua nen muon gioi thiệu cho nhieu nguoi,.=Em muon đật thuoc, nhà thuốc inbox cho em nhé=Sau khi sinh  bao lau thi co kinh lau vậy chị? Kinh nguyệt em khong đều ah=Có nhiều nguoi uống thuốc có thai không chị?=Xin chào chị, em muôn hoi mua thuôc cho cả 2 vợ chồng, giá thế nào va cách su dung the nao?=Chao chi, nhà thuôc minh tư vấn đến mấy gio thì nghĩ=Em bị kinh nguyệt không đều, trứng kém, và chậm có thai nhà thuốc ơi=Chào chị, e muon mua dùm nguoi nhà o nuoc ngoai thi cach thức mua ra sao?=O sai gon bao lau thi co vay chi, em chuyen khoan trc co duoc mien ship khong?=Chào chi, e muon mua thuôc cho chồng em  c ah=e đã từng xảy thay 1 lần đến giờ vẫn chưa có thai nhà thuốc tư vấn giúp e với=em  sinh cách day 12 nam roi.Bay gio muon sinh thêm em be,nho chi  tu van(Sđt 0973487268). =Chào moi nguoi, em xin hỏi thuôc uong như the nao đề hieu qua nhất, uong trong bao lau=Mình muốn nhanh co thai thì lam the nao ah? Kinh nguyệt minh van deu=Chồng em tinh trung yêu và em kinh nguyêt khong đều,=Thuôc cho Nam bán sao chi oi, có khó uong không=Chúc mọi nguoi cuối tuan vui ve hạnh phúc=Chào chị, uong bao lau thi co kết qua, và giá co mac ko=Em muon đăạt hàng chi nhé, inbox giúp em=Em không dều kinh và muốn mau có thai thì làm thế nào ah?=Em bị đa nang buồng trứng , kinh nguyệt không đều đây=Chào chị, cuoi tuan vui vè, mai chi gui cho em thuôc ca 2 vo chong chi nha=Thuôc dieu kinh cho nữ ban sao vậy chị=Kinh nguyệt khong đều và đau bung kinh, e cung cham co thai nua, chi tư vấn cho em =Uống bao lau thì có kết quả, em có thể sữ dụng kèm với các loại thuôc khác không?=Thuôc cho nam có kiêng gì không chị=Thuôc chua đau bụng kinh rất tôt, em thay hieu qua lam=Thuôc bán sao vây chi oi, truong hop nao thi nen dùng thuốc=Chị cho em hoi, thuôc cho nữ có kieng  gì khong? Ngày có kinh có uong khong chi=Chao moi nguoi, chuc moi nguioi cuoi tuan vui ve hanh phuc=Đa nang buong trung a, va kinh khong deu, em phai lam the nao vay nha thuôc=Có phải nhà thuốc gia truyên Lê Gia không? Nhà thuốc o đâu vậy? =Chào nhà thuôc, thuôc co khó uong khong ah> và lieu luong nhu the nao?=Chào chi, mai gui thuôc cho em nhé, van đia chi cụ nha=E muon mua thuôc thì làm thế nào?=Xin cho biết, em bi kinh nguyệt khong deu, chong em tinh trùng bình thuong thi nen uong thuôc cả 2 vo chong hay chi minh em?=Chào nha thuôc, em  muốn làm công tác viên duoc khong, tai em thay thuốc mình hiều qua nen muon gioi thiệu cho nhieu nguoi,.=Em muon đật thuoc, nhà thuốc inbox cho em nhé=Sau khi sinh  bao lau thi co kinh lau vậy chị? Kinh nguyệt em khong đều ah=Có nhiều nguoi uống thuốc có thai không chị?=Xin chào chị, em muôn hoi mua thuôc cho cả 2 vợ chồng, giá thế nào va cách su dung the nao?=Chao chi, nhà thuôc minh tư vấn đến mấy gio thì nghĩ=Em bị kinh nguyệt không đều, trứng kém, và chậm có thai nhà thuốc ơi=Chào chị, e muon mua dùm nguoi nhà o nuoc ngoai thi cach thức mua ra sao?=O sai gon bao lau thi co vay chi, em chuyen khoan trc co duoc mien ship khong?=Chào chi, e muon mua thuôc cho chồng em  c ah=e đã từng xảy thay 1 lần đến giờ vẫn chưa có thai nhà thuốc tư vấn giúp e với=em  sinh cách day 12 nam roi.Bay gio muon sinh thêm em be,nho chi  tu van(Sđt 0973487268). =Chào moi nguoi, em xin hỏi thuôc uong như the nao đề hieu qua nhất, uong trong bao lau=Mình muốn nhanh co thai thì lam the nao ah? Kinh nguyệt minh van deu=Chồng em tinh trung yêu và em kinh nguyêt khong đều,=Thuôc cho Nam bán sao chi oi, có khó uong không=Chúc mọi nguoi cuối tuan vui ve hạnh phúc=Chào chị, uong bao lau thi co kết qua, và giá co mac ko=Em muon đăạt hàng chi nhé, inbox giúp em=Em không dều kinh và muốn mau có thai thì làm thế nào ah?=Em bị đa nang buồng trứng , kinh nguyệt không đều đây=Chào chị, cuoi tuan vui vè, mai chi gui cho em thuôc ca 2 vo chong chi nha=Thuôc dieu kinh cho nữ ban sao vậy chị=Kinh nguyệt khong đều và đau bung kinh, e cung cham co thai nua, chi tư vấn cho em =Uống bao lau thì có kết quả, em có thể sữ dụng kèm với các loại thuôc khác không?=Thuôc cho nam có kiêng gì không chị=Thuôc chua đau bụng kinh rất tôt, em thay hieu qua lam=Thuôc bán sao vây chi oi, truong hop nao thi nen dùng thuốc=Chị cho em hoi, thuôc cho nữ có kieng  gì khong? Ngày có kinh có uong khong chi=Chao moi nguoi, chuc moi nguioi cuoi tuan vui ve hanh phuc=Đa nang buong trung a, va kinh khong deu, em phai lam the nao vay nha thuôc=Có phải nhà thuốc gia truyên Lê Gia không? Nhà thuốc o đâu vậy? =Chào nhà thuôc, thuôc co khó uong khong ah> và lieu luong nhu the nao?=Chào chi, mai gui thuôc cho em nhé, van đia chi cụ nha=E muon mua thuôc thì làm thế nào?=Xin cho biết, em bi kinh nguyệt khong deu, chong em tinh trùng bình thuong thi nen uong thuôc cả 2 vo chong hay chi minh em?=Chào nha thuôc, em  muốn làm công tác viên duoc khong, tai em thay thuốc mình hiều qua nen muon gioi thiệu cho nhieu nguoi,.=Em muon đật thuoc, nhà thuốc inbox cho em nhé=Sau khi sinh  bao lau thi co kinh lau vậy chị? Kinh nguyệt em khong đều ah=Có nhiều nguoi uống thuốc có thai không chị?=Xin chào chị, em muôn hoi mua thuôc cho cả 2 vợ chồng, giá thế nào va cách su dung the nao?=Chao chi, nhà thuôc minh tư vấn đến mấy gio thì nghĩ=Em bị kinh nguyệt không đều, trứng kém, và chậm có thai nhà thuốc ơi=Chào chị, e muon mua dùm nguoi nhà o nuoc ngoai thi cach thức mua ra sao?=O sai gon bao lau thi co vay chi, em chuyen khoan trc co duoc mien ship khong?=Chào chi, e muon mua thuôc cho chồng em  c ah=e đã từng xảy thay 1 lần đến giờ vẫn chưa có thai nhà thuốc tư vấn giúp e với=em  sinh cách day 12 nam roi.Bay gio muon sinh thêm em be,nho chi  tu van(Sđt 0973487268). =Chào moi nguoi, em xin hỏi thuôc uong như the nao đề hieu qua nhất, uong trong bao lau=Mình muốn nhanh co thai thì lam the nao ah? Kinh nguyệt minh van deu=Chồng em tinh trung yêu và em kinh nguyêt khong đều,=Thuôc cho Nam bán sao chi oi, có khó uong không=Chúc mọi nguoi cuối tuan vui ve hạnh phúc=Chào chị, uong bao lau thi co kết qua, và giá co mac ko=Em muon đăạt hàng chi nhé, inbox giúp em=Em không dều kinh và muốn mau có thai thì làm thế nào ah?=Em bị đa nang buồng trứng , kinh nguyệt không đều đây=Chào chị, cuoi tuan vui vè, mai chi gui cho em thuôc ca 2 vo chong chi nha=Thuôc dieu kinh cho nữ ban sao vậy chị=Kinh nguyệt khong đều và đau bung kinh, e cung cham co thai nua, chi tư vấn cho em =Uống bao lau thì có kết quả, em có thể sữ dụng kèm với các loại thuôc khác không?=Thuôc cho nam có kiêng gì không chị=Thuôc chua đau bụng kinh rất tôt, em thay hieu qua lam=Thuôc bán sao vây chi oi, truong hop nao thi nen dùng thuốc=Chị cho em hoi, thuôc cho nữ có kieng  gì khong? Ngày có kinh có uong khong chi=Chao moi nguoi, chuc moi nguioi cuoi tuan vui ve hanh phuc=Đa nang buong trung a, va kinh khong deu, em phai lam the nao vay nha thuôc=Có phải nhà thuốc gia truyên Lê Gia không? Nhà thuốc o đâu vậy? =Chào nhà thuôc, thuôc co khó uong khong ah> và lieu luong nhu the nao?=Chào chi, mai gui thuôc cho em nhé, van đia chi cụ nha=E muon mua thuôc thì làm thế nào?=Xin cho biết, em bi kinh nguyệt khong deu, chong em tinh trùng bình thuong thi nen uong thuôc cả 2 vo chong hay chi minh em?=Chào nha thuôc, em  muốn làm công tác viên duoc khong, tai em thay thuốc mình hiều qua nen muon gioi thiệu cho nhieu nguoi,.=Em muon đật thuoc, nhà thuốc inbox cho em nhé=Sau khi sinh  bao lau thi co kinh lau vậy chị? Kinh nguyệt em khong đều ah=Có nhiều nguoi uống thuốc có thai không chị?=Xin chào chị, em muôn hoi mua thuôc cho cả 2 vợ chồng, giá thế nào va cách su dung the nao?=Chao chi, nhà thuôc minh tư vấn đến mấy gio thì nghĩ=Em bị kinh nguyệt không đều, trứng kém, và chậm có thai nhà thuốc ơi=Chào chị, e muon mua dùm nguoi nhà o nuoc ngoai thi cach thức mua ra sao?=O sai gon bao lau thi co vay chi, em chuyen khoan trc co duoc mien ship khong?=Chào chi, e muon mua thuôc cho chồng em  c ah=e đã từng xảy thay 1 lần đến giờ vẫn chưa có thai nhà thuốc tư vấn giúp e với=em  sinh cách day 12 nam roi.Bay gio muon sinh thêm em be,nho chi  tu van(Sđt 0973487268). =Chào moi nguoi, em xin hỏi thuôc uong như the nao đề hieu qua nhất, uong trong bao lau=Mình muốn nhanh co thai thì lam the nao ah? Kinh nguyệt minh van deu=Chồng em tinh trung yêu và em kinh nguyêt khong đều,', '54', '1543065396', '2', '2'),
(131, '1927532144009541', 'note', 'autolike', '10', 'Còn size 36 không shop?=ib=. =ib nhé=giá bn vậy shop=còn size 37 k shop ơiiii=Ib mình giá=size 36 còn màu này k shop=Ib=màu hồng này đẹp nè', '0', '1544238105', '1', '2'),
(132, '1150502545105958', 'note', 'autolike', '10', '.=.=.=.=.=.=.=.=.=.', '14', '1544544534', '1', '1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vip_cmt`
--

CREATE TABLE `vip_cmt` (
  `id` int(11) NOT NULL,
  `fbid` text COLLATE utf8_unicode_ci NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `name_buy` text COLLATE utf8_unicode_ci NOT NULL,
  `name_package` text COLLATE utf8_unicode_ci NOT NULL,
  `limit_time` text COLLATE utf8_unicode_ci NOT NULL,
  `time_buy` text COLLATE utf8_unicode_ci NOT NULL,
  `speed` text COLLATE utf8_unicode_ci NOT NULL,
  `action` text COLLATE utf8_unicode_ci NOT NULL,
  `cmt` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `vip_cmt`
--

INSERT INTO `vip_cmt` (`id`, `fbid`, `name`, `name_buy`, `name_package`, `limit_time`, `time_buy`, `speed`, `action`, `cmt`) VALUES
(5, 'zzz', '', '', '', '', '', '', '', ''),
(6, '100002304768629', 'trương thị thu hân', 'duongcongthuan', '10', '1', '1539594326', '3', 'checked', 'ib .\r\nủng hộ shop dài dài .rẻ đẹp quá c ơi .\r\nib mình .\r\nmang thủy hợp màu nào vậy c .\r\nđẹp quá c .\r\nĐep đó.\r\nđẹp quá . để em 1 chiếc nhé c .\r\nđẹp quá, bữa mô vô làm 1 bộ mới đc :)).\r\nShip C dây.\r\nVong nay ú thik:face_with_rolling_eyes::face_with_rolling_eyes::face_with_rolling_eyes:\r\nTóc nâu của chệ:blush::blush::blush:\r\nMua hoài mà có được tặng gì đâu.\r\ncái mặt dây chuyền này i:kiss::kiss:\r\nNhiu vậy a.\r\nCó tỳ hưu tóc nâu lên nhẫn như cậy ko e.\r\nCòn tóc đen ko em.\r\nInb chị hồ ly baby tóc vàng e ơi.\r\nChẹp chẹp.\r\nChị ơi loại này bán sao vậy.\r\nGửi e thêm ít mẫu với chị nhé.\r\nSao k check ib của e vậy.\r\nHôm trước chị nói ít ngày nữa có hàng đẹp. Có .chưa chị ơi gửi cho e hàng với nhé.\r\nlấy mình 10 vòng 10li nhé .\r\ncheck ib bn ới .\r\nib minh .\r\nĐep đó\r\nDự là lại tốn tiền.\r\nPhải canh mới được.\r\nXức xắc qá.\r\nđẹp chế like.\r\nĐẹp quá!\r\nbn e ơi.\r\nSàn này coi bộ dc à nha:relaxed::relaxed::relaxed::slightly_smiling_face::slightly_smiling_face::slightly_smiling_face:\r\nVong nay ú thik.\r\nMuốn mua vòng này thì x ạ chị.\r\nChị ơi check inbox hộ e với.\r\nC chờ mãi mà k thấy ib của shop.\r\nMãi mà chưa thấy shop chốt x.\r\nCheck ib mik b ơi.\r\nlấy em 5 vòng c iu nhé.\r\nib bn.\r\ncheck ib giúp mình . mình lấy 2 vòng .\r\nđẹp quá c ak.\r\nquá rẻ - e nhận đc hàng rồi  ,e đi kiểm định. đúng đá tự nhiên c ak . cảm ơn c nhiều . sẽ ủng. hộ c dài dài .\r\nib bn. \r\ncheck ib giúp e.\r\nib bn .\r\nib.\r\ngiá rẻ quá ak .\r\nhàng đẹp - chất lượng - cảm ơn shop .\r\nib mình bạn nhé !\r\ngạch .\r\nmình lấy cái đó nhé . tks \r\nib 0934578345.'),
(7, '100001481605593', 'hân trương', 'duongcongthuan', '5', '1', '1539872616', '2', 'checked', 'ib .\nủng hộ shop dài dài .rẻ đẹp quá c ơi .\nib mình .\nmang thủy hợp màu nào vậy c .\nđẹp quá c .\nib .\nĐep đó.\nđẹp quá . để em 1 chiếc nhé c .\nđẹp quá, bữa mô vô làm 1 bộ mới đc :)).\nShip C dây.\nVong nay ú thik:face_with_rolling_eyes::face_with_rolling_eyes::face_with_rolling_eyes:\nTóc nâu của chệ:blush::blush::blush:\nMua hoài mà có được tặng gì đâu.\ncái mặt dây chuyền này i:kiss::kiss:\nNhiu vậy a.\nCó tỳ hưu tóc nâu lên nhẫn như cậy ko e.\nCòn tóc đen ko em.\nInb chị hồ ly baby tóc vàng e ơi.\nChẹp chẹp.\nChị ơi loại này bán sao vậy.\nGửi e thêm ít mẫu với chị nhé.\nSao k check ib của e vậy.\nHôm trước chị nói ít ngày nữa có hàng đẹp. Có .chưa chị ơi gửi cho e hàng với nhé.\nlấy mình 10 vòng 10li nhé .\ncheck ib bn ới .\nib minh .\nđẹp quá c .\nib .\nĐep đó\nđẹp quá . để em 1 chiếc nhé c .\nDự là lại tốn tiền.\nPhải canh mới được.\nXức xắc qá ????????.\nđẹp chế like.\nĐẹp quá!\nbn e ơi.\nSàn này coi bộ dc à nha:relaxed::relaxed::relaxed::slightly_smiling_face::slightly_smiling_face::slightly_smiling_face:\nShip C dây.\nVong nay ú thik.\nMuốn mua vòng này thì x ạ chị.\nChị ơi check inbox hộ e với.\nC chờ mãi mà k thấy ib của shop.\nMãi mà chưa thấy shop chốt x.\nCheck ib mik b ơi.\nlấy em 5 vòng c iu nhé.\nib bn.\ncheck ib giúp mình . mình lấy 2 vòng .\nđẹp quá c ak.\nquá rẻ - e nhận đc hàng rồi  ,e đi kiểm định. đúng đá tự nhiên c ak . cảm ơn c nhiều . sẽ ủng. hộ c dài dài .\n\nib bn. \ncheck ib giúp e.\nib bn .\nib.\ngiá rẻ quá ak .\nhàng đẹp - chất lượng - cảm ơn shop .\nib mình bạn nhé !\ngạch .\nmình lấy cái đó nhé . tks \nib 0934578345.'),
(8, '100003572143848', 'Nông Tiểu Phương', 'hongdam307', '5', '1', '1540186582', '1', 'checked', ' Chị ơi ib em chế độ CTV\n Chị check inbox giúp em với\n Còn sale k bạn? Mình muốn mua một đôi khoảng 2 triệu\n Giày bao chất, người bán uy tín nhất vbb\n Có ship cod không ạ? Chị check ib giúp em\n Hàng chuẩn , giám giá khủng, bao check quá xịn\n Sang tuần làm đôi\n Hàng gì trên web cũng có hả bạn?\n Cộng tác viên phải làm những gì hả anh?\n Em ở xa có làm cộng tác viên được không ạ?\n Mua có phải chịu phí ship không bạn?\n Được đấy, ib cho đôi vừa tầm nào \n Ngày trước đã nhờ anh nhập hộ, hàng rất chuẩn , k một vết xước luôn :)))\n Hàng đã về tay, max đẹp max yêu luôn\n Xịn sò quá, tư vấn cho một đôi nào\n Có quần áo không bạn?\n Áo khoác nam có không ạ?\n Túi xách hay balo nike có không anh?\n Đã nhận hàng và đi thử, quá ưng chị ơi\n Check ib mình\n Share thì có được giảm giá không kaka\n Trung bình giảm bn % thế chị?\n So với mua ngoài thì rẻ hơn bao nhiêu ạ?\n Chị tư vấn cho e đôi nào giá tầm 1tr2 đổ lại với'),
(9, '100024656857702', 'Hoàng Sơn Ly', 'katephung', '5', '1', '1541151370', '1', 'checked', 'Giới thiệu em với, lần trước em đã bị hụt rồi :(((\nChị có bạn nào đang tìm team không, lập nhóm cho emm\nGiảm 50% cho học sinh học lại =)) Hay cm lại đi học lại đi nhỉ? Học 1 buổi không đã\nCông nhận là mấy thầy dạy kỹ với thiết thực, mà \"bạn học\" toàn cây đa cây đề, nhìn mà nể!!!\nÊ có cả vụ này hả? T cũng phải gt cho con em'),
(10, '100002304768629', 'truong  thi thu han', 'duongcongthuan', '10', '1', '1542948313', '0', 'checked', 'ib .																									\nủng hộ shop dài dài .rẻ đẹp quá c ơi .																									\nib mình .																									\nmang thủy hợp màu nào vậy c .																									\nđẹp quá c .																									\nib .																									\nĐep đó																									\nđẹp quá . để em 1 chiếc nhé c .																									\nđẹp quá, bữa mô vô làm 1 bộ mới đc :))																									\nShip C dây																									\nVong nay ú thik????????????																									\nTóc nâu của chệ????????????																									\nMua hoài mà có được tặng gì đâu																									\ncái mặt dây chuyền này i????????																									\nNhiu vậy a																									\nCó tỳ hưu tóc nâu lên nhẫn như cậy ko e																									\nCòn tóc đen ko em																									\nInb chị hồ ly baby tóc vàng e ơi.																									\nChẹp chẹp																									\nChị ơi loại này bán sao vậy																									\nGửi e thêm ít mẫu với chị nhé																									\nSao k check ib của e vậy																									\nHôm trước chị nói ít ngày nữa có hàng đẹp. Có chưa chị ơi gửi cho e hàng với nhé																									\nlấy mình 10 vòng 10li nhé .																									\ncheck ib bn ới .																									\nib minh .																									\nđẹp quá c .																									\nib .																									\nĐep đó																									\nđẹp quá . để em 1 chiếc nhé c .																									\nDự là lại tốn tiền																									\nPhải canh mới được.																									\nXức xắc qá ????????																									\nđẹp chế like																									\nĐẹp quá!																									\nbn e ơi																									\nSàn này coi bộ dc à nha☺☺☺????????????																									\nShip C dây																									\nVong nay ú thik																									\nMuốn mua vòng này thì x ạ chị																									\nChị ơi check inbox hộ e với																									\nC chờ mãi mà k thấy ib của shop																									\nMãi mà chưa thấy shop chốt x																									\nCheck ib mik b ơi																									\nlấy em 5 vòng c iu nhé																									\nib bn																									\ncheck ib giúp mình . mình lấy 2 vòng .																									\nđẹp quá c ak																									\nquá rẻ - e nhận đc hàng rồi  ,e đi kiểm định đúng đá tự nhiên c ak . cảm ơn c nhiều . sẽ ủng hộ c dài dài .																									\n																									\nib bn 																									\ncheck ib giúp e																									\nib bn 																									\nib																									\ngiá rẻ quá ak 																									\nhàng đẹp - chất lượng - cảm ơn shop 																									\nib mình bạn nhé !																									');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vip_like`
--

CREATE TABLE `vip_like` (
  `id` int(11) NOT NULL,
  `fbid` text COLLATE utf8_unicode_ci NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `name_buy` text COLLATE utf8_unicode_ci NOT NULL,
  `name_package` text COLLATE utf8_unicode_ci NOT NULL,
  `limit_time` text COLLATE utf8_unicode_ci NOT NULL,
  `time_buy` text COLLATE utf8_unicode_ci NOT NULL,
  `speed` text COLLATE utf8_unicode_ci NOT NULL,
  `action` text COLLATE utf8_unicode_ci NOT NULL,
  `camxuc` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `vip_like`
--

INSERT INTO `vip_like` (`id`, `fbid`, `name`, `name_buy`, `name_package`, `limit_time`, `time_buy`, `speed`, `action`, `camxuc`) VALUES
(4, '100028868341650', 'le diem', 'hongdam307', '100', '1', '1537604347', '0', 'checked', 'LIKE'),
(5, '100006526419466', 'nghiahsgs', 'hongdam307', '20', '1', '1537615246', '0', 'checked', 'like'),
(6, '100009668431044', 'Nam Đức Trần', 'Hungpham', '150', '1', '1537698635', '10', 'checked', 'LIKE'),
(7, '100025492784640', 'huynh quoc tuan bt', 'hongdam307', '300', '1', '1537928969', '0', 'checked', 'LIKE'),
(8, '100004303627319', 'hạnh mưm', 'Hungpham', '150', '1', '1537949754', '0', 'checked', 'LIKE'),
(9, '100002971498704', 'Trinh tien dung', 'Hungpham', '100', '1', '1538018493', '0', 'checked', 'LIKE'),
(10, '100006526419466', 'nghiahsgs', 'hongdam307', '20', '1', '1538065545', '0', 'checked', 'LIKE'),
(11, '100010840116451', 'Ngan kim pham', 'hongdam307', '100', '1', '1538068791', '0', 'checked', 'LIKE'),
(12, '1421771098062229', 'page romanwatch', 'Hungpham', '100', '1', '1538117884', '0', 'checked', 'LIKE'),
(13, '100002276960669', 'Hoàng Thanh Nhài', 'thang123', '200', '1', '1538718897', '0', 'checked', 'LIKE'),
(14, '100009010338704', 'Hoàn Bùi', 'thang123', '100', '1', '1539051354', '0', 'checked', 'LIKE'),
(15, '100004562861347', 'hoang ban hung', 'hongdam307', '100', '1', '1539055253', '0', 'checked', 'LIKE'),
(22, '100025518020035', 'hoai giang', 'hongdam307', '50', '1', '1539232989', '0', 'checked', 'LIKE'),
(23, '100001481605593', 'hân trương', 'duongcongthuan', '150', '1', '1539917907', '20', 'checked', 'LIKE'),
(24, '100002304768629', 'truong thi thu han', 'duongcongthuan', '300', '1', '1540516364', '0', 'checked', 'LIKE'),
(25, '100002276960669', 'Hoàng Thanh Nhài', 'thang123', '200', '1', '1541396204', '0', 'checked', 'LIKE'),
(26, '100003741531435', 'pvt', 'phanvantuong', '50', '1', '1542018095', '5', 'checked', 'LIKE'),
(27, '100025379601108', 'a', 'phanvantuong', '150', '1', '1542790315', '0', 'checked', 'LIKE'),
(28, '100006596880328', 'Mỹ Dung', 'ducgermany', '150', '1', '1542821092', '5', 'checked', 'LIKE'),
(29, '100009063014359', 'Nguyễn Hải Yến', 'ducgermany', '50', '1', '1542821237', '5', 'checked', 'LIKE'),
(30, '100023315055013', 'Minh Hue', 'ducgermany', '50', '3', '1542892207', '5', 'checked', 'LIKE'),
(32, '100006850384552', 'Miu', 'ducgermany', '500', '1', '1543052654', '7', 'checked', 'LIKE'),
(33, '100003737541282', 'Nguyễn Ánh Dương', 'ducgermany', '150', '1', '1543134851', '1', 'checked', 'LIKE'),
(34, '831224220295798', 'Lê Gia', 'lady45', '500', '1', '1543157313', '0', 'checked', 'LIKE'),
(35, '100028085542491', 'Test', 'Hungpham', '150', '1', '1543251616', '0', 'checked', 'LIKE'),
(36, '100010347217199', 'Sơn Hiếu', 'ledungmualike', '200', '1', '1543468800', '2', 'checked', 'LIKE'),
(37, '100000385749316', 'Ha Do', 'thang123', '100', '1', '1543552767', '0', 'checked', 'LIKE'),
(38, '100002304768629', 'trương thị thu hân', 'duongcongthuan', '150', '1', '1544343646', '0', 'checked', 'LIKE'),
(39, '100002947241508', 'Ngô Đăng Thắng', 'thang123', '150', '1', '1544410761', '0', 'checked', 'LIKE');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vip_lstream`
--

CREATE TABLE `vip_lstream` (
  `id` int(11) NOT NULL,
  `fbid` text COLLATE utf8_unicode_ci NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `name_buy` text COLLATE utf8_unicode_ci NOT NULL,
  `name_package` text COLLATE utf8_unicode_ci NOT NULL,
  `limit_time` text COLLATE utf8_unicode_ci NOT NULL,
  `time_buy` text COLLATE utf8_unicode_ci NOT NULL,
  `action` text COLLATE utf8_unicode_ci NOT NULL,
  `note` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `live` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `vip_lstream`
--

INSERT INTO `vip_lstream` (`id`, `fbid`, `name`, `name_buy`, `name_package`, `limit_time`, `time_buy`, `action`, `note`, `live`) VALUES
(150, ' 100006732913483', ' 100006732913483', 'phanvantuong', '100', '0.83333333333333', '1541443915', 'checked', '', ''),
(152, ' 100003913236106', ' 100003913236106', 'phanvantuong', '50', '0.066666666666667', '1541443916', 'checked', '', ''),
(153, ' 100014843223961', ' 100014843223961', 'phanvantuong', '50', '0.76666666666667', '1541443916', 'checked', '', ''),
(154, ' 100016649643149', ' 100016649643149', 'phanvantuong', '50', '0.96666666666667', '1541443916', 'checked', '', ''),
(155, ' 100014198552423', ' 100014198552423', 'phanvantuong', '50', '0.96666666666667', '1541443916', 'checked', '', ''),
(156, ' 100007343767123', ' 100007343767123', 'phanvantuong', '50', '0.96666666666667', '1541443917', 'checked', '', ''),
(157, ' 100008240105971', ' 100008240105971', 'phanvantuong', '50', '0.93333333333333', '1541443917', 'checked', '', ''),
(158, ' 100000027473869', ' 100000027473869', 'phanvantuong', '50', '0.9', '1541443917', 'checked', '', ''),
(159, ' 100004651990616', ' 100004651990616', 'phanvantuong', '50', '0.76666666666667', '1541443918', 'checked', '', ''),
(160, ' 138876000145566', ' 138876000145566', 'phanvantuong', '50', '0.76666666666667', '1541443918', 'checked', '', ''),
(161, ' 100029353684607', ' 100029353684607', 'phanvantuong', '100', '0.8', '1541443918', 'checked', '', ''),
(162, ' 100006481722193', ' 100006481722193', 'phanvantuong', '50', '0.8', '1541443918', 'checked', '', ''),
(163, ' 100020214877450', ' 100020214877450', 'phanvantuong', '50', '0.8', '1541443919', 'checked', '', ''),
(164, ' 100028016469309', ' 100028016469309', 'phanvantuong', '50', '0.93333333333333', '1541443919', 'checked', '', ''),
(165, ' 100007214264218', ' 100007214264218', 'phanvantuong', '100', '0.86666666666667', '1541443919', 'checked', '', ''),
(166, ' 261974920913864', ' 261974920913864', 'phanvantuong', '100', '0.86666666666667', '1541443920', 'checked', '', ''),
(167, ' 100003102069298', ' 100003102069298', 'phanvantuong', '50', '0.86666666666667', '1541443920', 'checked', '', ''),
(168, ' 100004134072280', ' 100004134072280', 'phanvantuong', '50', '0.86666666666667', '1541443920', 'checked', '', ''),
(169, ' 100021460864098', ' 100021460864098', 'phanvantuong', '50', '0.86666666666667', '1541443921', 'checked', '', ''),
(170, ' 100002403204753', ' 100002403204753', 'phanvantuong', '100', '0.96666666666667', '1541443921', 'checked', '', ''),
(171, ' 100002854702829', ' 100002854702829', 'phanvantuong', '50', '0.96666666666667', '1541443921', 'checked', '', ''),
(172, ' 100022181775166', ' 100022181775166', 'phanvantuong', '50', '0.96666666666667', '1541443922', 'checked', '', ''),
(173, ' 100024141982715', ' 100024141982715', 'phanvantuong', '50', '0.96666666666667', '1541443922', 'checked', '', ''),
(174, ' 2019936494891382', ' 2019936494891382', 'phanvantuong', '50', '0.86666666666667', '1541443922', 'checked', '', ''),
(175, ' 100014637036248', ' 100014637036248', 'phanvantuong', '50', '0.93333333333333', '1541443922', 'checked', '', ''),
(176, ' 100005882923189', ' 100005882923189', 'phanvantuong', '50', '0.8', '1541443923', 'checked', '', ''),
(177, ' 100026856620776', ' 100026856620776', 'phanvantuong', '100', '0.8', '1541443923', 'checked', '', ''),
(178, ' 100028821398739', ' 100028821398739', 'phanvantuong', '50', '0.86666666666667', '1541443923', 'checked', '', ''),
(180, ' 100007591837407', ' 100007591837407', 'phanvantuong', '200', '2.7666666666667', '1541443924', 'checked', '', ''),
(182, ' 100011728524404', ' 100011728524404', 'phanvantuong', '50', '0.76666666666667', '1541443925', 'checked', '', ''),
(183, ' 100006015125929', ' 100006015125929', 'phanvantuong', '100', '0.76666666666667', '1541443925', 'checked', '', ''),
(185, ' 100016471592762', ' 100016471592762', 'phanvantuong', '50', '0.76666666666667', '1541443926', 'checked', '', ''),
(187, ' 100001805517299', ' 100001805517299', 'phanvantuong', '50', '0.76666666666667', '1541443926', 'checked', '', ''),
(188, ' 100011796129453', ' 100011796129453', 'phanvantuong', '50', '0.76666666666667', '1541443927', 'checked', '', ''),
(190, ' 100003907295989', ' 100003907295989', 'phanvantuong', '100', '0.76666666666667', '1541443927', 'checked', '', ''),
(191, ' 100004610442782', ' 100004610442782', 'phanvantuong', '50', '0.76666666666667', '1541443928', 'checked', '', ''),
(192, ' 100004537830874', ' 100004537830874', 'phanvantuong', '50', '0.76666666666667', '1541443928', 'checked', '', ''),
(193, ' 100018657796838', ' 100018657796838', 'phanvantuong', '50', '0.76666666666667', '1541443928', 'checked', '', ''),
(194, ' 100003490159392', ' 100003490159392', 'phanvantuong', '50', '0.76666666666667', '1541443929', 'checked', '', ''),
(197, ' 100003243232828', ' 100003243232828', 'phanvantuong', '50', '0.73333333333333', '1541443929', 'checked', '', ''),
(198, ' 100006195644602', ' 100006195644602', 'phanvantuong', '50', '0.26666666666667', '1541443930', 'checked', '', ''),
(199, ' 100019956458571', ' 100019956458571', 'phanvantuong', '50', '0.26666666666667', '1541443930', 'checked', '', ''),
(200, ' 100004913222498', ' 100004913222498', 'phanvantuong', '100', '0.26666666666667', '1541443930', 'checked', '', ''),
(201, ' 100022627540431', ' 100022627540431', 'phanvantuong', '50', '0.26666666666667', '1541443931', 'checked', '', ''),
(202, ' 100003154055305', ' 100003154055305', 'phanvantuong', '100', '0.26666666666667', '1541443931', 'checked', '', ''),
(203, ' 100001204937981', ' 100001204937981', 'phanvantuong', '50', '0.26666666666667', '1541443931', 'checked', '', ''),
(204, ' 100011451386878', ' 100011451386878', 'phanvantuong', '100', '0.26666666666667', '1541443932', 'checked', '', ''),
(206, ' 100029016330948', ' 100029016330948', 'phanvantuong', '50', '0.26666666666667', '1541443932', 'checked', '', ''),
(207, ' 100029143872656', ' 100029143872656', 'phanvantuong', '50', '0.26666666666667', '1541443932', 'checked', '', ''),
(209, ' 100006023899396', ' 100006023899396', 'phanvantuong', '100', '0.26666666666667', '1541443933', 'checked', '', ''),
(210, ' 100016577388042', ' 100016577388042', 'phanvantuong', '100', '0.26666666666667', '1541443933', 'checked', '', ''),
(211, ' 100012196097277', ' 100012196097277', 'phanvantuong', '100', '0.26666666666667', '1541443934', 'checked', '', ''),
(212, ' 100004080460003', ' 100004080460003', 'phanvantuong', '50', '0.26666666666667', '1541443934', 'checked', '', ''),
(213, ' 100003216132381', ' 100003216132381', 'phanvantuong', '50', '0.26666666666667', '1541443934', 'checked', '', ''),
(214, ' 100009272497515', ' 100009272497515', 'phanvantuong', '100', '0.26666666666667', '1541443935', 'checked', '', ''),
(215, ' 100013711604458', ' 100013711604458', 'phanvantuong', '50', '0.26666666666667', '1541443935', 'checked', '', ''),
(217, ' 100006184657290', ' 100006184657290', 'phanvantuong', '50', '0.26666666666667', '1541443935', 'checked', '', ''),
(218, ' 100006359946258', ' 100006359946258', 'phanvantuong', '50', '0.76666666666667', '1541443936', 'checked', '', ''),
(219, ' 100026244614444', ' 100026244614444', 'phanvantuong', '50', '0.26666666666667', '1541443936', 'checked', '', ''),
(221, ' 100003591975640', ' 100003591975640', 'phanvantuong', '50', '0.26666666666667', '1541443937', 'checked', '', ''),
(223, ' 100007435565062', ' 100007435565062', 'phanvantuong', '50', '0.26666666666667', '1541443937', 'checked', '', ''),
(224, ' 100025161941338', ' 100025161941338', 'phanvantuong', '50', '0.26666666666667', '1541443938', 'checked', '', ''),
(228, ' 100003274903721', ' 100003274903721', 'phanvantuong', '100', '0.26666666666667', '1541443939', 'checked', '', ''),
(229, ' 100013608317926', ' 100013608317926', 'phanvantuong', '50', '0.26666666666667', '1541443939', 'checked', '', ''),
(230, ' 100023704779167', ' 100023704779167', 'phanvantuong', '50', '0.26666666666667', '1541443939', 'checked', '', ''),
(231, ' 100016673705504', ' 100016673705504', 'phanvantuong', '50', '0.26666666666667', '1541443940', 'checked', '', ''),
(232, ' 100028208104888', ' 100028208104888', 'phanvantuong', '50', '0.26666666666667', '1541443940', 'checked', '', ''),
(233, ' 100005860805850', ' 100005860805850', 'phanvantuong', '100', '0.26666666666667', '1541443940', 'checked', '', ''),
(234, ' 100024527531065', ' 100024527531065', 'phanvantuong', '100', '0.26666666666667', '1541443941', 'checked', '', ''),
(236, ' 100000852296000', ' 100000852296000', 'phanvantuong', '50', '0.26666666666667', '1541443941', 'checked', '', ''),
(239, ' 100022818201301', ' 100022818201301', 'phanvantuong', '100', '0.26666666666667', '1541443942', 'checked', '', ''),
(241, ' 100017454485137', ' 100017454485137', 'phanvantuong', '100', '0.26666666666667', '1541443943', 'checked', '', ''),
(242, ' 1651959395072193', ' 1651959395072193', 'phanvantuong', '100', '0.26666666666667', '1541443943', 'checked', '', ''),
(245, ' 100005371240054', ' 100005371240054', 'phanvantuong', '50', '0.26666666666667', '1541443944', 'checked', '', ''),
(246, ' 100002411901626', ' 100002411901626', 'phanvantuong', '50', '0.76666666666667', '1541443944', 'checked', '', ''),
(248, ' 100026916366836', ' 100026916366836', 'phanvantuong', '50', '0.26666666666667', '1541443945', 'checked', '', ''),
(249, ' 100003046180873', ' 100003046180873', 'phanvantuong', '100', '0.26666666666667', '1541443946', 'checked', '', ''),
(251, ' 100009109709953', ' 100009109709953', 'phanvantuong', '150', '0.26666666666667', '1541443946', 'checked', '', ''),
(252, ' 100007918473614', ' 100007918473614', 'phanvantuong', '50', '0.9', '1541443947', 'checked', '', ''),
(254, ' 100008284833693', ' 100008284833693', 'phanvantuong', '50', '0.13333333333333', '1541443947', 'checked', '', ''),
(255, ' 100004774771004', ' 100004774771004', 'phanvantuong', '50', '0.93333333333333', '1541443947', 'checked', '', ''),
(256, ' 100010542016600', ' 100010542016600', 'phanvantuong', '100', '1', '1542200208', 'checked', '', ''),
(257, ' 100007696819049', ' 100007696819049', 'phanvantuong', '50', '0.8', '1541443948', 'checked', '', ''),
(258, ' 100008122206873', ' 100008122206873', 'phanvantuong', '100', '0.83333333333333', '1541443948', 'checked', '', ''),
(259, ' 100027908262053', ' 100027908262053', 'phanvantuong', '200', '0.83333333333333', '1541443949', 'checked', '', ''),
(260, ' 100013276411683', ' 100013276411683', 'phanvantuong', '50', '0.96666666666667', '1541443949', 'checked', '', ''),
(261, ' 100005104290073', ' 100005104290073', 'phanvantuong', '50', '0.76666666666667', '1541443949', 'checked', '', ''),
(262, ' 100004289562115', ' 100004289562115', 'phanvantuong', '50', '0.93333333333333', '1541443950', 'checked', '', ''),
(264, ' 100001373301886', ' 100001373301886', 'phanvantuong', '50', '0.86666666666667', '1541443950', 'checked', '', ''),
(265, ' 100017938937478', ' 100017938937478', 'phanvantuong', '100', '0.8', '1541443950', 'checked', '', ''),
(266, ' 100027374823301', ' 100027374823301', 'phanvantuong', '50', '0.8', '1541443951', 'checked', '', ''),
(267, ' 100004753023518', ' 100004753023518', 'phanvantuong', '100', '0.73333333333333', '1541443951', 'checked', '', ''),
(270, ' 100004543666266', ' 100004543666266', 'phanvantuong', '50', '0.73333333333333', '1541443952', 'checked', '', ''),
(271, ' 100024590182283', ' 100024590182283', 'phanvantuong', '50', '0.73333333333333', '1541443952', 'checked', '', ''),
(273, ' 100024333693985', ' 100024333693985', 'phanvantuong', '50', '0.8', '1541443953', 'checked', '', ''),
(274, ' 100008413179334', ' 100008413179334', 'phanvantuong', '150', '0.16666666666667', '1541443953', 'checked', '', ''),
(275, ' 100011780044259', ' 100011780044259', 'ducgermany', '100', '0.73333333333333', '1541443954', 'checked', '', ''),
(276, ' 100027910330821', ' 100027910330821', 'phanvantuong', '50', '0.73333333333333', '1541443954', 'checked', '', ''),
(277, ' 100017187213246', ' 100017187213246', 'phanvantuong', '50', '0.93333333333333', '1541443954', 'checked', '', ''),
(279, ' 100005693959214', ' 100005693959214', 'phanvantuong', '100', '0.26666666666667', '1541443955', 'checked', '', ''),
(280, ' 100029393077332', ' 100029393077332', 'phanvantuong', '50', '0.8', '1541443955', 'checked', '', ''),
(281, ' 100003797062700', ' 100003797062700', 'phanvantuong', '50', '0.76666666666667', '1541443955', 'checked', '', ''),
(283, ' 100003543455983', ' 100003543455983', 'phanvantuong', '50', '0.86666666666667', '1541443956', 'checked', '', ''),
(284, ' 100007666027122', ' 100007666027122', 'phanvantuong', '200', '0.8', '1541443956', 'checked', '', ''),
(285, ' 100007644544305', ' 100007644544305', 'phanvantuong', '100', '0.16666666666667', '1541443957', 'checked', '', ''),
(286, '100009970962609', 'y', 'phanvantuong', '100', '1', '1541476629', 'checked', '', '0'),
(287, '100028672925828', 'y', 'phanvantuong', '50', '1', '1541478114', 'checked', '', '0'),
(288, '100012264729319', 'cu đăng', 'phanvantuong', '50', '1', '1541521812', 'checked', '', '0'),
(289, '800042083514268', 'cu đăng', 'phanvantuong', '100', '1', '1541565620', 'checked', '', '0'),
(291, '100000826220669', 'y', 'phanvantuong', '50', '1', '1541570790', 'checked', '', '0'),
(293, '100017694491859', 'nô anh', 'phanvantuong', '100', '1', '1541579776', 'checked', '', '0'),
(294, '100005965246440', 'sơn', 'phanvantuong', '50', '1', '1541584865', 'checked', '', '0'),
(295, '100006273169176', 'sơn', 'phanvantuong', '150', '1', '1541584878', 'checked', '', '0'),
(296, '100006675909840', 'sơn', 'phanvantuong', '100', '1', '1541593183', 'checked', '', '0'),
(297, '100004039395771', 'sơn', 'phanvantuong', '50', '1', '1541593192', 'checked', '', '0'),
(300, '100028060425762', 'sơn', 'phanvantuong', '50', '1', '1541601887', 'checked', '', '0'),
(301, '100008101174440', '50', 'phanvantuong', '50', '1', '1541648626', 'checked', '', '0'),
(302, '100021396854261', 'sơn', 'phanvantuong', '50', '1', '1541664913', 'checked', '', '0'),
(303, '100012695553962', 'y', 'phanvantuong', '100', '1', '1541666187', 'checked', '', '0'),
(304, '100012469635138', 'thạnh', 'phanvantuong', '50', '1', '1541666304', 'checked', '', '0'),
(305, '100011043944725', 'y', 'phanvantuong', '50', '1', '1541666491', 'checked', '', '0'),
(307, '100009014074141', 'nô a', 'phanvantuong', '50', '1', '1541674119', 'checked', '', '0'),
(309, '100004035318517', 'hưng', 'phanvantuong', '50', '1', '1541681471', 'checked', '', '0'),
(311, '100028532171941', 'long', 'phanvantuong', '50', '1', '1541739812', 'checked', '', '0'),
(312, '100005844729921', 'soy', 'phanvantuong', '50', '1', '1541745923', 'checked', '', '0'),
(313, '100022049923916', 'đăng', 'phanvantuong', '50', '1', '1541748218', 'checked', '', '0'),
(314, '100004564267073', 'đạt', 'phanvantuong', '50', '1', '1541757063', 'checked', '', '0'),
(317, '100012831733757', 'sy', 'phanvantuong', '50', '1', '1541831946', 'checked', '', '0'),
(318, '100025486482051', 'long', 'phanvantuong', '50', '1', '1541866800', 'checked', '', '0'),
(324, '100003511534632', 'y', 'phanvantuong', '100', '1', '1541913541', 'checked', '', '0'),
(340, '100005460427958', 'nô em', 'phanvantuong', '50', '1', '1541932829', 'checked', NULL, '0'),
(350, '100012680103160', 'Kiều Thi', 'Dungnv', '50', '1', '1543303246', 'checked', NULL, '0'),
(351, '100029910887916', 'long', 'phanvantuong', '50', '1', '1542000668', 'checked', NULL, '0'),
(353, '100003771221505', 'Mai Anh', 'ducgermany', '50', '1', '1542036145', 'checked', NULL, '0'),
(354, '100004144656834', 'chuột chết', 'phanvantuong', '100', '1', '1542091948', 'checked', NULL, '0'),
(356, '100024073294067', 'nô a', 'phanvantuong', '50', '1', '1542099547', 'checked', NULL, '0'),
(357, '100003971316271', 'y', 'phanvantuong', '200', '1', '1542110477', 'checked', NULL, '0'),
(358, '100028728453076', 'y', 'phanvantuong', '50', '1', '1542110486', 'checked', NULL, '0'),
(359, '100000219974753', 'anh nô ', 'phanvantuong', '50', '1', '1542110580', 'checked', NULL, '0'),
(361, '100023524545553', 'y', 'phanvantuong', '100', '1', '1542115117', 'checked', NULL, '0'),
(362, '100027055819869', 'a hung', 'phanvantuong', '50', '1', '1542133144', 'checked', NULL, '0'),
(363, '100006117138722', 'y', 'phanvantuong', '50', '1', '1542172694', 'checked', NULL, '0'),
(364, '176469346263734', 'hưng', 'phanvantuong', '100', '1', '1542188642', 'checked', NULL, '0'),
(365, '1493030670825311', 'y', 'phanvantuong', '150', '1', '1542195490', 'checked', NULL, '0'),
(366, '100002853655252', 'y', 'phanvantuong', '100', '1', '1542200025', 'checked', NULL, '0'),
(369, '100004824041702', 'no', 'phanvantuong', '50', '1', '1542215407', 'checked', NULL, '0'),
(371, '100010721288487', 'nô e', 'phanvantuong', '100', '1', '1542263143', 'checked', NULL, '0'),
(373, '100005883694574', 'y', 'phanvantuong', '50', '1', '1542288071', 'checked', NULL, '0'),
(374, '100030040883662', 'nô a', 'phanvantuong', '50', '1', '1542288895', 'checked', NULL, '0'),
(375, '100027744857346', 'huu', 'phanvantuong', '50', '1', '1542341586', 'checked', NULL, '0'),
(376, '100026483720180', 'pvt', 'phanvantuong', '100', '1', '1542342081', 'checked', NULL, '0'),
(381, '542578585845936', 'nghiahsgs', 'hongdam307', '50', '1', '1542433071', 'checked', NULL, ''),
(383, '100000174262536', 'y', 'phanvantuong', '100', '1', '1542523069', 'checked', NULL, '0'),
(384, '100027703263373', 'y', 'phanvantuong', '50', '1', '1542527490', 'checked', NULL, '0'),
(386, '100003226821185', 'hưg', 'phanvantuong', '50', '1', '1542529535', 'checked', NULL, '0'),
(387, '1131829386983522', 'y', 'phanvantuong', '50', '1', '1542542608', 'checked', NULL, '0'),
(388, '100003116546841', 'nô e', 'phanvantuong', '50', '1', '1542545345', 'checked', NULL, '0'),
(389, '100005793731971', 'y', 'phanvantuong', '50', '1', '1542604214', 'checked', NULL, '0'),
(390, '100010292027625', 'Liễu Trần', 'hainam123', '50', '1', '1542611483', 'checked', 'tranducdiep', '0'),
(392, '100004962570528', 'y', 'phanvantuong', '50', '1', '1542621253', 'checked', NULL, '0'),
(393, '100006992856664', 'noe', 'phanvantuong', '50', '1', '1542649403', 'checked', NULL, '0'),
(397, '100006489906393', 'noa', 'phanvantuong', '100', '1', '1542691776', 'checked', NULL, '0'),
(398, '100003119163508', 'huu', 'phanvantuong', '50', '1', '1542711742', 'checked', NULL, '0'),
(399, '100004144930795', 'hung', 'phanvantuong', '50', '1', '1542712246', 'checked', NULL, '0'),
(400, '100026992787827', 'no a', 'phanvantuong', '50', '1', '1542779204', 'checked', NULL, '0'),
(401, '100003863386953', 'Phạm trang', 'ducgermany', '50', '1', '1542789427', 'checked', NULL, '0'),
(402, '100004993986226', 'huu', 'phanvantuong', '50', '1', '1542858839', 'checked', NULL, '0'),
(403, '100015477258820', 'toản', 'phanvantuong', '50', '1', '1542886099', 'checked', NULL, '0'),
(404, '238737423415732', 'y', 'phanvantuong', '50', '1', '1542890473', 'checked', NULL, '0'),
(405, '100008234329385', 'phung', 'phanvantuong', '50', '1', '1542947213', 'checked', NULL, '0'),
(406, '100003130375719', 'long', 'phanvantuong', '100', '1', '1542967633', 'checked', NULL, '0'),
(407, '100006373269469', 'Hồng Phước', 'hainam123', '50', '0.75', '1542987771', 'checked', '100006373269469', '0'),
(409, '100009908987999', 'p', 'phanvantuong', '200', '1', '1543035333', 'checked', NULL, '0'),
(411, '100011645581564', 'noa', 'phanvantuong', '50', '1', '1543040093', 'checked', NULL, '0'),
(413, '100004665103604', 'noe', 'phanvantuong', '50', '1', '1543073456', 'checked', NULL, '0'),
(418, '100021847572310', 'p', 'phanvantuong', '50', '1', '1543288456', 'checked', NULL, '0'),
(419, '100004069394999', 'y', 'phanvantuong', '50', '1', '1543295149', 'checked', NULL, '0'),
(420, '100008243311465', 'y', 'phanvantuong', '50', '1', '1543295202', 'checked', NULL, '0'),
(421, '100030036286719', 'Tham nguyen thi', 'hainam123', '50', '1', '1543301110', 'checked', 'xuanhuytq15', '0'),
(422, '100000306724558', 'no a', 'phanvantuong', '50', '1', '1543312478', 'checked', NULL, '0'),
(424, '100006678124522', 'xx', 'hainam123', '50', '1', '1543384222', 'checked', 'manh179', '0'),
(426, '100004847412088', 'x', 'hainam123', '100', '1', '1543410834', 'checked', 'manh179', '0'),
(428, '100010347217199', 'Sơn Hiếu', 'ledungmualike', '100', '1', '1543468821', 'checked', NULL, '0'),
(429, '100002569532768', 'Hạ Hồng', 'ledungmualike', '50', '1', '1543469409', 'checked', NULL, '0'),
(430, '100013670385767', 'long', 'phanvantuong', '100', '1', '1543473558', 'checked', NULL, '0'),
(434, '100000457841669', '50', 'phanvantuong', '50', '1', '1543498671', 'checked', NULL, '0'),
(435, '100006236581114', 'phung', 'phanvantuong', '50', '1', '1543500346', 'checked', NULL, '0'),
(437, '100004043245648', 'xx', 'hainam123', '50', '3', '1543543089', 'checked', 'manh179', '0'),
(438, '100001566163924', 'xx', 'hainam123', '50', '1', '1543555575', 'checked', 'manh179', '0'),
(439, '100025611168798', 'xx', 'hainam123', '50', '3', '1543578346', 'checked', 'manh179', '0'),
(440, '100017472721651', 'no a', 'phanvantuong', '50', '1', '1543578847', 'checked', NULL, '0'),
(441, '100006248732531', 'ục', 'phanvantuong', '100', '1', '1543579553', 'checked', NULL, '0'),
(442, '100029353684607', 'no anh', 'phanvantuong', '100', '1', '1543580651', 'checked', NULL, '0'),
(443, '100005833204574', 'xx', 'hainam123', '100', '1', '1543581995', 'checked', 'manh179', '0'),
(444, '100004543666266', 'y', 'phanvantuong', '50', '1', '1543590066', 'checked', NULL, '0'),
(446, '100007696819049', 'y', 'phanvantuong', '50', '1', '1543591106', 'checked', NULL, '0'),
(450, '746848875417173', 'nô anh', 'phanvantuong', '100', '1', '1543664040', 'checked', NULL, '0'),
(451, '100004546778733', 'nô anh', 'phanvantuong', '100', '1', '1543666354', 'checked', NULL, '0'),
(454, '100025053451097', 'y', 'phanvantuong', '100', '1', '1543726131', 'checked', NULL, '0'),
(456, '100024218225422', 'pvt', 'phanvantuong', '50', '1', '1543730267', 'checked', NULL, '0'),
(457, '2019936494891382', 'Quy ', 'lady45', '100', '2', '1543766875', 'checked', NULL, '1'),
(458, '100024713354939', 'no em', 'phanvantuong', '50', '1', '1543800072', 'checked', NULL, '0'),
(460, '100008758727643', 'phung', 'phanvantuong', '50', '1', '1543807528', 'checked', NULL, '0'),
(461, '100006833375885', 'nô a', 'phanvantuong', '50', '1', '1543840573', 'checked', NULL, '0'),
(462, '100029048508817', 'thạnh', 'phanvantuong', '100', '1', '1543908987', 'checked', NULL, '0'),
(463, '100008926507315', 'thạnh', 'phanvantuong', '100', '1', '1543909136', 'checked', NULL, '0'),
(464, '100007997581881', 'y', 'phanvantuong', '100', '1', '1543920748', 'checked', NULL, '0'),
(466, '100004317572146', 'Sâm thuần', 'hainam123', '50', '1', '1543977802', 'checked', 'xuanhuytq15', '0'),
(467, '100005994879947', 'xx', 'hainam123', '50', '1', '1543978229', 'checked', 'manh179', '0'),
(468, '100004468753092', 'pvt', 'phanvantuong', '100', '1', '1543989212', 'checked', NULL, '0'),
(471, '100005455085152', 'xxxxxxx', 'hainam123', '100', '1', '1544096022', 'checked', NULL, '0'),
(472, '100010106340991', 'xx', 'hainam123', '100', '1', '1544096434', 'checked', NULL, '0'),
(473, '100004039790313', 'lương an', 'hainam123', '50', '1', '1544096453', 'checked', NULL, '0'),
(477, '100003946291580', 'Cẩm Tú', 'hainam123', '50', '1', '1544258428', 'checked', 'xuanhuytq15', '0'),
(478, '100004035380601', 'Tuyen Saka', 'hainam123', '50', '1', '1544260427', 'checked', 'xuanhuytq15', '0'),
(479, '100007184021361', 'Mai Linh', 'hainam123', '50', '2', '1544262711', 'checked', 'xuanhuytq15', '0'),
(480, '100024255831102', 'y soi', 'phanvantuong', '150', '1', '1544269656', 'checked', NULL, '0'),
(481, '100025651329976', 'hiếu', 'phanvantuong', '50', '1', '1544269704', 'checked', NULL, '0'),
(482, '100015080325419', 'đạt', 'phanvantuong', '100', '1', '1544269761', 'checked', NULL, '0'),
(483, '100015590735653', 'y', 'phanvantuong', '50', '1', '1544269813', 'checked', NULL, '0'),
(484, '549939531790020', 'long', 'phanvantuong', '100', '1', '1544273674', 'checked', NULL, '0'),
(485, '100004953219701', 'a', 'hainam123', '50', '1', '1544285756', 'checked', 'minhthongmedia', NULL),
(489, '100005994945486', 'huu', 'phanvantuong', '50', '1', '1544343684', 'checked', NULL, '0'),
(490, '100013977879573', 'y', 'phanvantuong', '100', '1', '1544345855', 'checked', NULL, '0'),
(491, '2073960222622704', 'Elly White Cosmetics MY', 'ducgermany', '200', '1', '1544367042', 'checked', NULL, '0'),
(492, '100006869672564', 'phụng', 'phanvantuong', '50', '1', '1544419118', 'checked', NULL, '0'),
(493, '100019646136736', 'xx', 'hainam123', '100', '1', '1544419942', 'checked', 'manh179', NULL),
(494, '100006433049352', 'y', 'phanvantuong', '100', '1', '1544425132', 'checked', NULL, '0'),
(495, '1078933146', 'y', 'phanvantuong', '100', '1', '1544438327', 'checked', NULL, '0'),
(496, '100023704779167', 'huu', 'phanvantuong', '50', '1', '1544445228', 'checked', NULL, '0'),
(497, '100009398391481', 'a dat', 'phanvantuong', '100', '1', '1544452764', 'checked', NULL, '0'),
(499, '104784746597041', 'Nguyễn thu huệ', 'hainam123', '50', '1', '1544525434', 'checked', 'xuanhuytq15', '0'),
(500, '100015619920389', 'y', 'phanvantuong', '100', '1', '1544536369', 'checked', NULL, '0'),
(503, '100004829766275', 'pvt', 'phanvantuong', '50', '1', '1544597677', 'checked', NULL, '0'),
(504, '100016711004420', 'long', 'phanvantuong', '50', '1', '1544602483', 'checked', NULL, '0'),
(505, '100006390402129', 'long', 'phanvantuong', '50', '1', '1544605691', 'checked', NULL, '0'),
(506, '100001171706775', 'cái lol', 'hainam123', '50', '1', '1544610814', 'checked', 'tuvovnt', '0'),
(507, '100006460194467', 'y', 'phanvantuong', '100', '1', '1544610984', 'checked', NULL, '0'),
(508, '100026716793905', 'toản', 'phanvantuong', '100', '1', '1544675578', 'checked', NULL, '0'),
(509, '100024807191382', 'long', 'phanvantuong', '50', '1', '1544675599', 'checked', NULL, '0'),
(511, '100022263154070', 'cu đăg', 'phanvantuong', '50', '1', '1544696540', 'checked', NULL, '0'),
(512, '100012402121855', 'mai đăng', 'phanvantuong', '50', '1', '1544696555', 'checked', NULL, '0'),
(513, '100014028632110', 'hưng', 'phanvantuong', '100', '1', '1544704407', 'checked', NULL, '0'),
(520, '100010792802126', 'xx', 'hainam123', '50', '1', '1545048271', 'checked', 'manh179', NULL),
(521, '100001970425497', 'toản', 'phanvantuong', '100', '1', '1545113874', 'checked', NULL, NULL),
(522, '100011446185734', 'xx', 'hainam123', '200', '1', '1545138552', 'checked', 'manh179', NULL),
(524, '100003772925452', 'nô a', 'phanvantuong', '50', '1', '1545185439', 'checked', NULL, NULL),
(525, '100005653449857', 'xx', 'hainam123', '50', '1', '1545191635', 'checked', 'manh179', NULL),
(526, '100030055034039', 'long', 'phanvantuong', '50', '1', '1545208876', 'checked', NULL, NULL),
(528, '100004123506096', 'xx', 'hainam123', '50', '1', '1545228027', 'checked', 'manh179', NULL),
(529, '100000199314501', 'phung', 'phanvantuong', '50', '1', '1545279524', 'checked', NULL, NULL),
(530, '100000196989453', 'pvt', 'phanvantuong', '50', '1', '1545293265', 'checked', NULL, NULL),
(531, '100010526448103', 'huu', 'phanvantuong', '50', '1', '1545359030', 'checked', NULL, NULL),
(533, '550229322021057', 'y', 'phanvantuong', '300', '1', '1545371444', 'checked', NULL, NULL),
(534, '100007480459160', 'pvt', 'phanvantuong', '50', '1', '1545389281', 'checked', NULL, NULL),
(535, '100011492680322', 'a hung', 'phanvantuong', '100', '1', '1545391878', 'checked', NULL, NULL),
(536, '100005574522776', 'cu đặng', 'phanvantuong', '50', '1', '1545394753', 'checked', NULL, NULL),
(537, '100007666027122', 'cu đăng', 'phanvantuong', '100', '1', '1545394907', 'checked', NULL, NULL),
(539, '100006800858962', 'y', 'phanvantuong', '50', '1', '1545453354', 'checked', NULL, NULL),
(542, '100024649386615', 'long', 'phanvantuong', '50', '1', '1545459540', 'checked', NULL, NULL),
(547, '100002403204753', 'pvt', 'phanvantuong', '50', '1', '1545533995', 'checked', NULL, NULL),
(550, '100022548501727', 'pvt', 'phanvantuong', '200', '1', '1545581949', 'checked', NULL, NULL),
(551, '100009780108774', 'y', 'phanvantuong', '50', '1', '1545627268', 'checked', NULL, NULL),
(552, '100004146990832', 'Hậu Lion ', '0968488268', '50', '1', '1545729469', 'checked', NULL, NULL),
(556, '100016788368710', 'huu', 'phanvantuong', '50', '1', '1545802201', 'checked', NULL, NULL),
(557, '100009425505903', 'Uyên nhung', 'hainam123', '50', '1', '1545825664', 'checked', 'xuanhuytq15', NULL),
(558, '', '', 'phanvantuong', '', '0', '1545829935', 'checked', NULL, ''),
(559, '100014467233135', 'Quỳnh Như', 'lehoanglam', '100', '1', '1545830693', 'checked', NULL, NULL),
(560, '100025419580045', 'huu', 'phanvantuong', '50', '1', '1545887918', 'checked', NULL, NULL),
(561, '100006262778133', 'phong pham', 'phanvantuong', '100', '1', '1545888215', 'checked', NULL, NULL),
(562, '522149681598491', 'long', 'phanvantuong', '100', '1', '1545908578', 'checked', NULL, NULL),
(563, '185067852322004', 'long', 'phanvantuong', '200', '1', '1545909031', 'checked', NULL, NULL),
(565, '100005371240054', 'huu', 'phanvantuong', '50', '1', '1545911954', 'checked', NULL, NULL),
(567, '100024352223937', 'Nguyễn Hiền', 'hainam123', '50', '1', '1545921692', 'checked', 'xuanhuytq15', NULL),
(568, '100007432339051', 'huu', 'phanvantuong', '50', '1', '1545979311', 'checked', NULL, NULL),
(571, '100003269643508', 'huu', 'phanvantuong', '100', '1', '1545983195', 'checked', NULL, NULL),
(572, '100015082367385', 'long', 'phanvantuong', '50', '1', '1545987850', 'checked', NULL, NULL),
(573, '100022274470554', 'long', 'phanvantuong', '50', '1', '1545996192', 'checked', NULL, NULL),
(575, '100009642890872', 'sơn', 'phanvantuong', '50', '1', '1546084120', 'checked', NULL, NULL),
(576, '100005627073732', 'phét', 'phanvantuong', '50', '1', '1546092787', 'checked', NULL, NULL),
(578, '100010751235288', 'a dạt', 'phanvantuong', '50', '1', '1546142620', 'checked', NULL, NULL),
(579, '100026725353586', 'huu', 'phanvantuong', '150', '1', '1546142682', 'checked', NULL, NULL),
(581, '100004044046047', 'Huyền Huyền', 'Dungnv', '100', '1', '1546153427', 'checked', NULL, NULL),
(582, '100010502313732', 'y', 'phanvantuong', '50', '1', '1546255056', 'checked', NULL, NULL),
(583, '100006898578332', 'y', 'phanvantuong', '50', '1', '1546255245', 'checked', NULL, NULL),
(584, '100024191135269', 'duoc', 'phanvantuong', '100', '1', '1546322629', 'checked', NULL, NULL),
(585, '134567470627878', 'y', 'phanvantuong', '50', '1', '1546323352', 'checked', NULL, NULL),
(587, '100015940981410', 'y', 'phanvantuong', '50', '1', '1546408215', 'checked', NULL, NULL),
(590, '100000345594171', 'huu', 'phanvantuong', '50', '1', '1546489994', 'checked', NULL, NULL),
(591, '100026557008553', 'huu', 'phanvantuong', '50', '1', '1546490008', 'checked', NULL, NULL),
(592, '248645722670160', 'huu', 'phanvantuong', '50', '1', '1546493256', 'checked', NULL, NULL),
(593, '100026011762830', 'pvt', 'phanvantuong', '100', '1', '1546494490', 'checked', NULL, NULL),
(596, '100026431261882', 'huu', 'phanvantuong', '100', '1', '1546573345', 'checked', NULL, NULL),
(597, '100004803339927', 'huu', 'phanvantuong', '50', '1', '1546579613', 'checked', NULL, NULL),
(598, '100006771013370', 'y', 'phanvantuong', '100', '1', '1546584736', 'checked', NULL, NULL),
(599, '100008178274183', 'a hưng', 'phanvantuong', '50', '1', '1546599886', 'checked', NULL, NULL),
(601, '100004394532670', 'mạnh tiến - pvt', 'phanvantuong', '50', '1', '1546673709', 'checked', NULL, NULL),
(602, '100001632969127', 'hưng', 'phanvantuong', '50', '1', '1546677320', 'checked', NULL, NULL),
(604, '100004679887178', 'hưng', 'phanvantuong', '50', '1', '1546712152', 'checked', NULL, NULL),
(607, '100011772756215', 'ục', 'phanvantuong', '300', '1', '1546759868', 'checked', NULL, NULL),
(608, '', '', 'phanvantuong', '', '0', '1546773791', 'checked', NULL, ''),
(609, '100013670826709', 'huu', 'phanvantuong', '50', '1', '1546841089', 'checked', NULL, NULL),
(610, '100031286538846', 'huu', 'phanvantuong', '50', '1', '1546841128', 'checked', NULL, NULL),
(611, '191475448254652', 'truongtrickerga', 'hainam123', '100', '1', '1546844869', 'checked', 'truongtrickerga', NULL),
(612, '100008024478629', 'duoc', 'phanvantuong', '100', '1', '1546875079', 'checked', NULL, NULL),
(614, '605541801', 'Minh Trâm', 'lehoanglam', '150', '1', '1546925850', 'checked', NULL, NULL),
(615, '100005129987948', 'huu', 'phanvantuong', '50', '1', '1546925898', 'checked', NULL, NULL),
(616, '100016357843826', 'Hiệp Vũ', 'hainam123', '50', '1', '1546929334', 'checked', 'xuanhuytq15', NULL),
(617, '100025817587640', 'long', 'phanvantuong', '50', '1', '1546950625', 'checked', NULL, NULL),
(618, '100022989575559', 'toan', 'phanvantuong', '50', '1', '1546950700', 'checked', NULL, NULL),
(620, '100005947531528', 'duoc', 'phanvantuong', '50', '1', '1546958084', 'checked', NULL, NULL),
(623, '100004242122123', 'huu', 'phanvantuong', '100', '1', '1547031272', 'checked', NULL, NULL),
(625, '100006567311576', 'hồng hạnh', 'hainam123', '50', '1', '1547089317', 'checked', 'tuvovnt', NULL),
(626, '2042343222676439', 'ZuKy - Thời Trang Hàng Hiệu VNXK', 'lehoanglam', '100', '1', '1547102543', 'checked', NULL, NULL),
(628, '100020972872706', 'a dat', 'phanvantuong', '50', '1', '1547116193', 'checked', NULL, NULL),
(629, '100004311692494', 'huu', 'phanvantuong', '50', '1', '1547117176', 'checked', NULL, NULL),
(630, '100002334216145', 'pvt', 'phanvantuong', '50', '1', '1547118009', 'checked', NULL, NULL),
(631, '100003896961038', 'PVT', 'phanvantuong', '100', '1', '1547129236', 'checked', NULL, NULL),
(632, '100008016287544', 'nô em', 'phanvantuong', '50', '1', '1547131174', 'checked', NULL, NULL),
(634, '100018754958097', 'huu', 'phanvantuong', '100', '1', '1547171695', 'checked', NULL, NULL),
(635, '100016267429361', 'xxx', 'hainam123', '50', '1', '1547185217', 'checked', 'manh179', NULL),
(637, '100005662293088', 'huu', 'phanvantuong', '100', '1', '1547252756', 'checked', NULL, NULL),
(639, '100004024606797', 'noe', 'phanvantuong', '100', '1', '1547270134', 'checked', NULL, NULL),
(641, '100004137072872', 'y', 'phanvantuong', '50', '1', '1547358404', 'checked', NULL, NULL),
(645, '100013698582163', 'tài', 'phanvantuong', '50', '1', '1547396628', 'checked', NULL, NULL),
(648, '100003985570191', 'long', 'phanvantuong', '50', '1', '1547538569', 'checked', NULL, NULL),
(649, '100002707735413', 'huu', 'phanvantuong', '100', '1', '1547613395', 'checked', NULL, NULL),
(650, '100022074112435', 'toan lam', 'phanvantuong', '50', '1', '1547727489', 'checked', NULL, NULL),
(653, '100023467172789', 'huu', 'phanvantuong', '50', '1', '1547912128', 'checked', NULL, NULL),
(655, '100013022868400', 'y', 'phanvantuong', '50', '1', '1548052185', 'checked', NULL, NULL),
(656, '100007119760974', 'huu', 'phanvantuong', '50', '1', '1548056163', 'checked', NULL, NULL),
(657, '100002316885617', 'duoc', 'phanvantuong', '100', '1', '1548076663', 'checked', NULL, NULL),
(658, '100004006922315', 'no anh', 'phanvantuong', '150', '1', '1548130908', 'checked', NULL, NULL),
(661, '100013084842294', 'yona', 'hainam123', '50', '1', '1548241960', 'checked', 'tuvovnt', NULL),
(662, '100003250962983', 'Lan', 'hainam123', '50', '1', '1548300138', 'checked', 'huynhtantai', NULL),
(665, '100003654936674', 'phấn', 'hainam123', '50', '1', '1548507821', 'checked', 'huynhtantai', NULL),
(666, '100022476920163', 'sự', 'hainam123', '50', '1', '1548508244', 'checked', 'huynhtantai', NULL),
(667, '100014744656619', 'hung', 'phanvantuong', '50', '1', '1548561253', 'checked', NULL, NULL),
(668, '100020931760866', 'long', 'phanvantuong', '100', '1', '1548588826', 'checked', NULL, NULL),
(670, '100003902170915', 'huu', 'phanvantuong', '150', '1', '1548761482', 'checked', NULL, NULL),
(672, '100027110716093', 'y', 'phanvantuong', '100', '1', '1548822569', 'checked', NULL, NULL),
(675, '100014941233080', 'Hương Tây', 'lehoanglam', '200', '1', '1549124754', 'checked', NULL, NULL),
(677, '100026507469399', 'huu', 'phanvantuong', '50', '1', '1549684684', 'checked', NULL, NULL),
(678, '100031738270989', 'huu', 'phanvantuong', '50', '1', '1549765649', 'checked', NULL, NULL),
(680, '100009400504296', 'huu', 'phanvantuong', '50', '1', '1549806028', 'checked', NULL, NULL),
(681, '100008176176190', 'fhmn', 'hainam123', '50', '1', '1549806818', 'checked', 'huynhtantai', NULL),
(682, '100004019177893', 'huu', 'phanvantuong', '50', '1', '1549849861', 'checked', NULL, NULL),
(684, '100031019859446', 'huu', 'phanvantuong', '100', '1', '1549864160', 'checked', NULL, NULL),
(687, '100006037666458', 'thắm', 'hainam123', '50', '1', '1549885760', 'checked', 'huynhtantai', NULL),
(689, '100016649643149', 'no a', 'phanvantuong', '50', '1', '1550029406', 'checked', NULL, NULL),
(690, '100010609990490', 'kieu diem', 'hainam123', '50', '3', '1550070942', 'checked', 'conan090', NULL),
(693, '100006469993956', 'Hoa Tây', 'hainam123', '50', '1', '1550138382', 'checked', 'xuanhuytq15', NULL),
(696, '344768302632452', 'huu', 'phanvantuong', '50', '1', '1550209622', 'checked', NULL, NULL),
(697, '375388746270832', 'huu', 'phanvantuong', '50', '1', '1550209648', 'checked', NULL, NULL),
(699, '100006713430526', 'pvt', 'phanvantuong', '50', '1', '1550288834', 'checked', NULL, NULL),
(700, '100004672603192', 'phung', 'phanvantuong', '50', '1', '1550297913', 'checked', NULL, NULL),
(702, '100003139456204', 'lailai', 'phanvantuong', '500', '1', '1550565214', 'checked', NULL, NULL),
(703, '100005908174501', 'huu', 'phanvantuong', '50', '1', '1550582228', 'checked', NULL, NULL),
(704, '100022543066855', 'huu', 'phanvantuong', '50', '1', '1550582233', 'checked', NULL, NULL),
(705, '1653890031336700', 'Page chi', 'hainam123', '50', '3', '1550646847', 'checked', 'conan090', NULL),
(706, '100015302715474', 'Kim nhi', 'hainam123', '50', '3', '1550646912', 'checked', 'conan090', NULL),
(707, '129897774276074', 'Shop. Kim nhi', 'hainam123', '50', '3', '1550650120', 'checked', 'conan090', NULL),
(708, '100004462276312', 'y', 'phanvantuong', '50', '1', '1550664715', 'checked', NULL, NULL),
(710, '100015597936096', 'hung', 'phanvantuong', '50', '1', '1550756394', 'checked', NULL, NULL),
(711, '142475159643706', 'Quỳnh Như Store', 'lehoanglam', '50', '1', '1550903915', 'checked', NULL, NULL),
(712, '100005574637182', 'pvt', 'phanvantuong', '50', '1', '1550907009', 'checked', NULL, NULL),
(713, '100015778716825', 'tuongcusue', 'phanvantuong', '100', '1', '1550927526', 'checked', NULL, NULL),
(715, '202639083198799', 'pvt ', 'phanvantuong', '500', '1', '1550927793', 'checked', NULL, NULL),
(717, '100006761014789', 'pvt', 'phanvantuong', '50', '1', '1550991888', 'checked', NULL, NULL),
(720, '838655766165138', 'được', 'phanvantuong', '100', '1', '1551065708', 'checked', NULL, NULL),
(721, '100002576693165', 'phụng', 'phanvantuong', '50', '1', '1551065748', 'checked', NULL, NULL),
(722, '100006689197274', 'phụng', 'phanvantuong', '50', '1', '1551065771', 'checked', NULL, NULL),
(723, '100004301044014', 'pvt', 'phanvantuong', '50', '1', '1551072015', 'checked', NULL, NULL),
(724, '100003008278524', 'pvt', 'phanvantuong', '100', '1', '1551096093', 'checked', NULL, NULL),
(725, '100003894122814', 'y', 'phanvantuong', '50', '1', '1551107423', 'checked', NULL, NULL),
(726, '100022720848050', 'Hoàng Thế Thái', 'lehoanglam', '50', '1', '1551179976', 'checked', NULL, NULL),
(727, '100009688510933', 'phanvantuong', 'phanvantuong', '100', '1', '1551236809', 'checked', NULL, NULL),
(728, '100022378039198', 'trang theu', 'hainam123', '50', '1', '1551279351', 'checked', NULL, NULL),
(730, '100004837951237', 'ục', 'phanvantuong', '100', '1', '1551327878', 'checked', NULL, NULL),
(731, '100015556034645', 'phụng', 'phanvantuong', '50', '1', '1551339846', 'checked', NULL, NULL),
(732, '100023469185596', 'toàn lâm', 'phanvantuong', '50', '1', '1551354605', 'checked', NULL, NULL),
(735, '100034413698522', 'pvt', 'phanvantuong', '200', '1', '1551432129', 'checked', NULL, NULL),
(736, '100024605085618', 'y', 'phanvantuong', '200', '1', '1551698353', 'checked', NULL, NULL),
(737, '519679981448985', 'pvt', 'phanvantuong', '100', '1', '1551757234', 'checked', NULL, NULL),
(738, '100008814377239', 'phanvantuong', 'phanvantuong', '100', '1', '1551785764', 'checked', NULL, NULL),
(739, '100006915128751', 'Hiền Hiền', 'hainam123', '50', '1', '1551941275', 'checked', 'xuanhuytq15', NULL),
(740, '100025428109950', 'y', 'phanvantuong', '50', '1', '1551953992', 'checked', NULL, NULL),
(741, '100014166036573', 'y', 'phanvantuong', '50', '1', '1551956086', 'checked', NULL, NULL),
(742, '100034404352134', 'Trùm Sỉ Vân', 'hainam123', '50', '1', '1552108840', 'checked', 'xuanhuytq15', NULL),
(744, '50.100026507469399', 'y', 'phanvantuong', '50', '1', '1552312499', 'checked', NULL, NULL),
(745, '100004007358799', 'Nguyễn công đức', 'hainam123', '100', '1', '1552313825', 'checked', NULL, NULL),
(747, '100028198794376', 'Kiên Trung', 'hainam123', '50', '1', '1552383651', 'checked', 'xuanhuytq15', NULL),
(748, '100006043334348', 'phung', 'phanvantuong', '50', '1', '1552385230', 'checked', NULL, NULL),
(749, '100019081292735', 'y', 'phanvantuong', '50', '1', '1552393881', 'checked', NULL, NULL),
(752, '100012184325257', 'phanvantuong', 'phanvantuong', '100', '3', '1552461333', 'checked', NULL, NULL),
(753, '100006290739584', 'phanvantuong', 'phanvantuong', '100', '1', '1552482287', 'checked', NULL, NULL),
(754, '100024915954098', 'phanvantuong', 'phanvantuong', '50', '1', '1552483799', 'checked', NULL, NULL),
(755, '100010885301659', 'Thương Nga', 'hainam123', '100', '1', '1552541308', 'checked', 'xuanhuytq15', NULL),
(756, '100034642424382', 'y', 'phanvantuong', '250', '1', '1552543664', 'checked', NULL, NULL),
(757, '1741154635998051', 'y', 'phanvantuong', '100', '1', '1552543858', 'checked', NULL, NULL),
(758, '100011335048182', 'pvt', 'phanvantuong', '50', '3', '1552553064', 'checked', NULL, NULL),
(759, '100009434429616', 'Xứ Xa Người Con', 'hainam123', '100', '2', '1552554823', 'checked', 'xuanhuytq15', NULL),
(760, '100007602617702', 'phung', 'phanvantuong', '50', '1', '1552607015', 'checked', NULL, NULL),
(761, '100007272371544', 'phanvantuong', 'phanvantuong', '200', '1', '1552607524', 'checked', NULL, NULL),
(762, '100014995033679', 'Nguyễn Hằng', '0968488268', '50', '1', '1552630920', 'checked', NULL, NULL),
(763, '100003935121235', 'Giáp Văn Sơn', 'lehoanglam', '50', '1', '1552832173', 'checked', NULL, NULL),
(764, '100008333564195', 'ục', 'phanvantuong', '50', '1', '1552961863', 'checked', NULL, NULL),
(765, '334931603509414', 'Along', 'lady45', '400', '2', '1552969356', 'checked', NULL, NULL),
(766, '100025810993444', ' Thai Huyền Huyền', 'hainam123', '50', '1', '1552975577', 'checked', 'minhngoc91', NULL),
(767, '175588036484302', 'phanvantuong', 'phanvantuong', '100', '1', '1552983505', 'checked', NULL, NULL),
(769, '100000254370754', 'Nguyễn Tường Vy', 'lehoanglam', '100', '1', '1553146115', 'checked', NULL, NULL),
(770, '100011459529427', 'Vu ', 'hainam123', '50', '1', '1553244174', 'checked', 'conan090', NULL),
(771, '100007096272948', 'pvt', 'phanvantuong', '500', '1', '1553329267', 'checked', NULL, NULL),
(773, '100010244747846', 'pvt', 'phanvantuong', '50', '1', '1553351846', 'checked', NULL, NULL),
(774, '361926534543797', 'pvt', 'phanvantuong', '300', '1', '1553508299', 'checked', NULL, NULL),
(775, '2386701468217756', 'PHANVANTUONG', 'phanvantuong', '200', '1', '1553590962', 'checked', NULL, NULL),
(776, '100009024812628', ' Phạm Thị Trúc Quỳnh (Make up)', 'hainam123', '50', '1', '1553594845', 'checked', 'minhngoc91', NULL),
(777, '1297021510403307', 'phụng', 'phanvantuong', '50', '1', '1553606700', 'checked', NULL, NULL),
(778, '100005908087833', 'Hương Hùng', 'lehoanglam', '50', '1', '1553648067', 'checked', NULL, NULL),
(779, '100014740487944', 'tòan', 'phanvantuong', '50', '1', '1553657730', 'checked', NULL, NULL),
(780, '247240565413852', 'phanvantuong', 'phanvantuong', '500', '1', '1553766302', 'checked', NULL, NULL),
(781, '100003088793583', 'Trang Hoàng', 'hainam123', '50', '1', '1554096241', 'checked', 'tanghanhbk', NULL),
(782, '100029904001098', 'Thiên Sứ Lông Bông', 'hainam123', '50', '1', '1554193966', 'checked', 'tranducdiep', NULL),
(783, '1702544806669729', 'phung', 'phanvantuong', '50', '1', '1554284376', 'checked', NULL, NULL),
(784, '297022997563840', 'page kieu diem', 'hainam123', '50', '3', '1554386491', 'checked', 'conan090', NULL),
(785, '100004852960689', 'Trang', 'hainam123', '100', '1', '1554541861', 'checked', 'tranducdiep', NULL),
(786, '100005600889099', 'Thanh Tuyền', 'lehoanglam', '50', '1', '1554634464', 'checked', NULL, NULL),
(787, '251122532103669', 'Tài Nhớt', 'lady45', '300', '2', '1554652877', 'checked', NULL, NULL),
(788, '100008863219039', 'huyền toản', 'hainam123', '50', '1', '1554718544', 'checked', 'xuanhuytq15', NULL),
(789, '100004379344033', 'Bé Gấu', 'hainam123', '50', '1', '1554743589', 'checked', 'xuanhuytq15', NULL),
(790, '100022370475062', 'Khánh Ly', 'hainam123', '50', '1', '1554791451', 'checked', 'xuanhuytq15', NULL),
(791, '148823585635326', 'Vân July ', 'lady45', '300', '2', '1554816983', 'checked', NULL, NULL),
(792, '830502673793081', 'Đức Vy - Bạn A Lâm', 'lady45', '150', '2', '1555050930', 'checked', NULL, NULL),
(793, '100005189431922', 'Nguyễn Thị Thời', 'hainam123', '50', '1', '1555213557', 'checked', 'xuanhuytq15', NULL),
(794, '100003137354876', 'Võ Quỳnh Hoa', 'lehoanglam', '50', '1', '1555228796', 'checked', NULL, NULL),
(795, '100024935254647', 'Vân', 'hainam123', '50', '1', '1555560499', 'checked', 'conan090', NULL),
(796, '100004138959480', 'Dung Hà', 'hainam123', '50', '1', '1555660209', 'checked', 'tanghanhbk', NULL),
(797, '100004099201675', 'Quyên Hoàng', 'hainam123', '50', '1', '1555998808', 'checked', 'tanghanhbk', NULL),
(798, '100032113200068', 'Nguyễn Hằng', '0968488268', '50', '1', '1556071214', 'checked', NULL, NULL),
(799, '100006042783750', 'Lê khanh', 'lehoanglam', '50', '1', '1556088156', 'checked', NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `buy_follow`
--
ALTER TABLE `buy_follow`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `dbCvBuffCmt`
--
ALTER TABLE `dbCvBuffCmt`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `dbCvBuffCmtXong`
--
ALTER TABLE `dbCvBuffCmtXong`
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
-- Chỉ mục cho bảng `tbsinhvienk60`
--
ALTER TABLE `tbsinhvienk60`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `vip_buff`
--
ALTER TABLE `vip_buff`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `vip_buff_cmt`
--
ALTER TABLE `vip_buff_cmt`
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
-- Chỉ mục cho bảng `vip_lstream`
--
ALTER TABLE `vip_lstream`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `buy_follow`
--
ALTER TABLE `buy_follow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `dbCvBuffCmt`
--
ALTER TABLE `dbCvBuffCmt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT cho bảng `dbCvBuffCmtXong`
--
ALTER TABLE `dbCvBuffCmtXong`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;

--
-- AUTO_INCREMENT cho bảng `package_vip`
--
ALTER TABLE `package_vip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `tbsinhvienk60`
--
ALTER TABLE `tbsinhvienk60`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `vip_buff`
--
ALTER TABLE `vip_buff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT cho bảng `vip_buff_cmt`
--
ALTER TABLE `vip_buff_cmt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT cho bảng `vip_cmt`
--
ALTER TABLE `vip_cmt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `vip_like`
--
ALTER TABLE `vip_like`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT cho bảng `vip_lstream`
--
ALTER TABLE `vip_lstream`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=800;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
