
# PHP Type & Data Handling Exercises

## Exercise 1: Type Checking
```php
<?php
// Exercise 1: Type Checking
$var1 = 42;
$var2 = "42";
$var3 = 3.14;
$var4 = true;
$var5 = null;

// Use gettype() or is_* functions to check types:
echo gettype($var1) . "\n"; // Should output "integer"
// Check the types of $var2 to $var5 below:
?>
```

---

## Exercise 2: Type Conversion
```php
<?php
// Exercise 2: Type Conversion
$numberStr = "123";
$floatStr = "45.67";
$isTrue = "1";

// Convert variables explicitly:
$integer = (int)$numberStr; // Convert to integer
// Convert $floatStr to float and $isTrue to boolean
?>
```

---

## Exercise 3: String Manipulation
```php
<?php
// Exercise 3: String Manipulation
$text = "  Hello, PHP!  ";

// Trim whitespace, reverse the string, and convert to uppercase:
$trimmed = trim($text);
$reversed = strrev($trimmed);
$uppercase = strtoupper($trimmed);

echo $trimmed . "\n"; // "Hello, PHP!"
// Output $reversed and $uppercase
?>
```

---

## Exercise 4: Array Operations
```php
<?php
// Exercise 4: Array Operations
$fruits = ["apple", "banana"];

// Add "cherry" to the end of the array
// Remove the first element ("apple")
// Check if "banana" exists in the array
?>
```

---

## Exercise 5: Boolean Logic
```php
<?php
// Exercise 5: Boolean Logic
$isLoggedIn = true;
$hasPermission = 0; // 0 is falsy in PHP

// Check if both are truthy (output "Access granted" or "denied")
?>
```

---

## Exercise 6: Null Handling
```php
<?php
// Exercise 6: Null Handling
$user = null;

// If $user is null, output "Guest", else output $user
// Use the null coalescing operator (??)
?>
```

---

## Exercise 7: Mixed Type Challenge
```php
<?php
// Exercise 7: Mixed Type Challenge
$input1 = "5";
$input2 = 10;

// Add $input1 and $input2 as integers (result: 15)
// Concatenate them as strings (result: "510")
?>
```

---

## Exercise 8: Type Juggling
```php
<?php
// Exercise 8: Type Juggling
$a = "10";
$b = 5;

// Let PHP auto-convert and calculate $a + $b
// Output the result and its type
?>
```

---

## Exercise 9: Constants
```php
<?php
// Exercise 9: Constants
define("PI", 3.14159);
// Define a constant "GREETING" with value "Hello, World!"
// Check if PI is a constant and output its value
?>
```

---

## Exercise 10: Advanced Array
```php
<?php
// Exercise 10: Advanced Array
$users = [
  ["name" => "Alice", "age" => 25],
  ["name" => "Bob", "age" => 30]
];

// Add a new user ["name" => "Charlie", "age" => 35]
// Output the age of the second user (Bob)
?>
```

---

## Bonus Challenge: Regular Expressions
```php
<?php
// Bonus: Regular Expressions
$email = "test@example.com";

// Validate if $email is a valid format using preg_match()
// Hint: Use a regex pattern like /^\S+@\S+\.\S+$/
?>
```
