<?php

// include and require are used to include files in PHP. The main difference between the two is how they handle errors when the file being included is not found.
// include: If the file is not found, a warning is issued, but the script continues to execute. This means that if the included file is not found, the rest of the script will still run, but the code from the included file will not be executed.
// require: If the file is not found, a fatal error is issued, and the script stops executing. This means that if the required file is not found, the rest of the script will not run at all. It is used when the included file is essential for the script to function correctly.
// require_once: This is similar to require, but it ensures that the file is included only once, even if it is called multiple times in the script. This is useful to prevent redeclaring functions or classes that may cause errors.
// include_once and require_once are often used to include configuration files, libraries, or classes to avoid redeclaring them multiple times in the script.
// include and require are often used to include files that contain functions, classes, or other reusable code. They help organize code into separate files for better maintainability and readability. The choice between include and require depends on whether the included file is essential for the script to run or not.
// include is used when the file is optional, while require is used when the file is mandatory for the script to function correctly.
// include_once and require_once are used to prevent multiple inclusions of the same file, which can lead to errors or unexpected behavior in the code.

include 'includes/head.php';
include 'includes/header.php';	




?>



    <h1><?php introduction();?></h1>


<?php
include 'includes/footer.php';

?>