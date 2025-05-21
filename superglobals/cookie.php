<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Cookie in php
    // A cookie is a small file that the server embeds on the user's computer.
    // Cookies are used to track information about the user such as username.
    // It is not used to track sensitive information like password etc since it's easy to hack.
    // It can onl be read from the domain it's issued from.

    //Setting a cookie
    //Note: The setcookie() function must be called at the beginning of the script, before any HTML output.
    // it can have 6 arguments

    // 1. name: The name of the cookie
    // 2. value: The value of the cookie
    // 3. expire: The time the cookie expires (in seconds). If set to 0, the cookie will expire at the end of the session (when the browser is closed).
    // 4. path: The path on the server where the cookie will be available. If set to '/', the cookie will be available within the entire domain.
    // 5. domain: The domain that the cookie is available to. If set to '', the cookie will only be available to the current domain.
    // 6. secure: If set to true, the cookie will only be sent over a secure HTTPS connection.
    // 7. httponly: If set to true, the cookie will only be accessible through the HTTP protocol and not through JavaScript.
    // 8. samesite: If set to 'Strict', the cookie will only be sent in a first-party context (i.e., if the user is navigating to the same site that set the cookie). If set to 'Lax', the cookie will be sent in a first-party context and with top-level navigations. If set to 'None', the cookie will be sent in all contexts, including cross-origin requests.


    // Example of setting a cookie


    // if you do not include the expiration date, the cookie will be stored for the current session only
    $time = time() + 86400 * 30; // 86400 seconds = 1 day, so this cookie will expire in 30 days
    $time = time() - 86400 * 30; // this will delete the cookie after page refresh
    setcookie("name", "John Doe", $time ); // Set a cookie named "name" with the value "John Doe" that expires in 30 days
    
    print_r($_COOKIE); // Print all cookies
    
    echo "<br>";

    echo "Cookie 'name' is set to: " . $_COOKIE['name'] . "<br>"; // Access the cookie value

    
    ?>
</body>
</html>