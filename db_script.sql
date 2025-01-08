-- Create database
CREATE DATABASE IF NOT EXISTS servernexgen_db;

-- Use the database
USE servernexgen_db;

-- Create table tbl_shared_hosting
CREATE TABLE tbl_shared_hosting (
    id INT AUTO_INCREMENT PRIMARY KEY,
    plan_name VARCHAR(255) NOT NULL,
    plan_price DECIMAL(10, 2) NOT NULL,
    website_count INT NULL,
    harddisk_space VARCHAR(50) NULL,
    bandwidth VARCHAR(50) NULL,
    databases_count INT NULL,
    users_count INT NULL,
    email_count INT NULL
);

-- Create table tbl_dedicated_vps
CREATE TABLE tbl_dedicated_vps (
    id INT AUTO_INCREMENT PRIMARY KEY,
    plan_name VARCHAR(255) NOT NULL,
    plan_type VARCHAR(100) NOT NULL,
    plan_price DECIMAL(10, 2) NOT NULL,
    cpu VARCHAR(50) NULL,
    cpu_cores INT NULL,
    harddisk_space VARCHAR(50) NULL,
    bandwidth VARCHAR(50) NULL
);

-- Insert sample data into tbl_shared_hosting
INSERT INTO tbl_shared_hosting (plan_name, plan_price, website_count, harddisk_space, bandwidth, databases_count, users_count, email_count)
VALUES
('Basic Plan', 499.00, 1, '10GB', '100GB', 1, 1, 5),
('Standard Plan', 799.00, 5, '50GB', '500GB', 5, 5, 10),
('Premium Plan', 1599.00, 10, '100GB', '1TB', 10, 10, 20),
('Enterprise Plan', 2499.00, 20, '200GB', '2TB', 20, 20, 50),
('Starter Plan', 299.00, 1, '5GB', '50GB', 1, 1, 3),
('Advanced Plan', 1299.00, 8, '80GB', '800GB', 8, 8, 15),
('Business Plan', 2099.00, 15, '150GB', '1.5TB', 15, 15, 30),
('Ultimate Plan', 3499.00, 25, '250GB', 'Unlimited', 25, 25, 100),
('Economy Plan', 399.00, 2, '10GB', '100GB', 2, 2, 7),
('Professional Plan', 999.00, 6, '60GB', '600GB', 6, 6, 12),
('Personal Plan', 699.00, 3, '30GB', '300GB', 3, 3, 8),
('Growth Plan', 1499.00, 12, '120GB', '1.2TB', 12, 12, 25),
('Corporate Plan', 2299.00, 18, '180GB', '1.8TB', 18, 18, 40),
('Elite Plan', 3999.00, 30, '300GB', 'Unlimited', 30, 30, 150),
('Basic Plus Plan', 599.00, 2, '15GB', '150GB', 2, 2, 6),
('Starter Plus Plan', 349.00, 1, '7GB', '70GB', 1, 1, 4),
('Growth Plus Plan', 1599.00, 13, '130GB', '1.3TB', 13, 13, 27),
('Enterprise Plus Plan', 2799.00, 22, '220GB', '2.2TB', 22, 22, 60),
('Economy Plus Plan', 449.00, 3, '12GB', '120GB', 3, 3, 9),
('Ultimate Plus Plan', 3499.00, 26, '260GB', 'Unlimited', 26, 26, 110);

-- Insert sample data into tbl_dedicated_vps
INSERT INTO tbl_dedicated_vps (plan_name, plan_type, plan_price, cpu, cpu_cores, harddisk_space, bandwidth)
VALUES
('Dedicated Basic', 'Dedicated', 7999.00, 'Intel Xeon', 4, '200GB', '1TB'),
('Dedicated Standard', 'Dedicated', 11999.00, 'Intel Xeon', 6, '400GB', '2TB'),
('Dedicated Premium', 'Dedicated', 15999.00, 'AMD Ryzen', 8, '600GB', '3TB'),
('Dedicated Enterprise', 'Dedicated', 23999.00, 'Intel Xeon', 12, '1TB', '5TB'),
('Dedicated Starter', 'Dedicated', 6999.00, 'Intel Core i7', 4, '100GB', '500GB'),
('Dedicated Advanced', 'Dedicated', 13999.00, 'AMD EPYC', 10, '500GB', '2.5TB'),
('Dedicated Business', 'Dedicated', 17999.00, 'Intel Xeon', 16, '800GB', '4TB'),
('Dedicated Ultimate', 'Dedicated', 30999.00, 'AMD Ryzen', 24, '2TB', 'Unlimited'),
('Dedicated Economy', 'Dedicated', 8999.00, 'Intel Core i5', 4, '300GB', '1.5TB'),
('Dedicated Professional', 'Dedicated', 14999.00, 'AMD Ryzen', 8, '450GB', '3TB'),
('VPS Basic', 'VPS', 3999.00, 'Intel Xeon', 2, '50GB', '500GB'),
('VPS Standard', 'VPS', 5999.00, 'Intel Xeon', 4, '100GB', '1TB'),
('VPS Premium', 'VPS', 7999.00, 'AMD Ryzen', 6, '200GB', '2TB'),
('VPS Enterprise', 'VPS', 11999.00, 'Intel Xeon', 8, '400GB', '4TB'),
('VPS Starter', 'VPS', 2999.00, 'Intel Core i5', 2, '30GB', '300GB'),
('VPS Advanced', 'VPS', 6999.00, 'AMD EPYC', 6, '150GB', '1.5TB'),
('VPS Business', 'VPS', 8999.00, 'Intel Xeon', 8, '250GB', '2.5TB'),
('VPS Ultimate', 'VPS', 15999.00, 'AMD Ryzen', 16, '500GB', 'Unlimited'),
('VPS Economy', 'VPS', 3499.00, 'Intel Core i3', 2, '40GB', '400GB'),
('VPS Professional', 'VPS', 5499.00, 'AMD Ryzen', 4, '80GB', '800GB');
