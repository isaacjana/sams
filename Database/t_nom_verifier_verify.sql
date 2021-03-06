/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : sams

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2020-09-17 14:12:27
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for t_nom_verifier_verify
-- ----------------------------
DROP TABLE IF EXISTS `t_nom_verifier_verify`;
CREATE TABLE `t_nom_verifier_verify` (
  `verifier_verify_id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_id` int(11) DEFAULT NULL,
  `meeting_status` varchar(255) DEFAULT NULL,
  `meeting_remarks` varchar(255) DEFAULT NULL,
  `_rec_created_on` date DEFAULT NULL,
  `_rec_created_by` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`verifier_verify_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
