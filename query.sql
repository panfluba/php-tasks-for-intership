use Northwind;
SELECT
    id, first_name, last_name,
    (SELECT COUNT(*) FROM `orders` WHERE `employee_id` = `employees`.`id`) AS `orders_count`
FROM
    `employees`
ORDER BY
    `orders_count` DESC;
