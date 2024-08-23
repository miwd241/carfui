<?php
include '../../config/database.php';
session_start();


    
if  (isset($_POST['nameubtn'])){
$name = $_post['name'];
 
if($name){
    $id =$_SESSION['author_id'];
    $query = "UPDATE users SET name ='$name' $WHERE id ='$id'";
    mysqli_query($db,$query);
    $_SESSION['name_update'] = $name;  
    $_SESSION['name_update'] = 'name _update successsfull';
header('location: setting.php');
}

     else{
$_SESSION['name_error'] = 'name error';
header('location: setting.php');
     }   
    }

    if  (isset($_POST['passubtn'])){
       $oidpass  =$_POST['oldpass'];
       $newpass =$_POST['newpass'];
       $cpass =$_POST['cpass'];

        if($oldpass &&$newpass &&$cpass){
            $encypt =md5($oldpass);
            $id =$_SESSION['author_id'];
            $match_query = "SELECT COUNT(*) AS'match' FROM users WHERE id='$id' AND password='$encypt'";
           $connect =mysqli_query($db,$match_query);
            
           $match =mysqli_fetch_assoc($connect)['match'];
         
        
if($match ==1){
   if($newpass ==$cpass) {

    $new_encrypt = md5($newpass);
  $query = "UPDATE users SET password ='$new_encrypt' $WHERE id ='$id'";
     mysqli_query($db,$query);
     $_SESSION['pass_update'] = 'password_update successsfull';
     header('location: setting.php');


   }
else{
    $_SESSION['pass_error'] = 'pass aga milla';
        header('location: setting.php');
}


}else{
    $_SESSION['pass_error'] = 'pass match kora nai';
        header('location: setting.php');
}


           // $id =$_SESSION['author_id'];
           // $query = "UPDATE users SET name ='$name' $WHERE id ='$id'";
           // mysqli_query($db,$query);
           // $_SESSION['name_update'] = $name;  
           // $_SESSION['name_update'] = 'name _update successsfull';
           //header('location: setting.php');
        }
        
             else{
        $_SESSION['pass_error'] = 'pass error';
        header('location: setting.php');
             }   
            }
    

if(isset($_POST['imageubtn'])){
    $image = $_FILES['imge']['name'];
$tmp_path =$_FILES['imge']['tmp_name'];

if($image){

    $id = $_SESSION['author_id'];
    $name =$_SESSION['author_name'];
    $explode = explode('.',$image);
    $extention = end($explode);
    $new_name = $id ."-" .$name . "-" . date("d-m-y"). '.' . $extention;
$local_path = "../../public/uplodes/profile/".$new_name;
   if(move_uploaded_file($tmp_path,$local_path)){
    $query = "UPDATE users SET image ='$new_name' $WHERE id ='$id'";
    mysqli_query($db,$query);

    header('location: setting.php');


   }
   else{
    echo"kharap";
   }
}
       // if($name){
          //  $id =$_SESSION['author_id'];
          //  $query = "UPDATE users SET name ='$name' $WHERE id ='$id'";
          //  mysqli_query($db,$query);
          //  $_SESSION['name_update'] = $name;  
          //  $_SESSION['name_update'] = 'name _update successsfull';
       // header('location: setting.php');
      //  } else{
      //  $_SESSION['name_error'] = 'name error';
       // header('location: setting.php');
        //     }   
       //     }
 
}
?>
