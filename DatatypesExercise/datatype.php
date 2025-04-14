<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datatype Exercise</title>
</head>
<body>
    <?php
    
   
# PHP Type & Data Handling Exercises

## Exercise 1: Type Checking
// ```php
// <?php
// // Exercise 1: Type Checking
// $var1 = 42;
// $var2 = "42";
// $var3 = 3.14;
// $var4 = true;
// $var5 = null;

// // Use gettype() or is_* functions to check types:
// echo gettype($var1) . "\n"; // Should output "integer"
// // Check the types of $var2 to $var5 below:
    
    
$var1 = 42;
$var2 = "42";
$var3 = 3.14;
$var4 = true;
$var5 = null;

echo gettype($var1) . '<br>';
echo gettype($var2) . '<br>';
echo gettype($var3) . '<br>';
echo gettype($var4) . '<br>';
echo gettype($var5) . '<br>';



## Exercise 2: Type Conversion
// ```php
// <?php
// // Exercise 2: Type Conversion
// $numberStr = "123";
// $floatStr = "45.67";
// $isTrue = "1";

// // Convert variables explicitly:
// $integer = (int)$numberStr; // Convert to integer
// Convert $floatStr to float and $isTrue to boolean



$numberStr = "123";
$floatStr = "45.67";
$isTrue = "1";

// Integer conversion
$integer = (int)$numberStr;
var_dump($integer); // int(123)
echo "<br>";

// Float conversion
$float = (float)$floatStr;
echo number_format($float, 2) . '<br>'; // 45.67

// Boolean conversion
$bool = (bool)$isTrue;
var_dump($bool); // bool(true)
echo "<br>";
## Exercise 3: String Manipulation

$text = "  Hello, PHP!  ";

// Trim whitespace, reverse the string, and convert to uppercase:
$trimmed = trim($text);
$reversed = strrev($trimmed);
$uppercase = strtoupper($trimmed);

echo $trimmed . "<br>";
echo $reversed . "<br>";
echo $uppercase . "<br>";
// // Output $reversed and $uppercase




## Exercise 4: Array Operations

// Exercise 4: Array Operations
$fruits = ["apple", "banana"];

// Add "cherry" to the end of the array
// Remove the first element ("apple")
// Check if "banana" exists in the array



    ?>
</body>
</html>