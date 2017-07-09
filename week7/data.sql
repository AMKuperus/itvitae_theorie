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
  price_id VARCHAR(1) PRIMARY KEY,
  value DECIMAL NOT NULL
);

CREATE TABLE customers (
  customer_id INT AUTO_INCREMENT PRIMARY KEY,
  first_name VARCHAR(255),
  last_name VARCHAR(255),
  behaviour_code VARCHAR(2)
);

CREATE TABLE transaction (
  tid INT PRIMARY KEY AUTO_INCREMENT,
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

ALTER TABLE transaction ADD FOREIGN KEY (cat_id) REFERENCES cats(cat_id);
ALTER TABLE transacton ADD FOREIGN KEY (customer_id) REFERENCES customers(customer_id);
ALTER TABLE history ADD FOREIGN KEY (cat_id) REFERENCES cats(cat_id);
ALTER TABLE history ADD FOREIGN KEY (customer_id) REFERENCES customers(customer_id);
ALTER TABLE cats ADD FOREIGN KEY (price) REFERENCES price(price_id);

INSERT INTO Cats (name, color, type, status) VALUES
('Molly', 'Black', 'European shorthair', 'unavailable'),
('Bandit', 'Brown/Black striped', 'Norwegian forestcat', 'unavailable'),
('Smokey', 'Black', 'European shorthair', 'available'),
('Noa', 'Grey striped', 'Maincoon', 'available'),
('Spike', 'Tricolori black/whit/brown turtle', 'european shorthair', 'available'),
('Minoes', 'Tricolori black/white/brown', 'european shorthair', 'available');

INSERT INTO customers (first_name, last_name, behaviour_code) VALUES
('Charles', 'den Tex', 'A'),
('Robert', 'Ludlum', 'D'),
('Stephen', 'King', 'D'),
('Jo', 'Nesbo', 'A'),
('Samuel', 'Bjork', 'A'),
('Karin', 'Slaugther', 'A'),
('Dan', 'Brown', 'B'),
('Elizabeth', 'George', 'C'),
('Lars', 'Kepler', 'B'),
('Colin', 'Forbes', 'D'),
('Liza', 'Marklund', 'A'),
('Henning', 'Mankell', 'B');

INSERT INTO history (cat_id, customer_id) VALUES
(5, 9), (1, 3), (2, 1), (3, 1), (5, 3);

INSERT INTO transaction (cat_id, Customer_id) VALUES
(5, 9), (1, 3), (2, 1), (3, 1), (5, 3);

INSERT INTO prize (prize_id, value) VALUES
('A', 100), ('B', 80), ('C', 60), ('D', 30), ('E', '15');
