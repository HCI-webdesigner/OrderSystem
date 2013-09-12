-- phpMyAdmin SQL Dump
-- version 3.5.8.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 11, 2013 at 07:12 PM
-- Server version: 5.5.31-0ubuntu0.13.04.1
-- PHP Version: 5.4.9-4ubuntu2.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `OrderSystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE IF NOT EXISTS `address` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `destination` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `person` varchar(255) NOT NULL,
  `mailnumber` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `destination`, `phone`, `person`, `mailnumber`) VALUES
(1, '华南农业大学华山区学生宿舍14栋306', '625176', '胡华泉', '510001'),
(13, '华南农业大学华山宿舍14-306', '18826495176', '胡华泉', '514000'),
(17, '华南农业大学华山宿舍14-306', '18826495176', '胡华泉', '514000'),
(18, '华南农业大学五山宿舍20栋603', '18826495176', '胡华泉', '510000'),
(21, '华南农业大学五山宿舍20栋603', '625176', '胡华泉', '514000'),
(22, '华南农业大学五山宿舍20栋603', '18826495176', '胡华泉', '111111'),
(23, '华南农业大学华山宿舍14栋306', '11111111111', '胡华泉', '111111'),
(24, '华南农业大学五山宿舍20栋603', '625176', '胡华泉', '514000'),
(25, '华南农业大学五山宿舍20栋603', '11111111111', '胡华泉', '510000'),
(26, '华南农业大学五山宿舍', '18826495176', 'hhq', '111111'),
(27, 'SCAU', '11111111111', 'hhqhhq', '111111'),
(28, '华南农业大学五山宿舍', '111111111111', '胡华泉', '510000'),
(29, '华南农业大学五山宿舍20栋603', '111111111111', '胡华泉', '111111'),
(30, '华南农业大学五山宿舍20栋603', '625176', '胡华泉', '514000'),
(31, '华南农业大学五山宿舍20栋603', '18826495176', '胡华泉', '519999'),
(32, '华南农业大学五山宿舍20栋603', '18826495176', '胡华泉', '519999'),
(33, '华南农业大学五山宿舍20栋603', '111111111111', '胡华泉', '514000'),
(34, '华南农业大学华山宿舍14栋306', '111111111111', '胡华泉', '510000'),
(35, '华南农业大学华山宿舍14-306', '11111111111', '胡华泉', '514001'),
(36, '华南农业大学五山宿舍20栋603', '11111111111', '胡华泉', '111111'),
(39, '华南农业大学五山宿舍20栋603', '18826495176', '胡华泉', '514000');

-- --------------------------------------------------------

--
-- Table structure for table `address_rel_employee`
--

CREATE TABLE IF NOT EXISTS `address_rel_employee` (
  `Aid` int(10) NOT NULL,
  `Eid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `address_rel_employee`
--

INSERT INTO `address_rel_employee` (`Aid`, `Eid`) VALUES
(1, 1),
(13, 2),
(17, 1),
(18, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(39, 1);

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `name`) VALUES
(1, 'HCI人机交互中心');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `Cid` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `Cid`, `name`) VALUES
(1, 1, '后台部'),
(2, 1, '前端部'),
(3, 1, '移动开发部'),
(4, 1, '系统运维部');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `Uid` int(10) NOT NULL,
  `Did` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `fax` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `Uid`, `Did`, `name`, `role`, `email`, `telephone`, `fax`) VALUES
(1, 1, 1, '胡华泉', '普通成员', '914099943@qq.com', '18826495176', 'hehe'),
(2, 2, 1, '钟煜', '后台部部长', '517007344@qq.com', '123456', 'hehe');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `orderid` int(10) NOT NULL,
  `applymsg` text NOT NULL,
  `extramsg` text NOT NULL,
  `status` int(1) NOT NULL,
  `statusmsg` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `order_rel_employee`
--

CREATE TABLE IF NOT EXISTS `order_rel_employee` (
  `Eid` int(10) NOT NULL,
  `orderid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `type` int(10) NOT NULL,
  `PSN` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `unit` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `products_rel_company`
--

CREATE TABLE IF NOT EXISTS `products_rel_company` (
  `Pid` int(10) NOT NULL,
  `Cid` int(10) NOT NULL,
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `producttype_lv1`
--

CREATE TABLE IF NOT EXISTS `producttype_lv1` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `producttype_lv1`
--

INSERT INTO `producttype_lv1` (`id`, `name`) VALUES
(1, '办公用品'),
(2, '办公耗材'),
(3, 'IT产品'),
(4, '办公设备');

-- --------------------------------------------------------

--
-- Table structure for table `producttype_lv2`
--

CREATE TABLE IF NOT EXISTS `producttype_lv2` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `PTid` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `producttype_lv2`
--

INSERT INTO `producttype_lv2` (`id`, `PTid`, `name`) VALUES
(1, 1, '办公用纸'),
(2, 1, '报事帖/便签'),
(3, 1, '薄本及信封'),
(4, 1, '书写用品'),
(5, 1, '文件存储'),
(6, 1, '桌上用品'),
(7, 2, '喷墨打印机墨盒'),
(8, 2, '激光打印机硒鼓'),
(9, 2, '喷墨传真机墨盒'),
(10, 2, '激光传真机硒鼓'),
(11, 2, '复印机墨粉'),
(12, 2, '色带'),
(13, 3, '数据存储'),
(14, 4, '碎纸装订设备'),
(15, 4, '财务行政设备'),
(16, 4, '电话通讯设备');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `account` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin` int(1) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `lastlogtime` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `account`, `password`, `admin`, `ip`, `lastlogtime`) VALUES
(1, 'hhq', '3d3db58ee409709dc966513f54ba58f7', 0, '123.12.12.0', '1378094389'),
(2, 'C860', '3d3db58ee409709dc966513f54ba58f7', 0, '123.0.0.1', '1378094389');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
