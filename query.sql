use Northwind;
SELECT
    c.id, c.first_name, c.last_name
FROM
    customers c
LEFT JOIN
    orders o
    ON c.id = o.customer_id
    AND YEAR(o.order_date) >= 1995
GROUP BY
    c.id, c.first_name, c.last_name
HAVING
    COUNT(DISTINCT YEAR(o.order_date)) = YEAR(Now()) - 1994
    AND COUNT(o.id) >= YEAR(Now()) - 1994;
