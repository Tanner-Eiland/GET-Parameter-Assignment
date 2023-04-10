<?php 
    
    echo $age;

    $message = "I am [$age] years old and "
    $days = (int)($age) * 365;

    if ($age >= 18){
        $message .= "I am old enough to vote in the United States."
    }else 
        $message .= "I am not old enough to vote in the United States"
?>