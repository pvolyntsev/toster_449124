CREATE TABLE `city` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(200) NOT NULL COMMENT 'Название',
  `domain` VARCHAR(150) DEFAULT NULL COMMENT 'Доменное имя',
  PRIMARY KEY `kp_city` (`id`),
  UNIQUE `uq_city_domain` (`domain`)
);

INSERT INTO `city` (`id`, `name`, `domain`)
  VALUES
    (1, 'Москва', 'msk.domain.com'),
    (2, 'Новосибирск', 'nsk.domain.com'),
    (3, 'Казань', 'kzn.domain.com'),
    (4, 'Ростов-на-Дону', 'rostov.ru');
