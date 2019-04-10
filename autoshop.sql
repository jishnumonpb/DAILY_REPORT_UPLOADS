-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 19, 2018 at 09:38 AM
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
  `image` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `fuel` varchar(50) NOT NULL,
  `registred` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `milage` varchar(50) NOT NULL,
  `transmission` varchar(50) NOT NULL,
  PRIMARY KEY (`vid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `addvehicle`
--

INSERT INTO `addvehicle` (`vid`, `vehicle`, `basic_price`, `image`, `description`, `model`, `color`, `fuel`, `registred`, `year`, `milage`, `transmission`) VALUES
(1, '', '', '', '', 'echvhjv', 'vcvvewvv', 'rfjhvhjv', 'cejvrcbjvr', '2014', '50', 'nkvnkj'),
(2, '', '', '', '', 'febhbejb', 'fbbeb', 'bkjbkbj', 'b', '2015', '40', 'rfcjb'),
(3, '', '', '', '', 'rnkjkjb', 'brbjbbkb', 'rbhjbbr', 'rbjbbrkb', '2015', '40', 'jbjhb'),
(4, '', '', '', '', 'rnkjkjb', 'brbjbbkb', 'rbhjbbr', 'rbjbbrkb', '2015', '40', 'jbjhb'),
(5, '', '', '', '', 'rnkjkjb', 'brbjbbkb', 'rbhjbbr', 'rbjbbrkb', '2015', '40', 'jbjhb'),
(6, '', '', '', '', 'gchchc', 'ghhcc', 'gchhh', 'gh', '2015', '45', 'lbhhgvh'),
(7, 'hvvjv', 'kjbjvv', 'uploads/A41I1942.JPG', 'kkgdg', 'kbkdbb', 'dbbd', 'kbdbb', 'dkdn', '5151', '55', 'lhvnjv'),
(8, 'fbwjhbjh', 'vewfvjvj', 'uploads/A41I1941.JPG', 'gerhjb', 'effnjkb', 'fdjjb', 'val', 'yes', '2018', '55', 'llgrnkn'),
(9, 'fbwjhbjh', 'vewfvjvj', 'uploads/A41I1941.JPG', 'gerhjb', 'effnjkb', 'fdjjb', 'val', 'yes', '2018', '55', 'llgrnkn'),
(10, 'rlenln', 'nkjbkb', 'uploads/A41I1803.JPG', 'nnbbb', 'kkkb', 'nnkj', 'val', 'yes', '2015', '40', 'nvhjb'),
(11, 'ewrhuih', 'ewff', 'uploads/Albin.JPG', 'recfhbhgfr', 'fguggbeb', 'ergfgebg', 'Diesel', 'yes', '2015', '42', 'dfssb');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `login_autoshop`
--

INSERT INTO `login_autoshop` (`lid`, `uname`, `password`, `rol`, `status`) VALUES
(1, '', 'd41d8cd98f00b204e9800998ecf8427e', 'user', '0'),
(2, '', 'd41d8cd98f00b204e9800998ecf8427e', 'user', '0'),
(15, 'vinayanav@mca.ajce.in', 'e10adc3949ba59abbe56e057f20f883e', 'user', '0'),
(16, 'bhbhb', '202cb962ac59075b964b07152d234b70', 'user', '0'),
(19, 'admin', 'admin', 'user', '0'),
(20, 'jiljo', 'd2f4928ad8416870e2cc8cc9865b709e', 'user', '0'),
(21, 'vishnu', '1963fd70e789022f6f5b11498f992404', 'user', '0'),
(22, 'rahul', 'vv', 'user', '1'),
(23, 'abc', '90c93a0654141e6abab100876dfe3bbe', 'user', '0'),
(24, 'abc', '90c93a0654141e6abab100876dfe3bbe', 'user', '0'),
(25, 'jishnupb123143@gmail.com', '90c93a0654141e6abab100876dfe3bbe', 'user', '0'),
(26, 'thomas', '90c93a0654141e6abab100876dfe3bbe', 'user', '0'),
(27, 'qwerty123', '8dd43ae0638e1ce2690e2e3cfa653923', 'user', '0');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `user_id` int(20) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `address` int(100) NOT NULL,
  `dob` date NOT NULL,
  `phone` int(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `registration`
--


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
  `uname` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `ureg`
--

INSERT INTO `ureg` (`uid`, `lid`, `fname`, `mname`, `lname`, `address`, `dob`, `phone`, `email`, `uname`, `password`) VALUES
(2, 0, '$fname', '$mname', '$lname', '$address', '0000-00-00', 0, '$email', '$uname', '$password'),
(3, 0, 'name', 'name', '', 'address', '0000-00-00', 789456123, 'm@m.com', '', '123456789'),
(4, 0, 'name', 'name', 'name', 'address', '0000-00-00', 789456123, 'm@m.com', '', '123456789'),
(5, 0, 'name', 'name', 'name', 'address', '0000-00-00', 789456123, 'm@m.com', 'jishnupb123143@gmail.com', '123456789'),
(6, 0, 'name', 'name', 'name', 'address', '0000-00-00', 789456123, 'm@m.com', 'jishnupb123143@gmail.com', '123456789'),
(7, 0, 'name', 'name', 'name', 'address', '0000-00-00', 789456123, 'm@m.com', 'jishnupb123143@gmail.com', '123456789'),
(8, 0, 'name', 'name', 'name', 'address', '0000-00-00', 789456123, 'm@m.com', 'jishnupb123143@gmail.com', '123456789'),
(9, 0, 'jdshhfv', 'fdjld', 'ilgoihrtg', 'rthierh', '2018-08-22', 1234567890, 'jishnupb123143@gmail.com', '', 'jishnu'),
(10, 0, 'jishnu', 'mon', 'pb', 'nfcdnkjbck bkjb', '1997-05-06', 2147483647, 'jishnupb123143@gmail.com', '', 'jishnu'),
(11, 0, 'jishnu', 'mon', 'pb', 'nfcdnkjbck bkjb', '1997-05-06', 2147483647, 'jishnupb123143@gmail.com', 'jishnu', 'jishnu'),
(12, 0, 'nikhil', 'p', 'jose', 'gcvgnb cgchbng', '1994-10-03', 2147483647, 'nikhilpjose@mca.ajce.in', 'nikhil', 'nikhil'),
(13, 0, 'mfjbcrf', 'few', 'wdefdwe', 'WDEHFWE', '2018-08-29', 0, 'jishnu@gmail.com', '123', '123'),
(14, 0, 'vinayan', 'av', 'no', 'arangassery', '1996-03-08', 2147483647, 'vinayanav@mca.ajce.in', 'vinayanav@mca.ajce.in', '123456'),
(15, 0, 'vinayan', 'av', 'no', 'arangassery', '1996-03-08', 2147483647, 'vinayanav@mca.ajce.in', 'vinayanav@mca.ajce.in', '123456'),
(16, 0, 'name', 'mon', 'jose', 'hvvhbj', '2020-11-29', 5222222, 'hfhv@gmai.com', 'bhbhb', '123'),
(17, 0, 'name1', 'mon', 'jose', 'hvvhbj', '2020-11-29', 5222222, 'hfhv@gmai.com', 'bhbhb', '123'),
(18, 0, 'name2', 'mon', 'jose', 'hvvhbj', '2020-11-29', 5222222, 'hfhv@gmai.com', 'bhbhb', '123'),
(19, 0, 'jishnu', 'mon', 'PB', 'Peruvanthanam', '1997-05-06', 2147483647, 'jishnupb123143@gmail.com', 'admin', 'admin'),
(20, 0, 'Jiljo', 'K', 'George', 'Kannur', '1996-05-20', 2147483647, 'j4jiljo@gmail.com', 'jiljo', 'jiljo'),
(21, 0, 'Vishnu', 'p', 'Babu', 'bkjvjkhk nh', '2000-06-19', 2147483647, 'vishnu123@gmail.com', 'vishnu', 'vishnu'),
(22, 0, 'efjchnnnedhr', 'fcgcuegdujg', 'dgxg', 'hjfjhfvhjfv', '2000-12-20', 2147483647, 'jishnu@gmail.com', 'rahul', '1234'),
(23, 0, 'abc', 'DEF', 'HHJJ', 'JHVJHFVJH', '2000-12-20', 2147483647, 'abc@gmail.com', 'abc', '1Ab12345'),
(24, 0, 'dbkjb', 'efcjkhk', 'hd', 'i', '2000-12-12', 874596120, 'abc1@gmail.com', 'abc', '1Ab12345'),
(25, 0, 'user', 'user', 'user', 'uesr', '2019-10-30', 2147483647, 'hfhv@gmai.com', 'jishnupb123143@gmail.com', '1Ab12345'),
(26, 0, 'svxcgscS', 'cgc', 'chc', 'c', '1994-02-10', 2147483647, 'jishnu@gmail.com', 'thomas', '1Ab12345'),
(27, 0, '123', 'q23', '123', 'qwqw', '1234-09-23', 0, 'q@g.com', 'qwerty123', 'Qwerty@123');
