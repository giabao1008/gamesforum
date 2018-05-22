-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 22, 2018 lúc 07:38 PM
-- Phiên bản máy phục vụ: 10.1.31-MariaDB
-- Phiên bản PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `gamesforum`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL DEFAULT '',
  `body` text COLLATE utf8_vietnamese_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL DEFAULT '',
  `slug` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL DEFAULT '',
  `create_at` int(11) NOT NULL,
  `update_at` int(11) NOT NULL,
  `create_by` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `update_by` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `articles`
--

INSERT INTO `articles` (`id`, `title`, `body`, `image`, `slug`, `create_at`, `update_at`, `create_by`, `update_by`) VALUES
(1, 'Article 1 ', '<p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>', 'aaaaaaaaaaaaaaaaaaaa', '/article-1', 1527009622, 1527009622, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `auth_assignment`
--

CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('admin', '1', 1526701828);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `auth_item`
--

CREATE TABLE `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` smallint(6) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('admin', 1, NULL, NULL, NULL, 1526701546, 1526701546),
('create-post', 2, 'Tạo bài viết', NULL, NULL, 1526701130, 1526701130),
('delete-post', 2, 'Xóa danh sách', NULL, NULL, 1526701130, 1526701130),
('index-post', 2, 'Xem danh sách', NULL, NULL, 1526701130, 1526701130),
('update-post', 2, 'Sửa danh sách', NULL, NULL, 1526701130, 1526701130),
('view-post', 2, 'Xem detail', NULL, NULL, 1526701130, 1526701130);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `auth_item_child`
--

CREATE TABLE `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `auth_item_child`
--

INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
('admin', 'create-post'),
('admin', 'delete-post'),
('admin', 'index-post'),
('admin', 'update-post'),
('admin', 'view-post');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `auth_rule`
--

CREATE TABLE `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `url` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL DEFAULT 'No image',
  `status` int(11) NOT NULL DEFAULT '1' COMMENT '0 - ẩn , 1 - Active , 2 - Đã xóa ',
  `create_at` int(11) NOT NULL,
  `create_by` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `update_at` int(11) NOT NULL,
  `update_by` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `banners`
--

INSERT INTO `banners` (`id`, `url`, `image`, `status`, `create_at`, `create_by`, `update_at`, `update_by`) VALUES
(2, '/banner-1.png', 'banner1.jpg', 1, 1526913944, 'admin', 1526913944, 'admin'),
(3, '/banner-2.png', 'banner2.jpg', 1, 1526913957, 'admin', 1526913957, 'admin'),
(4, '/banner-3.png', 'banner3.jpg', 1, 1526913971, 'admin', 1526913971, 'admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `body` text COLLATE utf8_vietnamese_ci NOT NULL,
  `send_at` int(11) DEFAULT NULL,
  `is_read` int(11) DEFAULT '0' COMMENT 'Đã đọc hay chưa  0 - chưa , 1 - rồi'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `body`, `send_at`, `is_read`) VALUES
(1, 'Bùi Quang Tuyền', 'giabao1008@gmail.com', 'test', '123123', 1525799547, 0),
(2, 'Bùi Quang Tuyền', 'giabao1008@gmail.com', 'ádasda', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaa', 1526921882, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `games`
--

CREATE TABLE `games` (
  `id` int(11) NOT NULL,
  `game_type` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL DEFAULT 'undefine',
  `logo` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL DEFAULT 'undefine',
  `slug` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL DEFAULT 'undefine',
  `description` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `author` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT 'Anonymous',
  `require` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL COMMENT 'Cấu hình tối thiểu',
  `views_count` int(11) DEFAULT '0',
  `is_Hot` int(11) DEFAULT '0' COMMENT 'Là game hot hay không ? 1 -  có , 0 - không',
  `create_at` int(11) DEFAULT NULL,
  `update_at` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `create_by` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `download` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `games`
--

INSERT INTO `games` (`id`, `game_type`, `name`, `logo`, `slug`, `description`, `author`, `require`, `views_count`, `is_Hot`, `create_at`, `update_at`, `status`, `create_by`, `download`) VALUES
(4, 9, 'Nhập vai  1', 'c1.jpg', 'game-nhap-vai', '<p>L&agrave; game nhập vai</p>', 'Bùi Quang Tuyền', '<p>Cấu h&igrave;nh đ&eacute;o n&agrave;o cũng chơi được</p>', 12312313, 1, 1231212, 1231231, NULL, 'admin', NULL),
(5, 9, 'Nhập vai  2', 'g5.jpg', '/game-nhap-vai-2', '<p>Test c&aacute;i n&agrave;y một t&iacute; nhỉ ??&nbsp;</p>', 'Bùi Quang Tuyền', '<p>Cấu h&igrave;nh đ&eacute;o n&agrave;o cũng chơi được m&agrave;&nbsp;</p>', 0, 1, 1526919570, 1526919570, 1, 'admin', NULL),
(6, 13, 'Nhất Thống  1 ', 'c1.jpg', '/nhat-thong-1', '<p>Test nhất thống 1&nbsp;</p>', 'Bùi Quang Tuyền', '<p>Ram 120 GB</p>', 0, 1, 1527000127, 1527000127, 1, 'admin', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `game_type`
--

CREATE TABLE `game_type` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL DEFAULT 'No Logo',
  `type` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `game_type`
--

INSERT INTO `game_type` (`id`, `name`, `logo`, `type`) VALUES
(9, 'Game Nhập vai', 'g6.jpg', '1'),
(10, 'Game Chiến thuật', 'tg2.jpg', '1'),
(11, 'Game Hại não', 'tg2.jpg', '1'),
(12, 'Game Bổ não', 'g7big.jpg', '0'),
(13, 'Nhất Thống Thiên Hạ', 'c2.jpg', '1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_vietnamese_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `create_at` int(11) NOT NULL,
  `update_at` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '10' COMMENT '0- khóa / 10 Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) COLLATE utf8_vietnamese_ci NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1525841695),
('m130524_201442_init', 1526698460),
('m140506_102106_rbac_init', 1526700276),
('m170907_052038_rbac_add_index_on_auth_assignment_user_id', 1526700277),
('m180508_021604_create_game_type_table', 1525795922),
('m180508_021841_create_contacts_table', 1525795922),
('m180508_022309_create_banners_table', 1526698460),
('m180508_022648_create_members_table', 1526698460),
('m180508_023721_create_games_table', 1526698460),
('m180521_131737_create_articles_table', 1527006449),
('m180522_162648_add_download_column_to_games_table', 1527006449);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'b851-cFT4MT0ssNDwnuDxeqYU7LZ4JE_', '$2y$13$QtQGkGPqScDjxD9TKj3GOu9N4YuiHwHQESkq5K8hb6Y.bZFnHXkMW', NULL, 'giabao1008@gmail.com', 10, 1526698591, 1526922441),
(4, 'test', 'rVFKrIAmoXRQV6oW4o9ptTD-MyXc0Pa1', '$2y$13$M7rRZEOfIFVxyPJKgA88F.NmEAd9LcJoFqe61pEyCIu06dduoJZQe', NULL, 'tuyenbq@peacesoft.net', 10, 1526922487, 1526999973);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD PRIMARY KEY (`item_name`,`user_id`),
  ADD KEY `auth_assignment_user_id_idx` (`user_id`);

--
-- Chỉ mục cho bảng `auth_item`
--
ALTER TABLE `auth_item`
  ADD PRIMARY KEY (`name`),
  ADD KEY `rule_name` (`rule_name`),
  ADD KEY `idx-auth_item-type` (`type`);

--
-- Chỉ mục cho bảng `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- Chỉ mục cho bảng `auth_rule`
--
ALTER TABLE `auth_rule`
  ADD PRIMARY KEY (`name`);

--
-- Chỉ mục cho bảng `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `idx-games-game_type` (`game_type`);

--
-- Chỉ mục cho bảng `game_type`
--
ALTER TABLE `game_type`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- Chỉ mục cho bảng `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `games`
--
ALTER TABLE `games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `game_type`
--
ALTER TABLE `game_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `auth_item`
--
ALTER TABLE `auth_item`
  ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `games`
--
ALTER TABLE `games`
  ADD CONSTRAINT `fk-games-game_type` FOREIGN KEY (`game_type`) REFERENCES `game_type` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
