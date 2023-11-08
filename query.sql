use Northwind;
SELECT
    c.id, c.first_name, c.last_name, o.order_date
FROM
    customers c
LEFT JOIN
    orders o
    ON c.id = o.customer_id
    AND YEAR(o.order_date) >= 1995
GROUP BY
    c.id, c.first_name, c.last_name
HAVING
    COUNT(DISTINCT YEAR(o.order_date)) = YEAR(Now()) - 1995
    AND COUNT(o.id) >= YEAR(Now()) - 1995;
