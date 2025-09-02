-- Create database
CREATE DATABASE car_showroom;

-- Switch to database
USE car_showroom;

-- Create table
CREATE TABLE car_details (
    id INT AUTO_INCREMENT PRIMARY KEY,
    brand VARCHAR(100) NOT NULL,
    model VARCHAR(100) NOT NULL,
    year INT NOT NULL,
    price DECIMAL(10,2) NOT NULL
);

-- Insert data
INSERT INTO car_details (id, brand, model, year, price) 
VALUES
(1, 'Toyota', 'Supra', 2015, 3414540.00),
(2, 'Nissan', 'GTR', 2007, 992345.00),
(3, 'BMW', 'M7', 2025, 231232.00);
