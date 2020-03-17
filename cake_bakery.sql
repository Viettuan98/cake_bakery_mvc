-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 16, 2020 lúc 08:37 AM
-- Phiên bản máy phục vụ: 10.4.6-MariaDB
-- Phiên bản PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `php42_nguyenviettuan`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bills`
--

CREATE TABLE `bills` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_customer` int(11) DEFAULT NULL,
  `date_order` date DEFAULT NULL,
  `total` float DEFAULT NULL COMMENT 'tổng tiền',
  `payment` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'hình thức thanh toán',
  `note` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `bills`
--

INSERT INTO `bills` (`id`, `id_customer`, `date_order`, `total`, `payment`, `note`, `created_at`, `updated_at`) VALUES
(14, 14, '2017-03-23', 160000, 'COD', 'k', '2017-03-23 04:46:05', '2017-03-23 04:46:05'),
(13, 13, '2017-03-21', 400000, 'ATM', 'Vui lòng giao hàng trước 5h', '2017-03-21 07:29:31', '2017-03-21 07:29:31'),
(12, 12, '2017-03-21', 520000, 'COD', 'Vui lòng chuyển đúng hạn', '2017-03-21 07:20:07', '2017-03-21 07:20:07'),
(11, 11, '2017-03-21', 420000, 'COD', 'không chú', '2017-03-21 07:16:09', '2017-03-21 07:16:09'),
(15, 15, '2017-03-24', 220000, 'COD', 'e', '2017-03-24 07:14:32', '2017-03-24 07:14:32');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill_detail`
--

CREATE TABLE `bill_detail` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_bill` int(10) NOT NULL,
  `id_product` int(10) NOT NULL,
  `quantity` int(11) NOT NULL COMMENT 'số lượng',
  `unit_price` double NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `bill_detail`
--

INSERT INTO `bill_detail` (`id`, `id_bill`, `id_product`, `quantity`, `unit_price`, `created_at`, `updated_at`) VALUES
(18, 15, 62, 5, 220000, '2017-03-24 07:14:32', '2017-03-24 07:14:32'),
(17, 14, 2, 1, 160000, '2017-03-23 04:46:05', '2017-03-23 04:46:05'),
(16, 13, 60, 1, 200000, '2017-03-21 07:29:31', '2017-03-21 07:29:31'),
(15, 13, 59, 1, 200000, '2017-03-21 07:29:31', '2017-03-21 07:29:31'),
(14, 12, 60, 2, 200000, '2017-03-21 07:20:07', '2017-03-21 07:20:07'),
(13, 12, 61, 1, 120000, '2017-03-21 07:20:07', '2017-03-21 07:20:07'),
(12, 11, 61, 1, 120000, '2017-03-21 07:16:09', '2017-03-21 07:16:09'),
(11, 11, 57, 2, 150000, '2017-03-21 07:16:09', '2017-03-21 07:16:09');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `note` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`id`, `name`, `gender`, `email`, `address`, `phone_number`, `note`, `created_at`, `updated_at`) VALUES
(15, 'ê', 'Nữ', 'huongnguyen@gmail.com', 'e', 'e', 'e', '2017-03-24 07:14:32', '2017-03-24 07:14:32'),
(14, 'hhh', 'nam', 'huongnguyen@gmail.com', 'Lê thị riêng', '99999999999999999', 'k', '2017-03-23 04:46:05', '2017-03-23 04:46:05'),
(13, 'Hương Hương', 'Nữ', 'huongnguyenak96@gmail.com', 'Lê Thị Riêng, Quận 1', '23456789', 'Vui lòng giao hàng trước 5h', '2017-03-21 07:29:31', '2017-03-21 07:29:31'),
(12, 'Khoa phạm', 'Nam', 'khoapham@gmail.com', 'Lê thị riêng', '1234567890', 'Vui lòng chuyển đúng hạn', '2017-03-21 07:20:07', '2017-03-21 07:20:07'),
(11, 'Hương Hương', 'Nữ', 'huongnguyenak96@gmail.com', 'Lê Thị Riêng, Quận 1', '234567890-', 'không chú', '2017-03-21 07:16:09', '2017-03-21 07:16:09');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` int(10) NOT NULL,
  `title` varchar(200) NOT NULL COMMENT 'tiêu đề',
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'nội dung',
  `image` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'hình',
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `content`, `image`, `create_at`, `update_at`) VALUES
(1, 'Mùa trung thu năm nay, Hỷ Lâm Môn muốn gửi đến quý khách hàng sản phẩm mới xuất hiện lần đầu tiên tại Việt nam \"Bánh trung thu Bơ Sữa HongKong\".', '', 'Những ý tưởng dưới đây sẽ giúp bạn sắp xếp tủ quần áo trong phòng ngủ chật hẹp của mình một cách dễ dàng và hiệu quả nhất. ', 'sample1.jpg', '2019-10-13 10:01:54', '0000-00-00 00:00:00'),
(2, 'Tư vấn cải tạo phòng ngủ nhỏ sao cho thoải mái và thoáng mát', '', 'Chúng tôi sẽ tư vấn cải tạo và bố trí nội thất để giúp phòng ngủ của chàng trai độc thân thật thoải mái, thoáng mát và sáng sủa nhất. ', 'sample2.jpg', '2016-10-20 02:07:14', '0000-00-00 00:00:00'),
(3, 'Đồ gỗ nội thất và nhu cầu, xu hướng sử dụng của người dùng', '', 'Đồ gỗ nội thất ngày càng được sử dụng phổ biến nhờ vào hiệu quả mà nó mang lại cho không gian kiến trúc. Xu thế của các gia đình hiện nay là muốn đem thiên nhiên vào nhà ', 'sample3.jpg', '2016-10-20 02:07:14', '0000-00-00 00:00:00'),
(4, 'Hướng dẫn sử dụng bảo quản đồ gỗ, nội thất.', '', 'Ngày nay, xu hướng chọn vật dụng làm bằng gỗ để trang trí, sử dụng trong văn phòng, gia đình được nhiều người ưa chuộng và quan tâm. Trên thị trường có nhiều sản phẩm mẫu ', 'sample4.jpg', '2016-10-20 02:07:14', '0000-00-00 00:00:00'),
(5, 'Phong cách mới trong sử dụng đồ gỗ nội thất gia đình', '', 'Đồ gỗ nội thất gia đình ngày càng được sử dụng phổ biến nhờ vào hiệu quả mà nó mang lại cho không gian kiến trúc. Phong cách sử dụng đồ gỗ hiện nay của các gia đình hầu h ', 'sample5.jpg', '2016-10-20 02:07:14', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_type` int(10) UNSIGNED DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `unit_price` float DEFAULT NULL,
  `promotion_price` float DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `unit` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `new` tinyint(4) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `id_type`, `description`, `content`, `unit_price`, `promotion_price`, `image`, `unit`, `new`, `created_at`, `updated_at`) VALUES
