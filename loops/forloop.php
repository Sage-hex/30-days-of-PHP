<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>while lopp</title>
</head>
<body>
    <?php
    
// For loop
// the for looop jhas three parts: initialization, condition, and increment/decrement. It is commonly used when the number of iterations is known in advance or when you need to iterate over a specific range of values.
// The for loop is a powerful control structure that allows you to execute a block of code a specific number of times or iterate over a range of values. It is particularly useful when you know the exact number of iterations required or when you need to perform repetitive tasks with a defined starting and ending point.
// The for loop consists of three main components: initialization, condition, and increment/decrement. The initialization sets the starting value, the condition determines when the loop should continue executing, and the increment/decrement updates the loop variable after each iteration. This structure makes it easy to control the flow of execution and manage the number of iterations effectively.
// The for loop is often used in scenarios where you need to iterate over arrays, perform calculations, or execute a block of code a specific number of times. It provides a concise and efficient way to handle repetitive tasks in your code.
// Example of for loop

/* for ( initialization; condition; counter /*(increment/decrement)) {
    // code to be executed
    //The initailization part is executed once at the beginning of the loop. It is typically used to declare and initialize the loop variable.
    // The condition part is evaluated before each iteration. If the condition is true, the loop body is executed. If it is false, the loop terminates.
    // The increment/decrement part is executed after each iteration. It is used to update the loop variable, allowing the loop to progress towards its termination condition.
    // The loop continues until the condition becomes false.
    // The for loop is a powerful control structure that allows you to execute a block of code a specific number of times or iterate over a range of values. It is particularly useful when you know the exact number of iterations required or when you need to perform repetitive tasks with a defined starting and ending point. 


}; **/

for($x = 1; $x <= 10; $x++){
    echo "The number is " . $x . "<br>";
    // The loop starts with $x initialized to 1 and increments it by 1 in each iteration until it reaches 10.
    // The output will be the numbers from 1 to 10 printed on separate lines.
    
}



// exercise 

/** Going to the bank on the 1st of january
 * Want to deposit 1000 dolars
 * interest rate 5%
 * Withdraw it after 5 years
*/


//Solution

$deposit = 1000;
$interest = 0.5;
for($years = 1; $years <= 5; $years++){
    $deposit += $deposit * $interest; // compound interest formula
    echo "The total amount after " . $years . " year is: " . $deposit . "<br>";
    // The loop starts with a deposit of 1000 and calculates the new deposit amount after each year using the compound interest formula.
    // The output will show the deposit amount at the end of each year for 5 years.
}
    ?>

</body>
</html>