-- Create database named XXdatabase
CREATE DATABASE kndatabase;

-- Use the newly created database
USE kndatabase;

-- Create the "items" table
CREATE TABLE items (
                       service_id INT AUTO_INCREMENT PRIMARY KEY,
                       service_name VARCHAR(80) NOT NULL,
                       price DECIMAL(10, 2) NOT NULL,
                       development_time INT NOT NULL,
                       database_usage VARCHAR(3) NOT NULL

);

-- Create the "orders" table
CREATE TABLE orders (
                        order_id INT AUTO_INCREMENT PRIMARY KEY,
                        service_id INT NOT NULL,
                        quantity INT NOT NULL,
                        total_cost DECIMAL(10, 2) NOT NULL,
                        order_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                        customer_name VARCHAR(255) NOT NULL,
                        customer_email VARCHAR(255),
                        shipping_address TEXT,
                        FOREIGN KEY (service_id) REFERENCES items(service_id)
);
