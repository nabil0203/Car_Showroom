CREATE DATABASE car_showroom;


USE car_showroom;


CREATE TABLE cars (
    id INT AUTO_INCREMENT PRIMARY KEY,
    brand VARCHAR(100) NOT NULL,
    model VARCHAR(100) NOT NULL,
    year INT NOT NULL,
    price DECIMAL(10,2) NOT NULL
);



-- CREATE TABLE car_details (
--     id INT AUTO_INCREMENT PRIMARY KEY,
--     brand VARCHAR(100) NOT NULL,
--     model VARCHAR(100) NOT NULL,
--     year INT NOT NULL,
--     price DECIMAL(10,2) NOT NULL
-- );

