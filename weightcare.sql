-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2014 �?07 ??19 ??20:12
-- 伺服器版本: 5.6.17
-- PHP 版本： 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 資料庫： `weightcare`
--

-- --------------------------------------------------------

--
-- 資料表結構 `mommy`
--

CREATE TABLE IF NOT EXISTS `mommy` (
  `id` varchar(20) COLLATE utf8_bin NOT NULL,
  `pw` varchar(20) COLLATE utf8_bin NOT NULL,
  `name` varchar(20) COLLATE utf8_bin NOT NULL,
  `age` int(11) NOT NULL,
  `pregnancy_date` date NOT NULL,
  `height` decimal(4,1) NOT NULL,
  `begin_weight` decimal(4,1) NOT NULL,
  `current_weight` decimal(4,1) NOT NULL,
  `fetal_num` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 資料表的匯出資料 `mommy`
--

INSERT INTO `mommy` (`id`, `pw`, `name`, `age`, `pregnancy_date`, `height`, `begin_weight`, `current_weight`, `fetal_num`) VALUES
('1111', '0000', 'emma', 28, '2014-06-01', '160.0', '50.0', '52.0', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
