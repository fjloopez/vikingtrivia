/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50631
 Source Host           : localhost:3306
 Source Schema         : vikingtrivia

 Target Server Type    : MySQL
 Target Server Version : 50631
 File Encoding         : 65001

 Date: 07/08/2017 16:36:41
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for activity_reg
-- ----------------------------
DROP TABLE IF EXISTS `activity_reg`;
CREATE TABLE `activity_reg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `score` int(11) DEFAULT NULL,
  `time` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for answers
-- ----------------------------
DROP TABLE IF EXISTS `answers`;
CREATE TABLE `answers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` varchar(45) CHARACTER SET latin1 NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `correct` tinyint(4) NOT NULL DEFAULT '0',
  `question_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `description` varchar(50) CHARACTER SET latin1 NOT NULL,
  `category_img` varchar(45) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for questions
-- ----------------------------
DROP TABLE IF EXISTS `questions`;
CREATE TABLE `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` longtext CHARACTER SET latin1 NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `freeze_timer` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for user_user
-- ----------------------------
DROP TABLE IF EXISTS `user_user`;
CREATE TABLE `user_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_a_id` int(11) NOT NULL,
  `user_b_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL DEFAULT '',
  `surname` varchar(45) NOT NULL DEFAULT '',
  `username` varchar(45) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `birth_date` date DEFAULT NULL,
  `gender` varchar(10) DEFAULT '',
  `avatar_path` varchar(100) DEFAULT '/images/avatars/defaultAvatar.png',
  `password` varchar(100) NOT NULL DEFAULT '',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `admin_id` tinyint(4) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
BEGIN;
INSERT INTO `users` VALUES (1, 'FRANCISCO', 'LOPEZ', 'flopez', 'FJLOOPEZ@GMAIL.COM', '1990-12-26', 'male', '\'/images/avatars/defaultAvatar.png\'', '$2y$10$4b56o8asyRW8tpczavdVCeCp3UrNTKHZU/txmG51CaTG5bsim226u', NULL, NULL, 0, NULL);
INSERT INTO `users` VALUES (2, 'Ruy', 'Barriopedro', 'ruypo', 'ruypo00@gmail.com', '2017-05-11', 'male', '\'/images/avatars/defaultAvatar.png\'', '$2y$10$6dnaEcFbNzR77uVGab/N5uO3nobxKT1/oqljKEcjESa8vHUUGrRx.', NULL, NULL, 0, NULL);
INSERT INTO `users` VALUES (3, 'jorgito', 'lopez', 'jorgito', 'jsadkn@sdlknf.com', '2017-05-16', 'male', '\'/images/avatars/defaultAvatar.png\'', '$2y$10$O.oUtW9btuitDu7A052HwOSPZy7lOg.j6WYmuVLgli2VOy5gO2ELW', NULL, NULL, 0, NULL);
INSERT INTO `users` VALUES (4, 'haha', 'lala', 'hala', 'fjloopez@gmail.com', '1990-02-04', 'other', '\'/images/avatars/defaultAvatar.png\'', '$2y$10$9f9YCfE3/YfFkn/J1omySOjkCuThYoL8XLd8lr5rmiCcOcJaxrpeW', NULL, NULL, 0, NULL);
INSERT INTO `users` VALUES (5, 'mostri', 'mostreli', 'mostri', 'mostri@mostri.com', '2017-05-17', 'other', '\'/images/avatars/defaultAvatar.png\'', '$2y$10$9IGVaG8AfNjjIiZ7cqYDPePQZ2RId8cpCkNny0fOMgDdgI9/fKIcW', NULL, NULL, 0, NULL);
INSERT INTO `users` VALUES (6, 'jorgelin', 'damostri', 'elmostri', 'afafd@sdgs.com', '2017-05-17', 'female', '\'/images/avatars/defaultAvatar.png\'', '$2y$10$g92TkwLZN5cldUJ0NGfo9uBOM8bUYP7wf9ifr6mQw/ejfjH7ie3M.', NULL, NULL, 0, NULL);
INSERT INTO `users` VALUES (7, 'Bart', 'Simpson', 'elbarto', 'bart@simpson.com', '1980-12-12', 'male', '\'/images/avatars/defaultAvatar.png\'', '$2y$10$EzaQiyWVUZVWGGnfpBmONeYW00RRe6htvA4.GFVCtMseOHBRf1wvS', NULL, NULL, 0, NULL);
INSERT INTO `users` VALUES (8, 'asdf', 'asdf', 'asdf', 'a@a.com', '1990-01-01', 'male', '\'/images/avatars/defaultAvatar.png\'', '$2y$10$BCKwiCkdr2kyqWM7jeAu0u07FIzy.rKylLhrqBFJ2ZZnNtb8zMirW', NULL, NULL, 0, 'OoLbp6Mb1SOmVT95sNiZaeiTCwlgQfrQyUUVjQhVwnvWIdPJB3MfIfWX9I5e');
INSERT INTO `users` VALUES (9, 'asdafd', 'afsfaf', 'asdfg', 'a@a.com', '1990-12-12', 'female', '\'/images/avatars/defaultAvatar.png\'', '$2y$10$Mk9VVdo9k0WSyCRAsWbaQuf7AQQyh7Tow03qhgXMcMBAJKBNvj2iC', NULL, NULL, 0, NULL);
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
