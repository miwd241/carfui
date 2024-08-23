<?php  
include "../config/databass.php";


session_start();
//register page start

if(isset($_POST['register']))
{
   //echo"I GOod boy";
               
    $name = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $c_password = $_POST['c_password']; 

    $flag = false;
   $name_regex='/^(?! $)[a-zA-Z ]*$/';
   $email_regex = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
$password_regex_upper = '/^(?=.*?[A-Z])/';
$password_regex_lower = '/^(?=.*?[a-z  ])/';
$password_regex_number = '/^(?=.*?[0-9])/';
$password_regex_char = '/^(?=.*?[A-Z])/';
$password_regex_length = '/^.{8,}/'; 
$password_regex = '/^(?=.*?[A-Z])(?=.*?[a-z](?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}/';

    if(!$name){$flag = true;
        $_SESSION['name_error']="name field is required!!";
        header("location:register.php"); 
    }else if(!preg_match($name_regex,$name)){$flag = true;
        $_SESSION['name_error']="name field is invalid!!";
        header("location:register.php"); 
    }

    else{
        $_SESSION['old_name'] = $name;
        header("location:register.php"); 
    }
 

    if(!$email){
        $flage =true;
        $_SESSION['email_error']="email field is required!!";
        header("location:register.php"); 
    }else if(!preg_match($email_regex,$email)){$flag = true;
        $_SESSION['email_error']="email field is invalid!!";
        header("location:register.php"); 
    }
    else{
        $_SESSION['old_email'] = $email;
        header("location:register.php"); 
    }

    
    if(!$password){$flag = true;
        $_SESSION['password_error']="password field is required!!";
        header("location:register.php");    
    }
else if(!preg_match($password_regex_upper,$password)){
    $_SESSION['password_error']="password at least one upper case!!";
    header("location:register.php"); 
}
else if(!preg_match($password_regex_lower,$password)){$flag = true;
    $_SESSION['password_error']="password at least one lower case!!";
    header("location:register.php"); }
    else if(!preg_match($password_regex_number,$password)){$flag = true;
        $_SESSION['password_error']="password at least one numbae character!!";
        header("location:register.php"); 
    }
    else if(!preg_match($password_regex_char,$password)){$flag = true;
        $_SESSION['password_error']="password at least one pecial character!!";
        header("location:register.php"); }
        else if(!preg_match($password_regex_length,$password)){$flag = true;
            $_SESSION['password_error']="password at least minimum eight in length!!";
            header("location:register.php"); 
        }
        else{
            $_SESSION['old_password'] = $password;
            header("location:register.php"); 
        }


    if(!$c_password){$flag = true;
        $_SESSION['c_password_error']="c_passwword field is required!!";
        header("location:register.php"); 
    }
else if($c_password !=$password){$flag = true;
    $_SESSION['c_password_error']="paaword && confirmation password donot match !!";
    header("location:register.php");
}


 if($flag == false){
   
    $encrypt = md5($password);
    $create_query = "INSERT INTO users (name,email,password) VALUES ('$name','$email','$encrypt')";
    mysqli_query($db,$create_query);
    $_SESSION['register_completa'] = "Registration Complete";
    $_SESSION['register_name']= "$name";
     $_SESSION['register_email']= "$email";

    header("location: login.php");
 }

}




//register page end

//login page start
if(isset($_POST["loginbtn"])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $flag = false;
    $email_regex = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
    $password_regex_upper = '/^(?=.*?[A-Z])/';
    $password_regex_lower = '/^(?=.*?[a-z  ])/';
    $password_regex_number = '/^(?=.*?[0-9])/';
    $password_regex_char = '/^(?=.*?[A-Z])/';
    $password_regex_length = '/^.{8,}/'; 
    $password_regex = '/^(?=.*?[A-Z])(?=.*?[a-z](?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}/';

    if(!$email){
        $flage =true;
        $_SESSION['email_error']="email field is required!!";
        header("location:register.php"); 
    }else if(!preg_match($email_regex,$email)){$flag = true;
        $_SESSION['email_error']="email field is invalid!!";
        header("location:register.php"); 
    }
    else{
        $_SESSION['old_email'] = $email;
        header("location:register.php"); 
    }

    
    if(!$password){$flag = true;
        $_SESSION['password_error']="password field is required!!";
        header("location:login.php");    
    }
else if(!preg_match($password_regex_upper,$password)){
    $_SESSION['password_error']="password at least one upper case!!";
    header("location:login.php"); 
}
else if(!preg_match($password_regex_lower,$password)){$flag = true;
    $_SESSION['password_error']="password at least one lower case!!";
    header("location:login.php"); }
    else if(!preg_match($password_regex_number,$password)){$flag = true;
        $_SESSION['password_error']="password at least one numbae character!!";
        header("location:login.php"); 
    }
    else if(!preg_match($password_regex_char,$password)){$flag = true;
        $_SESSION['password_error']="password at least one pecial character!!";
        header("location:login.php"); }
        else if(!preg_match($password_regex_length,$password)){$flag = true;
            $_SESSION['password_error']="password at least minimum eight in length!!";
            header("location:login.php"); 
}


if(!$flag)
{
  $encrypt = md5($password);
  $query = "SELECT COUNT(*) AS'validate' FROM user WHERE email='$email'AND password='$encrypt'";
  $connect = mysqli_query($db,$query);
  $result=mysqli_fetch_assoc($connect);

  if($result['validate'] == 1){
    $query = "SELECT * FROM user WHERE email='$email'";
    $connect = mysqli_query($db,$query);
    $author=mysqli_fetch_assoc($connect);
    $_SESSION['author_id'] = $author['id'];
    $_SESSION['author_name'] = $author['name'];
    $_SESSION['temp_name'] = $author['name'];
    $_SESSION['author_email'] = $author['email'];
    header('location: ../backend/home/home.php');
  }


    else{
        $_SESSION['login_unsuccess'] = "credential dosnot match!!";
        header("location:login.php");
    }
  

}
}

?>
