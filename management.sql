-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 24, 2015 at 03:19 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `management`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `name` varchar(50) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `nat` varchar(100) NOT NULL,
  `state` varchar(50) NOT NULL,
  `lga` varchar(50) NOT NULL,
  `religion` varchar(100) NOT NULL,
  `edu` varchar(200) NOT NULL,
  `school` varchar(200) NOT NULL,
  `skill` varchar(200) NOT NULL,
  `course` varchar(50) NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `sphone` varchar(20) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_complains`
--

CREATE TABLE IF NOT EXISTS `tbl_complains` (
  `cid` int(10) NOT NULL AUTO_INCREMENT,
  `cust_id` int(10) NOT NULL,
  `cust_name` varchar(40) NOT NULL,
  `comp_type` varchar(40) NOT NULL,
  `comp_title` varchar(200) NOT NULL,
  `comp_desc` text NOT NULL,
  `status` varchar(20) NOT NULL,
  `eng_id` int(10) NOT NULL,
  `eng_name` varchar(40) NOT NULL,
  `eng_comment` varchar(240) NOT NULL,
  `create_date` datetime NOT NULL,
  `close_date` datetime NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `tbl_complains`
--

INSERT INTO `tbl_complains` (`cid`, `cust_id`, `cust_name`, `comp_type`, `comp_title`, `comp_desc`, `status`, `eng_id`, `eng_name`, `eng_comment`, `create_date`, `close_date`) VALUES
(15, 9, 'coco', 'hardware', 'system rebotting', 'pls attent to the system', 'assigned', 8, 'Divine', 'please change the battery , possible errors is that the system is over heating so i suggest you bring the system to our office 48 Udibio Akwa Ibom Uyo', '2015-11-06 03:54:52', '0000-00-00 00:00:00'),
(14, 11, 'rita joy', 'hardware', 'System not working', 'System is faulty can not access all my files pls attent to it soon', 'working', 7, 'Charles Inyang', 'Please specify your proble, so as to get possible sollution, or please come to our office.mumu u cnnot rite by yourself', '2015-11-06 03:53:22', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE IF NOT EXISTS `tbl_customer` (
  `cid` int(10) NOT NULL AUTO_INCREMENT,
  `cname` varchar(40) NOT NULL,
  `cpass` varchar(40) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(30) NOT NULL,
  `c_mobile` varchar(15) NOT NULL,
  `date_time` datetime NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`cid`, `cname`, `cpass`, `address`, `email`, `c_mobile`, `date_time`) VALUES
(11, 'rita joy', 'rita', '48 udobio', 'rita@gmail.com', '07035700945', '2015-11-06 02:42:11'),
(12, 'peter sam', 'peter', '5788mjmvmjgmjmjvbjmvbgmjmjmvbjm', 'sam@gmail.com', '0908765443', '2015-11-06 04:50:29'),
(8, 'Sarah Ugochukwu', 'sareh', '457 usongma estate', 'sarah@gmail.com', '085805480503', '2015-11-05 20:56:48'),
(9, 'coco', 'coco', '58 udobio', 'charex4real@gmail.com', '07035700945', '2015-11-05 23:59:54'),
(10, 'obina nnamoko', 'obina', '48 udobioi', 'obina@gmail.com', '07032995550', '2015-11-06 02:34:38'),
(13, 'peter', 'coco', 'bkjbjkbbk', 'coco@gmail.com', '07032995550', '2015-11-12 21:48:49');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_engineer`
--

