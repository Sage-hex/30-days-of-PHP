<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Function
    // A function is a reusable block of code that performs a specific task. Functions allow you to organize your code into smaller, manageable pieces, making it easier to read, maintain, and debug. In PHP, functions can take input parameters and return output values.
    // Functions are defined using the function keyword, followed by the function name and parentheses. Inside the parentheses, you can specify parameters that the function can accept. The code inside the function is executed when the function is called.
    // Functions can also return values using the return statement, allowing you to pass data back to the calling code.
    // Functions can be defined in two ways: built-in functions and user-defined functions. Built-in functions are provided by PHP and cover a wide range of tasks, while user-defined functions are created by developers to encapsulate specific functionality.


    // Why use functions?
    // Functions are a fundamental concept in programming and are widely used in PHP to promote code reusability and modularity. (Reausability)
    // They help reduce code duplication and make it easier to manage complex applications by breaking them down into smaller, more manageable components.(Easy to manage and error detection)
    // Functions can also improve code readability and maintainability, as they allow you to give meaningful names to specific tasks or operations.(Easily maintained)
    
    // how to format a function
    // camelCase: myFunctionName()
    // snake_case: my_function_name()
    // PascalCase: MyFunctionName()
    // kebab-case: my-function-name()
    // The choice of naming convention depends on personal or team preferences, but consistency is key to maintaining readable code.

    // Example of a function

    function myFunction(){
        echo "Hello World! <br>";
        
    }
myFunction(); // Calling the function to execute its code

    // Function with arguments and parameters
    // A function can accept input values, known as arguments or parameters, which allow you to pass data into the function for processing. This makes functions more flexible and reusable, as they can operate on different inputs each time they are called.
    // Parameters are defined in the function declaration, while arguments are the actual values passed to the function when it is called.
    // Example of a function with parameters

    function calculator($num1,$num2){
        $sum = $num1 + $num2; // Adding the two numbers
        echo "The sum of $num1 and $num2 is: $sum <br>"; // Displaying the result
        // The function takes two parameters, $num1 and $num2, adds them together, and prints the result.

    }
    calculator(5,10); // Calling the function with arguments 5 and 10
    
    // seting default values for parameters
    // You can set default values for function parameters, which will be used if no arguments are provided when calling the function. This allows for more flexibility in function usage.
    // Example of a function with default parameter values

    function calculator2($num1, $num2 = 20){
        $sum = $num1 + $num2; // Adding the two numbers
        echo "The sum of $num1 and $num2 is: $sum <br>"; // Displaying the result
        // The function takes two parameters, $num1 and $num2, adds them together, and prints the result.
    }
    calculator2(5); // Calling the function with only one argument, using the default value for $num2
    

    // Function with return value
    // A function can return a value using the return statement. This allows you to pass data back to the calling code, making functions more versatile and useful for calculations or data processing.

    // Two ways an argument can be passed to a function: 
    // by value and by reference. 
    // When passing by value, a copy of the argument is made, and changes to the parameter inside the function do not affect the original variable. 
    // When passing by reference, a reference to the original variable is passed, allowing changes made inside the function to affect the original variable.

    // pass by value

    $num1 = 10;
    $num2 = 15;
    function add($num1, $num2){
        $result = $num1 + $num2;
        return $result; // Returning the sum of the two numbers 
    }

    echo "The sum of $num1 and $num2 is: " .  add($num1,$num2) . " <br>"; // Displaying the result

    echo '<br>';

    // pass by reference
    // whenever you use the pass by reference the original variable will be changed.
    // The function takes two parameters, $num1 and $num2, adds them together, and returns the result.
    // The result is then printed outside the function.

     $x = 10;

     function addByValue($x){
        $x += 5; // Adding 5 to the parameter
        return $x; // Returning the modified value
    }

    function addByReference(&$x){
        $x += 10; // Adding 5 to the parameter
        return $x; // Returning the modified value
    }
    
    addByValue($x); // Calling the function with pass by value
    echo "The value of x after pass by value is: $x <br>"; // Displaying the original value of $x
    
    echo "<br>";
    addByReference($x); // Calling the function with pass by reference
    echo "The value of x after pass by reference is: $x <br>"; // Displaying the modified value of $x
    
    
    
    
    
    ?>
</body>
</html>