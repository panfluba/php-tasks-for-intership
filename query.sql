use Northwind;
SELECT
    o.id, o.customer_id, c.country_region, o.ship_country_region
FROM
    orders o
JOIN customers c ON o.customer_id = c.id
WHERE
    o.ship_country_region <> c.country_region
    AND o.id IN (
        SELECT order_id
        FROM order_details
        GROUP BY order_id
        HAVING COUNT(*) >= 2
);
