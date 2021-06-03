DROP TABLE IF EXISTS Customer_BUP;
CREATE TABLE Customer_BUP LIKE Customer;
INSERT INTO Customer_BUP SELECT * From Customer;

DROP TABLE IF EXISTS ExcProducts_BUP;
CREATE TABLE ExcProducts_BUP LIKE Exclusive_products;
INSERT INTO ExcProducts_BUP SELECT * From Exclusive_products;

DROP TABLE IF EXISTS MO_BUP;
CREATE TABLE MO_BUP LIKE Makes_order;
INSERT INTO MO_BUP SELECT * From Makes_order;

DROP TABLE IF EXISTS Member_BUP;
CREATE TABLE Member_BUP LIKE Member;
INSERT INTO Member_BUP SELECT * From Member;

DROP TABLE IF EXISTS Orders_BUP;
CREATE TABLE Orders_BUP LIKE Orders;
INSERT INTO Orders_BUP SELECT * From Orders;

DROP TABLE IF EXISTS Payment_BUP;
CREATE TABLE Payment_BUP LIKE Payment;
INSERT INTO Payment_BUP SELECT * From Payment;

DROP TABLE IF EXISTS Product_BUP;
CREATE TABLE Product_BUP LIKE Product;
INSERT INTO Product_BUP SELECT * From Product;

DROP TABLE IF EXISTS ProdContained_BUP;
CREATE TABLE ProdContained_BUP LIKE Products_contained;
INSERT INTO ProdContained_BUP SELECT * From Products_contained;

DROP TABLE IF EXISTS ShipMethod_BUP;
CREATE TABLE ShipMethod_BUP LIKE Shipping_method;
INSERT INTO ShipMethod_BUP SELECT * From Shipping_method;

DROP TABLE IF EXISTS Supplier_BUP;
CREATE TABLE Supplier_BUP LIKE Supplier;
INSERT INTO Supplier_BUP SELECT * From Supplier;
