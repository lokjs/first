-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-08-06 16:17:00
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
(1, 0, 'admin', '$2y$10$IEdHdAywGo50b5.K7lxS9enXwVl4yy0GTlUdZ74zadc5EnXqlx7ii', 'hello', '96a12183a838d1de1beda07aaba8e1df5.png', 1, 'tffbQlM85Grjn6t4f2CbQ46shzRFd8gP9ffVPVIOkeYW95v4owIEuGwqZxf0', '::1', '2017-07-08 23:08:35', '2017-08-06 01:26:48'),
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
  `author` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `pic` text COLLATE utf8mb4_unicode_ci,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_author` int(11) NOT NULL,
  `update_author` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `articles`
--

INSERT INTO `articles` (`id`, `del`, `title`, `author`, `type`, `pic`, `content`, `create_author`, `update_author`, `created_at`, `updated_at`) VALUES
(1, 0, '住房和城乡建设部关于召开《混凝土结构设计规》', '瑞德', 3, '2ff058c1c33fa587d6b524f53823a9205.jpg', '<p style="margin: 0px; padding: 0px; list-style: none; color: rgb(17, 17, 17); font-family: 微软雅黑; font-size: 12px; line-height: 26px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 建标实函[2011]57号</p>\r\n\r\n<div style="margin: 0px; padding: 0px; list-style: none; color: rgb(77, 77, 77); font-family: Arial, Helvetica, sans-serif, 新宋体; font-size: 12px; line-height: 21.600000381469727px;">\r\n<div class="union" style="margin: 0px; padding: 0px; list-style: none;">\r\n<p style="margin: 0px; padding: 0px; list-style: none; color: rgb(17, 17, 17); font-family: 微软雅黑; line-height: 26px;">各省、自治区、直辖市住房和城乡建设厅（委、局），新疆生产建设兵团建设局：<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n新修订的《混凝土结构设计规范》GB50010-2010，已于2010年8月由我部批准发布，并将于2011年7月1日起实施。为做好该规范的贯彻 实施工作，经研究，定于2011年6月24～25日召开宣贯会，请各省级住房城乡建设主管部门组织有关人员（每省名额不超过5人）参加会议。现将会议的有 关事宜通知如下：<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n一、会议时间：2011年6月24～25日，23日报到。<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n二、会议地点：建银饭店（北京市西站南路2号，电话：010-63266633）<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n三、联系人和电话<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n1、住房和城乡建设部标准定额司　杨申武<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n电话：010-58933022，传真：010-58933901<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n2、中国建筑科学研究院　张华英<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n电话：010-64517506，传真：010-84281347<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n四、会议费500元/人，会议提供相关资料，资料费实收，交通和食宿费用自理。<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n五、其它<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n1、承办单位：中国建筑科学研究院。<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n2、参加培训的技术人员，如需培训合格证，请自带1寸彩色照片2张。<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n3、请各省级住房和城乡建设行政主管部门统一组织参会人员报名，会议回执（附件）于2011年6月20日前传真至中国建筑科学研究院。</p>\r\n\r\n<p style="margin: 0px; padding: 0px; list-style: none; color: rgb(17, 17, 17); font-family: 微软雅黑; line-height: 26px;">&nbsp;</p>\r\n\r\n<p style="margin: 0px; padding: 0px; list-style: none; color: rgb(17, 17, 17); font-family: 微软雅黑; line-height: 26px;">&nbsp;</p>\r\n\r\n<p align="center" style="margin: 0px; padding: 0px; list-style: none; color: rgb(17, 17, 17); font-family: 微软雅黑; line-height: 26px;">中华人民共和国住房和城乡建设部标准定额司<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n二〇一一年五月三十日</p>\r\n</div>\r\n</div>', 1, 1, '2017-07-21 22:54:25', '2017-08-05 04:30:50'),
(2, 0, '祝贺我司与魔力方格达成战略合作', '德瑞', 1, '500b68e68a5450c518839a294a76c75d5.png', '<p>祝贺我司与魔力方格达成战略合作</p>', 1, 1, '2017-07-22 00:53:26', '2017-08-05 04:36:35'),
(3, 0, '深圳建筑资质转让需要提交哪些资料？', '德瑞', 2, NULL, '<p><span style="color: rgb(17, 17, 17); font-family: 微软雅黑; font-size: 12px; line-height: 26px;">&nbsp; &nbsp; &nbsp; &nbsp;人尽皆知的是，任何一项建筑项目在正式施工之前都必须办理相应的施工&ldquo;通行证&rdquo;&mdash;&mdash;建筑资质。其实，对于建筑行业而言，办理建筑资质是必不可少的，而且不仅仅要办理相应的资质，同时还务必保证及时办理，因为必须办理好建筑施工资质之后才可以进行相应的施工工程。而现如今，深圳建筑资质转让也成为一个十分热门的话题。其实资质转让指的就是改变其法人以及股东。那么，深圳建筑资质转让需要提交哪些资料？&nbsp;深圳建筑资质转让需要提交的资料如下所示。&nbsp;</span><br style="margin: 0px; padding: 0px; list-style: none; color: rgb(17, 17, 17); font-family: 微软雅黑; font-size: 12px; line-height: 26px;" />\r\n<span style="color: rgb(17, 17, 17); font-family: 微软雅黑; font-size: 12px; line-height: 26px;">&nbsp; &nbsp; &nbsp; &nbsp; 1、建筑业企业资质证书变更申请审核表。&nbsp;</span><br style="margin: 0px; padding: 0px; list-style: none; color: rgb(17, 17, 17); font-family: 微软雅黑; font-size: 12px; line-height: 26px;" />\r\n<span style="color: rgb(17, 17, 17); font-family: 微软雅黑; font-size: 12px; line-height: 26px;">&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;2、《营业执照》正副本复印件。&nbsp;</span><br style="margin: 0px; padding: 0px; list-style: none; color: rgb(17, 17, 17); font-family: 微软雅黑; font-size: 12px; line-height: 26px;" />\r\n<span style="color: rgb(17, 17, 17); font-family: 微软雅黑; font-size: 12px; line-height: 26px;">&nbsp; &nbsp; &nbsp; &nbsp; 3、原企业《营业执照》副本复印件。&nbsp;</span><br style="margin: 0px; padding: 0px; list-style: none; color: rgb(17, 17, 17); font-family: 微软雅黑; font-size: 12px; line-height: 26px;" />\r\n<span style="color: rgb(17, 17, 17); font-family: 微软雅黑; font-size: 12px; line-height: 26px;">&nbsp; &nbsp; &nbsp; &nbsp; 4、原建筑业企业资质证书原件及复印件。&nbsp;</span><br style="margin: 0px; padding: 0px; list-style: none; color: rgb(17, 17, 17); font-family: 微软雅黑; font-size: 12px; line-height: 26px;" />\r\n<span style="color: rgb(17, 17, 17); font-family: 微软雅黑; font-size: 12px; line-height: 26px;">&nbsp; &nbsp; &nbsp; &nbsp; 5、原企业和新企业的企业章程复印件，切记一定要两者兼具，也就是说缺一不可。&nbsp;</span><br style="margin: 0px; padding: 0px; list-style: none; color: rgb(17, 17, 17); font-family: 微软雅黑; font-size: 12px; line-height: 26px;" />\r\n<span style="color: rgb(17, 17, 17); font-family: 微软雅黑; font-size: 12px; line-height: 26px;">&nbsp; &nbsp; &nbsp; &nbsp; 总之，如果大家想要办理相应的建筑资质转让，一定要找专业的深圳建筑资质转让公司办理相应的转让业务。&nbsp;综上所述，建筑项目想要正式施工，甚至是提前开始施工工程，那就一定要及时或者提前办理相应的建筑资质。与此同时，如果想要临时改变原有资质的法人或者股东，甚至是同时改变原有建筑资质的股东以及法人，也需要提前或者及时办理相应的建筑资质转让。此外，如果你想要提高建筑资质转让效率，就需要提前了解相应的转让流程等。最后，大家可以登录正规的深圳市汇伟汇建筑工程有限公司官网咨询更多深圳建筑资质转让详情。&nbsp;</span></p>', 1, 1, '2017-08-05 01:05:23', '2017-08-05 01:05:23'),
(4, 0, '住房和城乡建设部关于召开《混凝土结构设计规》1', '瑞德', 3, '2ff058c1c33fa587d6b524f53823a9205.jpg', '<p style="margin: 0px; padding: 0px; list-style: none; color: rgb(17, 17, 17); font-family: 微软雅黑; font-size: 12px; line-height: 26px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 建标实函[2011]57号</p>\r\n\r\n<div style="margin: 0px; padding: 0px; list-style: none; color: rgb(77, 77, 77); font-family: Arial, Helvetica, sans-serif, 新宋体; font-size: 12px; line-height: 21.600000381469727px;">\r\n<div class="union" style="margin: 0px; padding: 0px; list-style: none;">\r\n<p style="margin: 0px; padding: 0px; list-style: none; color: rgb(17, 17, 17); font-family: 微软雅黑; line-height: 26px;">各省、自治区、直辖市住房和城乡建设厅（委、局），新疆生产建设兵团建设局：<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n新修订的《混凝土结构设计规范》GB50010-2010，已于2010年8月由我部批准发布，并将于2011年7月1日起实施。为做好该规范的贯彻 实施工作，经研究，定于2011年6月24～25日召开宣贯会，请各省级住房城乡建设主管部门组织有关人员（每省名额不超过5人）参加会议。现将会议的有 关事宜通知如下：<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n一、会议时间：2011年6月24～25日，23日报到。<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n二、会议地点：建银饭店（北京市西站南路2号，电话：010-63266633）<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n三、联系人和电话<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n1、住房和城乡建设部标准定额司　杨申武<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n电话：010-58933022，传真：010-58933901<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n2、中国建筑科学研究院　张华英<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n电话：010-64517506，传真：010-84281347<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n四、会议费500元/人，会议提供相关资料，资料费实收，交通和食宿费用自理。<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n五、其它<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n1、承办单位：中国建筑科学研究院。<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n2、参加培训的技术人员，如需培训合格证，请自带1寸彩色照片2张。<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n3、请各省级住房和城乡建设行政主管部门统一组织参会人员报名，会议回执（附件）于2011年6月20日前传真至中国建筑科学研究院。</p>\r\n\r\n<p style="margin: 0px; padding: 0px; list-style: none; color: rgb(17, 17, 17); font-family: 微软雅黑; line-height: 26px;">&nbsp;</p>\r\n\r\n<p style="margin: 0px; padding: 0px; list-style: none; color: rgb(17, 17, 17); font-family: 微软雅黑; line-height: 26px;">&nbsp;</p>\r\n\r\n<p align="center" style="margin: 0px; padding: 0px; list-style: none; color: rgb(17, 17, 17); font-family: 微软雅黑; line-height: 26px;">中华人民共和国住房和城乡建设部标准定额司<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n二〇一一年五月三十日</p>\r\n</div>\r\n</div>', 1, 1, '2017-07-21 22:54:25', '2017-08-05 04:30:50'),
(5, 0, '住房和城乡建设部关于召开《混凝土结构设计规》1', '瑞德', 3, '2ff058c1c33fa587d6b524f53823a9205.jpg', '<p style="margin: 0px; padding: 0px; list-style: none; color: rgb(17, 17, 17); font-family: 微软雅黑; font-size: 12px; line-height: 26px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 建标实函[2011]57号</p>\r\n\r\n<div style="margin: 0px; padding: 0px; list-style: none; color: rgb(77, 77, 77); font-family: Arial, Helvetica, sans-serif, 新宋体; font-size: 12px; line-height: 21.600000381469727px;">\r\n<div class="union" style="margin: 0px; padding: 0px; list-style: none;">\r\n<p style="margin: 0px; padding: 0px; list-style: none; color: rgb(17, 17, 17); font-family: 微软雅黑; line-height: 26px;">各省、自治区、直辖市住房和城乡建设厅（委、局），新疆生产建设兵团建设局：<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n新修订的《混凝土结构设计规范》GB50010-2010，已于2010年8月由我部批准发布，并将于2011年7月1日起实施。为做好该规范的贯彻 实施工作，经研究，定于2011年6月24～25日召开宣贯会，请各省级住房城乡建设主管部门组织有关人员（每省名额不超过5人）参加会议。现将会议的有 关事宜通知如下：<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n一、会议时间：2011年6月24～25日，23日报到。<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n二、会议地点：建银饭店（北京市西站南路2号，电话：010-63266633）<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n三、联系人和电话<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n1、住房和城乡建设部标准定额司　杨申武<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n电话：010-58933022，传真：010-58933901<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n2、中国建筑科学研究院　张华英<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n电话：010-64517506，传真：010-84281347<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n四、会议费500元/人，会议提供相关资料，资料费实收，交通和食宿费用自理。<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n五、其它<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n1、承办单位：中国建筑科学研究院。<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n2、参加培训的技术人员，如需培训合格证，请自带1寸彩色照片2张。<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n3、请各省级住房和城乡建设行政主管部门统一组织参会人员报名，会议回执（附件）于2011年6月20日前传真至中国建筑科学研究院。</p>\r\n\r\n<p style="margin: 0px; padding: 0px; list-style: none; color: rgb(17, 17, 17); font-family: 微软雅黑; line-height: 26px;">&nbsp;</p>\r\n\r\n<p style="margin: 0px; padding: 0px; list-style: none; color: rgb(17, 17, 17); font-family: 微软雅黑; line-height: 26px;">&nbsp;</p>\r\n\r\n<p align="center" style="margin: 0px; padding: 0px; list-style: none; color: rgb(17, 17, 17); font-family: 微软雅黑; line-height: 26px;">中华人民共和国住房和城乡建设部标准定额司<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n二〇一一年五月三十日</p>\r\n</div>\r\n</div>', 1, 1, '2017-07-21 22:54:25', '2017-08-05 04:30:50'),
(6, 0, '住房和城乡建设部关于召开《混凝土结构设计规》1', '瑞德', 3, '2ff058c1c33fa587d6b524f53823a9205.jpg', '<p style="margin: 0px; padding: 0px; list-style: none; color: rgb(17, 17, 17); font-family: 微软雅黑; font-size: 12px; line-height: 26px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 建标实函[2011]57号</p>\r\n\r\n<div style="margin: 0px; padding: 0px; list-style: none; color: rgb(77, 77, 77); font-family: Arial, Helvetica, sans-serif, 新宋体; font-size: 12px; line-height: 21.600000381469727px;">\r\n<div class="union" style="margin: 0px; padding: 0px; list-style: none;">\r\n<p style="margin: 0px; padding: 0px; list-style: none; color: rgb(17, 17, 17); font-family: 微软雅黑; line-height: 26px;">各省、自治区、直辖市住房和城乡建设厅（委、局），新疆生产建设兵团建设局：<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n新修订的《混凝土结构设计规范》GB50010-2010，已于2010年8月由我部批准发布，并将于2011年7月1日起实施。为做好该规范的贯彻 实施工作，经研究，定于2011年6月24～25日召开宣贯会，请各省级住房城乡建设主管部门组织有关人员（每省名额不超过5人）参加会议。现将会议的有 关事宜通知如下：<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n一、会议时间：2011年6月24～25日，23日报到。<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n二、会议地点：建银饭店（北京市西站南路2号，电话：010-63266633）<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n三、联系人和电话<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n1、住房和城乡建设部标准定额司　杨申武<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n电话：010-58933022，传真：010-58933901<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n2、中国建筑科学研究院　张华英<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n电话：010-64517506，传真：010-84281347<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n四、会议费500元/人，会议提供相关资料，资料费实收，交通和食宿费用自理。<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n五、其它<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n1、承办单位：中国建筑科学研究院。<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n2、参加培训的技术人员，如需培训合格证，请自带1寸彩色照片2张。<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n3、请各省级住房和城乡建设行政主管部门统一组织参会人员报名，会议回执（附件）于2011年6月20日前传真至中国建筑科学研究院。</p>\r\n\r\n<p style="margin: 0px; padding: 0px; list-style: none; color: rgb(17, 17, 17); font-family: 微软雅黑; line-height: 26px;">&nbsp;</p>\r\n\r\n<p style="margin: 0px; padding: 0px; list-style: none; color: rgb(17, 17, 17); font-family: 微软雅黑; line-height: 26px;">&nbsp;</p>\r\n\r\n<p align="center" style="margin: 0px; padding: 0px; list-style: none; color: rgb(17, 17, 17); font-family: 微软雅黑; line-height: 26px;">中华人民共和国住房和城乡建设部标准定额司<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n二〇一一年五月三十日</p>\r\n</div>\r\n</div>', 1, 1, '2017-07-21 22:54:25', '2017-08-05 04:30:50'),
(7, 0, '住房和城乡建设部关于召开《混凝土结构设计规》1', '瑞德', 3, '2ff058c1c33fa587d6b524f53823a9205.jpg', '<p style="margin: 0px; padding: 0px; list-style: none; color: rgb(17, 17, 17); font-family: 微软雅黑; font-size: 12px; line-height: 26px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 建标实函[2011]57号</p>\r\n\r\n<div style="margin: 0px; padding: 0px; list-style: none; color: rgb(77, 77, 77); font-family: Arial, Helvetica, sans-serif, 新宋体; font-size: 12px; line-height: 21.600000381469727px;">\r\n<div class="union" style="margin: 0px; padding: 0px; list-style: none;">\r\n<p style="margin: 0px; padding: 0px; list-style: none; color: rgb(17, 17, 17); font-family: 微软雅黑; line-height: 26px;">各省、自治区、直辖市住房和城乡建设厅（委、局），新疆生产建设兵团建设局：<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n新修订的《混凝土结构设计规范》GB50010-2010，已于2010年8月由我部批准发布，并将于2011年7月1日起实施。为做好该规范的贯彻 实施工作，经研究，定于2011年6月24～25日召开宣贯会，请各省级住房城乡建设主管部门组织有关人员（每省名额不超过5人）参加会议。现将会议的有 关事宜通知如下：<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n一、会议时间：2011年6月24～25日，23日报到。<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n二、会议地点：建银饭店（北京市西站南路2号，电话：010-63266633）<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n三、联系人和电话<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n1、住房和城乡建设部标准定额司　杨申武<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n电话：010-58933022，传真：010-58933901<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n2、中国建筑科学研究院　张华英<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n电话：010-64517506，传真：010-84281347<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n四、会议费500元/人，会议提供相关资料，资料费实收，交通和食宿费用自理。<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n五、其它<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n1、承办单位：中国建筑科学研究院。<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n2、参加培训的技术人员，如需培训合格证，请自带1寸彩色照片2张。<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n3、请各省级住房和城乡建设行政主管部门统一组织参会人员报名，会议回执（附件）于2011年6月20日前传真至中国建筑科学研究院。</p>\r\n\r\n<p style="margin: 0px; padding: 0px; list-style: none; color: rgb(17, 17, 17); font-family: 微软雅黑; line-height: 26px;">&nbsp;</p>\r\n\r\n<p style="margin: 0px; padding: 0px; list-style: none; color: rgb(17, 17, 17); font-family: 微软雅黑; line-height: 26px;">&nbsp;</p>\r\n\r\n<p align="center" style="margin: 0px; padding: 0px; list-style: none; color: rgb(17, 17, 17); font-family: 微软雅黑; line-height: 26px;">中华人民共和国住房和城乡建设部标准定额司<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n二〇一一年五月三十日</p>\r\n</div>\r\n</div>', 1, 1, '2017-07-21 22:54:25', '2017-08-05 04:30:50'),
(8, 0, '住房和城乡建设部关于召开《混凝土结构设计规》1', '瑞德', 3, '2ff058c1c33fa587d6b524f53823a9205.jpg', '<p style="margin: 0px; padding: 0px; list-style: none; color: rgb(17, 17, 17); font-family: 微软雅黑; font-size: 12px; line-height: 26px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 建标实函[2011]57号</p>\r\n\r\n<div style="margin: 0px; padding: 0px; list-style: none; color: rgb(77, 77, 77); font-family: Arial, Helvetica, sans-serif, 新宋体; font-size: 12px; line-height: 21.600000381469727px;">\r\n<div class="union" style="margin: 0px; padding: 0px; list-style: none;">\r\n<p style="margin: 0px; padding: 0px; list-style: none; color: rgb(17, 17, 17); font-family: 微软雅黑; line-height: 26px;">各省、自治区、直辖市住房和城乡建设厅（委、局），新疆生产建设兵团建设局：<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n新修订的《混凝土结构设计规范》GB50010-2010，已于2010年8月由我部批准发布，并将于2011年7月1日起实施。为做好该规范的贯彻 实施工作，经研究，定于2011年6月24～25日召开宣贯会，请各省级住房城乡建设主管部门组织有关人员（每省名额不超过5人）参加会议。现将会议的有 关事宜通知如下：<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n一、会议时间：2011年6月24～25日，23日报到。<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n二、会议地点：建银饭店（北京市西站南路2号，电话：010-63266633）<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n三、联系人和电话<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n1、住房和城乡建设部标准定额司　杨申武<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n电话：010-58933022，传真：010-58933901<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n2、中国建筑科学研究院　张华英<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n电话：010-64517506，传真：010-84281347<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n四、会议费500元/人，会议提供相关资料，资料费实收，交通和食宿费用自理。<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n五、其它<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n1、承办单位：中国建筑科学研究院。<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n2、参加培训的技术人员，如需培训合格证，请自带1寸彩色照片2张。<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n3、请各省级住房和城乡建设行政主管部门统一组织参会人员报名，会议回执（附件）于2011年6月20日前传真至中国建筑科学研究院。</p>\r\n\r\n<p style="margin: 0px; padding: 0px; list-style: none; color: rgb(17, 17, 17); font-family: 微软雅黑; line-height: 26px;">&nbsp;</p>\r\n\r\n<p style="margin: 0px; padding: 0px; list-style: none; color: rgb(17, 17, 17); font-family: 微软雅黑; line-height: 26px;">&nbsp;</p>\r\n\r\n<p align="center" style="margin: 0px; padding: 0px; list-style: none; color: rgb(17, 17, 17); font-family: 微软雅黑; line-height: 26px;">中华人民共和国住房和城乡建设部标准定额司<br style="margin: 0px; padding: 0px; list-style: none;" />\r\n二〇一一年五月三十日</p>\r\n</div>\r\n</div>', 1, 1, '2017-07-21 22:54:25', '2017-08-05 04:30:50'),
(9, 0, '测试', '删除', 1, NULL, '<p>删除？</p>', 1, 1, '2017-08-05 06:22:39', '2017-08-05 06:22:39'),
(10, 1, '11', '11', 1, '3cdb826678f6ce916dca8b62e0feae175.jpg', '<p>11</p>', 1, 1, '2017-08-05 06:23:56', '2017-08-05 06:29:26'),
(11, 1, '11', '11', 1, '41d0e9ec765395c5a308e9f5167059295.jpg', '<p>吱吱吱吱吱吱</p>', 1, 1, '2017-08-05 06:28:23', '2017-08-05 06:29:30');

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
(3, 1, 'hi134445', 'b2aad5a03f63efc79fdbd6a56201c1725.png', 'this is url 45', 1, 1, 1, '2017-07-20 04:33:43', '2017-08-05 22:45:49'),
(4, 1, 'you', '1134434ebbea1e9b7efc3d9f509b0fd45.jpg', '1111', 1, 1, 1, '2017-07-20 04:34:38', '2017-08-05 22:46:02'),
(5, 1, 'TEST', '1d15800fd3c8701b0d216126dac995225.jpg', 'http://www.baidu.com', 0, 1, 1, '2017-07-21 17:59:50', '2017-08-05 22:45:59'),
(6, 1, 'TEST', 'c2e6cc2b218a175f3d2299882633bc8d5.png', 'TEST1111', 0, 1, 1, '2017-07-21 18:00:06', '2017-08-05 22:45:55'),
(7, 1, '1111', '70e44fe4ff38cec021e71d2bde6eb7645.jpg', NULL, 0, 1, 1, '2017-07-21 22:50:37', '2017-08-05 22:45:52'),
(8, 0, '百度', 'd6e2479966992ecde1feedfebdd34bf85.png', 'http://www.baidu.com', 1, 1, 1, '2017-08-05 22:43:09', '2017-08-05 22:43:09');

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
(1, 0, '德润公司', '<p>手机号码：1371386874*</p><p>联系邮箱：758969123@qq.com</p><p>联系电话：0755-****</p><p>​联系地址：深圳市龙岗区***</p>', '<div style="box-sizing: border-box; color: rgb(119, 119, 119); font-family: ''Microsoft YaHei'', Tahoma, Verdana, Simsun; font-size: 14px; line-height: 28px;">\r\n<div style="box-sizing: border-box; color: rgb(119, 119, 119); font-family: ''Microsoft YaHei'', Tahoma, Verdana, Simsun; font-size: 14px; line-height: 28px; background-color: rgb(34, 34, 34);"><span style="box-sizing: border-box; line-height: 2;"><span style="box-sizing: border-box; line-height: 2; font-size: 16px;">&nbsp; &nbsp; &nbsp; &nbsp;深圳市魔力方格网络科技有限公司（ShenZhen Magic Cube TEC. CO.,LTD）长期致力于为企业提供信息化整体解决方案，近年随着业务增长及企业多元化发展需要，公司于2017年年初与北京三思网安科技有限公司签订合作协议，正式进军网络安全领域，成为目前广东省唯一的三思网安全系产品及原厂技术服务授权代理商；公司核心团队拥有丰富的从业经验，在诸多应用领域有着深入的，系统化的研究和成果，在万众创业大潮涌动和国家立法推动网络安全产业发展的时代背景下，魔立方格被赋予了新的目标和使命，我们立志成为推动企业用户从传统行业向互联网转型发展的先锋，未来我们将在应用软件开发，互联网业务延伸、细分行业发展规划和项目产品运营管理方面深耕细作，以图与客户一起成长，共享更大的辉煌；同时，背靠全球顶尖、国内最强的网络安全攻防团队（蓝莲花战队）和国内最高学府（清华大学网络安全实验室）持续不断的学术支持，我们将荣耀加冕，将中国技术、中国认证以远超国外同行在华机构的水平和质量交付给行业用户。</span></span></div>\r\n\r\n<p style="box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(119, 119, 119); font-family: ''Microsoft YaHei'', Tahoma, Verdana, Simsun; font-size: 14px; line-height: 28px; background-color: rgb(34, 34, 34);">&nbsp;</p>\r\n\r\n<div style="box-sizing: border-box; color: rgb(119, 119, 119); font-family: ''Microsoft YaHei'', Tahoma, Verdana, Simsun; font-size: 14px; line-height: 28px; background-color: rgb(34, 34, 34);"><span style="box-sizing: border-box; line-height: 2;">&nbsp; &nbsp; &nbsp; &nbsp;</span><span style="box-sizing: border-box; font-size: 18px;"><strong style="box-sizing: border-box;">中国的网络信息安全由中国人自己来做！</strong></span></div>\r\n\r\n<div style="box-sizing: border-box; color: rgb(119, 119, 119); font-family: ''Microsoft YaHei'', Tahoma, Verdana, Simsun; font-size: 14px; line-height: 28px; background-color: rgb(34, 34, 34);">&nbsp; &nbsp; &nbsp; &nbsp;<span style="box-sizing: border-box; font-size: 16px;">信息技术和互联网技术的发展此刻正加速推动传统商业的变革，&ldquo;互联网+&rdquo;已经无可抵挡的成为了这个时代企业发展的主旋律，我们立志帮助在这场洪流中正面临规模化发展和管理困难的中小型企业用户走出困境，以分享国家经济体制改革带来的红利；触网是为了更开放，只有开放才能让企业级用户以新的模式将主营业务做大做强，而用户在开放的同时也意味着要面临更大的网络安全和数据丢失方面的风险，只为不负最初的信任，魔力方格从此除协助用户构建管理和业务平台之外，还将成为用户在网络安全和数据资产安全方面的保护者，让用户变之能胜；</span></div>\r\n\r\n<p style="box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(119, 119, 119); font-family: ''Microsoft YaHei'', Tahoma, Verdana, Simsun; font-size: 14px; line-height: 28px; background-color: rgb(34, 34, 34);">&nbsp;</p>\r\n\r\n<div style="box-sizing: border-box; color: rgb(119, 119, 119); font-family: ''Microsoft YaHei'', Tahoma, Verdana, Simsun; font-size: 14px; line-height: 28px; background-color: rgb(34, 34, 34);"><span style="box-sizing: border-box; line-height: 2;">&nbsp; &nbsp; &nbsp; &nbsp;</span><span style="box-sizing: border-box; font-size: 18px;"><strong style="box-sizing: border-box;">业务范围</strong></span></div>\r\n\r\n<p style="box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(119, 119, 119); font-family: ''Microsoft YaHei'', Tahoma, Verdana, Simsun; font-size: 14px; line-height: 28px; background-color: rgb(34, 34, 34);">&nbsp; &nbsp; &nbsp; &nbsp;<span style="box-sizing: border-box; font-size: 16px;">企业级信息化整体解决方案&mdash;&mdash;企业级信息系统、软件开发项目咨询策划、执行开发、品牌/平台电商平台建设、系统运维及运营等，并可为用户提供法律咨询、投融资、公益等发展资源的增值配套业务。</span></p>\r\n\r\n<p style="box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(119, 119, 119); font-family: ''Microsoft YaHei'', Tahoma, Verdana, Simsun; font-size: 14px; line-height: 28px; background-color: rgb(34, 34, 34);"><span style="box-sizing: border-box; font-size: 16px;">&nbsp; &nbsp; &nbsp; &nbsp;企业级网络安全体系架构全生态技术服务商 &mdash;&mdash;PCI-DSS咨询认证/ISO27001咨询/PRHT漏洞扫描/网络安全咨询/网络安全培训/应急响应/安全托管/渗透攻防/云堡垒机。</span></p>\r\n\r\n<p style="box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(119, 119, 119); font-family: ''Microsoft YaHei'', Tahoma, Verdana, Simsun; font-size: 14px; line-height: 28px; background-color: rgb(34, 34, 34);">&nbsp;</p>\r\n\r\n<div style="box-sizing: border-box; color: rgb(119, 119, 119); font-family: ''Microsoft YaHei'', Tahoma, Verdana, Simsun; font-size: 14px; line-height: 28px; background-color: rgb(34, 34, 34);"><span style="box-sizing: border-box; line-height: 2;">&nbsp;&nbsp; &nbsp;&nbsp;</span><span style="box-sizing: border-box; font-size: 18px;"><span style="box-sizing: border-box; line-height: 2;">&nbsp;</span><span style="box-sizing: border-box; font-weight: 700;">联系我们</span></span></div>\r\n\r\n<p style="box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(119, 119, 119); font-family: ''Microsoft YaHei'', Tahoma, Verdana, Simsun; font-size: 14px; line-height: 28px; background-color: rgb(34, 34, 34);">&nbsp; &nbsp; &nbsp; &nbsp;<span style="box-sizing: border-box; font-size: 16px;">深圳市魔立方格网络科技有限公司</span></p>\r\n\r\n<p style="box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(119, 119, 119); font-family: ''Microsoft YaHei'', Tahoma, Verdana, Simsun; font-size: 14px; line-height: 28px; background-color: rgb(34, 34, 34);"><span style="box-sizing: border-box; font-size: 16px;">&nbsp; &nbsp; &nbsp; &nbsp;联系人：叶女士</span></p>\r\n\r\n<p style="box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(119, 119, 119); font-family: ''Microsoft YaHei'', Tahoma, Verdana, Simsun; font-size: 14px; line-height: 28px; background-color: rgb(34, 34, 34);"><span style="box-sizing: border-box; font-size: 16px;">&nbsp; &nbsp; &nbsp; &nbsp;手机：18676755443</span></p>\r\n\r\n<p style="box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(119, 119, 119); font-family: ''Microsoft YaHei'', Tahoma, Verdana, Simsun; font-size: 14px; line-height: 28px; background-color: rgb(34, 34, 34);"><span style="box-sizing: border-box; font-size: 16px;">&nbsp; &nbsp; &nbsp; &nbsp;邮箱：yetl@3tmc.com</span></p>\r\n\r\n<p style="box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(119, 119, 119); font-family: ''Microsoft YaHei'', Tahoma, Verdana, Simsun; font-size: 14px; line-height: 28px; background-color: rgb(34, 34, 34);"><span style="box-sizing: border-box; font-size: 16px;">&nbsp; &nbsp; &nbsp; &nbsp;地址：深圳市龙岗区龙翔大道9009号珠江国际中心12楼</span></p>\r\n</div>', '113.982267', '22.541327', 1, 1, '2017-07-21 22:54:25', '2017-08-06 00:44:22');

-- --------------------------------------------------------

--
-- 表的结构 `feedback`
--

CREATE TABLE `feedback` (
  `id` int(10) UNSIGNED NOT NULL,
  `del` int(11) NOT NULL DEFAULT '0',
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
(1, 1, '1', '123', '123', '1500386427596e147b32e4d.jpg', 0, '2017-07-18 06:00:27', '2017-07-20 07:03:13'),
(2, 1, '1', NULL, '6666', '1500388552596e1cc8c584e.jpg', 0, '2017-07-18 06:35:52', '2017-07-21 17:59:11'),
(3, 0, '1', '0', 'hi134445', 'b2aad5a03f63efc79fdbd6a56201c1725.png', 0, '2017-07-20 04:33:43', '2017-07-20 07:07:06'),
(4, 0, '1', '1111', 'you', '1134434ebbea1e9b7efc3d9f509b0fd45.jpg', 0, '2017-07-20 04:34:38', '2017-07-20 04:34:38'),
(5, 0, '0', '0', 'TEST', '1d15800fd3c8701b0d216126dac995225.jpg', 0, '2017-07-21 17:59:50', '2017-07-21 17:59:50'),
(6, 0, '0', '0', 'TEST', 'c2e6cc2b218a175f3d2299882633bc8d5.png', 0, '2017-07-21 18:00:06', '2017-07-21 18:00:06'),
(7, 0, '0', NULL, '1111', '70e44fe4ff38cec021e71d2bde6eb7645.jpg', 1, '2017-07-21 22:50:37', '2017-07-22 18:42:37'),
(8, 0, '你是傻逼吗？', '13713868777', '这是前端输入', '这是前端内容', 0, '2017-08-03 07:26:17', '2017-08-03 07:26:17'),
(9, 0, '123', '123', '123', '123', 1, '2017-08-04 18:30:17', '2017-08-04 18:33:17'),
(10, 0, 'admin', '123', '123', '123', 0, '2017-08-04 18:35:16', '2017-08-04 18:35:16'),
(11, 0, 'admin', '123', '123', '123', 0, '2017-08-04 18:35:55', '2017-08-04 18:35:55'),
(12, 0, 'admin', '12', '142', '14', 0, '2017-08-04 18:36:34', '2017-08-04 18:36:34'),
(13, 0, 'admin', '123', '21', '223aaaaaaaaa', 0, '2017-08-04 18:37:01', '2017-08-04 18:37:01'),
(14, 0, 'admin', '1', '1', '1', 0, '2017-08-04 18:37:46', '2017-08-04 18:37:46'),
(15, 0, 'admin', '1', '1', '1', 0, '2017-08-04 18:49:27', '2017-08-04 18:49:27'),
(16, 0, 'admin', '123', '123', '123', 0, '2017-08-04 18:50:22', '2017-08-04 18:50:22');

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
-- 表的结构 `partners`
--

CREATE TABLE `partners` (
  `id` int(11) NOT NULL,
  `del` int(11) NOT NULL DEFAULT '0',
  `title` varchar(50) CHARACTER SET utf8 NOT NULL,
  `pic` text NOT NULL,
  `url` text CHARACTER SET latin1 NOT NULL,
  `is_show` int(11) NOT NULL,
  `update_author` int(11) NOT NULL,
  `create_author` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `partners`
--

INSERT INTO `partners` (`id`, `del`, `title`, `pic`, `url`, `is_show`, `update_author`, `create_author`, `created_at`, `updated_at`) VALUES
(1, 0, '百度', '31c3f529f0240bc09a5fa9691179f7305.png', 'http://baidu.com', 1, 1, 1, '2017-08-05 22:44:43', '2017-08-05 22:44:43'),
(2, 0, '腾讯1', '505289ef4b8e5b39d845646f6b7e4e435.jpg', 'http://qq.com', 1, 1, 1, '2017-08-05 22:52:08', '2017-08-05 22:59:48');

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
-- Indexes for table `partners`
--
ALTER TABLE `partners`
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- 使用表AUTO_INCREMENT `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- 使用表AUTO_INCREMENT `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- 使用表AUTO_INCREMENT `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- 使用表AUTO_INCREMENT `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- 使用表AUTO_INCREMENT `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
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
