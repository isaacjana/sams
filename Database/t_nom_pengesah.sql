/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : sams

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2020-09-11 15:26:01
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for t_nom_pengesah
-- ----------------------------
DROP TABLE IF EXISTS `t_nom_pengesah`;
CREATE TABLE `t_nom_pengesah` (
  `pengesahan_id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_id` int(11) DEFAULT NULL,
  `usr_id` int(11) DEFAULT NULL,
  `syarat1` varchar(255) DEFAULT NULL,
  `syarat2` varchar(255) DEFAULT NULL,
  `syarat3` varchar(255) DEFAULT NULL,
  `syarat4` varchar(255) DEFAULT NULL,
  `syarat5` varchar(255) DEFAULT NULL,
  `syarat6` varchar(255) DEFAULT NULL,
  `syarat7` varchar(255) DEFAULT NULL,
  `syarat8` varchar(255) DEFAULT NULL,
  `komen_penilai` varchar(255) DEFAULT NULL,
  `penilai_remarks` varchar(255) DEFAULT NULL,
  `_rec_created_on` datetime DEFAULT NULL,
  `_rec_created_by` varchar(255) DEFAULT NULL,
  `pengesah_stat` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`pengesahan_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
