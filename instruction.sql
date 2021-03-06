CREATE DATABASE IF NOT EXISTS UsersDB CHARACTER SET utf8 COLLATE utf8_general_ci;
USE UsersDB;
CREATE table IF NOT EXISTS state(
    id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) UNIQUE NOT NULL
) ENGINE=INNODB;

CREATE table IF NOT EXISTS city(
   id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
   name VARCHAR(50) NOT NULL,
   state_id int,
   INDEX state_index (state_id),
   FOREIGN KEY (state_id) REFERENCES state(id)
)  ENGINE=INNODB;

CREATE table IF NOT EXISTS users(
    id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    address VARCHAR(250) NOT NULL,
    state_id int,
    city_id int,
    INDEX state_index (state_id),
    FOREIGN KEY (state_id) REFERENCES state(id),
    INDEX city_index (city_id),
    FOREIGN KEY (city_id) REFERENCES city(id)
)  ENGINE=INNODB;

ALTER table users ADD UNIQUE unique_index (`name`, `address`, `state_id`, `city_id`);