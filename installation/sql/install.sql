SET NAMES utf8mb4;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

CREATE TABLE `countries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `flag_name` varchar(255) NOT NULL,
  `country_code` text NOT NULL,
  `continent` text NOT NULL,
  `currency` varchar(3) NOT NULL DEFAULT 'USD',
  `currency_symbol` varchar(10) DEFAULT NULL,
  `map_x` float DEFAULT NULL,
  `map_y` float NOT NULL,
  `mastercard` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0=no, 1=yes, 2=no account',
  `publish` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=211 DEFAULT CHARSET=utf8;


CREATE TABLE `languages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `code` varchar(3) NOT NULL,
  `rtl` tinyint(1) NOT NULL DEFAULT '0',
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `ordering` int(11) NOT NULL DEFAULT '1',
  `site` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

INSERT INTO `languages` (`id`, `name`, `code`, `rtl`, `active`, `ordering`, `site`) VALUES
(1,	'English',	'en',	0,	1,	1,	1),
(2,	'Русский',	'ru',	0,	0,	2,	1),
(3,	'Español',	'es',	0,	0,	3,	1),
(4,	'中文',	'cn',	0,	0,	4,	1),
(5,	'日本語',	'jp',	0,	0,	5,	1),
(6,	'Français',	'fr',	0,	0,	6,	1),
(7,	'Deutsch',	'de',	0,	0,	7,	1),
(8,	'Português',	'pt',	0,	0,	8,	1),
(9,	'Nederlands',	'nl',	0,	0,	9,	1),
(10,	'עברית',	'he',	1,	0,	10,	1),
(11,	'Ελληνικά',	'el',	0,	1,	11,	1),
(18,	'Srpski',	'sr',	0,	0,	12,	1),
(20,	'български',	'bg',	0,	0,	13,	1),
(21,	'Hrvatski',	'hr',	0,	0,	15,	1);

