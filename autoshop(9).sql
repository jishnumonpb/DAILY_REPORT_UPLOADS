-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 29, 2019 at 04:54 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `autoshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `addvehicle`
--

CREATE TABLE IF NOT EXISTS `addvehicle` (
  `vid` int(20) NOT NULL AUTO_INCREMENT,
  `vehicle` varchar(50) NOT NULL,
  `basic_price` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `fuel` varchar(50) NOT NULL,
  `registred` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `milage` varchar(50) NOT NULL,
  `transmission` varchar(50) NOT NULL,
  `add_date` date NOT NULL,
  `bp` int(20) NOT NULL,
  `l_date` date NOT NULL,
  `brate` int(20) NOT NULL,
  PRIMARY KEY (`vid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `addvehicle`
--

INSERT INTO `addvehicle` (`vid`, `vehicle`, `basic_price`, `image`, `description`, `model`, `color`, `fuel`, `registred`, `year`, `milage`, `transmission`, `add_date`, `bp`, `l_date`, `brate`) VALUES
(13, 'JEEP', '500000', 'uploads/5.jpg', 'Good ', '2014', 'Red', 'Petrol', 'yes', '2020', '30', 'saffhjkdjk', '0000-00-00', 0, '0000-00-00', 0),
(15, 'Bullet', '100000', 'uploads/7.jpg', 'Good condition', '2014', 'Black', 'Petrol', 'yes', '2022', '35', 'sdvbb', '2019-04-01', 123, '2019-04-12', 55000),
(16, 'Jeep', '200000', 'uploads/123 (2).jpeg', 'Good', '2015', 'Red', 'Diesel', 'yes', '2019', '35', 'Manuel', '0000-00-00', 0, '0000-00-00', 0),
(24, 'kdvhhj', '5454', 'uploads/Untitled-1.jpg', 'kkhgvbjv', '1997', 'black', 'Diesel', 'yes', '2018', '38', 'Manuel', '0000-00-00', 0, '0000-00-00', 0),
(26, 'BMW', '480000', 'uploads/Untitled-1.jpg', 'nevjdbebjhbdsb', '2015', 'blask', 'Diesel', 'yes', '2017', '19', 'Automated', '2019-04-01', 1234, '2019-04-11', 1238),
(28, 'ywrtruytt', '989798798798', 'uploads/', 'y7437', '87565', '875648', 'Petrol', 'yes', '8765', 'iufguid', 'Automated', '0000-00-00', 0, '0000-00-00', 0),
(30, 'BULLET', '', 'uploads/7.jpg', 'dsgvhbjn', '2019', 'Blabk', 'Petrol', 'yes', '2021', '35', 'Manuel', '2019-04-25', 0, '2019-09-20', 150000),
(31, 'JEEP', '', 'uploads/5.jpg', 'jhagfvhbv', '2016', 'Red', 'Diesel', 'yes', '2021', '21', 'Automated', '2019-04-25', 0, '2019-10-23', 450000),
(32, 'R15', '', 'uploads/10.jpg', 'iueysrditufyh', '2017', 'Blue', 'Petrol', 'yes', '2021', '40', 'Manuel', '2019-04-22', 0, '2019-04-24', 110000),
(33, 'Swift', '', 'uploads/images (8).jpg', 'Good Condition', '2017', 'Red', 'Diesel', 'yes', '2021', '23', 'Automated', '2019-04-20', 0, '2019-04-28', 350000),
(34, 'BMW', '', 'uploads/images (5).jpg', 'Good Condition', '2018', 'Gray', 'Diesel', 'yes', '2021', '25', 'Automated', '2019-04-21', 0, '2019-04-30', 5600000);

-- --------------------------------------------------------

--
-- Table structure for table `auction`
--

