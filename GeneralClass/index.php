<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php

// PHP is a server-side scripting language designed primarily for web development but also used as a general-purpose programming language.
// PHP is a recursive acronym for "PHP: Hypertext Preprocessor".
// PHP was created by Danish-Canadian programmer Rasmus Lerdorf in 1993. It was originally an abbreviation of Personal Home Page, but it now stands for the recursive initialism PHP: Hypertext Preprocessor.
// PHP code is usually processed on a web server by a PHP interpreter implemented as a module, a daemon, or as a standalone binary. On a web server, the result of the parsed and evaluated PHP code which may be any type of data, such as generated HTML or binary image data, would form the whole or part of an HTTP response. Various web template systems, web content management systems, and web frameworks exist which can be employed to orchestrate or facilitate the generation of that response.
// PHP can also be used from a command line interface (CLI) and in standalone graphical applications.
// PHP is free software released under the PHP License, which is a free software license. The PHP reference implementation is now produced by The PHP Group.
/*
    // Interger = numeric value
    $int = 10; // 10 is an integer
    // String = text value
    $string = "Hello"; // Hello is a string
    // Floating point or float = decimal value
    $float = 10.5; // 10.5 is a float
    // Boolean = true or false value
    $bool = true; // true is a boolean
    // Array = collection of values
    $array = array(1, 2, 3); // array(1, 2, 3) is an array
    // Object = instance of a class
    class MyClass {
        public $property = "Hello";
    }
    $object = new MyClass(); // new MyClass() is an object
    // Null = no value  
    $null = null; // null is a null value
    // Resource = reference to an external resource
    $resource = fopen("file.txt", "r"); // fopen("file.txt", "r") is a resource
    // Constant = fixed value that cannot be changed
    define("PI", 3.14); // PI is a constant with a value of 3.14
    // Variable = a container for storing data values
    $variable = "Hello"; // $variable is a variable with a value of "Hello"
    // String concatenation = joining two strings together
    $string1 = "Hello";
    $string2 = "World"; // $string1 and $string2 are strings
    $concatenated = $string1 . " " . $string2; // $concatenated is a string with a value of "Hello World"
    // String interpolation = embedding variables in a string
    $name = "John";
    $greeting = "Hello, $name"; // $greeting is a string with a value of "Hello, John"
    // String length = number of characters in a string
    $string = "Hello"; // $string is a string with a value of "Hello"   
    $length = strlen($string); // $length is an integer with a value of 5
    // String position = position of a substring in a string
    $string = "Hello, World!"; // $string is a string with a value of "Hello, World!"
    $position = strpos($string, "World"); // $position is an integer with a value of 7
    // String replacement = replacing a substring with another string
    $string = "Hello, World!"; // $string is a string with a value of "Hello, World!"
    $replaced = str_replace("World", "PHP", $string); // $replaced is a string with a value of "Hello, PHP!"
    // String comparison = comparing two strings
    $string1 = "Hello"; // $string1 is a string with a value of "Hello"
    $string2 = "World"; // $string2 is a string with a value of "World"
    if ($string1 == $string2) { // comparing $string1 and $string2
        echo "Strings are equal"; // if they are equal, this will be printed
    } else {
        echo "Strings are not equal"; // if they are not equal, this will be printed
    }
    // String to integer conversion = converting a string to an integer
    $string = "10"; // $string is a string with a value of "10"
    $integer = (int)$string; // $integer is an integer with a value of 10
    // String to float conversion = converting a string to a float
    $string = "10.5"; // $string is a string with a value of "10.5"
    $float = (float)$string; // $float is a float with a value of 10.5
    // String to boolean conversion = converting a string to a boolean
    $string = "true"; // $string is a string with a value of "true"
    $boolean = (bool)$string; // $boolean is a boolean with a value of true
    // String to array conversion = converting a string to an array
    $string = "1,2,3"; // $string is a string with a value of "1,2,3"
    $array = explode(",", $string); // $array is an array with values 1, 2, 3
    // Array to string conversion = converting an array to a string
    $array = array(1, 2, 3); // $array is an array with values 1, 2, 3
    $string = implode(",", $array); // $string is a string with a value of "1,2,3"
    // Array length = number of elements in an array
    $array = array(1, 2, 3); // $array is an array with values 1, 2, 3
    $length = count($array); // $length is an integer with a value of 3
    // Array position = position of an element in an array
    $array = array(1, 2, 3); // $array is an array with values 1, 2, 3
    $position = array_search(2, $array); // $position is an integer with a value of 1
    // Array replacement = replacing an element in an array
    $array = array(1, 2, 3); // $array is an array with values 1, 2, 3
    $array[1] = 4; // replacing the second element with 4
    // $array is now array(1, 4, 3)
    // Array comparison = comparing two arrays
    $array1 = array(1, 2, 3); // $array1 is an array with values 1, 2, 3
    $array2 = array(1, 2, 3); // $array2 is an array with values 1, 2, 3
    if ($array1 == $array2) { // comparing $array1 and $array2
        echo "Arrays are equal"; // if they are equal, this will be printed
    } else {
        echo "Arrays are not equal"; // if they are not equal, this will be printed
    }
    // Array to string conversion = converting an array to a string
    $array = array(1, 2, 3); // $array is an array with values 1, 2, 3
    $string = implode(",", $array); // $string is a string with a value of "1,2,3"
    // Array to integer conversion = converting an array to an integer
    $array = array(1, 2, 3); // $array is an array with values 1, 2, 3
    $integer = (int)$array[0]; // $integer is an integer with a value of 1
    // Array to float conversion = converting an array to a float
    $array = array(1, 2, 3); // $array is an array with values 1, 2, 3
    $float = (float)$array[0]; // $float is a float with a value of 1.0
    // Array to boolean conversion = converting an array to a boolean
    $array = array(1, 2, 3); // $array is an array with values 1, 2, 3
    $boolean = (bool)$array; // $boolean is a boolean with a value of true
    // Array to object conversion = converting an array to an object
    $array = array(1, 2, 3); // $array is an array with values 1, 2, 3
    $object = (object)$array; // $object is an object with properties 0, 1, 2
    // Array to null conversion = converting an array to null
    $array = array(1, 2, 3); // $array is an array with values 1, 2, 3
    // $null = (null)$array; // $null is a null value
    // Array to resource conversion = converting an array to a resource
    $array = array(1, 2, 3); // $array is an array with values 1, 2, 3
    $resource = fopen("file.txt", "w"); // $resource is a resource
    fwrite($resource, implode(",", $array)); // writing the array to a file
    fclose($resource); // closing the resource
    // Array to constant conversion = converting an array to a constant
    $array = array(1, 2, 3); // $array is an array with values 1, 2, 3
    define("MY_ARRAY", $array); // MY_ARRAY is a constant with a value of array(1, 2, 3)
    // Array to variable conversion = converting an array to a variable
    $array = array(1, 2, 3); // $array is an array with values 1, 2, 3
    $variable = $array; // $variable is a variable with a value of array(1, 2, 3)
    // Array to string concatenation = converting an array to a string concatenation
    $array = array(1, 2, 3); // $array is an array with values 1, 2, 3
    $string = implode(",", $array); // $string is a string with a value of "1,2,3"
    // Array to string interpolation = converting an array to a string interpolation
    $array = array(1, 2, 3); // $array is an array with values 1, 2, 3
    $string = "Array: " . implode(",", $array); // $string is a string with a value of "Array: 1,2,3"
    // Array to string length = converting an array to a string length
    $array = array(1, 2, 3); // $array is an array with values 1, 2, 3
    $length = count($array); // $length is an integer with a value of 3
    // Array to string position = converting an array to a string position
    $array = array(1, 2, 3); // $array is an array with values 1, 2, 3
    $position = array_search(2, $array); // $position is an integer with a value of 1
    // Array to string replacement = converting an array to a string replacement
    $array = array(1, 2, 3); // $array is an array with values 1, 2, 3
    $array[1] = 4; // replacing the second element with 4
    // $array is now array(1, 4, 3)
    // Array to string comparison = converting an array to a string comparison
    $array1 = array(1, 2, 3); // $array1 is an array with values 1, 2, 3
    $array2 = array(1, 2, 3); // $array2 is an array with values 1, 2, 3
    if ($array1 == $array2) { // comparing $array1 and $array2
        echo "Arrays are equal"; // if they are equal, this will be printed
    } else {
        echo "Arrays are not equal"; // if they are not equal, this will be printed
    }
    // Array to string to integer conversion = converting an array to a string to an integer
    $array = array(1, 2, 3); // $array is an array with values 1, 2, 3
    $string = implode(",", $array); // $string is a string with a value of "1,2,3"
    $integer = (int)$string; // $integer is an integer with a value of 1
    // Array to string to float conversion = converting an array to a string to a float
    $array = array(1, 2, 3); // $array is an array with values 1, 2, 3
    $string = implode(",", $array); // $string is a string with a value of "1,2,3"
    $float = (float)$string; // $float is a float with a value of 1.0
    // Array to string to boolean conversion = converting an array to a string to a boolean
    $array = array(1, 2, 3); // $array is an array with values 1, 2, 3
    $string = implode(",", $array); // $string is a string with a value of "1,2,3"
    $boolean = (bool)$string; // $boolean is a boolean with a value of true
    // Array to string to object conversion = converting an array to a string to an object
    $array = array(1, 2, 3); // $array is an array with values 1, 2, 3
    $string = implode(",", $array); // $string is a string with a value of "1,2,3"
    $object = (object)$string; // $object is an object with properties 0, 1, 2
    // Array to string to null conversion = converting an array to a string to null
    $array = array(1, 2, 3); // $array is an array with values 1, 2, 3
    $string = implode(",", $array); // $string is a string with a value of "1,2,3"
    $null = (null)$string; // $null is a null value
    // Array to string to resource conversion = converting an array to a string to a resource
    $array = array(1, 2, 3); // $array is an array with values 1, 2, 3
    $string = implode(",", $array); // $string is a string with a value of "1,2,3"
    $resource = fopen("file.txt", "w"); // $resource is a resource
    fwrite($resource, $string); // writing the string to a file
    fclose($resource); // closing the resource
   **/ 



    // echo nl2br("Php is life and \r\n I'm happy");
    $name = "Womble";
    echo "my name is {$name}";
    echo "<br>";
    $age = 20;
    echo "my name is {$name} and I'm {$age} years old";
    echo "<br>";
    $is_allowed = true;
    echo $is_allowed;
    echo "<br>";

    // Null value
    $x = "Hello world!";
    $x = null; // $x is a variable with a value of null
    echo $x; // $x is null, so nothing will be printed
    

    // Array
    $arr = array("apple", "banana", "cherry"); // $arr is an array with values "apple", "banana", "cherry"

    echo $arr[0]; // $arr[0] is "apple", so "apple" will be printed

    // VAR_DUMP
    // var_dump() is a built-in PHP function that displays structured information (type and value) about one or more variables.
    echo var_dump($arr); // $arr is an array, so it will be printed as an array

    // ASSOCIATE ARRAY
    // Associative arrays are arrays that use named keys that you assign to them.
    // An associative array is an array where each key is associated with a value.
    $assoc_arr = array("name" => "John", "age" => 30, "city" => "New York"); // $assoc_arr is an associative array with keys "name", "age", "city"
    echo $assoc_arr["name"]; // $assoc_arr["name"] is "John", so "John" will be printed
    echo "<br>";
    // echo var_dump($x); // $x is null, so nothing will be printed



    ?>
</body>
</html>