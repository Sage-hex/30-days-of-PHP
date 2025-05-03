<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 

// Arithmetic Operators
// Arithmetic operators are used to perform basic mathematical operations like addition, subtraction, multiplication, and division.
// The following are the most common arithmetic operators in PHP:
// + (addition), - (subtraction), * (multiplication), / (division), % (modulus)
// ** (exponentiation)
//they are used to perform a mathemeatical operation on more than one operand.
// Example of arithmetic operators in PHP
// Addition
// The + operator is used to add two numbers together. For example:
$x = 5 + 5; // $x is now 10
echo $x + 5; // Output: 10


$y = 3;

echo $x + $y ; // Output: 13
// Subtraction          
// The - operator is used to subtract one number from another. For example:
$x = 10 - 5; // $x is now 5
echo $x - 2; // Output: 3
// Multiplication
// The * operator is used to multiply two numbers together. For example:
$x = 5 * 5; // $x is now 25
echo $x * 2; // Output: 50


// Division
// The / operator is used to divide one number by another. For example:
$x = 10 / 2; // $x is now 5
echo $x / 2; // Output: 2.5
// Modulus
// The % operator is used to find the remainder of a division operation. For example:
$x = 10 % 3; // $x is now 1 (10 divided by 3 leaves a remainder of 1)
echo $x % 2; // Output: 1



// Exponentiation
// The ** operator is used to raise a number to the power of another number. For example:
$x = 2 ** 3; // $x is now 8 (2 raised to the power of 3)
echo $x ** 2; // Output: 64 (8 raised to the power of 2)
// Increment and Decrement Operators
// The ++ operator is used to increment a variable by 1, and the -- operator is used to decrement a variable by 1. For example:
$x = 5; // $x is now 5
echo $x++; // Output: 5 (post-increment, $x is now 6)
echo $x; // Output: 6
echo ++$x; // Output: 7 (pre-increment, $x is now 7)
// $x = 7;
// echo $x--; // Output: 7 (post-decrement, $x is now 6)
// echo $x; // Output: 6
// echo --$x; // Output: 5 (pre-decrement, $x is now 5)
// $x = 5;
// echo $x--; // Output: 5 (post-decrement, $x is now 4)
// echo $x; // Output: 4
// echo --$x; // Output: 3 (pre-decrement, $x is now 3)
// $x = 3;
// echo $x--; // Output: 3 (post-decrement, $x is now 2)
// echo $x; // Output: 2
// echo --$x; // Output: 1 (pre-decrement, $x is now 1)

// Assignment Operators
// Assignment operators are used to assign values to variables. The most common assignment operator is the = operator, which assigns the value on the right to the variable on the left. For example:
// += operator is used to add a value to a variable and assign the result to that variable. For example:
$x = 5; // $x is now 5
// -= operator is used to subtract a value from a variable and assign the result to that variable. For example:
$x = 10; // $x is now 10
// *= operator is used to multiply a variable by a value and assign the result to that variable. For example:
$x = 5; // $x is now 5
// /= operator is used to divide a variable by a value and assign the result to that variable. For example:
$x = 10; // $x is now 10
// %= operator is used to find the remainder of a variable divided by a value and assign the result to that variable. For example:
$x = 10; // $x is now 10
// **= operator is used to raise a variable to the power of a value and assign the result to that variable. For example:
$x = 2; // $x is now 2
// $x **= 3; // $x is now 8 (2 raised to the power of 3)
// echo $x; // Output: 8
// $x = 8;
// $x /= 2; // $x is now 4 (8 divided by 2)
// echo $x; // Output: 4
// .= operator is used to concatenate a string to a variable and assign the result to that variable. For example:
$x = "Hello"; // $x is now "Hello"
// $x .= " World"; // $x is now "Hello World"
// echo $x; // Output: "Hello World"

$str = 'Darry is an old man';
$str .= ' and he is 50 years old.'; // $str is now "Darry is
  
