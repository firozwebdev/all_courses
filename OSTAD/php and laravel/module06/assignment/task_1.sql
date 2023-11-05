/*

Objective:

In this assignment, you will be using your SQL skills to solve real-life business problems. You will be given a sample database with tables representing different aspects of a fictional business. Your task is to write SQL queries to extract relevant information from the database and answer specific questions related to the business operations.





Database Information:

The database contains the following tables:



Customers: Contains information about the customers, such as customer ID, name, email, and location.

Orders: Contains information about the orders placed by customers, such as order ID, customer ID, order date, and total amount.

Products: Contains information about the products available for purchase, such as product ID, name, description, and price.

Categories: Contains information about the different categories of products, such as category ID and name.

Order_Items: Contains information about the individual items included in each order, such as order item ID, order ID, product ID, quantity, and unit price.

 */

-- Write a SQL query to retrieve all the customer information along with the total number of orders placed
-- by each customer. Display the result in descending order of the number of orders.

SELECT customers.*, COUNT(orders.id) AS total_orders
FROM customers
         LEFT JOIN orders ON customers.id = orders.customer_id
GROUP BY customers.id
ORDER BY total_orders DESC;

