-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 14, 2016 at 03:07 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `result`
--

-- --------------------------------------------------------

--
-- Table structure for table `final1st`
--

CREATE TABLE `final1st` (
  `std_id` int(11) NOT NULL,
  `matric` varchar(15) NOT NULL,
  `GES401` int(10) NOT NULL,
  `CSC403` int(10) NOT NULL,
  `CSC405` int(10) NOT NULL,
  `CSC407` int(10) NOT NULL,
  `CSC411` int(10) NOT NULL,
  `CSC497` int(10) NOT NULL,
  `CSC401` int(10) NOT NULL,
  `CSC409` int(10) NOT NULL,
  `CSC413` int(10) NOT NULL,
  PRIMARY KEY  (`std_id`),
  UNIQUE KEY `matric` (`matric`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `final1st`
--

INSERT INTO `final1st` (`std_id`, `matric`, `GES401`, `CSC403`, `CSC405`, `CSC407`, `CSC411`, `CSC497`, `CSC401`, `CSC409`, `CSC413`) VALUES
(1, '50043', 5, 5, 5, 5, 5, 5, 5, 4, 5);

-- --------------------------------------------------------

--
-- Table structure for table `final2nd`
--

CREATE TABLE `final2nd` (
  `std_id` int(11) NOT NULL,
  `matric` varchar(15) NOT NULL,
  `CSC499` int(10) NOT NULL,
  `CSC404` int(10) NOT NULL,
  `CSC406` int(10) NOT NULL,
  `CSC402` int(10) NOT NULL,
  `ITG402` int(10) NOT NULL,
  `MIS402` int(10) NOT NULL,
  `PHY466` int(10) NOT NULL,
  PRIMARY KEY  (`std_id`),
  UNIQUE KEY `matric` (`matric`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `final2nd`
--

INSERT INTO `final2nd` (`std_id`, `matric`, `CSC499`, `CSC404`, `CSC406`, `CSC402`, `ITG402`, `MIS402`, `PHY466`) VALUES
(1, '50043', 5, 5, 5, 5, 5, 5, 4);

-- --------------------------------------------------------

--
-- Table structure for table `std`
--

CREATE TABLE `std` (
  `id` int(50) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL,
  `jamb` varchar(15) NOT NULL,
  `matric` varchar(11) NOT NULL,
  `sex` varchar(11) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `address` varchar(200) NOT NULL,
  `lga` varchar(150) NOT NULL,
  `town` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `nat` varchar(50) NOT NULL,
  `mobile` int(11) NOT NULL,
  `programType` varchar(50) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `religion` varchar(15) NOT NULL,
  `date_time` datetime NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `matric` (`matric`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `std`
--

INSERT INTO `std` (`id`, `name`, `jamb`, `matric`, `sex`, `dob`, `address`, `lga`, `town`, `state`, `nat`, `mobile`, `programType`, `dept`, `religion`, `date_time`) VALUES
(1, 'Inyang Charles', '86896896896', '50043', 'male', '0970970970', '070707707', '07770', '70709709', '7097097', '097097090ohyiohiohiuhhkhk', 99099, 'bsc', 'Computer Science', 'Christian', '2015-12-21 21:42:06'),
(3, 'Chuks Ifioma chineye', '88768768', '50044', 'male', '8797897897', 'jpoj pdjnjdnmdbhjbvhjvudvvvyvvjv		ddhihfihidsffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff', 'vhjvhjvjhbvbbkjbk', 'jpojpojjpopojpojoojiohiohiohioh', 'hoihiohiohiiiiiiiiiiiiiiii', 'oihophihyhiughiuub', 2147483647, 'Bsc', 'Computer Science', 'Christian', '2015-12-20 11:20:14'),
(4, 'Peter Eniola Effiom', '30009485', '50046', 'male', '29/02/1988', 'kfjiojgdffffffiogiooggiojgjrrer', 'ugiugiuiugiugiu', 'ggiug', 'iugiuggui', 'gugigiiugigig', 2147483647, 'bsc', 'Computer Science', 'Christian', '2015-12-21 21:41:58');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_complains`
--

CREATE TABLE `tbl_complains` (
  `cid` int(10) NOT NULL auto_increment,
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
  PRIMARY KEY  (`cid`)
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

CREATE TABLE `tbl_customer` (
  `cid` int(10) NOT NULL auto_increment,
  `cname` varchar(40) NOT NULL,
  `cpass` varchar(40) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(30) NOT NULL,
  `c_mobile` varchar(15) NOT NULL,
  `date_time` datetime NOT NULL,
  PRIMARY KEY  (`cid`)
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

CREATE TABLE `tbl_engineer` (
  `eid` int(10) NOT NULL auto_increment,
  `ename` varchar(40) NOT NULL,
  `epass` varchar(40) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(40) NOT NULL,
  `e_mobile` varchar(20) NOT NULL,
  `date_time` datetime NOT NULL,
  PRIMARY KEY  (`eid`)
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

CREATE TABLE `tbl_personal` (
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
  PRIMARY KEY  (`sid`),
  UNIQUE KEY `sid` (`sid`),
  UNIQUE KEY `sid_2` (`sid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
-- Table structure for table `yearone1st`
--

CREATE TABLE `yearone1st` (
  `std_id` int(11) NOT NULL,
  `matric` varchar(15) NOT NULL,
  `CSC101` int(10) NOT NULL,
  `GES101` int(10) NOT NULL,
  `GES103` int(10) NOT NULL,
  `ITG101` int(10) NOT NULL,
  `ITG101` int(10) NOT NULL,
  `MTH101` int(10) NOT NULL,
  `STS1011` int(10) NOT NULL,
  `PHY101` int(10) NOT NULL,
  `PHY103` int(10) NOT NULL,
  `PHY107` int(10) NOT NULL,
  PRIMARY KEY  (`std_id`),
  UNIQUE KEY `matric` (`matric`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `yearone1st`
--

INSERT INTO `yearone1st` (`std_id`, `matric`, `CSC101`, `GES101`, `GES103`, `ITG101`, `ITG101`, `MTH101`, `STS1011`, `PHY101`, `PHY103`, `PHY107`) VALUES
(1, '50043', 5, 5, 4, 4, 5, 4, 5, 4, 5, 5),
(3, '50044', 5, 3, 4, 4, 3, 4, 5, 4, 3, 5);

-- --------------------------------------------------------

--
-- Table structure for table `yearone2nd`
--

CREATE TABLE `yearone2nd` (
  `std_id` int(11) NOT NULL,
  `matric` varchar(15) NOT NULL,
  `GES102` int(10) NOT NULL,
  `GES104` int(10) NOT NULL,
  `GES106` int(10) NOT NULL,
  `GES108` int(10) NOT NULL,
  `CSC102` int(10) NOT NULL,
  `CSC104` int(10) NOT NULL,
  `ITG102` int(10) NOT NULL,
  `STS1013` int(10) NOT NULL,
  `MTH102` int(10) NOT NULL,
  `PHY102` int(10) NOT NULL,
  `PHY108` int(10) NOT NULL,
  PRIMARY KEY  (`std_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `yearone2nd`
--

INSERT INTO `yearone2nd` (`std_id`, `matric`, `GES102`, `GES104`, `GES106`, `GES108`, `CSC102`, `CSC104`, `ITG102`, `STS1013`, `MTH102`, `PHY102`, `PHY108`) VALUES
(1, '50043', 5, 4, 3, 4, 5, 3, 4, 5, 3, 4, 3),
(3, '50044', 5, 4, 3, 5, 4, 3, 5, 4, 5, 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `yearthree1st`
--

CREATE TABLE `yearthree1st` (
  `std_id` int(11) NOT NULL,
  `matric` varchar(15) NOT NULL,
  `GES301` int(10) NOT NULL,
  `CSC301` int(10) NOT NULL,
  `CSC303` int(10) NOT NULL,
  `CSC305` int(10) NOT NULL,
  `CSC307` int(10) NOT NULL,
  `CSC309` int(10) NOT NULL,
  `CSC311` int(10) NOT NULL,
  `CSC313` int(10) NOT NULL,
  `MIS301` int(10) NOT NULL,
  PRIMARY KEY  (`std_id`),
  UNIQUE KEY `matric` (`matric`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `yearthree1st`
--

INSERT INTO `yearthree1st` (`std_id`, `matric`, `GES301`, `CSC301`, `CSC303`, `CSC305`, `CSC307`, `CSC309`, `CSC311`, `CSC313`, `MIS301`) VALUES
(1, '50043', 5, 4, 4, 3, 5, 5, 5, 4, 5);

-- --------------------------------------------------------

--
-- Table structure for table `yearthree2nd`
--

CREATE TABLE `yearthree2nd` (
  `std_id` int(10) NOT NULL,
  `matric` varchar(15) NOT NULL,
  `CSC202` int(10) NOT NULL,
  `CSC204` int(10) NOT NULL,
  `CSC206` int(10) NOT NULL,
  `CSC307` int(10) NOT NULL,
  `CSC309` int(10) NOT NULL,
  `CSC311` int(10) NOT NULL,
  PRIMARY KEY  (`std_id`),
  UNIQUE KEY `matric` (`matric`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `yearthree2nd`
--

INSERT INTO `yearthree2nd` (`std_id`, `matric`, `CSC202`, `CSC204`, `CSC206`, `CSC307`, `CSC309`, `CSC311`) VALUES
(1, '50043', 5, 5, 5, 5, 5, 4);

-- --------------------------------------------------------

--
-- Table structure for table `yeartwo1st`
--

CREATE TABLE `yeartwo1st` (
  `std_id` int(11) NOT NULL,
  `GES201` int(10) NOT NULL,
  `GES203` int(10) NOT NULL,
  `GES205` int(10) NOT NULL,
  `CSC201` int(10) NOT NULL,
  `CSC203` int(10) NOT NULL,
  `ITG203` int(10) NOT NULL,
  `PHY201` int(10) NOT NULL,
  `MIS201` int(10) NOT NULL,
  `MTH201` int(10) NOT NULL,
  `PHY201` int(10) NOT NULL,
  `ITG201` int(10) NOT NULL,
  `MTH205` int(10) NOT NULL,
  `matric` varchar(15) NOT NULL,
  PRIMARY KEY  (`std_id`),
  UNIQUE KEY `matric` (`matric`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `yeartwo1st`
--

INSERT INTO `yeartwo1st` (`std_id`, `GES201`, `GES203`, `GES205`, `CSC201`, `CSC203`, `ITG203`, `PHY201`, `MIS201`, `MTH201`, `PHY201`, `ITG201`, `MTH205`, `matric`) VALUES
(1, 4, 0, 5, 4, 5, 5, 5, 5, 5, 5, 5, 5, '50043');

-- --------------------------------------------------------

--
-- Table structure for table `yeartwo2nd`
--

CREATE TABLE `yeartwo2nd` (
  `std_id` int(11) NOT NULL,
  `matric` varchar(11) NOT NULL,
  `GES202` int(10) NOT NULL,
  `GES206` int(10) NOT NULL,
  `cis236` int(10) NOT NULL,
  `CSC202` int(10) NOT NULL,
  `CSC204` int(10) NOT NULL,
  `CSC206` int(10) NOT NULL,
  `TEL202` int(10) NOT NULL,
  `mth205` int(10) NOT NULL,
  `sta206` int(10) NOT NULL,
  `MIS202` int(10) NOT NULL,
  `TEL202` int(10) NOT NULL,
  PRIMARY KEY  (`std_id`),
  UNIQUE KEY `matric` (`matric`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `yeartwo2nd`
--

INSERT INTO `yeartwo2nd` (`std_id`, `matric`, `GES202`, `GES206`, `cis236`, `CSC202`, `CSC204`, `CSC206`, `TEL202`, `mth205`, `sta206`, `MIS202`, `TEL202`) VALUES
(1, '50043', 5, 5, 4, 4, 5, 4, 5, 4, 5, 4, 5),
(3, '50044', 4, 5, 3, 2, 2, 1, 0, 5, 4, 3, 3);
