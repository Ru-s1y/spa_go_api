CREATE TABLE `todos` (
  `id` MEDIUMINT NOT NULL AUTO_INCREMENT,
  `content` VARCHAR(255),
  `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` DATETIME NULL DEFAULT NUL,
  PRIMARY KEY(`id`)
);