<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    // Local and Global Variables
    /**
     * Local variables are variables that are declared within a function or a block of code. They are only accessible within that specific function or block and cannot be accessed from outside. Local variables are created when the function is called and destroyed when the function exits.
     * Global variables, on the other hand, are declared outside of any function and can be accessed from anywhere in the script. They have a global scope and retain their values throughout the entire script execution. To access a global variable inside a function, you need to use the `global` keyword to indicate that you want to use the global version of the variable.
     * 
     */

    // Example of local and global variables
    $x = 5; // Global variable

    function myFunction01() {
        $y = 10; // Local variable
        echo "The value of y is: " . $y . "<br>"; // This will work
    }

    myFunction(); // Call the function to see the local variable in action
    // echo "The value of y is: " . $y . "<br>"; // This will cause an error because $y is not accessible here

    // we can use a global scope inside a local scope by using the global keyword or by using the $GLOBALS array or by passing the variable as a parameter to the function.
    // The $GLOBALS array is a built-in PHP array that contains all global variables. You can access any global variable using this array, but it's generally better to use the `global` keyword for clarity and maintainability.
    // Example of using the global keyword to access a global variable inside a function
    // The global keyword allows you to access and modify global variables within a function's local scope. This is useful when you want to work with global variables without passing them as parameters or using the $GLOBALS array.
    // However, it's important to use global variables judiciously, as excessive use can lead to code that is difficult to understand and maintain.
    // Example of using the global keyword

    // The following example demonstrates how to declare a global variable and access it inside a function using the global keyword.
 
    $x = 10;

    function myFunction(){
        global $x; // Declare $x as global to access it inside the function
        echo "The value of x is: " . $x . "<br>";
    }
    
    myFunction(); // Call the function to see the global variable in action
    // The output will be "The value of x is: 10" because the function accesses the global variable $x.

    // Example of using the $GLOBALS array to access a global variable inside a function
    // The $GLOBALS array allows you to access global variables without declaring them as global inside the function. This can be useful in certain scenarios, but it's generally better to use the global keyword for clarity and maintainability.
    // Example of using the $GLOBALS array
    // The following example demonstrates how to access a global variable using the $GLOBALS array inside a function.

    $x = 20;

    function myFunction2(){
        echo "The value of x is: " . $GLOBALS['x'] . "<br>"; // Accessing the global variable using $GLOBALS array
    }

    myFunction2(); // Call the function to see the global variable in action
    // The output will be "The value of x is: 20" because the function accesses the global variable $x using the $GLOBALS array.
    // Example of passing a variable as a parameter to a function
    // You can also pass global variables as parameters to a function, which allows you to work with them without declaring them as global inside the function. This approach is often preferred for better code organization and maintainability.
    // Example of passing a variable as a parameter to a function
    // The following example demonstrates how to pass a global variable as a parameter to a function.

    $x = 30;

    function myFunction3($x){ // Accepting $x as a parameter
        echo "The value of x is: " . $x . "<br>"; // Using the parameter inside the function
    }

    myFunction3($x); // Call the function and pass the global variable as an argument
    // The output will be "The value of x is: 30" because the function uses the parameter $x, which is passed as an argument.

    // In summary, local variables are limited to the scope of the function or block in which they are declared, while global variables can be accessed from anywhere in the script. You can use the global keyword, the $GLOBALS array, or pass variables as parameters to work with global variables inside functions. Each approach has its own advantages and use cases, and it's important to choose the one that best fits your coding style and requirements.


    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    ?>
</body>
</html>