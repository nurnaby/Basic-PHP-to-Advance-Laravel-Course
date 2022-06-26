<?php
require 'bdconfig.php';
// This for insert 

 if(isset($_POST['saveProject'])){
    $upload_status= false;
    if(isset(($_FILES['project_thumb']))){
       
        $imgArray = $_FILES['project_thumb'];

        $file_name     = $imgArray['name'];
        $file_tmp_name = $imgArray['tmp_name'];
        $file_size     = $imgArray['size'];

        $nameExtArr       = explode('.',$file_name);
        $file_extension   = strtolower(end($nameExtArr));
        $valid_extentions = array('jpg','png','jpeg');
        $random_file_name = time().'.'.$file_extension;

        if(in_array($file_extension,$valid_extentions)){
            
            move_uploaded_file($file_tmp_name,'../uploads/'.$random_file_name);
            $upload_status= true;

          
        }else{
           $message= $file_extension."is not supported";
        }
    }else{
       $message= "file not found";
    }
    
    $category_id     = $_POST['category_id'];
    $project_name     = $_POST['project_name'];
    $project_link = $_POST['project_link'];
    
   
   if(empty($project_name)|| empty($project_link)||$upload_status == false){
    echo 'All filed are required';

        }else{
        $insertquery= "INSERT INTO our_projects(category_id,project_name,project_link,project_thumb) VALUES ('{$category_id}', '{$project_name}','{$project_link}','{$random_file_name}')";
        $issubmit=mysqli_query($dbcon,$insertquery);
        if($issubmit){
            $message= 'project insert succesful';
        }else{
            $message= 'project insert failed';
        }
        header("Location:../projectCreat.php?msg={$message}");

        }
 }
//  This for update 

 if(isset($_POST['UpdateBanner'])){
    $upload_status= false;
    if(isset(($_FILES['images']))){
       
        $imgArray = $_FILES['images'];

        $file_name     = $imgArray['name'];
        $file_tmp_name = $imgArray['tmp_name'];
        $file_size     = $imgArray['size'];

        $nameExtArr       = explode('.',$file_name);
        $file_extension   = strtolower(end($nameExtArr));
        $valid_extentions = array('jpg','png','jpeg');
        $random_file_name = time().'.'.$file_extension;

        if(in_array($file_extension,$valid_extentions)){
            
            move_uploaded_file($file_tmp_name,'../uploads/'.$random_file_name);
            $upload_status= true;

          
        }else{
           $message= $file_extension."is not supported";
        }
    }else{
       $message= "file not found";
    }
    
    $title     = $_POST['title'];
    $sub_title = $_POST['sub_title'];
    $details   = $_POST['details'];
    
   
   if(empty($title)|| empty($sub_title)||empty($details)||$upload_status == false){
    echo 'All filed are required';

        }else{
        $insertquery= "INSERT INTO banners(title,sub_title,details,images) VALUES ('{$title}','{$sub_title}','{$details}','{$random_file_name}')";
        $issubmit=mysqli_query($dbcon,$insertquery);
        if($issubmit){
            $message= 'banner insert succesful';
        }else{
            $message= 'insert failed';
        }
        header("Location:../bannerCreat.php?msg={$message}");

        }
 }

 

?>