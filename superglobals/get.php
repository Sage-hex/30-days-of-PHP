<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    // Example of using $_GET superglobal
    // Collect data from the html form (Data is visible in the URL after submitting it)
    // The $_GET superglobal is used to collect form data after submitting it
    // Use this method non sensitive data, as the data is visible in the URL
    // The $_GET superglobal is also used to pass variables between pages
    // Don't use $_GET for sensitive data like password etc, as the data is visible in the URL

    
    
    
    
    
    
    ?>

        <form method="get" action="get.php">
        <!-- The action attribute specifies where to send the form data when the form is submitted -->
        Name: <input type="text" name="name">
        Age: <input type="text" name="age">
        <button type="submit">Submit</button>
    </form>
</body>
</html>