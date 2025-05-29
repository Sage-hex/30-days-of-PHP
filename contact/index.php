<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div>

    <h1>Get in touch</h1>
    <p>Please fill in the fields</p>
    <form action="contact.php" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" placeholder="Full Name">
        <br>
        <label for="email">E-mail:</label>
        <input type="text" name="email" placeholder="E-mail">
        <br>
        <label for="subject">Subject:</label>
        <input type="text" name="subject" placeholder="Subject">
        <br>
    
        <textarea name="message" placeholder="Message"></textarea>
        <br>
        <button type="submit" name="submit">Send Email</button>



    </form>


    </div>
</body>
</html>