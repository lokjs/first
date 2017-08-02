-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-08-02 16:10:22
-- 服务器版本： 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- 表的结构 `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `del` int(11) NOT NULL DEFAULT '0',
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pic` text,
  `rtp` int(11) NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `admins`
--

INSERT INTO `admins` (`id`, `del`, `email`, `password`, `name`, `pic`, `rtp`, `remember_token`, `ip`, `created_at`, `updated_at`) VALUES
(1, 0, 'admin', '$2y$10$IEdHdAywGo50b5.K7lxS9enXwVl4yy0GTlUdZ74zadc5EnXqlx7ii', 'hello', '116da3f4932fa0984e91285bc08ed1785.jpg', 1, 'tffbQlM85Grjn6t4f2CbQ46shzRFd8gP9ffVPVIOkeYW95v4owIEuGwqZxf0', '::1', '2017-07-08 23:08:35', '2017-08-02 04:42:36'),
(2, 1, 'ray', '$2y$10$yoqcpaenXiPq7uk.ruZX8.Cg1fWUBPU7XRe7dYBN1onfvwcjD7luC', '帅哥人', 'd6074d2a67a1ef925f82929fb5c583a05.jpg', 0, 'KQl79bAWRWpoZEo1WG0fwKOuoCax9Uso0SGotcUujdPaPkQTuBhpCHhR673u', '::1', '2017-07-08 23:09:48', '2017-07-24 06:42:40'),
(3, 0, '123', '$2y$10$MhkD7hTNNuKphAuqo1W6.u50pWLFBlht83VTltkAtJJzHY483UYnu', 'kk', 'f1a804298435ce4f783e6f047bc722a95.jpg', 0, NULL, NULL, '2017-07-23 06:28:14', '2017-07-23 06:28:14'),
(4, 1, 'test', '$2y$10$crY/boMeWWwImxAFrL/XFeHA8033446UNm7BCV4dSo7rowwNTewD6', 't', '258411faf222ed612dcaabef10cbf8b75.jpg', 1, NULL, NULL, '2017-07-24 05:30:37', '2017-07-24 06:40:05'),
(5, 0, '444', '$2y$10$r.HHY4jEi8Ta80nPzppPnOSHOLrsrEvLhydh/t8ceTTelp0Nh2qZm', '444', '2de67e264ac343d594ed694f447dcd8a5.jpg', 1, NULL, NULL, '2017-07-24 05:36:51', '2017-07-24 05:36:51'),
(6, 1, 'try', '$2y$10$SUe/4fJvRuEtrl4xtoOhLecRk/OK/pkT4qMucBPr3gkTyRXDwYI6G', 'try', '0dd6388f2df36bbc0ac1eabeb5e370955.jpg', 1, NULL, NULL, '2017-07-24 05:37:40', '2017-07-24 06:40:44');

-- --------------------------------------------------------

--
-- 表的结构 `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `del` int(11) NOT NULL DEFAULT '0',
  `title` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pic` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_author` int(11) NOT NULL,
  `update_author` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `articles`
--

INSERT INTO `articles` (`id`, `del`, `title`, `pic`, `content`, `create_author`, `update_author`, `created_at`, `updated_at`) VALUES
(1, 0, '我的案例-你才是傻逼', '2ff058c1c33fa587d6b524f53823a9205.jpg', '<p><strong>hi，你个傻逼</strong>你才是傻逼</p>', 1, 1, '2017-07-21 22:54:25', '2017-07-22 00:13:09'),
(2, 0, 'test111', '500b68e68a5450c518839a294a76c75d5.png', '<p>11111xzczxc</p>', 1, 1, '2017-07-22 00:53:26', '2017-07-22 01:23:29');

-- --------------------------------------------------------

--
-- 表的结构 `banners`
--

CREATE TABLE `banners` (
  `id` int(10) UNSIGNED NOT NULL,
  `del` int(11) NOT NULL DEFAULT '0',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_show` int(11) NOT NULL,
  `create_author` int(11) NOT NULL,
  `update_author` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `banners`
--

INSERT INTO `banners` (`id`, `del`, `title`, `pic`, `url`, `is_show`, `create_author`, `update_author`, `created_at`, `updated_at`) VALUES
(1, 1, '123', '1500386427596e147b32e4d.jpg', '123', 1, 1, 1, '2017-07-18 06:00:27', '2017-07-20 07:03:13'),
(2, 1, '6666', '1500388552596e1cc8c584e.jpg', NULL, 1, 1, 1, '2017-07-18 06:35:52', '2017-07-21 17:59:11'),
(3, 0, 'hi134445', 'b2aad5a03f63efc79fdbd6a56201c1725.png', 'this is url 45', 1, 1, 1, '2017-07-20 04:33:43', '2017-07-20 07:07:06'),
(4, 0, 'you', '1134434ebbea1e9b7efc3d9f509b0fd45.jpg', '1111', 1, 1, 1, '2017-07-20 04:34:38', '2017-07-20 04:34:38'),
(5, 0, 'TEST', '1d15800fd3c8701b0d216126dac995225.jpg', 'http://www.baidu.com', 0, 1, 1, '2017-07-21 17:59:50', '2017-07-21 17:59:50'),
(6, 0, 'TEST', 'c2e6cc2b218a175f3d2299882633bc8d5.png', 'TEST1111', 0, 1, 1, '2017-07-21 18:00:06', '2017-07-21 18:00:06'),
(7, 0, '1111', '70e44fe4ff38cec021e71d2bde6eb7645.jpg', NULL, 0, 1, 1, '2017-07-21 22:50:37', '2017-07-21 22:50:37');

