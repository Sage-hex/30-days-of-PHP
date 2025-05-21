<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Session in php
    // A php session is a way to store data on the server rather than on the user's computer.
    // Session variables are stored in a superglobal variable called $_SESSION
    // A session exists as long as the browser is open. When the browser is closed, the session is destroyed.
    // Session variables are stored on the server and are not visible to the user.

    // Difference between session and cookie
    // 1. Session data is stored on the server, while cookie data is stored on the user's computer.
    // 2. Session data is more secure than cookie data, as it is not visible to the user.
    // 3. Session data is temporary and is deleted when the user closes the browser, while cookie data can be stored for a longer period of time.

    
    session_start(); // Start the session
    // Set session variables/information
    $_SESSION['username'] = 'JohnDoe';
    $_SESSION['Age'] = 25;

    echo "Hello " . $_SESSION['username'] . ", you are " . $_SESSION['Age'] . " years old.<br>";
    
    // to destroy the session

    session_destroy(); // Destroy the session
    // This will remove all session variables and destroy the session when the user closes the browser
    // Note: session_destroy() does not unset the $_SESSION variable. It only destroys the session data on the server.
    
    
    
    ?>
</body>
</html>