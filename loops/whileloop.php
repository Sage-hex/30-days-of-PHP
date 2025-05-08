<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>while lopp</title>
</head>
<body>
    <?php
    
    // While loop
    // The while loop is a control structure that allows you to repeatedly execute a block of code as long as a specified condition is true. It is commonly used for tasks that require iteration until a certain condition is met.
    // The while loop checks the condition before each iteration, and if the condition evaluates to true, the code inside the loop is executed. This process continues until the condition becomes false.
    // It is important to ensure that the condition will eventually become false; otherwise, the loop will run indefinitely, leading to an infinite loop.

    // Example of while loop
    // The following example demonstrates a simple while loop that counts from 1 to 10 and prints the numbers.
    // The loop continues until the variable $x reaches 10, at which point the condition becomes false, and the loop terminates.
    // The while loop is useful for scenarios where the number of iterations is not known in advance and depends on a specific condition.

    // In this example, the loop starts with $x initialized to 1 and increments it by 1 in each iteration until it reaches 10.
    // The output will be the numbers from 1 to 10 printed on separate lines.
    $x = 1;

    while ($x <= 10){
        echo $x . "<br>";
        $x++;
    }
    

   

    //  The break statement is used to exit a loop prematurely, regardless of the loop's condition. It can be used in any type of loop (for, while, do while) and is often employed when a specific condition is met that requires breaking out of the loop.
    // The continue statement is used to skip the current iteration of a loop and move to the next iteration. It can also be used in any type of loop and is useful when you want to skip certain conditions without terminating the entire loop.
    // The continue statement allows you to control the flow of the loop by skipping specific iterations based on certain conditions.
    // The break and continue statements are powerful tools for managing loop behavior and can help improve code efficiency and readability.
    ?>

</body>
</html>