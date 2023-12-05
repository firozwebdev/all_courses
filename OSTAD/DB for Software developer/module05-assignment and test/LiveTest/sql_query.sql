SELECT Name, Price, Description
FROM MenuItems
ORDER BY ItemID DESC
LIMIT 20;

SELECT *
FROM Orders
WHERE Status IN ('new', 'in-progress')
  AND OrderDate = CURDATE()
ORDER BY OrderDate ASC;

DELETE FROM Orders
WHERE Status = 'completed'
  AND OrderDate < CURDATE() - INTERVAL 15 DAY;