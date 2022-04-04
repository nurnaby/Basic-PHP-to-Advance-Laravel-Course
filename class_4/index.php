<?php
// Question 01 

  $length = cal_days_in_month(CAL_GREGORIAN,4,2022);
  for ($i=0; $i<=$length; $i++) {
      echo $i;
      echo "<br>";

  }


// Question 02: 
// print out only the odd  number within 1-100 use for loop
// for ($i=1; $i<=100; $i++ ) {
//         if($i%2!==0){
//             echo $i." "."odd number";
//             echo "<br>";
//         }
// }


// Question 04: 
// Print out from 100 - 1 using a while loop 

// $x = 100;
 
// while ($x >=1) {
//   echo "The number is: $x <br>";
//   $x--;
// }


// $day = cal_days_in_month(CAL_GREGORIAN, 4, 2022);
// echo $day;


// Question 05: 
// $prosucts = ["apple", "orange","banana","mango" ];
// foreach ($prosucts as $product) {
    
//     echo $product;
    
// }





?>