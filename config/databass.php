<?php
 $db = mysqli_connect("localhost","root","","carfui");
if(!$db){
    header('location:../error/ 404.php');
}


?>