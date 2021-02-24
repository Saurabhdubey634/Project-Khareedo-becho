-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2020 at 08:13 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id12908824_khareedo`
--

-- --------------------------------------------------------

--
-- Table structure for table `messagein`
--

CREATE TABLE `messagein` (
  `Id` int(11) NOT NULL,
  `SendTime` datetime DEFAULT NULL,
  `ReceiveTime` datetime DEFAULT NULL,
  `MessageFrom` varchar(80) DEFAULT NULL,
  `MessageTo` varchar(80) DEFAULT NULL,
  `SMSC` varchar(80) DEFAULT NULL,
  `MessageText` text DEFAULT NULL,
  `MessageType` varchar(80) DEFAULT NULL,
  `MessageParts` int(11) DEFAULT NULL,
  `MessagePDU` text DEFAULT NULL,
  `Gateway` varchar(80) DEFAULT NULL,
  `UserId` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messagein`
--

INSERT INTO `messagein` (`Id`, `SendTime`, `ReceiveTime`, `MessageFrom`, `MessageTo`, `SMSC`, `MessageText`, `MessageType`, `MessageParts`, `MessagePDU`, `Gateway`, `UserId`) VALUES
(1, '2017-11-02 05:19:29', NULL, '211', '+639305235027', NULL, '0B05040B8423F00003FB0302,870906890101C651018715060350524F585932000187070603534D415254204D4D530001C65201872F060350524F5859325F3100018720060331302E3130322E36312E343600018721068501872206034E4150475052535F320001C6530187230603383038300001010101C600015501873606037734000187070603534D4152', NULL, NULL, NULL, NULL, NULL),
(2, '2017-11-02 05:19:34', NULL, '211', '+639305235027', NULL, '0B05040B8423F00003FB0303,54204D4D5300018739060350524F585932000187340603687474703A2F2F31302E3130322E36312E3233383A383030322F00010101', NULL, NULL, NULL, NULL, NULL),
(3, '2017-11-02 05:19:14', NULL, '211', '+639305235027', NULL, '0B05040B8423F00003FA0201,6C062F1F2DB69180923646443032463643313042394231363544354242413143304143413232424334343239453236423600030B6A00C54503312E310001C6560187070603534D41525420494E5445524E4554000101C65501871106034E4150475052535F330001871006AB0187070603534D41525420494E5445524E455400', NULL, NULL, NULL, NULL, NULL),
(4, '2017-11-02 05:19:19', NULL, '211', '+639305235027', NULL, '0B05040B8423F00003FA0202,0187140187080603696E7465726E65740001870906890101C600015501873606037732000187070603534D41525420494E5445524E45540001872206034E4150475052535F330001C65901873A0603687474703A2F2F6D2E736D6172742E636F6D2E7068000187070603484F4D450001871C01010101', NULL, NULL, NULL, NULL, NULL),
(5, '2017-11-02 05:19:24', NULL, '211', '+639305235027', NULL, '0B05040B8423F00003FB0301,6D062F1F2DB69180923432373832413042464145313131463335303137323744303141433530304134373930423843334500030B6A00C54503312E310001C6560187070603534D415254204D4D53000101C65501871106034E4150475052535F320001871006AB0187070603534D415254204D4D530001870806036D6D730001', NULL, NULL, NULL, NULL, NULL),
(6, '2017-11-02 05:19:29', NULL, '211', '+639305235027', NULL, '0B05040B8423F00003FB0302,870906890101C651018715060350524F585932000187070603534D415254204D4D530001C65201872F060350524F5859325F3100018720060331302E3130322E36312E343600018721068501872206034E4150475052535F320001C6530187230603383038300001010101C600015501873606037734000187070603534D4152', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `messagelog`
--

CREATE TABLE `messagelog` (
  `Id` int(11) NOT NULL,
  `SendTime` datetime DEFAULT NULL,
  `ReceiveTime` datetime DEFAULT NULL,
  `StatusCode` int(11) DEFAULT NULL,
  `StatusText` varchar(80) DEFAULT NULL,
  `MessageTo` varchar(80) DEFAULT NULL,
  `MessageFrom` varchar(80) DEFAULT NULL,
  `MessageText` text DEFAULT NULL,
  `MessageType` varchar(80) DEFAULT NULL,
  `MessageId` varchar(80) DEFAULT NULL,
  `ErrorCode` varchar(80) DEFAULT NULL,
  `ErrorText` varchar(80) DEFAULT NULL,
  `Gateway` varchar(80) DEFAULT NULL,
  `MessageParts` int(11) DEFAULT NULL,
  `MessagePDU` text DEFAULT NULL,
  `Connector` varchar(80) DEFAULT NULL,
  `UserId` varchar(80) DEFAULT NULL,
  `UserInfo` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messagelog`
--

INSERT INTO `messagelog` (`Id`, `SendTime`, `ReceiveTime`, `StatusCode`, `StatusText`, `MessageTo`, `MessageFrom`, `MessageText`, `MessageType`, `MessageId`, `ErrorCode`, `ErrorText`, `Gateway`, `MessageParts`, `MessagePDU`, `Connector`, `UserId`, `UserInfo`) VALUES
(1, '2018-01-27 20:38:08', NULL, 300, NULL, '09305235027', 'Hello Poh', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, '2018-01-27 20:39:06', NULL, 300, NULL, '09305235027', 'Hello Poh', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, '2018-01-27 20:49:14', NULL, 300, NULL, '09305235027', 'hi poh', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, '2018-01-27 20:50:56', NULL, 300, NULL, '09508767867', 'hi poh', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, '2018-02-09 17:52:26', NULL, 300, NULL, '09486457414', 'Test to send', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, '2018-02-09 17:54:27', NULL, 300, NULL, '09486457414', 'Test to send', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, '2018-02-09 17:55:11', NULL, 300, NULL, '09486457414', 'Test to send', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, '2018-02-09 17:59:11', NULL, 300, NULL, '09486457414', 'Test to send', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, '2018-02-09 18:00:12', NULL, 200, NULL, '+639486457414', 'yes', NULL, NULL, '1:+639486457414:35', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, '2018-02-09 18:01:12', NULL, 200, NULL, '+639486457414', 'Test to send', NULL, NULL, '1:+639486457414:36', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, '2018-02-09 18:02:58', NULL, 200, NULL, '+639486457414', 'FROM JANNO : Confirmed', NULL, NULL, '1:+639486457414:37', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, '2018-02-09 18:05:22', NULL, 200, NULL, '+639486457414', 'FROM Bachelor of Science and Entrepreneurs : Your order has been .Confirmed', NULL, NULL, '1:+639486457414:38', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, '2018-02-09 18:08:14', NULL, 200, NULL, '+639486457414', 'FROM Bachelor of Science and Entrepreneurs : Your order has been .Confirmed', NULL, NULL, '1:+639486457414:39', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, '2018-02-09 18:21:41', NULL, 200, NULL, '+639486457414', 'FROM Bachelor of Science and Entrepreneurs : Your order has been .Confirmed', NULL, NULL, '1:+639486457414:40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, '2018-04-01 22:17:34', NULL, 300, NULL, '09123586545', 'Your code is .6048', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, '2018-04-01 22:18:20', NULL, 300, NULL, '09123586545', 'Your code is .9305', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, '2018-04-01 22:20:15', NULL, 300, NULL, '09123586545', 'Your code is .2924', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, '2018-04-01 22:42:36', NULL, 300, NULL, '09123586545', 'Your code is .6938', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, '2018-04-02 00:40:53', NULL, 300, NULL, '9956112920', 'Your code is .7290', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, '2018-04-02 00:42:14', NULL, 300, NULL, '9956112920', 'Your code is .4506', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, '2018-04-02 00:43:46', NULL, 300, NULL, '9956112920', 'Your code is .4506', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, '2018-04-02 00:45:56', NULL, 300, NULL, '09956112920', 'Your code is .6988', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, '2018-04-02 00:47:17', NULL, 300, NULL, '09956112920', 'Your code is .4380', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, '2018-04-02 00:48:53', NULL, 200, NULL, '639956112920', 'Your code is .5936', NULL, NULL, '1:639956112920:129', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, '2018-04-02 00:50:29', NULL, 200, NULL, '639956112920', 'Your code is .5349', NULL, NULL, '1:639956112920:130', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, '2018-04-02 00:53:32', NULL, 200, NULL, '639956112920', 'Your code is', NULL, NULL, '1:639956112920:131', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, '2018-04-02 00:54:43', NULL, 200, NULL, '639956112920', 'Your code is 3407', NULL, NULL, '1:639956112920:132', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `messageout`
--

CREATE TABLE `messageout` (
  `Id` int(11) NOT NULL,
  `MessageTo` varchar(80) DEFAULT NULL,
  `MessageFrom` varchar(80) DEFAULT NULL,
  `MessageText` text DEFAULT NULL,
  `MessageType` varchar(80) DEFAULT NULL,
  `Gateway` varchar(80) DEFAULT NULL,
  `UserId` varchar(80) DEFAULT NULL,
  `UserInfo` text DEFAULT NULL,
  `Priority` int(11) DEFAULT NULL,
  `Scheduled` datetime DEFAULT NULL,
  `ValidityPeriod` int(11) DEFAULT NULL,
  `IsSent` tinyint(1) NOT NULL DEFAULT 0,
  `IsRead` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `quotation`
--

CREATE TABLE `quotation` (
  `OrganizationName` varchar(200) NOT NULL,
  `IndustryType` varchar(200) NOT NULL,
  `FirstName` varchar(200) NOT NULL,
  `LastName` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `PhoneNo` varchar(200) NOT NULL,
  `SelectState` varchar(200) NOT NULL,
  `City` varchar(200) NOT NULL,
  `Email1` varchar(200) NOT NULL,
  `Desciption` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quotation`
--

INSERT INTO `quotation` (`OrganizationName`, `IndustryType`, `FirstName`, `LastName`, `Email`, `PhoneNo`, `SelectState`, `City`, `Email1`, `Desciption`) VALUES
('', '', '', '', '', '0', '', '', 'email1', ''),
('', '', '', '', '', '0', '', '', 'email1', ''),
('', '', '', '', '', '0', '', '', '', ''),
('', '', '', '', '', '0', '', '', '', ''),
('', '', '', '', '', '0', '', '', '', ''),
('tcet', 'education', 'Rishabh', 'dubey', 'dubey.rishabh009@gmail.com', '2147483647', 'None', 'mumbai', '', 'hfjvk'),
('tcet', 'education', 'Rishabh', 'dubey', 'dubey.rishabh009@gmail.com', '2147483647', 'None', 'mumbai', '', 'hfjvk'),
('tcet', 'education', 'Rishabh', 'dubey', 'dubey.rishabh009@gmail.com', '2147483647', 'None', 'mumbai', '', 'hfjvk'),
('', '', '', '', '', '0', '', '', '', ''),
('', '', '', '', '', '0', '', '', '', ''),
('', '', '', '', '', '0', '', '', '', ''),
('', '', '', '', '', '0', '', '', '', ''),
('', '', '', '', '', '0', '', '', '', ''),
('', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', ''),
('ECUBE', 'CLASSES', 'RAHUL', 'YADAV', 'dubey.saurabh634@gmail.com', 'u77577577665', 'Andhra Pradesh', 'MUMBAI', 'DUBEY.RISHABH009@GMAIL.COM', ''),
('ECUBE', 'CLASSES', 'RAHUL', 'YADAV', 'dubey.saurabh634@gmail.com', '9819595467', 'Andhra Pradesh', 'MUMBAI', 'DUBEY.RISHABH009@GMAIL.COM', ''),
('', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', ''),
('ECUBE', 'qwadsezf', 'sdcvfbgv', 'nhfbgdvf', 'dubey.saurabh634@gmail.com', '43567', 'Andaman and Nicobar Islands', 'MUMBAI', 'DUBEY.RISHABH009@GMAIL.COM', ''),
('jhdbgsvfnhbgfsv', 'vfcsd', 'kmjnhdbg', 'ukmnht', 'dubey.saurabh634@gmail.com', '9819595467', 'Andhra Pradesh', 'MUMBAI', 'DUBEY.RISHABH009@GMAIL.COM', ''),
('', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', ''),
('ECUBE', 'CLASSES', 'dfdfg', 'YADAV', 'dubey.saurabh634@gmail.com', '9819595467', 'Andaman and Nicobar Islands', 'wergt', 'DUBEY.RISHABH009@GMAIL.COM', ''),
('ECUBE', 'vfcsd', 'RAHUL', 'hcgvgnhbg', 'dubey.saurabh634@gmail.com', '9819595467', 'Andaman and Nicobar Islands', 'MUMBAI', 'DUBEY.RISHABH009@GMAIL.COM', ''),
('ECUBE', 'CLASSES', 'RAHUL', 'YADAV', 'dubey.saurabh634@gmail.com', '9819595467', 'Arunachal Pradesh', 'MUMBAI', 'DUBEY.RISHABH009@GMAIL.COM', ''),
('', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', ''),
('svac', 'vfcsd', 'dfdfg', 'hcgvgnhbg', 'dubey.saurabh634@gmail.com', '9819595467', 'Haryana', 'MUMBAI', 'DUBEY.RISHABH009@GMAIL.COM', 'KBK,'),
('qwer', 'asdf', 'qwer', 'qwer', 'dubey.saurabh634@gmail.com', '9819595467', 'Goa', 'MUMBAI', 'DUBEY.RISHABH009@GMAIL.COM', 'ddd'),
('zxcv', 'zxcv', 'zxcv', 'zxvv', 'dubey.saurabh634@gmail.com', '9819595467', 'Kerala', 'MUMBAI', 'DUBEY.RISHABH009@GMAIL.COM', 'fyj'),
('ECUBE', 'CLASSES', 'RAHUL', 'YADAV', 'dubey.saurabh634@gmail.com', '9819595467', 'Jharkhand', 'MUMBAI', 'DUBEY.RISHABH009@GMAIL.COM', 'zdrgz'),
('asdf', 'asdf', 'asdf', 'asdf', 'dubey.saurabh634@gmail.com', '9819595467', 'Haryana', 'MUMBAI', 'DUBEY.RISHABH009@GMAIL.COM', 'dEFS'),
('qwer', 'qwer', 'qwer', 'qwer', 'dubey.saurabh634@gmail.com', '9819595467', 'Jharkhand', 'MUMBAI', 'DUBEY.RISHABH009@GMAIL.COM', 'sada'),
('ECUBE', 'CLASSES', 'RAHUL', 'YADAV', 'dubey.saurabh634@gmail.com', '9819595467', 'Jharkhand', 'MUMBAI', 'DUBEY.RISHABH009@GMAIL.COM', 'zdvsd'),
('mnbv', 'mnbv', 'mnbv', 'mnbv', 'dubey.saurabh634@gmail.com', '9819595467', 'Kerala', 'MUMBAI', 'DUBEY.RISHABH009@GMAIL.COM', 'sdd'),
('ECUBE', 'CLASSES', 'RAHUL', 'YADAV', 'dubey.saurabh634@gmail.com', '9819595467', 'Jammu and Kashmir', 'MUMBAI', 'DUBEY.RISHABH009@GMAIL.COM', 'sdv'),
('fghj', 'fghj', 'fghj', 'fghj', 'dubey.saurabh634@gmail.com', '9819595467', 'Jammu and Kashmir', 'MUMBAI', 'DUBEY.RISHABH009@GMAIL.COM', 'hgcgh'),
('zdvx', 'drhncg', 'ae5y', 'drhzd', 'dubey.saurabh634@gmail.com', '9819595467', 'Gujarat', 'wergt', 'dxrhx', 'dhfgn');

-- --------------------------------------------------------

--
-- Table structure for table `tblautonumber`
--

CREATE TABLE `tblautonumber` (
  `ID` int(11) NOT NULL,
  `AUTOSTART` varchar(11) NOT NULL,
  `AUTOINC` int(11) NOT NULL,
  `AUTOEND` int(11) NOT NULL,
  `AUTOKEY` varchar(12) NOT NULL,
  `AUTONUM` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblautonumber`
--

INSERT INTO `tblautonumber` (`ID`, `AUTOSTART`, `AUTOINC`, `AUTOEND`, `AUTOKEY`, `AUTONUM`) VALUES
(1, '2017', 1, 59, 'PROID', 10),
(2, '0', 1, 96, 'ordernumber', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory`
--

CREATE TABLE `tblcategory` (
  `CATEGID` int(11) NOT NULL,
  `CATEGORIES` varchar(255) NOT NULL,
  `USERID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcategory`
--

INSERT INTO `tblcategory` (`CATEGID`, `CATEGORIES`, `USERID`) VALUES
(5, 'Gram', 0),
(23, 'wheat', 0),
(24, 'Barley', 0),
(25, 'Maize', 0),
(26, 'Millet(Bazra)', 0),
(27, 'Black gram(urad dal)', 0),
(28, 'Musturd seed(sarso)', 0),
(29, 'Rice', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblcustomer`
--

CREATE TABLE `tblcustomer` (
  `CUSTOMERID` int(11) NOT NULL,
  `FNAME` varchar(30) NOT NULL,
  `LNAME` varchar(30) NOT NULL,
  `MNAME` varchar(30) NOT NULL,
  `CUSHOMENUM` varchar(90) NOT NULL,
  `STREETADD` text NOT NULL,
  `BRGYADD` text NOT NULL,
  `CITYADD` text NOT NULL,
  `PROVINCE` varchar(80) NOT NULL,
  `COUNTRY` varchar(30) NOT NULL,
  `DBIRTH` date NOT NULL,
  `GENDER` varchar(10) NOT NULL,
  `PHONE` varchar(20) NOT NULL,
  `EMAILADD` varchar(40) NOT NULL,
  `ZIPCODE` int(6) NOT NULL,
  `CUSUNAME` varchar(20) NOT NULL,
  `CUSPASS` varchar(90) NOT NULL,
  `CUSPHOTO` varchar(255) NOT NULL,
  `TERMS` tinyint(4) NOT NULL,
  `DATEJOIN` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcustomer`
--

INSERT INTO `tblcustomer` (`CUSTOMERID`, `FNAME`, `LNAME`, `MNAME`, `CUSHOMENUM`, `STREETADD`, `BRGYADD`, `CITYADD`, `PROVINCE`, `COUNTRY`, `DBIRTH`, `GENDER`, `PHONE`, `EMAILADD`, `ZIPCODE`, `CUSUNAME`, `CUSPASS`, `CUSPHOTO`, `TERMS`, `DATEJOIN`) VALUES
(1, 'janobe', 'Palacios', '', '321', 'Coloso Street', 'brgy. 1', 'Kabankalan City', 'Negros Occidental', 'Philippines', '0000-00-00', 'Male', '+639956112920', '', 6111, 'kenjie@yahoo.com', '1dd4efc811372cd1efe855981a8863d10ddde1ca', 'customer_image/a1157016c5d8272126380b27a59e2e7e.jpg', 1, '2015-11-26'),
(2, 'Mark Anthony', 'Geasin', '', '1234', 'paglaom', 'dancalan', 'ilog', 'negros occ', 'philippines', '0000-00-00', '', '091023333234', '', 6111, 'bboy', '0377588176145a8f0d837ff6e9bf0c1616268387', 'customer_image/10801930_959054964122877_391305007291646162_n.jpg', 1, '2015-11-26'),
(3, 'Jano', 'Palacios', '', '12312', 's', 'brgy 1', 'kabankalan city', 'negross occidental', 'philippines', '0000-00-00', 'Male', '21312312312', '', 6111, 'jan', '53199fa57fdf5676d03d89fbdd26e69a927766fc', 'customer_image/Tropical-Beach-Wallpaper.jpg', 1, '2017-12-08'),
(4, 'Jamei', 'Laveste', '', '', '', '', 'kabankalan city', '', '', '0000-00-00', 'Female', '362656556', '', 0, 'jame', 'f144dcce05af4d40fa0aeba34b05f4472472a4de', 'customer_image/1351064148bpguarhW.jpg', 1, '2018-01-23'),
(5, 'Jeanniebe', 'Palacios', '', '', '', '', 'Kab City', '', '', '0000-00-00', 'Female', '+639486457414', '', 0, 'bebe', 'd079a1c06803587ea09bff3f44a567e19169e7b5', '', 1, '2018-02-09'),
(6, 'Janry', 'Tan', '', '', '', '', 'Kab City', '', '', '0000-00-00', 'Male', '0234234', '', 0, 'jan', '0271c5467994a9e88e01be5b7e1f5f43d0ab93d2', '', 1, '2018-04-01'),
(7, 'Jake', 'Cuenca', '', '', '', '', 'Kabankalan City', '', '', '0000-00-00', 'Male', '639305235027', '', 0, 'jake', '403ba16f713c8371eef121530a922824be29b68a', '', 1, '2018-04-16'),
(8, 'Jake', 'Tam', '', '', '', '', 'Kab City', '', '', '0000-00-00', 'Male', '021312312', '', 0, 'j', '30e1fe53111f7e583c382596a32885fd27283970', '', 1, '2018-09-23'),
(9, 'Annie', 'Paredes', '', '', '', '', 's', '', '', '0000-00-00', 'Female', '12312312', '', 0, 'an', 'aa46142b604e671794a84129896d4dec508dec81', 'customer_image/shirt2.jpg', 1, '2019-08-20'),
(10, 'Rishabh', 'dubey', '', '', '', '', 'mumbai', '', '', '0000-00-00', 'Male', '9819595467', '', 0, 'Rishabh', '5b129d6ef8cc6b56f8cd4a6f2e87f4fc6393b4cb', 'customer_image/background.jpeg', 1, '2020-01-26'),
(11, 'Rishabh', 'dubey', '', '', '', '', 'mumbai', '', '', '0000-00-00', 'Male', '9819595467', '', 0, 'Rishabh', '5b129d6ef8cc6b56f8cd4a6f2e87f4fc6393b4cb', '', 1, '2020-01-26'),
(12, 'Rishabh', 'dubey', '', '', '', '', 'mumbai', '', '', '0000-00-00', 'Male', '9819595467', '', 0, 'Rishabh', '5b129d6ef8cc6b56f8cd4a6f2e87f4fc6393b4cb', '', 1, '2020-01-26'),
(13, 'Rishabh', 'dubey', '', '', '', '', 'mumbai', '', '', '0000-00-00', 'Male', '9819595467', '', 0, 'Rishabh', '5b129d6ef8cc6b56f8cd4a6f2e87f4fc6393b4cb', '', 1, '2020-01-28'),
(14, 'Rishabh', 'dubey', '', '', '', '', 'mumbai', '', '', '0000-00-00', 'Male', '9819595466', '', 0, 'Rishabh', '5b129d6ef8cc6b56f8cd4a6f2e87f4fc6393b4cb', '', 1, '2020-02-03'),
(15, 'Swati', 'dubey', '', '', '', '', 'bhadohi', '', '', '0000-00-00', 'Female', '98195959467', '', 0, 'Swati', '5b129d6ef8cc6b56f8cd4a6f2e87f4fc6393b4cb', 'customer_image/g2.jpg', 1, '2020-02-03'),
(16, 'deepak', 'jaiswar', '', '', '', '', 'borivali', '', '', '0000-00-00', 'Male', '9819595467', '', 0, 'deepak', '5b129d6ef8cc6b56f8cd4a6f2e87f4fc6393b4cb', '', 1, '2020-02-08'),
(17, 'rishabh', 'dubey', '', '', '', '', 'mumbai', '', '', '0000-00-00', 'Male', '9819595467', '', 0, 'rishabh', '5b129d6ef8cc6b56f8cd4a6f2e87f4fc6393b4cb', '', 1, '2020-02-08'),
(18, 'alok', 'dubey', '', '', '', '', 'mumbai', '', '', '0000-00-00', 'Male', '8869928215', '', 0, 'alok', '5b129d6ef8cc6b56f8cd4a6f2e87f4fc6393b4cb', '', 1, '2020-03-12'),
(19, 'Mandavi', 'dubey', '', '', '', '', 'mumbai', '', '', '0000-00-00', 'Male', '9819595467', '', 0, 'nagesh', '5b129d6ef8cc6b56f8cd4a6f2e87f4fc6393b4cb', '', 1, '2020-03-12'),
(20, 'bhavna', 'aunty', '', '', '', '', 'dahisar', '', '', '0000-00-00', 'Male', '9892342', '', 0, 'bhavna', '38bb4395da16312773317f3d6654014244fd0ef6', '', 1, '2020-03-12');

-- --------------------------------------------------------

--
-- Table structure for table `tblorder`
--

CREATE TABLE `tblorder` (
  `ORDERID` int(11) NOT NULL,
  `PROID` int(11) NOT NULL,
  `ORDEREDQTY` int(11) NOT NULL,
  `ORDEREDPRICE` double NOT NULL,
  `ORDEREDNUM` int(11) NOT NULL,
  `USERID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblorder`
--

INSERT INTO `tblorder` (`ORDERID`, `PROID`, `ORDEREDQTY`, `ORDEREDPRICE`, `ORDEREDNUM`, `USERID`) VALUES
(1, 201737, 4, 476, 93, 0),
(2, 201740, 3, 447, 93, 0),
(3, 201738, 1, 199, 94, 0),
(4, 201742, 1, 287, 95, 0),
(5, 201740, 1, 149, 95, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

CREATE TABLE `tblproduct` (
  `PROID` int(11) NOT NULL,
  `ProductName` varchar(100) DEFAULT NULL,
  `AboutProduct1` varchar(1000) DEFAULT NULL,
  `AboutProduct2` varchar(25000) DEFAULT NULL,
  `AboutProduct3` varchar(2000) DEFAULT NULL,
  `Specification` varchar(200) DEFAULT NULL,
  `PRODESC` varchar(255) DEFAULT NULL,
  `INGREDIENTS` varchar(255) NOT NULL,
  `PROQTY` int(11) DEFAULT NULL,
  `PROPRICE` double DEFAULT NULL,
  `CATEGID` int(11) DEFAULT NULL,
  `image1` varchar(255) DEFAULT NULL,
  `image2` varchar(200) DEFAULT NULL,
  `image3` varchar(255) DEFAULT NULL,
  `PROSTATS` varchar(30) DEFAULT NULL,
  `OWNERNAME` varchar(90) NOT NULL,
  `OWNERPHONE` varchar(90) NOT NULL,
  `State` varchar(200) DEFAULT NULL,
  `Payment` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`PROID`, `ProductName`, `AboutProduct1`, `AboutProduct2`, `AboutProduct3`, `Specification`, `PRODESC`, `INGREDIENTS`, `PROQTY`, `PROPRICE`, `CATEGID`, `image1`, `image2`, `image3`, `PROSTATS`, `OWNERNAME`, `OWNERPHONE`, `State`, `Payment`) VALUES
(201740, NULL, NULL, NULL, NULL, NULL, 'SIMPLE Fashion Men`S Casual T Shirt Short Sleeve Round neck Top                      ', '', 4, 149, 18, 'uploaded_photos/shirt.jpg', NULL, NULL, 'Available', 'janobe', '', NULL, NULL),
(201741, NULL, NULL, NULL, NULL, NULL, 'ICM #T146 BESTSELLER TOPS TSHIRT FOR MEN', '', 4, 89, 18, 'uploaded_photos/shirt2.jpg', NULL, NULL, 'Available', 'janobe', '', NULL, NULL),
(201742, NULL, NULL, NULL, NULL, NULL, 'CJY-001 Coat Rack Creative Simple CoatRack Bedroom Wardrobe (Gray)', '', 3, 287, 14, 'uploaded_photos/bed.jpeg', NULL, NULL, 'Available', 'janobe', '', NULL, NULL),
(201744, 'Toothpaste', 'size 12 ,red color', NULL, NULL, 'best in market', 'good cxn.vkjrgliawhrngccn;aweirhaoi;rg;oeanefaorhg;nbea;c\r\nociweoiaerhngec\r\ncpojtq34tcpiqhiqhpci\r\nhctoiehqcitq5htcoq3t', '', 11, 122, 16, 'uploaded_photos/b2.jpg', NULL, 'uploaded_photos/b1.jpg', 'Available', 'Rishabh dubey', '9819595467', NULL, NULL),
(201745, 'history book', '12 cm', NULL, NULL, 'awrfeavaefvve\r\nerervaeverv', 'earevba\r\nervae', '', 56, 345, 11, 'uploaded_photos/2.jpg', NULL, 'uploaded_photos/4.jpg', 'Available', 'Rahul', '9819595466', NULL, NULL),
(201746, 'yvwyw45yv54yc', 'c5y5uv6j6e', '4wcyc3566j5ehwt', 'e5jv46ujcehrxe', 'wc46h3hxwevrmuntehrbgvfec', 'wcthrwevfacdtyebrgvfc', '', 56, 3454, 22, 'uploaded_photos/te3.jpg', 'uploaded_photos/te2.jpg', 'uploaded_photos/te1.jpg', 'Available', 'Sumeet', '7738348753', NULL, NULL),
(201747, 'ykudtjnfhdbgf', 'ztdehsrnj', 'xfydjtjxhzrzrjs', 'sjhzdnzfzfn', '6burheargvd', 'd6utjfnrhtfgb', '', 45, 454, 11, 'uploaded_photos/move-top.png', 'uploaded_photos/publiclogo.png', 'uploaded_photos/sprite.png', 'Available', 'kapil', '653745747', NULL, NULL),
(201748, 'Rebar Coupler ', 'Standard shapes and sizes of Steel used in Construction Standard shaps   ', 'Rolled Steel sections are used in beams, trusses, and columns. The rolled steel sections are manufactured with standard thickness and lengths of legs of angles. The Bureau of Indian Standards (BIS) has specified the sizes and thickness', 'Square bars are available in various standard sizes ranging from 5-100mm and are used for making grills.', 'They are manufactured in various nominal bore diameters and in each size there are three classes, light, medium, and heavy. These tubes are used in appliances and gas pipes.\r\n\r\nFlats:\r\nThese are secti', 'Description\r\nTags\r\nReview\r\nAdditional\r\nWHY USE REBAR COUPLERS?\r\nThe Traditional methods of lapped joints are not always an appropriate means of connecting reinforcing bars. Lapped joints are dependent upon the concrete for load transfer. The use of laps  ', '', 14, 346, 21, 'uploaded_photos/blg2.PNG', 'uploaded_photos/blg4.PNG', 'uploaded_photos/blg3.PNG', 'Available', 'Rishabh dubey', '9819595467', NULL, NULL),
(201749, 'hjxrjrz', 'zrjtxfrj', 'xrfjxj', 'xrfyjfy', 'srjtt6s7ikgtbsy', 'e5ynsr6ubru', '', 12, 678, 22, 'uploaded_photos/bg1.jpg', 'uploaded_photos/g2.jpg', 'uploaded_photos/img4.jpg', 'Available', 'Rishabh dubey', '9819595467', NULL, NULL),
(201750, 'srhtsrh', 'rsht', 'srht', 'rhtsrh', 'rsh', 'srht', '', 55, 456, 19, 'uploaded_photos/img8.jpg', 'uploaded_photos/img3.jpg', 'uploaded_photos/img11.jpg', 'Available', 'Swati dubey', '98195959467', NULL, NULL),
(201751, 'purse', 'awfaw', 'edrhhrrh', 'edthjejtw', 'wshrhae', 'gsrhah', '', 34, 56743, 11, 'uploaded_photos/g3.jpg', 'uploaded_photos/bg1.jpg', 'uploaded_photos/61.jpg', 'Available', 'deepak jaiswar', '9819595467', NULL, NULL),
(201752, '', '', '', '', 'gplg', ';;gt;t', '', 45, 200, 16, 'uploaded_photos/gr17.jpg', 'uploaded_photos/gr20.jpg', 'uploaded_photos/', 'Available', 'deepak jaiswar', '9819595467', 'Maharashtra', NULL),
(201753, 'gehu', 'agag', 'arhaer', 'aerhERHAE', 'AEHREHR', 'EARGE', '', 23, 123, 13, 'uploaded_photos/gr14.jpg', 'uploaded_photos/gr15.jpg', 'uploaded_photos/gr20.jpg', 'Available', 'deepak jaiswar', '9819595467', 'Daman and Diu', 'Andaman and Nicobar Islands'),
(201754, 'Gram', 'The chickpea or chick pea is an annual legume of the family Fabaceae, subfamily Faboideae', ' Its different types are variously known as gram or Bengal gram, garbanzo or garbanzo bean, Egyptian pea, chana, and chole. ', 'Chana seeds contain about 17-20% of protein. Climate and Cultivation Gram is an important rabi crop mainly sown in September-November and harvested in ...', 'It is one of the earliest cultivated legumes, and 7500-year-old remains have been found in the Middle East.', 'Chickpea is a key ingredient in hummus and chana masala, and it can be ground into flour to make falafel. It is also used in salads, soups and stews, curry and other meal products like channa. The chickpea is important in Indian, Mediterranean and Middle ', '', 55, 32, 5, 'uploaded_photos/gr1.jpg', 'uploaded_photos/gr2.jpg', 'uploaded_photos/gr6.jpg', 'Available', 'deepak jaiswar', '9819595467', 'Maharashtra', 'Andaman and Nicobar Islands'),
(201755, 'Rice', 'Rice is the seed of the grass species Oryza sativa or Oryza glaberrima', 'As a cereal grain, it is the most widely consumed staple food for a large part of the world\'s human population, especially in Asia. ', ' It is the agricultural commodity with the third-highest worldwide production, after sugarcane and maize.', 'Broken:100%\r\nMoisture:14%\r\nvitamin:Brokens to be\r\nobtained from\r\nmilling/polishing rice 5% and\r\n10%', 'The cultivated rice plant, Oryza sativa, is an annual grass of the Gramineae family. It grows to about 1.2 metres (4 feet) in height. The leaves are long and flattened, and its panicle, or inflorescence, is made up of spikelets bearing flowers that produc', '', 100, 24, 29, 'uploaded_photos/s8.jpg', 'uploaded_photos/s7.jpg', 'uploaded_photos/img7.jpg', 'Available', 'deepak jaiswar', '9819595467', 'Maharashtra', 'Payment'),
(201756, 'Wheat', 'Wheat is a grass widely cultivated for its seed, a cereal grain which is a worldwide staple food.', 'The many species of wheat together make up the genus Triticum; the most widely grown is common wheat', 'Wheat, any of several species of cereal grasses of the genus Triticum (family Poaceae) and their edible grains', 'Specification of Whole Wheat Flour\r\nMoisture	11-11.5 %\r\nWater Absorption	70% and above\r\nGluten	9-10%\r\nCrude Fiber	2.3-2.5%', 'Wheat (species of Triticum) is a cereal grain. People eat it most often in the form of bread. It is a kind of grass whose fruit is a \"head of wheat\" with edible seeds. It was first grown in the Levant, a region of the Near East.', '', 8977, 32, 23, 'uploaded_photos/gr15.jpg', 'uploaded_photos/gehu1.jpg', 'uploaded_photos/gehu2.jpg', 'Available', 'deepak jaiswar', '9819595467', 'Uttar Pradesh', 'Barter'),
(201757, 'Gram', 'Standard shapes and sizes of Steel used in Construction Standard shapes  and sizes of steel Steel is available in standard shapes and sizes only and they are: Rolled steel sections Rolled Steel sections are used in beams, trusses, and columns', 'Rolled Steel sections are used in beams, trusses, and columns. The rolled steel sections are manufactured with standard thickness and lengths of legs of angles. The Bureau of Indian Standards (BIS) has specified the sizes and thickness', 'Square bars are available in various standard sizes ', ': a metric unit of mass equal to ¹/???? kilogram and nearly equal to the mass of one cubic centimeter of water at its maximum density — see Metric System Table. 2 : the weight of a gram under the acce', ': a metric unit of mass equal to ¹/???? kilogram and nearly equal to the mass of one cubic centimeter of water at its maximum density — see Metric System Table. 2 : the weight of a gram under the acceleration of gravity.', '', 775, 75, 5, 'uploaded_photos/gr2.jpg', 'uploaded_photos/gr1.jpg', 'uploaded_photos/gram.jpg', 'Available', 'deepak jaiswar', '9819595467', 'Assam', 'Barter'),
(201758, 'barley', 'Standard shapes and sizes of Steel used in Construction Standard shapes  and sizes of steel Steel is available in standard shapes and sizes only and they are: Rolled steel sections Rolled Steel sections are used in beams, trusses, and columns', 'Rolled Steel sections are used in beams, trusses, and columns.', ' is primarily a cereal grain popularly known as jau in India. It is the fourth most important cereal crop after rice, wheat and maize. It\'s converted into malt to use for various food preparations. Description: Barley is widely used for food and fodder', 'Refers to the range of specialized food products and supplements that provide varying levels of energy, micronutrients, and macronutrients necessary for growth and health in order to prevent or treat ', ' Hordeum vulgare, is an edible annual grass in the family Poaceae grown as a cereal grain crop. It is a tall grass with a hairy stem which stands erect and produces spikelets at the head. ... Barley plants are freely tillering and typically possesses 1–6 ', '', 50, 500, 24, 'uploaded_photos/bar1.jpg', 'uploaded_photos/bar2.jpg', 'uploaded_photos/bar3.jpg', 'Available', 'deepak jaiswar', '9819595467', 'Jharkhand', 'Payment');

-- --------------------------------------------------------

--
-- Table structure for table `tblpromopro`
--

CREATE TABLE `tblpromopro` (
  `PROMOID` int(11) NOT NULL,
  `PROID` int(11) NOT NULL,
  `PRODISCOUNT` double NOT NULL,
  `PRODISPRICE` double NOT NULL,
  `PROBANNER` tinyint(4) NOT NULL,
  `PRONEW` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpromopro`
--

INSERT INTO `tblpromopro` (`PROMOID`, `PROID`, `PRODISCOUNT`, `PRODISPRICE`, `PROBANNER`, `PRONEW`) VALUES
(2, 201738, 0, 199, 0, 0),
(3, 201739, 0, 289, 0, 0),
(4, 201740, 0, 149, 0, 0),
(5, 201741, 0, 89, 0, 0),
(6, 201742, 0, 287, 0, 0),
(7, 201743, 0, 500, 0, 0),
(8, 201744, 0, 122, 0, 0),
(9, 201745, 0, 345, 0, 0),
(10, 201746, 0, 3454, 0, 0),
(11, 201747, 0, 454, 0, 0),
(12, 201748, 0, 346, 0, 0),
(13, 201749, 0, 678, 0, 0),
(14, 201750, 0, 456, 0, 0),
(15, 201751, 0, 56743, 0, 0),
(16, 201752, 0, 200, 0, 0),
(17, 201753, 0, 123, 0, 0),
(18, 201754, 0, 32, 0, 0),
(19, 201755, 0, 24, 0, 0),
(20, 201756, 0, 32, 0, 0),
(21, 201757, 0, 75, 0, 0),
(22, 201758, 0, 500, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblsetting`
--

CREATE TABLE `tblsetting` (
  `SETTINGID` int(11) NOT NULL,
  `PLACE` text NOT NULL,
  `BRGY` varchar(90) NOT NULL,
  `DELPRICE` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsetting`
--

INSERT INTO `tblsetting` (`SETTINGID`, `PLACE`, `BRGY`, `DELPRICE`) VALUES
(1, 'Kabankalan City', 'Brgy. 1', 50),
(2, 'Himamaylan City', 'Brgy. 1', 70);

-- --------------------------------------------------------

--
-- Table structure for table `tblstockin`
--

CREATE TABLE `tblstockin` (
  `STOCKINID` int(11) NOT NULL,
  `STOCKDATE` datetime DEFAULT NULL,
  `PROID` int(11) DEFAULT NULL,
  `STOCKQTY` int(11) DEFAULT NULL,
  `STOCKPRICE` double DEFAULT NULL,
  `USERID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblsummary`
--

CREATE TABLE `tblsummary` (
  `SUMMARYID` int(11) NOT NULL,
  `ORDEREDDATE` datetime NOT NULL,
  `CUSTOMERID` int(11) NOT NULL,
  `ORDEREDNUM` int(11) NOT NULL,
  `DELFEE` double NOT NULL,
  `PAYMENT` double NOT NULL,
  `PAYMENTMETHOD` varchar(30) NOT NULL,
  `ORDEREDSTATS` varchar(30) NOT NULL,
  `ORDEREDREMARKS` varchar(125) NOT NULL,
  `CLAIMEDADTE` datetime NOT NULL,
  `HVIEW` tinyint(4) NOT NULL,
  `USERID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsummary`
--

INSERT INTO `tblsummary` (`SUMMARYID`, `ORDEREDDATE`, `CUSTOMERID`, `ORDEREDNUM`, `DELFEE`, `PAYMENT`, `PAYMENTMETHOD`, `ORDEREDSTATS`, `ORDEREDREMARKS`, `CLAIMEDADTE`, `HVIEW`, `USERID`) VALUES
(1, '2019-08-21 06:24:24', 9, 93, 0, 0, 'Cash on Delivery', 'Confirmed', 'Your order has been confirmed.', '2020-02-27 00:00:00', 0, 0),
(3, '2019-08-21 06:27:09', 9, 94, 70, 269, 'Cash on Delivery', 'Confirmed', 'Your order has been confirmed.', '2019-08-21 00:00:00', 1, 0),
(4, '2020-02-21 03:24:51', 16, 95, 0, 436, 'Cash on Delivery', 'Confirmed', 'Your order has been confirmed.', '2020-02-27 00:00:00', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbltender`
--

CREATE TABLE `tbltender` (
  `SAEID` varchar(255) NOT NULL,
  `LOCATION` varchar(255) NOT NULL,
  `DESCRIPTION` varchar(255) NOT NULL,
  `TENCATEGID` int(11) NOT NULL,
  `PROCOST` varchar(255) NOT NULL,
  `EMD` varchar(255) NOT NULL,
  `LASTDATE` date NOT NULL,
  `PDF` varchar(255) NOT NULL,
  `TENID` int(11) NOT NULL,
  `TENDERSTATS` varchar(255) NOT NULL,
  `IMAGES` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbltender`
--

INSERT INTO `tbltender` (`SAEID`, `LOCATION`, `DESCRIPTION`, `TENCATEGID`, `PROCOST`, `EMD`, `LASTDATE`, `PDF`, `TENID`, `TENDERSTATS`, `IMAGES`) VALUES
('b45635654', 'Daman and Diu', 'all the best', 13, '2265cr', '53576CR', '2020-02-23', 'Quantitative Aptitude 23 Techniques (E-next.in).pdf', 17, 'Available', 'uploaded_photos/1.jpg'),
('g7575', 'Bihar', 'yfmhf', 12, '876876cr', '876876cr', '2020-02-15', 'MCA-CET Syllubus Information (E-next.in).pdf', 21, 'Available', 'uploaded_photos/5.jpg'),
('b124234', 'Himachal Pradesh', 'asdasdfaswe', 1, '56354cr', '678578cr', '2020-02-14', 'MCA-CET Syllubus Information (E-next.in).pdf', 22, 'Available', 'uploaded_photos/7.jpg'),
('7ghdhd', 'Andhra Pradesh', 'ergrgrsd', 2, '56456cr', '45345cr', '2020-02-15', 'Android-Programming-Cookbook.pdf', 23, 'Available', 'uploaded_photos/61.jpg'),
('g56546', 'Arunachal Pradesh', 'dzfsgsrfb', 2, '4356354cr', '7867cr', '2020-02-23', 'MCA-CET Syllubus Information (E-next.in).pdf', 24, 'Available', 'uploaded_photos/7.jpg'),
('74563563', 'Assam', 'fshsrgsz', 4, '56785cr', '67568576cr', '2020-02-21', 'Quantitative Aptitude 23 Techniques (E-next.in).pdf', 25, 'Available', 'uploaded_photos/g3.jpg'),
('ygr476585678', 'Bihar', 'rytbdut', 4, '675867cr', '85678967cr', '2020-02-23', 'MCA-CET Syllubus Information (E-next.in).pdf', 26, 'Available', 'uploaded_photos/g4.jpg'),
('s4564865', 'Assam', 's5yyhdrzdtvsvsrv', 14, '34345cr', '45646cr', '2020-02-13', 'Quantitative Aptitude 23 Techniques (E-next.in).pdf', 27, 'Available', 'uploaded_photos/41.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbluseraccount`
--

CREATE TABLE `tbluseraccount` (
  `USERID` int(11) NOT NULL,
  `U_NAME` varchar(122) NOT NULL,
  `U_USERNAME` varchar(122) NOT NULL,
  `U_PASS` varchar(122) NOT NULL,
  `U_ROLE` varchar(30) NOT NULL,
  `USERIMAGE` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluseraccount`
--

INSERT INTO `tbluseraccount` (`USERID`, `U_NAME`, `U_USERNAME`, `U_PASS`, `U_ROLE`, `USERIMAGE`) VALUES
(124, 'Kenjie Palacios', 'kenjie', '4752fe635442d048e8e8d2d1d845e6a578f30470', 'Administrator', 'photos/COC-war-base-design.jpg'),
(126, 'Janobe Palacios', 'janobe', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Administrator', 'photos/10329236_874204835938922_6636897990257224477_n.jpg'),
(127, 'Craig Palacios', 'craig', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Administrator', ''),
(128, 'Rishabh dubey', 'dubey.rishabh009@gmail.com', '85e45e58fe34c019dfeaf44d545501439879dae7', 'Administrator', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblwishlist`
--

CREATE TABLE `tblwishlist` (
  `id` int(11) NOT NULL,
  `CUSID` int(11) NOT NULL,
  `PROID` int(11) NOT NULL,
  `WISHDATE` date NOT NULL,
  `WISHSTATS` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblwishlist`
--

INSERT INTO `tblwishlist` (`id`, `CUSID`, `PROID`, `WISHDATE`, `WISHSTATS`) VALUES
(2, 9, 201742, '2019-08-21', '0'),
(3, 16, 201739, '2020-02-08', '0'),
(4, 16, 201738, '2020-02-21', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tendercategory`
--

CREATE TABLE `tendercategory` (
  `TENCATEGID` int(100) NOT NULL,
  `tendername` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tendercategory`
--

INSERT INTO `tendercategory` (`TENCATEGID`, `tendername`) VALUES
(1, 'bridge'),
(2, 'building'),
(3, 'construction'),
(4, 'river'),
(5, 'MOBILE'),
(6, 'XYZ'),
(7, 'rice'),
(8, 'laptop'),
(9, 'MOBILE'),
(10, 'house'),
(11, 'car'),
(12, 'plane'),
(13, 'book'),
(14, 'wire'),
(15, 'sdfd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messagein`
--
ALTER TABLE `messagein`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `messagelog`
--
ALTER TABLE `messagelog`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IDX_MessageId` (`MessageId`,`SendTime`);

--
-- Indexes for table `messageout`
--
ALTER TABLE `messageout`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IDX_IsRead` (`IsRead`);

--
-- Indexes for table `tblautonumber`
--
ALTER TABLE `tblautonumber`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblcategory`
--
ALTER TABLE `tblcategory`
  ADD PRIMARY KEY (`CATEGID`);

--
-- Indexes for table `tblcustomer`
--
ALTER TABLE `tblcustomer`
  ADD PRIMARY KEY (`CUSTOMERID`);

--
-- Indexes for table `tblorder`
--
ALTER TABLE `tblorder`
  ADD PRIMARY KEY (`ORDERID`),
  ADD KEY `USERID` (`USERID`),
  ADD KEY `PROID` (`PROID`),
  ADD KEY `ORDEREDNUM` (`ORDEREDNUM`);

--
-- Indexes for table `tblproduct`
--
ALTER TABLE `tblproduct`
  ADD PRIMARY KEY (`PROID`),
  ADD KEY `CATEGID` (`CATEGID`);

--
-- Indexes for table `tblpromopro`
--
ALTER TABLE `tblpromopro`
  ADD PRIMARY KEY (`PROMOID`),
  ADD UNIQUE KEY `PROID` (`PROID`);

--
-- Indexes for table `tblsetting`
--
ALTER TABLE `tblsetting`
  ADD PRIMARY KEY (`SETTINGID`);

--
-- Indexes for table `tblstockin`
--
ALTER TABLE `tblstockin`
  ADD PRIMARY KEY (`STOCKINID`),
  ADD KEY `PROID` (`PROID`,`USERID`),
  ADD KEY `USERID` (`USERID`);

--
-- Indexes for table `tblsummary`
--
ALTER TABLE `tblsummary`
  ADD PRIMARY KEY (`SUMMARYID`),
  ADD UNIQUE KEY `ORDEREDNUM` (`ORDEREDNUM`),
  ADD KEY `CUSTOMERID` (`CUSTOMERID`),
  ADD KEY `USERID` (`USERID`);

--
-- Indexes for table `tbltender`
--
ALTER TABLE `tbltender`
  ADD PRIMARY KEY (`TENID`),
  ADD KEY `TENCATEGID` (`TENCATEGID`);

--
-- Indexes for table `tbluseraccount`
--
ALTER TABLE `tbluseraccount`
  ADD PRIMARY KEY (`USERID`);

--
-- Indexes for table `tblwishlist`
--
ALTER TABLE `tblwishlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tendercategory`
--
ALTER TABLE `tendercategory`
  ADD PRIMARY KEY (`TENCATEGID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messagein`
--
ALTER TABLE `messagein`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `messagelog`
--
ALTER TABLE `messagelog`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `messageout`
--
ALTER TABLE `messageout`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblautonumber`
--
ALTER TABLE `tblautonumber`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblcategory`
--
ALTER TABLE `tblcategory`
  MODIFY `CATEGID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tblcustomer`
--
ALTER TABLE `tblcustomer`
  MODIFY `CUSTOMERID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tblorder`
--
ALTER TABLE `tblorder`
  MODIFY `ORDERID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblpromopro`
--
ALTER TABLE `tblpromopro`
  MODIFY `PROMOID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tblsetting`
--
ALTER TABLE `tblsetting`
  MODIFY `SETTINGID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblstockin`
--
ALTER TABLE `tblstockin`
  MODIFY `STOCKINID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tblsummary`
--
ALTER TABLE `tblsummary`
  MODIFY `SUMMARYID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbltender`
--
ALTER TABLE `tbltender`
  MODIFY `TENID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tbluseraccount`
--
ALTER TABLE `tbluseraccount`
  MODIFY `USERID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `tblwishlist`
--
ALTER TABLE `tblwishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tendercategory`
--
ALTER TABLE `tendercategory`
  MODIFY `TENCATEGID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