-- --------------------------------------------------------

--
-- 表的结构 `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `del` int(11) NOT NULL DEFAULT '0',
  `title` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lxwm` text COLLATE utf8mb4_unicode_ci,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `x` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `y` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_author` int(11) NOT NULL,
  `update_author` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `contacts`
--

INSERT INTO `contacts` (`id`, `del`, `title`, `lxwm`, `content`, `x`, `y`, `create_author`, `update_author`, `created_at`, `updated_at`) VALUES
(1, 0, '德润公司', NULL, '<p>手机号码：13713868741</p>\r\n\r\n<p>联系邮箱：758969123@qq.com</p>\r\n\r\n<p>联系电话：0755-****</p>\r\n\r\n<p>联系地址：深圳市龙岗区***</p>', '113.982267', '22.541327', 1, 1, '2017-07-21 22:54:25', '2017-08-02 04:57:07');

-- --------------------------------------------------------

--
-- 表的结构 `feedback`
--

CREATE TABLE `feedback` (
  `id` int(10) UNSIGNED NOT NULL,
  `del` int(11) NOT NULL DEFAULT '0',
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) DEFAULT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_read` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `feedback`
--

INSERT INTO `feedback` (`id`, `del`, `name`, `phone`, `title`, `content`, `is_read`, `created_at`, `updated_at`) VALUES
(1, 1, '1', 123, '123', '1500386427596e147b32e4d.jpg', 0, '2017-07-18 06:00:27', '2017-07-20 07:03:13'),
(2, 1, '1', NULL, '6666', '1500388552596e1cc8c584e.jpg', 0, '2017-07-18 06:35:52', '2017-07-21 17:59:11'),
(3, 0, '1', 0, 'hi134445', 'b2aad5a03f63efc79fdbd6a56201c1725.png', 0, '2017-07-20 04:33:43', '2017-07-20 07:07:06'),
(4, 0, '1', 1111, 'you', '1134434ebbea1e9b7efc3d9f509b0fd45.jpg', 0, '2017-07-20 04:34:38', '2017-07-20 04:34:38'),
(5, 0, '0', 0, 'TEST', '1d15800fd3c8701b0d216126dac995225.jpg', 0, '2017-07-21 17:59:50', '2017-07-21 17:59:50'),
(6, 0, '0', 0, 'TEST', 'c2e6cc2b218a175f3d2299882633bc8d5.png', 0, '2017-07-21 18:00:06', '2017-07-21 18:00:06'),
(7, 0, '0', NULL, '1111', '70e44fe4ff38cec021e71d2bde6eb7645.jpg', 1, '2017-07-21 22:50:37', '2017-07-22 18:42:37');

-- --------------------------------------------------------

--
-- 表的结构 `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2017_07_16_145201_banner', 1),
(2, '2017_07_22_052421_create_articles_table', 2);

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'ray', '758969123@qq.com', '$2y$10$KIhjzUi8kAzi3Q85/9spL.uj40I0E/f0gYwO/YkIsbsE5szuK7y7W', '23TkbYVWuQbdLu7dxY51vM6RncDy5WiAQl7xsQIrugK24f5jOojs9aTUkGPK', '2017-07-08 23:09:48', '2017-07-08 23:09:48');

-- --------------------------------------------------------

--
-- 表的结构 `webconfig`
--

CREATE TABLE `webconfig` (
  `id` int(11) NOT NULL,
  `del` int(11) NOT NULL DEFAULT '0',
  `title` text CHARACTER SET utf8mb4,
  `keywords` text CHARACTER SET utf8mb4,
  `description` text CHARACTER SET utf8mb4,
  `bnumber` text CHARACTER SET utf8mb4 NOT NULL,
  `create_author` int(11) NOT NULL,
  `update_author` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `webconfig`
--

INSERT INTO `webconfig` (`id`, `del`, `title`, `keywords`, `description`, `bnumber`, `create_author`, `update_author`, `created_at`, `updated_at`) VALUES
(1, 0, '德润公司-建筑公司', '关键词', '描述', '备案号', 1, 1, '2017-07-29 16:00:00', '2017-07-29 20:03:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `webconfig`
--
ALTER TABLE `webconfig`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- 使用表AUTO_INCREMENT `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- 使用表AUTO_INCREMENT `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- 使用表AUTO_INCREMENT `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- 使用表AUTO_INCREMENT `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- 使用表AUTO_INCREMENT `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- 使用表AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- 使用表AUTO_INCREMENT `webconfig`
--
ALTER TABLE `webconfig`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
