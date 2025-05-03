<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>while lopp</title>
</head>
<body>
    <?php
    


    // Do while loop, First do, then while

    // The do while loop is similar to the while loop, but it guarantees that the code block will be executed
    // at least once, even if the condition is false initially. This is because the condition is checked after the code block has been executed.
    // The do while loop is useful when you want to ensure that a certain action is performed at least once before checking the condition.

    // Example of do while loop
    // The following example demonstrates a simple do while loop that counts from 1 to 5 and prints the message "I love cookies" for each iteration.
    // The loop continues until the variable $cookies reaches 5, at which point the condition becomes false, and the loop terminates.
    // The output will be the message "I love cookies" printed five times.

     // In this example, the loop starts with $cookies initialized to 1 and increments it by 1 in each iteration until it reaches 5.
     // The output will be the message "I love cookies" printed five times.
    $cookies = 1;
     do{
        echo "i love cookies <br>";
        $cookies++;
     }
     while ($cookies <= 5);
    
     
// Example 2 of do while loop


     $sweet = 1;
     do{
        echo "i love sweet <br>";
        // 
        $sweet += 2;
     }
     while ($sweet <= 10);


     /**Explanation of the code:
    The code initializes a variable $sweet to 1 and enters a do while loop.
    Inside the loop, it prints "I love sweet" and increments $sweet by 2 in each iteration.
    The loop continues until $sweet is greater than 10.
    As a result, the output will be "I love sweet" printed five times, with $sweet taking values 1, 3, 5, 7, and 9 in each iteration.
    The loop terminates when $sweet becomes 11, which is greater than 10.
    The do while loop ensures that the code block is executed at least once, even if the condition is false initially.
    In this case, the loop will always execute at least once, regardless of the initial value of $sweet.
    The do while loop is useful when you want to ensure that a certain action is performed at least once before checking the condition.
       
    
The result of this code will be that "i love sweet" will be printed 5 times.
Here's why:

First, we set $sweet = 1
The do-while loop will always run at least once
Each time through the loop:

"i love sweet" is printed
2 is added to $sweet


The loop continues as long as $sweet is less than or equal to 10

Let's trace through the values:

Start: $sweet = 1 → print → $sweet = 3
Loop 2: $sweet = 3 → print → $sweet = 5
Loop 3: $sweet = 5 → print → $sweet = 7
Loop 4: $sweet = 7 → print → $sweet = 9
Loop 5: $sweet = 9 → print → $sweet = 11
Now $sweet = 11, which is greater than 10, so the loop stops
    
    
    
    
    */




?>

     ?>

</body>
</html>