CREATE TABLE IF NOT EXISTS `tbl_engineer` (
  `eid` int(10) NOT NULL AUTO_INCREMENT,
  `ename` varchar(40) NOT NULL,
  `epass` varchar(40) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(40) NOT NULL,
  `e_mobile` varchar(20) NOT NULL,
  `date_time` datetime NOT NULL,
  PRIMARY KEY (`eid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_engineer`
--

INSERT INTO `tbl_engineer` (`eid`, `ename`, `epass`, `address`, `email`, `e_mobile`, `date_time`) VALUES
(6, 'Mr Chidi Nnamoko', 'amol', '48 Udobio street', 'chidirafeal@gmail.co', '08132722283', '2011-02-02 23:36:51'),
(8, 'Divine', 'divine', '48 Udobio', 'divine@gmail.com', '08067037559', '2015-11-05 20:53:15'),
(7, 'Charles Inyang', 'grooves123', '48 Udobio', 'charex4real@gmail.co', '07035700945', '2015-11-05 20:51:04');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_personal`
--

CREATE TABLE IF NOT EXISTS `tbl_personal` (
  `sid` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `mobile` varchar(13) NOT NULL,
  `lga` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `programType` varchar(50) NOT NULL,
  `nat` varchar(50) NOT NULL,
  `date_time` datetime NOT NULL,
  `imge` varchar(200) NOT NULL,
  `pay` varchar(50) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `school` varchar(100) NOT NULL,
  `skill` varchar(200) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `sphone` varchar(50) NOT NULL,
  PRIMARY KEY (`sid`),
  UNIQUE KEY `sid` (`sid`),
  UNIQUE KEY `sid_2` (`sid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_personal`
--

INSERT INTO `tbl_personal` (`sid`, `name`, `sex`, `dob`, `address`, `mobile`, `lga`, `state`, `course`, `programType`, `nat`, `date_time`, `imge`, `pay`, `religion`, `school`, `skill`, `sname`, `occupation`, `sphone`) VALUES
('2344', 'iioyyiioyioyioyoiy', 'male', 'iohohoihoihoihhhoihh', 'hhohoihoihoihoihoihiohohoioihoihoi', '6868876245467', 'hoihoihhhhhhhhhhhhhhhh', 'iohhhhiohioh', 'basic', 'diploma', 'hoihoihoihoihhoihhioh', '2015-11-15 18:35:47', 'student_image/', '', 'Christian', 'guiguigiu', 'fasayugfuu', 'iuguigggigui', 'guguigiuhiuhiuh', '7986887544'),
('1298', 'iuhiuhiuhfidhihf', 'male', 'jkdcnkjnkj', 'hfdkjcfnkjdfnkjnkj', '57574657888', 'bhjbvbhjj', 'vhgccgcc', 'basic', 'diploma', 'gfxfjjkhn', '2015-11-15 18:56:18', 'student_image/', '70000', 'Christian', 'knbuduydy fd', 'sdopkokip[[p[p', 'duipodsfpofdskpokfp', 'pokjopjopjojoijoioijoi', '98798732649'),
('0980988', 'rweiohoihio', 'male', '90877', 'joijfefniofgoioihjoihh', '86765434567', 'iuhihihoh', 'iohuhuhuh', 'eview', 'diploma', 'iuohiuhuhhhhu', '2015-11-15 19:02:06', 'student_image/', '70000', 'Christian', 'iuhfduioh fhfhuiihui', 'cdcfcrfceijrgoiehiohjoirhjihoihoh', 'hiuhiuhhiuhiu', 'oiuhihiuhiuo', '609688932323'),
('89699', 'ihjoihihphoihio', 'male', 'oijoioiiuiuguig', 'iuyftydyfyuguig', '6876876868', 'iuuiohihiuhiuhiuo', 'hiuihuiuhihiu', 'basic', 'diploma', 'huiiuiuuig', '2015-11-15 19:37:36', 'student_image/', '7000', 'Christian', 'oijoijoidfjsojoi', 'joijjjj', 'oihjoiuhiouhoihoiu', 'hhoihoihhihio', '897988686');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_plans`
--

CREATE TABLE IF NOT EXISTS `tbl_plans` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `cid` int(10) NOT NULL,
  `plans` varchar(255) NOT NULL,
  `amt` double NOT NULL,
  `plan_date` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_plans`
--

INSERT INTO `tbl_plans` (`id`, `cid`, `plans`, `amt`, `plan_date`) VALUES
(3, 5, 'Basic Plan, Music Plan, ', 150, '13'),
(4, 6, 'Basic Plan, ', 120, '05'),
(5, 7, '', 0, '05'),
(6, 11, ', ', 0, '06');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_secondary`
--

CREATE TABLE IF NOT EXISTS `tbl_secondary` (
  `sid` varchar(50) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `school` varchar(50) NOT NULL,
  `skill` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_secondary`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_supplier`
--

CREATE TABLE IF NOT EXISTS `tbl_supplier` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `sname` varchar(40) NOT NULL,
  `spass` varchar(40) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(40) NOT NULL,
  `s_mobile` varchar(15) NOT NULL,
  `date_time` datetime NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_supplier`
--

INSERT INTO `tbl_supplier` (`sid`, `sname`, `spass`, `address`, `email`, `s_mobile`, `date_time`) VALUES
(1, 'Mr Chibuzor', 'chibuzor', '46 Uyo Akwa ibom state', 'chibuzor@gmail.com', '08035711284', '2015-11-05 17:29:05');
