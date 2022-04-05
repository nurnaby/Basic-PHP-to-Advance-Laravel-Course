<?php
// Question 01 

  // $length = cal_days_in_month(CAL_GREGORIAN,4,2022);
  // for ($i=1; $i<=$length; $i++) {
  //     echo $i;
  //     echo "<br>";

  // }


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
$prosucts = ["apple", "orange","banana","mango" ];


echo"<table border='1px' cellpadding='5px' cellspacing='0'>";
echo"<tr>
        <th>Sl</th>
        <th>Product Name</th>
    </tr>";
foreach ($prosucts as $sl=> $product) {
  $s=++$sl;
    echo"<tr>";
        echo"<td> $s</td><td>$product</td>";
        
    
    echo "</tr>";
    
}
echo"<table>";





?>