<?php
require 'bdconfig.php';
// This for insert 

 if(isset($_POST['saveClient'])){
    $upload_status= false;
    if(isset(($_FILES['client_image']))){
       
        $imgArray = $_FILES['client_image'];

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
    
    $clients_name   = $_POST['clients_name'];
    $designation_id = $_POST['designation_id'];
    $client_review  = $_POST['client_review'];
    
   
   if(empty($clients_name)|| empty($client_review)||$upload_status == false){
    echo 'All filed are required';

        }else{
        $insertquery= "INSERT INTO our_clients(designation_id,clients_name,client_review,client_image) VALUES ('{$designation_id}', '{$clients_name}','{$client_review}','{$random_file_name}')";
        $issubmit=mysqli_query($dbcon,$insertquery);
        if($issubmit){
            $message= 'clients insert succesful';
        }else{
            $message= 'clients insert failed';
        }
        header("Location:../ClientsCreat.php?msg={$message}");

        }
 }
//  This for update 

//  if(isset($_POST['updateProject'])){
//     // get old image name 
//      $project_id = $_POST['project_id'];
    
//     $getSinglDataQry = "SELECT * FROM our_projects WHERE id='{$project_id}'";
//     $getResult = mysqli_query($dbcon,$getSinglDataQry);
//     $oldImg = '';
//     foreach($getResult as $key => $project){
//          $oldImg = $project['client_image'];
        
//     }
//     // End get old image name


//     $upload_status= false;
//     if(isset(($_FILES['client_image']))){
       
//         $imgArray = $_FILES['client_image'];

//         $file_name     = $imgArray['name'];
//         $file_tmp_name = $imgArray['tmp_name'];
//         $file_size     = $imgArray['size'];

//         $nameExtArr       = explode('.',$file_name);
//         $file_extension   = strtolower(end($nameExtArr));
//         $valid_extentions = array('jpg','png','jpeg');
//         $random_file_name = time().'.'.$file_extension;

//         if($random_file_name!=$oldImg){ //when new image does not match with old image 
//             //file remove
//             $file ='../uploads/'.$oldImg;
//             if(file_exists($file)){
//                 unlink($file); 
//             }
//             //End file remove
//             // file update
//             if(in_array($file_extension,$valid_extentions)){
            
//                 move_uploaded_file($file_tmp_name,'../uploads/'.$random_file_name);
//                 $upload_status= true;
    
              
//             }else{
//                $message= $file_extension."is not supported";
//             }
//         }
       
//     }else{
//        $message= "file not found";
//     }
    
//     $designation_id  = $_POST['designation_id'];
//     $clients_name = $_POST['clients_name'];
//     $client_review = $_POST['client_review'];
    
   
//    if(empty($designation_id)|| empty($clients_name)||empty($client_review)||$upload_status == false){
//     echo 'All filed are required';

//         }else{
//             $updatequery= "UPDATE our_projects SET designation_id='{$designation_id}',clients_name='{$clients_name}',client_review='{$client_review}',client_image='{$random_file_name}' WHERE id='{$project_id}'";
//             $issubmit=mysqli_query($dbcon,$updatequery);

//         // $insertquery= "INSERT INTO banners(title,sub_title,details,images) VALUES ('{$title}','{$sub_title}','{$details}','{$random_file_name}')";
//         // $issubmit=mysqli_query($dbcon,$insertquery);

//         if($issubmit){
//             $message= 'project update succesful';
//         }else{
//             $message= 'insert failed';
//         }
//         header("Location:../project_list.php?msg={$message}");

//         }
//  }

 

?>