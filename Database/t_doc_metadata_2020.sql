/*
Navicat MySQL Data Transfer

Source Server         : SAMS
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : sams

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2020-09-15 10:46:52
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for t_doc_metadata_2020
-- ----------------------------
DROP TABLE IF EXISTS `t_doc_metadata_2020`;
CREATE TABLE `t_doc_metadata_2020` (
  `metadata_id` int(11) NOT NULL AUTO_INCREMENT,
  `doc_name` varchar(255) DEFAULT '',
  `doc_module` varchar(255) DEFAULT NULL,
  `doc_type` varchar(255) DEFAULT NULL,
  `doc_size` double DEFAULT NULL,
  `par_table_name` varchar(255) DEFAULT NULL,
  `par_id` int(11) DEFAULT NULL,
  `doc_location` varchar(255) DEFAULT NULL,
  `_rec_created_on` datetime DEFAULT NULL,
  `_rec_created_by` varchar(255) DEFAULT NULL,
  `_rec_modified_on` datetime DEFAULT NULL,
  `_rec_modified_by` varchar(255) DEFAULT NULL,
  `_rec_deleted_by` varchar(255) DEFAULT NULL,
  `_rec_deleted_on` datetime DEFAULT NULL,
  `_rec_status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`metadata_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
