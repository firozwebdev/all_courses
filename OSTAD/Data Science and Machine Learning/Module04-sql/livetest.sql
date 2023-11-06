SELECT g.department, AVG(g.salary) AS average_salary
FROM Google_salaries g
GROUP BY g.department;