

-- Use the database
USE clothing_001;

-- Create the customer table
CREATE TABLE customer (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100),
    contact VARCHAR(100),
    address VARCHAR(200),
    rDateTime DATETIME,
    user_id INT
);

-- Create the invoice table
CREATE TABLE invoice (
    id INT PRIMARY KEY AUTO_INCREMENT,
    cus_id INT,
    ship_id INT,
    total DOUBLE,
    discount DOUBLE,
    Balance DOUBLE,
    rDateTime DATETIME,
    user_id INT
);

-- Create the item table
CREATE TABLE item (
    id INT PRIMARY KEY AUTO_INCREMENT,
    code VARCHAR(100),
    name VARCHAR(200),
    size VARCHAR(50),
    color VARCHAR(50),
    description VARCHAR(1000),
    cPrice DOUBLE,
    sPrice DOUBLE,
    qty INT,
    img VARCHAR(100),
    rDateTime DATETIME,
    user_id INT
);

-- Create the currency_exchange table
CREATE TABLE currency_exchange (
    id INT PRIMARY KEY AUTO_INCREMENT,
    currency VARCHAR(50),
    rate DOUBLE,
    user_id INT
);
