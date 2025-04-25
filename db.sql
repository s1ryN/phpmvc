-- 1) Create the database
CREATE DATABASE IF NOT EXISTS mvc_example
  CHARACTER SET utf8mb4
  COLLATE utf8mb4_unicode_ci;

-- 2) Switch to it
USE mvc_example;

-- 3) Create the items table
CREATE TABLE IF NOT EXISTS items (
  id   INT           NOT NULL AUTO_INCREMENT,
  name VARCHAR(255)  NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB
  DEFAULT CHARSET=utf8mb4
  COLLATE=utf8mb4_unicode_ci;
