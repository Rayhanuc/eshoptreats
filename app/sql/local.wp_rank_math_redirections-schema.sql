/*!40101 SET NAMES binary*/;
/*!40014 SET FOREIGN_KEY_CHECKS=0*/;

CREATE TABLE `wp_rank_math_redirections` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `sources` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `url_to` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `header_code` smallint(4) unsigned NOT NULL,
  `hits` bigint(20) unsigned NOT NULL DEFAULT '0',
  `status` varchar(25) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'active',
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_accessed` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `status` (`status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
