<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    // Predefine Functions
    // Predefined functions are built-in functions that are provided by the programming language itself. These functions are ready to use and can be called directly in your code without needing to define them yourself. Predefined functions cover a wide range of tasks, such as string manipulation, mathematical calculations, date and time handling, and more.
    // They are part of the standard library of the language and are designed to simplify common programming tasks.
    // Examples of predefined functions in PHP include `strlen()`, `array_push()`, `date()`, and many others. These functions are well-documented and can be used to perform specific operations without the need for custom implementation.
    // Predefined functions are typically optimized for performance and reliability, making them a valuable resource for developers. They help reduce code duplication and improve code readability by providing a consistent way to perform common operations.
    // By using predefined functions, developers can focus on higher-level logic and application design rather than reinventing the wheel for common tasks.
    // Predefined functions are an essential part of programming languages, providing a rich set of tools to simplify development and enhance code quality.
    // They are widely used in PHP and other languages to streamline development processes and improve code maintainability.

    // MATH FUNCTIONS
    // Math functions are built-in functions in PHP that perform various mathematical operations. These functions are part of the standard library and provide a convenient way to perform calculations without needing to implement complex algorithms manually. Math functions cover a wide range of operations, including basic arithmetic, trigonometry, logarithms, and more.
    // They are optimized for performance and reliability, making them a valuable resource for developers. Math functions help simplify code and improve readability by providing a consistent way to perform mathematical operations. By using math functions, developers can focus on higher-level logic and application design rather than reinventing the wheel for common calculations.

    // Ceiling and Floor Functions
    // The `ceil()` function rounds a number up to the nearest integer, while the `floor()` function rounds a number down to the nearest integer. These functions are useful for controlling the precision of numerical values in calculations.
    // The `ceil()` function is often used when you want to ensure that a value is rounded up, regardless of its decimal part. For example, if you have a price that needs to be rounded up to the nearest whole number for billing purposes, you can use `ceil()` to achieve that.

    // Example of using ceil() function
    $number1 = 4.3;
    $roundedUp = ceil($number1); // Rounds up to 5
    echo "The ceiling of $number1 is: $roundedUp <br>"; // Output: The ceiling of 4.3 is: 5

    $number2 = 0.50;
    $roundedUp2 = ceil($number2); // Rounds up to 1
    echo "The ceiling of $number2 is: $roundedUp2 <br>"; // Output: The ceiling of 0.50 is: 1

    // Floor Function
    // The `floor()` function is often used when you want to ensure that a value is rounded down, regardless of its decimal part. For example, if you have a price that needs to be rounded down to the nearest whole number for billing purposes, you can use `floor()` to achieve that.
    
    // Example of using floor() function

    $number3 = 4.3;
    $roundedDown = floor($number3); // Rounds down to 4
    echo "The floor of $number3 is: $roundedDown <br>"; // Output: The floor of 4.3 is: 4

    $number4 = 0.50;
    $roundedDown2 = floor($number4); // Rounds down to 0
    echo "The floor of $number4 is: $roundedDown2 <br>"; // Output: The floor of 0.50 is: 0
    // The `floor()` function is useful for controlling the precision of numerical values in calculations, especially when you need to ensure that a value is rounded down to the nearest whole number.
    // It can be used in various scenarios, such as billing calculations, inventory management, and more.
    // The `ceil()` and `floor()` functions are part of the standard library in PHP and are widely used in various applications to handle numerical values effectively. They help simplify code and improve readability by providing a consistent way to perform rounding operations.


    // round() function
    // The `round()` function is a built-in PHP function that rounds a floating-point number to the nearest integer. It can also round to a specified number of decimal places if desired. The `round()` function is useful for controlling the precision of numerical values in calculations, especially when you need to display or store rounded values.
    // The `round()` function takes two arguments: the number to be rounded and an optional precision parameter that specifies the number of decimal places to round to. If the precision parameter is not provided, the function rounds to the nearest integer.

    // Example of using round() function

    $number5 = 4.3565;
    $roundedNumber = round($number5, 2); // Rounds to 2 decimal places
    echo "The rounded number of $number5 is: $roundedNumber <br>"; // Output: The rounded number is: 4.36


    // Exponential Function
    // The `exp()` function is a built-in PHP function that calculates the exponential value of a number. It raises the mathematical constant e (approximately 2.71828) to the power of the given number. The `exp()` function is useful for performing calculations involving exponential growth or decay, such as in finance, physics, and other scientific applications.
    // The `exp()` function takes a single argument, which is the exponent to which e is raised. It returns the result of the calculation as a floating-point number.
    
    // Example of using exp() function
    $exponent = 5;

    $exponentialValue = exp($exponent); // Calculates e^2
    echo "The exponential value of e raised to the power of $exponent is: $exponentialValue <br>"; // Output: The exponential value of e raised to the power of 2 is: 7.38905609893065
    
    
    
    // String Functions
    // String functions are built-in functions in PHP that perform various operations on strings. These functions are part of the standard library and provide a convenient way to manipulate and process string data without needing to implement complex algorithms manually. String functions cover a wide range of operations, including string manipulation, searching, formatting, and more.
    // They are optimized for performance and reliability, making them a valuable resource for developers. String functions help simplify code and improve readability by providing a consistent way to perform string operations. By using string functions, developers can focus on higher-level logic and application design rather than reinventing the wheel for common string manipulations.
    // String functions are widely used in PHP and other programming languages to handle text data effectively. They help streamline development processes and improve code maintainability by providing a rich set of tools for working with strings.
    // String functions are an essential part of programming languages, providing a powerful set of tools to manipulate and process text data efficiently.

    //strlen() function
    // The `strlen()` function is a built-in PHP function that calculates the length of a string. It returns the number of characters in the string, including spaces and special characters. The `strlen()` function is useful for determining the size of a string, validating input data, and performing various string manipulations.
    // The `strlen()` function takes a single argument, which is the string whose length you want to calculate. It returns an integer value representing the number of characters in the string.

    // Example of using strlen() function
    $string = "Hello, World!";
    $length = strlen($string); // Calculates the length of the string

    echo "The length of the string '$string' is: $length characters<br>"; // Output: The length of the string 'Hello, World!' is: 13 characters
    // The `strlen()` function is commonly used in various applications, such as form validation, text processing, and data manipulation. It helps ensure that strings meet specific length requirements and can be used to check for empty or invalid input data.

    // str_word_count() function
    // The `str_word_count()` function is a built-in PHP function that counts the number of words in a string. It returns an integer value representing the total number of words found in the string. The `str_word_count()` function is useful for analyzing text data, validating input, and performing various string manipulations.
    // The `str_word_count()` function takes a single argument, which is the string whose words you want to count. It can also take an optional second argument that specifies the format of the output (e.g., returning an array of words or just the count).

    // Example of using str_word_count() function
    $text = "Hello, World! This is a test string.";
    $wordCount = str_word_count($text); // Counts the number of words in the string
    echo "The number of words in the string '$text' is: $wordCount words<br>"; // Output: The number of words in the string 'Hello, World! This is a test string.' is: 7 words

    //How to find a text in a string

    $email = "info@nuel.com";

    if (strpos($email, "@")){
        echo "The email address is valid<br>";
    }else{
        echo "The email address is not valid<br>";
    }
    // The `strpos()` function is a built-in PHP function that finds the position of the first occurrence of a substring within a string. It returns the index of the first occurrence of the substring or false if the substring is not found. The `strpos()` function is useful for searching and validating text data, such as checking for specific characters or patterns in strings.
    // The `strpos()` function takes two arguments: the string to search in and the substring to search for. It is case-sensitive, meaning that it distinguishes between uppercase and lowercase characters.
    
    // Example of using strpos() function
    $text2 = "Hello, World! This is a test string.";
    $substring = "test";
    $position = strpos($text2, $substring); // Finds the position of the substring in the string
    if ($position !== false) {
        echo "The substring '$substring' is found at position: $position<br>"; // Output: The substring 'test' is found at position: 22
    } else {
        echo "The substring '$substring' is not found in the string<br>";
    }
    // The `strpos()` function is commonly used in various applications, such as form validation, text processing, and data manipulation. It helps ensure that strings meet specific criteria and can be used to check for the presence of specific characters or patterns in text data.
    // It is important to note that the `strpos()` function returns the position of the first occurrence of the substring, which is zero-based. This means that if the substring is found at the beginning of the string, the position will be 0. If the substring is not found, it returns false.
    // The `strpos()` function is a powerful tool for searching and validating text data in PHP, making it an essential part of string manipulation and processing tasks.
    // It is widely used in various applications to handle text data effectively and improve code maintainability by providing a consistent way to search for substrings within strings.
    

    // Ucwords() function
    // The `ucwords()` function is a built-in PHP function that capitalizes the first letter of each word in a string. It is useful for formatting text data, such as titles or headings, where you want to ensure that each word starts with an uppercase letter.
    // The `ucwords()` function takes a single argument, which is the string to be formatted. It returns the formatted string with the first letter of each word capitalized.

    // Example of using ucwords() function
    $text3 = "hello world! this is a test string.";
    $formattedText = ucwords($text3); // Capitalizes the first letter of each word
    echo "The formatted string is: $formattedText<br>"; // Output: The formatted string is: Hello World! This Is A Test String.
    // The `ucwords()` function is commonly used in various applications, such as text formatting, data presentation, and user interface design. It helps ensure that text data is displayed in a consistent and readable format, making it easier for users to understand and interact with the content.


    // strtoupper() function
    // The `strtoupper()` function is a built-in PHP function that converts all characters in a string to uppercase. It is useful for formatting text data, such as converting user input to a consistent case or preparing strings for comparison.
    // The `strtoupper()` function takes a single argument, which is the string to be converted. It returns the formatted string with all characters in uppercase.

    // Example of using strtoupper() function
    $text4 = "hello world! this is a test string.";
    $uppercaseText = strtoupper($text4); // Converts all characters to uppercase
    echo "The uppercase string is: $uppercaseText<br>"; // Output: The uppercase string is: HELLO WORLD! THIS IS A TEST STRING.

    // strtolower() function
    // The `strtolower()` function is a built-in PHP function that converts all characters in a string to lowercase. It is useful for formatting text data, such as converting user input to a consistent case or preparing strings for comparison.
    // The `strtolower()` function takes a single argument, which is the string to be converted. It returns the formatted string with all characters in lowercase.

    // Example of using strtolower() function
    $text5 = "HELLO WORLD! THIS IS A TEST STRING.";
    $lowercaseText = strtolower($text5); // Converts all characters to lowercase
    echo "The lowercase string is: $lowercaseText<br>"; // Output: The lowercase string is: hello world! this is a test string.
    // The `strtoupper()` and `strtolower()` functions are commonly used in various applications, such as text formatting, data validation, and user interface design. They help ensure that text data is displayed in a consistent and readable format, making it easier for users to understand and interact with the content.
    
    
    // Array Built-in Functions
    // Array functions are built-in functions in PHP that perform various operations on arrays. These functions are part of the standard library and provide a convenient way to manipulate and process array data without needing to implement complex algorithms manually. Array functions cover a wide range of operations, including sorting, searching, filtering, and more.

    $personalInfo = array("name" => "John", "age" => 30, "city" => "New York");
    
    $moreInfo = array("job" => "Developer", "hobby" => "Reading");


    // array_merge() function

    // The `array_merge()` function is a built-in PHP function that merges two or more arrays into one. It combines the elements of the input arrays and returns a new array containing all the elements. If there are duplicate keys, the values from the later arrays will overwrite the values from the earlier arrays.
    // The `array_merge()` function is useful for combining data from multiple sources or for merging related arrays into a single array for easier processing and analysis.

    // Example of using array_merge() function

    $personalInfo = array_merge($personalInfo, $moreInfo); // Merging two arrays
    
    foreach ($personalInfo as $key => $value) {
        echo "$key: $value<br>"; // Output: name: John, age: 30, city: New York, job: Developer, hobby: Reading
    }

    print_r($personalInfo); // Printing the merged array


    echo "<br>";
   


    // array_keys() function

    // The `array_keys()` function is a built-in PHP function that returns an array of all the keys from an associative array. It is useful for extracting the keys from an array for further processing or analysis.
    // The `array_keys()` function takes an associative array as input and returns a new array containing all the keys from the input array. It can also take an optional second argument to filter the keys based on a specific value.

    // Example of using array_keys() function

    // print only keys of an array

    print_r(array_keys($personalInfo)); // Output: Array ( [0] => name [1] => age [2] => city [3] => job [4] => hobby )
    
    echo "<br>";



    // array_values() function
    // The `array_values()` function is a built-in PHP function that returns an array of all the values from an associative array. It is useful for extracting the values from an array for further processing or analysis.
    // The array_values() function takes an array (associative or indexed) and returns all the values from the array, reindexed with numeric keys starting from 0. It accepts only one argument — the array.

    // Example of using array_values() function

    // print only values of an array

    print_r(array_values($personalInfo)); // Output: Array ( [0] => John [1] => 30 [2] => New York [3] => Developer [4] => Reading )

    echo "<br>";

    // Example of using array_values() function with a second argument

    $filteredValues = array_values(array_filter($personalInfo, function ($value){
        return $value === "John"; // Filtering values based on the value "John"
    })); // Filtering values based on the key "name"
    print_r($filteredValues); // Output: Array ( [0] => John )

    echo "<br>";

    // array_push() function
    // The `array_push()` function is a built-in PHP function that adds one or more elements to the end of an array. It modifies the original array and returns the new number of elements in the array. The `array_push()` function is useful for dynamically adding data to an array, such as when collecting user input or building a list of items.
    // The `array_push()` function takes two or more arguments: the array to which you want to add elements and the elements to be added. It can accept multiple elements to be added at once.
    
    // Example of using array_push() function

    $stack = array("apple", "banana", "orange"); // Initial array
    array_push($stack, "grape", "kiwi"); // Adding multiple elements to the end of the array
    echo "The updated array is: ";
    print_r($stack); // Output: The updated array is: Array ( [0] => apple [1] => banana [2] => orange [3] => grape [4] => kiwi )
    
    echo "<br>";
    
    // array_pop() function
    // The `array_pop()` function is a built-in PHP function that removes the last element from an array and returns it. It modifies the original array by removing the last element, which can be useful for implementing stack-like behavior or managing lists of items.
    // The `array_pop()` function takes one argument: the array from which you want to remove the last element. It returns the removed element, or null if the array is empty.

    // Example of using array_pop() function

    $stack2 = array("apple", "banana", "orange"); // Initial array
    $lastElement = array_pop($stack2); // Removing the last element from the array
    echo "The removed element is: $lastElement<br>"; // Output: The removed element is: orange
    echo "The updated array is: ";
    print_r($stack2); // Output: The updated array is: Array ( [0] => apple [1] => banana )

    echo "<br>";

    // array_shift() function
    // The `array_shift()` function is a built-in PHP function that removes the first element from an array and returns it. It modifies the original array by removing the first element, which can be useful for implementing queue-like behavior or managing lists of items.
    // The `array_shift()` function takes one argument: the array from which you want to remove the first element. It returns the removed element, or null if the array is empty.

    // Example of using array_shift() function
    $queue = array("apple", "banana", "orange"); // Initial array
    $firstElement = array_shift($queue); // Removing the first element from the array
    echo "The removed element is: $firstElement<br>"; // Output: The removed element is: apple
    echo "The updated array is: ";
    print_r($queue); // Output: The updated array is: Array ( [0] => banana [1] => orange )
    // The `array_shift()` function is commonly used in various applications, such as implementing queues, managing lists of items, and processing data in a first-in-first-out (FIFO) manner. It helps simplify code and improve readability by providing a consistent way to remove elements from the beginning of an array.

    echo "<br>";

    // array_unshift() function
    // The `array_unshift()` function is a built-in PHP function that adds one or more elements to the beginning of an array. It modifies the original array and returns the new number of elements in the array. The `array_unshift()` function is useful for dynamically adding data to the front of an array, such as when collecting user input or building a list of items.
    // The `array_unshift()` function takes two or more arguments: the array to which you want to add elements and the elements to be added. It can accept multiple elements to be added at once.

    // Example of using array_unshift() function
    $queue2 = array("banana", "orange"); // Initial array
    array_unshift($queue2, "apple", "grape"); // Adding multiple elements to the beginning of the array
    echo "The updated array is: ";
    print_r($queue2); // Output: The updated array is: Array ( [0] => apple [1] => grape [2] => banana [3] => orange )
    echo "<br>";


    // array_splice() function
    // The `array_splice()` function is a built-in PHP function that removes a portion of an array and replaces it with new elements. It modifies the original array and returns the removed elements as a new array. The `array_splice()` function is useful for inserting, deleting, or replacing elements in an array at specific positions.
    // The `array_splice()` function takes three required arguments: the array to be modified, the starting index from which to remove elements, and the number of elements to remove. It can also take additional arguments for the new elements to be inserted.

    // Example of using array_splice() function
    $fruits = array("apple", "banana", "orange", "grape"); // Initial array
    $removedFruits = array_splice($fruits, 1, 2, array("kiwi", "mango")); // Removing 2 elements starting from index 1 and replacing them with new elements
    echo "The removed fruits are: ";
    print_r($removedFruits); // Output: The removed fruits are: Array ( [0] => banana [1] => orange )
    echo "<br>";
    echo "The updated array is: ";
    print_r($fruits); // Output: The updated array is: Array ( [0] => apple [1] => kiwi [2] => mango [3] => grape )

    echo "<br>";



    // array_slice() function
    // The `array_slice()` function is a built-in PHP function that extracts a portion of an array and returns it as a new array. It does not modify the original array. The `array_slice()` function is useful for retrieving specific sections of an array without altering the original data.
    // The `array_slice()` function takes three required arguments: the array to be sliced, the starting index from which to extract elements, and the length of the slice. It can also take an optional fourth argument to specify whether to preserve the keys of the original array.

    // Example of using array_slice() function
    $fruits2 = array("apple", "banana", "orange", "grape"); // Initial array
    $slicedFruits = array_slice($fruits2, 1, 2); // Extracting 2 elements starting from index 1
    echo "The sliced fruits are: ";
    print_r($slicedFruits); // Output: The sliced fruits are: Array ( [0] => banana [1] => orange )

    echo "<br>";

    // Array Search Functions
    // Array search functions are built-in functions in PHP that perform various operations to search for specific elements or values within arrays. These functions are part of the standard library and provide a convenient way to locate and manipulate data within arrays without needing to implement complex algorithms manually. Array search functions cover a wide range of operations, including searching for keys, values, and specific conditions.
    // They are optimized for performance and reliability, making them a valuable resource for developers. Array search functions help simplify code and improve readability by providing a consistent way to perform search operations. By using array search functions, developers can focus on higher-level logic and application design rather than reinventing the wheel for common search tasks.
    // Array search functions are widely used in PHP and other programming languages to handle data effectively. They help streamline development processes and improve code maintainability by providing a rich set of tools for searching and manipulating arrays.
    // Array search functions are an essential part of programming languages, providing a powerful set of tools to locate and manipulate data efficiently.
    // They are commonly used in various applications to handle data effectively and improve code maintainability by providing a consistent way to search for specific elements or values within arrays.

    // Example of using array_search() function

    $cars = array("Volvo", "BMW", "Toyota", "Honda", "Mercedes"); // Initial array
    $searchValue = "Toyota"; // Value to search for
    $searchKey = array_search($searchValue, $cars); // Searching for the value in the array
    if ($searchKey !== false) {
        echo "The value '$searchValue' is found at index: $searchKey<br>"; // Output: The value 'Toyota' is found at index: 2
    } else {
        echo "The value '$searchValue' is not found in the array<br>";
    }

    echo "<br>";
    // Example 2

    echo array_search("BMW", $cars); // Output: 1 (index of "BMW" in the array)
    echo "<br>";

    // count() function
    // The `count()` function is a built-in PHP function that counts the number of elements in an array or the number of properties in an object. It returns an integer value representing the total count of elements or properties. The `count()` function is useful for determining the size of an array or object, validating input data, and performing various operations based on the number of elements.
    // The `count()` function takes one argument, which is the array or object whose elements or properties you want to count. It can also take an optional second argument to specify the mode of counting (e.g., counting all elements or only the top-level elements).

    // Example of using count() function

    echo "The number of elements in the array is: " . count($cars) . "<br>"; // Output: The number of elements in the array is: 5
    
    echo "<br>";

    echo count($cars);

    echo "<br>";



    // Date and Time Functions

    // Date and time functions are built-in functions in PHP that perform various operations related to date and time manipulation. These functions are part of the standard library and provide a convenient way to work with date and time data without needing to implement complex algorithms manually. Date and time functions cover a wide range of operations, including formatting, parsing, calculating differences, and more.
    // They are optimized for performance and reliability, making them a valuable resource for developers. Date and time functions help simplify code and improve readability by providing a consistent way to perform date and time operations. By using date and time functions, developers can focus on higher-level logic and application design rather than reinventing the wheel for common date and time tasks.
    // Date and time functions are widely used in PHP and other programming languages to handle date and time data effectively. They help streamline development processes and improve code maintainability by providing a rich set of tools for working with date and time information.
    // Date and time functions are an essential part of programming languages, providing a powerful set of tools to manipulate and process date and time data efficiently.
    // They are commonly used in various applications to handle date and time data effectively and improve code maintainability by providing a consistent way to perform date and time operations.
    // Date and time functions are widely used in various applications, such as scheduling, logging, and data analysis. They help ensure that date and time data is handled accurately and consistently, making it easier for developers to work with time-sensitive information.

    // Date
    // 'j' - Day of the month without leading zeros (1 to 31)	
    // 'd' - Day of the month with leading zeros (01 to 31)
    // 'l' - Full textual representation of the day of the week (Sunday to Saturday)
    // 'D' - Three-letter abbreviation of the day of the week (Mon to Sun)
    // 'F' - Full textual representation of the month (January to December)
    // 'M' - Three-letter abbreviation of the month (Jan to Dec)
    // 'n' - Numeric representation of the month without leading zeros (1 to 12)
    // 'm' - Numeric representation of the month with leading zeros (01 to 12)
    // 'Y' - Four-digit representation of the year (e.g., 2023)
    // 'y' - Two-digit representation of the year (e.g., 23)
    // 'a' - Lowercase Ante meridiem and Post meridiem (am or pm)
    // 'A' - Uppercase Ante meridiem and Post meridiem (AM or PM)
    // 'g' - 12-hour format of an hour without leading zeros (1 to 12)
    // 'G' - 24-hour format of an hour without leading zeros (0 to 23)
    // 'h' - 12-hour format of an hour with leading zeros (01 to 12)
    // 'H' - 24-hour format of an hour with leading zeros (00 to 23)
    // 'i' - Minutes with leading zeros (00 to 59)
    // 's' - Seconds with leading zeros (00 to 59)
    // 'U' - Seconds since the Unix Epoch (January 1 1970 00:00:00 GMT)
    // 't' - Number of days in the given month (28 to 31)
    // 'z' - The day of the year (0 to 365)
    // 'W' - ISO-8601 week number of year (weeks starting on Monday)
    // 'o' - ISO-8601 year number (e.g., 2023)
    // 'c' - ISO 8601 date (e.g., 2023-10-01T12:34:56+00:00)
    // 'r' - RFC 2822 formatted date (e.g., Mon, 01 Oct 2023 12:34:56 +0000)
    // 'U' - Seconds since the Unix Epoch (January 1 1970 00:00:00 GMT)
    // 'e' - Timezone identifier (e.g., Europe/London)
    // 'I' - Whether or not the date is in daylight saving time (1 if DST, 0 if not)
    // 'O' - Difference to Greenwich time (GMT) in hours (e.g., +0200)
    // 'P' - Difference to Greenwich time (GMT) with colon (e.g., +02:00)
    // 'T' - Timezone abbreviation (e.g., UTC, GMT, EST)
    // 'Z' - Timezone offset in seconds (e.g., -3600 for GMT+1)
    // 'c' - ISO 8601 date (e.g., 2023-10-01T12:34:56+00:00)
    // 'r' - RFC 2822 formatted date (e.g., Mon, 01 Oct 2023 12:34:56 +0000)
    // 'U' - Seconds since the Unix Epoch (January 1 1970 00:00:00 GMT)
    // 'e' - Timezone identifier (e.g., Europe/London)
    
    echo date("l jS \of F Y h:i:s A"); // Output: Sunday 1st of October 2023 12:34:56 PM
    echo "<br>";

    echo date('Y/m/d');

    echo "<br>";

    // Times
    // 'h' - 12-hour format of an hour with leading zeros (01 to 12)
    // 'H' - 24-hour format of an hour with leading zeros (00 to 23)
    // 'i' - Minutes with leading zeros (00 to 59)
    // 's' - Seconds with leading zeros (00 to 59)
    // 'a' - Lowercase Ante meridiem and Post meridiem (am or pm)
    // 'A' - Uppercase Ante meridiem and Post meridiem (AM or PM)
    // 'g' - 12-hour format of an hour without leading zeros (1 to 12)
    // 'G' - 24-hour format of an hour without leading zeros (0 to 23)
    

    // 'g' = Hours in 12-hour format without zeros
    // 'h' = Hours in 12-hour format with zeros
    // 'G' = Hours in 24-hour format without zeros
    // 'H' = Hours in 24-hour format with zeros
    // 'a' = am/pm in lowercase
    // 'A' = AM/PM in uppercase
    // 'i' = Minutes without leading zeros
    // 's' = Seconds without leading zeros
    // 'u' = Microseconds (up to 6 digits)

    echo date('H:i:s a');
    date_default_timezone_set('America/New_York'); // Set the default timezone to New York
    echo "<br>";

    // Strtotime() function
    // The `strtotime()` function is a built-in PHP function that converts a string representation of a date and time into a Unix timestamp. It is useful for parsing date and time strings in various formats and converting them into a standard format for further processing or calculations.
    // The `strtotime()` function takes a single argument, which is the string representation of the date and time to be converted. It returns the Unix timestamp (the number of seconds since January 1, 1970) or false if the conversion fails.

    // Example of using strtotime() function

    $time = strtotime("now"); // Current date and time
    echo "The current Unix timestamp is: $time<br>"; // Output: The current Unix timestamp is: 1696155600 (example value)

    echo "<br>";
    // Unix time is the value represented as sdeconsd calculated, since UNIX EPoch, january 1, 1970, 00:00:00 GMT. It is a widely used time representation in computing and programming.
    // it is also called Unix timestamp, epoch time, or POSIX time. It is a system for tracking time in a consistent and standardized way across different platforms and programming languages.
    // Unix time is often used in databases, APIs, and other systems that require precise time representation and calculations. It is a simple and efficient way to represent time as a single integer value, making it easy to perform arithmetic operations and comparisons.
    // Unix time is widely used in various applications, such as scheduling, logging, and data analysis. It helps ensure that date and time data is handled accurately and consistently, making it easier for developers to work with time-sensitive information.

    echo date('m/d/Y H:i:s', $time); // Output: 10/01/2023 12:34:56 (example value)
    echo "<br>";



    // Random Number Functions
    // Random number functions are built-in functions in PHP that generate random numbers or perform operations related to randomness. These functions are part of the standard library and provide a convenient way to work with random data without needing to implement complex algorithms manually. Random number functions cover a wide range of operations, including generating random integers, floating-point numbers, and more.
    // They are optimized for performance and reliability, making them a valuable resource for developers. Random number functions help simplify code and improve readability by providing a consistent way to perform random operations. By using random number functions, developers can focus on higher-level logic and application design rather than reinventing the wheel for common random tasks.
    // Random number functions are widely used in PHP and other programming languages to handle random data effectively. They help streamline development processes and improve code maintainability by providing a rich set of tools for working with random numbers.

    // Example of using rand() function
    // The `rand()` function is a built-in PHP function that generates a random integer between two specified values. It is useful for generating random numbers for various purposes, such as simulations, games, and random sampling.
    // The `rand()` function takes two optional arguments: the minimum and maximum values for the random number. If no arguments are provided, it generates a random integer between 0 and the maximum value of the integer type.
    // The `rand()` function returns a random integer within the specified range.

    // Example of using rand() function

    // echo rand()


    $min = 1;
    $max = 10:
    echo rand($min $max); // Generates a random integer between 1 and 10
    echo "<br>";
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    ?>
</body>
</html>