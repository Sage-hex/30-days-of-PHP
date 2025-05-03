<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logical operator</title>
</head>
<body>
    
<?php

//  A control structure is a programming construct that allows you to control the flow of execution in your code based on certain conditions. In PHP, control structures include conditional statements (like if, else, and switch) and loops (like for, while, and foreach). These structures enable you to make decisions and repeat actions based on specific criteria.

// if statement
// The if statement is used to execute a block of code if a specified condition is true. It can be followed by an optional else statement to execute a different block of code if the condition is false.
// else statement
// The else statement is used in conjunction with the if statement to provide an alternative block of code that executes when the condition in the if statement is false.
// elseif statement
// The elseif statement allows you to check multiple conditions in a single if-else construct. It is used when you want to test additional conditions after the initial if statement.
// switch statement
// The switch statement is a control structure that allows you to execute different blocks of code based on the value of a variable or expression. It is often used as an alternative to multiple if-else statements when you have many conditions to check.


$age = 17;


if($age < 20){
    echo "sorry you are too young to enter the club <br>";
}else{
    echo "you are old enough to enter the club <br>";
}

// doing more than one condition
$age = 17;

if($age < 20){
    echo "sorry you are too young to enter the club <br>";
}else if ($age > 50){
    echo "sorry you are too old to enter the club <br>";
}
else if ($age > 18 && $age < 21){
    echo "sorry you are too young to enter the club <br>";
}
else if ($age > 30 && $age < 40){
    echo "sorry you are too old to enter the club <br>";
}
else{
    echo "you are old enough to enter the club <br>";
}


// switch statement





?>
</body>
</html>