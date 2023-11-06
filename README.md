 Task suite for Любовь Панфилова
Comments: please provide an estimation how much time these tasks will take for you. You don’t have a strict deadline for those tasks.
For tasks connected with PHP please install XAMPP or another server to make them. During the installation process you will see the folder like “htaccess”. Just make new files for tasks there. Please create a private repository in GitHub/Bitbucket and share it to the following account: “maryzubava”.
Rules for git: you have to create separate branches for every task with README which have to contain the task description.
For tasks connected with MySQL please install MySQL. If task has “Northwind” in the name you have to set up test database (the name of DB is Northwind:)) https://github.com/dalers/mywind/blob/master/northwind.sql just run this in the query console.
If you have any problems contact Olya. If you will have problems with tasks you can ask for help you can leave the task without a solution. Please try to do them without special tools like ChatGPT and so on.
Please try to follow PSR-12 https://www.php-fig.org/psr/psr-12/ (not obligatory)

Useful materials:
https://www.php.net/manual/ru/,
https://www.w3schools.com/mysql/mysql_sql.asp

Task 1: Northwind. Employees: get by max orders
Fetch the names of the employees who have processed the most orders.
Task 2: Northwind. Categories: get average by unit price
Get the average unit price of products for each category, but only include categories that have more than 10 products.
Task 3: Northwind. Customers: get by orders in year
Retrieve all customers who have placed an order in every year since 1995.
Task 4: Northwind. Orders: get by details and region
Retrieve all orders where the customer's region is different from the order's ship region, and the order has at least 2 order details.
Task 5: Northwind. Products: highest unit sales
Fetch the products with the highest unit sales within each category.
Task 6: Northwind. Customers: get unique products
Get the total number of unique products ordered by each customer.
Task 7: Where is Bob!?!
Write a function that searches an array of names (unsorted) for the name "Bob" and returns the location in the array. If Bob is not in the array, return -1.
Examples
findBob(["Jimmy", "Layla", "Bob"]) ➞ 2
findBob(["Bob", "Layla", "Kaitlyn", "Patricia"]) ➞ 0
findBob(["Jimmy", "Layla", "James"]) ➞ -1
Notes
Assume all names start with a capital letter and are lowercase thereafter (i.e. don't worry about finding "BOB" or "bob").
Task 8: How Many Solutions Does This Quadratic Have?
A quadratic equation a x² + b x + c = 0 has either 0, 1, or 2 distinct solutions for real values of x. Given a, b and c, you should return the number of solutions to the equation.
Examples
solutions(1, 0, -1) ➞ 2
// x² - 1 = 0 has two solutions (x = 1 and x = -1).
solutions(1, 0, 0) ➞ 1
// x² = 0 has one solution (x = 0).
solutions(1, 0, 1) ➞ 0
// x² + 1 = 0 has no real solutions.
Notes
You do not have to calculate the solutions, just return how many there are.
a will always be non-zero.
Task 9: Are Letters in the Second String Present in the First?
Create a function that accepts an array of two strings and checks if all of the letters in the second string are present in the first string.
Examples
letterCheck(["trances", "nectar"]) ➞ true
letterCheck(["compadres", "DRAPES"]) ➞ true
letterCheck(["parses", "parsecs"]) ➞ false
Notes
Function should not be case sensitive (as indicated in the second example).
Both strings are presented as a single argument in the form of an array.
Task 10: Recursion: Reverse a String
Write a function that reverses a string. Make your function recursive.
Examples
reverse("hello") ➞ "olleh"
reverse("world") ➞ "dlrow"
reverse("a") ➞ "a"
reverse("") ➞ ""
Notes
For non-base cases, your function must call itself at least once.
Task 11: The Museum of Incredibly DULL Things
A museum wants to get rid of some exhibitions. Katya, the interior architect, comes up with a plan to remove the most boring exhibitions. She gives them a rating, and removes the one with the lowest rating. Just as she finishes rating the exhibitions, she's called off to an important meeting. She asks you to write a program that tells her the ratings of the items after the lowest one is removed.
Create a function that takes an array of integers and removes the smallest value.
Examples
removeSmallest([1, 2, 3, 4, 5] ) ➞ [2, 3, 4, 5]
removeSmallest([5, 3, 2, 1, 4]) ➞ [5, 3, 2, 4]
removeSmallest([2, 2, 1, 2, 1]) ➞ [2, 2, 2, 1]
Notes
Don't change the order of the left over items.
If you get an empty array, return an empty array: [] ➞ []
If there are multiple items with the same value, remove item with lower index (3rd example).
Task 12: Automorphic Number
A number is called Automorphic number if its square ends in the original number. Create a function that takes a number $n and returns true if it is an Automorphic number, otherwise false.
Examples
automorphic(1) ➞ true
automorphic(3) ➞ false
// 3^2 = 9
automorphic(6) ➞ true
// 6^2 = 36 (ends with 6)
automorphic(95) ➞ false
// 95^2 = 9025 (does not end with 95)
Notes
N/A
Task 13: Scoring System
Andy, Ben and Charlotte are playing a board game. The three of them decided to come up with a new scoring system. A player's first initial ("A", "B" or "C") denotes that player scoring a single point. Given a string of capital letters, return an array of the players' scores.
For instance, if ABBACCCCAC is written when the game is over, then Andy scored 3 points, Ben scored 2 points, and Charlotte scored 5 points, since there are 3 instances of letter A, 2 instances of letter B, and 5 instances of letter C. So the array [3, 2, 5] should be returned.
Examples
calculateScores("A") ➞ [1, 0, 0]
calculateScores("ABC") ➞ [1, 1, 1]
calculateScores("ABCBACC") ➞ [2, 2, 3]
Notes
If given an empty string as an input, return [0, 0, 0].
Task 14: Hurdle Jump
Create a function that takes an array of hurdle heights and a jumper's jump height, and determine whether or not the hurdler can clear all the hurdles.
A hurdler can clear a hurdle if their jump height is greater than or equal to the hurdle height.
Examples
hurdleJump([1, 2, 3, 4, 5], 5) ➞ true
hurdleJump([5, 5, 3, 4, 5], 3) ➞ false
hurdleJump([5, 4, 5, 6], 10) ➞ true
hurdleJump([1, 2, 1], 1) ➞ false
Notes
Return true for the edge case of an empty array of hurdles. (Zero hurdles means that any jump height can clear them).
Task 15: Absolute Sum
Take an array of integers (positive or negative or both) and return the sum of the absolute value of each element.
Examples
getAbsSum([2, -1, 4, 8, 10]) ➞ 25
getAbsSum([-3, -4, -10, -2, -3]) ➞ 22
getAbsSum([2, 4, 6, 8, 10]) ➞ 30
getAbsSum([-1]) ➞ 1
Notes
The term "absolute value" means to remove any negative sign in front of a number, and to think of all numbers as positive (or zero).
All the elements in the given array are integers.
Task 16: Array from Comma-Delimited String
Write a function that turns a comma-delimited list into an array of strings.
Examples
toArray("watermelon, raspberry, orange")➞ ["watermelon", "raspberry", "orange"]
toArray("x1, x2, x3, x4, x5")➞ ["x1", "x2", "x3", "x4", "x5"]
toArray("a, b, c, d")➞ ["a", "b", "c", "d"]
toArray("")➞ []
Notes
Return an empty array for an empty string.
Task 17: Alphabet Soup
Create a function that takes a string and returns a string with its letters in alphabetical order.
Examples
alphabetSoup("hello") ➞ "ehllo"
alphabetSoup("edabit") ➞ "abdeit"
alphabetSoup("hacker") ➞ "acehkr"
alphabetSoup("geek") ➞ "eegk"
alphabetSoup("javascript") ➞ "aacijprstv"
Notes
You can assume numbers and punctuation symbols won't be included in test cases. You'll only have to deal with single word, alphabetic characters.
Task 18: Barbecue Skewers
You are in charge of the barbecue grill. A vegetarian skewer is a skewer that has only vegetables (-o). A non-vegetarian skewer is a skewer with at least one piece of meat (-x).
For example, the grill below has 4 non-vegetarian skewers and 1 vegetarian skewer (the one in the middle).
["--xo--x--ox--",
"--xx--x--xx--",
"--oo--o--oo--", <<< vegetarian skewer
"--xx--x--ox--",
"--xx--x--ox--"]
Given a BBQ grill, write a function that returns [# vegetarian skewers, # non-vegetarian skewers]. For example above, the function should return [1, 4].
Examples
bbqSkewers( [
"--oooo-ooo--",
"--xx--x--xx--",
"--o---o--oo--",
"--xx--x--ox--",
"--xx--x--ox--"
]) ➞ [2, 3]

bbqSkewers([
"--oooo-ooo--",
"--xxxxxxxx--",
"--o---",
"-o-----o---x--",
"--o---o-----"
]) ➞ [3, 2]
Notes
N/A
Task 19: Return the Sum of Two Numbers
Create a function that takes two numbers as arguments and returns their sum.
Examples
addition(3, 2) ➞ 5
addition(-3, -6) ➞ -9
addition(7, 3) ➞ 10
Notes
Don't forget to return the result.
Task 20: Area of a Triangle
Write a function that takes the base and height of a triangle and return its area.
Examples
area(3, 2) ➞ 3
area(7, 4) ➞ 14
area(10, 10) ➞ 50
Notes
The area of a triangle is: (base * height) / 2
Don't forget to return the result.
Task 21: Return Something to Me!
Write a function that returns the string "something" joined with a space " " and the given argument a.
Examples
giveMeSomething("is better than nothing") ➞ "something is better than nothing"
giveMeSomething("Bob Jane") ➞ "something Bob Jane"
giveMeSomething("something") ➞ "something something"
Notes
Assume an input is given.
Task 22: Is the Number Less than or Equal to Zero?
Create a function that takes a number as its only argument and returns true if it's less than or equal to zero, otherwise return false.
Examples
lessThanOrEqualToZero(5) ➞ false
lessThanOrEqualToZero(0) ➞ true
lessThanOrEqualToZero(-2) ➞ true
Notes
Don't forget to return the result.
Task 23: Check String for Spaces
Create a function that returns true if a string contains any spaces.
Examples
hasSpaces("hello") ➞ false
hasSpaces("hello, world") ➞ true
hasSpaces(" ") ➞ true
hasSpaces("") ➞ false
hasSpaces(",./!@#") ➞ false
Notes
An empty string does not contain any spaces.
Try doing this without RegEx.


