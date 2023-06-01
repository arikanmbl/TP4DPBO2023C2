/*
Navicat MySQL Data Transfer

Source Server         : database
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : db_perusahaan

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2023-06-01 23:42:24
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `tb_departemen`
-- ----------------------------
DROP TABLE IF EXISTS `tb_departemen`;
CREATE TABLE `tb_departemen` (
  `dept_id` int(11) NOT NULL,
  `department_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`dept_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tb_departemen
-- ----------------------------
INSERT INTO `tb_departemen` VALUES ('1', 'HR');
INSERT INTO `tb_departemen` VALUES ('2', 'IT');
INSERT INTO `tb_departemen` VALUES ('3', 'Marketing');
INSERT INTO `tb_departemen` VALUES ('4', 'Sales');
INSERT INTO `tb_departemen` VALUES ('5', 'Finance');

-- ----------------------------
-- Table structure for `tb_karyawan`
-- ----------------------------
DROP TABLE IF EXISTS `tb_karyawan`;
CREATE TABLE `tb_karyawan` (
  `employee_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `joining_date` date DEFAULT NULL,
  `dept_id` int(11) DEFAULT NULL,
  `position_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`employee_id`),
  KEY `dept_id` (`dept_id`),
  KEY `position_id` (`position_id`),
  CONSTRAINT `tb_karyawan_ibfk_1` FOREIGN KEY (`dept_id`) REFERENCES `tb_departemen` (`dept_id`),
  CONSTRAINT `tb_karyawan_ibfk_2` FOREIGN KEY (`position_id`) REFERENCES `tb_position` (`position_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tb_karyawan
-- ----------------------------
INSERT INTO `tb_karyawan` VALUES ('1', 'Ayurika Sinambela', 'ayurika@gmail.com', '087765780019', '2023-03-06', '2', '1');
INSERT INTO `tb_karyawan` VALUES ('2', 'Cezia Defrya', 'cezia@gmail.com', '081277099088', '2023-03-06', '5', '1');
INSERT INTO `tb_karyawan` VALUES ('3', 'Nicholas Bayu', 'nicholas@gmail.com', '085567829999', '2023-03-06', '2', '2');
INSERT INTO `tb_karyawan` VALUES ('4', 'Kepin Luckman', 'kevin@gmail.com', '085122098123', '2023-03-18', '3', '1');
INSERT INTO `tb_karyawan` VALUES ('5', 'Yohana Apri', 'apri@gmail.com', '081950015441', '2023-03-18', '5', '2');
INSERT INTO `tb_karyawan` VALUES ('6', 'Elizabeth', 'eliz@gmail.com', '081950015001', '2023-03-18', '2', '5');

-- ----------------------------
-- Table structure for `tb_position`
-- ----------------------------
DROP TABLE IF EXISTS `tb_position`;
CREATE TABLE `tb_position` (
  `position_id` int(11) NOT NULL,
  `position_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`position_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tb_position
-- ----------------------------
INSERT INTO `tb_position` VALUES ('1', 'Manager');
INSERT INTO `tb_position` VALUES ('2', 'Assistant Manager');
INSERT INTO `tb_position` VALUES ('3', 'Supervisor');
INSERT INTO `tb_position` VALUES ('4', 'Designer');
INSERT INTO `tb_position` VALUES ('5', 'Analyst');
