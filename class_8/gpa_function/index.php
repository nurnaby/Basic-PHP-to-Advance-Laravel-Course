<?php
// Create a function that will return children, teenagers, young people, old people from the age
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

// Create a function that will return the area of a rectangle, square, triangle
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






// gpa GPA function for result publishing
function gpa($gpa){
    
    if ($gpa>=80 &&  $gpa<=100) {
           $age =  "Your grade for the course will be: A+"."<br>";
    } 
    
    if ($gpa>=70 &&  $gpa<=79) {
        $age = "Your grade for the course will be: A"."<br>";
            
    } 
    if ($gpa>=60 &&  $gpa<=69) {
        $age =  " Your grade for the course will be: A-"."<br>";
    } 
    
    if ($gpa>=50 &&  $gpa<=59) {
        $age= "Your grade for the course will be: B"."<br>";
    } 
    if ($gpa>=40 &&  $gpa<=49) {
        $age= "Your grade for the course will be: c "."<br>";
    } 
    if ($gpa<40) {
        $age= "Your grade for the course will be: F"."<br>";
    } 
    return $age;
}
echo gpa(30);
// Create an age calculator function

function getAge($date) { // Y-m-d format
    $now = explode("-", date('Y-m-d'));
    $dob = explode("-", $date);
    $dif = $now[0] - $dob[0];
    if ($dob[1] > $now[1]) { // birthday month has not hit this year
        $dif -= 1;
    }
    elseif ($dob[1] == $now[1]) { // birthday month is this month, check day
        if ($dob[2] > $now[2]) {
            $dif -= 1;
        }
        elseif ($dob[2] == $now[2]) { // Happy Birthday!
            $dif = $dif." Happy Birthday!";
        };
    };
    return $dif;
    
}

echo getAge('1988-10-10');


?>