<?php

$numbers =[0,10,80,67,60,89,91,56,45,30,95,83,99];
    $max = 0;

    foreach($numbers as $number) {
        if($max < $number)
            $max = $number;
    }

    
    echo "<b>maximum value:</b> ".$max;

?>