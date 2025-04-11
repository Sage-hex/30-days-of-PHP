<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable exercise</title>
</head>
<body>
    <?php

## Exercise 1: Basic Variables
// Create variables to store:

// - Your name (string)
// - Your age (integer)
// - Your height in meters (float)
// - Whether you're a student (boolean)

// **Output all variables using echo or print.**

// **Sample Output:**  
// ```
// Name: John
// Age: 25
// Height: 1.75
// Student: Yes
// ```

$name = 'Sage';
$age = 10;
$height = 1.99;
$is_Student = false;
    
    
    
echo "<h1>my name is $name </h1>";
echo "<p>I'm $age years old</p>";
echo "<p>My height is $height</p>";
echo "<p>And I'm a student " . ($is_Student ? 'Yes' : 'No') . " </p>";





// ## Exercise 2: String Concatenation
// Create two variables: `$firstName = "Alice"` and `$lastName = "Smith"`.

// Combine them into a new variable `$fullName` and output:  
// ```
// Hello, Alice Smith!
// ```
    

$firstName = 'Alice';
$lastName = "Smith";
$fullName = $firstName . " " . $lastName;

echo "<h3>Hello $fullName !</h3>";
echo "Hello, " . $fullName . "!";
echo "<br>";



## Exercise 3: Arithmetic Operations
// Create two variables: `$num1 = 15` and `$num2 = 7`.

// Calculate and output:

// - Sum (`$num1 + $num2`)
// - Difference (`$num1 - $num2`)
// - Product (`$num1 * $num2`)
// - Quotient (`$num1 / $num2`)
// - Remainder (`$num1 % $num2`)

$num1 = 15;
$num2 = 7;

$sum = $num1 + $num2;
$difference = $num1 - $num2;
$product = $num1 * $num2;
$quotient = $num1 / $num2;
$remainder = $num1 % $num2;

echo "The sum of two numbers is $sum";
echo "<br>";
echo "The differnce of two numbers is $difference";
echo '<br/>';
echo "The product of two numbers is $product";
echo '<br/>';
echo "The quotient of two numbers is " . ceil($quotient);
echo '<br/>';
echo "The remainder of two numbers is $remainder";
echo '<br/>';


## Exercise 4: Variable Swapping
// Declare `$a = 10` and `$b = 20`.

// Swap their values **without using a temporary variable**.

// Output the new values of `$a` and `$b`.

$a = 10;
$b = 20;

$a = $a + $b;
echo "$a";
echo '<br>';
$b = $a - $b;
echo "b:$b";
$a = $a - $b;
echo '<br>';
echo "a:$a";
echo '<br>';

## Exercise 5: Temperature Conversion
// Store a Celsius temperature in a variable: `$celsius = 25`.

// Convert it to Fahrenheit using the formula:  
// `Fahrenheit = (Celsius × 9/5) + 32`

// Output the result:  
// ```
// 25°C is 77°F

$celsius = 25;
$fahrenheit = ($celsius * 9/5) + 32;


echo "{$celsius}°C is {$fahrenheit}°F";

echo '<br>';

## Exercise 6: Working with Constants
// Define a constant `TAX_RATE` with a value of `0.15`.

// Calculate the tax for a product costing `$price = 45`.

// Output:  
// ```
// Tax: $6.75



define('TAX_RATE',0.15);
$price = 45;
$tax = TAX_RATE * $price;

echo "Tax: $" . $tax;



## Exercise 7: Type Conversion
// Create a variable `$numberString = "123"`.

// Convert it to an integer and multiply it by 2.

// Output the result:  
// ```
// 246
// ```


$numberString = '123';
$numberInt = (int) $numberString;
$result = $numberInt * 2;

echo '<br/>';

echo "{$result}<br>";




## Exercise 8: User Profile (Challenge)
// Create variables for a user:

//     - `$username`
//     - `$email`
//     - `$age`
//     - `$isSubscribed` (boolean)
    
//     Output a summary like:  
//     ```
//     Username: php_master
//     Email: php@example.com
//     Age: 30
//     Subscribed: Yes
//     ```
    
//     ---


$username = 'php_master';
$email = 'php@example.com';
$age = 30;
$isSubscribed = true;

echo "Username:{$username}<br>";
echo "Email: {$email}<br>";
echo "Age: {$age}<br>";
echo "Subscribed: " . ($isSubscribed ? 'Yes' : 'No') . "<br>";


## Exercise 9: Shopping Cart Total
// Create variables for item prices: `$item1 = 12.50`, `$item2 = 5.99`, `$item3 = 8.75`.

// Calculate the total cost and store it in `$total`.

// Output:  
// ```
// Total: $27.24
// ```

// ---

$item1 = 12.50;
$item2 = 5.99;
$item3 = 8.75;
$total = $item1 + $item2 + $item3;

echo "Total:$" . $total .'<br>';


## Exercise 10: Boolean Logic
// Create variables: `$isLoggedIn = true`, `$hasPermission = false`.

// Check if the user is logged in and has permission.

// Output:  
// ```
// Access granted
// ```
// or  
// ```
// Access denied
// ```

// ---


$isLoggedIn = true;
$hasPermission = false;

// echo($isLoggedIn && $hasPermission) ? 'Access Granted' : 'Access Denied' ;

if ($isLoggedIn && $hasPermission) {
    echo "Access Granted";
}
else{
    echo "Access Denied";
}

echo "<br>";
## Bonus Challenge: Dynamic Sentence
// Create variables: `$noun = "cat"`, `$verb = "jump"`, `$adverb = "quickly"`.

// Use them to form a sentence:  
// ```
// The cat jumps quickly!
// ```

// ---


$noun = "cat";
$verb = "jump";
$adverb = "quickly";

echo "The " . $noun . " " . $verb . "s " . $adverb . "!";


    ?>

</body>
</html>