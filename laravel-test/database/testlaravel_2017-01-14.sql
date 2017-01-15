# ************************************************************
# Sequel Pro SQL dump
# Version 4499
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.6.31)
# Database: testlaravel
# Generation Time: 2017-01-15 00:33:02 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table company
# ------------------------------------------------------------

DROP TABLE IF EXISTS `company`;

CREATE TABLE `company` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `company` WRITE;
/*!40000 ALTER TABLE `company` DISABLE KEYS */;

INSERT INTO `company` (`id`, `name`, `created_at`, `updated_at`)
VALUES
	(1,'voluptas1','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(2,'possimus2','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(3,'voluptates3','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(4,'consequuntur4','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(5,'eum5','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(6,'qui6','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(7,'rerum7','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(8,'nam8','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(9,'cumque9','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(10,'deserunt10','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(11,'harum11','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(12,'quibusdam12','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(13,'tempora13','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(14,'dolore14','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(15,'quo15','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(16,'ab16','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(17,'illum17','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(18,'et18','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(19,'voluptatibus19','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(20,'ipsa20','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(21,'qui21','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(22,'voluptatem22','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(23,'delectus23','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(24,'debitis24','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(25,'cumque25','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(26,'libero26','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(27,'exercitationem27','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(28,'odit28','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(29,'impedit29','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(30,'dolores30','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(31,'modi31','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(32,'magni32','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(33,'voluptatem33','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(34,'suscipit34','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(35,'voluptas35','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(36,'fugit36','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(37,'odio37','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(38,'aut38','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(39,'omnis39','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(40,'error40','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(41,'ut41','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(42,'omnis42','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(43,'qui43','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(44,'totam44','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(45,'in45','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(46,'deleniti46','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(47,'quia47','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(48,'quo48','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(49,'doloremque49','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(50,'iure50','2017-01-15 00:31:44','2017-01-15 00:31:44');

/*!40000 ALTER TABLE `company` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table group
# ------------------------------------------------------------

DROP TABLE IF EXISTS `group`;

CREATE TABLE `group` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `group` WRITE;
/*!40000 ALTER TABLE `group` DISABLE KEYS */;

INSERT INTO `group` (`id`, `name`, `created_at`, `updated_at`)
VALUES
	(1,'ratione1','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(2,'voluptate2','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(3,'reprehenderit3','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(4,'eum4','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(5,'facere5','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(6,'ut6','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(7,'ea7','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(8,'dolores8','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(9,'asperiores9','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(10,'quis10','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(11,'aperiam11','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(12,'ea12','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(13,'voluptatibus13','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(14,'vero14','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(15,'aut15','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(16,'voluptas16','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(17,'maxime17','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(18,'quis18','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(19,'rem19','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(20,'inventore20','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(21,'fuga21','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(22,'enim22','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(23,'molestias23','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(24,'quam24','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(25,'et25','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(26,'dolore26','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(27,'eligendi27','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(28,'consequatur28','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(29,'voluptas29','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(30,'impedit30','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(31,'dolor31','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(32,'ipsam32','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(33,'quia33','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(34,'vel34','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(35,'quas35','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(36,'illo36','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(37,'quia37','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(38,'optio38','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(39,'omnis39','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(40,'et40','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(41,'quam41','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(42,'ut42','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(43,'quam43','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(44,'iure44','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(45,'debitis45','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(46,'in46','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(47,'vitae47','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(48,'ut48','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(49,'aliquam49','2017-01-15 00:31:44','2017-01-15 00:31:44'),
	(50,'aspernatur50','2017-01-15 00:31:44','2017-01-15 00:31:44');

/*!40000 ALTER TABLE `group` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`id`, `migration`, `batch`)
VALUES
	(1,'2014_10_12_000000_create_users_table',1),
	(2,'2014_10_12_100000_create_password_resets_table',1);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table password_resets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table user_group
# ------------------------------------------------------------

DROP TABLE IF EXISTS `user_group`;

CREATE TABLE `user_group` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `user_group` WRITE;
/*!40000 ALTER TABLE `user_group` DISABLE KEYS */;

INSERT INTO `user_group` (`id`, `user_id`, `group_id`, `created_at`, `updated_at`)
VALUES
	(1,1,33,NULL,NULL),
	(2,1,1,NULL,NULL),
	(3,1,19,NULL,NULL),
	(4,1,26,NULL,NULL),
	(5,1,37,NULL,NULL),
	(6,2,49,NULL,NULL),
	(7,2,36,NULL,NULL),
	(8,2,25,NULL,NULL),
	(9,2,42,NULL,NULL),
	(10,2,41,NULL,NULL),
	(11,3,10,NULL,NULL),
	(12,3,44,NULL,NULL),
	(13,3,42,NULL,NULL),
	(14,3,38,NULL,NULL),
	(15,3,4,NULL,NULL),
	(16,4,21,NULL,NULL),
	(17,4,36,NULL,NULL),
	(18,4,27,NULL,NULL),
	(19,4,30,NULL,NULL),
	(20,5,1,NULL,NULL),
	(21,5,47,NULL,NULL),
	(22,5,17,NULL,NULL),
	(23,5,9,NULL,NULL),
	(24,6,11,NULL,NULL),
	(25,6,29,NULL,NULL),
	(26,6,47,NULL,NULL),
	(27,6,5,NULL,NULL),
	(28,7,1,NULL,NULL),
	(29,7,3,NULL,NULL),
	(30,7,19,NULL,NULL),
	(31,7,25,NULL,NULL),
	(32,7,45,NULL,NULL),
	(33,8,24,NULL,NULL),
	(34,8,4,NULL,NULL),
	(35,8,3,NULL,NULL),
	(36,8,16,NULL,NULL),
	(37,8,41,NULL,NULL),
	(38,9,19,NULL,NULL),
	(39,9,12,NULL,NULL),
	(40,9,42,NULL,NULL),
	(41,9,40,NULL,NULL),
	(42,9,39,NULL,NULL),
	(43,10,4,NULL,NULL),
	(44,10,40,NULL,NULL),
	(45,10,18,NULL,NULL),
	(46,10,21,NULL,NULL),
	(47,10,48,NULL,NULL),
	(48,11,17,NULL,NULL),
	(49,11,8,NULL,NULL),
	(50,11,43,NULL,NULL),
	(51,11,14,NULL,NULL),
	(52,11,37,NULL,NULL),
	(53,12,46,NULL,NULL),
	(54,12,37,NULL,NULL),
	(55,12,50,NULL,NULL),
	(56,12,15,NULL,NULL),
	(57,12,11,NULL,NULL),
	(58,13,24,NULL,NULL),
	(59,13,35,NULL,NULL),
	(60,13,48,NULL,NULL),
	(61,13,27,NULL,NULL),
	(62,13,50,NULL,NULL),
	(63,14,33,NULL,NULL),
	(64,14,19,NULL,NULL),
	(65,14,50,NULL,NULL),
	(66,14,25,NULL,NULL),
	(67,14,8,NULL,NULL),
	(68,15,46,NULL,NULL),
	(69,15,11,NULL,NULL),
	(70,15,27,NULL,NULL),
	(71,15,14,NULL,NULL),
	(72,15,31,NULL,NULL),
	(73,16,28,NULL,NULL),
	(74,16,48,NULL,NULL),
	(75,16,33,NULL,NULL),
	(76,16,21,NULL,NULL),
	(77,16,11,NULL,NULL),
	(78,17,18,NULL,NULL),
	(79,17,7,NULL,NULL),
	(80,17,6,NULL,NULL),
	(81,17,21,NULL,NULL),
	(82,18,12,NULL,NULL),
	(83,18,45,NULL,NULL),
	(84,18,2,NULL,NULL),
	(85,18,9,NULL,NULL),
	(86,18,22,NULL,NULL),
	(87,19,48,NULL,NULL),
	(88,19,5,NULL,NULL),
	(89,19,20,NULL,NULL),
	(90,19,47,NULL,NULL),
	(91,19,29,NULL,NULL),
	(92,20,35,NULL,NULL),
	(93,20,25,NULL,NULL),
	(94,20,38,NULL,NULL),
	(95,20,12,NULL,NULL),
	(96,20,39,NULL,NULL),
	(97,21,37,NULL,NULL),
	(98,21,16,NULL,NULL),
	(99,21,19,NULL,NULL),
	(100,22,37,NULL,NULL),
	(101,22,4,NULL,NULL),
	(102,22,33,NULL,NULL),
	(103,22,43,NULL,NULL),
	(104,22,21,NULL,NULL),
	(105,23,10,NULL,NULL),
	(106,23,33,NULL,NULL),
	(107,23,48,NULL,NULL),
	(108,23,11,NULL,NULL),
	(109,23,42,NULL,NULL),
	(110,24,12,NULL,NULL),
	(111,24,39,NULL,NULL),
	(112,24,24,NULL,NULL),
	(113,24,32,NULL,NULL),
	(114,24,36,NULL,NULL),
	(115,25,9,NULL,NULL),
	(116,25,20,NULL,NULL),
	(117,25,27,NULL,NULL),
	(118,25,46,NULL,NULL),
	(119,25,32,NULL,NULL),
	(120,26,15,NULL,NULL),
	(121,26,18,NULL,NULL),
	(122,26,31,NULL,NULL),
	(123,26,36,NULL,NULL),
	(124,27,7,NULL,NULL),
	(125,27,23,NULL,NULL),
	(126,27,20,NULL,NULL),
	(127,27,39,NULL,NULL),
	(128,27,16,NULL,NULL),
	(129,28,43,NULL,NULL),
	(130,28,25,NULL,NULL),
	(131,28,23,NULL,NULL),
	(132,28,41,NULL,NULL),
	(133,28,36,NULL,NULL),
	(134,29,10,NULL,NULL),
	(135,29,48,NULL,NULL),
	(136,29,2,NULL,NULL),
	(137,29,33,NULL,NULL),
	(138,29,29,NULL,NULL),
	(139,30,36,NULL,NULL),
	(140,30,37,NULL,NULL),
	(141,30,7,NULL,NULL),
	(142,30,12,NULL,NULL),
	(143,30,33,NULL,NULL),
	(144,31,27,NULL,NULL),
	(145,31,47,NULL,NULL),
	(146,31,7,NULL,NULL),
	(147,32,24,NULL,NULL),
	(148,32,34,NULL,NULL),
	(149,32,15,NULL,NULL),
	(150,32,43,NULL,NULL),
	(151,32,22,NULL,NULL),
	(152,33,34,NULL,NULL),
	(153,33,15,NULL,NULL),
	(154,33,5,NULL,NULL),
	(155,33,6,NULL,NULL),
	(156,34,20,NULL,NULL),
	(157,34,14,NULL,NULL),
	(158,34,38,NULL,NULL),
	(159,34,22,NULL,NULL),
	(160,34,47,NULL,NULL),
	(161,35,8,NULL,NULL),
	(162,35,32,NULL,NULL),
	(163,35,4,NULL,NULL),
	(164,35,15,NULL,NULL),
	(165,35,44,NULL,NULL),
	(166,36,3,NULL,NULL),
	(167,36,20,NULL,NULL),
	(168,36,33,NULL,NULL),
	(169,36,9,NULL,NULL),
	(170,36,27,NULL,NULL),
	(171,37,1,NULL,NULL),
	(172,37,50,NULL,NULL),
	(173,37,44,NULL,NULL),
	(174,37,16,NULL,NULL),
	(175,37,43,NULL,NULL),
	(176,38,46,NULL,NULL),
	(177,38,26,NULL,NULL),
	(178,38,30,NULL,NULL),
	(179,38,1,NULL,NULL),
	(180,38,32,NULL,NULL),
	(181,39,41,NULL,NULL),
	(182,39,1,NULL,NULL),
	(183,39,47,NULL,NULL),
	(184,39,29,NULL,NULL),
	(185,39,22,NULL,NULL),
	(186,40,45,NULL,NULL),
	(187,40,30,NULL,NULL),
	(188,40,25,NULL,NULL),
	(189,40,49,NULL,NULL),
	(190,40,44,NULL,NULL),
	(191,41,35,NULL,NULL),
	(192,41,47,NULL,NULL),
	(193,41,38,NULL,NULL),
	(194,41,17,NULL,NULL),
	(195,41,6,NULL,NULL),
	(196,42,27,NULL,NULL),
	(197,42,6,NULL,NULL),
	(198,42,13,NULL,NULL),
	(199,42,20,NULL,NULL),
	(200,42,21,NULL,NULL),
	(201,43,35,NULL,NULL),
	(202,43,17,NULL,NULL),
	(203,43,30,NULL,NULL),
	(204,43,14,NULL,NULL),
	(205,44,48,NULL,NULL),
	(206,44,7,NULL,NULL),
	(207,44,12,NULL,NULL),
	(208,44,44,NULL,NULL),
	(209,44,36,NULL,NULL),
	(210,45,38,NULL,NULL),
	(211,45,30,NULL,NULL),
	(212,45,13,NULL,NULL),
	(213,45,12,NULL,NULL),
	(214,45,29,NULL,NULL),
	(215,46,30,NULL,NULL),
	(216,46,13,NULL,NULL),
	(217,46,3,NULL,NULL),
	(218,46,17,NULL,NULL),
	(219,46,29,NULL,NULL),
	(220,47,30,NULL,NULL),
	(221,47,6,NULL,NULL),
	(222,47,14,NULL,NULL),
	(223,47,43,NULL,NULL),
	(224,47,26,NULL,NULL),
	(225,48,48,NULL,NULL),
	(226,48,11,NULL,NULL),
	(227,48,2,NULL,NULL),
	(228,48,28,NULL,NULL),
	(229,48,25,NULL,NULL),
	(230,49,39,NULL,NULL),
	(231,49,22,NULL,NULL),
	(232,49,25,NULL,NULL),
	(233,49,50,NULL,NULL),
	(234,49,16,NULL,NULL),
	(235,50,33,NULL,NULL),
	(236,50,3,NULL,NULL),
	(237,50,40,NULL,NULL),
	(238,50,46,NULL,NULL),
	(239,50,15,NULL,NULL);

/*!40000 ALTER TABLE `user_group` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `company_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `company_id`)
VALUES
	(1,'admin','admin@admin.com','$2y$10$MWsKqzWgpoHPxgcCB9CiXesuHz7ytGVaIGv4kryAhrRaw1xs56Gd2',NULL,'2017-01-15 00:31:44','2017-01-15 00:31:44',3),
	(2,'in2','schowalter.zola@gmail.com','$2y$10$xrunHqSLvIk03iX7uwWXUuXCypj5BVp8.WU1cEh0Q3sDwdbZYS/du',NULL,'2017-01-15 00:31:44','2017-01-15 00:31:44',22),
	(3,'est3','astrosin@rippin.com','$2y$10$D1yEDbVb4DmGwkZT.XuplO7oCPZjGdAtGuVdWWyScpaV2syUUye2O',NULL,'2017-01-15 00:31:44','2017-01-15 00:31:44',50),
	(4,'possimus4','kristoffer07@hotmail.com','$2y$10$DLOBFgmyUV5T6rLbkrjrg.dfW5DeAdlmOGJegc8feT9D3NW/Iqueu',NULL,'2017-01-15 00:31:44','2017-01-15 00:31:44',4),
	(5,'debitis5','weimann.lysanne@yahoo.com','$2y$10$t3.pmRg8grY8qIiqUgYGE.kk8XfUh61WQXHKxtb49TSx.toP1A3qa',NULL,'2017-01-15 00:31:44','2017-01-15 00:31:44',15),
	(6,'praesentium6','fkeebler@veum.org','$2y$10$ZlbvLSPHILKWSjHIzDllaeTCtPZ2yX/aXQ29qvbJAA0VPPTZUSc4m',NULL,'2017-01-15 00:31:44','2017-01-15 00:31:44',47),
	(7,'nobis7','pgreenfelder@gmail.com','$2y$10$GbZMHRiLLkZNwcXofCfM.u8BiQZNbvi86b4WgtrOiKmN7818yjle2',NULL,'2017-01-15 00:31:45','2017-01-15 00:31:45',33),
	(8,'beatae8','zwiegand@oconnell.com','$2y$10$V4xl57bSj5V1rUN3DNtwTeRHfcbBuVtK6XA4ul89VKPCmP5kyq7HO',NULL,'2017-01-15 00:31:45','2017-01-15 00:31:45',10),
	(9,'omnis9','lily10@yahoo.com','$2y$10$AjVPYXjxsDIoi1Aeaxek6eqfgwfrUjtDEgJw2pRIuKgg7mcGWnXXu',NULL,'2017-01-15 00:31:45','2017-01-15 00:31:45',7),
	(10,'beatae10','lorenza.considine@wunsch.com','$2y$10$2YtkzWyCjuWgJbxvers1v.Q3G5S1Dy6wbdWw5ZRPYaC0OFt8KG/d.',NULL,'2017-01-15 00:31:45','2017-01-15 00:31:45',22),
	(11,'corporis11','jannie.moen@hotmail.com','$2y$10$29sfRw8/NFKawlUjzBmgku3O8g71o6qzKpejx0MicqfQJWcAQBa/q',NULL,'2017-01-15 00:31:45','2017-01-15 00:31:45',15),
	(12,'nemo12','roma.jaskolski@corkery.info','$2y$10$K8.OlcBdHCQdljM430nXtuGbLqMaoKuy4VR4Xhjoy8Hs2rzODzKKK',NULL,'2017-01-15 00:31:45','2017-01-15 00:31:45',48),
	(13,'consequatur13','wolff.alford@gerhold.info','$2y$10$3FDXtkNBitffaiHmY3.0vOUTyZkBMHSe.qyzBn/8DYuv1UjQZWYgy',NULL,'2017-01-15 00:31:45','2017-01-15 00:31:45',45),
	(14,'cupiditate14','yschulist@bruen.com','$2y$10$grcMsPg1w0lip4ZTuo80mO.4TKxSF8ogn33k1PtGZeR6hcNvKkNKC',NULL,'2017-01-15 00:31:45','2017-01-15 00:31:45',39),
	(15,'omnis15','stoltenberg.vida@gmail.com','$2y$10$3/Zb38TuH7DU9sXcfHrypepWdgnE72K/Tk.cTqsOTkZzTKgGJz3r.',NULL,'2017-01-15 00:31:45','2017-01-15 00:31:45',38),
	(16,'qui16','neha06@koch.com','$2y$10$JIjgjydkshi85cPAWfRYMOQjlWZW.9qUSLeAC0zYsrgMEBLL5BUae',NULL,'2017-01-15 00:31:46','2017-01-15 00:31:46',25),
	(17,'occaecati17','monserrat05@bruen.com','$2y$10$ayTuDbkrkxOwqS/92KLhb.M6OUiMUcEATrHUOklauAqMxYR7FKJkG',NULL,'2017-01-15 00:31:46','2017-01-15 00:31:46',19),
	(18,'consequatur18','xbuckridge@gmail.com','$2y$10$f42Kx/Q5nXqNyQWFWTTiJuRcTwhn8UzbcukwS8DCQyuL907wZNrsW',NULL,'2017-01-15 00:31:46','2017-01-15 00:31:46',17),
	(19,'eaque19','jkshlerin@yahoo.com','$2y$10$RTACZtqUeugLJ4WzZojMF.XucWfEdToig5NCZkVQtbYIzRS0vLsWe',NULL,'2017-01-15 00:31:46','2017-01-15 00:31:46',2),
	(20,'maiores20','shanelle.medhurst@gulgowski.com','$2y$10$5h/PHNzWEXqvb27Y0MQ14uy7gWZCYHuq6p3mSY3m/W./7ZHAbCGp.',NULL,'2017-01-15 00:31:46','2017-01-15 00:31:46',27),
	(21,'qui21','gbeer@olson.com','$2y$10$OhsVWDDOtptvsZQerJt9qe4nvXETfIgQ1UX.q9/6zJqRUrb1v9OzK',NULL,'2017-01-15 00:31:46','2017-01-15 00:31:46',19),
	(22,'libero22','johnnie69@gleichner.info','$2y$10$9eT7bjfkpmhEkdGgc5owL.H0pHByy4zw8JY7c7oWBBQR2jLMzrgAO',NULL,'2017-01-15 00:31:46','2017-01-15 00:31:46',27),
	(23,'ipsum23','vtremblay@gmail.com','$2y$10$Oc3M7pr5lJxCEv8/5WliHe5wPQX19tcidQrGHNnlBsn/9XqBF.SsO',NULL,'2017-01-15 00:31:46','2017-01-15 00:31:46',4),
	(24,'assumenda24','lizzie.emard@yahoo.com','$2y$10$yGfrgqH3rd/nvNe/3vSYW./aKgXyMYf5d2fZ1xeG2dPtV3GCY3TGW',NULL,'2017-01-15 00:31:46','2017-01-15 00:31:46',20),
	(25,'cumque25','fschinner@donnelly.com','$2y$10$nDWHq77MgpGanNXGuBVNv.L6nMU19zUXDJ4YWggKG5dDTW4USi.gW',NULL,'2017-01-15 00:31:47','2017-01-15 00:31:47',3),
	(26,'non26','stark.dandre@friesen.net','$2y$10$Eo75X8sg1oZnGrJLTY89Juw3kIt.gWFe5nezX/AGkMmW2DM/4aPYG',NULL,'2017-01-15 00:31:47','2017-01-15 00:31:47',15),
	(27,'nam27','nbeatty@pacocha.net','$2y$10$.4xPZhiiSDT.m0AhaJ.9zuOeV7YbaiRhS6KoFb0JOi/I7x7K/swqS',NULL,'2017-01-15 00:31:47','2017-01-15 00:31:47',17),
	(28,'nemo28','jeff32@beier.com','$2y$10$0NTTpF4gLF16HDAA0tqMguneLDqIrR2KZxREN1vYVomABeqpWzJX.',NULL,'2017-01-15 00:31:47','2017-01-15 00:31:47',41),
	(29,'autem29','adriel.rau@gmail.com','$2y$10$UHFhx2MnS/6h/p/3sfVzMea8jbixKU2r/FbYEabeUa82Iy3subOqe',NULL,'2017-01-15 00:31:47','2017-01-15 00:31:47',14),
	(30,'veniam30','vladimir36@gmail.com','$2y$10$yJlmhZ.19UY.OXsxDCIZK.qz8.CN5Dh2.t/pj5G3SBlURYjJxbo2.',NULL,'2017-01-15 00:31:47','2017-01-15 00:31:47',37),
	(31,'esse31','mona25@legros.com','$2y$10$u6/NV80uVjgoMDETPjlCIuKfSq1k25IjTDEWI.5jBC5ki8xkJ7NMC',NULL,'2017-01-15 00:31:47','2017-01-15 00:31:47',39),
	(32,'voluptatem32','emerald.pfannerstill@blick.org','$2y$10$UDtdA/jopAXBliHvu8CkF.4botfwufxb.s3XLlV4geX/rnT/j640W',NULL,'2017-01-15 00:31:47','2017-01-15 00:31:47',42),
	(33,'a33','cortez15@hotmail.com','$2y$10$HbU.7nMCHzoaBzUT6KeJMewjzrBw36hJvgEEA1figBsSsSqmnlsIK',NULL,'2017-01-15 00:31:47','2017-01-15 00:31:47',31),
	(34,'possimus34','wunsch.selina@yahoo.com','$2y$10$4Hp3NEMAbsct5M2uhSp9Ied5x/Pd/LdBUyux5iwJxk4APrtW1YU0K',NULL,'2017-01-15 00:31:48','2017-01-15 00:31:48',41),
	(35,'voluptatem35','durgan.leslie@gmail.com','$2y$10$k84C8boY2hPL2OkhYd/W7uQvm8iaz3.NbgchXP0FO/FcgPLCpF28e',NULL,'2017-01-15 00:31:48','2017-01-15 00:31:48',17),
	(36,'et36','eschuster@cole.info','$2y$10$x1gO76tUu7B9ynmTbEM84uM/EDdxHhnKUuAx7nthk.9RPCGWd.Vsm',NULL,'2017-01-15 00:31:48','2017-01-15 00:31:48',36),
	(37,'tenetur37','zion63@toy.com','$2y$10$GjrNT0xbmtSwxMrv5owi7eObI9jYly6.GGDH72bWl.hUFkrsPQXA.',NULL,'2017-01-15 00:31:48','2017-01-15 00:31:48',10),
	(38,'et38','heaney.jody@roberts.info','$2y$10$h9bVZaRqVWg.MFCqGTvM/e42kQczj4jmaw/iu1YimWsL2dk7Gb/Ea',NULL,'2017-01-15 00:31:48','2017-01-15 00:31:48',16),
	(39,'temporibus39','kayli.miller@stanton.com','$2y$10$iQvBfb4CbSsnaWDctFunYODmnPLhUcM6z.f3HlTZ7BMYs34puO9Z.',NULL,'2017-01-15 00:31:48','2017-01-15 00:31:48',34),
	(40,'quia40','alta.leannon@hotmail.com','$2y$10$PWNZOWDAzQa0mUiqPYTUK.3Gn9ortq.3YV5WJK3OxCxB3cJ35Cfyy',NULL,'2017-01-15 00:31:48','2017-01-15 00:31:48',44),
	(41,'molestiae41','dhuels@batz.com','$2y$10$0HstKIgOYCntVcr5WsE4p.Wnn1whhd.RkeNN302ftiouJUdTuhS5G',NULL,'2017-01-15 00:31:48','2017-01-15 00:31:48',18),
	(42,'sint42','cyril.volkman@block.biz','$2y$10$/oRBsLbIABsMMbN5slF52OZsJicfPSFBbyvCGoHH2RGTXbt5flapu',NULL,'2017-01-15 00:31:48','2017-01-15 00:31:48',14),
	(43,'eveniet43','evans.lemke@cremin.com','$2y$10$fri0DSbIZ6b0oPg7DTfEjOXPWTfQDeco3gmfyRvoTzUFiuaJp88Vu',NULL,'2017-01-15 00:31:48','2017-01-15 00:31:48',5),
	(44,'et44','nathan59@simonis.net','$2y$10$W1XL36z2rHviPgeaPBbmf.jRFDCZesIvNBmKyrZfY7A5MVVEid2iq',NULL,'2017-01-15 00:31:49','2017-01-15 00:31:49',12),
	(45,'corporis45','ymurphy@blanda.com','$2y$10$ehZ0.NvNaVvbHh8qAgSk5eHlGVElbC7pJfgUhFzbox95jCLJokoeq',NULL,'2017-01-15 00:31:49','2017-01-15 00:31:49',34),
	(46,'voluptas46','romaine.nienow@howe.biz','$2y$10$6X0thLo8XbPw7doWMkhPgOxRmNmN5oJ2vLj5qEBlf45F/9GGXnsxK',NULL,'2017-01-15 00:31:49','2017-01-15 00:31:49',7),
	(47,'ut47','xhoppe@hotmail.com','$2y$10$n4ylQ43l/QIagDJMi7FKPeyj3O9IiGaW1hO.qdngnplelI0ugpi3q',NULL,'2017-01-15 00:31:49','2017-01-15 00:31:49',9),
	(48,'itaque48','spouros@hotmail.com','$2y$10$zS2uWisQWl0kKgkpuqkbrOE3Z4AexKgNDngrOaTWaRF9803RjOUt6',NULL,'2017-01-15 00:31:49','2017-01-15 00:31:49',35),
	(49,'alias49','norbert.steuber@ritchie.com','$2y$10$NKQan3L1RjXVtmS5iTTquemW/3wJZ1BuigrtqMW5vENHL4IYptNfG',NULL,'2017-01-15 00:31:49','2017-01-15 00:31:49',18),
	(50,'in50','greenholt.gerard@wilkinson.com','$2y$10$R5Dt0zbAmik3MgATHaLRr.TlTrbt.6oiRlGjb82j/9kC4INwSSERG',NULL,'2017-01-15 00:31:49','2017-01-15 00:31:49',10);

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