// Comparison Operators
// Comparison operators are used to compare two values and return a boolean value (true or false). The most common comparison operators are:
// == (equal), != (not equal), === (identical), !== (not identical), > (greater than), < (less than), >= (greater than or equal to), <= (less than or equal to)
// Example of comparison operators in PHP
// Equal
// The == operator is used to check if two values are equal. For example:
$x = 5;
$y = 5;
if ($x == $y) {
    echo "$x is equal to $y"; // Output: 5 is equal to 5
} else {
    echo "$x is not equal to $y";
}
// Not Equal
// The != operator is used to check if two values are not equal. For example:
$x = 5;
$y = 10;
if ($x != $y) {
    echo "$x is not equal to $y"; // Output: 5 is not equal to 10
} else {
    echo "$x is equal to $y";
}
// Identical
// The === operator is used to check if two values are identical (equal and of the same type). For example:
$x = 5;
$y = "5";
if ($x === $y) {
    echo "$x is identical to $y"; // Output: 5 is identical to 5
} else {
    echo "$x is not identical to $y";
}
// Not Identical
// The !== operator is used to check if two values are not identical. For example:
$x = 5;
$y = "5";
if ($x !== $y) {
    echo "$x is not identical to $y"; // Output: 5 is not identical to 5
} else {
    echo "$x is identical to $y";
}
// Greater Than
// The > operator is used to check if one value is greater than another. For example:
$x = 10;
$y = 5;
if ($x > $y) {
    echo "$x is greater than $y"; // Output: 10 is greater than 5
} else {
    echo "$x is not greater than $y";
}
// Less Than
// The < operator is used to check if one value is less than another. For example:
$x = 5;
$y = 10;
if ($x < $y) {
    echo "$x is less than $y"; // Output: 5 is less than 10
} else {
    echo "$x is not less than $y";
}
// Greater Than or Equal To
// The >= operator is used to check if one value is greater than or equal to another. For example:
$x = 10;
$y = 10;
if ($x >= $y) {
    echo "$x is greater than or equal to $y"; // Output: 10 is greater than or equal to 10
} else {
    echo "$x is not greater than or equal to $y";
}
// Less Than or Equal To
// The <= operator is used to check if one value is less than or equal to another. For example:
$x = 5;
$y = 10;
if ($x <= $y) {
    echo "$x is less than or equal to $y"; // Output: 5 is less than or equal to 10
} else {
    echo "$x is not less than or equal to $y";
}
// Logical Operators
// Logical operators are used to combine multiple conditions and return a boolean value (true or false). The most common logical operators are:
// && (and), || (or), ! (not)
// Example of logical operators in PHP
// And
// The && operator is used to check if both conditions are true. For example:
$x = 5;
$y = 10;
if ($x > 0 && $y > 0) {
    echo "$x and $y are both positive numbers"; // Output: 5 and 10 are both positive numbers
} else {
    echo "At least one of the numbers is not positive";
}
// Or
// The || operator is used to check if at least one of the conditions is true. For example:
$x = 5;
$y = -10;
if ($x > 0 || $y > 0) {
    echo "At least one of the numbers is positive"; // Output: At least one of the numbers is positive
} else {
    echo "Both numbers are not positive";
}
// Not
// The ! operator is used to negate a condition. For example:
$x = 5;
$y = 10;
if (!($x > 0)) {
    echo "$x is not a positive number"; // Output: 5 is not a positive number
} else {
    echo "$x is a positive number";
}



// Bitwise Operators
// Bitwise operators are used to perform bit-level operations on integers. The most common bitwise operators are:
// & (bitwise AND), | (bitwise OR), ^ (bitwise XOR), ~ (bitwise NOT), << (left shift), >> (right shift)
// Example of bitwise operators in PHP
// Bitwise AND
// The & operator is used to perform a bitwise AND operation on two integers. For example:
$x = 5; // 0101 in binary
$y = 3; // 0011 in binary
// $z = $x & $y; // 0001 in binary (1 in decimal)
// echo $z; // Output: 1
// Bitwise OR
// The | operator is used to perform a bitwise OR operation on two integers. For example:
$x = 5; // 0101 in binary
$y = 3; // 0011 in binary
// $z = $x | $y; // 0111 in binary (7 in decimal)
// echo $z; // Output: 7
// Bitwise XOR
// The ^ operator is used to perform a bitwise XOR operation on two integers. For example:
$x = 5; // 0101 in binary
$y = 3; // 0011 in binary
// $z = $x ^ $y; // 0110 in binary (6 in decimal)
// echo $z; // Output: 6
// Bitwise NOT
// The ~ operator is used to perform a bitwise NOT operation on an integer. For example:
$x = 5; // 0101 in binary
// $z = ~$x; // 1010 in binary (10 in decimal)
// echo $z; // Output: 10
// Left Shift
// The << operator is used to perform a left shift operation on an integer. For example:
$x = 5; // 0101 in binary
// $z = $x << 1; // 1010 in binary (10 in decimal)
// echo $z; // Output: 10
// Right Shift
// The >> operator is used to perform a right shift operation on an integer. For example:
$x = 5; // 0101 in binary
// $z = $x >> 1; // 0010 in binary (2 in decimal)
// echo $z; // Output: 2


