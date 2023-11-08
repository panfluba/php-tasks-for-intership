use Northwind;
SELECT
    c.id, c.first_name, c.last_name,
    COUNT(DISTINCT od.product_id) AS unique_ordered
FROM
    customers c
LEFT JOIN
    orders o
    ON c.id = o.customer_id
LEFT JOIN
    order_details od
    ON o.id = od.order_id
GROUP BY
    c.id, c.first_name, c.last_name;
