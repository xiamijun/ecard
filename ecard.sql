-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-09-13 12:13:19
-- 服务器版本： 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecard`
--

-- --------------------------------------------------------

--
-- 表的结构 `card_message`
--

CREATE TABLE `card_message` (
  `id` int(11) NOT NULL,
  `card_id` varchar(30) NOT NULL,
  `subject` tinytext NOT NULL,
  `from_name` varchar(30) NOT NULL,
  `from_email` varchar(50) NOT NULL,
  `to_name` varchar(30) NOT NULL,
  `to_email` varchar(50) NOT NULL,
  `music` varchar(30) NOT NULL,
  `style` varchar(20) NOT NULL,
  `size` varchar(10) NOT NULL,
  `color` varchar(20) NOT NULL,
  `message` mediumtext NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `card_message`
--

INSERT INTO `card_message` (`id`, `card_id`, `subject`, `from_name`, `from_email`, `to_name`, `to_email`, `music`, `style`, `size`, `color`, `message`, `date`) VALUES
(1, '4', '1', '1', '111', '1', '1', 'mid/1.mid', 'normal', '12 pt', '#770000', '1', '2016-09-13 09:12:56'),
(2, '4', '1', '1', '111', '1', '1', 'mid/1.mid', 'normal', '12 pt', '#770000', '1', '2016-09-13 09:29:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `card_message`
--
ALTER TABLE `card_message`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `card_message`
--
ALTER TABLE `card_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
