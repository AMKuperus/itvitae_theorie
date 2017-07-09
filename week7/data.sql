CREATE DATABASE cats4rent;

CREATE TABLE cats (
  cat_id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255),
  color VARCHAR(255),
  type VARCHAR(255),
  price VARCHAR(1),
  status VARCHAR(255)
);

CREATE TABLE prize (
  prize_id VARCHAR(1) PRIMARY KEY,
  value DECIMAL NOT NULL
);

CREATE TABLE customers (
  customer_id INT AUTO_INCREMENT PRIMARY KEY,
  first_name VARCHAR(255),
  last_name VARCHAR(255),
  behaviour_code VARCHAR(2)
);

CREATE TABLE `order` (
  cat_id INT,
  customer_id INT,
  date TIMESTAMP,
  price DECIMAL
);

CREATE TABLE history (
  cat_id INT,
  customer_id INT,
  date DATETIME
);

ALTER TABLE `order` ADD FOREIGN KEY (cat_id) REFERENCES cats(cat_id);
ALTER TABLE `order` ADD FOREIGN KEY (customer_id) REFERENCES customers(customer_id);
ALTER TABLE history ADD FOREIGN KEY (cat_id) REFERENCES cats(cat_id);
ALTER TABLE history ADD FOREIGN KEY (customer_id) REFERENCES customers(customer_id);
