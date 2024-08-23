<?php
if(isset($_post['insert'])){
    $title =$_POST['title'];
    $scription = $_POST['description']; 
    $icon = $_POST['icon'];

    if($title && $description && $icon){
    $scription = $_POST['description']; 
    $scription = $_POST['description']; 
       $query = "INSERT INTO services (title,description,icon) Values('$title';'$description';'$icon')"
    mysqli_query($db,$query);
    $_SESSION['service_insert'] = "Service Insert Successfull Complete";
    header('location: serces.php')
    }
}


?>