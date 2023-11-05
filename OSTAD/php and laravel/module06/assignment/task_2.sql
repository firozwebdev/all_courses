-- Write a SQL query to retrieve the product name, quantity, and total amount for each order item.
-- Display the result in ascending order of the order ID.

-- orders = o, order_items = oi, products = p

SELECT o.id, p.name, oi.quantity, (oi.quantity * p.price) AS total_amount
FROM orders o
         INNER JOIN order_items oi ON o.id = oi.order_id
         INNER JOIN products p ON oi.product_id = p.id
ORDER BY o.id ASC;