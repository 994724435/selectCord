/*
Navicat MySQL Data Transfer

Source Server         : xampp
Source Server Version : 50611
Source Host           : localhost:3306
Source Database       : school

Target Server Type    : MYSQL
Target Server Version : 50611
File Encoding         : 65001

Date: 2016-05-31 13:34:34
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `admin`
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(5) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `name` varchar(30) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('1', 'admin', '21232f297a57a5a743894a0e4a801fc3');
INSERT INTO `admin` VALUES ('2', 'lihailong', '202cb962ac59075b964b07152d234b70');
INSERT INTO `admin` VALUES ('3', 'li', '202cb962ac59075b964b07152d234b70');
INSERT INTO `admin` VALUES ('4', 'root', '63a9f0ea7bb98050796b649e85481845');

-- ----------------------------
-- Table structure for `school`
-- ----------------------------
DROP TABLE IF EXISTS `school`;
CREATE TABLE `school` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `provice` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `low` varchar(255) DEFAULT NULL,
  `heigh` varchar(255) DEFAULT NULL,
  `avg` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of school
-- ----------------------------
INSERT INTO `school` VALUES ('1', '重庆市', '理科', '500', '600', '550', '重庆邮电大学5', null);
INSERT INTO `school` VALUES ('4', '北京市', '理科', '580', '680', '630', '北京大学', null);
INSERT INTO `school` VALUES ('5', '北京市', '文科', '500', '600', '550', '北京语文大学', null);
INSERT INTO `school` VALUES ('6', '北京市', '理科', '600', '700', '650', '清华大学', null);