(1, 'Bánh Crepe Sầu riêng', 5, '<p>B&aacute;nh crepe sầu ri&ecirc;ng nh&agrave; l&agrave;m&nbsp;</p>\r\n', '', 160000, 130000, '1570942607banh-su-kem-voi-hinh-7-chu-lun.jpg', '1', 1, '2016-10-26 03:00:16', '2016-10-24 22:11:00'),
(4, 'Bánh Crepe Đào', 5, '', '', 160000, 0, 'crepe-dao.jpg', 'hộp', 0, '2016-10-26 03:00:16', '2016-10-24 22:11:00'),
(5, 'Bánh Crepe Dâu', 5, '', '', 160000, 0, 'crepedau.jpg', 'hộp', 0, '2016-10-26 03:00:16', '2016-10-24 22:11:00'),
(6, 'Bánh Crepe Pháp', 5, '', '', 200000, 180000, 'crepe-phap.jpg', 'hộp', 0, '2016-10-26 03:00:16', '2016-10-24 22:11:00'),
(7, 'Bánh Crepe Táo', 5, '', '', 160000, 0, 'crepe-tao.jpg', 'hộp', 1, '2016-10-26 03:00:16', '2016-10-24 22:11:00'),
(8, 'Bánh Crepe Trà xanh', 5, '', '', 160000, 150000, 'crepe-traxanh.jpg', 'hộp', 0, '2016-10-26 03:00:16', '2016-10-24 22:11:00'),
(9, 'Bánh Crepe Sầu riêng và Dứa', 5, '', '', 160000, 150000, 'saurieng-dua.jpg', 'hộp', 0, '2016-10-26 03:00:16', '2016-10-24 22:11:00'),
(11, 'Bánh Gato Trái cây Việt Quất', 3, '', '', 250000, 0, '544bc48782741.png', 'cái', 0, '2016-10-12 02:00:00', '2016-10-27 02:24:00'),
(12, 'Bánh sinh nhật rau câu trái cây', 3, '', '', 200000, 180000, '210215-banh-sinh-nhat-rau-cau-body- (6).jpg', 'cái', 0, '2016-10-12 02:00:00', '2016-10-27 02:24:00'),
(13, 'Bánh kem Chocolate Dâu', 3, '', '', 300000, 280000, 'banh kem sinh nhat.jpg', 'cái', 1, '2016-10-12 02:00:00', '2016-10-27 02:24:00'),
(14, 'Bánh kem Dâu III', 3, '', '', 300000, 280000, 'Banh-kem (6).jpg', 'cái', 0, '2016-10-12 02:00:00', '2016-10-27 02:24:00'),
(15, 'Bánh kem Dâu I', 3, '', '', 350000, 320000, 'banhkem-dau.jpg', 'cái', 1, '2016-10-12 02:00:00', '2016-10-27 02:24:00'),
(16, 'Bánh trái cây II', 3, '', '', 150000, 120000, 'banhtraicay.jpg', 'hộp', 0, '2016-10-12 02:00:00', '2016-10-27 02:24:00'),
(17, 'Apple Cake', 3, '', '', 250000, 240000, 'Fruit-Cake_7979.jpg', 'cai', 0, '2016-10-12 02:00:00', '2016-10-27 02:24:00'),
(30, 'Bánh kem Chocolate Dâu I', 4, '', '', 380000, 350000, 'sli12.jpg', 'cái', 1, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(31, 'Bánh kem Trái cây I', 4, '', '', 380000, 350000, 'Fruit-Cake.jpg', 'cái', 0, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(32, 'Bánh kem Trái cây II', 4, '', '', 380000, 350000, 'Fruit-Cake_7971.jpg', 'cái', 0, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(33, 'Bánh kem Doraemon', 4, '', '', 280000, 250000, 'p1392962167_banh74.jpg', 'cái', 1, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(34, 'Bánh kem Caramen Pudding', 4, '', '', 280000, 0, 'Caramen-pudding636099031482099583.jpg', 'cái', 1, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(35, 'Bánh kem Chocolate Fruit', 4, '', '', 320000, 300000, 'chocolate-fruit636098975917921990.jpg', 'cái', 1, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(36, 'Bánh kem Coffee Chocolate GH6', 4, '', '', 320000, 300000, 'COFFE-CHOCOLATE636098977566220885.jpg', 'cái', 0, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(37, 'Bánh kem Mango Mouse', 4, '', '', 320000, 300000, 'mango-mousse-cake.jpg', 'cái', 1, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(38, 'Bánh kem Matcha Mouse', 4, '', '', 350000, 330000, 'MATCHA-MOUSSE.jpg', 'cái', 0, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(39, 'Bánh kem Flower Fruit', 4, '', '', 350000, 330000, 'flower-fruits636102461981788938.jpg', 'cái', 0, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(40, 'Bánh kem Strawberry Delight', 4, '', '', 350000, 330000, 'strawberry-delight636102445035635173.jpg', 'cái', 0, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(41, 'Bánh kem Raspberry Delight', 4, '', '', 350000, 330000, 'raspberry.jpg', 'cái', 0, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(42, 'Beefy Pizza', 6, 'Thịt bò xay, ngô, sốt BBQ, phô mai mozzarella', '', 150000, 130000, '40819_food_pizza.jpg', 'cái', 0, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(43, 'Hawaii Pizza', 6, '<p>Sốt c&agrave; chua, ham , dứa, pho mai mozzarella</p>\r\n', '', 120000, 0, '1571219766hawaii-pizza.jpg', '43', 1, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(44, 'Smoke Chicken Pizza', 6, 'Gà hun khói,nấm, sốt cà chua, pho mai mozzarella.', '', 120000, 0, 'chicken black pepper_large-900x900.jpg', 'cái', 0, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(45, 'Sausage Pizza', 6, 'Xúc xích klobasa, Nấm, Ngô, sốtcà chua, pho mai Mozzarella.', '', 120000, 0, 'pizza-miami.jpg', 'cái', 0, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(46, 'Ocean Pizza', 6, 'Tôm , mực, xào cay,ớt xanh, hành tây, cà chua, phomai mozzarella.', '', 120000, 0, 'seafood curry_large-900x900.jpg', 'cái', 0, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(47, 'All Meaty Pizza', 6, 'Ham, bacon, chorizo, pho mai mozzarella.', '', 140000, 0, 'all1).jpg', 'cái', 0, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(48, 'Tuna Pizza', 6, 'Cá Ngừ, sốt Mayonnaise,sốt càchua, hành tây, pho mai Mozzarella', '', 140000, 0, '54eaf93713081_-_07-germany-tuna.jpg', 'cái', 0, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(49, 'Bánh su kem nhân dừa', 7, '', '', 120000, 100000, 'maxresdefault.jpg', 'cái', 0, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(50, 'Bánh su kem sữa tươi', 7, '', '', 120000, 100000, 'sukem.jpg', 'cái', 0, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(51, 'Bánh su kem sữa tươi chiên giòn', 7, '', '', 150000, 0, '1434429117-banh-su-kem-chien-20.jpg', 'hộp', 0, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(52, 'Bánh su kem dâu sữa tươi', 7, '', '', 150000, 0, 'sukemdau.jpg', 'hộp', 0, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(53, 'Bánh su kem bơ sữa tươi', 7, '', '', 150000, 0, 'He-Thong-Banh-Su-Singapore-Chewy-Junior.jpg', 'hộp', 0, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(54, 'Bánh su kem nhân trái cây sữa tươi', 7, '', '', 150000, 0, '1571219543banh-su-kem-nhan-trai-cay.jpg', '54', 1, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(55, 'Bánh su kem cà phê', 7, '', '', 150000, 0, '1571216348s-product-2.jpg', '55', 0, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(56, 'Bánh su kem phô mai', 7, '', '', 150000, 0, '1571216328portfolio-8.jpg', '56', 0, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(57, 'Bánh su kem sữa tươi chocolate', 7, '', '', 150000, 0, '1571216461c-feature-6.jpg', '57', 1, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(61, 'Bánh Cupcake - Anh Quốc', 6, '<p>Những chiếc cupcake c&oacute; cấu tạo gồm phần vỏ b&aacute;nh xốp mịn v&agrave; phần kem trang tr&iacute; b&ecirc;n tr&ecirc;n rất bắt mắt với nhiều h&igrave;nh dạng v&agrave; m&agrave;u sắc kh&aacute;c nhau. Cupcake c&ograve;n được cho l&agrave; chiếc b&aacute;nh mang lại niềm vui v&agrave; tiếng cười như ch&iacute;nh h&igrave;nh d&aacute;ng đ&aacute;ng y&ecirc;u của ch&uacute;ng.</p>\r\n', '', 150000, 120000, '1571216228s-product-2.jpg', '37', 1, NULL, NULL),
(62, 'Bánh Sachertorte', 6, '<p>Sachertorte l&agrave; một loại b&aacute;nh xốp được tạo ra bởi loại&nbsp;chocholate&nbsp;tuyệt hảo nhất của nước &Aacute;o. Sachertorte c&oacute; vị ngọt nhẹ, gồm nhiều lớp b&aacute;nh được l&agrave;m từ ruột b&aacute;nh m&igrave; v&agrave; b&aacute;nh sữa chocholate, xen lẫn giữa c&aacute;c lớp b&aacute;nh l&agrave; mứt mơ. M&oacute;n b&aacute;nh chocholate n&agrave;y nổi tiếng tới mức th&agrave;nh phố Vienna của &Aacute;o đ&atilde; ấn định&nbsp;tổ chức một ng&agrave;y Sachertorte quốc gia, v&agrave;o 5/12 hằng năm</p>\r\n', '', 250000, 220000, '1570965001banh-kem-bo.jpg', '62', 0, NULL, NULL),
(63, 'TRAWBERRY HEART CAKE', 8, '<p>Th&agrave;nh phần ch&iacute;nh:</p>\r\n\r\n<p>- Gato</p>\r\n\r\n<p>- Kem tươi vị tira</p>\r\n\r\n<p>- Hoa quả theo m&ugrave;a</p>\r\n\r\n<p>B&aacute;nh l&agrave;m từ 3 lớp gato trắng&nbsp;xen giữa 3 lớp kem tươi vị tiramisu. Tr&ecirc;n mặt b&aacute;nh được trang tr&iacute; bằng hoa quả tươi theo m&ugrave;a.</p>\r\n', '', 275000, 0, '1571565929qg8a6617_a4c709dbdd674e41bfbc9337117dba34_master.jpg', '49', 1, NULL, NULL),
(64, 'BÁNH XANH TRÀ', 8, '<p>Th&agrave;nh phần ch&iacute;nh:</p>\r\n\r\n<p>- Gato,</p>\r\n\r\n<p>- Kem Tươi,</p>\r\n\r\n<p>- Tr&agrave; xanh,</p>\r\n\r\n<p>B&aacute;nh l&agrave;m từ 3 lớp gato trắng xen giữa 3 lớp kem tươi. B&ecirc;n&nbsp;ngo&agrave;i b&aacute;nh phủ 1 lớp kem tươi vị tr&agrave; xanh v&agrave; bột tr&agrave; xanh rắc ph&iacute;a tr&ecirc;n.</p>\r\n', '', 250000, 220000, '1571566054banh-tra-xanh.jpg', '49', 1, NULL, NULL),
(65, 'Bánh Trái Tim Hạnh Phúc', 8, '<p>Th&agrave;nh phần ch&iacute;nh:</p>\r\n\r\n<p>- Gato,</p>\r\n\r\n<p>- Kem&nbsp;tươi phomai vị cafe,</p>\r\n\r\n<p>- Socola,</p>\r\n\r\n<p>B&aacute;nh l&agrave;m từ 3 lớp gato trắng xen giữa 3 lớp kem . B&ecirc;n tr&ecirc;n phủ 1 lớp kem tươi phomai vị cafe v&agrave; được trang tr&iacute; bằng socola đen.&nbsp;</p>\r\n', '', 300000, 270000, '1571566230banh-traitimhanhphuc.jpg', '65', 1, NULL, NULL),
(66, 'BÁNH HOA HỒNG', 8, '<p>Th&agrave;nh phần ch&iacute;nh:</p>\r\n\r\n<p>- Gato</p>\r\n\r\n<p>- Kem tươi</p>\r\n\r\n<p>B&aacute;nh l&agrave;m từ 4 lớp gato kết hợp với 4 lớp kem. B&aacute;nh phủ b&ecirc;n ngo&agrave;i bởi 1 lớp kem tươi h&igrave;nh hoa hồng, trang tr&iacute; th&ecirc;m socola cứng v&agrave; hoa quả theo m&ugrave;a.</p>\r\n', '', 370000, 350000, '1571566346banh-hoa-hong.jpg', '46', 1, NULL, NULL),
(67, 'BÁNH TRÁI TIM ĐẶC BIỆT', 8, '<p>Th&agrave;nh phần ch&iacute;nh:</p>\r\n\r\n<p>- Gato,</p>\r\n\r\n<p>- Kem bơ,</p>\r\n\r\n<p>- Socola,</p>\r\n\r\n<p>- D&acirc;u t&acirc;y.</p>\r\n\r\n<p>B&aacute;nh l&agrave;m từ 3 lớp gato trắng xen giữa 3 lớp kem bơ. B&ecirc;n tr&ecirc;n trang tr&iacute; bằng hoa quả, socola đen.</p>\r\n', '', 320000, 0, '1571566638banh-trai-tim.jpg', '67', 1, NULL, NULL),
(68, 'CAPUCCINO', 8, '<p>Th&agrave;nh phần ch&iacute;nh:</p>\r\n\r\n<p>- Gato</p>\r\n\r\n<p>- Kem phomai vị coffee</p>\r\n\r\n<p>- Cacao.</p>\r\n\r\n<p>B&aacute;nh l&agrave;m từ 3 lớp gato xen giữa 3 lớp kem. B&ecirc;n ngo&agrave;i phủ 1 lớp kem phomai vị coffee rắc bột cacao.</p>\r\n', '', 300000, 150000, '1571827745Capuchino.jpg', '50', 0, NULL, NULL),
(69, 'DELI HEART CAKE', 8, '<p>M&Ocirc; TẢ CHUNG&nbsp;B&Igrave;NH LUẬN</p>\r\n\r\n<p>Th&agrave;nh phần ch&iacute;nh:</p>\r\n\r\n<p>- Gato</p>\r\n\r\n<p>- Kem tươi</p>\r\n\r\n<p>- Socola</p>\r\n\r\n<p>B&aacute;nh l&agrave;m từ 3 lớp gato trắng xen giữa 3 lớp kem. B&ecirc;n tr&ecirc;n phủ 1 lớp kem&nbsp;tươi phomai vị cafe&nbsp;v&agrave; được trang tr&iacute; bằng hoa quả theo m&ugrave;a.</p>\r\n', '', 270000, 250000, '1571829821abc.jpg', '50', 1, NULL, NULL),
(70, ' Bánh phù thủy halloween', 14, '<p>Th&agrave;nh phần:</p>\r\n\r\n<p>- Gato,</p>\r\n\r\n<p>- Kem tươi mặn vị Tiramisu.</p>\r\n\r\n<p>B&aacute;nh l&agrave;m từ 3 lớp gato trắng kết hợp với 3 lớp kem mặn vị Tiramisu. B&aacute;nh phủ b&ecirc;n ngo&agrave;i bởi 1 lớp kem tươi trang tr&iacute; theo chủ đề Halloween.</p>\r\n\r\n<p>Phụ kiện&nbsp;trang tr&iacute; mua ri&ecirc;ng: H&igrave;nh nộm ph&ugrave; thủy 15k/con.</p>\r\n', '', 320000, 300000, '1572168727haloween.jpg', '69', 1, NULL, NULL),
(71, 'Bánh quả bí ngô', 14, '<p>Th&agrave;nh phần:</p>\r\n\r\n<p>- Gato,</p>\r\n\r\n<p>- Kem tươi mặn vị Tiramisu.</p>\r\n\r\n<p>B&aacute;nh l&agrave;m từ 3 lớp gato trắng kết hợp với 3 lớp kem mặn vị Tiramisu. B&aacute;nh phủ b&ecirc;n ngo&agrave;i bởi 1 lớp kem tươi trang tr&iacute; theo chủ đề Halloween.</p>\r\n\r\n<p>Phụ kiện&nbsp;trang tr&iacute; mua ri&ecirc;ng: Kh&ocirc;ng c&oacute;.</p>\r\n', '', 280000, 0, '1572168862qua-bi-ngo.jpg', '37', 1, NULL, NULL),
(72, 'Bánh quả bí ngô 2', 14, '<p>Th&agrave;nh phần:</p>\r\n\r\n<p>- Gato,</p>\r\n\r\n<p>- Kem tươi mặn vị Tiramisu.</p>\r\n\r\n<p>B&aacute;nh l&agrave;m từ 3 lớp gato trắng kết hợp với 3 lớp kem mặn vị Tiramisu. B&aacute;nh phủ b&ecirc;n ngo&agrave;i bởi 1 lớp kem tươi trang tr&iacute; theo chủ đề Halloween.</p>\r\n\r\n<p>Phụ kiện&nbsp;trang tr&iacute; mua ri&ecirc;ng: Kh&ocirc;ng c&oacute;.</p>\r\n', '', 330000, 300000, '1572169507bi-ngo-2.jpg', '72', 0, NULL, NULL),
(73, 'Bánh con bọ cạp', 14, '<p>Th&agrave;nh phần:</p>\r\n\r\n<p>- Gato,</p>\r\n\r\n<p>- Kem tươi mặn vị Tiramisu.</p>\r\n\r\n<p>B&aacute;nh l&agrave;m từ 3 lớp gato trắng kết hợp với 3 lớp kem mặn vị Tiramisu. B&aacute;nh phủ b&ecirc;n ngo&agrave;i bởi 1 lớp kem tươi trang tr&iacute; theo chủ đề Halloween.</p>\r\n\r\n<p>Phụ kiện&nbsp;trang tr&iacute; mua ri&ecirc;ng: Bọ cạp trang tr&iacute; 15k/con - Quả b&iacute; 26k/quả</p>\r\n', '', 300000, 280000, '1572169123con-bo-cap.jpg', '46', 0, NULL, NULL),
(74, 'Bánh con nhện', 14, '<p>Th&agrave;nh phần:</p>\r\n\r\n<p>- Gato,</p>\r\n\r\n<p>- Kem tươi mặn vị Tiramisu.</p>\r\n\r\n<p>B&aacute;nh l&agrave;m từ 3 lớp gato trắng kết hợp với 3 lớp kem mặn vị Tiramisu. B&aacute;nh phủ b&ecirc;n ngo&agrave;i bởi 1 lớp kem tươi trang tr&iacute; theo chủ đề Halloween.</p>\r\n\r\n<p>Phụ kiện&nbsp;trang tr&iacute; mua ri&ecirc;ng: Nhện đồ chơi 15k/con.</p>\r\n', '', 250000, 0, '1572169281banhconnhen.jpg', '50', 1, NULL, NULL),
(75, 'THE QUEEN OF HALLOWEEN CAKE', 14, '<p>Th&agrave;nh phần:</p>\r\n\r\n<p>- Gato,</p>\r\n\r\n<p>- Kem tươi mặn vị Tiramisu.</p>\r\n\r\n<p>B&aacute;nh l&agrave;m từ 3 lớp gato trắng kết hợp với 3 lớp kem mặn vị Tiramisu. B&aacute;nh phủ b&ecirc;n ngo&agrave;i bởi 1 lớp kem tươi trang tr&iacute; theo chủ đề Halloween.</p>\r\n\r\n<p>Phụ kiện&nbsp;trang tr&iacute; mua ri&ecirc;ng: B&iacute; ph&ugrave; thủy 40k/quả.</p>\r\n', '', 270000, 0, '1572169397queen.jpg', '75', 0, NULL, NULL),
(76, 'Bánh trà xanh', 8, '<p>Th&agrave;nh phần ch&iacute;nh:</p>\r\n\r\n<p>- Gato,</p>\r\n\r\n<p>- Kem tươi vị rượu rum,</p>\r\n\r\n<p>- Tr&agrave; xanh.</p>\r\n\r\n<p>B&aacute;nh l&agrave;m từ 3 lớp gato trắng xen giữa 3 lớp kem tươi vị rượu rum (nho). B&ecirc;n ngo&agrave;i b&aacute;nh phủ 1 lớp kem tươi vị tr&agrave; xanh v&agrave; bột tr&agrave; xanh rắc ph&iacute;a tr&ecirc;n.</p>\r\n', '', 220000, 0, '1572170041tra-xanh.jpg', '76', 0, NULL, NULL),
(77, 'Bánh hoa quả', 8, '<p>Th&agrave;nh phần ch&iacute;nh:</p>\r\n\r\n<p>- Gato</p>\r\n\r\n<p>- Kem tươi vị rượu rum</p>\r\n\r\n<p>- Hoa quả</p>\r\n\r\n<p>- Dừa kh&ocirc;.</p>\r\n\r\n<p>B&aacute;nh l&agrave;m từ 3 lớp gato trắng xen giữa 3 lớp kem tươi vị rượu rum (nho). Tr&ecirc;n mặt b&aacute;nh được trang tr&iacute; bằng hoa quả với dừa kh&ocirc; kết xung quanh.</p>\r\n', '', 300000, 170000, '1572170144banh-hoa-qua.jpg', '77', 0, NULL, NULL),
(78, 'Bánh trà xanh chữ nhật', 8, '<p>Th&agrave;nh phần ch&iacute;nh:</p>\r\n\r\n<p>- Gato</p>\r\n\r\n<p>- Kem tươi</p>\r\n\r\n<p>- Tr&agrave; xanh</p>\r\n\r\n<p>B&aacute;nh l&agrave;m từ 3 lớp gato trắng xen giữa 3 lớp kem tươi. B&ecirc;n ngo&agrave;i b&aacute;nh phủ 1 lớp kem tươi vị tr&agrave; xanh v&agrave; bột tr&agrave; xanh rắc ph&iacute;a tr&ecirc;n.</p>\r\n', '', 400000, 370000, '1572170286tra-xanh-chunhat.jpg', '78', 0, NULL, NULL),
(79, 'Bánh hoa hồng chữ nhật', 8, '<p>Th&agrave;nh phần ch&iacute;nh:</p>\r\n\r\n<p>- Gato</p>\r\n\r\n<p>- Kem tươi&nbsp;</p>\r\n\r\n<p>B&aacute;nh l&agrave;m từ 3 lớp gato trắng kết hợp với 3 lớp kem. B&aacute;nh phủ b&ecirc;n ngo&agrave;i bởi 1 lớp kem tươi h&igrave;nh hoa hồng, trang tr&iacute; th&ecirc;m socola cứng v&agrave; hoa quả theo m&ugrave;a.</p>\r\n', '', 450000, 0, '1572170427hoahong-chunhat.jpg', '11', 0, NULL, NULL),
(80, 'TIRAMISU VUÔNG', 8, '<p>Th&agrave;nh phần ch&iacute;nh:</p>\r\n\r\n<p>- Gato,</p>\r\n\r\n<p>- Kem tươi mặn vị coffee,</p>\r\n\r\n<p>- Bột cacao.</p>\r\n\r\n<p>B&aacute;nh l&agrave;m từ 3 lớp gato trắng kết hợp với 3 lớp kem mặn vị coffee. B&aacute;nh phủ b&ecirc;n tr&ecirc;n bởi 1 lớp kem tươi rắc bột cacao.</p>\r\n', '', 320000, 0, '1572170560abc1.jpg', '32', 0, NULL, NULL),
(81, 'TIRAMISU XÙ', 8, '<p>Th&agrave;nh phần ch&iacute;nh:</p>\r\n\r\n<p>- Gato,</p>\r\n\r\n<p>- Kem tươi mặn vị coffee.</p>\r\n\r\n<p>B&aacute;nh l&agrave;m từ 3 lớp gato trắng kết hợp với 3 lớp kem mặn vị coffee. B&aacute;nh phủ b&ecirc;n ngo&agrave;i bởi 1 lớp kem tươi trắng tinh khiết.</p>\r\n', '', 270000, 0, '1572173519xu.jpg', '14', 0, NULL, NULL),
(82, 'Bánh caramen moist chocolate', 8, '<p>Th&agrave;nh phần ch&iacute;nh:</p>\r\n\r\n<p>- Gato</p>\r\n\r\n<p>- Sốt caramel</p>\r\n\r\n<p>- Kem tươi</p>\r\n\r\n<p>B&aacute;nh l&agrave;m từ 3 lớp gato socola xen giữa 3 lớp kem tươi vị socola. Phủ b&ecirc;n ngo&agrave;i l&agrave; 1 lớp sốt caramel c&oacute; vị đắng nhẹ.</p>\r\n', '', 275000, 250000, '1572173690abc2.jpg', '12', 0, NULL, NULL),
(83, 'DARK AND WHITE CHOCOLATE', 8, '<p>Th&agrave;nh phần ch&iacute;nh:</p>\r\n\r\n<p>- Gato</p>\r\n\r\n<p>- Kem tiramisu</p>\r\n\r\n<p>- Socola.</p>\r\n\r\n<p>B&aacute;nh l&agrave;m từ 3 lớp gato xen giữa 3 lớp kem. B&ecirc;n ngo&agrave;i phủ 1 lớp kem tiramisu với 1 nửa kem x&ugrave; nửa c&ograve;n lại l&agrave; socola chảy.</p>\r\n', '', 300000, 220000, '1572173888trang-den.jpg', '14', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide`
--

CREATE TABLE `slide` (
  `id` int(11) NOT NULL,
  `link` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `slide`
--

INSERT INTO `slide` (`id`, `link`, `image`) VALUES
(1, '', 'banner1.jpg'),
(2, '', 'banner2.jpg'),
(3, '', 'banner3.jpg'),
(4, '', 'banner4.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `customer_id` int(11) NOT NULL,
  `fullname` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `address` varchar(500) NOT NULL,
  `phone` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_customer`
--

INSERT INTO `tbl_customer` (`customer_id`, `fullname`, `email`, `address`, `phone`) VALUES
(1, 'Nguyễn Văn E@', 'admin1@mail.com', 'Hà Nội', '12345'),
(2, 'Nguyễn Văn abc', 'sâs@gmail.com', 'ádasdadasd', '21312312'),
(3, 'Nguyễn Văn abc123', 'adm1111in1@gmail.com', 'ádasdadasdwsss', '21312312090'),
(4, 'Nguyễn Văn Dssss', 'admin111111111@gmail.com', 'ádasdadasdwsssâsas', '21312312090030'),
(24, 'buenotuan123', 'abc123@gmail.com', 'ha noi', '21312312090121'),
(25, '', '', '', ''),
(26, 'Phùng Văn F', 'anbc@gmail.com', 'Vĩnh phúc', '0928108109');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `create_at` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '0: chưa giao hàng - 1: đã giao hàng'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `customer_id`, `create_at`, `status`) VALUES
(3, 1, '2019-08-17', 0),
(4, 2, '2019-10-26', 0),
(5, 3, '2019-10-26', 1),
(6, 4, '2019-11-02', 0),
(26, 24, '2019-11-05', 0),
(27, 25, '2019-11-05', 0),
(28, 26, '2019-11-05', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order_detail`
--

CREATE TABLE `tbl_order_detail` (
  `order_detail_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` float NOT NULL,
  `number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_order_detail`
--

INSERT INTO `tbl_order_detail` (`order_detail_id`, `order_id`, `product_id`, `price`, `number`) VALUES
(5, 3, 5, 12000000, 3),
(6, 3, 4, 13000000, 1),
(7, 5, 68, 150000, 5),
(8, 5, 69, 250000, 2),
(9, 6, 68, 150000, 1),
(10, 6, 5, 0, 1),
(11, 7, 83, 220000, 1),
(12, 7, 82, 250000, 1),
(13, 12, 82, 250000, 1),
(14, 21, 83, 220000, 1),
(15, 23, 80, 0, 1),
(16, 24, 81, 0, 1),
(17, 25, 82, 250000, 1),
(18, 26, 83, 220000, 1),
(19, 27, 83, 220000, 1),
(20, 28, 68, 150000, 1),
(21, 28, 70, 300000, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(30) NOT NULL,
  `fullname` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `fullname`, `email`, `password`) VALUES
(1, 'Nguyễn Văn A', 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(2, 'Nguyễn Văn B', 'admin1@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `type_products`
--

CREATE TABLE `type_products` (
  `id_type` int(30) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `type_products`
--

INSERT INTO `type_products` (`id_type`, `name`, `image`, `created_at`, `updated_at`) VALUES
(3, 'Bánh trái cây', 'banhtraicay.jpg', '2016-10-18 00:33:33', '2016-10-15 07:25:27'),
(4, 'Bánh Kem Bơ', '1570865229banh-kem-bo.jpg', '2016-10-26 03:29:19', '2016-10-26 02:22:22'),
(5, 'Bánh crepe', '1570865460banh-crepe.jpg', '2016-10-28 04:00:00', '2016-10-27 04:00:23'),
(6, 'Bánh Pizza', '1570864961banh-pizza.jpg', '2016-10-25 17:19:00', NULL),
(7, 'Bánh su kem ', '1570863355banh-su-kem-voi-hinh-7-chu-lun.jpg', '2016-10-25 17:19:00', NULL),
(8, 'Bánh GATEAUX', '1570864634banh-kem-tuoi.jpg', NULL, NULL),
(14, 'HALLOWEEN', '1572168508haloween.jpg', NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bills_ibfk_1` (`id_customer`);

--
-- Chỉ mục cho bảng `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bill_detail_ibfk_2` (`id_product`);

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_id_type_foreign` (`id_type`);

--
-- Chỉ mục cho bảng `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Chỉ mục cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Chỉ mục cho bảng `tbl_order_detail`
--
ALTER TABLE `tbl_order_detail`
  ADD PRIMARY KEY (`order_detail_id`);

--
-- Chỉ mục cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `type_products`
--
ALTER TABLE `type_products`
  ADD PRIMARY KEY (`id_type`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bills`
--
ALTER TABLE `bills`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `bill_detail`
--
ALTER TABLE `bill_detail`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT cho bảng `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `tbl_order_detail`
--
ALTER TABLE `tbl_order_detail`
  MODIFY `order_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `type_products`
--
ALTER TABLE `type_products`
  MODIFY `id_type` int(30) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_id_type_foreign` FOREIGN KEY (`id_type`) REFERENCES `type_products` (`id_type`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
