CREATE DATABASE eventhub;
USE eventhub;

CREATE TABLE events (
	id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	`name` VARCHAR(50) NOT NULL,
	description VARCHAR(250),
	venue VARCHAR(50),	
	max_tickets INT,
	start_date DATETIME,
	end_date DATETIME,
	created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
	updated_at DATETIME ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE tickets (
	id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	event_id INT UNSIGNED NOT NULL,
	tracking_no CHAR(8) NOT NULL,	
	`name` VARCHAR(50) NOT NULL,
	phone CHAR(15) NOT NULL,
	email VARCHAR(50),
	payment_ref CHAR(10),
	is_verified BOOLEAN DEFAULT FALSE,
	payment_status ENUM('pending', 'partial', 'received', 'refunded', 'invalid') DEFAULT 'pending',
	ticket_status ENUM('booked', 'confirmed', 'cancelled') DEFAULT 'booked',
	remarks VARCHAR(250),
	created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
	updated_at DATETIME ON UPDATE CURRENT_TIMESTAMP,
	FOREIGN KEY (event_id) REFERENCES events (id),
	UNIQUE INDEX unq_payment_ref (payment_ref),
	UNIQUE INDEX unq_tracking_no (tracking_no)
);

-- Inserting records

INSERT INTO events (name, venue, max_tickets, start_date)
VALUES ('Tech talk 2023', 'online', 200, '2023-12-05 15:00:00');

INSERT INTO tickets (event_id, `name`, phone, email, payment_ref, tracking_no)
VALUES (1, 'Abdur Rahim', '01712345111', 'rahim@example.com', 'WEXBY425', UPPER(LEFT(UUID(), 6)));


-- Inserting records

UPDATE tickets 
SET is_verified = true,
	payment_status = 'received',
	ticket_status = 'confirmed'
WHERE id = 1;	

-- Deleting records

DELETE FROM tickets
WHERE id = 4;


-- String Literals

-- Can be used single or double quote
SELECT 'A String with single Quote';
SELECT "A String with double Quote";

-- Quoted strings placed next to each other are concatenated to a single string
SELECT 'A String' ' ' "Another string"  " " 'More strings...';

SELECT QUOTE("A String with % \\ / single(') Quote");


-- Testing names with whitespace and keywords (Quoting with Backtick)

CREATE DATABASE store room;
CREATE DATABASE `store room`;
DROP DATABASE `store room`;

CREATE TABLE student profile (id INT); -- Not OK
CREATE TABLE `student profile` (id INT); -- OK, But not recommended
DROP TABLE `student profile`;
CREATE TABLE student_profile (id INT); -- RECOMMENDED
DROP TABLE student_profile;

CREATE TABLE ANALYZE (id INT, CHARACTER VARCHAR(25)); -- Reserved word, will not work
CREATE TABLE `ANALYZE` (id INT AUTO_INCREMENT PRIMARY KEY, `CHARACTER` VARCHAR(25));
DROP TABLE `ANALYZE`;

INSERT INTO `ANALYZE` (`CHARACTER`) VALUES('Ruhul Amin');


-- Quotations in string

SELECT 'hello', '"hello"', '""hello""', 'hel''lo', '\'hello';
SELECT "hello", "'hello'", "''hello''", "hel""lo", "\"hello";


-- Length and type mismatch

INSERT INTO data_test VALUES(1, 'ANIS');
INSERT INTO data_test VALUES(1, 'ANIS UDDIN AHMAD');
INSERT INTO data_test VALUES(500, 'ANIS');


CREATE TABLE data_test (id TINYINT NOT NULL PRIMARY KEY, title CHAR(5));
INSERT INTO data_test VALUES(1, 'ANIS');
INSERT INTO data_test VALUES(5, 'ANIS UDDIN AHMAD');
INSERT INTO data_test VALUES(500, 'ANIS');
INSERT INTO data_test VALUES(3, 5000);

-- Check SQL Modes
SELECT @@GLOBAL.sql_mode;
SELECT @@SESSION.sql_mode;
SHOW VARIABLES LIKE '%sql_mode%';

-- SET SQL Modes
SET sql_mode = '';
SET sql_mode = @@GLOBAL.sql_mode;
SET sql_mode = 'ONLY_FULL_GROUP_BY,STRICT_ALL_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- Inestigating Errors and Wornings
SELECT @@warning_count;
SHOW WARNINGS;

SELECT @@error_count;
SHOW ERRORS;

