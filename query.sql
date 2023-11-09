use Northwind;
SELECT
    p.category,
    p.product_name,
    SUM(pod.quantity) AS total_sales
FROM
    products p
INNER JOIN
    purchase_order_details pod
    ON p.id = pod.product_id
GROUP BY
    p.category,
    p.product_name
HAVING
    total_sales = (
        SELECT MAX(total_sales_inner)
        FROM (
            SELECT
                SUM(o_inner.quantity) AS total_sales_inner
            FROM
                products p_inner
            JOIN
                purchase_order_details o_inner
                ON p_inner.id =  o_inner.product_id
            WHERE
                p_inner.category = p.category
            GROUP BY
                p_inner.id
   ) AS x
);
