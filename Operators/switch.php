<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Switch statement
    // The switch statement is a control structure that allows you to execute different blocks of code based on the value of a variable or expression. It is often used as an alternative to multiple if-else statements when you have many conditions to check.
    // The switch statement evaluates an expression and compares it to different case values. When a match is found, the corresponding block of code is executed. If no match is found, the default block (if provided) is executed.
    // The switch statement is useful for simplifying complex conditional logic and improving code readability.
    // It is particularly effective when you have a limited number of discrete values to check against a single variable.
    // However, it is important to note that the switch statement does not support complex conditions like logical operators (&&, ||) or ranges of values. In such cases, using if-else statements may be more appropriate.
    // Example of switch statement


    // Building a switch statement to check if user is logged in or not.
    // The switch statement is a control structure that allows you to execute different blocks of code based on the value of a variable or expression. It is often used as an alternative to multiple if-else statements when you have many conditions to check.
    $role = "Employer";

    switch ($role){
        case "Visitor":
            echo "Welcome visitor! <br>";
            break;

            case "Admin":
                echo "Welcome Admin! <br>";
                break;

            case "Superadmin":
                echo "Welcome Superadmin! <br>";
                break;
            
                case "Boss":
                    echo "Welcome Boss! <br>";
                    break;

                    // it is professional to add a default block so that if the condiion is nmot in the swicth block then the default block woll  be printed out, A default is always seen as the else statement in ifelse statement.
                    // the default block is optional but it is a good practice to add it in your code.
                        case "Member":
                            echo "Welcome Member! <br>";
                            break;

                    default:
                        echo "User has no role! <br>";
                        break;


    }
    
    
    
    ?>
</body>
</html>