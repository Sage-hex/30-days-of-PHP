<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

// Constants in PHP are defined using the `define()` function. They are used to store values that should not change during the execution of a script. Constants can be accessed globally and are typically written in uppercase letters to distinguish them from variables. Unlike variables, constants do not require a dollar sign ($) prefix when being referenced.
// Constants are useful for defining configuration values, error messages, or any other values that should remain constant throughout the script. They help improve code readability and maintainability by providing meaningful names for fixed values.
// Constants can be defined using the `define()` function, and they can also be defined using the `const` keyword within a class or namespace. However, constants defined with `const` must have a value that is known at compile time, while `define()` allows for more flexibility in defining constant values.
// Example of defining a constant using the `define()` function


// define(ARGUMENT1, ARGUMENT2);
// Constants are always in uppercase letters and the name of the constant should be in uppercase letters. The first argument is the name of the constant and the second argument is the value of the constant. The value of the constant can be a string, integer, float, boolean, or array.
// The value of the constant cannot be changed once it is defined. Constants are case-sensitive by default, but you can make them case-insensitive by passing a third argument as true to the `define()` function. However, it's generally recommended to keep constants in uppercase for consistency and readability.
// Example of defining a constant using the `define()` function

define("COMPANY_NAME", "Tech Solutions Inc.");

echo COMPANY_NAME . "<br>"; // Output: Tech Solutions Inc.

// The constant COMPANY_NAME is defined with the value "Tech Solutions Inc." and can be accessed globally without the dollar sign ($) prefix.

// CONST
// Example of defining a constant using the `const` keyword

// The `const` keyword is used to define constants within a class or namespace. Constants defined with `const` must have a value that is known at compile time, and they cannot be changed after being defined. Unlike `define()`, the `const` keyword does not allow for dynamic values or expressions.
// Example of defining a constant using the `const` keyword

const COMPANY_ADDRESS = "123 Main St, Cityville, USA";
echo COMPANY_ADDRESS . "<br>"; // Output: 123 Main St, Cityville, USA

// The constant COMPANY_ADDRESS is defined with the value "123 Main St, Cityville, USA" and can be accessed globally without the dollar sign ($) prefix.
// Constants defined with `const` are also case-sensitive by default, and it's a good practice to keep them in uppercase for consistency and readability.
// Constants are useful for defining fixed values that should not change during the execution of a script, such as configuration settings, error messages, or any other values that need to remain constant throughout the codebase.
// They help improve code readability and maintainability by providing meaningful names for fixed values, making it easier to understand the purpose of the constant in the code.

// the key difference between define and const is that define can be used to define a constant outside a class or namespace while const can only be used to define a constant inside a class or namespace. Also, const must have a value that is known at compile time while define can have a value that is not known at compile time.
// In summary, constants are a powerful feature in PHP that allows you to define fixed values that should not change during the execution of a script. They help improve code readability and maintainability by providing meaningful names for fixed values, making it easier to understand the purpose of the constant in the code.


?>
</body>
</html>