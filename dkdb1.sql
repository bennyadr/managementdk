/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 100116
Source Host           : localhost:3306
Source Database       : dkdb

Target Server Type    : MYSQL
Target Server Version : 100116
File Encoding         : 65001

Date: 2017-04-24 09:51:55
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for detail_hosting
-- ----------------------------
DROP TABLE IF EXISTS `detail_hosting`;
CREATE TABLE `detail_hosting` (
  `id_detail_hosting` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_pelanggan_hosting` int(10) unsigned NOT NULL,
  `awal_daftar` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `inputed_by` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_detail_hosting`),
  KEY `detail_hosting_id_pelanggan_hosting_foreign` (`id_pelanggan_hosting`),
  CONSTRAINT `detail_hosting_id_pelanggan_hosting_foreign` FOREIGN KEY (`id_pelanggan_hosting`) REFERENCES `pelanggan_hosting` (`id_pelanggan_hosting`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of detail_hosting
-- ----------------------------

-- ----------------------------
-- Table structure for detail_proyek
-- ----------------------------
DROP TABLE IF EXISTS `detail_proyek`;
CREATE TABLE `detail_proyek` (
  `id_detail_proyek` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_proyek` int(10) unsigned NOT NULL,
  `id_vendor` int(10) unsigned NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tgl` date NOT NULL,
  `nilai` int(11) NOT NULL,
  `keterangan` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_detail_proyek`),
  KEY `detail_proyek_id_proyek_foreign` (`id_proyek`),
  CONSTRAINT `detail_proyek_id_proyek_foreign` FOREIGN KEY (`id_proyek`) REFERENCES `proyek` (`id_proyek`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of detail_proyek
-- ----------------------------

-- ----------------------------
-- Table structure for file_proyek
-- ----------------------------
DROP TABLE IF EXISTS `file_proyek`;
CREATE TABLE `file_proyek` (
  `id_file_proyek` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_file` varchar(75) COLLATE utf8_unicode_ci NOT NULL,
  `id_proyek` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_file_proyek`),
  KEY `file_proyek_id_proyek_foreign` (`id_proyek`),
  CONSTRAINT `file_proyek_id_proyek_foreign` FOREIGN KEY (`id_proyek`) REFERENCES `proyek` (`id_proyek`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of file_proyek
-- ----------------------------

-- ----------------------------
-- Table structure for grup
-- ----------------------------
DROP TABLE IF EXISTS `grup`;
CREATE TABLE `grup` (
  `id_grup` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_grup` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_grup`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of grup
-- ----------------------------
INSERT INTO `grup` VALUES ('2', 'Digital Kreasi', '2017-03-14 04:39:41', '2017-03-14 06:04:24');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('4', '2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('5', '2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `migrations` VALUES ('6', '2017_03_14_035504_create_groups_table', '1');
INSERT INTO `migrations` VALUES ('7', '2017_03_14_060634_create_pakets_table', '2');
INSERT INTO `migrations` VALUES ('11', '2017_03_14_062900_create_vendors_table', '3');
INSERT INTO `migrations` VALUES ('12', '2017_03_14_064845_create_pelanggans_table', '3');
INSERT INTO `migrations` VALUES ('14', '2017_03_14_073925_create_servers_table', '4');
INSERT INTO `migrations` VALUES ('17', '2017_03_14_125033_create_proyeks_table', '5');
INSERT INTO `migrations` VALUES ('23', '2017_03_15_004628_create_detail_proyeks_table', '6');
INSERT INTO `migrations` VALUES ('27', '2017_03_16_014507_create_pelanggan_hostings_table', '7');
INSERT INTO `migrations` VALUES ('28', '2017_03_16_023443_create_detail_hostings_table', '7');
INSERT INTO `migrations` VALUES ('29', '2017_03_16_130020_create_file_proyeks_table', '8');

-- ----------------------------
-- Table structure for paket_hosting
-- ----------------------------
DROP TABLE IF EXISTS `paket_hosting`;
CREATE TABLE `paket_hosting` (
  `id_paket` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_paket` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_paket`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of paket_hosting
-- ----------------------------
INSERT INTO `paket_hosting` VALUES ('2', 'DK50', '2017-03-14 09:26:30', '2017-03-14 09:26:30');

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for pelanggan
-- ----------------------------
DROP TABLE IF EXISTS `pelanggan`;
CREATE TABLE `pelanggan` (
  `id_pelanggan` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `jabatan` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `perwakilan` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lokasi` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hp` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `telp` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `fax` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `tahun` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `inputed_by` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_pelanggan`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of pelanggan
-- ----------------------------
INSERT INTO `pelanggan` VALUES ('1', 'Komisi Pemilihan Umum Kota Pagar Alam', 'Anggota KPU Pagar Alam', 'Suryadi', 'jlasjdasj', 'kpu31521@go.id', 'pagar alam', '08123912112', '08123912112', '08123912112', '2017', 'admin', '2017-03-14 07:23:23', '2017-03-14 07:23:23');

-- ----------------------------
-- Table structure for pelanggan_hosting
-- ----------------------------
DROP TABLE IF EXISTS `pelanggan_hosting`;
CREATE TABLE `pelanggan_hosting` (
  `id_pelanggan_hosting` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8_unicode_ci NOT NULL,
  `hp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fax` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `domain` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `perwakilan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_paket` int(11) NOT NULL,
  `jabatan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tahun` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status_hosting` tinyint(1) NOT NULL,
  `inputed_by` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_pelanggan_hosting`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of pelanggan_hosting
-- ----------------------------
INSERT INTO `pelanggan_hosting` VALUES ('1', 'Balai Penelitian Sembawa', 'Jl Palembang - PK Balai KM29 Banyuasin', '082372564568', 'reezal555@gmail.com', '0711492947', '0711492947', 'balitsembawa.com', 'M. Syafrizal', '2', 'Anggota KPU Pagar Alam', '2017', '1', 'admin', '2017-03-16 07:57:30', '2017-03-16 07:57:30');

-- ----------------------------
-- Table structure for proyek
-- ----------------------------
DROP TABLE IF EXISTS `proyek`;
CREATE TABLE `proyek` (
  `id_proyek` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_pelanggan` int(10) unsigned NOT NULL,
  `nama_proyek` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `spk` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `nilai_proyek` int(11) NOT NULL,
  `tahun` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `status_proyek` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `status_pembayaran` tinyint(1) NOT NULL,
  `profit` int(11) DEFAULT NULL,
  `keterangan` text COLLATE utf8_unicode_ci NOT NULL,
  `id_grup` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_proyek`),
  KEY `proyek_id_pelanggan_foreign` (`id_pelanggan`),
  CONSTRAINT `proyek_id_pelanggan_foreign` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id_pelanggan`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of proyek
-- ----------------------------

-- ----------------------------
-- Table structure for server
-- ----------------------------
DROP TABLE IF EXISTS `server`;
CREATE TABLE `server` (
  `id_server` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_pelanggan` int(10) unsigned NOT NULL,
  `nama_perangkat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `informasi` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_server`),
  KEY `server_id_pelanggan_foreign` (`id_pelanggan`),
  CONSTRAINT `server_id_pelanggan_foreign` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id_pelanggan`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of server
-- ----------------------------
INSERT INTO `server` VALUES ('1', '1', 'PC-SERVER-LINUX-UBUNTU', 'root', 'root', 'asdasdasddas', '2017-03-14 12:46:52', '2017-03-14 12:46:52');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role` enum('pm','administrasi') COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'wedus99', 'weduswak@gmail.com', '$2y$10$nNN17KiAATFx13fT4Nzc0uJwf6agt0vOoYBPLoS/TBQH8SuF3YvGK', 'rqNKNsrdxEgAMgOCmrd5OgAHVPoOBdbhnbla2kEC4esrgKI9DzLtBGmCtG12', 'pm', '2017-03-17 01:01:12', '2017-04-24 02:07:08');
INSERT INTO `users` VALUES ('2', 'Test', 'ooary@gmail.com', '$2y$10$CKSFv0s2vzfG9Re5pY8nKO9zYksxOJ6yT7xFH9A.pOyAHm7nAyeJO', 'AAGHN5d0MJkJakhsVJF2LADpESLJmdOTFECHbgFTrma4JAbEZ5ffjb437oXy', 'administrasi', '2017-03-20 12:13:58', '2017-04-24 02:21:10');

-- ----------------------------
-- Table structure for vendors
-- ----------------------------
DROP TABLE IF EXISTS `vendors`;
CREATE TABLE `vendors` (
  `id_vendor` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_vendor` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `perwakilan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_vendor`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of vendors
-- ----------------------------
INSERT INTO `vendors` VALUES ('1', 'Digital Kreasi', 'Yanto S.Kom', 'Plaju', '082182988224', '2017-03-14 09:20:42', '2017-03-14 09:20:42');
SET FOREIGN_KEY_CHECKS=1;
