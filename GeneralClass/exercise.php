<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    // Exercise 1: personal information
    // Create two variables ("x", "y") add them, and multiply it by 5. assign the output to a new variable "z".
    // (expected output -> the total is $z)
    
    $x = 8;
    $y = 7;

    $z = ($x + $y) * 5;
    echo "The total is: $z <br>";

    // Exercise 2: Value added tax (VAT)
    // Create a variable "price" and assign a value to it. Calculate the VAT (20%) and add it to the price. Assign the result to a new variable "totalPrice".
    // (expected output -> the total price is $totalPrice)

    $price = 100 ;
    $vat = 0.20;
    $totalPrice = $price + ($price * $vat);
    echo "Price: {$price} <br>";
    echo "VAT: {$vat} <br>";
    echo "Total Price: {$totalPrice} <br>";

    // Exercise 3: Average
    // Create three variables 'x', 'y', and 'z' and calculate the average of these three numbers and print it out on the screen. be aware that the average is a decimal number so juse a function number_format() to format the output.
    // (expected output -> the average is $average)

    $x = 4;
    $y = 9;
    $z = 4;
    
    $average = ($x + $y + $z) / 3;
    echo $average . "<br>";
    echo "The average is: " . number_format($average, 2, ",", " ") . "<br>";

    // Exercise 4: Country and capital
    // Create an array "countires" that displays 5 countries and the corresponding capital cities.

    $countries = array("Netherlands" =>"Amsterdam", "Germany" => "Berlin", "Thailand" => "Bangkok", "Denmark" => "Copenhagen", "Canada" => "Toronto");

    foreach ($countries as $key => $value){
        echo "The capital of " . $key . " is " . $value;
        echo "<br>";
    }

    //Exercise 5: Centimeteres to inches
    // Create and interger 'cmToInch' that converts a number of centimeteres 'cm' to inches 'inch'
    // (tip: 1 centimeters is equivalent to 0.39 inch)
    // Expexted result => (cm)centimeters is (inch) inches

    $cm = 150;

    $cmToInch = $cm * 0.39;
    echo $cm . " centimeters is " . $cmToInch . " inches";

    echo "<br>";
    // Exercise 6: Expenses
    // Create an array 'expenses' with your biggest expenses of the month. loop through the array and add the expenses in an interger 'totalAmount'. Finally, display the total expenses that you had  and the amou8nt of values 'amountOfExpenses' you had stored inside of your array.

    $expenses = array(20000,185000,200000,10000);
    $totalAmount = 0;
    $amountOFExpenses = 0;


    // foreach($expenses as $expense){
    //     $totalAmount = $expense + $totalAmount;
    //     $amountOFExpenses = $amountOFExpenses + 2;

    // }


    // echo "My " . $amountOFExpenses . " biggest expenses were " . $totalAmount;

foreach($expenses as $expense){
    $totalAmount = $totalAmount + $expense;
    $amountOFExpenses++;
}

echo "My " . $amountOFExpenses . " biggest expenses this months is " . $totalAmount;
echo "<br>";


// Exercise 7: Weather condition
// Create an array 'weather' of weather conditions with the following values: rain,sunshine,clouds,hail,sleet,snow,wind. using the array variable for all the weather conditions, echo the following statements to the browser

// We've seen all kinds of weather this month. At the beginning of the month, we had snow and wind. Then came sunshine with a few clouds and some rain. At least we didn't get hail or sleet


$weather = array("rain","sunshine","clouds", "hail","sleet","snow","wind");

echo "We've seen all kinds of weather this month. At the beginning of the month, we had {$weather[5]} and {$weather[6]}. Then came {$weather[1]}  with a few {$weather[2]} and some {$weather[0]}. At least we didn't get {$weather[3]} or {$weather[4]}";
echo "<br>";	


$x = 5;
$y = 10;

if($x > 0){
    echo $x . ' is a positive number';
}else{
    echo $x . ' is a negative number';
}

echo "<br>";
if (!($x > 0)) {
    echo "$x is not a positive number"; // Output: 5 is not a positive number
} else {
    echo "$x is a positive number";
}


?>
</body>
</html>