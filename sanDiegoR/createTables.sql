--
-- SQL file used to populate the database or can be used to auto-load on init()
--

-- homes table 

CREATE TABLE homes (
	home_id int UNSIGNED NOT NULL AUTO_INCREMENT,
	type VARCHAR(50) NOT NULL,
	size VARCHAR(100) NOT NULL,
	age TINYINT NOT NULL,
	PRIMARY KEY (home_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- sales table

CREATE TABLE sales (
	id int UNSIGNED NOT NULL AUTO_INCREMENT,
	list_price BIGINT NOT NULL,
	sold_price BIGINT NOT NULL,
	active VARCHAR(50) NOT NULL, 
	PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- homebuyer table

CREATE TABLE homebuyer (
	id int UNSIGNED NOT NULL AUTO_INCREMENT,
	walkability VARCHAR(50) NOT NULL, 
	crime_rating VARCHAR(50) NOT NULL,
	location VARCHAR(50) NOT NULL,
	budget BIGINT NOT NULL,
	PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- neighborhoods table 

CREATE TABLE neighborhoods (
  id int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  per_capita_income DECIMAL(15,4),
  Homes_Id int,
  Sales_Id int,
  Homebuyer_Id int
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
	
-- populate tables with intitial data-set

INSERT INTO neighborhoods (id, name, per_capita_income) 
VALUES 
(1,'South Park','82,000.00'),
(2,'North Park','92,000.00'),
(3,'Pacific Beach','108,000.00'),
(4,'Sherman Heights','35,000.00'),
(5,'Golden Hill','55,000.00');

INSERT INTO homes (home_id, type, size, age)
VALUES 
(1,'spanish bungalow','1200 sqft', '95'),
(2,'craftsman bungalow','550 sqft', '85'),
(3,'craftsman','2200 sqft', '75'),
(4,'prairie','1900 sqft', '105'),
(5,'mid-century modern','2500 sqft', '50');

INSERT INTO sales (id, list_price, sold_price, active)
VALUES 
(1,'500000','550000', 'yes'),
(2,'650000','655000', 'yes'),
(3,'750000','705000', 'no'),
(4,'425000','295000', 'no'),
(5,'185000','210000', 'yes');

INSERT INTO homebuyer (id, walkability, crime_rating, location, budget)
VALUES 
(1,'fair','high', 'local', '500000'),
(2,'great','medium', 'CONUS', '650000'),
(3,'awesome','low', 'local', '750000'),
(4,'horrible','low', 'CONUS', '5000000'),
(5,'fair','low', 'OCONUS', '1500000');













