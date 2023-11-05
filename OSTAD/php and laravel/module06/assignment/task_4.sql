-- Write a SQL query to retrieve the top 5 customers who have made the highest total purchase amount.
-- Display the customer name along with the total purchase amount in descending order of the purchase amount.

-- customers = c, orders = o, order_items = oi, products = p
SELECT c.name, SUM(p.price * oi.quantity) AS total_purchase_amount
FROM customers c
         LEFT JOIN orders o ON c.id = o.customer_id
         LEFT JOIN order_items oi ON o.id = oi.order_id
         LEFT JOIN products p ON oi.product_id = p.id
GROUP BY c.id, c.name
ORDER BY total_purchase_amount DESC
    LIMIT 5;
