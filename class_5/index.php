<?php
// Question 01: 

  $number1 = array(12,34,2,6,78); //indexed array

  foreach ($number1 as $val){
    $n =2;
    if($n%$val==0){
      echo $val."prime number "."<br>";
    }else{
      echo $val."not prime number"."<br>";
    }
  }


// Question 02: 
$smart_phones =["realme phone","samsung phone","oppo phone","vivo phone","tecno phone","nekia phone"];// indexed array 



// Question 03: 

$numbers =[0,10,80,67,60,89,91,56,45,30,95,83,99];
    $max = 0;

    foreach($numbers as $number) {
        if($max < $number)
            $max = $number;
    }  
    echo "<b>maximum value:</b> ".$max."<br>";


// Question 04: 
$numbers = array(0,10,80,67,60,89,91,56,45,30,95,83,99);

foreach ($numbers as $key => $val ) {
    if($key==0){
       echo "<b>0 index:<b>". $val."<br>";
    }
    if($key==1){
        continue;
    }
    if($key==2){
        echo "<b>2 index:<b>".$val. "<br>";
    }
    if($key==3){
        continue;
    }
    if($key==4){
        echo "<b>4 index:<b>".$val. "<br>";
    }
    if($key==5){
        continue;
    }
    if($key==6){
        echo "<b>6 index:<b>".$val. "<br>";
    }
    if($key==7){
        continue;
    }
    if($key==8){
        echo "<b>8 index:<b>".$val. "<br>";
    }
    if($key==9){
        continue;
    }
    if($key==10){
        echo "<b>10 index:<b>".$val. "<br>";
    }
    if($key==11){
        continue;
    }
    if($key==12){
        echo "<b>12 index:<b>".$val. "<br>";
    }
      
}


?>