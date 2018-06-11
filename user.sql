-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-05-26 12:16:27
-- 服务器版本： 5.5.53-log
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- 表的结构 `application`
--

CREATE TABLE IF NOT EXISTS `application` (
  `username` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `average` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `application`
--

INSERT INTO `application` (`username`, `name`, `average`) VALUES
('201331104073', '小辉辉', 84);

-- --------------------------------------------------------

--
-- 表的结构 `college`
--

CREATE TABLE IF NOT EXISTS `college` (
  `username` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `average` int(11) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `college`
--

INSERT INTO `college` (`username`, `name`, `average`) VALUES
('201331104073', '冯立辉', 84);

-- --------------------------------------------------------

--
-- 表的结构 `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `courseid` int(11) NOT NULL,
  `coursename` varchar(50) NOT NULL,
  PRIMARY KEY (`courseid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `course`
--

INSERT INTO `course` (`courseid`, `coursename`) VALUES
(10001, '语文'),
(10002, '数学'),
(10003, '英语'),
(10004, '计算机'),
(10005, '政治'),
(10006, '化学'),
(10007, '生物'),
(10008, '历史');

-- --------------------------------------------------------

--
-- 表的结构 `information`
--

CREATE TABLE IF NOT EXISTS `information` (
  `username` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `sex` varchar(50) DEFAULT NULL,
  `birthday` varchar(50) DEFAULT NULL,
  `phone` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `address` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `information`
--

INSERT INTO `information` (`username`, `name`, `sex`, `birthday`, `phone`, `mail`, `address`) VALUES
('201331104073', '小辉辉', '男', '2016-07-13', '15608217819', '912545770@qq.com', '成都市');

-- --------------------------------------------------------

--
-- 表的结构 `school`
--

CREATE TABLE IF NOT EXISTS `school` (
  `username` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `average` int(11) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `school`
--

INSERT INTO `school` (`username`, `name`, `average`) VALUES
('201331104073', '冯立辉', 84);

-- --------------------------------------------------------

--
-- 表的结构 `score`
--

CREATE TABLE IF NOT EXISTS `score` (
  `username` varchar(50) NOT NULL,
  `courseid` int(11) NOT NULL,
  `score` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `score`
--

INSERT INTO `score` (`username`, `courseid`, `score`) VALUES
('201331104073', 10001, 99),
('201331104073', 10003, 78),
('201331104073', 10005, 66),
('201331104073', 10007, 88),
('201331104073', 10008, 92);

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `loginstyle` varchar(50) NOT NULL DEFAULT '1',
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`username`, `password`, `loginstyle`) VALUES
('201331104071', '1111', '2'),
('201331104072', '1111', '1'),
('201331104073', '111', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
