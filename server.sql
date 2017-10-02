/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 100116
Source Host           : localhost:3306
Source Database       : dkdb

Target Server Type    : MYSQL
Target Server Version : 100116
File Encoding         : 65001

Date: 2017-05-03 10:57:10
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for server
-- ----------------------------
DROP TABLE IF EXISTS `server`;
CREATE TABLE `server` (
  `id_server` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_pelanggan` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nama_perangkat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `informasi` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_server`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
SET FOREIGN_KEY_CHECKS=1;
