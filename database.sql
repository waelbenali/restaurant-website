-- Restaurant Website Database

CREATE DATABASE restaurant;
USE restaurant;

-- Admin table
CREATE TABLE admins (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50),
  password VARCHAR(255)
);

-- Default admin user
INSERT INTO admins (username, password)
VALUES (
  'admin',
  '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'
);

-- Menu items
CREATE TABLE menu_items (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  price DECIMAL(10,2),
  image VARCHAR(255)
);

INSERT INTO menu_items (name, price, image) VALUES
('Pizza', 12.99, 'pizza.jpg'),
('Pasta', 10.50, 'pasta.jpg'),
('Burger', 9.99, 'burger.jpg'),
('Dessert', 6.00, 'dessert.jpg');

-- Reservations
CREATE TABLE reservations (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  date DATE,
  time TIME,
  guests INT
);

-- Contact messages
CREATE TABLE contacts (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  email VARCHAR(100),
  message TEXT
);
