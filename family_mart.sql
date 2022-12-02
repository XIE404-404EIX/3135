-- create and select the database
DROP DATABASE IF EXISTS family_mart;
CREATE DATABASE family_mart;
USE family_mart;  -- MySQL command

-- create the tables
CREATE TABLE categories (
  categoryID       INT(11)        NOT NULL   AUTO_INCREMENT,
  categoryName     VARCHAR(255)   NOT NULL,
  PRIMARY KEY (categoryID)
);

CREATE TABLE products (
  productID        INT(11)        NOT NULL   AUTO_INCREMENT,
  categoryID       INT(11)        NOT NULL,
  productCode      VARCHAR(10)    NOT NULL   UNIQUE,
  productName      VARCHAR(255)   NOT NULL,
  listPrice        DECIMAL(10,2)  NOT NULL,
  productDate      DATETIME       ,
  PRIMARY KEY (productID)
);

CREATE TABLE orders (
  orderID          INT(11)        NOT NULL   AUTO_INCREMENT,
  customerID       INT            NOT NULL,
  orderDate        DATETIME       NOT NULL,
  orderTotal       DECIMAL(9,2)   NOT NULL,
  paymentTotal     DECIMAL(9,2)   DEFAULT 0,
  PRIMARY KEY (orderID)
);

CREATE TABLE wishlist (
  productID        INT(11)        NOT NULL   AUTO_INCREMENT,
  categoryID       INT(11)        NOT NULL,
  productCode      VARCHAR(10)    NOT NULL   UNIQUE,
  productName      VARCHAR(255)   NOT NULL,
  listPrice        DECIMAL(10,2)  NOT NULL,
  productDate      DATETIME       NOT NULL,
  PRIMARY KEY (productID)
);

CREATE TABLE cart (
  cartID           INT(11)        NOT NULL   AUTO_INCREMENT,
  productID        INT(11)        NOT NULL,
  categoryID       INT(11)        NOT NULL,
  productCode      VARCHAR(10)    NOT NULL   UNIQUE,
  productName      VARCHAR(255)   NOT NULL,
  listPrice        DECIMAL(10,2)  NOT NULL,
  productDate      DATETIME       NOT NULL,
  cartTotal        DECIMAL(10,2)  NOT NULL,
  PRIMARY KEY (cartID)
);

CREATE TABLE users (
  userID           INT(60)          NOT NULL AUTO_INCREMENT,
  firstName        VARCHAR(60)      NOT NULL,
  lastName         VARCHAR(60)      NOT NULL,
  userName         VARCHAR(60)      NOT NULL,
  phoneNumber      VARCHAR(60)      NOT NULL,
  email            VARCHAR(60)      NOT NULL,
  password         VARCHAR(60)      NOT NULL,
  PRIMARY KEY (userID)
);

-- insert data into the database
INSERT INTO categories (categoryName) VALUES
('Drinks'),('Snacks'),('Baked Goods');

INSERT INTO products (categoryID, productCode, productName, listPrice) VALUES
(1, 'D001', 'Coca-Cola 355mL 6 Pack', '8.99'),
(1, 'D002', 'Pepsi 355mL 6 Pack', '7.99'),
(1, 'D003', 'Sprite 2L', '2.99'),
(1, 'D004', 'Pepsi 2L', '2.99'),
(1, 'D005', 'Mountain Dew 355mL 6 Pack', '7.99'),
(1, 'D006', 'Coca-Cola 355mL 24 Pack', '16.99'),
(2, 'S001', 'Kit-Kat 4 Pack', '4.99'),
(2, 'S002', 'Ruffles Chips', '2.99'),
(2, 'S003', 'Pocky Chocolate by Glico', '2.99'),
(2, 'S004', 'Korean BBQ flavored Seaweed', '1.99'),
(2, 'S005', 'Golden Nest Sweet Sriracha Pork Jerky Bites', '6.99'),
(2, 'S006', 'HBAF Honey Butter Almond', '3.99'),
(3, 'BG001', 'Ham Sandwich', '4.99'),
(3, 'BG002', 'Strawberry Cream Cheese Danish', '2.99'),
(3, 'BG003', 'Croissants', '1.99'),
(3, 'BG004', 'Fresh Daily Muffins', '1.99'),
(3, 'BG005', 'Apple Fritter', '1.99'),
(3, 'BG006', 'Cranberry Lemon Scone', '2.99');

-- create the users
CREATE USER IF NOT EXISTS family_mart_admin@localhost 
IDENTIFIED BY 'pa55word';

CREATE USER IF NOT EXISTS family_mart_user@localhost 
IDENTIFIED BY 'pa55word';

-- grant privleges to the users
GRANT SELECT, INSERT, DELETE, UPDATE
ON * 
TO family_mart_admin@localhost;

GRANT SELECT 
ON products
TO family_mart_user@localhost;
