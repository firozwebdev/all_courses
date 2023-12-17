
-- ==== Simple, FULL TABLE aggregation ==============
SELECT COUNT(*) FROM products;
SELECT SUM(qty_in_stock) FROM products;

SELECT 
    MAX(buy_price) max_price, 
    MIN(buy_price) min_price, 
    ROUND(AVG(buy_price), 2) average_price 
FROM products;

-- Aggregation with filtering records
SELECT SUM(qty_in_stock) FROM products WHERE product_line= 'Motorcycles';

SELECT order_id, SUM(quantity_ordered * price_each) AS order_total
FROM orderd_items
WHERE order_id = 10100;

SELECT COUNT(*) orders_of_2003
FROM orders
WHERE order_date BETWEEN '2003-01-01' AND '2003-12-31';


-- ============ Aggregation with grouping ===========

SELECT product_line, SUM(qty_in_stock) 
FROM products GROUP BY product_line;


SELECT customer_id, SUM(amount) total 
FROM payments 
WHERE payment_date 
  BETWEEN '2004-01-01' AND '2004-12-31'
GROUP BY customer_id
HAVING total > 10000;

-- ============ Aggregation with DISTINCT ===========

SELECT vendor from products;
SELECT DISTINCT vendor from products;

SELECT product_line, 
	SUM(qty_in_stock) in_stock, 
	COUNT(DISTINCT vendor) vendors
FROM products 
GROUP BY product_line;


-- ============ Aggregation with Conditional values ===========

SELECT 
	SUM(IF(o.country = 'USA', 1, 0)) USMail, 
	SUM(IF(o.country = 'USA', 0, 1)) DHL
FROM employees e
JOIN offices o ON o.code = e.office_code;

SELECT 	
	c.sales_rep_id,
	-- CONCAT(e.first_name, ' ', e.last_name) sales_person, 
	COUNT(DISTINCT o.id) total_orders,
	SUM(IF(c.country = 'USA', 100, 300)) total_shipment_cost
FROM orders o 
JOIN customers c ON c.id = o.customer_id
-- JOIN employees e ON e.id = c.sales_rep_id 
GROUP BY c.sales_rep_id;

-- Verify
SELECT GROUP_CONCAT(id) FROM customers WHERE sales_rep_id = 1165;
SELECT * FROM orders WHERE customer_id IN(124,129,161,321,450,487);

-- ================= ONLY_FULL_GROUP_BY ======================

SELECT @@session.sql_mode;
SET sql_mode = '';
SET sql_mode = @@GLOBAL.sql_mode;

-- ERROR
SELECT product_line, vendor, SUM(qty_in_stock) 
FROM products 
GROUP BY product_line;

-- Bypass with ANY_VALUE()
SELECT product_line, ANY_VALUE(vendor), SUM(qty_in_stock) 
FROM products 
GROUP BY product_line;

-- YES
SELECT c.id, c.name, c.city, c.country, SUM(p.amount) 
FROM customers c
JOIN payments p ON p.customer_id = c.id
WHERE p.payment_date BETWEEN '2004-01-01' AND '2004-12-31'
GROUP BY p.customer_id; 


-- =========== GROUP_CONCAT ================

SELECT order_id, GROUP_CONCAT(product_code) items, SUM(quantity_ordered * price_each) AS order_total
FROM orderd_items
WHERE order_id = 10100;

SELECT customer_id, GROUP_CONCAT(check_number), SUM(amount) total
FROM payments 
WHERE YEAR(payment_date) = '2004'
GROUP BY customer_id;


-- =========== Multiple GROUP BY ================

SELECT customer_id, YEAR(payment_date) payment_year, GROUP_CONCAT(check_number), SUM(amount) total
FROM payments 
GROUP BY customer_id, payment_year;
