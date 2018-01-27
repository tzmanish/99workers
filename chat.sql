-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 27, 2018 at 02:07 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `99workers`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

DROP TABLE IF EXISTS `chat`;
CREATE TABLE IF NOT EXISTS `chat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `sentby` int(2) NOT NULL,
  `msg` text NOT NULL,
  `image` varchar(220) NOT NULL,
  `dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ustatus` int(2) NOT NULL,
  `astatus` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=89 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `pid`, `uid`, `sentby`, `msg`, `image`, `dt`, `ustatus`, `astatus`) VALUES
(19, 3, 3, 1, '', '', '2018-01-27 08:21:49', 0, 1),
(18, 3, 3, 1, 'hstgr', '', '2018-01-27 08:21:40', 0, 1),
(17, 3, 3, 1, 'e 5tey dtrdty', '', '2018-01-27 08:21:15', 0, 1),
(16, 3, 3, 1, 'ery ert ytse', '', '2018-01-27 08:21:11', 0, 1),
(15, 3, 3, 1, 'eywey  b 3w', '', '2018-01-27 08:21:07', 0, 1),
(14, 3, 3, 1, '', '', '2018-01-27 08:21:03', 0, 1),
(13, 3, 3, 1, '', '', '2018-01-27 08:21:00', 0, 1),
(12, 3, 3, 1, 'tyse', '', '2018-01-27 08:20:59', 0, 1),
(11, 3, 3, 1, 'ghs', '', '2018-01-27 08:20:56', 0, 1),
(20, 3, 3, 1, '', '', '2018-01-27 08:22:35', 0, 1),
(21, 3, 3, 1, 'estg', '', '2018-01-27 08:22:40', 0, 1),
(22, 3, 3, 1, '', '', '2018-01-27 08:22:42', 0, 1),
(23, 3, 3, 1, 'sf', '', '2018-01-27 08:24:09', 0, 1),
(24, 3, 3, 1, 'dfg', '', '2018-01-27 08:24:43', 0, 1),
(25, 3, 3, 1, 'erwtwer', '1517041552chat.JPG', '2018-01-27 08:25:53', 0, 1),
(26, 3, 3, 1, 'esrtertwert', '', '2018-01-27 08:26:48', 0, 1),
(27, 3, 3, 1, 'dgdfgd', '', '2018-01-27 08:28:10', 0, 1),
(28, 3, 3, 1, 'gddgfgf', '', '2018-01-27 08:28:13', 0, 1),
(29, 3, 3, 1, '', '1517043423chat.JPG', '2018-01-27 08:57:04', 0, 1),
(30, 3, 3, 1, 'dafad', '', '2018-01-27 09:04:45', 0, 1),
(31, 3, 3, 1, 'asd', '', '2018-01-27 09:04:49', 0, 1),
(32, 3, 3, 1, 'sdf', '', '2018-01-27 09:05:39', 0, 1),
(33, 3, 3, 1, 'dsfsd', '', '2018-01-27 09:05:42', 0, 1),
(34, 5, 5, 1, 'fsdfasf', '', '2018-01-27 09:20:02', 1, 1),
(35, 5, 5, 1, 'sdfsadfasgsdf', '', '2018-01-27 09:20:05', 1, 1),
(82, 7, 5, 1, 'hey there', '', '2018-01-27 12:26:39', 1, 1),
(81, 6, 5, 0, 'dfgdfgdfgdfg', '', '2018-01-27 12:20:45', 1, 1),
(80, 6, 5, 0, 'dfgdfg', '', '2018-01-27 12:20:35', 1, 1),
(79, 6, 5, 1, 'hgdgfh', '', '2018-01-27 12:17:12', 1, 1),
(78, 6, 5, 1, 'ofcourse', '', '2018-01-27 12:07:03', 1, 1),
(77, 6, 5, 0, 'will you do it?\r\n', '1517054799chat.jpg', '2018-01-27 12:06:40', 1, 1),
(85, 7, 5, 0, 'yeah', '', '2018-01-27 12:34:22', 1, 1),
(75, 5, 5, 0, 'dfxgbdhbf', '', '2018-01-27 11:29:02', 1, 1),
(74, 5, 5, 1, 'reherthtrrherherhtertre', '', '2018-01-27 11:26:03', 1, 1),
(73, 5, 5, 0, 'hjftgrh', '', '2018-01-27 11:22:15', 1, 1),
(72, 5, 5, 0, 'gfhfg', '', '2018-01-27 11:20:54', 1, 1),
(71, 5, 5, 0, 'yt', '', '2018-01-27 11:15:37', 1, 1),
(70, 5, 5, 0, 'yrerty', '', '2018-01-27 11:04:22', 1, 1),
(68, 5, 5, 1, 'yueryu', '', '2018-01-27 11:04:06', 1, 1),
(69, 5, 5, 1, 'reytr', '1517051053chat.JPG', '2018-01-27 11:04:13', 1, 1),
(84, 6, 5, 1, 'can you chat in English please?', '', '2018-01-27 12:27:31', 1, 1),
(83, 6, 5, 1, 'sorry, cant understand you\r\n', '', '2018-01-27 12:27:07', 1, 1),
(86, 7, 5, 0, 'can you make this?', '1517056478chat.jpg', '2018-01-27 12:34:38', 1, 1),
(87, 6, 5, 0, 'no i only know hindi', '', '2018-01-27 12:34:58', 1, 0),
(88, 7, 5, 1, 'fuck off', '', '2018-01-27 12:35:24', 1, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
