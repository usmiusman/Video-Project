

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

