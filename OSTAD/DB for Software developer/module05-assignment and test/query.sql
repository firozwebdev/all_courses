SELECT Title
FROM Books
WHERE InStock > 0
ORDER BY PublishedDate DESC
LIMIT 20;


SELECT *
FROM Purchases
WHERE PurchaseDate >= '2023-01-01';


SELECT *
FROM Authors
WHERE FirstName LIKE 'Mohammad%' OR FirstName LIKE 'MD%'
ORDER BY FirstName;
