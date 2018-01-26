-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 26, 2018 at 02:46 PM
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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `aname` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `aname`, `pass`, `email`) VALUES
(1, 'wer qwe', 'pass', 'asdf@kjfd');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `descr` text NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `descr`, `status`) VALUES
(4, 'asdfer', 'uyrtw', 0),
(3, 'asdfasdf', 'asdfsadfas', 1);

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

DROP TABLE IF EXISTS `portfolio`;
CREATE TABLE IF NOT EXISTS `portfolio` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `pname` varchar(200) NOT NULL,
  `pimage` varchar(200) NOT NULL,
  `pdescr` text NOT NULL,
  `cid` int(11) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`pid`, `pname`, `pimage`, `pdescr`, `cid`) VALUES
(3, 'szdff', '1516959021portfolio.jpg', 'sad', 4);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `pname` varchar(200) NOT NULL,
  `cost` int(11) NOT NULL,
  `pdescr` text NOT NULL,
  `pimage` varchar(200) NOT NULL,
  `link` varchar(250) NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `pname`, `cost`, `pdescr`, `pimage`, `link`, `status`) VALUES
(1, 'dsfg', 54, 'gsf', '1516959550product.jpg', 'http://fdsg.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

DROP TABLE IF EXISTS `project`;
CREATE TABLE IF NOT EXISTS `project` (
  `pid` int(10) NOT NULL AUTO_INCREMENT,
  `pname` varchar(200) NOT NULL,
  `dscr` text NOT NULL,
  `cost` int(11) NOT NULL,
  `attach` varchar(200) NOT NULL,
  `pstatus` int(1) NOT NULL,
  `pprogress` text NOT NULL,
  `scid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`pid`, `pname`, `dscr`, `cost`, `attach`, `pstatus`, `pprogress`, `scid`, `uid`) VALUES
(1, 'fgdfg', 'gdfgfdg', 5867, '1516969676portfolio.JPG', 0, '', 3, 0),
(2, 'drgf', 'dfgdfg', 45345, '1516969732portfolio.JPG', 0, '', 3, 0),
(3, 'egt', 'etg', 53, '', 1, '', 3, 3),
(4, 'fgthgf', 'hgfhfgh', 543245, '', 0, '', 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `scategory`
--

DROP TABLE IF EXISTS `scategory`;
CREATE TABLE IF NOT EXISTS `scategory` (
  `scid` int(11) NOT NULL AUTO_INCREMENT,
  `scname` varchar(200) NOT NULL,
  `scdescr` text NOT NULL,
  `scstatus` int(1) NOT NULL,
  PRIMARY KEY (`scid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scategory`
--

INSERT INTO `scategory` (`scid`, `scname`, `scdescr`, `scstatus`) VALUES
(2, '0', '0', 1),
(3, 'sef', 'sfsdf', 0);

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

DROP TABLE IF EXISTS `service`;
CREATE TABLE IF NOT EXISTS `service` (
  `sid` int(10) NOT NULL AUTO_INCREMENT,
  `sname` varchar(200) NOT NULL,
  `short_descr` varchar(200) NOT NULL,
  `sdescr` text NOT NULL,
  `image` text NOT NULL,
  `scid` int(10) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`sid`, `sname`, `short_descr`, `sdescr`, `image`, `scid`, `status`) VALUES
(22, 't5wr', 'rt', 'rew', '', 1, 1),
(23, 'df', 'sfd', 'fds', '1516960500service.jpg', 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

DROP TABLE IF EXISTS `subscription`;
CREATE TABLE IF NOT EXISTS `subscription` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(200) NOT NULL,
  `created` datetime NOT NULL,
  `status` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscription`
--

INSERT INTO `subscription` (`id`, `email`, `created`, `status`) VALUES
(1, 'a', '2018-01-26 08:13:09', 1),
(2, 'amitanand.kvj.2@gmail.com', '2018-01-26 08:13:29', 1),
(3, 'A', '2018-01-26 08:54:00', 1),
(4, 'A', '2018-01-26 08:55:36', 1),
(5, 'A', '2018-01-26 08:57:08', 1),
(6, 'FG', '2018-01-26 08:57:57', 1),
(7, 'A', '2018-01-26 09:01:58', 1),
(8, 'a', '2018-01-26 09:08:31', 1),
(9, 'ad', '2018-01-26 09:09:02', 1),
(10, 'amit ana', '2018-01-26 09:09:24', 1),
(11, 'amitanand.kvj.2@gmail.com', '2018-01-26 09:10:32', 1),
(12, 'amitanand.kvj.3@gmail.com', '2018-01-26 09:15:34', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `fname`, `lname`, `email`, `password`, `created`, `modified`, `status`) VALUES
(3, '', '', 'amitanand.kvj.2@gmail.com', '202cb962ac59075b964b07152d234b70', '2018-01-25 20:36:03', '2018-01-26 12:40:57', 1),
(4, 'amit', 'anand', 'amitanand.kvj.3@gmail.com', '202cb962ac59075b964b07152d234b70', '2018-01-25 20:40:21', '2018-01-26 12:40:57', 1),
(5, 'amit', 'chutiya', 'amit@chu.tiya', '202cb962ac59075b964b07152d234b70', '2018-01-26 10:59:19', '2018-01-26 12:40:57', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
