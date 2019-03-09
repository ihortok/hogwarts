/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50722
 Source Host           : localhost:3306
 Source Schema         : hogwarts

 Target Server Type    : MySQL
 Target Server Version : 50722
 File Encoding         : 65001

 Date: 09/03/2019 11:43:50
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for house
-- ----------------------------
DROP TABLE IF EXISTS `house`;
CREATE TABLE `house`  (
  `name` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `head` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`name`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of house
-- ----------------------------
INSERT INTO `house` VALUES ('Gryffindor', '');
INSERT INTO `house` VALUES ('Hufflepuff', NULL);
INSERT INTO `house` VALUES ('Ravenclaw', NULL);
INSERT INTO `house` VALUES ('Slytherin', NULL);

-- ----------------------------
-- Table structure for race
-- ----------------------------
DROP TABLE IF EXISTS `race`;
CREATE TABLE `race`  (
  `name` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`name`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of race
-- ----------------------------
INSERT INTO `race` VALUES ('elf');
INSERT INTO `race` VALUES ('giant');
INSERT INTO `race` VALUES ('half-giant');
INSERT INTO `race` VALUES ('human');

-- ----------------------------
-- Table structure for wizard
-- ----------------------------
DROP TABLE IF EXISTS `wizard`;
CREATE TABLE `wizard`  (
  `nickname` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `surname` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `age` int(11) NULL DEFAULT NULL,
  `race` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sex` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `patronum` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `status` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `subject` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `house` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `blood_status` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `headmaster` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`nickname`) USING BTREE,
  INDEX `house`(`house`) USING BTREE,
  INDEX `blood_status`(`blood_status`) USING BTREE,
  INDEX `race`(`race`) USING BTREE,
  CONSTRAINT `wizard_ibfk_1` FOREIGN KEY (`house`) REFERENCES `house` (`name`) ON DELETE SET NULL ON UPDATE RESTRICT,
  CONSTRAINT `wizard_ibfk_2` FOREIGN KEY (`race`) REFERENCES `race` (`name`) ON DELETE SET NULL ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of wizard
-- ----------------------------
INSERT INTO `wizard` VALUES ('Ced', 'Cedric', 'Diggory', 17, 'human', 'M', '', 'student', '', 'Hufflepuff', 'pure-blood', 0);
INSERT INTO `wizard` VALUES ('halfBloodPrince', 'Severus', 'Snape', 38, 'human', 'M', 'Doe', 'teacher', 'potions', 'Slytherin', 'half-blood', 0);
INSERT INTO `wizard` VALUES ('Hermy', 'Hermione ', 'Granger', 17, 'human', 'F', 'Otter', 'student', '', 'Gryffindor', 'muggle-born', 0);
INSERT INTO `wizard` VALUES ('Malfoy', 'Draco', 'Malfoy', 17, 'human', 'M', 'None', 'student', '', 'Slytherin', 'pure-blood', 0);
INSERT INTO `wizard` VALUES ('McGonagall', 'Minerva ', 'McGonagall', 89, 'human', 'F', 'Cat', 'teacher', 'transfiguration', 'Gryffindor', 'half-blood', 0);
INSERT INTO `wizard` VALUES ('Professorhead', 'Albus', 'Dumbledore', 150, 'human', 'M', 'Phoenix', 'headmaster', '', 'Gryffindor', 'pure-blood', 1);
INSERT INTO `wizard` VALUES ('Ron', 'Ronald ', 'Weasley', 17, 'human', 'M', 'Jack Russell Terrier', 'student', '', 'Gryffindor', 'pure-blood', 0);
INSERT INTO `wizard` VALUES ('theBoyWhoLived', 'Harry', 'Potter', 17, 'human', 'M', 'Stag', 'student', '', 'Gryffindor', 'half-blood', 0);

SET FOREIGN_KEY_CHECKS = 1;
