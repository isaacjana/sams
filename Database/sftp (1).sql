/*
Navicat MySQL Data Transfer

Source Server         : SAMS
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : sams

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2020-09-17 12:49:12
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for t_doc_ftp
-- ----------------------------
DROP TABLE IF EXISTS `t_doc_ftp`;
CREATE TABLE `t_doc_ftp` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ftp_host` varchar(50) DEFAULT NULL,
  `ftp_username` varchar(50) DEFAULT NULL,
  `ftp_password` varchar(50) DEFAULT NULL,
  `ftp_port` varchar(6) NOT NULL DEFAULT '22',
  `ftp_file_location` varchar(60) NOT NULL DEFAULT '',
  `ftp_start_on` datetime DEFAULT NULL,
  `_rec_status` varchar(45) NOT NULL DEFAULT 'SHOW',
  `_rec_created_on` datetime DEFAULT NULL,
  `_rec_created_by` mediumint(8) unsigned DEFAULT NULL,
  `_rec_modified_on` datetime DEFAULT NULL,
  `_rec_modified_by` mediumint(8) unsigned DEFAULT NULL,
  `_rec_deleted_on` datetime DEFAULT NULL,
  `_rec_deleted_by` mediumint(8) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_doc_ftp
-- ----------------------------
INSERT INTO `t_doc_ftp` VALUES ('1', '192.168.1.99', 'samsTest', 'sams123', '22', '/sftp/portals/ftp_paces/', '2009-01-01 00:00:00', 'SHOW', null, null, null, null, null, null);

-- ----------------------------
-- Table structure for t_doc_structure
-- ----------------------------
DROP TABLE IF EXISTS `t_doc_structure`;
CREATE TABLE `t_doc_structure` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tbl_name` varchar(255) DEFAULT NULL,
  `tbl_structure` text DEFAULT NULL,
  `_rec_status` varchar(45) NOT NULL DEFAULT 'SHOW',
  `_rec_created_on` datetime DEFAULT NULL,
  `_rec_created_by` mediumint(8) unsigned DEFAULT NULL,
  `_rec_modified_on` datetime DEFAULT NULL,
  `_rec_modified_by` mediumint(8) unsigned DEFAULT NULL,
  `_rec_deleted_on` datetime DEFAULT NULL,
  `_rec_deleted_by` mediumint(8) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_doc_structure
-- ----------------------------
INSERT INTO `t_doc_structure` VALUES ('1', 't_doc_metadata', 'CREATE TABLE  <tbl_name> (\r\n  `doc_id` int(10) unsigned NOT NULL auto_increment,\r\n  `doc_module` varchar(100) default NULL,\r\n  `doc_name` varchar(500) default NULL,\r\n  `doc_type` varchar(255) default NULL,\r\n  `doc_size` varchar(100) default NULL,\r\n  `par_table_name` varchar(20) default NULL COMMENT \'The parent table name. E.g: t_pro_case\',\r\n  `par_id` varchar(45) default NULL COMMENT \'The parent ID of the original module. E.g: 2-10\',\r\n  `ftp_id` int(5) unsigned default NULL,\r\n  `doc_location` varchar(255) default NULL,\r\n  `doc_extra` text,\r\n  `_rec_status` varchar(45) NOT NULL default \'SHOW\',\r\n  `_rec_created_by` varchar(50) default NULL,\r\n  `_rec_created_on` datetime default NULL,\r\n  `_rec_modified_by` varchar(50) default NULL,\r\n  `_rec_modified_on` datetime default NULL,\r\n  `_rec_deleted_by` varchar(50) default NULL,\r\n  `_rec_deleted_by_on` datetime default NULL,\r\n  PRIMARY KEY  (`doc_id`)\r\n) ENGINE=InnoDB DEFAULT CHARSET=utf8;', 'SHOW', null, null, null, null, null, null);
INSERT INTO `t_doc_structure` VALUES ('2', 't_doc_att', 'CREATE TABLE  <tbl_name> (\r\n  `att_id` int(10) unsigned NOT NULL auto_increment,\r\n  `att_par_id` varchar(15) default NULL,\r\n  `att_source` varchar(100) default NULL,\r\n  `att_height` int(10) unsigned default NULL,\r\n  `att_width` int(10) unsigned default NULL,\r\n  `att_content` mediumblob NOT NULL,\r\n  `att_file_type` varchar(100) default NULL,\r\n  PRIMARY KEY  (`att_id`)\r\n) ENGINE=InnoDB DEFAULT CHARSET=utf8;', 'SHOW', null, null, null, null, null, null);
