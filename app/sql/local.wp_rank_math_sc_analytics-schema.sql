/*!40101 SET NAMES binary*/;
/*!40014 SET FOREIGN_KEY_CHECKS=0*/;

CREATE TABLE `wp_rank_math_sc_analytics` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `property` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `clicks` mediumint(6) NOT NULL,
  `impressions` mediumint(6) NOT NULL,
  `position` double NOT NULL,
  `ctr` double NOT NULL,
  `dimension` varchar(25) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `property` (`property`(191))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
