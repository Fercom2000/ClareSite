-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jan 18, 2020 at 09:46 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clare`
--

-- --------------------------------------------------------

--
-- Table structure for table `codes`
--

DROP TABLE IF EXISTS `codes`;
CREATE TABLE IF NOT EXISTS `codes` (
  `code1` blob NOT NULL,
  `code2` blob NOT NULL,
  `dateCreated` int(11) NOT NULL,
  `dateUpdated` int(11) NOT NULL,
  `createdBy` int(11) NOT NULL,
  `updatedBy` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `element`
--

DROP TABLE IF EXISTS `element`;
CREATE TABLE IF NOT EXISTS `element` (
  `elementId` int(11) NOT NULL AUTO_INCREMENT,
  `eId` text DEFAULT NULL,
  `elementName` text NOT NULL,
  `pageCode` text NOT NULL,
  `class` text NOT NULL,
  `type` text DEFAULT NULL,
  `value` text DEFAULT NULL,
  `style` text DEFAULT NULL,
  `img` text NOT NULL,
  `timeD` text NOT NULL,
  `description` text DEFAULT NULL,
  `message` text DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `dateCreated` datetime NOT NULL DEFAULT current_timestamp(),
  `deteUpdated` datetime NOT NULL DEFAULT current_timestamp(),
  `createdBy` text NOT NULL,
  `updatedBy` text NOT NULL,
  PRIMARY KEY (`elementId`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `element`
--

INSERT INTO `element` (`elementId`, `eId`, `elementName`, `pageCode`, `class`, `type`, `value`, `style`, `img`, `timeD`, `description`, `message`, `status`, `dateCreated`, `deteUpdated`, `createdBy`, `updatedBy`) VALUES
(1, '', 'msg', 'page', 'Message', NULL, NULL, NULL, './gpx/bandmember.jpg', '1000', 'Chat Message', 'Hola', 1, '2020-01-08 02:14:22', '2020-01-08 02:14:22', 'yo', 'yo'),
(2, '', 'msg2', 'page', 'Message', NULL, NULL, NULL, './gpx/avatar_g2.jpg', '3000', 'Chat Message', 'It works!', 1, '2020-01-08 02:27:06', '2020-01-08 02:27:06', 'yo', 'yo'),
(3, '', 'B', '1', 'menuL active', 'button', '1', 'background-color: #193e72;\r\n\r\n    color: #f0f0f0;', '', '', '1 Nav', 'Users', 1, '2020-01-08 22:09:56', '2020-01-08 22:09:56', 'sys', 'sys'),
(4, '', 'B', '1', 'menuL', 'button', '13', 'background-color: #193e72;\r\n\r\n    color: #f0f0f0;', '', '', '1 Nav', 'Groups', 1, '2020-01-08 22:15:10', '2020-01-08 22:15:10', 'sys', 'sys'),
(5, '', 'B', '1', 'menuL', 'button', '14', 'background-color: #193e72;\r\n\r\n    color: #f0f0f0;', '', '', '1 Nav', 'Students', 1, '2020-01-08 22:15:10', '2020-01-08 22:15:10', 'sys', 'sys'),
(6, '', 'B', '1', 'menuL', 'button', '15', 'background-color: #193e72;\r\n\r\n    color: #f0f0f0;', '', '', '1 Nav', 'Exams', 1, '2020-01-08 22:16:21', '2020-01-08 22:16:21', 'sys', 'sys'),
(7, 'B', 'B', '1', 'Button BG', 'button', '111', 'width: 33%;min-width: 33%;', '', '', '1 Cont', 'Add a New User', 1, '2020-01-08 23:58:55', '2020-01-08 23:58:55', 'sys', 'sys'),
(8, 'B', 'B', '1', 'Button BG', 'button', '112', 'width: 33%;min-width: 33%;', '', '', '1 Cont', 'Modify User', 1, '2020-01-08 23:58:55', '2020-01-08 23:58:55', 'sys', 'sys'),
(9, 'B', 'B', '1', 'Button BG', 'button', '113', 'width: 33%;min-width: 33%;', '', '', '1 Cont', 'Delete User', 1, '2020-01-08 23:58:55', '2020-01-08 23:58:55', 'sys', 'sys'),
(10, '', 'B', '13', 'menuL ', 'button', '1', 'background-color: #193e72;\r\n\r\n    color: #f0f0f0;', '', '', '13 Nav', 'Users', 1, '2020-01-08 22:09:56', '2020-01-08 22:09:56', 'sys', 'sys'),
(11, '', 'B', '13', 'menuL active', 'button', '13', 'background-color: #193e72;\r\n\r\n    color: #f0f0f0;', '', '', '13 Nav', 'Groups', 1, '2020-01-08 22:15:10', '2020-01-08 22:15:10', 'sys', 'sys'),
(12, '', 'B', '13', 'menuL', 'button', '14', 'background-color: #193e72;\r\n\r\n    color: #f0f0f0;', '', '', '13 Nav', 'Students', 1, '2020-01-08 22:15:10', '2020-01-08 22:15:10', 'sys', 'sys'),
(13, '', 'B', '13', 'menuL', 'button', '15', 'background-color: #193e72;\r\n\r\n    color: #f0f0f0;', '', '', '13 Nav', 'Exams', 1, '2020-01-08 22:16:21', '2020-01-08 22:16:21', 'sys', 'sys'),
(14, 'B', 'B', '13', 'Button BG', 'button', '131', 'width: 33%;min-width: 33%;', '', '', '13 Cont', 'Create Group', 1, '2020-01-08 23:58:55', '2020-01-08 23:58:55', 'sys', 'sys'),
(15, 'B', 'B', '13', 'Button BG', 'button', '132', 'width: 33%;min-width: 33%;', '', '', '13 Cont', 'Modify Group', 1, '2020-01-08 23:58:55', '2020-01-08 23:58:55', 'sys', 'sys'),
(16, 'B', 'B', '13', 'Button BG', 'button', '133', 'width: 33%;min-width: 33%;', '', '', '13 Cont', 'Delete Group', 1, '2020-01-08 23:58:55', '2020-01-08 23:58:55', 'sys', 'sys'),
(17, 'B', 'B', '13', 'Button BG', 'button', '134', 'width: 33%;min-width: 33%;', '', '', '13 Cont', 'Populate Group', 1, '2020-01-08 23:58:55', '2020-01-08 23:58:55', 'sys', 'sys'),
(18, '', 'B', '14', 'menuL ', 'button', '1', 'background-color: #193e72;\r\n\r\n    color: #f0f0f0;', '', '', '14 Nav', 'Users', 1, '2020-01-08 22:09:56', '2020-01-08 22:09:56', 'sys', 'sys'),
(19, '', 'B', '14', 'menuL', 'button', '13', 'background-color: #193e72;\r\n\r\n    color: #f0f0f0;', '', '', '14 Nav', 'Groups', 1, '2020-01-08 22:15:10', '2020-01-08 22:15:10', 'sys', 'sys'),
(20, '', 'B', '14', 'menuL active', 'button', '14', 'background-color: #193e72;\r\n\r\n    color: #f0f0f0;', '', '', '14 Nav', 'Students', 1, '2020-01-08 22:15:10', '2020-01-08 22:15:10', 'sys', 'sys'),
(21, '', 'B', '14', 'menuL', 'button', '15', 'background-color: #193e72;\r\n\r\n    color: #f0f0f0;', '', '', '14 Nav', 'Exams', 1, '2020-01-08 22:16:21', '2020-01-08 22:16:21', 'sys', 'sys'),
(22, 'B', 'B', '14', 'Button BG', 'button', '141', 'width: 33%;min-width: 33%;', '', '', '14 Cont', 'Add a New Student', 1, '2020-01-08 23:58:55', '2020-01-08 23:58:55', 'sys', 'sys'),
(23, 'B', 'B', '14', 'Button BG', 'button', '142', 'width: 33%;min-width: 33%;', '', '', '14 Cont', 'Modify Student', 1, '2020-01-08 23:58:55', '2020-01-08 23:58:55', 'sys', 'sys'),
(24, 'B', 'B', '14', 'Button BG', 'button', '143', 'width: 33%;min-width: 33%;', '', '', '14 Cont', 'Delete Student', 1, '2020-01-08 23:58:55', '2020-01-08 23:58:55', 'sys', 'sys'),
(25, '', 'B', '15', 'menuL', 'button', '1', 'background-color: #193e72;\r\n\r\n    color: #f0f0f0;', '', '', '15 Nav', 'Users', 1, '2020-01-08 22:09:56', '2020-01-08 22:09:56', 'sys', 'sys'),
(26, '', 'B', '15', 'menuL', 'button', '13', 'background-color: #193e72;\r\n\r\n    color: #f0f0f0;', '', '', '15 Nav', 'Groups', 1, '2020-01-08 22:15:10', '2020-01-08 22:15:10', 'sys', 'sys'),
(27, '', 'B', '15', 'menuL', 'button', '14', 'background-color: #193e72;\r\n\r\n    color: #f0f0f0;', '', '', '15 Nav', 'Students', 1, '2020-01-08 22:15:10', '2020-01-08 22:15:10', 'sys', 'sys'),
(28, '', 'B', '15', 'menuL active', 'button', '15', 'background-color: #193e72;\r\n\r\n    color: #f0f0f0;', '', '', '15 Nav', 'Exams', 1, '2020-01-08 22:16:21', '2020-01-08 22:16:21', 'sys', 'sys'),
(29, 'B', 'B', '15', 'Button BG', 'button', '151', 'width: 33%;min-width: 33%;', '', '', '15 Cont', 'Create a New Exam', 1, '2020-01-08 23:58:55', '2020-01-08 23:58:55', 'sys', 'sys'),
(30, 'B', 'B', '15', 'Button BG', 'button', '152', 'width: 33%;min-width: 33%;', '', '', '15 Cont', 'Modify Exam', 1, '2020-01-08 23:58:55', '2020-01-08 23:58:55', 'sys', 'sys'),
(31, 'B', 'B', '15', 'Button BG', 'button', '153', 'width: 33%;min-width: 33%;', '', '', '15 Cont', 'Delete Exam', 1, '2020-01-08 23:58:55', '2020-01-08 23:58:55', 'sys', 'sys');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

DROP TABLE IF EXISTS `exam`;
CREATE TABLE IF NOT EXISTS `exam` (
  `examId` int(11) NOT NULL AUTO_INCREMENT,
  `examCode` text NOT NULL,
  `permissions` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 3,
  `type` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `dateCreated` datetime NOT NULL DEFAULT current_timestamp(),
  `dateUpdated` datetime NOT NULL DEFAULT current_timestamp(),
  `dateStart` timestamp NOT NULL DEFAULT current_timestamp(),
  `dateEnd` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `createdBy` text NOT NULL,
  `modifiedBy` text NOT NULL,
  PRIMARY KEY (`examId`),
  UNIQUE KEY `examCode` (`examCode`) USING HASH
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `grp`
--

DROP TABLE IF EXISTS `grp`;
CREATE TABLE IF NOT EXISTS `grp` (
  `idGroup` int(11) NOT NULL AUTO_INCREMENT,
  `groupName` text NOT NULL,
  `permissions` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 1,
  `type` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `createdBy` text NOT NULL,
  `ModifiedBy` text NOT NULL,
  PRIMARY KEY (`idGroup`),
  UNIQUE KEY `groupName` (`groupName`) USING HASH
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `img`
--

DROP TABLE IF EXISTS `img`;
CREATE TABLE IF NOT EXISTS `img` (
  `idImg` int(11) NOT NULL AUTO_INCREMENT,
  `name` blob NOT NULL,
  `ext` text NOT NULL,
  `location` text NOT NULL,
  `description` text NOT NULL,
  `type` text NOT NULL,
  `val` text NOT NULL,
  PRIMARY KEY (`idImg`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `img`
--

INSERT INTO `img` (`idImg`, `name`, `ext`, `location`, `description`, `type`, `val`) VALUES
(1, 0x33, 'jpg', './dngk/', 'Default user image, do not delete or modify', 'System image', ''),
(2, 0x33, 'jpg', './dngk/', 'Default user image, do not delete or modify', 'System image: user', 'user4'),
(3, 0x51, 'jpg', './Vgba9/', 'Default user image, do not delete or modify', 'System image: user', 'user7'),
(4, 0x454e434f4445282761272c277444394f6e2729, 'a', 'a', 'a', 'a', 'a'),
(5, 0x454e434f4445282761272c277444394f6e2729, 'a', 'a', 'a', 'a', 'a'),
(6, 0x454e434f4445282761272c277444394f6e2729, 'a', 'a', 'a', 'a', 'a'),
(7, 0x454e434f4445282761272c275547324a792729, 'jpg', '/UG2Jy', 'Default user image, do not delete or modify', 'System image: student', 'a5'),
(8, 0x454e434f4445282761272c2751597565332729, 'jpg', './QYue3/', 'Default user image, do not delete or modify', 'System image: student', 'a6'),
(9, 0x1d, 'jpg', './1cuBQ/', 'Default user image, do not delete or modify', 'System image: student', 'a8'),
(10, 0xc5213fd7, 'jpg', './ijEGn/', 'Default user image, do not delete or modify', 'System image: student', 'a10');

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

DROP TABLE IF EXISTS `page`;
CREATE TABLE IF NOT EXISTS `page` (
  `pageId` int(11) NOT NULL AUTO_INCREMENT,
  `pageCode` text NOT NULL,
  `examCode` text NOT NULL,
  `permissions` int(11) NOT NULL DEFAULT 157,
  `status` int(11) NOT NULL DEFAULT 1,
  `type` int(11) NOT NULL DEFAULT 1,
  `description` text DEFAULT NULL,
  `dateCreated` datetime NOT NULL DEFAULT current_timestamp(),
  `dateUpdated` datetime NOT NULL DEFAULT current_timestamp(),
  `createdBy` text NOT NULL,
  `updatedBy` text NOT NULL,
  PRIMARY KEY (`pageId`),
  UNIQUE KEY `pageName` (`pageCode`) USING HASH
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`pageId`, `pageCode`, `examCode`, `permissions`, `status`, `type`, `description`, `dateCreated`, `dateUpdated`, `createdBy`, `updatedBy`) VALUES
(1, 'p1', 'e1', 157, 1, 0, '', '2020-01-05 20:50:49', '2020-01-05 20:50:49', 'yo', 'yo'),
(2, 'p2', 'e1', 157, 1, 0, 'prueba', '2020-01-05 20:52:08', '2020-01-05 20:52:08', 'yo', 'yo');

-- --------------------------------------------------------

--
-- Table structure for table `pageelement`
--

DROP TABLE IF EXISTS `pageelement`;
CREATE TABLE IF NOT EXISTS `pageelement` (
  `pageCode` text NOT NULL,
  `elementName` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

DROP TABLE IF EXISTS `status`;
CREATE TABLE IF NOT EXISTS `status` (
  `idStatus` int(11) NOT NULL AUTO_INCREMENT,
  `code` int(11) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`idStatus`),
  UNIQUE KEY `code` (`code`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`idStatus`, `code`, `description`) VALUES
(1, -1, 'Deleted'),
(2, 0, 'Inactive'),
(3, 1, 'Active'),
(4, 2, 'Public'),
(5, 3, 'Protected'),
(6, 4, 'Restricted');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `idStudent` int(11) NOT NULL AUTO_INCREMENT,
  `studentCode` text NOT NULL,
  `studentName` text NOT NULL,
  `img` text DEFAULT 'studentPhoto1.png',
  `status` int(11) NOT NULL DEFAULT 0,
  `type` text NOT NULL,
  `profile` text DEFAULT NULL,
  `dateEnrolment` datetime NOT NULL DEFAULT current_timestamp(),
  `dateUpdated` datetime NOT NULL DEFAULT current_timestamp(),
  `dateStart` timestamp NOT NULL DEFAULT current_timestamp(),
  `dateEnd` timestamp NOT NULL DEFAULT '1970-01-01 00:00:01',
  `enrolledBy` text NOT NULL,
  `updatedBy` text NOT NULL,
  PRIMARY KEY (`idStudent`),
  UNIQUE KEY `studentCode` (`studentCode`) USING HASH
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`idStudent`, `studentCode`, `studentName`, `img`, `status`, `type`, `profile`, `dateEnrolment`, `dateUpdated`, `dateStart`, `dateEnd`, `enrolledBy`, `updatedBy`) VALUES
(1, 'a', 'a', 'studentPhoto1.png', 1, '3', 'pro', '2020-01-05 16:52:24', '2020-01-05 16:52:24', '2020-01-05 16:52:24', '1970-01-01 00:00:01', 'yo', 'yo'),
(2, 'a1', 'a', 'studentPhoto1.png', 1, '3', 'pro', '2020-01-05 16:55:20', '2020-01-05 16:55:20', '2020-01-05 16:55:20', '1970-01-01 00:00:01', 'yo', 'yo'),
(3, 'a2', 'a', 'studentPhoto1.png', 1, '3', 'pro', '2020-01-05 17:00:05', '2020-01-05 17:00:05', '2020-01-05 17:00:05', '1970-01-01 00:00:01', 'yo', 'yo'),
(4, 'a3', 'a', 'studentPhoto1.png', 1, '3', 'pro', '2020-01-05 17:01:38', '2020-01-05 17:01:38', '2020-01-05 17:01:38', '1970-01-01 00:00:01', 'yo', 'yo'),
(5, 'a4', 'a', 'studentPhoto1.png', 1, '3', 'pro', '2020-01-05 17:03:36', '2020-01-05 17:03:36', '2020-01-05 17:03:36', '1970-01-01 00:00:01', 'yo', 'yo'),
(6, 'a5', 'a', 'studentPhoto1.png', 1, '3', 'pro', '2020-01-05 17:05:42', '2020-01-05 17:05:42', '2020-01-05 17:05:42', '1970-01-01 00:00:01', 'yo', 'yo'),
(7, 'a6', 'a', 'studentPhoto1.png', 1, '3', 'pro', '2020-01-05 17:06:22', '2020-01-05 17:06:22', '2020-01-05 17:06:22', '1970-01-01 00:00:01', 'yo', 'yo'),
(8, 'a7', 'a', 'studentPhoto1.png', 1, '3', 'pro', '2020-01-05 17:07:44', '2020-01-05 17:07:44', '2020-01-05 17:07:44', '1970-01-01 00:00:01', 'yo', 'yo'),
(9, 'a8', 'a', 'studentPhoto1.png', 1, '3', 'pro', '2020-01-05 17:08:42', '2020-01-05 17:08:42', '2020-01-05 17:08:42', '1970-01-01 00:00:01', 'yo', 'yo'),
(10, 'a9', 'agfd', 'studentPhoto1.png', 1, '3', 'pro', '2020-01-05 17:09:44', '2020-01-05 17:09:44', '2020-01-05 17:09:44', '1970-01-01 00:00:01', 'yo', 'yo'),
(11, 'a10', 'agfd', 'studentPhoto1.png', 1, '3', 'pro', '2020-01-05 17:11:42', '2020-01-05 17:11:42', '2020-01-05 17:11:42', '1970-01-01 00:00:01', 'yo', 'yo');

-- --------------------------------------------------------

--
-- Table structure for table `studentgrp`
--

DROP TABLE IF EXISTS `studentgrp`;
CREATE TABLE IF NOT EXISTS `studentgrp` (
  `grpName` text NOT NULL,
  `studentCode` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `userCode` text NOT NULL,
  `userName` text NOT NULL,
  `img` text NOT NULL DEFAULT 'userPhoto1.png',
  `permissions` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 1,
  `type` text DEFAULT NULL,
  `profile` text DEFAULT NULL,
  `dateCreated` datetime NOT NULL DEFAULT current_timestamp(),
  `dateUpdated` datetime NOT NULL DEFAULT current_timestamp(),
  `addedBy` text NOT NULL,
  `modifiedBy` text NOT NULL,
  PRIMARY KEY (`userId`),
  UNIQUE KEY `userCode` (`userCode`) USING HASH
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userId`, `userCode`, `userName`, `img`, `permissions`, `status`, `type`, `profile`, `dateCreated`, `dateUpdated`, `addedBy`, `modifiedBy`) VALUES
(1, 'a', 'a', 'userPhoto1.png', 7777, 1, '0', '', '2020-01-01 04:14:20', '2020-01-01 04:14:20', 'yo', 'yo'),
(2, '', '', 'userPhoto1.png', 7777, 1, '0', 'fgd', '2020-01-01 04:24:43', '2020-01-01 04:24:43', 'yo', 'yo'),
(3, 'user', 'name', 'userPhoto1.png', 7777, 1, '0', 'profile', '2020-01-01 04:27:06', '2020-01-01 04:27:06', 'yo', 'yo'),
(4, 'user1', 'no', 'userPhoto1.png', 7777, 1, '1', 'p', '2020-01-05 15:29:47', '2020-01-05 15:29:47', 'yo', 'yo'),
(5, 'user2', 'no', 'userPhoto1.png', 7777, 1, '1', 'p', '2020-01-05 15:34:03', '2020-01-05 15:34:03', 'yo', 'yo'),
(6, 'user3', '3', 'userPhoto1.png', 7777, 1, '1', 'pro', '2020-01-05 15:39:06', '2020-01-05 15:39:06', 'yo', 'yo'),
(7, 'user4', '3', 'userPhoto1.png', 7777, 1, '1', 'pro', '2020-01-05 15:43:39', '2020-01-05 15:43:39', 'yo', 'yo'),
(8, 'user5', '3', 'userPhoto1.png', 7777, 1, '1', 'pro', '2020-01-05 15:48:24', '2020-01-05 15:48:24', 'yo', 'yo'),
(9, 'user6', '3', 'userPhoto1.png', 7777, 1, '1', 'pro', '2020-01-05 15:53:56', '2020-01-05 15:53:56', 'yo', 'yo'),
(10, 'user7', '3', 'userPhoto1.png', 7777, 1, '1', 'pro', '2020-01-05 15:55:25', '2020-01-05 15:55:25', 'yo', 'yo');

-- --------------------------------------------------------

--
-- Table structure for table `usergrp`
--

DROP TABLE IF EXISTS `usergrp`;
CREATE TABLE IF NOT EXISTS `usergrp` (
  `grpName` text NOT NULL,
  `userCode` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
