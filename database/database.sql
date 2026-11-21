CREATE DATABASE IF NOT EXISTS tp_php;
USE tp_php;

CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    quantity INT NOT NULL
);
INSERT INTO products (name, price, quantity)
VALUES
('Bracelet', 1500, 10),
('Collier', 8000, 20),
('Bague', 1200, 5),
('Boucle doreille', 3500, 8),
('Montre', 1000, 15);