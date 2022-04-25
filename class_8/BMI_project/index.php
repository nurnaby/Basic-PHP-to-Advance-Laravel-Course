<?php
$errh = $errw = "";
$height = $weight = "";
$bmipss="";
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(empty($_POST['height'])){
        $errh= "<span style='color:red; font-size:17px; display:block'>Height is requried </span>";
    }else{
        $height =validation( $_POST['height']);
        
    }
    if(empty($_POST['weight'])){
        $errw= "<span style='color:red; font-size:17px; display:block'>weight is requried </span>";
    }else{
        $weight =validation( $_POST['weight']);
        
    }
    if(empty($_POST['height'] && $_POST['weight'])){
        echo "";
    }else{
        $bmi = ($weight/($height*$height));
        $bmipss = $bmi;
    }
}

function validation($data){
    $data = trim($data);
    $data =stripslashes($data);
    $data =htmlspecialchars($data);
    return $data;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <form action="" method="post">
            <div class="haeding">
                <h2>Check Your BMI</h2>
            </div>
            <div class="section1">
                <span>Enter your Height:</span>
                <input type="text" placeholder="Miter" name="height">
                <span><?php  echo $errh  ?></span>
            </div>
            <div class="section2">
                <span>Enter your Weight:</span>
                <input type="text" placeholder="kilogram" name="weight">
                <span><?php  echo $errw  ?></span>
            </div>
            <div class="section3">
                <input type="submit" name="submit" value="Check BMI">
                <input type="reset" value="clear">
            </div>
            <br><br>
            <?php
        error_reporting(0);
        echo "<span style='color:#12CBC4; display:block'> Your BMI:" .number_format($bmipss,2)."</span>";
        if(isset($_POST['submit'])){
            if($bmipss>=13.6 && $bmipss<=18.5){
                echo "<span style= 'color:red; display:block; margin-top:5px; margin-right:50px'>Low body weight .you need to gain weight by eating moderately .</span>";
            }elseif($bmipss>18.5 && $bmipss<=24.9){

                echo "<span style= 'color:red; display:block; margin-top:5px; margin-right:50px'>The standard of good health .</span>";
            }elseif($bmipss>25 && $bmipss<=29.9){

                echo "<span style= 'color:red; display:block; margin-top:5px; margin-right:50px'>Exercise needs to reduce excess weight .</span>";
            }
            elseif($bmipss>30 && $bmipss<=34.9){

                echo "<span style= 'color:red; display:block; margin-top:5px; margin-right:50px'>The frist stage of obesity.It is necessary to choose food and exercise .</span>";
            } elseif($bmipss>35 && $bmipss<=39.9){

                echo "<span style= 'color:red; display:block; margin-top:5px; margin-right:50px'>The second  stage of obsesity.Mmoderate diet and exercise are required  .</span>";
            } elseif($bmipss>=40){

                echo "<span style= 'color:red; display:block; margin-top:5px; margin-right:50px'>Fear of death need a doctor advice.</span>";
            }else{
                echo "";
            }
        }
        
        ?>
        </form>





    </div>


</body>

</html>