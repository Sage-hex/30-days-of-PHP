<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise</title>
</head>
<body>
    <?php

    // Exercises User Define Functions

    // Exercise 1: Vat Calculator
    /**
     * Create two variable 'price' and 'vat', and create a function called 'çalucalteVat' that takes
     * two parameters, and returns a variable çalculatedPrice'. print out the price,vat  and total price.
     * 
     * expected output:
     * price is 'price', Vat is 'vat', and total price is 'calculatedVat'
     */

     $price = 100;
     $vat = 0.2;

     function calculateVat($price, $vat){

        $calculatedPrice = ($price * $vat) + $price;
        return $calculatedPrice;
     }

     $totalPrice = calculateVat($price, $vat);
     echo "Price is " . $price . ", Vat is " . $vat . ", and total price is " . $totalPrice;
    
    echo '<br>';

    //  Exercise 2: Leap Year
    /**
     * Create a variable 'year' and create  a function 'isLeapYear' that checks if the year is a leap year. If it is a leap year, return a Boolean value.In the exercise of the control structure, we discussed what a leap year is.
     * 
     * Expected output: 
     * ('Year' is a leap year)
     * ('Year is not a leap year')
     */
    
     

     function isLeapYear($year){

        if (($year % 400 === 0) || (($year % 100 !== 0) && ($year % 4 === 0))) {
            return true;
        }else{
            return false;
        }

     }
    
     $year = 2029;

     if(isLeapYear($year)) {
        echo "$year is a leap year";
     } else {
        echo "$year is not a leap year";
     }
    
     echo "<br>";
    
    //  Exercise 3:

    /**
     * Create two variables 'num1" and "num2" and create four functions "addNumbers", 'subtractNumbers', 'multiplyNumbers' and 'divide Numbers. The function accepts two parameters, and return the addition, subtraction, multiplicity or division of the two numbers.
        
     */
    
         
    //Expected output:

    // (Addition of nums' and 'numa' is 'addnumbers')
    // Subtraction of 'nums' and 'numa' is 'addnumbers') (Multiplicity of 'nums" and "numa' is 'addnumbers') (Division of hums' and 'numa' is 'addnumbers)
    
    $num1 = 10;
    $num2 = 15;

    function addNumbers($num1, $num2){
        return $num1 + $num2;
    }

    function subtractNumbers($num1, $num2){
        return $num1 - $num2;
    }
    function multiplyNumbers($num1, $num2){
        return $num1 * $num2;
    }
    function divideNumbers($num1, $num2){
        return $num1 / $num2;
    }

    echo "Addition of " . $num1 . " and " . $num2 . " is " . addNumbers($num1, $num2);

    echo "<br>";

    echo "Subtraction of " . $num1 . " and " . $num2 . " is " . subtractNumbers($num1, $num2);

    echo "<br>";

    echo "Multiplicity of " . $num1 . " and " . $num2 . " is " . multiplyNumbers($num1, $num2);

    echo "<br>";

    echo "Division of " . $num1 . " and " . $num2 . " is " . divideNumbers($num1, $num2);

    echo "<br>";
    
    // Exercise 4:

// Exercise 4: Swapping numbers
// Create a function 'swapNumbers that takes two parameters 'num1" and "num2", and inside the function swap the numbers. 
// 
// Expected output-
// (Before swapping num1 = 4, num2 = 8)
// (After swapping num1 =8, num2 = 4)
    

function swapNumbers($num1, $num2){
    $temp = $num1;
    $num1 = $num2;
    $num2 = $temp;

    echo "After swapping num 1 = " . $num1 . " num 2 = " . $num2;


}

swapNumbers($num1,$num2);
    
    
echo "<br>";

/**Exercise 5: Even or Odd
Create a function 'evenOrNot' that checks if a given number 'num1' is even or odd. Echo
the expected output

Expected output:
(Num1 is even)
(Num2 is odd)
*/

function evenOrNot($num1){
    if($num1 % 2 == 0){
        return true;
        
    }else{
        return false;
    }

    // Or 
    // return $num1 % 2 == 0;
}

if(evenOrNot($num1)){
    echo "$num1 is an even number";
}else{
    echo "$num1 is not an even number";
}




// Exercise 6: Prime number

/**Create a function 'isPrime' that checks if 'num1" is a prime number or not. Return true if it is a prime number and return false if it is not a prime number.

Expect output
(num1 is a prime number)
(num2 is not a prime number)
*/   
    ?>
</body>
</html>