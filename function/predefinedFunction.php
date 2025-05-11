<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    // Predefine Functions
    // Predefined functions are built-in functions that are provided by the programming language itself. These functions are ready to use and can be called directly in your code without needing to define them yourself. Predefined functions cover a wide range of tasks, such as string manipulation, mathematical calculations, date and time handling, and more.
    // They are part of the standard library of the language and are designed to simplify common programming tasks.
    // Examples of predefined functions in PHP include `strlen()`, `array_push()`, `date()`, and many others. These functions are well-documented and can be used to perform specific operations without the need for custom implementation.
    // Predefined functions are typically optimized for performance and reliability, making them a valuable resource for developers. They help reduce code duplication and improve code readability by providing a consistent way to perform common operations.
    // By using predefined functions, developers can focus on higher-level logic and application design rather than reinventing the wheel for common tasks.
    // Predefined functions are an essential part of programming languages, providing a rich set of tools to simplify development and enhance code quality.
    // They are widely used in PHP and other languages to streamline development processes and improve code maintainability.

    // MATH FUNCTIONS
    // Math functions are built-in functions in PHP that perform various mathematical operations. These functions are part of the standard library and provide a convenient way to perform calculations without needing to implement complex algorithms manually. Math functions cover a wide range of operations, including basic arithmetic, trigonometry, logarithms, and more.
    // They are optimized for performance and reliability, making them a valuable resource for developers. Math functions help simplify code and improve readability by providing a consistent way to perform mathematical operations. By using math functions, developers can focus on higher-level logic and application design rather than reinventing the wheel for common calculations.

    // Ceiling and Floor Functions
    // The `ceil()` function rounds a number up to the nearest integer, while the `floor()` function rounds a number down to the nearest integer. These functions are useful for controlling the precision of numerical values in calculations.
    // The `ceil()` function is often used when you want to ensure that a value is rounded up, regardless of its decimal part. For example, if you have a price that needs to be rounded up to the nearest whole number for billing purposes, you can use `ceil()` to achieve that.

    // Example of using ceil() function
    $number1 = 4.3;
    $roundedUp = ceil($number1); // Rounds up to 5
    echo "The ceiling of $number1 is: $roundedUp <br>"; // Output: The ceiling of 4.3 is: 5

    $number2 = 0.50;
    $roundedUp2 = ceil($number2); // Rounds up to 1
    echo "The ceiling of $number2 is: $roundedUp2 <br>"; // Output: The ceiling of 0.50 is: 1

    // Floor Function
    // The `floor()` function is often used when you want to ensure that a value is rounded down, regardless of its decimal part. For example, if you have a price that needs to be rounded down to the nearest whole number for billing purposes, you can use `floor()` to achieve that.
    
    // Example of using floor() function

    $number3 = 4.3;
    $roundedDown = floor($number3); // Rounds down to 4
    echo "The floor of $number3 is: $roundedDown <br>"; // Output: The floor of 4.3 is: 4

    $number4 = 0.50;
    $roundedDown2 = floor($number4); // Rounds down to 0
    echo "The floor of $number4 is: $roundedDown2 <br>"; // Output: The floor of 0.50 is: 0
    // The `floor()` function is useful for controlling the precision of numerical values in calculations, especially when you need to ensure that a value is rounded down to the nearest whole number.
    // It can be used in various scenarios, such as billing calculations, inventory management, and more.
    // The `ceil()` and `floor()` functions are part of the standard library in PHP and are widely used in various applications to handle numerical values effectively. They help simplify code and improve readability by providing a consistent way to perform rounding operations.


    // round() function
    // The `round()` function is a built-in PHP function that rounds a floating-point number to the nearest integer. It can also round to a specified number of decimal places if desired. The `round()` function is useful for controlling the precision of numerical values in calculations, especially when you need to display or store rounded values.
    // The `round()` function takes two arguments: the number to be rounded and an optional precision parameter that specifies the number of decimal places to round to. If the precision parameter is not provided, the function rounds to the nearest integer.

    // Example of using round() function

    $number5 = 4.3565;
    $roundedNumber = round($number5, 2); // Rounds to 2 decimal places
    echo "The rounded number of $number5 is: $roundedNumber <br>"; // Output: The rounded number is: 4.36


    // Exponential Function
    // The `exp()` function is a built-in PHP function that calculates the exponential value of a number. It raises the mathematical constant e (approximately 2.71828) to the power of the given number. The `exp()` function is useful for performing calculations involving exponential growth or decay, such as in finance, physics, and other scientific applications.
    // The `exp()` function takes a single argument, which is the exponent to which e is raised. It returns the result of the calculation as a floating-point number.
    
    // Example of using exp() function
    $exponent = 5;

    $exponentialValue = exp($exponent); // Calculates e^2
    echo "The exponential value of e raised to the power of $exponent is: $exponentialValue <br>"; // Output: The exponential value of e raised to the power of 2 is: 7.38905609893065
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    ?>
</body>
</html>