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
    
    
    
    
    
    
    
    
    
    ?>
</body>
</html>