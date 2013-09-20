-- phpMyAdmin SQL Dump
-- version 3.5.8.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 20, 2013 at 11:38 PM
-- Server version: 5.5.31-0ubuntu0.13.04.1
-- PHP Version: 5.4.9-4ubuntu2.3

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `type`, `PSN`, `picture`, `name`, `price`, `unit`) VALUES
(1, 1, '123456', 'A4pic.jpg', 'A4纸', '10.00$', '1'),
(2, 1, '123456', 'caogao.jpg', '草稿纸', '10.00$', '1'),
(3, 1, '123456', 'form.jpg', '表格纸', '10.00$', '1'),
(4, 2, '123457', 'tip.jpg', '便利贴', '7.00$', '1'),
(5, 2, '123458', 'smallbook.jpg', '备忘录本', '5.00$', '1'),
(6, 3, '123459', 'boben.jpg', '薄本', '8.00$', '1'),
(7, 3, '123460', 'xinfen.jpg', '信封', '8.00$', '1'),
(8, 4, '123461', 'pen.jpg', '笔', '1.00$', '1'),
(9, 4, '123461', 'maopen.jpg', '毛笔', '1.00$', '1'),
(10, 4, '123463', 'yuanzhu.jpg', '圆珠笔', '2.00$', '1'),
(11, 5, '123463', 'upan.jpg', '金士顿U盘', '20.00$', '1'),
(12, 5, '123464', 'upan2.jpg', '移动硬盘', '100.00$', '1'),
(13, 6, '123465', 'bitong.jpg', '笔筒', '10.00$', '1'),
(14, 6, '123466', 'mabu.jpg', '抹布', '10.00$', '1'),
(15, 7, '123467', 'mohe.jpg', '喷墨打印机墨盒', '20.00$', '1'),
(16, 8, '123468', 'xigu.jpg', '激光打印机硒鼓', '30.00$', '1'),
(17, 9, '123469', 'pmohe.jpg', '喷墨传真机墨盒', '30.00$', '1'),
(18, 10, '123470', 'jxigu.jpg', '激光传真机硒鼓', '30.00$', '1'),
(19, 11, '123471', 'mofen.jpg', '复印机墨粉', '30.00$', '1'),
(20, 12, '123472', 'sedai.jpg', '色带', '30.00$', '1'),
(21, 13, '123473', 'yingpan.jpg', '硬盘', '80.00$', '1'),
(22, 14, '123474', 'jiaoquan.jpg', '胶圈', '80.00$', '1'),
(23, 14, '123475', 'suizhi.jpg', '碎纸机', '80.00$', '1'),
(24, 15, '123476', 'yaoshi.jpg', '钥匙', '8.00$', '1'),
(25, 15, '123477', 'dianchaoji.jpg', '点钞机', '80.00$', '1'),
(26, 16, '123478', 'wannengchongdian.jpg', '万能充电器', '8.00$', '1'),
(27, 16, '123479', 'zuoji.jpg', '电话座机', '8.00$', '1'),
(28, 6, '111111', 'ruler.jpg', '得力(deli)有机直尺', '$1.00', '2'),
(29, 6, '112233', 'rl.jpg', '得力直尺#123', '$10.00', '1');

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
