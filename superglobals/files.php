<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // $_FILES superglobal
    // The $_FILES superglobal is used to upload files to the server
    // It is a two-dimensional array containing information about the file uploaded via HTTP POST method
    // The $_FILES superglobal is used to access the file information

    //How to upload a file
    //Upload it to the root
    //Directl to the database

    // how to upload a file
    // 1. Create a form with the enctype attribute set to "multipart/form-data"
    // 2. Use the $_FILES superglobal to access the file information
    // 3. Use the move_uploaded_file() function to move the uploaded file to a new location


    // enctpetype="multipart/form-data" is used to upload files
    // The enctype attribute specifies how the form data should be encoded when submitting it to the server
    // The enctype attribute is used to specify how the form data should be encoded when submitting it to the server
    
    // Check if file data exists before trying to access it
    if(isset($_FILES['file'])) {
        echo $name = $_FILES['file']['name'] . "<br>";
        echo $type = $_FILES['file']['type'] . "<br>";
        echo $tmp_location = $_FILES['file']['tmp_name'] . "<br>";
        echo $error = $_FILES['file']['error'] . "<br>";
        echo $size = $_FILES['file']['size'] . "<br>";
    }
    ?>

    <form method="post" action="upload.php" enctype="multipart/form-data">
        <!-- The action attribute specifies where to send the form data when the form is submitted -->
        Select file to upload: <input type="file" name="file">
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>