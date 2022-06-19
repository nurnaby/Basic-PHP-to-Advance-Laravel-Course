<?php
require 'bdconfig.php';

 if(isset($_POST['saveBanner'])){
    $title     = $_POST['title'];
    $sub_title = $_POST['sub_title'];
    $details   = $_POST['details'];
   
   if(empty($title)|| empty($sub_title)||empty($details)){
    echo 'All filed are required';

        }else{
        $insertquery= "INSERT INTO banner(title,sub_title,details) VALUES ('{$title}','{$sub_title}','{$details}')";
        $issubmit=mysqli_query($dbcon,$insertquery);
        if($issubmit){
            $message= 'banner insert succesful';
        }else{
            $message= 'insert failed';
        }
        header("Location:../banner/bannerCreat.php?msg={$message}");

        }
 }

?>