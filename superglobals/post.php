<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    // Example of using $_POST superglobal
    // Collect data from the html from (invisible in this code) after submitting it

    if(isset($_POST)){
// The isset function checks if a variable is set and is not NULL
        echo $_POST['name'] . ", your form is submitted";
        

    }

    echo "<br>";
    print_r($_POST);
    
    
    
    
    
    
    ?>

        <form method="post" action="post.php">
        <!-- The action attribute specifies where to send the form data when the form is submitted -->
        Name: <input type="text" name="name">
        Age: <input type="text" name="age">
        <button type="submit">Submit</button>
    </form>
</body>
</html>