CREATE TABLE IF NOT EXISTS `auction` (
  `auction_id` int(10) NOT NULL AUTO_INCREMENT,
  `v_id` int(10) NOT NULL,
  `u_id` int(10) NOT NULL,
  `amount` int(100) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`auction_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=58 ;

--
-- Dumping data for table `auction`
--

INSERT INTO `auction` (`auction_id`, `v_id`, `u_id`, `amount`, `time`) VALUES
(1, 0, 0, 544545, '0000-00-00 00:00:00'),
(2, 0, 0, 544545, '0000-00-00 00:00:00'),
(3, 0, 0, 544545, '0000-00-00 00:00:00'),
(4, 0, 0, 54000, '0000-00-00 00:00:00'),
(5, 0, 0, 54000, '0000-00-00 00:00:00'),
(6, 15, 39, 45000, '0000-00-00 00:00:00'),
(7, 15, 39, 45000, '0000-00-00 00:00:00'),
(8, 15, 39, 45000, '0000-00-00 00:00:00'),
(9, 15, 39, 45000, '0000-00-00 00:00:00'),
(10, 15, 32, 45000, '2019-04-26 16:45:31'),
(11, 24, 39, 50000, '0000-00-00 00:00:00'),
(12, 26, 32, 80000, '2019-04-26 16:45:19'),
(13, 15, 32, 615415, '2019-04-26 14:54:06'),
(14, 15, 39, 1651465, '2019-04-10 11:36:04'),
(15, 15, 32, 1245, '2019-04-27 10:20:02'),
(16, 30, 39, 151000, '2019-04-25 11:42:28'),
(17, 31, 39, 452000, '2019-04-25 11:47:49'),
(18, 31, 43, 462000, '2019-04-29 10:41:39'),
(19, 31, 41, 50000000, '2019-04-25 12:56:56'),
(20, 31, 41, 50000000, '2019-04-25 12:57:14'),
(21, 31, 41, 50000000, '2019-04-25 12:57:20'),
(24, 31, 41, 987654, '2019-04-29 14:34:13'),
(25, 31, 41, 456789, '2019-04-29 14:35:52'),
(26, 31, 41, 896746, '2019-04-29 14:35:26'),
(27, 31, 41, 234567, '2019-04-29 14:36:18'),
(28, 31, 41, 987654, '2019-04-29 14:34:47'),
(30, 31, 41, 21474, '2019-04-29 14:36:39'),
(31, 31, 45, 465000, '2019-04-27 11:23:28'),
(32, 31, 39, 500000, '2019-04-29 14:28:51'),
(50, 50, 32, 520000, '2019-04-29 14:29:32'),
(54, 31, 39, 6788, '2019-04-29 14:27:19'),
(55, 34, 45, 5700000, '2019-04-29 22:16:26'),
(56, 34, 41, 5900000, '2019-04-29 22:17:52'),
(57, 34, 42, 5650000, '2019-04-29 22:19:12');

-- --------------------------------------------------------

--
-- Table structure for table `login_autoshop`
--

CREATE TABLE IF NOT EXISTS `login_autoshop` (
  `lid` int(20) NOT NULL AUTO_INCREMENT,
  `uname` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `rol` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`lid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `login_autoshop`
--

INSERT INTO `login_autoshop` (`lid`, `uname`, `password`, `rol`, `status`) VALUES
(1, '', 'd41d8cd98f00b204e9800998ecf8427e', 'user', '0'),
(2, '', 'd41d8cd98f00b204e9800998ecf8427e', 'user', '0'),
(3, '', 'd41d8cd98f00b204e9800998ecf8427e', 'user', '0'),
(4, '', 'd41d8cd98f00b204e9800998ecf8427e', 'user', '0'),
(5, '', 'd41d8cd98f00b204e9800998ecf8427e', 'user', '0'),
(6, '', 'd41d8cd98f00b204e9800998ecf8427e', 'user', '0'),
(7, '', 'd41d8cd98f00b204e9800998ecf8427e', 'user', '0'),
(15, 'vinayanav@mca.ajce.in', 'e10adc3949ba59abbe56e057f20f883e', 'user', '0'),
(16, 'bhbhb', '202cb962ac59075b964b07152d234b70', 'user', '0'),
(20, 'jiljo', 'd2f4928ad8416870e2cc8cc9865b709e', 'user', '0'),
(21, 'vishnu', '1963fd70e789022f6f5b11498f992404', 'user', '0'),
(24, 'abc', '90c93a0654141e6abab100876dfe3bbe', 'user', '0'),
(25, 'jishnupb123143@gmail.com', '90c93a0654141e6abab100876dfe3bbe', 'user', '0'),
(26, 'thomas', '90c93a0654141e6abab100876dfe3bbe', 'user', '0'),
(27, 'qwerty123', '8dd43ae0638e1ce2690e2e3cfa653923', 'user', '0'),
(28, 'asdfgh', '261145c73228b13d43a139753234ea0c', 'user', '0'),
(29, 'llllllllllll', '4943dfa6df527a422b27b967a4eed98a', 'user', '0'),
(30, 'mlpo', '104560d0b7b08a976d5003b23ef27ed2', 'user', '0'),
(31, 'mlpoo', 'dd8989a0eb00e8651a072295eb8eb85a', 'user', '0'),
(32, 'jishnu', 'e067f18d96efeecdfa3fce48cd2c47ac', 'user', '0'),
(33, 'nandhu', '14b23f5f1702c9cf89e244716551620c', 'user', '0'),
(34, 'admin', '0e7517141fb53f21ee439b355b5a1d0a', 'admin', '1'),
(35, 'nikhil', '102eb1ef188b1a24e1a3e2621298702a', 'user', '0'),
(36, 'rahul', '7b7f71bff78951c020e9c647a32bb839', 'user', '0');

-- --------------------------------------------------------

--
-- Table structure for table `login_autoshop1`
--

CREATE TABLE IF NOT EXISTS `login_autoshop1` (
  `lid` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `rol` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`lid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `login_autoshop1`
--

INSERT INTO `login_autoshop1` (`lid`, `email`, `password`, `rol`, `status`) VALUES
(37, '', 'e067f18d96efeecdfa3fce48cd2c47ac', 'user', '0'),
(38, '', 'e067f18d96efeecdfa3fce48cd2c47ac', 'user', '0'),
(39, 'jishnupb123143@gmail.com', 'e067f18d96efeecdfa3fce48cd2c47ac', 'user', '0'),
(40, 'admin123@gmail.com', '0e7517141fb53f21ee439b355b5a1d0a', 'admin', '1'),
(41, 'rahul123@gmail.com', '7b7f71bff78951c020e9c647a32bb839', 'user', '0'),
(42, 'nikhil123@gmail.com', '102eb1ef188b1a24e1a3e2621298702a', 'user', '0'),
(43, 'thomas123@gmail.com', 'f640fdc2c16617522f43c94a634d7c3c', 'user', '0'),
(44, 'nandhu123@gmail.com', '2055f2a45bea193addcc4b44ce83e396', 'user', '0'),
(45, 'thomas123@gmail.com', 'f640fdc2c16617522f43c94a634d7c3c', 'user', '0');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `user_id` int(20) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `phone` int(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`user_id`, `fname`, `mname`, `lname`, `address`, `dob`, `phone`, `email`) VALUES
(1, 'jishnu', 'mon', 'PB', '0', '1997-05-06', 2147483647, 'jishnupb123143@gmail.com'),
(2, 'jishnu', 'mon', 'PB', '0', '1997-05-06', 2147483647, 'jishnupb123143@gmail.com'),
(3, 'jishnu', 'mon', 'pb', '0', '1997-05-06', 2147483647, 'jishnupb123143@gmail.com'),
(4, 'jishnu', 'mon', 'pb', '0', '1997-05-06', 2147483647, 'jishnupb123143@gmail.com'),
(5, 'sdjhfhv', 'vghv', 'ghchcgh', '0', '5555-05-04', 2147483647, 'j4jiljo@gmail.com'),
(6, 'sdjhfhv', 'vghv', 'ghchcgh', '0', '5555-05-04', 2147483647, 'j4jiljo@gmail.com'),
(7, 'kwrhg', 'jgruigug', 'guriif', 'rfuigiug', '1996-01-04', 984568520, 'jishnupb123143@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_addauction`
--

CREATE TABLE IF NOT EXISTS `tbl_addauction` (
  `a_id` int(10) NOT NULL AUTO_INCREMENT,
  `vid` int(10) NOT NULL,
  `add_date` date NOT NULL,
  `bp` int(20) NOT NULL,
  `l_date` date NOT NULL,
  `brate` varchar(20) NOT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_addauction`
--

INSERT INTO `tbl_addauction` (`a_id`, `vid`, `add_date`, `bp`, `l_date`, `brate`) VALUES
(1, 0, '2019-03-13', 55550, '2019-03-30', '574545'),
(2, 0, '2019-03-05', 0, '2019-03-06', '85');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_send_sms`
--

CREATE TABLE IF NOT EXISTS `tbl_send_sms` (
  `msg_id` int(10) NOT NULL AUTO_INCREMENT,
  `message` varchar(500) NOT NULL,
  PRIMARY KEY (`msg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_send_sms`
--

INSERT INTO `tbl_send_sms` (`msg_id`, `message`) VALUES
(1, 'qwertyuiopasdfghj'),
(2, 'hhdsfjhsjgfvbgvbbjkvkd'),
(3, 'sreeuiuugfvyvuvbuyrgfvgbrufvburgffbvbeyrb rffdsgvubr rhegfg egfggguyfvb fbsv ug uvbhdfghj httf gygtdf ytdtfy trfyf tdtfygyf ygyftdt dtfgyyfdtrfghgf f ggrty erty trr fge rfgdfr'),
(4, 'fewjkcvjvkdsbv shdvks m');

-- --------------------------------------------------------

--
-- Table structure for table `ureg`
--

CREATE TABLE IF NOT EXISTS `ureg` (
  `uid` int(20) NOT NULL AUTO_INCREMENT,
  `lid` int(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `address` varchar(40) NOT NULL,
  `dob` date NOT NULL,
  `phone` int(12) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `ureg`
--

INSERT INTO `ureg` (`uid`, `lid`, `fname`, `mname`, `lname`, `address`, `dob`, `phone`, `email`, `password`) VALUES
(2, 0, '$fname', '$mname', '$lname', '$address', '0000-00-00', 0, '$email', '$password'),
(3, 0, 'name', 'name', '', 'address', '0000-00-00', 789456123, 'm@m.com', '123456789'),
(4, 0, 'name', 'name', 'name', 'address', '0000-00-00', 789456123, 'm@m.com', '123456789'),
(5, 0, 'name', 'name', 'name', 'address', '0000-00-00', 789456123, 'm@m.com', '123456789'),
(6, 0, 'name', 'name', 'name', 'address', '0000-00-00', 789456123, 'm@m.com', '123456789'),
(7, 0, 'name', 'name', 'name', 'address', '0000-00-00', 789456123, 'm@m.com', '123456789'),
(8, 0, 'name', 'name', 'name', 'address', '0000-00-00', 789456123, 'm@m.com', '123456789'),
(9, 0, 'jdshhfv', 'fdjld', 'ilgoihrtg', 'rthierh', '2018-08-22', 1234567890, 'jishnupb123143@gmail.com', 'jishnu'),
(10, 0, 'jishnu', 'mon', 'pb', 'nfcdnkjbck bkjb', '1997-05-06', 2147483647, 'jishnupb123143@gmail.com', 'jishnu'),
(11, 0, 'jishnu', 'mon', 'pb', 'nfcdnkjbck bkjb', '1997-05-06', 2147483647, 'jishnupb123143@gmail.com', 'jishnu'),
(12, 0, 'nikhil', 'p', 'jose', 'gcvgnb cgchbng', '1994-10-03', 2147483647, 'nikhilpjose@mca.ajce.in', 'nikhil'),
(13, 0, 'mfjbcrf', 'few', 'wdefdwe', 'WDEHFWE', '2018-08-29', 0, 'jishnu@gmail.com', '123'),
(14, 0, 'vinayan', 'av', 'no', 'arangassery', '1996-03-08', 2147483647, 'vinayanav@mca.ajce.in', '123456'),
(15, 0, 'vinayan', 'av', 'no', 'arangassery', '1996-03-08', 2147483647, 'vinayanav@mca.ajce.in', '123456'),
(16, 0, 'name', 'mon', 'jose', 'hvvhbj', '2020-11-29', 5222222, 'hfhv@gmai.com', '123'),
(17, 0, 'name1', 'mon', 'jose', 'hvvhbj', '2020-11-29', 5222222, 'hfhv@gmai.com', '123'),
(18, 0, 'name2', 'mon', 'jose', 'hvvhbj', '2020-11-29', 5222222, 'hfhv@gmai.com', '123'),
(19, 0, 'jishnu', 'mon', 'PB', 'Peruvanthanam', '1997-05-06', 2147483647, 'jishnupb123143@gmail.com', 'admin'),
(20, 0, 'Jiljo', 'K', 'George', 'Kannur', '1996-05-20', 2147483647, 'j4jiljo@gmail.com', 'jiljo'),
(21, 0, 'Vishnu', 'p', 'Babu', 'bkjvjkhk nh', '2000-06-19', 2147483647, 'vishnu123@gmail.com', 'vishnu'),
(22, 0, 'efjchnnnedhr', 'fcgcuegdujg', 'dgxg', 'hjfjhfvhjfv', '2000-12-20', 2147483647, 'jishnu@gmail.com', '1234'),
(23, 0, 'abc', 'DEF', 'HHJJ', 'JHVJHFVJH', '2000-12-20', 2147483647, 'abc@gmail.com', '1Ab12345'),
(24, 0, 'dbkjb', 'efcjkhk', 'hd', 'i', '2000-12-12', 874596120, 'abc1@gmail.com', '1Ab12345'),
(25, 0, 'user', 'user', 'user', 'uesr', '2019-10-30', 2147483647, 'hfhv@gmai.com', '1Ab12345'),
(26, 0, 'svxcgscS', 'cgc', 'chc', 'c', '1994-02-10', 2147483647, 'jishnu@gmail.com', '1Ab12345'),
(27, 0, '123', 'q23', '123', 'qwqw', '1234-09-23', 0, 'q@g.com', 'Qwerty@123'),
(28, 0, 'jhj', 'jhjhjh', 'hjhjh', 'jhjhjhj', '2010-10-10', 2147483647, 'abc1@gmail.com', 'Alan@1996'),
(29, 0, 'jhj', 'jhjhjh', 'hjhjh', 'jhjhjhj', '2010-10-10', 2147483647, 'abc1@gmail.com', 'Alan@123'),
(30, 0, 'jhj', 'jhjhjh', 'hjhjh', 'jhjhjhj', '2010-10-10', 2147483647, 'abc1@gmail.com', 'Mlpo@123'),
(31, 0, 'jhj', 'jhjhjh', 'hjhjh', 'jhjhjhj', '2010-10-10', 2147483647, 'abc1@gmail.com', 'Mlpoo@123'),
(32, 0, 'Jishnu', 'mon', 'PB', 'powath', '1997-05-06', 2147483647, 'jishnupb123143@gmail.com', 'Jishnu@123'),
(33, 0, 'Nandhu', 'Aravind', ' ', 'nfvdjbjkdjbvsfjbsj', '1995-03-14', 2147483647, 'nandhu@123', 'Nandhuaravind@123'),
(34, 0, 'Admin', 'Admin', 'Admin', 'Autoshop', '1995-03-14', 2147483647, 'jishnupb123143@gmail.com', 'Admin@123'),
(35, 0, 'Nikhil', 'P', 'Jose', 'Kannur', '1993-03-14', 2147483647, 'nikhilpjose@mca.ajce.in', 'Nikhil@123'),
(36, 0, 'Rahul', '  ', 'Chacko', 'Ponkunnam', '1996-03-13', 2147483647, 'rahulchacko@123', 'Rahul@123'),
(37, 0, 'Jishnu', 'Mon', 'PB', 'Powath(h) Peruvanthanam', '1997-05-06', 2147483647, 'jishnupb123143@gmail.com', 'Jishnu@123'),
(38, 0, 'Jishnu', 'Mon', 'PB', 'Powath house Peruvanthanam po chuzhuppu', '1997-05-06', 2147483647, 'jishnupb123143@gmail.com', 'Jishnu@123'),
(39, 0, 'edwbfj', 'jhg', 'jjg', 'hgjhg', '2019-03-13', 2147483647, 'jishnupb123143@gmail.com', 'Jishnu@123'),
(40, 0, 'Admin', 'Admin', 'Admin', 'Autoshop Admin', '1997-05-06', 2147483647, 'admin123@gmail.com', 'Admin@123'),
(41, 0, 'Rahul', ' ', 'Chacko', 'Ponkunnam', '1996-01-16', 2147483647, 'rahul123@gmail.com', 'Rahul@123'),
(42, 0, 'Nikhil', 'P', 'Jose', 'Kannur', '1993-05-13', 2147483647, 'nikhil123@gmail.com', 'Nikhil@123'),
(43, 0, 'Thomas', ' m', 'Joseph', 'adhhjhafjgj', '1996-12-10', 2147483647, 'thomas123@gmail.com', 'Thomas@123'),
(44, 0, 'Nandhu', ' M', 'Aravind', 'Kottayam', '1996-03-19', 2147483647, 'nandhu123@gmail.com', 'Nandhu@123'),
(45, 0, 'Thomas', ' ', 'Joseph', 'oiuydxgfchjbhj', '1996-04-21', 2147483647, 'thomas123@gmail.com', 'f640fdc2c16617522f43c94a634d7c3c');
