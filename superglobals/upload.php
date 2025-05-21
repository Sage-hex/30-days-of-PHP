<?php
if(isset($_POST['submit'])){
    $file = $_FILES['file'];// The file array contains information about the file uploaded
    $fileName = $_FILES['file']['name']; // The name of the file
    $fileTmpName = $_FILES['file']['tmp_name']; // The temporary name of the file
    $fileSize = $_FILES['file']['size']; // The size of the file
    $fileError = $_FILES['file']['error']; // The error code of the file

    // Explode from the last dot to get the file extension
    $fileExtension = explode('.', $fileName); // The file extension

    $fileActualExtension = strtolower(end($fileExtension)); // The file extension in lowercase

    // Allowed file extensions
    // The allowed file extensions are the ones that are allowed to be uploaded
    $isAllowed = array('jpg', 'jpeg', 'png', 'pdf'); // The allowed file extensions

    // Check if the file extension is allowed
    if(in_array($fileActualExtension, $isAllowed)){

        // 0 = no error
        // 1 = error
        if($fileError === 0){
            if($fileSize < 3000000){
                $newFileName = uniqid('', true) . "." . $fileActualExtension; // The new file name and the file extension concatenated
                $fileDestination = 'uploads/' . $newFileName; // The destination of the file
                // Move the uploaded file to the destination
                move_uploaded_file($fileTmpName, $fileDestination); // Move the file from the temporary location to the destination

                header("Location: files.php?uploadsuccess"); // Redirect to the files.php page with the upload success message
                // The header function is used to send a raw HTTP header to the client
            }else{
                echo "Your file is too big";
            }

        }else{
            echo "There was an error Try again";
        }
        
    }else{
            echo "Sorry, your file type is not allowed";
        }
}   





?>