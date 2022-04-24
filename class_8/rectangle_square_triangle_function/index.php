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







//area of rectangle
function rectangle(){
    $length = 5;
    $width = 3;
    $areaOfRectangle = $length * $width;
    return $areaOfRectangle;
}
echo "area of a rectangle:".rectangle()."<br>";

//area of square
function square(){
    
    $a = 3;
    $areaOfsquare = $a * $a;
    return $areaOfsquare;
}
echo "area of a square:".square()."<br>";
// area of triangle 
function triangle(){
    $height = 5;
    $base = 3;
  
    $areaOftriangle = (1/2)*$height*$base;
    return $areaOftriangle;
}
echo "area of a triangle :".triangle()."<br>";
?>