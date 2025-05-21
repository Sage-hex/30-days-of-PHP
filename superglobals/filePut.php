<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // fopen() function
    // 

    // The fopen() function is used to open a file or URL
    // The first parameter is the file name and the second parameter is the mode
    // The mode can be one of the following:
    // "r" - Read only. Starts at the beginning of the file
    // "r+" - Read/Write. Starts at the beginning of the file
    // "w" - Write only. Opens and clears the contents of file or creates a new file
    // "w+" - Read/Write. Opens and clears the contents of file or creates a new file
    // "a" - Append. Opens and writes to the end of the file or creates a new file
    // "a+" - Read/Write. Opens and writes to the end of the file or creates a new file
    // "x" - Create. Creates a new file. Returns FALSE and an error if file already exists
    // "x+" - Read/Write. Creates a new file. Returns FALSE and an error if file already exists
    // "c" - Write only. Opens and clears the contents of file or creates a new file
    // "c+" - Read/Write. Opens and clears the contents of file or creates a new file
    // "b" - Binary mode. Used with other modes to open the file in binary mode
    // "t" - Text mode. Used with other modes to open the file in text mode
    // "e" - Exclusive mode. Used with other modes to open the file in exclusive mode
    // "e+" - Read/Write. Used with other modes to open the file in exclusive mode


    // $myfile = fopen("uploads/testfile.txt", "w");
    // $txt = "My name is Nuelsage"; 
    
    // fwrite($myfile, $txt);
    // The fwrite() function is used to write data to a file

    // fclose($myfile);
    // The fclose() function is used to close an open file

    // echo $myfile;
    
    // OR


    if(isset($_POST['submit'])){
        // $myFile = fopen("uploads/testfile.txt", "w"); //w is used to write to the file note that it will overwrite the file if it already exists
        $myFile = fopen("uploads/testfile.txt", "a"); //a is used to append to the file, note that it will not overwrite the file if it already exists
        $txt = $_POST['name'] . " is " . $_POST['age'] . " years old";
        fwrite($myFile, $txt);
        fclose($myFile);
        // The fclose() function is used to close an open file
    }
    
    
    
    
    
    
    
    
    ?>

    <form method="post" action="filePut.php">
        <!-- The action attribute specifies where to send the form data when the form is submitted -->
        Name: <input type="text" name="name">
        Age: <input type="text" name="age">
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>