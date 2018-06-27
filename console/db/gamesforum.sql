-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 27, 2018 lúc 02:58 PM
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
  `update_by` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `articles` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `views_count` int(11) DEFAULT NULL,
  `like` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `articles`
--

INSERT INTO `articles` (`id`, `title`, `body`, `image`, `slug`, `create_at`, `update_at`, `create_by`, `update_by`, `desc`, `articles`, `views_count`, `like`) VALUES
(2, 'ARURF sẽ được mở trong cuối tuần (26/05- 4:00 ngày 28/05)', '<p>Ch&agrave;o mọi người,</p>\r\n<p>R&otilde; r&agrave;ng l&agrave; giải Clash đầu ti&ecirc;n n&agrave;y đ&atilde; kh&ocirc;ng được như mong đợi. D&ugrave; kh&ocirc;ng thể ho&agrave;n to&agrave;n thay thế, nhưng ch&uacute;ng t&ocirc;i sẽ mở chế độ ARURF trong suốt cuối tuần.</p>\r\n<p>C&oacute; lẽ đ&acirc;y kh&ocirc;ng phải trải nghiệm cạnh tranh bạn đang tr&ocirc;ng đợi, nhưng, bằng khả năng của m&igrave;nh, ch&uacute;ng t&ocirc;i muốn đem lại cho bạn v&agrave; bạn b&egrave; thứ g&igrave; đ&oacute; mới mẻ để kh&aacute;m ph&aacute; v&agrave; tận hưởng trong thời gian ch&uacute;ng t&ocirc;i t&igrave;m hiểu v&agrave; đưa ra giải ph&aacute;p cho việc ho&atilde;n giải Clash lần n&agrave;y. Trong số c&aacute;c chế độ thường xuy&ecirc;n được người chơi y&ecirc;u cầu, ch&uacute;ng t&ocirc;i thấy ARURF l&agrave; thứ ph&ugrave; hợp nhất hiện tại.</p>\r\n<p><strong>Xin n&oacute;i r&otilde;, giải quyết vấn đề với Clash vẫn l&agrave; ưu ti&ecirc;n h&agrave;ng đầu của ch&uacute;ng t&ocirc;i.</strong>&nbsp;ARURF chỉ l&agrave; một phần trong những g&igrave; ch&uacute;ng t&ocirc;i đưa ra để b&ugrave; đắp cho người chơi, v&agrave; ch&uacute;ng t&ocirc;i đang c&acirc;n nhắc c&aacute;c lựa chọn đối với những người chơi bị ảnh hưởng.</p>\r\n<p>Chế độ ARURF sẽ k&eacute;o d&agrave;i suốt cuối tuần cho&nbsp;đến&nbsp;<strong><del>18:00</del>&nbsp;4:00 thứ Hai, 28/05/2018.<span style=\"color: #ff0000;\">&nbsp;(Ch&acirc;n th&agrave;nh xin lỗi c&aacute;c bạn v&igrave; chế độ phải đ&oacute;ng sớm hơn dự kiến)</span></strong></p>\r\n<p><strong>Lưu &yacute;:&nbsp;</strong>Ch&uacute;ng t&ocirc;i mở chế độ n&agrave;y ra trước so với lịch tr&igrave;nh n&ecirc;n c&oacute; thể sẽ c&oacute; một số lỗi hoặc tương t&aacute;c lạ. Do đ&oacute;, ban đầu ch&uacute;ng t&ocirc;i sẽ tắt một số ngọc v&agrave; tướng.</p>\r\n<p>Ch&uacute;ng t&ocirc;i sẽ c&oacute; th&ecirc;m th&ocirc;ng tin về kế hoạch tiếp theo cho Clash những ng&agrave;y tới, c&ograve;n trong l&uacute;c n&agrave;y, c&ugrave;ng xả chi&ecirc;u với ARURF đi n&agrave;o!</p>', '6638_1.jpg', 'lien-minh-huyen-thoai', 1527677324, 1527677324, 'admin', 'admin', 'ARURF sẽ được mở trong cuối tuần (26/05 tới 4:00 ngày 28/05)', NULL, 31, NULL);

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
('admin', '1', 1526701828),
('post', '10', 1528454156),
('post', '3', 1528357267);

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
('post', 1, NULL, NULL, NULL, 1528357267, 1528357267),
('update-post', 2, 'Sửa danh sách', NULL, NULL, 1526701130, 1526701130),
('upload-post', 2, 'Thành viên đăng bài', NULL, NULL, 1528357267, 1528357267),
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
('admin', 'view-post'),
('post', 'upload-post');

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
(2, '/banner-1.png', 'banner1.jpg', 0, 1526913944, 'admin', 1527677723, 'admin'),
(4, '/banner-3.png', 'banner3.jpg', 0, 1526913971, 'admin', 1527677737, 'admin'),
(5, 'banner', 'banner.jpg', 1, 1527065234, 'admin', 1527065234, 'admin'),
(6, 'banner', 'banner1.png', 1, 1527065254, 'admin', 1527065254, 'admin'),
(11, 'dota2banner', 'banner2.jpg', 1, 1527065402, 'admin', 1527065402, 'admin');

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
(1, 'Bùi Quang Tuyền', 'giabao1008@gmail.com', 'test', '123123', 1525799547, 1),
(2, 'Bùi Quang Tuyền', 'giabao1008@gmail.com', 'ádasda', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaa', 1526921882, 1),
(3, 'Bùi Quang Tuyền', 'giabao1008@gmail.com', 'ádasdasdasd', 'qưdasdas', 1527078348, 1);

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
  `download` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `like` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `games`
--

INSERT INTO `games` (`id`, `game_type`, `name`, `logo`, `slug`, `description`, `author`, `require`, `views_count`, `is_Hot`, `create_at`, `update_at`, `status`, `create_by`, `download`, `like`) VALUES
(8, 9, 'Cửu Âm VNG', 'Cửu Âm VNG.jpg', 'cuu-am-vng', '<p>Ra mắt v&agrave;o th&aacute;ng 06/2016 Cửu &Acirc;m VNG&nbsp;phi&ecirc;n bản mobile ngay lập tức trở th&agrave;nh bom tấn thu h&uacute;t h&agrave;ng triệu lượt tải v&agrave; trải nghiệm.</p>', '', '<p>Cửu &Acirc;m VNG</p>', 0, NULL, 1527061881, 1527061881, 1, 'admin', '', 0),
(9, 9, 'Tây Du Chi Lộ', 'Tây Du Chi Lộ.jpg', 'tay-du-chi-lo', '<p>T&acirc;y Du Chi Lộ</p>', '', '<p>T&acirc;y Du Chi Lộ</p>', 0, NULL, 1527062127, 1527062127, 1, 'admin', '', 0),
(10, 9, 'Assasin\'s Creed', 'Assasin \'s Creed.jpg', 'Assasin\'s-Creed', '<p>Assasin\'s Creed</p>', '', '<p>Assasin\'s Creed</p>', 0, 1, 1527062640, 1527062640, 1, 'admin', '', 0),
(11, 10, 'Empire Warriors TD', 'Empire Warriors TD.jpg', 'Empire-Warriors-TD', '<h2><span id=\"Empire_Warriors_TD\" class=\"ez-toc-section\">Empire Warriors TD</span></h2>', '', '<h2><span id=\"Empire_Warriors_TD\" class=\"ez-toc-section\">Empire Warriors TD</span></h2>', 0, NULL, 1527062696, 1527062696, 1, 'admin', '', 0),
(12, 10, 'Plants vs. Zombies', 'Plants vs. Zombies.jpg', 'Plants-vs-Zombies', '<h2><span id=\"Plants_vs_Zombies\" class=\"ez-toc-section\">Plants vs. Zombies</span></h2>', '', '<h2><span id=\"Plants_vs_Zombies\" class=\"ez-toc-section\">Plants vs. Zombies</span></h2>', 0, NULL, 1527062733, 1527062733, 1, 'admin', '', 0),
(13, 10, 'City Island 4 Sim Town Village', 'City Island 4 Sim Town Village.png', 'City-Island-4-Sim-Town-Village', '<h2><span id=\"City_Island_4_Sim_Town_Village\" class=\"ez-toc-section\">City Island 4 Sim Town Village</span></h2>', '', '<h2><span id=\"City_Island_4_Sim_Town_Village\" class=\"ez-toc-section\">City Island 4 Sim Town Village</span></h2>', 0, NULL, 1527062825, 1527062825, 1, 'admin', '', 0),
(14, 12, 'Temple Run', 'Temple run.jpg', 'Temple-run', '<p>Temple run</p>', '', '<p>Temple run</p>', 0, NULL, 1527063155, 1527063155, 1, 'admin', '', 0),
(15, 12, 'Beach Buggy Blitz', 'Beach Buggy Blitz.jpg', 'Beach-Buggy-Blitz', '<p><strong>Beach Buggy Blitz</strong></p>', '', '<p><strong>Beach Buggy Blitz</strong></p>', 0, NULL, 1527063193, 1527063193, 1, 'admin', '', 0),
(16, 12, 'AU Speed', 'AU Speed.jpg', 'AU-Speed', '<p><strong>AU Speed</strong></p>', '', '<p><strong>AU Speed</strong></p>', 0, NULL, 1527063219, 1527063219, 1, 'admin', '', 0),
(17, 12, 'Hill Climb Racing', 'Hill Climb Racing.jpg', 'Hill-Climb-Racing', '<p><strong>Hill Climb Racing</strong></p>', '', '<p><strong>Hill Climb Racing</strong></p>', 0, NULL, 1527063253, 1527063253, 1, 'admin', '', 0),
(18, 14, 'Fifa 18', 'Fifa 18.jpg', 'Fifa 18', '<p>Fifa 18</p>', '', '<p>Fifa 18</p>', 0, NULL, 1527063696, 1527063696, 1, 'admin', '', 0),
(19, 14, 'NBA 2K18', 'NBA 2K18.jpg', 'NBA 2K18', '<p><strong>NBA 2K18</strong></p>', '', '<p>NBA 2K18</p>', 0, NULL, 1527063739, 1527063739, 1, 'admin', '', 0),
(20, 14, 'WWE 2K18', 'WWE 2K18.png', 'WWE 2K18', '<p>WWE 2K18</p>', '', '<p>WWE 2K18</p>', 0, NULL, 1527063805, 1527063805, 1, 'admin', '', 0),
(21, 15, 'Counter-Strike 1.1', 'Counter-Strike 1.1.jpg', 'Counter-Strike 1.1', '<p>Counter-Strike 1.1</p>', '', '<p>Counter-Strike 1.1</p>', 0, NULL, 1527063955, 1527063955, 1, 'admin', '', 0),
(22, 15, 'Đột Kích', 'Đột kích.jpg', 'Đột Kích', '<p>Đột K&iacute;ch</p>', '', '<p>Đột K&iacute;ch</p>', 0, NULL, 1527064056, 1527064056, 1, 'admin', '', 0),
(23, 15, 'CS GO', 'CS GO.jpg', 'CS GO', '<p>CS GO</p>', '', '<p>CS GO</p>', 0, NULL, 1527064099, 1527064099, 1, 'admin', '', 0),
(24, 16, 'Age of Empires', 'Age of Empires.jpg', 'Age of Empires', '<h2>Age of Empires</h2>', '', '<h2>Age of Empires</h2>', 0, NULL, 1527064245, 1527064245, 1, 'admin', '', 0),
(25, 16, 'Warcraft 3', 'Warcraft 3.jpg', 'Warcraft 3', '<h2>Warcraft 3</h2>', '', '<h2>Warcraft 3</h2>', 0, NULL, 1527064310, 1527064310, 1, 'admin', '', 0),
(26, 16, 'Starcraft 2', 'Starcraft 2.jpg', 'Starcraft 2', '<h2>Starcraft 2</h2>', '', '<h2>Starcraft 2</h2>', 0, NULL, 1527064385, 1527064385, 1, 'admin', '', 0),
(27, 17, 'Dota 2', 'Dota 2.jpg', 'Dota', '<p>Dota 2</p>', '', '<p>Dota 2</p>', 2, NULL, 1527064567, 1527064567, 1, 'admin', '', 0),
(28, 17, 'Liên minh huyền thoại', 'Liên minh huyền thoại.jpg', 'lien-minh-huyen-thoai', '<p>Li&ecirc;n minh huyền thoại</p>', '', '<p>Li&ecirc;n minh huyền thoại</p>', 41, NULL, 1527064632, 1527064632, 1, 'admin', '', 0),
(29, 9, 'Bùi Quang Tuyền test Tên', 't2.jpg', '/game-nhap-vai', '<p>test game</p>', 'Bùi Quang Tuyền', '<p>b&ugrave;i quang tuyền</p>', 0, 1, 1528458916, 1528458916, 0, 'testpost', '/test-link-download', NULL);

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
(9, 'Game Nhập Vai', 'gamenhapvai.jpg', '1'),
(10, 'Game Chiến Thuật', 'gamechienthuat.jpg', '1'),
(12, 'Game Casual', 'gameCasual.jpg', '0'),
(14, 'Game Thể  thao', 'gamesport.jpg', '1'),
(15, 'Game FPS', 'gamefps.jpg', '1'),
(16, 'Game RTS ', 'gamethoigianthuc.jpg', '1'),
(17, 'Game Moba', 'gamemoba.jpg', '1');

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
('m180522_162648_add_download_column_to_games_table', 1527006449),
('m180523_085040_add_desc_column_to_articles_table', 1527076881),
('m180523_120053_add_title_column_to_articles_table', 1527076881),
('m180608_034621_add_views_count_column_to_articles_table', 1528429603),
('m180608_034711_add_likes_column_to_articles_table', 1528429704),
('m180608_034904_add_likes_column_to_games_table', 1528429750);

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
(7, 'giabao1008', 'H5lpexUcGON4gGrOR6cKgE1CfRrwmcGn', '$2y$13$QtQGkGPqScDjxD9TKj3GOu9N4YuiHwHQESkq5K8hb6Y.bZFnHXkMW', NULL, 'giabao1008@gmail.com1', 10, 1528379501, 1528379501),
(8, '12345', 'GAoyr-ylsNvZ7sZ07u49xDZ-jkV0rD79', '$2y$13$Cb.YdLAbwEeHAn0SMnxss.4qxaEgSpqnrun31bQzMoUtMCTCDkzsO', NULL, '123456@gmail.com', 10, 1528426891, 1528426891),
(9, 'testlogin', 'EAtnOp3PcfhBQ3LOZo5YlcLDehT0OzOy', '$2y$13$.TWOvcynp6BgeKoxB9FkPuCkGoddNr5keyQQwMLF5GuDgbU2Zhay6', NULL, 'testlogin@gmail.com', 10, 1528427626, 1528427626),
(10, 'testpost', 'jYnIBMKddyKO03lXJmL8bur8CYcnSRRl', '$2y$13$Ot1O1RtCKdFB4LAOWu/AZuaQvoc2ZZGJnff5tc.CycsdUprNr2eSm', NULL, 'testpost@gmail.com', 10, 1528454156, 1528454156);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `games`
--
ALTER TABLE `games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `game_type`
--
ALTER TABLE `game_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
