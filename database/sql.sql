CREATE TABLE IF NOT EXISTS `user`
(
    `id`       int(11) NOT NULL AUTO_INCREMENT,
    `username` varchar(30) DEFAULT NULL,
    `password` varchar(30) DEFAULT NULL,
    `email`    varchar(30) DEFAULT NULL,
    `photo`    varchar(30) DEFAULT NULL,
    `role`     tinyint     DEFAULT 0,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB
  AUTO_INCREMENT = 41
  DEFAULT CHARSET = utf8;



CREATE TABLE IF NOT EXISTS `message`
(
    `id`         int(11) NOT NULL AUTO_INCREMENT,
    `first_name` varchar(40)  DEFAULT NULL,
    `last_name`  varchar(40)  DEFAULT NULL,
    `email`      varchar(40)  DEFAULT NULL,
    `message`    varchar(200) DEFAULT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB
  AUTO_INCREMENT = 9
  DEFAULT CHARSET = utf8;



CREATE TABLE IF NOT EXISTS `post`
(
    `id`           int(11) NOT NULL AUTO_INCREMENT,
    `header`       varchar(100) DEFAULT NULL,
    `body`         varchar(500) DEFAULT NULL,
    `created_date` date         DEFAULT curdate(),
    `user_fk`      int(11)      DEFAULT NULL,
    `price`        float        DEFAULT NULL,
    `post_photo`   varchar(100) DEFAULT NULL,
    PRIMARY KEY (`id`),
    KEY `fk_user_comment` (`user_fk`),
    CONSTRAINT `fk_user_comment` FOREIGN KEY (`user_fk`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB
  AUTO_INCREMENT = 124
  DEFAULT CHARSET = utf8;



CREATE TABLE IF NOT EXISTS `reservation`
(
    `id`      int(11) NOT NULL AUTO_INCREMENT,
    `user_fk` int(11) DEFAULT NULL,
    `post_fk` int(11) DEFAULT NULL,
    PRIMARY KEY (`id`),
    KEY `user_comments` (`user_fk`),
    KEY `post_comments` (`post_fk`),
    CONSTRAINT `post_comments` FOREIGN KEY (`post_fk`) REFERENCES `post` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
    CONSTRAINT `user_comments` FOREIGN KEY (`user_fk`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB
  AUTO_INCREMENT = 44
  DEFAULT CHARSET = utf8;
