-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-12-13 17:09:08
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `yuanku_job`
--

-- --------------------------------------------------------

--
-- 表的结构 `categor`
--

CREATE TABLE IF NOT EXISTS `categor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cate_name` varchar(255) NOT NULL,
  `sort` smallint(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(255) NOT NULL,
  `telphone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `add_time` varchar(255) NOT NULL,
  `enterprise_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `company`
--

INSERT INTO `company` (`id`, `company_name`, `telphone`, `address`, `photo`, `add_time`, `enterprise_id`) VALUES
(3, '哈弗健康公司', '13399998888', '美国345', '/uploads/1481269066.jpeg', '1481269066', 10),
(5, '休斯敦松岛公司', '13399998888', '123123', '/uploads/1481533946.png', '1481533946', 6);

-- --------------------------------------------------------

--
-- 表的结构 `enterprise_user`
--

CREATE TABLE IF NOT EXISTS `enterprise_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `user_pwd` varchar(255) NOT NULL,
  `reg_time` varchar(255) NOT NULL,
  `vip_status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `enterprise_user`
--

INSERT INTO `enterprise_user` (`id`, `user_name`, `user_pwd`, `reg_time`, `vip_status`) VALUES
(6, '13388889999', 'e10adc3949ba59abbe56e057f20f883e', '', 0),
(5, '13335446667', 'e10adc3949ba59abbe56e057f20f883e', '', 0),
(7, 'O''reilly', 'e10adc3949ba59abbe56e057f20f883e', '', 0),
(8, ''' or 1=1#', 'd41d8cd98f00b204e9800998ecf8427e', '', 0),
(10, 'admin', 'e10adc3949ba59abbe56e057f20f883e', '1481270142', 0);

-- --------------------------------------------------------

--
-- 表的结构 `job`
--

CREATE TABLE IF NOT EXISTS `job` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `job_name` varchar(50) NOT NULL,
  `enterprise_id` int(11) NOT NULL,
  `place` varchar(255) NOT NULL,
  `money` int(11) NOT NULL,
  `job_require` text NOT NULL,
  `job_describe` text NOT NULL,
  `status` tinyint(1) NOT NULL COMMENT '0:岗位不显示;1:显示',
  `add_time` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- 转存表中的数据 `job`
--

INSERT INTO `job` (`id`, `job_name`, `enterprise_id`, `place`, `money`, `job_require`, `job_describe`, `status`, `add_time`) VALUES
(13, '阿里巴巴数据分析师', 6, '', 23123123, '塑料袋可分解落实扩', '', 0, '1481267113'),
(6, 'HTML5程师', 0, '', 88888, '桑兰多夫空军看风景斯蒂芬', '', 0, '1481183427'),
(5, 'JS攻城', 0, '', 88888, '会攻城！', '', 0, '1481178395'),
(11, 'PHP高级工程师', 0, '', 88888, '', '', 0, '1481187478'),
(12, 'HTML5程师', 0, '', 88888, '', '', 0, '1481187494'),
(14, 'PHP高级工程师', 6, '', 34234, '234234', '', 0, '1481267449'),
(15, 'JavaG程师', 10, '', 88888, 'sf斯蒂芬斯蒂芬', '', 0, '1481531557'),
(16, 'Java高级程师', 10, '', 23234234, '', '', 0, '1481531575'),
(19, 'UI设计', 10, '', 34234, '234234', '', 0, '1481618126'),
(18, '前端工程师', 10, '', 32232, '看见了空间', '', 0, '1481612958'),
(20, '产品经理', 10, '', 123123, '123123', '', 0, '1481618138'),
(21, '项目经理', 10, '', 234234, '234234', '', 0, '1481618149'),
(22, '项目老板', 10, '', 23234234, '234234', '', 0, '1481618163');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
