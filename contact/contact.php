<?php
if(isset($_POST['submit'])){
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);

    $myMail = "realitynuel@gmail.com"; // This is the email address that will receive the message
    $header = "From: " . $email . "\r\n"; // This is the header that will be sent with the email
    $message2 = "you have received a message from " . $name . "\n\n" . $message; // This is the message that will be sent with the email
    // Now we need  a mail function and inside the mail function we need 3 parameters
    // 1. To whom the mail is going to
    // 2. Subject of the mail
    // 3. The message of the mail

    //There are other parameters that can be added to the mail function but we will not be using the header for now

    mail($myMail, $subject, $message2, $header); // This is the mail function that will send the email
    header("Location: index.php?mailsent"); // This will redirect the user to the contact page with a message that the mail has been sent
}









?>

