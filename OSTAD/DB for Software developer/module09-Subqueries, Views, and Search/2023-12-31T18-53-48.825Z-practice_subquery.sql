-- SubQueries ======================

-- Get the list of customers 
-- who took rent at least one film 
-- in a given month

-- Using JOIN
SELECT DISTINCT first_name, last_name, email FROM customer
JOIN rental USING(customer_id)
WHERE rental.rental_date BETWEEN '2005-05-01' AND '2005-05-31';

-- Using Subquery
SELECT first_name, last_name, email FROM customer
WHERE customer_id IN(
	SELECT customer_id FROM rental 
	WHERE rental_date BETWEEN '2005-05-01' AND '2005-05-31'
);

SHOW STATUS LIKE 'last_query_cost';

-- -----------------------------------------------------

-- Aggregating with subquery ----------------------
SELECT actor_id, first_name, last_name, (
    SELECT COUNT(*) FROM film_actor 
    WHERE actor_id = actor.actor_id) as total_films 
FROM actor;


-- Filtering by Existence ----------------------
-- Find the customers who have not returned an inventory
SELECT customer_id, first_name, last_name, email 
FROM customer WHERE EXISTS (
    SELECT * FROM rental 
    WHERE rental.customer_id = customer.customer_id
        AND return_date IS NULL
    );


-- Comparing with Aggregated results with subquery ----------------------
SELECT actor_id, first_name, last_name, (
    SELECT COUNT(*) FROM film_actor 
    WHERE actor_id = actor.actor_id) as total_films 
FROM actor
HAVING total_films > 30;



-- Nested subquery ----------------------
-- Average renatl_rate per category
SELECT c.category_id, c.name, (
	SELECT AVG(replacement_cost) FROM film f WHERE f.film_id IN (
		SELECT film_id FROM film_category fc WHERE fc.category_id = c.category_id
		)
	) AS avg_replacement_cost 
FROM category c;

-- Verify result
-- SELECT GROUP_CONCAT(film_id) FROM film_category WHERE category_id = 6 GROUP BY category_id;
-- SELECT AVG(replacement_cost) FROM film f WHERE f.film_id IN ();


-- Picking single values with subquery ----------------------
-- Get the total number of inventory and inventory that has not returned yet
SELECT COUNT(*) total_inventory,
	(SELECT COUNT(*) FROM rental WHERE return_date IS NULL) yet_to_return
	FROM inventory
;


