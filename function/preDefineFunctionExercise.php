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

$birthdayMonth = 8; // Replace with your birthday month
$birthdayDay = 25;  // Replace with your birthday day
$currentYear = date("Y");

// Set the target timestamp for this year's birthday
$targetDays = mktime(0, 0, 0, $birthdayMonth, $birthdayDay, $currentYear);

// If the birthday has already passed this year, calculate for the next year
if ($targetDays < time()) {
    $targetDays = mktime(0, 0, 0, $birthdayMonth, $birthdayDay, $currentYear + 1);
}
$today = time();
$differenceDays = $targetDays - $today;
$days = (int)($differenceDays / (60 * 60 * 24));

if ($days < 0) {
    echo "My birthday has already passed this year!<br>";
} else {
    echo "There are $days days until my birthday!<br>";
}
/**
 * Exercise 3: Generating random float numbers
 * Create a random number function 'randNumber' that generates random float numbers (not integers).
 * (Use this link for all the rand() functions in php: https://www.php.net/manual/en/function.rand.php)
 * 
 * Your code here:
 */

 function randNumber($min, $max) {
    // Generate a random float number between $min and $max
    return mt_rand($min * 100, $max * 100) / 100;
}
$min = 1.5; // Minimum value
$max = 10.5; // Maximum value
$randomFloat = randNumber($min, $max);
echo "Random float number between $min and $max: $randomFloat<br>";

/**
 * Exercise 4: Lowercase check
 * Create a variable 'str' with a long piece of text and create a function 'lowercaseCheck'
 * that converts the string to all lowercase. Echo out the text with lower case
 * (Use this link for all the string functions in php: https://www.php.net/manual/en/ref.strings.php)
 * 
 * Your code here:
 */

 $str = "THIS IS A LONG PIECE OF TEXT THAT NEEDS TO BE CONVERTED TO LOWERCASE.";

 function lowerCaseCheck($text){
    return strtolower($text);
 }

    $lowercaseText = lowerCaseCheck($str);
    echo "Original text: $str<br>";
    echo "Lowercase text: $lowercaseText<br>";

/**
 * Exercise 5: Search inside of a text
 * Create a variable with a long piece of text and create a function 'searchText' that has 2 parameters:
 * 'str' and 'punctuation'. Find out the amount of punctuations, inside of the string.
 * This method has no return value.
 * Expected output -> ("The text has 'punctuation' punctuations.")
 * 
 * Your code here:
 */

$punctuation = 0;

function searchText($str, $punctuation){
    for ($i = 0; $i < strlen($str);$i ++)

    if($str[$i] == "."){
        $punctuation++;
    }
    echo "The text has " . $punctuation . " Punctuation";
}

searchText($str, $punctuation);

echo "<br>";
/**
 * Exercise 6: Lowest and highest values
 * Create an array 'onlyNumbers' that has integer values inside of it.
 * Use the min and max function in order to get the highest and lowest value in an array.
 * Expected output -> ("The lowest value is 'min' and the highest value is 'max'")
 * 
 * Your code here:
 */

$onlyNumbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
$minValue = min($onlyNumbers);
$maxValue = max($onlyNumbers);
echo "The lowest value is $minValue and the highest value is $maxValue<br>";

/**
 * Exercise 7: String repeat
 * Create a variable 'str' and repeat it 8 times with a function.
 * 
 * Your code here:
 */

$str = "Hello, World!";
$repeatCount = 8;
function repeatString($str, $count) {
    return str_repeat($str, $count);
}

$repeatedString = repeatString($str, $repeatCount);

echo "Repeated string: $repeatedString<br>";


?>
</body>
</html>