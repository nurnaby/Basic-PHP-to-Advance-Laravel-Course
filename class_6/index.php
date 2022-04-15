<?php
$purchased_products = array(

    array('name' => 'banana',  'qty' => 10, 'total_price' => 550),

    array('name' => 'apple',     'qty' => 50,  'total_price' => 1500),

    array('name' => 'orange',  'qty' => 7,    'total_price' => 600),

);
$total_amount = array_sum(array_column($purchased_products, 'total_price'));
$total_qut = array_sum(array_column($purchased_products, 'qty'));
echo "Total amount: ".$total_amount."tk"."<br>";
echo "Total purchased qty:".$total_qut;



// $new=0;
// foreach ($purchased_products as $value){
//     // echo "<pre>";
//     // print_r($value['total_price']);
//     // echo "</pre>";
// //    echo  $total =$value['total_price'];
// //    echo "<br>";
   
   
//     foreach($value as $key => $val){
//         echo $val['total_price'];
        
//     }
// }
// echo $new;


// Question 02: 
$first_email_array = ["abc@gmail.com", "xyz@gmail.com", "demo@gmail.com"]; 

$second_email_array = ["efg@gmail.com", "xyz@gmail.com", "dummy@gmail.com"];

$array = array_unique(array_merge($first_email_array, $second_email_array));


echo "<pre>";
print_r($array);
echo "</pre>";








?>