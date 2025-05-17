<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
/**
 * PHP Built-in Functions Exercises
 * 
 * This file contains exercise instructions for practicing PHP's built-in functions
 * for array manipulation, date handling, string operations, and more.
 * 
 * @date May 15, 2025
 */

/**
 * Exercise 1: Sorting array
 * Create a array 'NUMBERS' and use a build in function that sorts an array in descending order
 * (Use this link for all the array functions in php: https://www.php.net/manual/en/ref.array.php)
 * 
 * Your code here:
 */

 $Numbers = array("Milk" => 1.50, "Bread" => 2.00, "Eggs" => 3.00, "Butter" => 4.00, "Cheese" => 5.00);
arsort($Numbers, SORT_NUMERIC | SORT_DESC);
 
 echo "<pre>";
 print_r($Numbers);
 echo "</pre>";

/**
 * Exercise 2: Birthday countdown
 * Create a simple 'birthday countdown' script that counts the number of days between current day
 * and your birthday
 * (Use this link for all the date time functions in php: https://www.php.net/manual/en/ref.datetime.php)
 * 
 * Your code here:
 */


/**
 * Exercise 3: Generating random float numbers
 * Create a random number function 'randNumber' that generates random float numbers (not integers).
 * (Use this link for all the rand() functions in php: https://www.php.net/manual/en/function.rand.php)
 * 
 * Your code here:
 */


/**
 * Exercise 4: Lowercase check
 * Create a variable 'str' with a long piece of text and create a function 'lowercaseCheck'
 * that converts the string to all lowercase. Echo out the text with lower case
 * (Use this link for all the string functions in php: https://www.php.net/manual/en/ref.strings.php)
 * 
 * Your code here:
 */


/**
 * Exercise 5: Search inside of a text
 * Create a variable with a long piece of text and create a function 'searchText' that has 2 parameters:
 * 'str' and 'punctuation'. Find out the amount of punctuations, inside of the string.
 * This method has no return value.
 * Expected output -> ("The text has 'punctuation' punctuations.")
 * 
 * Your code here:
 */


/**
 * Exercise 6: Lowest and highest values
 * Create an array 'onlyNumbers' that has integer values inside of it.
 * Use the min and max function in order to get the highest and lowest value in an array.
 * Expected output -> ("The lowest value is 'min' and the highest value is 'max'")
 * 
 * Your code here:
 */


/**
 * Exercise 7: String repeat
 * Create a variable 'str' and repeat it 8 times with a function.
 * 
 * Your code here:
 */

?>
</body>
</html>