// spaceship operators
// The spaceship operator (<=>) is used to compare two values and return -1, 0, or 1 depending on whether the left value is less than, equal to, or greater than the right value. For example:
$x = 5; // 5 is less than 10
$y = 10; // 10 is greater than 5
// $z = $x <=> $y; // -1 (5 is less than 10)
// echo $z; // Output: -1
// $z = $y <=> $x; // 1 (10 is greater than 5)
// echo $z; // Output: 1
// $z = $x <=> $x; // 0 (5 is equal to 5)
// echo $z; // Output: 0
// $z = $x <=> 5; // 0 (5 is equal to 5)
// echo $z; // Output: 0
// $z = $x <=> 6; // -1 (5 is less than 6)
// echo $z; // Output: -1
// $z = $x <=> 4; // 1 (5 is greater than 4)
// echo $z; // Output: 1

// if the value on the left is less than the value on the right, it returns -1. If the values are equal, it returns 0. If the value on the left is greater than the value on the right, it returns 1.
// The spaceship operator is often used in sorting algorithms and comparisons. For example:
// $array = array(5, 10, 2, 8, 1);
// usort($array, function($a, $b) {
//     return $a <=> $b; // Sort in ascending order
// });  
// print_r($array); // Output: Array ( [0] => 1 [1] => 2 [2] => 5 [3] => 8 [4] => 10 )
// The spaceship operator is a shorthand way of writing a comparison function, and it can make your code more concise and easier to read. It is available in PHP 7 and later versions.
// It is also used in sorting algorithms and comparisons. For example:
// $array = array(5, 10, 2, 8, 1);
// usort($array, function($a, $b) {
//     return $a <=> $b; // Sort in ascending order
// });
// });


//string operators
// The string operators are used to concatenate strings and assign values to strings. The most common string operators are:
// . (concatenation), .= (concatenation assignment)
// Example of string operators in PHP
// Concatenation
// The . operator is used to concatenate two strings together. For example:
$x = "Hello";
$y = " World";
// $z = $x . $y; // $z is now "Hello World"
// echo $z; // Output: "Hello World"
// Concatenation Assignment
// The .= operator is used to concatenate a string to a variable and assign the result to that variable. For example:
$x = "Hello"; // $x is now "Hello"
// $x .= " World"; // $x is now "Hello World"
// echo $x; // Output: "Hello World"
// The string operators are useful for building strings dynamically and for combining multiple strings together. They are commonly used in PHP to create HTML output, build URLs, and format text.
// The string operators are also used in string manipulation functions, such as str_replace(), str_split(), and str_pad(). For example:
// $string = "Hello World";
// $string = str_replace("World", "PHP", $string); // Replace "World" with "PHP"
// echo $string; // Output: "Hello PHP"
// $string = str_split($string, 5); // Split the string into an array of 5-character chunks
// print_r($string); // Output: Array ( [0] => Hello [1] => PHP )
// $string = str_pad($string, 20, "-"); // Pad the string to a length of 20 with "-" characters
// echo $string; // Output: "Hello PHP-----------------"
// $string = str_pad($string, 20, "-"); // Pad the string to a length of 20 with "-" characters
// echo $string; // Output: "Hello PHP-----------------"


echo "<br>";
// logical operators

$x = 5;
$y = 10;

if($x == $y and 1 == 1){
    echo "True";

}else{
    echo "False";   //This will be printed because $x is not equal to $y
}

// And
// The and operator is used to check if both conditions are true. For example:

$x = 5;
$y = 10;

if ($x > 0 && $y > 0) {
    echo "$x and $y are both positive numbers"; // Output: 5 and 10 are both positive numbers
} else {
    echo "At least one of the numbers is not positive";
}
// Or
// The or operator is used to check if at least one of the conditions is true. For example:
$x = 5;
$y = -10;

if ($x > 0 || $y > 0) {
    echo "At least one of the numbers is positive"; // Output: At least one of the numbers is positive
} else {
    echo "Both numbers are not positive";
}
// Not
// The not operator is used to negate a condition. For example:
$x = 5;
$y = 10;

if (!($x > 0)) {
    echo "$x is not a positive number"; // Output: 5 is not a positive number
} else {
    echo "$x is a positive number";
}

// Xor

// The xor operator is used to check if exactly one of the conditions is true. For example:
$x = 5;
$y = 10;

if ($x > 0 xor $y > 0) {
    echo "$x is positive and $y is not positive"; // Output: 5 is positive and 10 is not positive
} else {
    echo "Both numbers are either positive or not positive";
}

// The xor operator is similar to the or operator, but it only returns true if exactly one of the conditions is true. If both conditions are true or both conditions are false, it returns false.

// ||
// The || operator is used to check if at least one of the conditions is true. For example:
$x = 5;
$y = -10;

if ($x > 0 || $y > 0) {
    echo "At least one of the numbers is positive"; // Output: At least one of the numbers is positive
} else {
    echo "Both numbers are not positive";
}



?>
</body>
</html>