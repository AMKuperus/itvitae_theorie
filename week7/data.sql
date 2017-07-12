CREATE DATABASE cat4rent(

CREATE TABLE cats (
  cat_id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255),
  color VARCHAR(255),
  type VARCHAR(255),
  price VARCHAR(1),
  status VARCHAR(255)
);

CREATE TABLE price (
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
  history_id INT,
  date TIMESTAMP,
  price DECIMAL
);

/*payment table/method of payment/tid/status*/
CREATE TABLE payment (
  id INT PRIMARY KEY AUTO_INCREMENT,
  method VARCHAR(10),
  tid INT,
  status VARCHAR(10)
);

CREATE TABLE history (/*add history_id*/
  history_id INT PRIMARY KEY AUTO_INCREMENT,
  customer_id INT,
  cat_id INT,
  date DATETIME
);

ALTER TABLE transaction ADD FOREIGN KEY (history_id) REFERENCES history(history_id);
ALTER TABLE history ADD FOREIGN KEY (customer_id) REFERENCES customers(customer_id);
ALTER TABLE history ADD FOREIGN KEY (cat_id) REFERENCES cats(cat_id);
ALTER TABLE cats ADD FOREIGN KEY (price) REFERENCES price(price_id);
ALTER TABLE payment ADD FOREIGN KEY (tid) REFERENCES transaction(tid);

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

INSERT INTO price (price_id, value) VALUES
('A', 100), ('B', 80), ('C', 60), ('D', 30), ('E', '15');
);
