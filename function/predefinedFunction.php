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

    $personalInfo = array_merge($personalInfo, $moreInfo); // Merging two arrays
    
    foreach ($personalInfo as $key => $value) {
        echo "$key: $value<br>"; // Output: name: John, age: 30, city: New York, job: Developer, hobby: Reading
    }

    print_r($personalInfo); // Printing the merged array


    echo "<br>";
    // print only keys of an array

    print_r(array_keys($personalInfo)); // Output: Array ( [0] => name [1] => age [2] => city [3] => job [4] => hobby )
    // The `array_keys()` function is a built-in PHP function that returns an array of all the keys from an associative array. It is useful for extracting the keys from an array for further processing or analysis.

    echo "<br>";
    // print only values of an array

    print_r(array_values($personalInfo)); // Output: Array ( [0] => John [1] => 30 [2] => New York [3] => Developer [4] => Reading )
    // The `array_values()` function is a built-in PHP function that returns an array of all the values from an associative array. It is useful for extracting the values from an array for further processing or analysis.
    // The `array_keys()` and `array_values()` functions are commonly used in various applications, such as data processing, reporting, and user interface design. They help ensure that array data is displayed in a consistent and readable format, making it easier for users to understand and interact with the content.


    
    
    
    
    
    
    
    
    ?>
</body>
</html>