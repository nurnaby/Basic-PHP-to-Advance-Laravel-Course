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

// // Question 02: 
// $first_email_array = ["abc@gmail.com", "xyz@gmail.com", "demo@gmail.com"]; 
// $second_email_array = ["efg@gmail.com", "xyz@gmail.com", "dummy@gmail.com"];
// $array = array_unique(array_merge($first_email_array, $second_email_array));

// echo "<pre>";
// print_r($array);
// echo "</pre>";

// // Question 03:

// $citylist = array( "Black Canyon City", "Chandler", "Flagstaff", "Gilbert", "Glendale", "Globe", "Mesa", "Miami", "Phoenix", "Peoria", "Prescott", "Scottsdale", "Sun City", "Surprise", "Tempe", "Tucson", "Wickenburg" );



// print_r($citylist);



?>