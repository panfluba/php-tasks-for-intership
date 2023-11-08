use Northwind;
SELECT
	category, AVG(list_price)
    AS `count`, COUNT(product_name) AS product_count
FROM `products`
GROUP BY `category`
HAVING product_count > 10;
