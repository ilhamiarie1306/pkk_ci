/*
 Navicat Premium Data Transfer

 Source Server         : MYSQL XAMP
 Source Server Type    : MySQL
 Source Server Version : 100414
 Source Host           : localhost:3306
 Source Schema         : pkk_php_mysql

 Target Server Type    : MySQL
 Target Server Version : 100414
 File Encoding         : 65001

 Date: 07/10/2022 09:29:12
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for t_agama
-- ----------------------------
DROP TABLE IF EXISTS `t_agama`;
CREATE TABLE `t_agama`  (
  `id` int(11) NOT NULL,
  `keterangan` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of t_agama
-- ----------------------------
INSERT INTO `t_agama` VALUES (1, 'Islam');
INSERT INTO `t_agama` VALUES (2, 'Kristen');
INSERT INTO `t_agama` VALUES (3, 'Budha');
INSERT INTO `t_agama` VALUES (4, 'Hindu');

-- ----------------------------
-- Table structure for t_jenis_kelamin
-- ----------------------------
DROP TABLE IF EXISTS `t_jenis_kelamin`;
CREATE TABLE `t_jenis_kelamin`  (
  `id` int(11) NOT NULL,
  `keterangan` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of t_jenis_kelamin
-- ----------------------------
INSERT INTO `t_jenis_kelamin` VALUES (1, 'Laki-Laki');
INSERT INTO `t_jenis_kelamin` VALUES (2, 'Perempuan');

-- ----------------------------
-- Table structure for t_siswa
-- ----------------------------
DROP TABLE IF EXISTS `t_siswa`;
CREATE TABLE `t_siswa`  (
  `nis` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` int(255) NOT NULL,
  `agama` int(255) NOT NULL,
  PRIMARY KEY (`nis`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of t_siswa
-- ----------------------------
INSERT INTO `t_siswa` VALUES ('19222/2321', 'Joni Hartono', '2004-06-29', 1, 1);

-- ----------------------------
-- Table structure for t_user
-- ----------------------------
DROP TABLE IF EXISTS `t_user`;
CREATE TABLE `t_user`  (
  `username` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`username`) USING BTREE,
  UNIQUE INDEX `user_email_uniqe`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of t_user
-- ----------------------------
INSERT INTO `t_user` VALUES ('pakarik', '123456789', 'pakarik@gmail.com');

SET FOREIGN_KEY_CHECKS = 1;
