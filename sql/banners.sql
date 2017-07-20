-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-07-20 17:13:00
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
(2, 0, '6666', '1500388552596e1cc8c584e.jpg', NULL, 1, 1, 1, '2017-07-18 06:35:52', '2017-07-19 07:13:41'),
(3, 0, 'hi134445', 'b2aad5a03f63efc79fdbd6a56201c1725.png', 'this is url 45', 1, 1, 1, '2017-07-20 04:33:43', '2017-07-20 07:07:06'),
(4, 0, 'you', '1134434ebbea1e9b7efc3d9f509b0fd45.jpg', '1111', 1, 1, 1, '2017-07-20 04:34:38', '2017-07-20 04:34:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