CREATE TABLE `menus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `type` int(11) NOT NULL,
  `position` varchar(255) NOT NULL,
  `site` varchar(10) NOT NULL DEFAULT 'xtra',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;


CREATE TABLE `menu_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `path` varchar(150) NOT NULL,
  `type` enum('page','external','media','news','controller') NOT NULL DEFAULT 'page',
  `link` varchar(150) NOT NULL,
  `cssid` varchar(50) NOT NULL,
  `class` varchar(50) DEFAULT NULL,
  `tooltip` varchar(255) DEFAULT NULL,
  `published` tinyint(1) NOT NULL DEFAULT '1',
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `level` int(11) NOT NULL DEFAULT '0',
  `ordering` int(11) DEFAULT '0',
  `default` enum('0','1') NOT NULL DEFAULT '0',
  `meta_description` varchar(160) DEFAULT NULL,
  `meta_keywords` varchar(160) DEFAULT NULL,
  `language` varchar(3) NOT NULL DEFAULT 'en',
  PRIMARY KEY (`id`),
  KEY `menu_id` (`menu`),
  KEY `parent_id` (`parent_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1636 DEFAULT CHARSET=utf8;


CREATE TABLE `menu_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;


CREATE TABLE `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `type` int(11) NOT NULL DEFAULT '0',
  `forward_id` int(11) NOT NULL DEFAULT '0',
  `to_all` int(11) NOT NULL DEFAULT '0',
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=633 DEFAULT CHARSET=utf8;


CREATE TABLE `messages_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `message_id` int(11) NOT NULL,
  `from_user` bigint(20) NOT NULL,
  `to_user` bigint(20) DEFAULT NULL,
  `draft` int(11) NOT NULL DEFAULT '0',
  `from_deleted` int(11) NOT NULL DEFAULT '0',
  `from_permanently_deleted` int(11) NOT NULL DEFAULT '0',
  `to_deleted` int(11) NOT NULL DEFAULT '0',
  `to_permanently_deleted` int(11) NOT NULL DEFAULT '0',
  `deleted_from_vio` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `message_id` (`message_id`),
  KEY `from_user` (`from_user`),
  KEY `to_user` (`to_user`),
  CONSTRAINT `messages_users_ibfk_1` FOREIGN KEY (`message_id`) REFERENCES `messages` (`id`),
  CONSTRAINT `messages_users_ibfk_2` FOREIGN KEY (`from_user`) REFERENCES `users` (`id`),
  CONSTRAINT `messages_users_ibfk_3` FOREIGN KEY (`to_user`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9832 DEFAULT CHARSET=utf8;


CREATE TABLE `outlets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `unique_id` varchar(5) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `description` text,
  `website` varchar(255) DEFAULT NULL,
  `keywords` text,
  `email` varchar(150) DEFAULT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  `fax` varchar(20) DEFAULT NULL,
  `country` int(11) NOT NULL,
  `store_id` int(11) NOT NULL,
  `discount` float NOT NULL DEFAULT '2.5',
  `fixed_discount` tinyint(1) NOT NULL DEFAULT '0',
  `integrated` tinyint(1) NOT NULL DEFAULT '0',
  `integration_date` datetime DEFAULT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `delete_date` datetime DEFAULT NULL,
  `inactive` tinyint(1) NOT NULL DEFAULT '0',
  `create_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `language` char(7) NOT NULL DEFAULT 'en',
  `parent_outlet` int(11) DEFAULT NULL,
  `vio_warnings` tinyint(1) NOT NULL DEFAULT '0' COMMENT '+1 per week without vio',
  `views` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `store_id` (`store_id`),
  KEY `country` (`country`),
  KEY `parent_outlet` (`parent_outlet`),
  CONSTRAINT `outlets_ibfk_1` FOREIGN KEY (`country`) REFERENCES `countries` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `outlets_ibfk_2` FOREIGN KEY (`store_id`) REFERENCES `stores` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `outlets_ibfk_3` FOREIGN KEY (`parent_outlet`) REFERENCES `outlets` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3950 DEFAULT CHARSET=utf8;


CREATE TABLE `outlets_address` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `outlet_id` int(11) NOT NULL,
  `street` varchar(150) NOT NULL,
  `street_no` varchar(10) NOT NULL,
  `city` varchar(50) NOT NULL,
  `region` varchar(100) NOT NULL,
  `postcode` varchar(10) NOT NULL,
  `lat` double NOT NULL DEFAULT '0',
  `lng` double NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `outlet_id` (`outlet_id`),
  CONSTRAINT `outlets_address_ibfk_1` FOREIGN KEY (`outlet_id`) REFERENCES `outlets` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2783 DEFAULT CHARSET=utf8;


CREATE TABLE `outlets_categories_rel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `outlet_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `outlet_id` (`outlet_id`),
  KEY `category_id` (`category_id`),
  CONSTRAINT `outlets_categories_rel_ibfk_1` FOREIGN KEY (`outlet_id`) REFERENCES `outlets` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `outlets_categories_rel_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `stores_categories` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2506 DEFAULT CHARSET=utf8;


CREATE TABLE `outlet_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `outlet_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` decimal(15,2) NOT NULL,
  `discount` float NOT NULL,
  `quantity` decimal(15,2) NOT NULL,
  `reorder_level` int(11) NOT NULL DEFAULT '0',
  `delivery_type` varchar(20) NOT NULL,
  `weight` decimal(15,2) NOT NULL DEFAULT '0.00',
  `shipping_cost` decimal(15,2) NOT NULL DEFAULT '0.00',
  `availability` int(11) NOT NULL,
  `promo_price` decimal(15,2) NOT NULL DEFAULT '0.00',
  `promo_start_date` date DEFAULT NULL,
  `promo_end_date` date DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `description` text,
  `epos` tinyint(4) NOT NULL DEFAULT '1',
  `language` varchar(2) DEFAULT NULL,
  `updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `views` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `outlet_id` (`outlet_id`),
  KEY `product_id` (`product_id`),
  CONSTRAINT `outlet_products_ibfk_1` FOREIGN KEY (`outlet_id`) REFERENCES `outlets` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `outlet_products_ibfk_10` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `outlet_products_ibfk_11` FOREIGN KEY (`outlet_id`) REFERENCES `outlets` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `outlet_products_ibfk_12` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `outlet_products_ibfk_13` FOREIGN KEY (`outlet_id`) REFERENCES `outlets` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `outlet_products_ibfk_14` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `outlet_products_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `outlet_products_ibfk_3` FOREIGN KEY (`outlet_id`) REFERENCES `outlets` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `outlet_products_ibfk_4` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `outlet_products_ibfk_5` FOREIGN KEY (`outlet_id`) REFERENCES `outlets` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `outlet_products_ibfk_6` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `outlet_products_ibfk_7` FOREIGN KEY (`outlet_id`) REFERENCES `outlets` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `outlet_products_ibfk_8` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `outlet_products_ibfk_9` FOREIGN KEY (`outlet_id`) REFERENCES `outlets` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3866 DEFAULT CHARSET=utf8;


CREATE TABLE `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(150) NOT NULL,
  `alias` varchar(150) NOT NULL,
  `content` text NOT NULL,
  `published` tinyint(1) NOT NULL DEFAULT '1',
  `catid` int(11) NOT NULL,
  `trash` tinyint(1) NOT NULL DEFAULT '0',
  `default` tinyint(1) NOT NULL DEFAULT '0',
  `site` varchar(10) NOT NULL DEFAULT 'xtra',
  `language` varchar(2) NOT NULL DEFAULT 'en',
  PRIMARY KEY (`id`),
  KEY `category_id` (`catid`)
) ENGINE=InnoDB AUTO_INCREMENT=800 DEFAULT CHARSET=utf8;


CREATE TABLE `pages_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `alias` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `parent` int(3) NOT NULL DEFAULT '0',
  `published` tinyint(1) NOT NULL DEFAULT '1',
  `ordering` int(11) NOT NULL DEFAULT '0',
  `trash` tinyint(1) NOT NULL DEFAULT '0',
  `language` varchar(2) NOT NULL DEFAULT 'en',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;


CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `barcode` varchar(30) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `language` char(7) NOT NULL DEFAULT 'en',
  `published` int(11) NOT NULL DEFAULT '1',
  `trash` int(11) NOT NULL DEFAULT '0',
  `checked` enum('0','1') NOT NULL DEFAULT '0',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3670 DEFAULT CHARSET=utf8;


CREATE TABLE `products_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `parent` int(11) NOT NULL,
  `level` int(3) NOT NULL,
  `path` text NOT NULL,
  `pathnames` text NOT NULL,
  `ebaycatid` int(11) NOT NULL,
  `ebayparentid` int(11) NOT NULL,
  `version` int(4) NOT NULL,
  `published` int(11) NOT NULL,
  `ordering` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `trash` int(11) NOT NULL,
  `language` char(7) NOT NULL,
  `views` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `ebaycatid` (`ebaycatid`)
) ENGINE=InnoDB AUTO_INCREMENT=6805 DEFAULT CHARSET=utf8;


CREATE TABLE `products_categories_rel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `product_id` (`product_id`),
  KEY `category_id` (`category_id`),
  CONSTRAINT `products_categories_rel_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `products_categories_rel_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `products_categories` (`ebaycatid`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3755 DEFAULT CHARSET=utf8;


CREATE TABLE `products_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `image_link` varchar(250) NOT NULL,
  `main` tinyint(1) NOT NULL,
  `imgorder` tinyint(1) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `product_id` (`product_id`),
  CONSTRAINT `products_images_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=329 DEFAULT CHARSET=utf8;


CREATE TABLE `products_taxes` (
  `product_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `percent` decimal(5,2) NOT NULL,
  `price` decimal(15,2) NOT NULL,
  KEY `product_id` (`product_id`),
  CONSTRAINT `products_taxes_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `stores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `description` text NOT NULL,
  `website` varchar(200) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  `fax` varchar(20) DEFAULT NULL,
  `country` int(11) NOT NULL,
  `pers_contacted` tinyint(1) NOT NULL DEFAULT '0',
  `user_id` bigint(20) NOT NULL,
  `referral` bigint(20) DEFAULT NULL,
  `free` tinyint(1) NOT NULL DEFAULT '0',
  `paid` tinyint(1) NOT NULL DEFAULT '0',
  `pay_date` datetime DEFAULT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `keywords` text,
  `registered_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `delete_date` datetime DEFAULT NULL,
  `language` char(7) NOT NULL DEFAULT 'en',
  `views` int(11) NOT NULL DEFAULT '0',
  `whmcs_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `country` (`country`),
  KEY `referral` (`referral`),
  CONSTRAINT `stores_ibfk_1` FOREIGN KEY (`country`) REFERENCES `countries` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `stores_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `stores_ibfk_3` FOREIGN KEY (`referral`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5188 DEFAULT CHARSET=utf8;


CREATE TABLE `stores_address` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `store_id` int(11) NOT NULL,
  `street` varchar(150) NOT NULL,
  `street_no` varchar(10) NOT NULL,
  `city` varchar(50) NOT NULL,
  `region` varchar(100) NOT NULL,
  `postcode` varchar(10) NOT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `store_id` (`store_id`),
  CONSTRAINT `stores_address_ibfk_1` FOREIGN KEY (`store_id`) REFERENCES `stores` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=1818 DEFAULT CHARSET=utf8;


CREATE TABLE `stores_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `parent` int(11) NOT NULL,
  `published` int(11) NOT NULL DEFAULT '1',
  `ordering` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `trash` int(11) NOT NULL DEFAULT '0',
  `language` char(7) NOT NULL DEFAULT 'en',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3522 DEFAULT CHARSET=utf8;


CREATE TABLE `stores_categories_rel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `store_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `store_id` (`store_id`),
  KEY `category_id` (`category_id`),
  CONSTRAINT `stores_categories_rel_ibfk_1` FOREIGN KEY (`store_id`) REFERENCES `stores` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `stores_categories_rel_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `stores_categories` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4108 DEFAULT CHARSET=utf8;


CREATE TABLE `store_employees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL,
  `outlet_id` int(11) DEFAULT NULL,
  `store_id` int(11) NOT NULL,
  `user_type` tinyint(1) NOT NULL DEFAULT '0',
  `started` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ended` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `outlet_id` (`outlet_id`),
  KEY `store_id` (`store_id`),
  CONSTRAINT `store_employees_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `store_employees_ibfk_2` FOREIGN KEY (`outlet_id`) REFERENCES `outlets` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `store_employees_ibfk_3` FOREIGN KEY (`store_id`) REFERENCES `stores` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5097 DEFAULT CHARSET=utf8;


CREATE TABLE `users` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `title` enum('Mr.','Mrs.','Ms.','Dr.','Prof.') DEFAULT 'Mr.',
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(100) NOT NULL,
  `telephone` varchar(30) DEFAULT NULL,
  `mobile` varchar(30) DEFAULT NULL,
  `country` int(3) NOT NULL,
  `gender` varchar(1) NOT NULL DEFAULT 'm',
  `birthday` date NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `parent_id` bigint(20) NOT NULL,
  `level` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `blocked` tinyint(1) NOT NULL DEFAULT '0',
  `activation_code` varchar(50) DEFAULT NULL,
  `last_visit` datetime NOT NULL,
  `unix_timestamp` bigint(16) DEFAULT NULL,
  `process` tinyint(1) NOT NULL DEFAULT '1',
  `updated` tinyint(1) NOT NULL DEFAULT '0',
  `fb_id` bigint(25) DEFAULT NULL,
  `affiliate` tinyint(1) NOT NULL DEFAULT '0',
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `suspended` tinyint(1) NOT NULL DEFAULT '0',
  `ut` tinyint(4) DEFAULT '1',
  `register_from` tinyint(2) NOT NULL DEFAULT '1',
  `full_time_sales` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_unique` (`email`),
  KEY `parent_user_id` (`parent_id`),
  CONSTRAINT `users_ibfk_1` FOREIGN KEY (`parent_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=55603 DEFAULT CHARSET=utf8;


CREATE TABLE `users_address` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL,
  `street` varchar(100) NOT NULL,
  `street_no` varchar(10) NOT NULL,
  `postcode` varchar(10) NOT NULL,
  `city` varchar(50) NOT NULL,
  `region` varchar(100) NOT NULL,
  `lat` double NOT NULL DEFAULT '0',
  `lng` double NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `users_address_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `users_address_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8261 DEFAULT CHARSET=utf8;


CREATE TABLE `user_email_notifications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL DEFAULT '0',
  `newsletter` tinyint(1) NOT NULL DEFAULT '1',
  `messages` int(11) NOT NULL DEFAULT '1',
  `special_offers` tinyint(1) NOT NULL DEFAULT '1',
  `special_offers_reminder` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `user_email_notifications_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=55086 DEFAULT CHARSET=utf8;


CREATE TABLE `user_messages_notification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL,
  `vio` int(11) NOT NULL DEFAULT '0',
  `parent` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_id` (`user_id`),
  CONSTRAINT `user_messages_notification_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=utf8;


CREATE TABLE `user_settings` (
  `user_id` bigint(20) NOT NULL,
  `language` int(11) NOT NULL,
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `user_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;


-- 2015-11-19 10:01:35