-- Active: 1699102898288@@127.0.0.1@3306@sql_practice

 -- Table name with alias
 
SELECT  a.`firstName`,a.`lastName` FROM users a


-- Left Join
 SELECT  * FROM users a LEFT JOIN categories b on a.id = b.user_id

-- Right Join
SELECT  * FROM categories a RIGHT JOIN users b on b.id = a.user_id

-- Full Outer Join

 SELECT  * FROM users a LEFT JOIN categories b on a.id = b.user_id
 UNION
 SELECT  * FROM categories a RIGHT JOIN users b on b.id = a.user_id

-- Cross Join
 SELECT * FROM users CROSS JOIN categories


-- select Invoice wher ID - 1 with User & Customer

 -- a = invoices, b = customers, c = users, d = invoice_products, e = products
SELECT c.email, b.name, a.payable,d.sale_price,e.name,f.name from invoices a
LEFT JOIN customers b ON a.customer_id = b.id
LEFT JOIN users c on a.user_id = c.id
LEFT JOIN invoice_products d on a.id = d.invoice_id
LEFT JOIN products e on d.product_id = e.id
LEFT JOIN categories f ON e.category_id = f.id