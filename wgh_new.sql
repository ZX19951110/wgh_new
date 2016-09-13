/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : wgh_new

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2016-09-13 15:51:50
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for wgh_admin
-- ----------------------------
DROP TABLE IF EXISTS `wgh_admin`;
CREATE TABLE `wgh_admin` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(255) NOT NULL,
  `admin_pw` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wgh_admin
-- ----------------------------
INSERT INTO `wgh_admin` VALUES ('1', '战旭', '123456');

-- ----------------------------
-- Table structure for wgh_student
-- ----------------------------
DROP TABLE IF EXISTS `wgh_student`;
CREATE TABLE `wgh_student` (
  `stuNumber` varchar(30) NOT NULL,
  `name` varchar(255) NOT NULL,
  `major` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `position` varchar(255) NOT NULL,
  `knowledge` varchar(400) NOT NULL,
  `experience` varchar(400) NOT NULL,
  `intro` varchar(400) NOT NULL,
  PRIMARY KEY (`stuNumber`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wgh_student
-- ----------------------------
