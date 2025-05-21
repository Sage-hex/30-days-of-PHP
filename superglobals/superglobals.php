<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    // Superglobals
    // Superglobals are built-in variables in PHP that are always accessible, regardless of scope.
    // They are used to access global variables from anywhere in the script.
    // The following are the most commonly used superglobals:

    // 1. $GLOBALS: An associative array containing all global variables. Used to access global variables from anywhere in the script.
    // 2. $_SERVER: An associative array containing information about headers, paths, and script locations.
    // 3. $_REQUEST: An associative array containing data from GET, POST, and COOKIE methods.
    // 4. $_POST: An associative array containing data sent to the script via HTTP POST method. Use to collect data from html form after submitting it.
    //    It is also used to send data to the server.
    // 5. $_GET: An associative array containing data sent to the script via HTTP GET method. Use to collect data from html form after submitting it.
    // 6. $_FILES: An associative array containing file upload information. Two-dimensional array containing information about the file uploaded via HTTP POST method.
    //    It is used to upload files to the server.
    // 7. $_ENV: An associative array containing environment variables.
    // 8. $_COOKIE: An associative array containing cookie variables. It's a small file that the server embeds on the user's computer.use to track information about the user.
    // 9. $_SESSION: An associative array containing session variables. Used to store information about, or change settings for, the user session.


    // Example of using $GLOBALS superglobal
    $x = 100;
    $y = 200;
    function add() {
        $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
    }
    
    add();
    echo "The sum of x and y is: " . $GLOBALS['z'] . "<br>";
    
    
    
    
    
    
    
    
    
    
    ?>

</body>
</html>