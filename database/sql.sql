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