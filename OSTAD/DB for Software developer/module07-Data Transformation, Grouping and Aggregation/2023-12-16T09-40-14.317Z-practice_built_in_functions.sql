SELECT INSTR('ab@c', '@');
SELECT SUBSTRING(email, INSTR(email, '@') + 1) AS email_domain 
FROM users;

SELECT LEFT('Lorem Ipsum Dolor sit amet', 10);
SELECT SUBSTRING('Lorem Ipsum Dolor sit amet', 1, 10);

SELECT
	CHAR_LENGTH('MySQL for Software Developers') AS length_as_char_eng,
	LENGTH('MySQL for Software Developers') AS length_as_bytes_eng,
	CHAR_LENGTH('টেস্ট উইথ বাংলা') AS length_as_char_bn,
	LENGTH('টেস্ট উইথ বাংলা') AS length_as_bytes_bn;
-- 13 char + 2 space | 13*3 bytes + 2 space

SELECT INSTR("MySQL for Software Developers", "dev");
SELECT SUBSTR("MySQL for Software Developers", 11, 8;

SELECT LPAD("Mobile Phones", 20, "-"),
	LPAD("Android", 20, "-"),
	LPAD("Samesung", 20, "-");

SELECT REPLACE("http://old-site.com/images/logo.png", "old-site", "new-site");


SELECT GREATEST("w3Schools.com", "microsoft.com", "apple.com");

SELECT CURDATE();

SELECT SUBSTRING(email, INSTR(email, '@') + 1) AS email_domain 
FROM users;

SELECT LEFT('Lorem Ipsum Dolor sit amet', 10);
SELECT SUBSTRING('Lorem Ipsum Dolor sit amet', 1, 10);

SELECT
	CHAR_LENGTH('MySQL for Software Developers') AS length_as_char_eng,
	LENGTH('MySQL for Software Developers') AS length_as_bytes_eng,
	CHAR_LENGTH('টেস্ট উইথ বাংলা') AS length_as_char_bn,
	LENGTH('টেস্ট উইথ বাংলা') AS length_as_bytes_bn;
-- 13 char + 2 space | 13*3 bytes + 2 space

SELECT INSTR("MySQL for Software Developers", "dev");
SELECT SUBSTR("MySQL for Software Developers", 11, 8;

SELECT LPAD("Mobile Phones", 20, "-"),
	LPAD("Android", 20, "-"),
	LPAD("Samesung", 20, "-");

SELECT REPLACE("http://old-site.com/images/logo.png", "old-site", "new-site");


SELECT GREATEST("w3Schools.com", "microsoft.com", "apple.com");

SELECT product_code, price_each, quantity_ordered, ROUND(price_each * quantity_ordered, 2) AS item_total 
FROM orderd_items
WHERE order_id = 10105;

SELECT MIN(qty_in_stock) from products;
SELECT MAX(buy_price) from products;


-- =========== Date and Time ===============
-- Show orders where shipment was delayed above 3 days
SELECT NOW();
SELECT CURDATE();
SELECT DAYNAME(NOW());
SELECT YEAR(NOW());
SELECT LOCALTIME();
SELECT CURRENT_TIMESTAMP();
SELECT DATEDIFF("2023-12-10", "2023-12-01");
SELECT TIMEDIFF("13:10:11", "13:10:10");
SELECT DATE_SUB("2023-12-30", INTERVAL 5 DAY);

SELECT id, order_date, shipped_date, DATEDIFF(shipped_date, order_date) AS days_delay 
FROM orders
HAVING days_delay > 3;

SELECT check_number, amount
FROM payments
WHERE payment_date > CURDATE();


-- ============ Controle Flow ======================

SELECT id, name,
	CASE 
		WHEN credit_limit > 1000 THEN 'Premium'
		WHEN credit_limit > 500 THEN 'Standard'
		ELSE 'New'
	END AS customer_type
FROM customers;

SELECT `code`, buy_price, IF(qty_in_stock > 50, 'Eligible', 'Not Eligible') AS discount_status
FROM products;
