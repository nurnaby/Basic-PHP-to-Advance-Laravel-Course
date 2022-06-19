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

 if(isset($_POST['updateBanner'])){
    $banner_id = $_POST['banner_id'];
    $title     = $_POST['title'];
    $sub_title = $_POST['sub_title'];
    $details   = $_POST['details'];
   
   if(empty($title)|| empty($sub_title)||empty($details)){
    echo 'All filed are required';

        }else{
            $updateQry= "UPDATE banner set title='{$title}', sub_title='{$sub_title}', details='{$details}' WHERE id='{$banner_id}'";

        // $insertquery= "INSERT INTO banner(title,sub_title,details) VALUES ('{$title}','{$sub_title}','{$details}')";
        $issubmit=mysqli_query($dbcon,$updateQry);
        if($issubmit){
            $message= 'banner update succesful';
        }else{
            $message= 'update failed';
        }
       

        }
        header("Location:../banner/bannerUpdate.php?banner_id={$banner_id}&msg={$message}");
 }

?>