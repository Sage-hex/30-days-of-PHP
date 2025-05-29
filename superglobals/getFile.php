<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$filePath = "uploads/testfile.txt"; // Path to the file you want to read

$output = file_get_contents($filePath);//reads everything in the file and returns it as a string
// The file_get_contents() function is used to read a file into a string


$ages = explode("\n", $output); // Split the string into an array using newline as the delimiter
// The explode() function is used to split a string into an array

$totalAge = 0; // Initialize a variable to store the total age
$i = 0; // Initialize a counter variable

foreach ($ages as $age){
    echo $age . "<br>"; // Output the age
    if (is_numeric($age)) { // Check if the value is numeric
        $totalAge = $totalAge + $age; // Add the age to the total
    }
    $i++; // Increment the counter
}
echo "The average age is: " . ($totalAge / $i); // Calculate and output the average age
// The average age is calculated by dividing the total age by the number of ages

// OR

foreach($ages as $age){
    echo $age . "<br>";
    // The foreach loop is used to iterate over each element in the array
    // The echo statement is used to output the value of the variable
    // The <br> tag is used to create a line break in HTML
    $totalAge += $age; // Add the age to the total
    $i++; // Increment the counter

    echo "The average age is: " . ($totalAge / $i) . "<br>"; // Calculate and output the average age
}

// foreach($ages as $age){
//     echo $age . "<br>";
//     // The foreach loop is used to iterate over each element in the array
//     // The echo statement is used to output the value of the variable
//     // The <br> tag is used to create a line break in HTML
// }






?>
</body>
</html>