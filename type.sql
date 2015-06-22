-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015 年 04 月 21 日 05:26
-- 服务器版本: 5.5.8
-- PHP 版本: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `type`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(5) unsigned NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` char(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '0192023a7bbd73250516f069df18b500');

-- --------------------------------------------------------

--
-- 表的结构 `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `text` text NOT NULL,
  `memo` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `article`
--

INSERT INTO `article` (`id`, `text`, `memo`) VALUES
(6, '深山工作室是一支专业网站建设团队，成立于2006年10月。专业为各类企事业单位以及个人等提供各类网站建设以及网页设计服务，并树立了良好的口碑，积累了丰富的网站建设相关经验，我们的专业水准亦得到行业内外的广泛认可。服务项目包括连云港网站建设、网页设计、广告设计、平面设计、网站SEO优化、网站推广、域名注册、虚拟主机等。我们凭借多年对互联网技术的深入学习、钻研研究，对中国互联网的现状和发展趋势的把握，以及在网站建设、推广服务方面的成熟经验，已经形成了自己独到的管理方式，保证每个项目能够得以顺利完成，并能够在最大程度上保障为客户提供优秀的作品，完善的售前、售后服务！', ''),
(9, '北京是文艺的天堂。当初他们怀揣着梦想而来，于是他们在这儿活着，或许有一天他们也会在这儿死去。或许他们的墓志铭会这样写：踏实梦想最忠诚的追随者、守护者，是这人潮人海中最渺小的存在，却也是最伟大的存在。他们之中有许多人将自己的青春、自己的半辈子留给了北京，铩羽而归，但他们并不是失败者，或者说是，虽败犹荣。他们之中也有许多人，平步青云，从此走向了人生的巅峰。这种人，如同“北京六环”不被人们称为北京一样不被我们称为 北漂一族 ，他们是幸运儿。人生本就是不可预知的啊，有人靠运气；有人靠努力。靠运气的，总是最快跌下的，他们如同划破苍穹的流星，虽然耀眼，但却只绽放了一瞬；靠努力的，脚踏实地，一步一个脚印，走得最踏实，他们如同浩渺宇宙中的恒星，每月每日，每时每刻，都泛着最璀璨的光。努力固然是人生必不可少的，但也应该需要一个机遇吧！北漂的朋友们，如若此刻你们还在拼搏，我想要祝福你们，祝福你们早日遇见自己的伯乐，同时我也想向你们、向所有的，还在追逐梦想的朋友致敬，致敬你们终究是守住了自己对梦想的坚贞。', '');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `user` varchar(20) NOT NULL,
  `passwd` char(32) NOT NULL,
  `class` varchar(50) NOT NULL,
  `zql` int(5) DEFAULT '0',
  `speed` int(5) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `user`, `passwd`, `class`, `zql`, `speed`) VALUES
(2, '何永杰', 'e10adc3949ba59abbe56e057f20f883e', '网络工程学院13网机一班', 79, 990),
(3, 'aaaa', 'e10adc3949ba59abbe56e057f20f883e', 'aaaaa', 0, 0),
(4, '张无语', 'e10adc3949ba59abbe56e057f20f883e', '建筑工程学院13工程造价一班', 9, 796),
(5, '无语', 'e10adc3949ba59abbe56e057f20f883e', '建筑工程学院13工程造价一班', 0, 0),
(6, '无语2', 'e10adc3949ba59abbe56e057f20f883e', '建筑工程学院13工程造价一班', 0, 0),
(7, '何永杰', 'e10adc3949ba59abbe56e057f20f883e', '网络工程学院13网机一班', 0, 0),
(8, '李四', 'e10adc3949ba59abbe56e057f20f883e', '建筑工程学院13工程造价二班', 90, 987);
