DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`migration`,`batch`) values ('2014_10_12_000000_create_users_table',1),('2014_10_12_100000_create_password_resets_table',1),('2016_12_28_153738_create_categories_table',1),('2016_12_28_175414_create_products_table',2),('2016_12_29_092131_create_sub_categories_table',3),('2016_12_29_164241_create_questions_table',4),('2016_12_30_193903_add_time_to_subcategory',5),('2016_12_31_073901_create_currencies_table',6),('2016_12_31_134410_create_logos_table',7),('2016_12_31_150201_create_sliders_table',8),('2016_12_31_163941_create_offers_table',9),('2016_12_31_182509_create_histories_table',10),('2016_12_31_204306_create_partners_table',11),('2016_12_31_213316_create_social_icons_table',12),('2017_01_01_090912_create_contacts_table',13),('2017_01_01_132535_create_user_registrations_table',14),('2017_01_03_125601_create_about_uses_table',15),('2017_01_03_195121_create_exams_table',16),('2017_01_05_121539_create_titles_table',17),('2017_01_05_132208_create_footers_table',18);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `password_submits` */

DROP TABLE IF EXISTS `password_submits`;

CREATE TABLE `password_submits` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `password_submits` */

insert  into `password_submits`(`id`,`email`,`token`,`status`,`created_at`,`updated_at`) values (1,'webdev.alimoon@gmail.com','Q9wgLSceXy5h2Ix4gaoqnUZjtDxss07yCYvAY4VvpQQbKecrD7NLRWwasRVW',0,'2017-10-18 06:52:03','2017-10-18 06:52:03'),(2,'adeelsafdar007@gmail.com','qDzn89MBukr3knTVcNYio3lAQ5ufBCtaEMBBi3Wq2dUUPVKwsnsSOykZByrZ',0,'2017-10-18 07:06:12','2017-10-18 07:06:12');

/*Table structure for table `user_videos` */

DROP TABLE IF EXISTS `user_videos`;

CREATE TABLE `user_videos` (
  `user_video_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `url` text,
  `status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`user_video_id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

/*Data for the table `user_videos` */

insert  into `user_videos`(`user_video_id`,`user_id`,`title`,`created_at`,`updated_at`,`url`,`status`) values (1,1,'fsdfds','2017-10-18 14:47:38','2017-10-18 14:47:40','google.com','2'),(2,1,'fsdfds','2017-10-18 14:47:38','2017-10-18 14:47:40','google.com','2'),(3,2,'fsdfds','2017-10-18 14:47:38','2017-10-18 14:47:40','google.com','2'),(4,3,'fsdfds','2017-10-18 14:47:38','2017-10-18 14:47:40','google.com','2'),(5,1,'fsdfds','2017-10-18 14:47:38','2017-10-18 14:47:40','google.com','2'),(6,2,'fsdfds','2017-10-18 14:47:38','2017-10-18 14:47:40','google.com','2'),(7,1,'fsdfds','2017-10-18 14:47:38','2017-10-18 14:47:40','google.com','2'),(8,3,'fsdfds','2017-10-18 14:47:38','2017-10-18 14:47:40','google.com','2'),(9,2,'fsdfds','2017-10-18 14:47:38','2017-10-18 14:47:40','google.com','2'),(10,1,'fsdfds','2017-10-18 14:47:38','2017-10-18 14:47:40','google.com','2'),(11,3,'fsdfds','2017-10-18 14:47:38','2017-10-18 14:47:40','google.com','2'),(12,3,'fsdfds','2017-10-18 14:47:38','2017-10-18 14:47:40','google.com','2'),(13,2,'fsdfds','2017-10-18 14:47:38','2017-10-18 14:47:40','google.com','2'),(14,1,'fsdfds','2017-10-18 14:47:38','2017-10-18 14:47:40','google.com','2'),(15,2,'fsdfds','2017-10-18 14:47:38','2017-10-18 14:47:40','google.com','2'),(16,3,'fsdfds','2017-10-18 14:47:38','2017-10-18 14:47:40','google.com','2'),(17,1,'fsdfds','2017-10-18 14:47:38','2017-10-18 14:47:40','google.com','2');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `balance` int(11) DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `subscription_startdate` date DEFAULT NULL,
  `subscription_enddate` date DEFAULT NULL,
  `subscription_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`password`,`balance`,`remember_token`,`created_at`,`updated_at`,`subscription_startdate`,`subscription_enddate`,`subscription_id`) values (1,'Adeel Safdar','adeelsafdar007@gmail.com','$2y$10$GLqc1X/UNWW3kAy42zESuelBWeAIVeLgJRXIdzD/Y6vnnH0auRGGC',1010,'SWYC3LaLVjZgGoCv6q9sjdMrYdDEGPKOb8ovGO61M6ku72cJMBR2a6VUOHnS',NULL,'2017-10-18 11:55:32',NULL,NULL,NULL);
