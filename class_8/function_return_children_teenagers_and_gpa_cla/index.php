<?php
function age($Age){
    
    if ($Age < 10) {
           $age =  "you are a children"."<br>";
    } 
    
    if ($Age >= 13 && $Age <=18) {
        $age = "you are a teenagers";
            
    } 
    if ($Age >= 18 && $Age <=30) {
        $age =  "you are a young "."<br>";
    } 
    
    if ($Age >= 50) {
        $age= "you are a old people "."<br>";
    } 
    return $age;
}
echo age(30);


?>