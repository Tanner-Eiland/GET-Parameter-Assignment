<?php

    $firstname = filter_input(INPUT_GET, 'first', FILTER_SANITIZE_STRING); 
    $lastname = filter_input(INPUT_GET, 'last', FILTER_SANITIZE_STRING);
    $age = filter_input(INPUT_GET, 'age', FILTER_SANITIZE_STRING);
    $days = (int)$age * 365;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Parameter Assignment</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <h1> Get Parameters</h1>
    <?php
    if (!empty($firstname) && !empty($lastname) && !empty($age)){
        
    
    $message = "Hello, my name is $firstname $lastname. <br> I am $age years old and ";
    

    if ($age >= 18){
        $message .= "I am old enough to vote in the United States.";
    }else {
        $message .= "I am not old enough to vote in the United States.";
    }
echo $message . "<br> Which is about $days days old today. <br>" . date("Y/m/d");

    }
     else{
        include("./view/mainempty.php");
    }
    ?>
</body>



</html>