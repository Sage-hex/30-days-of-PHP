<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
    // forach loops only works in arrays and objects(iterate over array variables)

    $names = array("John", "Michael", "David");
    $person = array("Name" => "John","Age" => 30, "Gender" => "Male");
    // foreach(array_Expression as $key){

    // }

    foreach ($names as $name){
        echo"My name is " . $name;
        echo "<br/>";
        
    };

 foreach ($person as $key => $value){
    echo $key . ": " . $value;
    echo "<br/>";
 }

 echo "<br/>";

 foreach ($person as $key => $value){
    echo "My " . $key . " is " . $value;	
    echo "<br/>";
    
};

    
    
    
    
    ?>
</body>
</html>